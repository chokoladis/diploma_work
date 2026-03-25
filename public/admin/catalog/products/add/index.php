<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/include/header.php';

//todo check role
?>
    <main>
        <div class="container">
            <h3>Форма добавления товаров</h3>
            <form action="#" method="post" class="add-product" enctype="multipart/form-data">

                <div class="mb-3">
                    <label for="file" class="form-label">Загрузите архив с index.csv файлом</label>
                    <input class="form-control" id="file" type="file" name="file" accept="<?= BaseHandler::FILE_TYPE_ARCHIVE?>" required>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="type_fill" value="add" checked id="add">
                    <label class="form-check-label" for="add">
                        Добавить
                    </label>
                </div>
                <button type="submit" name="load-banners" class="btn btn-outline-light mt-4">Загрузить</button>
            </form>
            <?
            if (isset($_POST['load-banners'])) {
                $handler = new BannerExcelHandler('file');
                [$result, $errors] = $handler->run();
                if ($result) {
                    $_SESSION['message'] = 'Баннеры успешно добавлены';
                } elseif ($errors) {
                    echo implode(' | ', $errors);
                }
            }
            ?>
        </div>
    </main>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/include/footer.php';
?>