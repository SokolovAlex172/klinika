-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 30 2023 г., 19:00
-- Версия сервера: 5.5.68-MariaDB
-- Версия PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `newbd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `klinika`
--

CREATE TABLE `klinika` (
  `id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `list_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `list_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `list_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `list_4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_all` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_new` int(11) NOT NULL,
  `val` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_old` int(11) NOT NULL,
  `val_2` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `klinika`
--

INSERT INTO `klinika` (`id`, `title`, `subtitle`, `list_1`, `list_2`, `list_3`, `list_4`, `text_all`, `price_new`, `val`, `price_old`, `val_2`) VALUES
(1, 'Check-UP', 'для мужчин', 'Гормональный скрининг', 'Тестостерон', 'Cвободный тестостерон', 'Глобулин, связывающий половые гормоны', 'Всего', 2800, '₽', 3500, '₽');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `klinika`
--
ALTER TABLE `klinika`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `klinika`
--
ALTER TABLE `klinika`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
