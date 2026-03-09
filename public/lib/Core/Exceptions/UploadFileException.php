<?php

namespace Main\Core\Exceptions;

use Main\Core\Interfaces\HandlerExcel;

class UploadFileException extends \Exception
{
    protected $message = 'Ошибка загрузки файла';
    protected $status = 'error_load_file';
}