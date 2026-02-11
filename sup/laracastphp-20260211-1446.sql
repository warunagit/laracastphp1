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
-- Create schema laracastphp
--

CREATE DATABASE IF NOT EXISTS laracastphp;
USE laracastphp;

--
-- Definition of table `notes`
--

DROP TABLE IF EXISTS `notes`;
CREATE TABLE `notes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `body` varchar(1000) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notes`
--

/*!40000 ALTER TABLE `notes` DISABLE KEYS */;
INSERT INTO `notes` (`id`,`body`,`user_id`) VALUES 
 (2,'sample 2',2),
 (5,'save post',1),
 (6,'',1),
 (7,'',1),
 (8,'',1),
 (9,'',1),
 (10,'',1),
 (11,'',1),
 (12,'',1),
 (13,'',1),
 (14,'',1),
 (15,'',1),
 (16,'',1),
 (17,'',1),
 (18,'sdfsdf',1),
 (19,'',1),
 (20,'aaabbb',1),
 (21,'',1),
 (22,'                            ',1),
 (23,'sdfdsf',1),
 (27,'hello helloee',1),
 (34,'works?',1),
 (35,'works?',1),
 (36,'sdfdsfff',1),
 (37,'hello hellooo',1),
 (38,'hello hellooooo',1),
 (39,'sdfsdf',1),
 (40,'sdfsdf--@',1),
 (41,'sdfsdf--!!',1),
 (42,'-xxvvxx-',1);
/*!40000 ALTER TABLE `notes` ENABLE KEYS */;


--
-- Definition of table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`id`,`title`) VALUES 
 (1,'First blog post'),
 (2,'Second blog post');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;


--
-- Definition of table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `password` varchar(450) NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`,`password`,`email`) VALUES 
 (1,'Waruna','waruna@waruna.com'),
 (2,'dani1234#','dani@dani.com'),
 (3,'Temp1234#','waru@waru.com'),
 (4,'$2y$10$I3EfQ.9HsuH4AeTpo/hpIOUs5DdQbFhdH5es7GCJuOCv.eOLNiByi','waruu@waru.com');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
