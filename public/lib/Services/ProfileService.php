<?php

namespace Main\Services;

use Main\Core\Database\QueryBuilder;
use Main\Models\User;

class ProfileService
{
    public function getByEmail($email)
    {
        $queryBuilder = new QueryBuilder(new User);

        $query = $queryBuilder->select(['id'])
            ->where('email', $email)
            ->limit(1)
            ->getResult();
        if ($query) {
            /* @var \Main\Models\Banner $item */
             return $query->fetch();
        }

        return null;
    }

    public function getByLogin($login)
    {
        $queryBuilder = new QueryBuilder(new User);

        $query = $queryBuilder->where('login', $login)
            ->limit(1)
            ->getResult();
        if ($query) {
            return $query->fetch();
        }

        return false;
    }

    /**
     * @param string $login
     * @param string $email
     * @return User|false
     * @throws \Exception
     */
    public function getByUniqueFields(string $login, string $email) : \Main\Models\User|false
    {
        $queryBuilder = new QueryBuilder(new User);

        $query = $queryBuilder->select(['login', 'email'])
            ->where('email', $email)
            ->where('login', $login)
            ->limit(1)
            ->getResult();
        if ($query) {
            return $query->fetch();
        }

        return false;
    }
}