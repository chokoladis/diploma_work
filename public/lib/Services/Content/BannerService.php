<?php

namespace Main\Services\Content;

use Main\Core\Database\QueryBuilder;
use Main\Models\Banner;
use Main\Models\Menu;

class BannerService
{
    public static function get()
    {
        $arItems = [];

        $queryBuilder = new QueryBuilder(new Banner);

        $query = $queryBuilder->getResult();
        if ($query) {
            /* @var \Main\Models\Banner $item */
            $arItems = $query->fetchAll();
        }

        return $arItems;
    }
}