-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 23-05-2019 a las 16:45:24
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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tblproducto`
--

INSERT INTO `tblproducto` (`idProductos`, `strNombre`, `categoria`, `dblPrecio`, `intEstado`, `strDescripcion`, `strImagen`) VALUES
(1, 'lap1', 'computo', 2500, 0, '16 de ram', 'producto1'),
(2, 'lap2', 'computo', 8999, 0, '7899', 'producto2'),
(8, 'PC de escritorio', 'computo', 2500, 1, '8 de ram', 'PC.png'),
(9, 'Lap 4', 'telefonia', 12233, 1, 'asd', 'c05962448.png');

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
(1, 'Jorge Eduardo Villda Walle', 'jorgev537@gmail.com', 1, 899153856, 0, '1', 'jorge123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
