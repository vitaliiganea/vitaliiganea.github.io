-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 22 2016 г., 07:37
-- Версия сервера: 5.5.50
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `register`
--

-- --------------------------------------------------------

--
-- Структура таблицы `producte`
--

CREATE TABLE IF NOT EXISTS `producte` (
  `Product_Id` int(11) NOT NULL,
  `Imagine` varchar(250) CHARACTER SET utf8 NOT NULL,
  `Nume` varchar(250) CHARACTER SET utf8 NOT NULL,
  `Descriere` varchar(250) CHARACTER SET utf8 NOT NULL,
  `Pret` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `producte`
--

INSERT INTO `producte` (`Product_Id`, `Imagine`, `Nume`, `Descriere`, `Pret`) VALUES
(1, '', 'Buchet', 'Descriere', 12),
(2, 'asdasd', 'asdasda', 'asdasdsa', 123),
(3, 'asdasd', 'asdasda', 'asdasdsa', 123);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(4, 'zcxzxcxc', 'catalinapinzari@mail.ru', '34a5f07a6806c69921e856765c98f21c', '2016-12-22 06:40:51'),
(5, 'fdgdfgd', 'catalinapinzari@mail.ru', '34a5f07a6806c69921e856765c98f21c', '2016-12-22 06:42:43'),
(6, 'sdfsdfdf', 'catalinapinzari@mail.ru', '34a5f07a6806c69921e856765c98f21c', '2016-12-22 06:59:16'),
(7, 'dsfsdfsdf', 'catalinapinzari@mail.ru', '34a5f07a6806c69921e856765c98f21c', '2016-12-22 07:10:30'),
(8, 'qweqwqwe', 'catalinapinzari@mail.ru', '34a5f07a6806c69921e856765c98f21c', '2016-12-22 07:22:45'),
(9, 'asdasd', 'catalinapinzari@mail.ru', '34a5f07a6806c69921e856765c98f21c', '2016-12-22 07:24:03'),
(10, 'sdfsfd', 'catalinapinzari@mail.ru', '34a5f07a6806c69921e856765c98f21c', '2016-12-22 07:27:58');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `producte`
--
ALTER TABLE `producte`
  ADD PRIMARY KEY (`Product_Id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `producte`
--
ALTER TABLE `producte`
  MODIFY `Product_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
