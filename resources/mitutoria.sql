-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-06-2017 a las 04:14:54
-- Versión del servidor: 10.1.8-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mitutoria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `alu_id` int(11) NOT NULL,
  `alu_usu_id` int(11) NOT NULL,
  `alu_inst` varchar(50) NOT NULL,
  `alu_cod_pe` varchar(50) NOT NULL,
  `alu_programa_estudio` varchar(50) NOT NULL,
  `alu_cod_mencion` varchar(50) NOT NULL,
  `alu_mencion` varchar(50) NOT NULL,
  `alu_jornada` int(11) NOT NULL,
  `alu_peec` varchar(50) NOT NULL,
  `alu_cant_ex_competencias` int(11) NOT NULL,
  `alu_cant_homologaciones` int(11) NOT NULL,
  `alu_correo_personal` varchar(50) NOT NULL,
  `alu_telefono` int(11) NOT NULL,
  `alu_celular` int(11) NOT NULL,
  `alu_fecha_nacimiento` date NOT NULL,
  `alu_edad` int(11) NOT NULL,
  `alu_sexo` int(11) NOT NULL,
  `alu_pais` varchar(50) NOT NULL,
  `alu_comuna` varchar(50) NOT NULL,
  `alu_ciudad_familia` varchar(50) NOT NULL,
  `alu_region_familia` varchar(50) NOT NULL,
  `alu_ingreso_familiar` double NOT NULL,
  `alu_direccion` varchar(50) NOT NULL,
  `alu_ciudad` varchar(50) NOT NULL,
  `alu_region` varchar(50) NOT NULL,
  `alu_plan` varchar(50) NOT NULL,
  `alu_fechamatricula` date NOT NULL,
  `alu_comunacolegio` varchar(50) NOT NULL,
  `alu_rolrbd` varchar(50) NOT NULL,
  `alu_colegio` varchar(50) NOT NULL,
  `alu_tipo_colegio` varchar(50) NOT NULL,
  `alu_otro_colegio` varchar(50) NOT NULL,
  `alu_egreso_media` varchar(50) NOT NULL,
  `alu_punaje_psu` double NOT NULL,
  `alu_ins_anterior` varchar(50) NOT NULL,
  `alu_carrera_anterior` varchar(50) NOT NULL,
  `alu_nuevo_atiguo` int(11) NOT NULL,
  `alu_semestre_ingreso` varchar(50) NOT NULL,
  `alu_reincorporado` int(11) NOT NULL,
  `alu_num_asignatura` int(11) NOT NULL,
  `alu_semestre` int(11) NOT NULL,
  `alu_pagare` double NOT NULL,
  `alu_cupones` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `ar_id` int(11) NOT NULL,
  `ar_nombre` varchar(60) NOT NULL,
  `ar_carr_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `asig_id` int(11) NOT NULL,
  `asig_cod` varchar(50) NOT NULL,
  `asig_nombre` varchar(40) NOT NULL,
  `asig_car_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion`
--

CREATE TABLE `calificacion` (
  `cal_id` int(11) NOT NULL,
  `cal_usu_id` int(11) DEFAULT NULL,
  `cal_nota` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `car_id` int(11) NOT NULL,
  `car_nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `hor_id` int(11) NOT NULL,
  `hor_dia` varchar(20) NOT NULL,
  `hor_inicio` datetime NOT NULL,
  `hor_termino` datetime NOT NULL,
  `hor_fechasis` datetime NOT NULL,
  `hor_usu_id` int(11) DEFAULT NULL,
  `hor_sala` varchar(40) NOT NULL,
  `hor_asig_id` int(11) NOT NULL,
  `hor_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista`
--

CREATE TABLE `lista` (
  `lis_id` int(11) NOT NULL,
  `lis_fecha` datetime NOT NULL,
  `lis_usu_id` int(11) DEFAULT NULL,
  `lis_usu_asistido` tinyint(4) DEFAULT NULL,
  `lis_estado` tinyint(4) DEFAULT NULL,
  `lis_comentario` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `not_id` int(11) NOT NULL,
  `not_nota` decimal(10,0) NOT NULL,
  `not_asig_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificacion`
--

CREATE TABLE `notificacion` (
  `noti_id` int(11) NOT NULL,
  `noti_usu_id` int(11) DEFAULT NULL,
  `noti_usu_id_des` int(11) DEFAULT NULL,
  `noti_desc` longtext NOT NULL,
  `noti_fecha` datetime NOT NULL,
  `noti_estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `per_id` int(11) NOT NULL,
  `per_nombre` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `per_usu_id` int(11) DEFAULT NULL,
  `perf_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutoria`
--

CREATE TABLE `tutoria` (
  `tuto_id` int(11) NOT NULL,
  `tuto_hor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usu_id` int(11) NOT NULL,
  `usu_rut` int(11) DEFAULT NULL,
  `usu_dv` int(11) DEFAULT NULL,
  `usu_pass` varchar(40) DEFAULT NULL,
  `usu_nombre` varchar(60) DEFAULT NULL,
  `usu_are_id` int(11) DEFAULT NULL,
  `usu_correo` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`alu_id`);

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`ar_id`),
  ADD KEY `ar_carr_id` (`ar_carr_id`);

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`asig_id`);

--
-- Indices de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD PRIMARY KEY (`cal_id`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`car_id`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`hor_id`);

--
-- Indices de la tabla `lista`
--
ALTER TABLE `lista`
  ADD PRIMARY KEY (`lis_id`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`not_id`);

--
-- Indices de la tabla `notificacion`
--
ALTER TABLE `notificacion`
  ADD PRIMARY KEY (`noti_id`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`per_id`);

--
-- Indices de la tabla `tutoria`
--
ALTER TABLE `tutoria`
  ADD PRIMARY KEY (`tuto_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usu_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `alu_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `ar_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  MODIFY `asig_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  MODIFY `cal_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `hor_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `lista`
--
ALTER TABLE `lista`
  MODIFY `lis_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
  MODIFY `not_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `notificacion`
--
ALTER TABLE `notificacion`
  MODIFY `noti_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `per_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tutoria`
--
ALTER TABLE `tutoria`
  MODIFY `tuto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
