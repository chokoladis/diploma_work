<?
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
            <div class="slider">
                <div class="slider_body">
                    <form action="#" method="post">
                        <div class="input d-flex">
                            <img src="/img/пользователь.png" alt="пользователь" class="login">
                            <input type="text" name="login" id="login" placeholder="Логин" autocomplete="login">
                        </div>
                        <div class="input d-flex">
                            <img src="/img/пароль.png" alt="пароль" class="password">
                            <input type="password" name="password" id="password" placeholder="Пароль" autocomplete="password">
                        </div>
                        <div class="submit ">
                            <input type="submit" id="submit" name="submit_auth" value="Войти">
                        </div>
                        <div class="submit">
                            <a href="/register/" class="registration">Зарегистрироваться</a>
                        </div>
                        <?
                        if(isset($_POST['submit_auth'])) {
                            $errors = array();
                            $user = R::findOne('loginpass', "login = ?", array($_POST['login']));
                            if ($user) {
                                if (password_verify($_POST['password'], $user->password)) {
                                    $login = $_POST['login'];
                                    $query = mysqli_query($connect,"SELECT * FROM `loginpass` WHERE `login` ='$login'");
                                    while ($row = mysqli_fetch_assoc($query)) {
                                        $_SESSION['logged_user'] = $user;
                                    };
                                } else {
                                    $errors[] = "Неверно введен пароль";
                                }
                            } else {
                                $errors[] = "Пользователь с таким логином не найден";
                            }
                            if (!empty($errors)) {
                                echo "<div class='errors'>".array_shift($errors)."</div>";
                            }
                        }
                        ?>
                    </form>
                    <?
                    if (isset($_SESSION['logged_user'])) : ?>
                        <div class="succes">
                            Вы успешно авторизовались!
                        </div>
                    <?  endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once $_SERVER['DOCUMENT_ROOT'].'/include/footer.php'; ?>