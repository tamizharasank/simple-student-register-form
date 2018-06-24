-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 24, 2018 at 10:41 AM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.25-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pana`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `city` varchar(111) NOT NULL,
  `referid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city`, `referid`) VALUES
(1, 'chennai', '1'),
(2, 'villupuram', '1'),
(3, 'salem', '1'),
(4, 'erode', '1'),
(5, 'namakkal', '1'),
(6, 'cuddalore', '1'),
(7, 'trichy', '1'),
(8, 'madurai', '1'),
(9, 'guntur', '2'),
(10, 'chittor', '2'),
(11, 'kaakinada', '2'),
(12, 'nellore', '2'),
(13, 'ellore', '2'),
(14, 'kurnool', '2'),
(15, 'aalapuzha', '3'),
(16, 'cochin', '3'),
(17, 'tiruvanathapuram', '3'),
(18, 'kollam', '3'),
(19, 'ernakulam', '3'),
(20, 'kannur', '3');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `roll` varchar(200) NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `mobile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `email`, `password`, `roll`, `state`, `city`, `address`, `dob`, `mobile`) VALUES
('tam', 'tamiz@gmail.com', '202cb962ac59075b964b07152d234b70', 'sjj', 'hjgjg', 'hjgjg', 'ytygjh', '0211-02-02', '666'),
('tam', 'yjg@gmail.com', '40fe9ad4949331a12f5f19b477133924', 'hjgj', 'mhgj', 'hghj', 'jhgh', '0054-05-05', '767'),
('tamizh', 'tn@gmail.com', '3eaf6c984c18d143e1c0a797779afea8', 'tt', 'yut', 'yjj', 'yjht', '0555-12-05', '8056'),
('tamizharasan', 'tamizh@panamontech.com', '3999954f95203c08c2148a99d418aef4', 'trainee', 'tamil nadu', 'villupuram', '1st college back side vpm', '1996-02-13', '8056341631'),
('tamilarasan', 'ta@gmail.com', '937c986f5a535b5e53cf1248c049b4b7', 'trainee', 'tamilnadu', 'villupuram', '1st st vpm', '0996-02-13', '9750');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `state` varchar(200) NOT NULL,
  `no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `state`, `no`) VALUES
(1, 'tamilnadu', 1),
(2, 'andhrapradesh', 2),
(3, 'kerala', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`mobile`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
