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
        $this->tokenService = new TokenService(env('APP_SECRET_KEY'));
    }

    public function login()
    {
        $validator = $this->validateLoginData($_POST);
        if ($validator->fails()) {
            return [false, $validator->errors()->toArray()];
        }

        $validData = $validator->validated();
        $profileService = new ProfileService();
        $user = $profileService->getByLogin($validData['login']);
        if ($user && password_verify($validData['password'], $user->password)) {
            $this->tokenService->setToken(['login' => $user->login]);

            return [true, null];
        }

        return [false, ['login' => ['Логин/Пароль введен не корректно']]];
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
        return $arToken['login'];
    }

    public function register()
    {
        $validator = $this->validateRegisterData($_POST);
        if ($validator->fails()) {
            return [false, $validator->errors()->toArray()];
        }

        $formData = $validator->validated();
//        $registerRequest = new \Main\DTO\Requests\Auth\RegisterRequestDTO(
//            ...$validator->validated(),
//        );

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

        $formData['password'] = password_hash($_POST["password"], PASSWORD_DEFAULT);
        unset($formData['password_confirm']);

        try {
            $queryBuilder = new QueryBuilder(new User);
            $queryBuilder->add($formData);

            $this->tokenService->setToken(['login' => $formData['login']]);
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
        return $validation->make($formData, [
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
    }

    private function validateLoginData(array $formData)
    {
        $validation = \Main\Tools\Validator::get();
        return $validation->make($formData, [
            'login'            => 'required|min:2',
            'password'         => 'required|min:8',
        ], [
            'required'         => 'Заполните поле :attribute',
            'min'              => 'Минимум :min символов',
        ]);
    }
}