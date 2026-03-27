<?php

namespace Main\Services;

use Main\Repositories\UserRepository;

class ProfileService
{

    public static function isUserAdmin(string $login): bool
    {
        if ($user = (new UserRepository)->getByLogin($login)) {
            return $user->role === 'admin';
        }

        return false;
    }
}