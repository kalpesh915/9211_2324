-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2024 at 06:06 AM
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
-- Database: `carrentalsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bookingid` int(11) NOT NULL,
  `bookingdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `carid` int(11) DEFAULT NULL,
  `startdate` date DEFAULT NULL,
  `enddate` date DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `deposut` int(11) DEFAULT NULL,
  `driverid` int(11) NOT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bookingid`, `bookingdate`, `carid`, `startdate`, `enddate`, `userid`, `amount`, `deposut`, `driverid`, `status`) VALUES
(1, '2024-03-09 04:30:06', 1, '2024-03-11', '2024-03-13', 2, 15000, 1000, 1, 1),
(2, '2024-03-09 04:30:21', 2, '2024-03-11', '2024-03-13', 3, 15000, 1000, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `carid` int(11) NOT NULL,
  `carnumber` varchar(20) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `modal` varchar(20) NOT NULL,
  `make` smallint(6) NOT NULL,
  `color` varchar(20) NOT NULL,
  `seating` tinyint(4) NOT NULL,
  `fuel` varchar(10) NOT NULL,
  `ac` varchar(3) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`carid`, `carnumber`, `brand`, `modal`, `make`, `color`, `seating`, `fuel`, `ac`, `status`, `created_at`) VALUES
(1, 'GJ 03 AB 1122', 'Toyota', 'Innova', 2019, 'white', 7, 'Diesel', 'yes', 1, '2024-03-09 04:18:10'),
(2, 'GJ 03 AB 1123', 'Toyota', 'Innova', 2019, 'white', 8, 'Hybrid', 'yes', 1, '2024-03-09 04:19:27'),
(3, 'GJ 03 AE 1234', 'Maruti', 'Ecco', 2020, 'white', 10, 'CNG', 'No', 1, '2024-03-09 04:19:27');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `driverid` int(11) NOT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `whatsapp` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `dateofbirth` date DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `drivinglicance` varchar(255) DEFAULT NULL,
  `dlexpiray` date NOT NULL,
  `adharcard` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`driverid`, `fname`, `lname`, `email`, `phone`, `whatsapp`, `address`, `dateofbirth`, `photo`, `drivinglicance`, `dlexpiray`, `adharcard`, `status`) VALUES
