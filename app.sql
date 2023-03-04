-- Adminer 4.8.1 MySQL 8.0.32-0ubuntu0.20.04.2 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `phonenumber`, `address`, `gender`, `image`, `created_at`, `updated_at`) VALUES
(8,	'karthy1',	'karthy',	'raja@gmail.com',	'123456',	'123456',	'test12',	'male',	'images/64023b90a6af9.gif',	'2023-03-03 17:43:57',	'2023-03-03 18:26:53');

-- 2023-03-04 01:58:03
