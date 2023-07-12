-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2016 at 11:25 AM
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
-- Table structure for table `tb_seasons`
--

CREATE TABLE IF NOT EXISTS `tb_seasons` (
  `seasonID` varchar(4) NOT NULL,
  `seasonName` text NOT NULL,
  `seasonShortName` text NOT NULL,
  PRIMARY KEY (`seasonID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_seasons`
--

INSERT INTO `tb_seasons` (`seasonID`, `seasonName`, `seasonShortName`) VALUES
('08s', 'Summer 2008', 'Summer ''08'),
('09w', 'Winter 2009', 'Winter ''09'),
('10s', 'Summer 2010', 'Summer ''10'),
('10w', 'Winter 2010', 'Winter ''10'),
('11s', 'Summer 2011', 'Summer ''11'),
('11w', 'Winter 2011', 'Winter ''11'),
('12s', 'Summer 2012', 'Summer ''12'),
('12w', 'Winter 2012', 'Winter ''12'),
('13s', 'Summer 2013', 'Summer ''13'),
('13w', 'Winter 2013', 'Winter ''13'),
('14s', 'Summer 2014', 'Summer ''14'),
('14w', 'Winter 2014', 'Winter ''14'),
('15s', 'Summer 2015', 'Summer ''15'),
('15w', 'Winter 2015', 'Winter ''15'),
('16s', 'Summer 2016', 'Summer ''16');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
