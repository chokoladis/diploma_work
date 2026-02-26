<?
require_once $_SERVER['DOCUMENT_ROOT'].'/include/header.php';

\Main\Services\Content\PageService::setTitle('Календарь');

require_once $_SERVER['DOCUMENT_ROOT'].'/assets/css/calendar.css';
?>
    <section class="first" id="first">
        <div class="content">
            <div class="container">
            <div class="img"></div>
            <div class="title">Календарь</div>

            <div class="main">
                <div class="no_work_day">
                    <div class="content_header_title">Праздники. 2019 год</div>
                    <div class="content_header_info">Нерабочими праздничными днями в Российской Федерации являются:</div>
                    <ul>
                        <li>
                            <h5>1-8 января </h5>
                            <span>— Новогодние каникулы</span>
                        </li>
                        <li>
                            <h5>7 января </h5>
                            <span>— Рождество Христово</span>
                        </li>
                        <li>
                            <h5>23 февраля </h5>
                            <span>— День Защитника Отечества</span>
                        </li>
                        <li>
                            <h5>8 марта </h5>
                            <span>— Международный женский день</span>
                        </li>
                        <li>
                            <h5>1 мая </h5>
                            <span>— День Весны и Труда</span>
                        </li>
                        <li>
                            <h5>9 мая </h5>
                            <span>— День Победы</span>
                        </li>
                        <li>
                            <h5>12 июня </h5>
                            <span>— День России</span>
                        </li>
                        <li>
                            <h5>4 ноября </h5>
                            <span>— День народного единства</span>
                        </li>
                    </ul>
                    <div class="dop_info">
                        При совпадении выходного и нерабочего праздничного дней выходной день переносится на следующий после праздничного рабочий день<br> за исключением дней<br> правила переноса которых регулирует Правительство Российской Федерации.
                    </div>
                </div>
                <div class="list_holidays_2019">
                    <div class="title_list_holidays">СПИСОК ПРАЗДНИКОВ В 2019 ГОДУ</div>
                    <ul class="list_mouth">
                        <li><a href="#January">Январь</a></li>
                        <li><a href="#February">Февраль</a></li>
                        <li><a href="#March">Март</a></li>
                        <li><a href="#April">Апрель</a></li>
                        <li><a href="#May">Май</a></li>
                        <li><a href="#June">Июнь</a></li>
                        <li><a href="#July">Июль</a></li>
                        <li><a href="#August">Август</a></li>
                        <li><a href="#September">Сентябрь</a></li>
                        <li><a href="#October">Октябрь</a></li>
                        <li><a href="#November">Ноябрь</a></li>
                        <li><a href="#December">Декабрь</a></li>
                    </ul>
                    <div class="block_list_holiday">
                        <div class="item" id="January">
                            <div class="title_mouth">Январь</div>
                            <div class="days">
                                <div class="item_day">
                                    <div class="day">1 января</div>
                                    <div class="info">Новый год</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">2 января</div>
                                    <div class="info">Новогодние каникулы</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">3 января</div>
                                    <div class="info">Новогодние каникулы<br> День рождения соломинки для коктейлей</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">4 января</div>
                                    <div class="info">Новогодние каникулы<br> День Ньютона</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">5,6 января</div>
                                    <div class="info">Новогодние каникулы</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">7 января</div>
                                    <div class="info">Рождество Христово</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">11 января</div>
                                    <div class="info">Международный день «спасибо»<br> День заповедников и национальных парков России</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">13 января</div>
                                    <div class="info">День российской печати</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">14 января</div>
                                    <div class="info">День создания трубопроводных войск России</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">15 января</div>
                                    <div class="info">День образования Следственного комитета Российской Федераци</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">16 января</div>
                                    <div class="info">Всемирный день «The Beatles»<br> День ледовара</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">17 января</div>
                                    <div class="info">День детских изобретений</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">21 января</div>
                                    <div class="info">День инженерных войск<br> Международный день объятий</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">23 января</div>
                                    <div class="info">День ручного письма</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">24 января</div>
                                    <div class="info">Международный день эскимо</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">25 января</div>
                                    <div class="info">День российского студенчества<br> День штурмана ВМФ</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">26 января</div>
                                    <div class="info">Международный день таможенника</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">27 января</div>
                                    <div class="info">День полного освобождения города Ленинграда от блокады (1944 год)<br> Международный день памяти жертв Холокоста</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">28 января</div>
                                    <div class="info">Международный день защиты персональных данных</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">31 января</div>
                                    <div class="info">Международный день ювелира<br> Международный день без интернета<br> День рождения русской водки</div>
                                </div>
                            </div>
                        </div>
                        <div class="item" id="February">
                            <div class="title_mouth">Февраль</div>
                            <div class="days">
                                <div class="item_day">
                                    <div class="day">2 февраля</div>
                                    <div class="info">День разгрома советскими войсками немецко-фашистских войск в Сталинградской битве (1943 год)</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">4 февраля</div>
                                    <div class="info">Всемирный день борьбы с раковыми заболеваниями</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">6 февраля</div>
                                    <div class="info">Международный день бармена</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">8 февраля</div>
                                    <div class="info">День российской науки<br> День военного топографа</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">9 февраля</div>
                                    <div class="info">День работника гражданской авиации<br> Международный день стоматолога</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">10 февраля</div>
                                    <div class="info">День дипломатического работника</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">11 февраля</div>
                                    <div class="info">День зимних видов спорта</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">12 февраля</div>
                                    <div class="info">Международный день брачных агентств<br> Масленица</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">13 февраля</div>
                                    <div class="info">Всемирный день радио</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">14 февраля</div>
                                    <div class="info">День Святого Валентина<br> День компьютерщика</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">15 февраля</div>
                                    <div class="info">День памяти воинов-интернационалистов<br> Международный день детей<br> больных раком</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">16 февраля</div>
                                    <div class="info">День архива Минэнерго России</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">17 февраля</div>
                                    <div class="info">День российских студенческих отрядов<br> День Службы горючего Вооруженных Сил России<br> День спонтанного проявления доброты</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">18 февраля</div>
                                    <div class="info">День транспортной полиции</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">19 февраля</div>
                                    <div class="info">Прощеное воскресенье</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">20 февраля</div>
                                    <div class="info">Всемирный день социальной справедливости</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">21 февраля</div>
                                    <div class="info">Международный день родного языка<br> Всемирный день экскурсовода</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">23 февраля</div>
                                    <div class="info">День защитника Отечества</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">27 февраля</div>
                                    <div class="info">День Сил специальных операций<br> Международный день полярного медведя</div>
                                </div>
                            </div>
                        </div>
                        <div class="item" id="March">
                            <div class="title_mouth">Март</div>
                            <div class="days">
                                <div class="item_day">
                                    <div class="day">1 марта</div>
                                    <div class="info">День эксперта-криминалиста<br> День кошек в России<br> День хостинг-провайдера</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">2 марта</div>
                                    <div class="info">Международный день спички</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">3 марта</div>
                                    <div class="info">Всемирный день писателя<br> Всемирный день дикой природы<br> Международный день охраны здоровья уха и слуха</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">5 марта</div>
                                    <div class="info">День театрального кассира</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">6 марта</div>
                                    <div class="info">Международный день зубного врача</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">8 марта</div>
                                    <div class="info">Международный женский день</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">9 марта</div>
                                    <div class="info">Всемирный день ди-джея</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">10 марта</div>
                                    <div class="info">День архивов</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">11 марта</div>
                                    <div class="info">День работников геодезии и картографии<br> День работника органов наркоконтроля<br> День охранника</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">12 марта</div>
                                    <div class="info">День работников уголовно-исполнительной системы Минюста</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">13 марта</div>
                                    <div class="info">Международный день планетариев</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">14 марта</div>
                                    <div class="info">Международный день числа «Пи»</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">15 марта</div>
                                    <div class="info">Международный день защиты бельков</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">16 марта</div>
                                    <div class="info">День образования подразделений экономической безопасности в системе МВД</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">18 марта</div>
                                    <div class="info">День работников бытового обслуживания населения и жилищно-коммунального хозяйства</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">19 марта</div>
                                    <div class="info">День моряка-подводника</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">20 марта</div>
                                    <div class="info">Международный день без мяса <br> Международный день счастья <br> День французского языка <br> Международный день астрологии</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">21 марта</div>
                                    <div class="info">Международный день кукольника<br> Всемирный день поэзии<br> Международный день лесов <br> Международный день человека с синдромом Дауна <br> Международный день борьбы за ликвидацию расовой дискриминации</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">22 марта</div>
                                    <div class="info">Всемирный день водных ресурсов <br> Международный день таксиста</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">23 марта</div>
                                    <div class="info">День работников гидрометеорологической службы</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">24 марта</div>
                                    <div class="info">День штурмана ВВС <br> Всемирный день борьбы с туберкулезом</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">25 марта</div>
                                    <div class="info">Международный день памяти жертв рабства и трансатлантической работорговли</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">27 марта</div>
                                    <div class="info">День работника культуры <br> Всемирный день театра <br> День внутренних войск МВД</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">29 марта</div>
                                    <div class="info">День специалиста юридической службы в Вооруженных Силах</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">31 марта</div>
                                    <div class="info">Международный день резервного копирования</div>
                                </div>
                            </div>
                        </div>
                        <div class="item" id="April">
                            <div class="title_mouth">Апрель</div>
                            <div class="days">
                                <div class="item_day">
                                    <div class="day">1 Апреля</div>
                                    <div class="info">День смеха <br> Международный день птиц</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">2 Апреля</div>
                                    <div class="info">День единения народов <br> Всемирный день распространения информации о проблеме аутизма</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">4 Апреля</div>
                                    <div class="info">День веб-мастера</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">6 Апреля</div>
                                    <div class="info">День работников следственных органов МВД <br> Всемирный день настольного тенниса</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">7 Апреля</div>
                                    <div class="info">День рождения Рунета <br> Всемирный день здоровья</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">8 Апреля</div>
                                    <div class="info">День геолога <br> День сотрудников военкоматов <br> День российской анимации <br> Международный день цыган <br> Пасха</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">9 Апреля</div>
                                    <div class="info">День войск противовоздушной обороны</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">11 Апреля</div>
                                    <div class="info">Международный день освобождения узников фашистских концлагерей</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">12 Апреля</div>
                                    <div class="info">День космонавтики</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">13 Апреля</div>
                                    <div class="info">Всемирный день рок-н-ролла <br> День мецената и благотворителя в России</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">15 Апреля</div>
                                    <div class="info">День специалиста по радиоэлектронной борьбе Вооруженных сил <br> Международный день культуры</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">16 Апреля</div>
                                    <div class="info">Международный день цирка</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">17 Апреля</div>
                                    <div class="info">День ветеранов органов внутренних дел и внутренних войск МВД <br> Всемирный день гемофилии</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">18 Апреля</div>
                                    <div class="info">Всемирный день радиолюбителя <br> День победы русских воинов князя Александра Невского над немецкими рыцарями на Чудском озере <br> Международный день памятников и исторических мест</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">19 Апреля</div>
                                    <div class="info">День российской полиграфии <br> День работника ломоперерабатывающей отрасли</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">20 Апреля</div>
                                    <div class="info">Национальный день донора <br> День китайского языка</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">21 Апреля</div>
                                    <div class="info">День главного бухгалтера <br> День местного самоуправления</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">22 Апреля</div>
                                    <div class="info">Международный день Матери-Земли</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">23 Апреля</div>
                                    <div class="info">Всемирный день книг и авторского права <br> День английского языка</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">24 Апреля</div>
                                    <div class="info">Всемирный день породненных городов</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">25 Апреля</div>
                                    <div class="info">Международный день секретаря <br> Всемирный день борьбы против малярии <br> Международный День ДНК</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">26 Апреля</div>
                                    <div class="info">День памяти погибших в радиационных авариях и катастрофах <br> Всемирный день интеллектуальной собственности</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">27 Апреля</div>
                                    <div class="info">День российского парламентаризма <br> День специальных частей Внутренних войск МВД <br> День нотариуса</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">28 Апреля</div>
                                    <div class="info">День химической безопасности <br> Всемирный день охраны труда</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">29 Апреля</div>
                                    <div class="info">Международный (Всемирный) день танца</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">30 Апреля</div>
                                    <div class="info">День пожарной охраны <br>Международный день джаза <br> Международный день ветеринарного врача</div>
                                </div>
                            </div>
                        </div>
                        <div class="item" id="May">
                            <div class="title_mouth">Май</div>
                            <div class="days">
                                <div class="item_day">
                                    <div class="day">1 Мая</div>
                                    <div class="info">Праздник весны и труда</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">3 Мая</div>
                                    <div class="info">Всемирный день свободы печати <br> Всемирный день Солнца</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">5 Мая</div>
                                    <div class="info">Международный день акушерки <br> День водолаза <br> День шифровальщика <br> Международный день борьбы за права инвалидов</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">7 Мая</div>
                                    <div class="info">День создания вооруженных сил <br> День радио</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">8 Мая</div>
                                    <div class="info">День работников ФСВТС <br> День оперативного работника УИС <br> Всемирный День Красного Креста и Красного Полумесяца</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">9 Мая</div>
                                    <div class="info">День Победы</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">12 Мая</div>
                                    <div class="info">День посадки леса <br> Международный день медицинской сестры</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">13 Мая</div>
                                    <div class="info">День Черноморского флота <br> День конвоира</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">14 Мая</div>
                                    <div class="info">День фрилансера <br> Всемирный день мигрирующих птиц</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">15 Мая</div>
                                    <div class="info">Международный день семей <br> Международный день климата <br> Всемирный день памяти жертв СПИДа</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">16 Мая</div>
                                    <div class="info">День биографов</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">17 Мая</div>
                                    <div class="info">Всемирный день электросвязи и информационного общества</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">18 Мая</div>
                                    <div class="info">Ночь музеев <br> День Балтийского флота</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">20 Мая</div>
                                    <div class="info">День калмыцкого чая <br> Всемирный день метрологии</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">21 Мая</div>
                                    <div class="info">День полярника <br> День работников БТИ <br> День военного переводчика <br> День Тихоокеанского флота</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">23 Мая</div>
                                    <div class="info">Всемирный день черепахи</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">24 Мая</div>
                                    <div class="info">День славянской письменности и культуры <br> День кадровика</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">25 Мая</div>
                                    <div class="info">День сварщика <br> День филолога <br> День полотенца <br> Международный день пропавших детей</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">26 Мая</div>
                                    <div class="info">День предпринимателя</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">27 Мая</div>
                                    <div class="info">День химика <br> День библиотекаря</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">28 Мая</div>
                                    <div class="info">День пограничника <br> День оптимизатора <br> День брюнеток</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">29 Мая</div>
                                    <div class="info">День военного автомобилиста <br> День ветеранов таможенной службы <br> Международный день миротворцев ООН</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">31 Мая</div>
                                    <div class="info">День адвоката <br> Всемирный день без табака <br> Всемирный день блондинок</div>
                                </div>
                            </div>
                        </div>
                        <div class="item" id="June">
                            <div class="title_mouth">Июнь</div>
                            <div class="days">
                                <div class="item_day">
                                    <div class="day">1 июня</div>
                                    <div class="info">Всемирный день молока <br> День защиты детей <br> День Северного флота <br> День создания правительственной связи <br> День работников текстильной и легкой промышленности <br> Всемирный день родителей</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">2 июня</div>
                                    <div class="info">День здорового питания</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">3 июня</div>
                                    <div class="info">День мелиоратора</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">5 июня</div>
                                    <div class="info">День эколога <br> День создания Государственной службы карантина растений</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">6 июня</div>
                                    <div class="info">День русского языка</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">7 июня</div>
                                    <div class="info">День краудфандинга</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">8 июня</div>
                                    <div class="info">День социального работника <br> Всемирный день океанов <br> Всемирный день петербургских котов и кошек</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">9 июня</div>
                                    <div class="info">День пивовара <br> День мебельщика <br> Международный день архивов <br> Международный день друзей</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">12 июня</div>
                                    <div class="info">День России <br> Всемирный день борьбы с детским трудом</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">14 июня</div>
                                    <div class="info">Международный день блоггера <br> День работников миграционной службы <br> Всемирный день донора крови</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">15 июня</div>
                                    <div class="info">Всемирный день ветра</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">16 июня</div>
                                    <div class="info">Международный день африканского ребенка</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">17 июня</div>
                                    <div class="info">День медицинского работника <br> Всемирный день борьбы с опустыниванием и засухой</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">20 июня</div>
                                    <div class="info">День специалиста минно-торпедной службы <br> Всемирный день мотоциклиста <br> Всемирный день беженцев <br> Всемирный день защиты слонов в зоопарках</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">21 июня</div>
                                    <div class="info">Международный день скейтбординга <br> День кинолога</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">22 июня</div>
                                    <div class="info">День памяти и скорби</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">23 июня</div>
                                    <div class="info">Международный Олимпийский день <br> День балалайки <br> Международный день вдов</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">25 июня</div>
                                    <div class="info">День дружбы и единения славян<br> День моряка</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">26 июня</div>
                                    <div class="info">Международный день борьбы с употреблением наркотиков и их незаконным оборотом <br> Международный день в поддержку жертв пыток</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">27 июня</div>
                                    <div class="info">Всемирный день рыболовства <br> День молодежи</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">29 июня</div>
                                    <div class="info">День партизан и подпольщиков</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">30 июня</div>
                                    <div class="info">День изобретателя и рационализатора <br> День сотрудника службы охраны уголовно-исполнительной системы Министерства юстиции</div>
                                </div>
                            </div>
                        </div>
                        <div class="item" id="July">
                            <div class="title_mouth">Июнь</div>
                            <div class="days">
                                <div class="item_day">
                                    <div class="day">1 Июля</div>
                                    <div class="info">День празднования добровольного вхождения Бурятии в состав Российского государства</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">2 Июля</div>
                                    <div class="info">Международный день спортивного журналиста <br> Всемирный день НЛО</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">3 Июля</div>
                                    <div class="info">День ГАИ</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">6 Июля</div>
                                    <div class="info">Всемирный день поцелуя</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">7 Июля</div>
                                    <div class="info">День победы русского флота над турецким флотом в Чесменском сражении (1770 год)</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">8 Июля</div>
                                    <div class="info">День работников морского и речного флота<br> День семьи, любви и верности</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">10 Июля</div>
                                    <div class="info">День победы русской армии в Полтавской битве (1709)</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">11 Июля</div>
                                    <div class="info">Всемирный день шоколада <br> День светооператора</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">12 Июля</div>
                                    <div class="info">Всемирный день бортпроводника гражданской авиации</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">15 Июля</div>
                                    <div class="info">День рыбака <br> День почты <br> Международный фестиваль варенья</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">17 Июля</div>
                                    <div class="info">День основания морской авиации</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">18 Июля</div>
                                    <div class="info">День пожарного надзора</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">19 Июля</div>
                                    <div class="info">День юридической службы Министерства внутренних дел</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">20 Июля</div>
                                    <div class="info">Международный день торта <br> Международный день шахмат</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">22 Июля</div>
                                    <div class="info">День металлурга</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">23 Июля</div>
                                    <div class="info">Всемирный день китов и дельфинов</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">24 Июля</div>
                                    <div class="info">День кадастрового инженера</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">25 Июля</div>
                                    <div class="info">День сотрудника органов следствия <br> День речной полиции</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">26 Июля</div>
                                    <div class="info">День парашютиста</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">27 Июля</div>
                                    <div class="info">День системного администратора</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">28 Июля</div>
                                    <div class="info">День работника торговли <br> День Крещения Руси <br> День PR-специалиста</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">29 Июля</div>
                                    <div class="info">День ВМФ</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">30 Июля</div>
                                    <div class="info">Международный день дружбы</div>
                                </div>
                            </div>
                        </div>
                        <div class="item" id="August">
                            <div class="title_mouth">Август</div>
                            <div class="days">
                                <div class="item_day">
                                    <div class="day">1 Августа</div>
                                    <div class="info">День тыла вооруженных сил <br> День образования Службы специальной связи <br> День инкассации</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">2 Августа</div>
                                    <div class="info">День ВДВ</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">5 Августа</div>
                                    <div class="info">День железнодорожника <br> Международный день пива <br> Международный день светофора</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">6 Августа</div>
                                    <div class="info">День железнодорожных войск</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">7 Августа</div>
                                    <div class="info">День специальной связи и информации Федеральной службы охраны</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">8 Августа</div>
                                    <div class="info">Международный день альпинизма <br> Всемирный день кошек</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">9 Августа</div>
                                    <div class="info">День победы в Гангутском сражении (1714)</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">11 Августа</div>
                                    <div class="info">День физкультурника</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">12 Августа</div>
                                    <div class="info">День строителя <br> Международный день молодежи <br> День ВВС</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">13 Августа</div>
                                    <div class="info">Международный день левшей</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">15 Августа</div>
                                    <div class="info">День археолога</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">16 Августа</div>
                                    <div class="info">День малинового варенья</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">19 Августа</div>
                                    <div class="info">День авиации <br> День тельняшки</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">22 Августа</div>
                                    <div class="info">День флага</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">23 Августа</div>
                                    <div class="info">День победы советских войск в Курской битве (1943)</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">26 Августа</div>
                                    <div class="info">День шахтера</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">27 Августа</div>
                                    <div class="info">День кино</div>
                                </div>
                            </div>
                        </div>
                        <div class="item" id="September">
                            <div class="title_mouth">Сентябрь</div>
                            <div class="days">
                                <div class="item_day">
                                    <div class="day">1 Сентября</div>
                                    <div class="info">День знаний</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">2 Сентября</div>
                                    <div class="info">День нефтяника <br> День окончания Второй мировой войны (1945 год) <br> День гвардейца <br> День ППС</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">3 Сентября</div>
                                    <div class="info">День солидарности в борьбе с терроризмом</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">4 Сентября</div>
                                    <div class="info">День специалиста по ядерному обеспечению</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">8 Сентября</div>
                                    <div class="info">Международный день солидарности журналистов <br> День финансиста в России <br> Международный день грамотности <br> День Бородинского сражения (1812 год) <br> День Новороссийского ВМР </div>
                                </div>
                                <div class="item_day">
                                    <div class="day">9 Сентября</div>
                                    <div class="info">День танкиста <br> День тестировщика <br> Международный день красоты <br> День дизайнера</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">11 Сентября</div>
                                    <div class="info">День граненого стакана <br> День Трезвости <br> День победы русской эскадры у мыса Тендра (1790) <br> День специалиста органов воспитательной работы ВС</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">13 Сентября</div>
                                    <div class="info">День программиста <br> День парикмахера</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">15 Сентября</div>
                                    <div class="info">Международный день демократии</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">16 Сентября</div>
                                    <div class="info">День лесника</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">17 Сентября</div>
                                    <div class="info">Международный день сока в России</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">19 Сентября</div>
                                    <div class="info">День рождения «Смайлика» <br> День оружейника</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">20 Сентября</div>
                                    <div class="info">День рекрутера</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">21 Сентября</div>
                                    <div class="info">День секретаря <br> Всемирный день русского единения <br> Международный день мира <br> День победы русских полков в Куликовской битве (1380 год)</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">22 Сентября</div>
                                    <div class="info">Шнобелевская премия</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">24 Сентября</div>
                                    <div class="info">Международный день караванщика</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">25 Сентября</div>
                                    <div class="info">Всероссийский день бега «Кросс нации»</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">27 Сентября</div>
                                    <div class="info">Всемирный день туризма <br> День воспитателя</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">28 Сентября</div>
                                    <div class="info">День атомщика <br> День генерального директора</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">29 Сентября</div>
                                    <div class="info">Всемирный день сердца <br> День отоларинголога</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">30 Сентября</div>
                                    <div class="info">День машиностроителя <br> Международный день переводчика <br> День интернета</div>
                                </div>
                            </div>
                        </div>
                        <div class="item" id="October">
                            <div class="title_mouth">Октябрь</div>
                            <div class="days">
                                <div class="item_day">
                                    <div class="day">1 Октября</div>
                                    <div class="info">Международный день музыки <br> Всемирный день вегетарианства <br> День пожилых людей <br> День Сухопутных войск</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">2 Октября</div>
                                    <div class="info">Международный день социального педагога</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">3 Октября</div>
                                    <div class="info">Всемирный день архитектуры <br> Международный день врача <br> День ОМОНа</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">4 Октября</div>
                                    <div class="info">Всемирная неделя космоса <br> День Космических войск <br> День гражданской обороны МЧС</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">5 Октября</div>
                                    <div class="info">День учителя <br> День работников уголовного розыска</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">6 Октября</div>
                                    <div class="info">День страховщика</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">7 Октября</div>
                                    <div class="info">Всемирный день улыбки <br> День образования штабных подразделений МВД</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">8 Октября</div>
                                    <div class="info">День командира</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">9 Октября</div>
                                    <div class="info">Всемирный день почты</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">10 Октября</div>
                                    <div class="info">Всемирный день психического здоровья</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">12 Октября</div>
                                    <div class="info">День кадрового работника</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">14 Октября</div>
                                    <div class="info">День работника сельского хозяйства и перерабатывающей промышленности <br> Всемирный день яйца <br> День работников заповедного дела</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">15 Октября</div>
                                    <div class="info">День создания адресно-справочной службы</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">16 Октября</div>
                                    <div class="info">Всемирный день анестезии <br> День Шефа <br> Всемирный день хлеба</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">19 Октября</div>
                                    <div class="info">День лицеиста</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">20 Октября</div>
                                    <div class="info">Международный день авиадиспетчера <br> Международный день повара <br> Международный день кредитных союзов <br> День связиста</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">21 Октября</div>
                                    <div class="info">День пищевика <br> День работников дорожного хозяйства</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">22 Октября</div>
                                    <div class="info">День финансово-экономической службы Вооруженных Сил РФ</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">23 Октября</div>
                                    <div class="info">Международный день тёщи <br> День рекламщика</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">24 Октября</div>
                                    <div class="info">Международный день школьных библиотек <br> День Организации Объединенных Наций <br> День подразделений специального назначения</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">25 Октября</div>
                                    <div class="info">	День таможенника <br> День кабельщика</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">27 Октября</div>
                                    <div class="info">День гимнастики</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">28 Октября</div>
                                    <div class="info">День автомобилиста <br> Международный день анимации <br> День создания армейской авиации</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">29 Октября</div>
                                    <div class="info">День работников службы вневедомственной охраны МВД</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">30 Октября</div>
                                    <div class="info">День основания ВМФ <br> День инженера-механика</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">31 Октября</div>
                                    <div class="info"> Всемирный день городов <br> День сурдопереводчика <br> День тюремщика</div>
                                </div>
                            </div>
                        </div>
                        <div class="item" id="November">
                            <div class="title_mouth">Ноябрь</div>
                            <div class="days">
                                <div class="item_day">
                                    <div class="day">1 Ноября</div>
                                    <div class="info">Международный день вегана <br> День пристава</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">4 Ноября</div>
                                    <div class="info">День народного единства</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">5 Ноября</div>
                                    <div class="info">День разведки</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">7 Ноября</div>
                                    <div class="info">День проведения военного парада на Красной площади в 1941 году <br> День Октябрьской революции 1917 года</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">8 Ноября</div>
                                    <div class="info">Международный день КВН</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">10 Ноября</div>
                                    <div class="info">Всемирный день науки <br> Международный день бухгалтерии <br> День милиции</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">11 Ноября</div>
                                    <div class="info">Всемирный день шопинга <br> День работника восстановительного поезда</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">12 Ноября</div>
                                    <div class="info">День работников Сбербанка <br> День специалиста по безопасности <br> День синички</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">13 Ноября</div>
                                    <div class="info">Всемирный день доброты <br> День химзащиты</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">14 Ноября</div>
                                    <div class="info">День социолога</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">15 Ноября</div>
                                    <div class="info">День создания подразделений по борьбе с организованной преступностью <br> День призывника</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">16 Ноября</div>
                                    <div class="info">День проектировщика</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">17 Ноября</div>
                                    <div class="info">День участкового</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">18 Ноября</div>
                                    <div class="info">День рождения Деда Мороза</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">19 Ноября</div>
                                    <div class="info">День артиллерии <br> День стекольщика</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">21 Ноября</div>
                                    <div class="info">День бухгалтера <br> Всемирный день телевидения <br> День работника налоговых органов Российской Федерации <br> Всемирный день приветствий</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">22 Ноября</div>
                                    <div class="info">День психолога</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">24 Ноября</div>
                                <div class="info">День моржа</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">25 Ноября</div>
                                    <div class="info">День матери <br> Черная пятница</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">26 Ноября</div>
                                    <div class="info">Международный день сапожника</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">27 Ноября</div>
                                    <div class="info">День морской пехоты <br> День оценщика</div>
                                </div>
                            </div>
                        </div>
                        <div class="item" id="December">
                            <div class="title_mouth">Декабрь</div>
                            <div class="days">
                                <div class="item_day">
                                    <div class="day">1 Декабря</div>
                                    <div class="info">День борьбы со СПИДом <br> День победы русской эскадры у мыса Синоп (1853 год) <br> День хоккея</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">2 Декабря</div>
                                    <div class="info">День сетевика <br> День банковского работника</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">3 Декабря</div>
                                    <div class="info">День Неизвестного Солдата <br> День инвалидов <br> День юриста <br> Всемирный день компьютерной графики</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">4 Декабря</div>
                                    <div class="info">День информатики<br> День заказов подарков и написания писем Деду Морозу</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">5 Декабря</div>
                                    <div class="info">День начала контрнаступления советских войск в битве под Москвой (1941 год)</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">7 Декабря</div>
                                    <div class="info">Международный день гражданской авиации</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">8 Декабря</div>
                                    <div class="info">День образования российского казначейства</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">9 Декабря</div>
                                    <div class="info">День Героев Отечества <br> День ведомственной охраны железнодорожного транспорта</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">10 Декабря</div>
                                    <div class="info">День создания службы связи МВД <br> Всемирный день футбола</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">11 Декабря</div>
                                    <div class="info">Международный день танго</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">12 Декабря</div>
                                    <div class="info">День Конституции</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">15 Декабря</div>
                                    <div class="info">Международный день чая</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">17 Декабря</div>
                                    <div class="info">День РВСН <br> День сотрудников Государственной фельдъегерской службы</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">18 Декабря</div>
                                    <div class="info">День работников органов ЗАГСа <br> День подразделений собственной безопасности органов внутренних дел</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">19 Декабря</div>
                                    <div class="info">День военной контрразведки <br> День снабженца</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">20 Декабря</div>
                                    <div class="info">День ФСБ</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">22 Декабря</div>
                                    <div class="info">День риэлтора <br> День энергетика <br> День образования Пенсионного фонда</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">23 Декабря</div>
                                    <div class="info">День дальней авиации ВВС</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">24 Декабря</div>
                                    <div class="info">День взятия турецкой крепости Измаил (1790 год)</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">27 Декабря</div>
                                    <div class="info">День спасателя</div>
                                </div>
                                <div class="item_day">
                                    <div class="day">28 Декабря</div>
                                    <div class="info">Международный день кино</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                </div>

            </div>
        </div>
    </section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/include/footer.php';
