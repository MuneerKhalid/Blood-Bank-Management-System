-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2023 at 04:19 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `backup_blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `Blood_ID` int(11) NOT NULL,
  `Blood_Type` varchar(10) NOT NULL,
  `Blood_Bag_Quantity` int(11) NOT NULL,
  `Blood_Bag_RecievedDate` date NOT NULL DEFAULT current_timestamp(),
  `Blood_Bag_Expiry` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`Blood_ID`, `Blood_Type`, `Blood_Bag_Quantity`, `Blood_Bag_RecievedDate`, `Blood_Bag_Expiry`) VALUES
(1, 'A-', 2, '2023-02-05', '2023-02-05'),
(2, 'A-', 2, '2023-02-05', '2023-02-05'),
(3, 'B-', 5, '2023-02-05', '2023-02-05'),
(4, 'AB-', 4, '2023-02-05', '2023-02-05'),
(5, 'O-', 1, '2023-02-05', '2023-02-05'),
(6, 'A+', 3, '2023-02-05', '2023-02-05'),
(7, 'AB+', 2, '2023-02-05', '2023-02-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`Blood_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `Blood_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
