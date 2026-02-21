<?php

namespace Main\Models;

use Main\Core\Interfaces\HasMap;
use Main\Tools\Database;

// interface entity ?
abstract class Model implements HasMap
{
    const int DEFAULT_LIMIT = 10;

    private \PDO $db;
    abstract public function map(): array;

    public function __construct(
        protected string $tableName = ''
    )
    {
        $tableName = $tablename ?? get_called_class();

        if (strpos($tableName, '/') !== false) {
            $namespace = explode('/', $tableName);
            $this->tableName = $namespace[array_key_last($namespace)];
        } elseif (strpos($tableName, '\\') !== false) {
            $namespace = explode('\\', $tableName);
            $this->tableName = $namespace[array_key_last($namespace)];
        } else {
            $this->tableName = $tableName;
        }

        $this->db = Database::getInstance()->connect();
    }

    public function getTableName()
    {
        return $this->tableName;
    }


    public function create()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }

//    todo by builder
    public function getByPrimary(string $key)
    {
        $primaryKey = null;
        foreach ($this->map() as $name => $value) {
            if (stripos($value, 'SERIAL') !== false) {
                $primaryKey = $name;
                break;
            }
        }

        $queryStc = "SELECT * FROM {$this->tableName}
            WHERE {$primaryKey} = :value
            LIMIT 1";

        $query = $this->db->query($queryStc);
        $query->bindValue(':value', $key);

        return $query->fetch() ?? null;
    }

    //    todo by builder
    public function getList(array $params = [])
    {
        [$columns, $filters, $pagination, $sort] = $this->prepareParams($params);
        $queryStr = "SELECT {$columns} FROM {$this->tableName}";
        if (!empty($filters)) {
            $queryStr .= " WHERE ".$filters;
        }
        if (!empty($pagination)) {
            $queryStr .= $pagination;
        }

        return $this->db->query($queryStr); //$query->fetchAll(); or $query->fetch();
    }

    public function prepareParams(array $params): array
    {
        $filters = $sort = '';
        $columns = isset($params['select']) && is_array($params['select']) ? implode(',', $params['select']) : '*';

        foreach ($params['filters'] as $key => $value) {
            $filters .= $key . ' =: ' . $key . ' AND ';
        }
        foreach ($params['filters_raw'] as $value) {
            $filters .= $value;
        }

        if (stripos(substr($filters, 0, -4) , 'AND') !== false) {
            $filters = substr($filters, 0, strlen($filters) - 4);
        }

        // todo
        $pagination = ' LIMIT '.static::DEFAULT_LIMIT;

        return [$columns, $filters, $pagination, $sort];
    }

}