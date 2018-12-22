CREATE TABLE `esti_habs` (
  `ID` INT NOT NULL AUTO_INCREMENT ,
  `zone_id` varchar(3) CHARACTER SET latin1 NOT NULL,
  `circle_id` varchar(3) CHARACTER SET latin1 NOT NULL,
  `district_id` varchar(3) CHARACTER SET latin1 NOT NULL,
  `division_id` varchar(5) CHARACTER SET latin1 NOT NULL,
  `subdivisionid` varchar(7) CHARACTER SET latin1 NOT NULL,
  `block_id` varchar(6) CHARACTER SET latin1 NOT NULL,
  `scheme_id` bigint(6) NOT NULL,
  `habitation_id` bigint(6) NOT NULL,
  `con_comp1` int(5),
  `con_comp2` int(5),
  `con_comp3` int(5),
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;





-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2018 at 02:54 PM
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
-- Table structure for table `esti_habs`
--

CREATE TABLE `esti_habs` (
  `id` int(11) NOT NULL,
  `zone_id` varchar(3) NOT NULL,
  `circle_id` varchar(3) NOT NULL,
  `district_id` varchar(3) NOT NULL,
  `division_id` varchar(5) NOT NULL,
  `subdivision` varchar(7) NOT NULL,
  `block_id` varchar(6) NOT NULL,
  `scheme_id` varchar(6) NOT NULL,
  `village_id` varchar(6) NOT NULL,
  `conn_component1` int(5) NOT NULL,
  `conn_component2` int(5) NOT NULL,
  `conn_component3` int(5) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `esti_habs`
--
ALTER TABLE `esti_habs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `esti_habs`
--
ALTER TABLE `esti_habs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;





CREATE TABLE `allotments` (
  `id` int(11) NOT NULL,
  `scheme_id` varchar(6) NOT NULL,
  `cont_name` varchar(25), 
  `cont_no` varchar(6) NOT NULL,
  `cont_dt` date,
  `cont_amt` int(10) NOT NULL,
  `cont_time` int(10) NOT NULL,
  `commence_dt` date,
  `completion_dt` date,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `esti_habs`
--
ALTER TABLE `tech_approval`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `esti_habs`
--
ALTER TABLE `tech_approval`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



CREATE TABLE `noc_rec` (
  `id` int(11) NOT NULL,
  `scheme_id` varchar(6) NOT NULL,
  `noc_received` int(1) NOT NULL, 
  `noc_no` varchar(6) NOT NULL,
  `noc_dt` date,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
ALTER TABLE `noc_rec`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `noc_rec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*