<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/include/header.php';

//todo check role
?>
<main>
    <div class="container">
        <h3>Форма загрузки баннеров</h3>
        <form action="" method="post" class="load-banners" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="file" class="form-label">Загрузите архив с index.csv файлом</label>
                <input class="form-control" id="file" type="file" name="file" accept="application/zip" required>
            </div>
            <div class=" text-decoration-underline">Тип наполнения данных</div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="type_fill" value="replace" id="replace">
                <label class="form-check-label" for="replace">
                    Заменить
                </label>
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
        if ($_POST['load-banners']) {
            $handler = new \Main\Tools\Handlers\Excel\BannerExcelHandler('file');
            [$result, $errors] = $handler->run();
            dump($result);
            if ($errors) {
                echo implode(' | ', $errors);
            }
        }
        ?>
    </div>
</main>
<footer>

</footer>
</body>
</html>