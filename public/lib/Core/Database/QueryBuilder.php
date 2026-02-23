<?php

namespace Main\Core\Database;

use Main\Core\Interfaces\HasMap;
use Main\Core\Requests\SQLRequest;
use Main\Core\Secure\StringSecure;
use Main\Tools\Database;
use PDO;

class QueryBuilder
{
    const string LOGICAL_AND = 'AND';
    const string LOGICAL_OR = 'OR';

    const int DEFAULT_LIMIT = 10;
    const int MAX_LIMIT = 100;


    private \PDO $db;
    private SQLRequest $sql;
    protected bool $isWhereUsed = false;

    public function __construct(
        protected HasMap $model
    )
    {
        $this->db = Database::getInstance()->connect();

        $this->sql = new SQLRequest(
            select: "SELECT * FROM {$this->model->getTableName()}",
            pagination: 'LIMIT '.self::DEFAULT_LIMIT
        );
    }

    protected function queryWhere(string $key, string $strQuery, array $params = [])
    {
        if (isset($params['LOGICAL_SEPARATOR'])
            && !in_array($params['LOGICAL_SEPARATOR'], [self::LOGICAL_AND, self::LOGICAL_OR])) {
            throw new \Exception('Invalid LOGICAL statement');
        }

        if ($this->isWhereUsed) {
            $logicSeparator = $params['LOGICAL_SEPARATOR'] ?? self::LOGICAL_OR;
            $key = $logicSeparator.' '.$key;
        } else {
            $this->isWhereUsed = true;
        }

        $this->sql->addWhere($key.' '.StringSecure::get($strQuery));
        return $this;
    }

    public function where(string $column, mixed $value, string $operator = '=')
    {
        $strQuery = $column.' '.$operator.' '.$value;
        return $this->queryWhere('WHERE', $strQuery);
    }

    public function andWhere(string $column, mixed $value, string $operator = '=')
    {
        $strQuery = $column.' '.$operator.' '.$value;
        return $this->queryWhere('WHERE', $strQuery, ['LOGICAL_SEPARATOR' => self::LOGICAL_AND]);
    }

    public function whereNot(string $column, mixed $value, string $operator = '=')
    {
        $strQuery = $column.' '.$operator.' '.$value;
        return $this->queryWhere('WHERE NOT', $strQuery);
    }

    public function andWhereNot(string $column, mixed $value, string $operator = '=')
    {
        $strQuery = $column.' '.$operator.' '.$value;
        return $this->queryWhere('WHERE NOT', $strQuery, ['LOGICAL_SEPARATOR' => self::LOGICAL_AND]);
    }

    public function select(array $columns, array $params = [])
    {
        if (empty($columns)) {
            throw new \Exception('Empty columns');
        }

        if (count($columns) === 1) {
            $strColumn = current($columns);
        } else {
            $strColumn = implode(', ', $columns);
        }

        $this->sql->setSelect("SELECT {$strColumn} FROM {$this->model->getTableName()}");
        return $this;
    }

    /* get one by primary key */
    public function getOne(string|int $primaryKey, array $columns = ['*'])
    {
        $primaryField = null;
        foreach ($this->model->map() as $name => $value) {
            if (stripos($value, 'SERIAL') !== false) {
                $primaryField = $name;
                break;
            }
        }

        if ((is_int($primaryKey) && $primaryKey < 1)
            || (is_string($primaryKey) && strlen($primaryKey) < 1)) {
            throw new \Exception('Invalid primary key');
        }

        $this->select($columns)
            ->where($primaryField, '=', $primaryKey)
            ->limit(1);

        $query = $this->db->query($this->sql->toString(), PDO::FETCH_OBJ);
        return $query->fetch() ?? null;
    }

//    public function getList(array $params = [])
//    {
//        [$columns, $filters, $pagination, $sort] = $this->prepareParams($params);
//        $queryStr = "SELECT {$columns} FROM {$this->tableName}";
//        if (!empty($filters)) {
//            $queryStr .= " WHERE ".$filters;
//        }
//        if (!empty($pagination)) {
//            $queryStr .= $pagination;
//        }
//
//        return $this->db->query($queryStr); //$query->fetchAll(); or $query->fetch();
//    }

//    public function prepareParams(array $params): array
//    {
//        $filters = $sort = '';
//        $columns = isset($params['select']) && is_array($params['select']) ? implode(',', $params['select']) : '*';
//
//        foreach ($params['filters'] as $key => $value) {
//            $filters .= $key . ' =: ' . $key . ' AND ';
//        }
//        foreach ($params['filters_raw'] as $value) {
//            $filters .= $value;
//        }
//
//        if (stripos(substr($filters, 0, -4) , 'AND') !== false) {
//            $filters = substr($filters, 0, strlen($filters) - 4);
//        }
//
//        // todo
//        $pagination = ' LIMIT '.static::DEFAULT_LIMIT;
//
//        return [$columns, $filters, $pagination, $sort];
//    }

    public function limit(int $limit)
    {
        if ($limit < 1 || $limit > self::MAX_LIMIT) {
            throw new \Exception('Лимит за рамками достутимого диапозона');
        }

        $this->sql->setPagination("LIMIT {$limit}");
        return $this;
    }

    public function getResult()
    {
        return $this->db->query($this->sql->toString(), PDO::FETCH_CLASS, get_class($this->model));
    }
}