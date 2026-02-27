<?php

namespace Main\Services\Auth;

use Main\Repositories\UserRepository;

class AuthService
{
    private TokenService $tokenService;
    private UserRepository $userRepository;

    function __construct()
    {
        $this->tokenService = new TokenService(env('APP_SECRET_KEY'));
        $this->userRepository = new UserRepository();
    }

    public function login()
    {
        $validator = $this->validateLoginData($_POST);
        if ($validator->fails()) {
            return [false, $validator->errors()->toArray()];
        }

        $validData = $validator->validated();
        $user = $this->userRepository->getByLogin($validData['login']);
        if ($user && password_verify($validData['password'], $user->password)) {
            $this->tokenService->setToken(['login' => $user->login]);

            return [true, null];
        }

        return [false, ['login' => ['Логин/Пароль введен не корректно']]];
    }

    public function logout()
    {
        $this->tokenService->setToken(['login' => null]);
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
        return $this->userRepository->add($formData);
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