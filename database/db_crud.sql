-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2019 at 06:11 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_data_pinjaman`
--

CREATE TABLE `tb_data_pinjaman` (
  `id` int(10) NOT NULL,
  `nik` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `jumlah_pinjaman` int(20) NOT NULL,
  `jangka_waktu` int(10) NOT NULL,
  `bunga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_data_pinjaman`
--

INSERT INTO `tb_data_pinjaman` (`id`, `nik`, `tgl`, `jumlah_pinjaman`, `jangka_waktu`, `bunga`) VALUES
(1, 1111, '2019-02-17', 1000000, 6, 6),
(2, 3333, '2019-02-15', 5000000, 12, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tb_nasabah`
--

CREATE TABLE `tb_nasabah` (
  `nik` int(10) NOT NULL,
  `nama` text NOT NULL,
  `alamat` text NOT NULL,
  `hp` int(15) NOT NULL,
  `email` text NOT NULL,
  `tempat` text NOT NULL,
  `no_rek` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_nasabah`
--

INSERT INTO `tb_nasabah` (`nik`, `nama`, `alamat`, `hp`, `email`, `tempat`, `no_rek`) VALUES
(1111, 'Wulan Pusvitameong', 'Bogor', 2147483647, 'lanpus@meong.com', 'Kotabic', '7201829384'),
(3333, 'Samuel Rizal', 'Bogor', 2147483647, 'zhal@samuel.id', 'Cemplang City', '0967861627');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_data_pinjaman`
--
ALTER TABLE `tb_data_pinjaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`id`);

--
-- Indexes for table `tb_nasabah`
--
ALTER TABLE `tb_nasabah`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_data_pinjaman`
--
ALTER TABLE `tb_data_pinjaman`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
