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
-- Table structure for table `estudiantes`
--

DROP TABLE IF EXISTS `estudiantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estudiantes` (
  `estudiante_id` int NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `ap_paterno` varchar(50) DEFAULT NULL,
  `ap_materno` varchar(50) DEFAULT NULL,
  `grupos_grupo_id` int DEFAULT NULL,
  PRIMARY KEY (`estudiante_id`),
  KEY `grupos_grupo_id` (`grupos_grupo_id`),
  CONSTRAINT `estudiantes_ibfk_1` FOREIGN KEY (`grupos_grupo_id`) REFERENCES `grupos` (`grupo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudiantes`
--

LOCK TABLES `estudiantes` WRITE;
/*!40000 ALTER TABLE `estudiantes` DISABLE KEYS */;
INSERT INTO `estudiantes` VALUES (360001,'Carlos','López','Soto',1),(360002,'Ana','González','Nava',1),(360003,'Luis','Pérez','Ramírez',1),(360004,'Elena','Torres','García',1),(360005,'Miguel','Reyes','Vega',1),(360006,'Sofía','Cruz','Martínez',1),(360007,'Erick','Lara','Flores',1),(360008,'Paula','Ibarra','Díaz',1),(360009,'Hugo','Zamora','Bravo',1),(360010,'Brenda','Santos','Luna',1),(360011,'David','Morales','Herrera',1),(360012,'Isabel','Valdez','Salinas',1),(360013,'Mario','Peña','Estrada',1),(360014,'Sara','Ruiz','Carrillo',1),(360015,'Daniel','Campos','Mendoza',1),(360016,'Fernanda','Núñez','Ortega',1),(360017,'Gabriel','Vargas','Castañeda',1),(360018,'Julieta','Romero','León',1),(360019,'Ricardo','Chávez','Delgado',1),(360020,'Marina','Mejía','Navarro',1),(360021,'Raúl','Serrano','Acosta',1),(360022,'Rocío','Salas','Aguilar',1),(360023,'Víctor','Mora','Bermúdez',1),(360024,'Karen','Sosa','Villalobos',1),(360025,'Javier','Fuentes','Quintero',1),(360026,'Mónica','Palacios','Rivas',1),(360027,'Cristian','Montes','Lozano',1),(360028,'Andrea','Rosales','Cervantes',1),(360029,'Alan','Pacheco','Reyes',1),(360030,'Natalia','Linares','González',1);
/*!40000 ALTER TABLE `estudiantes` ENABLE KEYS */;
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
