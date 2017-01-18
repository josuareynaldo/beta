-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2017 at 04:48 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `article_number_machine` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `serial_number` varchar(255) NOT NULL,
  `shipment_date` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`article_number_machine`, `product_name`, `serial_number`, `shipment_date`, `status`, `description`) VALUES
('asdasdsadsad', 'asdsadsad', '', '2016-12-14', 'Warranty', ''),
('asdsadsadasd', 'benz', '', '2016-12-17', 'Warranty', ''),
('dsadasdsadsa', 'asdsadsad', '', '0000-00-00', 'Warranty Expired', 'qwewqewqe'),
('ghghgh', 'asjdklsadjkas', '', '2016-12-16', 'Warranty', ''),
('sadasd', 'dasasdasd', '', '2017-01-11', 'Warranty', 'dasdasd'),
('sadasdas', 'sdasdasd', '', '2016-12-24', 'Warranty', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`article_number_machine`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
