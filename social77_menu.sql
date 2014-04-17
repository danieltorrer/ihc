-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 17-04-2014 a las 22:57:08
-- Versión del servidor: 5.1.44
-- Versión de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `social77_menu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alimento`
--

CREATE TABLE IF NOT EXISTS `alimento` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` varchar(40) NOT NULL,
  `tipo` enum('Alimento','Bebida') NOT NULL,
  `horario_comida` enum('Desayuno','Comida','Cena') NOT NULL,
  `imagen_1` varchar(255) NOT NULL,
  `imagen_2` varchar(255) NOT NULL,
  `imagen_3` varchar(255) NOT NULL,
  `icono` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcar la base de datos para la tabla `alimento`
--

INSERT INTO `alimento` (`id`, `nombre`, `descripcion`, `precio`, `tipo`, `horario_comida`, `imagen_1`, `imagen_2`, `imagen_3`, `icono`) VALUES
(1, 'Café', '<p>\n	Nuestro caf&eacute; especial</p>\n', '30', 'Bebida', 'Desayuno', '42546-bebida7.jpg', '1a517-bebida11.jpg', '', '445a5-196.png'),
(3, 'Hamburguesa', '<p>\n	lorem ipsum dolor sit amet</p>\n', '50.50', 'Alimento', 'Comida', '9cf1f-comida1.jpg', '08e66-example.png', '30431-food-2.png', 'a49b4-115.png'),
(4, 'Bebiba 1', '', '23', 'Bebida', 'Desayuno', '38558-bebida16.jpg', '0c330-bebida17.jpg', '', '6802d-198.png'),
(5, 'Bebida 2', '<p>\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, excepturi, quae voluptatum eligendi facere perspiciatis numquam aperiam ipsam! Voluptatum, blanditiis sint ipsam aperiam animi sed omnis asperiores adipisci ut exercitationem.</p>\n', '45.70', 'Bebida', 'Desayuno', 'e4720-bebida9.jpg', 'd66c0-bebida10.jpg', '', '8bea1-151.png'),
(6, 'comida 2', '', '35', 'Alimento', 'Desayuno', 'edd80-desayuno2.jpg', '', '', '4e38f-58.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE IF NOT EXISTS `pedido` (
  `id_pedido` int(11) NOT NULL,
  `id_alimento` int(11) NOT NULL,
  PRIMARY KEY (`id_pedido`),
  KEY `id_alimento` (`id_alimento`),
  KEY `id_alimento_2` (`id_alimento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `pedido`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `password`) VALUES
(1, 'admin', 'b5f7d29873688285ef1efbe9e9b5c924024e2ea9');
