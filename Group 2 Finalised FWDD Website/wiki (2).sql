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
-- Table structure for table `wiki`
--

DROP TABLE IF EXISTS `wiki`;
CREATE TABLE IF NOT EXISTS `wiki` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `wikititle` varchar(100) NOT NULL,
  `wiki` varchar(20000) NOT NULL,
  `LastUpdate` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=115 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wiki`
--

INSERT INTO `wiki` (`ID`, `wikititle`, `wiki`, `LastUpdate`) VALUES
(2, 'How to reduce syntax error', '1. How to reduce syntax error\r\n\r\n2. How to improve readibility\r\n\r\n3. How to improve the coding efficiency?\r\n\r\n4. How to improve coding?\r\n    Practise more, practice makes perfect.\r\n\r\n5. Testing only e r r r \r\n1. How to reduce syntax error\r\n\r\n2. How to improve readibility\r\n\r\n3. How to improve the coding efficiency?\r\n\r\n4. How to improve coding?\r\n    Practise more, practice makes perfect.\r\n\r\n5. Testing only e r r r \r\n1. How to reduce syntax error\r\n\r\n2. How to improve readibility\r\n\r\n3. How to improve the coding efficiency?\r\n\r\n4. How to improve coding?\r\n    Practise more, practice makes perfect.\r\n\r\n5. Testing only e r r r 1. How to reduce syntax error\r\n\r\n2. How to improve readibility\r\nj\r\n3. How to improve the coding efficiency?\r\n\r\n4. How to improve coding?\r\n    Practise more, practice makes perfect.\r\n\r\n5. Testing only e r r r 1. How to reduce syntax error\r\n\r\n2. How to improve readibility\r\n\r\n3. How to improve the coding efficiency?\r\n\r\n4. How to improve coding?\r\n    Practise more, practice makes perfect.\r\n\r\n5. Testing only e r r r 1. How to reduce syntax error\r\n\r\n2. How to improve readibility\r\n\r\n3. How to improve the coding efficiency?\r\n\r\n4. How to improve coding?\r\n    Practise more, practice makes perfect.\r\n\r\n5. Testing only e r r r 1. How to reduce syntax error\r\n\r\n2. How to improve readibility\r\n\r\n3. How to improve the coding efficiency?\r\n\r\n4. How to improve coding?\r\n    Practise more, practice makes perfect.\r\n\r\n5. Testing only e r r r 1. How to reduce syntax error\r\n\r\n2. How to improve readibility\r\n\r\n3. How to improve the coding efficiency?\r\n\r\n4. How to improve coding?\r\n    Practise more, practice makes perfect.\r\n\r\n5. Testing only e r r r 1. How to reduce syntax error\r\n\r\n2. How to improve readibility\r\n\r\n3. How to improve the coding efficiency?\r\n\r\n4. How to improve coding?\r\n    Practise more, practice makes perfect.\r\n\r\n5. Testing only e r r r 1. How to reduce syntax error\r\n\r\n2. How to improve readibility\r\n\r\n3. How to improve the coding efficiency?\r\n\r\n4. How to improve coding?\r\n    Practise more, practice makes perfect.\r\n\r\n5. Testing only e r r r 1. How to reduce syntax error\r\n\r\n2. How to improve readibility\r\n\r\n3. How to improve the coding efficiency?\r\n\r\n4. How to improve coding?\r\n    Practise more, practice makes perfect.\r\n\r\n5. Testing only e r r r 1. How to reduce syntax error\r\n\r\n2. How to improve readibility\r\n\r\n3. How to improve the coding efficiency?\r\n\r\n4. How to improve coding?\r\n    Practise more, practice makes perfect.\r\n\r\n5. Testing only e r r r 1. How to reduce syntax error\r\n\r\n2. How to improve readibility\r\n\r\n3. How to improve the coding efficiency?\r\n\r\n4. How to improve coding?\r\n    Practise more, practice makes perfect.\r\n\r\n5. Testing only e r r r 1. How to reduce syntax error\r\n\r\n2. How to improve readibility\r\n\r\n3. How to improve the coding efficiency?\r\n\r\n4. How to improve coding?\r\n    Practise more, practice makes perfect.\r\n\r\n5. Testing only e r r r 1. How to reduce syntax error\r\n\r\n2. How to improve readibility\r\n\r\n3. How to improve the coding efficiency?\r\n\r\n4. How to improve coding?\r\n    Practise more, practice makes perfect.\r\n\r\n5. Testing only e r r r 1. How to reduce syntax error\r\n\r\n2. How to improve readibility\r\n\r\n3. How to improve the coding efficiency?\r\n\r\n4. How to improve coding?\r\n    Practise more, practice makes perfect.\r\n\r\n5. Testing only e r r r 1. How to reduce syntax error\r\n\r\n2. How to improve readibility\r\n\r\n3. How to improve the coding efficiency?\r\n\r\n4. How to improve coding?\r\n    Practise more, practice makes perfect.\r\n\r\n5. Testing only e r r r 1. How to reduce syntax error\r\n\r\n2. How to improve readibility\r\n\r\n3. How to improve the coding efficiency?\r\n\r\n4. How to improve coding?\r\n    Practise more, practice makes perfect.\r\n\r\n5. Testing only e r r r 1. How to reduce syntax error\r\n\r\n2. How to improve readibility\r\n\r\n3. How to improve the coding efficiency?\r\n\r\n4. How to improve coding?\r\n    Practise more, practice makes perfect.\r\n\r\n5. Testing only e r r r 1. How to reduce syntax error\r\n\r\n2. How to improve readibility\r\n\r\n3. How to improve the coding efficiency?\r\n\r\n4. How to improve coding?\r\n    Practise more, practice makes perfect.\r\n\r\n5. Testing only e r r r 1. How to reduce syntax error\r\n\r\n2. How to improve readibility\r\n\r\n3. How to improve the coding efficiency?\r\n\r\n4. How to improve coding?\r\n    Practise more, practice makes perfect.\r\n\r\n5. Testing only e r r r 1. How to reduce syntax error\r\n\r\n2. How to improve readibility', 'Simon Leong'),
(3, 'How to improve confidence', 'Practise more \r\n\r\nRelax \r\nChill re er er er e r greegergeg weewrwer werwe rwr wer wer erw rw rwr wer wr wre wr  wer wer wre wre  erere r er er e  er er er e \r\n\r\n\r\n\r\ne re er er er etet 4t t 4 t t 4 4   e r er er er Joe Yan Chun', 'Joe Yan Chun&nbsp;&nbsp;27-05-2022 03:41pm'),
(4, 'How to score well in exams without studying', 'Testing 13\r\nPls work \r\nPLSSLSLLSSv d d dv d vv d dddd d dv r r r r \r\n\r\nfwefwf e w er wr ewewe wer wr wr wer wer w rwer wer wr wer wer wr rg gr r r rg r  r r rr rr r r  df dfdfdfdvfvdfvdv f f f wer wer wer wer er hello there ewrwer we we w e ', 'admin&nbsp;&nbsp;31-05-2022 03:54am'),
(6, 'How to sleep well?', 'ert ert ert \r\ne rtt  Show me the name thanks r  r r r r r r r r r r r r r r r r r r r \r\ner tert  r rr rr r   re r e r er ', 'admin&nbsp;&nbsp;26-05-2022 07:00pm'),
(7, 'How Daniel become so good in coding?', 'Code everyday\r\n\r\nDetermination\r\n\r\nPassion :)gregeg reererer efefeefefef ewr wer ewwee e e e e', 'Simon Leong'),
(8, 'How to invest with 100% profitability', '1. Keep yourself up to date with news oiwfjoifwei ewf wef wefwe ewf w e w wef wf w \r\n1. Keep yourself up to date with news oiwfjoifwei ewf wef wefwe ewf w e w wef wf w \r\n1. Keep yourself up to date with news oiwfjoifwei ewf wef wefwe ewf w e w wef wf w \r\n1. Keep yourself up to date with news oiwfjoifwei ewf wef wefwe ewf w e w wef wf w 1. Keep yourself up to date with news oiwfjoifwei ewf wef wefwe ewf w e w wef wf w 1. Keep yourself up to date with news oiwfjoifwei ewf wef wefwe ewf w e w wef wf w 1. Keep yourself up to date with news oiwfjoifwei ewf wef wefwe ewf w e w wef wf w 1. Keep yourself up to date with news oiwfjoifwei ewf wef wefwe ewf w e w wef wf w 1. Keep yourself up to date with news oiwfjoifwei ewf wef wefwe ewf w e w wef wf w 1. Keep wei ewf wef wefwe ewf w e w wef wf w 1. Keep yourself up to date with news oiwfjoifwei ewf wef wefwe ewf w e w wef wf w 1. Keep yourself up to date with news oiwfjoifwei ewf wef wefwe ewf w e w wef wf w 1. Keep yourself up to date with news oiwfjoifwei ewf wef wefwe ewf w e w wef wf w 1. Keep yourself up to date with news oiwfjoifwei ewf wef wefwe ewf w e w wef wf w 1. Keep yourself up to date with news oiwfjoifwei ewf wef wefwe ewf w e w wef wf w 1. Keep yourself up to date with news oiwfjoifwei ewf wef wefwe ewf w e cw wef wf w 1. Keep yourself up to date with news oiwfjoifwei ewf wef wefwe ewf w e w wef wf w 1. Keep yourself up to date with news oiwfjoifwei ewf wef wefwe ewf w e w wef wf w 1. Keep yourself up to date with news oiwfjoifwei ewf wef wefwe ewf w e w wef wf w 1. Keep yourself up to date with news oiwfjoifwei ewf wef wefwe ewf w e w wef wf w 1. Keep yourself up to date with news oiwfjoifwei ewf wef wefwe ewf w e w wef wf w 1. Keep yourself up to date with news oiwfjoifwei ewf wef wefwe ewf w e w wef wf w 1. Keep yourself up to date with news oiwfjoifwei ewf wef wefwe ewf w e w wef wf w 1. Keep yourself up to date with news oiwfjoifwei ewf wef wefwe ewf w e w wef wf w 1. Keep yourself up to date with news oiwfjoifwei ewf wef wefwe ewf w e w wef wf w 1. Keep yourself up to date with news oiwfjoifwei ewf wef wefwe ewf w e w wef wf w 1. Keep yourself up to date with news oiwfjoifwei ewf wef wefwe ewf w e w wef wf w 1. Keep yourself up to date with news oiwfjoifwei ewf wef wefwe ewf w e w wef wf w 1. Keep yourself up to date with news oiwfjoifwei ewf wef wefwe ewf w e w wef wf w 1. Keep yourself up to date with news oiwfjoifwei ewf wef wefwe ewf w e w wef wf w 1. Keep yourself up to date with news oiwfjoifwei ewf wef wefwe ewf w e w wef wf w 1. Keep yourself up to date with news oiwfjoifwei ewf wef wefwe ewf w e w wef wf w 1. Keep yourself up to date with news oiwfjoifwei ewf wef wefwe ewf w e w wef wf w 1. Keep yourself up to date with news oiwfjoifwei ewf wef wefwe ewf w e w wef wf w 1. Keep yourself up to date with news oiwfjoifwei ewf wef wefwe ewf w e w wef wf w 1. Keep yourself up to date with news oiwfjoifwei ewf wef wefwe ewf w e w wef wf w 1. Keep yourself up to date with news oiwfjoifwei ewf wef wefwe ewf w e w wef wf w 1. Keep yourself up to date with news oiwfjoifwei ewf wef wefwe ewf w e w wef wf w 1. Keep yourself up to date with news oiwfjoifwei ewf wef wefwe ewf w e w wef wf w 1. Keep yourself up to date with news oiwfjoifwei ewf wef wefwe ewf w e w wef wf w 1. Keep yourself up to date with news oiwfjoifwei ewf wef wefwe ewf w e w wef wf w 1.', 'admin&nbsp;&nbsp;26-05-2022 06:48pm'),
(75, 'Why global warming is happening', '', 'Admin'),
(82, 'How to be fit', 'Frequent exercise\r\n\r\nSleep adequately', 'Final Testing&nbsp;&nbsp;31-05-2022 01:16pm'),
(112, 'How to do things efficiently', '', ''),
(113, 'How to eat healthily', '1. Eat a balanced diet', 'admin&nbsp;&nbsp;31-05-2022 03:54am'),
(114, 'How to be a smart purchaser?', 'Spend Wisely\r\n\r\nBuy in bulks depend on situation', 'admin&nbsp;&nbsp;31-05-2022 01:26pm');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
