-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2022 at 03:28 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kepegawaian`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bidang`
--

CREATE TABLE `tbl_bidang` (
  `id_bidang` int(11) NOT NULL,
  `nama_bidang` varchar(50) NOT NULL,
  `pimpinan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `pangkat` varchar(5) NOT NULL,
  `tmt` date NOT NULL,
  `gaji_pokok` varchar(15) NOT NULL,
  `pejabat` varchar(50) NOT NULL,
  `nomor_sk` varchar(25) NOT NULL,
  `tanggal_sk` date NOT NULL,
  `tipe_pegawai` varchar(5) NOT NULL,
  `nomor_kartu` int(11) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jk` char(1) NOT NULL,
  `agama` char(1) NOT NULL,
  `status_nikah` char(1) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `eselon` varchar(10) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `pendidikan` varchar(25) NOT NULL,
  `unit_kerja` varchar(25) NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`id_pegawai`, `nama_pegawai`, `nip`, `pangkat`, `tmt`, `gaji_pokok`, `pejabat`, `nomor_sk`, `tanggal_sk`, `tipe_pegawai`, `nomor_kartu`, `tempat_lahir`, `tanggal_lahir`, `jk`, `agama`, `status_nikah`, `alamat`, `no_hp`, `email`, `password`, `eselon`, `jabatan`, `pendidikan`, `unit_kerja`, `foto`) VALUES
(3, 'blitz', '123', '1', '2022-10-05', '5.000.000', 'Gubernur', 'SK 1', '2022-10-05', '1', 123456, 'Kota Kupang', '2022-10-05', '1', '1', '2', 'Alak', '082146109855', 'blitz@gmail.com', 'blitz', '1', '1', '2', '1', 'WhatsApp_Image_2022-09-14_at_12_49_04.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelatihan`
--

CREATE TABLE `tbl_pelatihan` (
  `id_pelatihan` int(10) NOT NULL,
  `id_pegawai` int(10) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `jam_pelatihan` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `file` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tipe`
--

CREATE TABLE `tbl_tipe` (
  `id_tipe` int(5) NOT NULL,
  `tipe_pegawai` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bidang`
--
ALTER TABLE `tbl_bidang`
  ADD PRIMARY KEY (`id_bidang`);

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tbl_pelatihan`
--
ALTER TABLE `tbl_pelatihan`
  ADD PRIMARY KEY (`id_pelatihan`);

--
-- Indexes for table `tbl_tipe`
--
ALTER TABLE `tbl_tipe`
  ADD PRIMARY KEY (`id_tipe`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bidang`
--
ALTER TABLE `tbl_bidang`
  MODIFY `id_bidang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_pelatihan`
--
ALTER TABLE `tbl_pelatihan`
  MODIFY `id_pelatihan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_tipe`
--
ALTER TABLE `tbl_tipe`
  MODIFY `id_tipe` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
