<?include 'db.php';ini_set('display_errors','On');
error_reporting('E_ALL');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>redmouse.ru/catalog.php</title>
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" href="css/animate.css">
    <script src="js/wow.min.js"></script> 
    <script src="js/header.js"></script>
    <script>
        new WOW().init();
    </script> 
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles1.css">
    <link rel="stylesheet" href="css/catalog.css">
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
            <div class="container">
                <div class="main">
                    <div class="item">
                        <img src="css/img/Слайдер/qj_4dH06E7E.jpg" class="wow slideInLeft" data-wow-duration="2s">
                        <div class="title_item wow slideInRight" data-wow-duration="4s">
                            Наружняя реклама
                        </div>
                        <div class="description wow slideInRight" data-wow-duration="4s">
                            <p>Баннер от 250 руб/кв.м.</p>
                            <p>Вывеска от 350 руб</p>
                            <p>Табличка от 100 руб</p>
                            <p>Световые короба от 5000 руб</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="css/img/Слайдер/30AMtc6XGf4.jpg" class="wow slideInLeft" data-wow-duration="2s">
                        <div class="title_item wow slideInRight" data-wow-duration="4s">
                            Рекламная конструкция
                        </div>
                        <div class="description wow slideInRight" data-wow-duration="4s">
                            <p>Пресс-воллы от 1500 руб</p>
                            <p>Ростовые фигуры от 1000 руб</p>
                            <p>Штенды от 1500 руб</p>
                            <p>Информационная доска от 800 руб</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="css/img/Слайдер/c_ZIWAEcXnU.jpg" class="wow slideInLeft" data-wow-duration="2s">
                        <div class="title_item wow slideInRight" data-wow-duration="4s">
                            Полиграфия
                        </div>
                        <div class="description wow slideInRight" data-wow-duration="4s">
                            <p>Визитки от 70 коп. за шт.</p>
                            <p>Листовки от 50 коп. за шт.</p>
                            <p>Буклеты от 3 руб за шт.</p>
                            <p>Флаеры 50 коп. за шт.</p>
                            <p>Календари от 10 руб. за шт.</p>
                            <p>Наклейки от 90 руб.</p>
                            <p>Сертификаты, дипломы от 50 руб.</p>
                            <p>Дисконтная карта от 10 руб.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="css/img/Слайдер/SJlh96DyOBg.jpg" class="wow slideInLeft" data-wow-duration="2s">
                        <div class="title_item wow slideInRight" data-wow-duration="4s">
                            Сувенирная продукция
                        </div>
                        <div class="description wow slideInRight" data-wow-duration="4s">
                            <p>Печать на кружках от 250 руб.</p>
                            <p>Печать на футболках от 300 руб.</p>
                            <p>Значки от 30 руб.</p>
                            <p>Блокноты с лого от 100 руб.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="css/img/Слайдер/4-x3uC3c0BQ.jpg" class="wow slideInLeft" data-wow-duration="2s"> 
                        <div class="title_item wow slideInRight" data-wow-duration="4s">
                            Услуги для студентов
                        </div>
                        <div class="description wow slideInRight" data-wow-duration="4s">
                            <p>Ксерокопия от 2 руб.</p>
                            <p>Набор текста от 15 руб.</p>
                            <p>Контрольные работы от 400 руб.</p>
                            <p>Рефераты от 100 руб.</p>
                            <p>Сообщения, доклады от 30 руб.</p>
                            <p>Плакаты от 250 руб.</p>
                            <p>Санбюллетени от 250 руб.</p>
                            <p>Карты от 250 руб.</p>
                            <p>Презентации от 50 руб.</p>
                            <p>Переводы от 300 руб.</p>
                            <p>Решение задач от 100 руб.</p>
                        </div>
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

    <script src="js/header.js"></script>
</body>
</html>