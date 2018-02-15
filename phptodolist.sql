-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 15 feb 2018 om 18:26
-- Serverversie: 5.7.14
-- PHP-versie: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phptodolist`
--
CREATE DATABASE IF NOT EXISTS `phptodolist` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `phptodolist`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `lijsten`
--

DROP TABLE IF EXISTS `lijsten`;
CREATE TABLE IF NOT EXISTS `lijsten` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `naam` varchar(40) NOT NULL DEFAULT 'Nieuwe lijst',
  `omschrijving` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniekelijstnaam` (`naam`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `statussen`
--

DROP TABLE IF EXISTS `statussen`;
CREATE TABLE IF NOT EXISTS `statussen` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `naam` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `taken`
--

DROP TABLE IF EXISTS `taken`;
CREATE TABLE IF NOT EXISTS `taken` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `naam` varchar(40) NOT NULL DEFAULT 'nieuwe taak',
  `omschrijving` text,
  `duur` int(11) NOT NULL DEFAULT '0',
  `status_id` mediumint(9) NOT NULL,
  `lijst_id` mediumint(9) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status_id` (`status_id`),
  KEY `lijst_id` (`lijst_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `taken`
--
ALTER TABLE `taken`
  ADD CONSTRAINT `taken_ibfk_1` FOREIGN KEY (`lijst_id`) REFERENCES `lijsten` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `taken_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `statussen` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
