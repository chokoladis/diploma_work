<?php

namespace Main\Core\Database;

use Main\Core\Interfaces\HasMap;
use Main\Core\Requests\SQLRequest;
use Main\Core\Secure\StrSecure;
use Main\DTO\Tools\CacheDTO;
use Main\Exceptions\AddRowToTableException;
use Main\Exceptions\IncorrectColumnsAddException;
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
    private ?CacheDTO $cache = null;
    private bool $isWhereUsed = false;
    private array $params = [];

    public function __construct(
        protected HasMap $model
    )
    {
        $this->db = Database::getInstance()->connect();

        $tableName = $this->model->getTableName();
        $this->sql = new SQLRequest(
            select: "SELECT * FROM \"{$tableName}\"",
            pagination: 'LIMIT '.self::DEFAULT_LIMIT
        );
    }

    public function __call($name, $arguments) {
        if (stripos($name, 'where') !== false) {
            if (isset($arguments[1]) && is_string($arguments[1])) {
                $arguments[1] = StrSecure::get($arguments[1]);
            }
        }

        if (method_exists($this, $name)) {
            return call_user_func_array([$this, $name], $arguments);
        }
        throw new \BadMethodCallException("Метод $name не найден");
    }

    protected function queryWhere(string $column, mixed $value, string $operator = '=', array $params = [])
    {
        $this->params[] = $value;

        $strQuery = "{$column} {$operator} ?";

        if (isset($params['LOGICAL_SEPARATOR'])
            && !in_array($params['LOGICAL_SEPARATOR'], [self::LOGICAL_AND, self::LOGICAL_OR])) {
            throw new \Exception('Invalid LOGICAL statement');
        }

        $key = 'WHERE';
        if ($this->isWhereUsed) {
            $logicSeparator = $params['LOGICAL_SEPARATOR'] ?? self::LOGICAL_OR;
            $key = ' '.$logicSeparator;
        } else {
            $this->isWhereUsed = true;
        }

        if (isset($params['NEGATIVE']) && $params['NEGATIVE'] === true) {
            $key = $key . ' NOT';
        }

        $this->sql->addWhere($key.' '.$strQuery);
        return $this;
    }

    protected function where(string $column, mixed $value, string $operator = '=')
    {
        return $this->queryWhere($column, $value, $operator);
    }

    protected function andWhere(string $column, mixed $value, string $operator = '=')
    {
        return $this->queryWhere($column, $value, $operator, ['LOGICAL_SEPARATOR' => self::LOGICAL_AND]);
    }

    protected function whereNot(string $column, mixed $value, string $operator = '=')
    {
        return $this->queryWhere($column, $value, $operator, ['NEGATIVE' => true]);
    }

    protected function andWhereNot(string $column, mixed $value, string $operator = '=')
    {
        return $this->queryWhere($column, $value, $operator, ['LOGICAL_SEPARATOR' => self::LOGICAL_AND, 'NEGATIVE' => true]);
    }

    public function select(array $columns)
    {
        if (empty($columns)) {
            throw new \Exception('Empty columns');
        }

        if (count($columns) === 1) {
            $strColumn = current($columns);
        } else {
            $strColumn = implode(', ', $columns);
        }

        $tableName = $this->model->getTableName();
        $this->sql->setSelect("SELECT {$strColumn} FROM \"{$tableName}\"");
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
            ->where($primaryField, $primaryKey)
            ->limit(1);

        $query = $this->db->query($this->sql->toString(), PDO::FETCH_OBJ);
        return $query->fetch() ?? null;
    }

    public function cache(int $ttl, ?string $key = null)
    {
        if (!$key) {
            $key = json_encode($this->sql);
        }

        if ($ttl < 1) {
            throw new \Exception('TTL must be greater than 0');
        }

        $this->cache = new CacheDTO($ttl, $key);
    }

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
        $sql = $this->sql->toString();

        if (!empty($this->params)) {
            $query = $this->db->prepare($sql);
            $query->execute($this->params);
        } else {
            $query = $this->db->query($sql);
        }

        $this->params = [];
        $this->isWhereUsed = false;

        $query->setFetchMode(PDO::FETCH_CLASS, get_class($this->model));

        return $query;
    }

    public function add(array $data)
    {
        $columns = array_keys($data);
        $columnsFromTable = array_keys($this->model->map());

        $arDiff = array_diff($columns, $columnsFromTable);
        if (!empty($arDiff)) {
            throw new IncorrectColumnsAddException();
        }

        $strColumns = implode(',', $columns);
        foreach ($columns as $key => $value) {
            $columns[$key] = ':'.$value;
        }
        $strValues = implode(',', $columns);

        $query = $this->db
            ->prepare("INSERT INTO \"{$this->model->getTableName()}\" ({$strColumns}) VALUES ({$strValues})");

        if (!$query->execute($data)) {
            throw new AddRowToTableException(); //or return [false, $errors] $query->errorInfo();
        }

        return true;
    }
}