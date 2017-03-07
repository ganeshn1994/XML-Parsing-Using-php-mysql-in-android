-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 07, 2017 at 08:31 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sos`
--

-- --------------------------------------------------------

--
-- Table structure for table `sos`
--

CREATE TABLE IF NOT EXISTS `sos` (
  `id` bigint(10) NOT NULL,
  `date` date NOT NULL,
  `mnumber` int(25) NOT NULL,
  `latitude` float(10,2) NOT NULL,
  `longitude` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sos`
--

INSERT INTO `sos` (`id`, `date`, `mnumber`, `latitude`, `longitude`) VALUES
(1, '2017-03-08', 9876543, 78.10, 93393.10),
(2, '2017-03-16', 9876543, 9.98, 987.76);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
