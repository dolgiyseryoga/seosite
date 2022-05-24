-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 24 2022 г., 10:41
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
-- База данных: `uslugi`
--

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
(16, 'Интернет-магазин WordPress, Joomla, Bitrix, Shop-Script', 'Функциональные и надежные решения для интернет маркетинга, разработка структуры сайта под дальнейшее продвижение, анализ конкурентов, структура сайта, яркий дизайн и индивидуальный функционал, подключение платежных систем, интеграция с 1C, программирование 15 часов', 170),
(17, 'Тариф Лайт', 'Продвижение корпоративного сайта', 133),
(19, 'Интернет-магазин WordPress, Joomla, Bitrix, Shop-Script', 'Функциональные и надежные решения для интернет маркетинга, разработка структуры сайта под дальнейшее продвижение, анализ конкурентов, структура сайта, яркий дизайн и индивидуальный функционал, подключение платежных систем, интеграция с 1C, программирование 15 часов', 170);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `us`
--
ALTER TABLE `us`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `us`
--
ALTER TABLE `us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
