-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 10, 2022 at 03:30 PM
-- Server version: 10.3.36-MariaDB-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolahp_siap`
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
(3, 'III'),
(4, 'II'),
(5, 'IV'),
(6, '-');

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
(1, 'Kabid Agribisnis'),
(3, 'Kepala Dinas'),
(4, 'Kabid Perbibitan dan Produksi Ternak'),
(5, 'Kabid Prasarana dan Sarana Peternakan'),
(6, 'Sekretaris Dinas'),
(7, 'Kepala UPTD Veteriner'),
(8, 'Kepala UPTD Pembibitan Ternak dan Produksi Pakan T'),
(9, 'Kabid Keswan dan Kesmavet'),
(10, 'Kasubag Kepegawaian dan Umum'),
(11, 'Kasubag TU UPTD Veteriner'),
(12, 'Kasie Pelayanan Medik Veteriner'),
(13, 'Kasubag TU UPTD PT dan PPT'),
(14, 'Kasie Prod. & Pengemb. Pakan Ternak'),
(15, 'Kasie Pembibitan Ternak'),
(16, 'Kasie Pengujian dan Penyidikan Veteriner'),
(17, 'Pengawas Bibit Ternak Ahli Muda (Sub Koordinator P'),
(18, 'Pengawas Bibit Ternak Ahli Muda (Sub Koordinator P'),
(19, 'Pengawas Mutu Pakan Ahli Muda (Sub Koordinator Pak'),
(20, 'Pengawas Mutu Pakan Ahli Muda (Sub Koordinator Inv'),
(21, 'Pengawas Mutu Pakan Ahli Muda  (Sub Koordinator Pe'),
(22, 'Pengawas Bibit Ternak Ahli Muda (Sub Koordinator T'),
(23, 'Medik Veteriner Ahli Muda (Sub Koordinator Pencega'),
(24, 'Pengawas Bibit Ternak Ahli Muda (Sub Koordinator P'),
(25, 'Pengawas Bibit Ternak Ahli Muda (Sub Koordinator P'),
(26, 'Analis Laporan Keuangan Pusat dan Daerah Ahli Muda'),
(27, 'Perencana Ahli Muda (Sub Koordinator Program, Data'),
(28, 'Medik Veteriner Ahli Muda (Sub Koordinator Kesehat'),
(29, 'Arsiparis Terampil Penyelia'),
(30, 'Medik Veteriner Ahli Madya'),
(31, 'Medik Veteriner Ahli Muda'),
(32, 'Medik Veteriner Ahli Pertama'),
(33, 'Paramedik Veteriner Terampil Pelaksana Lanjutan'),
(34, 'Paramedik Veteriner Terampil Penyelia'),
(35, 'Pengawas Bibit Ternak Ahli Madya'),
(36, 'Pengawas Bibit Ternak Ahli Muda'),
(37, 'Pengawas Bibit Ternak Ahli Pertama'),
(38, 'Pengawas Bibit Ternak Ahli Terampil Pelaksana'),
(39, 'Pengawas Bibit Ternak Terampil Pelaksana Lanjutan'),
(40, 'Pengawas Bibit Ternak Terampil Penyelia'),
(41, 'Pengawas Mutu Hasil Pertanian Ahli Pertama'),
(42, 'Pengawas Mutu Pakan Ahli Muda'),
(43, 'Pengawas Mutu Pakan Terampil Pelaksana'),
(44, 'Pengawas Mutu Pakan Terampil Pelaksana Lanjutan'),
(45, 'Penyuluh Pertanian Ahli Madya'),
(46, 'Perencana Ahli Madya'),
(47, 'Pelaksana'),
(48, 'CPNS'),
(49, 'Arsiparis Penyelia');

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
(25, 'Juru Muda', 'I/a'),
(26, 'Juru Muda Tk. I', 'I/b'),
(27, 'Juru', 'I/c'),
(28, 'Juru Tk. I', 'I/d'),
(29, 'Pengatur Muda', 'II/a'),
(30, 'Pengatur Muda Tk. I', 'II/b'),
(31, 'Pengatur', 'II/c'),
(32, 'Pengatur Tk. I', 'II/d'),
(33, 'Penata Muda', 'III/a'),
(34, 'Penata Muda Tk. I', 'III/b'),
(35, 'Penata', 'III/c'),
(36, 'Penata Tk. I', 'III/d'),
(37, 'Pembina', 'IV/a'),
(38, 'Pembina Tk. I', 'IV/b'),
(39, 'Pembina Utama Muda', 'IV/c'),
(40, 'Pembina Utama Madya', 'IV/d'),
(41, 'Pembina Utama', 'IV/e'),
(42, 'IX', 'IX');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `nomor_kk` varchar(25) NOT NULL,
  `id_pangkat` varchar(50) NOT NULL,
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
  `ktp` varchar(250) NOT NULL,
  `kk` varchar(250) NOT NULL,
  `kartu_pegawai` varchar(250) NOT NULL,
  `ijazah` varchar(250) NOT NULL,
  `sk_cpns` varchar(250) NOT NULL,
  `sk_pns` varchar(250) NOT NULL,
  `sk_pangkat` varchar(250) NOT NULL,
  `role` enum('admin','pegawai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`id_pegawai`, `nama_pegawai`, `nip`, `nik`, `nomor_kk`, `id_pangkat`, `tmt`, `gaji_pokok`, `nomor_skcpns`, `tanggal_skcpns`, `nomor_skpns`, `tanggal_skpns`, `nomor_skterakhir`, `tanggal_skterakhir`, `id_tipe`, `nomor_kartu`, `tempat_lahir`, `tanggal_lahir`, `jk`, `agama`, `status_nikah`, `alamat`, `no_hp`, `email`, `password`, `id_eselon`, `id_jabatan`, `id_pendidikan`, `nomor_ijazah`, `id_unit`, `foto`, `ktp`, `kk`, `kartu_pegawai`, `ijazah`, `sk_cpns`, `sk_pns`, `sk_pangkat`, `role`) VALUES
(8, 'blitz', '0712354', '', '', '3', '2022-10-14', '5.000.000', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '11', '123456', 'Kota Kupang', '2022-10-14', '1', '1', '1', 'Perumahan Anugerah Sejahtera Blok E no 1 , kecamat', '082146109855', 'admin', '21232f297a57a5a743894a0e4a801fc3', '3', '3', '2', '', '13', 'angie.jpg', '', '', '', '', '', '', '', 'admin'),
(26, 'Johanna E. Lisapaly, SH., M.Si', '19640110 198903 2 01', '5371025001640003', '5371022012074959', '40', '2021-08-06', '-', '816.313.3-2817', '1989-02-28', '816.321.13-1349', '1991-02-28', '816.2.1/200/BKD.3.1', '2021-08-04', '11', 'E 796633', 'Probolinggo', '1964-01-10', 'Wanita', 'Kristen Protestan', 'Belum Menikah', 'KPR BTN Blok D.27 Kel. Kolhua Kec. Maulafa Kota Kupang', '081238534128', 'jolisapaly1001@gmail.com', '12345', '4', '3', '26', '-', '14', '', 'KTP.pdf', 'kk.pdf', 'KARPEG.pdf', 'IJAZAH.pdf', 'SK_CPNS.pdf', 'SK_PNS.pdf', 'SK_PANGKAT_TERAKHIR.pdf', 'pegawai'),
(27, 'Ir. Agustinus Salean', '19670823 199503 1 00', '5371042308670001', '5371042012071199', '37', '2021-10-01', '4.555.800,00', '813.3.3/III/105/392-ND', '1995-06-08', '821.13.19/II/303/447-ND', '1996-06-06', '823.4/01/BKD4.1', '2021-09-30', '11', 'G 297709', 'Kupang', '1967-08-23', 'Pria', 'Kristen Protestan', 'Nikah', 'Jln. Prof. W. Z. Johanis RT. 001/RW. 001 Kel. Oetete Kec. Oebobo Kota Kupang', '08123984515', '-', '-', '3', '6', '35', '5517/PT 18/FAPET/S1/92', '14', '', '12__Kartu_Tanda_Penduduk_(KTP).pdf', 'KK_Pak_Sek.pdf', '4__Kartu_Pegawai.pdf', '6__Ijazah_pada_saat_pengangkatan_CPNS_(1).pdf', '1__SK_CPNS.pdf', '2__SK_PNS.pdf', 'SK_Pangkat_Terakhir_Pak_Sek.pdf', 'pegawai'),
(28, 'Kanisius Karmi, S.Sos', '19651006 199003 1 01', '5371040610650002', '5371042212070894', '36', '2012-10-01', '2.957.500', '813.2/1/200/106-N', '1990-06-01', '821.12/1/229/139-N', '1991-08-01', '823.3/I/1/80/461-ND', '2012-09-28', '11', 'E 826678', 'Manggarai', '1965-06-10', 'Pria', 'Katolik', 'Nikah', 'Jl. Amanuban RT.020/RW.004 Kel. Oebufu, Kec. Oebobo, Kota Kupang', '0812-3696-6077', '-', '-', '5', '10', '40', '1081/J15/FISIP/S1/2006', '18', '', '12_Kartu_Tanda_Penduduk_(KTP).pdf', 'KK_Bapa_Kanis.pdf', '4_Kartu_Pegawai_(KARPEG).pdf', 'Ijazah_Terakhir.pdf', '1_SK_CPNS.pdf', 'SK_PNS_Bapa_Kanis.pdf', '', 'pegawai'),
(30, 'Arnold Wadu, S.Pt', '19820418 201101 1 00', '5371011804820006', '-', '35', '2019-04-01', '3.021.300', '813.3/I/1/02/235-ND', '2011-03-07', '821.3/I/1/03/199-ND', '2012-04-30', '823.3/I/1/001/001-ND', '2019-02-20', '11', 'Q 039131', 'Kupang', '1982-04-18', 'Pria', 'Kristen Protestan', 'Nikah', 'Jl. Nangka RT 006/RW 002 Kel. Oeba Kec. Kota Lama Kota Kupang', '0852-3934-5645', '-', '-', '6', '47', '35', '1514/J15/FAPET/S1/2007', '18', '', '12__KTP.pdf', '', '4__Kartu_Pegawai1.pdf', '6__Ijasah_saat_Pengangkatan_CPNS.pdf', '1__SK_CPNS2.pdf', '2__SK_PNS2.pdf', '8_b__SK_Pangkat_Kedua_III-C.pdf', 'pegawai'),
(31, 'Lodewik I.F. Oematan', '19731108 200701 1 01', '5371030811730002', '5371032212074672', '32', '2021-10-01', '3.171.500', '813.2/I/1/09/401-ND', '2007-08-30', '821.2/I/1/20/148-ND', '2008-04-17', '823.3/01/BKD4.1', '2021-09-30', '11', 'N 344266', 'Nuapin', '1973-11-08', 'Pria', 'Kristen Protestan', 'Nikah', 'Kel. Oesapa Barat RT 006/RW 002 Kec. Kelapa Lima', '0853-3900-3773', '-', '-', '6', '47', '48', '21 OB og 0864038', '18', '', '12__KTP1.pdf', 'Kartu_Keluarga.pdf', 'Karpeg.pdf', '6__Ijazah_Saat_Pengangkatan.pdf', '1__SK_CPNS_80_%.pdf', '2__SK_PNS_100_%.pdf', 'SK_Pangkat_Terakhir.pdf', 'pegawai'),
(32, 'Lelu Bili', '19660331 199303 1 00', '5371023103660001', '-', '36', '2016-10-12', '3.793.100', 'KP.330/07/VI/93', '1993-06-15', 'KP.330/3/IV/1994', '1994-04-01', '823.3/I/1/671/286-ND', '2016-09-30', '11', 'F 048430', 'Sumba Barat', '1966-03-31', 'Pria', 'Katolik', 'Nikah', 'Jl. Fetor Funay RT 009/RW 004 Kel. Oepura Kec. Maulafa Kota Kupang', '0812-4676-8432', '-', '-', '6', '49', '48', '21 OC oh 0510972', '18', 'WhatsApp_Image_2022-11-09_at_16_17_09.jpeg', '12__Kartu_Tanda_Penduduk.pdf', '', 'KARPEG1.pdf', '6__Ijazah_saat_Pengangkatan_CPNS.pdf', '1__SK_CPNS_80%.pdf', '2__a__SK_PNS_100%.pdf', '8_g__SK_Pangkat_Terakhir.pdf', 'pegawai'),
(33, 'Gabriel Manoe, SE', '19700926 200312 1 00', '5301062609700002', '5301061902090002', '35', '2020-10-01', '3.941.400', '813.3/I/1/44/1018 - ND', '2003-12-11', '821.12/I/1/40/29 - ND', '2005-01-24', '823.3/183/BKD4.1', '2020-09-30', '11', '-', 'Oesao', '1970-09-26', 'Pria', 'Kristen Protestan', 'Nikah', 'Oesao RT 012/RW 004 Kec. Kupang Timur Kab. Kupang', '0812 5955 6544', '-', '-', '6', '47', '37', '008/STIM/S1/2015', '18', 'WhatsApp_Image_2022-11-09_at_11_53_30.jpeg', '12__KARTU_TANDA_PENDUDUK_(KTP)1.pdf', 'KK_Bapa_Gebby.pdf', '4__KARTU_PEGAWAI_(KARPEG)1.pdf', '7__IJAZAH_TERAKHIR.pdf', '1__SK_CPNS3.pdf', '2__SK_PNS3.pdf', 'SK_Pangkat_Terakhir1.pdf', 'pegawai'),
(35, 'Melianus Lim', '19810521 201212 1 00', '537103210580001', '5371030802170004', '31', '2021-10-01', '2.772.500', '813.2/I/1/12/141-ND', '2013-02-26', '821.2/I/1/09/05-ND', '2014-06-27', '823.3/01/BKD4.1', '2021-09-30', '11', 'Q 298423', 'Timor Tengah Selatan', '1981-05-21', 'Pria', 'Kristen Protestan', 'Nikah', 'Jl. W. Ch. Oematan  RT 025/RW 011 Kel. Kelapa Lima Kec. Kelapa Lima', '-', '-', '-', '6', '47', '57', '24 Mk 0704078', '18', '', '12__Kartu_Tanda_Penduduk_(KTP)2.pdf', '', '', '', '1__SK_CPNS4.pdf', '2__SK_PNS5.pdf', '', 'pegawai'),
(36, 'Korpinis I. Neno', '19780903 201212 1 00', '5371020309780002', '5371020304170009', '29', '2020-04-01', '2.325.300', '813.1/I/1/13/142-ND', '2013-02-26', '821.1/I/1/08/04-ND', '2014-06-27', 'BKD.823.3/I/1/01-ND', '2020-03-31', '11', 'Q 298451', 'Niukbaun', '1978-09-03', 'Pria', 'Kristen Protestan', 'Nikah', 'RT 005/RW 003 Kel. Bello Kec. Maulafa Kota Kupang', '0821-4738-3209', '-', '-', '6', '47', '47', 'DN-24 PC 0308252', '18', '', '12__Kartu_Tanda_Penduduk1.pdf', '', '', '', '1__SK_CPNS80%.pdf', '2__SK_PNS_100%.pdf', '', 'pegawai'),
(37, 'Jermias Mau', '19741118 201212 1 00', '5371051811740001', '5371052102110013', '31', '2021-04-01', '2.772.500', '813.2.I/1/12/141-ND', '2013-02-26', '821.2/I/1/09/05-ND', '2014-06-27', '823.3/161/BKD4.1', '2021-03-31', '11', '-', 'Kupang', '1974-11-18', 'Pria', 'Kristen Protestan', 'Nikah', 'Jl. Komodo RT 013/RW 005 Kel. Bakunase Kec Kota Raja Kota Kupang', '-', '-', '-', '6', '47', '48', '21 OB oe P 0001259', '18', '', '', '', '', '', '', '', '', 'pegawai'),
(39, 'Lukas Isu', '19641010 201212 1 00', '5371021010640001', '5371022212073932', '27', '2021-10-01', '2.139.900', '813.1/I/1/13/142-ND', '2013-02-26', '821.1/I/1/08/04-ND', '2014-06-27', '823.3/01/BKD4.1', '2021-09-30', '11', 'Q 298458', 'Timor Tengah Selatan', '1964-10-10', 'Pria', 'Kristen Protestan', 'Nikah', 'Jl. Sukun I RT 013/ RW 007 Kel. Bello Kec. Maulafa Kota Kupang', '-', '-', '-', '6', '47', '56', '21 Oa oa 011603', '18', '', 'Lukas_Isu_KTP.pdf', 'Lukas_Isu_KK.pdf', '4_a__Kartu_Pegawai_Biasa.pdf', '', 'Lukas_Isu_SK_CPNS.pdf', 'Lukas_Isu_SK_PNS.pdf', 'Lukas_Isu_SK_Pangkat_Terakhir.pdf', 'pegawai'),
(41, 'Asniati S.A. Amalo, S.Pt, M.Si', '19691203 199203 2 01', '5371044312690002', '5371042312074571', '37', '2018-04-01', '4.206.500', 'Kp.330/05/SK/VI/1992', '1992-06-15', 'Kp.340/36/SK/VI/1993', '1993-06-02', '823.4/I/1/855/855-ND', '2018-03-31', '11', 'E 980732', 'Kefamenanu', '1969-12-03', 'Wanita', 'Kristen Protestan', 'Nikah', 'Jln. Johar No. 10 RT 009/RW 002 Kel. Oetete Kec. Oebobo Kota Kupang', '0852-5310-4401', '-', '-', '6', '46', '27', '417/H15/PPs/S2/2011', '20', '', '12__Kartu_Tanda_Penduduk_(KTP)3.pdf', 'Asniati_Amalo_KK.pdf', '4__Kartu_Pegawai_(KARPEG)_Lama_+_Elektrik.pdf', '7__Ijazah_Terakhir_(S2)_Pasca_Sarjana.pdf', '1__SK__CPNS_(_80%_).pdf', '2__SK__PNS_(_100%_).pdf', '8_h__SK__Pangkat_Kedelapan_(_IV_A_).pdf', 'pegawai'),
(42, 'dimas', '1231452132', '213123', '2312321', '25', '2022-11-10', '5.000.000', '342424243', '2022-11-24', '2342342342', '2022-11-10', '2342342342', '2022-11-10', '11', '1232412412', 'Kupang', '2022-11-10', 'Pria', 'Islam', 'Nikah', 'Perumahan Anugerah Sejahtera Blok E no 1 , kecamatan alak , kota kupang', '082146109855', 'dimaspsedy@gmail.com', 'dimas', '4', '49', '31', '2131231', '14', '', '', '', '', '', '', '', '', 'pegawai'),
(43, 'Bsbbsnd', '2638499201', '1738494', '17378494', '27', '2022-11-26', '6284994', 'Gshbdbbd', '2022-11-01', 'Udbbsbx', '2022-11-12', 'Ybbvfh', '2022-11-22', '17', '6yehshbd', 'Jsjsjka', '2022-11-09', 'Pria', 'Katolik', 'Belum Menikah', 'Hsbsbbxbd', '63839010126', 'Heushbdbd', 'gehwjhd', '6', '47', '46', 'Hsbsbbd', '23', '', '', '', '', '', '', '', '', 'pegawai'),
(44, 'fsdgsdg', '783256829', '183091467', '294723847', '33', '2022-02-01', '1748974', 'bgdfb', '2001-01-01', 'grhgfth', '2002-01-02', 'grjgiokrgjhn', '2003-01-03', '17', '53463', 'dskfhsjk', '1990-05-20', 'Wanita', 'Katolik', 'Belum Menikah', 'gehgfdh', '02851485784', 'absc', '-', '6', '48', '38', 'fegtreg', '18', '', '', '', '', '', '', '', '', 'pegawai'),
(45, 'Kirenius Lay Ratu, S.Pt, M.Si', '19740626 200903 1 00', '5371012606740002', '5371012012073279', '36', '2021-04-01', '3.518.100', '813.3/I/1/03/174-ND', '2009-03-16', '821.3/I/1/22/375-ND', '2010-04-09', '823.3/161/BKD4.1', '2021-03-31', '11', 'P 122736', 'Kupang', '1974-06-26', 'Pria', 'Kristen Protestan', 'Nikah', 'Jl. Tifa RT 008/RW 003 Kel. Manutapen Kec. Alak Kota Kupang', '0813-3916-4177', '-', '-', '6', '47', '27', '2010181129', '20', '', '12_Kartu_Tanda_Penduduk1.pdf', 'Kirenius_Lay_Ratu_KK1.pdf', '4_Kartu_Pegawai1.pdf', '7_Ijasah_terakhir1.pdf', '1_SK_CPNS2.pdf', '2_SK_PNS1.pdf', 'Kirenius_Lay_Ratu_Pangkat_Terakhir1.pdf', 'pegawai'),
(47, 'drh. Franky L. H. Remi Andung, S.KH', '19940209 202012 1 00', '5371040902940002', '5371042212071463', '34', '2020-12-01', '2.773.200', '813.3/671/BKD2.1', '2020-12-08', '821.1.3/323/BKD4.1', '2022-01-15', '-', '0001-01-01', '11', '-', 'Kupang', '1994-02-09', 'Pria', 'Kristen Protestan', 'Belum Menikah', 'RT 019/RW 005 Kel. Kayu Putih Kec. Oebobo Kota Kupang', '0822-4749-9235', 'abc', '-', '6', '47', '42', '2091/UN14.1.22/PP.06.02.05/2017', '20', '', 'Franky_Andung_KTP.pdf', 'Franky_Andung_KK.pdf', '', 'Franky_Andung_Ijazah_Terakhir.pdf', 'Franky_Andung_SK_CPNS.pdf', 'Franky_Andung_SK_PNS.pdf', '', 'pegawai');

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
(34, 'S2-Magister', 'Sains Veteriner'),
(35, 'S1-Sarjana', 'Peternakan'),
(36, 'S1-Sarjana', 'Profesi Kedokteran Hewan'),
(37, 'S1-Sarjana', 'Ekonomi'),
(38, 'S1-Sarjana', 'Ilmu Komputer'),
(39, 'S1-Sarjana', 'Pertanian'),
(40, 'S1-Sarjana', 'Sosial'),
(41, 'S1-Sarjana', 'Hukum'),
(42, 'S1-Sarjana', 'Kedokteran Hewan'),
(43, 'S1-Sarjana', 'Sains Terapan'),
(44, 'D3-Diploma', 'Peternakan'),
(45, 'D3-Diploma', 'Kesehatan Hewan'),
(46, 'D3-Diploma', 'Keuangan'),
(47, 'SMA/SMK', 'Paket C'),
(48, 'SMA/SMK', 'Ilmu Sosial'),
(49, 'SMA/SMK', 'Akuntansi'),
(50, 'SMA/SMK', 'Koperasi'),
(51, 'SMA/SMK', 'Manajemen Permodalan'),
(52, 'SMA/SMK', 'Peternakan'),
(53, 'SMA/SMK', 'Teknik Mesin'),
(54, 'SMP', 'Paket B'),
(55, 'SMP', '-'),
(56, 'SD', '-'),
(57, 'SMA/SMK', 'Pariwisata');

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
(10, 'Honor Daerah'),
(11, 'PNS'),
(13, 'Tenaga Harian Lepas (THL)'),
(16, 'Tenaga Lapangan Lepas (TL'),
(17, 'CPNS'),
(18, 'PPPK');

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
  ADD PRIMARY KEY (`id_bidang`),
  ADD KEY `pimpinan` (`pimpinan`);

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
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `id_pangkat` (`id_pangkat`);

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
  MODIFY `id_eselon` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id_jabatan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tbl_pangkat`
--
ALTER TABLE `tbl_pangkat`
  MODIFY `id_pangkat` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tbl_pelatihan`
--
ALTER TABLE `tbl_pelatihan`
  MODIFY `id_pelatihan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_pendidikan`
--
ALTER TABLE `tbl_pendidikan`
  MODIFY `id_pendidikan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tbl_tipe`
--
ALTER TABLE `tbl_tipe`
  MODIFY `id_tipe` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_unit`
--
ALTER TABLE `tbl_unit`
  MODIFY `id_unit` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
