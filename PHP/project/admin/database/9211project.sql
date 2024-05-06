-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 06:59 AM
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
(1, 'Kenil S', 'KSanganiK', 'admin@project.com', '3acd0be86de7dcccdbf91b20f94a68cea535922d', '2024-05-01 04:19:40', '2024-05-06 04:15:17');

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
(60, '2024-05-06 04:58:57', 'admin@project.com', 'Logout Successfully', 0);

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
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `sliderid` int(11) NOT NULL,
  `slidertitle` varchar(128) NOT NULL,
  `slidertext` varchar(1024) NOT NULL,
  `sliderimagepath` varchar(256) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`sliderid`, `slidertitle`, `slidertext`, `sliderimagepath`, `status`) VALUES
(1, 'Demo1', 'this is demo slider', 'img/sliderimages/06052024064325am 43267 img1.jpg', 0),
(2, 'Demo1', 'Demo11', 'img/sliderimages/06052024065602am 27644 img11.jpg', 0);

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminusers`
--
ALTER TABLE `adminusers`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contactid`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminusers`
--
ALTER TABLE `adminusers`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contactid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `logid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

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
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `sliderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `socialid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
