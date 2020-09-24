-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 24, 2020 at 03:04 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Dummy_Data`
--

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `Id` int(11) NOT NULL,
  `First_Name` varchar(40) NOT NULL,
  `Last_Name` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Credit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`Id`, `First_Name`, `Last_Name`, `Email`, `Credit`) VALUES
(1, 'Ashika', 'Patel', 'ashikapatel@gmail.com', 10000),
(3, 'Anushka', 'Patel', 'anushkapatel@gmail.com', 15000),
(5, 'Dreep', 'Sharma', 'dreepsharma@gmail.com', 20000),
(6, 'Kunal', 'Mishra', 'kunalmishra@gmail.com', 30015),
(7, 'Misha', 'Patel', 'mishapatel@gmail.com', 25010),
(8, 'Ishan', 'Sharma', 'ishansharma@gmail.com', 32746),
(11, 'Nishant', 'Gupta', 'nishantgupta@gmail.com', 38014),
(12, 'Ritu', 'Vyas', 'rituvyas@gmail.com', 40204),
(15, 'Anika', 'Kahar', 'anikakahar@gmail.com', 47000),
(16, 'Disha', 'Jaiswal', 'dishajaiswal@gmail.com', 15000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
