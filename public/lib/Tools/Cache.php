<?php

namespace Main\Tools;

class Cache
{
    protected string $filePath;

    public function __construct()
    {
//        todo use шифрование
        $this->filePath = $_SERVER['DOCUMENT_ROOT'].'uploads/cache/';
        if (!file_exists($this->filePath)) {
            mkdir($this->filePath, recursive: true);
        }
        //or /storage with logs
    }

    public function get(string $key)
    {
        if ($data = file_get_contents($this->filePath.$key.'.txt')) {
            return json_validate($data) ? json_decode($data, true) : false;
        }

        return false;
    }

    public function set(string $key, mixed $value, ?int $ttl = 3600)
    {
        $val = [
            'result' => $value,
            'expired' => time() + $ttl
        ];

        file_put_contents($this->filePath.$key.'.txt', json_encode($val), LOCK_EX);
    }

    public function drop(string $key)
    {
        unlink($this->filePath.$key.'.txt');
    }

    public function fullControl(string $key, mixed $value, ?int $ttl = 3600)
    {
        if ($arCache = self::get($key)) {
            if ($arCache['expired'] > time()) {
                return $arCache;
            } else {

            }
        }

    }
}