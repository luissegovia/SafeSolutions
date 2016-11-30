-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2016 a las 08:26:21
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `crm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(250) NOT NULL,
  `apellidos` varchar(250) NOT NULL,
  `telefono` int(250) NOT NULL,
  `colonia` varchar(250) NOT NULL,
  `calle` varchar(250) NOT NULL,
  `numero` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `opciones` varchar(250) NOT NULL,
  `fecha_registro` date NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombres`, `apellidos`, `telefono`, `colonia`, `calle`, `numero`, `email`, `opciones`, `fecha_registro`) VALUES
(3, 'Marco', 'Gonzalez Monsivais', 155521, 'Nitrogeno', 'uno', '1450', 'marco.gonzalea@safesolutions.com.mx', 'Otorgamiento de IPP', '2016-08-14'),
(6, 'Manuel', 'Segovia', 153153, 'Mitras Centro', 'Nitro', '4141', 'luis._enrique@hotmail.com', 'Otorgamiento de IPP', '2016-08-18'),
(9, 'Marisol', 'Segovia', 11681697, 'Mirasol', 'H', '145', 'verux_07@hotmail.com', 'Otorgamiento de Vejez', '2016-09-01'),
(10, 'Abraham ', 'Garcia', 123456789, 'Haciendas de Escobedo', 'Hacienda de Anahuac', '4512', 'abraham92@gmail.com', 'Pago correcto de Vejez', '2016-09-02'),
(11, 'Irma', 'rojas', 10969524, 'Mitras Poniente', 'sierra mauricio', '991', 'irmarojas419@gmail.com', 'Familiar', '2016-09-02'),
(15, 'prueba', 'prueba', 0, 'prueba', 'prueba', 'prueba', 'lobosmax2014@hotmail.com', 'Otorgamiento de Cesantia', '2016-09-04'),
(16, 'Miriam', 'Valdez', 1245232510, 'Mitras Norte', 'A', '5521', 'jonatthna@gmail.com', 'Otorgamiento de Vejez', '2016-09-06'),
(17, 'Chesperito', 'Segoviano', 1168169710, 'Fomerre1', 'pizarra', '55A', 'manuel.cruz.dl@hotmail.com', 'Juicio Laboral Local', '2016-09-06'),
(18, 'Marisol ', 'Lopez', 1524454, 'gfjhfj', 'hgjhg', '3114', 'luis._enrique@hotmail.com', 'Administrativo', '2016-09-17'),
(19, 'Francisco', 'Albear', 2147483647, 'San pedro', 'hola', '451A', 'luis._enrique@hotmail.com', 'Pago correcto de Viudez', '2016-10-08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `color` varchar(7) DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `events`
--

INSERT INTO `events` (`id`, `title`, `color`, `start`, `end`) VALUES
(4, 'prueba de evento', '#FFD700', '2016-10-17 07:00:00', '2016-10-17 07:00:00'),
(5, 'prueba de eventooooooooooooooooooo', '', '2016-10-20 00:00:00', '2016-10-20 00:00:00'),
(6, 'ana gaby', NULL, '2016-10-28 00:00:00', '2016-10-28 00:00:00'),
(7, 'cynthia', '#FF0000', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'cynthia', '#FF0000', '2016-10-08 00:00:00', '2016-10-09 00:00:00'),
(9, 'luis', '#40E0D0', '2016-10-08 00:00:00', '2016-10-09 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juicios`
--

CREATE TABLE IF NOT EXISTS `juicios` (
  `id_juicio` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_cliente` varchar(100) NOT NULL,
  `tipo_junta` varchar(15) NOT NULL,
  `num_expediente` varchar(15) NOT NULL,
  `nom_contrario` varchar(100) NOT NULL,
  `fecha_demanda` date NOT NULL,
  `tipo_demanda` varchar(100) NOT NULL,
  `fecha_registro_cliente` date NOT NULL,
  `anticipo` int(10) NOT NULL,
  `vendedor` varchar(20) NOT NULL,
  `estado_procesal` varchar(100) NOT NULL,
  `fecha_extra` date NOT NULL,
  `observaciones` varchar(500) NOT NULL,
  PRIMARY KEY (`id_juicio`),
  UNIQUE KEY `nombre_cliente` (`nombre_cliente`,`num_expediente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Volcado de datos para la tabla `juicios`
--

INSERT INTO `juicios` (`id_juicio`, `nombre_cliente`, `tipo_junta`, `num_expediente`, `nom_contrario`, `fecha_demanda`, `tipo_demanda`, `fecha_registro_cliente`, `anticipo`, `vendedor`, `estado_procesal`, `fecha_extra`, `observaciones`) VALUES
(2, 'Daniel  Gonzalez', 'JF 19', '0548/7845', 'Maximiliano Aleman', '2016-09-01', 'Otorgamiento de Invalidez', '2016-08-18', 0, 'INAPAM', 'Alegatos', '0000-00-00', 'demanda presentada ayer'),
(3, 'Luis Enrique Segovia Valdez', 'Junta Local', '0124/8522', 'Abraham Garcia', '2016-09-01', 'Otorgamiento de Invalidez', '2016-08-15', 3500, 'Ninguno', '2 Amparo', '0000-00-00', 'se necescitq mqwllrkgnrltkhn5y'),
(4, 'Manuel Cruez', 'Civil', '9875/0235', 'Andre Pierre', '2016-09-01', 'Otorgamiento de IPP', '2016-08-18', 0, 'Ninguno', 'Demanda Presentada', '0000-00-00', 'demanda presentada el dia de ayer'),
(7, 'Marco Gonzalez Monsivais', 'JF 19', '0878/3695', 'Debany Castillo', '2016-09-01', 'Otorgamiento de IPP', '2016-08-14', 3500, 'Otro', 'Demanda Presentada', '0000-00-00', 'hola'),
(8, 'Cynthia  Segovia', 'JF 19', '7123/1598', 'Meliisa Venegas', '2016-09-01', 'Otorgamiento de Vejez', '2016-09-01', 450, 'Fernando', 'Demanda Presentada', '0000-00-00', 'holz'),
(26, 'Cynthia  Segovia', 'JF 19', '6465465/5646', 'askjdasdas', '2016-09-01', 'Otorgamiento de Vejez', '2016-09-01', 0, 'Ninguno', 'Demanda Presentada', '0000-00-00', 'asdasdasdasdasdasd'),
(29, 'Liz Rojas', 'JF 19', '5454/42512', 'alkdlaksdas', '2016-09-02', 'Mercantil', '2016-08-18', 0, 'INAPAM', 'Demanda Presentada', '0000-00-00', 'sdasdasdasdasdasdasda'),
(30, 'Irma rojas', 'Junta Local', '1054/5642', 'Yazmin Melendez', '2016-08-30', 'Familiar', '2016-09-02', 500, 'Publicidad', 'Desahogo de Pruebas', '0000-00-00', 'me dijo que le marcra el jueves'),
(32, 'prueba prueba', 'Civil', '878458/4551', 'prueba', '2016-09-04', 'Otorgamiento de Cesantia', '2016-09-04', 0, 'Ninguno', 'Demanda Presentada', '0000-00-00', 'prueba'),
(33, 'jonathan Leal', 'Civil', '025/2016', 'Juanito Perez', '2016-09-06', 'Otorgamiento de Vejez', '2016-09-06', 3500, 'Jonathan', 'Demanda Presentada', '0000-00-00', 'ninguna'),
(34, 'Marisol  Lopez', 'JF 20', '1451/4578', 'mhvmbkj', '2016-09-17', 'Administrativo', '2016-09-17', 50, 'INAPAM', 'Cde Continuacion del IMSS', '0000-00-00', 'mbmjb');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `user`, `password`) VALUES
(13, 'DGlezz70', 'SSdg2016');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
