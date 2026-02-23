<?php

namespace Main\Models;

use Main\Core\Interfaces\HasMap;
use Main\Tools\Database;

// interface entity ?
abstract class Model implements HasMap
{
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
    }

    public function getTableName(): string
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

}