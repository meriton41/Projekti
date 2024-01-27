-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2024 at 12:28 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `emri` varchar(255) NOT NULL,
  `mbiemri` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nrtelefonit` int(11) NOT NULL,
  `comment` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`emri`, `mbiemri`, `email`, `nrtelefonit`, `comment`) VALUES
('meriton', 'sokoli', 'meritonsokoli2004@gmail.com', 2147483647, 'A bon met pyt diqka?');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `confirmpassword` varchar(255) NOT NULL,
  `roli` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`name`, `email`, `pass`, `confirmpassword`, `roli`) VALUES
('Meriton', 'meriton123@ubt.com', '12345678', '12345678', 'admin'),
('Inva', 'rion@gmail.com', '12345678', '12345678', ''),
('rion', 'rion123@ubt.com', '12345678', '12345678', '');

-- --------------------------------------------------------

--
-- Table structure for table `paisja`
--

CREATE TABLE `paisja` (
  `Id` int(11) NOT NULL,
  `Emri` varchar(255) NOT NULL,
  `Ngjyra` varchar(255) NOT NULL,
  `Cmimi` varchar(255) NOT NULL,
  `Memoria` varchar(255) NOT NULL,
  `img` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paisja`
--

INSERT INTO `paisja` (`Id`, `Emri`, `Ngjyra`, `Cmimi`, `Memoria`, `img`) VALUES
(1, 'Samsung Note 10', 'Pink', '880', '1TB', 0x6e6f74653130312d72656d6f766562672d707265766965772e706e67),
(5, 'Iphone15ProMax', 'rose', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paisja`
--
ALTER TABLE `paisja`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paisja`
--
ALTER TABLE `paisja`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
