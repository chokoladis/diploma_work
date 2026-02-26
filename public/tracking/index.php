<?

use Main\Helpers\StrHelper;

require_once $_SERVER['DOCUMENT_ROOT'].'/include/header.php';

// todo middleware ? для запрета или редиректа авторизованным
\Main\Services\Content\PageService::setTitle('Отслеживание заказа');

require_once $_SERVER['DOCUMENT_ROOT'].'/assets/css/tracking.php';

?>
<section class="first" id="first">
    <div class="content">
        <div class="container d-flex">
            <div class="offer">
                <div class="offer_title">Отследи свой заказ</div>
                <div class="offer_img"></div>
            </div>
            <div class="slider">
                <form action="#" method="POST" class="search">
                    <input type="search" name="trek" id="search" placeholder="Трек-код">
                </form>
                <?php

                if ($_POST['trek']){
//                    todo make table, search in orders, rework form for order

                        echo "<div class='error'>
                                    <div class='img'>
                                        <p>ошибка</p>
                                        <img src='/img/error.jpg'>
                                        <p class='down'>пнятьненко?</p>
                                    </div>
                                    <span>По вашему запросу трек-кода не найдено</span>
                                    
                                </div>";
                } else{
//                            <div class='trek'>
//                                            <table>
//                                                <tr>
//                                                    <th colspan='4' class='trek_title'>Ваш заказ</th>
//                                                </tr>
//                                                <tr>
//                                                    <th colspan='4'><br></th>
//                                                </tr>
//                                                <tr class='title'>
//                                                    <td>Код</td>
//                                                    <td>Описание</td>
//                                                    <td>Статус</td>
//                                                    <td>Дата создания</td>
//                                                </tr>
//                                                <tr class='descr'>
//                                                    <td>{$r[id_order]}</td>
//                                                    <td>{$r[descr]}</td>
//                                                    <td>{$r[state]}</td>
//                                                    <td>{$r[date]}</td>
//                                                </tr>
//                                            </table>
                }
                if($_SESSION['logged_user']->login=='redAdmin'){
                    echo "<div class='btns'>
                            <a href='add_change_trek.php'>Добавить</a>
                            <a href='add_change_trek.php'>Изменить</a>
                        </div>";
                }
                ?>
            </div>

        </div>
    </div>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/include/footer.php';