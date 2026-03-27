<?php

namespace Main\Core\Database;

use BadMethodCallException;
use Main\Core\Exceptions\AddRowToTableException;
use Main\Core\Exceptions\IncorrectColumnsAddException;
use Main\Core\Interfaces\HasMap;
use Main\Core\Requests\SQLRequest;
use Main\Core\Secure\StrSecure;
use Main\Tools\Database;
use PDO;
use PDOStatement;

class QuerySetBuilder
{

    private PDO $db;
    private SQLRequest $sql;
    private array $params = [];
    private array $values = [];
    private ?string $strColumns = null;

    public function __construct(
        protected HasMap $model
    )
    {
        $this->db = Database::getInstance()->connect();

        $tableName = $this->model->getTableName();
        $this->sql = new SQLRequest(
            select: "SELECT * FROM \"{$tableName}\"",
        );
    }

    public function __call($name, $arguments)
    {
        if (stripos($name, 'where') !== false) {
            if (isset($arguments[1]) && is_string($arguments[1])) {
                $arguments[1] = StrSecure::get($arguments[1]);
            }
        }

        if (method_exists($this, $name)) {
            return call_user_func_array([$this, $name], $arguments);
        }
        throw new BadMethodCallException("Метод $name не найден");
    }

    public function getResult(): PDOStatement|false
    {
        $sql = $this->sql->toString();

        if (!empty($this->params)) {
            $query = $this->db->prepare($sql);
            $query->execute($this->params);
        } else {
            $query = $this->db->query($sql);
        }

        $this->params = [];

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
            $columns[$key] = ':' . $value;
        }
        $strValues = implode(',', $columns);

        $query = $this->db
            ->prepare("INSERT INTO \"{$this->model->getTableName()}\" ({$strColumns}) VALUES ({$strValues})");

        if (!$query->execute($data)) {
            throw new AddRowToTableException(); //or return [false, $errors] $query->errorInfo();
        }

        return true;
    }

    public function deferredAddition()
    {
        $strQuery = "INSERT INTO \"{$this->model->getTableName()}\" ({$this->strColumns}) VALUES ";
        foreach ($this->params as $arColumns) {
            $params = implode(',', $arColumns);
            $strQuery .= "($params),";
        }
        $strQuery = substr($strQuery, 0, -1);
        $query = $this->db->prepare($strQuery);

        if (!$query->execute($this->values)) {
            throw new AddRowToTableException(); //or return [false, $errors] $query->errorInfo();
        }

        return true;
    }

    // data from DTO->toArray()
    public function prepareDeferredData(array $data)
    {
        $columns = array_keys($data);
        dump('columns', $data);
        $columnsFromTable = array_keys($this->model->map());

        $arDiff = array_diff($columns, $columnsFromTable);
        if (!empty($arDiff)) {
            throw new IncorrectColumnsAddException();
        }

        if (!$this->strColumns)
            $this->strColumns = implode(',', $columns);

        $lastKey = array_key_last($this->params);
        if (is_null($lastKey)) {
            $lastKey = 0;
        } else {
            ++$lastKey;
        }
        // prepare params
        foreach ($columns as $key => $value) {
            $columns[$key] = ":{$value}_{$lastKey}";
        }

        foreach ($data as $key => $value) {
            $tempVal = $value;
            $newKey = ":{$key}_{$lastKey}";
            unset($data[$key]);
            $data[$newKey] = $tempVal;
        }

        $this->params[] = $columns;
        $this->values = array_merge($this->values, $data);
    }

    //    todo replace
}