-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-05-2016 a las 02:25:44
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_gym`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accesos`
--

CREATE TABLE IF NOT EXISTS `accesos` (
  `identificacion` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `accesos`
--

INSERT INTO `accesos` (`identificacion`, `usuario`, `contrasena`, `tipo`) VALUES
(1030645751, 'leonardo', '12345', 1),
(1070955024, 'Greicce', 'greicce', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercicios`
--

CREATE TABLE IF NOT EXISTS `ejercicios` (
  `id` int(11) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `nombre_ejercicio` varchar(100) NOT NULL,
  `Tiempo` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ejercicios`
--

INSERT INTO `ejercicios` (`id`, `tipo`, `nombre_ejercicio`, `Tiempo`) VALUES
(12, 'Pierna', 'Sentadilla', 20),
(13, 'pierna', 'prensa de 45°', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercicios_usuario`
--

CREATE TABLE IF NOT EXISTS `ejercicios_usuario` (
  `id` int(11) NOT NULL,
  `fk_usuario` int(11) NOT NULL,
  `fk_ejercicio` varchar(100) NOT NULL,
  `fk_ejercicio_tipo` varchar(100) NOT NULL,
  `repeticion` int(11) NOT NULL,
  `serie` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ejercicios_usuario`
--

INSERT INTO `ejercicios_usuario` (`id`, `fk_usuario`, `fk_ejercicio`, `fk_ejercicio_tipo`, `repeticion`, `serie`) VALUES
(16, 1030645751, 'Pierna', 'Sentadilla', 15, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `cedula` int(11) NOT NULL,
  `primerNombre` varchar(100) NOT NULL,
  `segundoNombre` varchar(100) NOT NULL,
  `primerApellido` varchar(100) NOT NULL,
  `segundoApellido` varchar(100) NOT NULL,
  `edad` varchar(10) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `altura` float NOT NULL,
  `peso` int(11) NOT NULL,
  `objetivo` varchar(100) NOT NULL,
  `horas` int(11) NOT NULL,
  `imc` float NOT NULL,
  `observaciones` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`cedula`, `primerNombre`, `segundoNombre`, `primerApellido`, `segundoApellido`, `edad`, `genero`, `altura`, `peso`, `objetivo`, `horas`, `imc`, `observaciones`) VALUES
(121323, 'asdas', 'adad', 'asdas', 'dasd', '12', 'Femenino', 1.7, 50, 'Bajar de peso', 2, 17.301, 'asdhasd'),
(987654321, 'pepito', ' el gato', 'Perez', 'lopez', '28', 'Masculino', 1.8, 75, 'Bajar de peso', 1, 23.1481, 'NO TIENE PROBLEMAS PARA REALIZAR EJERCICIOS'),
(1030645751, 'leonardo', 'sebastian', 'ruiz', 'rodriguez', '21', '----Genero----', 1.7, 58, '--Actividad--', 2, 20.0692, 'no hay observaciones'),
(1070955024, 'Greicce', 'Johana', 'Hincapie', 'Rodriguez', '26', 'Femenino', 1.54, 55, 'Subir de peso', 2, 23.1911, 'xxx'),
(1234567890, 'Jesica', 'mariana', 'Alba', 'roble', '28', 'Femenino', 1.63, 58, 'Subir de peso', 1, 21.83, 'no hay observaciones');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accesos`
--
ALTER TABLE `accesos`
  ADD PRIMARY KEY (`identificacion`);

--
-- Indices de la tabla `ejercicios`
--
ALTER TABLE `ejercicios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipo` (`tipo`),
  ADD KEY `nombre_ejercicio` (`nombre_ejercicio`);

--
-- Indices de la tabla `ejercicios_usuario`
--
ALTER TABLE `ejercicios_usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuario` (`fk_usuario`),
  ADD KEY `fk_ejercicio` (`fk_ejercicio`),
  ADD KEY `fk_ejercicio_tipo` (`fk_ejercicio_tipo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cedula`),
  ADD KEY `cedula` (`cedula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ejercicios`
--
ALTER TABLE `ejercicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `ejercicios_usuario`
--
ALTER TABLE `ejercicios_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ejercicios_usuario`
--
ALTER TABLE `ejercicios_usuario`
  ADD CONSTRAINT `ejercicios_usuario_ibfk_1` FOREIGN KEY (`fk_usuario`) REFERENCES `usuarios` (`cedula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ejercicios_usuario_ibfk_2` FOREIGN KEY (`fk_ejercicio`) REFERENCES `ejercicios` (`tipo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ejercicios_usuario_ibfk_3` FOREIGN KEY (`fk_ejercicio_tipo`) REFERENCES `ejercicios` (`nombre_ejercicio`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
