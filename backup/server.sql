-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2023 at 12:05 PM
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
(2, '', '', '', '', '', '', 'BSCS', '', '', 'BSCS', '', '', 'MSCS', '', 'DSCS', '', 6),
(3, 'Columban College', '2008', 'Columban College', '2012', 'Columban College', '2014', 'BSOA', 'Columban College', '2018', 'BSIT', 'Columban College', '2019', 'MSIT', 'Columban College', 'DSIT', '2020', 9);

-- --------------------------------------------------------

--
-- Table structure for table `email_blast`
--

CREATE TABLE `email_blast` (
  `blast_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` longtext NOT NULL,
  `send_to` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `email_blast`
--

INSERT INTO `email_blast` (`blast_id`, `date_created`, `title`, `body`, `send_to`) VALUES
(1, '2023-03-04 09:01:28', 'fdasf', 'fadsf', 'CCS'),
(2, '2023-03-04 04:44:36', 'fadsf', 'fadsf', 'CCS'),
(3, '2023-03-04 04:44:43', 'fadsf', 'fadsf', 'All'),
(4, '2023-03-04 04:48:45', 'fdasfsd', 'dffdsafdf\nfdf\nd\nfds\nafds\nfsd\nf\nsdf\nsdf\nsdf\nsdf\nsdf\nd\nadffdsafdf\nfdf\nd\nfds\nafds\nfsd\nf\nsdf\nsdf\nsdf\nsdf\nsdf\nd\nadffdsafdf\nfdf\nd\nfds\nafds\nfsd\nf\nsdf\nsdf\nsdf\nsdf\nsdf\nd\nadffdsafdf\nfdf\nd\nfds\nafds\nfsd\nf\nsdf\nsdf\nsdf\nsdf\nsdf\nd\nadffdsafdf\nfdf\nd\nfds\nafds\nfsd\nf\nsdf\nsdf\nsdf\nsdf\nsdf\nd\nadffdsafdf\nfdf\nd\nfds\nafds\nfsd\nf\nsdf\nsdf\nsdf\nsdf\nsdf\nd\nadffdsafdf\nfdf\nd\nfds\nafds\nfsd\nf\nsdf\nsdf\nsdf\nsdf\nsdf\nd\nadffdsafdf\nfdf\nd\nfds\nafds\nfsd\nf\nsdf\nsdf\nsdf\nsdf\nsdf\nd\nadffdsafdf\nfdf\nd\nfds\nafds\nfsd\nf\nsdf\nsdf\nsdf\nsdf\nsdf\nd\nadffdsafdf\nfdf\nd\nfds\nafds\nfsd\nf\nsdf\nsdf\nsdf\nsdf\nsdf\nd\nadffdsafdf\nfdf\nd\nfds\nafds\nfsd\nf\nsdf\nsdf\nsdf\nsdf\nsdf\nd\na', 'All'),
(5, '2023-03-04 04:48:45', 'fdasfsd', 'dffdsafdf\nfdf\nd\nfds\nafds\nfsd\nf\nsdf\nsdf\nsdf\nsdf\nsdf\nd\nadffdsafdf\nfdf\nd\nfds\nafds\nfsd\nf\nsdf\nsdf\nsdf\nsdf\nsdf\nd\nadffdsafdf\nfdf\nd\nfds\nafds\nfsd\nf\nsdf\nsdf\nsdf\nsdf\nsdf\nd\nadffdsafdf\nfdf\nd\nfds\nafds\nfsd\nf\nsdf\nsdf\nsdf\nsdf\nsdf\nd\nadffdsafdf\nfdf\nd\nfds\nafds\nfsd\nf\nsdf\nsdf\nsdf\nsdf\nsdf\nd\nadffdsafdf\nfdf\nd\nfds\nafds\nfsd\nf\nsdf\nsdf\nsdf\nsdf\nsdf\nd\nadffdsafdf\nfdf\nd\nfds\nafds\nfsd\nf\nsdf\nsdf\nsdf\nsdf\nsdf\nd\nadffdsafdf\nfdf\nd\nfds\nafds\nfsd\nf\nsdf\nsdf\nsdf\nsdf\nsdf\nd\nadffdsafdf\nfdf\nd\nfds\nafds\nfsd\nf\nsdf\nsdf\nsdf\nsdf\nsdf\nd\nadffdsafdf\nfdf\nd\nfds\nafds\nfsd\nf\nsdf\nsdf\nsdf\nsdf\nsdf\nd\nadffdsafdf\nfdf\nd\nfds\nafds\nfsd\nf\nsdf\nsdf\nsdf\nsdf\nsdf\nd\na', 'All'),
(6, '2023-03-04 05:04:27', 'fdasf', 'dfasdf', 'All'),
(7, '2023-03-04 05:04:59', 'fdasf', 'fdasf', 'CCS'),
(8, '2023-03-04 05:07:01', 'f', 'f', 'CCS'),
(9, '2023-03-04 05:07:39', 'f', 'f', 'All'),
(10, '2023-03-04 05:10:27', 'CC- Announcement', 'ffjasdkfjdkfdj\nfdsaf', 'All'),
(11, '2023-03-04 05:11:28', 'CC- Announcement', 'ffjasdkfjdkfdj\nfdsaf', 'All'),
(12, '2023-03-04 05:12:14', 'CC- Announcement', 'ffjasdkfjdkfdj\nfdsaf', 'All'),
(13, '2023-03-04 05:13:44', 'fa', 'f', 'All'),
(14, '2023-03-04 05:14:58', 'f', 'fdas', 'All'),
(15, '2023-03-04 05:15:54', 'f', 'f', 'CCS'),
(16, '2023-03-04 05:16:47', 'f', 'f', 'CBA'),
(17, '2023-03-04 05:18:58', 'fda', 'fdas', 'All'),
(18, '2023-03-04 05:20:57', 'Re : CCS Days', 'We are inviting everyone to join our event', 'All'),
(19, '2023-03-04 05:23:03', 'fadsfd', 'fdasfdf', 'All'),
(20, '2023-03-05 02:53:21', 'fdsaff', 'dafdf', 'All'),
(21, '2023-03-05 07:26:59', 'dsf', 'asdfdf', 'CBA'),
(22, '2023-03-06 02:07:59', 'FREE DEAL', 'FDSFKDJFKDASJFKD\nDFSADJFKSDF\nDSFJD\nSFJDSFJDS', 'All'),
(23, '2023-03-06 02:10:45', 'faffa', 'dfadfasdfds', 'CCS'),
(24, '2023-03-06 02:15:34', 'fadsf', 'asdfads', 'All'),
(25, '2023-03-06 02:37:52', 'fadsf', 'fadf', 'All');

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
(2, 'Planate Management Inc.', '09481621881', 'Subic Bay Freeport Zone, Philippines', 'planate.advertising.ph@gmailcom', 6),
(3, 'Columban College Inc', '091829192441', '1st St. New Asinan, Olongapo City', 'columban.edu.ph@gmail.com', 9);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `set_date` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `set_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `name`, `place`, `set_date`, `description`, `set_time`) VALUES
(5, 'CCS vs CBA', 'Main Campus', '2023-03-20', 'jfdasf\ndf\'af\ndfjdaf\ndf', '14:58'),
(6, 'CCS Day', 'Main Quadrangles', '2023-03-17', 'Simple Celebration of the Department', '18:00'),
(11, 'CBA DAYS', 'FDSAF', '2023-03-17', 'FDSF\nFDAS\nFDAS\nFDS\nFDSA\n', '14:05');

-- --------------------------------------------------------

--
-- Table structure for table `interested`
--

CREATE TABLE `interested` (
  `interested_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `interested`
--

INSERT INTO `interested` (`interested_id`, `event_id`, `user_id`) VALUES
(4, 5, 6),
(5, 6, 6),
(6, 9, 6),
(7, 6, 8),
(8, 9, 8),
(9, 11, 6),
(10, 11, 8);

-- --------------------------------------------------------

--
-- Table structure for table `jobs_list`
--

CREATE TABLE `jobs_list` (
  `job_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `qualification` longtext NOT NULL,
  `type` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs_list`
--

INSERT INTO `jobs_list` (`job_id`, `name`, `category`, `title`, `salary`, `description`, `qualification`, `type`, `date_created`) VALUES
(2, 'Planate Management Inc.', 'Information Technology', 'Web Developer', '40000', 'Meet with clients to discuss their website design and requirements\nCreate and test apps for the website\nCode for the site using HTML or XML and/or other programming languages\nEngage with members of their team to ascertain the kind of information the site should contain\nWork with designers, such as graphic designers, to determine the site’s layout\nIntegrate audio, video, and graphics into the site\nQuality-test and troubleshoot the website and/or its applications in various browsers', 'HTML\nHTML5\nCSS\nCSS3\nJavaScript\njQuery\nAdobe Suite\nCross browser compatibility\nObject-Oriented Design\nUser Interface Design\nUser Experience Design\nMultimedia content development\nAPIs\nUnderstanding of SEO\nGood communications skills\nAttention to detail\nAbility to juggle multiple tasks at once', 'Full-Time', '2023-03-04 11:17:09'),
(4, 'ISBX', 'Information Technology', 'IT Administrator', '40000', 'fadsffa\nfasdf\nd\nfad\nfd\nfd\nff', 'f\ndasf\nf\nd\nfasf\nd\nad\nfds\nd\nads\nfd\n', 'Part-Time', '2023-03-04 11:17:13'),
(5, 'Columban College', 'Basic Metal Production', 'College Instructor', '40000', 'fadsffa\nfasdf\nd\nfad\nfd\nfd\nff', 'f\ndasf\nf\nd\nfasf\nd\nad\nfds\nd\nads\nfd\n', 'Full-Time', '2023-03-04 11:17:13'),
(6, 'Steelix & Co.', 'Basic Metal Production', 'Welder', '30000', 'fadsffa\nfasdf\nd\nfad\nfd\nfd\nff', 'f\ndasf\nf\nd\nfasf\nd\nad\nfds\nd\nads\nfd\n', 'Full-Time', '2023-03-04 11:17:14'),
(8, 'Signopsys Inc.', 'Information Technology', 'FInance Manager', '25000', 'faff', 'dfasf', 'Part-Time', '2023-03-04 12:10:58'),
(11, 'COlmban College', 'Education', 'College Professor', '30000', 'daffdaf\nadf\ndf\ndsf\ndaf\ndf\ndf\ndsa', 'dsfds\nfad\nfd\nfd\nfds\nfd\nsfdsf', 'Part-Time', '2023-03-06 02:04:49');

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
(39, 8, '2023-02-19 12:42:54'),
(40, 8, '2023-02-19 01:31:53'),
(41, 8, '2023-02-19 01:32:54'),
(42, 8, '2023-02-19 01:38:49'),
(43, 8, '2023-02-19 01:43:36'),
(44, 7, '2023-02-19 01:53:52'),
(45, 7, '2023-02-19 03:05:42'),
(46, 7, '2023-02-19 03:25:38'),
(47, 7, '2023-02-19 03:27:42'),
(48, 7, '2023-02-19 04:09:51'),
(49, 7, '2023-02-19 04:11:19'),
(50, 7, '2023-02-19 04:14:09'),
(51, 8, '2023-02-19 06:11:39'),
(52, 7, '2023-02-19 06:53:10'),
(53, 7, '2023-02-19 06:56:12'),
(54, 9, '2023-02-19 06:56:46'),
(55, 7, '2023-02-19 06:59:59'),
(56, 7, '2023-02-19 08:31:10'),
(57, 7, '2023-02-19 08:34:15'),
(58, 7, '2023-02-19 09:20:32'),
(59, 8, '2023-02-19 09:35:45'),
(60, 7, '2023-02-19 09:35:56'),
(61, 8, '2023-02-19 10:06:33'),
(62, 7, '2023-02-19 10:09:15'),
(63, 7, '2023-02-19 10:45:09'),
(64, 8, '2023-02-19 10:48:29'),
(65, 7, '2023-02-19 10:55:29'),
(66, 7, '2023-02-20 09:44:38'),
(67, 8, '2023-02-20 09:45:55'),
(68, 7, '2023-02-20 09:58:14'),
(69, 7, '2023-02-20 10:31:47'),
(71, 6, '2023-02-20 10:38:28'),
(72, 6, '2023-02-20 10:39:44'),
(73, 6, '2023-02-20 10:42:32'),
(74, 6, '2023-02-20 11:32:07'),
(75, 6, '2023-02-20 11:33:51'),
(78, 8, '2023-02-20 11:50:11'),
(79, 7, '2023-02-20 12:16:25'),
(80, 7, '2023-03-04 10:30:05'),
(81, 7, '2023-03-04 11:07:06'),
(82, 7, '2023-03-04 11:27:53'),
(83, 7, '2023-03-04 11:28:51'),
(84, 7, '2023-03-04 11:29:36'),
(85, 7, '2023-03-04 11:36:59'),
(86, 7, '2023-03-04 11:37:00'),
(87, 7, '2023-03-04 02:13:29'),
(88, 7, '2023-03-04 03:34:22'),
(89, 6, '2023-03-04 03:40:03'),
(90, 7, '2023-03-04 03:40:18'),
(91, 7, '2023-03-04 04:09:08'),
(92, 7, '2023-03-04 04:11:30'),
(93, 7, '2023-03-04 04:32:53'),
(94, 7, '2023-03-04 04:44:29'),
(95, 7, '2023-03-04 05:49:15'),
(101, 9, '2023-03-04 06:44:10'),
(102, 9, '2023-03-04 06:44:53'),
(103, 9, '2023-03-04 06:47:16'),
(104, 9, '2023-03-04 06:48:16'),
(105, 9, '2023-03-04 06:48:49'),
(106, 6, '2023-03-04 06:49:21'),
(107, 9, '2023-03-04 06:51:31'),
(108, 7, '2023-03-05 02:52:26'),
(109, 9, '2023-03-05 02:57:39'),
(110, 6, '2023-03-05 03:00:09'),
(111, 6, '2023-03-05 03:50:36'),
(112, 6, '2023-03-05 03:53:36'),
(113, 7, '2023-03-05 03:54:08'),
(114, 7, '2023-03-05 04:05:39'),
(115, 7, '2023-03-05 04:09:45'),
(116, 8, '2023-03-05 04:10:49'),
(117, 7, '2023-03-05 04:11:09'),
(118, 9, '2023-03-05 04:13:57'),
(119, 7, '2023-03-05 04:15:48'),
(120, 6, '2023-03-05 04:16:19'),
(121, 6, '2023-03-05 04:24:06'),
(122, 6, '2023-03-05 04:26:10'),
(123, 6, '2023-03-05 04:42:14'),
(124, 7, '2023-03-05 04:50:28'),
(125, 6, '2023-03-05 04:52:41'),
(126, 6, '2023-03-05 05:10:07'),
(127, 6, '2023-03-05 05:19:32'),
(128, 6, '2023-03-05 05:34:22'),
(129, 7, '2023-03-05 05:37:19'),
(130, 6, '2023-03-05 05:40:34'),
(131, 6, '2023-03-05 05:43:01'),
(132, 6, '2023-03-05 05:43:35'),
(133, 6, '2023-03-05 05:44:07'),
(134, 7, '2023-03-05 05:54:41'),
(135, 9, '2023-03-05 05:58:45'),
(136, 7, '2023-03-05 06:07:16'),
(137, 6, '2023-03-05 07:52:31'),
(138, 9, '2023-03-05 07:53:27'),
(139, 6, '2023-03-05 08:55:47'),
(140, 7, '2023-03-05 08:56:53'),
(141, 9, '2023-03-05 08:57:22'),
(142, 6, '2023-03-06 10:19:56'),
(143, 6, '2023-03-06 10:21:02'),
(144, 7, '2023-03-06 10:21:48'),
(145, 7, '2023-03-06 02:02:32'),
(146, 9, '2023-03-06 02:09:43'),
(147, 7, '2023-03-06 02:15:21'),
(148, 6, '2023-03-06 02:16:49'),
(149, 7, '2023-03-06 02:17:58'),
(150, 6, '2023-03-06 02:18:48'),
(151, 7, '2023-03-06 02:20:26'),
(152, 6, '2023-03-06 02:27:35'),
(153, 7, '2023-03-06 02:37:39'),
(154, 8, '2023-04-02 04:42:01'),
(155, 7, '2023-04-02 04:44:06'),
(156, 7, '2023-04-02 05:55:54'),
(157, 8, '2023-04-02 06:01:50');

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
  `type` enum('ALUMNI','ADMIN','STAFF') NOT NULL,
  `gender` enum('MALE','FEMALE') NOT NULL,
  `status` enum('SINGLE','MARRIED','WIDOW') NOT NULL,
  `pic` varchar(255) NOT NULL,
  `department` enum('CCS','CBA','Architecture','CASED','Engineering','Nursing','') NOT NULL,
  `date_created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `middle_name`, `last_name`, `email`, `cp_number`, `birth_date`, `password`, `username`, `type`, `gender`, `status`, `pic`, `department`, `date_created`) VALUES
(6, 'Leofers', 'Martinez', 'Dela Cruz', 'gregoriomarvin56@gmail.com', '09071021182', '2023-03-03', '$2y$12$zVCIJbubAccxNnOouyTrEuh1R9Z.b38GusEaLUC/swzG60hMSk1RS', 'leofer_delacruz', 'ALUMNI', 'MALE', 'SINGLE', '1676738551.png', 'Architecture', '2023-03-01 19:42:25'),
(7, 'Anatalia', 'Berania', 'Sy', 'gregoriomarvin.ph@gmail.com', '09182831664', '2023-01-30', '$2y$12$cZomaZADS2GfORuyIslGJOZUZkhLflHe4Sc1ez9IxtUxESwSXidoG', 'admin', 'ADMIN', 'FEMALE', 'MARRIED', '1676721475.png', '', '2023-01-01 19:42:35'),
(8, 'Melvin', 'Esguerra', 'Vargas', 'melvinevargas@gmail.com', '09091231223', '2023-03-02', '$2y$12$EMphGelfoecHxBmwM/pQ1umOiKpKXdyHXhZq0hR/UpcmvUHMyhSpq', 'melvin_vargas', 'ALUMNI', 'MALE', 'SINGLE', '1680424991.png', 'CCS', '2022-12-22 19:42:57'),
(9, 'Mabel', 'Corazon', 'Queen', 'mable.ccalumni@gmail.com', '09182421223', '2002-02-19', '$2y$12$ixzzvC0OD4VtYAv0P0EVL.2EhjIZ/EyJey9rT6NAm.ZGJ754823wS', 'mabel_corazon', 'STAFF', 'FEMALE', 'SINGLE', '1676804344.png', 'CBA', '2022-12-12 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `educational_info`
--
ALTER TABLE `educational_info`
  ADD PRIMARY KEY (`education_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `email_blast`
--
ALTER TABLE `email_blast`
  ADD PRIMARY KEY (`blast_id`);

--
-- Indexes for table `employment_info`
--
ALTER TABLE `employment_info`
  ADD PRIMARY KEY (`employment_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `interested`
--
ALTER TABLE `interested`
  ADD PRIMARY KEY (`interested_id`);

--
-- Indexes for table `jobs_list`
--
ALTER TABLE `jobs_list`
  ADD PRIMARY KEY (`job_id`);

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
-- AUTO_INCREMENT for table `educational_info`
--
ALTER TABLE `educational_info`
  MODIFY `education_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `email_blast`
--
ALTER TABLE `email_blast`
  MODIFY `blast_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `employment_info`
--
ALTER TABLE `employment_info`
  MODIFY `employment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `interested`
--
ALTER TABLE `interested`
  MODIFY `interested_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jobs_list`
--
ALTER TABLE `jobs_list`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `session_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

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
