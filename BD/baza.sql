-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 27 2022 г., 23:55
-- Версия сервера: 5.7.33
-- Версия PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `baza`
--

-- --------------------------------------------------------

--
-- Структура таблицы `crud`
--

CREATE TABLE `crud` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pos` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `name`, `title`, `content`) VALUES
(44, 'Сергей', 'ТехПоддержка', 'Отзывчивая команда!'),
(45, 'Анатолий', 'Бухгалтерия', 'Молодцы!'),
(46, 'Марина', 'Seo-продвижение', 'ТОП 10 google за 2 месяца! Отличный результат! =)'),
(47, 'иван', 'привет', 'привееет!'),
(48, 'влад', 'привект', 'привет'),
(49, '777', '777', '777');

-- --------------------------------------------------------

--
-- Структура таблицы `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `subscribe`
--

INSERT INTO `subscribe` (`id`, `name`, `email`) VALUES
(1, 'admin', 'dolgiy.se@yandex.by'),
(3, 'сергей', 'serg@mail.ru'),
(4, 'иван', 'dada@mail.ru'),
(5, 'ivannn', 'gugjg@mail.ru'),
(6, 'grgr', 'fdffd@mail.ru');

-- --------------------------------------------------------

--
-- Структура таблицы `us`
--

CREATE TABLE `us` (
  `id` int(11) NOT NULL,
  `package` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `BYN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `us`
--

INSERT INTO `us` (`id`, `package`, `text`, `BYN`) VALUES
(1, 'На готовом шаблоне OpenCart, WordPress, Joomla', 'Сайты-визитки и корпоративные сайты на бесплатных CMS,Удобная и современная админка,до 20 страниц, адаптивная верстка', 200),
(2, 'Тариф VIP', 'Продвижение VIP', 300),
(3, 'Интернет-магазин WordPress, Joomla, Bitrix, Shop-Script', 'Яяркий дизайн и индивидуальный функционал, подключение платежных систем, интеграция с 1C, программирование 15 часов', 500),
(4, 'Интернет-магазин WordPress, Joomla, Bitrix, Shop-Script', 'Яяркий дизайн и индивидуальный функционал, подключение платежных систем, интеграция с 1C, программирование 15 часов', 500);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(355) DEFAULT NULL,
  `login` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `avatar` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES
(2, 'Иванов Иван Иванович', 'test', 'test@local.ru', '202cb962ac59075b964b07152d234b70', 'uploads/15698233144.png'),
(4, 'Сергей', 'aaaa', 'dolgiyseryoga@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'uploads/1651838945'),
(6, 'qqq', 'qqq', 'dolgiystyhteryoga2@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 'uploads/1652697945'),
(7, 'Polina', 'ananas', 'polin@bfgh.yt', '8ad4e79776506f2a86198f0c922efbff', 'uploads/1653594178'),
(8, 'ivan', 'ivan', 'rtdtrd@maIL.RU', '827ccb0eea8a706c4c34a16891f84e7b', 'uploads/1653672499'),
(9, 'vlad', 'vlad', 'vlad@mail.ru', '827ccb0eea8a706c4c34a16891f84e7b', 'uploads/1653673346'),
(10, '77', '777', '777@mail.ru', '827ccb0eea8a706c4c34a16891f84e7b', 'uploads/1653684192');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `us`
--
ALTER TABLE `us`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT для таблицы `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `us`
--
ALTER TABLE `us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
