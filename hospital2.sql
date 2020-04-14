-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-04-2020 a las 18:44:56
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hospital2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tdefuncion`
--

CREATE TABLE `tdefuncion` (
  `Id_defuncion` int(100) NOT NULL,
  `D_nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `D_apellidos` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `D_causa` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `D_dias` int(60) NOT NULL,
  `D_medico` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `D_cirugias` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `Id_intrahospitalaria` int(100) NOT NULL,
  `Id_emergencia` int(100) NOT NULL,
  `Id_programado` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tegreso`
--

CREATE TABLE `tegreso` (
  `Id_egreso` int(11) NOT NULL,
  `Eg_nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Eg_apellidos` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Eg_estado` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `Eg_dias` int(60) NOT NULL,
  `Eg_condicion` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `Eg_recomendaciones` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `Eg_tratamiento` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Eg_medico` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Eg_cirugias` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `Id_intrahospitalario` int(100) NOT NULL,
  `Id_emergencia` int(100) NOT NULL,
  `Id_programado` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tingresoemergencia`
--

CREATE TABLE `tingresoemergencia` (
  `Id_emergencia` int(100) NOT NULL,
  `E_nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `E_apellidos` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `E_sexo` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `E_edad` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `E_nacionalidad` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `E_cedula` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `E_telefono` int(10) NOT NULL,
  `E_fechaN` date NOT NULL,
  `E_direccion` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `E_tipoSeguro` char(10) COLLATE utf8_spanish_ci NOT NULL,
  `E_afiliadoNumero` int(15) NOT NULL,
  `E_diagnoticoI` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `E_NombreE` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `E_telefonoE` int(10) NOT NULL,
  `E_horaI` time(4) NOT NULL,
  `E_fechaI` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tingresoemergencia`
--

INSERT INTO `tingresoemergencia` (`Id_emergencia`, `E_nombre`, `E_apellidos`, `E_sexo`, `E_edad`, `E_nacionalidad`, `E_cedula`, `E_telefono`, `E_fechaN`, `E_direccion`, `E_tipoSeguro`, `E_afiliadoNumero`, `E_diagnoticoI`, `E_NombreE`, `E_telefonoE`, `E_horaI`, `E_fechaI`) VALUES
(1, 'angelicavg', 'Vargas garcia', 'M', '20', 'Dominicana', '7527233838', 2147483647, '1999-11-01', 'Av Maximo Gomez', 'ARS', 2147483647, 'delicado', 'Norka', 78696696, '12:12:00.0000', '2019-01-01'),
(2, 'Angelica VG', 'Vargas garcia', 'F', '20', 'Dominicana', '7527233838', 2147483647, '1999-11-01', 'Av Maximo Gomez', 'ars', 2147483647, 'delicado', 'Norka', 78696696, '22:01:00.0000', '2019-01-01'),
(3, 'bel ', 'GARCIA', 'M', '14', 'Dominicano', '274378373', 2147483647, '2005-07-05', 'JACOBO MAJLUTA', 'ARS', 475273272, 'delicado', 'Anabel', 427837824, '12:30:00.0000', '2020-02-11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tingresointrahospitalario`
--

