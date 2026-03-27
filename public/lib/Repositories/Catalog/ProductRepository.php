<?php

namespace Main\Repositories\Catalog;

use Main\Core\Database\QueryBuilder;
use Main\Models\Catalog\Product;

final class ProductRepository
{

//    todo filter by name, active, section | sort by id, sort
    public function getProducts(array $arFilters)
    {
        $query = new QueryBuilder(new Product);

        if (!empty($arFilters['sort'])) {
            $query->sortBy($arFilters['sort'], $arFilters['order']);
        }

        return $query->paginate($arFilters['page'] * $arFilters['perPage'], $arFilters['perPage'])->getResult();
    }
}