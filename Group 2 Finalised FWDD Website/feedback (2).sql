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
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `fullname`, `email`, `telephone`, `feedback`) VALUES
(1, 'Brewerwe', 'werwer@gmail.com', 'wewerwer', 'werwerer'),
(2, 'Tammy', 'tammy123@gmail.com', '012-1231355', 'fwefwfe\n'),
(3, 'dergeregr', 'tammy1235@gmail.com', '012-1231311', 'dergegreg'),
(4, 'Brendon Lee', 'breno@gmail.com', '011-11111111', '\n\n'),
(5, 'James Lee', 'fwiefwef@gmail.com', '012-2325452', ' fdsfds    \n'),
(29, 'Final Testing', 'Finaltesting123@gmail.com', '017-2429202', 'Good Website!!!'),
(7, 'Soo Lee Yen', 'sooleeyen@gmail.com', '011-12354335', 'Very Good Service, 5 stars rating'),
(8, 'Maple Leong', 'mapleleong@gmail.com', '011-83433433', 'Thank you for the service'),
(9, 'Layman Low', 'laymanlow@gmail.com', '019-1231231', 'wefwf wef wef we wef fe wef wfe '),
(11, 'Tino Loh', 'tinoloh@gmail.com', '016-2394033', 'How are u'),
(12, 'Tammy Xio', 'tammyxio@gmail.com', '019-3453222', 'Hjiojewf wef wfe w '),
(13, 'Infinite Lee', 'infinitelee@gmail.com', '012-4242422', 'Tweor werw wer wer '),
(14, 'Hexa Lee', 'huiewf@gmail.com', '015-2324234', 'Tewr we we we '),
(15, 'Supper Low', 'supperlow@gmail.com', '012-1231111', 'Test'),
(16, 'Teknical Lee', 'teknicaklee@gmail.com', '017-4535333', 'Few we wef ef ef ef e ewEFfe f  '),
(18, 'Joe Xin Yi', 'joexinyi@gmail.com', '012-4034323', 'Very Excellent Service provided'),
(19, 'Texas Lee', 'texaslee@gmail.com', '017-9002422', 'Very Good'),
(20, 'Tina Low', 'tinalow@gmail.com', '011-89353422', 'Very good'),
(21, 'Lee Xia', 'leexia@gmail.com', '016-2904211', 'fjweffwefwf'),
(24, 'Queenie Lean', 'queenielean@gmail.com', '017-2093242', 'queenielimena we we '),
(25, 'Joe Yan Chun', 'joeyanchun@gmail.com', '017-2942032', 'Very nice website, everyone should join');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
