-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2015 at 03:42 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lbas_hr`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `S_Code` varchar(15) NOT NULL,
  `ID_No` int(11) NOT NULL,
  `A_Status` int(11) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `leave`
--

CREATE TABLE IF NOT EXISTS `leave` (
  `L_Code` varchar(15) NOT NULL,
  `ID_No` int(11) NOT NULL,
  `L_Start` date NOT NULL,
  `L_End` int(11) NOT NULL,
  `Reason` varchar(150) NOT NULL,
  `L_Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `ID_No` int(11) NOT NULL DEFAULT '0',
  `L_Name` varchar(15) NOT NULL,
  `F_Name` varchar(15) NOT NULL,
  `M_Name` int(15) NOT NULL,
  `B_Day` date NOT NULL,
  `Gender` int(6) NOT NULL,
  `C_Status` int(10) NOT NULL,
  `E_Status` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resignation`
--

CREATE TABLE IF NOT EXISTS `resignation` (
  `R_Code` varchar(15) NOT NULL,
  `ID_No` int(11) NOT NULL,
  `Reason` varchar(500) NOT NULL,
  `D_Filed` date NOT NULL,
  `R_Status` varchar(10) NOT NULL,
  `D_Approved` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE IF NOT EXISTS `resume` (
  `ID_No` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `M_No` int(11) NOT NULL,
  `T_No` int(11) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Street` varchar(40) NOT NULL,
  `Z_Code` int(11) NOT NULL,
  `C_Status` varchar(12) NOT NULL,
  `H_School` varchar(30) NOT NULL,
  `College` varchar(30) NOT NULL,
  `Course` varchar(15) NOT NULL,
  `Y_Graduated` date NOT NULL,
  `Awards` varchar(500) NOT NULL,
  `S_Attended` varchar(500) NOT NULL,
  `S_Facilitated` varchar(500) NOT NULL,
  `C_Activities` varchar(500) NOT NULL,
  `Specialty` varchar(150) NOT NULL,
  `P_Company` varchar(30) NOT NULL,
  `P_Position` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `retirement`
--

CREATE TABLE IF NOT EXISTS `retirement` (
  `Ret_Code` varchar(15) NOT NULL,
  `ID_No` int(11) NOT NULL,
  `Ret_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `termination`
--

CREATE TABLE IF NOT EXISTS `termination` (
  `T_Code` varchar(15) NOT NULL,
  `ID_No` int(11) NOT NULL,
  `T_Date` date NOT NULL,
  `Reason` int(11) NOT NULL,
  `T_Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `person`
--
ALTER TABLE `person`
 ADD PRIMARY KEY (`ID_No`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
