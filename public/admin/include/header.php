<?

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
        <title><?= \Main\Services\Content\AdminPageService::getTagPageTitle() ?></title>

        <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/css/normalize.css">
        <link rel="stylesheet" href="/assets/css/template_admin.css">
        <!--    todo load other styles -->
    </head>
    <body>
        <header>
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">админка</a>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">>
                            <li class="nav-item">
                                <a class="nav-link" href="/">На сайт</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>