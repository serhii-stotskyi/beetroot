-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Авг 04 2017 г., 10:12
-- Версия сервера: 5.7.19-0ubuntu0.16.04.1
-- Версия PHP: 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(1, 'videocard'),
(2, 'phones');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `order_id` int(30) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `date`) VALUES
(68, 2, '2017-07-29 17:53:55'),
(69, 2, '2017-07-29 17:53:57'),
(70, 2, '2017-07-29 17:54:01'),
(71, 2, '2017-07-29 17:54:05'),
(72, 5, '2017-07-29 17:54:17'),
(73, 5, '2017-07-29 17:54:19'),
(74, 5, '2017-07-29 17:54:22'),
(75, 5, '2017-07-29 17:54:26'),
(76, 2, '2017-07-30 11:27:26'),
(77, 2, '2017-07-30 16:34:13'),
(78, 5, '2017-07-30 16:35:48'),
(79, 5, '2017-07-30 16:38:11'),
(80, 5, '2017-07-30 16:39:01'),
(81, 5, '2017-07-30 16:40:44'),
(82, 5, '2017-07-30 16:40:54'),
(83, 5, '2017-07-30 16:43:59'),
(84, 5, '2017-07-30 16:44:56'),
(85, 5, '2017-07-30 16:48:01'),
(86, 5, '2017-07-30 16:48:14'),
(87, 5, '2017-07-30 16:48:49'),
(88, 5, '2017-07-30 16:49:25'),
(89, 5, '2017-07-30 16:49:41'),
(90, 5, '2017-07-30 16:49:51'),
(91, 5, '2017-07-30 16:51:51'),
(92, 2, '2017-07-31 17:24:35'),
(93, 2, '2017-08-02 07:45:26'),
(94, 2, '2017-08-02 07:45:29'),
(95, 2, '2017-08-02 08:05:04'),
(96, 2, '2017-08-02 08:32:55'),
(97, 2, '2017-08-02 09:22:35'),
(98, 2, '2017-08-02 09:26:40'),
(99, 2, '2017-08-02 09:27:00'),
(100, 2, '2017-08-02 09:40:07'),
(101, 2, '2017-08-02 09:40:16'),
(102, 2, '2017-08-02 09:43:18'),
(103, 2, '2017-08-02 10:02:42'),
(104, 2, '2017-08-02 10:03:30'),
(105, 2, '2017-08-02 10:04:29'),
(106, 2, '2017-08-02 10:05:14'),
(107, 2, '2017-08-02 10:05:30'),
(108, 2, '2017-08-02 10:05:41'),
(109, 2, '2017-08-02 10:06:30'),
(110, 2, '2017-08-02 10:10:15'),
(111, 2, '2017-08-02 10:11:14'),
(112, 2, '2017-08-02 10:11:39'),
(113, 2, '2017-08-02 10:15:01'),
(114, 2, '2017-08-02 10:15:51'),
(115, 2, '2017-08-02 10:15:59'),
(116, 2, '2017-08-02 10:24:57'),
(117, 2, '2017-08-02 10:38:08'),
(118, 2, '2017-08-02 10:38:28'),
(119, 2, '2017-08-02 10:39:00'),
(120, 2, '2017-08-02 10:39:01'),
(121, 2, '2017-08-02 10:39:01'),
(122, 2, '2017-08-02 10:39:01'),
(123, 2, '2017-08-02 10:39:01'),
(124, 2, '2017-08-02 10:39:02'),
(125, 2, '2017-08-02 10:39:02'),
(126, 2, '2017-08-02 10:39:02'),
(127, 2, '2017-08-02 10:39:02'),
(128, 2, '2017-08-02 10:39:03'),
(129, 2, '2017-08-02 10:39:03'),
(130, 2, '2017-08-02 10:39:03'),
(131, 2, '2017-08-02 10:39:03'),
(132, 2, '2017-08-02 10:39:03'),
(133, 2, '2017-08-02 10:39:03'),
(134, 2, '2017-08-02 10:39:04'),
(135, 2, '2017-08-02 10:39:19'),
(136, 2, '2017-08-02 10:46:05'),
(137, 2, '2017-08-02 10:47:53'),
(138, 2, '2017-08-02 10:48:11'),
(139, 2, '2017-08-02 11:03:52'),
(140, 2, '2017-08-02 11:05:45'),
(141, 2, '2017-08-02 11:07:45'),
(142, 2, '2017-08-02 11:10:53'),
(143, 2, '2017-08-02 11:14:17'),
(144, 2, '2017-08-02 11:15:02'),
(145, 2, '2017-08-02 11:17:05'),
(146, 9, '2017-08-02 11:19:08'),
(147, 2, '2017-08-02 11:22:10'),
(148, 2, '2017-08-02 11:23:04'),
(149, 2, '2017-08-02 11:25:32');

