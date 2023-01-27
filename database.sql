-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 27, 2023 at 09:25 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `aiqt_user_pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_pro`
--

CREATE TABLE IF NOT EXISTS `user_pro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` char(255) CHARACTER SET utf8 NOT NULL,
  `uid_pro` char(13) CHARACTER SET utf8 NOT NULL,
  `rpro_time` datetime NOT NULL,
  `etc` char(255) CHARACTER SET utf8 DEFAULT NULL,
  `utype` char(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user_pro`
--

INSERT INTO `user_pro` (`id`, `email`, `uid_pro`, `rpro_time`, `etc`, `utype`) VALUES
(8, 'pradprad@gmail.com', 'AQT2301AA0001', '2023-01-12 16:00:35', 'บลาๆๆๆ', '1M');
