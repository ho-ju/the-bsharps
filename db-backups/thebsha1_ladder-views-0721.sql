-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2016 at 11:00 PM
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
-- Stand-in structure for view `view_player_rankings`
--
CREATE TABLE IF NOT EXISTS `view_player_rankings` (
`image` varchar(60)
,`pname` varchar(40)
,`PID` int(1)
,`gmsPlayed` double
,`TtlPts` double
,`Ttl3pts` double
,`TtlFTM` double
,`TtlFTA` double
,`ttlMFT` double
,`FTP` decimal(37,4)
,`TtlFouls` double
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_player_rankings_finals`
--
CREATE TABLE IF NOT EXISTS `view_player_rankings_finals` (
`image` varchar(60)
,`pname` varchar(40)
,`PID` int(1)
,`gmsPlayed` double
,`TtlPts` double
,`Ttl3pts` double
,`TtlFTM` double
,`TtlFTA` double
,`ttlMFT` double
,`FTP` decimal(37,4)
,`TtlFouls` double
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_player_rankings_s08s_bhs`
--
CREATE TABLE IF NOT EXISTS `view_player_rankings_s08s_bhs` (
`image` varchar(60)
,`pname` varchar(40)
,`PID` int(1)
,`gmsPlayed` double
,`TtlPts` double
,`Ttl3pts` double
,`TtlFTM` double
,`TtlFTA` double
,`ttlMFT` double
,`FTP` decimal(37,4)
,`TtlFouls` double
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_player_rankings_s09w_bhs`
--
CREATE TABLE IF NOT EXISTS `view_player_rankings_s09w_bhs` (
`image` varchar(60)
,`pname` varchar(40)
,`PID` int(1)
,`gmsPlayed` double
,`TtlPts` double
,`Ttl3pts` double
,`TtlFTM` double
,`TtlFTA` double
,`ttlMFT` double
,`FTP` decimal(37,4)
,`TtlFouls` double
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_player_rankings_s10s_bhs`
--
CREATE TABLE IF NOT EXISTS `view_player_rankings_s10s_bhs` (
`image` varchar(60)
,`pname` varchar(40)
,`PID` int(1)
,`gmsPlayed` double
,`TtlPts` double
,`Ttl3pts` double
,`TtlFTM` double
,`TtlFTA` double
,`ttlMFT` double
,`FTP` decimal(37,4)
,`TtlFouls` double
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_player_rankings_s10w_all`
--
CREATE TABLE IF NOT EXISTS `view_player_rankings_s10w_all` (
`image` varchar(60)
,`pname` varchar(40)
,`PID` int(1)
,`gmsPlayed` double
,`TtlPts` double
,`Ttl3pts` double
,`TtlFTM` double
,`TtlFTA` double
,`ttlMFT` double
,`FTP` decimal(37,4)
,`TtlFouls` double
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_player_rankings_s10w_bhs`
--
CREATE TABLE IF NOT EXISTS `view_player_rankings_s10w_bhs` (
`image` varchar(60)
,`pname` varchar(40)
,`PID` int(1)
,`gmsPlayed` double
,`TtlPts` double
,`Ttl3pts` double
,`TtlFTM` double
,`TtlFTA` double
,`ttlMFT` double
,`FTP` decimal(37,4)
,`TtlFouls` double
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_player_rankings_s10w_bhs2`
--
CREATE TABLE IF NOT EXISTS `view_player_rankings_s10w_bhs2` (
`image` varchar(60)
,`pname` varchar(40)
,`PID` int(1)
,`gmsPlayed` double
,`TtlPts` double
,`Ttl3pts` double
,`TtlFTM` double
,`TtlFTA` double
,`ttlMFT` double
,`FTP` decimal(37,4)
,`TtlFouls` double
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_player_rankings_s11s_all`
--
CREATE TABLE IF NOT EXISTS `view_player_rankings_s11s_all` (
`image` varchar(60)
,`pname` varchar(40)
,`PID` int(1)
,`gmsPlayed` double
,`TtlPts` double
,`Ttl3pts` double
,`TtlFTM` double
,`TtlFTA` double
,`ttlMFT` double
,`FTP` decimal(37,4)
,`TtlFouls` double
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_player_rankings_s11s_bhs`
--
CREATE TABLE IF NOT EXISTS `view_player_rankings_s11s_bhs` (
`image` varchar(60)
,`pname` varchar(40)
,`PID` int(1)
,`gmsPlayed` double
,`TtlPts` double
,`Ttl3pts` double
,`TtlFTM` double
,`TtlFTA` double
,`ttlMFT` double
,`FTP` decimal(37,4)
,`TtlFouls` double
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_player_rankings_s11s_bhs2`
--
CREATE TABLE IF NOT EXISTS `view_player_rankings_s11s_bhs2` (
`image` varchar(60)
,`pname` varchar(40)
,`PID` int(1)
,`gmsPlayed` double
,`TtlPts` double
,`Ttl3pts` double
,`TtlFTM` double
,`TtlFTA` double
,`ttlMFT` double
,`FTP` decimal(37,4)
,`TtlFouls` double
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_player_rankings_s11w_all`
--
CREATE TABLE IF NOT EXISTS `view_player_rankings_s11w_all` (
`image` varchar(60)
,`pname` varchar(40)
,`PID` int(1)
,`gmsPlayed` double
,`TtlPts` double
,`Ttl3pts` double
,`TtlFTM` double
,`TtlFTA` double
,`ttlMFT` double
,`FTP` decimal(37,4)
,`TtlFouls` double
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_player_rankings_s11w_bhs`
--
CREATE TABLE IF NOT EXISTS `view_player_rankings_s11w_bhs` (
`image` varchar(60)
,`pname` varchar(40)
,`PID` int(1)
,`gmsPlayed` double
,`TtlPts` double
,`Ttl3pts` double
,`TtlFTM` double
,`TtlFTA` double
,`ttlMFT` double
,`FTP` decimal(37,4)
,`TtlFouls` double
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_player_rankings_s11w_bhs2`
--
CREATE TABLE IF NOT EXISTS `view_player_rankings_s11w_bhs2` (
`image` varchar(60)
,`pname` varchar(40)
,`PID` int(1)
,`gmsPlayed` double
,`TtlPts` double
,`Ttl3pts` double
,`TtlFTM` double
,`TtlFTA` double
,`ttlMFT` double
,`FTP` decimal(37,4)
,`TtlFouls` double
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_player_rankings_s12s_all`
--
CREATE TABLE IF NOT EXISTS `view_player_rankings_s12s_all` (
`image` varchar(60)
,`pname` varchar(40)
,`PID` int(1)
,`gmsPlayed` double
,`TtlPts` double
,`Ttl3pts` double
,`TtlFTM` double
,`TtlFTA` double
,`ttlMFT` double
,`FTP` decimal(37,4)
,`TtlFouls` double
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_player_rankings_s12s_bhs`
--
CREATE TABLE IF NOT EXISTS `view_player_rankings_s12s_bhs` (
`image` varchar(60)
,`pname` varchar(40)
,`PID` int(1)
,`gmsPlayed` double
,`TtlPts` double
,`Ttl3pts` double
,`TtlFTM` double
,`TtlFTA` double
,`ttlMFT` double
,`FTP` decimal(37,4)
,`TtlFouls` double
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_player_rankings_s12s_bhs2`
--
CREATE TABLE IF NOT EXISTS `view_player_rankings_s12s_bhs2` (
`image` varchar(60)
,`pname` varchar(40)
,`PID` int(1)
,`gmsPlayed` double
,`TtlPts` double
,`Ttl3pts` double
,`TtlFTM` double
,`TtlFTA` double
,`ttlMFT` double
,`FTP` decimal(37,4)
,`TtlFouls` double
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_player_rankings_s12w_all`
--
CREATE TABLE IF NOT EXISTS `view_player_rankings_s12w_all` (
`image` varchar(60)
,`pname` varchar(40)
,`PID` int(1)
,`gmsPlayed` double
,`TtlPts` double
,`Ttl3pts` double
,`TtlFTM` double
,`TtlFTA` double
,`ttlMFT` double
,`FTP` decimal(37,4)
,`TtlFouls` double
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_player_rankings_s12w_bhs`
--
CREATE TABLE IF NOT EXISTS `view_player_rankings_s12w_bhs` (
`image` varchar(60)
,`pname` varchar(40)
,`PID` int(1)
,`gmsPlayed` double
,`TtlPts` double
,`Ttl3pts` double
,`TtlFTM` double
,`TtlFTA` double
,`ttlMFT` double
,`FTP` decimal(37,4)
,`TtlFouls` double
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_player_rankings_s12w_bhs2`
--
CREATE TABLE IF NOT EXISTS `view_player_rankings_s12w_bhs2` (
`image` varchar(60)
,`pname` varchar(40)
,`PID` int(1)
,`gmsPlayed` double
,`TtlPts` double
,`Ttl3pts` double
,`TtlFTM` double
,`TtlFTA` double
,`ttlMFT` double
,`FTP` decimal(37,4)
,`TtlFouls` double
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_player_rankings_s13s_all`
--
CREATE TABLE IF NOT EXISTS `view_player_rankings_s13s_all` (
`image` varchar(60)
,`pname` varchar(40)
,`PID` int(1)
,`gmsPlayed` double
,`TtlPts` double
,`Ttl3pts` double
,`TtlFTM` double
,`TtlFTA` double
,`ttlMFT` double
,`FTP` decimal(37,4)
,`TtlFouls` double
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_player_rankings_s13s_bhs`
--
CREATE TABLE IF NOT EXISTS `view_player_rankings_s13s_bhs` (
`image` varchar(60)
,`pname` varchar(40)
,`PID` int(1)
,`gmsPlayed` double
,`TtlPts` double
,`Ttl3pts` double
,`TtlFTM` double
,`TtlFTA` double
,`ttlMFT` double
,`FTP` decimal(37,4)
,`TtlFouls` double
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_player_rankings_s13s_bhs2`
--
CREATE TABLE IF NOT EXISTS `view_player_rankings_s13s_bhs2` (
`image` varchar(60)
,`pname` varchar(40)
,`PID` int(1)
,`gmsPlayed` double
,`TtlPts` double
,`Ttl3pts` double
,`TtlFTM` double
,`TtlFTA` double
,`ttlMFT` double
,`FTP` decimal(37,4)
,`TtlFouls` double
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_player_rankings_s13w_all`
--
CREATE TABLE IF NOT EXISTS `view_player_rankings_s13w_all` (
`image` varchar(60)
,`pname` varchar(40)
,`PID` int(1)
,`gmsPlayed` double
,`TtlPts` double
,`Ttl3pts` double
,`TtlFTM` double
,`TtlFTA` double
,`ttlMFT` double
,`FTP` decimal(37,4)
,`TtlFouls` double
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_player_rankings_s13w_bhs`
--
CREATE TABLE IF NOT EXISTS `view_player_rankings_s13w_bhs` (
`image` varchar(60)
,`pname` varchar(40)
,`PID` int(1)
,`gmsPlayed` double
,`TtlPts` double
,`Ttl3pts` double
,`TtlFTM` double
,`TtlFTA` double
,`ttlMFT` double
,`FTP` decimal(37,4)
,`TtlFouls` double
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_player_rankings_s14s_all`
--
CREATE TABLE IF NOT EXISTS `view_player_rankings_s14s_all` (
`image` varchar(60)
,`pname` varchar(40)
,`PID` int(1)
,`gmsPlayed` double
,`TtlPts` double
,`Ttl3pts` double
,`TtlFTM` double
,`TtlFTA` double
,`ttlMFT` double
,`FTP` decimal(37,4)
,`TtlFouls` double
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_player_rankings_s14s_bhs`
--
CREATE TABLE IF NOT EXISTS `view_player_rankings_s14s_bhs` (
`image` varchar(60)
,`pname` varchar(40)
,`PID` int(1)
,`gmsPlayed` double
,`TtlPts` double
,`Ttl3pts` double
,`TtlFTM` double
,`TtlFTA` double
,`ttlMFT` double
,`FTP` decimal(37,4)
,`TtlFouls` double
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_player_rankings_s14w_all`
--
CREATE TABLE IF NOT EXISTS `view_player_rankings_s14w_all` (
`image` varchar(60)
,`pname` varchar(40)
,`PID` int(1)
,`gmsPlayed` double
,`TtlPts` double
,`Ttl3pts` double
,`TtlFTM` double
,`TtlFTA` double
,`ttlMFT` double
,`FTP` decimal(37,4)
,`TtlFouls` double
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_player_rankings_s14w_bhs`
--
CREATE TABLE IF NOT EXISTS `view_player_rankings_s14w_bhs` (
`image` varchar(60)
,`pname` varchar(40)
,`PID` int(1)
,`gmsPlayed` double
,`TtlPts` double
,`Ttl3pts` double
,`TtlFTM` double
,`TtlFTA` double
,`ttlMFT` double
,`FTP` decimal(37,4)
,`TtlFouls` double
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_player_rankings_s15s_all`
--
CREATE TABLE IF NOT EXISTS `view_player_rankings_s15s_all` (
`image` varchar(60)
,`pname` varchar(40)
,`PID` int(1)
,`gmsPlayed` double
,`TtlPts` double
,`Ttl3pts` double
,`TtlFTM` double
,`TtlFTA` double
,`ttlMFT` double
,`FTP` decimal(37,4)
,`TtlFouls` double
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_player_rankings_s15s_bhs`
--
CREATE TABLE IF NOT EXISTS `view_player_rankings_s15s_bhs` (
`image` varchar(60)
,`pname` varchar(40)
,`PID` int(1)
,`gmsPlayed` double
,`TtlPts` double
,`Ttl3pts` double
,`TtlFTM` double
,`TtlFTA` double
,`ttlMFT` double
,`FTP` decimal(37,4)
,`TtlFouls` double
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_player_rankings_s15w_all`
--
CREATE TABLE IF NOT EXISTS `view_player_rankings_s15w_all` (
`image` varchar(60)
,`pname` varchar(40)
,`PID` int(1)
,`gmsPlayed` double
,`TtlPts` double
,`Ttl3pts` double
,`TtlFTM` double
,`TtlFTA` double
,`ttlMFT` double
,`FTP` decimal(37,4)
,`TtlFouls` double
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_player_rankings_s15w_bhs`
--
CREATE TABLE IF NOT EXISTS `view_player_rankings_s15w_bhs` (
`image` varchar(60)
,`pname` varchar(40)
,`PID` int(1)
,`gmsPlayed` double
,`TtlPts` double
,`Ttl3pts` double
,`TtlFTM` double
,`TtlFTA` double
,`ttlMFT` double
,`FTP` decimal(37,4)
,`TtlFouls` double
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_player_rankings_s16s_all`
--
CREATE TABLE IF NOT EXISTS `view_player_rankings_s16s_all` (
`image` varchar(60)
,`pname` varchar(40)
,`PID` int(1)
,`gmsPlayed` double
,`TtlPts` double
,`Ttl3pts` double
,`TtlFTM` double
,`TtlFTA` double
,`ttlMFT` double
,`FTP` decimal(37,4)
,`TtlFouls` double
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_player_rankings_s16s_bhs`
--
CREATE TABLE IF NOT EXISTS `view_player_rankings_s16s_bhs` (
`image` varchar(60)
,`pname` varchar(40)
,`PID` int(1)
,`gmsPlayed` double
,`TtlPts` double
,`Ttl3pts` double
,`TtlFTM` double
,`TtlFTA` double
,`ttlMFT` double
,`FTP` decimal(37,4)
,`TtlFouls` double
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_player_rankings_s16w_all`
--
CREATE TABLE IF NOT EXISTS `view_player_rankings_s16w_all` (
`image` varchar(60)
,`pname` varchar(40)
,`PID` int(1)
,`gmsPlayed` double
,`TtlPts` double
,`Ttl3pts` double
,`TtlFTM` double
,`TtlFTA` double
,`ttlMFT` double
,`FTP` decimal(37,4)
,`TtlFouls` double
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_player_rankings_s16w_bhs`
--
CREATE TABLE IF NOT EXISTS `view_player_rankings_s16w_bhs` (
`image` varchar(60)
,`pname` varchar(40)
,`PID` int(1)
,`gmsPlayed` double
,`TtlPts` double
,`Ttl3pts` double
,`TtlFTM` double
,`TtlFTA` double
,`ttlMFT` double
,`FTP` decimal(37,4)
,`TtlFouls` double
);
-- --------------------------------------------------------

--
-- Structure for view `view_player_rankings`
--
DROP TABLE IF EXISTS `view_player_rankings`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_player_rankings` AS select `p`.`image` AS `image`,`p`.`PName` AS `pname`,`p`.`PID` AS `PID`,sum(`s`.`GmsPlayed`) AS `gmsPlayed`,((sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where (`s`.`PID` = `p`.`PID`))) AS `TtlPts`,((sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where (`s`.`PID` = `p`.`PID`))) AS `Ttl3pts`,((sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where (`s`.`PID` = `p`.`PID`))) AS `TtlFTM`,((sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where (`s`.`PID` = `p`.`PID`))) AS `TtlFTA`,(((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) - (select ((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where (`s`.`PID` = `p`.`PID`))) AS `ttlMFT`,((sum(`s`.`FTM`) / sum(`s`.`FTA`)) - (select (sum(`s`.`FTM`) / sum(`s`.`FTA`)) from (`tb_stats` `s` join `tb_players` `p`) where (`s`.`PID` = `p`.`PID`))) AS `FTP`,((sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where (`s`.`PID` = `p`.`PID`))) AS `TtlFouls` from (`tb_stats` `s` join `tb_players` `p`) where (`s`.`PID` = `p`.`PID`) group by `s`.`PID`;

-- --------------------------------------------------------

--
-- Structure for view `view_player_rankings_finals`
--
DROP TABLE IF EXISTS `view_player_rankings_finals`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_player_rankings_finals` AS select `p`.`image` AS `image`,`p`.`PName` AS `pname`,`p`.`PID` AS `PID`,sum(`s`.`GmsPlayed`) AS `gmsPlayed`,((sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`final` = 'Y')))) AS `TtlPts`,((sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`final` = 'Y')))) AS `Ttl3pts`,((sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`final` = 'Y')))) AS `TtlFTM`,((sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`final` = 'Y')))) AS `TtlFTA`,(((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) - (select ((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`final` = 'Y')))) AS `ttlMFT`,((sum(`s`.`FTM`) / sum(`s`.`FTA`)) - (select (sum(`s`.`FTM`) / sum(`s`.`FTA`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`final` = 'Y')))) AS `FTP`,((sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`final` = 'Y')))) AS `TtlFouls` from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`final` = 'Y')) group by `s`.`PID`;

-- --------------------------------------------------------

--
-- Structure for view `view_player_rankings_s08s_bhs`
--
DROP TABLE IF EXISTS `view_player_rankings_s08s_bhs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_player_rankings_s08s_bhs` AS select `p`.`image` AS `image`,`p`.`PName` AS `pname`,`p`.`PID` AS `PID`,sum(`s`.`GmsPlayed`) AS `gmsPlayed`,((sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '08s')))) AS `TtlPts`,((sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '08s')))) AS `Ttl3pts`,((sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '08s')))) AS `TtlFTM`,((sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '08s')))) AS `TtlFTA`,(((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) - (select ((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '08s')))) AS `ttlMFT`,((sum(`s`.`FTM`) / sum(`s`.`FTA`)) - (select (sum(`s`.`FTM`) / sum(`s`.`FTA`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '08s')))) AS `FTP`,((sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '08s')))) AS `TtlFouls` from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '08s')) group by `s`.`PID`;

