<?php

namespace Main\Services\Auth;

class AuthService
{
    private TokenService $tokenService;

    function __construct()
    {
        $this->tokenService = new TokenService(getenv('APP_SECRET_KEY'));
    }

    public function logout()
    {
        setcookie('jwt_token', '', 0);
        header('Location: /');
    }

    public function getLoggedUser()
    {
        if (!isset($_COOKIE['jwt_token']) || empty($_COOKIE['jwt_token'])) {
            return null;
        }

        $arToken = $this->tokenService->decodeToken($_COOKIE['jwt_token']);
        return $arToken['userId'];
    }
}