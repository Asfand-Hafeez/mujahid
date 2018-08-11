-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2018 at 06:21 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mujahid`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `detail` longtext CHARACTER SET utf16 COLLATE utf16_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `user_id`, `title`, `image`, `price`, `detail`) VALUES
(1, 4, 'samsung', 'download.jpg', '1200', 'i want to sale it'),
(3, 4, 'iphone', 'download.jpg', '1200', 'sale'),
(4, 2, 'iphonex', 'iphone-x-gray-select-2017.jpg', '1200', 'sale'),
(5, 1, 'samsung', 'download.jpg', '15000', 'sale'),
(6, 3, 'Xeon', 'download.jpg', '12000', 'sale'),
(7, 5, 'Oppo', '1.jpg', '12000', 'helo');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `gender`, `image`) VALUES
(1, 'asfand', 'asfand@gmail.com', '123', 'male', 'iphone-x-gray-select-2017.jpg'),
(2, 'Sana', 'sana@gmail.com', '123', 'female', 'images.jpg'),
(3, 'zaeem', 'zaeem@gmail.com', '123', 'male', '1.jpg'),
(4, 'mujahid', 'mujahid@gmail.com', '123', 'male', 'images.jpg'),
(5, 'jalil', 'jalilkhan123.com', '123', 'male', 'download.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
