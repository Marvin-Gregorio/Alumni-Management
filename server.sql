-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2023 at 07:28 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `server`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `lastname`, `firstname`, `middlename`, `email`, `phone`, `dob`, `password`, `username`) VALUES
(9, 'Dela Cruz', 'Leofer Rodel', 'Tecson', 'Leoferma099@gmail.com', '09995117532', '1999-12-02', '827ccb0eea8a706c4c34a16891f84e7b', 'Leofer_ma'),
(11, 'Pilorin', 'Aurora', 'K', 'eliasfsdev@gmail.com', '01234567789', '1111-11-11', '827ccb0eea8a706c4c34a16891f84e7b', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` int(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `middlename` varchar(200) NOT NULL,
  `permanetaddr` varchar(200) NOT NULL,
  `presentaddr` varchar(200) NOT NULL,
  `emailaddr` varchar(200) NOT NULL,
  `birthdate` date NOT NULL,
  `contact` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `civilstats` varchar(200) NOT NULL,
  `basiced` varchar(200) NOT NULL,
  `college` varchar(200) NOT NULL,
  `gradschool` varchar(200) NOT NULL,
  `course` varchar(200) NOT NULL,
  `yeargrad` year(4) NOT NULL,
  `norg` varchar(200) NOT NULL,
  `norgcontact` varchar(200) NOT NULL,
  `org` varchar(200) NOT NULL,
  `orgemail` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `lastname`, `firstname`, `middlename`, `permanetaddr`, `presentaddr`, `emailaddr`, `birthdate`, `contact`, `gender`, `civilstats`, `basiced`, `college`, `gradschool`, `course`, `yeargrad`, `norg`, `norgcontact`, `org`, `orgemail`) VALUES
(8, 'James', 'Lebron', 'Aso', 'LA, Ohio', 'LA, Ohio', 'kingjames@gmail.com', '1989-12-02', '09995117532', 'male', 'single', 'Select', 'bs', 'Select', 'Select', 2023, 'Columban College', '09995117532', 'Columban College', 'columban123@gmail.com'),
(10, 'Timothy', 'Clarence Laurent', 'Ma', 'HFA Gerald 1st street, AC', 'HFA Gerald 1st street, AC', 'clareng123@gmail.com', '2014-06-20', '1234567890', 'male', 'single', 'elem', 'Select', 'Select', 'Select', 2027, 'N/A', '1234567890', 'N/A', 'test123@gmail.com'),
(11, 'Janapin', 'Homer', 'M', 'Gordon Height', 'Gordon Height', 'homerjanapin@gmail.com', '2000-09-19', '1234567890', 'male', 'single', 'Select', 'bs', 'Select', 'Select', 2025, 'Leofer', '09995117532', 'Leofer', 'leoferma099@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
