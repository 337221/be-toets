-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 01 jun 2023 om 12:59
-- Serverversie: 5.7.36
-- PHP-versie: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `examinatoren`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `examinator`
--

DROP TABLE IF EXISTS `examinator`;
CREATE TABLE IF NOT EXISTS `examinator` (
  `Id` int(11) NOT NULL,
  `Voornaam` varchar(255) DEFAULT NULL,
  `Tussenvoegsel` varchar(255) DEFAULT NULL,
  `Achternaam` varchar(255) DEFAULT NULL,
  `Mobiel` varchar(255) DEFAULT NULL,
  `IsActief` tinyint(1) DEFAULT NULL,
  `Opmerkingen` varchar(255) DEFAULT NULL,
  `DatumAangemaakt` timestamp NULL DEFAULT NULL,
  `DatumGewijzigd` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `examinator`
--

INSERT INTO `examinator` (`Id`, `Voornaam`, `Tussenvoegsel`, `Achternaam`, `Mobiel`, `IsActief`, `Opmerkingen`, `DatumAangemaakt`, `DatumGewijzigd`) VALUES
(1, 'Manuel', 'van', 'Meekeren', '06-28493823', NULL, NULL, '2023-06-01 12:38:16', '2023-06-01 12:38:16'),
(2, 'Lissette', 'den', 'Dongen', '06-29529959', NULL, NULL, '2023-06-01 12:38:16', '2023-06-01 12:38:16'),
(3, 'Jurswailly', NULL, 'Luciano', '06-48293846', NULL, NULL, '2023-06-01 12:38:16', '2023-06-01 12:38:16'),
(4, 'Nashwa', NULL, 'Salawi', '06-34291219', NULL, NULL, '2023-06-01 12:38:16', '2023-06-01 12:38:16');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
