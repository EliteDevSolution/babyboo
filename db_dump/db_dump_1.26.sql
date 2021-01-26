/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 5.7.31 : Database - db_baby
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_baby` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_baby`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `Id` int(5) NOT NULL AUTO_INCREMENT,
  `AdminEmail` varchar(20) NOT NULL,
  `KataLaluan` varchar(20) NOT NULL,
  `category` int(5) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `admin` */

insert  into `admin`(`Id`,`AdminEmail`,`KataLaluan`,`category`) values 
(1,'admin@gmail.com','password',1);

/*Table structure for table `bayi` */

DROP TABLE IF EXISTS `bayi`;

CREATE TABLE `bayi` (
  `No` int(20) NOT NULL AUTO_INCREMENT,
  `Tarikh` date NOT NULL,
  `Lokasi` varchar(50) DEFAULT NULL,
  `Status` varchar(200) NOT NULL,
  `Orang` varchar(30) NOT NULL,
  `NoFon` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;

/*Data for the table `bayi` */

insert  into `bayi`(`No`,`Tarikh`,`Lokasi`,`Status`,`Orang`,`NoFon`) values 
(21,'2021-01-26','Jalan Kebun, Kampung Raja,1','rrr','Jalan Kebun, Kampung Raja','022301932'),
(25,'2021-12-12','jkjkkk','erer1','2314tt','231321jhgjhg4'),
(26,'1231-12-12','231231','231321','231','231321'),
(28,'1231-12-12','231231','erer','231','231321'),
(30,'2021-12-12','231231','erer','231','231321');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `IdUser` int(5) NOT NULL AUTO_INCREMENT,
  `Email` varchar(20) NOT NULL,
  `UserPass` varchar(20) NOT NULL,
  `Phone` int(20) NOT NULL,
  PRIMARY KEY (`IdUser`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user` */

insert  into `user`(`IdUser`,`Email`,`UserPass`,`Phone`) values 
(1,'user@gmail.com','password',19231223),
(2,'test@123.com','1',123);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
