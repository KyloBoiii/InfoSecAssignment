-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2021 at 02:54 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mochidbv2`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Cust_Id` int(11) NOT NULL,
  `Cust_Name` varchar(50) NOT NULL,
  `Cust_Email` varchar(50) NOT NULL,
  `Cust_Pass` longtext NOT NULL,
  `Cust_Gen` varchar(50) NOT NULL,
  `Cust_Contact` varchar(30) NOT NULL,
  `Cust_Address` varchar(50) NOT NULL,
  `Cust_City` varchar(50) NOT NULL,
  `Cust_Zip` int(11) NOT NULL,
  `Cust_Ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cust_Id`, `Cust_Name`, `Cust_Email`, `Cust_Pass`, `Cust_Gen`, `Cust_Contact`, `Cust_Address`, `Cust_City`, `Cust_Zip`, `Cust_Ip`) VALUES
(12, 'Kyle Rivero', 'asdf@gmail.com', '202cb962ac59075b964b07152d234b70', 'asdasd', 'asdasd', 'Clavano St., Cebu City', 'Cebu City', 6000, '::1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Cust_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Cust_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
