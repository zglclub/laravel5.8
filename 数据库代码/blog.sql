-- Adminer 4.7.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgs` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` int(11) NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `auths`;
CREATE TABLE `auths` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mh_c` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '控制器',
  `mh_f` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '方法',
  `level` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '父级',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `auths` (`id`, `cat_name`, `mh_c`, `mh_f`, `level`, `created_at`, `updated_at`) VALUES
(1,	'文章管理',	'',	'',	'',	NULL,	NULL),
(2,	'管理员管理',	'',	'',	'',	NULL,	NULL),
(3,	'网站配置',	'',	'',	'',	NULL,	NULL),
(4,	'',	'',	'',	'',	NULL,	NULL);

DROP TABLE IF EXISTS `configs`;
CREATE TABLE `configs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '中文标识',
  `title` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '英文标识',
  `config` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `configs` (`id`, `name`, `title`, `config`, `created_at`, `updated_at`) VALUES
(1,	'网站配置',	'siteconfig',	'{\"SiteTitle\":\"\\u68a6\\u75d5\\u7f51\\u7edc\",\"Domain\":\"http:\\/\\/www.hskphp.cn\",\"keywords\":\"\\u7231\\u4f60\\u4e00\\u4e07\\u5e74\",\"sitedesc\":\"TEST\",\"status\":\"0\",\"desc\":\"\\u5173\\u7ad9\"}',	'2019-06-19 14:22:56',	'2019-06-19 14:22:56');

DROP TABLE IF EXISTS `managers`;
CREATE TABLE `managers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passwd` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '管理员密码',
  `email` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '邮箱',
  `status` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '状态',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `唯一用户名` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `managers` (`id`, `username`, `passwd`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1,	'admin',	'123456',	'76101700@qq.com',	'1',	NULL,	NULL),
(2,	'test',	'123456',	'',	'1',	NULL,	NULL);

DROP TABLE IF EXISTS `managers_roles`;
CREATE TABLE `managers_roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `managers_id` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles_id` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_resets_table',	1),
(3,	'2019_06_16_035607_create_configs_table',	1),
(4,	'2019_06_16_203431_create_articles_table',	1),
(5,	'2019_06_19_223350_create_managers_table',	2),
(6,	'2019_06_19_223500_create_roles_table',	2),
(7,	'2019_06_19_223516_create_auths_table',	2),
(8,	'2019_06_19_223959_create_roles_auths_table',	2),
(9,	'2019_06_19_224026_create_managers_roles_table',	2),
(10,	'2019_06_19_231720_create_auths_table',	3),
(11,	'2019_06_19_231949_create_auths_table',	4);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '角色名称',
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '状态',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `roles` (`id`, `role_name`, `status`, `created_at`, `updated_at`) VALUES
(1,	'青铜用户',	'1',	NULL,	NULL),
(2,	'白银用户',	'1',	NULL,	NULL),
(3,	'黄金用户',	'1',	NULL,	NULL),
(4,	'铂金用户',	'1',	NULL,	NULL),
(5,	'钻石用户',	'1',	NULL,	NULL),
(6,	'星耀用户',	'1',	NULL,	NULL),
(7,	'最强王者',	'1',	NULL,	NULL);

DROP TABLE IF EXISTS `roles_auths`;
CREATE TABLE `roles_auths` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `roles_id` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auths_id` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- 2019-06-22 10:35:58