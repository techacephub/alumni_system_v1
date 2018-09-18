-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2018 at 07:08 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `Department_id` int(11) NOT NULL AUTO_INCREMENT,
  `Department` varchar(255) NOT NULL,
  PRIMARY KEY (`Department_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `Event_id` int(11) NOT NULL AUTO_INCREMENT,
  `User_id` varchar(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Message` text NOT NULL,
  `Status` varchar(255) NOT NULL,
  `stat` int(11) NOT NULL,
  `Created_at` varchar(255) NOT NULL,
  `Updated_at` varchar(255) NOT NULL,
  PRIMARY KEY (`Event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

DROP TABLE IF EXISTS `gender`;
CREATE TABLE IF NOT EXISTS `gender` (
  `Gender_id` int(11) NOT NULL AUTO_INCREMENT,
  `Gender` varchar(20) NOT NULL,
  PRIMARY KEY (`Gender_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gen_invoice`
--

DROP TABLE IF EXISTS `gen_invoice`;
CREATE TABLE IF NOT EXISTS `gen_invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rrr_code` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gen_invoice`
--

INSERT INTO `gen_invoice` (`id`, `rrr_code`) VALUES
(1, '222'),
(2, '32323');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

DROP TABLE IF EXISTS `invoice`;
CREATE TABLE IF NOT EXISTS `invoice` (
  `inv_id` int(11) NOT NULL AUTO_INCREMENT,
  `rrr_code` varchar(250) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL,
  `status1` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`inv_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `marital_status`
--

DROP TABLE IF EXISTS `marital_status`;
CREATE TABLE IF NOT EXISTS `marital_status` (
  `Marital_status_id` int(11) NOT NULL AUTO_INCREMENT,
  `Marital_status` varchar(255) NOT NULL,
  PRIMARY KEY (`Marital_status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `Message_id` int(11) NOT NULL AUTO_INCREMENT,
  `User_id` varchar(255) NOT NULL,
  `Title` int(11) NOT NULL,
  `Message` text NOT NULL,
  `Created_at` varchar(255) NOT NULL,
  `Updated_at` varchar(255) NOT NULL,
  PRIMARY KEY (`Message_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

DROP TABLE IF EXISTS `school`;
CREATE TABLE IF NOT EXISTS `school` (
  `School_id` int(11) NOT NULL AUTO_INCREMENT,
  `School` varchar(255) NOT NULL,
  PRIMARY KEY (`School_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

DROP TABLE IF EXISTS `session`;
CREATE TABLE IF NOT EXISTS `session` (
  `Session_id` int(11) NOT NULL AUTO_INCREMENT,
  `Session` varchar(255) NOT NULL,
  PRIMARY KEY (`Session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_academic`
--

DROP TABLE IF EXISTS `user_academic`;
CREATE TABLE IF NOT EXISTS `user_academic` (
  `user_id` varchar(255) NOT NULL,
  `Session_id` varchar(255) NOT NULL,
  `Department_id` varchar(255) NOT NULL,
  `School_id` varchar(255) NOT NULL,
  `Created_at` varchar(255) NOT NULL,
  `Updated_at` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

DROP TABLE IF EXISTS `user_details`;
CREATE TABLE IF NOT EXISTS `user_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `User_id` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Created_at` varchar(255) NOT NULL,
  `Updated_at` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

DROP TABLE IF EXISTS `user_profile`;
CREATE TABLE IF NOT EXISTS `user_profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `User_id` varchar(255) NOT NULL,
  `Surname` varchar(255) NOT NULL,
  `Othername` varchar(255) NOT NULL,
  `Gender_id` varchar(255) NOT NULL,
  `Marital_status_id` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Address` text NOT NULL,
  `Dob` varchar(255) NOT NULL,
  `Fb_handle` varchar(255) NOT NULL,
  `Tw_handle` varchar(255) NOT NULL,
  `Insta_handle` varchar(255) NOT NULL,
  `Created_at` varchar(255) NOT NULL,
  `Updated_at` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
