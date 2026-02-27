<?php

namespace Main\Models\Sale;

use Main\Models\Model;

class Basket extends Model
{
    public int $id;
    public int $order_id;
    public int $product_id;
    public int $qty;

    public string $created_at;
    public ?string $updated_at = null;

    public function map() : array
    {
        //        todo draft table
        return [
            'id' => 'SERIAL PRIMARY KEY',
            'order_id' => 'INT NOT NULL REFERENCES \"Order\"(id) ON UPDATE CASCADE ON DELETE CASCADE',
            'product_id' => 'INT NOT NULL',
            'qty' => 'SMALLINT NOT NULL',

            'created_at' => 'TIMESTAMPTZ DEFAULT CURRENT_TIMESTAMP',
            'updated_at' => 'TIMESTAMPTZ NULL',
        ];
    }
}