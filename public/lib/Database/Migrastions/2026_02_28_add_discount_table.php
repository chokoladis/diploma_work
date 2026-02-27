<?php

require_once __DIR__."/../../../include/before_load.php";

use Main\Tools\Migration;

$new  = new Migration;
global $argv;
//$argv[0] - current file path

try {
    $model = new \Main\Models\Sale\Discount();
    if (isset($argv[1]) && $argv[1] === 'down') {
        echo 'Результат - '.($new->dropTable($model) ? 'успешно' : 'ошибка');
    } else {
        echo '<br>Результат - '.($new->createTable($model) ? 'успешно' : 'ошибка');
    }

    echo '<br>';
} catch (\Throwable $th) {
    echo 'Ошибка миграции ';
    dump($th->getMessage(), $th->getFile(), $th->getLine());
}


