CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `user_agent` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `menus` (
  `menu_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `menu_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `menu_number` int(11) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

INSERT INTO `menus` (`menu_id`, `menu_title`, `menu_number`) VALUES
(1, 'kfhaskfhask', 1),
(2, 'diasfhasih', 21),
(3, 'A1', 3),
(4, 'a2', 5),
(5, 'a3', 3),
(6, 'a4', 4),
(7, 'a5', 6),
(8, 'fasf', 3);

CREATE TABLE IF NOT EXISTS `pages` (
  `page_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `page_num` int(11) NOT NULL,
  `page_content` text COLLATE utf8_unicode_ci,
  `site_id` bigint(20) NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `session_id` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `sites` (
  `site_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `site_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `site_url` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `template_id` bigint(20) NOT NULL,
  `session_id` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`site_id`),
  UNIQUE KEY `site_url` (`site_url`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

INSERT INTO `sites` (`site_id`, `site_name`, `user_id`, `site_url`, `template_id`, `session_id`) VALUES
(1, 'Lichen Sait', 0, 'ckeditor', 0, '0cd110b460f7e4bea6a37e095b11758d');
