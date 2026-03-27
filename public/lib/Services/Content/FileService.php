<?php

namespace Main\Services\Content;

use Main\DTO\Content\FileDTO;

class FileService
{
    public static function save(FileDTO &$file, string $newDir)
    {
        $mainDir = $_SERVER['DOCUMENT_ROOT'] . '/uploads';

        // todo сохранять за пределами public
        $hashFile = hash_file('sha256', $file->directory . '/' . $file->name) . '.' . $file->extension;

        $subDir = substr($hashFile, 0, 3);
        $folder = "$mainDir/$newDir/$subDir/";

        if (!file_exists($folder)) {
            mkdir($folder, 0755, true);
        }

        $name = strlen($hashFile) > 45 ? substr($hashFile, 0, 45) . '.' . $file->extension : $hashFile;

        if (rename($file->directory . '/' . $file->name, $folder . $name)) { //move_uploaded_file
            $file->directory = "$newDir/$subDir";
            $file->name = $name;
            return true;
        } else {
//            dump('no moved');
            return false;
        }
    }

    public static function getPath(string $rawFile)
    {
        if (!json_validate($rawFile)) {
            return null;
        }

        $fileInfo = json_decode($rawFile, true);
        if (!empty($fileInfo['path']))
            return $fileInfo['path'];

        if (!empty($fileInfo['directory']) && !empty($fileInfo['name']))
            return '/uploads/' . $fileInfo['directory'] . '/' . $fileInfo['name'];

//        return default src with 404
    }
}