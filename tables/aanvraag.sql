-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 13, 2022 at 12:49 PM
-- Server version: 8.0.26
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magazijn-g`
--

-- --------------------------------------------------------

--
-- Table structure for table `aanvraag`
--

DROP TABLE IF EXISTS `aanvraag`;
CREATE TABLE IF NOT EXISTS `aanvraag` (
  `id` int NOT NULL AUTO_INCREMENT,
  `studentN` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `studentI` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `studentL` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `item` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `amount` int NOT NULL,
  `reason` varchar(200) NOT NULL,
  `day` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `aanvraag`
--

INSERT INTO `aanvraag` (`id`, `studentN`, `studentI`, `studentL`, `item`, `amount`, `reason`, `day`, `time`) VALUES
(71, 's', 's', 's', 'Mouse', 5, 'qwerqwe', '2022-04-13', '08:07:38'),
(72, 's', 's', 's', 'Keyboard', 2, 'qwef', '2022-04-13', '09:17:34'),
(73, 's', 's', 's', 'Keyboard', 3, 'wef', '2022-04-13', '11:27:33'),
(74, 's', 's', 's', 'Keyboard', 3, 'dhtykdt', '2022-04-13', '12:44:26');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
