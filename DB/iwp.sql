-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 01, 2017 at 04:47 PM
-- Server version: 5.7.19-log
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwp`
--

-- --------------------------------------------------------

--
-- Table structure for table `incharge`
--

CREATE TABLE `incharge` (
  `block` varchar(10) NOT NULL,
  `cno` varchar(10) NOT NULL,
  `inc_name` varchar(25) DEFAULT NULL,
  `inc_no` bigint(10) DEFAULT NULL,
  `inc_mail` varchar(50) DEFAULT NULL,
  `ast_name` varchar(25) DEFAULT NULL,
  `ast_no` bigint(10) DEFAULT NULL,
  `ast_mail` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `incharge`
--

INSERT INTO `incharge` (`block`, `cno`, `inc_name`, `inc_no`, `inc_mail`, `ast_name`, `ast_no`, `ast_mail`) VALUES
('AB1', '205', 'Geetha S', NULL, 'geetha.s@vit.ac.in', 'Arun A', 7401777217, NULL),
('AB1', '206', 'Bharathi Raja S', NULL, 'bharathiraja.s@vit.ac.in', 'Sivagnanam M', 9080746336, 'sivagnanam.m@vit.ac.in'),
('AB1', '207', 'Rekha D', NULL, 'rekha.d@vit.ac.in', 'Sivagnanam M', 9080746336, 'sivagnanam.m@vit.ac.in'),
('AB1', '208', 'Janaki Meena M', NULL, 'janakimeena.m@vit.ac.in', 'Jayakumar D', 9841230464, NULL),
('AB1', '209', 'Sajidha', NULL, 'vijaya.k@vit.ac.in', 'Sathyanarayanan B', 9710283374, NULL),
('AB1', '210', 'Suganya', NULL, 'suganya.g@vit.ac.in', 'Sathyanarayanan B', 9710283374, NULL),
('AB1', '311', 'Subbulakshmi T', NULL, NULL, 'Saravana Kumar S', NULL, NULL),
('AB1', '313', 'Priyaadharshini M', NULL, 'priyaadharshini.m@vit.ac.in', 'Jayakumar D', NULL, NULL),
('AB1', '404', 'Sivagami M', 9841562692, 'msivagami@vit.ac.in', 'Robert L', NULL, NULL),
('AB1', '404B', 'Maheswari N', NULL, 'maheswari.n@vit.ac.in', 'Robert L', NULL, NULL),
('AB1', '506', 'Rajesh Kanna B', NULL, 'rajesh.kumar@vit.ac.in', 'Sathyanarayanan B', NULL, NULL),
('AB1', '605A', 'Prakash B', NULL, 'prakash.bala@vit.ac.in', 'Arvinthsaran R M', 9894729978, NULL),
('AB1', '605B', 'Syed Ibrahim SP', NULL, NULL, 'Arvinthsaran R M', 9894729978, NULL),
('AB1', '613', 'Kumar R', NULL, 'kumar.rangasamy@vit.ac.in', 'Ponnurangam M', NULL, NULL),
('AB1', '614', 'Kumar R', NULL, 'kumar.rangasamy@vit.ac.in', 'Ponnurangam M', NULL, NULL),
('AB1', '706', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE `lab` (
  `block` varchar(10) NOT NULL,
  `cno` varchar(10) NOT NULL,
  `l1` varchar(10) DEFAULT NULL,
  `l3` varchar(10) DEFAULT NULL,
  `l5` varchar(10) DEFAULT NULL,
  `l7` varchar(10) DEFAULT NULL,
  `l9` varchar(10) DEFAULT NULL,
  `l11` varchar(10) DEFAULT NULL,
  `l13` varchar(10) DEFAULT NULL,
  `l15` varchar(10) DEFAULT NULL,
  `l19` varchar(10) DEFAULT NULL,
  `l21` varchar(10) DEFAULT NULL,
  `l23` varchar(10) DEFAULT NULL,
  `l25` varchar(10) DEFAULT NULL,
  `l27` varchar(10) DEFAULT NULL,
  `l29` varchar(10) DEFAULT NULL,
  `l31` varchar(10) DEFAULT NULL,
  `l33` varchar(10) DEFAULT NULL,
  `l35` varchar(10) DEFAULT NULL,
  `l37` varchar(10) DEFAULT NULL,
  `l39` varchar(10) DEFAULT NULL,
  `l41` varchar(10) DEFAULT NULL,
  `l43` varchar(10) DEFAULT NULL,
  `l45` varchar(10) DEFAULT NULL,
  `l47` varchar(10) DEFAULT NULL,
  `l49` varchar(10) DEFAULT NULL,
  `l51` varchar(10) DEFAULT NULL,
  `l53` varchar(10) DEFAULT NULL,
  `l55` varchar(10) DEFAULT NULL,
  `l57` varchar(10) DEFAULT NULL,
  `l59` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`block`, `cno`, `l1`, `l3`, `l5`, `l7`, `l9`, `l11`, `l13`, `l15`, `l19`, `l21`, `l23`, `l25`, `l27`, `l29`, `l31`, `l33`, `l35`, `l37`, `l39`, `l41`, `l43`, `l45`, `l47`, `l49`, `l51`, `l53`, `l55`, `l57`, `l59`) VALUES
('AB1', '205', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('AB1', '206', 'CSE2005', 'CSE2005', 'CSE1004', 'CSE1002', 'CSE1002', 'CSE2005', 'CSE1002', 'CSE1002', 'CSE1002', 'CSE2005', 'SWE2002', NULL, 'CSE1002', 'CSE2005', 'CSE2005', NULL, NULL, NULL, NULL, NULL, 'CSE2005', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('AB1', '207', 'CSE2006', 'SWE1003', NULL, NULL, 'CSE1003', 'CSE2006', NULL, NULL, 'CSE1003', 'CSE2006', 'SWE1003', NULL, NULL, NULL, 'CSE1003', 'CSE2006', NULL, 'SWE1003', 'CSE1003', NULL, 'CSE2006', NULL, NULL, 'CSE1003', NULL, NULL, 'CSE2006', NULL, NULL),
('AB1', '208', NULL, NULL, 'CSE3025', 'CSE3020', 'CSE3025', 'CSE6006', NULL, 'SWE2002', 'CSE3020', NULL, 'CSE6016', 'CSE3024', NULL, NULL, 'CSE3020', 'CSE1001', NULL, NULL, NULL, NULL, 'CSE6005', NULL, NULL, 'CSE6020', 'CSE1001', NULL, 'CSE1001', NULL, NULL),
('AB1', '209', NULL, 'CSE1001', 'CSE1001', 'CSE1001', NULL, 'CSE1001', NULL, 'CSE1001', NULL, 'CSE1001', 'CSE3002', 'CSE1001', 'CSE1001', 'SWE530', 'CSE1002', NULL, NULL, 'CSE1001', 'CSE1002', NULL, NULL, 'CSE1001', NULL, 'CSE1002', NULL, NULL, 'CSE1001', 'CSE1001', NULL),
('AB1', '210', NULL, 'CSE1002', 'CSE1002', 'CSE1001', NULL, 'CSE1002', NULL, 'CSE1001', NULL, 'CSE1002', NULL, 'CSE1002', 'CSE1001', 'ITA6003', NULL, NULL, NULL, 'CSE1002', NULL, NULL, NULL, 'CSE1002', NULL, NULL, NULL, NULL, 'CSE1002', 'CSE1002', NULL),
('AB1', '311', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CSE6029', NULL, NULL, 'CSE6026', NULL, 'CSE2005', NULL, 'CSE3020', NULL, NULL, 'CSE6005', NULL, NULL, NULL, NULL, NULL, NULL, 'CSE4020', NULL),
('AB1', '313', NULL, NULL, 'CSE2003', NULL, NULL, 'SWE506', NULL, NULL, NULL, NULL, 'SWE506', NULL, NULL, 'SWE4001', NULL, 'CSE1002', NULL, NULL, NULL, NULL, NULL, 'CSE2003', NULL, 'CSE6010', 'CSE1002', NULL, 'CSE1002', NULL, NULL),
('AB1', '404', NULL, 'CSE4020', 'CSE6009', NULL, NULL, 'SWE1009', NULL, NULL, NULL, NULL, 'CSE1002', NULL, NULL, 'CSE1002', NULL, NULL, NULL, 'CSE1002', NULL, NULL, NULL, NULL, NULL, 'CSE3018', NULL, NULL, NULL, 'SWE2002', NULL),
('AB1', '404B', 'CSE1004', 'CSE1002', 'CSE1002', 'CSE1002', 'CSE1004', 'CSE1002', NULL, 'CSE1002', NULL, 'CSE1002', 'CSE1002', 'CSE1002', 'CSE1002', 'CSE1002', 'CSE1004', 'CSE1002', NULL, 'CSE1002', 'CSE1004', NULL, 'CSE1002', 'CSE2005', NULL, 'CSE418', 'CSE1002', NULL, 'CSE1002', 'CSE1004', NULL),
('AB1', '506', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('AB1', '605A', NULL, 'CSE1002', 'CSE1002', 'CSE1002', NULL, 'CSE1002', NULL, 'CSE1002', NULL, 'CSE1002', 'CSE1002', 'CSE1002', 'CSE1002', 'CSE1002', NULL, 'CSE2003', NULL, 'CSE1002', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CSE1002', NULL, NULL),
('AB1', '605B', NULL, NULL, 'CSE2003', 'CSE4004', 'CSE2003', NULL, 'SWE1008', NULL, NULL, NULL, 'ITA6002', 'SWE513', 'SWE1004', 'SWE513', 'SWE1008', NULL, NULL, 'SWE1004', 'CSE2003', NULL, 'SWE1008', NULL, NULL, 'CSE2003', NULL, NULL, 'SWE1004', NULL, NULL),
('AB1', '613', NULL, NULL, 'SWE2018', NULL, 'SWE506', NULL, NULL, 'CSE4028', NULL, 'SWE506', NULL, NULL, NULL, 'CSE4028', 'SWE2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('AB1', '614', NULL, NULL, 'CSE1002', NULL, NULL, 'CSE1002', NULL, NULL, NULL, NULL, 'CSE1002', NULL, NULL, 'CSE1002', NULL, NULL, NULL, 'CSE1002', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CSE1002', NULL, NULL),
('AB1', '706', NULL, 'CSE1002', 'CSE1002', 'CSE1002', 'CSE2005', 'CSE1002', NULL, 'CSE1002', 'CSE2005', 'CSE1002', NULL, 'CSE1002', 'CSE1002', 'CSE2005', NULL, NULL, NULL, 'CSE1002', NULL, NULL, NULL, 'CSE1002', NULL, NULL, NULL, NULL, 'CSE1002', 'CSE1002', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `code` varchar(10) NOT NULL,
  `slot` varchar(50) NOT NULL,
  `venue` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`code`, `slot`, `venue`) VALUES
('﻿COURSE CO', 'SLOT', 'VENUE'),
('CSE1002', 'L7+L8+L15+L16+L27+L28', 'AB1-206'),
('CSE1002', 'L9+L10++L13+L14+L19+L20', 'AB1-206'),
('CSE1004', 'L5+L6', 'AB1-206'),
('CSE1004', 'L5+L6', 'AB1-206'),
('CSE2005', 'L11+L12', 'AB1-206'),
('CSE2005', 'L31+L32', 'AB1-206'),
('CSE2005', 'L21+L22', 'AB1-206'),
('CSE2005', 'L3+L4', 'AB1-206'),
('CSE2005', 'L1+L2', 'AB1-206'),
('CSE2005', 'L29+L30', 'AB1-206'),
('CSE2005', 'L43+L44', 'AB1-206'),
('CSE2005', 'L11+L12', 'AB1-206'),
('CSE2005', 'L21+L22', 'AB1-206'),
('CSE2005', 'L43+L44', 'AB1-206'),
('CSE2005', 'L3+L4', 'AB1-206'),
('SWE2002', 'L23+L24', 'AB1-206'),
('SWE2002', 'L23+L24', 'AB1-206'),
('CSE1003', 'L9+L10', 'AB1-207'),
('CSE1003', 'L19+L20', 'AB1-207'),
('CSE1003', 'L39+L40', 'AB1-207'),
('CSE1003', 'L49+L50', 'AB1-207'),
('CSE1003', 'L31+L32', 'AB1-207'),
('CSE1003', 'L19+L20', 'AB1-207'),
('CSE1003', 'L31+L32', 'AB1-207'),
('CSE1003', 'L49+L50', 'AB1-207'),
('CSE1003', 'L9+L10', 'AB1-207'),
('CSE1003', 'L39+L40', 'AB1-207'),
('CSE2006', 'L1+L2', 'AB1-207'),
('CSE2006', 'L11+L12', 'AB1-207'),
('CSE2006', 'L43+L44', 'AB1-207'),
('CSE2006', 'L43+L44', 'AB1-207'),
('CSE2006', 'L55+L56', 'AB1-207'),
('CSE2006', 'L21+L22', 'AB1-207'),
('CSE2006', 'L21+L22', 'AB1-207'),
('CSE2006', 'L11+L12', 'AB1-207'),
('CSE2006', 'L33+L34', 'AB1-207'),
('CSE2006', 'L33+L34', 'AB1-207'),
('SWE1003', 'L37+L38', 'AB1-207'),
('SWE1003', 'L23+L24', 'AB1-207'),
('SWE1003', 'L3+L4', 'AB1-207'),
('SWE1003', 'L23+L24', 'AB1-207'),
('SWE1003', 'L3+L4', 'AB1-207'),
('SWE1003', 'L37+L38', 'AB1-207'),
('CSE1001', 'L33+L34+L51+L52+L55+L56', 'AB1-208'),
('CSE3020', 'L19+L20', 'AB1-208'),
('CSE3020', 'L31+L32', 'AB1-208'),
('CSE3020', 'L7+L8', 'AB1-208'),
('CSE3020', 'L19+L20', 'AB1-208'),
('CSE3020', 'L31+L32', 'AB1-208'),
('CSE3020', 'L7+L8', 'AB1-208'),
('CSE3024', 'L25+L26', 'AB1-208'),
('CSE3025', 'L5+L6', 'AB1-208'),
('CSE3025', 'L9+L10', 'AB1-208'),
('CSE3025', 'L5+L6', 'AB1-208'),
('CSE6005', 'L43+L44', 'AB1-208'),
('CSE6006', 'L11+L12', 'AB1-208'),
('CSE6016', 'L23+L24', 'AB1-208'),
('CSE6020', 'L49+L50', 'AB1-208'),
('SWE2002', 'L15+L16', 'AB1-208'),
('SWE2002', 'L15+L16', 'AB1-208'),
('CSE1001', 'L5+L6+L11+L12+L55+L56', 'AB1-209'),
('CSE1001', 'L37+L38+L45+L46+L57+L58', 'AB1-209'),
('CSE1001', 'L7+L8+L15+L16+L27+L28', 'AB1-209'),
('CSE1001', 'L3+L4+L21+L22+L25+L26', 'AB1-209'),
('CSE1002', 'L31+L32+L39+L40+L49+L50', 'AB1-209'),
('CSE3002', 'L23+L24', 'AB1-209'),
('SWE530', 'L29+L30', 'AB1-209'),
('CSE1001', 'L7+L8+L15+L16+L27+L28', 'AB1-210'),
('CSE1002', 'L5+L6+L11+L12+L55+L56', 'AB1-210'),
('CSE1002', 'L3+L4+L21+L22+L25+L26', 'AB1-210'),
('CSE1002', 'L37+L38+L45+L46+L57+L58', 'AB1-210'),
('ITA6003', 'L29+L30', 'AB1-210'),
('CSE2005', 'L33+L34', 'AB1-311'),
('CSE2005', 'L33+L34', 'AB1-311'),
('CSE3020', 'L37+L38', 'AB1-311'),
('CSE3020', 'L37+L38', 'AB1-311'),
('CSE4020', 'L57+L58', 'AB1-311'),
('CSE4020', 'L57+L58', 'AB1-311'),
('CSE6005', 'L43+L44', 'AB1-311'),
('CSE6026', 'L29+L30', 'AB1-311'),
('CSE6029', 'L23+L24', 'AB1-311'),
('CSE2003', 'L5+L6', 'AB1-313'),
('CSE1002', 'L33+L34+L51+L52+L55+L56', 'AB1-313'),
('CSE2003', 'L45+L46', 'AB1-313'),
('CSE6010', 'L49+L50', 'AB1-313'),
('SWE4001', 'L29+L30', 'AB1-313'),
('SWE506', 'L11+L12+L23+L24', 'AB1-313'),
('CSE1002', 'L23+L24+L29+L30+L37+L38', 'AB1-404'),
('CSE3018', 'L49+L50', 'AB1-404'),
('CSE4020', 'L3+L4', 'AB1-404'),
('CSE4020', 'L3+L4', 'AB1-404'),
('CSE6009', 'L5+L6', 'AB1-404'),
('SWE1009', 'L11+L12', 'AB1-404'),
('SWE2002', 'L57+L58', 'AB1-404'),
('SWE2002', 'L57+L58', 'AB1-404'),
('CSE1002', 'L7+L8+L15+L16+L27+L28', 'AB1-404B'),
('CSE1002', 'L33+L34+L51+L52+L55+L56', 'AB1-404B'),
('CSE1002', 'L23+L24+L29+L30+L37+L38', 'AB1-404B'),
('CSE1002', 'L3+L4+L21+L22+L25+L26', 'AB1-404B'),
('CSE1002', 'L5+L6+L11+L12+L43+L44', 'AB1-404B'),
('CSE1004', 'L31+L32', 'AB1-404B'),
('CSE1004', 'L39+L40', 'AB1-404B'),
('CSE1004', 'L57+L58', 'AB1-404B'),
('CSE1004', 'L1+L2', 'AB1-404B'),
('CSE1004', 'L9+L10', 'AB1-404B'),
('CSE1004', 'L31+L32', 'AB1-404B'),
('CSE1004', 'L1+L2', 'AB1-404B'),
('CSE1004', 'L9+L10', 'AB1-404B'),
('CSE2005', 'L45+L46', 'AB1-404B'),
('CSE418', 'L49+L50', 'AB1-404B'),
('SWE506', 'L11+L12+L23+L24', 'AB1-406B'),
('CSE1002', 'L5+L6+L11+L12+L55+L56', 'AB1-605A'),
('CSE1002', 'L23+L24+L29+L30+L37+L38', 'AB1-605A'),
('CSE1002', 'L7+L8+L15+L16+L27+L28', 'AB1-605A'),
('CSE1002', 'L3+L4+L21+L22+L25+L26', 'AB1-605A'),
('CSE2003', 'L33+L34', 'AB1-605A'),
('CSE2003', 'L33+L34', 'AB1-605A'),
('CSE2003', 'L49+L50', 'AB1-605B'),
('CSE2003', 'L39+L40', 'AB1-605B'),
('CSE2003', 'L5+L6', 'AB1-605B'),
('CSE2003', 'L9+L10', 'AB1-605B'),
('CSE2003', 'L5+L6', 'AB1-605B'),
('CSE2003', 'L49+L50', 'AB1-605B'),
('CSE2003', 'L9+L10', 'AB1-605B'),
('CSE4004', 'L7+L8', 'AB1-605B'),
('ITA6002', 'L23+L24', 'AB1-605B'),
('SWE1004', 'L55+L56', 'AB1-605B'),
('SWE1004', 'L37+L38', 'AB1-605B'),
('SWE1004', 'L27+L28', 'AB1-605B'),
('SWE1004', 'L55+L56', 'AB1-605B'),
('SWE1004', 'L37+L38', 'AB1-605B'),
('SWE1004', 'L27+L28', 'AB1-605B'),
('SWE1008', 'L31+L32', 'AB1-605B'),
('SWE1008', 'L43+L44', 'AB1-605B'),
('SWE1008', 'L13+L14', 'AB1-605B'),
('SWE1008', 'L31+L32', 'AB1-605B'),
('SWE1008', 'L43+L44', 'AB1-605B'),
('SWE1008', 'L13+L14', 'AB1-605B'),
('SWE513', 'L25+L26+L29+L30', 'AB1-605B'),
('CSE3001', 'L11+L12', 'AB1-607B'),
('CSE4028', 'L29+L30', 'AB1-613'),
('CSE4028', 'L15+L16', 'AB1-613'),
('CSE4028', 'L29+L30', 'AB1-613'),
('SWE2018', 'L5+L6', 'AB1-613'),
('SWE2018', 'L31+L32', 'AB1-613'),
('SWE2018', 'L31+L32', 'AB1-613'),
('SWE2018', 'L5+L6', 'AB1-613'),
('SWE506', 'L9+L10+L21+L22', 'AB1-613'),
('CSE1002', 'L5+L6+L11+L12+L55+L56', 'AB1-614'),
('CSE1002', 'L23+L24+L29+L30+L37+L38', 'AB1-614'),
('CSE1002', 'L7+L8+L15+L16+L27+L28', 'AB1-706'),
('CSE1002', 'L5+L6+L11+L12+L55+L56', 'AB1-706'),
('CSE1002', 'L3+L4+L21+L22+L25+L26', 'AB1-706'),
('CSE1002', 'L37+L38+L45+L46+L57+L58', 'AB1-706'),
('CSE2005', 'L19+L20', 'AB1-706'),
('CSE2005', 'L29+L30', 'AB1-706'),
('CSE2005', 'L9+L10', 'AB1-706'),
('CSE2005', 'L19+L20', 'AB1-706'),
('CSE2005', 'L9+L10', 'AB1-706'),
('CSE2005', 'L29+L30', 'AB1-706'),
('CSE1002', 'L23+L24+L29+L30+L37+L38', 'ADB404'),
('CSE1010', 'L33+L34', 'ADB404');

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `name` varchar(25) NOT NULL,
  `no` varchar(10) NOT NULL,
  `dat` varchar(10) NOT NULL,
  `tfr` varchar(5) NOT NULL,
  `tto` varchar(5) NOT NULL,
  `det` varchar(100) NOT NULL,
  `sno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`name`, `no`, `dat`, `tfr`, `tto`, `det`, `sno`) VALUES
