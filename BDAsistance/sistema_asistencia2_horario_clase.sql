-- MySQL dump 10.13  Distrib 8.0.41, for Win64 (x86_64)
--
-- Host: localhost    Database: sistema_asistencia2
-- ------------------------------------------------------
-- Server version	8.0.41

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `horario_clase`
--

DROP TABLE IF EXISTS `horario_clase`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `horario_clase` (
  `clase_id` int NOT NULL,
  `nombre_clase` varchar(50) DEFAULT NULL,
  `hora_inicio` datetime DEFAULT NULL,
  `hora_fin` datetime DEFAULT NULL,
  `profesoras_num_empleado` int DEFAULT NULL,
  `grupos_grupo_id` int DEFAULT NULL,
  PRIMARY KEY (`clase_id`),
  KEY `profesoras_num_empleado` (`profesoras_num_empleado`),
  KEY `grupos_grupo_id` (`grupos_grupo_id`),
  CONSTRAINT `horario_clase_ibfk_1` FOREIGN KEY (`profesoras_num_empleado`) REFERENCES `profesores` (`num_empleado`),
  CONSTRAINT `horario_clase_ibfk_2` FOREIGN KEY (`grupos_grupo_id`) REFERENCES `grupos` (`grupo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `horario_clase`
--

LOCK TABLES `horario_clase` WRITE;
/*!40000 ALTER TABLE `horario_clase` DISABLE KEYS */;
INSERT INTO `horario_clase` VALUES (1,'Bases de Datos','2025-05-13 08:00:00','2025-05-13 10:00:00',1001,1),(2,'Programación I','2025-05-13 10:00:00','2025-05-13 12:00:00',1002,1),(3,'Redes','2025-05-14 08:00:00','2025-05-14 10:00:00',1003,1),(4,'Cálculo','2025-05-13 14:00:00','2025-05-13 16:00:00',1004,2),(5,'Electronica Avanzada','2025-05-14 12:00:00','2025-05-14 14:00:00',1005,2),(6,'Ecucaciones Diferenciales','2025-05-15 08:00:00','2025-05-15 10:00:00',1001,2);
/*!40000 ALTER TABLE `horario_clase` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-05-17 23:11:10
