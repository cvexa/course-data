-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Версия на сървъра: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `books`
--

-- --------------------------------------------------------

--
-- Структура на таблица `authors`
--

CREATE TABLE `authors` (
  `authors_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `year_of_birth` date DEFAULT NULL,
  `born_from` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `authors`
--

INSERT INTO `authors` (`authors_id`, `name`, `year_of_birth`, `born_from`) VALUES
(0, 'hmmbnkkkkkk', '1926-01-01', 'Monroeville/Alabama'),
(2, 'hmmbnkkkkkk', '1222-01-01', 'xcvxcv');

-- --------------------------------------------------------

--
-- Структура на таблица `titles`
--

CREATE TABLE `titles` (
  `title_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `authors_id` varchar(100) NOT NULL,
  `realease` varchar(100) NOT NULL,
  `types_id` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `titles`
--

INSERT INTO `titles` (`title_id`, `title`, `authors_id`, `realease`, `types_id`, `price`) VALUES
(1, 'To Kill a Mockingbird', '2', '11 October 1988', '1', '2.48 Euro');

-- --------------------------------------------------------

--
-- Структура на таблица `types`
--

CREATE TABLE `types` (
  `types_id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `types`
--

INSERT INTO `types` (`types_id`, `type`, `date_deleted`) VALUES
(1, 'modern_classic', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`authors_id`);

--
-- Indexes for table `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`title_id`),
  ADD KEY `author` (`authors_id`),
  ADD KEY `type` (`types_id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`types_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `authors_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `titles`
--
ALTER TABLE `titles`
  MODIFY `title_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `types_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
