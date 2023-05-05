-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 05, 2023 at 05:26 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hypermega`
--

-- --------------------------------------------------------

--
-- Table structure for table `trouble`
--

CREATE TABLE `trouble` (
  `id` int(11) NOT NULL,
  `ticket_no` varchar(256) NOT NULL,
  `troubleshoot_date` date NOT NULL,
  `troubleshoot_cat` varchar(256) NOT NULL,
  `request_by` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trouble`
--

INSERT INTO `trouble` (`id`, `ticket_no`, `troubleshoot_date`, `troubleshoot_cat`, `request_by`) VALUES
(1, 'A230302001', '2023-03-02', 'Outlook', 'Fajar'),
(2, 'A230302002', '2023-03-02', 'Microsoft Office', 'Reza'),
(3, 'A230307001', '2023-03-07', 'Microsoft Office', 'Yanti'),
(4, 'A230307002', '2023-03-07', 'Internet', 'Ivanna'),
(5, 'A230308001', '2023-03-08', 'Outlook', 'Febri'),
(6, 'A230308002', '2023-03-08', 'Printer', 'Yanti'),
(7, 'A230309001', '2023-03-09', 'Microsoft Office', 'Fajar'),
(8, 'A230310001', '2023-03-10', 'Internet', 'Alvin'),
(9, 'A230310002', '2023-03-10', 'Internet', 'Fajar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trouble`
--
ALTER TABLE `trouble`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trouble`
--
ALTER TABLE `trouble`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
