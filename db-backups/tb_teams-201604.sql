-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 16, 2016 at 04:58 PM
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
-- Table structure for table `tb_teams`
--

CREATE TABLE IF NOT EXISTS `tb_teams` (
  `TID` int(2) NOT NULL,
  `TeamName` varchar(60) NOT NULL,
  PRIMARY KEY (`TID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_teams`
--

INSERT INTO `tb_teams` (`TID`, `TeamName`) VALUES
(1, 'THE B-SHARPS'),
(2, 'Bucs'),
(3, 'Dragons'),
(4, 'Filthy Monkies'),
(5, 'Manjits'),
(6, 'Media Penetration'),
(7, 'Planeteers'),
(8, 'Ravens'),
(9, 'Tigers'),
(10, 'Double Beef and Cheese'),
(11, 'Team Crazi Legs'),
(12, 'Pistons'),
(17, 'Draft Class 2010'),
(15, 'Cool Runnings'),
(13, 'Team Q'),
(18, 'Refits'),
(19, 'Fill Ins'),
(20, 'Mavens'),
(21, 'Wasps'),
(22, 'Passtodamo'),
(23, 'Freeballers'),
(24, 'Boogie Nights'),
(25, 'Bulls'),
(26, 'Patrick Chewing'),
(27, 'Triple Double'),
(28, 'Paco'),
(29, 'Jumanji'),
(30, 'Lotalager'),
(31, 'Maniacs'),
(32, 'Multiple Scorgasms'),
(34, 'Your Mother Approves'),
(33, 'Playaz'),
(37, '6th Man'),
(35, 'TMV'),
(36, 'Morgan''s Phantoms'),
(38, 'Sam Waldren'),
(39, 'Supersonic Knickerbockers'),
(40, 'Team Kemp'),
(41, 'CBM'),
(42, 'Ezra'),
(43, 'Upper East Side'),
(44, 'Inbetweeners'),
(45, 'Hoop Dreams'),
(46, 'Killer Bees'),
(49, 'SYFCBC Dreams'),
(47, 'The Bricklayers'),
(48, 'Koonung'),
(50, 'Deepdene 3103ers'),
(52, 'A Nu Start'),
(51, 'BFBA'),
(53, 'Ex Presidents'),
(54, 'Team X-Treme'),
(55, 'Bullies'),
(56, 'Chan Man & Sons'),
(57, 'Curdled Milk'),
(58, 'Zone Busters'),
(59, 'Tog'),
(0, 'Anne Fadeaways'),
(60, 'Anne Fadeaways'),
(61, 'Occupy the Paint'),
(63, 'Banterbury Cougars'),
(64, 'Proper Protein');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
