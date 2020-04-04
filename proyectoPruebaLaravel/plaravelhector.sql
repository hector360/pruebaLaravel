-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-04-2020 a las 22:51:16
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `plaravelhector`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `IdCliente` int(11) NOT NULL,
  `Nombre` varchar(255) DEFAULT NULL,
  `Apellido` varchar(255) DEFAULT NULL,
  `CantidadAdulto` int(11) DEFAULT NULL,
  `CantidadBoy` int(11) DEFAULT NULL,
  `FechaCreacion` varchar(255) DEFAULT NULL,
  `NumTarjeta` varchar(255) DEFAULT NULL,
  `FechaExp` int(11) DEFAULT NULL,
  `Cvv` int(11) DEFAULT NULL,
  `NumReservacion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`IdCliente`, `Nombre`, `Apellido`, `CantidadAdulto`, `CantidadBoy`, `FechaCreacion`, `NumTarjeta`, `FechaExp`, `Cvv`, `NumReservacion`) VALUES
(1, 'pablo', 'Sierra', 2, 0, '2020-04-04', '4569852365478956', 325, 447, 'pablo11Sierra'),
(2, 'Hector', 'Cardenas', 2, 1, '2020-04-04', '4455632562356487', 325, 448, 'Hector10Cardenas'),
(3, 'Hector', 'Cardenas', 2, 1, '2020-04-04', '4455632562356487', 325, 448, 'Hector15Cardenas'),
(4, 'Sebastian', 'Gomez', 4, 2, '2020-04-04', '4455696585659587', 12020, 447, 'Sebastian6Gomez'),
(5, 'Sebastian', 'Gomez', 4, 2, '2020-04-04', '4455696585659587', 12020, 447, 'Sebastian13Gomez'),
(6, 'Sebastian', 'Gomez', 4, 2, '2020-04-04', '4455696585659587', 12020, 447, 'Sebastian7Gomez'),
(7, 'Sebastian', 'Gomez', 4, 2, '2020-04-04', '4455696585659587', 12020, 447, 'Sebastian11Gomez'),
(8, 'Sebastian', 'Gomez', 4, 2, '2020-04-04', '4455696585659587', 12020, 447, 'Sebastian7Gomez'),
(9, 'Sebastian', 'Gomez', 4, 2, '2020-04-04', '4455696585659587', 12020, 447, 'Seb5Gom'),
(10, 'Sebastian', 'Gomez', 4, 2, '2020-04-04', '4455696585659587', 12020, 447, 'Seb14Gom'),
(11, 'Sebastian', 'Gomez', 4, 2, '2020-04-04', '4455696585659587', 12020, 447, 'Seb9Gom'),
(12, 'Sebastian', 'Gomez', 4, 2, '2020-04-04', '4455696585659587', 12020, 447, 'Seb7Gom'),
(13, 'Sebastian', 'Gomez', 4, 2, '2020-04-04', '4455696585659587', 12020, 447, 'Seb12Gom'),
(14, 'Veronica', 'Martinez', 7, 4, '2020-05-05', '4789541236585214', 62021, 448, 'Ver8Mar'),
(15, 'Emilia', 'Quijano', 2, 1, '2020-02-07', '14414141414141414', 22020, 114, 'Emi13Qui'),
(16, 'Emilia', 'Quijano', 2, 1, '2020-02-07', '14414141414141414', 22020, 114, 'Emi7Qui');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`IdCliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `IdCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
