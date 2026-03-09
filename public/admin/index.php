<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/include/before_load.php';

//todo check role
?>
<!DOCTYPE html>
<!--todo lang from browser-->
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--todo title from env-->
    <title>Админка</title>

    <link rel="stylesheet" href="/assets/css/normalize.css">
    <link rel="stylesheet" href="/assets/css/template_admin.css">
<!--    <link rel="stylesheet" href="/assets/css/main.css">-->
    <!--    todo load other styles -->
</head>
<body>
    <header>
        <div class="container">
            <a href="#">админка</a>
            <a href="/">На сайт</a>
            <nav>
                <ul class="menu">

                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
            <h3>Форма загрузки баннеров</h3>
            <form action="" method="post" class="load-banners" enctype="multipart/form-data">
                <label for="file">
                    <span>Загрузите excel файл</span>
                    <input type="file" name="file">
                </label>
                <input type="submit" name="load-banners" value="Apply">
            </form>
            <?
                if ($_POST['load-banners']) {
                    $handler = new \Main\Tools\Handlers\Excel\BannerExcelHandler('file');
                    [$result, $errors] = $handler->run();
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