-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Фев 02 2015 г., 19:57
-- Версия сервера: 5.5.40
-- Версия PHP: 5.4.36-0+deb7u3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `obmennik`
--

-- --------------------------------------------------------

--
-- Структура таблицы `exchanges`
--

CREATE TABLE IF NOT EXISTS `exchanges` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL DEFAULT '0',
  `surname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `patronymic` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `payment_details_from` varchar(64) NOT NULL,
  `payment_details_to` varchar(64) NOT NULL,
  `change_from_curr` varchar(64) NOT NULL,
  `change_to_curr` varchar(64) NOT NULL,
  `change_from_amount` varchar(64) NOT NULL,
  `change_to_amount` varchar(64) NOT NULL,
  `exchange_date` varchar(255) DEFAULT NULL,
  `exchange_uniqid` varchar(255) DEFAULT NULL,
  `exchange_status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

-- --------------------------------------------------------

--
-- Структура таблицы `exchange_rates`
--

CREATE TABLE IF NOT EXISTS `exchange_rates` (
  `id` int(64) NOT NULL AUTO_INCREMENT,
  `from` varchar(64) NOT NULL,
  `to` varchar(64) NOT NULL,
  `value` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Дамп данных таблицы `exchange_rates`
--

INSERT INTO `exchange_rates` (`id`, `from`, `to`, `value`) VALUES
(1, 'wmr', 'wmz', '0.01'),
(2, 'wmr', 'wmu', '0.26'),
(3, 'wmr', 'wme', '0.01'),
(4, 'wmr', 'privat24uah', '0.26'),
(5, 'wmz', 'wmr', '60.29'),
(6, 'wmz', 'wmu', '15.80'),
(7, 'wmz', 'wme', '0.84'),
(8, 'wmz', 'privat24uah', '15.90'),
(9, 'wmu', 'wmr', '3.81'),
(10, 'wmu', 'wmz', '0.06'),
(11, 'wmu', 'wme', '0.05'),
(12, 'wmu', 'privat24uah', '1.01'),
(13, 'wme', 'wmr', '71.20'),
(14, 'wme', 'wmz', '1.18'),
(15, 'wme', 'wmu', '18.66'),
(16, 'wme', 'privat24uah', '18.89'),
(17, 'privat24uah', 'wmr', '71.20'),
(18, 'privat24uah', 'wmz', '0.07'),
(19, 'privat24uah', 'wme', '0.06'),
(20, 'privat24uah', 'wmu', '0.99');

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`) VALUES
(2, 'wmz_purse', 'Z135970910686'),
(3, 'wmu_purse', 'U373128687902'),
(4, 'wme_purse', 'E237332736152'),
(5, 'wmr_purse', 'R300746094391'),
(6, 'payment_description', 'Exchange #%payment_id%. %payment_sum% %payment_currency% to %get_sum% %get_currency%.'),
(7, 'sitename', 'WMZOBMEN'),
(8, 'email', 'admin@wmzobmen.com'),
(9, 'admin_phone', '+380639898299');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` int(11) NOT NULL DEFAULT '0',
  `username` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `wmid` varchar(64) NOT NULL,
  `registration_date` int(11) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `password` varchar(64) NOT NULL,
  `recover_key` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

-- --------------------------------------------------------

--
-- Структура таблицы `users_prepare`
--

CREATE TABLE IF NOT EXISTS `users_prepare` (
  `id` int(64) NOT NULL AUTO_INCREMENT,
  `username` varchar(64) CHARACTER SET utf8 NOT NULL,
  `email` varchar(64) CHARACTER SET utf8 NOT NULL,
  `password` varchar(64) CHARACTER SET utf8 NOT NULL,
  `activation_code` varchar(64) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
