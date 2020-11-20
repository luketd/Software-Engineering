-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2020 at 09:33 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `software`
--

-- --------------------------------------------------------

--
-- Table structure for table `additional_info`
--

CREATE TABLE `additional_info` (
  `ID` varchar(45) NOT NULL,
  `Size_of_donation` varchar(45) NOT NULL,
  `Location` varchar(45) NOT NULL,
  `Hear_about` varchar(45) NOT NULL,
  `Comments` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `additional_info`
--

INSERT INTO `additional_info` (`ID`, `Size_of_donation`, `Location`, `Hear_about`, `Comments`) VALUES
('1949', 'medium', 'Near the door', ' Facebook', ' '),
('5134', 'large', 'Near the garage', ' ', ' '),
('2190', 'large', 'next to me muscles', ' Linkden', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `ID` varchar(45) NOT NULL,
  `First_name` varchar(45) NOT NULL,
  `Last_name` varchar(45) NOT NULL,
  `Contact_method` varchar(45) NOT NULL,
  `City` varchar(45) NOT NULL,
  `Zip_code` varchar(45) NOT NULL,
  `Cross_Street` varchar(45) DEFAULT NULL,
  `Suite_Apartment_num` varchar(45) DEFAULT NULL,
  `Address` varchar(45) NOT NULL,
  `Phone_number` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`ID`, `First_name`, `Last_name`, `Contact_method`, `City`, `Zip_code`, `Cross_Street`, `Suite_Apartment_num`, `Address`, `Phone_number`) VALUES
('1949', 'Aiden', 'Sharp', 'phone', 'Palmyra', '08077', '0', '0', '456 Main Street', '8567608320'),
('5134', 'Luke', 'damato', 'phone', 'Cinnaminson', '08056', '0', '0', '356 melrose ave', '933 556 6532'),
('2190', 'Antonio', 'Muscle', 'email', 'Muscle City', '08077', '0', '0', '345 muscle road', '8567650643');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`) VALUES
('admin@charitydrop.com', 'admin'),
('luketd99@gmail.com', 'Testing1!'),
('mikereese@hotmail.com', 'Testing!2'),
('aiden@gmail.com', 'People1!'),
('antonio@gmail.com', 'People1!');

-- --------------------------------------------------------

--
-- Table structure for table `pickup`
--

CREATE TABLE `pickup` (
  `Pickup_dates` varchar(45) NOT NULL,
  `Zip_code` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pickup`
--

INSERT INTO `pickup` (`Pickup_dates`, `Zip_code`) VALUES
('11/2/2020', '08077'),
('11/7/2020', '08077'),
('11/8/2020', '08077'),
('11/3/2020', '08055'),
('11/4/2020', '08055'),
('11/5/2020', '08055'),
('11/6/2020', '08055'),
('11/7/2020', '08055'),
('11/2/2020', '08055'),
('11/5/2020', '08056'),
('11/7/2020', '08056'),
('11/2/2020', '08056'),
('12/2/2020', '08056'),
('11/3/2020', '08051'),
('11/4/2020', '08051'),
('11/5/2020', '08051'),
('11/6/2020', '08051'),
('11/7/2020', '08051'),
('11/2/2020', '08051'),
('12/2/2020', '08051');

-- --------------------------------------------------------

--
-- Table structure for table `updatepickup`
--

CREATE TABLE `updatepickup` (
  `Pickup_dates` varchar(45) NOT NULL,
  `ID` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `updatepickup`
--

INSERT INTO `updatepickup` (`Pickup_dates`, `ID`) VALUES
('11/3/2020', '2686'),
('11/3/2020', '2686'),
('11/6/2020', '1949'),
('11/4/2020', '5134'),
('11/5/2020', '2190');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
