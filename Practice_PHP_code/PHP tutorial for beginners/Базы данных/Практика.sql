-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Ноя 20 2020 г., 05:10
-- Версия сервера: 8.0.18
-- Версия PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `практика`
--

-- --------------------------------------------------------

--
-- Структура таблицы `workers`
--

CREATE TABLE `workers` (
  `id` int(8) NOT NULL,
  `name` text COLLATE utf8mb4_general_ci NOT NULL,
  `age` int(2) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `workers`
--

INSERT INTO `workers` (`id`, `name`, `age`, `salary`) VALUES
(1, 'Коля', 23, 400),
(2, 'Вася', 24, 500),
(3, 'Петя', 25, 600),
(4, 'Степан', 30, 750),
(6, 'Евгний', 28, 590),
(7, 'Влад', 32, 900),
(9, 'Маша', 23, 500);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
