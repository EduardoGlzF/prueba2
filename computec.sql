-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 24-05-2019 a las 06:51:40
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `computec`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcarrito`
--

DROP TABLE IF EXISTS `tblcarrito`;
CREATE TABLE IF NOT EXISTS `tblcarrito` (
  `idcarrito` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  PRIMARY KEY (`idcarrito`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblproducto`
--

DROP TABLE IF EXISTS `tblproducto`;
CREATE TABLE IF NOT EXISTS `tblproducto` (
  `idProductos` int(11) NOT NULL AUTO_INCREMENT,
  `strNombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `categoria` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `dblPrecio` double NOT NULL,
  `intEstado` int(11) NOT NULL,
  `strDescripcion` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `strImagen` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`idProductos`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tblproducto`
--

INSERT INTO `tblproducto` (`idProductos`, `strNombre`, `categoria`, `dblPrecio`, `intEstado`, `strDescripcion`, `strImagen`) VALUES
(1, 'Laptop HP x20', 'computo', 2500, 0, '16 de ram', 'producto1'),
(2, 'Laptop MSI Dragonfire', 'computo', 8999, 0, '7899', 'producto2'),
(8, 'PC Dell R21', 'computo', 2500, 1, '8 de ram', 'PC.png'),
(9, 'Laptop HP x10', 'computo', 12233, 1, 'asd', 'c05962448.png'),
(11, 'Moto G7', 'telefonia', 5999, 1, 'Gama media', 'moto-g7plus-registration.png'),
(10, 'Nova 3', 'telefonia', 8999, 1, 'Gama media', 'nova3-listimage.png'),
(12, 'Galaxy s10 ', 'telefonia', 21999, 1, 'Gama alta', 'galaxyS10.png'),
(13, 'Mouse Logitech G203', 'computo', 499, 1, 'Mouse optico ', 'logitechmouse.jpg'),
(14, 'Teclado Razer Death stalker', 'computo', 899, 1, 'Teclado RGB', 'razer-dstalk.png'),
(15, 'iphone x ', 'telefonia', 23390, 1, 'Gama alta', 'iphonex.jpg'),
(16, 'xiaomi A2', 'telefonia', 7499, 1, 'Gama media', 'xiaomiA2.jpg'),
(17, 'Audifonos LG HBS', 'oferta', 199, 1, 'Rebajado de 299 a 199', 'audifonosLgHbs.jpg'),
(18, 'Mouse Pad Corsair', 'oferta', 399, 1, 'Rebajado de 439 a 399', 'mousepad Corsair.jpg'),
(19, 'Cable de datos Adata', 'oferta', 99, 1, 'Rebajado de 159 a 99', 'cable Adata.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblusuario`
--

DROP TABLE IF EXISTS `tblusuario`;
CREATE TABLE IF NOT EXISTS `tblusuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `strNombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `strEmail` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `intActivo` int(11) NOT NULL,
  `intTelefono` int(11) NOT NULL,
  `intPrivilegio` int(11) NOT NULL,
  `strDirccion` varchar(70) COLLATE utf8_spanish2_ci NOT NULL,
  `strContrasena` varchar(70) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tblusuario`
--

INSERT INTO `tblusuario` (`idUsuario`, `strNombre`, `strEmail`, `intActivo`, `intTelefono`, `intPrivilegio`, `strDirccion`, `strContrasena`) VALUES
(1, 'jorge', 'jorgev537@gmail.com', 1, 899153856, 0, '1', 'jorge');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
