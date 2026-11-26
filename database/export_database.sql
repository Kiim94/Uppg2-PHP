-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Värd: localhost:3306
-- Tid vid skapande: 26 nov 2026 kl 13:34
-- Serverversion: 5.7.42-0ubuntu0.18.04.1-log
-- PHP-version: 7.2.24-0ubuntu0.18.04.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `mobr2500`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `bucketitem`
--

CREATE TABLE `bucketitem` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `priority` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumpning av Data i tabell `bucketitem`
--

INSERT INTO `bucketitem` (`id`, `name`, `description`, `priority`, `created_at`) VALUES
(7, 'Animering/Rita', 'Lära mig rita och animera: små drömmar om att kunna designa ett spel', 3, '2026-11-22 13:57:30'),
(8, 'Skaffa tatuering', 'Någon gång i livet vill jag skaffa en tatuering: men jag vill att den ska betyda något, inte bara vad som helst', 2, '2026-11-22 15:11:04'),
(10, 'Resa till japan', 'Stor fan av kulturen. Vore häftigt att resa dit en dag', 2, '2026-11-24 14:59:52');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `bucketitem`
--
ALTER TABLE `bucketitem`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `bucketitem`
--
ALTER TABLE `bucketitem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