-- --------------------------------------------------------

--
-- Structure for view `view_player_rankings_s09w_bhs`
--
DROP TABLE IF EXISTS `view_player_rankings_s09w_bhs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_player_rankings_s09w_bhs` AS select `p`.`image` AS `image`,`p`.`PName` AS `pname`,`p`.`PID` AS `PID`,sum(`s`.`GmsPlayed`) AS `gmsPlayed`,((sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '09w')))) AS `TtlPts`,((sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '09w')))) AS `Ttl3pts`,((sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '09w')))) AS `TtlFTM`,((sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '09w')))) AS `TtlFTA`,(((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) - (select ((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '09w')))) AS `ttlMFT`,((sum(`s`.`FTM`) / sum(`s`.`FTA`)) - (select (sum(`s`.`FTM`) / sum(`s`.`FTA`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '09w')))) AS `FTP`,((sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '09w')))) AS `TtlFouls` from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '09w')) group by `s`.`PID`;

-- --------------------------------------------------------

--
-- Structure for view `view_player_rankings_s10s_bhs`
--
DROP TABLE IF EXISTS `view_player_rankings_s10s_bhs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_player_rankings_s10s_bhs` AS select `p`.`image` AS `image`,`p`.`PName` AS `pname`,`p`.`PID` AS `PID`,sum(`s`.`GmsPlayed`) AS `gmsPlayed`,((sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '10s')))) AS `TtlPts`,((sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '10s')))) AS `Ttl3pts`,((sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '10s')))) AS `TtlFTM`,((sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '10s')))) AS `TtlFTA`,(((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) - (select ((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '10s')))) AS `ttlMFT`,((sum(`s`.`FTM`) / sum(`s`.`FTA`)) - (select (sum(`s`.`FTM`) / sum(`s`.`FTA`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '10s')))) AS `FTP`,((sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '10s')))) AS `TtlFouls` from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '10s')) group by `s`.`PID`;

