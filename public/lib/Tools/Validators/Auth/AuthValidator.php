<?php

namespace Main\Tools\Validators\Auth;

use Illuminate\Validation\Validator;
use Main\Tools\Validators\BaseValidator;

class AuthValidator extends BaseValidator
{
    public function validate(): Validator
    {
        return $this->validator->make($this->secureFields, [
            'login' => 'required|min:2',
            'password' => 'required|min:8',
        ], [
            'required' => 'Заполните поле :attribute',
            'min' => 'Минимум :min символов',
        ]);
    }
}