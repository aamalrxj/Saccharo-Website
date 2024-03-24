-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2024 at 09:23 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saccharo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `name` varchar(35) NOT NULL,
  `location` varchar(35) NOT NULL,
  `adhaarno` varchar(12) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `phoneno` varchar(11) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`name`, `location`, `adhaarno`, `email`, `password`, `phoneno`, `address`) VALUES
(' Blank', 'Unknown', '123456789101', 'blank@gmail.com', '123456', '1234567891', 'blankworld');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `Fromuser` varchar(100) NOT NULL,
  `touser` varchar(100) NOT NULL,
  `Message` varchar(500) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

CREATE TABLE `ngo` (
  `name` varchar(35) NOT NULL,
  `location` varchar(35) NOT NULL,
  `organizationname` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `phoneno` varchar(11) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ngo`
--

INSERT INTO `ngo` (`name`, `location`, `organizationname`, `email`, `password`, `phoneno`, `address`) VALUES
('Ngo Space', 'Calicut', 'National NGO', 'ngo@gmail.com', '123456', '1234567890', 'Ngo Headspace');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `name` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `city` varchar(35) NOT NULL,
  `zip` int(11) NOT NULL,
  `fooditem` varchar(300) NOT NULL,
  `foodquantity` varchar(300) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`name`, `email`, `phonenumber`, `city`, `zip`, `fooditem`, `foodquantity`, `time`) VALUES
('blank', 'blank@gmail.com', 1234567891, 'Calicut', 123456, 'Porotta', '22', '2024-03-24 13:40:55');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `email` varchar(40) NOT NULL,
  `donoremail` varchar(40) NOT NULL,
  `rating` int(11) NOT NULL,
  `review` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reportadmin`
--

CREATE TABLE `reportadmin` (
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
