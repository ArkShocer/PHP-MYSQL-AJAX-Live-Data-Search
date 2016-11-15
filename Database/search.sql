-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 15. Nov 2016 um 17:43
-- Server-Version: 10.1.16-MariaDB
-- PHP-Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `search`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `search`
--

CREATE TABLE `search` (
  `ID` int(11) NOT NULL,
  `ObjectName` varchar(250) NOT NULL,
  `DecimalValue` text NOT NULL,
  `HexadecimalValue` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `search`
--

INSERT INTO `search` (`ID`, `ObjectName`, `DecimalValue`, `HexadecimalValue`) VALUES
(1, 'Object 1', '12954', '329a'),
(2, 'Object 2', '12955', '329b'),
(3, 'Data 1', '12981', '32b5'),
(4, 'Data 2', '12982', '32b6'),
(5, 'Object - Data', '12990', '32be');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `search`
--
ALTER TABLE `search`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
