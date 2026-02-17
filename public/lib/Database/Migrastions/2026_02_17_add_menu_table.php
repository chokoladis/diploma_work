<?php

use Main\Tools\Migration;

$new  = new Migration;
echo 'Результат - '.$new->createTable(new \Main\Models\Menu) ? 'успешно' : 'ошибка';

