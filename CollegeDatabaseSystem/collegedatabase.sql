-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 02:21 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collegedatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `usn` varchar(10) NOT NULL,
  `ssid` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`usn`, `ssid`) VALUES
('1BI13CS062', 'CSE8A');

-- --------------------------------------------------------

--
-- Table structure for table `iamarks`
--

CREATE TABLE `iamarks` (
  `usn` varchar(10) NOT NULL,
  `subcode` varchar(10) NOT NULL,
  `ssid` varchar(5) NOT NULL,
  `test1` int(11) NOT NULL,
  `test2` int(11) NOT NULL,
  `test3` int(11) NOT NULL,
  `finalIA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `iamarks`
--

INSERT INTO `iamarks` (`usn`, `subcode`, `ssid`, `test1`, `test2`, `test3`, `finalIA`) VALUES
('1BI13CS020', '10CS81    ', ' CSE8', 10, 11, 10, 0),
('1BI13CS020', '10CS82    ', 'CSE8A', 10, 11, 11, 0);

-- --------------------------------------------------------

--
-- Table structure for table `semsec`
--

CREATE TABLE `semsec` (
  `ssid` varchar(5) NOT NULL,
  `sem` int(11) NOT NULL,
  `sec` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `semsec`
--

INSERT INTO `semsec` (`ssid`, `sem`, `sec`) VALUES
('', 0, ''),
('CSE8A', 8, 'A'),
('CSE8B', 8, 'B');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `usn` varchar(20) NOT NULL,
  `student_name` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `phone_number` bigint(11) NOT NULL,
  `gender` enum('M','F','O') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`usn`, `student_name`, `address`, `phone_number`, `gender`) VALUES
('1BI13CS020', 'Akshay', 'Belagavi ', 8877881122, 'M'),
('1BI13CS062 ', 'Sandhya             ', ' Bangalore         ', 7722829912, 'F'),
('1SV20CS012', 'ABHI', 'HARAPANAHALLI ROAD H', 8050506963, 'M'),
('1SV20CS015', 'RAM', 'HAG', 1234, 'M');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subcode` varchar(10) NOT NULL,
  `title` varchar(20) NOT NULL,
  `sem` int(11) NOT NULL,
  `credits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subcode`, `title`, `sem`, `credits`) VALUES
('', '', 0, 0),
('10CS81    ', 'ACA                 ', 8, 4),
('10CS82    ', ' SSM                ', 8, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD KEY `foreign` (`usn`),
  ADD KEY `foreign2` (`ssid`);

--
-- Indexes for table `iamarks`
--
ALTER TABLE `iamarks`
  ADD PRIMARY KEY (`usn`,`subcode`,`ssid`);

--
-- Indexes for table `semsec`
--
ALTER TABLE `semsec`
  ADD PRIMARY KEY (`ssid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`usn`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subcode`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `class_ibfk_2` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`),
  ADD CONSTRAINT `class_ibfk_3` FOREIGN KEY (`ssid`) REFERENCES `semsec` (`ssid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `iamarks`
--
ALTER TABLE `iamarks`
  ADD CONSTRAINT `iamarks_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
