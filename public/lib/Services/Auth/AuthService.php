<?php

namespace Main\Services\Auth;

use Main\Core\Database\QueryBuilder;
use Main\Exceptions\IncorrectColumnsAddException;
use Main\Models\User;
use Main\Services\ProfileService;

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

    public function register(array $formData)
    {
        $validator = $this->validateRegisterData($formData);
        if ($validator->fails()) {
            return [false, $validator->errors()->toArray()];
        }

        $profileService = new ProfileService();
        $profile = $profileService->getByUniqueFields($formData['login'], $formData['email']);
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

        $formData['password'] = password_hash($formData["password"], PASSWORD_DEFAULT);
        unset($formData['password_confirm']);

        try {
            $queryBuilder = new QueryBuilder(new User);
            $queryBuilder->add($formData);

            $tokenService = new TokenService($_ENV['APP_SECRET_KEY']);
            $token = $tokenService->generate(['login' => $formData['login']]);

            setcookie('jwt_token', $token, time() + 36000000, '/');
            // set message success and redirect

        } catch (IncorrectColumnsAddException $e) {
            die();
        }

        return [true, null];
//        echo "<div class='succes'>Вы успешно зарегистрировались!</div>";
    }

    private function validateRegisterData(array $formData)
    {
        $validation = \Main\Tools\Validator::get();
        $validator = $validation->make($formData, [
            // todo composer require illuminate/database for autocheck in db ?
            'login'            => 'required|min:2', //unique:User,login
            'email'            => 'required|email', //unique:User,email
            'password'         => [
                'required',
                'min:8',
                'regex:/^(?=.*[a-zA-Z])(?=.*\d)(?=.*[!@#$%\^&*()~\-_\.\,]).+$/u',
            ],
            'password_confirm' => 'required|min:8|same:password',
        ], [
            'required'         => 'Заполните поле :attribute',
            'email'            => 'Почта указана неверно',
            'min'              => 'Минимум :min символов',
            'same'             => 'Пароли не совпадают',
            'password.regex'   => 'Пароль слишком простой (нужны буквы, цифры и спецсимволы)',
        ]);

        return $validator;
    }
}