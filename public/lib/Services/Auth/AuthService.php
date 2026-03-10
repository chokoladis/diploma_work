<?php

namespace Main\Services\Auth;

use Main\Repositories\UserRepository;
use Main\Tools\Validators\Auth\AuthValidator;
use Main\Tools\Validators\Auth\RegisterValidator;

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
        $validator = new AuthValidator(['login', 'password'])->validate();
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
        $validator = new RegisterValidator(['login', 'email', 'password', 'password_confirm'])
            ->validate();
        if ($validator->fails()) {
            return [false, $validator->errors()->toArray()];
        }

        $formData = $validator->validated();
//        $registerRequest = new \Main\DTO\Requests\Auth\RegisterRequestDTO(
//            ...$validator->validated(),
//        );
        [$result, $errors] = $this->userRepository->add($formData);
        if ($result) {
            $this->tokenService->setToken(['login' => $formData['login']]);

            return [true, null];
        }

        return [false, $errors];
    }
}