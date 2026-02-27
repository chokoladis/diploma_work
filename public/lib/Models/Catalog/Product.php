<?php

namespace Main\Models\Catalog;

use Main\Models\Model;

class Product extends Model
{
    public int $id;
    public string $title;
    public ?string $code = null;
    public string $preview; //jsonb or array ?
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
            'preview' => 'JSONB NOT NULL',
            'description' => 'VARCHAR(255) NULL',
            'sort' => 'SMALLINT NULL DEFAULT 100',
            'section' => 'VARCHAR(40) NULL',
            'active' => 'BOOLEAN NOT NULL DEFAULT TRUE',
        ];
    }
}