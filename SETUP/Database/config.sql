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
-- Tabellenstruktur für Tabelle `config`
--

CREATE TABLE `config` (
  `id` int(11) NOT NULL,
  `site_dl_section` int(11) NOT NULL,
  `site_rage_section` int(11) NOT NULL,
  `site_altv_section` int(11) NOT NULL,
  `site_fivem_section` int(11) NOT NULL,
  `site_redm_section` int(11) NOT NULL,
  `site_online` int(11) NOT NULL,
  `site_name` varchar(32) NOT NULL,
  `site_teamspeak` varchar(64) NOT NULL,
  `site_gservername` varchar(64) NOT NULL,
  `site_gserverip` varchar(64) NOT NULL,
  `site_gserverport` varchar(64) NOT NULL,
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
-- Daten für Tabelle `config`
--

INSERT INTO `config` (`id`, `site_dl_section`, `site_rage_section`, `site_altv_section`, `site_fivem_section`, `site_redm_section`, `site_online`, `site_name`, `site_teamspeak`, `site_gservername`, `site_gserverip`, `site_gserverport`, `frage1`, `frage2`, `frage3`, `frage4`, `frage5`, `frage6`, `frage7`, `frage8`, `frage9`, `frage10`, `frage11`, `frage12`) VALUES
(1, 1, 1, 1, 1, 1, 1, 'xUCP Demo', 'ts3.xxx.de?port=9987', 'DerStr1k3r.de Dev Server', 'xxxx', '7799', 'Eine Person ist mit dem Auto in der Stadt unterwegs. Am Würfelpark vorbeigefahren, späht er eine Gruppe von Menschen auf, die sich gerade unterhalten. Er beschließt einfach so die Gruppe umzufahren. Warum ist das verboten?', 'Du bist gerade gemütlich am Karotten sammeln, wo plötzlich eine Person hinter dir steht und dir einen Schuss in den Kopf verpasst. Du hast diese Person noch nie zuvor gesehen. Darf er das?', 'Wo befinden sich unsere Safezones?', 'Was muss man bei der New-Life Regel beachten?', 'Wie lange hat man Zeit ein Supportfall zu melden?', 'Was muss man beachten, wenn Wertsachen durch einen Bug verschwinden oder beschädigt werden?', 'Was muss man bei einer Hinrichtungen, Suizid oder einer Ausreise beachten?', 'Ein Teammietglied kommt auf dich IC zu [AdminOutfit] wie verhaltest du dich?', 'Sind Medic´s unantasbar?', 'Ab welchen Rang darf man Korrupt sein? ', 'Du hast 2 platte Reifen wie verhaltest du dich im RP?', 'Dich nimmt eine Gang/Mafia als Geisel und fordert von dir das du all dein Geld ihnen gibst oder du stirbst was ist daran falsch und warum?');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
