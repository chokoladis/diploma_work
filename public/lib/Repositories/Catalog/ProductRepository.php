<?php

namespace Main\Repositories\Catalog;

final class ProductRepository
{

//    todo filter by name, active, section | sort by id, sort
    public function getProducts(array $arFilters)
    {
        $query = new \Main\Core\Database\QueryBuilder(\Main\Models\Catalog\Product::class);

        if (!empty($arFilters['sort'])) {
            $query->sortBy($arFilters['sort'], $arFilters['order']);
        }

        return $query->paginate($arFilters['page'] * $arFilters['perPage'], $arFilters['perPage'])->getResult();
    }
}