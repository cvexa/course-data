-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2016 at 05:03 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hospitals`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE IF NOT EXISTS `doctors` (
`doctors_id` int(11) NOT NULL,
  `doctors_name` varchar(100) NOT NULL,
  `UIN` int(11) NOT NULL,
  `specials_id` varchar(100) NOT NULL,
  `hospitals_id` int(11) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doctors_id`, `doctors_name`, `UIN`, `specials_id`, `hospitals_id`, `date_deleted`) VALUES
(1, 'Random Name Doctor', 2147483647, '1', 1, NULL),
(2, 'Random Name 2 Doctor', 55333211, '2', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE IF NOT EXISTS `hospitals` (
`hospitals_id` int(11) NOT NULL,
  `hospitals_name` varchar(100) NOT NULL,
  `RCS_code` int(11) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`hospitals_id`, `hospitals_name`, `RCS_code`, `date_deleted`) VALUES
(1, 'MBAL Hristo Botev ', 234234, NULL),
(2, 'saint ANNA', 25245, NULL),
(3, 'Nikola Voivodov', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `specials`
--

CREATE TABLE IF NOT EXISTS `specials` (
`specials_id` int(11) NOT NULL,
  `specials` varchar(100) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `specials`
--

INSERT INTO `specials` (`specials_id`, `specials`, `date_deleted`) VALUES
(1, 'Детски Хирург', NULL),
(2, 'surgeon', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
 ADD PRIMARY KEY (`doctors_id`), ADD KEY `doctors_name` (`doctors_name`,`UIN`), ADD KEY `specials_id` (`specials_id`), ADD KEY `specials_id_2` (`specials_id`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
 ADD PRIMARY KEY (`hospitals_id`), ADD KEY `hospitals_name` (`hospitals_name`,`RCS_code`);

--
-- Indexes for table `specials`
--
ALTER TABLE `specials`
 ADD PRIMARY KEY (`specials_id`), ADD KEY `specials` (`specials`), ADD KEY `specials_2` (`specials`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
MODIFY `doctors_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
MODIFY `hospitals_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `specials`
--
ALTER TABLE `specials`
MODIFY `specials_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
