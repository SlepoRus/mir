-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Апр 19 2017 г., 15:16
-- Версия сервера: 5.7.17-0ubuntu0.16.04.1
-- Версия PHP: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mireavr`
--

-- --------------------------------------------------------

--
-- Структура таблицы `codelib`
--

CREATE TABLE `codelib` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `codelib`
--

INSERT INTO `codelib` (`id`, `title`, `author`, `category`, `link`, `date`) VALUES
(9, '31', 2, 'ar', '213', '2017-04-18'),
(11, 'w', 2, 'vr', 'w', '2017-04-18');

-- --------------------------------------------------------

--
-- Структура таблицы `ded`
--

CREATE TABLE `ded` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `promt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `ded`
--

INSERT INTO `ded` (`id`, `userid`, `promt`) VALUES
(1, 2, 999);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `activate` int(1) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `auth_key` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `password_hash`, `email`, `activate`, `password_reset_token`, `auth_key`, `created_at`, `updated_at`) VALUES
(1, 'gavno', '$2y$13$kq9nI3UmusbtT4baslHiJuUwzyVwWHmqR1K/BMxXpYtFs7R4AOz8K', 'yandex@yandex.ru', 1, NULL, 'tl-2aG5tWegTORyXF5xWkV4d6r33OgGo', '1492470707', '1492470707'),
(2, 'yaba@yandex.ru', '$2y$13$xsa8GNalHb89Ybv8fuD2Q.0RGBVT/E0hZ9KS9dPpjDINQLCCGTwyK', 'yaba@yandex.ru', 1, NULL, 'dndXqlNIpNIaCcfKBPxBOaJ6NgHfjODw', '1492470930', '1492470930');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `codelib`
--
ALTER TABLE `codelib`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ded`
--
ALTER TABLE `ded`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `codelib`
--
ALTER TABLE `codelib`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблицы `ded`
--
ALTER TABLE `ded`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
