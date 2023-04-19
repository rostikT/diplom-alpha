-- MySQL dump 10.13  Distrib 8.0.5, for Win64 (x86_64)
--
-- Host: localhost    Database: rostik
-- ------------------------------------------------------
-- Server version	8.0.28

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8mb4 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tovar`
--

DROP TABLE IF EXISTS `tovar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tovar` (
  `id` int NOT NULL,
  `title` varchar(45) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `price` int NOT NULL,
  `image` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tovar`
--

LOCK TABLES `tovar` WRITE;
/*!40000 ALTER TABLE `tovar` DISABLE KEYS */;
INSERT INTO `tovar` VALUES (1,'Букет ирисов','Букет ирисов - красивое сочетание ярких цветов и грациозной формы. Он привносит чувство легкости и свежести в любое помещение, поднимая настроение своей яркой палитрой.',1990,'buket1.jpg'),(2,'Букет роз','Этот букет состоит из свежих красных роз, символизирующих любовь и страсть. Он подойдет для выражения чувств и создания романтической атмосферы.',2800,'buket2.jpg'),(3,'Букет Звездное небо','Весенний букет из ярко желтых тюльпанов и фиолетовых ирисов. Букет упакован в стильную упаковку из фетра сиреневого цвета и перевязан яркой, желтой атласной лентой.',2950,'buket3.jpg'),(4,'Букет из 9 разноцветных гербер','Этот яркий букет состоит из 9 разноцветных гербер, символизирующих радость, дружбу и солнечное настроение. Он подойдет для поздравлений, благодарности и поднятия настроения.',1650,'buket4.jpg'),(5,'Букет из розовой гипсофилы','Воздушный букет из розовой гипсофилы.\nИдеальный букет, чтобы чей-то день стал особенным.\nГипсофила порадует вас своей стойкостью, превращаясь в сухоцвет.',2350,'buket5.jpg'),(6,'Букет Мари-Клэр','Яркий букет из разноцветных кустовых роз упакованный в дизайнерский крафт и перевязанный атласной лентой. Яркий и стильный букет послужит отличным подарком.',2090,'buket6.jpg'),(7,'Красные розы Люкс','Огромные бутоны бордовых бархатных роз из солнечного Эквадора покорят любую.',3900,'buket7.jpg'),(8,'Букет кенийских роз','Этот роскошный букет состоит из кенийских роз, которые отличаются крупными размерами и насыщенными цветами. Он подойдет для особых случаев и подарков близким людям.',3290,'buket8.jpg'),(9,'11 пионовидных кустовых роз','Этот нежный букет состоит из 11 пионовидных кустовых роз, которые символизируют благородство и изобилие. Он подойдет для создания романтической атмосферы и подарка любимым женщинам.',2700,'buket9.jpg'),(10,'Тюльпаны','Этот прекрасный букет состоит из свежих тюльпанов, символизирующих весну и начало новой жизни. Он подойдет для поздравлений, дарения радости и поднятия настроения.',1700,'buket10.jpg'),(11,'Букет Иветт','Нежный и романтичный букет из роз, мини гербер и альстромерий. Букет упакован в стильную дизайнерскую пленку и перевязан атласной лентой. Этот чудесный букет станет прекрасным комплиментом для ваших близких и любимых.',1690,'buket11.jpg'),(12,'Букет из синих орхидей','Глубокий космический оттенок орхидеи сорта дендробиум таит в себе бездну, волнующую тайну и означает преданность. Традиционно эти цветы преподносят лишь любимым и дорогим сердцу женщинам.',2900,'buket12.jpg');
/*!40000 ALTER TABLE `tovar` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-04-01 12:49:11