-- --------------------------------------------------------

--
-- Structure for view `view_player_rankings_s10w_all`
--
DROP TABLE IF EXISTS `view_player_rankings_s10w_all`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_player_rankings_s10w_all` AS select `p`.`image` AS `image`,`p`.`PName` AS `pname`,`p`.`PID` AS `PID`,sum(`s`.`GmsPlayed`) AS `gmsPlayed`,((sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '10w')))) AS `TtlPts`,((sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '10w')))) AS `Ttl3pts`,((sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '10w')))) AS `TtlFTM`,((sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '10w')))) AS `TtlFTA`,(((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) - (select ((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '10w')))) AS `ttlMFT`,((sum(`s`.`FTM`) / sum(`s`.`FTA`)) - (select (sum(`s`.`FTM`) / sum(`s`.`FTA`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '10w')))) AS `FTP`,((sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '10w')))) AS `TtlFouls` from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '10w')) group by `s`.`PID`;

-- --------------------------------------------------------

--
-- Structure for view `view_player_rankings_s10w_bhs`
--
DROP TABLE IF EXISTS `view_player_rankings_s10w_bhs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_player_rankings_s10w_bhs` AS select `p`.`image` AS `image`,`p`.`PName` AS `pname`,`p`.`PID` AS `PID`,sum(`s`.`GmsPlayed`) AS `gmsPlayed`,((sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '10w') and (`s`.`comp` = 'BHS')))) AS `TtlPts`,((sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '10w') and (`s`.`comp` = 'BHS')))) AS `Ttl3pts`,((sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '10w') and (`s`.`comp` = 'BHS')))) AS `TtlFTM`,((sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '10w') and (`s`.`comp` = 'BHS')))) AS `TtlFTA`,(((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) - (select ((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '10w') and (`s`.`comp` = 'BHS')))) AS `ttlMFT`,((sum(`s`.`FTM`) / sum(`s`.`FTA`)) - (select (sum(`s`.`FTM`) / sum(`s`.`FTA`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '10w') and (`s`.`comp` = 'BHS')))) AS `FTP`,((sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '10w') and (`s`.`comp` = 'BHS')))) AS `TtlFouls` from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '10w') and (`s`.`comp` = 'BHS')) group by `s`.`PID`;

-- --------------------------------------------------------

--
-- Structure for view `view_player_rankings_s10w_bhs2`
--
DROP TABLE IF EXISTS `view_player_rankings_s10w_bhs2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_player_rankings_s10w_bhs2` AS select `p`.`image` AS `image`,`p`.`PName` AS `pname`,`p`.`PID` AS `PID`,sum(`s`.`GmsPlayed`) AS `gmsPlayed`,((sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '10w') and (`s`.`comp` = 'BHS2')))) AS `TtlPts`,((sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '10w') and (`s`.`comp` = 'BHS2')))) AS `Ttl3pts`,((sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '10w') and (`s`.`comp` = 'BHS2')))) AS `TtlFTM`,((sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '10w') and (`s`.`comp` = 'BHS2')))) AS `TtlFTA`,(((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) - (select ((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '10w') and (`s`.`comp` = 'BHS2')))) AS `ttlMFT`,((sum(`s`.`FTM`) / sum(`s`.`FTA`)) - (select (sum(`s`.`FTM`) / sum(`s`.`FTA`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '10w') and (`s`.`comp` = 'BHS2')))) AS `FTP`,((sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '10w') and (`s`.`comp` = 'BHS2')))) AS `TtlFouls` from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '10w') and (`s`.`comp` = 'BHS2')) group by `s`.`PID`;

-- --------------------------------------------------------

--
-- Structure for view `view_player_rankings_s11s_all`
--
DROP TABLE IF EXISTS `view_player_rankings_s11s_all`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_player_rankings_s11s_all` AS select `p`.`image` AS `image`,`p`.`PName` AS `pname`,`p`.`PID` AS `PID`,sum(`s`.`GmsPlayed`) AS `gmsPlayed`,((sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11s')))) AS `TtlPts`,((sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11s')))) AS `Ttl3pts`,((sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11s')))) AS `TtlFTM`,((sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11s')))) AS `TtlFTA`,(((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) - (select ((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11s')))) AS `ttlMFT`,((sum(`s`.`FTM`) / sum(`s`.`FTA`)) - (select (sum(`s`.`FTM`) / sum(`s`.`FTA`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11s')))) AS `FTP`,((sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11s')))) AS `TtlFouls` from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11s')) group by `s`.`PID`;

-- --------------------------------------------------------

--
-- Structure for view `view_player_rankings_s11s_bhs`
--
DROP TABLE IF EXISTS `view_player_rankings_s11s_bhs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_player_rankings_s11s_bhs` AS select `p`.`image` AS `image`,`p`.`PName` AS `pname`,`p`.`PID` AS `PID`,sum(`s`.`GmsPlayed`) AS `gmsPlayed`,((sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11s') and (`s`.`comp` = 'BHS')))) AS `TtlPts`,((sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11s') and (`s`.`comp` = 'BHS')))) AS `Ttl3pts`,((sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11s') and (`s`.`comp` = 'BHS')))) AS `TtlFTM`,((sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11s') and (`s`.`comp` = 'BHS')))) AS `TtlFTA`,(((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) - (select ((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11s') and (`s`.`comp` = 'BHS')))) AS `ttlMFT`,((sum(`s`.`FTM`) / sum(`s`.`FTA`)) - (select (sum(`s`.`FTM`) / sum(`s`.`FTA`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11s') and (`s`.`comp` = 'BHS')))) AS `FTP`,((sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11s') and (`s`.`comp` = 'BHS')))) AS `TtlFouls` from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11s') and (`s`.`comp` = 'BHS')) group by `s`.`PID`;

-- --------------------------------------------------------

--
-- Structure for view `view_player_rankings_s11s_bhs2`
--
DROP TABLE IF EXISTS `view_player_rankings_s11s_bhs2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_player_rankings_s11s_bhs2` AS select `p`.`image` AS `image`,`p`.`PName` AS `pname`,`p`.`PID` AS `PID`,sum(`s`.`GmsPlayed`) AS `gmsPlayed`,((sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11s') and (`s`.`comp` = 'BHS2')))) AS `TtlPts`,((sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11s') and (`s`.`comp` = 'BHS2')))) AS `Ttl3pts`,((sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11s') and (`s`.`comp` = 'BHS2')))) AS `TtlFTM`,((sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11s') and (`s`.`comp` = 'BHS2')))) AS `TtlFTA`,(((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) - (select ((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11s') and (`s`.`comp` = 'BHS2')))) AS `ttlMFT`,((sum(`s`.`FTM`) / sum(`s`.`FTA`)) - (select (sum(`s`.`FTM`) / sum(`s`.`FTA`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11s') and (`s`.`comp` = 'BHS2')))) AS `FTP`,((sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11s') and (`s`.`comp` = 'BHS2')))) AS `TtlFouls` from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11s') and (`s`.`comp` = 'BHS2')) group by `s`.`PID`;

-- --------------------------------------------------------

--
-- Structure for view `view_player_rankings_s11w_all`
--
DROP TABLE IF EXISTS `view_player_rankings_s11w_all`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_player_rankings_s11w_all` AS select `p`.`image` AS `image`,`p`.`PName` AS `pname`,`p`.`PID` AS `PID`,sum(`s`.`GmsPlayed`) AS `gmsPlayed`,((sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11w')))) AS `TtlPts`,((sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11w')))) AS `Ttl3pts`,((sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11w')))) AS `TtlFTM`,((sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11w')))) AS `TtlFTA`,(((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) - (select ((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11w')))) AS `ttlMFT`,((sum(`s`.`FTM`) / sum(`s`.`FTA`)) - (select (sum(`s`.`FTM`) / sum(`s`.`FTA`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11w')))) AS `FTP`,((sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11w')))) AS `TtlFouls` from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11w')) group by `s`.`PID`;

-- --------------------------------------------------------

--
-- Structure for view `view_player_rankings_s11w_bhs`
--
DROP TABLE IF EXISTS `view_player_rankings_s11w_bhs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_player_rankings_s11w_bhs` AS select `p`.`image` AS `image`,`p`.`PName` AS `pname`,`p`.`PID` AS `PID`,sum(`s`.`GmsPlayed`) AS `gmsPlayed`,((sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11w') and (`s`.`comp` = 'BHS')))) AS `TtlPts`,((sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11w') and (`s`.`comp` = 'BHS')))) AS `Ttl3pts`,((sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11w') and (`s`.`comp` = 'BHS')))) AS `TtlFTM`,((sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11w') and (`s`.`comp` = 'BHS')))) AS `TtlFTA`,(((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) - (select ((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11w') and (`s`.`comp` = 'BHS')))) AS `ttlMFT`,((sum(`s`.`FTM`) / sum(`s`.`FTA`)) - (select (sum(`s`.`FTM`) / sum(`s`.`FTA`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11w') and (`s`.`comp` = 'BHS')))) AS `FTP`,((sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11w') and (`s`.`comp` = 'BHS')))) AS `TtlFouls` from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11w') and (`s`.`comp` = 'BHS')) group by `s`.`PID`;

-- --------------------------------------------------------

--
-- Structure for view `view_player_rankings_s11w_bhs2`
--
DROP TABLE IF EXISTS `view_player_rankings_s11w_bhs2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_player_rankings_s11w_bhs2` AS select `p`.`image` AS `image`,`p`.`PName` AS `pname`,`p`.`PID` AS `PID`,sum(`s`.`GmsPlayed`) AS `gmsPlayed`,((sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11w') and (`s`.`comp` = 'BHS2')))) AS `TtlPts`,((sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11w') and (`s`.`comp` = 'BHS2')))) AS `Ttl3pts`,((sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11w') and (`s`.`comp` = 'BHS2')))) AS `TtlFTM`,((sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11w') and (`s`.`comp` = 'BHS2')))) AS `TtlFTA`,(((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) - (select ((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11w') and (`s`.`comp` = 'BHS2')))) AS `ttlMFT`,((sum(`s`.`FTM`) / sum(`s`.`FTA`)) - (select (sum(`s`.`FTM`) / sum(`s`.`FTA`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11w') and (`s`.`comp` = 'BHS2')))) AS `FTP`,((sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11w') and (`s`.`comp` = 'BHS2')))) AS `TtlFouls` from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '11w') and (`s`.`comp` = 'BHS2')) group by `s`.`PID`;

-- --------------------------------------------------------

--
-- Structure for view `view_player_rankings_s12s_all`
--
DROP TABLE IF EXISTS `view_player_rankings_s12s_all`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_player_rankings_s12s_all` AS select `p`.`image` AS `image`,`p`.`PName` AS `pname`,`p`.`PID` AS `PID`,sum(`s`.`GmsPlayed`) AS `gmsPlayed`,((sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12s')))) AS `TtlPts`,((sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12s')))) AS `Ttl3pts`,((sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12s')))) AS `TtlFTM`,((sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12s')))) AS `TtlFTA`,(((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) - (select ((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12s')))) AS `ttlMFT`,((sum(`s`.`FTM`) / sum(`s`.`FTA`)) - (select (sum(`s`.`FTM`) / sum(`s`.`FTA`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12s')))) AS `FTP`,((sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12s')))) AS `TtlFouls` from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12s')) group by `s`.`PID`;

-- --------------------------------------------------------

--
-- Structure for view `view_player_rankings_s12s_bhs`
--
DROP TABLE IF EXISTS `view_player_rankings_s12s_bhs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_player_rankings_s12s_bhs` AS select `p`.`image` AS `image`,`p`.`PName` AS `pname`,`p`.`PID` AS `PID`,sum(`s`.`GmsPlayed`) AS `gmsPlayed`,((sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12s') and (`s`.`comp` = 'BHS')))) AS `TtlPts`,((sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12s') and (`s`.`comp` = 'BHS')))) AS `Ttl3pts`,((sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12s') and (`s`.`comp` = 'BHS')))) AS `TtlFTM`,((sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12s') and (`s`.`comp` = 'BHS')))) AS `TtlFTA`,(((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) - (select ((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12s') and (`s`.`comp` = 'BHS')))) AS `ttlMFT`,((sum(`s`.`FTM`) / sum(`s`.`FTA`)) - (select (sum(`s`.`FTM`) / sum(`s`.`FTA`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12s') and (`s`.`comp` = 'BHS')))) AS `FTP`,((sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12s') and (`s`.`comp` = 'BHS')))) AS `TtlFouls` from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12s') and (`s`.`comp` = 'BHS')) group by `s`.`PID`;

-- --------------------------------------------------------

--
-- Structure for view `view_player_rankings_s12s_bhs2`
--
DROP TABLE IF EXISTS `view_player_rankings_s12s_bhs2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_player_rankings_s12s_bhs2` AS select `p`.`image` AS `image`,`p`.`PName` AS `pname`,`p`.`PID` AS `PID`,sum(`s`.`GmsPlayed`) AS `gmsPlayed`,((sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12s') and (`s`.`comp` = 'BHS2')))) AS `TtlPts`,((sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12s') and (`s`.`comp` = 'BHS2')))) AS `Ttl3pts`,((sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12s') and (`s`.`comp` = 'BHS2')))) AS `TtlFTM`,((sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12s') and (`s`.`comp` = 'BHS2')))) AS `TtlFTA`,(((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) - (select ((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12s') and (`s`.`comp` = 'BHS2')))) AS `ttlMFT`,((sum(`s`.`FTM`) / sum(`s`.`FTA`)) - (select (sum(`s`.`FTM`) / sum(`s`.`FTA`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12s') and (`s`.`comp` = 'BHS2')))) AS `FTP`,((sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12s') and (`s`.`comp` = 'BHS2')))) AS `TtlFouls` from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12s') and (`s`.`comp` = 'BHS2')) group by `s`.`PID`;

-- --------------------------------------------------------

--
-- Structure for view `view_player_rankings_s12w_all`
--
DROP TABLE IF EXISTS `view_player_rankings_s12w_all`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_player_rankings_s12w_all` AS select `p`.`image` AS `image`,`p`.`PName` AS `pname`,`p`.`PID` AS `PID`,sum(`s`.`GmsPlayed`) AS `gmsPlayed`,((sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12w')))) AS `TtlPts`,((sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12w')))) AS `Ttl3pts`,((sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12w')))) AS `TtlFTM`,((sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12w')))) AS `TtlFTA`,(((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) - (select ((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12w')))) AS `ttlMFT`,((sum(`s`.`FTM`) / sum(`s`.`FTA`)) - (select (sum(`s`.`FTM`) / sum(`s`.`FTA`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12w')))) AS `FTP`,((sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12w')))) AS `TtlFouls` from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12w')) group by `s`.`PID`;

-- --------------------------------------------------------

--
-- Structure for view `view_player_rankings_s12w_bhs`
--
DROP TABLE IF EXISTS `view_player_rankings_s12w_bhs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_player_rankings_s12w_bhs` AS select `p`.`image` AS `image`,`p`.`PName` AS `pname`,`p`.`PID` AS `PID`,sum(`s`.`GmsPlayed`) AS `gmsPlayed`,((sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12w') and (`s`.`comp` = 'BHS')))) AS `TtlPts`,((sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12w') and (`s`.`comp` = 'BHS')))) AS `Ttl3pts`,((sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12w') and (`s`.`comp` = 'BHS')))) AS `TtlFTM`,((sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12w') and (`s`.`comp` = 'BHS')))) AS `TtlFTA`,(((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) - (select ((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12w') and (`s`.`comp` = 'BHS')))) AS `ttlMFT`,((sum(`s`.`FTM`) / sum(`s`.`FTA`)) - (select (sum(`s`.`FTM`) / sum(`s`.`FTA`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12w') and (`s`.`comp` = 'BHS')))) AS `FTP`,((sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12w') and (`s`.`comp` = 'BHS')))) AS `TtlFouls` from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12w') and (`s`.`comp` = 'BHS')) group by `s`.`PID`;

-- --------------------------------------------------------

--
-- Structure for view `view_player_rankings_s12w_bhs2`
--
DROP TABLE IF EXISTS `view_player_rankings_s12w_bhs2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_player_rankings_s12w_bhs2` AS select `p`.`image` AS `image`,`p`.`PName` AS `pname`,`p`.`PID` AS `PID`,sum(`s`.`GmsPlayed`) AS `gmsPlayed`,((sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12w') and (`s`.`comp` = 'BHS2')))) AS `TtlPts`,((sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12w') and (`s`.`comp` = 'BHS2')))) AS `Ttl3pts`,((sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12w') and (`s`.`comp` = 'BHS2')))) AS `TtlFTM`,((sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12w') and (`s`.`comp` = 'BHS2')))) AS `TtlFTA`,(((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) - (select ((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12w') and (`s`.`comp` = 'BHS2')))) AS `ttlMFT`,((sum(`s`.`FTM`) / sum(`s`.`FTA`)) - (select (sum(`s`.`FTM`) / sum(`s`.`FTA`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12w') and (`s`.`comp` = 'BHS2')))) AS `FTP`,((sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12w') and (`s`.`comp` = 'BHS2')))) AS `TtlFouls` from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '12w') and (`s`.`comp` = 'BHS2')) group by `s`.`PID`;

-- --------------------------------------------------------

--
-- Structure for view `view_player_rankings_s13s_all`
--
DROP TABLE IF EXISTS `view_player_rankings_s13s_all`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_player_rankings_s13s_all` AS select `p`.`image` AS `image`,`p`.`PName` AS `pname`,`p`.`PID` AS `PID`,sum(`s`.`GmsPlayed`) AS `gmsPlayed`,((sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '13s')))) AS `TtlPts`,((sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '13s')))) AS `Ttl3pts`,((sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '13s')))) AS `TtlFTM`,((sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '13s')))) AS `TtlFTA`,(((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) - (select ((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '13s')))) AS `ttlMFT`,((sum(`s`.`FTM`) / sum(`s`.`FTA`)) - (select (sum(`s`.`FTM`) / sum(`s`.`FTA`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '13s')))) AS `FTP`,((sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '13s')))) AS `TtlFouls` from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '13s')) group by `s`.`PID`;

