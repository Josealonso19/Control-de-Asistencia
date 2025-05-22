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
-- Table structure for table `asistencia`
--

DROP TABLE IF EXISTS `asistencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `asistencia` (
  `asistencia_id` int NOT NULL,
  `comentario` text,
  `estudiantes_estudiante_id` int DEFAULT NULL,
  `estado_asistencia_estado_id` int DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `profesores_num_empleado` int DEFAULT NULL,
  PRIMARY KEY (`asistencia_id`),
  KEY `estudiantes_estudiante_id` (`estudiantes_estudiante_id`),
  KEY `estado_asistencia_estado_id` (`estado_asistencia_estado_id`),
  KEY `profesores_num_empleado` (`profesores_num_empleado`),
  CONSTRAINT `asistencia_ibfk_1` FOREIGN KEY (`estudiantes_estudiante_id`) REFERENCES `estudiantes` (`estudiante_id`),
  CONSTRAINT `asistencia_ibfk_2` FOREIGN KEY (`estado_asistencia_estado_id`) REFERENCES `estado_asistencia` (`estado_id`),
  CONSTRAINT `asistencia_ibfk_3` FOREIGN KEY (`profesores_num_empleado`) REFERENCES `profesores` (`num_empleado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asistencia`
--

LOCK TABLES `asistencia` WRITE;
/*!40000 ALTER TABLE `asistencia` DISABLE KEYS */;
INSERT INTO `asistencia` VALUES (1,'Asistencia',360001,1,'2025-05-13',1001),(2,'Asistencia',360002,2,'2025-05-13',1001),(3,'Asistencia ',360003,3,'2025-05-13',1001),(4,'Asistencia ',360004,1,'2025-05-13',1001),(5,'Asistencia ',360005,2,'2025-05-13',1001),(6,'Asistencia ',360006,3,'2025-05-13',1001),(7,'Asistencia',360007,1,'2025-05-13',1001),(8,'Asistencia ',360008,2,'2025-05-13',1001),(9,'Asistencia',360009,3,'2025-05-13',1001),(10,'Asistencia',360010,1,'2025-05-13',1001),(11,'Asistencia',360011,2,'2025-05-13',1001),(12,'Asistencia',360012,3,'2025-05-13',1001),(13,'Asistencia',360013,1,'2025-05-13',1001),(14,'Asistencia',360014,2,'2025-05-13',1001),(15,'Asistencia',360015,3,'2025-05-13',1001),(16,'Asistencia',360016,1,'2025-05-13',1001),(17,'Asistencia',360017,2,'2025-05-13',1001),(18,'Asistencia',360018,3,'2025-05-13',1001),(19,'Asistencia',360019,1,'2025-05-13',1001),(20,'Asistencia',360020,2,'2025-05-13',1001),(21,'Asistencia',360021,3,'2025-05-13',1001),(22,'Asistencia',360022,1,'2025-05-13',1001),(23,'Asistencia',360023,2,'2025-05-13',1001),(24,'Asistencia',360024,3,'2025-05-13',1001),(25,'Asistencia ',360025,1,'2025-05-13',1001),(26,'Asistencia ',360026,2,'2025-05-13',1001),(27,'Asistencia ',360027,3,'2025-05-13',1001),(28,'Asistencia ',360028,1,'2025-05-13',1001),(29,'Asistencia ',360029,2,'2025-05-13',1001),(30,'Asistencia ',360030,3,'2025-05-13',1001);
/*!40000 ALTER TABLE `asistencia` ENABLE KEYS */;
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
