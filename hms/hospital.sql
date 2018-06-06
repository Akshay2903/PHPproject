-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2018 at 09:18 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `Patient_Name` varchar(50) NOT NULL,
  `Phone_number` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Symptoms` varchar(100) NOT NULL,
  `Select_date` date NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`Patient_Name`, `Phone_number`, `email`, `Symptoms`, `Select_date`, `Department`, `Gender`, `Time`) VALUES
('akshaya', '', 'akshaypal2903@gmail.com', 'vomiting', '0000-00-00', 'Blood Bank', 'Male', '10:30:00.000000'),
('Ashutosh', '', 'ashutoshranjandba14@gmail.com', 'vomitin and cough', '0000-00-00', 'Emergency', 'Male', '11:00:00.000000'),
('ajay', '', 'Akshaypal2903@gmail.com', 'pain', '0000-00-00', 'Eye Care', 'Male', '12:50:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `bloodgp` varchar(6) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`email`, `password`, `name`, `contact`, `bloodgp`, `address`) VALUES
('abc@gmail.com', 'akshay@29#', 'ajay kumar', '9873457011', 'AB+', 'delhi'),
('akshaypal2903@gmail.com', 'akshay', 'Akshay pal', '9917488021', 'B+', 'meerut');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `address` (`address`),
  ADD KEY `password` (`password`),
  ADD KEY `name` (`name`),
  ADD KEY `contact` (`contact`),
  ADD KEY `bloodgp` (`bloodgp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
