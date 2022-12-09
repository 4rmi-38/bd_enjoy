-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 08 2022 г., 14:59
-- Версия сервера: 10.4.25-MariaDB
-- Версия PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bd_enjoy`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tovar`
--

CREATE TABLE `tovar` (
  `id` int(11) NOT NULL,
  `naimenovanie` varchar(255) DEFAULT NULL,
  `nazvanie` varchar(255) NOT NULL,
  `cena` int(11) DEFAULT NULL,
  `rasmer` int(11) DEFAULT NULL,
  `ves` int(11) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `tovar`
--

INSERT INTO `tovar` (`id`, `naimenovanie`, `nazvanie`, `cena`, `rasmer`, `ves`, `img`) VALUES
(27, 'Игрушка', 'Бензопила', 1499, 20, 399, '5.jpg'),
(28, 'Кофта', 'seoul korea', 1999, 50, 699, '9.jpg'),
(29, 'Футболка', 'Саске', 999, 48, 299, '1.jpg'),
(30, 'Футболка', 'Зеницу', 1299, 46, 299, '4.jpg'),
(31, 'Игрушка', 'Наруто', 1299, 30, 499, '6.jpg'),
(32, 'Кофта', 'Токийский гуль', 1999, 50, 599, '10.jpg'),
(34, 'Катана', 'Demon Slayer', 3399, 60, 749, '11.jpg'),
(35, 'Катана', 'Зеницу', 3499, 70, 849, '12.jpg'),
(36, 'Акрилка', 'Клинок рассекающий демонов', 1199, 25, 159, '13.jpg'),
(37, 'Акрилка', 'Чайльд Genshin Impact', 1299, 30, 219, '14.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tovar`
--
ALTER TABLE `tovar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `img` (`img`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tovar`
--
ALTER TABLE `tovar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