-- --------------------------------------------------------

--
-- Structure for view `view_player_rankings_s13s_bhs`
--
DROP TABLE IF EXISTS `view_player_rankings_s13s_bhs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_player_rankings_s13s_bhs` AS select `p`.`image` AS `image`,`p`.`PName` AS `pname`,`p`.`PID` AS `PID`,sum(`s`.`GmsPlayed`) AS `gmsPlayed`,((sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '13s') and (`s`.`comp` = 'BHS')))) AS `TtlPts`,((sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '13s') and (`s`.`comp` = 'BHS')))) AS `Ttl3pts`,((sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '13s') and (`s`.`comp` = 'BHS')))) AS `TtlFTM`,((sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '13s') and (`s`.`comp` = 'BHS')))) AS `TtlFTA`,(((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) - (select ((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '13s') and (`s`.`comp` = 'BHS')))) AS `ttlMFT`,((sum(`s`.`FTM`) / sum(`s`.`FTA`)) - (select (sum(`s`.`FTM`) / sum(`s`.`FTA`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '13s') and (`s`.`comp` = 'BHS')))) AS `FTP`,((sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '13s') and (`s`.`comp` = 'BHS')))) AS `TtlFouls` from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '13s') and (`s`.`comp` = 'BHS')) group by `s`.`PID`;

