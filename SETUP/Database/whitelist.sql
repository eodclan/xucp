-- phpMyAdmin SQL Dump
-- version 5.1.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Erstellungszeit: 13. Jun 2022 um 14:13
-- Server-Version: 10.6.8-MariaDB-1:10.6.8+maria~bullseye
-- PHP-Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `whitelist`
--

CREATE TABLE `whitelist` (
  `id` int(11) NOT NULL,
  `charstory` varchar(2048) DEFAULT NULL,
  `ucpname` varchar(64) DEFAULT NULL,
  `charname` varchar(64) DEFAULT NULL,
  `frage1` varchar(256) DEFAULT NULL,
  `frage2` varchar(256) DEFAULT NULL,
  `frage3` varchar(256) DEFAULT NULL,
  `frage4` varchar(256) DEFAULT NULL,
  `frage5` varchar(256) DEFAULT NULL,
  `frage6` varchar(256) DEFAULT NULL,
  `frage7` varchar(256) DEFAULT NULL,
  `frage8` varchar(256) DEFAULT NULL,
  `frage9` varchar(256) DEFAULT NULL,
  `frage10` varchar(256) DEFAULT NULL,
  `frage11` varchar(256) DEFAULT NULL,
  `frage12` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `whitelist`
--
ALTER TABLE `whitelist`
  ADD KEY `PRIMARY KEY` (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `whitelist`
--
ALTER TABLE `whitelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
