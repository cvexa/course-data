-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2016 at 10:46 PM
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
-- Table structure for table `added`
--

CREATE TABLE `added` (
  `add_id` int(11) NOT NULL,
  `added_by` varchar(100) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `added`
--

INSERT INTO `added` (`add_id`, `added_by`, `date_deleted`) VALUES
(1, 'koko', NULL),
(2, 'maskota', NULL),
(3, 'lomo', NULL),
(4, 'lomo', NULL),
(5, 'asdasd', NULL),
(6, 'kioto', NULL),
(7, 'zombiii', NULL),
(8, 'zombi2', NULL),
(9, 'yolo', NULL),
(10, 'yolo', NULL),
(11, 'Admin', NULL),
(12, 'Admin', NULL),
(13, 'Admin', NULL),
(14, 'Admin', NULL),
(15, 'sambo', NULL),
(16, 'sambo$asd/', NULL),
(17, 'miracast', NULL),
(18, 'Admin', NULL),
(19, 'dl;fkmgdfg', NULL),
(20, 'asdasdasd', NULL),
(21, 'mambojambo', NULL),
(22, 'dfgdfg', NULL),
(23, 'yoga', NULL),
(24, 'random_guy', NULL);

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
  `approve` varchar(100) DEFAULT 'wait',
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lvl3`
--

INSERT INTO `lvl3` (`id_math`, `number_1`, `symbol`, `number_2`, `result`, `added_by`, `approve`, `date_deleted`) VALUES
(2, 10, '*', 50, '500', 'lomo', 'ok', '2016-04-05'),
(32, 1, '+', 1, '2', 'lomo', 'easy', '2016-04-02'),
(33, 100, '+', 1, '101', 'kioto', 'mm..ok', '2016-04-02'),
(34, 50, '/', 5, '10', 'zombiiii', 'ok', '2016-04-05'),
(35, 100, '(-1)+', 100, '199', 'zombi2', 'fine', '2016-04-05'),
(39, 11, '+', 100, '111', 'Admin', 'DELETED', '2016-04-02'),
(40, 11, '+', 100, '111', 'Admin', 'ok', '2016-04-02'),
(41, 9, '*', 1, '9', 'Admin', 'DELETED', '2016-04-05'),
(43, 1, '12', 1, '1', 'sambo$asd', 'DELETED', '2016-04-02'),
(44, 9, '+(1)-', 1, '9', 'miracast', 'good_to_go', '2016-04-04'),
(45, 8, '+', 8, '16', 'Admin', 'ok', NULL);

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
(18, 'Lady_dark', 1, 0, NULL),
(20, 'sve', 0, 0, '2016-04-01'),
(21, 'probba', 1, 2, NULL),
(22, 'simbat', 2, 2, NULL),
(23, 'asdasd', 2, 0, NULL),
(24, 'asdasd', 2, 2, NULL),
(25, 'asdasd', 2, 2, NULL),
(26, 'asdasd', 2, 2, NULL),
(27, 'asdasd', 2, 2, NULL),
(28, 'kopo', 2, 3, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `added`
--
ALTER TABLE `added`
  ADD PRIMARY KEY (`add_id`),
  ADD KEY `added_by` (`added_by`);

--
-- Indexes for table `lvl3`
--
ALTER TABLE `lvl3`
  ADD PRIMARY KEY (`id_math`),
  ADD KEY `number_1` (`number_1`),
  ADD KEY `symbol` (`symbol`),
  ADD KEY `number_2` (`number_2`),
  ADD KEY `result` (`result`),
  ADD KEY `added_by` (`added_by`),
  ADD KEY `approve` (`approve`);

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
-- AUTO_INCREMENT for table `added`
--
ALTER TABLE `added`
  MODIFY `add_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `lvl3`
--
ALTER TABLE `lvl3`
  MODIFY `id_math` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `scoreboard`
--
ALTER TABLE `scoreboard`
  MODIFY `id_score` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
