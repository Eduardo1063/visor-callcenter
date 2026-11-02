-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-11-2026 a las 01:35:15
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `callcenter_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `ID_paciente` int(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `documento` int(10) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `ciudad` varchar(20) NOT NULL,
  `tipo_doc` varchar(10) NOT NULL DEFAULT 'CC',
  `fecha_nacimiento` date NOT NULL DEFAULT '1990-01-01',
  `sexo` char(1) NOT NULL DEFAULT 'M'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`ID_paciente`, `nombre`, `apellido`, `documento`, `telefono`, `ciudad`, `tipo_doc`, `fecha_nacimiento`, `sexo`) VALUES
(1, 'Maria ', 'Ruiz', 1063841826, '305961478', 'Timbio', 'CC', '1990-01-01', 'M'),
(2, 'Luis Eduardo ', 'Valencia', 1063815887, 'Ruiz', 'Timbio', 'CC', '1990-01-01', 'M'),
(3, 'Juan Camilo', 'Ruiz', 1063815888, '3125878915', 'Popayan', 'CC', '1990-01-01', 'M'),
(4, 'Carlos Andres', 'Perez', 1087814789, '311584215', 'Popayan', 'CC', '1990-01-01', 'M'),
(5, 'Yuri Alejandra', 'Muñoz', 1125614771, '322511225', 'Timbio', 'CC', '1990-01-01', 'M');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`ID_paciente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `ID_paciente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
