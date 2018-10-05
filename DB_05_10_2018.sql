-- MySQL dump 10.13  Distrib 5.7.23, for Linux (x86_64)
--
-- Host: localhost    Database: ouvidoriaIfce
-- ------------------------------------------------------
-- Server version	5.7.23-0ubuntu0.16.04.1

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
-- Table structure for table `manifestacao`
--

DROP TABLE IF EXISTS `manifestacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `manifestacao` (
  `idManifestacao` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `assuntoManifestacao` varchar(255) NOT NULL,
  `mensagemManifestacao` varchar(255) NOT NULL,
  `identificacaoUsuario` bigint(20) DEFAULT NULL,
  `nomeUsuario` varchar(255) DEFAULT NULL,
  `emailUsuario` varchar(45) DEFAULT NULL,
  `setorUsuario` varchar(45) DEFAULT NULL,
  `idTipoIdentificacaoFk` int(11) NOT NULL,
  `idTipoManifestacaoFk` int(11) NOT NULL,
  `idTipoRespostaManifestacaoFk` int(11) NOT NULL,
  `created_at` varchar(45) NOT NULL,
  `updated_at` varchar(45) NOT NULL,
  PRIMARY KEY (`idManifestacao`),
  KEY `fk_manifestacao_tipo_manifestacao_idx` (`idTipoManifestacaoFk`),
  KEY `fk_manifestacao_tipo_identificacao1_idx` (`idTipoIdentificacaoFk`),
  KEY `fk_manifestacao_tipo_resposta_idx` (`idTipoRespostaManifestacaoFk`),
  CONSTRAINT `fk_manifestacao_tipo_identificacao1` FOREIGN KEY (`idTipoIdentificacaoFk`) REFERENCES `tipo_identificacao` (`idTipoIdentificacao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_manifestacao_tipo_manifestacao` FOREIGN KEY (`idTipoManifestacaoFk`) REFERENCES `tipo_manifestacao` (`idTipoManifestacao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_manifestacao_tipo_resposta` FOREIGN KEY (`idTipoRespostaManifestacaoFk`) REFERENCES `tipo_resposta_manifestacao` (`idTipoRespostaManifestacao`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manifestacao`
--

