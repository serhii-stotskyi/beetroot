-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июл 30 2017 г., 16:56
-- Версия сервера: 5.5.55-0ubuntu0.14.04.1
-- Версия PHP: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

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

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(30) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_id`),
  KEY `order_id` (`order_id`),
  KEY `order_id_2` (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=ascii AUTO_INCREMENT=92 ;

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
(91, 5, '2017-07-30 16:51:51');

-- --------------------------------------------------------

--
-- Структура таблицы `orders_info`
--

CREATE TABLE IF NOT EXISTS `orders_info` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `user_id` int(30) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `sum` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `order_id` (`order_id`),
  KEY `order_id_2` (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=ascii AUTO_INCREMENT=74 ;

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
(73, 5, 91, 4, 1, 50250);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=ascii AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `product_name`, `price`, `category_id`) VALUES
(1, 'GTX1080TI', 20000, 1),
(2, 'GTX1070', 15000, 1),
(3, 'GTX1070', 10000, 1),
(4, 'Lenovo', 100500, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `promo_code`
--

CREATE TABLE IF NOT EXISTS `promo_code` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(30) NOT NULL,
  `sale` int(11) NOT NULL,
  `is_active` enum('0','1') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

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

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `pass` (`pass`)
) ENGINE=InnoDB  DEFAULT CHARSET=ascii AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `pass`, `country`, `city`) VALUES
(1, 'qweqwe', 'qwe', 'qwe', 'Russia', 'qwe'),
(2, 'ivan', 'qwe', '123', 'Russia', 'qwe'),
(3, 'qwerty', 'werwerwer', '123', 'Ukraine', '123'),
(4, 'nata', 'nata@e.ru', 'qwerty', 'Ukraine', 'Kramatorsk'),
(5, '111', '111', '111', '111', '111');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
