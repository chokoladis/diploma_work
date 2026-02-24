<?include 'db.php';ini_set('display_errors','On');
error_reporting('E_ALL');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>redmouse.ru</title>
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" href="css/animate.css">
    <script src="js/wow.min.js"></script> 
    <script>
        new WOW().init();
    </script>   
    <script src="js/slider.js"></script>
    
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles1.css">
    <link rel="stylesheet" href="css/ask.css">
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
                <div class="img">
                </div>
                <div class="title">Вопросы и ответы</div>
                
                <div class="main">
                    <div class="categorys">
                        <div class="category_ask">
                            <div class="title_category">Вопросы о концепции "Макет"</div>
                            <div class="asks">
                                <div class="block_ask">
                                    <div class="ask">Мой дизайнер подготовил идеальный макет, а вы напечатали брак. Зачем вы испортили мой файл?</div>
                                    <div class="answer">Качество печатной продукции, соблюдение сроков — отличительная черта RedMouse. Качество полиграфии для нас также важно, как и для вас. Получая от вас файлы, которые невозможно будет использовать в сборке спусков заставят наших специалистов написать вам письмо или позвонить, чтобы объяснить суть проблемы и запросить новый файл, с которым можно будет продолжить работу.</div>
                                </div>
                                <hr>
                                <div class="block_ask">
                                    <div class="ask">Почему вы не хотите проверить и доработать мои файлы бесплатно?</div>
                                    <div class="answer">Пожалуй, отвечу встречным вопросом: когда вы распечатываете документ на принтере, он проверяет ваш документ на наличие ошибок, опечаток и вообще возможности самой печати? Или ваш принтер просто сам дорабатывает ваш макет перед печатью?<br>
                                        <br>
                                        Проведя аналогию, типография — большой принтер, внутри которого есть структура отделов, в которой работают люди, оказывая своим трудом услуги Заказчикам типографии, и которые питаются отнюдь не электричеством.<br>
                                        <br>Если вы понимаете, что с вашим макетом что-то не так, просто закажите необходимый вам пакет услуг до того, как вы получите некачественный тираж.</div>
                                </div>
                            </div>
                        </div>
                        <div class="category_ask">
                            <div class="title_category">Вопросы о специализации и оснащенности</div>
                            <div class="asks">
                                <div class="block_ask">
                                    <div class="ask">На чем специализируется ваша типография? Что у вас получается лучше всего?</div>
                                    <div class="answer">Цифровая студия RedMouse является универсальным полиграфическим предприятием. То есть мы печатаем самую разнообразную полиграфическую продукцию, начиная от простых листовок и заканчивая красочными банерами, календарями на магнитах и др. Все, что есть в списке выпускаемой нами полиграфической продукции высоко оценено нашими клиентами.</div>
                                </div>
                                <hr>
                                <div class="block_ask">
                                    <div class="ask">Какое у вас печатное оборудование?</div>
                                    <div class="answer">Можно выделить несколько печатных машин bizhub с364е, xerox color 560, Roland DG Texart XT-640.
                                        <br>Первая машина способна на скорость печати - 36 стр/мин(размер А4) и имеет является четырёхцветной. <br>
                                        Вторая имеет следующие характеристики: 4-цветная, двусторонняя, 65 стр/мин ч/б, 60 стр/мин цветн. (размер A3).
                                    <br>Третий созданный специально для сублимационной печати обеспечивает высочайшее качество и цвета печати, благодаря эксклюзивной технологии нанесения чернил.  </div>
                                </div>                       
                        </div>
                        </div>
                        <div class="category_ask">
                            <div class="title_category">Вопросы об оплате</div>
                            <div class="asks">
                                <div class="block_ask">
                                    <div class="ask">Какова форма оплаты заказа?</div>
                                    <div class="answer">У нас присутсвует как наличный, так и безналичный расчет. Как правило, 50% предоплата, 50% при получении тиража.</div>
                                </div>
                                <hr>
                                <div class="block_ask">
                                    <div class="ask">Возможна ли оплата банковской карточкой?</div>
                                    <div class="answer">Мы принимаем к оплате банковские карты.<br><br>Также возможым является оплата через приложение "Мобильный Сбербанк"</div>
                                </div>
                        </div>
                        </div>
                    </div>
                    <div class="send_ask">
                        <div class="title_send_ask">Задайте свой вопрос</div>
                        <form action="#" method="POST">
                            <input required type="Email" name="Email" id="Email" placeholder="Введите ваш Email"> 
                            <input required type="text" name="name" id="name" placeholder="Ваше Имя"> 
                            <textarea required name="ask_user" placeholder="Ваш вопрос" warp="warp"></textarea> 
                            <input type="submit" name="submit" value="Задать вопрос">
                            <?
                                $data = $_POST;
                                $ask = $data['ask_user'];
                                $user = $data['name'];
                                $email = $data['Email'];
                                if(isset($data['submit'])) {
                                    $query = "INSERT INTO `ask` VALUES(NULL,'$email','$user','$ask')";
                                    $res = mysqli_query($connect,$query);
                                    echo "<div class='succes'>Вы успешно задали вопрос!</div>";

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