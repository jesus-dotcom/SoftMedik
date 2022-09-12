-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-09-2022 a las 23:42:18
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ccc2021`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `idCargo` int(10) UNSIGNED NOT NULL,
  `Descrip_Cargo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`idCargo`, `Descrip_Cargo`) VALUES
(1, 'Gastroenterólogo'),
(2, 'Anestesiológo'),
(3, 'Radiológo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citaservicios`
--

CREATE TABLE `citaservicios` (
  `idCitaServicios` int(10) UNSIGNED NOT NULL,
  `Profesional_idProfesional` int(10) UNSIGNED DEFAULT NULL,
  `Paciente_idPaciente` int(10) UNSIGNED DEFAULT NULL,
  `Servicio_idServicio` int(20) UNSIGNED NOT NULL,
  `tiposervicio_idtiposervicio` varchar(200) NOT NULL,
  `Fecha_Cita` date DEFAULT NULL,
  `Hora_Cita` time DEFAULT NULL,
  `Ayuna_Cita` varchar(10) DEFAULT NULL,
  `pago` int(20) UNSIGNED DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivelisntruccion`
--

CREATE TABLE `nivelisntruccion` (
  `idNivelIsntruccion` int(10) UNSIGNED NOT NULL,
  `Descrip_Instruccion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nivelisntruccion`
--

INSERT INTO `nivelisntruccion` (`idNivelIsntruccion`, `Descrip_Instruccion`) VALUES
(1, 'Alfabeta'),
(2, 'Analfabeta'),
(3, 'Primaria'),
(4, 'Secundaria'),
(5, 'Tecnica'),
(6, 'Superior'),
(7, 'Postgrado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `idPaciente` int(10) UNSIGNED NOT NULL,
  `HistoraPaciente_idHistoraPaciente` varchar(100) DEFAULT NULL,
  `NivelIsntruccion_idNivelIsntruccion` int(10) UNSIGNED DEFAULT NULL,
  `Cedula_Paciente` varchar(200) DEFAULT NULL,
  `Nac_Paciente` varchar(20) DEFAULT NULL,
  `Nombre_Paciente` varchar(50) DEFAULT NULL,
  `Apellidos_Paciente` varchar(50) DEFAULT NULL,
  `Sexo_Paciente` varchar(20) DEFAULT NULL,
  `FecNac_Paciente` date DEFAULT NULL,
  `correo_paciente` varchar(200) DEFAULT NULL,
  `Estado_res` varchar(200) DEFAULT NULL,
  `Municipio_res` varchar(200) DEFAULT NULL,
  `Parroquia_res` varchar(200) DEFAULT NULL,
  `DirecRes_Paciente` varchar(300) DEFAULT NULL,
  `TipoLocal_Paciente` varchar(10) DEFAULT NULL,
  `TiempoRes_Paciente` int(5) UNSIGNED DEFAULT NULL,
  `Telefonos_Paciente` varchar(20) DEFAULT NULL,
  `FechaReg_Paciente` date DEFAULT NULL,
  `Ocupacion_Paciente` varchar(200) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `id_pago` int(10) UNSIGNED NOT NULL,
  `Descrip_pago` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`id_pago`, `Descrip_pago`) VALUES
(1, 50),
(2, 40);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfilesusuario`
--

CREATE TABLE `perfilesusuario` (
  `idPerfilesUsuario` int(10) UNSIGNED NOT NULL,
  `Perfil_Usuario` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `perfilesusuario`
--

INSERT INTO `perfilesusuario` (`idPerfilesUsuario`, `Perfil_Usuario`) VALUES
(1, 'administrador'),
(2, 'citas'),
(3, 'recepcion'),
(4, 'transcripcion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan_agenda`
--

CREATE TABLE `plan_agenda` (
  `idPlan_Agenda` int(10) UNSIGNED NOT NULL,
  `Servicio_idServicio` int(10) UNSIGNED NOT NULL,
  `tiposervicio_idtiposervicio` varchar(100) NOT NULL,
  `Fecha_Agenda` date DEFAULT NULL,
  `Cantidad_Agenda` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plan_agenda`
--

INSERT INTO `plan_agenda` (`idPlan_Agenda`, `Servicio_idServicio`, `tiposervicio_idtiposervicio`, `Fecha_Agenda`, `Cantidad_Agenda`) VALUES
(16, 1, 'Gastroenterologia', '2022-02-01', 16),
(17, 1, 'Higado', '2022-02-01', 7),
(18, 1, 'Vias-Biliares', '2022-02-01', 5),
(19, 1, 'Nutricion', '2022-02-01', 6),
(21, 2, 'ERCP', '2022-02-01', 10),
(22, 2, 'Diagnostica', '2022-02-01', 15),
(23, 3, 'Coloscopia', '2022-02-01', 15),
(24, 4, 'EcografÍa-Abdonal', '2022-02-01', 15),
(25, 1, 'Gastroenterologia', '2022-02-08', 20),
(26, 1, 'Higado', '2022-02-08', 7),
(27, 1, 'Vias-Biliares', '2022-02-08', 7),
(28, 1, 'Nutricion', '2022-02-08', 7),
(29, 1, 'Pre-Anestesia', '2022-02-08', 7),
(30, 2, 'ERCP', '2022-02-08', 7),
(31, 2, 'Diagnostica', '2022-02-08', 15),
(32, 3, 'Coloscopia', '2022-02-08', 15),
(33, 4, 'EcografÍa-Abdonal', '2022-02-08', 15),
(34, 1, 'Gastroenterologia', '2022-02-15', 20),
(35, 1, 'Pre-Anestesia', '2022-02-08', 7),
(36, 1, 'Higado', '2022-02-15', 7),
(37, 1, 'Vias-Biliares', '2022-02-15', 7),
(38, 1, 'Nutricion', '2022-02-07', 7),
(40, 1, 'Pre-Anestesia', '2022-02-15', 7),
(41, 2, 'ERCP', '2022-02-15', 7),
(43, 3, 'Coloscopia', '2022-02-15', 15),
(44, 2, 'Diagnostica', '2022-02-15', 15),
(45, 4, 'EcografÍa-Abdonal', '2022-02-15', 15),
(46, 1, 'Gastroenterologia', '2022-02-22', 20),
(47, 1, 'Higado', '2022-02-22', 7),
(48, 1, 'Vias-Biliares', '2022-02-22', 7),
(49, 1, 'Nutricion', '2022-02-22', 7),
(50, 1, 'Pre-Anestesia', '2022-02-22', 7),
(51, 2, 'Diagnostica', '2022-02-22', 15),
(52, 2, 'ERCP', '2022-02-22', 7),
(53, 3, 'Coloscopia', '2022-02-22', 15),
(54, 4, 'EcografÍa-Abdonal', '2022-02-22', 15),
(55, 1, 'Gastroenterologia', '2022-02-03', 18),
(56, 1, 'Higado', '2022-02-03', 7),
(57, 1, 'Vias-Biliares', '2022-02-03', 7),
(58, 1, 'Nutricion', '2022-02-03', 7),
(59, 1, 'Pre-Anestesia', '2022-02-03', 7),
(60, 2, 'ERCP', '2022-02-03', 7),
(61, 2, 'Diagnostica', '2022-02-03', 15),
(63, 3, 'Coloscopia', '2022-02-03', 15),
(64, 4, 'EcografÍa-Abdonal', '2022-02-10', 15),
(65, 1, 'Gastroenterologia', '2022-02-10', 20),
(66, 1, 'Higado', '2022-02-10', 7),
(67, 1, 'Vias-Biliares', '2022-02-10', 7),
(68, 1, 'Nutricion', '2022-02-10', 7),
(70, 1, 'Pre-Anestesia', '2022-02-10', 7),
(71, 2, 'ERCP', '2022-02-10', 7),
(72, 2, 'Diagnostica', '2022-02-10', 15),
(73, 3, 'Coloscopia', '2022-02-10', 15),
(74, 4, 'EcografÍa-Abdonal', '2022-02-10', 15),
(75, 1, 'Gastroenterologia', '2022-02-17', 15),
(76, 1, 'Higado', '2022-02-17', 7),
(77, 1, 'Vias-Biliares', '2022-02-17', 7),
(78, 1, 'Nutricion', '2022-02-17', 7),
(79, 1, 'Pre-Anestesia', '2022-02-17', 7),
(80, 2, 'ERCP', '2022-02-17', 7),
(81, 3, 'Coloscopia', '2022-02-17', 15),
(82, 4, 'EcografÍa-Abdonal', '2022-02-17', 15),
(83, 1, 'Gastroenterologia', '2022-02-24', 15),
(84, 1, 'Higado', '2022-02-24', 7),
(85, 1, 'Vias-Biliares', '2022-02-24', 7),
(86, 1, 'Nutricion', '2022-02-24', 7),
(87, 1, 'Pre-Anestesia', '2022-02-24', 7),
(88, 2, 'ERCP', '2022-02-24', 7),
(89, 2, 'Diagnostica', '2022-02-24', 15),
(90, 3, 'Coloscopia', '2022-02-24', 15),
(91, 4, 'EcografÍa-Abdonal', '2022-02-24', 15),
(92, 1, 'Gastroenterologia', '2022-02-04', 15),
(93, 1, 'Higado', '2022-02-04', 7),
(94, 1, 'Vias-Biliares', '2022-02-04', 7),
(96, 1, 'Nutricion', '2022-02-04', 7),
(97, 1, 'Pre-Anestesia', '2022-02-04', 7),
(98, 2, 'ERCP', '2022-02-04', 7),
(99, 2, 'Diagnostica', '2022-02-04', 15),
(100, 3, 'Coloscopia', '2022-02-04', 15),
(101, 4, 'EcografÍa-Abdonal', '2022-02-04', 15),
(102, 1, 'Gastroenterologia', '2022-02-11', 15),
(103, 1, 'Higado', '2022-02-11', 7),
(104, 1, 'Gastroenterologia', '2022-02-11', 15),
(105, 1, 'Higado', '2022-02-11', 7),
(106, 1, 'Vias-Biliares', '2022-02-11', 7),
(107, 1, 'Nutricion', '2022-02-11', 7),
(108, 1, 'Pre-Anestesia', '2022-02-11', 7),
(109, 2, 'ERCP', '2022-02-11', 7),
(110, 2, 'Diagnostica', '2022-02-11', 15),
(111, 3, 'Coloscopia', '2022-02-11', 15),
(112, 4, 'EcografÍa-Abdonal', '2022-02-11', 15),
(113, 1, 'Gastroenterologia', '2022-02-18', 15),
(114, 1, 'Higado', '2022-02-11', 7),
(115, 1, 'Vias-Biliares', '2022-02-11', 7),
(116, 1, 'Nutricion', '2022-02-18', 7),
(117, 1, 'Pre-Anestesia', '2022-02-18', 7),
(118, 2, 'ERCP', '2022-02-18', 7),
(119, 2, 'Diagnostica', '2022-02-18', 15),
(120, 3, 'Coloscopia', '2022-02-18', 15),
(121, 4, 'EcografÍa-Abdonal', '2022-02-18', 15),
(122, 1, 'Gastroenterologia', '2022-02-25', 15),
(123, 1, 'Higado', '2022-02-25', 7),
(124, 1, 'Vias-Biliares', '2022-02-25', 7),
(125, 1, 'Nutricion', '2022-02-25', 7),
(126, 1, 'Pre-Anestesia', '2022-02-25', 7),
(127, 2, 'ERCP', '2022-02-25', 7),
(129, 3, 'Coloscopia', '2022-02-25', 15),
(130, 2, 'Diagnostica', '2022-02-25', 15),
(131, 4, 'EcografÍa-Abdonal', '2022-02-25', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesional`
--

CREATE TABLE `profesional` (
  `idProfesional` int(10) UNSIGNED NOT NULL,
  `Cargo_idCargo` int(10) UNSIGNED NOT NULL,
  `Cedula_Profesional` int(10) UNSIGNED NOT NULL,
  `Nombre_Profesional` varchar(50) DEFAULT NULL,
  `Apellido_Profesional` varchar(50) DEFAULT NULL,
  `Telefono_Profesional` int(25) DEFAULT NULL,
  `sexo_profesional` varchar(10) DEFAULT NULL,
  `correo_profesional` varchar(200) DEFAULT NULL,
  `direccion_profesional` varchar(200) DEFAULT NULL,
  `Status_Profesional` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesional`
--

INSERT INTO `profesional` (`idProfesional`, `Cargo_idCargo`, `Cedula_Profesional`, `Nombre_Profesional`, `Apellido_Profesional`, `Telefono_Profesional`, `sexo_profesional`, `correo_profesional`, `direccion_profesional`, `Status_Profesional`) VALUES
(1, 1, 28756984, 'Maite', 'Jaimes', 2147483647, 'Femenino', 'maite@gmail.com', ' La concordia, San Cristobal, Estado Tachira ', NULL),
(4, 1, 26598741, 'jesus', 'castolini', 42564, 'Masculino', 'jesus@gmail.com', 'venezuela', NULL),
(5, 3, 2563145, 'carlos', 'uzcategui', 126547, 'Masculino', 'carlos@hotmail.com', 'venezuela', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `idServicio` int(10) UNSIGNED NOT NULL,
  `Descrip_Servicio` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`idServicio`, `Descrip_Servicio`) VALUES
(1, 'consulta'),
(2, 'endoscopia'),
(3, 'colonoscopia'),
(4, 'ecografia'),
(5, 'radiologia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `IdUsuario` int(10) UNSIGNED NOT NULL,
  `PerfilesUsuario_idPerfilesUsuario` int(10) UNSIGNED NOT NULL,
  `Cedula_Usuario` int(10) UNSIGNED DEFAULT NULL,
  `Nombre_Usuario` varchar(50) DEFAULT NULL,
  `Apellido_Usuario` varchar(50) DEFAULT NULL,
  `Nickname_Usuario` varchar(50) DEFAULT NULL,
  `Clave_Usuario` varchar(50) DEFAULT NULL,
  `Status_Usuario` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`IdUsuario`, `PerfilesUsuario_idPerfilesUsuario`, `Cedula_Usuario`, `Nombre_Usuario`, `Apellido_Usuario`, `Nickname_Usuario`, `Clave_Usuario`, `Status_Usuario`) VALUES
(1, 1, 2548, 'jesus', 'urbia', 'jesus', '123', NULL),
(2, 2, 123213, 'karla', 'monsable', 'karla', '1234', NULL),
(3, 3, 546465, 'kelly', 'jaimes', 'kelly', '12345', NULL),
(4, 4, 75624558, 'maite', 'gomez', 'maite', '123456', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`idCargo`);

--
-- Indices de la tabla `citaservicios`
--
ALTER TABLE `citaservicios`
  ADD PRIMARY KEY (`idCitaServicios`),
  ADD KEY `CitaServicios_FKIndex2` (`Profesional_idProfesional`),
  ADD KEY `Servicio_idServicio` (`Servicio_idServicio`),
  ADD KEY `tiposervicio_idtiposervicio` (`tiposervicio_idtiposervicio`),
  ADD KEY `Paciente_idPaciente` (`Paciente_idPaciente`),
  ADD KEY `pago_id` (`pago`);

--
-- Indices de la tabla `nivelisntruccion`
--
ALTER TABLE `nivelisntruccion`
  ADD PRIMARY KEY (`idNivelIsntruccion`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`idPaciente`),
  ADD KEY `Paciente_FKIndex1` (`NivelIsntruccion_idNivelIsntruccion`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`id_pago`);

--
-- Indices de la tabla `perfilesusuario`
--
ALTER TABLE `perfilesusuario`
  ADD PRIMARY KEY (`idPerfilesUsuario`);

--
-- Indices de la tabla `plan_agenda`
--
ALTER TABLE `plan_agenda`
  ADD PRIMARY KEY (`idPlan_Agenda`),
  ADD UNIQUE KEY `Plan_Agenda_FKIndex12` (`idPlan_Agenda`),
  ADD KEY `Plan_Agenda_FKIndex1` (`Servicio_idServicio`);

--
-- Indices de la tabla `profesional`
--
ALTER TABLE `profesional`
  ADD PRIMARY KEY (`idProfesional`),
  ADD KEY `Profesional_FKIndex1` (`Cargo_idCargo`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`idServicio`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IdUsuario`),
  ADD KEY `Usuario_FKIndex1` (`PerfilesUsuario_idPerfilesUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `idCargo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `citaservicios`
--
ALTER TABLE `citaservicios`
  MODIFY `idCitaServicios` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `nivelisntruccion`
--
ALTER TABLE `nivelisntruccion`
  MODIFY `idNivelIsntruccion` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `idPaciente` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `id_pago` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `perfilesusuario`
--
ALTER TABLE `perfilesusuario`
  MODIFY `idPerfilesUsuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `plan_agenda`
--
ALTER TABLE `plan_agenda`
  MODIFY `idPlan_Agenda` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT de la tabla `profesional`
--
ALTER TABLE `profesional`
  MODIFY `idProfesional` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `idServicio` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `IdUsuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citaservicios`
--
ALTER TABLE `citaservicios`
  ADD CONSTRAINT `citaservicios_ibfk_1` FOREIGN KEY (`Servicio_idServicio`) REFERENCES `servicio` (`idServicio`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `citaservicios_ibfk_3` FOREIGN KEY (`Profesional_idProfesional`) REFERENCES `profesional` (`idProfesional`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `citaservicios_ibfk_4` FOREIGN KEY (`Paciente_idPaciente`) REFERENCES `paciente` (`idPaciente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `citaservicios_ibfk_5` FOREIGN KEY (`pago`) REFERENCES `pago` (`id_pago`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `paciente_ibfk_1` FOREIGN KEY (`NivelIsntruccion_idNivelIsntruccion`) REFERENCES `nivelisntruccion` (`idNivelIsntruccion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `plan_agenda`
--
ALTER TABLE `plan_agenda`
  ADD CONSTRAINT `plan_agenda_ibfk_1` FOREIGN KEY (`Servicio_idServicio`) REFERENCES `servicio` (`idServicio`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `profesional`
--
ALTER TABLE `profesional`
  ADD CONSTRAINT `profesional_ibfk_1` FOREIGN KEY (`Cargo_idCargo`) REFERENCES `cargo` (`idCargo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`PerfilesUsuario_idPerfilesUsuario`) REFERENCES `perfilesusuario` (`idPerfilesUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
