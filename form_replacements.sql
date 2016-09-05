-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 05, 2016 at 06:07 PM
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
-- Table structure for table `form_replacements`
--

CREATE TABLE IF NOT EXISTS `form_replacements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `exchange_id` varchar(255) NOT NULL,
  `article_number` varchar(255) NOT NULL,
  `date_record` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `technician` varchar(255) NOT NULL,
  `serial_number` varchar(255) NOT NULL,
  `date_install` date NOT NULL,
  `date_replace` date NOT NULL,
  `problem` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `form_replacements`
--

INSERT INTO `form_replacements` (`id`, `exchange_id`, `article_number`, `date_record`, `description`, `technician`, `serial_number`, `date_install`, `date_replace`, `problem`) VALUES
(1, '12354', '123', '1999-02-20', 'ASD', 'Jos', '34', '2006-02-20', '2016-01-20', 'asdq');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
