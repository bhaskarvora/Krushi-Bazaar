-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2022 at 01:30 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(10) NOT NULL,
  `image` varchar(32) NOT NULL,
  `qty` int(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` varchar(50) NOT NULL,
  `pcode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ecom`
--

CREATE TABLE `ecom` (
  `id` int(11) NOT NULL,
  `mtxt` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `cat` varchar(255) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `price` varchar(25) NOT NULL,
  `image` varchar(255) NOT NULL,
  `pcode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ecom`
--

INSERT INTO `ecom` (`id`, `mtxt`, `unit`, `qty`, `quantity`, `cat`, `descr`, `price`, `image`, `pcode`) VALUES
(90, 'Alphonso Mango', 'kg', 99, 1, 'Fruits', 'This fruit have generally weigh between 150 and 300 grams ,It has a rich, creamy, tender texture and delicate, non-fibrous, juice pulp.', '300', 'img/WhatsApp Image 2022-05-05 at 12.48.12 PM.jpeg', '9651'),
(91, 'Bio farm fertilizer', 'kg', 9, 1, 'Fertilizer', 'Bio farm fertilizer for farming', '70', 'img/WhatsApp Image 2022-05-05 at 12.57.49 PM.jpeg', '15081'),
(92, 'corn', 'kg', 200, 0, 'CropS', 'corn', '25', 'img/WhatsApp Image 2022-05-05 at 1.02.01 PM (1).jpeg', '17346');

-- --------------------------------------------------------

--
-- Table structure for table `ecomlogin`
--

CREATE TABLE `ecomlogin` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ecomlogin`
--

INSERT INTO `ecomlogin` (`id`, `fname`, `lname`, `mobile`, `email`, `password`, `address`) VALUES
(35, 'kalpit', 'Prajapati', '1234567890', 'kalpit@gmail.com', '1234', 'ahmedabad');

-- --------------------------------------------------------

--
-- Table structure for table `machine`
--

CREATE TABLE `machine` (
  `id` int(11) NOT NULL,
  `mtxt` varchar(255) NOT NULL,
  `price` varchar(20) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `pcode` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `machine`
--

INSERT INTO `machine` (`id`, `mtxt`, `price`, `descr`, `image`, `pcode`) VALUES
(11, 'tractor ', '1000', 'This tractor implements make the soil more levelled, smooth and surface obtained, enabling it to create a moist environment for crops.', 'img/WhatsApp Image 2022-05-04 at 4.01.15 PM.jpeg', '5392'),
(12, 'Harvester', '200', 'Harvester or combine harvester is an adaptable machine created for effectively harvesting crops in the fields', 'img/WhatsApp Image 2022-05-04 at 4.00.20 PM.jpeg', '29244');

-- --------------------------------------------------------

--
-- Table structure for table `machinecart`
--

CREATE TABLE `machinecart` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `total` varchar(250) NOT NULL,
  `pcode` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `machinecart`
--

INSERT INTO `machinecart` (`id`, `name`, `price`, `image`, `total`, `pcode`) VALUES
(1, 'Harvester', '200', 'img/WhatsApp Image 2022-05-04 at 4.00.20 PM.jpeg', '200', '29244');

-- --------------------------------------------------------

--
-- Table structure for table `machineorders`
--

CREATE TABLE `machineorders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `fduration` varchar(255) NOT NULL,
  `tduration` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(255) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `machineorders`
--

INSERT INTO `machineorders` (`id`, `name`, `email`, `phone`, `fduration`, `tduration`, `address`, `pmode`, `products`, `amount_paid`) VALUES
(2, 'pankaj Savantre', 'pankyps07@gmail.com', '+917019053432', '2020-12-30', '2020-12-31', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi', 'cod', '', '250'),
(3, 'pankaj', 'ps@gmail.com', '', '', '', '', 'cod', '', '500'),
(4, 'product_code', 'ps@gmail.com', '7019053432', '2020-12-29', '2020-12-29', 'sgdfshgdf', 'netbanking', '', '250'),
(5, 'pankaj', 'ps@gmail.com', '7019053432', '', '', 'sgdfshgdf', 'cod', '', '500'),
(6, 'fsdgs', 'pankyps07@gmail.com', '7019053432', '2020-12-29', '2020-12-30', 'dsfdsf', 'cod', '', '100'),
(0, 'Prajapati Kalpit', 'kal@gmail.com', '1111111111', '2022-04-19', '2022-04-22', 'Ahmedabad', 'cod', '', '530'),
(0, 'Prajapati Kalpit', 'kal@gmail.com', '1111111111', '2022-05-12', '2022-05-19', 'Ahmedabad', 'netbanking', '', '80'),
(0, 'Prajapati Kalpit', 'kal@gmail.com', '1111111111', '2022-05-05', '2022-05-13', 'Ahmedabad', 'cod', '', '80');

-- --------------------------------------------------------

--
-- Table structure for table `ordernow`
--

CREATE TABLE `ordernow` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordernow`
--

INSERT INTO `ordernow` (`id`, `name`, `mno`, `email`, `address`) VALUES
(22, 'pankaj Savantre', '7019053432', 'pankyps07@gmail.com', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi'),
(23, 'pankaj Savantre', '7019053432', 'pankyps07@gmail.com', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi'),
(24, 'pankaj Savantre', '7019053432', 'pankyps07@gmail.com', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi'),
(25, 'pankaj Savantre', '7019053432', 'pankyps07@gmail.com', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi'),
(26, 'pankaj Savantre', '7019053432', 'pankyps07@gmail.com', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi'),
(27, 'pankaj Savantre', '7019053432', 'pankyps07@gmail.com', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi'),
(28, 'pankaj Savantre', '7019053432', 'pankyps07@gmail.com', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi'),
(29, 'pankaj Savantre', '7019053432', 'pankyps07@gmail.com', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi'),
(30, 'pankaj Savantre', '7019053432', 'pankyps07@gmail.com', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi'),
(31, 'hjg', '7019053432', 'pankyps07@gmail.com', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi'),
(32, 'hjg', '7019053432', 'pankyps07@gmail.com', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi'),
(33, 'hjg', '7019053432', 'pankyps07@gmail.com', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi'),
(34, 'pankaj Savantre', '7019053432', 'pankyps07@gmail.com', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi'),
(35, 'pankaj Savantre', '7019053432', 'pankyps07@gmail.com', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi'),
(36, 'Pankaj', '7019053432', 'pankyps07@gmail.com', '#1135\nKhadaklat near bustand'),
(37, 'Pankaj', '0701905343', 'pankyps07@gmail.com', '#1135\nKhadaklat near bustand'),
(38, 'pankaj Savantre', '7019053432', 'pankyps07@gmail.com', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi'),
(39, 'pankaj Savantre', '7019053432', 'pankyps07@gmail.com', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi'),
(40, 'pankaj Savantre', '7019053432', 'pankyps07@gmail.com', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi'),
(41, 'pankaj Savantre', '7019053432', 'pankyps07@gmail.com', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi'),
(42, 'pankaj Savantre', '7019053432', 'pankyps07@gmail.com', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(234) NOT NULL,
  `email` varchar(23) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(43) NOT NULL,
  `pmode` varchar(35) NOT NULL,
  `products` varchar(35) NOT NULL,
  `amount_paid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `pmode`, `products`, `amount_paid`) VALUES
(3, 'Pankaj', 'pankyps07@gmail.com', '07019053432', '#1135\r\nKhadaklat near bustand', 'cards', 'mango(1), cabbage(2)', '750'),
(6, 'pankaj Savantre', 'pankyps07@gmail.com', '+917019053432', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi', 'cod', '', '250'),
(7, 'pankaj Savantre', 'pankyps07@gmail.com', '7019053432', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi', 'netbanking', '', '0'),
(0, 'Prajapati Kalpit', 'kal@gmail.com', '9825922416', 'Ahmedabad', 'cod', 'cabbage(3), Juar(3), crop(7)', '6144'),
(0, 'Savani Madhav', 'madhav@gmail.com', '7777888889', 'Surat', 'netbanking', 'crop(4), Juar(10)', '11368'),
(0, 'Prajapati Kalpit', 'kal@gmail.com', '1111111111', 'Ahmedabad', 'netbanking', 'Alphonso Mango(1)', '300');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`pcode`);

--
-- Indexes for table `ecom`
--
ALTER TABLE `ecom`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`pcode`);

--
-- Indexes for table `ecomlogin`
--
ALTER TABLE `ecomlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `machine`
--
ALTER TABLE `machine`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pcode` (`pcode`);

--
-- Indexes for table `machinecart`
--
ALTER TABLE `machinecart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ecom`
--
ALTER TABLE `ecom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `ecomlogin`
--
ALTER TABLE `ecomlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `machine`
--
ALTER TABLE `machine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `machinecart`
--
ALTER TABLE `machinecart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
