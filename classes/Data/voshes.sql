-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2023 at 10:00 PM
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
-- Database: `voshes`
--

-- --------------------------------------------------------

--
-- Table structure for table `case_response`
--

CREATE TABLE `case_response` (
  `response_id` int(11) NOT NULL,
  `case_id` int(11) NOT NULL,
  `message` longtext NOT NULL,
  `date_created` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `case_response`
--

INSERT INTO `case_response` (`response_id`, `case_id`, `message`, `date_created`, `user_id`) VALUES
(1, 1, 'fdasf', '2023-02-14 01:37:25', 56),
(2, 1, 'Hi', '2023-02-14 01:41:15', 56),
(3, 1, 'f', '2023-02-14 01:42:33', 56),
(4, 1, 'ff', '2023-02-14 01:42:45', 56),
(5, 1, 'fff', '2023-02-14 01:42:50', 56),
(6, 1, 'ffff', '2023-02-14 01:42:54', 56),
(7, 1, 'fffffdsafdfdasfd', '2023-02-14 01:43:00', 56),
(8, 1, 'fffffdsafdfdasfdf', '2023-02-14 01:43:02', 56),
(9, 7, 'd', '2023-02-14 01:45:11', 56),
(10, 7, 'okay', '2023-02-14 02:07:38', 3),
(11, 1, 'fdas', '2023-02-14 02:08:18', 3),
(12, 9, '.', '2023-02-14 02:20:17', 56),
(13, 9, '..', '2023-02-14 02:20:21', 56),
(14, 8, '...', '2023-02-14 02:20:26', 56),
(15, 1, '.', '2023-02-14 02:21:49', 3),
(16, 1, 'Nope...', '2023-02-14 02:30:19', 3),
(17, 1, 'Nah...', '2023-02-14 02:30:47', 3),
(18, 9, 'Hello', '2023-02-14 03:48:10', 3),
(19, 8, 'hello', '2023-02-14 04:18:33', 59),
(20, 9, 'a', '2023-02-14 04:35:06', 59),
(21, 9, 'a', '2023-02-14 05:36:27', 59),
(22, 10, '.', '2023-02-14 11:10:14', 59);

-- --------------------------------------------------------

--
-- Table structure for table `sign_in_logs`
--

CREATE TABLE `sign_in_logs` (
  `log_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `log_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sign_in_logs`
--

INSERT INTO `sign_in_logs` (`log_id`, `user_id`, `log_date`) VALUES
(6, 3, '2023-02-11 11:22:54'),
(7, 3, '2023-02-11 11:28:12'),
(9, 3, '2023-02-11 11:36:33'),
(10, 3, '2023-02-11 11:39:46'),
(12, 3, '2023-02-11 11:48:38'),
(13, 3, '2023-02-11 11:51:25'),
(14, 3, '2023-02-11 11:52:28'),
(17, 3, '2023-02-12 09:22:17'),
(19, 3, '2023-02-12 09:33:59'),
(20, 3, '2023-02-12 12:35:13'),
(21, 3, '2023-02-12 02:31:52'),
(22, 3, '2023-02-12 02:32:00'),
(23, 3, '2023-02-12 02:48:41'),
(24, 3, '2023-02-12 02:48:48'),
(25, 3, '2023-02-12 02:49:54'),
(26, 3, '2023-02-12 02:50:59'),
(27, 3, '2023-02-12 02:51:21'),
(28, 3, '2023-02-12 02:51:34'),
(29, 3, '2023-02-12 02:51:42'),
(30, 3, '2023-02-12 02:53:54'),
(31, 3, '2023-02-12 02:54:08'),
(32, 3, '2023-02-12 02:54:17'),
(33, 9, '2023-02-12 02:54:29'),
(35, 3, '2023-02-12 02:55:10'),
(36, 9, '2023-02-12 06:13:21'),
(37, 3, '2023-02-12 06:18:02'),
(38, 9, '2023-02-12 06:18:17'),
(40, 9, '2023-02-12 06:56:45'),
(41, 9, '2023-02-12 06:57:08'),
(42, 3, '2023-02-12 06:57:55'),
(43, 3, '2023-02-13 05:27:14'),
(44, 3, '2023-02-13 05:44:59'),
(45, 3, '2023-02-13 07:05:49'),
(46, 3, '2023-02-13 07:06:57'),
(47, 3, '2023-02-13 07:08:28'),
(48, 56, '2023-02-13 07:42:08'),
(49, 56, '2023-02-13 07:42:33'),
(50, 56, '2023-02-13 07:43:27'),
(51, 9, '2023-02-13 07:43:58'),
(52, 3, '2023-02-13 07:45:58'),
(53, 56, '2023-02-13 10:48:15'),
(54, 56, '2023-02-13 11:08:30'),
(55, 56, '2023-02-13 11:11:21'),
(56, 56, '2023-02-13 11:17:14'),
(57, 3, '2023-02-13 11:58:00'),
(58, 9, '2023-02-13 11:59:51'),
(59, 56, '2023-02-14 12:05:58'),
(60, 56, '2023-02-14 10:42:57'),
(61, 3, '2023-02-14 01:45:42'),
(62, 9, '2023-02-14 01:46:00'),
(63, 3, '2023-02-14 01:46:33'),
(65, 56, '2023-02-14 02:15:43'),
(66, 3, '2023-02-14 02:20:44'),
(67, 56, '2023-02-14 03:15:55'),
(68, 3, '2023-02-14 03:17:35'),
(69, 56, '2023-02-14 04:04:29'),
(70, 9, '2023-02-14 04:08:46'),
(71, 3, '2023-02-14 04:16:14'),
(72, 59, '2023-02-14 04:17:12'),
(73, 56, '2023-02-14 05:37:04'),
(74, 56, '2023-02-14 05:49:33'),
(75, 59, '2023-02-14 06:10:34'),
(76, 56, '2023-02-14 06:30:54'),
(77, 59, '2023-02-14 06:31:57'),
(78, 56, '2023-02-14 09:01:13'),
(79, 59, '2023-02-14 09:43:05'),
(80, 3, '2023-02-14 09:44:24'),
(81, 59, '2023-02-14 09:44:59'),
(82, 56, '2023-02-14 10:06:58'),
(83, 3, '2023-02-14 10:08:01'),
(84, 59, '2023-02-14 10:08:23'),
(85, 56, '2023-02-14 11:11:37'),
(86, 3, '2023-02-14 11:13:04'),
(87, 3, '2023-02-14 11:39:22'),
(88, 3, '2023-02-14 11:39:39'),
(89, 3, '2023-02-14 11:40:35'),
(90, 3, '2023-02-14 11:43:50'),
(91, 59, '2023-02-15 12:03:58'),
(92, 3, '2023-02-15 12:06:02'),
(93, 59, '2023-02-15 12:06:18'),
(94, 3, '2023-02-15 12:20:41'),
(95, 59, '2023-02-15 12:21:27'),
(96, 3, '2023-02-15 12:54:05'),
(97, 59, '2023-02-15 12:59:08'),
(98, 56, '2023-02-15 12:59:27'),
(99, 59, '2023-02-15 01:00:06'),
(100, 59, '2023-02-15 03:07:55'),
(101, 59, '2023-02-15 03:07:55'),
(102, 3, '2023-02-15 03:29:13'),
(103, 59, '2023-02-15 03:43:03'),
(104, 3, '2023-02-15 03:44:05'),
(105, 56, '2023-02-15 04:51:17'),
(106, 3, '2023-02-15 04:53:11'),
(107, 10, '2023-02-15 04:54:23'),
(108, 3, '2023-02-15 04:57:33'),
(109, 10, '2023-02-15 04:59:56');

-- --------------------------------------------------------

--
-- Table structure for table `study_case`
--

CREATE TABLE `study_case` (
  `case_id` int(11) NOT NULL,
  `message` longtext NOT NULL,
  `date_created` datetime NOT NULL,
  `last_updated` datetime NOT NULL,
  `status` enum('OPEN','CLOSED','ONGOING') NOT NULL,
  `student_id` int(11) NOT NULL,
  `shared_to` int(11) DEFAULT NULL,
  `appointment` enum('CREATED') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `study_case`
--

INSERT INTO `study_case` (`case_id`, `message`, `date_created`, `last_updated`, `status`, `student_id`, `shared_to`, `appointment`) VALUES
(1, 'Hi, Can I get an appointment at February 15 2pm?', '2023-02-14 11:31:41', '2023-02-14 11:31:41', 'ONGOING', 56, 25, ''),
(7, 'I have a problem right now. And its too much to discuss it in here. So, can i get an appointment for 2 PM at March 10?', '2023-02-14 01:10:13', '2023-02-14 01:10:13', 'ONGOING', 56, 59, 'CREATED'),
(8, '“Opportunities don\'t happen, you create them.”. Can you explain it to me?', '2023-02-14 02:17:14', '2023-02-14 02:17:14', 'ONGOING', 56, 59, 'CREATED'),
(9, '                            \n                        hehehe', '2023-02-14 02:20:09', '2023-02-14 02:20:09', 'ONGOING', 56, 59, 'CREATED'),
(10, '                            \n                        fdasfdfa', '2023-02-14 10:07:37', '2023-02-14 10:07:37', 'ONGOING', 56, 59, 'CREATED'),
(12, 'Hello', '2023-02-15 04:52:48', '2023-02-15 04:52:48', 'ONGOING', 56, 10, 'CREATED');

-- --------------------------------------------------------

--
-- Table structure for table `user_appointment`
--

CREATE TABLE `user_appointment` (
  `appointment_id` int(11) NOT NULL,
  `counselor_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `last_updated` datetime NOT NULL,
  `appointment_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_appointment`
--

INSERT INTO `user_appointment` (`appointment_id`, `counselor_id`, `student_id`, `date_created`, `last_updated`, `appointment_date`) VALUES
(4, 59, 56, '2023-02-14 05:34:11', '2023-02-14 08:23:19', '2023-02-28 13:23:00'),
(5, 59, 56, '2023-02-14 05:35:59', '0000-00-00 00:00:00', '2023-02-25 05:35:00'),
(7, 59, 56, '2023-02-14 10:05:27', '0000-00-00 00:00:00', '2023-03-09 02:05:00'),
(8, 59, 56, '2023-02-14 10:08:32', '0000-00-00 00:00:00', '2023-02-14 10:08:00'),
(9, 59, 56, '2023-02-14 10:15:56', '0000-00-00 00:00:00', '2023-02-14 10:08:00'),
(11, 59, 56, '2023-02-14 10:24:56', '0000-00-00 00:00:00', '2023-02-10 10:24:00'),
(12, 59, 56, '2023-02-14 10:25:58', '0000-00-00 00:00:00', '2023-02-23 01:25:00'),
(13, 59, 56, '2023-02-14 10:27:07', '0000-00-00 00:00:00', '2023-02-11 12:27:00'),
(14, 59, 56, '2023-02-14 10:27:48', '0000-00-00 00:00:00', '2023-02-16 10:27:00'),
(15, 59, 56, '2023-02-14 10:35:26', '0000-00-00 00:00:00', '2023-03-10 10:35:00'),
(16, 59, 56, '2023-02-14 10:37:32', '0000-00-00 00:00:00', '2023-03-11 10:37:00'),
(17, 59, 56, '2023-02-14 10:44:59', '0000-00-00 00:00:00', '2023-03-11 10:44:00'),
(18, 59, 56, '2023-02-14 10:46:52', '0000-00-00 00:00:00', '2023-02-21 10:46:00'),
(19, 59, 56, '2023-02-14 10:49:36', '0000-00-00 00:00:00', '2023-02-16 10:49:00'),
(20, 59, 56, '2023-02-14 10:51:53', '0000-00-00 00:00:00', '2023-03-01 10:51:00'),
(21, 59, 56, '2023-02-14 10:53:34', '0000-00-00 00:00:00', '2023-02-27 10:53:00'),
(22, 59, 56, '2023-02-14 10:55:19', '0000-00-00 00:00:00', '2023-02-27 10:55:00'),
(23, 59, 56, '2023-02-14 10:57:15', '0000-00-00 00:00:00', '2023-03-03 10:57:00'),
(24, 59, 56, '2023-02-14 10:57:15', '0000-00-00 00:00:00', '2023-03-03 10:57:00'),
(25, 59, 56, '2023-02-14 10:59:32', '0000-00-00 00:00:00', '2023-02-24 10:59:00'),
(26, 59, 56, '2023-02-14 11:01:28', '0000-00-00 00:00:00', '2023-03-03 11:01:00'),
(27, 59, 56, '2023-02-14 11:01:58', '0000-00-00 00:00:00', '2023-03-08 11:01:00'),
(28, 59, 56, '2023-02-14 11:02:50', '0000-00-00 00:00:00', '2023-02-27 11:02:00'),
(29, 59, 56, '2023-02-14 11:04:11', '0000-00-00 00:00:00', '2023-03-10 11:04:00'),
(30, 59, 56, '2023-02-14 11:05:06', '0000-00-00 00:00:00', '2023-02-18 11:05:00'),
(31, 10, 56, '2023-02-15 04:55:00', '0000-00-00 00:00:00', '2023-03-10 04:54:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `cp_number` varchar(11) DEFAULT NULL,
  `type` enum('STUDENT','COUNSELOR','ADMIN') NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `date_created` datetime NOT NULL,
  `last_updated` datetime NOT NULL,
  `id_number` varchar(8) NOT NULL,
  `department` enum('CCS','CBA','CASED','Engineering','Architecture','Nursing') DEFAULT NULL,
  `profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `cp_number`, `type`, `email`, `username`, `password`, `date_created`, `last_updated`, `id_number`, `department`, `profile`) VALUES
(3, 'Jane', 'Palatan', '09291442345', 'ADMIN', 'gtc2023@gmail.com', '19310029', '$2y$12$kO1SZJQjPEJZDdCXUVB.NuwwY0/BfqKKcCa1pMnuNV2HY2KQiZYNK', '2022-11-16 05:11:12', '2023-02-12 05:56:28', '19310029', 'CCS', '1676196573.png'),
(9, 'Queenie', 'Santos', '09291442344', 'COUNSELOR', 'queenie.ph@gmail.com', '19310028', '$2y$12$n/.2pacX93X.k8KYSt1wQ.5vXKo1Qr2nxG3W8bd8hXuW8ljIzHkcy', '2023-02-12 11:00:35', '2023-02-13 07:46:31', '19310028', 'CBA', '1676288700.png'),
(10, 'Sam', 'Bee', '09291442345', 'COUNSELOR', 'queenieQ@gmail.com', '19310027', '$2y$12$r.NIUS4vZxtIn4Txg3YVWOQAHkR.NnOssQiz0MhXGzSyYeJSdt2Ca', '2023-02-12 11:01:04', '2023-02-13 07:46:37', '19310027', 'Architecture', ''),
(24, 'John', 'Doe', NULL, 'COUNSELOR', NULL, '19310015', '$2y$12$CyA7qIT45EKZXulpCJVdBucNtPrh/NeEO6sFQ2.BeqgUD4w0Bub92', '2023-02-13 12:38:24', '0000-00-00 00:00:00', '19310015', 'CASED', ''),
(25, 'Jane', 'Pangilinan', NULL, 'COUNSELOR', NULL, '19310025', '$2y$12$WglFAq2cY8mkzqX0cBAFJOC.qTyJKUDo6DyDooDjhP7VXhhj5TfRm', '2023-02-13 12:39:14', '0000-00-00 00:00:00', '19310025', 'CCS', ''),
(56, 'Marvin', 'Gregorio', '09388005027', 'STUDENT', 'gregoriomarvin.ph@gmail.com', 'gregorio079@columbanph.onmicrosoft.com', NULL, '2023-02-13 07:42:08', '2023-02-14 12:37:33', '19310079', 'CCS', '1676301480.png'),
(57, 'Joan', 'Santos', NULL, 'COUNSELOR', NULL, '19310020', '$2y$12$vPmvi.XZL2lz9p/R5XC/m.FGyAJT0PJ3f2Ugr6pggHr/ePTd/dp3q', '2023-02-13 07:46:26', '0000-00-00 00:00:00', '19310020', 'Engineering', ''),
(59, 'Christopher ', 'Ramos', '09388005027', 'COUNSELOR', 'chris.columban@gmail.com', '19210061', '$2y$12$nL24M6xtSyEeTG7zUPX7RuOiPlu3PLOFInF.TFSf5e.vcmQfK36eq', '2023-02-14 02:52:21', '2023-02-14 04:36:13', '19210061', 'CCS', '1676362655.png');

-- --------------------------------------------------------

--
-- Table structure for table `video_logs`
--

CREATE TABLE `video_logs` (
  `log_id` int(11) NOT NULL,
  `counselor_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `case_response`
--
ALTER TABLE `case_response`
  ADD PRIMARY KEY (`response_id`),
  ADD KEY `case_id` (`case_id`);

--
-- Indexes for table `sign_in_logs`
--
ALTER TABLE `sign_in_logs`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `study_case`
--
ALTER TABLE `study_case`
  ADD PRIMARY KEY (`case_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `shared_to` (`shared_to`);

--
-- Indexes for table `user_appointment`
--
ALTER TABLE `user_appointment`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `video_logs`
--
ALTER TABLE `video_logs`
  ADD PRIMARY KEY (`log_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `case_response`
--
ALTER TABLE `case_response`
  MODIFY `response_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `sign_in_logs`
--
ALTER TABLE `sign_in_logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `study_case`
--
ALTER TABLE `study_case`
  MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_appointment`
--
ALTER TABLE `user_appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `video_logs`
--
ALTER TABLE `video_logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `case_response`
--
ALTER TABLE `case_response`
  ADD CONSTRAINT `case_response_ibfk_1` FOREIGN KEY (`case_id`) REFERENCES `study_case` (`case_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sign_in_logs`
--
ALTER TABLE `sign_in_logs`
  ADD CONSTRAINT `sign_in_logs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `study_case`
--
ALTER TABLE `study_case`
  ADD CONSTRAINT `study_case_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `user_info` (`user_id`),
  ADD CONSTRAINT `study_case_ibfk_2` FOREIGN KEY (`shared_to`) REFERENCES `user_info` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
