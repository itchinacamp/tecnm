-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-01-2021 a las 04:50:09
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `constancias`
--

CREATE TABLE `constancias` (
  `id` int(11) NOT NULL,
  `ciudadano` varchar(200) NOT NULL,
  `suscribe` varchar(200) NOT NULL,
  `alumno` varchar(200) NOT NULL,
  `matricula` int(20) DEFAULT NULL,
  `carrera` varchar(100) NOT NULL,
  `desempe` varchar(100) NOT NULL,
  `valor` double NOT NULL,
  `ciclo` varchar(20) DEFAULT NULL,
  `valorcurri` double NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `dias` int(5) DEFAULT NULL,
  `MES` varchar(20) NOT NULL,
  `anio` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `constancias`
--

INSERT INTO `constancias` (`id`, `ciudadano`, `suscribe`, `alumno`, `matricula`, `carrera`, `desempe`, `valor`, `ciclo`, `valorcurri`, `ciudad`, `dias`, `MES`, `anio`) VALUES
(2, 'DANIEL JESUS', 'DANIEL JESUS', 'DANIEL JESUS', 16830180, 'Informatica', 'BUENO', 4, 'ENE-JUN2020', 2, 'San Fransico de Campeche', 19, 'ENERO', 2021),
(3, 'IVANA', 'IVANA', 'IVANA', 21830180, 'ING INFORMATICA', 'BUENO', 4, 'ENE-JUN2020', 1, 'San Fransico de Campeche', 19, 'ENERO', 2021),
(4, 'JOSE PERALTA', 'MIRSHA', 'DANIEL JESUS PEREZ MEX', 16830180, 'ING INFORMATICA', 'BUENO', 4, 'ENE-JUN2020', 2, 'San Fransico de Campeche', 19, 'ENERO', 2021),
(5, '', '', '', 0, '', '', 0, '', 0, '', 0, '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `creditos`
--

CREATE TABLE `creditos` (
  `id` int(11) NOT NULL,
  `matricula` int(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `act` varchar(200) NOT NULL,
  `observacion` varchar(200) NOT NULL,
  `valor` varchar(50) NOT NULL,
  `desmp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `color` varchar(7) DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jefes`
--

CREATE TABLE `jefes` (
  `econo` varchar(200) NOT NULL,
  `ciencias` varchar(200) NOT NULL,
  `agrono` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_tutorias`
--

CREATE TABLE `tb_tutorias` (
  `id` int(255) NOT NULL,
  `nombres` varchar(100) DEFAULT NULL,
  `ap_paterno` varchar(100) DEFAULT NULL,
  `ap_materno` varchar(100) DEFAULT NULL,
  `numero_control` varchar(255) NOT NULL,
  `carrera` varchar(255) NOT NULL DEFAULT '',
  `estado` varchar(255) NOT NULL,
  `semestre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_tutorias`
--

INSERT INTO `tb_tutorias` (`id`, `nombres`, `ap_paterno`, `ap_materno`, `numero_control`, `carrera`, `estado`, `semestre`) VALUES
(1, 'rodrigo', 'lopez', 'martinez', '16830189', 'Ingeneria Forestal', 'Acreditado', 'Primer Semestre'),
(2, 'jorge', 'lopez', 'escamilla', '16830189', 'Ingeneria en Agronomia', 'NO Acreditado', 'Primer Semestre'),
(3, 'jorge', 'lopez', 'escamilla', '16830189', 'Ingeneria Forestal', 'Acreditado', 'Quinto Semestre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id` int(11) NOT NULL,
  `nombres` varchar(512) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `ap_paterno` varchar(512) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `ap_materno` varchar(512) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `sexo` varchar(512) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `numero_control` varchar(512) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `carrera` varchar(512) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `correo` varchar(512) COLLATE utf8mb4_spanish_ci NOT NULL,
  `estado_civil` varchar(512) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `telefono` varchar(512) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `ciudad` varchar(512) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `colonia` varchar(512) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `calle` varchar(512) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `codigo_postal` varchar(512) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `curp` varchar(512) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `fecha_nacimiento` varchar(512) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `nivel_escolar` varchar(512) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `reticula` varchar(512) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `entidad` varchar(512) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `foto_perfil` text COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `clave_oficial` varchar(512) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `contraseña` varchar(512) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `token` varchar(512) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `cargo` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `extra1` varchar(512) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `extra2` varchar(512) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `extra3` varchar(512) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `user_creacion` varchar(512) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `user_actualizacion` varchar(512) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `user_eliminacion` varchar(512) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(512) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `paterno` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `materno` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `profesion` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cubiculo` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `area` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id`, `nombres`, `ap_paterno`, `ap_materno`, `sexo`, `numero_control`, `carrera`, `correo`, `estado_civil`, `telefono`, `ciudad`, `colonia`, `calle`, `codigo_postal`, `curp`, `fecha_nacimiento`, `nivel_escolar`, `reticula`, `entidad`, `foto_perfil`, `clave_oficial`, `contraseña`, `token`, `cargo`, `extra1`, `extra2`, `extra3`, `user_creacion`, `user_actualizacion`, `user_eliminacion`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`, `nombre`, `paterno`, `materno`, `profesion`, `cubiculo`, `area`) VALUES
(2, 'DANIEL JESUS', 'PEREZ', 'MEX', 'Hombre', NULL, NULL, 'admin@gmail.com', NULL, '9811116798', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SisTECNM-2021-01-19-01-21-55_', NULL, '12345', NULL, 'Administrador', NULL, NULL, NULL, 'Administrador', NULL, NULL, '2021-01-19 01:21:55', NULL, NULL, '1', '', '', '', 'INGENIERO INFORMATICO', '78', 'INFORMATICA'),
(16, 'ivana nicole', NULL, NULL, NULL, '16830185', NULL, 'alumno@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1234', NULL, 'ALUMNO', NULL, NULL, NULL, 'ESCAMILLA', NULL, NULL, '2021-01-30 06:27:25', NULL, NULL, '1', '', '', '', '', '', ''),
(17, 'Emmanuel ', 'Escamilla', 'Moreno', 'Hombre', NULL, NULL, 'maestro@gmail.com', NULL, '981 181 8978', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SisTECNM-2021-01-30-07-05-11_', NULL, '12345', NULL, 'Maestro', NULL, NULL, NULL, 'Administrador', NULL, NULL, '2021-01-30 07:05:11', NULL, NULL, '1', '', '', '', 'INGENIERO INFORMATICO', '2', 'INFORMATICA');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `constancias`
--
ALTER TABLE `constancias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `creditos`
--
ALTER TABLE `creditos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_tutorias`
--
ALTER TABLE `tb_tutorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`correo`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `constancias`
--
ALTER TABLE `constancias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `creditos`
--
ALTER TABLE `creditos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tb_tutorias`
--
ALTER TABLE `tb_tutorias`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
