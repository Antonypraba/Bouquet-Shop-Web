-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2013 at 03:57 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `miniproject`
--

-- --------------------------------------------------------

--


-- --------------------------------------------------------

--
-- Table structure for table `contactform`
--

CREATE TABLE IF NOT EXISTS `contactform` (
  `name` varchar(20) NOT NULL,
  `address` varchar(35) NOT NULL,
  `email` varchar(55) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `message` varchar(6) NOT NULL,
  `bouquets` varchar(40) NOT NULL,
  `bouquets1` varchar(45) NOT NULL,
  `bouquets2` varchar(45) NOT NULL,

  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regform`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
