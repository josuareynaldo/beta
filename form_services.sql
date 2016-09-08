-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 08, 2016 at 05:00 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `beta`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_services`
--

CREATE TABLE IF NOT EXISTS `form_services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_service` date NOT NULL,
  `serial_number` varchar(255) NOT NULL,
  `printer` varchar(255) NOT NULL,
  `year_model` date NOT NULL,
  `date_install` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `ink_number` int(11) NOT NULL,
  `solvent_number` int(11) NOT NULL,
  `technician` varchar(255) NOT NULL,
  `visco_act` int(11) NOT NULL,
  `pres_act` int(11) NOT NULL,
  `mb_value` int(11) NOT NULL,
  `tmp` int(11) NOT NULL,
  `bo_cur` varchar(255) NOT NULL,
  `bo_ref` varchar(255) NOT NULL,
  `date_ls` date NOT NULL,
  `hour_ls` int(11) NOT NULL,
  `total_hour` int(11) NOT NULL,
  `problem` text NOT NULL,
  `replace_part` text NOT NULL,
  `service_work` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `form_services`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
