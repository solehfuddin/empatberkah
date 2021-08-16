/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.4.8-MariaDB : Database - empat_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`empat_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `empat_db`;

/*Table structure for table `tbl_contactus` */

DROP TABLE IF EXISTS `tbl_contactus`;

CREATE TABLE `tbl_contactus` (
  `id_contactus` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `message` text DEFAULT NULL,
  PRIMARY KEY (`id_contactus`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_contactus` */

/*Table structure for table `tbl_custom` */

DROP TABLE IF EXISTS `tbl_custom`;

CREATE TABLE `tbl_custom` (
  `id_custom` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `link` text DEFAULT NULL,
  `key` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_custom`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_custom` */

/*Table structure for table `tbl_projek` */

DROP TABLE IF EXISTS `tbl_projek`;

CREATE TABLE `tbl_projek` (
  `id_projek` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  PRIMARY KEY (`id_projek`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_projek` */

/*Table structure for table `tbl_service` */

DROP TABLE IF EXISTS `tbl_service`;

CREATE TABLE `tbl_service` (
  `id_service` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(35) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `link` text DEFAULT NULL,
  PRIMARY KEY (`id_service`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_service` */

/*Table structure for table `tbl_testimoni` */

DROP TABLE IF EXISTS `tbl_testimoni`;

CREATE TABLE `tbl_testimoni` (
  `id_testimoni` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `perusahaan` varchar(30) DEFAULT NULL,
  `jabatan` varchar(25) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `testimoni` text DEFAULT NULL,
  PRIMARY KEY (`id_testimoni`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_testimoni` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
