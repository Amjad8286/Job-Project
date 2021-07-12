-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2021 at 01:06 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `givejob`
--

-- --------------------------------------------------------

--
-- Table structure for table `addjob`
--

CREATE TABLE `addjob` (
  `id` int(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addjob`
--

INSERT INTO `addjob` (`id`, `company`, `salary`, `des`, `experience`) VALUES
(24, 'rehman', '30000', 'That is my project and I make this with Python Django', '6'),
(25, 'samco ltd', '30000', 'uipath', '6'),
(26, 'digital marketing', '33333', 'That is my project and I make this with Python ', '2'),
(29, 'rehman', '325235', 'That is my project and I make', ''),
(30, 'rehman', '325235', 'That is my project and I make this with Python Django', ''),
(32, 'rehman', 't8t8t8', 'That is my project and I make this with Python Django', '6'),
(33, 'amjad ansari', '30000', 'That is my project and I make this with Python Django', '2'),
(34, 'amjad ansari', 't8t8t8', 'That is my project and I make this with Python Djangocstyle=\"width: 95%;margin:20px 0px 20px 25px\"style=\"width: 95%;margin:20px 0px 20px 25px\"style=\"width: 95%;margin:20px 0px 20px 25px\"style=\"width: 95%;margin:20px 0px 20px 25px\"style=\"width: 95%;margin:', '6'),
(35, 'abdul rehman', 't8t8t8', 'iyi7it8i', '2');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `password`) VALUES
(2, 'rehman', 'amjad8286@gmail.com', '12345'),
(4, 'faizan', 'amjad8286@gmail.com', 'faizan'),
(5, 'amjad', 'amjad8286@gmail.com', 'amjad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addjob`
--
ALTER TABLE `addjob`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addjob`
--
ALTER TABLE `addjob`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
