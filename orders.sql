-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2025 at 02:30 PM
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
-- Database: `foodhub_eatery`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Name` varchar(50) NOT NULL,
  `ID_Number` varchar(20) NOT NULL,
  `Meal` varchar(50) NOT NULL,
  `Side_Dish` varchar(20) NOT NULL,
  `Dessert` varchar(50) NOT NULL,
  `Beverage` varchar(50) NOT NULL,
  `Pickup_point` varchar(50) NOT NULL,
  `Phone_Number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Name`, `ID_Number`, `Meal`, `Side_Dish`, `Dessert`, `Beverage`, `Pickup_point`, `Phone_Number`) VALUES
('', '', '', 'Samosas', '', '', '', ''),
('Nancy Wangare', '42797281', 'Fish stew', 'Chapati', 'Mango Sorbet', 'Kenyan Chai', 'FuelMart, Ndagani', '0758037505'),
('John', '76436576', 'Ugali Beef', 'Samosas', 'none', 'none', 'Almark, Mungoni', '07456790');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID_Number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
