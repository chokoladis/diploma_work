<?php

namespace Main\Tools\Handlers\Excel;

use Generator;
use Main\Core\Exceptions\FileReadException;
use Main\Core\Exceptions\UploadFileException;
use Main\Core\Interfaces\HandlerExcel;

abstract class BaseHandler implements HandlerExcel
{
    protected const ZIP_MAX_SIZE = 10;
    protected const FILE_MAX_SIZE = 1; //mb
    protected const FILE_TYPES = ['text/csv'];
    protected const FILE_NAME_CSV = 'index.csv';

    protected string $tempDir;

    public function __construct(
        private string $filename,
    )
    {
        $this->tempDir = $_SERVER['DOCUMENT_ROOT'].'/uploads/tmp/excel/';

        if (!file_exists($this->tempDir)) {
            mkdir($this->tempDir, 0755, true);
        }
    }

    public function run()
    {
        try {
            $this->isValidArchive();
            if (!$this->unpackArchive()) {
                return [false, ['message' => 'Ошибка распаковки архива']];
            }

            foreach($this->readRow() as $row) {

                var_dump('<br> test', $row);
            }
        } catch (UploadFileException $e) {
            return [false, ['message' => $e->getMessage()]];
        }
    }

    protected function readRow() : Generator
    {
        if (!file_exists($this->tempDir.'/'.static::FILE_NAME_CSV)){
            throw new FileReadException("Файл {${static::FILE_NAME_CSV}} не был найден");
        }

        $resource = fopen($this->tempDir.'/'.static::FILE_NAME_CSV, 'r');
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

    protected function isValidArchive() : bool
    {
        if (!$_FILES[$this->filename] || !file_exists($_FILES[$this->filename]['tmp_name'])) {
            throw new UploadFileException('Файл не был найден при загрузке');
        }

        $file = $_FILES[$this->filename];
        if ($file['error'] !== UPLOAD_ERR_OK) {
            throw new UploadFileException("Ошибка [код - {${$file['error']}}] при загрузке");
        } elseif ($file['size'] / 1024 / 1024 > self::ZIP_MAX_SIZE) { // bytes / 1024 = kb
            throw new UploadFileException("Файл слишком велик [ограничение - {${self::FILE_MAX_SIZE}}]mb]");
//        } elseif (!in_array($file['type'], self::FILE_TYPES)) {
//            throw new UploadFileException("Файл имеет не поддерживаемый формат");
        }

        return true;
    }

    protected function unpackArchive()
    {
        $zip = new \ZipArchive();
        if ($zip->open($_FILES[$this->filename]['tmp_name']) === TRUE) {
            $zip->extractTo($this->tempDir);
            $zip->close();
        } else {
            return false; //echo 'Ошибка при извлечении файлов из архива';
        }

        return true;
    }
}