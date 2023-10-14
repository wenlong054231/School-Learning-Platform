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
-- Table structure for table `uploadfile`
--

DROP TABLE IF EXISTS `uploadfile`;
CREATE TABLE IF NOT EXISTS `uploadfile` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Document` varchar(200) NOT NULL,
  `Uploaddate` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uploadfile`
--

INSERT INTO `uploadfile` (`ID`, `Document`, `Uploaddate`) VALUES
(36, 'Week 2 - 4+1 Model.pdf', '31-05-2022 12:45am'),
(35, 'Week 2 - 4+1 Model.pdf', '31-05-2022 12:44am'),
(31, 'LAB 4_1 (2).pdf', '29-05-2022 04:04pm'),
(32, 'LAB 4_1 (2).pdf', '30-05-2022 02:58am'),
(28, 'LAB 4_1.pdf', '27-05-2022 12:42pm'),
(27, 'tower.jpg', '27-05-2022 12:41pm'),
(33, 'Week 2 - 4+1 Model.pdf', '31-05-2022 12:43am'),
(34, 'Week 2 - 4+1 Model.pdf', '31-05-2022 12:43am'),
(37, 'Week 2 - 4+1 Model.pdf', '31-05-2022 12:47am'),
(38, 'Week 2 - 4+1 Model.pdf', '31-05-2022 12:53am'),
(39, 'Week 2 - 4+1 Model.pdf', '31-05-2022 12:58am'),
(40, 'smartcities-04-00032-v3 (1).pdf', '31-05-2022 01:02am'),
(41, 'smartcities-04-00032-v3 (1) (1).pdf', '31-05-2022 03:50am'),
(42, 'smartcities-04-00032-v3 (1) (1).pdf', '31-05-2022 01:10pm'),
(43, 'Week 2 - 4+1 Model (2).pdf', '31-05-2022 01:25pm');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
