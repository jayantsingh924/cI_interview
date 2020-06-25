-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 24, 2020 at 07:37 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toxsl`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(50) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `user_password` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_email`, `user_password`, `created_date`) VALUES
(1, 'jayantsingh924@gmail.com', 'jayant@123', '2020-06-24 07:35:16'),
(2, 'dwdw@gmail.com', 'wiwwoi', '2020-06-24 03:18:28'),
(3, 'dgiewgi@gmail.com', 'hdwidho', '2020-06-24 03:33:12');

-- --------------------------------------------------------

--
-- Table structure for table `user_blog`
--

DROP TABLE IF EXISTS `user_blog`;
CREATE TABLE IF NOT EXISTS `user_blog` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `desc` varchar(1000) COLLATE utf8mb4_bin NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `user_blog`
--

INSERT INTO `user_blog` (`id`, `user_id`, `title`, `desc`, `image`, `created_date`) VALUES
(1, 0, 'Testing', 'Heyyy.....   here we just solve my problum.', NULL, '2020-06-24 07:09:42'),
(2, 0, 'wdwd', 'dwdwd', NULL, '2020-06-24 04:57:12'),
(3, 0, 'tesr\\t', 'heyyy testing', NULL, '2020-06-24 05:20:39'),
(4, 0, 'fefef', 'wdwdwdwd', NULL, '2020-06-24 05:22:07'),
(5, 1, 'Testing !', 'Heyyy.....   here we just solve my problum.\r\nyohhhpooooo', 'images.jpg', '2020-06-24 07:32:28'),
(7, 1, 'Jayant Singh', 'I am a php developer. Most of the time i use code igniter framework for my project.In few days i will be able to learn my new technology with TOXSL.', 'download3.jpg', '2020-06-24 07:22:31');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
