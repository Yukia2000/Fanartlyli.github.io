-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-02-2019 a las 19:40:27
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fanart`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dibujo`
--

CREATE TABLE `dibujo` (
  `iddib` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `idus` int(11) NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `idgal` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `idus` int(11) NOT NULL,
  `iddib` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idus` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `pass` text NOT NULL,
  `rol` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idus`, `nombre`, `apellidos`, `usuario`, `pass`, `rol`, `email`) VALUES
(2, 'alexa', 'pestuzo gomez', 'alex456', '1234', 'usuario', 'alexa45@yahoo.com'),
(5, 'josefa', 'zasca rodriguez', 'josefita34', '2345', 'admin', 'josefita244@gmail.com'),
(6, 'antonio', 'perez medina', 'toni75', '1234', 'usuario', 'antonioperez@gmail.com'),
(7, 'denise', 'burgos garcia', 'admin', 'admin', 'admin', 'ninibur@gmail.com'),
(8, 'adrian', 'gutierrez asco', 'adri89', '1234', 'usuario', 'adri89@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dibujo`
--
ALTER TABLE `dibujo`
  ADD PRIMARY KEY (`iddib`),
  ADD KEY `idus` (`idus`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`idgal`),
  ADD KEY `galeria_ibfk_1` (`idus`),
  ADD KEY `galeria_ibfk_2` (`iddib`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idus`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `dibujo`
--
ALTER TABLE `dibujo`
  MODIFY `iddib` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `idgal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `dibujo`
--
ALTER TABLE `dibujo`
  ADD CONSTRAINT `idus` FOREIGN KEY (`idus`) REFERENCES `usuario` (`idus`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD CONSTRAINT `galeria_ibfk_1` FOREIGN KEY (`idus`) REFERENCES `usuario` (`idus`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `galeria_ibfk_2` FOREIGN KEY (`iddib`) REFERENCES `dibujo` (`iddib`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
