<?php

require_once __DIR__ . "/../../../include/before_load.php";

use Main\Core\Enum\Database\MigrateType;
use Main\Models\Sale\Discount;
use Main\Tools\Migration;

global $argv;
//$argv[0] - current file path

try {
    $migration = new Migration($argv, new Discount(), MigrateType::CREATE_TABLE, MigrateType::DROP_TABLE)->run();
} catch (Throwable $th) {
    echo 'Ошибка миграции ';
    dump($th->getMessage(), $th->getFile(), $th->getLine());
}


