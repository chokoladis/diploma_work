<?php

namespace Main\Core\Exceptions;

use Exception;

class FileReadException extends Exception
{
    protected $message = 'File read error';
}