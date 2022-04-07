-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2022 at 08:19 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_absensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id_absensi` int(11) NOT NULL,
  `username_siswa` char(13) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jam_aturan_masuk` time DEFAULT NULL,
  `jam_aturan_pulang` time DEFAULT NULL,
  `absensi_masuk` time DEFAULT NULL,
  `absensi_pulang` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username_admin` char(11) NOT NULL,
  `nama` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username_admin`, `nama`) VALUES
('101', 'dimas');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama` varchar(3) DEFAULT NULL,
  `jurusan` enum('Rekayasa Perangkat Lunak','Teknik Komputer Jaringan','Akuntansi Keuangan Lembaga','Perhotelan I','Perhotelan II','Teknik Kendaraan Ringan Otomotif I','Teknik Kendaraan Ringan Otomotif II','Otomatisasi Tata Kelola Perkantoran I','Otomatisasi Tata Kelola Perkantoran II') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama`, `jurusan`) VALUES
(1, 'XII', 'Rekayasa Perangkat Lunak'),
(2, 'XII', 'Teknik Komputer Jaringan');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `username` int(11) NOT NULL,
  `password` varchar(99) DEFAULT NULL,
  `level` enum('admin','siswa') DEFAULT 'siswa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`username`, `password`, `level`) VALUES
(1, NULL, 'siswa'),
(12, NULL, 'siswa'),
(101, '$2y$10$3a2KmNqpclVsI0mFvlDU0O38l181nisqM0vYMVL5NhLWsJPbbV2fW', 'admin'),
(111, '$2y$10$HIoLUmA3/BNtPl4tbzONWO959NDLRKtDzd4HI7hbOdUoZYpWtzUFm', 'siswa'),
(201, '$2y$10$3a2KmNqpclVsI0mFvlDU0O38l181nisqM0vYMVL5NhLWsJPbbV2fW', 'siswa'),
(22223, NULL, 'siswa'),
(22224, NULL, 'siswa');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `username_siswa` char(13) NOT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`username_siswa`, `id_kelas`, `nama`) VALUES
('100', 1, 'Kresna'),
('111', 1, 'Dadan'),
('201', 1, 'Rifki'),
('try', 1, 'hu');

-- --------------------------------------------------------

--
-- Stand-in structure for view `siswa_list`
-- (See below for the actual view)
--
CREATE TABLE `siswa_list` (
`id_kelas` int(11)
,`username_siswa` char(13)
,`nama_siswa` varchar(50)
,`nama_kelas` varchar(3)
,`jurusan` enum('Rekayasa Perangkat Lunak','Teknik Komputer Jaringan','Akuntansi Keuangan Lembaga','Perhotelan I','Perhotelan II','Teknik Kendaraan Ringan Otomotif I','Teknik Kendaraan Ringan Otomotif II','Otomatisasi Tata Kelola Perkantoran I','Otomatisasi Tata Kelola Perkantoran II')
);

-- --------------------------------------------------------

--
-- Structure for view `siswa_list`
--
DROP TABLE IF EXISTS `siswa_list`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `siswa_list`  AS   (select `kelas`.`id_kelas` AS `id_kelas`,`siswa`.`username_siswa` AS `username_siswa`,`siswa`.`nama` AS `nama_siswa`,`kelas`.`nama` AS `nama_kelas`,`kelas`.`jurusan` AS `jurusan` from (`kelas` join `siswa`) where `kelas`.`id_kelas` = `siswa`.`id_kelas`)  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absensi`),
  ADD KEY `nis` (`username_siswa`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username_admin`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`username_siswa`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `username` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22225;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `absensi_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
  ADD CONSTRAINT `absensi_ibfk_2` FOREIGN KEY (`username_siswa`) REFERENCES `siswa` (`username_siswa`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
