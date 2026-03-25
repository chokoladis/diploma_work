<?php

namespace Main\Models\Catalog;

use Main\Models\Model;

class Product extends Model
{
    public int $id;
    public string $name;
    public ?string $code = null;

    public bool $active;
    public string $description;
    public string $file_preview; //jsonb
    public ?string $file_detail = null; //jsonb

    public ?string $section = null;
    public ?int $sort = null;

    public function map() : array
    {
        return [
            'id' => 'SERIAL PRIMARY KEY',
            'name' => 'VARCHAR(50) NOT NULL',
            'code' => 'VARCHAR(50) NULL',
            'description' => 'VARCHAR(255) NULL',
            'active' => 'BOOLEAN NOT NULL DEFAULT TRUE',

            'file_preview' => 'JSONB NOT NULL',
            'file_detail' => 'JSONB NULL',

            'section' => 'VARCHAR(40) NULL',
            'sort' => 'SMALLINT NULL DEFAULT 100',
        ];
    }
}