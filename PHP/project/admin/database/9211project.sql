-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2024 at 06:41 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `9211project`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminusers`
--

CREATE TABLE `adminusers` (
  `userid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(512) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminusers`
--

INSERT INTO `adminusers` (`userid`, `fname`, `lname`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Kenil S', 'KSanganiK', 'admin@project.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', '2024-05-01 04:19:40', '2024-05-15 04:01:07');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `careerid` int(11) NOT NULL,
  `fname` varchar(64) NOT NULL,
  `lname` varchar(64) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dateofbirth` date NOT NULL,
  `phone` varchar(15) NOT NULL,
  `emailaddress` varchar(128) NOT NULL,
  `jobtype` varchar(64) NOT NULL,
  `qualification` varchar(128) NOT NULL,
  `experience` varchar(128) NOT NULL,
  `resumepath` varchar(256) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `categoryid` int(11) NOT NULL,
  `categoryname` varchar(128) NOT NULL,
  `categoryclassname` varchar(128) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`categoryid`, `categoryname`, `categoryclassname`, `status`) VALUES
(1, 'Demo1', 'Demo1', 1),
(2, 'Demo 11', 'Demo-11', 1),
(3, 'another text', 'another-text', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contactid` int(11) NOT NULL,
  `contactperson` varchar(64) NOT NULL,
  `phone1` varchar(20) NOT NULL,
  `phone2` varchar(20) NOT NULL,
  `email1` varchar(128) NOT NULL,
  `email2` varchar(128) NOT NULL,
  `whatsapp` varchar(20) NOT NULL,
  `address` varchar(1024) NOT NULL,
  `googlemap` varchar(2048) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contactid`, `contactperson`, `phone1`, `phone2`, `email1`, `email2`, `whatsapp`, `address`, `googlemap`) VALUES
(1, 'kenil sangani', '8574964565', '9632147850', 'kenil@gmail.com', 'kenil@yahoo.com', '9966554455', 'Near Naptune Tower Kalawad Road Rajkot', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14766.863003585162!2d70.77560319999999!3d22.288754849999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca2471312a07%3A0xabc998708aa8d138!2sBAPS%20Shri%20Swaminarayan%20Mandir%2C%20Rajkot!5e0!3m2!1sen!2sin!4v1714625364652!5m2!1sen!2sin');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faqid` int(11) NOT NULL,
  `question` varchar(512) NOT NULL,
  `answer` varchar(2048) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`faqid`, `question`, `answer`, `status`) VALUES
