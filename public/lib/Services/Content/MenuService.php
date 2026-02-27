<?php

namespace Main\Services\Content;

use Main\Core\Database\QueryBuilder;
use Main\Models\Content\Menu;

class MenuService
{
    public static function get()
    {
        $menuItems = [];

        $queryBuilder = new QueryBuilder(new Menu);

        $query = $queryBuilder->getResult();
        if ($query) {
            /* @var \Main\Models\Content\Menu $menuItem */
            $menuItems = $query->fetchAll();
        }

        return $menuItems;
    }
}