-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2021 at 03:41 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectuts2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pesan`
--

CREATE TABLE `tabel_pesan` (
  `id` int(10) NOT NULL,
  `nama_pembeli` varchar(50) NOT NULL,
  `nomor_telp` int(20) NOT NULL,
  `kode_barang` varchar(999) NOT NULL,
  `deskripsi` text NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_pesan`
--

INSERT INTO `tabel_pesan` (`id`, `nama_pembeli`, `nomor_telp`, `kode_barang`, `deskripsi`, `alamat`) VALUES
(8, 'Yovie', 111, 'Masker Tenun Ethnic - Rp.15.000', 'Pake wrap bubble', 'jangkung'),
(30, 'Yovie', 111, 'Masker Tenun Ethnic - Rp.15.000<br>Ikat Tenun Ethnic - Rp.15.000<br>Totebag Tenun Ethnic - Rp.95.000', 'Pake wrap bubble', 'oppol'),
(31, 'Yovie', 111, 'Masker Tenun Ethnic - Rp.15.000<br>Ikat Tenun Ethnic - Rp.15.000<br>Totebag Tenun Ethnic - Rp.95.000', 'Pake wrap bubble', 'DESA SIDOJANGKUNG'),
(32, 'Yovie', 111, 'Masker Tenun Ethnic - Rp.15.000<br>Ikat Tenun Ethnic - Rp.15.000<br>Totebag Tenun Ethnic - Rp.95.000', 'Pake wrap bubble', 'DESA SIDOJANGKUNG'),
(34, 'Yovie Andrian', 2147483647, 'Masker Tenun Ethnic - Rp.15.000<br>Ikat Tenun Ethnic - Rp.15.000<br>Totebag Tenun Ethnic - Rp.95.000<br>Kemeja Pria Ethnic - Rp.200.000<br>Couple Set 1 - Rp.350.000', 'Barang dibungkus dengan bubble wrap', 'Desa Sidojangkung, Kec. Menganti, Kab. gresik'),
(36, 'M. Althaf', 122345, 'Masker Tenun Ethnic - Rp.15.000<br>Ikat Tenun Ethnic - Rp.15.000<br>Couple Set 1 - Rp.350.000<br>Couple Set 2 - Rp.350.000', 'barang dibungkus dengan bubble wrap', 'perumahan Oma indah Menganti - Kec. menganti'),
(37, 'M. Althaf', 122345, 'Masker Tenun Ethnic - Rp.15.000<br>Ikat Tenun Ethnic - Rp.15.000', 'barang dibungkus dengan bubble wrap', 'perumahan Oma indah Menganti - Kec. menganti'),
(38, 'Yovie', 111, 'Masker Tenun Ethnic - Rp.15.000', 'Pake wrap bubble', 'jangkung');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_pesan`
--
ALTER TABLE `tabel_pesan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_pesan`
--
ALTER TABLE `tabel_pesan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
