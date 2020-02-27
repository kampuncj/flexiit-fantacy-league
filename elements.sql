-- Adminer 4.7.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `league`;
CREATE DATABASE `league` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `league`;

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `elements`;
CREATE TABLE `elements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fpl_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `second_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `form` int(11) NOT NULL,
  `total_score` int(11) NOT NULL,
  `influence` int(11) NOT NULL,
  `creativity` int(11) NOT NULL,
  `ict_index` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2020-02-27 09:58:03
