-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 15-05-2019 a las 15:46:47
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
  `strSeo` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `dblPrecio` double NOT NULL,
  `intEstado` int(11) NOT NULL,
  `strDescripcion` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `strImagen` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`idProductos`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tblproducto`
--

INSERT INTO `tblproducto` (`idProductos`, `strNombre`, `strSeo`, `dblPrecio`, `intEstado`, `strDescripcion`, `strImagen`) VALUES
(1, 'lap1', '', 0, 0, '', 'producto1'),
(2, 'lap2', '', 0, 0, '', 'producto2'),
(3, 'lap3', '', 0, 0, '', 'producto3'),
(4, 'lap4', '', 0, 0, '', 'producto1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
