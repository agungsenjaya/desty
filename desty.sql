-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 20 Agu 2019 pada 10.18
-- Versi server: 5.7.19
-- Versi PHP: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Struktur dari tabel `tbl_konsumens`
--

CREATE TABLE `tbl_konsumens` (
  `konsumen_id` int(100) NOT NULL,
  `konsumen_nama` varchar(200) NOT NULL,
  `konsumen_telepon` varchar(100) NOT NULL,
  `konsumen_alamat` text NOT NULL,
  `konsumen_reg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `order_id` int(100) NOT NULL,
  `konsumen_id` int(100) NOT NULL,
  `order_reg` varchar(100) NOT NULL,
  `order_wr` int(100) NOT NULL,
  `order_uk` int(100) NOT NULL,
  `order_ds` int(100) NOT NULL,
  `order_hasil` varchar(100) NOT NULL,
  `produk_id` int(100) NOT NULL,
  `or_wr` varchar(100) NOT NULL,
  `or_uk` varchar(100) NOT NULL,
  `or_ds` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_produks`
--

CREATE TABLE `tbl_produks` (
  `produk_id` int(100) NOT NULL,
  `produk_nama` varchar(200) NOT NULL,
  `produk_uk` varchar(200) NOT NULL,
  `produk_ds` varchar(200) NOT NULL,
  `produk_wr` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(100) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_name`, `user_password`) VALUES
(1, 'desty', '92223e20f109a21359a54a9ae85da6ca');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_konsumens`
--
ALTER TABLE `tbl_konsumens`
  ADD PRIMARY KEY (`konsumen_id`);

--
-- Indeks untuk tabel `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indeks untuk tabel `tbl_produks`
--
ALTER TABLE `tbl_produks`
  ADD PRIMARY KEY (`produk_id`);

--
-- Indeks untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_konsumens`
--
ALTER TABLE `tbl_konsumens`
  MODIFY `konsumen_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_produks`
--
ALTER TABLE `tbl_produks`
  MODIFY `produk_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
