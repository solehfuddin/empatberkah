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
  `counter` double DEFAULT NULL,
  `key` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_custom`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_custom` */

insert  into `tbl_custom`(`id_custom`,`title`,`description`,`image`,`link`,`counter`,`key`) values 
(1,'Beautifying office spaces','Is education residence conveying and sore. Suppose shyness say ten behaved morning had. Any propose assist compliment occasional too reasonably','header.png',NULL,NULL,'header-area'),
(2,'CV Empat Berkah',NULL,'logo.svg',NULL,NULL,'navbar-area'),
(3,'231','Happy Customers',NULL,NULL,3,'counter-area'),
(4,'385','Issues Solved',NULL,NULL,1.5,'counter-area'),
(5,'159','Good Reviews',NULL,NULL,3,'counter-area'),
(6,'128','Case Studies',NULL,NULL,3,'counter-area'),
(7,'Creating office spaces is our passion and you can see that in our completed projects','Unpleasing has ask acceptance partiality alteration understood two. Worth no tiled my at house added. Married he hearing am it totally removal. Remove but suffer wanted his lively length. Moonlight two applauded conveying end direction old principle but. Are expenses distance weddings perceive',NULL,NULL,NULL,'intro-area'),
(8,'Office spaces should be unique they don’t need to look the same',NULL,'details-1.png',NULL,NULL,'details-1h-area'),
(9,NULL,'At every tiled on ye defer do. No attention suspected oh difficult. Fond his say',NULL,NULL,NULL,'details-1c-area'),
(10,NULL,'Old meet cold find come whom. The sir park sake bred. Wonder matter now',NULL,NULL,NULL,'details-1c-area'),
(11,NULL,'Can estate esteem assure fat roused. Am performed on existence as discourse',NULL,NULL,NULL,'details-1c-area'),
(12,NULL,'existence as discourse is. Pleasure friendly at marriage blessing or should',NULL,NULL,NULL,'details-1c-area'),
(13,'A beautiful and well organized office space increases productivity','On it differed repeated wandered required in. Then girl neat why yet knew rose spot. Moreover property we he kindness greatest be oh striking laughter. In me he at collecting affronting principles apartments. Has visitor law attacks pretend you calling own excited painted. Contented attending','details-2.png',NULL,NULL,'details-2h-area'),
(14,NULL,'Our team of highly skilled designers and interior construction workers can deliver above your level of expections',NULL,NULL,NULL,'invitation-area');

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