(2, 'Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?', 'Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `logid` int(11) NOT NULL,
  `logtime` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` varchar(128) NOT NULL,
  `logmessage` varchar(1024) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`logid`, `logtime`, `email`, `logmessage`, `status`) VALUES
(1, '2024-05-01 04:42:39', 'admin@project.com', 'Login Successfully', 1),
(2, '2024-05-01 04:42:58', 'info@vishaluniform.com', 'Invalid Attempt of Login', 1),
(3, '2024-05-01 04:44:15', 'admin@project.com', 'Login Successfully', 1),
(4, '2024-05-01 04:48:23', '', 'Logout Successfully', 1),
(5, '2024-05-01 04:48:44', 'admin@project.com', 'Logout Successfully', 1),
(6, '2024-05-01 04:48:59', 'admin@project.com', 'Logout Successfully', 1),
(7, '2024-05-01 04:52:05', 'admin@project.com', 'Logout Successfully', 1),
(8, '2024-05-01 04:52:52', 'admin@project.com', 'Logout Successfully', 1),
(9, '2024-05-01 04:53:22', 'admin@project.com', 'Login Successfully', 1),
(10, '2024-05-01 05:03:10', 'admin@project.com', 'Logout Successfully', 1),
(11, '2024-05-01 05:03:13', 'admin@project.com', 'Login Successfully', 1),
(12, '2024-05-02 03:56:01', 'admin@project.com', 'Login Successfully', 1),
(13, '2024-05-02 03:56:12', 'admin@project.com', 'Logout Successfully', 1),
(14, '2024-05-02 03:56:26', 'admin@project.com', 'Login Successfully', 1),
(15, '2024-05-02 04:12:34', 'admin@project.com', 'Logout Successfully', 1),
(16, '2024-05-02 04:12:37', 'admin@project.com', 'Login Successfully', 1),
(17, '2024-05-02 04:25:28', 'admin@project.com', 'Profile Updated first name Admin and last name Demo text', 1),
(18, '2024-05-02 04:25:45', 'admin@project.com', 'Profile Updated first name Admin and last name User', 1),
(19, '2024-05-02 04:34:47', 'admin@project.com', 'Invalid Attempt of Change Password', 1),
(20, '2024-05-02 04:35:01', 'admin@project.com', 'Invalid Attempt of Change Password', 1),
(21, '2024-05-02 04:36:04', 'admin@project.com', 'Invalid Attempt of Change Password', 1),
(22, '2024-05-02 04:36:24', 'admin@project.com', 'Invalid Attempt of Change Password', 1),
(23, '2024-05-02 04:36:57', 'admin@project.com', 'Invalid Attempt of Change Password', 1),
(24, '2024-05-02 04:38:46', 'admin@project.com', 'Invalid Attempt of Change Password', 1),
(25, '2024-05-02 04:39:10', 'admin@project.com', 'Invalid Attempt of Change Password', 1),
(26, '2024-05-02 04:39:23', 'admin@project.com', 'Invalid Attempt of Change Password', 1),
(27, '2024-05-02 04:39:47', 'admin@project.com', 'Invalid Attempt of Change Password', 1),
(28, '2024-05-02 04:41:10', 'admin@project.com', 'Invalid Attempt of Change Password', 1),
(29, '2024-05-02 04:41:39', 'admin@project.com', 'Password Updated', 1),
(30, '2024-05-02 04:41:50', 'admin@project.com', 'Invalid Attempt of Change Password', 1),
(31, '2024-05-02 04:42:19', 'admin@project.com', 'Invalid Attempt of Change Password', 1),
(32, '2024-05-02 04:42:32', 'admin@project.com', 'Invalid Attempt of Change Password', 1),
(33, '2024-05-02 04:43:04', 'admin@project.com', 'Invalid Attempt of Change Password', 1),
(34, '2024-05-02 04:43:39', 'admin@project.com', 'Invalid Attempt of Change Password', 1),
(35, '2024-05-02 04:43:57', 'admin@project.com', 'Invalid Attempt of Login', 1),
(36, '2024-05-02 04:44:02', 'admin@project.com', 'Invalid Attempt of Login', 1),
(37, '2024-05-02 04:44:09', 'admin@project.com', 'Login Successfully', 1),
(38, '2024-05-02 04:44:29', 'admin@project.com', 'Password Updated', 1),
(39, '2024-05-02 04:44:40', 'admin@project.com', 'Logout Successfully', 1),
(40, '2024-05-02 04:44:43', 'admin@project.com', 'Invalid Attempt of Login', 1),
(41, '2024-05-02 04:44:48', 'admin@project.com', 'Login Successfully', 1),
(42, '2024-05-02 05:03:29', 'admin@project.com', 'Logout Successfully', 1),
(43, '2024-05-03 03:54:37', 'admin@project.com', 'Invalid Attempt of Login', 1),
(44, '2024-05-03 03:54:53', 'admin@project.com', 'Login Successfully', 1),
(45, '2024-05-03 04:01:09', 'admin@project.com', 'Profile Updated first name  and last name ', 1),
(46, '2024-05-03 04:08:27', 'admin@project.com', 'Contact Details are Updated', 1),
(47, '2024-05-03 04:09:49', 'admin@project.com', 'Contact Details are Updated to kenil sangani, 8574964565, 9632147850, , kenil@yahoo.com, 9966554455, Near Naptune Tower Kalawad Road Rajkot, https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14766.863003585162!2d70.77560319999999!3d22.288754849999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca2471312a07%3A0xabc998708aa8d138!2sBAPS%20Shri%20Swaminarayan%20Mandir%2C%20Rajkot!5e0!3m2!1sen!2sin!4v1714625364652!5m2!1sen!2sin', 1),
(48, '2024-05-03 04:28:20', 'admin@project.com', 'Social Media Links are Updated with : https://www.dummylink.com, , https://www.dummylink.com, https://www.dummylink.com, , https://www.dummylink.com, https://www.dummylink.com, https://www.dummylink.com', 1),
(49, '2024-05-03 04:28:45', 'admin@project.com', 'Social Media Links are Updated with : https://www.dummylink.com, https://www.dummylink.com, https://www.dummylink.com, https://www.dummylink.com, , https://www.dummylink.com, https://www.dummylink.com, https://www.dummylink.com', 1),
(50, '2024-05-03 04:28:58', 'admin@project.com', 'Social Media Links are Updated with : https://www.dummylink.com, https://www.dummylink.com, https://www.dummylink.com, https://www.dummylink.com, https://www.dummylink.com, https://www.dummylink.com, https://www.dummylink.com, https://www.dummylink.com', 1),
(51, '2024-05-03 04:42:00', 'admin@project.com', 'Meat Details are Updated with : Demo Keyword for meta, this is Demo Meta tag Description, G-YS3ZLEG4S6', 1),
(52, '2024-05-03 05:02:54', 'admin@project.com', 'Logout Successfully', 1),
(53, '2024-05-06 03:47:17', 'admin@project.com', 'Invalid Attempt of Login', 1),
(54, '2024-05-06 03:47:24', 'admin@project.com', 'Invalid Attempt of Login', 1),
(55, '2024-05-06 03:47:29', 'admin@project.com', 'Login Successfully', 1),
(56, '2024-05-06 04:15:06', 'admin@project.com', 'Profile Updated first name Kenil and last name Sangani', 1),
(57, '2024-05-06 04:15:17', 'admin@project.com', 'Profile Updated first name Kenil S and last name KSanganiK', 1),
(58, '2024-05-06 04:43:25', 'admin@project.com', 'img1.jpg New Slider Added in Database ', 1),
(59, '2024-05-06 04:56:02', 'admin@project.com', 'img11.jpg New Slider Added in Database ', 1),
(60, '2024-05-06 04:58:57', 'admin@project.com', 'Logout Successfully', 1),
(61, '2024-05-08 03:45:14', 'admin@project.com', 'Invalid Attempt of Login', 1),
(62, '2024-05-08 03:45:19', 'admin@project.com', 'Login Successfully', 1),
(63, '2024-05-08 04:23:55', 'admin@project.com', ' New Slider Updatd in Database ', 1),
(64, '2024-05-08 04:25:01', 'admin@project.com', 'img7.jpg New Slider Updatd in Database ', 1),
(65, '2024-05-08 04:25:37', 'admin@project.com', 'img1.jpg New Slider Updatd in Database ', 1),
(66, '2024-05-08 04:26:04', 'admin@project.com', 'img2.jpg New Slider Updatd in Database ', 1),
(67, '2024-05-08 04:26:31', 'admin@project.com', 'img3.jpg New Slider Added in Database ', 1),
(68, '2024-05-08 04:29:22', 'admin@project.com', 'Logout Successfully', 1),
(69, '2024-05-09 03:52:21', 'admin@project.com', 'Login Successfully', 1),
(70, '2024-05-09 04:22:55', 'admin@project.com', 'Non consectetur a erat nam at lectus urna duis? New Faq Added', 1),
(71, '2024-05-09 04:23:17', 'admin@project.com', 'Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? New Faq Added', 1),
(72, '2024-05-09 04:24:01', 'admin@project.com', 'Dolor sit amet consectetur adipiscing elit pellentesque? New Faq Added', 1),
(73, '2024-05-09 04:41:46', 'admin@project.com', 'Dolor sit amet consectetur adipiscing elit pellentesque? Deleted From FAQ', 1),
(74, '2024-05-09 04:46:30', 'admin@project.com', 'Logout Successfully', 1),
(75, '2024-05-10 03:47:58', 'admin@project.com', 'Login Successfully', 1),
(76, '2024-05-10 04:31:46', 'admin@project.com', 'Demo1 Category Added in Database', 1),
(77, '2024-05-10 04:31:57', 'admin@project.com', 'Demo 11 Category Added in Database', 1),
(78, '2024-05-10 04:32:21', 'admin@project.com', 'another demo text Category Added in Database', 1),
(79, '2024-05-10 04:44:47', 'admin@project.com', 'another text Category Updated in Database', 1),
(80, '2024-05-10 04:47:11', 'admin@project.com', 'Logout Successfully', 1),
(81, '2024-05-11 03:47:39', 'admin@project.com', 'Login Successfully', 1),
(82, '2024-05-11 04:43:12', 'admin@project.com', 'Logout Successfully', 1),
(83, '2024-05-13 03:20:06', 'admin@project.com', 'Invalid Attempt of Login', 1),
(84, '2024-05-13 03:20:16', 'admin@project.com', 'Login Successfully', 1),
(85, '2024-05-13 04:19:09', 'admin@project.com', 'Car Service Added in Database', 1),
(86, '2024-05-13 04:23:37', 'admin@project.com', 'User Service Added in Database', 1),
(87, '2024-05-13 04:23:51', 'admin@project.com', 'Team Service Added in Database', 1),
(88, '2024-05-13 04:32:27', 'admin@project.com', 'Team Service Added in Database', 1),
(89, '2024-05-13 04:33:25', 'admin@project.com', 'Cars Service Updated in Database', 1),
(90, '2024-05-13 04:34:10', 'admin@project.com', 'Cars Service Updated in Database', 1),
(91, '2024-05-13 04:38:41', 'admin@project.com', 'Our Team Service Updated in Database', 1),
(92, '2024-05-13 04:58:30', 'admin@project.com', 'Login Successfully', 1),
(93, '2024-05-13 04:59:39', 'admin@project.com', 'Logout Successfully', 1),
(94, '2024-05-13 06:14:46', 'admin@project.com', 'Login Successfully', 1),
(95, '2024-05-13 06:16:01', 'admin@project.com', 'Contact Details are Updated to kenil sangani, 8574964565, 9632147850, , kenil@yahoo.com, 9966554455, Near Naptune Tower Kalawad Road Rajkot, https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14766.863003585162!2d70.77560319999999!3d22.288754849999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca2471312a07%3A0xabc998708aa8d138!2sBAPS%20Shri%20Swaminarayan%20Mandir%2C%20Rajkot!5e0!3m2!1sen!2sin!4v1714625364652!5m2!1sen!2sin', 1),
(96, '2024-05-13 06:17:01', 'admin@project.com', 'Logout Successfully', 1),
(97, '2024-05-14 03:46:45', 'admin@project.com', 'Login Successfully', 1),
(98, '2024-05-14 04:22:05', 'admin@project.com', 'Database Backup Successfully in backups/database_backup_14052024_095204.sql File.', 1),
(99, '2024-05-14 04:22:17', 'admin@project.com', 'Database Backup Successfully in backups/database_backup_14052024_095216.sql File.', 1),
(100, '2024-05-14 04:43:17', 'admin@project.com', ' New Slider Updatd in Database ', 1),
(101, '2024-05-14 04:43:33', 'admin@project.com', ' New Slider Updatd in Database ', 1),
(102, '2024-05-14 05:02:34', 'admin@project.com', 'Database Backup Successfully in backups/database_backup_14052024_103233.sql File.', 0),
(103, '2024-05-14 05:02:44', 'admin@project.com', 'Logout Successfully', 0),
(104, '2024-05-15 04:00:53', 'admin@project.com', 'Login Successfully', 0),
(105, '2024-05-15 04:01:07', 'admin@project.com', 'Password Updated', 0),
(106, '2024-05-15 04:44:02', 'admin@project.com', 'Kenil Sangani Team Member Added in Database', 0),
(107, '2024-05-15 04:59:50', 'admin@project.com', 'Logout Successfully', 0),
(108, '2024-05-16 04:03:10', 'admin@project.com', 'Login Successfully', 0),
(109, '2024-05-16 04:41:37', 'admin@project.com', 'KENIL Gammer Team Member Updated in Database', 0),
(110, '2024-05-16 04:42:10', 'admin@project.com', 'KENIL Gammer Team Member Updated in Database', 0),
(111, '2024-05-16 04:42:37', 'admin@project.com', 'KENIL Gammer Team Member Updated in Database', 0),
(112, '2024-05-16 04:42:49', 'admin@project.com', 'KENIL Gammer Team Member Updated in Database', 0),
(113, '2024-05-16 04:43:45', 'admin@project.com', 'KENIL Gammer Team Member Updated in Database', 0),
(114, '2024-05-16 04:43:59', 'admin@project.com', 'KENIL Gammer Team Member Updated in Database', 0),
(115, '2024-05-16 04:44:07', 'admin@project.com', 'KENIL Gammer Team Member Updated in Database', 0),
(116, '2024-05-16 04:44:21', 'admin@project.com', 'KENIL Gammer Team Member Updated in Database', 0),
(117, '2024-05-16 04:45:36', 'admin@project.com', 'Kenil Sangani Team Member Updated in Database', 0),
(118, '2024-05-16 04:50:19', 'admin@project.com', 'Kenil Sangani Team Member Added in Database', 0),
(119, '2024-05-16 04:51:33', 'admin@project.com', 'Logout Successfully', 0),
(120, '2024-05-17 03:57:09', 'admin@project.com', 'Login Successfully', 0);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `messageid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `senderemail` varchar(128) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `subject` varchar(512) NOT NULL,
  `message` varchar(4096) NOT NULL,
  `messagetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`messageid`, `fname`, `lname`, `senderemail`, `phone`, `subject`, `message`, `messagetime`, `status`) VALUES
(1, 'Demo', 'User', 'demo@gmail.com', '9966332211', 'Testing', 'Testing Message', '2024-05-03 04:45:10', 1),
(2, 'Demo1', 'User1', 'demo@gmail.com', '9966332211', 'Testing', 'Testing Message', '2024-05-03 04:45:18', 1),
(3, 'Demo1', 'User21', 'demo@gmail.com', '9966332211', 'Testing', 'Test22ing Message', '2024-05-03 04:45:26', 1),
(4, 'De22mo1', 'User2221', 'demo@gmail22.com', '9966332211', 'Testing', 'Test22ing Message', '2024-05-03 04:45:38', 1);

-- --------------------------------------------------------

--
-- Table structure for table `metatags`
--

CREATE TABLE `metatags` (
  `metaid` int(11) NOT NULL,
  `metakeywords` varchar(1024) NOT NULL,
  `metadescription` varchar(4096) NOT NULL,
  `googletagid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `metatags`
--

INSERT INTO `metatags` (`metaid`, `metakeywords`, `metadescription`, `googletagid`) VALUES
(1, 'Demo Keyword for meta', 'this is Demo Meta tag Description', 'G-YS3ZLEG4S6');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `serviceid` int(11) NOT NULL,
  `servicetitle` varchar(128) NOT NULL,
  `servicedescription` varchar(256) NOT NULL,
  `serviceicon` varchar(128) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`serviceid`, `servicetitle`, `servicedescription`, `serviceicon`, `status`, `created_at`, `updated_at`) VALUES
