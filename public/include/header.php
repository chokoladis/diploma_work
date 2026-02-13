<? require_once 'before_load.php'; ?>
<!DOCTYPE html>
<!--todo lang from browser-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--todo title from env-->
    <title><?= isset($pageTitle) && trim($pageTitle) !== '' ? $pageTitle : 'redmouse' ?></title>

    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="/assets/css/normalize.css">
    <link rel="stylesheet" href="/assets/css/template.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <!--    todo load other styles -->
</head>
<body>
<header>
    <div class="container d-flex align-items-center">
        <a href="/" class="logo">
            <div class="img-logo"></div>
        </a>
        <ul class="menu d-flex">
            <!-- todo from db-->
            <li><a href="/catalog.php">Услуги</a></li>
            <li><a href="/price.php">Прайс-лист</a></li>
            <li><a href="/otz.php">Отзывы</a></li>
            <li><a href="/trek.php">Трек-код</a></li>
            <li><a href="/about.php">О нас</a></li>
            <li class="vk_menu"><a><img src="/img/вк.png" alt=""></a>
                <ul class="vk">
                    <li><a href="https://vk.com/redmouse" target="_blank">Главный директор</a></li>
                    <li><a href="https://vk.com/redmouse_56" target="_blank">Группа</a></li>
                </ul>
            </li>
            <?
                if (isset($_SESSION['logged_user'])) {
            ?>
                    <li><a class="profile" href="#"><?= $_SESSION["logged_user"]->login ?></a></li>
                    <li>
                        <form action="#" method="POST"><input class="exit" name="exit" type="submit" value="Выйти"></form>
                    </li>
            <?
                $exit = $_POST['exit'];
                if (isset($exit)) {
                    unset($_SESSION['logged_user']);
                }
            } else {
            ?>
                <li><a href="/auth.php">Авторизация</a></li>
            <? } ?>
        </ul>
    </div>
</header>