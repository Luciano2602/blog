-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: blog
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.30-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `autor`
--

DROP TABLE IF EXISTS `autor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `autor` (
  `id_autor` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(25) DEFAULT NULL,
  `sobre_nome` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_autor`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `autor`
--

LOCK TABLES `autor` WRITE;
/*!40000 ALTER TABLE `autor` DISABLE KEYS */;
INSERT INTO `autor` VALUES (6,'luciano','miguel');
/*!40000 ALTER TABLE `autor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `autorlogin`
--

DROP TABLE IF EXISTS `autorlogin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `autorlogin` (
  `id_autor` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  PRIMARY KEY (`id_autor`,`id_login`),
  KEY `FK_id_login` (`id_login`),
  CONSTRAINT `FK_id_autoe` FOREIGN KEY (`id_autor`) REFERENCES `autor` (`id_autor`),
  CONSTRAINT `FK_id_login` FOREIGN KEY (`id_login`) REFERENCES `login` (`id_login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `autorlogin`
--

LOCK TABLES `autorlogin` WRITE;
/*!40000 ALTER TABLE `autorlogin` DISABLE KEYS */;
INSERT INTO `autorlogin` VALUES (6,2);
/*!40000 ALTER TABLE `autorlogin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enderecoautor`
--

DROP TABLE IF EXISTS `enderecoautor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enderecoautor` (
  `id_endereco` int(11) NOT NULL AUTO_INCREMENT,
  `id_autor` int(11) DEFAULT NULL,
  `logradouro` varchar(100) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `localidade` varchar(100) DEFAULT NULL,
  `uf` char(2) DEFAULT NULL,
  `cep` char(9) DEFAULT NULL,
  PRIMARY KEY (`id_endereco`),
  KEY `FK_enderecoAutor_id_autor` (`id_autor`),
  CONSTRAINT `FK_enderecoAutor_id_autor` FOREIGN KEY (`id_autor`) REFERENCES `autor` (`id_autor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enderecoautor`
--

LOCK TABLES `enderecoautor` WRITE;
/*!40000 ALTER TABLE `enderecoautor` DISABLE KEYS */;
/*!40000 ALTER TABLE `enderecoautor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `id_login` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(25) DEFAULT NULL,
  `senha` varchar(10) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `permissao` char(1) DEFAULT NULL,
  PRIMARY KEY (`id_login`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (2,'adm','123','luciano@cejam','a');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `id_autor` int(11) DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `sub_titulo` varchar(255) DEFAULT NULL,
  `noticia` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `data_hora` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `fraseAutor` varchar(255) DEFAULT NULL,
  `textoCurto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_post`),
  KEY `FK_post_id_autor` (`id_autor`),
  CONSTRAINT `FK_post_id_autor` FOREIGN KEY (`id_autor`) REFERENCES `autor` (`id_autor`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` VALUES (16,6,'PHP alterado','alterado','alterado','img/img_autor/foto_2018_76171444_23RJPE522969QJ2367QHJ58JEK2JA.jpg','2018-03-18 20:14:44','alterado','alterado'),(19,6,'Alterado','Alterado','Alterado','img/img_autor/foto_2018_7617204_A9JMA7N47DJCHE25N557CQKBQKGDD.jpg','2018-03-18 20:20:04','Alterado','Alterado'),(28,6,'s','wwww','wwww','img/img_autor/foto_2018_76225025_MG95RQDC482E579JK4463DMC8RFH6.jpg','2018-03-19 01:50:25','www','wwww'),(29,6,'www','www','www','img/img_autor/foto_2018_76225057_9F4NQE922PGF5CRMF476M6NK62DFN.jpg','2018-03-19 01:50:57','wwwww','wwwwww'),(30,6,'ww','wwwww','wwwwww','img/img_autor/foto_2018_76225119_7K67ADED6FMGNE5MJE38DE9CAP9CR.jpg','2018-03-19 01:51:19','wwwww','wwwwww');
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'blog'
--
/*!50003 DROP PROCEDURE IF EXISTS `inserir_autor_login` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `inserir_autor_login`(in nomeAutor varchar(25), sobre_nome_autor varchar(255), login varchar(10), senha varchar(10), email varchar(60), permissao char(1))
begin
	
    declare loginId int;
    declare idAutor int;
    
    insert into autor (nome,sobre_nome) values (nomeAutor, sobre_nome_autor);
    
    set idAutor:= last_insert_id();
    
    insert into login (login,senha,email,permissao) values (login, senha, email, permissao);
    
    set loginId:= last_insert_id();
    
    insert into autorlogin (id_autor, id_login) values (idAutor, loginId);
    

end ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `inserir_autor_login_nova` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `inserir_autor_login_nova`(in nomeAutor varchar(25), sobre_nome_autor varchar(255), login varchar(10), senha varchar(10), email varchar(60), permissao char(1))
begin
	
    declare loginId int;
    declare idAutor int;
    
    insert into login (login,senha,email,permissao) values (login, senha, email, permissao);
    
    set loginId:= last_insert_id();
    
    insert into autor (nome,sobre_nome) values (nomeAutor, sobre_nome_autor);
    
    set idAutor:= last_insert_id();
    
    
    
    insert into autorlogin (id_autor, id_login) values (idAutor, loginId);
    

end ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-18 23:22:38
