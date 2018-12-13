-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2018 at 11:58 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bpl`
--

CREATE TABLE `bpl` (
  `id` int(11) NOT NULL,
  `club` varchar(100) NOT NULL,
  `mp` int(2) NOT NULL,
  `w` int(2) NOT NULL,
  `d` int(2) NOT NULL,
  `l` int(2) NOT NULL,
  `pts` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bpl`
--

INSERT INTO `bpl` (`id`, `club`, `mp`, `w`, `d`, `l`, `pts`) VALUES
(1, 'Liverpool FC', 16, 13, 3, 0, 42),
(2, 'Manchester City', 16, 13, 2, 1, 41),
(3, 'Tottenham Hotspur', 16, 12, 0, 4, 36),
(4, 'Chelsea FC', 16, 10, 4, 2, 34),
(5, 'Arsenal FC', 16, 10, 4, 2, 34),
(6, 'Manchester United', 16, 7, 5, 4, 26),
(7, 'Everton', 16, 6, 6, 4, 24),
(8, 'Bournemouth', 16, 7, 2, 7, 23),
(9, 'Leicester City', 16, 6, 4, 6, 22),
(10, 'Wolves', 16, 6, 4, 6, 22),
(11, 'West Ham United', 16, 6, 3, 7, 21),
(12, 'Watford', 16, 6, 3, 7, 21),
(13, 'Brighton', 16, 6, 3, 7, 21),
(14, 'Cardiff City', 16, 4, 2, 10, 14),
(15, 'Newcastle United', 16, 3, 4, 9, 13),
(16, 'Crystal Palace', 16, 3, 3, 10, 12),
(17, 'Burnley FC', 16, 3, 3, 10, 12),
(18, 'Huddersfield Town', 16, 2, 4, 10, 10),
(19, 'Southampton', 16, 1, 6, 9, 9),
(20, 'Fullham', 16, 2, 3, 11, 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bpl`
--
ALTER TABLE `bpl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bpl`
--
ALTER TABLE `bpl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
