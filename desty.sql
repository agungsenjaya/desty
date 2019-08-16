-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2019 at 08:12 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desty`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_konsumens`
--

CREATE TABLE `tbl_konsumens` (
  `konsumen_id` int(100) NOT NULL,
  `konsumen_nama` varchar(200) NOT NULL,
  `konsumen_telepon` varchar(100) NOT NULL,
  `konsumen_alamat` text NOT NULL,
  `konsumen_reg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_konsumens`
--

INSERT INTO `tbl_konsumens` (`konsumen_id`, `konsumen_nama`, `konsumen_telepon`, `konsumen_alamat`, `konsumen_reg`) VALUES
(1, 'agung senjaya', '085759794605', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim', '2019-08-14 22:50:37'),
(2, 'jajang jahanam', '0878554487', 'consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupida', '2019-08-14 23:40:14'),
(6, 'dadan kurniawan', '05544554', 'jl raya senjaya timur lampung barat ', '2019-08-15 10:24:57'),
(7, 'saptanji', '5548877', 'jl raya pembangunan', '2019-08-16 21:04:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `order_id` int(100) NOT NULL,
  `konsumen_id` int(100) NOT NULL,
  `order_reg` varchar(100) NOT NULL,
  `order_wr` int(100) NOT NULL,
  `order_uk` int(100) NOT NULL,
  `order_ds` int(100) NOT NULL,
  `order_hasil` varchar(100) NOT NULL,
  `produk_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_orders`
--

INSERT INTO `tbl_orders` (`order_id`, `konsumen_id`, `order_reg`, `order_wr`, `order_uk`, `order_ds`, `order_hasil`, `produk_id`) VALUES
(1, 6, '2019-08-16 20:44:12', 63, 59, 54, 'Cukup Layak', 3),
(2, 6, '2019-08-16 20:47:31', 60, 69, 42, 'Tidak Layak', 3),
(3, 7, '2019-08-16 21:06:39', 50, 60, 30, 'Cukup Layak', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produks`
--

CREATE TABLE `tbl_produks` (
  `produk_id` int(100) NOT NULL,
  `produk_nama` varchar(200) NOT NULL,
  `produk_uk` varchar(200) NOT NULL,
  `produk_ds` varchar(200) NOT NULL,
  `produk_wr` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_produks`
--

INSERT INTO `tbl_produks` (`produk_id`, `produk_nama`, `produk_uk`, `produk_ds`, `produk_wr`) VALUES
(2, 'kerasakti', '45', '32', '20'),
(3, 'keripik dusta', '80', '60', '70'),
(4, 'keripik zani', '70', '55', '60');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(100) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_name`, `user_password`) VALUES
(1, 'desty', '92223e20f109a21359a54a9ae85da6ca');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_konsumens`
--
ALTER TABLE `tbl_konsumens`
  ADD PRIMARY KEY (`konsumen_id`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_produks`
--
ALTER TABLE `tbl_produks`
  ADD PRIMARY KEY (`produk_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_konsumens`
--
ALTER TABLE `tbl_konsumens`
  MODIFY `konsumen_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_produks`
--
ALTER TABLE `tbl_produks`
  MODIFY `produk_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
