-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2016 at 07:53 AM
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
-- Table structure for table `trial_reqs`
--

CREATE TABLE `trial_reqs` (
  `id` int(11) NOT NULL,
  `trial_no` varchar(255) NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `company` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
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
  `sales_note` varchar(255) NOT NULL,
  `tech_note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trial_reqs`
--

INSERT INTO `trial_reqs` (`id`, `trial_no`, `date_start`, `date_end`, `company`, `street`, `contact`, `profession`, `phone`, `email`, `bus_field`, `machine_type`, `ink_type`, `solvent_type`, `material`, `printing_app`, `acc_supp`, `sensor_type`, `encoder`, `sales_note`, `tech_note`) VALUES
(1, '123', '2016-09-14', '2016-11-01', 'asd', 'das', 'ssd', 'ssa', 'asdw', 'wasd', 'dwsa', 'sdwa', 'ssdwa', 'dsawd', 'dsad', 'wasd', 'aaws', 'sswas', 'wwasd', 'adwas', 'sadwdas'),
(2, '4444', '2016-09-15', '2016-11-01', 'gege', 'hehe', 'jiji', 'koko', '433223', 'giorgio_jojo@ymail.com', 'wewqe', 'JET2 neo-3, JET3 up, HR', 'gaga', 'vevev', 'Plastic, Paper', 'Rewinder, Conveyor', 'Mini', 'fibre', 'rev2', 'hahaha', 'yesyesyes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trial_reqs`
--
ALTER TABLE `trial_reqs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trial_reqs`
--
ALTER TABLE `trial_reqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
