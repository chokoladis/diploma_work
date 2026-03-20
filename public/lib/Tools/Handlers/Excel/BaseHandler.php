<?php

namespace Main\Tools\Handlers\Excel;

use Generator;
use Main\Core\Exceptions\FileReadException;
use Main\Core\Exceptions\UploadFileException;
use Main\Core\Interfaces\HandlerExcel;
use Main\Tools\Logger;

abstract class BaseHandler implements HandlerExcel
{
    protected const ZIP_MAX_SIZE = 10;
    protected const FILE_MAX_SIZE = 1; //mb
    protected const FILE_NAME_CSV = 'index.csv';
    public const FILE_TYPE_CSV = ['text/csv', 'text/plain'];
    public const FILE_TYPE_ARCHIVE = 'application/zip';

    protected string $tempDir;
    protected string $fileName;
    protected $archive;

    public function __construct(
        private string $field,
        protected bool $isSkipFirstRow = true,
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

            $this->checkCSV();
            return [$this->action(), null];

        } catch (FileReadException|UploadFileException $e) {
            return [false, ['message' => $e->getMessage()]];
        } catch (\Throwable $e) {
            Logger::getInstance('excel_handler')->error($e->getMessage(), [$e->getFile(), $e->getLine()]);
            return [false, ['message' => 'Возникла непредвиденная ошибка']];
        } finally {
            if (isset($this->fileName) && file_exists($this->tempDir.$this->fileName)){
                $files = glob($this->tempDir.$this->fileName.'/*');
                foreach($files as $file){
                    if(is_file($file)) {
                        unlink($file);
                    }
                }
                var_dump('res remove', rmdir($this->tempDir.$this->fileName));
            }
        }
    }

    protected function readRow() : Generator
    {
        $resource = fopen($this->tempDir.$this->fileName.'/'.static::FILE_NAME_CSV, 'r');
        if (!$resource) {
            throw new FileReadException();
        }

        // todo use columns
        $isFirst = true;
        while ($row = fgetcsv($resource, escape: '')) {

            if ($this->isSkipFirstRow && $isFirst) {
                $isFirst = false;
                continue;
            }

            yield $row;
        }

        fclose($resource);
    }

    protected function isValidArchive() : bool
    {
        if (!$_FILES[$this->field] || !file_exists($_FILES[$this->field]['tmp_name'])) {
            throw new UploadFileException('Файл не был найден при загрузке');
        }

        $this->archive = $_FILES[$this->field];
        $mimeType = mime_content_type($this->archive['tmp_name']);

        if ($this->archive['error'] !== UPLOAD_ERR_OK) {
            throw new UploadFileException("Ошибка [код - {${$this->archive['error']}}] при загрузке");
        } elseif ($this->archive['size'] / 1024 / 1024 > self::ZIP_MAX_SIZE) { // bytes / 1024 = kb
            throw new UploadFileException("Файл слишком велик [ограничение - {${self::ZIP_MAX_SIZE}}]mb]");
        } elseif (!$mimeType || $mimeType != 'application/zip') {
            throw new UploadFileException("Файл имеет не поддерживаемый формат");
        }

        $arName = explode('.', $this->archive['name']);
        array_pop($arName);
        $this->fileName = implode('.', $arName);

        return true;
    }

    protected function unpackArchive()
    {
        $zip = new \ZipArchive();
        if ($zip->open($_FILES[$this->field]['tmp_name']) === TRUE) {
            $zip->extractTo($this->tempDir);
            $zip->close();
        } else {
            return false;
        }

        return true;
    }

    protected function checkCSV()
    {
        $filePath = $this->tempDir.$this->fileName.'/'.static::FILE_NAME_CSV;
        if (!file_exists($filePath)){
            throw new FileReadException("Файл {${static::FILE_NAME_CSV}} не был найден");
        } elseif (!in_array(mime_content_type($filePath), self::FILE_TYPE_CSV)) {
            throw new FileReadException("Ошибка типа контента в файле {${self::FILE_NAME_CSV}}");
        }
    }

    abstract protected function action() : true;
}