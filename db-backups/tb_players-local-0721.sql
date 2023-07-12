-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2016 at 11:20 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `thebsha1_ladder`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_players`
--

CREATE TABLE IF NOT EXISTS `tb_players` (
  `PID` int(1) NOT NULL,
  `PName` varchar(40) NOT NULL,
  `PNameFirst` varchar(25) NOT NULL,
  `PNameLast` varchar(25) NOT NULL,
  `pNickName` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `image` varchar(60) NOT NULL,
  `pno` int(3) NOT NULL,
  `pos` varchar(60) NOT NULL,
  `posAbbr` varchar(2) NOT NULL,
  `height` varchar(20) NOT NULL,
  `weight` int(3) NOT NULL,
  `dob` date NOT NULL,
  `years` int(3) NOT NULL,
  `clubs` varchar(350) NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`PID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_players`
--

INSERT INTO `tb_players` (`PID`, `PName`, `PNameFirst`, `PNameLast`, `pNickName`, `url`, `image`, `pno`, `pos`, `posAbbr`, `height`, `weight`, `dob`, `years`, `clubs`, `active`) VALUES
(1, 'Anthony Alsop', 'A', 'Alsop', 'Sloppy', 'anthony-alsop', 'aa', 9, 'Shooting Guard', 'SG', '6''1 (185cm)', 73, '1985-10-02', 14, 'Bulleen Boomers, Balwyn Blazers, The B Sharps', 1),
(2, 'Simon Gilligan', 'S', 'Gilligan', 'Gil', 'simon-gilligan', 'sg', 22, 'Center', 'C', '', 0, '0000-00-00', 0, '', 0),
(3, 'Matthew Fabry', 'M', 'Fabry', 'Fabs', 'matthew-fabry', 'mf', 11, 'Center', 'C', '6''5 (195cm)', 93, '1986-02-05', 14, 'Balwyn Blazers, Bulleen, Melbourne Uni, The B-Sharps', 1),
(4, 'James Ho', 'J', 'Ho', 'Ho', 'james-ho', 'jh', 20, 'Point Guard', 'PG', '5''10 (178cm)', 64, '1986-05-14', 15, 'Balwyn Blazers, Camberwell Dragons, The B-Sharps', 1),
(5, 'Kevin Kwan', 'K', 'Kwan', 'Special K', 'kevin-kwan', 'kk', 21, 'Point Guard', 'PG', '5''6 (168cm)', 75, '1986-04-09', 16, 'Balwyn Blazers, Bulleen, Deloitte, The B-Sharps', 0),
(6, 'Nick Overton', 'N', 'Overton', 'Ovo', 'nick-overton', 'no', 10, 'Power Forward', 'PF', '6''3 (190cm)', 112, '1986-03-13', 13, 'Bulleen Boomers, Balwyn Blazers, Veneto, The B Sharps', 0),
(7, 'Chris Reid', 'C', 'Reid', 'Reid', 'chris-reid', 'cr', 15, 'Forward', 'F', '6''2 (188cm)', 77, '1986-02-21', 15, 'Balwyn Blazers, Camberwell Dragons, The B-Sharps', 1),
(8, 'Lachlan Taylor', 'L', 'Taylor', 'L.T.', 'lachlan-taylor', 'lt', 23, 'Forward', 'F', '6''1(185cm)', 80, '1985-11-11', 14, 'Balwyn Blazers, The B-Sharps', 1),
(9, 'Cam Dix', 'C', 'Dix', 'Cam', 'cam-dix', 'cd', 1, 'Guard', 'G', '', 0, '0000-00-00', 0, '', 1),
(10, 'Barney Gumble', 'B', 'Gumble', 'Barney', 'barney-gumble', '', 2, 'Forward', 'F', '', 0, '0000-00-00', 0, '', 0),
(11, 'Chief Wiggum', 'C', 'Wiggum', 'Wiggum', 'chief-wiggum', '', 55, 'Forward', 'F', '', 0, '0000-00-00', 0, '', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
