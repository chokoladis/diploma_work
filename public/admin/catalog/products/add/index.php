<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/include/header.php';

//todo check role
?>
    <main>
        <div class="container">
            <h3>Форма добавления товаров</h3>
            <form action="#" method="post" class="add-product" enctype="multipart/form-data">

                <div class="mb-3">
                    <label for="name" class="form-label">Название</label>
                    <input class="form-control" id="name" type="text" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="code" class="form-label">Код</label>
                    <input class="form-control" id="code" type="text" name="code" required>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="active" value="true" checked>
                    <label class="form-check-label" for="active">
                        Активность
                    </label>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Описание</label>
                    <input class="form-control" type="text" name="description">
                </div>
                <div class="mb-3">
                    <label for="sort" class="form-label">Сортировка</label>
                    <input class="form-control" type="number" name="sort">
                </div>
                <div class="mb-3">
                    <label for="code" class="form-label">Превью</label>
                    <input class="form-control" type="file" name="file_preview" required>
                </div>
                <div class="mb-3">
                    <label for="code" class="form-label">Детальная картинка</label>
                    <input class="form-control" type="file" name="file_detail">
                </div>

                <button type="submit" name="load-banners" class="btn btn-outline-light mt-4">Загрузить</button>
            </form>
            <?
            if (isset($_POST['submit'])) {

//                if ($result) {
//                    $_SESSION['message'] = 'Баннеры успешно добавлены';
//                } elseif ($errors) {
//                    echo implode(' | ', $errors);
//                }
            }
            ?>
        </div>
    </main>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/include/footer.php';
?>