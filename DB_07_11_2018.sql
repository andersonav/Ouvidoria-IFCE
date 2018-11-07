-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: ouvidoriaIfce
-- ------------------------------------------------------
-- Server version	5.7.24-0ubuntu0.16.04.1

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
  `emailUsuario` varchar(255) DEFAULT NULL,
  `setorUsuario` varchar(255) DEFAULT NULL,
  `idTipoIdentificacaoFk` int(11) NOT NULL,
  `idTipoManifestacaoFk` int(11) NOT NULL,
  `idTipoRespostaManifestacaoFk` int(11) NOT NULL,
  `created_at` varchar(45) NOT NULL,
  `updated_at` varchar(45) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`idManifestacao`),
  KEY `fk_manifestacao_tipo_manifestacao_idx` (`idTipoManifestacaoFk`),
  KEY `fk_manifestacao_tipo_identificacao1_idx` (`idTipoIdentificacaoFk`),
  KEY `fk_manifestacao_tipo_resposta_idx` (`idTipoRespostaManifestacaoFk`),
  CONSTRAINT `fk_manifestacao_tipo_identificacao1` FOREIGN KEY (`idTipoIdentificacaoFk`) REFERENCES `tipo_identificacao` (`idTipoIdentificacao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_manifestacao_tipo_manifestacao` FOREIGN KEY (`idTipoManifestacaoFk`) REFERENCES `tipo_manifestacao` (`idTipoManifestacao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_manifestacao_tipo_resposta` FOREIGN KEY (`idTipoRespostaManifestacaoFk`) REFERENCES `tipo_resposta_manifestacao` (`idTipoRespostaManifestacao`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manifestacao`
--

LOCK TABLES `manifestacao` WRITE;
/*!40000 ALTER TABLE `manifestacao` DISABLE KEYS */;
INSERT INTO `manifestacao` VALUES (0000000001,'Mijatorio','O mijatorio do RA tá vazando',NULL,NULL,NULL,NULL,2,2,1,'2018-10-31 16:48:53','2018-10-31 16:52:25',0),(0000000002,'Test','JDWHkjhdqkwjn',2239943,'EMERSON HENRIQUE OLIVEIRA DE ARAÚJO','emerson.henrique@ifce.edu.br','6323',1,1,1,'2018-11-01 10:39:21','2018-11-01 10:39:46',1),(0000000003,'Te','dskfnsdjlh',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,2,1,'2018-11-05 13:13:45','2018-11-05 13:14:21',1),(0000000004,'gfgfgf','dsfsdf',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,4,1,'2018-11-05 13:14:00','2018-11-05 13:14:11',1),(0000000005,'dsfsdf','dfd',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,3,2,'2018-11-07 13:45:54','2018-11-07 13:45:54',1),(0000000006,'dfdfdf','dfdfdfdfdf',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,4,2,'2018-11-07 13:46:06','2018-11-07 13:46:06',1),(0000000007,'dfdfdf','dfdfdfdfdf',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,4,2,'2018-11-07 13:46:12','2018-11-07 13:46:12',1),(0000000008,'dfdfdf','dfdfdfdfdf',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,4,2,'2018-11-07 13:46:12','2018-11-07 13:46:12',1),(0000000009,'dfdfdf','dfdfdfdfdf',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,4,2,'2018-11-07 13:46:12','2018-11-07 13:46:12',1),(0000000010,'dfdfdf','dfdfdfdfdf',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,4,2,'2018-11-07 13:46:13','2018-11-07 13:46:13',1),(0000000011,'dfdfdf','dfdfdfdfdf',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,4,2,'2018-11-07 13:46:13','2018-11-07 13:46:13',1),(0000000012,'dfdfdf','dfdfdfdfdf',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,4,2,'2018-11-07 13:46:13','2018-11-07 13:46:13',1),(0000000013,'dfdfdf','dfdfdfdfdf',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,4,2,'2018-11-07 13:46:16','2018-11-07 13:46:16',1),(0000000014,'dfsdfsdf','dsfdsf',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,3,2,'2018-11-07 13:48:16','2018-11-07 13:48:16',1),(0000000015,'gfdgdfgdfgdf','dfgfdgfdg',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,4,2,'2018-11-07 14:02:03','2018-11-07 14:02:03',1),(0000000016,'jghkhjkhjkhjk','hjkghkj',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,4,2,'2018-11-07 14:28:01','2018-11-07 14:28:01',1),(0000000017,'dfgfdg','fdgfdgf',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,3,2,'2018-11-07 14:34:27','2018-11-07 14:34:27',1),(0000000018,'dsfsdgsg','fgfgfg',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,2,2,'2018-11-07 14:35:52','2018-11-07 14:35:52',1),(0000000019,'fgfgdf','dfgdfg',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,3,2,'2018-11-07 14:40:29','2018-11-07 14:40:29',1),(0000000020,'dffdg','fdgfdg',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,3,2,'2018-11-07 14:41:34','2018-11-07 14:41:34',1),(0000000021,'fgfg','dsfsdf',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,3,2,'2018-11-07 14:41:52','2018-11-07 14:41:52',1),(0000000022,'gfgfgf','fgf',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,3,2,'2018-11-07 14:57:12','2018-11-07 14:57:12',1),(0000000023,'fgfgfdg','dfgfdgfdg',20132045050221,'MATHEUS MOREIRA DA SILVA','imatheusmoreira@gmail.com','Bacharelado em Ciência da Computação',1,5,2,'2018-11-07 14:58:27','2018-11-07 14:58:27',1),(0000000024,'gfdgfdgdf','ghghg',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,2,2,'2018-11-07 15:10:35','2018-11-07 15:10:35',1),(0000000025,'fdgfdg','fgdfg',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,4,2,'2018-11-07 15:10:59','2018-11-07 15:10:59',1),(0000000026,'fgfdg','dfgfdgfg',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,4,2,'2018-11-07 15:11:14','2018-11-07 15:11:14',1),(0000000027,'dsfsdf','sdfsdf',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,4,2,'2018-11-07 15:22:59','2018-11-07 15:22:59',1),(0000000028,'Teste','fgdfgdfg',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,4,2,'2018-11-07 16:09:55','2018-11-07 16:09:55',1),(0000000029,'gfhgfhgfhgfh','fghgfhfjhjhgjgh',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,3,2,'2018-11-07 16:19:20','2018-11-07 16:19:20',1),(0000000030,'fghgfh','nhfnghnmhgh',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,3,2,'2018-11-07 16:33:01','2018-11-07 16:33:01',1),(0000000031,'fghgfh','nhfnghnmhgh',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,3,2,'2018-11-07 16:33:10','2018-11-07 16:33:10',1),(0000000032,'fghgfh','nhfnghnmhgh',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,3,2,'2018-11-07 16:33:25','2018-11-07 16:33:25',1),(0000000033,'fghgfh','nhfnghnmhgh',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,3,2,'2018-11-07 16:33:42','2018-11-07 16:33:42',1),(0000000034,'Testeee','Teste de mensagem',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,4,2,'2018-11-07 17:21:11','2018-11-07 17:21:11',1),(0000000035,'Testeee','Teste de mensagem',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,4,2,'2018-11-07 17:21:15','2018-11-07 17:21:15',1),(0000000036,'Teste','Teste de mensagem',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,4,2,'2018-11-07 17:21:52','2018-11-07 17:21:52',1),(0000000037,'teste','tetetet',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,4,2,'2018-11-07 17:23:53','2018-11-07 17:23:53',1),(0000000038,'Testeeeee','TYesfgv de informação',NULL,NULL,NULL,NULL,2,5,2,'2018-11-07 17:25:29','2018-11-07 17:25:29',1),(0000000039,'Teste de Elogio','Olá, estou fazendo um elogio para o Campus',20171045050303,'ANDERSON ALVES BEZERRA','alveesbezerra13@gmail.com','Bacharelado em Ciencia da Computação',1,4,2,'2018-11-07 17:26:37','2018-11-07 17:26:37',1);
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
  `idRespostaManifestacao` int(11) NOT NULL AUTO_INCREMENT,
  `idManifestacaoFk` int(10) unsigned zerofill NOT NULL,
  `created_at` varchar(45) NOT NULL,
  `updated_at` varchar(45) NOT NULL,
  `descricaoRespostaManifestacao` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`idRespostaManifestacao`),
  KEY `fk_respostaManifestacao_manifestacao_idx` (`idManifestacaoFk`),
  CONSTRAINT `fk_respostaManifestacao_manifestacao` FOREIGN KEY (`idManifestacaoFk`) REFERENCES `manifestacao` (`idManifestacao`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `respostaManifestacao`
--

LOCK TABLES `respostaManifestacao` WRITE;
/*!40000 ALTER TABLE `respostaManifestacao` DISABLE KEYS */;
INSERT INTO `respostaManifestacao` VALUES (1,0000000001,'2018-10-31 16:51:56','2018-10-31 16:52:26','Teu cu d',0),(2,0000000002,'2018-11-01 10:39:46','2018-11-01 10:39:46','jhgjhagfkjs',1),(3,0000000004,'2018-11-05 13:14:11','2018-11-05 13:14:11','sdfsdfdsfdf',1),(4,0000000003,'2018-11-05 13:14:21','2018-11-05 13:14:21','fdgdfgdfgf',1);
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
  `descricaoInfinitivo` varchar(45) NOT NULL,
  PRIMARY KEY (`idTipoManifestacao`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_manifestacao`
--

LOCK TABLES `tipo_manifestacao` WRITE;
/*!40000 ALTER TABLE `tipo_manifestacao` DISABLE KEYS */;
INSERT INTO `tipo_manifestacao` VALUES (1,'Denúncia','#cc0000','Denunciar'),(2,'Reclamação','#d95f02','Reclamar'),(3,'Sugestão','#7570b3','Sugerir'),(4,'Elogio','#1b9e77','Elogiar'),(5,'Informação','#ffff00','Informar');
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

-- Dump completed on 2018-11-07 17:29:16