-- --------------------------------------------------------

--
-- Structure for view `view_player_rankings_s13s_bhs2`
--
DROP TABLE IF EXISTS `view_player_rankings_s13s_bhs2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_player_rankings_s13s_bhs2` AS select `p`.`image` AS `image`,`p`.`PName` AS `pname`,`p`.`PID` AS `PID`,sum(`s`.`GmsPlayed`) AS `gmsPlayed`,((sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '13s') and (`s`.`comp` = 'BHS2')))) AS `TtlPts`,((sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '13s') and (`s`.`comp` = 'BHS2')))) AS `Ttl3pts`,((sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '13s') and (`s`.`comp` = 'BHS2')))) AS `TtlFTM`,((sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '13s') and (`s`.`comp` = 'BHS2')))) AS `TtlFTA`,(((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) - (select ((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '13s') and (`s`.`comp` = 'BHS2')))) AS `ttlMFT`,((sum(`s`.`FTM`) / sum(`s`.`FTA`)) - (select (sum(`s`.`FTM`) / sum(`s`.`FTA`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '13s') and (`s`.`comp` = 'BHS2')))) AS `FTP`,((sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '13s') and (`s`.`comp` = 'BHS2')))) AS `TtlFouls` from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '13s') and (`s`.`comp` = 'BHS2')) group by `s`.`PID`;

