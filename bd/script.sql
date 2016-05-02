-- MySQL dump 10.13  Distrib 5.5.47, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: StarStores
-- ------------------------------------------------------
-- Server version	5.5.47-0ubuntu0.14.04.1

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
-- Table structure for table `Carrito`
--

DROP TABLE IF EXISTS `Carrito`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Carrito` (
  `ID_Carrito` int(11) NOT NULL,
  `Total` float DEFAULT NULL,
  `ID_Usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_Carrito`),
  KEY `ID_Usuario_idx` (`ID_Usuario`),
  CONSTRAINT `ID_Usuario_Carrito` FOREIGN KEY (`ID_Usuario`) REFERENCES `Usuario` (`ID_Usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Carrito`
--

LOCK TABLES `Carrito` WRITE;
/*!40000 ALTER TABLE `Carrito` DISABLE KEYS */;
INSERT INTO `Carrito` VALUES (44,150,44);
/*!40000 ALTER TABLE `Carrito` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `CategoriaProducto`
--

DROP TABLE IF EXISTS `CategoriaProducto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CategoriaProducto` (
  `ID_Categoria` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Descripcion` varchar(45) DEFAULT NULL,
  `Imagen` varchar(100) DEFAULT NULL,
  `ID_Tienda` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_Categoria`),
  KEY `ID_Tienda_idx` (`ID_Tienda`),
  CONSTRAINT `ID_Tienda_CategoriaProducto` FOREIGN KEY (`ID_Tienda`) REFERENCES `Tienda` (`ID_Tienda`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CategoriaProducto`
--

