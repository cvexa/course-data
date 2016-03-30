-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2016 at 11:34 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `math`
--

-- --------------------------------------------------------

--
-- Table structure for table `lvl3`
--

CREATE TABLE `lvl3` (
  `id_math` int(11) NOT NULL,
  `number_1` int(11) NOT NULL,
  `symbol` varchar(100) NOT NULL,
  `number_2` int(11) NOT NULL,
  `result` varchar(100) NOT NULL,
  `added_by` varchar(100) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lvl3`
--

INSERT INTO `lvl3` (`id_math`, `number_1`, `symbol`, `number_2`, `result`, `added_by`, `date_deleted`) VALUES
(2, 10, '*', 50, '500', 'admin', NULL),
(5, 50, '/', 2, '25', 'admin\r\n', NULL),
(6, 11, '+', 11, '22', 'axaxax', NULL),
(7, 100, '-', 50, '50', 'asdasd', NULL),
(8, 2000, '+', 1, '2001', 'asdasd', NULL),
(11, 202, '-', 2, '200', 'thfghfgh', NULL),
(12, 12, '+ - ', 1, '12', 'sf32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `scoreboard`
--

CREATE TABLE `scoreboard` (
  `id_score` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `lvl` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `scoreboard`
--

INSERT INTO `scoreboard` (`id_score`, `user_name`, `lvl`, `score`, `date_deleted`) VALUES
(1, 'kjljkl', 1, 0, NULL),
(7, 'dasdasd', 2, 12, '2016-03-01'),
(13, 'Marko', 1, 2, NULL),
(14, 'L0l3', 2, 2, NULL),
(15, 'random_', 2, 3, NULL),
(16, 'Kokolino', 1, 1, NULL),
(17, 'Star_34', 2, 2, NULL),
(18, 'Lady_dark', 1, 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lvl3`
--
ALTER TABLE `lvl3`
  ADD PRIMARY KEY (`id_math`),
  ADD KEY `number_1` (`number_1`),
  ADD KEY `symbol` (`symbol`),
  ADD KEY `number_2` (`number_2`),
  ADD KEY `result` (`result`),
  ADD KEY `added_by` (`added_by`);

--
-- Indexes for table `scoreboard`
--
ALTER TABLE `scoreboard`
  ADD PRIMARY KEY (`id_score`),
  ADD KEY `user_name` (`user_name`),
  ADD KEY `lvl` (`lvl`),
  ADD KEY `score` (`score`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lvl3`
--
ALTER TABLE `lvl3`
  MODIFY `id_math` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `scoreboard`
--
ALTER TABLE `scoreboard`
  MODIFY `id_score` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
