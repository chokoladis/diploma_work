<?php

namespace Main\Tools;

use Main\Core\Enum\Database\MigrateType;
use Main\Core\Interfaces\HasMap;

class Migration
{
    private \PDO $db;
    private \Psr\Log\LoggerInterface $logger;

    public function __construct(
        private array $params,
        private MigrateType $defalutType,
        private ?MigrateType $rollbackType = null,
    )
    {
        $this->db = Database::getInstance()->connect();
        $this->logger = Logger::getInstance('migration');
    }

    public function createTable(HasMap $table)
    {
        $map = $table->map();
        $lastField = array_key_last($map);
        $queryStr = '';
        foreach ($table->map() as $field => $type) {
            $del = $lastField === $field ? '' : ',';
            $queryStr .= $field.' '.$type.$del;
        }

        $strQuery = "CREATE TABLE IF NOT EXISTS \"{$table->getTableName()}\" ({$queryStr})";

        if (!$this->db->exec($strQuery)) {
            $this->logger->error("Ошибка создания {$table->getTableName()} или таблица уже существует");
            return false;
        }

        return true;
    }

    public function addIndex(HasMap $table, array $fields, ?string $indexName = null, ?string $type = null)
    {
        $indexName = $indexName ?? $table->getTableName().'_'.implode('_', $fields);
        $strFields = implode(', ', $fields);

        if ($type) {
            $strQuery = "CREATE {$type} INDEX ";
        } else {
            $strQuery = "CREATE INDEX ";
        }
        $strQuery .= "{$indexName} ON \"{$table->getTableName()}\" ({$strFields})";

        if (!$this->db->query($strQuery)->execute()) {
            $this->logger->error("Ошибка создания индекса {$indexName}");
            return false;
        }

        return true;
    }

    public function dropTable(HasMap $table)
    {
        if (!$this->db->query("DROP TABLE IF EXISTS \"{$table->getTableName()}\"")->execute()) {
            $this->logger->error("Ошибка удаления {$table->getTableName()} или таблицы уже не существует");
            return false;
        }

        return true;
    }

    public function run(HasMap $table)
    {
        if (isset($this->params[1]) && $this->params[1] === 'down') {
            $funcName = $this->rollbackType->value;
        } else {
            $funcName = $this->defalutType->value;
        }

        return $this->$funcName($table);
    }
}