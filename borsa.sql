-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 11, 2016 at 09:40 PM
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
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passwd` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `name`, `email`, `passwd`) VALUES
(1, 'alaa', 'alaamoh.hussein@yahoo.com', '12345'),
(2, 'amira', 'amira@yahoo.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `Share`
--

CREATE TABLE IF NOT EXISTS `Share` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `Share`
--

INSERT INTO `Share` (`id`, `name`, `price`, `time`) VALUES
(1, 'Apple Inc.', '101.87', 'March 8, 2016, 2:33 pm'),
(2, 'Symantec Corporation', '17.09', 'March 8, 2016, 2:33 pm'),
(3, 'Microsoft Corporation', '51.03', 'March 8, 2016, 2:33 pm'),
(4, 'Hewlett Packard Enterprise Comp', '15.97', 'March 8, 2016, 2:33 pm'),
(5, 'Petroleo Brasileiro S.A.- Petro', '5.22', 'March 8, 2016, 2:33 pm'),
(6, 'H&R Block, Inc. Common Stock', '28.11', 'March 8, 2016, 2:33 pm'),
(7, 'Alphabet Inc.', '712.80', 'March 8, 2016, 2:33 pm'),
(8, 'Seadrill Limited Ordinary Share', '6.06', 'March 8, 2016, 2:33 pm'),
(9, 'North Atlantic Drilling Ltd. Co', '3.52', 'March 8, 2016, 2:33 pm'),
(10, 'Whiting Petroleum Corporation C', '8.16', 'March 8, 2016, 2:33 pm');

-- --------------------------------------------------------

--
-- Table structure for table `temp_price`
--

CREATE TABLE IF NOT EXISTS `temp_price` (
  `share_id` int(50) NOT NULL,
  `share_name` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `time` date NOT NULL,
  KEY `share_id` (`share_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_price`
--

INSERT INTO `temp_price` (`share_id`, `share_name`, `price`, `time`) VALUES
(1, 'Apple Inc.', 102, '0000-00-00'),
(2, 'Symantec Corporation', 17, '0000-00-00'),
(3, 'Microsoft Corporation', 51, '0000-00-00'),
(4, 'Hewlett Packard Enterprise Comp', 16, '0000-00-00'),
(5, 'Petroleo Brasileiro S.A.- Petro', 5, '0000-00-00'),
(6, 'H&R Block, Inc. Common Stock', 28, '0000-00-00'),
(7, 'Alphabet Inc.', 713, '0000-00-00'),
(8, 'Seadrill Limited Ordinary Share', 6, '0000-00-00'),
(9, 'North Atlantic Drilling Ltd. Co', 4, '0000-00-00'),
(10, 'Whiting Petroleum Corporation C', 8, '0000-00-00'),
(1, 'Apple Inc.', 102, '0000-00-00'),
(2, 'Symantec Corporation', 17, '0000-00-00'),
(3, 'Microsoft Corporation', 51, '0000-00-00'),
(4, 'Hewlett Packard Enterprise Comp', 16, '0000-00-00'),
(5, 'Petroleo Brasileiro S.A.- Petro', 5, '0000-00-00'),
(6, 'H&R Block, Inc. Common Stock', 28, '0000-00-00'),
(7, 'Alphabet Inc.', 713, '0000-00-00'),
(8, 'Seadrill Limited Ordinary Share', 6, '0000-00-00'),
(9, 'North Atlantic Drilling Ltd. Co', 4, '0000-00-00'),
(10, 'Whiting Petroleum Corporation C', 8, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user_share`
--

CREATE TABLE IF NOT EXISTS `user_share` (
  `user_id` int(50) NOT NULL,
  `share_id` int(50) NOT NULL,
  `flag` int(10) NOT NULL,
  `above` int(11) NOT NULL,
  `wPrice` int(50) NOT NULL,
  PRIMARY KEY (`user_id`,`share_id`),
  KEY `share_id` (`share_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_share`
--

INSERT INTO `user_share` (`user_id`, `share_id`, `flag`, `above`, `wPrice`) VALUES
(1, 3, 1, 1, 30),
(1, 4, 1, 1, 500),
(1, 7, 1, 1, 30),
(1, 8, 0, 0, 30),
(2, 7, 1, 1, 1200);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `temp_price`
--
ALTER TABLE `temp_price`
  ADD CONSTRAINT `temp_price_ibfk_1` FOREIGN KEY (`share_id`) REFERENCES `Share` (`id`);

--
-- Constraints for table `user_share`
--
ALTER TABLE `user_share`
  ADD CONSTRAINT `user_share_ibfk_2` FOREIGN KEY (`share_id`) REFERENCES `Share` (`id`),
  ADD CONSTRAINT `user_share_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `data` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