-- --------------------------------------------------------

--
-- Structure for view `view_player_rankings_s13w_all`
--
DROP TABLE IF EXISTS `view_player_rankings_s13w_all`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_player_rankings_s13w_all` AS select `p`.`image` AS `image`,`p`.`PName` AS `pname`,`p`.`PID` AS `PID`,sum(`s`.`GmsPlayed`) AS `gmsPlayed`,((sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '13w')))) AS `TtlPts`,((sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '13w')))) AS `Ttl3pts`,((sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '13w')))) AS `TtlFTM`,((sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '13w')))) AS `TtlFTA`,(((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) - (select ((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '13w')))) AS `ttlMFT`,((sum(`s`.`FTM`) / sum(`s`.`FTA`)) - (select (sum(`s`.`FTM`) / sum(`s`.`FTA`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '13w')))) AS `FTP`,((sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '13w')))) AS `TtlFouls` from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '13w')) group by `s`.`PID`;

-- --------------------------------------------------------

--
-- Structure for view `view_player_rankings_s13w_bhs`
--
DROP TABLE IF EXISTS `view_player_rankings_s13w_bhs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_player_rankings_s13w_bhs` AS select `p`.`image` AS `image`,`p`.`PName` AS `pname`,`p`.`PID` AS `PID`,sum(`s`.`GmsPlayed`) AS `gmsPlayed`,((sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '13w') and (`s`.`comp` = 'BHS')))) AS `TtlPts`,((sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '13w') and (`s`.`comp` = 'BHS')))) AS `Ttl3pts`,((sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '13w') and (`s`.`comp` = 'BHS')))) AS `TtlFTM`,((sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '13w') and (`s`.`comp` = 'BHS')))) AS `TtlFTA`,(((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) - (select ((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '13w') and (`s`.`comp` = 'BHS')))) AS `ttlMFT`,((sum(`s`.`FTM`) / sum(`s`.`FTA`)) - (select (sum(`s`.`FTM`) / sum(`s`.`FTA`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '13w') and (`s`.`comp` = 'BHS')))) AS `FTP`,((sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '13w') and (`s`.`comp` = 'BHS')))) AS `TtlFouls` from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '13w') and (`s`.`comp` = 'BHS')) group by `s`.`PID`;

-- --------------------------------------------------------

--
-- Structure for view `view_player_rankings_s14s_all`
--
DROP TABLE IF EXISTS `view_player_rankings_s14s_all`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_player_rankings_s14s_all` AS select `p`.`image` AS `image`,`p`.`PName` AS `pname`,`p`.`PID` AS `PID`,sum(`s`.`GmsPlayed`) AS `gmsPlayed`,((sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '14s')))) AS `TtlPts`,((sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '14s')))) AS `Ttl3pts`,((sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '14s')))) AS `TtlFTM`,((sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '14s')))) AS `TtlFTA`,(((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) - (select ((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '14s')))) AS `ttlMFT`,((sum(`s`.`FTM`) / sum(`s`.`FTA`)) - (select (sum(`s`.`FTM`) / sum(`s`.`FTA`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '14s')))) AS `FTP`,((sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '14s')))) AS `TtlFouls` from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '14s')) group by `s`.`PID`;

