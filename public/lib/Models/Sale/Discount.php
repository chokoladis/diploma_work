<?php

namespace Main\Models\Sale;

use Main\Models\Model;

class Discount extends Model
{
    public int $id;
    public int $order_id;
    public string $title;
    public string $type;
    public int $percent;
    public float $value;

    public string $created_at;
    public ?string $updated_at = null;

    public function map() : array
    {
        //        todo draft table
        return [
            'id' => 'SERIAL PRIMARY KEY',
            'order_id' => 'INT NOT NULL REFERENCES Order(id) ON UPDATE CASCADE ON DELETE CASCADE',
            'title' => 'VARCHAR(150) NOT NULL',
            'type' => 'VARCHAR(50) NOT NULL',
            'percent' => 'SMALLINT NOT NULL',
            'value' => 'FLOAT4 NOT NULL',

            'created_at' => 'TIMESTAMPTZ DEFAULT CURRENT_TIMESTAMP',
            'updated_at' => 'TIMESTAMPTZ NULL',
        ];
    }
}