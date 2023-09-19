-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2023 at 04:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koperasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id_role` int(11) NOT NULL,
  `n_role` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id_role`, `n_role`, `info`) VALUES
(0, 'Admin', 'role yang diberikan akses untuk melakukan edit data peserta'),
(1, 'User', 'role yang diberikan kepada member koperasi biasa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pinjaman`
--

CREATE TABLE `tb_pinjaman` (
  `id_pinjaman` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nominal` varchar(255) NOT NULL,
  `margin` varchar(255) DEFAULT NULL,
  `cicilan` varchar(255) DEFAULT NULL,
  `waktu` varchar(50) NOT NULL,
  `masa_kerja` varchar(15) NOT NULL,
  `kebutuhan` text NOT NULL,
  `jaminan` varchar(255) NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `acc_1` int(11) NOT NULL DEFAULT 0,
  `tgl_pinjaman` date NOT NULL DEFAULT current_timestamp(),
  `tgl_bts_pembayaran` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pinjaman`
--

INSERT INTO `tb_pinjaman` (`id_pinjaman`, `id_user`, `nominal`, `margin`, `cicilan`, `waktu`, `masa_kerja`, `kebutuhan`, `jaminan`, `gambar`, `acc_1`, `tgl_pinjaman`, `tgl_bts_pembayaran`) VALUES
(104, 1, '1000000', '250000', '191667', '6', '3', '123213', 'Surat Tanah', 'carousel-1.jpg', 1, '2023-02-16', '0000-00-00'),
(105, 1, '1000000', '250000', '125000', '10', '', 'Usaha', 'Emas', 'about-1.jpg', 2, '2023-02-16', '0000-00-00'),
(106, 1, '1500000', '375000', '187500', '10', '', 'buat keperluan sehari harii', 'Elektronik', 'carousel-1.jpg', 2, '2023-02-16', '0000-00-00'),
(107, 5, '1000000', '250000', '358333', '3', '', 'Usaha', 'Elektronik', 'team-4.jpg', 1, '2023-02-16', '0000-00-00'),
(108, 15, '7000000', '1750000', '875000', '10', '', 'Beli Mobil', 'Surat Rumah', 'usecase.PNG', 2, '2023-02-17', '0000-00-00'),
(109, 5, '4000000', '1000000', '766667', '6', '', 'Beli Mobil', 'Surat Rumah', 'usecase.PNG', 2, '2023-02-17', '0000-00-00'),
(110, 5, '2000000', '500000', '250000', '10', '', 'Usaha', 'Elektronik', 'about-1.jpg', 1, '2023-02-17', '0000-00-00'),
(111, 5, '3000000', '750000', '575000', '6', '', 'Usaha', 'Surat Rumah', 'sertifikat.jpg', 2, '2023-02-17', '0000-00-00'),
(112, 5, '4000000', '1000000', '766667', '6', '', 'Usaha', 'Surat Rumah', 'sertifikat.jpg', 1, '2023-02-17', '0000-00-00'),
(113, 5, '2000000', '500000', '250000', '10', '', 'Usaha', 'BPKB', 'Background Blue.png', 2, '2023-03-08', '0000-00-00'),
(114, 15, '10000000', '2500000', '1250000', '10', '', 'Usaha', 'BPKB', 'Pas Foto 4 x 6.jpg', 1, '2023-03-08', '0000-00-00'),
(115, 5, '1500000', '375000', '537500', '3', '', 'Usaha', 'Emas', 'Pas Foto 4 x 6.jpg', 2, '2023-03-08', '0000-00-00'),
(116, 5, '3200000', '800000', '613333', '6', '', 'Usaha', 'Elektronik', 'Background Blue.png', 1, '2023-03-08', '0000-00-00'),
(117, 4, '2000000', '500000', '383333', '6', '', 'spp', 'Surat Tanah', 'logo ulbi.png', 0, '2023-05-09', '0000-00-00'),
(131, 4, '5000000', '1250000', '958333', '6', '', 'SPP lagi', 'Surat Rumah', 'e666ec86-51eb-40c1-96d1-a27c39', 1, '2023-05-09', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_simpanan`
--

CREATE TABLE `tb_simpanan` (
  `id_simpanan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nominal` varchar(255) NOT NULL,
  `tgl_simpanan` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_simpanan`
--

INSERT INTO `tb_simpanan` (`id_simpanan`, `id_user`, `nominal`, `tgl_simpanan`) VALUES
(6, 5, '10000000', '2023-01-09'),
(7, 5, '2000', '2023-01-09'),
(8, 7, '200000', '2023-01-10'),
(9, 7, '500000', '2023-01-10'),
(10, 5, '10000', '2023-01-18'),
(12, 5, '100000', '2023-01-18'),
(13, 5, '100000', '2023-01-18'),
(14, 5, '15000', '2023-01-19'),
(15, 12, '10000', '2023-02-10'),
(16, 15, '500000', '2023-02-11'),
(17, 15, '10000000', '2023-02-11'),
(18, 5, '150000', '2023-02-13'),
(19, 5, '12000', '2023-02-15'),
(20, 12, '15000', '2023-02-16'),
(21, 15, '50000', '2023-03-08'),
(22, 5, '5000000', '2023-03-08'),
(23, 4, '470000', '2023-05-09'),
(40, 4, '470000', '2023-05-09'),
(41, 4, '470000', '2023-05-09'),
(42, 4, '470000', '2023-05-09'),
(43, 4, '20000', '2023-05-09'),
(44, 4, '15000', '2023-05-09'),
(45, 4, '50000', '2023-05-09'),
(46, 4, '50000', '2023-05-09'),
(47, 4, '100000', '2023-05-09'),
(48, 1, '100000', '2023-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id_unit` int(11) NOT NULL,
  `n_unit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id_unit`, `n_unit`) VALUES
(1, 'ADM'),
(2, 'Farmasi'),
(3, 'Poli'),
(4, 'Tourmaline'),
(5, 'Kyanit'),
(6, 'Mutiara'),
(7, 'Safir'),
(8, 'Garnet'),
(9, 'Casemix'),
(10, 'P2D'),
(11, 'Medrek'),
(12, 'HC'),
(13, 'GA'),
(14, 'Marketing'),
(15, 'Lab'),
(16, 'HD'),
(17, 'Teknisi'),
(18, 'IBS'),
(19, 'Keuangan'),
(20, 'ICU'),
(21, 'Gizi'),
(22, 'Billing'),
(23, 'Radiologi'),
(24, 'Logistik Farmasi'),
(25, 'IT'),
(26, 'Master');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `n_user` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL DEFAULT 'u_def.png',
  `no_hp` text NOT NULL,
  `tgl_lahir` datetime NOT NULL,
  `unit` int(11) NOT NULL,
  `roles` int(11) NOT NULL DEFAULT 1,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL DEFAULT 'Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `pass`, `n_user`, `image`, `no_hp`, `tgl_lahir`, `unit`, `roles`, `date_created`, `status`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'master_admin', 'u_def.png', '082120038071', '2000-07-26 14:33:09', 26, 0, '2022-12-13 14:34:45', 'Aktif'),
(2, 'fallen2607', 'c5851c077b123bb6cf8ac2057641ff2d', 'Naufal Habib Hakim', 'u_def.png', '082120038071', '2000-07-26 00:00:00', 25, 1, '2022-12-13 14:36:01', 'Aktif'),
(3, 'sadewa', '81dc9bdb52d04dc20036dbd8313ed055', 'Dian sadewa', 'u_def.png', '087825404447', '1990-03-08 00:00:00', 19, 1, '2022-12-15 11:28:44', 'Aktif'),
(4, 'intan', '827ccb0eea8a706c4c34a16891f84e7b', 'intan', 'u_def.png', '087715090600', '2007-11-22 00:00:00', 15, 1, '2023-05-09 15:59:34', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `tb_pinjaman`
--
ALTER TABLE `tb_pinjaman`
  ADD PRIMARY KEY (`id_pinjaman`),
  ADD KEY `id_user` (`id_user`) USING BTREE;

--
-- Indexes for table `tb_simpanan`
--
ALTER TABLE `tb_simpanan`
  ADD PRIMARY KEY (`id_simpanan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unit` (`unit`),
  ADD KEY `roles` (`roles`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pinjaman`
--
ALTER TABLE `tb_pinjaman`
  MODIFY `id_pinjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `tb_simpanan`
--
ALTER TABLE `tb_simpanan`
  MODIFY `id_simpanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id_unit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`unit`) REFERENCES `unit` (`id_unit`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`roles`) REFERENCES `roles` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