-- --------------------------------------------------------

--
-- Структура таблицы `orders_info`
--

CREATE TABLE `orders_info` (
  `id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `sum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Дамп данных таблицы `orders_info`
--

INSERT INTO `orders_info` (`id`, `user_id`, `order_id`, `product_id`, `quantity`, `sum`) VALUES
(50, 2, 68, 1, 1, 20000),
(51, 2, 69, 1, 2, 40000),
(52, 2, 70, 2, 2, 30000),
(53, 2, 71, 2, 2, 30000),
(54, 5, 72, 1, 2, 40000),
(55, 5, 73, 2, 2, 30000),
(56, 5, 74, 2, 1, 15000),
(57, 5, 75, 2, 1, 15000),
(58, 2, 76, 1, 1, 20000),
(59, 2, 77, 1, 2, 40000),
(60, 5, 78, 4, 1, 100500),
(61, 5, 79, 4, 15, 1507500),
(62, 5, 80, 1, 1, 20000),
(63, 5, 81, 1, 1, 20000),
(64, 5, 82, 1, 1, 20000),
(65, 5, 83, 1, 1, 20000),
(66, 5, 84, 1, 1, 20000),
(67, 5, 85, 1, 1, 20000),
(68, 5, 86, 1, 1, 20000),
(69, 5, 87, 1, 1, 20000),
(70, 5, 88, 1, 1, 10000),
(71, 5, 89, 1, 1, 10000),
(72, 5, 90, 1, 1, 19000),
(73, 5, 91, 4, 1, 50250),
(74, 2, 92, 2, 6, 90000),
(75, 2, 95, 2, 45, 675000),
(76, 2, 96, 2, 1, 15000),
(77, 2, 97, 2, 2, 30000),
(78, 2, 140, 4, 2, 12000),
(79, 2, 141, 6, 2, 100500),
(80, 2, 142, 6, 2, 9140),
(81, 2, 143, 5, 3, 72000),
(82, 2, 144, 5, 6, 144000),
(83, 2, 147, 6, 1, 4570),
(84, 2, 148, 5, 402, 9648000),
(85, 2, 149, 1, 2, 40000);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `category_id` int(11) NOT NULL,
  `available` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `product_name`, `price`, `category_id`, `available`) VALUES
(1, 'GTX1080TI', 20000, 1, 8),
(2, 'GTX1070', 15000, 1, 10),
(3, 'GTX1060', 10000, 1, 15),
(4, 'LenovoA15', 6000, 2, 0),
(5, 'Samsungs8+', 24000, 2, 0),
(6, 'SamsungA5', 4570, 2, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `promo_code`
--

CREATE TABLE `promo_code` (
  `id` int(11) NOT NULL,
  `code` varchar(30) NOT NULL,
  `sale` int(11) NOT NULL,
  `is_active` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `promo_code`
--

INSERT INTO `promo_code` (`id`, `code`, `sale`, `is_active`) VALUES
(1, 'promo1', 5, '1'),
(2, 'promo2', 10, '1'),
(3, 'promo3', 20, '0'),
(4, 'qwerty', 50, '1');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `pass`, `country`, `city`) VALUES
(1, 'qweqwe', 'qwe', 'qwe', 'Russia', 'qwe'),
(2, 'ivan', 'qwe', '123', 'Russia', 'qwe'),
(3, 'qwerty', 'werwerwer', '123', 'Ukraine', '123'),
(4, 'nata', 'nata@e.ru', 'qwerty', 'Ukraine', 'Kramatorsk'),
(5, '111', '111', '111', '111', '111');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `order_id_2` (`order_id`);

--
-- Индексы таблицы `orders_info`
--
ALTER TABLE `orders_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `order_id_2` (`order_id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `promo_code`
--
ALTER TABLE `promo_code`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `pass` (`pass`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;
--
-- AUTO_INCREMENT для таблицы `orders_info`
--
ALTER TABLE `orders_info`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `promo_code`
--
ALTER TABLE `promo_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
