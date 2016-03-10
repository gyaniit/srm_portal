-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2016 at 12:51 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_details_table`
--

CREATE TABLE `company_details_table` (
  `companyname` varchar(20) CHARACTER SET ascii DEFAULT NULL,
  `designation` varchar(40) CHARACTER SET armscii8 DEFAULT NULL,
  `numberofcand` int(255) DEFAULT NULL,
  `jobdescription` varchar(1000) CHARACTER SET armscii8 DEFAULT NULL,
  `package` varchar(100) CHARACTER SET armscii8 DEFAULT NULL,
  `email` varchar(20) CHARACTER SET armscii8 DEFAULT NULL,
  `dateofvisit` varchar(10) CHARACTER SET armscii8 DEFAULT NULL,
  `branch` varchar(50) CHARACTER SET armscii8 DEFAULT NULL,
  `cgpa` decimal(4,0) DEFAULT NULL,
  `xcutoffcent` int(4) DEFAULT NULL,
  `xiicutoffcent` int(4) DEFAULT NULL,
  `commentsifany` varchar(200) CHARACTER SET armscii8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_details_table`
--

INSERT INTO `company_details_table` (`companyname`, `designation`, `numberofcand`, `jobdescription`, `package`, `email`, `dateofvisit`, `branch`, `cgpa`, `xcutoffcent`, `xiicutoffcent`, `commentsifany`) VALUES
('dsad', 'fzdbd', 0, 'dsfs', 'dsvsv', 'dsvs@gmail.com', '3e2', 'sdfvasfd', '6', 56, 56, 'sdhsrt'),
('dsad', 'fzdbd', 12, 'dsfs', 'dsvsv', 'dsvs@gmail.com', '3e2', 'sdfvasfd', '6', 56, 56, 'sdhsrt');

-- --------------------------------------------------------

--
-- Table structure for table `student_details_table`
--

CREATE TABLE `student_details_table` (
  `branch_id` int(10) DEFAULT NULL,
  `branch_roll` varchar(10) CHARACTER SET ascii DEFAULT NULL,
  `name` varchar(20) CHARACTER SET ascii DEFAULT NULL,
  `username` varchar(20) CHARACTER SET ascii DEFAULT NULL,
  `password` varchar(20) CHARACTER SET ascii DEFAULT NULL,
  `father_name` varchar(20) CHARACTER SET ascii DEFAULT NULL,
  `mother_name` varchar(20) CHARACTER SET ascii DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `email` varchar(20) CHARACTER SET armscii8 DEFAULT NULL,
  `branch` varchar(20) CHARACTER SET ascii DEFAULT NULL,
  `year` varchar(20) CHARACTER SET ascii DEFAULT NULL,
  `cgpa` int(2) DEFAULT NULL,
  `job` varchar(20) CHARACTER SET ascii DEFAULT NULL,
  `company_applied` varchar(20) CHARACTER SET ascii DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details_table`
--

INSERT INTO `student_details_table` (`branch_id`, `branch_roll`, `name`, `username`, `password`, `father_name`, `mother_name`, `dob`, `email`, `branch`, `year`, `cgpa`, `job`, `company_applied`) VALUES
(0, 'ewfawfaw', 'Adarsha Das', 'asddas', '123', 'adwwad', 'asfasf', '2000/12/3', 'dfsf@iitbhu.com', 'feawfa', 'IIT BHU', 8, 'not yet', 'no'),
(0, 'ewfawfaw', 'Adarsha Das', 'asddas', 'qwe', 'adwwad', 'asfasf', '2000/12/3', 'dfsf@iitbhu.com', 'feawfa', 'IIT BHU', 8, 'not yet', 'no'),
(0, '1232', 'Adarsha Das', 'asdfg', 'asdfg', 'weR', 'WQSDCAW', '1231', 'adarsha.das.min12@ii', '123123', 'IIT BHU', 1, 'not yet', 'no'),
(0, 'vSZDV', 'Adarsha Das', 'qwerty', 'qwerty', 'dcfs', 'cdsv', 'dcsdcS', 'adarsha.das.min12@ii', 'vds', 'IIT BHU', 3, 'not yet', 'no'),
(0, 'vSZDV', 'Adarsha Das', 'qwerty', 'qwerty', 'dcfs', 'cdsv', 'dcsdcS', 'adarsha.das.min12@ii', 'vds', 'IIT BHU', 3, 'not yet', 'no'),
(0, 'vSZDV', 'Adarsha Das', 'qwerty', 'qwerty', 'dcfs', 'cdsv', 'dcsdcS', 'adarsha.das.min12@ii', 'vds', 'IIT BHU', 3, 'not yet', 'no'),
(0, 'vSZDV', 'Adarsha Das', 'qwerty', 'qwerty', 'dcfs', 'cdsv', 'dcsdcS', 'adarsha.das.min12@ii', 'vds', 'IIT BHU', 3, 'not yet', 'no'),
(0, 'vSZDV', 'Adarsha Das', 'qwerty', 'qwerty', 'dcfs', 'cdsv', 'dcsdcS', 'adarsha.das.min12@ii', 'vds', 'IIT BHU', 3, 'not yet', 'no'),
(0, 'vSZDV', 'Adarsha Das', 'qwerty', 'qwerty', 'dcfs', 'cdsv', 'dcsdcS', 'adarsha.das.min12@ii', 'vds', 'IIT BHU', 3, 'not yet', 'no'),
(0, 'vSZDV', 'Adarsha Das', 'qwerty', 'qwerty', 'dcfs', 'cdsv', 'dcsdcS', 'adarsha.das.min12@ii', 'vds', 'IIT BHU', 3, 'not yet', 'no'),
(0, 'vSZDV', 'Adarsha Das', 'qwerty', '123456', 'dcfs', 'cdsv', 'dcsdcS', 'adarsha.das.min12@ii', 'vds', 'IIT BHU', 3, 'not yet', 'no'),
(0, 'vSZDV', 'Adarsha Das', 'qwerty', '123456', 'dcfs', 'cdsv', 'dcsdcS', 'adarsha.das.min12@ii', 'vds', 'IIT BHU', 3, 'not yet', 'no'),
(0, 'hgjhgjhg', 'jhgjhg', 'abcdef', '123456', 'jhgjh', 'gjhgj', 'jhgjhg', 'jhghjgj@fdf.com', 'jhgjhg', 'jhgjhg', 0, 'not yet', 'no'),
(0, 'hgjhgjhg', 'jhgjhg', 'abcdef', '123456', 'jhgjh', 'gjhgj', 'jhgjhg', 'jhghjgj@fdf.com', 'jhgjhg', 'jhgjhg', 0, 'not yet', 'no'),
(0, 'hgjhgjhg', 'jhgjhg', 'abcdef', '123456', 'jhgjh', 'gjhgj', 'jhgjhg', 'jhghjgj@fdf.com', 'jhgjhg', 'jhgjhg', 0, 'not yet', 'no'),
(0, 'hgjhgjhg', 'jhgjhg', 'abcdef', '123456', 'jhgjh', 'gjhgj', 'jhgjhg', 'jhghjgj@fdf.com', 'jhgjhg', 'jhgjhg', 0, 'not yet', 'no'),
(0, 'hgjhgjhg', 'jhgjhg', 'abcdef', '123456', 'jhgjh', 'gjhgj', 'jhgjhg', 'jhghjgj@fdf.com', 'jhgjhg', 'jhgjhg', 0, 'not yet', 'no');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
