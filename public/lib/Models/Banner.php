<?php

namespace Main\Models;

class Banner extends Model
{

    public $id;
    public string $title;
    public ?string $code = null;
    public string $file;
    public string $description;
    public ?int $sort = null;

    public ?string $section = null;
    public bool $active;


    public function map() : array
    {
        return [
            'id' => 'SERIAL PRIMARY KEY',
            'title' => 'VARCHAR(50) NOT NULL',
            'code' => 'VARCHAR(50) NULL',
            'file' => 'JSONB NOT NULL',
            'description' => 'VARCHAR(255) NULL',
            'sort' => 'SMALLINT NULL DEFAULT 100',
            'section' => 'VARCHAR(40) NULL',
            'active' => 'BOOLEAN NOT NULL DEFAULT TRUE',
        ];
    }
}