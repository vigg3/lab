-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 04 okt 2017 kl 11:48
-- Serverversion: 10.1.26-MariaDB
-- PHP-version: 7.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `lab`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `books`
--

CREATE TABLE `books` (
  `bookid` int(10) NOT NULL,
  `title` varchar(40) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `author` varchar(40) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `onloan` int(1) DEFAULT NULL,
  `duedate` date DEFAULT NULL,
  `borrowid` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumpning av Data i tabell `books`
--

INSERT INTO `books` (`bookid`, `title`, `author`, `onloan`, `duedate`, `borrowid`) VALUES
(1, 'Book Fief', 'Makus Zysack', 0, NULL, NULL),
(3, 'A Small Loan of a Million Dollars', 'Donald Trump', 0, NULL, NULL),
(4, 'In a Galaxy Far Far Away...', 'George Lucas', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Tabellstruktur `user`
--

CREATE TABLE `user` (
  `username` varchar(15) COLLATE utf8_general_mysql500_ci NOT NULL,
  `password` varchar(41) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumpning av Data i tabell `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('vigg', '403926033d001b5279df37cbbe5287b7c7c267fa');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookid`);

--
-- Index för tabell `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
