<?php

namespace Main\Core\Exceptions;

use Exception;

class IncorrectColumnsAddException extends Exception
{
    protected $message = 'Заданны не корректные столбцы для добавления';
    protected $code = 'incorrect_columns_add';
}