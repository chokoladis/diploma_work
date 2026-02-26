<?

use Main\Helpers\StrHelper;

require_once $_SERVER['DOCUMENT_ROOT'].'/include/header.php';

\Main\Services\Content\PageService::setTitle('Вопросы и ответы');

require_once $_SERVER['DOCUMENT_ROOT'].'/assets/css/faq.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/assets/js/faq.php';
?>

    <section class="first" id="first">
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

<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/include/footer.php';
?>