-- --------------------------------------------------------

--
-- Structure for view `view_player_rankings_s14s_bhs`
--
DROP TABLE IF EXISTS `view_player_rankings_s14s_bhs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_player_rankings_s14s_bhs` AS select `p`.`image` AS `image`,`p`.`PName` AS `pname`,`p`.`PID` AS `PID`,sum(`s`.`GmsPlayed`) AS `gmsPlayed`,((sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '14s') and (`s`.`comp` = 'BHS')))) AS `TtlPts`,((sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '14s') and (`s`.`comp` = 'BHS')))) AS `Ttl3pts`,((sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '14s') and (`s`.`comp` = 'BHS')))) AS `TtlFTM`,((sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '14s') and (`s`.`comp` = 'BHS')))) AS `TtlFTA`,(((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) - (select ((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '14s') and (`s`.`comp` = 'BHS')))) AS `ttlMFT`,((sum(`s`.`FTM`) / sum(`s`.`FTA`)) - (select (sum(`s`.`FTM`) / sum(`s`.`FTA`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '14s') and (`s`.`comp` = 'BHS')))) AS `FTP`,((sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '14s') and (`s`.`comp` = 'BHS')))) AS `TtlFouls` from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '14s') and (`s`.`comp` = 'BHS')) group by `s`.`PID`;

-- --------------------------------------------------------

--
-- Structure for view `view_player_rankings_s14w_all`
--
DROP TABLE IF EXISTS `view_player_rankings_s14w_all`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_player_rankings_s14w_all` AS select `p`.`image` AS `image`,`p`.`PName` AS `pname`,`p`.`PID` AS `PID`,sum(`s`.`GmsPlayed`) AS `gmsPlayed`,((sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '14w')))) AS `TtlPts`,((sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '14w')))) AS `Ttl3pts`,((sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '14w')))) AS `TtlFTM`,((sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '14w')))) AS `TtlFTA`,(((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) - (select ((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '14w')))) AS `ttlMFT`,((sum(`s`.`FTM`) / sum(`s`.`FTA`)) - (select (sum(`s`.`FTM`) / sum(`s`.`FTA`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '14w')))) AS `FTP`,((sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '14w')))) AS `TtlFouls` from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '14w')) group by `s`.`PID`;

-- --------------------------------------------------------

--
-- Structure for view `view_player_rankings_s14w_bhs`
--
DROP TABLE IF EXISTS `view_player_rankings_s14w_bhs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_player_rankings_s14w_bhs` AS select `p`.`image` AS `image`,`p`.`PName` AS `pname`,`p`.`PID` AS `PID`,sum(`s`.`GmsPlayed`) AS `gmsPlayed`,((sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '14w') and (`s`.`comp` = 'BHS')))) AS `TtlPts`,((sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '14w') and (`s`.`comp` = 'BHS')))) AS `Ttl3pts`,((sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '14w') and (`s`.`comp` = 'BHS')))) AS `TtlFTM`,((sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '14w') and (`s`.`comp` = 'BHS')))) AS `TtlFTA`,(((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) - (select ((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '14w') and (`s`.`comp` = 'BHS')))) AS `ttlMFT`,((sum(`s`.`FTM`) / sum(`s`.`FTA`)) - (select (sum(`s`.`FTM`) / sum(`s`.`FTA`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '14w') and (`s`.`comp` = 'BHS')))) AS `FTP`,((sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '14w') and (`s`.`comp` = 'BHS')))) AS `TtlFouls` from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '14w') and (`s`.`comp` = 'BHS')) group by `s`.`PID`;

-- --------------------------------------------------------

--
-- Structure for view `view_player_rankings_s15s_all`
--
DROP TABLE IF EXISTS `view_player_rankings_s15s_all`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_player_rankings_s15s_all` AS select `p`.`image` AS `image`,`p`.`PName` AS `pname`,`p`.`PID` AS `PID`,sum(`s`.`GmsPlayed`) AS `gmsPlayed`,((sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '15s')))) AS `TtlPts`,((sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '15s')))) AS `Ttl3pts`,((sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '15s')))) AS `TtlFTM`,((sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '15s')))) AS `TtlFTA`,(((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) - (select ((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '15s')))) AS `ttlMFT`,((sum(`s`.`FTM`) / sum(`s`.`FTA`)) - (select (sum(`s`.`FTM`) / sum(`s`.`FTA`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '15s')))) AS `FTP`,((sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '15s')))) AS `TtlFouls` from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '15s')) group by `s`.`PID`;

-- --------------------------------------------------------

--
-- Structure for view `view_player_rankings_s15s_bhs`
--
DROP TABLE IF EXISTS `view_player_rankings_s15s_bhs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_player_rankings_s15s_bhs` AS select `p`.`image` AS `image`,`p`.`PName` AS `pname`,`p`.`PID` AS `PID`,sum(`s`.`GmsPlayed`) AS `gmsPlayed`,((sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '15s') and (`s`.`comp` = 'BHS')))) AS `TtlPts`,((sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '15s') and (`s`.`comp` = 'BHS')))) AS `Ttl3pts`,((sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '15s') and (`s`.`comp` = 'BHS')))) AS `TtlFTM`,((sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '15s') and (`s`.`comp` = 'BHS')))) AS `TtlFTA`,(((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) - (select ((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '15s') and (`s`.`comp` = 'BHS')))) AS `ttlMFT`,((sum(`s`.`FTM`) / sum(`s`.`FTA`)) - (select (sum(`s`.`FTM`) / sum(`s`.`FTA`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '15s') and (`s`.`comp` = 'BHS')))) AS `FTP`,((sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '15s') and (`s`.`comp` = 'BHS')))) AS `TtlFouls` from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '15s') and (`s`.`comp` = 'BHS')) group by `s`.`PID`;

