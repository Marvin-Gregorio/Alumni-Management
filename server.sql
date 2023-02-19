-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2023 at 06:03 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `lastname`, `firstname`, `middlename`, `email`, `phone`, `dob`, `password`, `username`) VALUES
(9, 'Dela Cruz', 'Leofer Rodel', 'Tecson', 'Leoferma099@gmail.com', '09995117532', '1999-12-02', '81dc9bdb52d04dc20036dbd8313ed055', 'Leofer_ma'),
(11, 'Pilorin', 'Aurora', 'K', 'eliasfsdev@gmail.com', '01234567789', '1111-11-11', '81dc9bdb52d04dc20036dbd8313ed055', 'admin');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `lastname`, `firstname`, `middlename`, `permanetaddr`, `presentaddr`, `emailaddr`, `birthdate`, `contact`, `gender`, `civilstats`, `basiced`, `college`, `gradschool`, `course`, `yeargrad`, `norg`, `norgcontact`, `org`, `orgemail`) VALUES
(8, 'James', 'Lebron', 'Aso', 'LA, Ohio', 'LA, Ohio', 'kingjames@gmail.com', '1989-12-02', '09995117532', 'male', 'single', 'Select', 'bs', 'Select', 'Select', 2023, 'Columban College', '09995117532', 'Columban College', 'columban123@gmail.com'),
(10, 'Timothy', 'Clarence Laurent', 'Ma', 'HFA Gerald 1st street, AC', 'HFA Gerald 1st street, AC', 'clareng123@gmail.com', '2014-06-20', '1234567890', 'male', 'single', 'elem', 'Select', 'Select', 'Select', 2027, 'N/A', '1234567890', 'N/A', 'test123@gmail.com'),
(11, 'Janapin', 'Homer', 'M', 'Gordon Height', 'Gordon Height', 'homerjanapin@gmail.com', '2000-09-19', '1234567890', 'male', 'single', 'Select', 'bs', 'Select', 'Select', 2025, 'Leofer', '09995117532', 'Leofer', 'leoferma099@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `educational_info`
--

CREATE TABLE `educational_info` (
  `education_id` int(11) NOT NULL,
  `elem_school` varchar(255) NOT NULL,
  `elem_year` varchar(50) NOT NULL,
  `junior_school` varchar(255) NOT NULL,
  `junior_year` varchar(50) NOT NULL,
  `senior_school` varchar(255) NOT NULL,
  `senior_year` varchar(50) NOT NULL,
  `senior_course` varchar(50) NOT NULL,
  `college_school` varchar(255) NOT NULL,
  `college_year` varchar(50) NOT NULL,
  `college_course` varchar(50) NOT NULL,
  `master_school` varchar(255) NOT NULL,
  `master_year` varchar(50) NOT NULL,
  `master_course` varchar(50) NOT NULL,
  `doctor_school` varchar(255) NOT NULL,
  `doctor_course` varchar(50) NOT NULL,
  `doctor_year` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `educational_info`
--

INSERT INTO `educational_info` (`education_id`, `elem_school`, `elem_year`, `junior_school`, `junior_year`, `senior_school`, `senior_year`, `senior_course`, `college_school`, `college_year`, `college_course`, `master_school`, `master_year`, `master_course`, `doctor_school`, `doctor_course`, `doctor_year`, `user_id`) VALUES
(1, 'OCES', '2008', 'OCABIS', '2012', 'COLUMBAN COLLEGE', '2018', 'BSCS', 'COLUMBAN COLLEGE', '2023', 'BSIT', 'COLUMBAN COLLEGE', '2024', 'MSIT', 'COLUMBAN COLLEGE', 'DSIT', '2026', 8),
(2, 'COLUMBAN', '2019', 'COLUMBAN', '2020', 'COLUMBAN', '2021', 'BLIS', 'COLUMBAN ', '2022', 'BLIS', 'COLUMBAN', '2023', 'MLIS', 'COLUMBAN', 'DLIS', '2024', 6);

-- --------------------------------------------------------

--
-- Table structure for table `employment_info`
--

CREATE TABLE `employment_info` (
  `employment_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_number` varchar(50) NOT NULL,
  `company_address` varchar(255) NOT NULL,
  `company_email` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employment_info`
--

INSERT INTO `employment_info` (`employment_id`, `company_name`, `company_number`, `company_address`, `company_email`, `user_id`) VALUES
(1, 'Signopsys Inc.', '09121231234', 'BGC, Taguig', 'signopsys.marketing@gmail.com', 8),
(2, 'Planate Management Inc.', '09121229012', 'Subic Bay Freeport Zone', 'planate.marketing.philippines@gmail.com', 6);

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `session_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `log_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`session_id`, `user_id`, `log_date`) VALUES
(1, 7, '2023-02-18 06:37:53'),
(2, 6, '2023-02-18 06:40:16'),
(3, 6, '2023-02-18 06:49:23'),
(4, 6, '2023-02-18 06:56:12'),
(5, 6, '2023-02-18 06:57:18'),
(6, 6, '2023-02-18 06:57:53'),
(7, 6, '2023-02-18 07:04:43'),
(8, 7, '2023-02-18 07:09:15'),
(9, 7, '2023-02-18 09:00:44'),
(10, 6, '2023-02-18 09:09:27'),
(11, 7, '2023-02-18 09:09:40'),
(12, 7, '2023-02-18 09:41:21'),
(13, 7, '2023-02-18 09:41:47'),
(14, 7, '2023-02-18 10:26:51'),
(15, 7, '2023-02-18 10:28:31'),
(16, 7, '2023-02-19 12:03:15'),
(17, 7, '2023-02-19 12:04:23'),
(18, 7, '2023-02-19 12:37:32'),
(19, 7, '2023-02-19 12:39:34'),
(20, 6, '2023-02-19 12:41:02'),
(21, 6, '2023-02-19 12:44:30'),
(22, 7, '2023-02-19 12:45:41'),
(23, 8, '2023-02-19 12:47:23'),
(24, 7, '2023-02-19 12:50:56'),
(25, 8, '2023-02-19 12:51:15'),
(26, 6, '2023-02-19 02:05:42'),
(27, 8, '2023-02-19 02:06:38'),
(28, 6, '2023-02-19 02:07:01'),
(29, 6, '2023-02-19 02:11:15'),
(30, 7, '2023-02-19 12:17:10'),
(31, 7, '2023-02-19 12:18:09'),
(32, 7, '2023-02-19 12:18:24'),
(33, 7, '2023-02-19 12:24:26'),
(34, 7, '2023-02-19 12:25:59'),
(35, 7, '2023-02-19 12:27:05'),
(36, 7, '2023-02-19 12:29:58'),
(37, 8, '2023-02-19 12:34:19'),
(38, 8, '2023-02-19 12:38:27'),
(39, 8, '2023-02-19 12:42:54');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cp_number` varchar(11) NOT NULL,
  `birth_date` date NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `type` enum('ALUMNI','ADMIN') NOT NULL,
  `gender` enum('MALE','FEMALE') NOT NULL,
  `status` enum('SINGLE','MARRIED','WIDOW') NOT NULL,
  `pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `middle_name`, `last_name`, `email`, `cp_number`, `birth_date`, `password`, `username`, `type`, `gender`, `status`, `pic`) VALUES
(6, 'Leofer', 'Martinez', 'Dela Cruz', 'leofer@gmail.com', '09071021182', '2023-03-03', '$2y$12$4V6ZnicgTd5mcNMx.yLi2uRAt0C3MRJhU.pZ37Uck60BWEbolyM72', 'leofer_delacruz', 'ALUMNI', 'MALE', 'SINGLE', '1676738551.png'),
(7, 'Anata', 'Berania', 'Sy', 'ana_sy@gmail.com', '09182831664', '2023-01-30', '$2y$12$cZomaZADS2GfORuyIslGJOZUZkhLflHe4Sc1ez9IxtUxESwSXidoG', 'admin', 'ADMIN', 'FEMALE', 'MARRIED', '1676721475.png'),
(8, 'Melvin', 'Esguerra', 'Vargas', 'marvingregorio56@gmail.com', '09091231223', '2023-03-02', '$2y$12$EMphGelfoecHxBmwM/pQ1umOiKpKXdyHXhZq0hR/UpcmvUHMyhSpq', 'melvin_vargas', 'ALUMNI', 'MALE', 'SINGLE', '1676738874.png');

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
-- Indexes for table `educational_info`
--
ALTER TABLE `educational_info`
  ADD PRIMARY KEY (`education_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `employment_info`
--
ALTER TABLE `employment_info`
  ADD PRIMARY KEY (`employment_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `session_ibfk_1` (`user_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

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

--
-- AUTO_INCREMENT for table `educational_info`
--
ALTER TABLE `educational_info`
  MODIFY `education_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employment_info`
--
ALTER TABLE `employment_info`
  MODIFY `employment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `session_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `educational_info`
--
ALTER TABLE `educational_info`
  ADD CONSTRAINT `educational_info_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employment_info`
--
ALTER TABLE `employment_info`
  ADD CONSTRAINT `employment_info_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `session`
--
ALTER TABLE `session`
  ADD CONSTRAINT `session_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
