-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 31, 2022 at 05:41 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `sName` varchar(50) NOT NULL,
  `sPassword` varchar(12) NOT NULL,
  `sNumber` varchar(10) NOT NULL,
  `sDOB` date NOT NULL,
  `sEmail` varchar(30) NOT NULL,
  `sContact` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `sName`, `sPassword`, `sNumber`, `sDOB`, `sEmail`, `sContact`) VALUES
(1, 'Brendon Lee', 'S1owrerwree', 'TP904334', '2022-05-03', 'brenodnlee_2@gmail.com', '012-1231231'),
(26, 'admin', 'Adminadmin1', 'TP000000', '2022-05-01', 'admin123@gmail.com', '011-12313211'),
(5, 'Derek Leong', 'jfoiefwU4fef', 'TP298321', '2022-05-02', 'derekleong@gmail.com', '011-12121145'),
(30, 'Joe Yan Chun', 'A1fefwerfwer', 'TP090323', '2022-05-02', 'joe_yanchun123@gmail.com', '011-23423424'),
(29, 'Tammy Cheong', 'R5owerwefe', 'TP829342', '2022-05-02', 'tammycheong12@gmail.com', '011-13121123'),
(27, 'Simon Leong', 'G4werefdf', 'TP859344', '2022-05-08', 'simonleong@gmail.com', '017-3459000'),
(31, 'Final Testing', 'F1testing', 'TP123456', '2022-05-01', 'finaltesting123@gmail.com', '017-2903400');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
