<?php

namespace Main\Core\Exceptions;

use Exception;

class AddRowToTableException extends Exception
{
    protected $message = 'Ошибка добавления записи в таблицу';
    protected $code = 'system_error_add_row_to_table';
}