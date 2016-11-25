-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2016 at 10:28 AM
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
-- Table structure for table `trial_results`
--

CREATE TABLE `trial_results` (
  `id` int(11) NOT NULL,
  `result_no` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `proffesion` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bus_field` varchar(255) NOT NULL,
  `machine_type` varchar(255) NOT NULL,
  `ink_type` varchar(255) NOT NULL,
  `solvent_type` varchar(255) NOT NULL,
  `material` varchar(255) NOT NULL,
  `printing_app` varchar(255) NOT NULL,
  `acc_supp` varchar(255) NOT NULL,
  `sensor_type` varchar(255) NOT NULL,
  `encoder` varchar(255) NOT NULL,
  `print_char` int(11) NOT NULL,
  `dots` int(11) NOT NULL,
  `counter_start` int(11) NOT NULL,
  `counter_end` int(11) NOT NULL,
  `total_counter` int(11) NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `time_start` varchar(255) NOT NULL,
  `time_end` varchar(255) NOT NULL,
  `ink` int(11) NOT NULL,
  `solvent` int(11) NOT NULL,
  `temperature` int(11) NOT NULL,
  `humidity` int(11) NOT NULL,
  `result` text NOT NULL,
  `customer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trial_results`
--
ALTER TABLE `trial_results`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trial_results`
--
ALTER TABLE `trial_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
