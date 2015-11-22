-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Erstellungszeit: 21. Nov 2015 um 23:25
-- Server Version: 5.5.33a-MariaDB
-- PHP-Version: 5.5.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `opiceisis_isis`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `isismembers`
--

CREATE TABLE IF NOT EXISTS `isismembers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `realname` varchar(45) DEFAULT NULL,
  `twitter` varchar(45) DEFAULT NULL,
  `twitterstatus` int(1) DEFAULT NULL,
  `facebook` varchar(45) DEFAULT NULL,
  `homepage` varchar(45) DEFAULT NULL,
  `other` longtext,
  `dateadded` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
