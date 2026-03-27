<?php

namespace Main\Models;

use Main\Core\Interfaces\HasMap;

// interface entity ?
abstract class Model implements HasMap
{
    public function __construct(
        protected ?string $tableName = null
    )
    {
        $tableName = $tableName ?? get_called_class();

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

    abstract public function map(): array;

    public function getTableName(): string
    {
        return $this->tableName;
    }
}