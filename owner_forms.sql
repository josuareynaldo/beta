-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2016 at 04:09 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beta`
--

-- --------------------------------------------------------

--
-- Table structure for table `owner_forms`
--

CREATE TABLE `owner_forms` (
  `id` int(11) NOT NULL,
  `serial_number` varchar(255) NOT NULL,
  `article_number` varchar(255) NOT NULL,
  `date_install` date NOT NULL,
  `company` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `industry` varchar(255) NOT NULL,
  `material` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `ink_number` int(11) NOT NULL,
  `solvent_number` int(11) NOT NULL,
  `distributor` varchar(255) NOT NULL,
  `cust` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner_forms`
--

INSERT INTO `owner_forms` (`id`, `serial_number`, `article_number`, `date_install`, `company`, `address`, `city`, `zipcode`, `contact`, `telp`, `fax`, `email`, `industry`, `material`, `description`, `ink_number`, `solvent_number`, `distributor`, `cust`, `date`) VALUES
(1, '231', '12312', '2016-09-06', '23123', '123213', '2312', '2323', '222', '222', '22', '11', '123', '123', '123123', 111, 11, '231', '123', '2016-09-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `owner_forms`
--
ALTER TABLE `owner_forms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `owner_forms`
--
ALTER TABLE `owner_forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