CREATE TABLE `tingresointrahospitalario` (
  `Id_intrahospitalario` int(100) NOT NULL,
  `I_nombre` char(25) COLLATE utf8_spanish_ci NOT NULL,
  `I_apellidos` char(30) COLLATE utf8_spanish_ci NOT NULL,
  `I_sexo` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `I_edad` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `I_nacionalidad` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `I_telefono` int(10) NOT NULL,
  `I_cedula` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `I_fechaN` date NOT NULL,
  `I_direccion` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `I_tipoSeguro` char(10) COLLATE utf8_spanish_ci NOT NULL,
  `I_afiliadoNumero` int(15) NOT NULL,
  `I_centro` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `I_dr` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `I_diagnoticoI` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `I_motivo` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `I_estado` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `I_NombreE` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `I_telefonoE` int(10) NOT NULL,
  `I_horaI` time(4) NOT NULL,
  `I_fechaI` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tingresointrahospitalario`
--

INSERT INTO `tingresointrahospitalario` (`Id_intrahospitalario`, `I_nombre`, `I_apellidos`, `I_sexo`, `I_edad`, `I_nacionalidad`, `I_telefono`, `I_cedula`, `I_fechaN`, `I_direccion`, `I_tipoSeguro`, `I_afiliadoNumero`, `I_centro`, `I_dr`, `I_diagnoticoI`, `I_motivo`, `I_estado`, `I_NombreE`, `I_telefonoE`, `I_horaI`, `I_fechaI`) VALUES
(1, 'angelica', 'Vargas garcia', 'M', '15', 'REHER', 586868, '85287323', '5258-08-08', 'JACOBO MAJLUTA', 'ARS', 85887, 'DFHBE', 'NBW4WERT', 'delicado', 'EGEHEW4H', 'DELICADO', 'Norka', 87572787, '15:12:00.0000', '2020-02-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tingresoprogramado`
--

CREATE TABLE `tingresoprogramado` (
  `Id_programado` int(100) NOT NULL,
  `P_nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `P_apellidos` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `P_sexo` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `P_edad` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `P_nacionalidad` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `P_cedula` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `P_telefono` int(20) NOT NULL,
  `P_fechaN` date NOT NULL,
  `P_direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `P_tipoSeguro` char(20) COLLATE utf8_spanish_ci NOT NULL,
  `P_afiliadoNumero` int(25) NOT NULL,
  `P_NombreE` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `P_telefonoE` int(10) NOT NULL,
  `P_horaI` time(4) NOT NULL,
  `P_fechaI` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tingresoprogramado`
--

INSERT INTO `tingresoprogramado` (`Id_programado`, `P_nombre`, `P_apellidos`, `P_sexo`, `P_edad`, `P_nacionalidad`, `P_cedula`, `P_telefono`, `P_fechaN`, `P_direccion`, `P_tipoSeguro`, `P_afiliadoNumero`, `P_NombreE`, `P_telefonoE`, `P_horaI`, `P_fechaI`) VALUES
(19, 'Ana', 'Vargas garcia', 'f', '20', 'Dominicana', '', 2147483647, '0000-00-00', 'Av Max', '0', 2147483647, 'Norka', 2147483647, '02:05:00.0000', '2019-08-19'),
(20, 'Migue Angel ', 'Cuevas R.', 'm', '23', 'Dominicano', '', 2147483647, '1996-02-15', 'Av Max', '0', 2147483647, 'Anabel', 2147483647, '05:30:00.0000', '2019-03-21'),
(21, 'Anabel', 'Vargas garcia', 'F', '14', 'Dominicana', '245613725', 1546852134, '2005-11-11', 'Av Max', 'ARS', 2147483647, 'Norka', 2147483647, '10:10:00.0000', '2020-05-11'),
(22, 'NORKA', 'GARCIA', 'M', '46', 'Dominicana', '546878524594', 2147483647, '1968-12-20', 'JACOBO MAJLUTA', 'ARS', 2147483647, 'Anabel', 2147483647, '12:12:00.0000', '2020-04-11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ttraslado`
--

CREATE TABLE `ttraslado` (
  `Id_traslado` int(100) NOT NULL,
  `T_nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `T_apeliidos` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `T_estado` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `T_dias` int(60) NOT NULL,
  `T_condicion` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `T_recomendaciones` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `T_centro` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `T_motivo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `T_medico` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `T_cirugias` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `id_intrahospitalario` int(100) NOT NULL,
  `id_emergencia` int(100) NOT NULL,
  `id_programado` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tuser`
--

CREATE TABLE `tuser` (
  `id_user` int(100) NOT NULL,
  `U_nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `U_apellidos` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `U_nivel` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `U_username` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `U_password` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tuser`
--

INSERT INTO `tuser` (`id_user`, `U_nombre`, `U_apellidos`, `U_nivel`, `U_username`, `U_password`) VALUES
(1, 'Ana Angelica', 'Vargas Garcia', 'admin', 'aavg', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tdefuncion`
--
ALTER TABLE `tdefuncion`
  ADD PRIMARY KEY (`Id_defuncion`),
  ADD KEY `Id_emergencia` (`Id_emergencia`);

--
-- Indices de la tabla `tegreso`
--
ALTER TABLE `tegreso`
  ADD PRIMARY KEY (`Id_egreso`),
  ADD KEY `Id_programado` (`Id_programado`);

--
-- Indices de la tabla `tingresoemergencia`
--
ALTER TABLE `tingresoemergencia`
  ADD PRIMARY KEY (`Id_emergencia`);

--
-- Indices de la tabla `tingresointrahospitalario`
--
ALTER TABLE `tingresointrahospitalario`
  ADD PRIMARY KEY (`Id_intrahospitalario`);

--
-- Indices de la tabla `tingresoprogramado`
--
ALTER TABLE `tingresoprogramado`
  ADD PRIMARY KEY (`Id_programado`);

--
-- Indices de la tabla `ttraslado`
--
ALTER TABLE `ttraslado`
  ADD PRIMARY KEY (`Id_traslado`),
  ADD KEY `id_intrahospitalario` (`id_intrahospitalario`);

--
-- Indices de la tabla `tuser`
--
ALTER TABLE `tuser`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tdefuncion`
--
ALTER TABLE `tdefuncion`
  MODIFY `Id_defuncion` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tegreso`
--
ALTER TABLE `tegreso`
  MODIFY `Id_egreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tingresoemergencia`
--
ALTER TABLE `tingresoemergencia`
  MODIFY `Id_emergencia` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tingresointrahospitalario`
--
ALTER TABLE `tingresointrahospitalario`
  MODIFY `Id_intrahospitalario` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tingresoprogramado`
--
ALTER TABLE `tingresoprogramado`
  MODIFY `Id_programado` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `ttraslado`
--
ALTER TABLE `ttraslado`
  MODIFY `Id_traslado` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tuser`
--
ALTER TABLE `tuser`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tdefuncion`
--
ALTER TABLE `tdefuncion`
  ADD CONSTRAINT `tdefuncion_ibfk_1` FOREIGN KEY (`Id_intrahospitalaria`) REFERENCES `tingresointrahospitalario` (`Id_intrahospitalario`),
  ADD CONSTRAINT `tdefuncion_ibfk_2` FOREIGN KEY (`Id_emergencia`) REFERENCES `tingresoemergencia` (`Id_emergencia`),
  ADD CONSTRAINT `tdefuncion_ibfk_3` FOREIGN KEY (`Id_programado`) REFERENCES `tingresoprogramado` (`Id_programado`);

--
-- Filtros para la tabla `tegreso`
--
ALTER TABLE `tegreso`
  ADD CONSTRAINT `tegreso_ibfk_1` FOREIGN KEY (`Id_emergencia`) REFERENCES `tingresoemergencia` (`Id_emergencia`),
  ADD CONSTRAINT `tegreso_ibfk_2` FOREIGN KEY (`Id_programado`) REFERENCES `tingresoprogramado` (`Id_programado`),
  ADD CONSTRAINT `tegreso_ibfk_3` FOREIGN KEY (`Id_intrahospitalario`) REFERENCES `tingresointrahospitalario` (`Id_intrahospitalario`);

--
-- Filtros para la tabla `ttraslado`
--
ALTER TABLE `ttraslado`
  ADD CONSTRAINT `ttraslado_ibfk_1` FOREIGN KEY (`id_intrahospitalario`) REFERENCES `tingresointrahospitalario` (`Id_intrahospitalario`),
  ADD CONSTRAINT `ttraslado_ibfk_2` FOREIGN KEY (`id_emergencia`) REFERENCES `tingresoemergencia` (`Id_emergencia`),
  ADD CONSTRAINT `ttraslado_ibfk_3` FOREIGN KEY (`id_programado`) REFERENCES `tingresoprogramado` (`Id_programado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
