-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-08-2020 a las 20:41:07
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `servitel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `ID` int(99) NOT NULL COMMENT 'Identificacon de registro para el cliente en el sistema',
  `IDENTIFICACION` int(11) NOT NULL COMMENT 'Documento de identificacion del cliente',
  `NOMBRE` varchar(100) NOT NULL COMMENT 'Nombre completo del cliente',
  `EMAIL` varchar(50) NOT NULL COMMENT 'Email o  direccion de correo del cliente',
  `FEC_NACIMIENTO` date NOT NULL COMMENT 'Fecha de nacimiento del cliente',
  `FEC_CREACION` date NOT NULL COMMENT 'Fecha creacion de registro',
  `ESTADO` int(11) DEFAULT NULL COMMENT 'Estado del registro 1: activo / 0: inactivo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`ID`, `IDENTIFICACION`, `NOMBRE`, `EMAIL`, `FEC_NACIMIENTO`, `FEC_CREACION`, `ESTADO`) VALUES
(1, 1022446788, 'Juan Diego Tobar Bello', 'cr7tobar64@gmail.com', '1999-11-05', '2020-08-11', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `ID` int(99) NOT NULL AUTO_INCREMENT COMMENT 'Identificacon de registro para el cliente en el sistema', AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
