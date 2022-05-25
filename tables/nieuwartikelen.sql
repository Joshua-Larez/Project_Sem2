-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 12 apr 2022 om 13:49
-- Serverversie: 8.0.26
-- PHP-versie: 8.0.10

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
-- Tabelstructuur voor tabel `nieuwartikelen`
--

DROP TABLE IF EXISTS `nieuwartikelen`;
CREATE TABLE IF NOT EXISTS `nieuwartikelen` (
  `id` int NOT NULL AUTO_INCREMENT,
  `url` varchar(300) NOT NULL,
  `aantal` int NOT NULL,
  `reden` varchar(500) NOT NULL,
  `naam_user` varchar(50) NOT NULL,
  `datum_aanvraag` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `nieuwartikelen`
--

INSERT INTO `nieuwartikelen` (`id`, `url`, `aantal`, `reden`, `naam_user`, `datum_aanvraag`) VALUES
(1, 'dwqdqwd', 0, '', '0', '0000-00-00 00:00:00'),
(2, 'dqwdqw', 0, '', '0', '2022-04-12 07:12:00'),
(3, 'ger', 0, '', '0', '2022-04-12 07:12:30'),
(4, 'http://www.magazijn-g.org/nieuw_artikel.php', 0, '', '0', '2022-04-12 08:03:11'),
(6, 'http://www.magazijn-g.org/nieuw_artikel.php', 0, '', '0', '2022-04-12 08:06:47'),
(7, 'http://www.magazijn-g.org/nieuw_artikel.php', 0, '', 'ewa', '2022-04-12 08:07:17'),
(8, 'http://www.magazijn-g.org/nieuw_artikel.php', 0, '', 'ewa', '2022-04-12 08:07:44'),
(9, 'dqw', 0, '', 'ewa', '2022-04-12 09:57:20'),
(10, 'dwq', 0, '', 'ewa', '2022-04-12 09:57:26'),
(11, 'dqw', 0, '', 'ewa', '2022-04-12 09:57:44'),
(12, 'http://www.magazijn-g.org/nieuw_artikel.php', 0, '', 'ewa', '2022-04-12 10:00:14'),
(13, 'd', 0, '', 'ewa', '2022-04-12 10:01:09'),
(14, 'http://www.magazijn-g.org/nieuw_artikel.php', 0, '', 'ewa', '2022-04-12 12:03:24'),
(15, 'http://www.magazijn-g.org/nieuw_artikel.php', 0, '', 'ewa', '2022-04-12 14:04:41'),
(16, 'http://www.magazijn-g.org/nieuw_artikel.php', 0, '', 'ewa', '2022-04-12 14:05:09'),
(17, 'http://www.magazijn-g.org/nieuw_artikel.php', 0, '', 'ewa', '2022-04-12 14:06:37'),
(18, 'http://www.magazijn-g.org/nieuw_artikel.php', 0, '', 'ewa', '2022-04-12 14:10:17'),
(19, 'http://www.magazijn-g.org/nieuw_artikel.php', 56, 'sqwdddddddddddddsqwdddddddddddddsqwdddddddddddddsqwdddddddddddddsqwdddddddddddddsqwdddddddddddddsqwdddddddddddddsqwdddddddddddddsqwdddddddddddddsqwdddddddddddddsqwdddddddddddddsqwdddddddddddddsqwdddddddddddddsqwddddddddddddd', 'ewa', '2022-04-12 14:43:45'),
(20, 'http://www.magazijn-g.org/nieuw_artikel.php', 15, 'fweufbewiuewfew', 'ewa', '2022-04-12 14:44:06'),
(21, 'http://www.magazijn-g.org/nieuw_artikel.php', 12, 'dwqqqqqqqqqqq', 'ewa', '2022-04-12 14:47:06'),
(22, 'http://www.magazijn-g.org/nieuw_artikel.php', 11, 'csssssssssssssss', 'ewa', '2022-04-12 15:02:18');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
