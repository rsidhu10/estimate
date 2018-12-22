CREATE TABLE `dwsspb`.`technical_approvals` 
( `id` INT NOT NULL AUTO_INCREMENT , 
`scheme_id` VARCHAR(5) NOT NULL , 
`tech_approval_no` VARCHAR(10) NOT NULL , 
`tech_approval_date` DATE NOT NULL , 
`tech_approval_amt` FLOAT(8,2) NOT NULL , 
`ta_by` INT(2) NOT NULL , 
`ta_type` INT(2) NOT NULL , 

PRIMARY KEY (`id`)) ENGINE = InnoDB; 


ALTER TABLE `technical_approvals` ADD `timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP AFTER `ta_type`; 



-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2018 at 06:08 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dwsspb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminapprovals`
--

CREATE TABLE `adminapprovals` (
  `ID` int(11) NOT NULL,
  `zone_id` varchar(3) CHARACTER SET latin1 NOT NULL,
  `circle_id` varchar(3) CHARACTER SET latin1 NOT NULL,
  `district_id` varchar(3) CHARACTER SET latin1 NOT NULL,
  `division_id` varchar(5) CHARACTER SET latin1 NOT NULL,
  `subdivisionid` varchar(7) CHARACTER SET latin1 NOT NULL,
  `block_id` varchar(6) CHARACTER SET latin1 NOT NULL,
  `scheme_id` bigint(6) NOT NULL,
  `atype` tinyint(4) NOT NULL,
  `approvedby` tinyint(4) NOT NULL,
  `aa_no` varchar(20) CHARACTER SET latin1 NOT NULL,
  `aa_date` date NOT NULL,
  `component` int(11) NOT NULL,
  `aa_amt` decimal(8,3) NOT NULL,
  `wbshare` decimal(8,3) NOT NULL,
  `stateshare` decimal(8,3) NOT NULL,
  `nrdwp` decimal(8,3) NOT NULL,
  `work_dropped` tinyint(1) NOT NULL DEFAULT '0',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminapprovals`
--
ALTER TABLE `adminapprovals`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminapprovals`
--
ALTER TABLE `adminapprovals`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;




/* Create Table Contracts Awarded   */

CREATE TABLE `contractsawarded` (
  `ID` int(11) NOT NULL,
  `zone_id` varchar(3) CHARACTER SET latin1 NOT NULL,
  `circle_id` varchar(3) CHARACTER SET latin1 NOT NULL,
  `district_id` varchar(3) CHARACTER SET latin1 NOT NULL,
  `division_id` varchar(5) CHARACTER SET latin1 NOT NULL,
  `subdivisionid` varchar(7) CHARACTER SET latin1 NOT NULL,
  `block_id` varchar(6) CHARACTER SET latin1 NOT NULL,
  `scheme_id` bigint(6) NOT NULL,
  `contract_type` tinyint(4) NOT NULL,
  `awarded_by` tinyint(4) NOT NULL,
  `contract_no` varchar(20) CHARACTER SET latin1 NOT NULL,
  `contract_date` date NOT NULL,
  `aa_amt` decimal(8,3) NOT NULL,
  `awarded_to` varchar(3) CHARACTER SET latin1 NOT NULL,
  `commencement_date` date NOT NULL,
  `completion_date` date NOT NULL,
  `work_completed` varchar(3) CHARACTER SET latin1 NOT NULL,
  `actual_completion_date` date NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminapprovals`
--
ALTER TABLE `adminapprovals`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminapprovals`
--
ALTER TABLE `adminapprovals`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
