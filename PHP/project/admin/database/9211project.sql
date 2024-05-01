-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2024 at 07:04 AM
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
(1, 'Admin', 'Demo', 'admin@project.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', '2024-05-01 04:19:40', '2024-05-01 04:25:29');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `logid` int(11) NOT NULL,
  `eventtime` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` varchar(128) NOT NULL,
  `logmessage` varchar(1024) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`logid`, `eventtime`, `email`, `logmessage`, `status`) VALUES
(1, '2024-05-01 04:42:39', 'admin@project.com', 'Login Successfully', 0),
(2, '2024-05-01 04:42:58', 'info@vishaluniform.com', 'Invalid Attempt of Login', 0),
(3, '2024-05-01 04:44:15', 'admin@project.com', 'Login Successfully', 0),
(4, '2024-05-01 04:48:23', '', 'Logout Successfully', 0),
(5, '2024-05-01 04:48:44', 'admin@project.com', 'Logout Successfully', 0),
(6, '2024-05-01 04:48:59', 'admin@project.com', 'Logout Successfully', 0),
(7, '2024-05-01 04:52:05', 'admin@project.com', 'Logout Successfully', 0),
(8, '2024-05-01 04:52:52', 'admin@project.com', 'Logout Successfully', 0),
(9, '2024-05-01 04:53:22', 'admin@project.com', 'Login Successfully', 0),
(10, '2024-05-01 05:03:10', 'admin@project.com', 'Logout Successfully', 0),
(11, '2024-05-01 05:03:13', 'admin@project.com', 'Login Successfully', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminusers`
--
ALTER TABLE `adminusers`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`logid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminusers`
--
ALTER TABLE `adminusers`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `logid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
