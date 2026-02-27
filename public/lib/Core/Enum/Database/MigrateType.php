<?php

namespace Main\Core\Enum\Database;

Enum MigrateType:string
{
    case CREATE_TABLE = 'createTable';
    case DROP_TABLE = 'dropTable';
}