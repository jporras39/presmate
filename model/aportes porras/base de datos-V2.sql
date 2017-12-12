CREATE DATABASE  IF NOT EXISTS `presmate` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `presmate`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: presmate
-- ------------------------------------------------------
-- Server version	5.6.24

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
-- Table structure for table `bodegas`
--

DROP TABLE IF EXISTS `bodegas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bodegas` (
  `idBodegas` int(11) NOT NULL AUTO_INCREMENT,
  `idTipoUsua` int(11) NOT NULL,
  `idUsuario` varchar(15) NOT NULL,
  `UbicBode` varchar(255) NOT NULL,
  PRIMARY KEY (`idBodegas`,`idTipoUsua`,`idUsuario`),
  KEY `fk_Bodegas_Usuarios1_idx` (`idUsuario`,`idTipoUsua`),
  CONSTRAINT `fk_Bodegas_Usuarios1` FOREIGN KEY (`idUsuario`, `idTipoUsua`) REFERENCES `usuarios` (`idUsuario`, `idTipoUsua`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bodegas`
--

LOCK TABLES `bodegas` WRITE;
/*!40000 ALTER TABLE `bodegas` DISABLE KEYS */;
/*!40000 ALTER TABLE `bodegas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `centcost`
--

DROP TABLE IF EXISTS `centcost`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `centcost` (
  `idCentCost` bigint(25) NOT NULL COMMENT 'Codigo de centro de Costo',
  `NombCeCo` varchar(255) NOT NULL COMMENT 'Nombre de centro de costo, ejemplo: cocina',
  PRIMARY KEY (`idCentCost`),
  UNIQUE KEY `idCentCost_UNIQUE` (`idCentCost`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla para centros de costo';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `centcost`
--

LOCK TABLES `centcost` WRITE;
/*!40000 ALTER TABLE `centcost` DISABLE KEYS */;
/*!40000 ALTER TABLE `centcost` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `centform`
--

DROP TABLE IF EXISTS `centform`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `centform` (
  `idCentForm` int(11) NOT NULL COMMENT 'Numero de Identificación del Centro de Formación',
  `idRegional` int(11) NOT NULL,
  `NombCent` varchar(255) NOT NULL COMMENT 'Nombre del Centro de Formación',
  `EstaCent` varchar(45) NOT NULL,
  PRIMARY KEY (`idCentForm`,`idRegional`),
  UNIQUE KEY `idCentForm_UNIQUE` (`idCentForm`),
  KEY `fk_CentForm_Regional1_idx` (`idRegional`),
  CONSTRAINT `fk_CentForm_Regional1` FOREIGN KEY (`idRegional`) REFERENCES `regional` (`idRegional`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla para la Discriminación de los centros de formación';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `centform`
--

LOCK TABLES `centform` WRITE;
/*!40000 ALTER TABLE `centform` DISABLE KEYS */;
/*!40000 ALTER TABLE `centform` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `competencias`
--

DROP TABLE IF EXISTS `competencias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `competencias` (
  `idCompetencias` int(11) NOT NULL,
  `idModalidad` int(11) NOT NULL,
  `idPrograma` bigint(20) NOT NULL,
  `NomComp` mediumtext NOT NULL,
  `VersComp` varchar(12) NOT NULL,
  `EstaComp` varchar(45) NOT NULL,
  PRIMARY KEY (`idCompetencias`,`idModalidad`,`idPrograma`),
  UNIQUE KEY `idCompetencias_UNIQUE` (`idCompetencias`),
  KEY `fk_Competencias_Programa1_idx` (`idPrograma`,`idModalidad`),
  CONSTRAINT `fk_Competencias_Programa1` FOREIGN KEY (`idPrograma`, `idModalidad`) REFERENCES `programa` (`idPrograma`, `idModalidad`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `competencias`
--

LOCK TABLES `competencias` WRITE;
/*!40000 ALTER TABLE `competencias` DISABLE KEYS */;
/*!40000 ALTER TABLE `competencias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contratos`
--

DROP TABLE IF EXISTS `contratos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contratos` (
  `idContratos` int(11) NOT NULL AUTO_INCREMENT,
  `idTipoUsua` int(11) NOT NULL,
  `idUsuario` varchar(15) NOT NULL,
  `NumeContra` varchar(45) NOT NULL,
  `FechCont` date NOT NULL,
  `ValoCont` decimal(20,2) NOT NULL,
  `RubroPre` varchar(45) NOT NULL,
  `Movimiento` varchar(2) DEFAULT NULL COMMENT 'Movimientos del contrato= ''Adicion'', ''Modificación'', ''Traslado''',
  `FechMovi` date DEFAULT NULL,
  `ValoMovi` decimal(20,2) DEFAULT NULL,
  `ValoTotal` decimal(20,2) NOT NULL,
  `EstaContra` varchar(45) NOT NULL,
  PRIMARY KEY (`idContratos`,`idTipoUsua`,`idUsuario`),
  KEY `fk_Contratos_Usuarios1_idx` (`idUsuario`,`idTipoUsua`),
  CONSTRAINT `fk_Contratos_Usuarios1` FOREIGN KEY (`idUsuario`, `idTipoUsua`) REFERENCES `usuarios` (`idUsuario`, `idTipoUsua`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contratos`
--

LOCK TABLES `contratos` WRITE;
/*!40000 ALTER TABLE `contratos` DISABLE KEYS */;
/*!40000 ALTER TABLE `contratos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `datocont`
--

DROP TABLE IF EXISTS `datocont`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `datocont` (
  `idDatoCont` int(11) NOT NULL AUTO_INCREMENT,
  `idTipoUsua` int(11) NOT NULL COMMENT 'Identificacion de Tipo de Usuario, Ej: 1-Administrador 2-Operador, 3-Proveedor, 4-Instructor, 5-Auxiliar, 6-Apoyo Administrativo',
  `idTipoDocu` varchar(4) NOT NULL,
  `idUsuario` varchar(15) NOT NULL COMMENT 'Número de Identificación del Usuario',
  `Genero` varchar(1) NOT NULL,
  `Telefono` varchar(45) NOT NULL,
  `Celular` varchar(45) NOT NULL,
  `Direccion` varchar(255) NOT NULL,
  `WebPage` varchar(255) NOT NULL,
  PRIMARY KEY (`idDatoCont`,`idTipoUsua`,`idTipoDocu`,`idUsuario`),
  KEY `fk_DatoCont_Usuarios1_idx` (`idUsuario`,`idTipoUsua`),
  KEY `fk_DatoCont_TipoDocu1_idx` (`idTipoDocu`),
  CONSTRAINT `fk_DatoCont_TipoDocu1` FOREIGN KEY (`idTipoDocu`) REFERENCES `tipodocu` (`idTipoDocu`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_DatoCont_Usuarios1` FOREIGN KEY (`idUsuario`, `idTipoUsua`) REFERENCES `usuarios` (`idUsuario`, `idTipoUsua`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla para los datos de contacto del Usuario';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datocont`
--

LOCK TABLES `datocont` WRITE;
/*!40000 ALTER TABLE `datocont` DISABLE KEYS */;
/*!40000 ALTER TABLE `datocont` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detabode`
--

DROP TABLE IF EXISTS `detabode`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detabode` (
  `idBodegas` int(11) NOT NULL,
  `idMoviBode` int(11) NOT NULL,
  `idTipoProd` int(11) NOT NULL,
  `idProductos` int(11) NOT NULL,
  `Cant` int(11) NOT NULL,
  `FechAlma` date NOT NULL COMMENT 'Fecha en que se almacena el producto',
  `obserMovi` longtext,
  PRIMARY KEY (`idBodegas`,`idMoviBode`,`idTipoProd`,`idProductos`),
  KEY `fk_DetaBode_Bodegas1_idx` (`idBodegas`),
  KEY `fk_DetaBode_Productos1_idx` (`idProductos`,`idTipoProd`),
  KEY `fk_DetaBode_MoviBode1_idx` (`idMoviBode`),
  CONSTRAINT `fk_DetaBode_Bodegas1` FOREIGN KEY (`idBodegas`) REFERENCES `bodegas` (`idBodegas`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_DetaBode_MoviBode1` FOREIGN KEY (`idMoviBode`) REFERENCES `movibode` (`idMoviBode`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_DetaBode_Productos1` FOREIGN KEY (`idProductos`, `idTipoProd`) REFERENCES `productos` (`idProductos`, `idTipoProd`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla para el detalle de bodega';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detabode`
--

LOCK TABLES `detabode` WRITE;
/*!40000 ALTER TABLE `detabode` DISABLE KEYS */;
/*!40000 ALTER TABLE `detabode` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detainst`
--

DROP TABLE IF EXISTS `detainst`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detainst` (
  `idResuApre` int(11) NOT NULL,
  `idModalidad` int(11) NOT NULL,
  `idPrograma` bigint(20) NOT NULL,
  `idCompetencias` int(11) NOT NULL,
  `idTipoTrans` int(11) NOT NULL,
  `idTransaccion` int(11) NOT NULL,
  `idTipoUsua` int(11) NOT NULL,
  `idUsuario` varchar(15) NOT NULL,
  PRIMARY KEY (`idResuApre`,`idModalidad`,`idPrograma`,`idCompetencias`,`idTipoTrans`,`idTransaccion`,`idTipoUsua`,`idUsuario`),
  KEY `fk_DetaOper_Transaccion1_idx` (`idTransaccion`,`idTipoTrans`,`idTipoUsua`,`idUsuario`),
  CONSTRAINT `fk_DetaOper_ResuApre1` FOREIGN KEY (`idResuApre`, `idModalidad`, `idPrograma`, `idCompetencias`) REFERENCES `resuapre` (`idResuApre`, `idModalidad`, `idPrograma`, `idCompetencias`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_DetaOper_Transaccion1` FOREIGN KEY (`idTransaccion`, `idTipoTrans`, `idTipoUsua`, `idUsuario`) REFERENCES `transaccion` (`idTransaccion`, `idTipoTrans`, `idTipoUsua`, `idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla para clasificar los pedidos deacuerdo al formato F-026 para los instructores de formación';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detainst`
--

LOCK TABLES `detainst` WRITE;
/*!40000 ALTER TABLE `detainst` DISABLE KEYS */;
/*!40000 ALTER TABLE `detainst` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detaprog`
--

DROP TABLE IF EXISTS `detaprog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detaprog` (
  `idDetaProg` int(11) NOT NULL AUTO_INCREMENT,
  `idCentForm` int(11) NOT NULL,
  `idRegional` int(11) NOT NULL,
  `idModalidad` int(11) NOT NULL,
  `idPrograma` bigint(20) NOT NULL,
  `idTipoUsua` int(11) NOT NULL,
  `idUsuario` varchar(15) NOT NULL,
  `Ficha` varchar(10) NOT NULL,
  `EstaFich` varchar(45) NOT NULL COMMENT 'Estado de la Ficha: ''En Formación'' o  ''Terminada''',
  PRIMARY KEY (`idDetaProg`,`idCentForm`,`idRegional`,`idModalidad`,`idPrograma`,`idTipoUsua`,`idUsuario`),
  KEY `fk_DetaProg_Programa1_idx` (`idPrograma`,`idModalidad`),
  KEY `fk_DetaProg_Usuarios1_idx` (`idUsuario`,`idTipoUsua`),
  KEY `fk_DetaProg_CentForm1_idx` (`idCentForm`,`idRegional`),
  CONSTRAINT `fk_DetaProg_CentForm1` FOREIGN KEY (`idCentForm`, `idRegional`) REFERENCES `centform` (`idCentForm`, `idRegional`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_DetaProg_Programa1` FOREIGN KEY (`idPrograma`, `idModalidad`) REFERENCES `programa` (`idPrograma`, `idModalidad`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_DetaProg_Usuarios1` FOREIGN KEY (`idUsuario`, `idTipoUsua`) REFERENCES `usuarios` (`idUsuario`, `idTipoUsua`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla para la relación de usuarios asociados al programa,Solo instructores y Coordinadores';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detaprog`
--

LOCK TABLES `detaprog` WRITE;
/*!40000 ALTER TABLE `detaprog` DISABLE KEYS */;
/*!40000 ALTER TABLE `detaprog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detatran`
--

DROP TABLE IF EXISTS `detatran`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detatran` (
  `idTipoTrans` int(11) NOT NULL,
  `idTransaccion` int(11) NOT NULL,
  `idTipoUsua` int(11) NOT NULL,
  `idUsuario` varchar(15) NOT NULL,
  `idTipoProd` int(11) NOT NULL,
  `idProductos` int(11) NOT NULL,
  `CantSoli` varchar(45) NOT NULL,
  PRIMARY KEY (`idTipoTrans`,`idTransaccion`,`idTipoUsua`,`idUsuario`,`idTipoProd`,`idProductos`),
  KEY `fk_DetaTran_Transaccion1_idx` (`idTransaccion`,`idTipoTrans`,`idTipoUsua`,`idUsuario`),
  CONSTRAINT `fk_DetaTran_Productos1` FOREIGN KEY (`idProductos`, `idTipoProd`) REFERENCES `productos` (`idProductos`, `idTipoProd`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_DetaTran_Transaccion1` FOREIGN KEY (`idTransaccion`, `idTipoTrans`, `idTipoUsua`, `idUsuario`) REFERENCES `transaccion` (`idTransaccion`, `idTipoTrans`, `idTipoUsua`, `idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detatran`
--

LOCK TABLES `detatran` WRITE;
/*!40000 ALTER TABLE `detatran` DISABLE KEYS */;
/*!40000 ALTER TABLE `detatran` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modalidad`
--

DROP TABLE IF EXISTS `modalidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modalidad` (
  `idModalidad` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la modalidad',
  `NombModa` varchar(45) NOT NULL,
  `DescModa` mediumtext NOT NULL,
  `EstaModa` varchar(45) NOT NULL,
  PRIMARY KEY (`idModalidad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modalidad`
--

LOCK TABLES `modalidad` WRITE;
/*!40000 ALTER TABLE `modalidad` DISABLE KEYS */;
/*!40000 ALTER TABLE `modalidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `movibode`
--

DROP TABLE IF EXISTS `movibode`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `movibode` (
  `idMoviBode` int(11) NOT NULL AUTO_INCREMENT,
  `TipoMoBo` varchar(45) NOT NULL,
  PRIMARY KEY (`idMoviBode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='movimientos de la bodega';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movibode`
--

LOCK TABLES `movibode` WRITE;
/*!40000 ALTER TABLE `movibode` DISABLE KEYS */;
/*!40000 ALTER TABLE `movibode` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productos` (
  `idProductos` int(11) NOT NULL AUTO_INCREMENT,
  `idTipoProd` int(11) NOT NULL,
  `NombProd` varchar(255) NOT NULL,
  `PresProd` varchar(255) NOT NULL COMMENT 'Presentación del Producto, En frasco de 200ml',
  `Cantidad` int(11) NOT NULL,
  `UnidMedi` varchar(45) NOT NULL COMMENT 'Unidad de medida de la cantidad',
  `ValoPres` decimal(20,2) NOT NULL COMMENT 'Valor Presupuestado en el contrato',
  `EstaProd` varchar(45) NOT NULL COMMENT 'Estado del producto: ''En Bodega'' - ''Terminado'' - ''Activo'' - ''Inactivo'' ',
  PRIMARY KEY (`idProductos`,`idTipoProd`),
  KEY `fk_Productos_TipoProd1_idx` (`idTipoProd`),
  CONSTRAINT `fk_Productos_TipoProd1` FOREIGN KEY (`idTipoProd`) REFERENCES `tipoprod` (`idTipoProd`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla para la carga de productos que se pueden solicitar y comprar';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programa`
--

DROP TABLE IF EXISTS `programa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `programa` (
  `idPrograma` bigint(20) NOT NULL,
  `idModalidad` int(11) NOT NULL,
  `NombProg` varchar(250) NOT NULL,
  `DescProg` mediumtext NOT NULL COMMENT 'Descripción del programa',
  `EstaProg` varchar(45) NOT NULL COMMENT 'Estado del Programa= ''Activo'' o ''Inactivo''',
  PRIMARY KEY (`idPrograma`,`idModalidad`),
  KEY `fk_Programa_Modalidad1_idx` (`idModalidad`),
  CONSTRAINT `fk_Programa_Modalidad1` FOREIGN KEY (`idModalidad`) REFERENCES `modalidad` (`idModalidad`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla para la descripción del programa de formación';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programa`
--

LOCK TABLES `programa` WRITE;
/*!40000 ALTER TABLE `programa` DISABLE KEYS */;
/*!40000 ALTER TABLE `programa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `regional`
--

DROP TABLE IF EXISTS `regional`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `regional` (
  `idRegional` int(11) NOT NULL,
  `NombRegi` varchar(255) NOT NULL,
  PRIMARY KEY (`idRegional`),
  UNIQUE KEY `idRegional_UNIQUE` (`idRegional`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `regional`
--

LOCK TABLES `regional` WRITE;
/*!40000 ALTER TABLE `regional` DISABLE KEYS */;
/*!40000 ALTER TABLE `regional` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resuapre`
--

DROP TABLE IF EXISTS `resuapre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resuapre` (
  `idResuApre` int(11) NOT NULL,
  `idModalidad` int(11) NOT NULL,
  `idPrograma` bigint(20) NOT NULL,
  `idCompetencias` int(11) NOT NULL,
  `Resultado` mediumtext NOT NULL,
  PRIMARY KEY (`idResuApre`,`idModalidad`,`idPrograma`,`idCompetencias`),
  KEY `fk_ResuApre_Competencias1_idx` (`idPrograma`,`idModalidad`,`idCompetencias`),
  CONSTRAINT `fk_ResuApre_Competencias1` FOREIGN KEY (`idPrograma`, `idModalidad`, `idCompetencias`) REFERENCES `competencias` (`idPrograma`, `idModalidad`, `idCompetencias`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resuapre`
--

LOCK TABLES `resuapre` WRITE;
/*!40000 ALTER TABLE `resuapre` DISABLE KEYS */;
/*!40000 ALTER TABLE `resuapre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `saldopres`
--

DROP TABLE IF EXISTS `saldopres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `saldopres` (
  `idSaldoPres` int(11) NOT NULL AUTO_INCREMENT,
  `idCentCost` bigint(25) NOT NULL,
  `idContratos` int(11) NOT NULL,
  `idTipoTran` int(11) NOT NULL,
  `idTransaccion` int(11) NOT NULL,
  `idTipoIngre` int(11) NOT NULL,
  `ValoSaldo` decimal(20,2) NOT NULL,
  PRIMARY KEY (`idSaldoPres`,`idCentCost`,`idContratos`,`idTipoTran`,`idTransaccion`,`idTipoIngre`),
  KEY `fk_SaldoPres_Contratos1_idx` (`idContratos`),
  KEY `fk_SaldoPres_Transaccion1_idx` (`idTransaccion`,`idTipoTran`),
  KEY `fk_SaldoPres_CentCost1_idx` (`idCentCost`),
  KEY `fk_SaldoPres_TipoIngre1_idx` (`idTipoIngre`),
  CONSTRAINT `fk_SaldoPres_CentCost1` FOREIGN KEY (`idCentCost`) REFERENCES `centcost` (`idCentCost`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_SaldoPres_Contratos1` FOREIGN KEY (`idContratos`) REFERENCES `contratos` (`idContratos`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_SaldoPres_TipoIngre1` FOREIGN KEY (`idTipoIngre`) REFERENCES `tipoingre` (`idTipoIngre`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_SaldoPres_Transaccion1` FOREIGN KEY (`idTransaccion`, `idTipoTran`) REFERENCES `transaccion` (`idTransaccion`, `idTipoTrans`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `saldopres`
--

LOCK TABLES `saldopres` WRITE;
/*!40000 ALTER TABLE `saldopres` DISABLE KEYS */;
/*!40000 ALTER TABLE `saldopres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipodocu`
--

DROP TABLE IF EXISTS `tipodocu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipodocu` (
  `idTipoDocu` varchar(4) NOT NULL,
  `NombTiDo` varchar(45) NOT NULL,
  PRIMARY KEY (`idTipoDocu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla para tipo de documentos';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipodocu`
--

LOCK TABLES `tipodocu` WRITE;
/*!40000 ALTER TABLE `tipodocu` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipodocu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipoingre`
--

DROP TABLE IF EXISTS `tipoingre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipoingre` (
  `idTipoIngre` int(11) NOT NULL AUTO_INCREMENT,
  `nomTipoIngre` varchar(45) NOT NULL,
  PRIMARY KEY (`idTipoIngre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipoingre`
--

LOCK TABLES `tipoingre` WRITE;
/*!40000 ALTER TABLE `tipoingre` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipoingre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipoprod`
--

DROP TABLE IF EXISTS `tipoprod`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipoprod` (
  `idTipoProd` int(11) NOT NULL AUTO_INCREMENT,
  `NombTiPr` varchar(45) NOT NULL,
  `DescTiPr` mediumtext NOT NULL,
  PRIMARY KEY (`idTipoProd`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipoprod`
--

LOCK TABLES `tipoprod` WRITE;
/*!40000 ALTER TABLE `tipoprod` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipoprod` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipotrans`
--

DROP TABLE IF EXISTS `tipotrans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipotrans` (
  `idTipoTrans` int(11) NOT NULL AUTO_INCREMENT,
  `NombTiTr` varchar(45) NOT NULL,
  `DescTiTr` mediumtext NOT NULL,
  PRIMARY KEY (`idTipoTrans`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla para los tipos de transacción, Pedido, Entrega, ';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipotrans`
--

LOCK TABLES `tipotrans` WRITE;
/*!40000 ALTER TABLE `tipotrans` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipotrans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipousua`
--

DROP TABLE IF EXISTS `tipousua`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipousua` (
  `idTipoUsua` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificacion de Tipo de Usuario, Ej: 1-Administrador 2-Operador, 3-Proveedor, 4-Instructor, 5-Auxiliar, 6-Apoyo Administrativo',
  `NombTiUs` varchar(45) NOT NULL COMMENT 'Nombre del Tipo de Usuario: Administrador, Operador, Proveedor, Instructor, Aprendiz, Apoyo Administrativo',
  `DescTiUs` mediumtext NOT NULL COMMENT 'Descripción del tipo de usuarios que participan de las reglas del negocio',
  PRIMARY KEY (`idTipoUsua`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla para la clasificación de los usuarios. Se tipifican los usuarios para el control de Acceso';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipousua`
--

LOCK TABLES `tipousua` WRITE;
/*!40000 ALTER TABLE `tipousua` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipousua` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaccion`
--

DROP TABLE IF EXISTS `transaccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transaccion` (
  `idTransaccion` int(11) NOT NULL AUTO_INCREMENT,
  `idTipoTrans` int(11) NOT NULL,
  `idTipoUsua` int(11) NOT NULL,
  `idUsuario` varchar(15) NOT NULL,
  `FechTran` date NOT NULL,
  `NumeTran` int(11) NOT NULL,
  `DocuRefe` int(11) DEFAULT NULL,
  `ivatrans` decimal(20,2) DEFAULT NULL,
  `TotaTran` decimal(20,2) NOT NULL,
  `NotaTran` mediumtext NOT NULL,
  `EstaTran` varchar(45) NOT NULL COMMENT 'Estado de la Transacción, dependiendo del tipo:\nTipo Pedido = ''En Solicitud'' - ''Entregado''\nTipo Entrega=''Entregado'' - ''Devuelto''',
  PRIMARY KEY (`idTransaccion`,`idTipoTrans`,`idTipoUsua`,`idUsuario`),
  KEY `fk_Transaccion_Usuarios1_idx` (`idUsuario`,`idTipoUsua`),
  KEY `fk_Transaccion_TipoTrans1_idx` (`idTipoTrans`),
  CONSTRAINT `fk_Transaccion_TipoTrans1` FOREIGN KEY (`idTipoTrans`) REFERENCES `tipotrans` (`idTipoTrans`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_Transaccion_Usuarios1` FOREIGN KEY (`idUsuario`, `idTipoUsua`) REFERENCES `usuarios` (`idUsuario`, `idTipoUsua`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla para la relación de las transacciones';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaccion`
--

LOCK TABLES `transaccion` WRITE;
/*!40000 ALTER TABLE `transaccion` DISABLE KEYS */;
/*!40000 ALTER TABLE `transaccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `idUsuario` varchar(15) NOT NULL COMMENT 'Número de Identificación del Usuario',
  `idTipoUsua` int(11) NOT NULL COMMENT 'Identificacion de Tipo de Usuario, Ej: 1-Administrador 2-Operador, 3-Proveedor, 4-Instructor, 5-Auxiliar, 6-Apoyo Administrativo',
  `Nombres` varchar(45) NOT NULL COMMENT 'Nombres del Usuario',
  `Apellidos` varchar(45) NOT NULL COMMENT 'Apellidos del Usuario',
  `Email` varchar(200) DEFAULT NULL COMMENT 'Correo Electronico, y nick e ingreso a la plataforma',
  `Pass` varchar(200) DEFAULT NULL COMMENT 'Contraseña del usuario para el ingreso a la plataforma',
  `EstaUsua` varchar(45) NOT NULL COMMENT 'Estado del Usuario, Columna de control para la activación o inactivación de este.',
  PRIMARY KEY (`idUsuario`,`idTipoUsua`),
  UNIQUE KEY `Email_UNIQUE` (`Email`),
  KEY `fk_Usuarios_TipoUsua_idx` (`idTipoUsua`),
  CONSTRAINT `fk_Usuarios_TipoUsua` FOREIGN KEY (`idTipoUsua`) REFERENCES `tipousua` (`idTipoUsua`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla para los datos escenciales del Usuario, Nombres, apellidos, ingreso y de Estado.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'presmate'
--

--
-- Dumping routines for database 'presmate'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-18 11:29:16
