-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2015 at 08:59 PM
-- Server version: 5.6.23-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quic_nyc`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

use quic_nyc;

CREATE TABLE IF NOT EXISTS `contact` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(75) NOT NULL DEFAULT '',
  `Phone` varchar(20) NOT NULL,
  `Message` varchar(500) NOT NULL,
  `timeSent` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Email`,`timeSent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(75) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Degree` varchar(20) NOT NULL,
  `Graduation` varchar(20) NOT NULL,
  `Year` varchar(4) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Credits_Needed` varchar(5) NOT NULL,
  `experience` varchar(1500) NOT NULL,
  `personal` varchar(1500) NOT NULL,
  `Transcript` varchar(100) DEFAULT NULL,
  `Resume` varchar(100) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Email`,`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `venture`
--

CREATE TABLE IF NOT EXISTS `venture` (
  `app-name` varchar(50) NOT NULL,
  `venture-name` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `workstations` varchar(50) NOT NULL,
  `full-time-positions` varchar(50) NOT NULL,
  `participated-before` varchar(50) NOT NULL,
  `how-did-you-hear-about` varchar(50) NOT NULL,
  `know-anyone` varchar(50) NOT NULL,
  `new-or-existing` varchar(50) NOT NULL,
  `housing` varchar(200) NOT NULL,
  `capital` varchar(200) NOT NULL,
  `define` varchar(200) NOT NULL,
  `problem` varchar(200) NOT NULL,
  `unique` varchar(200) NOT NULL,
  `target` varchar(200) NOT NULL,
  `technology` varchar(200) NOT NULL,
  `revenue` varchar(200) NOT NULL,
  `partners` varchar(200) NOT NULL,
  `strategy` varchar(500) NOT NULL,
  `advantage` varchar(500) NOT NULL,
  `skills` varchar(500) NOT NULL,
  `success` varchar(500) NOT NULL,
  `exec-summary` varchar(250) DEFAULT NULL,
  `presentation` varchar(250) DEFAULT NULL,
  `bios` varchar(250) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`email`, `timestamp`) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