('xyz', 'AB1-210', '2017-11-06', '08:30', '14:45', 'asdfg', 14),
('e', '6', '2017-10-25', '3', '4', 'ert', 26),
('hv', 'AB1-205', '2017-11-24', '00:59', '13:00', 'khv', 28),
('t', 'AB1-205', '2017-11-01', '08:00', '17:00', 'testing', 29),
('A', 'AB1-205', '2017-11-02', '00:00', '16:00', 'g', 31),
('d', 'AB1-205', '2017-11-03', '09:00', '16:00', 'd', 32),
('g', 'AB1-205', '2017-11-25', '09:00', '16:00', 'a', 35),
('de', 'AB1-205', '2017-12-02', '09:00', '16:00', '1', 42),
('q', 'AB1-205', '2017-11-11', '09:00', '16:00', 'qwe', 43),
('s', 'AB1-205', '2017-11-14', '07:07', '17:01', 's', 44),
('qwee', 'AB1-205', '2017-11-22', '13:00', '16:00', 'qe', 46),
('ytr', 'AB1-210', '2017-11-24', '01:15', '06:00', 'wewee', 47),
('p', 'AB1-205', '2017-11-30', '09:00', '16:00', 'd', 48),
('d', 'AB1-205', '2017-11-29', '09:00', '16:00', 'd', 49);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `incharge`
--
ALTER TABLE `incharge`
  ADD PRIMARY KEY (`block`,`cno`);

--
-- Indexes for table `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`block`,`cno`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lab`
--
ALTER TABLE `lab`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`block`,`cno`) REFERENCES `incharge` (`block`, `cno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
