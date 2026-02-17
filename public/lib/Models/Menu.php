<?php

namespace Main\Models;

class Menu extends Model
{
    public function map() : array
    {
        return [
            'id' => 'SERIAL',
            'title' => 'VARCHAR(30) NOT NULL',
            'code' => 'VARCHAR(30) NOT NULL',
            'level' => 'SMALLINT DEFAULT 0',
            'parent_id' => 'INT DEFAULT NULL',
            //            additional class or other
        ];
    }
}