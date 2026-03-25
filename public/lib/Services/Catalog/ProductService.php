<?php

namespace Main\Services\Catalog;

use Main\Repositories\Catalog\ProductRepository;

final class ProductService
{
    public function getProducts()
    {
        $productRepository = new ProductRepository();
        return $productRepository->getProducts($this->prepareFilters());
    }

    private function prepareFilters()
    {
        return [
            'filters' => [],//todo
            'page' => intval($_GET['page']) > 0 ? intval($_GET['page']) : 1,
            'perPage' => intval($_GET['perPage']) > 0 ? intval($_GET['perPage']) : 10,
            'sort' => !empty($_GET['sort']) ? $_GET['sort'] : null,
            'order' => !empty($_GET['order']) ? $_GET['order'] : null,
        ];
    }
}