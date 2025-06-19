-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.7.10-log


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema oopphpmyqlblog
--

CREATE DATABASE IF NOT EXISTS oopphpmyqlblog;
USE oopphpmyqlblog;

--
-- Definition of table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `content` varchar(45) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_article_user_idx` (`user_id`),
  KEY `fk_article_category1_idx` (`category_id`),
  CONSTRAINT `fk_article_category1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_article_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article`
--

/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` (`id`,`title`,`content`,`user_id`,`category_id`,`timestamp`) VALUES 
 (1,'Title 1','Content 1',1,1,'2024-06-17 14:39:36'),
 (2,'Title 2','Content 2',1,2,'2024-06-17 14:39:36'),
 (3,'Title 3','Content 3',1,3,'2024-06-17 14:39:36'),
 (4,'tt','cc',1,2,'2024-06-17 16:54:46'),
 (5,'title 4','caonten 4',1,3,'2024-06-18 09:56:01'),
 (6,'title 5','caonten 5',1,3,'2024-06-18 09:56:58'),
 (7,'title 6','caonten 6',1,1,'2024-06-18 10:00:22'),
 (8,'title 6','content 6',1,3,'2024-06-18 10:01:57'),
 (9,'t7','c7',1,2,'2024-06-18 10:08:12'),
 (10,'t8','c8',1,3,'2024-06-18 10:09:07'),
 (11,'t10','c10',1,3,'2024-06-18 10:09:58'),
 (12,'t12','c12',1,2,'2024-06-18 10:10:44'),
 (13,'t12','c12',1,2,'2024-06-18 10:12:01'),
 (14,'t13','c13',1,1,'2024-06-18 10:12:50'),
 (15,'t14','c14',1,3,'2024-06-18 10:13:23'),
 (16,'t14','c14',1,3,'2024-06-18 10:14:49'),
 (17,'t15','c15',1,2,'2024-06-18 10:15:13'),
 (18,'t16','c16',1,3,'2024-06-18 10:27:18'),
 (19,'t18','c18',1,1,'2024-06-18 10:27:46'),
 (20,'t20','c20',1,3,'2024-06-18 10:32:51'),
 (21,'t20','c20',1,3,'2024-06-18 10:34:08'),
 (22,'t22','c22',1,3,'2024-06-18 10:49:02'),
 (23,'t23','c23',1,3,'2024-06-18 10:50:50'),
 (24,'t24','c24',1,2,'2024-06-18 10:51:39'),
 (25,'t23','c23',1,2,'2024-06-18 10:52:50'),
 (26,'t25','c25',1,1,'2024-06-18 10:53:38'),
 (27,'t27','c27',1,3,'2024-06-18 10:55:01'),
 (28,'t28','c28',1,3,'2024-06-18 10:55:35'),
 (29,'t29','c29',1,3,'2024-06-18 11:00:10'),
 (30,'t30','c30',1,2,'2024-06-18 11:02:24'),
 (31,'t31','c31',1,3,'2024-06-18 11:03:17'),
 (32,'t32','c32',1,2,'2024-06-18 11:06:35'),
 (33,'t33','c33',1,3,'2024-06-18 11:07:46'),
 (34,'t34','c34',1,2,'2024-06-18 11:09:25'),
 (35,'t35','c35',1,1,'2024-06-18 11:09:46'),
 (36,'t36','c36',1,3,'2024-06-18 11:10:06');
/*!40000 ALTER TABLE `article` ENABLE KEYS */;


--
-- Definition of table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`id`,`name`) VALUES 
 (1,'Sea'),
 (2,'Mountains'),
 (3,'Gardens');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;


--
-- Definition of table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`,`username`,`password`,`email`) VALUES 
 (1,'waruna','1234','waruna@waruna.com');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
