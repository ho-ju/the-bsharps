-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2016 at 07:02 PM
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
-- Table structure for table `tb_leagues`
--

CREATE TABLE IF NOT EXISTS `tb_leagues` (
  `comp` varchar(4) NOT NULL,
  `leagueName` varchar(30) NOT NULL,
  `leagueAbbr` varchar(4) NOT NULL,
  `leagueVenue` varchar(30) NOT NULL,
  PRIMARY KEY (`comp`),
  UNIQUE KEY `comp` (`comp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_leagues`
--

INSERT INTO `tb_leagues` (`comp`, `leagueName`, `leagueAbbr`, `leagueVenue`) VALUES
('BHS', 'Thursday Night', 'BHS', 'BHS'),
('BHS2', 'Sunday Night', 'BHS2', 'BHS');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
