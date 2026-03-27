<?php

namespace Main\Core\Enum\Database;

enum MigrateType: string
{
    case CREATE_TABLE = 'createTable';
    case DROP_TABLE = 'dropTable';
    case ADD_INDEX = 'addIndex';
    case DROP_INDEX = 'dropIndex';
}