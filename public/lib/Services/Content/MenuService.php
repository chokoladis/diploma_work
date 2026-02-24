<?php

namespace Main\Services\Content;

use Main\Core\Database\QueryBuilder;
use Main\Models\Menu;

class MenuService
{
    public static function get()
    {
        $menuItems = [];

        $queryBuilder = new QueryBuilder(new Menu);

        $query = $queryBuilder->getResult();
        if ($query) {
            /* @var \Main\Models\Menu $menuItem */
            $menuItems = $query->fetchAll();
        }

        return $menuItems;
    }
}