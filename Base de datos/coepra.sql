-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2015 a las 06:22:05
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `coeprafinal`
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
  `correo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambulancia`
--

CREATE TABLE IF NOT EXISTS `ambulancia` (
  `ambulanciaid` int(10) unsigned NOT NULL,
  `comentarios` varchar(140) DEFAULT NULL,
  `modelo` varchar(40) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `numeconomico` varchar(50) NOT NULL,
  `numplacas` varchar(50) NOT NULL,
  `tiposervicio` varchar(70) NOT NULL,
  `año` varchar(40) NOT NULL,
  `telefono1` varchar(50) NOT NULL,
  `telefono2` varchar(50) DEFAULT NULL,
  `foto` varchar(300) DEFAULT NULL,
  `hospitales_hospitalid` int(10) unsigned NOT NULL,
  `hospitales_tiposeguros_tiposeguroid` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `capacitaciones`
--

INSERT INTO `capacitaciones` (`idcapacitaciones`, `tamp_idtamp`, `rcp`, `acls`, `prntraumaetm`, `phtls`, `peep`, `pals`, `nals`, `empact`, `amls`, `fsc`, `otros`) VALUES
(10, 24, 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'TENGO OTRAS COSAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificacionhospital`
--

CREATE TABLE IF NOT EXISTS `clasificacionhospital` (
  `niveloperacion` varchar(40) DEFAULT NULL,
  `serviciourgencias` varchar(50) DEFAULT NULL,
  `medicinacritica` varchar(60) DEFAULT NULL,
  `cuidadoscoronarios` varchar(50) DEFAULT NULL,
  `cuidadosintensivos` varchar(50) DEFAULT NULL,
  `ucipolitraumatizados` varchar(40) DEFAULT NULL,
  `personales_personalid` int(10) unsigned NOT NULL,
  `responsables_responsableid` int(10) unsigned NOT NULL,
  `serviciourgencias_serviciourgenciaid` int(10) unsigned NOT NULL,
  `serviciosdepersonales_serviciodepersonalid` int(10) unsigned NOT NULL,
  `comunicacionestransportes_comunicaciontransporteid` int(10) unsigned NOT NULL,
  `serviciosdisponibles_serviciodisponibleid` int(10) unsigned NOT NULL,
  `hospitales_hospitalid` int(10) unsigned NOT NULL,
  `hospitales_tiposeguros_tiposeguroid` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunicacionestransportes`
--

CREATE TABLE IF NOT EXISTS `comunicacionestransportes` (
  `comunicaciontransporteid` int(10) unsigned NOT NULL,
  `helipuerto` varchar(80) DEFAULT NULL,
  `ambulancia` varchar(80) DEFAULT NULL,
  `radiotelefonia` varchar(80) DEFAULT NULL,
  `radiocomunicacion` varchar(80) DEFAULT NULL
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hospitales`
--

CREATE TABLE IF NOT EXISTS `hospitales` (
  `hospitalid` int(10) unsigned NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `calle` varchar(90) NOT NULL,
  `numero` varchar(50) NOT NULL,
  `colonia` varchar(50) NOT NULL,
  `codigopostal` varchar(50) NOT NULL,
  `delegacion` varchar(200) NOT NULL,
  `cuidad` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `telefono2` varchar(50) DEFAULT NULL,
  `municipio` varchar(20) NOT NULL,
  `nivel` varchar(50) NOT NULL,
  `fax` varchar(80) DEFAULT NULL,
  `horariofax` varchar(50) DEFAULT NULL,
  `radiotelefonico` varchar(40) DEFAULT NULL,
  `tiposeguros_tiposeguroid` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personales`
--

CREATE TABLE IF NOT EXISTS `personales` (
  `personalid` int(10) unsigned NOT NULL,
  `cargo` enum('instructor principal','instructor adjunto','director','director medico','subdirector','jefe de division') NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `apaterno` varchar(80) NOT NULL,
  `amaterno` varchar(80) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `telefono2` varchar(50) DEFAULT NULL,
  `ext` varchar(40) NOT NULL,
  `turno` varchar(20) NOT NULL,
  `dias` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `responsables`
--

CREATE TABLE IF NOT EXISTS `responsables` (
  `responsableid` int(10) unsigned NOT NULL,
  `servicio` varchar(80) NOT NULL,
  `piso` varchar(20) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `apaterno` varchar(80) NOT NULL,
  `amaterno` varchar(80) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `telefono2` varchar(50) DEFAULT NULL,
  `ext` varchar(50) NOT NULL,
  `turno` varchar(20) NOT NULL,
  `dias` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `serviciosdepersonales`
--

CREATE TABLE IF NOT EXISTS `serviciosdepersonales` (
  `serviciodepersonalid` int(10) unsigned NOT NULL,
  `medicosatls` varchar(80) DEFAULT NULL,
  `cud` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `serviciosdisponibles`
--

CREATE TABLE IF NOT EXISTS `serviciosdisponibles` (
  `serviciodisponibleid` int(10) unsigned NOT NULL,
  `traumamuscoesqueletico` varchar(80) DEFAULT NULL,
  `quemados` varchar(80) DEFAULT NULL,
  `neurocirugia` varchar(80) DEFAULT NULL,
  `cirugiatoracica` varchar(80) DEFAULT NULL,
  `raquimedular` varchar(80) DEFAULT NULL,
  `unidadcuidadosintensivos` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `serviciourgencias`
--

CREATE TABLE IF NOT EXISTS `serviciourgencias` (
  `serviciourgenciaid` int(10) unsigned NOT NULL,
  `tipoencargado` enum('jefe','encargado') NOT NULL,
  `dias` varchar(50) NOT NULL,
  `turno` varchar(50) NOT NULL,
  `ext` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `telefono2` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tamp`
--

CREATE TABLE IF NOT EXISTS `tamp` (
  `idtamp` int(11) NOT NULL,
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
  `usuario_idusuario` int(11) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tamp`
--

INSERT INTO `tamp` (`idtamp`, `jurisdiccion`, `nombre`, `apaterno`, `amaterno`, `sexo`, `fechanacimiento`, `escolaridad`, `nivel`, `direccion`, `municipio`, `telefono1`, `correo`, `telefono2`, `TAMP`, `asociacionservicio`, `asociacioncurso`, `fechacurso`, `experiencia`, `usuario_idusuario`, `fecha`) VALUES
(24, 'J2', 'JOEL', 'PALAFOX', 'RODRIGUEZ', 'MASCULINO', '2015-12-31', 'UNIVERSIDAD', 'AVANZADO', 'CALLE DOMICILIO PARTICULAR', 'TIJUANA', '616161616', 'CORREO@CORREO.COM', '76363636', 'REMUNERADO', 'EMPRESA ', 'CRUZ ROJA', '0000-00-00', '2', NULL, '2015-12-04 05:33:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposeguros`
--

CREATE TABLE IF NOT EXISTS `tiposeguros` (
  `tiposeguroid` int(10) unsigned NOT NULL,
  `issstecali` varchar(20) DEFAULT NULL,
  `issste` varchar(20) DEFAULT NULL,
  `seguropopular` varchar(20) DEFAULT NULL,
  `imss` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `imagen` varchar(100) NOT NULL,
  `rol` enum('ADMINISTRADOR','CAPTURISTA','CAPTURISTA_HOSPITALARIO','ESTADISTA','INSTRUCTOR') NOT NULL,
  `correo` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `apaterno`, `amaterno`, `matricula`, `contrasena`, `imagen`, `rol`, `correo`) VALUES
(21, 'MARCOS AARON', 'DIAZ', 'MARTINEZ', '1021', 'micontrasena', '', 'INSTRUCTOR', 'correo@correo.com'),
(22, 'ADMINISTRADOR', '', '', 'root', 'toor', '', 'ADMINISTRADOR', ''),
(23, '', '', '', 'INSTRUCTOR', 'INSTRUCTOR', '', 'INSTRUCTOR', ''),
(24, '', '', '', 'CAPTURISTA', 'CAPTURISTA', '', 'CAPTURISTA', ''),
(25, '', '', '', 'ADMINISTRADOR', 'ADMINISTRADOR', '', 'ADMINISTRADOR', ''),
(26, 'JOSE', 'PEREZ', 'LEONN', 'JP10', 'jp10', '', 'CAPTURISTA_HOSPITALARIO', 'CORREO@CORREO.COM'),
(27, 'RAY', 'PARRA', 'GALAVIZ', 'RP10', 'pass', '', 'INSTRUCTOR', 'CORREO@CORREO.COM');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`idalumno`), ADD KEY `curso_idcurso` (`curso_idcurso`);

--
-- Indices de la tabla `ambulancia`
--
ALTER TABLE `ambulancia`
  ADD PRIMARY KEY (`ambulanciaid`,`hospitales_hospitalid`,`hospitales_tiposeguros_tiposeguroid`), ADD KEY `fk_ambulancia_hospitales1_idx` (`hospitales_hospitalid`,`hospitales_tiposeguros_tiposeguroid`);

--
-- Indices de la tabla `capacitaciones`
--
ALTER TABLE `capacitaciones`
  ADD PRIMARY KEY (`idcapacitaciones`), ADD KEY `tamp_idtamp` (`tamp_idtamp`);

--
-- Indices de la tabla `clasificacionhospital`
--
ALTER TABLE `clasificacionhospital`
  ADD PRIMARY KEY (`personales_personalid`,`responsables_responsableid`,`serviciourgencias_serviciourgenciaid`,`serviciosdepersonales_serviciodepersonalid`,`comunicacionestransportes_comunicaciontransporteid`,`serviciosdisponibles_serviciodisponibleid`,`hospitales_hospitalid`,`hospitales_tiposeguros_tiposeguroid`), ADD KEY `fk_clasificacionhospital_responsables1_idx` (`responsables_responsableid`), ADD KEY `fk_clasificacionhospital_serviciourgencias1_idx` (`serviciourgencias_serviciourgenciaid`), ADD KEY `fk_clasificacionhospital_serviciosdepersonales1_idx` (`serviciosdepersonales_serviciodepersonalid`), ADD KEY `fk_clasificacionhospital_comunicacionestransportes1_idx` (`comunicacionestransportes_comunicaciontransporteid`), ADD KEY `fk_clasificacionhospital_serviciosdisponibles1_idx` (`serviciosdisponibles_serviciodisponibleid`), ADD KEY `fk_clasificacionhospital_hospitales1_idx` (`hospitales_hospitalid`,`hospitales_tiposeguros_tiposeguroid`);

--
-- Indices de la tabla `comunicacionestransportes`
--
ALTER TABLE `comunicacionestransportes`
  ADD PRIMARY KEY (`comunicaciontransporteid`);

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
  ADD PRIMARY KEY (`hospitalid`,`tiposeguros_tiposeguroid`), ADD KEY `fk_hospitales_tiposeguros_idx` (`tiposeguros_tiposeguroid`);

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
  ADD PRIMARY KEY (`personalid`);

--
-- Indices de la tabla `responsables`
--
ALTER TABLE `responsables`
  ADD PRIMARY KEY (`responsableid`);

--
-- Indices de la tabla `serviciosdepersonales`
--
ALTER TABLE `serviciosdepersonales`
  ADD PRIMARY KEY (`serviciodepersonalid`);

--
-- Indices de la tabla `serviciosdisponibles`
--
ALTER TABLE `serviciosdisponibles`
  ADD PRIMARY KEY (`serviciodisponibleid`);

--
-- Indices de la tabla `serviciourgencias`
--
ALTER TABLE `serviciourgencias`
  ADD PRIMARY KEY (`serviciourgenciaid`);

--
-- Indices de la tabla `tamp`
--
ALTER TABLE `tamp`
  ADD PRIMARY KEY (`idtamp`), ADD KEY `usuario_idusuario` (`usuario_idusuario`);

--
-- Indices de la tabla `tiposeguros`
--
ALTER TABLE `tiposeguros`
  ADD PRIMARY KEY (`tiposeguroid`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `idalumno` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ambulancia`
--
ALTER TABLE `ambulancia`
  MODIFY `ambulanciaid` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `capacitaciones`
--
ALTER TABLE `capacitaciones`
  MODIFY `idcapacitaciones` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `comunicacionestransportes`
--
ALTER TABLE `comunicacionestransportes`
  MODIFY `comunicaciontransporteid` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `idcurso` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `evidencias`
--
ALTER TABLE `evidencias`
  MODIFY `idevidencia` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `fichaidentificacion`
--
ALTER TABLE `fichaidentificacion`
  MODIFY `idfichaidentificacion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `hospitales`
--
ALTER TABLE `hospitales`
  MODIFY `hospitalid` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `instructorauxiliar`
--
ALTER TABLE `instructorauxiliar`
  MODIFY `idinstructorauxiliar` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `lugarcurso`
--
ALTER TABLE `lugarcurso`
  MODIFY `idlugarcurso` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `personales`
--
ALTER TABLE `personales`
  MODIFY `personalid` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `responsables`
--
ALTER TABLE `responsables`
  MODIFY `responsableid` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `serviciosdepersonales`
--
ALTER TABLE `serviciosdepersonales`
  MODIFY `serviciodepersonalid` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `serviciosdisponibles`
--
ALTER TABLE `serviciosdisponibles`
  MODIFY `serviciodisponibleid` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `serviciourgencias`
--
ALTER TABLE `serviciourgencias`
  MODIFY `serviciourgenciaid` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tamp`
--
ALTER TABLE `tamp`
  MODIFY `idtamp` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `tiposeguros`
--
ALTER TABLE `tiposeguros`
  MODIFY `tiposeguroid` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`curso_idcurso`) REFERENCES `curso` (`idcurso`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ambulancia`
--
ALTER TABLE `ambulancia`
ADD CONSTRAINT `fk_ambulancia_hospitales1` FOREIGN KEY (`hospitales_hospitalid`, `hospitales_tiposeguros_tiposeguroid`) REFERENCES `hospitales` (`hospitalid`, `tiposeguros_tiposeguroid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `capacitaciones`
--
ALTER TABLE `capacitaciones`
ADD CONSTRAINT `capacitaciones_ibfk_1` FOREIGN KEY (`tamp_idtamp`) REFERENCES `tamp` (`idtamp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `clasificacionhospital`
--
ALTER TABLE `clasificacionhospital`
ADD CONSTRAINT `fk_clasificacionhospital_comunicacionestransportes1` FOREIGN KEY (`comunicacionestransportes_comunicaciontransporteid`) REFERENCES `comunicacionestransportes` (`comunicaciontransporteid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_clasificacionhospital_hospitales1` FOREIGN KEY (`hospitales_hospitalid`, `hospitales_tiposeguros_tiposeguroid`) REFERENCES `hospitales` (`hospitalid`, `tiposeguros_tiposeguroid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_clasificacionhospital_personales1` FOREIGN KEY (`personales_personalid`) REFERENCES `personales` (`personalid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_clasificacionhospital_responsables1` FOREIGN KEY (`responsables_responsableid`) REFERENCES `responsables` (`responsableid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_clasificacionhospital_serviciosdepersonales1` FOREIGN KEY (`serviciosdepersonales_serviciodepersonalid`) REFERENCES `serviciosdepersonales` (`serviciodepersonalid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_clasificacionhospital_serviciosdisponibles1` FOREIGN KEY (`serviciosdisponibles_serviciodisponibleid`) REFERENCES `serviciosdisponibles` (`serviciodisponibleid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_clasificacionhospital_serviciourgencias1` FOREIGN KEY (`serviciourgencias_serviciourgenciaid`) REFERENCES `serviciourgencias` (`serviciourgenciaid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
ADD CONSTRAINT `curso_ibfk_1` FOREIGN KEY (`fechaidentificacion_idfechaidentificacion`) REFERENCES `fichaidentificacion` (`idfichaidentificacion`),
ADD CONSTRAINT `curso_ibfk_2` FOREIGN KEY (`lugarcurso_idlugarcurso`) REFERENCES `lugarcurso` (`idlugarcurso`);

--
-- Filtros para la tabla `evidencias`
--
ALTER TABLE `evidencias`
ADD CONSTRAINT `evidencias_ibfk_1` FOREIGN KEY (`curso_idcurso`) REFERENCES `curso` (`idcurso`);

--
-- Filtros para la tabla `fichaidentificacion`
--
ALTER TABLE `fichaidentificacion`
ADD CONSTRAINT `fichaidentificacion_ibfk_1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `hospitales`
--
ALTER TABLE `hospitales`
ADD CONSTRAINT `fk_hospitales_tiposeguros` FOREIGN KEY (`tiposeguros_tiposeguroid`) REFERENCES `tiposeguros` (`tiposeguroid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `instructorauxiliar`
--
ALTER TABLE `instructorauxiliar`
ADD CONSTRAINT `instructorauxiliar_ibfk_1` FOREIGN KEY (`curso_idcurso`) REFERENCES `curso` (`idcurso`);

--
-- Filtros para la tabla `tamp`
--
ALTER TABLE `tamp`
ADD CONSTRAINT `tamp_ibfk_1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
