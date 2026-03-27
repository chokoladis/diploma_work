<?php

namespace Main\Tools\Validators\Auth;

use Illuminate\Validation\Validator;
use Main\Tools\Validators\BaseValidator;

class RegisterValidator extends BaseValidator
{
    public function validate(): Validator
    {
        return $this->validator->make($this->secureFields, [
            // todo composer require illuminate/database for autocheck in db ?
            'login' => 'required|min:2', //unique:User,login
            'email' => 'required|email', //unique:User,email
            'password' => [
                'required',
                'min:8',
                'regex:/^(?=.*[a-zA-Z])(?=.*\d)(?=.*[!@#$%\^&*()~\-_\.\,]).+$/u',
            ],
            'password_confirm' => 'required|min:8|same:password',
        ], [
            'required' => 'Заполните поле :attribute',
            'email' => 'Почта указана неверно',
            'min' => 'Минимум :min символов',
            'same' => 'Пароли не совпадают',
            'password.regex' => 'Пароль слишком простой (нужны буквы, цифры и спецсимволы)',
        ]);
    }
}