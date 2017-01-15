-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2017 at 02:17 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eyeseatea`
--

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(11) NOT NULL,
  `remote_addr` varchar(50) NOT NULL,
  `forwarded` varchar(45) NOT NULL,
  `dates` date NOT NULL,
  `time` time NOT NULL,
  `day` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `remote_addr`, `forwarded`, `dates`, `time`, `day`) VALUES
(1, '::1', 'NO HTTP FORWARDED', '2017-01-15', '19:09:32', 'Sunday'),
(2, '::1', 'NO HTTP FORWARDED', '2017-01-15', '19:11:54', 'Sunday'),
(3, '::1', 'NO HTTP FORWARDED', '2017-01-15', '21:14:37', 'Sunday'),
(4, '::1', 'NO HTTP FORWARDED', '2017-01-15', '21:19:08', 'Sunday'),
(5, '::1', 'NO HTTP FORWARDED', '2017-01-15', '21:19:50', 'Sunday'),
(6, '::1', 'NO HTTP FORWARDED', '2017-01-15', '21:37:00', 'Sunday');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
