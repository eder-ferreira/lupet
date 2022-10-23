-- MySQL dump 10.13  Distrib 8.0.28, for macos11 (x86_64)
--
-- Host: localhost    Database: db_petlu
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `tb_animal`
--

DROP TABLE IF EXISTS `tb_animal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_animal` (
  `id` int NOT NULL AUTO_INCREMENT,
  `dt_cadastro` date NOT NULL,
  `dt_atualizacao` datetime DEFAULT NULL,
  `nome_animal` varchar(45) NOT NULL,
  `dt_nascimento` date NOT NULL,
  `sexo_animal` varchar(45) NOT NULL DEFAULT 'MACHO, FEMEA',
  `animal_castrado` varchar(45) NOT NULL,
  `cor_animal` varchar(45) NOT NULL,
  `peso_animal` double DEFAULT NULL,
  `raca` varchar(45) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `observação_animal` longtext,
  `foto_animal` varchar(90) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_animal`
--

LOCK TABLES `tb_animal` WRITE;
/*!40000 ALTER TABLE `tb_animal` DISABLE KEYS */;
INSERT INTO `tb_animal` VALUES (1,'2022-10-21',NULL,'JUNIOR','2022-05-01','MACHO','SIM','BRANCA',3,'SEM RAÇA','FELINO','ADOTADO/RESGATADO',NULL),(4,'2022-10-21',NULL,'CORONA','2020-03-01','MACHO','SIM','PRETA',3.4,'SEM RAÇA','CANINO','ADOTADO/RESGATADO',NULL),(5,'2022-10-22',NULL,'DUC CANELA','2022-09-01','MACHO','NÃO','PRETA',5.7,'SEM RAÇA','CANINO','ADOTADO/RESGATADO',NULL);
/*!40000 ALTER TABLE `tb_animal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_animal_has_tb_usuario`
--

DROP TABLE IF EXISTS `tb_animal_has_tb_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_animal_has_tb_usuario` (
  `tb_animal_id` int NOT NULL,
  `tb_usuario_id` int NOT NULL,
  PRIMARY KEY (`tb_animal_id`,`tb_usuario_id`),
  KEY `fk_tb_animal_has_tb_usuario2_tb_usuario1_idx` (`tb_usuario_id`),
  KEY `fk_tb_animal_has_tb_usuario2_tb_animal1_idx` (`tb_animal_id`),
  CONSTRAINT `fk_tb_animal_has_tb_usuario2_tb_animal1` FOREIGN KEY (`tb_animal_id`) REFERENCES `tb_animal` (`id`),
  CONSTRAINT `fk_tb_animal_has_tb_usuario2_tb_usuario1` FOREIGN KEY (`tb_usuario_id`) REFERENCES `tb_usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_animal_has_tb_usuario`
--

LOCK TABLES `tb_animal_has_tb_usuario` WRITE;
/*!40000 ALTER TABLE `tb_animal_has_tb_usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_animal_has_tb_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_endereco`
--

DROP TABLE IF EXISTS `tb_endereco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_endereco` (
  `id` int NOT NULL,
  `cep` varchar(8) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `numero` int NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `pais` varchar(45) NOT NULL,
  `ponto_referencia` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_endereco`
--

LOCK TABLES `tb_endereco` WRITE;
/*!40000 ALTER TABLE `tb_endereco` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_endereco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_endereco_has_tb_usuario`
--

DROP TABLE IF EXISTS `tb_endereco_has_tb_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_endereco_has_tb_usuario` (
  `tb_endereco_id` int NOT NULL,
  `tb_usuario_id` int NOT NULL,
  PRIMARY KEY (`tb_endereco_id`,`tb_usuario_id`),
  KEY `fk_tb_endereco_has_tb_usuario_tb_usuario1_idx` (`tb_usuario_id`),
  KEY `fk_tb_endereco_has_tb_usuario_tb_endereco1_idx` (`tb_endereco_id`),
  CONSTRAINT `fk_tb_endereco_has_tb_usuario_tb_endereco1` FOREIGN KEY (`tb_endereco_id`) REFERENCES `tb_endereco` (`id`),
  CONSTRAINT `fk_tb_endereco_has_tb_usuario_tb_usuario1` FOREIGN KEY (`tb_usuario_id`) REFERENCES `tb_usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_endereco_has_tb_usuario`
--

LOCK TABLES `tb_endereco_has_tb_usuario` WRITE;
/*!40000 ALTER TABLE `tb_endereco_has_tb_usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_endereco_has_tb_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_log`
--

DROP TABLE IF EXISTS `tb_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_log` (
  `id_log` int NOT NULL,
  `dt_log` datetime NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `descricao_log` longtext,
  `tb_login_id` int NOT NULL,
  PRIMARY KEY (`id_log`,`tb_login_id`),
  KEY `fk_tb_log_tb_login1_idx` (`tb_login_id`),
  CONSTRAINT `fk_tb_log_tb_login1` FOREIGN KEY (`tb_login_id`) REFERENCES `tb_login` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_log`
--

LOCK TABLES `tb_log` WRITE;
/*!40000 ALTER TABLE `tb_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_login`
--

DROP TABLE IF EXISTS `tb_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_login` (
  `id` int NOT NULL,
  `login` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login_UNIQUE` (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_login`
--

LOCK TABLES `tb_login` WRITE;
/*!40000 ALTER TABLE `tb_login` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_raca`
--

DROP TABLE IF EXISTS `tb_raca`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_raca` (
  `id` int NOT NULL,
  `raca` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_raca`
--

LOCK TABLES `tb_raca` WRITE;
/*!40000 ALTER TABLE `tb_raca` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_raca` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_sexo`
--

DROP TABLE IF EXISTS `tb_sexo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_sexo` (
  `id` int NOT NULL,
  `sexo_animal` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_sexo`
--

LOCK TABLES `tb_sexo` WRITE;
/*!40000 ALTER TABLE `tb_sexo` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_sexo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_tipo_animal`
--

DROP TABLE IF EXISTS `tb_tipo_animal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_tipo_animal` (
  `id` int NOT NULL,
  `tipo_animal` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_tipo_animal`
--

LOCK TABLES `tb_tipo_animal` WRITE;
/*!40000 ALTER TABLE `tb_tipo_animal` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_tipo_animal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_usuario`
--

DROP TABLE IF EXISTS `tb_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `dt_cadastro` date NOT NULL,
  `dt_atualizacao` datetime DEFAULT NULL,
  `nome` varchar(100) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `crmv` varchar(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_usuario`
--

LOCK TABLES `tb_usuario` WRITE;
/*!40000 ALTER TABLE `tb_usuario` DISABLE KEYS */;
INSERT INTO `tb_usuario` VALUES (1,'2022-10-21',NULL,'EDER DE PAULA FERREIRA','ASD','12345678900','','admrural@gmail.com','65984752030'),(2,'2022-10-22',NULL,'LUCIANA FERREIRA','12345','43212356700','5566MT','luciana@gmail.com','65984716300'),(3,'2022-10-19',NULL,'LOREN PIRES','LOREN','12345678900','1234MS','loren@gmail.com','65984711030');
/*!40000 ALTER TABLE `tb_usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-22 20:02:07
