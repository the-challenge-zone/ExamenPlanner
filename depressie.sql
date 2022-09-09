-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 09 sep 2022 om 14:22
-- Serverversie: 10.4.19-MariaDB
-- PHP-versie: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `depressie`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `exam`
--

CREATE TABLE `exam` (
  `examID` int(50) NOT NULL,
  `examGroup` varchar(7) NOT NULL,
  `examCrebo` int(10) NOT NULL,
  `examQualification` varchar(30) NOT NULL,
  `examCohort` varchar(30) NOT NULL,
  `examUnit` varchar(30) NOT NULL,
  `examCode` int(30) NOT NULL,
  `examForm` text NOT NULL,
  `examTimeLimit` int(5) NOT NULL,
  `examDay` text NOT NULL,
  `examTime` int(10) NOT NULL,
  `examAssessor` text NOT NULL,
  `examSupplier` text NOT NULL,
  `examRoom` varchar(10) NOT NULL,
  `examSurveillance` tinyint(1) NOT NULL,
  `examAmount` int(5) NOT NULL,
  `examStudentnumber` int(10) NOT NULL,
  `examCluster` varchar(10) NOT NULL,
  `examVersion` int(11) NOT NULL,
  `examApplicant` varchar(20) NOT NULL,
  `examWeek` int(3) NOT NULL,
  `examLocation` varchar(10) NOT NULL,
  `examDescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='This table is used to store all information from exams';

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'test', '$2y$10$Sq31w4i3Bj2xaBim/8xjp.Iq8UfFJlu/YgrUTnslOox1xO/CxZ5h2', '2022-03-10 14:57:41');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
