-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2020 at 02:11 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `batuwangi`
--

-- --------------------------------------------------------

--
-- Table structure for table `imunisasi`
--

CREATE TABLE `imunisasi` (
  `no_kunjungan` int(11) NOT NULL,
  `id_pasien` varchar(12) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `nama_anak` varchar(100) DEFAULT NULL,
  `jenis_kelamin` varchar(1) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `nama_ortu` varchar(100) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `hbo` bit(1) DEFAULT NULL,
  `bcg` bit(1) DEFAULT NULL,
  `pentabio1` bit(1) DEFAULT NULL,
  `pentabio2` bit(1) DEFAULT NULL,
  `pentabio3` bit(1) DEFAULT NULL,
  `polio1` bit(1) DEFAULT NULL,
  `polio2` bit(1) DEFAULT NULL,
  `polio3` bit(1) DEFAULT NULL,
  `polio4` bit(1) DEFAULT NULL,
  `ipv` bit(1) DEFAULT NULL,
  `campak` bit(1) DEFAULT NULL,
  `pentabooster` bit(1) DEFAULT NULL,
  `campakbooster` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kb`
--

CREATE TABLE `kb` (
  `no_kunjungan` int(11) NOT NULL,
  `id_pasien` varchar(12) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `desa` varchar(50) DEFAULT NULL,
  `lama_pil` bit(1) DEFAULT NULL,
  `lama_suntik` bit(1) DEFAULT NULL,
  `lama_iud` bit(1) DEFAULT NULL,
  `lama_implant` bit(1) DEFAULT NULL,
  `lama_mow` bit(1) DEFAULT NULL,
  `lama_mop` bit(1) DEFAULT NULL,
  `lama_kondom` bit(1) DEFAULT NULL,
  `lama_total` int(11) DEFAULT NULL,
  `baru_pil` bit(1) DEFAULT NULL,
  `baru_suntik` bit(1) DEFAULT NULL,
  `baru_iud` bit(1) DEFAULT NULL,
  `baru_implant` bit(1) DEFAULT NULL,
  `baru_mow` bit(1) DEFAULT NULL,
  `baru_mop` bit(1) DEFAULT NULL,
  `baru_kondom` bit(1) DEFAULT NULL,
  `baru_total` int(11) DEFAULT NULL,
  `efek_samping` bit(1) DEFAULT NULL,
  `komplikasi` bit(1) DEFAULT NULL,
  `kegagalan` bit(1) DEFAULT NULL,
  `do` bit(1) DEFAULT NULL,
  `aktif` bit(1) DEFAULT NULL,
  `aktif_gakin` bit(1) DEFAULT NULL,
  `aktif_4t` bit(1) DEFAULT NULL,
  `aktif_alkj` bit(1) DEFAULT NULL,
  `pasca_persalinan` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kb`
--

INSERT INTO `kb` (`no_kunjungan`, `id_pasien`, `tanggal`, `desa`, `lama_pil`, `lama_suntik`, `lama_iud`, `lama_implant`, `lama_mow`, `lama_mop`, `lama_kondom`, `lama_total`, `baru_pil`, `baru_suntik`, `baru_iud`, `baru_implant`, `baru_mow`, `baru_mop`, `baru_kondom`, `baru_total`, `efek_samping`, `komplikasi`, `kegagalan`, `do`, `aktif`, `aktif_gakin`, `aktif_4t`, `aktif_alkj`, `pasca_persalinan`) VALUES
(1, '1', '2020-10-20 10:20:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kehamilan`
--

CREATE TABLE `kehamilan` (
  `no_kunjungan` int(11) NOT NULL,
  `id_pasien` varchar(12) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `umur` int(11) DEFAULT NULL,
  `suami` varchar(100) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `hamil_ke` int(11) DEFAULT NULL,
  `umur_kehamilan` int(11) DEFAULT NULL,
  `imunisasi_tt1` bit(1) DEFAULT NULL,
  `imunisasi_tt2` bit(1) DEFAULT NULL,
  `kunjungan_k1` bit(1) DEFAULT NULL,
  `kunjungan_k4` bit(1) DEFAULT NULL,
  `fe` bit(1) DEFAULT NULL,
  `resiko_tinggi` bit(1) DEFAULT NULL,
  `dirujuk` bit(1) DEFAULT NULL,
  `keterangan` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `neomatus`
--

CREATE TABLE `neomatus` (
  `no_kunjungan` int(11) NOT NULL,
  `id_pasien` varchar(12) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `nama_ortu` varchar(100) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `imunisasi` varchar(100) DEFAULT NULL,
  `keadaan` varchar(10) DEFAULT NULL,
  `jk` varchar(1) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` varchar(12) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `nama_suami` varchar(100) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `no_identitas` varchar(32) DEFAULT NULL,
  `foto_identitas` varchar(200) DEFAULT NULL,
  `telp` varchar(50) DEFAULT NULL,
  `tanggal_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `nama_suami`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `no_identitas`, `foto_identitas`, `telp`, `tanggal_daftar`) VALUES
('201007180832', 'abbbasd', 'aidsaob', 'jandkajn1i98621', 'jakarta', '1980-10-20', '891265011123', '', '891240141123', '2020-10-07'),
('201008175036', 'Kevin', '', 'jl airbus', 'Jakarta', '1994-12-15', '120971401', 'upload/5dc8ea0c0a0bb-bae-suzy_665_374.jpg', '91287104142', '0000-00-00'),
('201008175105', 'Kevin', '', 'jl aksndadn', 'bandung', '1994-12-15', '10924371207', 'upload/bae-suzy-png.png', '1928312047', '0000-00-00'),
('201008182109', 'Kevin', '', 'jl aksndadn', 'bandung', '1994-12-15', '10924371207', 'upload/', '1928312047', '0000-00-00'),
('201008182146', 'abbbasd', 'aidsaob', 'jandkajn1i98621', 'jakarta', '1980-10-20', '891265011123', 'upload/', '891240141123', '0000-00-00'),
('201008182154', 'Kevin', '', 'jl aksndadn', 'bandung', '1994-12-15', '10924371207', 'upload/', '1928312047', '0000-00-00'),
('201009072608', '', '', '', '', '0000-00-00', '', 'upload/', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `persalinan`
--

CREATE TABLE `persalinan` (
  `no_kunjungan` int(11) NOT NULL,
  `id_pasien` varchar(12) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `nama_ibu` varchar(100) DEFAULT NULL,
  `umur` int(11) DEFAULT NULL,
  `nama_suami` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `anak_ke` int(11) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jam_lahir` varchar(20) DEFAULT NULL,
  `bb` varchar(20) DEFAULT NULL,
  `pb` varchar(20) DEFAULT NULL,
  `ibu_sehat` bit(1) DEFAULT NULL,
  `ibu_dirujuk` bit(1) DEFAULT NULL,
  `bayi_sehat` bit(1) DEFAULT NULL,
  `bayi_dirujuk` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imunisasi`
--
ALTER TABLE `imunisasi`
  ADD PRIMARY KEY (`no_kunjungan`);

--
-- Indexes for table `kb`
--
ALTER TABLE `kb`
  ADD PRIMARY KEY (`no_kunjungan`);

--
-- Indexes for table `kehamilan`
--
ALTER TABLE `kehamilan`
  ADD PRIMARY KEY (`no_kunjungan`);

--
-- Indexes for table `neomatus`
--
ALTER TABLE `neomatus`
  ADD PRIMARY KEY (`no_kunjungan`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `persalinan`
--
ALTER TABLE `persalinan`
  ADD PRIMARY KEY (`no_kunjungan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imunisasi`
--
ALTER TABLE `imunisasi`
  MODIFY `no_kunjungan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kb`
--
ALTER TABLE `kb`
  MODIFY `no_kunjungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kehamilan`
--
ALTER TABLE `kehamilan`
  MODIFY `no_kunjungan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `neomatus`
--
ALTER TABLE `neomatus`
  MODIFY `no_kunjungan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `persalinan`
--
ALTER TABLE `persalinan`
  MODIFY `no_kunjungan` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
