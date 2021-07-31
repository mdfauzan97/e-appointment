-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2021 at 04:17 PM
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
-- Database: `e-appfake`
--

-- --------------------------------------------------------

--
-- Table structure for table `booked_list`
--

CREATE TABLE `booked_list` (
  `BookedID` int(11) NOT NULL,
  `Nama` text NOT NULL,
  `IC` int(15) NOT NULL,
  `Jantina` text NOT NULL,
  `Telefon` int(15) NOT NULL,
  `Tarikh` date NOT NULL,
  `Department` text NOT NULL,
  `Tujuan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booked_list`
--

INSERT INTO `booked_list` (`BookedID`, `Nama`, `IC`, `Jantina`, `Telefon`, `Tarikh`, `Department`, `Tujuan`) VALUES
(1, 'Ali bin Bakar', 990101, 'Lelaki', 16, '2020-09-01', 'Cardiology', 'Check up after 2nd surgery');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `feedbackID` int(10) NOT NULL,
  `Nama` text NOT NULL,
  `phonenum` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `Tujuan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`feedbackID`, `Nama`, `phonenum`, `email`, `Tujuan`) VALUES
(3, 'fauzan', '6012111111', 'fauzanIIUM@edu.my', 'good '),
(5, 'izzat', '6017122222', 'izzatIIUM@edu.my', 'terbaik'),
(6, 'khalis', '6012933333', 'khalisIIUM@edu.my', 'good website'),
(7, 'alif', '60123321312', 'alif.shoe@pm.me', 'not bad'),
(8, 'syah', '60123222', 'syahIIUM@edu.my', ''),
(9, 'syahmi', '1212121', 'syahmiIIUM@edu.my', 'not bad website and good services');

-- --------------------------------------------------------

--
-- Table structure for table `staffid`
--

CREATE TABLE `staffid` (
  `StaffID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staffid`
--

INSERT INTO `staffid` (`StaffID`, `Username`, `Password`) VALUES
(1, 'admin1', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE `worker` (
  `workerID` int(11) NOT NULL,
  `Nama` text NOT NULL,
  `IC` varchar(20) NOT NULL,
  `Telefon` varchar(20) NOT NULL,
  `Tarikh` date NOT NULL,
  `Gender` text NOT NULL,
  `Department` text NOT NULL,
  `Tujuan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`workerID`, `Nama`, `IC`, `Telefon`, `Tarikh`, `Gender`, `Department`, `Tujuan`) VALUES
(6, 'ali', '971111124747', '6012345678', '2021-01-15', '', 'Cardiology', 'check2'),
(11, 'Fauzan', '971111125655', '60123445671', '2021-01-21', '', 'Hepatology', 'First checkup'),
(13, 'abu', '12345', '6012222', '2021-01-08', '', 'Cardiology', 'First review'),
(14, 'Alif', '121231321', '6012312321', '2021-01-08', '', 'Neurology', 'First checkup'),
(15, 'alif', '12345', '12332123', '2021-01-09', '', 'Hepatology', 'first review'),
(16, 'rahman', '1234', '601292133', '2021-01-08', '', 'Hepatology', 'review'),
(17, 'syahmi', '090909', '1234444', '2021-01-29', '', 'Neurology', 'checkup');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booked_list`
--
ALTER TABLE `booked_list`
  ADD PRIMARY KEY (`BookedID`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`feedbackID`);

--
-- Indexes for table `staffid`
--
ALTER TABLE `staffid`
  ADD PRIMARY KEY (`StaffID`);

--
-- Indexes for table `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`workerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booked_list`
--
ALTER TABLE `booked_list`
  MODIFY `BookedID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `feedbackID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `staffid`
--
ALTER TABLE `staffid`
  MODIFY `StaffID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `worker`
--
ALTER TABLE `worker`
  MODIFY `workerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
