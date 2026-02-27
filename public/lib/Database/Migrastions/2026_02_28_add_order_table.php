<?php

require_once __DIR__."/../../../include/before_load.php";

use Main\Core\Enum\Database\MigrateType;
use Main\Tools\Migration;

global $argv;
//$argv[0] - current file path

try {
    $migration  = new Migration($argv, MigrateType::CREATE_TABLE, MigrateType::DROP_TABLE);
    echo 'Результат - '.($migration->run(new \Main\Models\Sale\Order()) ? 'успешно' : 'ошибка');
} catch (\Throwable $th) {
    echo 'Ошибка миграции ';
    dump($th->getMessage(), $th->getFile(), $th->getLine());
}