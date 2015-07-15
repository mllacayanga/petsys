-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2015 at 12:49 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sample_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `petitioners`
--

CREATE TABLE IF NOT EXISTS `petitioners` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(400) NOT NULL,
  `contact` varchar(300) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `petitioners`
--

INSERT INTO `petitioners` (`id`, `name`, `location`, `contact`, `message`) VALUES
(2, 'camille', 'quezon', '986-5412', 'sample'),
(3, 'allison', 'antipolo', '785-6321', 'sample'),
(4, 'thea', 'taguig', '487-5691', 'sample'),
(21, 'test', 'test', 'test', 'test'),
(22, 'test2', 'test', 'twat', 'test'),
(23, 'teste', 'test', 'ets', 'test'),
(24, 'dsfsdf', 'adsfasd', 'adsf', 'adf'),
(25, 'Jonnie Mutuc', 'Quezon City', 'jonniemutuc@yahoo.com', 'Hello'),
(26, 'Jennifer', 'Tagaytay', 'facebook.com/jennifer', 'Hi, sana nga matuloy na to yehey rakenrol ü');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `petitioners`
--
ALTER TABLE `petitioners`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `petitioners`
--
ALTER TABLE `petitioners`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
