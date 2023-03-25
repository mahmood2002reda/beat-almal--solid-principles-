-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 29, 2022 at 12:01 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bta`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `client_id` bigint(100) NOT NULL,
  `client_name` varchar(200) NOT NULL,
  `client_address` varchar(200) NOT NULL,
  `client_deal` varchar(200) NOT NULL,
  `client_mobile` varchar(100) NOT NULL,
  `receive` tinyint(4) DEFAULT NULL,
  `client_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_name`, `client_address`, `client_deal`, `client_mobile`, `receive`, `client_created_at`) VALUES
(20304023302333, 'ahmed assad elsayed', 'Mansoura', 'ØµØ¯Ù‚Ø©', '0100250550', NULL, '2022-11-28 18:54:53'),
(30204021202133, 'mahmood reda', 'Mansoura', 'ØµØ¯Ù‚Ø©', '01013602730', 1, '2022-11-28 18:53:17'),
(30205021202133, 'ahmed hany', 'meet gamr', '\"Ø²ÙƒØ§Ø© Ø§Ù„ÙØ·Ø±\"', '0102250025', NULL, '2022-11-28 19:29:55'),
(30205033213321, 'Ø§Ø­Ù…Ø¯ Ù†Ø§Ø¬ÙŠ Ø®ÙØ§Ø¬ÙŠ', 'Mansoura', 'ÙƒÙØ§Ù„Ø© Ù…Ø±ÙŠØ¶', '01013602730', NULL, '2022-11-29 09:22:20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
