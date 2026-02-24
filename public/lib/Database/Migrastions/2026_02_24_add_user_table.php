<?php

require_once __DIR__."/../../../include/before_load.php";

use Main\Tools\Migration;

$new  = new Migration;
global $argv;
//$argv[0] - current file path

try {
    if (isset($argv[1]) && $argv[1] === 'down') {
        echo 'Результат - '.$new->dropTable(new \Main\Models\User) ? 'успешно' : 'ошибка';
    } else {
        echo 'Результат - '.$new->createTable(new \Main\Models\User) ? 'успешно' : 'ошибка';
    }

    echo '<br>';
} catch (\Throwable $th) {
    echo 'Ошибка миграции ';
    dump($th->getMessage(), $th->getFile(), $th->getLine());
}


