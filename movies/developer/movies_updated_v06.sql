-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2019 at 06:18 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies`
--
DROP DATABASE IF EXISTS `movies`;
CREATE DATABASE IF NOT EXISTS `movies` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `movies`;

-- --------------------------------------------------------

--
-- Table structure for table `movielist`
--

DROP TABLE IF EXISTS `movielist`;
CREATE TABLE `movielist` (
  `A_I` int(11) NOT NULL,
  `Title` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Actors` text COLLATE utf8_unicode_ci NOT NULL,
  `image_url` longtext CHARACTER SET utf8 DEFAULT NULL,
  `Year` int(11) DEFAULT NULL,
  `Description` longtext CHARACTER SET utf8 DEFAULT NULL,
  `Rating` float DEFAULT NULL,
  `Votes` text CHARACTER SET utf8 DEFAULT NULL,
  `Length` int(11) DEFAULT NULL,
  `User` text COLLATE utf8_unicode_ci NOT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `movielist`
--

INSERT INTO `movielist` (`A_I`, `Title`, `Actors`, `image_url`, `Year`, `Description`, `Rating`, `Votes`, `Length`, `User`, `TimeStamp`) VALUES
(2, 'The Boss Baby', 'Alec Baldwin, Steve Buscemi, Jimmy Kimmel, Lisa Kudrow', 'https://m.media-amazon.com/images/M/MV5BMTg5MzUxNzgxNV5BMl5BanBnXkFtZTgwMTM2NzQ3MjI@._V1_SY1000_CR0,0,685,1000_AL_.jpg', 2017, 'A suit-wearing, briefcase-carrying baby pairs up with his 7-year old brother to stop the dastardly plot of the CEO of Puppy Co. This is a tset import by hand!', 6.3, '93459', 97, 'a', '2019-07-20 16:06:14'),
(156, 'Elysium', 'Matt Damon, Jodie Foster, Sharlto Copley, Alice Braga', 'https://m.media-amazon.com/images/M/MV5BNDc2NjU0MTcwNV5BMl5BanBnXkFtZTcwMjg4MDg2OQ@@._V1_SX300.jpg', 2013, 'In the year 2154, the very wealthy live on a man-made space station while the rest of the population resides on a ruined Earth. A man takes on a mission that could bring equality to the polarized worlds.', 6.6, '399,403', 109, 'b', '2019-10-07 11:36:37'),
(157, 'Ice Age', 'Ray Romano, John Leguizamo, Denis Leary, Goran Visnjic', 'https://m.media-amazon.com/images/M/MV5BMmYxZWY2NzgtYzJjZC00MDFmLTgxZTctMjRiYjdjY2FhODg3XkEyXkFqcGdeQXVyNjk1Njg5NTA@._V1_SX300.jpg', 2002, 'Set during the Ice Age, a sabertooth tiger, a sloth, and a wooly mammoth find a lost human infant, and they try to return him to his tribe.', 7.5, '409,953', 81, 'a', '2019-10-07 11:40:29'),
(158, 'Pulp Fiction', 'Tim Roth, Amanda Plummer, Laura Lovelace, John Travolta', 'https://m.media-amazon.com/images/M/MV5BNGNhMDIzZTUtNTBlZi00MTRlLWFjM2ItYzViMjE3YzI5MjljXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_SX300.jpg', 1994, 'The lives of two mob hitmen, a boxer, a gangster and his wife, and a pair of diner bandits intertwine in four tales of violence and redemption.', 8.9, '1,678,445', 154, 'b', '2019-10-07 11:40:42'),
(202, 'Madagascar', 'Ben Stiller, Chris Rock, David Schwimmer, Jada Pinkett Smith', 'https://m.media-amazon.com/images/M/MV5BN2I5YzFlYWEtZjRhNy00ZmQzLWJhNTktZGIwYjFjODdmNDgxXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_SX300.jpg', 2005, 'A group of animals who have spent all their life in a New York zoo end up in the jungles of Madagascar, and must adjust to living in the wild.', 6.9, '339,306', 86, 'a', '2019-10-11 16:12:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Username` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `Email` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `Password` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Username`, `Email`, `Password`) VALUES
(1, 'a', 'a@a.com', '$2y$10$T7.qJGFYmohjtqY.Tt8n6..NHip2VFR/qDHGsNzslyARcYVRbnzHe'),
(3, 'b', 'b@b.com', '$2y$10$0wJgBL/ssgEoGX6gmMla5ehh2/mrQ45ekJaUt5PuDNOxRHe8iokMu'),
(6, 'c', 'c@c.com', '$2y$10$c9lDTzKnB87bqHf0GUXIkuiPDYFstmTIhcTNt4AOt8lXdTyjO6xHS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movielist`
--
ALTER TABLE `movielist`
  ADD PRIMARY KEY (`A_I`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movielist`
--
ALTER TABLE `movielist`
  MODIFY `A_I` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
