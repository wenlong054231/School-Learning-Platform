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
-- Table structure for table `announcement`
--

DROP TABLE IF EXISTS `announcement`;
CREATE TABLE IF NOT EXISTS `announcement` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) NOT NULL,
  `Announcement` varchar(2000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`ID`, `Title`, `Announcement`) VALUES
(1, 'WELCOME TO EDUEXCEL', 'Best online learning platforms EDUXCEL.\r\n\r\nApart from online learning platforms, we also have online \r\ncourse platforms like LearnWorlds, Teachable, Thinkific, \r\nKajabi, and Podia.\r\n\r\nThose, are leading a fast-growing elearning industry, \r\nespecially after Covid-19. An unbreakable piece of evidence \r\nis the increasing number of people becoming interested in \r\nonline learning for both learning and teaching purposesâ€“\r\neither to learn a new skill or to teach online.\r\n\r\nLuckily there are many online learning and course platforms \r\nthat offer the opportunity to learn or create, and sell \r\nonline courses.\r\n\r\nFor online instructors, trainers, and aspiring edupreneurs \r\nthis is great news. But the struggle of choosing the best \r\nonline learning platform out of the many options out there \r\nis real.\r\n\r\nTo help make this process easier, we came up with a list of \r\nthe top online learning platforms analyzed by type and \r\ncategory that you can use to offer high-quality learning \r\nexperiences.\r\n\r\nAnd, to make it easier for you to choose the right platform \r\nfor your needs, we broke them down into distinct categories.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
