-- phpMyAdmin SQL Dump
-- version 4.3.3
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 07, 2023 at 11:16 AM
-- Server version: 5.5.40
-- PHP Version: 5.4.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `member_pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `s_id` char(3) NOT NULL COMMENT 'AAA-ZZZ',
  `email` char(255) DEFAULT NULL,
  `s_fname` char(255) DEFAULT NULL,
  `s_lname` char(255) DEFAULT NULL,
  `s_telnum` char(255) DEFAULT NULL,
  `s_regtime` datetime DEFAULT NULL,
  `s_flag` char(20) DEFAULT NULL,
  `s_etc` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`s_id`, `email`, `s_fname`, `s_lname`, `s_telnum`, `s_regtime`, `s_flag`, `s_etc`) VALUES
('AAA', 'dasd@dddddsadom', 'PORNRASIT', 'KERDBANCHAN', '0610708708', '2023-02-06 23:11:32', 'A', ''),
('AAQ', 'dasd@dddasddd.com', 'PORNRASIT', 'KERDBANCHAN', '0610708708', '2023-02-06 23:13:06', 'A', ''),
('AKB', 'pradprad@ddd.com', 'นายก', 'ขคง', '0610708708', '2023-02-09 00:00:00', 'A', 'คุวยๆๆๆๆ'),
('AKP', 'dasd@dddd.com', 'PORNRASIT', 'KERDBANCHAN', '0610708708', '0000-00-00 00:00:00', 'A', 'asd'),
('PAA', 'dasd@dsadddd.com', 'PORNRASIT', 'KERDBANCHAN', '0610708708', '2023-02-06 23:15:21', 'A', ''),
('PAD', 'asdasd@sada.ddd', 'ปแอปแอ', 'asdasd', 'asdads', '2023-02-06 23:06:37', 'A', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_pro`
--

CREATE TABLE IF NOT EXISTS `user_pro` (
  `id` int(11) NOT NULL,
  `email` char(255) CHARACTER SET utf8 NOT NULL,
  `uid_pro` char(13) CHARACTER SET utf8 NOT NULL,
  `rpro_time` datetime NOT NULL,
  `etc` char(255) CHARACTER SET utf8 DEFAULT NULL,
  `utype` char(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
--
-- Dumping data for table `user_pro`
--

INSERT INTO `user_pro` (`id`, `email`, `uid_pro`, `rpro_time`, `etc`, `utype`) VALUES
(8, 'pradprad@gmail.com', 'AQT2301AA0001', '0000-00-00 00:00:00', 'บลาๆๆๆ', '6M'),
(9, 'dasd@dddd.com', 'AQT55645556', '0000-00-00 00:00:00', 'ปวดหัว5555', '1Y'),
(10, 'pradprad@gmail.com', 'AQT2301AA0301', '2023-01-30 22:29:40', 'บลาๆๆๆ', '1M'),
(11, 'pradprad@gmail.com', 'AQT2301AA0301', '2023-01-30 22:29:58', 'บลาๆๆๆ', '1M'),
(12, 'pradprad@gmail.com', 'AQT2301AA0302', '2023-01-30 23:01:27', 'บลาๆๆๆ', '1M'),
(13, 'pimonrut.c64@rsu.ac.th', 'AQT2301AA0303', '2023-01-30 23:03:15', ' อะไรวะ', '1M'),
(14, 'investment.it.rsu@gmail.com', 'AQT2301AA0304', '2023-01-30 23:03:49', ' อะไรวะasd', '1Y'),
(15, 'cheprad123456@gmail.com', 'AQT2301AA0305', '2023-01-31 23:50:45', ' asdads', '1M'),
(16, 'dasdsadsasd', 'AQT2301AA0306', '2023-01-31 23:51:51', '', '1M'),
(17, 'asdasdasdasdasdasd', 'AQT2301AA0307', '2023-01-31 23:52:12', '', '1M'),
(18, 'ฟหกดฟหกด', 'AQT2301AA0308', '2023-01-31 23:54:26', '', '1M');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `user_pro`
--
ALTER TABLE `user_pro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_pro`
--
ALTER TABLE `user_pro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
