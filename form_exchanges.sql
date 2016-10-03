-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2016 at 04:35 PM
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
-- Table structure for table `form_exchanges`
--

CREATE TABLE `form_exchanges` (
  `id` int(11) NOT NULL,
  `article_number` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `serial_number` varchar(255) NOT NULL,
  `date_replace` date NOT NULL,
  `run_time` int(11) NOT NULL,
  `distributor` varchar(255) NOT NULL,
  `technician` varchar(255) NOT NULL,
  `cust` varchar(255) NOT NULL,
  `stock` varchar(255) NOT NULL,
  `dismantled` varchar(255) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `cond` varchar(255) NOT NULL,
  `scrapping` varchar(255) NOT NULL,
  `warranty` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_exchanges`
--

INSERT INTO `form_exchanges` (`id`, `article_number`, `description`, `serial_number`, `date_replace`, `run_time`, `distributor`, `technician`, `cust`, `stock`, `dismantled`, `descr`, `cond`, `scrapping`, `warranty`, `contact`, `date`) VALUES
(1, '123', '123', '123', '2016-10-01', 123, '123', '123', '123', 'Yes', 'Yes', 'malfunction', 'Wet', 'No', 'No', '123', '2016-10-02'),
(2, '1111', '11', '11', '2016-10-02', 11, '11', '11', '11', 'No', 'No', 'malfunction', 'Dust', 'No', 'Yes', '11', '2016-10-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_exchanges`
--
ALTER TABLE `form_exchanges`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_exchanges`
--
ALTER TABLE `form_exchanges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
