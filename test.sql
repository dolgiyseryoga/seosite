-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 07 2022 г., 23:07
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
-- База данных: `test`
--

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
(4, '1111', 'aaaa', 'dolgiyseryoga@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'uploads/1651838945'),
(5, 'Sergey', 'sergey', 'jujutsubelarus@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'uploads/1651841722'),
(6, 'Сергей тест', 'dolgiy', 'dolgiysery@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'uploads/1651949731razrabotka_1.jpg'),
(7, 'Ser', 'ser', 'efea@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'uploads/1651952765'),
(8, 'Полина', 'pol', 'dologa@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'uploads/1651953976');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
