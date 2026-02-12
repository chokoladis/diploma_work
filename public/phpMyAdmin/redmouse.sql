-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 03 2019 г., 00:54
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `redmouse`
--

-- --------------------------------------------------------

--
-- Структура таблицы `ask`
--

CREATE TABLE `ask` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `ask` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ask`
--

INSERT INTO `ask` (`id`, `email`, `fname`, `ask`) VALUES
(3, 'redmouse@mail.ru', 'fsdf', 'ebdbwrgg3');

-- --------------------------------------------------------

--
-- Структура таблицы `loginpass`
--

CREATE TABLE `loginpass` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `loginpass`
--

INSERT INTO `loginpass` (`id`, `login`, `email`, `password`) VALUES
(1, 'redAdmin', 'redmouse@mail.ru', '$2y$10$UaoodRbwWfOwGNTVSgirsOXKhiZ3vGlFLPqE3BU0kkcSuezDOF7BC'),
(2, 'boleamshtein', 'igro2@mail.ru', '$2y$10$XIsHlNsclLlMDY/82rNe7.bSiHxErcVS99m7qRVZ90PRRhCi1GAdK'),
(3, 'meow', 'egor11egor@yandex.ru', '$2y$10$vljAmsUHxC67wxyW6GY3UOGYVPzvY.YwiolGgkIZCc2SGlqAvjKBu');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `user` varchar(60) NOT NULL,
  `descr` varchar(50) NOT NULL,
  `state` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id_order`, `user`, `descr`, `state`, `date`) VALUES
(18, 'Коротков Иван', 'Печать на футболке', 'В очереди', '2015-05-20'),
(20, 'Зуйкова Ангелина', 'кружка', 'В очереди', '2015-05-20'),
(23, 'Дмитриева Анастасия', 'Плакат 10 на 10', 'Выполнен', '2019-05-19'),
(27, 'Зуйкова', 'Баннер', 'Выполняется', '2019-05-19');

-- --------------------------------------------------------

--
-- Структура таблицы `otz`
--

CREATE TABLE `otz` (
  `id_otz` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `otz_redmouse` varchar(80) NOT NULL,
  `otz_webpage` varchar(80) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `otz`
--

INSERT INTO `otz` (`id_otz`, `id_user`, `otz_redmouse`, `otz_webpage`, `rating`) VALUES
(1, 1, 'Лучшие в бугуруслане, по моему мнению', 'Знаю что не разбираюсь в этом, но сайт мне не нравится', 4),
(2, 2, 'Офигенный принт на футболку, советую!\r\nспасибо', '', 5),
(3, 2, 'Отличная студия, помогла с подарком для жены, огромное спасибо)', 'Сайт хороший', 5),
(4, 3, 'Спасибо за классную фотографию на холсте :)', 'Сайт дизайнерский, но темноватый', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `price`
--

CREATE TABLE `price` (
  `id` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `ed` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `price`
--

INSERT INTO `price` (`id`, `description`, `price`, `ed`) VALUES
(1, 'Баннер', 250, 'кв.м.'),
(2, 'Вывеска', 350, ''),
(3, 'Табличка', 100, ''),
(4, 'Световые короба', 5000, ''),
(5, 'Пресс-воллы', 1500, ''),
(6, 'Ростовые фигуры', 1000, ''),
(7, 'Штенды', 1500, ''),
(8, 'Информационная доска', 800, ''),
(9, 'Визитки', 1, 'шт.'),
(10, 'Листовки', 1, 'шт.'),
(11, 'Буклеты', 3, 'шт.'),
(12, 'Флаеры', 1, 'шт.'),
(13, 'Календари', 10, 'шт.'),
(14, 'Наклейки', 90, 'шт.'),
(15, 'Сертификаты, дипломы', 50, 'шт.'),
(16, 'Дисконтная карта', 10, 'шт.'),
(17, 'Печать на кружках', 250, 'шт.'),
(18, 'Печать на футболках', 300, ''),
(19, 'Значки', 30, 'шт.'),
(20, 'Блокноты с лого', 100, 'шт.'),
(21, 'Ксерокопия', 2, 'лист'),
(22, 'Набор текста', 15, ''),
(23, 'Контрольные работы', 400, ''),
(24, 'Рефераты', 100, ''),
(25, 'Сообщения, доклады', 30, ''),
(26, 'Плакаты', 250, ''),
(27, 'Санбюллетни', 250, ''),
(28, 'Карты', 250, ''),
(29, 'Презентации', 50, ''),
(30, 'Переводы', 300, '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `uid` int(6) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `activation` varchar(50) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `login` varchar(191) DEFAULT NULL,
  `_email` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `ask`
--
ALTER TABLE `ask`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `loginpass`
--
ALTER TABLE `loginpass`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD UNIQUE KEY `user` (`user`,`descr`,`date`);

--
-- Индексы таблицы `otz`
--
ALTER TABLE `otz`
  ADD PRIMARY KEY (`id_otz`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `activation` (`activation`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `ask`
--
ALTER TABLE `ask`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `loginpass`
--
ALTER TABLE `loginpass`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `otz`
--
ALTER TABLE `otz`
  MODIFY `id_otz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `price`
--
ALTER TABLE `price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(6) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
