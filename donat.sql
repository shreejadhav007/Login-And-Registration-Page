-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2023 at 09:00 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donat`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(12) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'a', '1'),
(2, 'yash', 'yash');

-- --------------------------------------------------------

--
-- Table structure for table `donar`
--

CREATE TABLE `donar` (
  `id` int(11) NOT NULL,
  `code` varchar(5) NOT NULL,
  `usern` varchar(222) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donar`
--

INSERT INTO `donar` (`id`, `code`, `usern`, `pass`) VALUES
(1, '123', 'aa', 'aa'),
(2, '', 'Shriyashjadhav007@gmail.com', 'fsad'),
(3, ' 8JOL', 'aaa', 'aaa'),
(4, ' P4ES', 'asa', 'aaa'),
(5, ' 563M', 'qqq', 'qqq'),
(6, ' WIH6', 'assa', 'sasa'),
(7, ' QBCA', 'asaa', 'sasa'),
(8, ' YC28', 'fasd', 'fasdf'),
(9, ' JSH2', 'Shriyashjadhav07@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donar`
--
ALTER TABLE `donar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donar`
--
ALTER TABLE `donar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
