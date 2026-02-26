<?

use Main\Helpers\StrHelper;

require_once $_SERVER['DOCUMENT_ROOT'].'/include/header.php';

\Main\Services\Content\PageService::setTitle('Авторизация');

require_once $_SERVER['DOCUMENT_ROOT'].'/assets/css/auth.php';
?>

<section class="first" id="first">
    <div class="content">
        <div class="container d-flex">
            <div class="offer">
                <div class="offer_body">
                    <div class="title">
                        <div class="vertical">Авторизируйся</div>
                        <div class="title2">
                            <h2>чтобы</h2>
                            <hr>
                            <h1 class="title_order">Оставить отзыв</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="action">
                <form action="#" method="post" id="auth-form">
                    <?
                        if(isset($_POST['submit_auth'])) {

                            $authService = new \Main\Services\Auth\AuthService;
                            [$result, $errors] = $authService->login();
                            if ($result) {
                                header("Location: /");//todo alert
                            }
                        }
                    ?>
                    <div class="form-control">
                        <div class="input d-flex">
                            <img src="/img/user.png" alt="пользователь" class="login">
                            <input type="text" name="login" id="login" placeholder="Логин" autocomplete="login">
                        </div>
                        <div class="input-error">
                            <?
                            if (isset($errors['login'])) {
                                echo StrHelper::outErrors($errors['login']);
                            }
                            ?>
                        </div>
                    </div>
                    <div class="form-control">
                        <div class="input d-flex">
                            <img src="/img/пароль.png" alt="пароль" class="password">
                            <input type="password" name="password" id="password" placeholder="Пароль" autocomplete="password">
                        </div>
                        <div class="input-error">
                            <?
                                if (isset($errors['password'])) {
                                    echo StrHelper::outErrors($errors['password']);
                                }
                            ?>
                        </div>
                    </div>
                    <div class="btn-group">
                        <div class="submit">
                            <input type="submit" id="submit" name="submit_auth" value="Войти">
                        </div>
                        <div class="submit">
                            <a href="/register/" class="registration">Зарегистрироваться</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php require_once $_SERVER['DOCUMENT_ROOT'].'/include/footer.php'; ?>