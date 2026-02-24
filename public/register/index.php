<?
require_once $_SERVER['DOCUMENT_ROOT'].'/include/header.php';

use Particle\Validator\Validator;

\Main\Services\Content\PageService::setTitle('Авторизация');

require_once $_SERVER['DOCUMENT_ROOT'].'/assets/css/auth.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/assets/css/register.php';

$postFields = [
    'email' => \Main\Core\Secure\StringSecure::get($_POST["email"] ?? null),
    'login' => \Main\Core\Secure\StringSecure::get($_POST["login"] ?? null),
    'password' => \Main\Core\Secure\StringSecure::get($_POST["password"] ?? null),
    'password_confirm' => \Main\Core\Secure\StringSecure::get($_POST["password_confirm"] ?? null)
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
                            $errorMessages = [];
                            if (isset($_POST["submit"])) {

                                $rules = new Validator;

                                $rules->overwriteDefaultMessages([
                                        \Particle\Validator\Rule\Required::NON_EXISTENT_KEY => 'Поле не было заполнено',
                                        \Particle\Validator\Rule\NotEmpty::EMPTY_VALUE => 'Поле не было заполнено',
                                        \Particle\Validator\Rule\LengthBetween::TOO_SHORT => 'Поле должно быть более {{min}} символов и менее {{max}}',
                                        \Particle\Validator\Rule\LengthBetween::TOO_LONG => 'Поле должно быть более {{min}} символов и менее {{max}}'
                                ]);

                                $rules->required('login');
                                $rules->required('email')->email();
                                $rules->required('password')->lengthBetween(6, null);
                                $rules->required('password_confirm')->lengthBetween(6, null);

                                $result = $rules->validate($_POST);
                                if (!$result->isValid()) {
                                    $errorMessages = $result->getMessages();
                                } else {
                                    echo 'registraciya';
                                }

//                            if ($_POST["password"] != $_POST["password2"]) {
//                                $errors[] = "Повторный пароль введен неверно";
//                            }
//                            if (!(preg_match('/^[A-z0-9]{6,30}$/', $_POST["password"]))) {
//                                $errors[] = "Пароль не соответствует требованиям Требования<br>
//                                длинна не менее 6 символов<br>
//                                длинна не более 30 символов<br>
//                                должен состоять из латинских букв<br><br";
//                            }
//                            if (R::count("loginpass", "login = ?", array($_POST["login"])) > 0) {
//                                $errors[] = "Пользователь с таким логином уже существует";
//                            }
//                            if (R::count("loginpass", "Email = ?", array($_POST["Email"])) > 0) {
//                                $errors[] = "Пользователь с таким Email уже существует";
//                            }

//                            ini_set('display_errors','On');
//                            if (empty($errors)) {
//                                $user = R::dispense("loginpass");
//                                $user->login = $_POST["login"];
//                                $user->email = $_POST["Email"];
//                                $user->password = password_hash($_POST["password"], PASSWORD_DEFAULT);
//                                R::store($user);
//                                echo "<div class='succes'>Вы успешно зарегистрировались!</div>";
//
//                            }
//                            else {
//                                echo "<div class='errors'>Ошибка при регистрации <br>".array_shift($errors)."</div>";
//                            }
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
                                <img src="/img/пользователь.png" alt="пользователь" class="login">
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