-- --------------------------------------------------------

--
-- Structure for view `view_player_rankings_s15w_all`
--
DROP TABLE IF EXISTS `view_player_rankings_s15w_all`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_player_rankings_s15w_all` AS select `p`.`image` AS `image`,`p`.`PName` AS `pname`,`p`.`PID` AS `PID`,sum(`s`.`GmsPlayed`) AS `gmsPlayed`,((sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '15w')))) AS `TtlPts`,((sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '15w')))) AS `Ttl3pts`,((sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '15w')))) AS `TtlFTM`,((sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '15w')))) AS `TtlFTA`,(((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) - (select ((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '15w')))) AS `ttlMFT`,((sum(`s`.`FTM`) / sum(`s`.`FTA`)) - (select (sum(`s`.`FTM`) / sum(`s`.`FTA`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '15w')))) AS `FTP`,((sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '15w')))) AS `TtlFouls` from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '15w')) group by `s`.`PID`;

-- --------------------------------------------------------

--
-- Structure for view `view_player_rankings_s15w_bhs`
--
DROP TABLE IF EXISTS `view_player_rankings_s15w_bhs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_player_rankings_s15w_bhs` AS select `p`.`image` AS `image`,`p`.`PName` AS `pname`,`p`.`PID` AS `PID`,sum(`s`.`GmsPlayed`) AS `gmsPlayed`,((sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '15w') and (`s`.`comp` = 'BHS')))) AS `TtlPts`,((sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '15w') and (`s`.`comp` = 'BHS')))) AS `Ttl3pts`,((sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '15w') and (`s`.`comp` = 'BHS')))) AS `TtlFTM`,((sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '15w') and (`s`.`comp` = 'BHS')))) AS `TtlFTA`,(((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) - (select ((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '15w') and (`s`.`comp` = 'BHS')))) AS `ttlMFT`,((sum(`s`.`FTM`) / sum(`s`.`FTA`)) - (select (sum(`s`.`FTM`) / sum(`s`.`FTA`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '15w') and (`s`.`comp` = 'BHS')))) AS `FTP`,((sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '15w') and (`s`.`comp` = 'BHS')))) AS `TtlFouls` from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '15w') and (`s`.`comp` = 'BHS')) group by `s`.`PID`;

-- --------------------------------------------------------

--
-- Structure for view `view_player_rankings_s16s_all`
--
DROP TABLE IF EXISTS `view_player_rankings_s16s_all`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_player_rankings_s16s_all` AS select `p`.`image` AS `image`,`p`.`PName` AS `pname`,`p`.`PID` AS `PID`,sum(`s`.`GmsPlayed`) AS `gmsPlayed`,((sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '16s')))) AS `TtlPts`,((sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '16s')))) AS `Ttl3pts`,((sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '16s')))) AS `TtlFTM`,((sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '16s')))) AS `TtlFTA`,(((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) - (select ((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '16s')))) AS `ttlMFT`,((sum(`s`.`FTM`) / sum(`s`.`FTA`)) - (select (sum(`s`.`FTM`) / sum(`s`.`FTA`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '16s')))) AS `FTP`,((sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '16s')))) AS `TtlFouls` from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '16s')) group by `s`.`PID`;

-- --------------------------------------------------------

--
-- Structure for view `view_player_rankings_s16s_bhs`
--
DROP TABLE IF EXISTS `view_player_rankings_s16s_bhs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_player_rankings_s16s_bhs` AS select `p`.`image` AS `image`,`p`.`PName` AS `pname`,`p`.`PID` AS `PID`,sum(`s`.`GmsPlayed`) AS `gmsPlayed`,((sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '16s') and (`s`.`comp` = 'BHS')))) AS `TtlPts`,((sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '16s') and (`s`.`comp` = 'BHS')))) AS `Ttl3pts`,((sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '16s') and (`s`.`comp` = 'BHS')))) AS `TtlFTM`,((sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '16s') and (`s`.`comp` = 'BHS')))) AS `TtlFTA`,(((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) - (select ((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '16s') and (`s`.`comp` = 'BHS')))) AS `ttlMFT`,((sum(`s`.`FTM`) / sum(`s`.`FTA`)) - (select (sum(`s`.`FTM`) / sum(`s`.`FTA`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '16s') and (`s`.`comp` = 'BHS')))) AS `FTP`,((sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '16s') and (`s`.`comp` = 'BHS')))) AS `TtlFouls` from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '16s') and (`s`.`comp` = 'BHS')) group by `s`.`PID`;

-- --------------------------------------------------------

--
-- Structure for view `view_player_rankings_s16w_all`
--
DROP TABLE IF EXISTS `view_player_rankings_s16w_all`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_player_rankings_s16w_all` AS select `p`.`image` AS `image`,`p`.`PName` AS `pname`,`p`.`PID` AS `PID`,sum(`s`.`GmsPlayed`) AS `gmsPlayed`,((sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '16w')))) AS `TtlPts`,((sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '16w')))) AS `Ttl3pts`,((sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '16w')))) AS `TtlFTM`,((sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '16w')))) AS `TtlFTA`,(((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) - (select ((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '16w')))) AS `ttlMFT`,((sum(`s`.`FTM`) / sum(`s`.`FTA`)) - (select (sum(`s`.`FTM`) / sum(`s`.`FTA`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '16w')))) AS `FTP`,((sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '16w')))) AS `TtlFouls` from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '16w')) group by `s`.`PID`;

-- --------------------------------------------------------

--
-- Structure for view `view_player_rankings_s16w_bhs`
--
DROP TABLE IF EXISTS `view_player_rankings_s16w_bhs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_player_rankings_s16w_bhs` AS select `p`.`image` AS `image`,`p`.`PName` AS `pname`,`p`.`PID` AS `PID`,sum(`s`.`GmsPlayed`) AS `gmsPlayed`,((sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`TotalPoints`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '16w') and (`s`.`comp` = 'BHS')))) AS `TtlPts`,((sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`3PT`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '16w') and (`s`.`comp` = 'BHS')))) AS `Ttl3pts`,((sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTM`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '16w') and (`s`.`comp` = 'BHS')))) AS `TtlFTM`,((sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`FTA`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '16w') and (`s`.`comp` = 'BHS')))) AS `TtlFTA`,(((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) - (select ((sum(`s`.`FTA`) - sum(`s`.`FTM`)) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '16w') and (`s`.`comp` = 'BHS')))) AS `ttlMFT`,((sum(`s`.`FTM`) / sum(`s`.`FTA`)) - (select (sum(`s`.`FTM`) / sum(`s`.`FTA`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '16w') and (`s`.`comp` = 'BHS')))) AS `FTP`,((sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) - (select (sum(`s`.`Fouls`) / sum(`s`.`GmsPlayed`)) from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '16w') and (`s`.`comp` = 'BHS')))) AS `TtlFouls` from (`tb_stats` `s` join `tb_players` `p`) where ((`s`.`PID` = `p`.`PID`) and (`s`.`seasonID` = '16w') and (`s`.`comp` = 'BHS')) group by `s`.`PID`;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
