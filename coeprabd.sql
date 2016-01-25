-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-01-2016 a las 00:46:44
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `coeprabd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE IF NOT EXISTS `alumno` (
  `idalumno` int(11) NOT NULL,
  `curso_idcurso` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apaterno` varchar(30) NOT NULL,
  `amaterno` varchar(30) NOT NULL,
  `lugartrabajo` varchar(50) NOT NULL,
  `fechanacimiento` date NOT NULL,
  `edad` int(11) NOT NULL,
  `estadocivil` varchar(30) NOT NULL,
  `escolaridad` varchar(30) NOT NULL,
  `domicilio` varchar(50) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `fechaelaboracion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambulancias`
--

CREATE TABLE IF NOT EXISTS `ambulancias` (
  `numplacas` varchar(10) NOT NULL,
  `marca` varchar(12) NOT NULL,
  `modelo` varchar(12) NOT NULL,
  `ano` int(4) NOT NULL,
  `numeconomico` varchar(12) NOT NULL,
  `tiposervicio` varchar(30) NOT NULL,
  `telefono` varchar(14) NOT NULL,
  `telefono2` varchar(14) DEFAULT NULL,
  `comentarios` varchar(140) DEFAULT NULL,
  `hospitales_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ambulancias`
--

INSERT INTO `ambulancias` (`numplacas`, `marca`, `modelo`, `ano`, `numeconomico`, `tiposervicio`, `telefono`, `telefono2`, `comentarios`, `hospitales_id`) VALUES
('', 'FORD', 'TES', 2000, '09', 'Asistencia medica Urgente', '664', '664', 'JAVASCRIPT', 10),
('000', 'Ford', 'Ecoline', 2, '04', 'Asistencia medica Urgente', '(664) 2341161', '', 'comentario', 10),
('01', '', 'EE', 2000, '09', 'Asistencia medica Urgente', '55', '55', '55', 10),
('02', '', '', 2000, '09', 'Asistencia medica Urgente', '55', '55', '55', 10),
('11', '', 'ECOLINE', 2000, '09', 'Asistencia medica Urgente', '66', '66', '1', 10),
('111111', 'Benz', 'Ecoline', 2000, '111111', 'urgencias', '6642341161', '6642341161', 'Esto es un comentarios que logro ingresar ', 10),
('12', '', 'ECOLINE', 2000, '09', 'Asistencia medica Urgente', '664', '664', 'DDDD', 10),
('122', '', 'ECOLINE', 2000, '09', 'Asistencia medica Urgente', '664', '664', 'DDDD', 10),
('123', '', '', 2000, '09', 'Asistencia medica Urgente', '665', '665', '4444444', 10),
('145', '', '', 0, '', 'Asistencia medica Urgente', '', '', '', 10),
('2', 'd', 'e', 2000, '09', 'Asistencia medica Urgente', '6642341161', '', 'ww', 10),
('203', 'Ford', 'Ecoline', 2000, '09', 'Asistencia medica Urgente', '6665', '66655', '555', 10),
('23', '', 'EC', 2000, '08', 'Asistencia medica Urgente', '664', '664', '4444', 10),
('234', '', 'EC', 2000, '08', 'Asistencia medica Urgente', '664', '664', '4444', 10),
('309', 'modelo', 'modelo', 2000, '09', 'Asistencia medica Urgente', '(664) 2341161', '', 'aaaaaaa', 10),
('33', 'd', 'f', 2000, '09', 'Asistencia medica Urgente', '3', '', 'wdd', 10),
('365', '', 'EC', 2000, '08', 'Asistencia medica Urgente', '664', '664', '4444', 10),
('376', 'MERCEDES', 'ECOLINE', 2016, '09', 'Cuidados Intensivos', '(664) 234 1161', '(664) 234 1161', 'UNIDAD PRESENTA PROBLEMAS ', 11),
('3763', 'FORD', 'ECOLINE', 2000, '099', 'Asistencia medica Urgente', '665', '665', 'JAVASCRIPT', 10),
('37634', '', 'ECOLINE', 2000, '099', 'Asistencia medica Urgente', '665', '665', 'JAVASCRIPT', 10),
('389', 'Fros', 'Ecoline', 2000, '09', 'Asistencia medica Urgente', '(664) 2341161', '', 'coom', 10),
('44', '', 'ECOO', 2000, '67', 'Asistencia medica Urgente', '666', '666', '666', 10),
('444', '334', '445', 2015, '455', 'Asistencia medica Urgente', '(664) 2341161', '', 'come', 10),
('456', 'ok', 'ok', 1995, '7', 'Asistencia medica Urgente', '(664) 2341161', '', 'comentario', 10),
('564', 'For', 'erf', 2000, '09', 'Asistencia medica Urgente', 'ddff', '', 'www', 10),
('567', 'Logro pasar', 'PAso', 2000, '00', 'Asistencia medica Urgente', '664', '664', 'comentario de paso ', 10),
('6', 'Ford', 'Eco', 2000, '89', 'Asistencia medica Urgente', '(664) 2341161', '', 'ddd', 10),
('76', 'df', 'ed', 2000, '34', 'Asistencia medica Urgente', '664234116', '', 'eerr', 10),
('8', 'Merd', 'Line', 2000, '43', 'Asistencia medica Urgente', '(664) 2341161', '', 'dsdds', 10),
('888', 'Ford', 'Ecoline', 2016, '09', 'Asistencia medica Urgente', '(664) 2341161', '', 'comentario', 10),
('897', 'Ford', 'Ecoline', 2000, '67', 'Asistencia medica Urgente', '(664) 2341568', '', 'comentario', 10),
('90', '', 'DD', 2000, '01', 'Asistencia medica Urgente', '665', '665', 'ESL', 10),
('99', '', 'TGI', 2000, '08', 'Asistencia medica Urgente', '55', '55', 'HUH', 11),
('999', 'Ford', 'Ecoline', 2016, '09', 'Asistencia medica Urgente', '(664) 2341161', '', 'comentario', 10),
('corrio', 'Ford', 'Ecoline', 2000, '123', 'urgenciasssss', '6642341161', '6642341161', 'Funciono sin array', 10),
('fffrfr', 'sddd', 'dddd', 2017, '45', 'Asistencia medica Urgente', '(664) 2341568', ' (664) 2341568', 'comentario', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capacitaciones`
--

CREATE TABLE IF NOT EXISTS `capacitaciones` (
  `idcapacitaciones` int(11) NOT NULL,
  `tamp_idtamp` int(11) DEFAULT NULL,
  `rcp` varchar(11) NOT NULL,
  `acls` varchar(11) NOT NULL,
  `prntraumaetm` varchar(11) NOT NULL,
  `phtls` varchar(11) NOT NULL,
  `peep` varchar(11) NOT NULL,
  `pals` varchar(11) NOT NULL,
  `nals` varchar(11) NOT NULL,
  `empact` varchar(11) NOT NULL,
  `amls` varchar(11) NOT NULL,
  `fsc` varchar(11) NOT NULL,
  `otros` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `capacitaciones`
--

INSERT INTO `capacitaciones` (`idcapacitaciones`, `tamp_idtamp`, `rcp`, `acls`, `prntraumaetm`, `phtls`, `peep`, `pals`, `nals`, `empact`, `amls`, `fsc`, `otros`) VALUES
(10, 24, 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'TENGO OTRAS COSAS'),
(11, 25, 'RCP Para Pr', 'no', 'no', 'no', 'PEPP', 'no', 'NALS', 'EMPACT', 'AMLS', 'no', 'TAMBIEN COCINO MUY BIEN'),
(12, 26, '', 'ACLS', '', 'PHTLS', '', '', 'NALS', 'EMPACT', 'AMLS', '', 'TOCO LA GUITARRA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunicacionestransportes`
--

CREATE TABLE IF NOT EXISTS `comunicacionestransportes` (
  `comunicaciontransporteid` int(11) NOT NULL,
  `helipuerto` varchar(10) DEFAULT NULL,
  `ambulancia` varchar(10) DEFAULT NULL,
  `radiotelefonia` varchar(10) DEFAULT NULL,
  `radiocomunicacion` varchar(10) DEFAULT NULL,
  `hospitales_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
  `idcurso` int(11) NOT NULL,
  `fechaidentificacion_idfechaidentificacion` int(11) DEFAULT NULL,
  `lugarcurso_idlugarcurso` int(11) DEFAULT NULL,
  `nombrecurso` varchar(100) NOT NULL,
  `fechacurso` date NOT NULL,
  `horariocurso` varchar(50) NOT NULL,
  `empresadirigida` varchar(100) NOT NULL,
  `giroasociacion` varchar(50) NOT NULL,
  `estadocurso` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`idcurso`, `fechaidentificacion_idfechaidentificacion`, `lugarcurso_idlugarcurso`, `nombrecurso`, `fechacurso`, `horariocurso`, `empresadirigida`, `giroasociacion`, `estadocurso`) VALUES
(7, 11, 0, 'CURSO INSTRUCTOR', '2016-01-15', 'CURSO INSTRUCTOR', 'CURSO INSTRUCTOR', 'CURSO INSTRUCTOR', 'ACTIVO'),
(8, 12, 0, 'MARCOS', '2016-01-07', 'MARCOS', 'MARCOS', 'MARCOS', 'ACTIVO'),
(9, 13, 21, 'CURSO FINAL', '2016-01-07', 'DE FINAL A FINAL', 'NOMBRE EMPRESA DIRIGIDA FINAL', 'GIRO FINAL', 'ACTIVO'),
(10, 5, 0, 'CURSO DE TEST', '2016-01-22', 'LUENES A VIERNES DE 2 A 4', 'PRUEBA S.A. DE C.V.', 'PRUEBA DE SOFTWARE', 'ACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evidencias`
--

CREATE TABLE IF NOT EXISTS `evidencias` (
  `idevidencia` int(11) NOT NULL,
  `curso_idcurso` int(11) NOT NULL,
  `evidencia` varchar(100) NOT NULL,
  `enlace` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fichaidentificacion`
--

CREATE TABLE IF NOT EXISTS `fichaidentificacion` (
  `idfichaidentificacion` int(11) NOT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `empresainstitucion` varchar(50) DEFAULT NULL,
  `anosexperiencia` int(11) NOT NULL,
  `svpr` varchar(50) NOT NULL,
  `fechaadiestramiento` date NOT NULL,
  `cursorealizado` varchar(50) NOT NULL,
  `gradoescolar` varchar(50) NOT NULL,
  `numerocursosimpartidos` int(11) NOT NULL,
  `expiracionlicencia` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `fichaidentificacion`
--

INSERT INTO `fichaidentificacion` (`idfichaidentificacion`, `usuario_idusuario`, `empresainstitucion`, `anosexperiencia`, `svpr`, `fechaadiestramiento`, `cursorealizado`, `gradoescolar`, `numerocursosimpartidos`, `expiracionlicencia`) VALUES
(5, 22, 'ADMINISTRADOR', 1, 'ADMINISTRADOR', '2015-12-10', 'ADMINISTRADOR', 'ADMINISTRADOR', 0, '2015-12-18'),
(11, 23, 'INSTRUCTOR', 1, '', '2016-01-13', 'INSTRUCTOR', 'INSTRUCTOR', 3, '2016-01-21'),
(12, 21, 'MARCOS', 1, 'MARCOS', '2016-01-05', 'MARCOS', 'MARCOS', 1, '2016-01-08'),
(13, 28, 'EMPRESA FINAL', 1, 'FINAL', '2016-01-05', 'FINAL', 'FINAL', 23, '2016-01-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hospitales`
--

CREATE TABLE IF NOT EXISTS `hospitales` (
  `id` int(11) NOT NULL,
  `nombrehospital` varchar(50) NOT NULL,
  `calle` varchar(90) NOT NULL,
  `numero` tinyint(5) NOT NULL,
  `colonia` varchar(50) NOT NULL,
  `codigopostal` int(5) NOT NULL,
  `delegacion` varchar(27) NOT NULL,
  `municipio` varchar(8) NOT NULL,
  `estado` varchar(35) NOT NULL,
  `telefono` varchar(14) NOT NULL,
  `telefono2` varchar(14) DEFAULT NULL,
  `nivel` varchar(15) NOT NULL,
  `fax` varchar(14) NOT NULL,
  `horariofax` varchar(10) DEFAULT NULL,
  `horariofaxf` varchar(10) DEFAULT NULL,
  `radiotelefonico` varchar(40) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `hospitales`
--

INSERT INTO `hospitales` (`id`, `nombrehospital`, `calle`, `numero`, `colonia`, `codigopostal`, `delegacion`, `municipio`, `estado`, `telefono`, `telefono2`, `nivel`, `fax`, `horariofax`, `horariofaxf`, `radiotelefonico`) VALUES
(10, 'HOSPITAL GENERALESSSSSS', 'PERLA', 19, 'ZONA RIO', 127, 'Centro', 'Tijuana', 'Baja California', '(664) 2341161', '(664) 2341161', '2do. nivel', '6642341161', '11:45:00', '16:05', '107.7 Mhz'),
(11, 'HOSPITAL GENERAL', 'PERLA', 19, 'ZONA RIO', 127, 'San Antonio de los Buenos', 'Tijuana', 'Baja Cal', '1234567', '122234', '2-B', '6642341161', '11:45', '', '52*1234*1234'),
(12, 'HOSPITAL GENERAL', 'PERLA', 19, 'ZONA RIO', 127, 'San Antonio de los Buenos', 'Tijuana', 'Baja Cal', '1234567', '122234', '2-B', '6642341161', '11:45', '', '52*1234*1234'),
(14, 'HOSPITAL GENERAL', 'REFORMA', 119, 'ZONARIO', 127, 'Centro', 'Tijuana', 'Baja California', '(664) 234-1161', '(664) 234-1161', '2do. nivel', '', '07:00', '20:00', '107.7 MHZ'),
(15, 'HOSPITAL GENERAL', 'REFORMA', 119, 'ZONA CENTRO', 127, 'Centro', 'Tijuana', 'Baja California', '(664) 234-1161', '(664) 234-1161', '2do. nivel', '(664) 234-1161', '', '', 'PRUEBA'),
(16, 'EJEMPLO', 'REFORMA', 119, 'ZONA PRUEBA', 127, 'Centro', 'Tijuana', 'Baja California', '(664) 234-1161', '(664) 234-1161', '2do. nivel', '(664) 234-1161', '07:00:00', '15:12', '107.7 MHZ'),
(17, 'PRUEBA DE BIT', 'REFORMA', 119, 'ZONA PRUEBA', 127, 'Centro', 'Tijuana', 'Baja California', '(664) 234-1161', '(664) 234-1161', '2do. nivel', '(664) 234-1161', '07:00', '13:00', '107.7 MHZ'),
(18, 'PRUEBA DE BIT', 'REFORMA', 119, 'ZONA PRUEBA', 32767, 'Centro', 'Tijuana', 'Baja California', '(664) 234-1161', '(664) 234-1161', '2do. nivel', '(664) 234-1161', '07:00', '13:00', '107.7 MHZ'),
(19, 'PRUEBA DE BIT', 'REFORMA', 119, 'ZONA PRUEBA', 226101, 'Centro', 'Tijuana', 'Baja California', '(664) 234-1161', '(664) 234-1161', '2do. nivel', '(664) 234-1161', '07:00', '13:00', '107.7 MHZ'),
(20, 'Hospita', 're', 1, 's', 23, 'Centro', 'Tijuana', 'Baja California', '23', '23', '2do. nivel', '', '07:00:00', '12:00', ''),
(21, '34', 'er', 1, '2', 2, 'Centro', 'Tijuana', 'Baja California', '233', '323', '2do. nivel', '', '07:00:00', '17:00', ''),
(22, 'general', '34', 34, '34', 34, 'Centro', 'Tijuana', 'Baja California', '43', '43', '2do. nivel', '', '07:00:00', '17:00', ''),
(23, '3444', 'ee', 0, 'ee', 0, 'Centro', 'Tijuana', 'Baja California', 'ee', 'ee', '2do. nivel', '', '07:00:00', '17:00', ''),
(24, '4555', 'dd', 0, 'e', 0, 'Centro', 'Tijuana', 'Baja California', 'e', 'e', '2do. nivel', '', '07:00:00', '17:00', ''),
(25, 'ed', '3223', 122, 'dd', 233, 'Centro', 'Tijuana', 'Baja California', '33', '33', '2do. nivel', '', '07:00:00', '17:00', ''),
(26, 'ed', '5565', 34, '33', 34, 'Centro', 'Tijuana', 'Baja California', 'e', 'ew', '2do. nivel', '', '07:00:00', '17:00', ''),
(27, 'errd', '344', 2, 'd', 34, 'Centro', 'Tijuana', 'Baja California', '4343', '43', '2do. nivel', '', '07:00:00', '17:00', ''),
(28, 'hh', '32', 0, 'd', 23, 'Centro', 'Tijuana', 'Baja California', 'd', 'd', '2do. nivel', '', '07:00:00', '17:00', ''),
(29, 'sddd', '32323', 22, 'sdad', 3, 'Centro', 'Tijuana', 'Baja California', '44', '44', '2do. nivel', '', '07:00:00', '17:00', ''),
(30, 'dsds', 'sdds', 119, 'www', 22670, 'Centro', 'Tijuana', 'Baja California', '33', '3', '2do. nivel', '', '07:00:00', '17:00', ''),
(31, 'ISSSTE', 'reforma', 122, 'ddff', 22610, 'Centro', 'Tijuana', 'Baja California', '(664) 2341161', '(664) 2341161', '2do. nivel', 'ed', '07:00:00', '17:00', ''),
(32, 'Hospital', 'reforma', 119, 'zona Rio', 22610, 'Centro', 'Tijuana', 'Baja California', '(664) 2341161', '(664) 2341161', '2do. nivel', 'sddd', '07:00:00', '17:00', ''),
(33, 'Hospital', 'reforma', 119, 'zonario', 22610, 'Centro', 'Tijuana', 'Baja California', '(664) 2341161', '(664) 2341161', '2do. nivel', 'sdd', '07:00:00', '17:00', ''),
(34, 'sdsd', 'dsds', 11, 'sd', 22610, 'Centro', 'Tijuana', 'Baja California', '(664) 2341161', '(664) 2341161', '2do. nivel', '(664) 2341161', '07:00:00', '17:00', ''),
(35, 'hospital', 'ddf', 12, 'dd', 22310, 'Centro', 'Tijuana', 'Baja California', '(664) 2341161', '(664) 2341161', '2do. nivel', '(664) 2341161', '07:00:00', '17:00', ''),
(36, 'gshh', 'dfffd', 127, 'ddd', 22610, 'Centro', 'Tijuana', 'Baja California', '(664) 2341568', '(664) 2341568', '2do. nivel', '(664) 2341568', '07:00:00', '17:00', ''),
(37, 'gshh', 'dfffd', 127, 'ddd', 22610, 'Centro', 'Tijuana', 'Baja California', '(664) 2341568', '(664) 2341568', '2do. nivel', '(664) 2341568', '07:00:00', '17:00', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hospital_recursos`
--

CREATE TABLE IF NOT EXISTS `hospital_recursos` (
  `hospitales_id` int(11) NOT NULL,
  `recursos_recursoid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructorauxiliar`
--

CREATE TABLE IF NOT EXISTS `instructorauxiliar` (
  `idinstructorauxiliar` int(11) NOT NULL,
  `curso_idcurso` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apaterno` varchar(50) NOT NULL,
  `amaterno` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `instructorauxiliar`
--

INSERT INTO `instructorauxiliar` (`idinstructorauxiliar`, `curso_idcurso`, `nombre`, `apaterno`, `amaterno`, `telefono`, `direccion`) VALUES
(1, 8, 'INSTRUCTORMARCOS', 'INSTRUCTORMARCOS', 'INSTRUCTORMARCOS', '223232', 'INSTRUCTORMARCOS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugarcurso`
--

CREATE TABLE IF NOT EXISTS `lugarcurso` (
  `idlugarcurso` int(11) NOT NULL,
  `nombrelugar` varchar(100) NOT NULL,
  `calle` varchar(100) NOT NULL,
  `numero` varchar(100) NOT NULL,
  `colonia` varchar(100) NOT NULL,
  `anexo` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `lugarcurso`
--

INSERT INTO `lugarcurso` (`idlugarcurso`, `nombrelugar`, `calle`, `numero`, `colonia`, `anexo`, `ciudad`) VALUES
(17, 'CASA DE HOMERO', 'SIEMPREVIVA', '123', 'SC', 'KIWN', 'SPRINGFIELD'),
(18, 'LUGAR', 'CALLE', 'NUMERO', 'COLONIA', 'ANEXO', 'CIUDAD'),
(19, 'la calle', '', '', '', '', ''),
(20, 'INGRESO LUGAR', 'INGRESO LUGAR', 'INGRESO LUGAR', 'INGRESO LUGAR', 'INGRESO LUGAR', 'INGRESO LUGAR'),
(21, 'INGRESO LUGAR1', 'INGRESO LUGAR', 'INGRESO LUGAR', 'INGRESO LUGAR', 'INGRESO LUGAR', 'INGRESO LUGAR'),
(22, 'NO SE INGRESO LUGAR', 'NO SE INGRESO', 'NO SE INGRESO', 'NO SE INGRESO', 'NO SE INGRESO', 'NO SE INGRESO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personales`
--

CREATE TABLE IF NOT EXISTS `personales` (
  `matricula` varchar(15) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apaterno` varchar(15) NOT NULL,
  `amaterno` varchar(15) NOT NULL,
  `cargo` enum('instructor principal','instructor adjunto','director','director medico','subdirector','jefe de division','encargado') NOT NULL,
  `servicio` varchar(25) DEFAULT NULL,
  `piso` varchar(20) DEFAULT NULL,
  `telefono` varchar(14) NOT NULL,
  `telefono2` varchar(14) DEFAULT NULL,
  `ext` varchar(15) DEFAULT NULL,
  `turno` varchar(15) DEFAULT NULL,
  `dias` int(2) NOT NULL,
  `hospitales_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personales`
--

INSERT INTO `personales` (`matricula`, `nombre`, `apaterno`, `amaterno`, `cargo`, `servicio`, `piso`, `telefono`, `telefono2`, `ext`, `turno`, `dias`, `hospitales_id`) VALUES
('0129', 'FRANCISCO', 'BRAVO', 'CERVANTES', 'director', 'Direccion de Hospital', '2A', '(664) 234 1161', '(664) 234 1161', '44', 'Matutino', 6, 10),
('111111111', 'fras', 'ffg', 'ggg', 'instructor principal', 'Area Administrativa', '2A', '(664) 2341568', '(664) 2341568', '33', 'Matutino', 4, 10),
('1121', 'wqqwwq', 'qwq', '32332', 'instructor principal', 'Area Administrativa', '2A', 'ss', 'dd', '23', 'Matutino', 4, 10),
('232323', 'dds', 'sdds', 'dsds', 'instructor principal', 'Area Administrativa', '2A', 'dd', 'ds', '23', 'Matutino', 2, 10),
('sddd', '3334', '3443', '4343', 'instructor principal', 'Area Administrativa', '2A', 'dd', 'dd', '23', 'Matutino', 5, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recursos`
--

CREATE TABLE IF NOT EXISTS `recursos` (
  `recursoid` int(11) NOT NULL,
  `camas` int(11) DEFAULT NULL,
  `admisioncontinua` int(11) DEFAULT NULL,
  `medicinacritica` int(11) DEFAULT NULL,
  `cuidadoscoronario` varchar(5) DEFAULT NULL,
  `cuidadoscoronarios` int(11) DEFAULT NULL,
  `unidadcuidadosintensivos` varchar(5) DEFAULT NULL,
  `cuidadosintensivos` int(11) DEFAULT NULL,
  `politraumatizado` varchar(5) DEFAULT NULL,
  `politraumatizados` int(11) DEFAULT NULL,
  `quemado` varchar(5) DEFAULT NULL,
  `quemados` int(11) DEFAULT NULL,
  `salacirugi` varchar(5) DEFAULT NULL,
  `salacirugia` int(11) DEFAULT NULL,
  `posquirurgic` varchar(5) DEFAULT NULL,
  `posquirurgica` int(11) DEFAULT NULL,
  `inahaloterapia` varchar(5) DEFAULT NULL,
  `hemodialisis` varchar(5) DEFAULT NULL,
  `laboratorioclinico` varchar(5) DEFAULT NULL,
  `bancodesangre` varchar(5) DEFAULT NULL,
  `rayos` varchar(5) DEFAULT NULL,
  `rayosx` int(11) DEFAULT NULL,
  `ultrasonid` varchar(5) DEFAULT NULL,
  `ultrasonido` int(11) DEFAULT NULL,
  `tomografia` varchar(5) DEFAULT NULL,
  `farmacia` varchar(5) DEFAULT NULL,
  `serviciosdisponibles_serviciodisponibleid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `serviciosdepersonales`
--

CREATE TABLE IF NOT EXISTS `serviciosdepersonales` (
  `serviciodepersonalid` int(11) NOT NULL,
  `medicosatls` varchar(10) DEFAULT NULL,
  `cud` varchar(10) DEFAULT NULL,
  `personales_matricula` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `serviciosdepersonales`
--

INSERT INTO `serviciosdepersonales` (`serviciodepersonalid`, `medicosatls`, `cud`, `personales_matricula`) VALUES
(4, 'si', 'si', '0129'),
(5, 'si', 'si', '232323'),
(6, 'si', 'si', '1121'),
(7, 'si', 'si', 'sddd'),
(8, 'si', 'si', '111111111');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `serviciosdisponibles`
--

CREATE TABLE IF NOT EXISTS `serviciosdisponibles` (
  `serviciodisponibleid` int(11) NOT NULL,
  `traumamuscoesqueletico` varchar(10) DEFAULT NULL,
  `quemados` varchar(10) DEFAULT NULL,
  `neurocirugia` varchar(10) DEFAULT NULL,
  `cirugiatoracica` varchar(10) DEFAULT NULL,
  `raquimedular` varchar(10) DEFAULT NULL,
  `unidadcuidadosintensivos` varchar(10) DEFAULT NULL,
  `hospitales_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `serviciosdisponibles`
--

INSERT INTO `serviciosdisponibles` (`serviciodisponibleid`, `traumamuscoesqueletico`, `quemados`, `neurocirugia`, `cirugiatoracica`, `raquimedular`, `unidadcuidadosintensivos`, `hospitales_id`) VALUES
(0, 'si', '', 'si', 'si', 'si', 'si', 10),
(5, 'si', '2', 'si', 'si', 'si', 'si', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tamp`
--

CREATE TABLE IF NOT EXISTS `tamp` (
  `idtamp` int(11) NOT NULL,
  `usuario_idusuario` int(11) DEFAULT NULL,
  `jurisdiccion` varchar(100) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apaterno` varchar(50) NOT NULL,
  `amaterno` varchar(50) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `fechanacimiento` date NOT NULL,
  `escolaridad` varchar(30) NOT NULL,
  `nivel` varchar(30) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `municipio` varchar(30) NOT NULL,
  `telefono1` varchar(15) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono2` varchar(15) NOT NULL,
  `TAMP` varchar(30) NOT NULL,
  `asociacionservicio` varchar(100) NOT NULL,
  `asociacioncurso` varchar(100) NOT NULL,
  `fechacurso` date NOT NULL,
  `experiencia` varchar(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tamp`
--

INSERT INTO `tamp` (`idtamp`, `usuario_idusuario`, `jurisdiccion`, `nombre`, `apaterno`, `amaterno`, `sexo`, `fechanacimiento`, `escolaridad`, `nivel`, `direccion`, `municipio`, `telefono1`, `correo`, `telefono2`, `TAMP`, `asociacionservicio`, `asociacioncurso`, `fechacurso`, `experiencia`, `fecha`) VALUES
(24, NULL, 'J2', 'JOEL', 'PALAFOX', 'RODRIGUEZ', 'MASCULINO', '2015-12-31', 'UNIVERSIDAD', 'AVANZADO', 'CALLE DOMICILIO PARTICULAR', 'TIJUANA', '616161616', 'CORREO@CORREO.COM', '76363636', 'REMUNERADO', 'EMPRESA ', 'CRUZ ROJA', '0000-00-00', '2', '2015-12-04 13:33:19'),
(25, NULL, 'CAPTMAR', 'CAPTMAR', 'CAPTMAR', 'CAPTMAR', 'MASCULINO', '2016-01-07', 'CAPTMAR', 'AVANZADO', 'CAPTMAR', 'CAPTMAR', '43232323', 'AAA@AAA.COM', '323323', 'REMUNERADO', 'WQDWWDWD', 'WQDWQDWQD', '0000-00-00', '', '2016-01-15 14:50:03'),
(26, NULL, 'EBU', 'EBU', 'EBU', 'EBU', 'MASCULINO', '2015-12-29', 'EBU', 'AVANZADO', 'EBU', 'EBU', '33232', 'EBU@EBU.COM', '3233', 'VOLUNTARIO', 'EBU', 'EBU', '2016-01-29', 'EBU', '2016-01-15 14:55:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposeguros`
--

CREATE TABLE IF NOT EXISTS `tiposeguros` (
  `id` int(11) NOT NULL,
  `issstecali` varchar(5) DEFAULT NULL,
  `issste` varchar(5) DEFAULT NULL,
  `seguropopular` varchar(5) DEFAULT NULL,
  `imss` varchar(5) DEFAULT NULL,
  `hospitales_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tiposeguros`
--

INSERT INTO `tiposeguros` (`id`, `issstecali`, `issste`, `seguropopular`, `imss`, `hospitales_id`) VALUES
(18, 'si', 'si', 'si', 'si', 10),
(19, 'si', 'si', 'si', 'si', 11),
(20, 'si', 'si', 'si', 'si', 12),
(22, 'si', 'si', 'si', 'si', 14),
(23, 'si', 'si', 'si', 'si', 15),
(24, 'si', 'si', 'si', 'si', 16),
(25, 'si', 'si', 'si', 'si', 17),
(26, 'si', 'si', 'si', 'si', 18),
(27, 'si', 'si', 'si', 'si', 19),
(28, 'si', 'si', 'si', 'si', 20),
(29, 'si', 'si', 'si', 'si', 21),
(30, 'si', 'si', 'si', 'si', 22),
(31, 'si', 'si', 'si', 'si', 23),
(32, 'si', 'si', 'si', 'si', 24),
(33, 'si', 'si', 'si', 'si', 25),
(34, 'si', 'si', 'si', 'si', 26),
(35, 'si', 'si', 'si', 'si', 27),
(36, 'si', 'si', 'si', 'si', 28),
(37, 'si', 'si', 'si', 'si', 29),
(38, 'si', 'si', 'si', 'si', 30),
(39, 'si', 'si', 'si', 'si', 31),
(40, 'si', 'si', 'si', 'si', 32),
(41, 'si', 'si', 'si', 'si', 33),
(42, 'si', 'si', 'si', 'si', 34),
(43, 'si', 'si', 'si', 'si', 35),
(44, 'si', 'si', 'si', 'si', 36),
(45, 'si', 'si', 'si', 'si', 37);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apaterno` varchar(50) NOT NULL,
  `amaterno` varchar(50) NOT NULL,
  `matricula` varchar(20) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `rol` enum('ADMINISTRADOR','CAPTURISTA','CAPTURISTA_HOSPITALARIO','ESTADISTA','INSTRUCTOR') NOT NULL,
  `correo` varchar(50) NOT NULL,
  `estado` enum('ACTIVO','INACTIVO') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `apaterno`, `amaterno`, `matricula`, `contrasena`, `telefono`, `rol`, `correo`, `estado`) VALUES
(21, 'MARCOS AARON', 'DIAZ', 'MARTINEZ', '1021', 'micontrasena', '5565656', 'INSTRUCTOR', 'correo@correo.com', 'INACTIVO'),
(22, 'ADMINISTRADOR', 'ADMINISTRADOR', 'ADMINISTRADOR', 'root', '7b24afc8bc80e548d66c4e7ff72171c5', '434344', 'ADMINISTRADOR', 'ADMINISTRADOR@CORREO.COM', 'ACTIVO'),
(23, 'INSTRUCTOR', 'INSTRUCTOR', 'INSTRUCTOR', 'INSTRUCTOR', 'INSTRUCTOR', '434543432', 'INSTRUCTOR', '', 'ACTIVO'),
(24, '', '', '', 'CAPTURISTA', 'CAPTURISTA', '544355', 'CAPTURISTA', '', 'ACTIVO'),
(25, '', '', '', 'ADMINISTRADOR', 'ADMINISTRADOR', '54543543', 'ADMINISTRADOR', '', 'ACTIVO'),
(26, 'JOSE', 'PEREZ', 'LEONN', 'JP10', 'jp10', '4532543', 'CAPTURISTA_HOSPITALARIO', 'CORREO@CORREO.COM', 'ACTIVO'),
(28, 'USUARIO', 'FINAL', 'FINAL', 'FINAL', 'final', '66666666', 'ADMINISTRADOR', 'FINAL@FINAL.COM', 'ACTIVO'),
(29, 'VICENTICO', 'VICENTICO', 'VICENTICO', 'VCLFC1', 'los', '43434343', 'ADMINISTRADOR', 'COREO@CORREO.COM', 'ACTIVO'),
(30, 'FLAVIO', 'FLAVIO', 'FLAVIO', 'FLFCQ', 'c5e3539121c4944f2bbe097b425ee774', '32323232', 'ADMINISTRADOR', 'CORREO@CORREO.COM', 'ACTIVO'),
(34, 'CARMELA', 'CARMELA', 'CARMELA', 'CR123', '81dc9bdb52d04dc20036dbd8313ed055', '324534543', 'CAPTURISTA', 'CARMELA@CARMELA.COM', 'ACTIVO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`idalumno`), ADD KEY `curso_idcurso` (`curso_idcurso`);

--
-- Indices de la tabla `ambulancias`
--
ALTER TABLE `ambulancias`
  ADD PRIMARY KEY (`numplacas`), ADD UNIQUE KEY `numplacas_UNIQUE` (`numplacas`), ADD KEY `fk_ambulancias_hospitales_idx` (`hospitales_id`);

--
-- Indices de la tabla `capacitaciones`
--
ALTER TABLE `capacitaciones`
  ADD PRIMARY KEY (`idcapacitaciones`), ADD KEY `tamp_idtamp` (`tamp_idtamp`);

--
-- Indices de la tabla `comunicacionestransportes`
--
ALTER TABLE `comunicacionestransportes`
  ADD PRIMARY KEY (`comunicaciontransporteid`), ADD KEY `fk_comunicacionestransportes_hospitales1_idx` (`hospitales_id`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`idcurso`), ADD KEY `fechaidentificacion_idfechaidentificacion` (`fechaidentificacion_idfechaidentificacion`), ADD KEY `lugarcurso_idlugarcurso` (`lugarcurso_idlugarcurso`);

--
-- Indices de la tabla `evidencias`
--
ALTER TABLE `evidencias`
  ADD PRIMARY KEY (`idevidencia`), ADD KEY `curso_idcurso` (`curso_idcurso`);

--
-- Indices de la tabla `fichaidentificacion`
--
ALTER TABLE `fichaidentificacion`
  ADD PRIMARY KEY (`idfichaidentificacion`), ADD KEY `usuario_idusuario` (`usuario_idusuario`);

--
-- Indices de la tabla `hospitales`
--
ALTER TABLE `hospitales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hospital_recursos`
--
ALTER TABLE `hospital_recursos`
  ADD KEY `fk_hospital_recursos_hospitales1_idx` (`hospitales_id`), ADD KEY `fk_hospital_recursos_recursos1_idx` (`recursos_recursoid`);

--
-- Indices de la tabla `instructorauxiliar`
--
ALTER TABLE `instructorauxiliar`
  ADD PRIMARY KEY (`idinstructorauxiliar`), ADD KEY `curso_idcurso` (`curso_idcurso`);

--
-- Indices de la tabla `lugarcurso`
--
ALTER TABLE `lugarcurso`
  ADD PRIMARY KEY (`idlugarcurso`);

--
-- Indices de la tabla `personales`
--
ALTER TABLE `personales`
  ADD PRIMARY KEY (`matricula`), ADD UNIQUE KEY `personalid_UNIQUE` (`matricula`), ADD KEY `fk_personales_hospitales1_idx` (`hospitales_id`);

--
-- Indices de la tabla `recursos`
--
ALTER TABLE `recursos`
  ADD PRIMARY KEY (`recursoid`), ADD KEY `fk_recursos_serviciosdisponibles1_idx` (`serviciosdisponibles_serviciodisponibleid`);

--
-- Indices de la tabla `serviciosdepersonales`
--
ALTER TABLE `serviciosdepersonales`
  ADD PRIMARY KEY (`serviciodepersonalid`), ADD KEY `fk_serviciosdepersonales_personales1_idx` (`personales_matricula`);

--
-- Indices de la tabla `serviciosdisponibles`
--
ALTER TABLE `serviciosdisponibles`
  ADD PRIMARY KEY (`serviciodisponibleid`), ADD UNIQUE KEY `serviciodisponibleid_UNIQUE` (`serviciodisponibleid`), ADD KEY `fk_serviciosdisponibles_hospitales1_idx` (`hospitales_id`);

--
-- Indices de la tabla `tamp`
--
ALTER TABLE `tamp`
  ADD PRIMARY KEY (`idtamp`), ADD KEY `usuario_idusuario` (`usuario_idusuario`);

--
-- Indices de la tabla `tiposeguros`
--
ALTER TABLE `tiposeguros`
  ADD PRIMARY KEY (`id`), ADD KEY `fk_tiposeguros_hospitales1_idx` (`hospitales_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`), ADD UNIQUE KEY `matricula` (`matricula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `idalumno` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `capacitaciones`
--
ALTER TABLE `capacitaciones`
  MODIFY `idcapacitaciones` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `comunicacionestransportes`
--
ALTER TABLE `comunicacionestransportes`
  MODIFY `comunicaciontransporteid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `idcurso` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `evidencias`
--
ALTER TABLE `evidencias`
  MODIFY `idevidencia` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `fichaidentificacion`
--
ALTER TABLE `fichaidentificacion`
  MODIFY `idfichaidentificacion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `hospitales`
--
ALTER TABLE `hospitales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT de la tabla `instructorauxiliar`
--
ALTER TABLE `instructorauxiliar`
  MODIFY `idinstructorauxiliar` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `lugarcurso`
--
ALTER TABLE `lugarcurso`
  MODIFY `idlugarcurso` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT de la tabla `recursos`
--
ALTER TABLE `recursos`
  MODIFY `recursoid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `serviciosdepersonales`
--
ALTER TABLE `serviciosdepersonales`
  MODIFY `serviciodepersonalid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `tamp`
--
ALTER TABLE `tamp`
  MODIFY `idtamp` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `tiposeguros`
--
ALTER TABLE `tiposeguros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`curso_idcurso`) REFERENCES `curso` (`idcurso`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ambulancias`
--
ALTER TABLE `ambulancias`
ADD CONSTRAINT `fk_ambulancias_hospitales` FOREIGN KEY (`hospitales_id`) REFERENCES `hospitales` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `capacitaciones`
--
ALTER TABLE `capacitaciones`
ADD CONSTRAINT `capacitaciones_ibfk_1` FOREIGN KEY (`tamp_idtamp`) REFERENCES `tamp` (`idtamp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `hospital_recursos`
--
ALTER TABLE `hospital_recursos`
ADD CONSTRAINT `hospital_recursos_ibfk_1` FOREIGN KEY (`hospitales_id`) REFERENCES `hospitales` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `hospital_recursos_ibfk_2` FOREIGN KEY (`recursos_recursoid`) REFERENCES `recursos` (`recursoid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `personales`
--
ALTER TABLE `personales`
ADD CONSTRAINT `personales_ibfk_1` FOREIGN KEY (`hospitales_id`) REFERENCES `hospitales` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `recursos`
--
ALTER TABLE `recursos`
ADD CONSTRAINT `recursos_ibfk_1` FOREIGN KEY (`serviciosdisponibles_serviciodisponibleid`) REFERENCES `serviciosdisponibles` (`serviciodisponibleid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `serviciosdepersonales`
--
ALTER TABLE `serviciosdepersonales`
ADD CONSTRAINT `serviciosdepersonales_ibfk_1` FOREIGN KEY (`personales_matricula`) REFERENCES `personales` (`matricula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `serviciosdisponibles`
--
ALTER TABLE `serviciosdisponibles`
ADD CONSTRAINT `serviciosdisponibles_ibfk_1` FOREIGN KEY (`hospitales_id`) REFERENCES `hospitales` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tiposeguros`
--
ALTER TABLE `tiposeguros`
ADD CONSTRAINT `fk_tiposeguros_hospitales1` FOREIGN KEY (`hospitales_id`) REFERENCES `hospitales` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
