-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 29, 2017 at 07:03 PM
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
-- Table structure for table `infrahw`
--

CREATE TABLE `infrahw` (
  `block` varchar(10) NOT NULL,
  `cno` varchar(10) NOT NULL,
  `sysConfig` varchar(200) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `num` int(11) NOT NULL,
  `sno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infrahw`
--

INSERT INTO `infrahw` (`block`, `cno`, `sysConfig`, `brand`, `num`, `sno`) VALUES
('AB1', '205', 'Dell optiplex-380\r\nIntel core 2 Duo E7500@2.93Ghz,4.00 GB RAM, 320 GB HDD,OpticalMouse,Keyboard,\r\nLCD Monitor', 'Dell', 164, 1),
('AB1', '205', 'HP Systems-280 G2 MT\r\nIntel core i5 @3.20Ghz,8 GB RAM,500 GB HDD, OpticalMouse,Keyboard ,HP LCD Monitor', 'HP', 10, 2),
('AB1', '205', 'HCL\r\nIntel core 2 Duo E7500@2.93Ghz,4.00 GB RAM, 320 GB HDD,OpticalMouse,Keyboard,\r\nLCD Monitor', 'HCL', 1, 3),
('AB1', '206', 'HP 202 G2 MT\r\nIntel Core i5 CPU@3.3 GHz,\r\n500 GB HDD, 8 GB RAM, Keyboard, Optical Mouse,\r\nHP  LCD Monitor', 'HP systems (202 G2 MT)', 32, 4),
('AB1', '206', 'HP 280 G2 MT\r\nIntel Core i5 CPU@3.3 GHz,\r\n500 GB HDD, 8 GB RAM, Keyboard, Optical Mouse,\r\nHP  LCD Monitor', 'HP systems (280 G2 MT)', 35, 5),
('AB1', '207', 'Lenovo Think Centre core i5 mini CPU\r\nIntel Core i5/i7 CPU@3.3 GHz,\r\n500 GB HDD, 8 GB RAM, Keyboard, Optical Mouse,\r\nLenovo LCD Monitor', 'Lenovo systems', 18, 6),
('AB1', '207', 'HP 202 G2 MT\r\nIntel Core i5 CPU@3.3 GHz,\r\n500 GB HDD, 8 GB RAM, Keyboard, Optical Mouse,\r\nHP LCD Monitor', 'HP systems (202 G2 MT)', 6, 7),
('AB1', '207', 'Dell OPTIPLEX 380\r\nIntel Core 2-Duo CPU@2.93 GHz,\r\n320 GB HDD, 4 GB RAM,\r\nKeyboard, Optical Mouse,\r\nDell LCD Dell Monitor', 'Dell OPTIPLEX 380', 13, 8),
('AB1', '207', 'Lenovo Think Centre\r\nLenovo systems  Think centre  m71e\r\nIntel i3 CPU 3.10@Ghz Processor and 4 GB RAM and 320 GB HDD,\r\nLenovo LCD monitor', 'Lenovo systems', 2, 9),
('AB1', '207', 'Mac Mini:\r\nIntel Core 2-Duo CPU@2.4 GHz, 500GB HDD, 2 GB RAM DDR3, Keyboard, Optical Mouse,\r\n19”  LCD Dell Monitor', 'Apple (Mac Mini)', 5, 10),
('AB1', '207', 'Microprocessor Kits:\r\n8086/8088 Microprocessor Kits with LCD Display', 'Vi Micro Systems Model : Micro 86 /88 LCD', 35, 11),
('AB1', '207', 'Interface Kits\r\n8 Digit Multiplexed  (7 Segment Display)', 'Vi Micro Systems', 0, 12),
('AB1', '207', 'Stepper Motor Controller  With Motor', 'Vi Micro Systems', 5, 13),
('AB1', '207', 'Traffic Light Controller', 'Vi Micro Systems', 5, 14),
('AB1', '207', '8-Channel ADC', 'Vi Micro Systems', 5, 15),
('AB1', '207', 'Microprocessor Kits:\r\n8086/8088 Microprocessor Kits with LCD Display', 'TMI Systems', 35, 16),
('AB1', '207', 'Interface Kits\r\nKeyboard Interface Boards', 'TMI Systems', 5, 17),
('AB1', '207', 'Elevator Interface', 'TMI Systems', 5, 18),
('AB1', '207', 'Traffic Light Controller Interface', 'TMI Systems', 5, 19),
('AB1', '207', 'ADC /DAC Interface Board', 'TMI Systems', 5, 20),
('AB1', '207', 'ARM Kits', 'TMI Systems', 20, 21),
('AB1', '207', 'Digital /Logic IC Trainer Kit (DLT)', 'Vi Micro Systems', 15, 22),
('AB1', '207', 'Digital IC trainer Kit (DTK)', 'TMI Systems', 80, 23),
('AB1', '207', 'Embedded Development Boards with Accessories\r\nZ-Net Embedded Flat form', 'Zilogic Systems', 2, 24),
('AB1', '207', 'ARM Cortex M3\r\nDevelopment Platform', 'Zilogic Systems', 2, 25),
('AB1', '207', '8051 Development Kit\r\nwith Graphics Display', 'Zilogic Systems', 5, 26),
('AB1', '207', 'ZIO-Java Powered\r\nEmbedded Platform', 'Zilogic Systems', 2, 27),
('AB1', '207', '8051 RTOS Development Board\r\n(VI-51RTOS)', 'Vi Micro Systems', 30, 28),
('AB1', '207', 'Stepper Motor (2 Kg)', 'Vi Micro Systems', 5, 29),
('AB1', '207', 'AD 590 Transducer\r\n(Temperature Measurement)', 'Vi Micro Systems', 5, 30),
('AB1', '207', 'LPC 2378 Development Board\r\n( VI-Arm LPC 2378)', 'Vi Micro Systems', 3, 31),
('AB1', '207', 'Analog  IC Tester', 'TMI Systems', 1, 32),
('AB1', '207', 'Digital IC Tester', 'TMI Systems', 1, 34),
('AB1', '207', 'Logic Analyser', 'DVB100', 1, 35),
('AB1', '207', 'CRO (DSO)', 'Bestmach', 1, 36),
('AB1', '207', 'Intelligent Universal Programmer', 'Bestmach', 1, 37),
('AB1', '210', 'HP 280 G2 MT\r\nIntel Core i5-6500 CPU@3.20 GHz(Model HP optiplex 390), 4.00 GB RAM, 500GB HDD,Optical Mouse,Keyboard,\r\n17” LCD Monitor.', 'HP', 60, 38),
('AB1', '210', 'Dell Optiplex 390 systems\r\nIntel Core i5-2400 CPU @3.10Ghz Processor and 4GB RAM  and\r\n320 GB HDD 17” LCD monitor', 'Dell', 11, 39),
('AB1', '311', 'HP Systems\r\nIntel i5 processor,8 GB RAM,500 GB HDD,\r\nOptical Mouse, Keyboard ,\r\nHP LCD Monito', 'HP', 80, 40),
('AB1', '404A', 'HP Systems\r\nIntel i5 processor,8 GB RAM,500 GB HDD,\r\nOptical Mouse, Keyboard ,\r\nHP LCD Monito', 'Dell', 44, 41),
('AB1', '404A', 'HP Systems\r\nIntel i5 processor,8 GB RAM,500 GB HDD,\r\nOptical Mouse, Keyboard ,\r\nHP LCD Monito', 'Dell', 17, 42),
('AB1', '404A', 'HP Systems\r\nIntel i5 processor,8 GB RAM,500 GB HDD,\r\nOptical Mouse, Keyboard ,\r\nHP LCD Monito', 'HP', 1, 43),
('AB1', '404B', 'Lenovo systems\r\nThinkc m71e, Intel i3 CPU 3.10@Ghz Processor and 4 GB RAM, 500 GB HDD 19” LCD monitor', 'Lenovo', 13, 44),
('AB1', '404B', 'Lenovo Systems\r\nm71q mini, Intel i5 (6th  Gen)\r\n8 GB RAM\r\n1 TB hard disk', 'Lenovo', 38, 45),
('AB1', '404B', 'HP Systems\r\nIntel i5 processor,8 GB RAM,\r\n500 GB HDD, OpticalMouse, Keyboard , HP LCD Monitor', 'HP', 11, 46),
('AB1', '605A', 'Dell optiplex-390\r\nIntel Core i3\r\nCPU@3.3 GHz\r\nProcessor, 500 GB HDD, 4 GB RAM,  19” LCD Wide Screen Dell Monitor.', 'Dell', 72, 47),
('AB1', '605A', 'Lenovo Think centre\r\nIntel Core i3-2100 CPU @3.10 Ghz,4.00 GB RAM, 320GB HDD,OpticalMouse,Keyboard,\r\n17” LCD Monitor.\r\n', 'Lenovo', 1, 48),
('AB1', '605A', 'HP280\r\nG2 MT Business PC\r\nIntel core i5-6500 cpu@3.20 Ghz Processor,\r\n8GB RAM,500 GB HDD,\r\n18.5” LED Monitor.', 'HP', 2, 49),
('AB1', '605B', 'Dell Optiplex 390\r\nIntel Core i3\r\nCPU@3.3 GHz\r\nProcessor, 500 GB HDD, 4 GB RAM,  19”\r\nLCD Wide Screen Dell Monitor.', 'Dell', 72, 50),
('AB1', '605B', 'Lenovo systems  Thinkc M71e\r\nIntel i3 CPU 3.10@Ghz Processor and 4 GB RAM and 320 GB HDD 19” LCD monitor', 'Lenovo', 1, 51),
('AB1', '613', 'Dell Optiplex 390\r\nIntel Core i3-2120 CPU@3.30 GHz, 4.00 GB RAM, 500 GB HDD,Optical Mouse,Keyboard,\r\n19” LCD Monitor.', 'Dell', 66, 52),
('AB1', '613', 'Lenovo systems  Thinkc m71e\r\nIntel i3 CPU 3.10@Ghz Processor and 4 GB RAM and 320 GB HDD 19” LCD monitor', 'Lenovo', 3, 53),
('AB1', '614', 'Dell optiplex-390\r\na)Intel Core i5-2400 CPU @3.10Ghz(with GPU), 4.00 GB RAM, 500GB HDD,Optical Mouse,Keyboard,\r\n19” LCD Monitor.', 'Dell', 15, 54),
('AB1', '614', 'b)Intel Core i3-2120 CPU@3.30\r\nGHz,4.00 GB RAM, 500GB HDD,OpticalMouse,Keyboard,\r\n17” LCD Monitor.', 'Dell', 19, 55),
('AB1', '614', 'Lenovo Think centre\r\nIntel Core i3-2100 CPU @3.10 Ghz,4.00 GB RAM, 320GB HDD,OpticalMouse,Keyboard,\r\n17” LCD Monitor.', 'Lenovo', 15, 56),
('AB1', '614', 'Dell optiplex-380\r\nIntel core 2 Duo E7500@2.93Ghz,4.00 GB RAM, 500GB HDD,OpticalMouse,Keyboard,\r\n19” LCD Monitor.', 'Dell', 23, 57),
('AB1', '614', 'HP Systems\r\nIntel i5 processor,8 GB RAM,500 GB HDD, OpticalMouse,Keyboard ,HP 18.5” LCD Monitor.', 'HP', 2, 58),
('AB1', '209', 'Dell Optiplex 390\r\nIntel Core i3-2120 CPU@3.30 GHz(Model Dell optiplex 390), 4.00 GB RAM, 320GB HDD,Optical Mouse,Keyboard,\r\n17” LCD Monitor.', 'Dell', 31, 59),
('AB1', '209', 'Lenovo systems  ThinkcLIENT M710q\r\nIntel i5 CPU 2.40@Ghz Processor and 8GB RAM  and\r\n1 TB HDD 19” LCD monitor', 'Lenovo', 40, 60);

-- --------------------------------------------------------

--
-- Table structure for table `infrasw`
--

CREATE TABLE `infrasw` (
  `block` varchar(10) NOT NULL,
  `cno` varchar(10) NOT NULL,
  `package` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `license` varchar(50) NOT NULL,
  `sno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infrasw`
--

INSERT INTO `infrasw` (`block`, `cno`, `package`, `brand`, `license`, `sno`) VALUES
('AB1', '205', 'Operating System', 'Linux Mint 17.1', '174', 1),
('AB1', '205', 'Operating System', 'Windows 2003 server', '1', 2),
('AB1', '205', 'Application', 'Eclipse', '', 3),
('AB1', '205', 'Application', 'R Studio', '', 4),
('AB1', '205', 'Application', 'VMworkstation', '', 5),
('AB1', '205', 'Application', 'Netbeans', '', 6),
('AB1', '205', 'Complier /Interpreter', 'g++,jdk1.7 Compiler', '', 7),
('AB1', '205', 'Complier /Interpreter', 'IDLE Python2.7 and 3.4', '', 8),
('AB1', '205', 'Tools and design', 'Scilab', '', 9),
('AB1', '205', 'Tools and design', 'Yed Tool', '', 10),
('AB1', '205', 'Internet Browser', 'Firefox and Google chrome ', '', 11),
('AB1', '206', 'Operating System', 'Linux Mint 17.1', 'All Systems(Freeware)', 12),
('AB1', '206', 'Application', 'Eclipse 3.8', 'Freeware', 13),
('AB1', '206', 'Application', 'VM Player', 'Freeware', 14),
('AB1', '206', 'Application', 'R software 3.0.2', 'Freeware', 15),
('AB1', '206', 'Application', 'Rstudio 0.99', 'Freeware', 16),
('AB1', '206', 'Compiler/Interpreter', 'g++,  gcc 4.8.4', 'Freeware', 17),
('AB1', '206', 'Compiler/Interpreter', 'java 1.7,  jdk1.7 Compiler', 'Freeware', 18),
('AB1', '206', 'Compiler/Interpreter', 'IDLE Python 3.4.3', 'Freeware', 19),
('AB1', '206', 'Tools and Design', 'Dia Tool', 'Freeware', 20),
('AB1', '206', 'Tools and Design', 'yED 3.14.2', 'Freeware', 21),
('AB1', '206', 'Internet Browser', 'Google chrome and Mozilla Fire fox', 'Freeware', 22),
('AB1', '207', 'Operating System', 'Windows XP/Windows7/Windows 10', '39 (Microsoft Campus Agreement) (From CTS)', 23),
('AB1', '207', 'Operating System', 'MAC OS 10.8  (MAC Mini)', '5,5', 24),
('AB1', '207', 'Packages', 'Msoffice-2007/2010', 'Microsoft Campus Agreement (From CTS)', 25),
('AB1', '207', 'Packages', 'Masm 6.11', 'Freeware', 26),
('AB1', '207', 'Packages', 'Dos Box 7', 'Freeware', 27),
('AB1', '207', 'Packages', 'Adobe Reader 9.3.0/ Adobe Reader 11.0', 'Freeware', 28),
('AB1', '207', 'Compiler/Interpreter', 'Developer C++  4.9.9.2', 'Freeware', 29),
('AB1', '207', 'Compiler/Interpreter', 'Java (Jdk 1.6.0)', 'Freeware', 30),
('AB1', '207', 'Application', 'Keil  uVision 4.53 for VI micro RTOS Kits', 'Freeware', 31),
('AB1', '207', 'Application', 'Keil  uVision 4.21 for TMI ARM Kits', 'Freeware', 32),
('AB1', '207', 'Application', 'Ride IDE  for VI micro RTOS Kits', 'Freeware', 33),
('AB1', '207', 'Application', 'Flash Magic 3.68  for VI micro RTOS Kits', '', 34),
('AB1', '207', 'Application', 'Flash Magic 6.01 for TMI ARM Kits', 'Freeware', 35),
('AB1', '207', 'Application', 'IAR Embedded workbench', 'Freeware', 36),
('AB1', '207', 'Application', 'Win ISP', 'Freeware', 37),
('AB1', '207', 'Application', 'Win X Talk', 'Freeware', 38),
('AB1', '207', 'Application', 'Win Rar / Winzip', 'Freeware', 39),
('AB1', '207', 'Application', 'Xcode2 for Mac mini', 'Freeware', 40),
('AB1', '207', 'Application', 'Titanium Studio for Mac mini', 'Freeware', 41),
('AB1', '207', 'Tools', 'Ccleaner 4.08', 'Freeware', 42),
('AB1', '207', 'Anti Virus', 'K7 Anti Virus', 'Campus volume agreement', 43),
('AB1', '210', 'Operating System', 'Windows7 Windows 8.1 Professional Servicepack1', 'Microsoft Campus Volume Agreement (60 systems)', 44),
('AB1', '210', 'Operating System', 'Linux Mint17.1', 'Open Source (11 systems)', 45),
('AB1', '210', 'Application', 'YEd Graphics Editor', 'Freeware', 46),
('AB1', '210', 'Application', 'Python 3.4.3', 'Freeware', 47),
('AB1', '210', 'Application', 'R', 'Freeware', 48),
('AB1', '210', 'Application', 'RStudio', 'Freeware', 49),
('AB1', '210', 'Application', 'Microsoft Visual Studio', 'Campus agreement', 50),
('AB1', '210', 'Application', 'Netbeans IDE 8.0.2', '', 51),
('AB1', '210', 'Application', 'Eclipse', 'Freeware', 52),
('AB1', '210', 'Application', 'Microsoft Office 2007', 'Microsoft Campus Agreement', 53),
('AB1', '210', 'Compiler/Interpreter', 'Dev- c++(4.9.9.2)', 'Freeware', 54),
('AB1', '210', 'Compiler/Interpreter', 'java (jdk1.6.)', 'Freeware', 55),
('AB1', '210', 'Tool and design', 'Winrar 4.20', 'Freeware', 56),
('AB1', '210', 'Tool and design', 'Ccleaner 4.08.4428', 'Freeware', 57),
('AB1', '210', 'Antivirus', 'K7 Antivirus', 'Campus Volume Agreement', 58),
('AB1', '311', 'Operating System', 'Linux Mint 17.1/ Windows 8', '79', 59),
('AB1', '311', 'Operating System', 'Windows 2012 server', '1', 60),
('AB1', '311', 'Application', 'Eclipse,NETBEAN', 'Freeware', 61),
('AB1', '311', 'Application', 'Microsoft Office 2010', 'Microsoft Campus Agreement', 62),
('AB1', '311', 'Application', 'Matlab 2016', 'Matlab lic', 63),
('AB1', '311', 'Application', 'Microsoft visual studio 2010', 'Microsoft Campus Agreement', 64),
('AB1', '311', 'Application', 'VM Player', 'Freeware', 65),
('AB1', '311', 'Application', 'R Studio', 'Freeware', 66),
('AB1', '311', 'Complier /Interpreter	', 'g++,jdk1.7', 'Free ware', 67),
('AB1', '311', 'Complier /Interpreter', 'IDLE Python2.7 and 3.4', 'Freeware', 68),
('AB1', '311', 'Tools and design', 'Docker', 'Freeware', 69),
('AB1', '311', 'Tools and design', 'Winrar', 'Freeware', 70),
('AB1', '311', 'Tools and design', 'Yed Tool', 'Freeware', 71),
('AB1', '311', 'Tools and design', 'Umbrello', 'Freeware', 72),
('AB1', '311', 'Tools and design', 'Scilab', 'Freeware', 73),
('AB1', '311', 'Tools and design', 'Anaconda navigator', 'Freeware', 74),
('AB1', '311', 'Tools and design', 'CiscoPacket Tracer 6', 'Freeware', 75),
('AB1', '311', 'Internet Browser', 'Google chrome & firefox', 'Freeware', 76),
('AB1', '311', 'Antivirus', 'K7 Antivirus', 'Campus Volume Agreement', 77),
('AB1', '404A', 'Operating System', 'Windows XP', 'Microsoft Campus Agreement', 78),
('AB1', '404A', 'Application', 'MATLAB 2015 			', '', 79),
('AB1', '404A', 'Application', 'R Studio', '', 80),
('AB1', '404A', 'Application', 'Microsoft Visual Studio 2010', '', 81),
('AB1', '404A', 'Complier /Interpreter', 'Dev c++ 			', '', 82),
('AB1', '404A', 'Complier /Interpreter', 'IDLE Python 2.7 and 3.4', '', 83),
('AB1', '404A', 'Internet Browser', 'Google chrome, Firefox', '', 84),
('AB1', '404B', 'Operating System', 'Windows 10/ Linux Mint', 'Microsoft Campus Agreement', 85),
('AB1', '404B', 'Application', 'R Studio', '', 86),
('AB1', '404B', 'Application', 'YEd Graph editor', '', 87),
('AB1', '404B', 'Application', 'Idle Python', '', 88),
('AB1', '404B', 'Complier /Interpreter', 'Gcc, Java, Netbeans', '', 89),
('AB1', '404B', 'Internet Browser', 'Google chrome, Firefox', '', 90),
('AB1', '605A', 'Operating System', 'Linux Mint 17.1', 'Open Source', 91),
('AB1', '605A', 'Operating System', 'Windows 2008 server', '1(Campus Agreement)', 92),
('AB1', '605A', 'Application', 'Eclipse		', 'Freeware', 93),
('AB1', '605A', 'Application', 'R Studio', 'Freeware ', 94),
('AB1', '605A', 'Application', 'VM Player', 'Freeware ', 95),
('AB1', '605A', 'Application', 'Netbeans IDLE ', 'Freeware', 96),
('AB1', '605A', 'Complier /Interpreter 		', 'G++,Gcc', 'Freeware', 97),
('AB1', '605A', 'Complier /Interpreter', 'IDLE Python2.7 and 3.4', 'Freeware', 98),
('AB1', '605A', 'Tools and design	', 'Dia Tool', 'Freeware', 99),
('AB1', '605A', 'Tools and design', 'Yed Tool', 'Freeware ', 100),
('AB1', '605A', 'Tools and design', 'Umbrello', 'Freeware', 101),
('AB1', '605A', 'Tools and design', 'Scilab', 'Freeware', 102),
('AB1', '605A', 'Tools and design', 'Scidavis', 'Freeware', 103),
('AB1', '605A', 'Tools and design', 'Gimp Image Editor', 'Freeware', 104),
('AB1', '605A', 'Tools and design', 'Texmaker', 'Freeware', 105),
('AB1', '605A', 'Internet Browser', 'Google chrome, chromium and Opera', 'Freeware', 106),
('AB1', '605B', ' Operating System', 'Windows 7', 'Microsoft Campus Agreement', 107),
('AB1', '605B', ' Operating System', 'Windows 2008 server', 'Microsoft Campus Agreement', 108),
('AB1', '605B', 'Application ', 'Scilab-5.5.2', 'Freeware ', 109),
('AB1', '605B', 'Application', 'Android studio-1.5.1', 'Freeware', 110),
('AB1', '605B', 'Application', 'strawberry perl ', 'Freeware', 111),
('AB1', '605B', 'Application', 'Xampp v 3.1.0.1 ', 'Freeware', 112),
('AB1', '605B', 'Application', 'Neo4JCE 3.0.6', 'Freeware ', 113),
('AB1', '605B', 'Application', 'Appache tomcat-8.0', 'Freeware ', 114),
('AB1', '605B', 'Application', 'Eclipse Juno', 'Freeware ', 115),
('AB1', '605B', 'Application', 'VMPlayer ', 'Freeware', 116),
('AB1', '605B', 'Application', 'Microsoft Office 2003', 'Microsoft Campus Agreement ', 117),
('AB1', '605B', 'Application', 'Microsoft visual studio-2010', 'Microsoft Campus Agreement ', 118),
('AB1', '605B', 'Application	', 'Netbeans 8.0.2', 'Freeware', 119),
('AB1', '605B', 'Database		', 'SQL SERVER-2008 ', 'Microsoft Campus Agreement ', 120),
('AB1', '605B', 'Database', 'Oracle 11g', 'Student Edition', 121),
('AB1', '605B', 'Complier /Interpreter	', 'Dev- c++(4.9.9.2)', 'Freeware', 122),
('AB1', '605B', 'Complier /Interpreter', 'Java -1.8', 'Freeware', 123),
('AB1', '605B', 'Tools and Design', 'Winrar 4.20', 'Freeware', 124),
('AB1', '605B', 'Tools and Design', 'Ccleaner 4.08.4428', 'Freeware', 125),
('AB1', '605B', 'Antivirus', 'K7 Antivirus', 'Unlimited', 126),
('AB1', '613', 'Operating System', 'Windows XP Professional version2002 Servicepack3', 'Microsoft Campus Volume Agreement', 127),
('AB1', '613', 'Application', 'IBM Rational Quality Manager 2.0', '90', 128),
('AB1', '613', 'Application', 'IBM Rational Functional Tester 7.0', '90', 129),
('AB1', '613', 'Application', 'IBM Rational Software Architect 7.0', '90', 130),
('AB1', '613', 'Application', 'Rational Rose Enterprise Edition 8.6.0610.05', '90', 131),
('AB1', '613', 'Application', 'Requisite Pro v2003', '90', 132),
('AB1', '613', 'Application', 'IBM Rational Performance Tester', 'IBM Academic Initiative Free', 133),
('AB1', '613', 'Application', 'Eclipse Juno', 'Freeware', 134),
('AB1', '613', 'Application', 'Microsoft Office 2003', 'Microsoft Campus Agreement', 135),
('AB1', '613', 'Application', 'source monitor', 'Freeware', 136),
('AB1', '613', 'Application', 'Function Point modeler software', 'Freeware', 137),
('AB1', '613', 'Application', 'Win compare, active file compare', 'Freeware', 138),
('AB1', '613', 'Application', 'Tortoise soft', 'Freeware', 139),
('AB1', '613', 'Complier /Interpreter		', 'Dev- c++(4.9.9.2)', 'Freeware', 140),
('AB1', '613', 'Complier /Interpreter', 'java (jdk1.6.)', 'Freeware', 141),
('AB1', '613', 'Tools and design', 'Winrar 4.20', 'Freeware', 142),
('AB1', '613', 'Tools and design', 'Ccleaner 4.08.4428	', 'Freeware', 143),
('AB1', '613', 'Antivirus	', 'K7 Antivirus', 'Campus Volume Agreement', 144),
('AB1', '614', 'Operating System', 'Linux Mint ', 'Open Source Software 73 Systems   ', 145),
('AB1', '614', 'Operating System', 'Windows 2003 server', 'Microsoft Campus Agreement -1 system', 146),
('AB1', '614', 'Application		 				', 'Eclipse', '', 147),
('AB1', '614', 'Application', 'R Studio ', '', 148),
('AB1', '614', 'Application', 'VM Player,VMworkstation', '', 149),
('AB1', '614', 'Complier/Interpretor		', 'g++,jdk1.7 Compiler', '', 150),
('AB1', '614', 'Complier/Interpretor', 'IDLE Python2.7 and 3.4', '', 151),
('AB1', '614', 'Tools and design', 'Dia Tool', '', 152),
('AB1', '614', 'Tools and design', 'Yed Tool', '', 153),
('AB1', '614', 'Tools and design', 'Umbrello', '', 154),
('AB1', '614', 'Tools and design', 'Scilab ', '', 155),
('AB1', '614', 'Tools and design', 'Scidavis ', '', 156),
('AB1', '614', 'Tools and design', 'Wireshark', '', 157),
('AB1', '614', 'Tools and design', 'CiscoPacket Tracer', '', 158),
('AB1', '614', 'Internet Browser', 'Google chrome and Opera', '', 159),
('AB1', '209', 'Operating System', 'Windows 7 Windows 10 Professional Servicepack1', 'Microsoft Campus Volume agreement (71 systems)', 161),
('AB1', '209', 'Operating System', 'Linux Mint18.1', 'Open Source (40 systems)', 162),
('AB1', '209', 'Application', 'YEd Graphics Editor ', 'Freeware ', 163),
('AB1', '209', 'Application', 'Python 3.4.3	', 'Freeware', 164),
('AB1', '209', 'Application', 'R', 'Freeware', 165),
('AB1', '209', 'Application', 'RStudio', 'Freeware', 166),
('AB1', '209', 'Application', 'Microsoft Visual Studio	', 'Microsoft Campus Agreement', 167),
('AB1', '209', 'Application', 'Netbeans IDE 8.0.2	', 'Freeware', 168),
('AB1', '209', 'Application', 'Microsoft Office 2007	', 'Microsoft Campus Agreement', 169),
('AB1', '209', 'Application', 'Eclipse', 'Freeware', 170),
('AB1', '209', 'Compiler/Interpreter', 'Dev- c++(4.9.9.2)', 'Freeware', 171),
('AB1', '209', 'Compiler/Interpreter', 'java (jdk1.6.)', 'Freeware', 172),
('AB1', '209', 'Tools and design', 'Winrar 4.20', 'Freeware', 173),
('AB1', '209', 'Tools and design', 'Ccleaner 4.08.4428', 'Freeware', 174),
('AB1', '209', 'Antivirus', 'K7 Antivirus', 'Campus Agreement', 175);

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
('qwerty', 'AB1-205', '2017-12-25', '06:00', '13:00', 'poilkjnmbmnb nds s12 e3', 932),
('qwerty', 'AB1-205', '2017-12-26', '06:00', '13:00', 'poilkjnmbmnb nds s12 e3', 933),
('qwerty', 'AB1-205', '2017-12-27', '06:00', '13:00', 'poilkjnmbmnb nds s12 e3', 934),
('qwerty', 'AB1-205', '2017-12-28', '06:00', '13:00', 'poilkjnmbmnb nds s12 e3', 935),
('qwerty', 'AB1-205', '2017-12-29', '06:00', '13:00', 'poilkjnmbmnb nds s12 e3', 936),
('qwerty', 'AB1-205', '2017-12-30', '06:00', '13:00', 'poilkjnmbmnb nds s12 e3', 937),
('qwerty', 'AB1-205', '2017-12-31', '06:00', '13:00', 'poilkjnmbmnb nds s12 e3', 938),
('qwerty', 'AB1-205', '2018-01-01', '06:00', '13:00', 'poilkjnmbmnb nds s12 e3', 939),
('qwerty', 'AB1-205', '2018-01-02', '06:00', '13:00', 'poilkjnmbmnb nds s12 e3', 940),
('qwerty', 'AB1-205', '2018-01-03', '06:00', '13:00', 'poilkjnmbmnb nds s12 e3', 941),
('qwerty', 'AB1-205', '2018-01-04', '06:00', '13:00', 'poilkjnmbmnb nds s12 e3', 942),
('qwerty', 'AB1-205', '2018-01-05', '06:00', '13:00', 'poilkjnmbmnb nds s12 e3', 943),
('qwerty', 'AB1-205', '2018-01-06', '06:00', '13:00', 'poilkjnmbmnb nds s12 e3', 944),
('qwerty', 'AB1-205', '2018-01-07', '06:00', '13:00', 'poilkjnmbmnb nds s12 e3', 945),
('qwerty', 'AB1-205', '2018-01-08', '06:00', '13:00', 'poilkjnmbmnb nds s12 e3', 946),
('qwerty', 'AB1-205', '2018-01-09', '06:00', '13:00', 'poilkjnmbmnb nds s12 e3', 947),
('qwerty', 'AB1-205', '2018-01-10', '06:00', '13:00', 'poilkjnmbmnb nds s12 e3', 948),
('qwerty', 'AB1-205', '2018-01-11', '06:00', '13:00', 'poilkjnmbmnb nds s12 e3', 949),
('qwerty', 'AB1-205', '2018-01-12', '06:00', '13:00', 'poilkjnmbmnb nds s12 e3', 950),
('qwerty', 'AB1-205', '2018-01-13', '06:00', '13:00', 'poilkjnmbmnb nds s12 e3', 951),
('qwerty', 'AB1-205', '2018-01-14', '06:00', '13:00', 'poilkjnmbmnb nds s12 e3', 952),
('qwerty', 'AB1-205', '2018-01-15', '06:00', '13:00', 'poilkjnmbmnb nds s12 e3', 953),
('qwerty', 'AB1-205', '2018-01-16', '06:00', '13:00', 'poilkjnmbmnb nds s12 e3', 954),
('qwerty', 'AB1-205', '2018-01-17', '06:00', '13:00', 'poilkjnmbmnb nds s12 e3', 955),
('qwerty', 'AB1-205', '2018-01-18', '06:00', '13:00', 'poilkjnmbmnb nds s12 e3', 956),
('qwerty', 'AB1-205', '2018-01-19', '06:00', '13:00', 'poilkjnmbmnb nds s12 e3', 957),
('qwerty', 'AB1-205', '2018-01-20', '06:00', '13:00', 'poilkjnmbmnb nds s12 e3', 958),
('qwerty', 'AB1-205', '2018-01-21', '06:00', '13:00', 'poilkjnmbmnb nds s12 e3', 959),
('qwerty', 'AB1-205', '2018-01-22', '06:00', '13:00', 'poilkjnmbmnb nds s12 e3', 960),
('qwerty', 'AB1-205', '2018-01-23', '06:00', '13:00', 'poilkjnmbmnb nds s12 e3', 961),
('qwerty', 'AB1-205', '2018-01-24', '06:00', '13:00', 'poilkjnmbmnb nds s12 e3', 962),
('qwerty', 'AB1-205', '2018-01-25', '06:00', '13:00', 'poilkjnmbmnb nds s12 e3', 963),
('qwerty', 'AB1-205', '2018-01-26', '06:00', '13:00', 'poilkjnmbmnb nds s12 e3', 964),
('qwerty', 'AB1-205', '2018-01-27', '06:00', '13:00', 'poilkjnmbmnb nds s12 e3', 965),
('qwerty', 'AB1-205', '2018-01-28', '06:00', '13:00', 'poilkjnmbmnb nds s12 e3', 966),
('qwerty', 'AB1-205', '2018-01-29', '06:00', '13:00', 'poilkjnmbmnb nds s12 e3', 967),
('qwerty', 'AB1-205', '2018-01-30', '06:00', '13:00', 'poilkjnmbmnb nds s12 e3', 968),
('qwerty', 'AB1-205', '2018-01-31', '06:00', '13:00', 'poilkjnmbmnb nds s12 e3', 969),
('qwerty', 'AB1-205', '2018-02-01', '06:00', '13:00', 'poilkjnmbmnb nds s12 e3', 970);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `incharge`
--
ALTER TABLE `incharge`
  ADD PRIMARY KEY (`block`,`cno`);

--
-- Indexes for table `infrahw`
--
ALTER TABLE `infrahw`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `infrasw`
--
ALTER TABLE `infrasw`
  ADD PRIMARY KEY (`sno`);

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
-- AUTO_INCREMENT for table `infrahw`
--
ALTER TABLE `infrahw`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `infrasw`
--
ALTER TABLE `infrasw`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=971;

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