LOCK TABLES `CategoriaProducto` WRITE;
/*!40000 ALTER TABLE `CategoriaProducto` DISABLE KEYS */;
INSERT INTO `CategoriaProducto` VALUES (1,'Hamburguesas','hamburguesas','/imagen',1),(2,'ipad','ipads','image/stores/iShop/categoryipad.jpg',2),(3,'iPhone','iphone','image/stores/iShop/categoryiphone.jpg',2),(4,'iPod','ipod','image/stores/iShop/categoryipod.jpg',2),(5,'PC','pc','image/stores/iShop/categorypc.jpg',2),(6,'Arroz','Arroz Chino','image/stores/Sushiito/categoryArroz.jpg',3),(7,'Sopa','Sopa oriental','image/stores/Sushiito/categorySopa.jpg',3),(8,'Camisa','Camisa','image/stores/Pull and Bear/categorycamisa.jpg',4),(9,'Playera','Playera','image/stores/Pull and Bear/categoryplayera.jpg',4),(10,'Sudadero','Sudadero','image/stores/Pull and Bear/categorysudadero.jpg',4),(11,'Zapato','Zapato','image/stores/Pull and Bear/categoryzapato.jpg',4);
/*!40000 ALTER TABLE `CategoriaProducto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `CategoriaTienda`
--

DROP TABLE IF EXISTS `CategoriaTienda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CategoriaTienda` (
  `ID_CategoriaTienda` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Descripcion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID_CategoriaTienda`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='			';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CategoriaTienda`
--

LOCK TABLES `CategoriaTienda` WRITE;
/*!40000 ALTER TABLE `CategoriaTienda` DISABLE KEYS */;
INSERT INTO `CategoriaTienda` VALUES (1,'Comida','Comida '),(2,'Electronicos','Electronicos'),(3,'Ropa','Ropa');
/*!40000 ALTER TABLE `CategoriaTienda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Comentario`
--

DROP TABLE IF EXISTS `Comentario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Comentario` (
  `ID_Comentario` int(11) NOT NULL,
  `Fecha` datetime DEFAULT NULL,
  `Texto` varchar(500) DEFAULT NULL,
  `Respuesta` varchar(500) DEFAULT NULL,
  `ID_Usuario` int(11) DEFAULT NULL,
  `ID_Tienda` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_Comentario`),
  KEY `ID_Usuario_idx` (`ID_Usuario`),
  KEY `ID_Tienda_idx` (`ID_Tienda`),
  CONSTRAINT `ID_Tienda_Comentario` FOREIGN KEY (`ID_Tienda`) REFERENCES `Tienda` (`ID_Tienda`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `ID_Usuario_Comentario` FOREIGN KEY (`ID_Usuario`) REFERENCES `Usuario` (`ID_Usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Comentario`
--

LOCK TABLES `Comentario` WRITE;
/*!40000 ALTER TABLE `Comentario` DISABLE KEYS */;
/*!40000 ALTER TABLE `Comentario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Comercial`
--

DROP TABLE IF EXISTS `Comercial`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Comercial` (
  `ID_Comercial` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Eslogan` varchar(100) DEFAULT NULL,
  `Mision` varchar(200) DEFAULT NULL,
  `Vision` varchar(200) DEFAULT NULL,
  `AcercaDe` varchar(200) DEFAULT NULL,
  `ImagenLogo` varchar(100) DEFAULT NULL,
  `ImagenPortada` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID_Comercial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Comercial`
--

LOCK TABLES `Comercial` WRITE;
/*!40000 ALTER TABLE `Comercial` DISABLE KEYS */;
/*!40000 ALTER TABLE `Comercial` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `DetalleCarrito`
--

DROP TABLE IF EXISTS `DetalleCarrito`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `DetalleCarrito` (
  `ID_Producto` varchar(45) NOT NULL,
  `ID_Carrito` int(11) NOT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_Producto`,`ID_Carrito`),
  KEY `ID_Producto_idx` (`ID_Producto`),
  KEY `ID_Carrito_idx` (`ID_Carrito`),
  CONSTRAINT `ID_Carrito` FOREIGN KEY (`ID_Carrito`) REFERENCES `Carrito` (`ID_Carrito`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `ID_Producto_DetalleCarrito` FOREIGN KEY (`ID_Producto`) REFERENCES `Producto` (`ID_Producto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `DetalleCarrito`
--

LOCK TABLES `DetalleCarrito` WRITE;
/*!40000 ALTER TABLE `DetalleCarrito` DISABLE KEYS */;
INSERT INTO `DetalleCarrito` VALUES ('12',44,1);
/*!40000 ALTER TABLE `DetalleCarrito` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `DetalleFactura`
--

DROP TABLE IF EXISTS `DetalleFactura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `DetalleFactura` (
  `ID_Factura` int(11) NOT NULL,
  `ID_Producto` varchar(45) NOT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_Factura`,`ID_Producto`),
  KEY `ID_Factura_idx` (`ID_Factura`),
  KEY `ID_Producto_idx` (`ID_Producto`),
  CONSTRAINT `ID_Factura` FOREIGN KEY (`ID_Factura`) REFERENCES `Factura` (`ID_Factura`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `ID_Producto_DetalleFactura` FOREIGN KEY (`ID_Producto`) REFERENCES `Producto` (`ID_Producto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `DetalleFactura`
--

LOCK TABLES `DetalleFactura` WRITE;
/*!40000 ALTER TABLE `DetalleFactura` DISABLE KEYS */;
/*!40000 ALTER TABLE `DetalleFactura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Factura`
--

DROP TABLE IF EXISTS `Factura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Factura` (
  `ID_Factura` int(11) NOT NULL,
  `Fecha` datetime DEFAULT NULL,
  `Total` float DEFAULT NULL,
  `ID_Usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_Factura`),
  KEY `ID_Usuario_idx` (`ID_Usuario`),
  CONSTRAINT `ID_Usuario_Factura` FOREIGN KEY (`ID_Usuario`) REFERENCES `Usuario` (`ID_Usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Factura`
--

LOCK TABLES `Factura` WRITE;
/*!40000 ALTER TABLE `Factura` DISABLE KEYS */;
/*!40000 ALTER TABLE `Factura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Imagen`
--

DROP TABLE IF EXISTS `Imagen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Imagen` (
  `ID_Imagen` int(11) NOT NULL,
  `Ruta` varchar(100) DEFAULT NULL,
  `ID_Comercial` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_Imagen`),
  KEY `ID_Comercial_idx` (`ID_Comercial`),
  CONSTRAINT `ID_Comercial` FOREIGN KEY (`ID_Comercial`) REFERENCES `Comercial` (`ID_Comercial`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Imagen`
--

LOCK TABLES `Imagen` WRITE;
/*!40000 ALTER TABLE `Imagen` DISABLE KEYS */;
/*!40000 ALTER TABLE `Imagen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Membresia`
--

DROP TABLE IF EXISTS `Membresia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Membresia` (
  `ID_Membresia` int(11) NOT NULL,
  `FechaSuscripcion` datetime DEFAULT NULL,
  PRIMARY KEY (`ID_Membresia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Membresia`
--

LOCK TABLES `Membresia` WRITE;
/*!40000 ALTER TABLE `Membresia` DISABLE KEYS */;
/*!40000 ALTER TABLE `Membresia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MembresiaAnual`
--

DROP TABLE IF EXISTS `MembresiaAnual`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MembresiaAnual` (
  `ID_Membresia` int(11) NOT NULL,
  `ID_Tienda` int(11) NOT NULL,
  `FechaPago` datetime DEFAULT NULL,
  `FechaVencimiento` datetime DEFAULT NULL,
  PRIMARY KEY (`ID_Membresia`,`ID_Tienda`),
  KEY `ID_Membresia_idx` (`ID_Membresia`),
  KEY `ID_Tienda_idx` (`ID_Tienda`),
  CONSTRAINT `ID_Membresia` FOREIGN KEY (`ID_Membresia`) REFERENCES `Membresia` (`ID_Membresia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `ID_Tienda_Membresia` FOREIGN KEY (`ID_Tienda`) REFERENCES `Tienda` (`ID_Tienda`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MembresiaAnual`
--

LOCK TABLES `MembresiaAnual` WRITE;
/*!40000 ALTER TABLE `MembresiaAnual` DISABLE KEYS */;
/*!40000 ALTER TABLE `MembresiaAnual` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Producto`
--

DROP TABLE IF EXISTS `Producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Producto` (
  `ID_Producto` varchar(45) NOT NULL,
  `Imagen` varchar(100) DEFAULT NULL,
  `Descripcion` varchar(45) DEFAULT NULL,
  `Precio` float DEFAULT NULL,
  `Habilitado` int(11) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `ID_CategoriaProducto` int(11) DEFAULT NULL,
  `ID_Tienda` int(11) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID_Producto`),
  UNIQUE KEY `ID_Producto_UNIQUE` (`ID_Producto`),
  KEY `ID_CategoriaProducto_idx` (`ID_CategoriaProducto`),
  KEY `ID_Tienda_idx` (`ID_Tienda`),
  CONSTRAINT `ID_CategoriaProducto` FOREIGN KEY (`ID_CategoriaProducto`) REFERENCES `CategoriaProducto` (`ID_Categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `ID_Tienda_Producto` FOREIGN KEY (`ID_Tienda`) REFERENCES `Tienda` (`ID_Tienda`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Producto`
--

LOCK TABLES `Producto` WRITE;
/*!40000 ALTER TABLE `Producto` DISABLE KEYS */;
INSERT INTO `Producto` VALUES ('1','/imagen','Big Mac',45,1,10,1,1,'Big Mac'),('10','image/stores/Sushiito/sopaVerduras.jpg','Sopa con verduras',45,1,100,7,3,'Sopa con verduras'),('11','image/stores/Sushiito/supaTortilla.jpg','Sopa con tortilla',45,1,100,7,3,'Sopa de tortilla'),('12','image/stores/Pull and Bear/camisa.jpg','Camisa con cuadros',150,1,15,8,4,'Camisa con cuadros'),('13','image/stores/Pull and Bear/camisa2.jpg','Camisa lisa',150,1,11,8,4,'Camisa lisa'),('14','image/stores/Pull and Bear/playera.jpg','Playera blanca',125,1,19,9,4,'Playera Blanca'),('15','image/stores/Pull and Bear/playera2.jpg','Playera Negra',125,1,15,9,4,'Playera Negra'),('16','image/stores/Pull and Bear/sudadera.jpg','Sudadera New York',200,1,8,10,4,'Sudadera New York'),('17','image/stores/Pull and Bear/sudadera2.jpg','Sudadera Nice',200,1,4,10,4,'Sudadera Nice'),('18','image/stores/Pull and Bear/sudadera3.jpg','Sudadera Sport',200,1,7,10,4,'Sudadera sport'),('2','image/stores/iShop/ipad.jpg','iPad',2000,1,9,2,2,'iPad'),('3','image/stores/iShop/iphone','iPhone',1500,1,9,3,2,'iPhone'),('4','image/stores/iShop/ipod.jpg','iPod',1500,1,10,4,2,'iPod'),('5','image/stores/iShop/ipodnano.jpg','iPod Nano',900,1,10,4,2,'Ipod Nano'),('6','image/stores/iShop/macbook.jpg','Macbook',5000,1,10,5,2,'Macbook'),('7','image/stores/iShop/macpc.jpg','Mac PC',7000,1,10,5,2,'Mac PC'),('8','image/stores/Sushiito/arrozCamaron.jpg','Arroz con camaron',55,1,100,6,3,'Arroz con camaron'),('9','image/stores/Sushiito/sopaCarne.jpg','Sopa con carne',45,1,100,7,3,'Sopa con carne');
/*!40000 ALTER TABLE `Producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Tienda`
--

DROP TABLE IF EXISTS `Tienda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Tienda` (
  `ID_Tienda` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) DEFAULT NULL,
  `Eslogan` varchar(45) DEFAULT NULL,
  `Mision` varchar(200) DEFAULT NULL,
  `Vision` varchar(200) DEFAULT NULL,
  `AcercaDe` varchar(200) DEFAULT NULL,
  `ImagenLogo` varchar(100) DEFAULT NULL,
  `ImagenPortada` varchar(100) DEFAULT NULL,
  `TipoTienda` int(11) DEFAULT NULL,
  `Estado` int(11) DEFAULT NULL,
  `ID_Administrador` int(11) DEFAULT NULL,
  `ID_CategoriaTienda` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_Tienda`),
  KEY `ID_Usuario_idx` (`ID_Administrador`),
  KEY `ID_CategoriaTienda_idx` (`ID_CategoriaTienda`),
  CONSTRAINT `ID_CategoriaTienda` FOREIGN KEY (`ID_CategoriaTienda`) REFERENCES `CategoriaTienda` (`ID_CategoriaTienda`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `ID_Usuario` FOREIGN KEY (`ID_Administrador`) REFERENCES `Usuario` (`ID_Usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Tienda`
--

LOCK TABLES `Tienda` WRITE;
/*!40000 ALTER TABLE `Tienda` DISABLE KEYS */;
INSERT INTO `Tienda` VALUES (1,'McDonalds','Me encanta','vender','vender','null','/imagen','/imagen',1,0,42,1),(2,'iShop','De todo en tecnologia','vender','vender','Mac','image/stores/iShop/logoishop.jpg','image/stores/iShop/portadaishop.jpg',1,0,42,2),(3,'Sushiito','Buena comida china','vender','vender','Sushi','image/stores/Sushiito/logosushiito.jpg','image/stores/Sushiito/portadasushiito.jpg',1,0,42,1),(4,'Pull and Bear','Ropa Europea','vender','vender','Pull','image/stores/Pull and Bear/pullLogo.jpg','image/stores/Pull and Bear/pullPortada.jpg',1,0,42,3),(5,'Max','electronicos','vender','vender','vendemos','image/stores/Max/logoMaxjpg','image/stores/Max/portadaMaxjpg',1,1,45,2);
/*!40000 ALTER TABLE `Tienda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TipoUsuario`
--

DROP TABLE IF EXISTS `TipoUsuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TipoUsuario` (
  `ID_TipoUsuario` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID_TipoUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TipoUsuario`
--

LOCK TABLES `TipoUsuario` WRITE;
/*!40000 ALTER TABLE `TipoUsuario` DISABLE KEYS */;
INSERT INTO `TipoUsuario` VALUES (1,'Administrador'),(2,'Tienda'),(3,NULL);
/*!40000 ALTER TABLE `TipoUsuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Usuario`
--

DROP TABLE IF EXISTS `Usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Usuario` (
  `ID_Usuario` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) DEFAULT NULL,
  `Apellido` varchar(45) DEFAULT NULL,
  `Correo` varchar(45) DEFAULT NULL,
  `Telefono` varchar(45) DEFAULT NULL,
  `Movil` varchar(45) DEFAULT NULL,
  `Password` varchar(45) DEFAULT NULL,
  `FechaNacimiento` datetime DEFAULT NULL,
  `ID_TipoUsuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_Usuario`),
  KEY `ID_TipoUsuario_idx` (`ID_TipoUsuario`),
  CONSTRAINT `ID_TipoUsuario` FOREIGN KEY (`ID_TipoUsuario`) REFERENCES `TipoUsuario` (`ID_TipoUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Usuario`
--

LOCK TABLES `Usuario` WRITE;
/*!40000 ALTER TABLE `Usuario` DISABLE KEYS */;
INSERT INTO `Usuario` VALUES (1,'david','garcia','dacaslles','123456',NULL,'123','1990-05-10 00:00:00',3),(42,'david','garcia','d@d.com','123456',NULL,'123','1990-10-05 00:00:00',2),(43,'David','Garcia','da@da.com','123456','','123','2016-04-08 17:16:53',1),(44,'David','Garcia','dacaslles@gmail.com','24324576',NULL,'123','1990-05-10 00:00:00',3),(45,'Carlos','Joaquin','carlos@correo.com','24311318',NULL,'123','2016-04-14 12:26:59',2);
/*!40000 ALTER TABLE `Usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-02  8:42:09
