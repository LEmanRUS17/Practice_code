-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Ноя 20 2020 г., 05:08
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
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `url` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `text` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `title`, `url`, `text`) VALUES
(1, 'index', 'index', 'index'),
(14, 'contacts', 'contacts', 'contacts'),
(47, 'test', 'test', 'test'),
(49, '123', 'test', '123');

-- --------------------------------------------------------

--
-- Структура таблицы `pagestest`
--

CREATE TABLE `pagestest` (
  `id` int(11) NOT NULL,
  `athor` text COLLATE utf8mb4_general_ci NOT NULL,
  `article` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `pagestest`
--

INSERT INTO `pagestest` (`id`, `athor`, `article`) VALUES
(1, 'Петров', 'В своей статье рассказывает о машинах.'),
(2, 'Иванов', 'Написал статью об инфляции.'),
(3, 'Сидоров', 'Придумал новый химический элемент.'),
(4, 'Осокина', 'Также писала о машинах.'),
(5, 'Ветров', 'Написал статью о том, как разрабатывать элементы дизайна.');

-- --------------------------------------------------------

--
-- Структура таблицы `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `age` int(11) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `test`
--

INSERT INTO `test` (`id`, `name`, `age`, `salary`) VALUES
(1, 'Дима', 23, 400),
(2, 'Петя', 25, 500),
(3, 'Вася', 23, 500),
(4, 'Коля', 30, 1000),
(5, 'Иван', 27, 500),
(6, 'Кирил', 28, 1000),
(7, 'Гена', 30, 1000),
(8, 'Влад', 34, 800);

-- --------------------------------------------------------

--
-- Структура таблицы `workers 1`
--

CREATE TABLE `workers 1` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_general_ci NOT NULL,
  `age` int(11) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `workers 1`
--

INSERT INTO `workers 1` (`id`, `name`, `age`, `salary`) VALUES
(1, 'Коля', 23, 400),
(2, 'Вася', 24, 500),
(3, 'Петя', 25, 600),
(5, 'Степан', 30, 780),
(8, 'Виталя', 34, 500),
(12, 'Иван', 23, 450),
(13, 'Валентин', 34, 1500);

-- --------------------------------------------------------

--
-- Структура таблицы `workres`
--

CREATE TABLE `workres` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_general_ci NOT NULL,
  `age` int(3) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `workres`
--

INSERT INTO `workres` (`id`, `name`, `age`, `salary`) VALUES
(2, 'Петя', 25, 700),
(5, 'Иван', 23, 700),
(6, 'Кирилл', 28, 1000),
(9, 'Светлана', 25, 1200),
(10, 'Ярослав', 30, 1200),
(11, 'Пётр', 31, 1000),
(12, 'Дима', 23, 400),
(13, 'Женя', 23, 900),
(14, 'Коля', 35, 1000);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pagestest`
--
ALTER TABLE `pagestest`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `workers 1`
--
ALTER TABLE `workers 1`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `workres`
--
ALTER TABLE `workres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT для таблицы `pagestest`
--
ALTER TABLE `pagestest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `workers 1`
--
ALTER TABLE `workers 1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `workres`
--
ALTER TABLE `workres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
