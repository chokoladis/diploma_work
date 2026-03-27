<?php

namespace Main\Core\Interfaces\Secure;

interface Encryptor
{
    public function encrypt(string $data): string;

    public function decrypt(string $data): string;
}