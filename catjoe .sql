-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2017 at 02:21 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catjoe`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `telpon` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `foto` text NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `alamat`, `telpon`, `jenis_kelamin`, `tanggal_lahir`, `email`, `password`, `foto`, `status`) VALUES
(1, 'joko', 'temayang', '082335086263', 'laki-laki', '1997-04-18', 'joko@gmail.com', 'temayang', 'akun.png', 1),
(2, 'joe', 'temayang', '082121212122', 'laki-laki', '1997-04-18', 'koe@gmail.com', 'temayang', '', 1),
(3, 'riya', 'temayang', '088799898989', 'perempuan', '1997-06-22', 'riya21@gmail.com', 'temayang', 'akun.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `konsumen`
--

CREATE TABLE `konsumen` (
  `id_konsumen` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `telpon` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `foto` text NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsumen`
--

INSERT INTO `konsumen` (`id_konsumen`, `nama`, `alamat`, `telpon`, `jenis_kelamin`, `tanggal_lahir`, `email`, `password`, `foto`, `status`) VALUES
(1, 'yadi', 'temayang', '082321232334', 'laki-laki', '1998-02-19', 'yadi@gmail.com', 'bojonegoro', '', 1),
(2, 'kori', 'temayang', '0900808009', 'laki-laki', '1997-09-18', 'kori@gmail.com', 'temayang', '', 1),
(5, 'jokorey', 'temayang', '08744364748', 'laki-laki', '1993-10-26', 'jokoriyadi18@yahoo.com', 'kajangan', '', 1),
(7, 'jokori', 'jawa', '08349938000', 'laki-laki', '1997-04-04', 'jokori@gmail.com', 'bojonegoro', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu_makanan`
--

CREATE TABLE `menu_makanan` (
  `id_menu` int(5) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `harga` int(50) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `foto` text NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_makanan`
--

INSERT INTO `menu_makanan` (`id_menu`, `nama_menu`, `harga`, `jumlah`, `foto`, `status`) VALUES
(1, 'pecel', 5000, 100, 'pecel.jpg', 1),
(2, 'lodeh', 5000, 100, 'lodeh.jpg', 1),
(3, 'nasi', 4000, 100, 'nasi.jpg', 1),
(4, 'tempe', 500, 100, 'tempe.jpg', 1),
(5, 'ayam bakar', 3000, 50, 'ayam_bakar.jpg', 1),
(6, 'ayam goreng', 3000, 50, 'ayam_goreng.jpg', 1),
(7, 'bali ayam', 3000, 50, 'bali_ayam.jpg', 1),
(8, 'bali telur', 3000, 50, 'bali_telur.jpg', 1),
(9, 'dadar jagung', 500, 100, 'dadar_jagung.jpg', 1),
(10, 'peyek', 1000, 100, 'peyek.jpg', 1),
(11, 'sayur asem', 3000, 100, 'sayur_asem.jpg', 1),
(12, 'sayur bening', 3000, 100, 'sayur_bening.jpg', 1),
(13, 'telur dadar', 2000, 100, 'telur_dadar.jpg', 1),
(14, 'rawon', 5000, 80, 'rawon.jpg', 1),
(15, 'tempe kering', 1000, 90, 'tempe_kering.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`id`, `nama`, `keterangan`, `status`) VALUES
(1, 'promo hari kartini', 'untuk pembelian 2 menu berbeda mendapat potongan 10%', 1),
(2, 'promo awal mei', 'untuk pembelian 5 menu dapat gratis 1 porsi tempe goreng', 1),
(3, 'promo ultah MasJoe', 'diskon 5% untuk semua menu khusus untuk tgl 18-26 April 2017', 1),
(4, 'promo isra'' miraj', 'gratis nasi setiap beli 3 menu', 0);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_masuk`
--

CREATE TABLE `transaksi_masuk` (
  `id_transaksi` int(10) NOT NULL,
  `nama_konsumen` varchar(100) NOT NULL,
  `id_konsumen` int(10) NOT NULL,
  `id_menu` int(10) NOT NULL,
  `menu` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `harga` int(100) NOT NULL,
  `total_harga` int(200) NOT NULL,
  `tanggal` date NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_masuk`
--

INSERT INTO `transaksi_masuk` (`id_transaksi`, `nama_konsumen`, `id_konsumen`, `id_menu`, `menu`, `lokasi`, `jumlah`, `harga`, `total_harga`, `tanggal`, `status`) VALUES
(0, 'yadi', 1, 5, 'ayam bakar', 'jl yang benar', 2, 3000, 6000, '2017-04-18', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`id_konsumen`);

--
-- Indexes for table `menu_makanan`
--
ALTER TABLE `menu_makanan`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi_masuk`
--
ALTER TABLE `transaksi_masuk`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `konsumen`
--
ALTER TABLE `konsumen`
  MODIFY `id_konsumen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `menu_makanan`
--
ALTER TABLE `menu_makanan`
  MODIFY `id_menu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
