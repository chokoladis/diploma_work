<?php

namespace Main\Tools;

use Main\Core\Interfaces\HasMap;

class Migration
{
    private \PDO $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->connect();
    }

    public function createTable(HasMap $table)
    {
        $map = $table->map();
        $lastField = array_key_last($map);
        $queryStr = '';
        foreach ($table->map() as $field => $type) {
            $del = $lastField ? '' : ',';
            $queryStr .= $field.' '.$type.$del;
        }

        $query = $this->db->prepare("CREATE TABLE IF NOT EXISTS ? (?)");

        if (!$query->execute([$table->getTableName(), $queryStr])) {
            Logger::getInstance('migration')->error("Failed to create table {$table->getTableName()}");
            return false;
        }

        return true;
    }
}