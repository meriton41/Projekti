-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2024 at 07:33 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

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
-- Table structure for table `computer`
--

CREATE TABLE `computer` (
  `P_id` int(255) NOT NULL,
  `emri` varchar(255) NOT NULL,
  `ngjyra` varchar(255) NOT NULL,
  `cmimi` varchar(255) NOT NULL,
  `memoria` varchar(255) NOT NULL,
  `img` blob NOT NULL,
  `pershkrimi` text NOT NULL,
  `edit` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `computer`
--

INSERT INTO `computer` (`P_id`, `emri`, `ngjyra`, `cmimi`, `memoria`, `img`, `pershkrimi`, `edit`) VALUES
(1, 'Apple Macbook Air', 'Gold', '1,420.61€', '16 GB Memoria e punes dhe 256 GB SSD', 0x3232363630323534395f78786c2e77656270, 'Apple M2 eight-core processor with 4 performance cores and 4 efficiency cores, 10-core GPU, 16-core neural engine 16GB RAM and 256GB SSD ', 'Added By: Unknown'),
(2, 'Apple Macbook Air', 'Space Gray', '1250', '516GB', '', 'Apple M2 eight-core processor with 4 performance cores and 4 efficiency cores, 10-core GPU', 'Added By: Unknown');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `computer`
--
ALTER TABLE `computer`
  ADD PRIMARY KEY (`P_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `computer`
--
ALTER TABLE `computer`
  MODIFY `P_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
