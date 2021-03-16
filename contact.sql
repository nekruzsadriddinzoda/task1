-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 16 2021 г., 07:20
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `contact`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `c_name` varchar(127) NOT NULL,
  `picture` varchar(127) NOT NULL,
  `email` varchar(127) NOT NULL,
  `phone` varchar(127) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `c_name`, `picture`, `email`, `phone`, `created`, `updated`) VALUES
(2, 'Ахроров Икром', '5788c288d18a8798f2cd6a358ddb1e33clouds.jpg', 'ikrom56@mail.ru, ikromjon56@mail.ru ', '904040250, 928446776', '2021-03-16 04:10:20', '2021-03-16 05:05:28'),
(3, 'Джамолов Джахонгир', 'f9aeab0bb659b5f3945edfa8bdfa3b26gator.jpg', 'jaha567@gmail.com', '917654536', '2021-03-16 04:11:16', '2021-03-16 04:11:16'),
(4, 'Иргашев Санджар', 'a0ea573d03139b76f6f82f312f8e5b0cmule.jpg', 'sanjar34@gmail.com', '934567898', '2021-03-16 04:12:00', '2021-03-16 04:12:00'),
(5, 'Бегматова Ситора', 'a1590d2e95e279dce7243f5e2edb8c09jellyfish.jpg', 'sitora20@gmail.com', '905674545', '2021-03-16 04:13:02', '2021-03-16 04:13:02'),
(6, 'Бобоев Ином', 'd7ca599d4d6fa29c78871ee176e44911gator.jpg', 'inom33@gmail.com', '929646767', '2021-03-16 04:13:43', '2021-03-16 04:13:43'),
(7, 'Зарипова Малика', '41b428c025c67386290c6c637e0d79b5mule.jpg', 'malika24@mail.ru', '936789009', '2021-03-16 04:14:55', '2021-03-16 04:14:55'),
(8, 'Каримов Бахтиёр', 'bdb4b33dab039ce3480e81683228c60dclouds.jpg', 'baha94@mail.ru', '908764545', '2021-03-16 04:24:38', '2021-03-16 04:24:38'),
(9, 'Рустамова Сарвиноз ', 'c022f3d3ceb7cf566c8dca4f395f399ajellyfish.jpg', 'sarvinoz67@gmail.com', '923458989', '2021-03-16 04:25:51', '2021-03-16 04:25:51'),
(10, 'Рахимов Фарахманд', '80458e6493adf16b52a9e80c4b0e6514gator.jpg', 'farahmand56@mail.ru', '939877889', '2021-03-16 04:27:06', '2021-03-16 04:27:06'),
(11, 'Джаборова Шахло', 'bdb8fd7f1f36027596fa2c9d1d5bdd6aclouds.jpg', 'shahl023@gmail.com', '929877756', '2021-03-16 04:29:11', '2021-03-16 04:29:11'),
(12, 'Икболов Джафар', 'ccf773340107cceed479de120327dc7bjellyfish.jpg', 'jafar45@mail.ru', '905674567', '2021-03-16 04:31:09', '2021-03-16 04:31:09'),
(13, 'Умаров Мурод', 'b8929e2c7306ac03c6b67d302b00cc1fmule.jpg', 'murod45@gmail.com', '915678945', '2021-03-16 04:32:35', '2021-03-16 04:32:35'),
(14, 'Гогаева Алина', 'c7885673ff55496745b723138d352de8mule.jpg', 'alina22@mail.ru', '909874544', '2021-03-16 04:33:45', '2021-03-16 04:33:45'),
(15, 'Сидорова Марина', '17866157a4c1201ab929bbc2d2f6fe20clouds.jpg', 'marina65@mail.ru', '904565656', '2021-03-16 04:34:45', '2021-03-16 04:34:45'),
(16, 'Самадова Ситора', '0c12dd892939ec76a99543f1758cd5dfmule.jpg', 'sitorabonu45@gmail.com', '929633789', '2021-03-16 04:35:33', '2021-03-16 04:35:33'),
(17, 'Икромова Саодат', '9b06aa7af3b93ce2ec5a948af7710281clouds.jpg', 'saodat90@gmail.com', '929877777', '2021-03-16 04:36:25', '2021-03-16 04:36:25'),
(18, 'Икромов Акрам', '90c12a50a1b299d14d6e334e8a599579clouds.jpg', 'akram34@gmail.com', '906785665', '2021-03-16 04:38:10', '2021-03-16 04:38:34'),
(37, 'Икромов Акбар', '5b98ffef3c50a6424c59382f6d1dfb11clouds.jpg', 'akbar34@gmail.com', '905678990', '2021-03-16 05:06:03', '2021-03-16 05:06:03'),
(38, 'Олимова Ольга', 'fc84e03337855d03530b714a189d8fffjellyfish.jpg', 'olya2390@mail.ru', '905679009', '2021-03-16 07:17:51', '2021-03-16 07:17:51');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
