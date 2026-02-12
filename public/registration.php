<?include 'db.php';ini_set('display_errors','On');
error_reporting('E_ALL');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>redmouse.ru/registration.php</title>
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" href="css/animate.css">
    <script src="js/wow.min.js"></script> 
    <script>
        new WOW().init();
    </script>   
    <script src="js/slider.js"></script>
    <script src="js/header.js"></script>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles1.css">
    <link rel="stylesheet" href="css/auth.css">
    <link rel="stylesheet" href="css/registration.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <section class="first" id="first">
        <header>   
                <div class="container d-flex align-items-center">
                    <a href="index.php" class="logo">
                        <div class="img-logo" ></div>
                    </a>
                    <ul class="menu d-flex">  
                        <li><a href="catalog.php">Услуги</a></li>
                        <li><a href="price.php">Прайс-лист</a></li>
                        <li><a href="otz.php">Отзывы</a></li>
                        <li><a href="trek.php">Трек-код</a></li>
                        <li><a href="about.php">О нас</a></li>
                        <li class="vk_menu"><a ><img src="css/img/вк.png" alt=""></a>
                            <ul class="vk">
                                <li><a href="https://vk.com/redmouse" target="_blank">Главный директор</a></li>
                                <li><a href="https://vk.com/redmouse_56" target="_blank">Группа</a></li>
                            </ul>
                        </li>
                        <?
                            if (isset($_SESSION['logged_user'])) { 
                                echo '
                                    <li><a class="profile" href="#">'.$_SESSION["logged_user"]->login.'</a></li>
                                    <li><a href="logout.php" >Выйти</a></li>
                                </ul>
                                    ';   
                            }	
                            else {
                                echo '
                                <li><a href="auth.php">Авторизация</a></li>
                                </ul> ';                               
                            }
                        ?>              
                </div>
            </header>
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
                <div class="slider">
                    <div class="slider_body">
                        <form action="#" id="registration_form" method="POST">
                        <div class="input d-flex">
                            <img src="css/img/email.png" alt="Email" class="login"> 
                            <input type="Email" name="Email" id="Email" placeholder="Email" value='<?php echo $data["Email"]; ?>'>
                        </div>
                        <div class="input d-flex">
                            <img src="css/img/пользователь.png" alt="пользователь" class="login">
                            <input type="text" name="login" id="login" placeholder="Логин" value='<?php echo $data["login"]; ?>'>
                        </div>
                        <div class="input d-flex">
                            <img src="css/img/пароль.png" alt="пароль" class="password">
                            <input type="password" name="password" id="password" placeholder="Пароль" value='<?php echo $data["password"]; ?>'>
                        </div>
                        <div class="input d-flex">
                            <img src="css/img/пароль.png" alt="пароль" class="password">
                            <input type="password" name="password2" id="password2" placeholder="Повторите пароль" value='<?php echo $data["password2"]; ?>'>
                        </div>
                        <div class="submit ">
                            <input type="submit" id="submit" name="submit" value="Зарегистрироваться">
                        </div>
                        <?php
                        

                        $data = $_POST;
                        if (isset($data["submit"])) {
                        // регистрация
                            $errors = array();

                            if (trim($data["login"]) == "") {
                                $errors[] = "Вы не ввели логин";
                            }
                            if (trim($data["Email"]) == '') {
                                $errors[] = "Вы не ввели Email";
                            }
                            if ($data["password"] == "") {
                                $errors[] = "Вы не ввели пароль";
                            }
                            if ($data["password"] != $data["password2"]) {
                                $errors[] = "Повторный пароль введен неверно";
                            }
                            if (!(preg_match('/^[A-z0-9]{6,30}$/', $data["password"]))) {
                                $errors[] = "Пароль не соответствует требованиям Требования<br>
                                длинна не менее 6 символов<br>
                                длинна не более 30 символов<br>
                                должен состоять из латинских букв<br><br";                              
                            }
                            if (R::count("loginpass", "login = ?", array($data["login"])) > 0) {
                                $errors[] = "Пользователь с таким логином уже существует";
                            }
                            if (R::count("loginpass", "Email = ?", array($data["Email"])) > 0) {
                                $errors[] = "Пользователь с таким Email уже существует";
                            }

                            ini_set('display_errors','On');
                            if (empty($errors)) {
                                $user = R::dispense("loginpass");
                                $user->login = $data["login"];
                                $user->email = $data["Email"];
                                $user->password = password_hash($data["password"], PASSWORD_DEFAULT);
                                R::store($user);
                                echo "<div class='succes'>Вы успешно зарегистрировались!</div>";
                               
                            }
                            else {
                                echo "<div class='errors'>Ошибка при регистрации <br>".array_shift($errors)."</div>";
                            }
                        }
                        ?>           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="on_top">▲</div>
    <footer>
        <div class="container">
            <div class="padding-top w100 d-flex justify-content-center">
                <div class="footer_item">
                    <h4 class="upper animated wow slideInLeft animated" style="visibility: visible; animation-name: slideInLeft;">Адрес</h4>
                    <p class="animated wow slideInLeft animated" style="visibility: visible; animation-name: slideInLeft;">г. Бугуруслан, ул. Красногвардейская 41</p>
                    <h4 class="upper animated wow slideInLeft animated" style="visibility: visible; animation-name: slideInLeft;">Телефоны</h4>
                    <p class="animated wow slideInLeft animated" style="visibility: visible; animation-name: slideInLeft;">
                        +7 (932) 555-55-22<br>
                        +7 (922) 855-55-54
                    </p>
                </div>
                <div class="footer_item">
                    <h4 class="upper animated wow slideInLeft animated" style="visibility: visible; animation-name: slideInLeft;">Реквизиты</h4>
                    <p class="animated wow slideInLeft animated" style="visibility: visible; animation-name: slideInLeft;">ИНН 560200748211 <br>
                    ОГРНИП 304560201700021</p>
                    <h4 class="upper animated wow slideInLeft animated" style="visibility: visible; animation-name: slideInLeft;">График работы</h4>
                    <p class="animated wow slideInLeft animated" style="visibility: visible; animation-name: slideInLeft;">
                        Открыто c 10:00 до 19:00<br>
                        Выходной - сб, вс
                    </p>
                </div>
                <div class="footer_item">
                    <h4 class="upper animated wow slideInLeft animated" style="visibility: visible; animation-name: slideInLeft;">Соцсети</h4>
                    <a href="https://vk.com/redmouse">
                    <img src="css/img/вк.png" alt="" class="animated wow slideInLeft animated" style="visibility: visible; animation-name: slideInLeft;"></a>
                </div>
                <div class="map">
                    <h4 class="upper animated wow slideInLeft animated" style="visibility: visible; animation-name: slideInLeft;">Геолокация</h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1182.3369764952852!2d52.42806900723814!3d53.652785596262525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4164074b28662273%3A0xddf5b1f804070d41!2z0JrRgNCw0YHQvdC-0LPQstCw0YDQtNC10LnRgdC60LDRjyDRg9C7LiwgNDEsINCR0YPQs9GD0YDRg9GB0LvQsNC9LCDQntGA0LXQvdCx0YPRgNCz0YHQutCw0Y8g0L7QsdC7LiwgNDYxNjMw!5e0!3m2!1sru!2sru!4v1557843021007!5m2!1sru!2sru" class="map wow rollIn" frameborder="0" allowfullscreen="true"></iframe>
                </div>
            </div>
            <div class="footer_block_a d-flex justify-content-center">
                <div class="footer_a"><a href="map.php">Карта сайта</a></div>
                <div class="footer_a"><a href="sp_info.php">Справочная информация</a></div>
                <div class="footer_a"><a href="ask.php">Вопросы и ответы</a></div>
                <div class="footer_a"><a href="ask.php">Календарь</a></div>
            </div>
            
            <p class="copyright slideInDown wow animated">© «Цифровая студия RedMouse (ИП Соловьев)», 2019</p>
            <div class="looks">
              <a href="http://www.warlog.ru/" target="_blank"><img border="0" src="http://www.warlog.ru/counter/?i=3003" alt="счетчик посещений" title="счетчик посещений" /></a>
            </div>
        </div>
    </footer>
    <script src="js/ask.js"></script>
    <script src="js/header.js"></script>
</body>
</html>