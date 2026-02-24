<?

use Main\Services\Auth\AuthService;

require_once 'before_load.php';

    ob_start();
?>
<!DOCTYPE html>
<!--todo lang from browser-->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--todo title from env-->
        <title><?= \Main\Services\Content\PageService::getTagPageTitle() ?></title>

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
                    <img src="/img/logo.png" class="img-logo">
                </a>
                <ul class="menu d-flex">
                    <?
                        $menuHeader = \Main\Services\Content\MenuService::get();

                        if (!empty($menuHeader)) {
                            foreach ($menuHeader as $menuItem) {
                                ?><li><a href="<?=$menuItem->link?>"><?=$menuItem->title?></a></li><?
                            }
                        }

                        $authService = new AuthService();
                        $userId = $authService->getLoggedUser();
                        // todo write login or name to show

                        if ($userId) { ?>
                            <li><a class="profile" href="#"><?= $userId ?></a></li>
                            <li>
                                <form action="#" method="POST">
                                    <input class="exit" name="exit" type="submit" value="Выйти">
                                </form>
                            </li>
                    <?
                        //todo ajax logoout
                    } else { ?>
                        <li><a href="/auth/">Авторизация</a></li>
                    <? } ?>
                </ul>
            </div>
        </header>