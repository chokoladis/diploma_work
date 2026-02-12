<?php require_once 'include/header.php'; ?>
<body>
    <section class="first" id="first">
        <header>   
            <div class="container d-flex align-items-center">
                <a href="/" class="logo">
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
                                <li><form action="#" method="POST"><input class="exit" name="exit" type="submit" value="Выйти"></form></li>
                            </ul>
                                ';   
                            $exit = $_POST['exit'];
                            if (isset($exit)) {
                                unset($_SESSION['logged_user']);
                            }       
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
                <div class="offer wow slideInLeft" data-wow-duration="2s">
                    <div class="krug wow rollIn" data-wow-duration="3s"></div>
                    <div class="plus1 wow rollIn" data-wow-duration="3s"></div>
                    <div class="line1 wow rollIn" data-wow-duration="3s"></div>
                    <div class="line2 wow rollIn " data-wow-duration="3s"></div>
                    <div class="plus2 wow rollIn" data-wow-duration="3s"></div>
                    <div class="offer_body">
                        <h1 class="offer_title">
                            <div class="offer_word">
                            </div>
                            <div class="offer_title_small">принтом у нас</div>
                        </h1>
                        <div class="offer_btn">
                            <a href="catalog.php" class="catalog">Перейти к услугам ▶</a>
                        </div>
                        
                    </div>
                    <div class="tochki"></div>
                   
                </div>
                <div class="slider wow slideInRight">
                    <div class="btns_comand d-flex">
                       <div class="btn_comand prev d-flex justify-content-center" >⇦</div>
                       <div class="btn_comand next d-flex justify-content-center" >⇨</div>
                   </div>
                    <div class="dline1 wow rollIn" data-wow-delay="3s"></div>
                    <div class="tringles wow rollIn" data-wow-delay="3s"></div>
                    <div class="slider_body wow bounceInRight " data-wow-delay="2s">
                        <div class="slider_item curry">
                            <img src="css/img/Слайдер/siTZq1kBiWM.jpg" alt="">
                            <div class="title_slider ">
                                <div class="title_img">Фотография на холсте</div>
                                <div class="title_price">от 800 ₽</div>
                            </div>
                        </div>
                        <div class="slider_item">
                            <img src="css/img/Слайдер/SJlh96DyOBg.jpg" alt="">
                            <div class="title_slider ">
                                <div class="title_img">Печать на кружке</div>
                                <div class="title_price">от 250 ₽</div>
                            </div>
                        </div>
                        <div class="slider_item">
                            <img src="css/img/Слайдер/fsT7ZAW7ywc.jpg" alt="">
                            <div class="title_slider ">
                                <div class="title_img">Печать на одежде</div>
                                <div class="title_price">от 300 ₽</div>
                            </div>
                        </div>
                        <div class="slider_item">
                            <img src="css/img/Слайдер/4-x3uC3c0BQ.jpg" alt="">
                            <div class="title_slider ">
                                <div class="title_img">Сообщения, доклады</div>
                                <div class="title_price">от 30 ₽</div>
                            </div>
                        </div>
                        <div class="slider_item">
                            <img src="css/img/Слайдер/c_ZIWAEcXnU.jpg" alt="">
                            <div class="title_slider ">
                                <div class="title_img">Визитка</div>
                                <div class="title_price">1 ₽/шт</div>
                            </div>
                        </div>
                   </div>
                   </div>
                </div>
            </div>
        </div>
    </section>
<?php require_once 'include/footer.php'; ?>