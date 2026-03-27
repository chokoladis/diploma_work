<?php

require_once __DIR__ . "/../../../include/before_load.php";

use Main\Core\Enum\Database\MigrateType;
use Main\Models\Catalog\Product;
use Main\Tools\Migration;

global $argv;
//$argv[0] - current file path

try {
    $migration = new Migration($argv, new Product, MigrateType::ADD_INDEX);
    if (isset($argv) && $argv[1] === 'down') {
        printf('Операция %s выполнена %s',
            'dropIndex',
            $migration->dropIndex('product_idx_code_section') ? 'успешно' : 'с ошибкой'
        );
    } else {
        printf('Операция %s выполнена %s',
            'addIndex',
            $migration->addIndex(
                ['code', 'section'],
                'product_idx_code_section',
                'UNIQUE',
                'NULLS NOT DISTINCT'
            ) ? 'успешно' : 'с ошибкой'
        );
    }

} catch (Throwable $th) {
    echo 'Ошибка миграции ';
    dump($th->getMessage(), $th->getFile(), $th->getLine());
}