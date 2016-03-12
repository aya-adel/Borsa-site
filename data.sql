-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 13, 2016 at 01:16 AM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `borsa`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passwd` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `name`, `email`, `passwd`) VALUES
(1, 'alaa', 'alaamoh.hussein@gmail.com', '12345'),
(2, 'amira', 'amira@yahoo.com', '12345'),
(3, 'aya', 'alaaa@yahoo.com', '22'),
(4, 'saso', 'saso', '112'),
(5, 'ghada', 'aya@yahoo.com', '44'),
(6, 'ayaa', 'ayaa@yahoo.com', '123'),
(8, 'fffs', 'ff@yahoo.com', '111'),
(9, 'ayaaaa', 'ayaaa@yahoo.com', '111'),
(10, 'hana', 'hana@yahoo.com', '111'),
(11, 'ayaaaaa', 'aaaaaaaa@yahoo.com', '123'),
(12, 'aaq', 'aq@yahoo.com', '000'),
(13, 'aqa', 'aqa@yahoo.com', '123'),
(14, 'aaaaaa', 'aaaaaa@yahoo.com', '111'),
(16, 'aaqq', 'qqqqq@yahoo.com', '1111'),
(18, 'ayaaa', 'oo@yahoo.com', '2525'),
(19, 'hossam', 'hossam@yahoo.com', '456'),
(20, 'nnn', 'nnn@yahoo.com', '444'),
(21, 'nnn', 'nn@yahoo.com', '111'),
(22, 'wwwwww', 'wwwww@yahoo.com', '1111'),
(23, 'rrr', 'rrr@yahoo.com', '111');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
