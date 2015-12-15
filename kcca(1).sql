-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 14, 2015 at 12:59 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kcca`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `inv_id` int(6) NOT NULL AUTO_INCREMENT,
  `company` text NOT NULL,
  `address` text NOT NULL,
  `invo_no` int(5) NOT NULL,
  `date` date NOT NULL,
  `Soldto` text NOT NULL,
  `Shipto` text NOT NULL,
  `sale_person` text NOT NULL,
  `p_O_box` text NOT NULL,
  `ship_dat` text NOT NULL,
  `ship_way` text NOT NULL,
  `terms` text NOT NULL,
  `ref` text NOT NULL,
  PRIMARY KEY (`inv_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`inv_id`, `company`, `address`, `invo_no`, `date`, `Soldto`, `Shipto`, `sale_person`, `p_O_box`, `ship_dat`, `ship_way`, `terms`, `ref`) VALUES
(1, '', '', 0, '0000-00-00', '', '', '', '', '', '', '', ''),
(2, 'mtn', 'slau', 6, '0000-00-00', 'Africa airline', 'Juba', '', '', '', '', '', ''),
(3, 'mtn', 'slau', 6, '0000-00-00', 'Africa airline', 'Juba', '', '', '', '', '', ''),
(4, '', '', 0, '0000-00-00', '', '', '', '', '', '', '', ''),
(5, '', '', 0, '0000-00-00', '', '', '', '', '', '', '', ''),
(6, 'coco cola', 'juba', 34, '0000-00-00', '', '', '', '', '', '', '', ''),
(7, '', '', 0, '0000-00-00', '', '', '', '', '', '', '', ''),
(8, 'coco cola', 'juba', 34, '0000-00-00', '', '', '', '', '', '', '', ''),
(9, 'coco cola', 'juba', 34, '0000-00-00', '', '', '', '', '', '', '', ''),
(18, '', '', 0, '0000-00-00', '', '', '', '', '', '', '', ''),
(19, '', '', 0, '0000-00-00', '', '', '', '', '', '', '', ''),
(20, '', '', 0, '0000-00-00', '', '', '', '', '', '', '', ''),
(21, '', '', 0, '0000-00-00', '', '', '', '', '', '', '', ''),
(22, '', '', 0, '0000-00-00', '', '', '', '', '', '', '', ''),
(23, '', '', 0, '0000-00-00', '', '', '', '', '', '', '', ''),
(24, '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `u_id` int(12) NOT NULL AUTO_INCREMENT,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `gender` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `fname`, `lname`, `gender`, `email`, `password`) VALUES
(6, 'gatkouth ', 'nyuel', 'male', 'gat@gmail.com', 'nyual'),
(7, 'ajak', 'legend', 'male', 'ajaknyual@yahoo.com', '101010');
