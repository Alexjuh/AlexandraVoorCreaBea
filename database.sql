
-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 29 nov 2017 om 15:47
-- Serverversie: 10.1.25-MariaDB
-- PHP-versie: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `cl_db`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `to-do-crea`
--

CREATE TABLE `to-do-crea` (
  `item_id` int(11) NOT NULL,
  `item_list` text NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `done` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `to-do-crea`
--

INSERT INTO `to-do-crea` (`item_id`, `item_list`, `start_time`, `end_time`, `done`) VALUES
(1, 'Arriveren en welkom', '09:30:00', '09:45:00', 0),
(2, 'Opdracht lezen', '09:45:00', '10:00:00', 0),
(3, 'onderzoeken MySQL', '10:00:00', '10:30:00', 0),
(4, 'database maken', '10:30:00', '11:30:00', 0),
(5, 'Pauze', '13:00:00', '13:30:00', 0),
(6, 'front-end maken', '13:30:00', '15:00:00', 0),
(7, 'testen', '15:00:00', '16:00:00', 0),
(8, 'inleveren', '16:00:00', '16:30:00', 0),
(9, 'afsluiten', '16:30:00', '17:00:00', 0);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `to-do-crea`
--
ALTER TABLE `to-do-crea`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `to-do-crea`
--
ALTER TABLE `to-do-crea`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;
