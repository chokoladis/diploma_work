<?php

namespace Main\Models;

use DateTime;

class User extends Model
{

    public $id;
    public string $login;
    public string $email;
    public ?string $phone = null;
    public string $password;
    public bool $email_verified = false;
    public bool $active;
    public string $created_at;
    public ?string $updated_at = null;

    public function map() : array
    {
        return [
            'id' => 'SERIAL PRIMARY KEY',
            'login' => 'VARCHAR(60) NOT NULL',
            'email' => 'VARCHAR(200) NOT NULL',
            'phone' => 'VARCHAR(12) NULL',
            'password' => 'VARCHAR(200) NOT NULL',
            'email_verified' => 'BOOLEAN NOT NULL DEFAULT FALSE',
            'active' => 'BOOLEAN NOT NULL DEFAULT TRUE',
            'created_at' => 'TIMESTAMPTZ NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'updated_at' => 'TIMESTAMPTZ NULL',
        ];
    }
}