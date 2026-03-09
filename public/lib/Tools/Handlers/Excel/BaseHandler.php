<?php

namespace Main\Tools\Handlers\Excel;

use Generator;
use Main\Core\Exceptions\FileReadException;
use Main\Core\Exceptions\UploadFileException;
use Main\Core\Interfaces\HandlerExcel;

abstract class BaseHandler implements HandlerExcel
{
    protected const FILE_MAX_SIZE = 1; //mb
    protected const FILE_TYPES = ['application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'text/csv'];

    public function __construct(
        private string $filename,
    )
    {
    }

    public function run()
    {
        try {
            $this->isValidFile();
            foreach($this->readRow() as $row) {

                var_dump('<br> test', $row);
            }
        } catch (UploadFileException $e) {
            return [false, ['message' => $e->getMessage()]];
        }
    }

    protected function readRow() : Generator
    {
        $resource = fopen($_FILES[$this->filename]['tmp_name'], 'r');
        if (!$resource) {
            throw new FileReadException();
        }

        $isFirst = true;
        while ($row = fgetcsv($resource)) {

            if ($isFirst) {
                $isFirst = false;
                continue;
            }

            yield $row;
        }

        fclose($resource);
    }

    protected function isValidFile() : bool
    {
        if (!$_FILES[$this->filename] || !file_exists($_FILES[$this->filename]['tmp_name'])) {
            throw new UploadFileException('Файл не был найден при загрузке');
        }

        $file = $_FILES[$this->filename];
        if ($file['error'] !== UPLOAD_ERR_OK) {
            throw new UploadFileException("Ошибка [код - {${$file['error']}}] при загрузке");
        } elseif ($file['size'] / 1024 / 1024 > self::FILE_MAX_SIZE) { // bytes / 1024 = kb
            throw new UploadFileException("Файл слишком велик [ограничение - {${self::FILE_MAX_SIZE}}]mb]");
        } elseif (!in_array($file['type'], self::FILE_TYPES)) {
            throw new UploadFileException("Файл имеет не поддерживаемый формат");
        }

        return true;
    }
}