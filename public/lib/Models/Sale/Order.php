<?php

namespace Main\Models\Sale;

use Main\Core\Enum\Order\Status;
use Main\Models\Model;

class Order extends Model
{
    public int $id;
    public int $user_id;
    public Status $status; //string ?
    public float $base_price;
    public float $total_price;

    public string $created_at;
    public ?string $updated_at = null;

    public function map() : array
    {
        return [
            'id' => 'SERIAL PRIMARY KEY',
            'user_id' => "INT NOT NULL REFERENCES \"User\"(id) ON UPDATE CASCADE ON DELETE CASCADE", //set null ?
            'status' => 'VARCHAR(20) NOT NULL',
            'base_price' => 'FLOAT4 NOT NULL',
            'total_price' => 'FLOAT4 NOT NULL',

            'created_at' => 'TIMESTAMPTZ DEFAULT CURRENT_TIMESTAMP',
            'updated_at' => 'TIMESTAMPTZ NULL',
        ];
    }
}