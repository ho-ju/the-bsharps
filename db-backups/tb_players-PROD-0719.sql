-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jul 19, 2016 at 04:15 AM
-- Server version: 10.0.20-MariaDB-cll-lve
-- PHP Version: 5.4.31

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

INSERT INTO `tb_players` (`PID`, `PName`, `image`, `pno`, `pos`, `posAbbr`, `height`, `weight`, `dob`, `years`, `clubs`, `active`) VALUES
(1, 'Anthony Alsop', 'img/profile-aa.jpg', 9, 'SG/SF/PF', 'SG', '6''1 (185cm)', 73, '1985-10-02', 14, 'Bulleen Boomers, Balwyn Blazers, The B Sharps', 1),
(2, 'Simon Gilligan', 'img/profile-sg.jpg', 22, '', 'C', '', 0, '0000-00-00', 0, '', 0),
(3, 'Matthew Fabry', 'img/profile-mf.jpg', 11, 'Power Forward', 'C', '6''5 (195cm)', 93, '1986-02-05', 14, 'Balwyn Blazers, Bulleen, Melbourne Uni, The B-Sharps', 1),
(4, 'James Ho', 'img/profile-jh.jpg', 20, 'Point Guard', 'PG', '5''10 (178cm)', 64, '1986-05-14', 15, 'Balwyn Blazers, Camberwell Dragons, The B-Sharps', 1),
(5, 'Kevin Kwan', 'img/profile-kk.jpg', 21, 'Point Guard', 'PG', '5''6(168cm)', 75, '1986-04-09', 16, 'Balwyn Blazers, Bulleen, Deloitte, The B-Sharps', 0),
(6, 'Nick Overton', 'img/profile-no.jpg', 10, 'Forward / Centre', 'PF', '6''3 (190cm)', 112, '1986-03-13', 13, 'Bulleen Boomers, Balwyn Blazers, Veneto, The B Sharps', 0),
(7, 'Chris Reid', 'img/profile-cr.jpg', 15, 'Forward', 'F', '6''2 (188cm)', 77, '1986-02-21', 15, 'Balwyn Blazers, Camberwell Dragons, The B-Sharps', 1),
(8, 'Lachlan Taylor', 'img/profile-lt.jpg', 23, 'Guard', 'F', '6''1(185cm)', 80, '1985-11-11', 14, 'Balwyn Blazers, The B-Sharps', 1),
(9, 'Cam Dix', 'img/profile-tc.jpg', 1, '', 'G', '', 0, '0000-00-00', 0, '', 1),
(10, 'John Twomey', 'img/profile-jha.jpg', 2, '', 'F', '', 0, '0000-00-00', 0, '', 0),
(11, 'Chief Wiggum', 'img/profile-jha.jpg', 55, '', 'F', '', 0, '0000-00-00', 0, '', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
