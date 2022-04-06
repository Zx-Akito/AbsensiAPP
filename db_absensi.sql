/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.24-MariaDB : Database - db_absensi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_absensi` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_absensi`;

/*Table structure for table `absensi` */

DROP TABLE IF EXISTS `absensi`;

CREATE TABLE `absensi` (
  `id_absensi` int(11) NOT NULL AUTO_INCREMENT,
  `nis` char(13) DEFAULT NULL,
  `masuk` datetime DEFAULT NULL,
  `keluar` datetime DEFAULT NULL,
  PRIMARY KEY (`id_absensi`),
  KEY `nis` (`nis`),
  CONSTRAINT `absensi_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `absensi` */

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id_admin` char(11) NOT NULL,
  `nama` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `admin` */

insert  into `admin`(`id_admin`,`nama`) values 
('101','dimas');

/*Table structure for table `kelas` */

DROP TABLE IF EXISTS `kelas`;

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(3) DEFAULT NULL,
  `jurusan` enum('Rekayasa Perangkat Lunak','Teknik Komputer Jaringan','Akuntansi Keuangan Lembaga','Perhotelan I','Perhotelan II','Teknik Kendaraan Ringan Otomotif I','Teknik Kendaraan Ringan Otomotif II','Otomatisasi Tata Kelola Perkantoran I','Otomatisasi Tata Kelola Perkantoran II') DEFAULT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `kelas` */

insert  into `kelas`(`id_kelas`,`nama`,`jurusan`) values 
(1,'XII','Teknik Komputer Jaringan');

/*Table structure for table `pengguna` */

DROP TABLE IF EXISTS `pengguna`;

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(99) DEFAULT NULL,
  `level` enum('admin','siswa') DEFAULT NULL,
  PRIMARY KEY (`id_pengguna`)
) ENGINE=InnoDB AUTO_INCREMENT=202 DEFAULT CHARSET=utf8mb4;

/*Data for the table `pengguna` */

insert  into `pengguna`(`id_pengguna`,`password`,`level`) values 
(101,'$2y$10$3a2KmNqpclVsI0mFvlDU0O38l181nisqM0vYMVL5NhLWsJPbbV2fW','admin'),
(201,'$2y$10$3a2KmNqpclVsI0mFvlDU0O38l181nisqM0vYMVL5NhLWsJPbbV2fW','siswa');

/*Table structure for table `siswa` */

DROP TABLE IF EXISTS `siswa`;

CREATE TABLE `siswa` (
  `nis` char(13) NOT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`nis`),
  KEY `id_kelas` (`id_kelas`),
  CONSTRAINT `siswa_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `siswa` */

insert  into `siswa`(`nis`,`id_kelas`,`nama`) values 
('201',1,'Rifki Nurmansyah');

/*Table structure for table `siswa_list` */

DROP TABLE IF EXISTS `siswa_list`;

/*!50001 DROP VIEW IF EXISTS `siswa_list` */;
/*!50001 DROP TABLE IF EXISTS `siswa_list` */;

/*!50001 CREATE TABLE  `siswa_list`(
 `id_kelas` int(11) ,
 `nis` char(13) ,
 `nama_siswa` varchar(50) ,
 `nama_kelas` varchar(3) ,
 `jurusan` enum('Rekayasa Perangkat Lunak','Teknik Komputer Jaringan','Akuntansi Keuangan Lembaga','Perhotelan I','Perhotelan II','Teknik Kendaraan Ringan Otomotif I','Teknik Kendaraan Ringan Otomotif II','Otomatisasi Tata Kelola Perkantoran I','Otomatisasi Tata Kelola Perkantoran II') 
)*/;

/*View structure for view siswa_list */

/*!50001 DROP TABLE IF EXISTS `siswa_list` */;
/*!50001 DROP VIEW IF EXISTS `siswa_list` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `siswa_list` AS (select `kelas`.`id_kelas` AS `id_kelas`,`siswa`.`nis` AS `nis`,`siswa`.`nama` AS `nama_siswa`,`kelas`.`nama` AS `nama_kelas`,`kelas`.`jurusan` AS `jurusan` from (`kelas` join `siswa`) where `kelas`.`id_kelas` = `siswa`.`id_kelas`) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
