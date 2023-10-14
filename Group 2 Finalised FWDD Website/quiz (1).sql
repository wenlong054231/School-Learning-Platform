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
-- Table structure for table `quiz`
--

DROP TABLE IF EXISTS `quiz`;
CREATE TABLE IF NOT EXISTS `quiz` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Qnumber` int(255) NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Answer` varchar(255) NOT NULL,
  `Answer2` varchar(255) NOT NULL,
  `Answer3` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`ID`, `Qnumber`, `Question`, `Answer`, `Answer2`, `Answer3`) VALUES
(1, 1, 'In which part of your body would you find the cruciate ligament?', 'Knee', 'Dick', 'Penis'),
(2, 2, 'In which part of your body would you find the cruciate ligament??? :D', 'Pigu', 'Lungs', 'IDK'),
(3, 3, 'What country has the highest life expectancy? ', 'HongKong', 'Malaysia', 'Japan'),
(12, 4, 'How tall are u?', 'Pokemon', '190', '140'),
(13, 5, 'Who is the best NBA player?', 'Stephen Curry', 'Lebron James', 'Kobe Bryant');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
