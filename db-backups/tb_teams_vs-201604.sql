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
-- Table structure for table `tb_teams_vs`
--

CREATE TABLE IF NOT EXISTS `tb_teams_vs` (
  `TID` int(2) NOT NULL,
  `TeamName` varchar(60) NOT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`TID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_teams_vs`
--

INSERT INTO `tb_teams_vs` (`TID`, `TeamName`, `date`) VALUES
(1, 'THE B-SHARPS', NULL),
(2, 'Bucs', NULL),
(3, 'Dragons', NULL),
(4, 'Filthy Monkies', NULL),
(5, 'Manjits', NULL),
(6, 'Media Penetration', NULL),
(7, 'Planeteers', NULL),
(8, 'Ravens', NULL),
(9, 'Tigers', NULL),
(17, 'Draft Class 2010', NULL),
(10, 'Double Beef and Cheese', '0000-00-00'),
(11, 'Team Crazi Legs', '0000-00-00'),
(12, 'Pistons', '0000-00-00'),
(15, 'Cool Runnings', NULL),
(13, 'Team Q', NULL),
(18, 'Refits', NULL),
(19, 'Fill Ins', NULL),
(20, 'Mavens', NULL),
(21, 'Wasps', NULL),
(22, 'Passtodamo', NULL),
(23, 'Freeballers', NULL),
(24, 'Boogie Nights', NULL),
(25, 'Bulls', NULL),
(26, 'Patrick Chewing', NULL),
(27, 'Triple Double', NULL),
(28, 'Paco', NULL),
(29, 'Jumanji', NULL),
(30, 'Lotalager', NULL),
(31, 'Maniacs', NULL),
(32, 'Multiple Scorgasms', NULL),
(33, 'Playaz', '2011-10-12'),
(34, 'Your Mother Approves', NULL),
(35, 'TMV', NULL),
(36, 'Morgan''s Phantoms', NULL),
(37, '6th Man', NULL),
(38, 'Sam Waldren', NULL),
(39, 'Supersonic Knickerbockers', NULL),
(40, 'Team Kemp', NULL),
(41, 'CBM', NULL),
(42, 'Eza', NULL),
(43, 'Upper East Side', NULL),
(44, 'Inbetweeners', NULL),
(45, 'Hoop Dreams', NULL),
(46, 'Killer Bees', NULL),
(49, 'SYFCBC Dreams', NULL),
(47, 'The Bricklayers', NULL),
(48, 'Koonung', NULL),
(0, 'Deepdene 3103ers', NULL),
(50, 'Deepdene 3103ers', NULL),
(51, 'BFBA', NULL),
(52, 'A Nu Start', NULL),
(53, 'Ex Presidents', NULL),
(54, 'Team X-Treme', NULL),
(55, 'Bullies', NULL),
(56, 'Chan Man & Sons', NULL),
(57, 'Curdled Milk', NULL),
(58, 'Zone Busters', NULL),
(59, 'Tog', NULL),
(60, 'Anne Fadeaways', NULL),
(61, 'Occupy the Paint', NULL),
(63, 'Banterbury Cougars', NULL),
(64, 'Proper Protein', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
