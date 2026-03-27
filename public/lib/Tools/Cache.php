<?php

namespace Main\Tools;

use Main\Core\Interfaces\Secure\Encryptor;

class Cache
{
    protected string $filePath;

    public function __construct(
        private ?Encryptor $encryptor = null,
    )
    {
        $this->filePath = $_SERVER['DOCUMENT_ROOT'] . '/uploads/cache/';
        if (!file_exists($this->filePath)) {
            mkdir($this->filePath, recursive: true);
        }
        //or /storage with logs
    }

    public function get(string $key)
    {
        if ($data = file_get_contents($this->filePath . $key . '.txt')) {

            if ($this->encryptor) {
                $data = $this->encryptor->decrypt($data);
            }

            $data = unserialize($data);

            if (time() > $data['expired']) {
                $this->drop($key);
                return false;
            }

            return $data;
        }

        return false;
    }

    public function drop(string $key)
    {
        unlink($this->filePath . $key . '.txt');
    }

    public function set(string $key, mixed $value, ?int $ttl = 3600)
    {
        $val = serialize([
            'result' => $value,
            'expired' => time() + $ttl
        ]);

        if ($this->encryptor) {
            $val = $this->encryptor->encrypt($val);
        }

        file_put_contents($this->filePath . $key . '.txt', $val, LOCK_EX);
    }
}