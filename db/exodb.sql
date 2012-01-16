-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Време на генериране: 
-- Версия на сървъра: 5.5.16
-- Версия на PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данни: `exodb`
--

-- --------------------------------------------------------

--
-- Структура на таблица `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `user_agent` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Ссхема на данните от таблица `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('315a1371532c8988fe6021b5400baf80', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/535.7 (KHTML, like Gecko) Chrome/16.0.912.63 Safari/535.7', 1325713331, 'a:4:{s:9:"user_data";s:0:"";s:8:"template";s:9:"Template1";s:8:"homepage";s:11:"gdfdfgdfgdf";s:8:"nextpage";a:9:{i:0;s:13:"efsdfsdadfsdf";i:1;s:11:"fsdfasdfsad";i:2;s:9:"fdsfsdfsd";i:3;s:10:"fsdafafdsa";i:4;s:14:"ffffffffffffff";i:5;s:1:"1";i:6;s:1:"2";i:7;s:1:"3";i:8;s:1:"4";}}'),
('4a50b4a7aadf4008d8e988347ffb4528', '127.0.0.1', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; bg; rv:1.9.2.24) Gecko/20111103 Firefox/3.6.24', 1323720991, ''),
('821c4ad8f7abcfe00bfd3a6ae0da38bc', '127.0.0.1', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.7 (KHTML, like Gecko) Chrome/7.0.517.41 Safari/534.7', 1322514066, ''),
('98771b0a70c50a1e1ce78df624927141', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/535.7 (KHTML, like Gecko) Chrome/16.0.912.75 Safari/535.7', 1326318448, ''),
('a7eeeaa1bc27b419865dadfb4f28c1e1', '127.0.0.1', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.7 (KHTML, like Gecko) Chrome/7.0.517.41 Safari/534.7', 1325707466, ''),
('d9c6123ab1f2874346ae5fc92766d342', '127.0.0.1', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; bg; rv:1.9.2.25) Gecko/20111212 Firefox/3.6.25', 1326643237, ''),
('ebb6a5b50c99c01d3c5c871930abe1ad', '127.0.0.1', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.7 (KHTML, like Gecko) Chrome/7.0.517.41 Safari/534.7', 1325708383, 'a:4:{s:9:"user_data";s:0:"";s:8:"template";s:9:"Template1";s:8:"homepage";s:8:"fsegtseg";s:8:"nextpage";s:10:"gtrgrgtrgr";}'),
('f9bb3f037a4d243eee2f822558fb5016', '127.0.0.1', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; bg; rv:1.9.2.25) Gecko/20111212 Firefox/3.6.25', 1326635289, 'a:3:{s:5:"email";s:13:"fsfsgs@abv.bg";s:8:"password";s:3:"123";s:6:"domain";s:6:"gd gdg";}');

-- --------------------------------------------------------

--
-- Структура на таблица `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `menu_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `menu_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `menu_number` int(11) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Ссхема на данните от таблица `menus`
--

INSERT INTO `menus` (`menu_id`, `menu_title`, `menu_number`) VALUES
(1, 'kfhaskfhask', 1),
(2, 'diasfhasih', 21),
(3, 'A1', 3),
(4, 'a2', 5),
(5, 'a3', 3),
(6, 'a4', 4),
(7, 'a5', 6),
(8, 'fasf', 3);

-- --------------------------------------------------------

--
-- Структура на таблица `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `page_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `page_num` int(11) NOT NULL,
  `page_content` text COLLATE utf8_unicode_ci,
  `site_id` bigint(20) NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура на таблица `sites`
--

CREATE TABLE IF NOT EXISTS `sites` (
  `site_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `site_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `site_url` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `template_id` bigint(20) NOT NULL,
  PRIMARY KEY (`site_id`),
  UNIQUE KEY `site_url` (`site_url`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Ссхема на данните от таблица `sites`
--

INSERT INTO `sites` (`site_id`, `site_name`, `user_id`, `site_url`, `template_id`) VALUES
(1, 'Lichen Sait', 0, 'ckeditor', 0);

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `domain` varchar(63) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `domain` (`domain`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
