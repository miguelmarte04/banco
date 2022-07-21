-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-07-2022 a las 04:20:32
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `banco`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `cedula` varchar(12) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `estado` varchar(1) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `usuario`, `cedula`, `direccion`, `pass`, `estado`) VALUES
(1, 'Pedro Antonio', 'Suarez', 'prueba', '04700051515', 'RD', '1234', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes_prestamos`
--

CREATE TABLE `solicitudes_prestamos` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `cedula` varchar(11) NOT NULL,
  `pasaporte` int(11) DEFAULT NULL,
  `tipo_tarjeta` varchar(100) NOT NULL,
  `telefono_oficiona` varchar(10) DEFAULT NULL,
  `telefono_residencial` varchar(10) DEFAULT NULL,
  `telefono_movil` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `direccion_residencia` varchar(200) NOT NULL,
  `provincia` varchar(100) NOT NULL,
  `ingresos_mensuales` int(11) NOT NULL,
  `monto_solicitado` int(11) NOT NULL,
  `destino_prestamo` varchar(100) NOT NULL,
  `tipo_credito` varchar(100) NOT NULL,
  `estado` varchar(1) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes_tarjetas`
--

CREATE TABLE `solicitudes_tarjetas` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `cedula` varchar(11) NOT NULL,
  `pasaporte` int(11) DEFAULT NULL,
  `tipo_tarjeta` varchar(100) NOT NULL,
  `telefono_oficiona` varchar(10) DEFAULT NULL,
  `telefono_residencial` varchar(10) DEFAULT NULL,
  `telefono_movil` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `direccion_residencia` varchar(200) NOT NULL,
  `estado` varchar(1) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transferencia`
--

CREATE TABLE `transferencia` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `cuenta_origen` varchar(100) NOT NULL,
  `cuenta_destino` varchar(100) NOT NULL,
  `monto` int(11) NOT NULL,
  `asunto` varchar(200) NOT NULL,
  `estado` varchar(1) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo_electronico` (`usuario`),
  ADD UNIQUE KEY `cedula` (`cedula`);

--
-- Indices de la tabla `solicitudes_prestamos`
--
ALTER TABLE `solicitudes_prestamos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `solicitudes_tarjetas`
--
ALTER TABLE `solicitudes_tarjetas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `transferencia`
--
ALTER TABLE `transferencia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `solicitudes_prestamos`
--
ALTER TABLE `solicitudes_prestamos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `solicitudes_tarjetas`
--
ALTER TABLE `solicitudes_tarjetas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `transferencia`
--
ALTER TABLE `transferencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
