-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jul 17, 2020 at 09:09 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medbk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gender`
--

DROP TABLE IF EXISTS `tbl_gender`;
CREATE TABLE IF NOT EXISTS `tbl_gender` (
  `Patient_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Gender` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Patient_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gender`
--

INSERT INTO `tbl_gender` (`Patient_ID`, `Gender`) VALUES
(1, 'Male'),
(2, 'Female'),
(11, 'Female'),
(12, ''),
(13, 'Male'),
(14, 'Male'),
(15, 'Male'),
(16, 'Male'),
(17, 'Male'),
(18, 'Male'),
(19, 'Male'),
(20, 'Male'),
(21, 'Male'),
(22, ''),
(23, 'Male'),
(24, 'Male'),
(25, 'Male'),
(26, 'Male'),
(27, 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patient`
--

DROP TABLE IF EXISTS `tbl_patient`;
CREATE TABLE IF NOT EXISTS `tbl_patient` (
  `Patient_ID` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Comment` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Patient_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_patient`
--

INSERT INTO `tbl_patient` (`Patient_ID`, `Name`, `DOB`, `Comment`) VALUES
(1, 'Kevin Brown', '1993-01-15', 'First Time'),
(2, 'Leah Gitonga', '1989-07-26', 'Not feeling well'),
(11, 'jay', '2020-07-19', 'hjkl'),
(12, '', '0000-00-00', ''),
(13, 'zzzzzed', '2020-07-07', 'comm'),
(14, 'zzzzzed', '2020-07-07', 'comm'),
(15, 'zzzzzed', '2020-07-14', 'jhg'),
(16, 'zzzzzed', '2020-07-14', 'jhg'),
(17, 'wds', '2020-07-16', 'dsc'),
(18, 'Ngugi T.', '2020-07-29', 'comm'),
(19, 'zzzzzed', '2020-07-22', 'qsx'),
(20, 'zzzzzed', '2020-07-22', 'qsx'),
(21, 'zzzzzed', '2020-07-22', 'qsx'),
(22, '', '0000-00-00', ''),
(23, '', '0000-00-00', ''),
(24, 'zzzzzed', '2020-07-29', 'cc'),
(25, 'zzzzzed', '2020-07-29', 'cc'),
(26, 'zzzzzed', '2020-07-29', 'cc'),
(27, 'Reinhardt', '2020-07-23', 'Comments');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service`
--

DROP TABLE IF EXISTS `tbl_service`;
CREATE TABLE IF NOT EXISTS `tbl_service` (
  `Patient_ID` int(10) NOT NULL AUTO_INCREMENT,
  `Service` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Patient_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_service`
--

INSERT INTO `tbl_service` (`Patient_ID`, `Service`) VALUES
(1, 'Outpatient'),
(2, 'InPatient'),
(11, 'OutPatient'),
(12, ''),
(13, 'InPatient'),
(14, 'InPatient'),
(15, 'InPatient'),
(16, 'InPatient'),
(17, 'InPatient'),
(18, 'InPatient'),
(19, 'InPatient'),
(20, 'InPatient'),
(21, 'InPatient'),
(22, ''),
(23, 'InPatient'),
(24, 'InPatient'),
(25, 'InPatient'),
(26, 'InPatient'),
(27, 'OutPatient');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
