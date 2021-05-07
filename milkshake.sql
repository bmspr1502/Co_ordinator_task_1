-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 08:39 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `milkshake`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `txnid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `foodid` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` float NOT NULL,
  `beforetax` int(11) NOT NULL,
  `paid` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`txnid`, `userid`, `foodid`, `name`, `price`, `beforetax`, `paid`) VALUES
(25, 1, 2, 'Strawberry', 63, 60, 1),
(26, 1, 1, 'Vanilla', 31.5, 30, 1),
(27, 1, 2, 'Strawberry', 63, 60, 1),
(28, 7, 4, 'Pineapple', 52.5, 50, 1);

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` int(11) DEFAULT NULL,
  `imgsrc` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `name`, `price`, `imgsrc`) VALUES
(1, 'Vanilla', 30, 'https://i.ytimg.com/vi/yBMmbXgv7tc/maxresdefault.jpg'),
(2, 'Strawberry', 60, 'https://www.kenwoodworld.com/Global/recipes/Recipe%20Images/drinks/Strawberry_Milkshake_1.jpg'),
(3, 'Chocolate', 70, 'https://lh3.googleusercontent.com/GpTDVDf0Lp7nJGv8iRskihcMt7XOtLpMON-k9RGB8Elke9-R7N-KmaxZwJmqUCYWS5OZquUPhpoh1qV3jumpVQ=w1280-h960-c-rj-v1-e365'),
(4, 'Pineapple', 50, 'https://www.by-brothers.com/wp-content/uploads/2015/05/pinaple-shake.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `phoneno` bigint(25) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `phoneno`, `password`) VALUES
(1, 'Test', 1234, '1234'),
(2, 'Raman', 9345, '9345'),
(3, 'Preet', 3560, '3560'),
(6, 'Hamsa', 9443501317, '9443501317'),
(7, 'Pranav', 9876, '9876');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`txnid`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phoneno` (`phoneno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `txnid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
