<?php

namespace Main\Services\Content;

use Main\Core\Database\QueryBuilder;
use Main\Models\Content\Banner;

final class BannerService
{
    public static function get()
    {
        $arItems = [];

        $queryBuilder = new QueryBuilder(new Banner);

        $query = $queryBuilder->getResult();
        if ($query) {
            /* @var Banner $item */
            $arItems = $query->fetchAll();
        }

        return $arItems;
    }
}