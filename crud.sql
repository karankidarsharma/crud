-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2017 at 01:47 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `sno` int(5) NOT NULL,
  `name` text NOT NULL,
  `classs` text NOT NULL,
  `pic` varchar(111) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`sno`, `name`, `classs`, `pic`) VALUES
(64, 'karan', 'sharma', 'Lighthouse.jpg'),
(66, 'karan', 'sharma', 'Chrysanthemum.jpg'),
(67, 'karan', 'sharma', 'Koala.jpg'),
(68, 'aakriti ', 'sagar sharma motoooo 1', 'Penguins.jpg'),
(57, 'karan', 'sharma', 'Koala.jpg'),
(58, 'karan', 'sharma', 'Koala.jpg'),
(59, 'karan', 'sharma', 'Koala.jpg'),
(60, 'karan', 'sharma', 'Koala.jpg'),
(61, 'karan', 'sharma', 'Desert.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `sno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
