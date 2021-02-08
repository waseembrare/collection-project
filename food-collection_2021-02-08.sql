# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.00.0.1 (MySQL 5.7.33)
# Database: food-collection
# Generation Time: 2021-02-08 14:44:10 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table food
# ------------------------------------------------------------

DROP TABLE IF EXISTS `food`;

CREATE TABLE `food` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `dish_name` varchar(100) DEFAULT NULL,
  `image_url` varchar(280) DEFAULT '',
  `alt_tag` varchar(100) DEFAULT NULL,
  `food_creator` varchar(100) DEFAULT NULL,
  `ease_factor` tinyint(2) unsigned DEFAULT NULL,
  `speed_factor` tinyint(2) unsigned DEFAULT NULL,
  `taste_factor` tinyint(2) unsigned DEFAULT NULL,
  `health_factor` tinyint(2) unsigned DEFAULT NULL,
  `notes` varchar(280) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `food` WRITE;
/*!40000 ALTER TABLE `food` DISABLE KEYS */;

INSERT INTO `food` (`id`, `dish_name`, `image_url`, `alt_tag`, `food_creator`, `ease_factor`, `speed_factor`, `taste_factor`, `health_factor`, `notes`)
VALUES
	(1,'Cinnamon buns','assets/cinnamon-buns.jpg','image of cinnamon buns','Waseem',5,4,9,4,'Perfect with a coffee, any time of day!'),
	(2,'Falafel','assets/falafel.jpg','image of falafel','Waseem',6,4,8,7,'Bursting with herbs and spices. Fresh and healthy (if you don\'t go crazy on falafel).'),
	(3,'Garlic bread','assets/garlic-bread.jpg','image of garlic bread','Waseem',7,6,8,5,'Mouthwateringly good.'),
	(4,'Pistachio & herb crusted salmon','assets/herb-crusted-salmon.jpg','image of pistachio & herb crusted salmon ','Waseem',7,8,8,8,'Served with a mango and tomato salad'),
	(5,'Pain de campagne','assets/pain-de-campagne.jpg','image of pain de campagne','Waseem',7,7,7,6,'Part rye, wholemeal and white flours. Lightly seasoned with fresh oregano.'),
	(6,'Pitta bread','assets/pitta.jpg','image of pitta bread','Waseem',8,8,7,6,'Watching them puff up in the oven is increbily satisfying. 100 times better than shop bought!'),
	(7,'Margherita pizza','assets/margherita-pizza.jpg','image of margherita pizza','Waseem',7,6,5,5,'Looks pretty, taste is disappointing. Stick to il classico - trust me. \n'),
	(8,'Crostini','assets/crostini.jpg','image of crostini','Albi',9,8,8,6,'Quick little starter to rustle together, delicious! '),
	(9,'Seabass and hasselback ','assets/sea-bass.jpg','image of seabass and hasselback ','Albi',7,7,8,8,'Lovely light plate, switch it up with a salsa verde of different veg side.'),
	(10,'Cauliflower tacos','assets/cauliflower-tacos.jpg','image of cauliflower tacos','Waseem',9,9,9,8,'Vegan as standard, add fried halloumi for some extra texture. Whip up in less than 15 mins. Healthy and so tasty, absolute winner.');

/*!40000 ALTER TABLE `food` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
