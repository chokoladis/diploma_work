<?php

namespace Main\Core\Secure;

use Main\Core\Interfaces\Secure\Encryptor;

class OpenSSLEncryptor implements Encryptor
{
    private string $key;

    public function __construct()
    {
        $this->key = env('OPENSSL_KEY');
        $this->algo = env('OPENSSL_ALGO', 'AES-256-CBC');
    }

    public function encrypt(string $data): string
    {
        return openssl_encrypt($data, $this->algo, $this->key);
    }

    public function decrypt(string $data): string
    {
        return openssl_decrypt($data, $this->algo, $this->key);
    }
}