(1, 'Sumit', 'Talsaniya', 'sumit@heavydriver.com', '8787678678', '9988998878', 'Koi ne no kevay', '2003-03-11', 'driversphotos/sumit.jpg', 'dlphotos/sumit.jpg', '2034-03-30', 'adharphotos/sumit.jpg', 1),
(2, 'Khushi', 'Thakr', 'khushi@heavydriver.com', '8784478678', '6688998878', 'Koi ne no kevay', '2008-03-11', 'driversphotos/khushi.jpg', 'dlphotos/khushi.jpg', '2034-03-30', 'adharphotos/khushi.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fueling`
--

CREATE TABLE `fueling` (
  `fuelid` int(11) NOT NULL,
  `fueldate` date NOT NULL,
  `carid` int(11) NOT NULL,
  `driverid` int(11) NOT NULL,
  `quanity` int(11) NOT NULL,
  `rate` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fueling`
--

INSERT INTO `fueling` (`fuelid`, `fueldate`, `carid`, `driverid`, `quanity`, `rate`) VALUES
(1, '2024-03-08', 1, 1, 12, '102.00');

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `insuranceid` int(11) NOT NULL,
  `carid` int(11) DEFAULT NULL,
  `startdate` date DEFAULT NULL,
  `enddate` date DEFAULT NULL,
  `renewdate` date DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `company` varchar(128) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`insuranceid`, `carid`, `startdate`, `enddate`, `renewdate`, `amount`, `company`, `type`) VALUES
(1, 2, '2024-03-01', '2025-03-01', '2025-03-08', 12500, 'ICICI Insurance', 'Full');

-- --------------------------------------------------------

--
-- Table structure for table `repair`
--

CREATE TABLE `repair` (
  `repairid` int(11) NOT NULL,
  `carid` int(11) NOT NULL,
  `repairstartdate` date NOT NULL,
  `repairenddate` date NOT NULL,
  `repaircost` int(11) NOT NULL,
  `vendor` varchar(255) NOT NULL,
  `driverid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `repair`
--

INSERT INTO `repair` (`repairid`, `carid`, `repairstartdate`, `repairenddate`, `repaircost`, `vendor`, `driverid`) VALUES
(1, 1, '2024-03-01', '2024-03-04', 1250, 'ABC Car Care', 2);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `reviewid` int(11) NOT NULL,
  `reviewdate` date DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `bookingid` int(11) DEFAULT NULL,
  `message` varchar(1024) DEFAULT NULL,
  `rattins` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`reviewid`, `reviewdate`, `userid`, `bookingid`, `message`, `rattins`) VALUES
(1, '2024-03-08', 3, 1, 'Good Service', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `whatsapp` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `dateofbirth` date DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `drivinglicance` varchar(255) DEFAULT NULL,
  `adharcard` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `fname`, `lname`, `email`, `phone`, `whatsapp`, `address`, `dateofbirth`, `photo`, `drivinglicance`, `adharcard`, `status`) VALUES
(1, 'ridham', 'Vishniswami', 'ridham@gmail.com', '998899889900', '9988998899', 'kalawad road', '2004-03-18', 'photos/ridham.jpg', 'dlphotos/ridham.jpg', 'adharphotos/ridham.jpg', 1),
(2, 'kenil', 'sangani', 'kenil@gmail.com', '998899889330', '9888998899', 'kalawad road', '2007-03-18', 'photos/kenil.jpg', 'dlphotos/kenil.jpg', 'adharphotos/kenil.jpg', 1),
(3, 'dipak', 'vavdiya', 'dipak@gmail.com', '678899889330', '9088998899', 'kalawad road', '2007-03-18', 'photos/dipak.jpg', 'dlphotos/dipak.jpg', 'adharphotos/dipak.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bookingid`),
  ADD KEY `carid` (`carid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `fk_driverid` (`driverid`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`carid`),
  ADD UNIQUE KEY `unq_carno` (`carnumber`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`driverid`);

--
-- Indexes for table `fueling`
--
ALTER TABLE `fueling`
  ADD PRIMARY KEY (`fuelid`),
  ADD KEY `fk_carid` (`carid`),
  ADD KEY `fk_driverid1` (`driverid`);

--
-- Indexes for table `insurance`
--
ALTER TABLE `insurance`
  ADD PRIMARY KEY (`insuranceid`),
  ADD KEY `carid` (`carid`);

--
-- Indexes for table `repair`
--
ALTER TABLE `repair`
  ADD PRIMARY KEY (`repairid`),
  ADD KEY `carid` (`carid`),
  ADD KEY `driverid` (`driverid`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`reviewid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `bookingid` (`bookingid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bookingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `carid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `driverid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fueling`
--
ALTER TABLE `fueling`
  MODIFY `fuelid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `insurance`
--
ALTER TABLE `insurance`
  MODIFY `insuranceid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `repair`
--
ALTER TABLE `repair`
  MODIFY `repairid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `reviewid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`carid`) REFERENCES `cars` (`carid`),
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`),
  ADD CONSTRAINT `fk_driverid` FOREIGN KEY (`driverid`) REFERENCES `drivers` (`driverid`);

--
-- Constraints for table `fueling`
--
ALTER TABLE `fueling`
  ADD CONSTRAINT `fk_carid` FOREIGN KEY (`carid`) REFERENCES `cars` (`carid`),
  ADD CONSTRAINT `fk_driverid1` FOREIGN KEY (`driverid`) REFERENCES `drivers` (`driverid`);

--
-- Constraints for table `insurance`
--
ALTER TABLE `insurance`
  ADD CONSTRAINT `insurance_ibfk_1` FOREIGN KEY (`carid`) REFERENCES `cars` (`carid`);

--
-- Constraints for table `repair`
--
ALTER TABLE `repair`
  ADD CONSTRAINT `carid` FOREIGN KEY (`carid`) REFERENCES `cars` (`carid`),
  ADD CONSTRAINT `driverid` FOREIGN KEY (`driverid`) REFERENCES `drivers` (`driverid`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`bookingid`) REFERENCES `bookings` (`bookingid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
