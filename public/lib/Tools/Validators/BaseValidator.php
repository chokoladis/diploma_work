<?php

namespace Main\Tools\Validators;

use Illuminate\Validation\Validator;

abstract class BaseValidator
{
    protected $validator;
    protected array $secureFields;

    public function __construct(
        array $fields,
    )
    {
        $this->validator = IlluminateValidator::get();
        foreach ($fields as $field) {
            $this->secureFields[$field] = strip_tags($_POST[$field]);
        }
    }

    abstract public function validate(): Validator;
}