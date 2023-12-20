-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2023 at 12:41 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miniproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `uname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL,
  `zipcode` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `pname`, `uname`, `email`, `phone`, `address`, `city`, `state`, `zipcode`) VALUES
(136, 'Yellow', 'Antony', 'Antonypraba65@gmail.com', 9442148837, '3/139 matha kovil st,\r\nsalavanur, vikkaravandi tal', 'Villupuram', 'Tamilnadu', '605202');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(50) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `pimg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `pname`, `price`, `pimg`) VALUES
(1, 'Rose bokey', 500, 'png/0.png'),
(2, 'Yellow rose', 450, 'png/1.png'),
(3, 'MIX Flowr', 860, 'png/2.png'),
(4, 'Grid Bockey', 900, 'png/3.png'),
(5, 'Yellow role', 700, 'png/4.png'),
(6, 'Rose Clash', 1500, 'png/6.png'),
(7, 'Rose Sprid', 800, 'png/7.png'),
(8, 'White Rose', 790, 'png/8.png'),
(9, 'Rose Bockey', 500, 'png/9.png'),
(10, 'Yellow flor', 650, 'png/10.png'),
(11, 'Rose flash', 400, 'png/11.png'),
(12, 'Rose velvet', 800, 'png/12.png'),
(13, 'Yellow flow', 700, 'png/13.jpg'),
(14, 'White cart', 460, 'png/14.png'),
(15, 'Rose flower', 700, 'png/15.png'),
(16, 'Orange crowln', 450, 'png/16.png'),
(17, 'Rose cart', 500, 'png/17.png'),
(18, 'Sleek rose', 700, 'png/18.png'),
(19, 'Flas bockey', 450, 'png/19.jpg'),
(20, 'Pink cart', 500, 'png/20.jpg'),
(21, 'White red mix', 450, 'png/21.png'),
(22, 'Rose fole', 500, 'png/22.png'),
(23, 'Flow pot', 450, 'png/23.jpg'),
(24, 'Orange flow', 400, 'png/24.jpg'),
(25, 'White flow', 500, 'png/25.jpg'),
(26, 'Rose pote', 450, 'png/26.jpg'),
(27, 'White pot', 700, 'png/17.png'),
(28, 'Orange', 700, 'png/28.jpg'),
(29, 'White', 400, 'png/29.jpg'),
(30, 'Rose bit pot', 500, 'png/30.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `uname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `pwd` varchar(45) NOT NULL,
  `cpwd` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `uname`, `email`, `pwd`, `cpwd`) VALUES
(1, 'antony', 'Antonypraba65@gmail.com', '0000', '0000'),
(2, 'guru', 'guru@gmail.com', '0000', '0000'),
(3, 'ritpraba', 'rp@g.co', '1234', '1234'),
(4, 'rit', 'r@gmail.com', '1111', '1111'),
(5, 'Anthony', 'praba@gmail.com', '9442232634aA@', '9442232634aA@');

-- --------------------------------------------------------

--
-- Table structure for table `sessiontracking`
--

CREATE TABLE `sessiontracking` (
  `sessionID` varchar(20) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `login_date` date NOT NULL,
  `login_time` time NOT NULL,
  `logout_date` date NOT NULL,
  `logout_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sessiontracking`
--

INSERT INTO `sessiontracking` (`sessionID`, `uname`, `login_date`, `login_time`, `logout_date`, `logout_time`) VALUES
('6g08ln1l0lij43e2dq79', 'rit', '2023-01-12', '11:55:17', '2023-01-12', '11:55:39'),
('6g08ln1l0lij43e2dq79', 'Antony', '2023-01-12', '12:04:31', '0000-00-00', '00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessiontracking`
--
ALTER TABLE `sessiontracking`
  ADD PRIMARY KEY (`login_time`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
