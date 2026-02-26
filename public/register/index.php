<?
require_once $_SERVER['DOCUMENT_ROOT'].'/include/header.php';

// todo middleware ? для запрета или редиректа авторизованным
\Main\Services\Content\PageService::setTitle('Авторизация');

require_once $_SERVER['DOCUMENT_ROOT'].'/assets/css/auth.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/assets/css/register.php';

$postFields = [
    'email' => \Main\Core\Secure\StrSecure::get($_POST["email"] ?? null),
    'login' => \Main\Core\Secure\StrSecure::get($_POST["login"] ?? null),
    'password' => \Main\Core\Secure\StrSecure::get($_POST["password"] ?? null),
    'password_confirm' => \Main\Core\Secure\StrSecure::get($_POST["password_confirm"] ?? null)
];
?>
<body>
    <section class="first" id="first">
        <div class="content">
            <div class="container d-flex">
                <div class="offer">
                    <div class="offer_body">
                        <div class="title">
                            <div class="vertical wow slideInDown" data-wow-duration="2s">Авторизируйся</div>
                            <div class="title2">
                                <h2>чтобы</h2>
                                <hr>
                                <h1 class="title_order">Оставить отзыв</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="action">
                    <form action="#" id="registration_form" method="POST">
                        <?
                            // todo await and modal
                            $errorMessages = [];
                            if (isset($_POST["submit"])) {
                                $authService = new \Main\Services\Auth\AuthService;
                                [$result, $errorMessages] = $authService->register($postFields);
                                if ($result) {
                                    header("Location: /");//todo alert
                                }
                            }
                        ?>

                        <div class="form-control">
                            <div class="input">
                                <img src="/img/email.png" alt="Email" class="login">
                                <input type="email" name="email" id="email" placeholder="Email" value='<?= $postFields['email']; ?>'>
                            </div>
                            <? if ($errorMessages['email']) {
                                echo \Main\Helpers\StrHelper::outErrors($errorMessages['email']);
                            }?>
                        </div>
                        <div class="form-control">
                            <div class="input">
                                <img src="/img/user.png" alt="пользователь" class="login">
                                <input type="text" name="login" id="login" placeholder="Логин" value='<?= $postFields["login"]; ?>'>
                            </div>
                            <? if ($errorMessages['login']) {
                                echo \Main\Helpers\StrHelper::outErrors($errorMessages['login']);
                            } ?>
                        </div>
                        <div class="form-control">
                            <div class="input">
                                <img src="/img/пароль.png" alt="пароль" class="password">
                                <input type="password" name="password" id="password" placeholder="Пароль" value='<?= $postFields["password"]; ?>'>
                            </div>
                            <? if ($errorMessages['password']) {
                                echo \Main\Helpers\StrHelper::outErrors($errorMessages['password']);
                            } ?>
                        </div>
                        <div class="form-control">
                            <div class="input">
                                <img src="/img/пароль.png" alt="Подтверждение пароля" class="password">
                                <input type="password" name="password_confirm" id="password_confirm" placeholder="Повторите пароль" value='<?= $postFields["password_confirm"]; ?>'>
                            </div>
                            <? if ($errorMessages['password_confirm']) {
                                echo \Main\Helpers\StrHelper::outErrors($errorMessages['password_confirm']);
                            } ?>
                        </div>
                        <div class="submit ">
                            <input type="submit" id="submit" name="submit" value="Зарегистрироваться">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<? require_once $_SERVER['DOCUMENT_ROOT'].'/include/footer.php'; ?>