(2, 'User', 'User Friendlly', 'fa fa-user', 1, '2024-05-13 04:23:37', '2024-05-13 04:23:37'),
(3, 'Our Team', 'We have Large Team', 'fa fa-users', 1, '2024-05-13 04:23:51', '2024-05-13 04:38:41');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `settingid` tinyint(4) NOT NULL,
  `googletranslate` tinyint(4) NOT NULL DEFAULT 1,
  `careeroption` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`settingid`, `googletranslate`, `careeroption`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `sliderid` int(11) NOT NULL,
  `slidertitle` varchar(128) NOT NULL,
  `slidertext` varchar(1024) NOT NULL,
  `sliderimagepath` varchar(256) NOT NULL,
  `imagetype` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`sliderid`, `slidertitle`, `slidertext`, `sliderimagepath`, `imagetype`, `status`) VALUES
(2, 'Slider 2', 'This is Slider 2', 'img/sliderimages/08052024062604am 13720 img2.jpg', 1, 1),
(3, 'Slider', 'This is Slider 3', 'img/sliderimages/08052024062631am 22424 img3.jpg', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `socialmedia`
--

CREATE TABLE `socialmedia` (
  `socialid` int(11) NOT NULL,
  `facebook` varchar(512) NOT NULL,
  `twitter` varchar(512) NOT NULL,
  `youtube` varchar(512) NOT NULL,
  `linkedin` varchar(512) NOT NULL,
  `github` varchar(512) NOT NULL,
  `telegram` varchar(512) NOT NULL,
  `snapchat` varchar(512) NOT NULL,
  `instagram` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `socialmedia`
--

INSERT INTO `socialmedia` (`socialid`, `facebook`, `twitter`, `youtube`, `linkedin`, `github`, `telegram`, `snapchat`, `instagram`) VALUES
(1, 'https://www.dummylink.com', 'https://www.dummylink.com', 'https://www.dummylink.com', 'https://www.dummylink.com', 'https://www.dummylink.com', 'https://www.dummylink.com', 'https://www.dummylink.com', 'https://www.dummylink.com');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `subscriberid` int(11) NOT NULL,
  `subscribetime` timestamp NULL DEFAULT current_timestamp(),
  `subscriberemail` varchar(128) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`subscriberid`, `subscribetime`, `subscriberemail`, `status`) VALUES
(1, '2024-05-11 04:11:14', 'kenil@gmail.com', 1),
(2, '2024-05-11 04:11:14', 'ridham@gmail.com', 1),
(3, '2024-05-11 04:11:35', 'bhalabhai@gmail.com', 1),
(4, '2024-05-11 04:11:35', 'khushi@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `teamid` int(11) NOT NULL,
  `membername` varchar(64) NOT NULL,
  `memberdesignation` varchar(128) NOT NULL,
  `memberdescription` varchar(256) NOT NULL,
  `teamtwitter` varchar(256) NOT NULL,
  `teamfacebook` varchar(256) NOT NULL,
  `teamlinkedin` varchar(256) NOT NULL,
  `teaminstagram` varchar(256) NOT NULL,
  `teamgithub` varchar(256) NOT NULL,
  `teamyoutube` varchar(256) NOT NULL,
  `teamsnapchat` varchar(256) NOT NULL,
  `teamtelegram` varchar(256) NOT NULL,
  `memberimage` varchar(512) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `upated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminusers`
--
ALTER TABLE `adminusers`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`careerid`);

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contactid`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faqid`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`logid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`messageid`);

--
-- Indexes for table `metatags`
--
ALTER TABLE `metatags`
  ADD PRIMARY KEY (`metaid`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`serviceid`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`settingid`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`sliderid`);

--
-- Indexes for table `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD PRIMARY KEY (`socialid`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`subscriberid`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`teamid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminusers`
--
ALTER TABLE `adminusers`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `careerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contactid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `faqid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `logid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `messageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `metatags`
--
ALTER TABLE `metatags`
  MODIFY `metaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `serviceid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `settingid` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `sliderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `socialid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `subscriberid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `teamid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
