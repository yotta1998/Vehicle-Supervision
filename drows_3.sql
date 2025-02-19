-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2024 at 11:35 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drows`
--

-- --------------------------------------------------------

--
-- Table structure for table `action`
--

CREATE TABLE `action` (
  `Action_ID` int(11) NOT NULL,
  `Type_Of_Action` varchar(255) NOT NULL,
  `Driver_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `camera`
--

CREATE TABLE `camera` (
  `CAM_IP` varchar(255) NOT NULL,
  `Vehicle_ID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `camera`
--

INSERT INTO `camera` (`CAM_IP`, `Vehicle_ID`) VALUES
('test.mp4', '1');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `Driver_ID` int(11) NOT NULL,
  `Driver_Name` varchar(255) NOT NULL,
  `Driver_Phone` varchar(255) NOT NULL,
  `Driver_Address` varchar(255) NOT NULL,
  `Vehicle_ID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`Driver_ID`, `Driver_Name`, `Driver_Phone`, `Driver_Address`, `Vehicle_ID`) VALUES
(16, 'محمد مصطفى الشيخ', '09534354354', 'حماه', '1'),
(17, 'محمد القضماني ', '0940435506', 'حمص', '2');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `PHOTO_PATH` varchar(255) NOT NULL,
  `CAM_IP` varchar(255) NOT NULL,
  `EVENT_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `Tour_ID` int(11) NOT NULL,
  `Datey` date DEFAULT NULL,
  `Stopped` int(11) DEFAULT NULL,
  `OnGoing` int(11) DEFAULT NULL,
  `Arrived` int(11) DEFAULT NULL,
  `Driver_ID` int(11) NOT NULL,
  `Vehicle_ID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`Tour_ID`, `Datey`, `Stopped`, `OnGoing`, `Arrived`, `Driver_ID`, `Vehicle_ID`) VALUES
(6, '2024-03-02', NULL, NULL, NULL, 16, '1');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles_`
--

CREATE TABLE `vehicles_` (
  `Vehicle_ID` varchar(255) NOT NULL,
  `Model` varchar(255) NOT NULL,
  `Vehicle_Type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicles_`
--

INSERT INTO `vehicles_` (`Vehicle_ID`, `Model`, `Vehicle_Type`) VALUES
('1', 'SANA', 'SABA'),
('2', 'Clio', 'Renault');

-- --------------------------------------------------------

--
-- Table structure for table `_event`
--

CREATE TABLE `_event` (
  `EVENT_ID` int(11) NOT NULL,
  `EVENT_DESCRYPTION` varchar(255) NOT NULL,
  `Driver_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `_event`
--

INSERT INTO `_event` (`EVENT_ID`, `EVENT_DESCRYPTION`, `Driver_ID`) VALUES
(318, 'TEST', 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `action`
--
ALTER TABLE `action`
  ADD PRIMARY KEY (`Action_ID`),
  ADD KEY `Driver_ID` (`Driver_ID`);

--
-- Indexes for table `camera`
--
ALTER TABLE `camera`
  ADD PRIMARY KEY (`CAM_IP`),
  ADD KEY `Vehicle_ID` (`Vehicle_ID`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`Driver_ID`),
  ADD KEY `Vehicle_ID` (`Vehicle_ID`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`PHOTO_PATH`),
  ADD KEY `CAM_IP` (`CAM_IP`),
  ADD KEY `EVENT_ID` (`EVENT_ID`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`Tour_ID`),
  ADD KEY `Driver_ID` (`Driver_ID`),
  ADD KEY `Vehicle_ID` (`Vehicle_ID`);

--
-- Indexes for table `vehicles_`
--
ALTER TABLE `vehicles_`
  ADD PRIMARY KEY (`Vehicle_ID`);

--
-- Indexes for table `_event`
--
ALTER TABLE `_event`
  ADD PRIMARY KEY (`EVENT_ID`),
  ADD KEY `FK_ConstraintName` (`Driver_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `action`
--
ALTER TABLE `action`
  MODIFY `Action_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `Driver_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `Tour_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_event`
--
ALTER TABLE `_event`
  MODIFY `EVENT_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `action`
--
ALTER TABLE `action`
  ADD CONSTRAINT `action_ibfk_1` FOREIGN KEY (`Driver_ID`) REFERENCES `drivers` (`Driver_ID`);

--
-- Constraints for table `camera`
--
ALTER TABLE `camera`
  ADD CONSTRAINT `camera_ibfk_1` FOREIGN KEY (`Vehicle_ID`) REFERENCES `vehicles_` (`Vehicle_ID`);

--
-- Constraints for table `drivers`
--
ALTER TABLE `drivers`
  ADD CONSTRAINT `drivers_ibfk_1` FOREIGN KEY (`Vehicle_ID`) REFERENCES `vehicles_` (`Vehicle_ID`);

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`CAM_IP`) REFERENCES `camera` (`CAM_IP`),
  ADD CONSTRAINT `image_ibfk_2` FOREIGN KEY (`EVENT_ID`) REFERENCES `_event` (`EVENT_ID`);

--
-- Constraints for table `tours`
--
ALTER TABLE `tours`
  ADD CONSTRAINT `tours_ibfk_1` FOREIGN KEY (`Driver_ID`) REFERENCES `drivers` (`Driver_ID`),
  ADD CONSTRAINT `tours_ibfk_2` FOREIGN KEY (`Vehicle_ID`) REFERENCES `vehicles_` (`Vehicle_ID`);

--
-- Constraints for table `_event`
--
ALTER TABLE `_event`
  ADD CONSTRAINT `FK_ConstraintName` FOREIGN KEY (`Driver_ID`) REFERENCES `drivers` (`Driver_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
