-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-06-2024 a las 22:14:16
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
-- Base de datos: `metro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `IdComentario` int(20) NOT NULL,
  `Id_Nombre` int(20) NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`IdComentario`, `Id_Nombre`, `comentario`) VALUES
(39, 4, 'hola, probando estooo'),
(40, 4, 'aquiiii holi'),
(41, 4, 'xxxxxxxxxxxxxxxx'),
(42, 4, 'xxxxxxxxxxxxxxx'),
(43, 4, 'wwwwwwwwwwwwwww'),
(44, 4, 'qqqqqqqqqqqqqq'),
(45, 4, 'ssssssssssssssss'),
(46, 4, 'aaaaaaaaaaaaaaa'),
(47, 4, 'cccccccccccccccc'),
(48, 4, 'xxxxxxxxxxxxxxxxxxxx'),
(49, 4, 'aaaaaaaaaaaaaaaaaaaaaa'),
(50, 4, 'ssssssssssssssssssss'),
(51, 4, '222222222222222'),
(52, 5, 'zzzzzzzz'),
(53, 5, 'asdasdassasas'),
(54, 5, 'asdasdasdasd'),
(55, 5, 'asdasdasddasd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `idRegistro` int(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `contraseña` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`idRegistro`, `nombre`, `apellidos`, `usuario`, `contraseña`) VALUES
(4, 'Athina', 'Cappelletti', 'c', '123'),
(5, 'sergio', 'perez', 'seperez@gmail.com', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`IdComentario`),
  ADD KEY `fk_comentario_registro` (`Id_Nombre`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`idRegistro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `IdComentario` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `idRegistro` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `fk_comentario_registro` FOREIGN KEY (`Id_Nombre`) REFERENCES `registro` (`idRegistro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
