<?php

namespace Main\Models;

use Main\Core\Interfaces\HasMap;

// interface entity ?
abstract class Model implements HasMap
{
    abstract public function map(): array;

    public function __construct(
        protected string $tableName = ''
    )
    {
        $this->tableName = $tableName ?? get_called_class();
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

    public function getByPrimary($key)
    {

    }
}