-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2019 at 09:11 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fifa`
--

-- --------------------------------------------------------

--
-- Table structure for table `other_details`
--

CREATE TABLE `other_details` (
  `id` int(11) NOT NULL,
  `player_id` int(7) NOT NULL,
  `club` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preferred_position` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `other_details`
--

INSERT INTO `other_details` (`id`, `player_id`, `club`, `preferred_position`) VALUES
(19, 107, 'BAYERN', 'RB'),
(21, 108, 'BAYERN', 'GK'),
(15, 111, 'BARCELONA', 'CB'),
(16, 113, 'BARCELONA', 'LB'),
(17, 114, 'BARCELONA', 'RW'),
(14, 117, 'MANCHESTER CITY', 'CM'),
(12, 118, 'REAL MADRID', 'GK'),
(13, 120, 'JUVENTUS', 'LW');

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE `personal_details` (
  `id` int(11) NOT NULL,
  `player_id` int(7) NOT NULL,
  `player_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(2) DEFAULT NULL,
  `overall_rating` int(2) DEFAULT NULL,
  `nationality` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`id`, `player_id`, `player_name`, `age`, `overall_rating`, `nationality`) VALUES
(1, 101, 'Neymar', 26, 92, 'Brazil'),
(3, 102, 'Marcelo', 30, 88, 'Brazil'),
(5, 104, 'Toni Kroos', 28, 90, 'Germany'),
(6, 105, 'Sergio Ramos', 32, 91, 'Spain'),
(9, 107, 'Joshua Kimmich', 23, 85, 'Germany'),
(10, 108, 'Manuel Neuer', 32, 90, 'Germany'),
(11, 109, 'Dany Alves', 35, 82, 'Brazil'),
(12, 110, 'Kylian Mbappe', 19, 87, 'France'),
(13, 111, 'Gerard Pique', 32, 87, 'Spain'),
(14, 112, 'Serigio Busquets', 30, 88, 'Spain'),
(15, 113, 'Jordi Alba', 29, 87, 'Spain'),
(16, 114, 'Leonel Messi', 31, 94, 'Argentina'),
(17, 115, 'Luis Swarez', 31, 91, 'Uruguay'),
(18, 116, 'Eden Hazard', 27, 91, 'Belgium'),
(19, 117, 'De Bruyne', 27, 91, 'Belgium'),
(20, 118, 'Courtois', 26, 90, 'Belgium'),
(21, 119, 'Paul Pogba', 27, 88, 'France'),
(22, 120, 'Cristiano Ronaldo', 32, 94, 'Portugal');

-- --------------------------------------------------------

--
-- Table structure for table `player_stats`
--

CREATE TABLE `player_stats` (
  `id` int(11) NOT NULL,
  `player_id` int(7) NOT NULL,
  `acceleration` int(2) DEFAULT NULL,
  `balance` int(2) DEFAULT NULL,
  `ball_control` int(2) DEFAULT NULL,
  `crossing` int(2) DEFAULT NULL,
  `curve` int(2) DEFAULT NULL,
  `dribbling` int(2) DEFAULT NULL,
  `finishing` int(2) DEFAULT NULL,
  `gk_kicking` int(2) DEFAULT NULL,
  `gk_positioning` int(2) DEFAULT NULL,
  `penalties` int(2) DEFAULT NULL,
  `short_pass` int(2) DEFAULT NULL,
  `stamina` int(2) DEFAULT NULL,
  `strength` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `player_stats`
--

INSERT INTO `player_stats` (`id`, `player_id`, `acceleration`, `balance`, `ball_control`, `crossing`, `curve`, `dribbling`, `finishing`, `gk_kicking`, `gk_positioning`, `penalties`, `short_pass`, `stamina`, `strength`) VALUES
(1, 101, 94, 84, 95, 88, 79, 96, 87, 12, 12, 94, 90, 90, 80),
(2, 102, 83, 96, 86, 92, 85, 90, 67, 20, 18, 80, 80, 85, 78),
(10, 104, 69, 71, 90, 86, 88, 79, 76, 50, 48, 85, 95, 90, 80),
(8, 105, 76, 66, 84, 73, 66, 61, 60, 30, 40, 90, 85, 85, 84),
(4, 108, 54, 35, 48, 14, 15, 30, 13, 95, 90, 60, 45, 80, 78),
(7, 111, 49, 36, 78, 58, 57, 59, 66, 48, 49, 80, 88, 80, 90),
(6, 114, 91, 95, 96, 92, 77, 97, 94, 48, 40, 96, 98, 95, 90),
(5, 120, 89, 70, 94, 81, 84, 88, 94, 40, 30, 98, 90, 90, 94);

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id` int(11) NOT NULL,
  `player_id` int(7) NOT NULL,
  `gk` int(2) DEFAULT NULL,
  `df` int(2) DEFAULT NULL,
  `cm` int(2) DEFAULT NULL,
  `fr` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `player_id`, `gk`, `df`, `cm`, `fr`) VALUES
(1, 101, 13, 82, 91, 95),
(3, 104, 15, 73, 87, 82),
(6, 105, 12, 88, 74, 70),
(2, 108, 91, 15, 16, 18),
(7, 110, 11, 74, 86, 86),
(8, 111, 14, 84, 81, 67),
(9, 113, 12, 81, 80, 79),
(5, 114, 6, 48, 85, 93),
(10, 116, 8, 50, 90, 89),
(4, 120, 5, 54, 81, 90);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(11) NOT NULL,
  `player_id` int(7) NOT NULL,
  `wage` int(11) DEFAULT NULL,
  `value` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `player_id`, `wage`, `value`) VALUES
(7, 105, 450, 560000),
(10, 107, 450, 5206000),
(8, 111, 400, 5260000),
(9, 113, 400, 5200060),
(6, 114, 500, 52000000),
(5, 116, 390, 5200000),
(3, 117, 300, 5400000),
(1, 118, 200, 5200000),
(4, 119, 400, 5200000),
(2, 120, 500, 52000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `other_details`
--
ALTER TABLE `other_details`
  ADD PRIMARY KEY (`player_id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `personal_details`
--
ALTER TABLE `personal_details`
  ADD PRIMARY KEY (`player_id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `player_stats`
--
ALTER TABLE `player_stats`
  ADD PRIMARY KEY (`player_id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`player_id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`player_id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `other_details`
--
ALTER TABLE `other_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `personal_details`
--
ALTER TABLE `personal_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `player_stats`
--
ALTER TABLE `player_stats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `other_details`
--
ALTER TABLE `other_details`
  ADD CONSTRAINT `other_details_ibfk_1` FOREIGN KEY (`player_id`) REFERENCES `personal_details` (`player_id`) ON DELETE CASCADE;

--
-- Constraints for table `player_stats`
--
ALTER TABLE `player_stats`
  ADD CONSTRAINT `player_stats_ibfk_1` FOREIGN KEY (`player_id`) REFERENCES `personal_details` (`player_id`) ON DELETE CASCADE;

--
-- Constraints for table `position`
--
ALTER TABLE `position`
  ADD CONSTRAINT `position_ibfk_1` FOREIGN KEY (`player_id`) REFERENCES `personal_details` (`player_id`) ON DELETE CASCADE;

--
-- Constraints for table `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `salary_ibfk_1` FOREIGN KEY (`player_id`) REFERENCES `personal_details` (`player_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
