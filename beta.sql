-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2016 at 02:46 PM
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
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `article_number` varchar(255) NOT NULL,
  `serial_number` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`article_number`, `serial_number`, `description`, `type`) VALUES
('1233334ffd12', '123asd', 'tkkk', 'testjuga'),
('222ddd', '123asd', 'ini apa', 'test'),
('klafjsd88', '234dsa', 'adasad;', 'sadkjahf');

-- --------------------------------------------------------

--
-- Table structure for table `form_replacements`
--

CREATE TABLE `form_replacements` (
  `id` int(11) NOT NULL,
  `exchange_id` varchar(255) NOT NULL,
  `article_number` varchar(255) NOT NULL,
  `date_record` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `technician` varchar(255) NOT NULL,
  `serial_number` varchar(255) NOT NULL,
  `date_install` date NOT NULL,
  `date_replace` date NOT NULL,
  `problem` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_replacements`
--

INSERT INTO `form_replacements` (`id`, `exchange_id`, `article_number`, `date_record`, `description`, `technician`, `serial_number`, `date_install`, `date_replace`, `problem`) VALUES
(3, '213213', 'sadsadasd', '2020-03-04', 'asdasdsa', 'sadasdsad', 'asdasdasd', '2018-11-02', '2017-02-01', 'sadasdsa'),
(4, '1234567', '12345657', '2016-11-10', 'jkjklj', ';klk;lk;l', 'jkljkljkljlk', '2016-09-09', '2016-09-03', 'jkljlkjkjlk');

-- --------------------------------------------------------

--
-- Table structure for table `form_services`
--

CREATE TABLE `form_services` (
  `id` int(11) NOT NULL,
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
  `service_work` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `serial_number` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`serial_number`, `product_name`) VALUES
('123asd', 'asus'),
('234dsa', 'Lenovo');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `position` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `address`, `position`, `email`) VALUES
(21, 'Mawar', 'f504a9cff6350b31b235010274c4a90f7825d460', 'sajdkasjdlksadj', 'Manager', 'fuink12@live.com'),
(25, 'Test2', 'f504a9cff6350b31b235010274c4a90f7825d460', 'sjakdjlksajdksa', 'Stakeholder', 'jaskdjakljd'),
(26, 'Test', 'f504a9cff6350b31b235010274c4a90f7825d460', 'asdasdsad', 'Employee', 'asdasd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_number`);

--
-- Indexes for table `form_replacements`
--
ALTER TABLE `form_replacements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_services`
--
ALTER TABLE `form_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`serial_number`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_replacements`
--
ALTER TABLE `form_replacements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `form_services`
--
ALTER TABLE `form_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
