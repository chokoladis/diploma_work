<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/include/header.php';

//todo check role
?>
    <main>
        <div class="container">
            <h3>Товары</h3>
            <div class="btn-group">
                <a href="products/" class="btn-info">Посмотреть все</a>
                <a href="products/add/" class="btn-primary">Добавление</a>
                <!-- todo <a href="products/import/" class="btn-light">Импорт</a>-->
            </div>
        </div>
    </main>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/include/footer.php';
?>