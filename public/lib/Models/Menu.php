<?php

namespace Main\Models;

class Menu extends Model
{

    public $id;
    public string $title;
    public string $code;
    public string $link;
    public ?int $sort = null;
    public bool $active;
    public int $level = 0;
    public ?string $area = null;
    public ?int $parent_id = null;


    public function map() : array
    {
        return [
            'id' => 'SERIAL PRIMARY KEY',
            'title' => 'VARCHAR(30) NOT NULL',
            'code' => 'VARCHAR(30) NOT NULL',
            'link' => 'VARCHAR(255) NOT NULL',
            'sort' => 'SMALLINT NULL DEFAULT 100',
            'active' => 'BOOLEAN NOT NULL DEFAULT TRUE',
            'level' => 'SMALLINT DEFAULT 0',
            'area' => 'VARCHAR(40) NULL',
            'parent_id' => 'INT DEFAULT NULL',
            //            additional class or other
        ];
    }
}