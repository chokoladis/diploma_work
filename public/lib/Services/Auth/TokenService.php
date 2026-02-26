<?php

namespace Main\Services\Auth;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class TokenService
{
    function __construct(
        private readonly string $key,
        private readonly string $algorithm = 'HS256',
        private readonly int $expire = 3600
    )
    {
    }

    private function generate(array $payload): string
    {
        $payload['iat'] = time();
        $payload['exp'] = time() + $this->expire;
        $payload['iss'] = env('APP_NAME');

        return JWT::encode($payload, $this->key, $this->algorithm);
    }

    public function decodeToken(string $token): ?array
    {
        try {
            return (array) JWT::decode($token, new Key($this->key, $this->algorithm));
        } catch (\Exception) {
            return null;
        }
    }

    public function setToken(array $payload): void
    {
        $token = $this->generate($payload);

        setcookie('jwt_token', $token, time() + 36000000, '/');
    }
}