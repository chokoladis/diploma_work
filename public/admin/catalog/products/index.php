<?php

use Main\Models\Catalog\Product;

require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/include/header.php';

//todo check role
?>
    <main>
        <div class="container">
            <h3>Список товаров</h3>
            <div class="btn-group">
                <a href="products/add/" class="btn-primary">Добавление</a>
            </div>
            <?
                $productService = new \Main\Services\Catalog\ProductService;
                if ($res = $productService->getProducts()) {
                    while($product = $res->fetch()) {
                         dump($product);
                        ?>

                        <?
                    }
                } else {
                    ?><div class="alert alert-warning">Товаров по текущему фильтру найдено не было</div><?
                }
            ?>
        </div>
    </main>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/include/footer.php';
?>