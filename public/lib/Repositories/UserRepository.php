<?php

namespace Main\Repositories;

use Main\Core\Database\QueryBuilder;
use Main\Models\User;
use Main\Tools\Cache;
use Main\Tools\Logger;

class UserRepository
{
    public function add(array $formData)
    {
        $profile = $this->getByUniqueFields($formData['login'], $formData['email']);
        if (!empty($profile)) {

            $errors = [];
            if ($profile->login === $formData['login']) {
                $errors['login'] = [ 'Пользователь с таким Логином уже зарегестрирован' ];
            }
            if ($profile->email === $formData['email']) {
                $errors['email'] = [ 'Пользователь с таким Email уже зарегестрирован' ];
            }

            return [false, $errors];
        }

        $formData['password'] = password_hash($_POST["password"], PASSWORD_ARGON2ID);
        unset($formData['password_confirm']);

        try {
            $queryBuilder = new QueryBuilder(new User);
            $queryBuilder->add($formData);

            return [true, null];

        } catch (\Exception $e) {
            Logger::getInstance('user')->error($e->getMessage(), [$e->getLine(), $e->getFile()]);
            return [false, ['login' => ['system_error']]];
        }
    }

    public function getByEmail($email)
    {
        $queryBuilder = new QueryBuilder(new User);

        $query = $queryBuilder->select(['id'])
            ->where('email', $email)
            ->limit(1)
            ->getResult();
        if ($query) {
            /* @return \Main\Models\User */
            return $query->fetch();
        }

        return null;
    }

    public function getByLogin(string $login)
    {
//        todo by custom cache
        $cache = new Cache();
        if ($cacheData = $cache->get('login_'.$login)) {
            if ($cacheData['expired'] > time())
                return $cacheData['result'];
        } else {

            $queryBuilder = new QueryBuilder(new User);

            $query = $queryBuilder->where('login', $login)
                ->limit(1)
                ->getResult();
            if ($query) {
                $res = $query->fetch();
                $cache->set('login_'.$login, $res, 7200);
                return $res;
            }

            return false;
        }
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