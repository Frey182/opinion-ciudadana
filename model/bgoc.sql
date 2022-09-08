-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-09-2022 a las 14:41:02
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bgoc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barrio`
--

CREATE TABLE `barrio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `id_municipio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `barrio`
--

INSERT INTO `barrio` (`id`, `nombre`, `id_municipio`) VALUES
(1, 'barrio1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(280) NOT NULL,
  `id_usu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `discapacidad`
--

CREATE TABLE `discapacidad` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `discapacidad`
--

INSERT INTO `discapacidad` (`id`, `nombre`) VALUES
(1, 'discapacidad1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etnia`
--

CREATE TABLE `etnia` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `etnia`
--

INSERT INTO `etnia` (`id`, `nombre`) VALUES
(1, 'etnia1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`id`, `nombre`) VALUES
(1, 'municipio1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel_educativo`
--

CREATE TABLE `nivel_educativo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nivel_educativo`
--

INSERT INTO `nivel_educativo` (`id`, `nombre`) VALUES
(1, 'nivel1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE `sexo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`id`, `nombre`) VALUES
(1, 'sexo1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tema`
--

CREATE TABLE `tema` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(280) NOT NULL,
  `fkcomentario` int(11) NOT NULL,
  `fkusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_doc`
--

CREATE TABLE `tipo_doc` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_doc`
--

INSERT INTO `tipo_doc` (`id`, `nombre`) VALUES
(1, 'documento1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usu`
--

CREATE TABLE `tipo_usu` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_usu`
--

INSERT INTO `tipo_usu` (`id`, `nombre`) VALUES
(1, 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `dni` int(11) NOT NULL,
  `p_nombre` varchar(50) NOT NULL,
  `s_nombre` varchar(50) NOT NULL,
  `apellido_m` varchar(50) NOT NULL,
  `apellido_p` varchar(50) NOT NULL,
  `nacimiento` varchar(15) NOT NULL,
  `telefono` int(11) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contrasenia` varchar(50) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `internet` varchar(2) NOT NULL,
  `acceso_dispositivo` varchar(2) NOT NULL,
  `dispositivo` varchar(100) NOT NULL,
  `estrato` int(11) NOT NULL,
  `regimen` varchar(10) NOT NULL,
  `fkdiscapacidad` int(11) NOT NULL,
  `fktipo_doc` int(11) NOT NULL,
  `fktipo_usu` int(11) NOT NULL,
  `fketnia` int(11) NOT NULL,
  `fksexo` int(11) NOT NULL,
  `fknvledu` int(11) NOT NULL,
  `fkbarrio` int(11) NOT NULL,
  `fkmunicipio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`dni`, `p_nombre`, `s_nombre`, `apellido_m`, `apellido_p`, `nacimiento`, `telefono`, `correo`, `contrasenia`, `direccion`, `internet`, `acceso_dispositivo`, `dispositivo`, `estrato`, `regimen`, `fkdiscapacidad`, `fktipo_doc`, `fktipo_usu`, `fketnia`, `fksexo`, `fknvledu`, `fkbarrio`, `fkmunicipio`) VALUES
(1003315376, 'Frey ', 'Alexander', 'Carreño', 'Usuga', '2022-09-07', 1234567, 'frey@gmail.com', '123', 'micasa', 'SI', 'SI', 'Computador', 1, 'subsidiado', 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_discapacidad`
--

CREATE TABLE `usuario_discapacidad` (
  `id` int(11) NOT NULL,
  `id_discapacidad` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `barrio`
--
ALTER TABLE `barrio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_municipio` (`id_municipio`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usu` (`id_usu`);

--
-- Indices de la tabla `discapacidad`
--
ALTER TABLE `discapacidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `etnia`
--
ALTER TABLE `etnia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nivel_educativo`
--
ALTER TABLE `nivel_educativo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tema`
--
ALTER TABLE `tema`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkcomentario` (`fkcomentario`),
  ADD KEY `fkusuario` (`fkusuario`);

--
-- Indices de la tabla `tipo_doc`
--
ALTER TABLE `tipo_doc`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_usu`
--
ALTER TABLE `tipo_usu`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`dni`),
  ADD KEY `fktipo_doc` (`fktipo_doc`),
  ADD KEY `fktipo_usu` (`fktipo_usu`),
  ADD KEY `fketnia` (`fketnia`),
  ADD KEY `fksexo` (`fksexo`),
  ADD KEY `fknvledu` (`fknvledu`),
  ADD KEY `fkbarrio` (`fkbarrio`),
  ADD KEY `fkmunicipio` (`fkmunicipio`),
  ADD KEY `fkdiscapacidad` (`fkdiscapacidad`);

--
-- Indices de la tabla `usuario_discapacidad`
--
ALTER TABLE `usuario_discapacidad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_discapacidad` (`id_discapacidad`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `barrio`
--
ALTER TABLE `barrio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `discapacidad`
--
ALTER TABLE `discapacidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `etnia`
--
ALTER TABLE `etnia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `nivel_educativo`
--
ALTER TABLE `nivel_educativo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sexo`
--
ALTER TABLE `sexo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tema`
--
ALTER TABLE `tema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_doc`
--
ALTER TABLE `tipo_doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipo_usu`
--
ALTER TABLE `tipo_usu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario_discapacidad`
--
ALTER TABLE `usuario_discapacidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `barrio`
--
ALTER TABLE `barrio`
  ADD CONSTRAINT `barrio_ibfk_1` FOREIGN KEY (`id_municipio`) REFERENCES `municipio` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_usu`) REFERENCES `usuario` (`dni`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tema`
--
ALTER TABLE `tema`
  ADD CONSTRAINT `tema_ibfk_1` FOREIGN KEY (`fkcomentario`) REFERENCES `comentario` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tema_ibfk_2` FOREIGN KEY (`fkusuario`) REFERENCES `usuario` (`dni`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`fkdiscapacidad`) REFERENCES `discapacidad` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`fktipo_doc`) REFERENCES `tipo_doc` (`id`),
  ADD CONSTRAINT `usuario_ibfk_3` FOREIGN KEY (`fktipo_usu`) REFERENCES `tipo_usu` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_4` FOREIGN KEY (`fketnia`) REFERENCES `etnia` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_5` FOREIGN KEY (`fksexo`) REFERENCES `sexo` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_6` FOREIGN KEY (`fknvledu`) REFERENCES `nivel_educativo` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_7` FOREIGN KEY (`fkbarrio`) REFERENCES `barrio` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_8` FOREIGN KEY (`fkmunicipio`) REFERENCES `municipio` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