LOCK TABLES `manifestacao` WRITE;
/*!40000 ALTER TABLE `manifestacao` DISABLE KEYS */;
INSERT INTO `manifestacao` VALUES (0000000001,'Teste','Testandooooo',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computa��o',1,1,2,'2018-09-21 18:43:50','2018-09-21 18:43:50'),(0000000002,'Teste','Teste',2239943,'EMERSON HENRIQUE OLIVEIRA DE ARAÚJO','emerson.henrique@ifce.edu.br','6323',1,1,2,'2018-09-25 17:43:13','2018-09-25 17:43:13'),(0000000003,'Testeeee','fsdkfskjsfkjdfkgjdfkgjdkgjdlfkg dklflkfdghdlj',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,2,2,'2018-09-26 17:44:31','2018-09-26 17:44:31'),(0000000004,'fsgfgf','dfgdfgdfgdgff',20152045050650,'THIAGO WILLIAN ALVES VALENTE','a@gmail.com','Bacharelado em Ciência da Computação',1,3,2,'2018-09-26 17:44:49','2018-09-26 17:44:49'),(0000000005,'adfsdfsdfsdf','sdfsdfsdfds sdfsd dfsdf d',20152045050404,'DAVID VICTOR CAVALCANTE','david@gmail.com','Bacharelado em Ciência da Computação',1,5,2,'2018-09-26 17:45:37','2018-09-26 17:45:37'),(0000000006,'csfsdfsdfsdfs','dfsd sdfs fds g',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,2,2,'2018-09-26 17:45:45','2018-09-26 17:45:45'),(0000000007,'fssfggf','fgfgfdgdfgfdggfgg fgfg',20152045050404,'DAVID VICTOR CAVALCANTE','sds@gmail.com','Bacharelado em Ciência da Computação',1,4,2,'2018-09-26 17:46:14','2018-09-26 17:46:14'),(0000000008,'sdfsdf','sdfsd',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,1,2,'2018-09-26 18:07:09','2018-09-26 18:07:09'),(0000000009,'gfhgfhgfhgfh','dfxgbhbgfhghgghghgbhgfhgf',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,3,2,'2018-09-27 15:24:55','2018-09-27 15:24:55'),(0000000010,'gfgfdgdfg','fgfdgfdgfdgf',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,5,2,'2018-09-27 15:25:11','2018-09-27 15:25:11'),(0000000011,'dfssdf','dsfdsfdfd',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,1,2,'2018-09-27 15:25:31','2018-09-27 15:25:31'),(0000000012,'dsfdsfdsfdf','dsfdsfdsffd',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,1,2,'2018-09-27 15:25:39','2018-09-27 15:25:39'),(0000000013,'dsfdsfdsfdsfdsfsdfsdfsdf','sfddsggfdgfdgfdgfdgfdg',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,3,2,'2018-09-27 15:25:48','2018-09-27 15:25:48'),(0000000014,'fdgfdgfdg','fdgdfgdfg',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,1,2,'2018-09-27 15:25:56','2018-09-27 15:25:56'),(0000000015,'Estupro','O Emerson me agarrou por trás e quase me comeu',20152045050617,'LUIZ PHELYPE GUIMARAES BEZERRA','luizphelype00@gmail.com','Bacharelado em Ciência da Computação',1,1,2,'2018-10-04 19:19:44','2018-10-04 19:19:44');
/*!40000 ALTER TABLE `manifestacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu` (
  `idMenu` int(11) NOT NULL AUTO_INCREMENT,
  `menuFk` int(11) DEFAULT NULL,
  `nomeMenu` varchar(45) NOT NULL,
  `descricaoMenu` varchar(45) NOT NULL,
  `routeMenu` varchar(45) NOT NULL,
  `iconeMenu` varchar(45) NOT NULL,
  `tipoUsuarioFk` int(11) NOT NULL,
  PRIMARY KEY (`idMenu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perguntasFrequentes`
--

DROP TABLE IF EXISTS `perguntasFrequentes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `perguntasFrequentes` (
  `idPerguntasFrequentes` int(11) NOT NULL AUTO_INCREMENT,
  `perguntaFrequente` varchar(255) NOT NULL,
  `resposta` varchar(255) NOT NULL,
  PRIMARY KEY (`idPerguntasFrequentes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perguntasFrequentes`
--

LOCK TABLES `perguntasFrequentes` WRITE;
/*!40000 ALTER TABLE `perguntasFrequentes` DISABLE KEYS */;
/*!40000 ALTER TABLE `perguntasFrequentes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `respostaManifestacao`
--

DROP TABLE IF EXISTS `respostaManifestacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `respostaManifestacao` (
  `idRespostaManifestacao` int(11) NOT NULL,
  `idManifestacaoFk` int(10) unsigned zerofill NOT NULL,
  `created_at` varchar(45) NOT NULL,
  `updated_at` varchar(45) NOT NULL,
  `descricaoRespostaManifestacao` varchar(200) NOT NULL,
  PRIMARY KEY (`idRespostaManifestacao`),
  KEY `fk_respostaManifestacao_manifestacao_idx` (`idManifestacaoFk`),
  CONSTRAINT `fk_respostaManifestacao_manifestacao` FOREIGN KEY (`idManifestacaoFk`) REFERENCES `manifestacao` (`idManifestacao`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `respostaManifestacao`
--

LOCK TABLES `respostaManifestacao` WRITE;
/*!40000 ALTER TABLE `respostaManifestacao` DISABLE KEYS */;
/*!40000 ALTER TABLE `respostaManifestacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_identificacao`
--

DROP TABLE IF EXISTS `tipo_identificacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_identificacao` (
  `idTipoIdentificacao` int(11) NOT NULL AUTO_INCREMENT,
  `descricaoTipoIdentificacao` varchar(255) NOT NULL,
  PRIMARY KEY (`idTipoIdentificacao`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_identificacao`
--

LOCK TABLES `tipo_identificacao` WRITE;
/*!40000 ALTER TABLE `tipo_identificacao` DISABLE KEYS */;
INSERT INTO `tipo_identificacao` VALUES (1,'Identificar'),(2,'Não identificar');
/*!40000 ALTER TABLE `tipo_identificacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_manifestacao`
--

DROP TABLE IF EXISTS `tipo_manifestacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_manifestacao` (
  `idTipoManifestacao` int(11) NOT NULL AUTO_INCREMENT,
  `descricaoTipoManifestacao` varchar(45) NOT NULL,
  `colorTipoManifestacao` varchar(45) NOT NULL,
  PRIMARY KEY (`idTipoManifestacao`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_manifestacao`
--

LOCK TABLES `tipo_manifestacao` WRITE;
/*!40000 ALTER TABLE `tipo_manifestacao` DISABLE KEYS */;
INSERT INTO `tipo_manifestacao` VALUES (1,'Denúncia','#cc0000'),(2,'Reclamação','#d95f02'),(3,'Sugestão','#7570b3'),(4,'Elogio','#1b9e77'),(5,'Informação','#ffff00');
/*!40000 ALTER TABLE `tipo_manifestacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_resposta_manifestacao`
--

DROP TABLE IF EXISTS `tipo_resposta_manifestacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_resposta_manifestacao` (
  `idTipoRespostaManifestacao` int(11) NOT NULL AUTO_INCREMENT,
  `descricaoTipoRespostaManifestacao` varchar(45) NOT NULL,
  PRIMARY KEY (`idTipoRespostaManifestacao`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_resposta_manifestacao`
--

LOCK TABLES `tipo_resposta_manifestacao` WRITE;
/*!40000 ALTER TABLE `tipo_resposta_manifestacao` DISABLE KEYS */;
INSERT INTO `tipo_resposta_manifestacao` VALUES (1,'Respondida'),(2,'Não Respondida');
/*!40000 ALTER TABLE `tipo_resposta_manifestacao` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-05 17:12:48
