-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-08-2019 a las 00:01:42
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `picaucd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descripciones_temas`
--

CREATE TABLE `descripciones_temas` (
  `ID` int(11) NOT NULL,
  `ID_titulo_descripcion` int(11) NOT NULL,
  `Descripcion` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Apellido` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Estado` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `ID` int(11) NOT NULL,
  `Ruta` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `TituloDeLeccion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `ID` int(11) NOT NULL,
  `ID_tituloDeLeccion` int(11) NOT NULL,
  `Preguntas` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_usuarios`
--

CREATE TABLE `registro_usuarios` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Apellido` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Tipo_documento` int(11) NOT NULL,
  `N_documento` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Correo` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre_usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE `respuestas` (
  `ID` int(11) NOT NULL,
  `ID_pregunta` int(11) NOT NULL,
  `Respuesta` text COLLATE utf8_spanish_ci NOT NULL,
  `correcta` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `test_realizados`
--

CREATE TABLE `test_realizados` (
  `ID` int(11) NOT NULL,
  `ID_usuario` int(11) NOT NULL,
  `ID_pregunta` int(11) NOT NULL,
  `ID_respuesta` int(11) NOT NULL,
  `Realizado` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `ID` int(11) NOT NULL,
  `Tipo_documento` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`ID`, `Tipo_documento`) VALUES
(1, 'Cédula Ciudadanía'),
(2, 'Tarjeta de Identidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titulodeleccion`
--

CREATE TABLE `titulodeleccion` (
  `ID` int(11) NOT NULL,
  `TituloDeLeccion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `verificacion_de_lecciones`
--

CREATE TABLE `verificacion_de_lecciones` (
  `ID` int(11) NOT NULL,
  `ID_suario` int(11) NOT NULL,
  `ID_tituloDeLeccion` int(11) NOT NULL,
  `ID_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `ID` int(11) NOT NULL,
  `Ruta` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `TituloDeLeccion` varchar(40) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `descripciones_temas`
--
ALTER TABLE `descripciones_temas`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_titulo_descripcion` (`ID_titulo_descripcion`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_tituloDeLeccion` (`ID_tituloDeLeccion`);

--
-- Indices de la tabla `registro_usuarios`
--
ALTER TABLE `registro_usuarios`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `registro_usuarios_ibfk_1` (`Tipo_documento`),
  ADD KEY `Estado` (`Estado`);

--
-- Indices de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_pregunta` (`ID_pregunta`);

--
-- Indices de la tabla `test_realizados`
--
ALTER TABLE `test_realizados`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_usuario` (`ID_usuario`),
  ADD KEY `ID_pregunta` (`ID_pregunta`),
  ADD KEY `ID_respuesta` (`ID_respuesta`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `titulodeleccion`
--
ALTER TABLE `titulodeleccion`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `verificacion_de_lecciones`
--
ALTER TABLE `verificacion_de_lecciones`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_suario` (`ID_suario`),
  ADD KEY `ID_estado` (`ID_estado`),
  ADD KEY `ID_tituloDeLeccion` (`ID_tituloDeLeccion`);

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `descripciones_temas`
--
ALTER TABLE `descripciones_temas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registro_usuarios`
--
ALTER TABLE `registro_usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `test_realizados`
--
ALTER TABLE `test_realizados`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `verificacion_de_lecciones`
--
ALTER TABLE `verificacion_de_lecciones`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `descripciones_temas`
--
ALTER TABLE `descripciones_temas`
  ADD CONSTRAINT `descripciones_temas_ibfk_1` FOREIGN KEY (`ID_titulo_descripcion`) REFERENCES `titulodeleccion` (`ID`);

--
-- Filtros para la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD CONSTRAINT `imagenes_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `titulodeleccion` (`ID`);

--
-- Filtros para la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD CONSTRAINT `preguntas_ibfk_1` FOREIGN KEY (`ID_tituloDeLeccion`) REFERENCES `titulodeleccion` (`ID`);

--
-- Filtros para la tabla `registro_usuarios`
--
ALTER TABLE `registro_usuarios`
  ADD CONSTRAINT `registro_usuarios_ibfk_1` FOREIGN KEY (`Tipo_documento`) REFERENCES `tipo_documento` (`ID`),
  ADD CONSTRAINT `registro_usuarios_ibfk_2` FOREIGN KEY (`Estado`) REFERENCES `estado` (`ID`);

--
-- Filtros para la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD CONSTRAINT `respuestas_ibfk_1` FOREIGN KEY (`ID_pregunta`) REFERENCES `preguntas` (`ID`);

--
-- Filtros para la tabla `test_realizados`
--
ALTER TABLE `test_realizados`
  ADD CONSTRAINT `test_realizados_ibfk_1` FOREIGN KEY (`ID_usuario`) REFERENCES `registro_usuarios` (`ID`),
  ADD CONSTRAINT `test_realizados_ibfk_2` FOREIGN KEY (`ID_pregunta`) REFERENCES `preguntas` (`ID`),
  ADD CONSTRAINT `test_realizados_ibfk_3` FOREIGN KEY (`ID_respuesta`) REFERENCES `respuestas` (`ID`);

--
-- Filtros para la tabla `titulodeleccion`
--
ALTER TABLE `titulodeleccion`
  ADD CONSTRAINT `titulodeleccion_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `videos` (`ID`);

--
-- Filtros para la tabla `verificacion_de_lecciones`
--
ALTER TABLE `verificacion_de_lecciones`
  ADD CONSTRAINT `verificacion_de_lecciones_ibfk_1` FOREIGN KEY (`ID_suario`) REFERENCES `registro_usuarios` (`ID`),
  ADD CONSTRAINT `verificacion_de_lecciones_ibfk_2` FOREIGN KEY (`ID_estado`) REFERENCES `registro_usuarios` (`Estado`),
  ADD CONSTRAINT `verificacion_de_lecciones_ibfk_3` FOREIGN KEY (`ID_tituloDeLeccion`) REFERENCES `titulodeleccion` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
