<?php

namespace Main\Services;

class AuthService
{
    public function logout()
    {
        unset($_SESSION['logged_user']);
        header('Location: index.php');
    }
}