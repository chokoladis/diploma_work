<?php

namespace Main\Tools;

class Database
{
    static private $instance;

    static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function connect()
    {
        $config = [
            $_ENV['HOSTNAME'],
            $_ENV['DB_PORT'],
            $_ENV['DB_DATABASE'],
            $_ENV['DB_USERNAME'],
            $_ENV['DB_PASSWORD']
        ];

        foreach ($config as $item => $value) {
            if (empty($value) || $value === '') {
                throw new \Exception('Missing connection parameter');
            }
        }

        return new \PDO(
            sprintf(
                "pgsql:host=%s;port=%d;dbname=%s;",
                $_ENV['DB_HOST'],
                $_ENV['DB_PORT'],
                $_ENV['DB_DATABASE']
            ),
            $_ENV['DB_USERNAME'],
            $_ENV['DB_PASSWORD']
        );
    }
}

?>