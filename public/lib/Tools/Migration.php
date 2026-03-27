<?php

namespace Main\Tools;

use Main\Core\Enum\Database\MigrateType;
use Main\Core\Interfaces\HasMap;
use PDO;
use Psr\Log\LoggerInterface;

class Migration
{
    private PDO $db;
    private LoggerInterface $logger;

    public function __construct(
        private array        $params,
        private HasMap       $table,
        private MigrateType  $defalutType,
        private ?MigrateType $rollbackType = null,
    )
    {
        $this->db = Database::getInstance()->connect();
        $this->logger = Logger::getInstance('migration');
    }

    public function createTable()
    {
        $map = $this->table->map();
        $lastField = array_key_last($map);
        $queryStr = '';
        foreach ($map as $field => $type) {
            $del = $lastField === $field ? '' : ',';
            $queryStr .= $field . ' ' . $type . $del;
        }

        $strQuery = "CREATE TABLE IF NOT EXISTS \"{$this->table->getTableName()}\" ({$queryStr})";

        if (false === $this->db->exec($strQuery)) {
            $this->logger->error("Ошибка создания {$this->table->getTableName()} или таблица уже существует");
            return false;
        }

        return true;
    }

    public function addIndex(
        array   $fields,
        ?string $indexName = null,
        ?string $type = null,
        ?string $additional = null
    )
    {
        $indexName = $indexName ?? $this->table->getTableName() . '_' . implode('_', $fields);
        $strFields = implode(', ', $fields);

        $strQuery = $type ? "CREATE {$type} INDEX " : "CREATE INDEX ";
        $strQuery .= "{$indexName} ON \"{$this->table->getTableName()}\" ({$strFields}) ";

        if ($additional) {
            $strQuery .= $additional;
        }

        if (false === $this->db->exec($strQuery)) {
            $this->logger->error("Ошибка создания индекса {$indexName}");
            return false;
        }

        return true;
    }

    public function dropIndex(string $indexName)
    {
        if (false === $this->db->exec("DROP INDEX {$indexName}")) {
            $this->logger->error("Ошибка удаления индекса {$indexName}");
            return false;
        }

        return true;
    }

    public function dropTable(): bool
    {
        if (false === $this->db->exec("DROP TABLE IF EXISTS \"{$this->table->getTableName()}\"")) {
            $this->logger->error("Ошибка удаления {$this->table->getTableName()} или таблицы уже не существует");
            return false;
        }

        return true;
    }

    public function run()
    {
        if (isset($this->params[1]) && $this->params[1] === 'down') {
            $funcName = $this->rollbackType->value;
        } else {
            $funcName = $this->defalutType->value;
        }

        $res = $this->$funcName();

        printf('<br>Операция %s прошла %s', $funcName, $res ? ' успешно ' : ' с ошибкой ');

        return $res;
    }
}