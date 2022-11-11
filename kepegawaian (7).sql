-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2022 at 03:18 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `tbl_eselon`
--

CREATE TABLE `tbl_eselon` (
  `id_eselon` int(15) NOT NULL,
  `eselon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_eselon`
--

INSERT INTO `tbl_eselon` (`id_eselon`, `eselon`) VALUES
(3, '2'),
(4, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jabatan`
--

CREATE TABLE `tbl_jabatan` (
  `id_jabatan` int(15) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`id_jabatan`, `jabatan`) VALUES
(1, 'Kepala Bidang'),
(3, 'Kepala Dinas');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pangkat`
--

CREATE TABLE `tbl_pangkat` (
  `id_pangkat` int(15) NOT NULL,
  `pangkat` varchar(50) NOT NULL,
  `golongan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pangkat`
--

INSERT INTO `tbl_pangkat` (`id_pangkat`, `pangkat`, `golongan`) VALUES
(4, 'Juru Muda TK. I', ' I/b'),
(7, 'Juru Muda', ' I/a'),
(8, 'Juru', 'I/c'),
(9, 'Juru Tk. I', 'I/d'),
(10, 'Pengatur Muda', 'II/a'),
(11, 'Pengatur Muda Tk. I', 'II/b'),
(12, 'Pengatur', 'II/c'),
(13, 'Pengatur Tk. I', 'II/d'),
(14, 'Penata Muda', 'III/a'),
(15, 'Penata Muda Tk. I', 'III/b'),
(16, 'Penata', 'III/c'),
(17, 'Penata Tk. I', 'III/d'),
(18, 'Pembina', 'IV/a'),
(19, 'Pembina Tk. I', 'IV/b'),
(20, 'Pembina Utama Muda', 'IV/c'),
(21, 'Pembina Utama Madya', 'IV/d'),
(22, 'Pembina Utama', 'IV/e'),
(23, 'Pranata Muda', 'IIIA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `id_pangkat` varchar(5) NOT NULL,
  `tmt` date NOT NULL,
  `gaji_pokok` varchar(15) NOT NULL,
  `nomor_skcpns` varchar(50) NOT NULL,
  `tanggal_skcpns` date NOT NULL,
  `nomor_skpns` varchar(50) NOT NULL,
  `tanggal_skpns` date NOT NULL,
  `nomor_skterakhir` varchar(50) NOT NULL,
  `tanggal_skterakhir` date NOT NULL,
  `id_tipe` varchar(5) NOT NULL,
  `nomor_kartu` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jk` varchar(25) NOT NULL,
  `agama` varchar(25) NOT NULL,
  `status_nikah` varchar(25) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `id_eselon` varchar(10) NOT NULL,
  `id_jabatan` varchar(20) NOT NULL,
  `id_pendidikan` varchar(25) NOT NULL,
  `nomor_ijazah` varchar(50) NOT NULL,
  `id_unit` varchar(25) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `ijazah` varchar(250) NOT NULL,
  `sk_cpns` varchar(250) NOT NULL,
  `sk_pns` varchar(250) NOT NULL,
  `sk_pangkat` varchar(250) NOT NULL,
  `role` enum('admin','pegawai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`id_pegawai`, `nama_pegawai`, `nip`, `id_pangkat`, `tmt`, `gaji_pokok`, `nomor_skcpns`, `tanggal_skcpns`, `nomor_skpns`, `tanggal_skpns`, `nomor_skterakhir`, `tanggal_skterakhir`, `id_tipe`, `nomor_kartu`, `tempat_lahir`, `tanggal_lahir`, `jk`, `agama`, `status_nikah`, `alamat`, `no_hp`, `email`, `password`, `id_eselon`, `id_jabatan`, `id_pendidikan`, `nomor_ijazah`, `id_unit`, `foto`, `ijazah`, `sk_cpns`, `sk_pns`, `sk_pangkat`, `role`) VALUES
(8, 'blitz', '0712354', '3', '2022-10-14', '5.000.000', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '11', '123456', 'Kota Kupang', '2022-10-14', '1', '1', '1', 'Perumahan Anugerah Sejahtera Blok E no 1 , kecamat', '082146109855', 'admin', '21232f297a57a5a743894a0e4a801fc3', '3', '3', '2', '', '13', 'angie.jpg', '', '', '', '', 'admin'),
(14, 'goku', '0712354', '10', '2022-10-31', '5.000.000', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '11', '123456', 'Kota Kupang', '2022-10-31', 'Pria', 'Islam', 'Nikah', 'Perumahan Anugerah Sejahtera Blok E no 1 , kecamatan alak , kota kupang', '082146109855', 'admin.puskesmas@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '4', '1', '25', '', '16', 'angie1.jpg', 'WhatsApp_Image_2022-10-20_at_14_25_231.jpeg', '', '', '', 'pegawai'),
(24, 'ichigo', '0712354', '22', '2022-10-31', '5.000.000', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '11', '123456', 'Kota Kupang', '2022-10-31', 'Wanita', 'Hindu', 'Nikah', 'Perumahan Anugerah Sejahtera Blok E no 1 , kecamatan alak , kota kupang', '082146109855', 'admin.puskesmas@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '4', '1', '27', '', '20', 'WhatsApp_Image_2022-10-20_at_14_25_23.jpeg', 'Lelang-Pengumuman_Kend1.pdf', 'PengantarPenelitian_Dr_Dwi_Prasetyo-AmaliaRahmah1.pdf', '4453-IZIN_EXPERT-S3TP-JUHAIDATUR_RAHMI_28_Oktober_20211.PDF', 'PENGUMUMAN_DAFTAR_WISUDA_PERIODE_PERTAMA_TAHUN_2022.pdf', 'pegawai');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelatihan`
--

CREATE TABLE `tbl_pelatihan` (
  `id_pelatihan` int(10) NOT NULL,
  `nama_pelatihan` varchar(50) NOT NULL,
  `id_pegawai` int(10) NOT NULL,
  `jam_pelatihan` int(3) NOT NULL,
  `tanggal` date NOT NULL,
  `file` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pelatihan`
--

INSERT INTO `tbl_pelatihan` (`id_pelatihan`, `nama_pelatihan`, `id_pegawai`, `jam_pelatihan`, `tanggal`, `file`) VALUES
(4, 'Prakerja', 5, 10, '2022-10-13', ''),
(5, 'hfjsdvbndsvbds', 10, 4, '2022-10-20', 'AGENDA_4_TUGAS_1_INDIVIDU.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendidikan`
--

CREATE TABLE `tbl_pendidikan` (
  `id_pendidikan` int(15) NOT NULL,
  `strata` varchar(25) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pendidikan`
--

INSERT INTO `tbl_pendidikan` (`id_pendidikan`, `strata`, `jurusan`) VALUES
(25, 'D3-Diploma', 'Penyuluh Peternakan'),
(26, 'S2-Magister', 'Administrasi Publik'),
(27, 'S2-Magister', 'Ilmu Peternakan'),
(28, 'S2-Magister', 'Ilmu Ternak'),
(29, 'S2-Magister', 'Manajemen'),
(30, 'S2-Magister', 'Manajemen SDM'),
(31, 'S2-Magister', 'Pembangunan Peternakan'),
(32, 'S2-Magister', 'Pertanian'),
(33, 'S2-Magister', 'Peternakan'),
(34, 'S2-Magister', 'Sains Veteriner');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tipe`
--

CREATE TABLE `tbl_tipe` (
  `id_tipe` int(5) NOT NULL,
  `tipe` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tipe`
--

INSERT INTO `tbl_tipe` (`id_tipe`, `tipe`) VALUES
(10, 'Honorer'),
(11, 'PNS'),
(13, 'THL'),
(16, 'TLL');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_unit`
--

CREATE TABLE `tbl_unit` (
  `id_unit` int(15) NOT NULL,
  `unit_kerja` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_unit`
--

INSERT INTO `tbl_unit` (`id_unit`, `unit_kerja`) VALUES
(14, 'Dinas Peternakan Provinsi NTT'),
(15, 'UPTD Pembibitan Ternak & Produksi Pakan Ternak'),
(16, 'UPTD Veteriner'),
(17, 'Bidang Kesehatan Hewan & Kesehatan Masy. Veteriner'),
(18, 'Sub Bagian Kepeg & Umum Dinas Peternakan'),
(19, 'Substansi Keuangan dan Aset'),
(20, 'Substansi Program, Data & Evaluasi'),
(21, 'Bidang Prasarana, Sarana & Pengembangan Sumber Day'),
(22, 'Bidang Perbibitan & Produksi Ternak'),
(23, 'Bidang Agribisnis & Kelembagaan Peternakan'),
(24, 'Seksi Pengujian & Penyidikan Veteriner'),
(25, 'Seksi Pelayanan Veteriner'),
(26, 'Seksi Produksi & Pengembangan Pakan Ternak'),
(27, 'Seksi Pembibitan Ternak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bidang`
--
ALTER TABLE `tbl_bidang`
  ADD PRIMARY KEY (`id_bidang`);

--
-- Indexes for table `tbl_eselon`
--
ALTER TABLE `tbl_eselon`
  ADD PRIMARY KEY (`id_eselon`);

--
-- Indexes for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tbl_pangkat`
--
ALTER TABLE `tbl_pangkat`
  ADD PRIMARY KEY (`id_pangkat`);

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
-- Indexes for table `tbl_pendidikan`
--
ALTER TABLE `tbl_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indexes for table `tbl_tipe`
--
ALTER TABLE `tbl_tipe`
  ADD PRIMARY KEY (`id_tipe`);

--
-- Indexes for table `tbl_unit`
--
ALTER TABLE `tbl_unit`
  ADD PRIMARY KEY (`id_unit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bidang`
--
ALTER TABLE `tbl_bidang`
  MODIFY `id_bidang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_eselon`
--
ALTER TABLE `tbl_eselon`
  MODIFY `id_eselon` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id_jabatan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_pangkat`
--
ALTER TABLE `tbl_pangkat`
  MODIFY `id_pangkat` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_pelatihan`
--
ALTER TABLE `tbl_pelatihan`
  MODIFY `id_pelatihan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_pendidikan`
--
ALTER TABLE `tbl_pendidikan`
  MODIFY `id_pendidikan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_tipe`
--
ALTER TABLE `tbl_tipe`
  MODIFY `id_tipe` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_unit`
--
ALTER TABLE `tbl_unit`
  MODIFY `id_unit` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
