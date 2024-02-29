-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-03-2023 a las 21:00:42
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atributos`
--

CREATE TABLE `atributos` (
  `idAtributos` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `valor` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idClientes` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `sexo` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idClientes`, `nombre`, `email`, `edad`, `sexo`) VALUES
(2, 'Pedro', 'pedro@gmail.com', 25, 'H'),
(4, 'Barbara', 'barbara@gmail.com', 21, 'M'),
(12, 'alvaro', 'alvaro@gmail.com', 24, 'H'),
(16, 'alvaro', 'alvaro@gmail.com', 24, 'H'),
(17, 'alvaro', 'alvaro@gmail.com', 24, 'H'),
(19, 'alvaro bbb', 'alvarasdfasdfo0@gmail.com', 92, 'H'),
(22, 'alvaro3', 'alvaro3@gmail.com', 3, 'M'),
(26, 'alvaro7', 'alvaro7@gmail.com', 56, 'M'),
(27, 'alvaro8', 'alvaro8@gmail.com', 100, 'H'),
(28, 'alvaro9', 'alvaro9@gmail.com', 100, 'M'),
(29, 'alvaro0', 'alvaro0@gmail.com', 1, 'M'),
(30, 'alvaro1', 'alvaro1@gmail.com', 47, 'H'),
(31, 'alvaro2', 'alvaro2@gmail.com', 77, 'H'),
(32, 'alvaro3', 'alvaro3@gmail.com', 10, 'H'),
(33, 'alvaro4', 'alvaro4@gmail.com', 91, 'H'),
(34, 'alvaro5', 'alvaro5@gmail.com', 52, 'M'),
(35, 'alvaro6', 'alvaro6@gmail.com', 92, 'M'),
(36, 'alvaro7', 'alvaro7@gmail.com', 56, 'M'),
(37, 'alvaro8', 'alvaro8@gmail.com', 89, 'H'),
(38, 'alvaro9', 'alvaro9@gmail.com', 39, 'H'),
(39, 'alvaro0', 'alvaro0@gmail.com', 3, 'M'),
(40, 'alvaro1', 'alvaro1@gmail.com', 113, 'H'),
(41, 'alvaro2', 'alvaro2@gmail.com', 80, 'M'),
(42, 'alvaro3', 'alvaro3@gmail.com', 41, 'H'),
(43, 'alvaro4', 'alvaro4@gmail.com', 47, 'M'),
(44, 'alvaro5', 'alvaro5@gmail.com', 82, 'H'),
(45, 'alvaro6', 'alvaro6@gmail.com', 118, 'M'),
(46, 'alvaro7', 'alvaro7@gmail.com', 38, 'M'),
(47, 'alvaro8', 'alvaro8@gmail.com', 13, 'M'),
(48, 'alvaro9', 'alvaro9@gmail.com', 63, 'M'),
(49, 'alvaro0', 'alvaro0@gmail.com', 34, 'M'),
(50, 'alvaro1', 'alvaro1@gmail.com', 34, 'H'),
(51, 'alvaro2', 'alvaro2@gmail.com', 114, 'M'),
(52, 'alvaro3', 'alvaro3@gmail.com', 92, 'H'),
(53, 'alvaro4', 'alvaro4@gmail.com', 52, 'M'),
(54, 'alvaro5', 'alvaro5@gmail.com', 117, 'M'),
(55, 'alvaro6', 'alvaro6@gmail.com', 17, 'M'),
(56, 'alvaro7', 'alvaro7@gmail.com', 117, 'M'),
(57, 'alvaro8', 'alvaro8@gmail.com', 30, 'M'),
(58, 'alvaro9', 'alvaro9@gmail.com', 106, 'H'),
(59, 'alvaro0', 'alvaro0@gmail.com', 22, 'M'),
(60, 'alvaro1', 'alvaro1@gmail.com', 98, 'H'),
(61, 'alvaro2', 'alvaro2@gmail.com', 53, 'M'),
(62, 'alvaro3', 'alvaro3@gmail.com', 99, 'H'),
(63, 'alvaro4', 'alvaro4@gmail.com', 33, 'H'),
(64, 'alvaro5', 'alvaro5@gmail.com', 77, 'H'),
(65, 'alvaro6', 'alvaro6@gmail.com', 59, 'M'),
(66, 'alvaro7', 'alvaro7@gmail.com', 30, 'M'),
(67, 'alvaro8', 'alvaro8@gmail.com', 47, 'M'),
(68, 'alvaro9', 'alvaro9@gmail.com', 90, 'H'),
(69, 'alvaro0', 'alvaro0@gmail.com', 17, 'M'),
(70, 'alvaro1', 'alvaro1@gmail.com', 90, 'H'),
(71, 'alvaro2', 'alvaro2@gmail.com', 81, 'H'),
(72, 'alvaro3', 'alvaro3@gmail.com', 108, 'M'),
(73, 'alvaro4', 'alvaro4@gmail.com', 22, 'M'),
(74, 'alvaro5', 'alvaro5@gmail.com', 63, 'M'),
(75, 'alvaro6', 'alvaro6@gmail.com', 69, 'H'),
(76, 'alvaro7', 'alvaro7@gmail.com', 108, 'M'),
(77, 'alvaro8', 'alvaro8@gmail.com', 26, 'M'),
(78, 'alvaro9', 'alvaro9@gmail.com', 14, 'M'),
(79, 'alvaro0', 'alvaro0@gmail.com', 91, 'H'),
(80, 'alvaro1', 'alvaro1@gmail.com', 38, 'M'),
(81, 'alvaro2', 'alvaro2@gmail.com', 92, 'M'),
(82, 'alvaro3', 'alvaro3@gmail.com', 32, 'M'),
(83, 'alvaro4', 'alvaro4@gmail.com', 27, 'M'),
(84, 'alvaro5', 'alvaro5@gmail.com', 79, 'M'),
(85, 'alvaro6', 'alvaro6@gmail.com', 11, 'M'),
(86, 'alvaro7', 'alvaro7@gmail.com', 62, 'M'),
(87, 'alvaro8', 'alvaro8@gmail.com', 115, 'H'),
(88, 'alvaro9', 'alvaro9@gmail.com', 40, 'M'),
(89, 'alvaro0', 'alvaro0@gmail.com', 38, 'H'),
(90, 'alvaro1', 'alvaro1@gmail.com', 96, 'H'),
(91, 'alvaro2', 'alvaro2@gmail.com', 95, 'M'),
(92, 'alvaro3', 'alvaro3@gmail.com', 27, 'H'),
(93, 'alvaro4', 'alvaro4@gmail.com', 79, 'H'),
(94, 'alvaro5', 'alvaro5@gmail.com', 114, 'H'),
(95, 'alvaro6', 'alvaro6@gmail.com', 100, 'M'),
(96, 'alvaro7', 'alvaro7@gmail.com', 30, 'H'),
(97, 'alvaro8', 'alvaro8@gmail.com', 97, 'M'),
(98, 'alvaro9', 'alvaro9@gmail.com', 54, 'H'),
(99, 'alvaro0', 'alvaro0@gmail.com', 117, 'H'),
(100, 'alvaro1', 'alvaro1@gmail.com', 93, 'M'),
(101, 'alvaro2', 'alvaro2@gmail.com', 105, 'M'),
(102, 'alvaro3', 'alvaro3@gmail.com', 4, 'M'),
(103, 'alvaro4', 'alvaro4@gmail.com', 30, 'H'),
(104, 'alvaro5', 'alvaro5@gmail.com', 1, 'M'),
(105, 'alvaro6', 'alvaro6@gmail.com', 81, 'M'),
(106, 'alvaro7', 'alvaro7@gmail.com', 84, 'H'),
(107, 'alvaro8', 'alvaro8@gmail.com', 4, 'M'),
(108, 'alvaro9', 'alvaro9@gmail.com', 52, 'H'),
(109, 'alvaro0', 'alvaro0@gmail.com', 19, 'H'),
(110, 'alvaro1', 'alvaro1@gmail.com', 1, 'M'),
(111, 'alvaro2', 'alvaro2@gmail.com', 36, 'M'),
(112, 'alvaro3', 'alvaro3@gmail.com', 104, 'M'),
(113, 'alvaro4', 'alvaro4@gmail.com', 78, 'H'),
(114, 'alvaro5', 'alvaro5@gmail.com', 77, 'H'),
(115, 'alvaro6', 'alvaro6@gmail.com', 108, 'H'),
(116, 'alvaro7', 'alvaro7@gmail.com', 18, 'M'),
(117, 'alvaro8', 'alvaro8@gmail.com', 90, 'M'),
(118, 'alvaro9', 'alvaro9@gmail.com', 97, 'H'),
(119, 'alvaro0', 'alvaro0@gmail.com', 74, 'M'),
(120, 'alvaro1', 'alvaro1@gmail.com', 26, 'H'),
(121, 'alvaro2', 'alvaro2@gmail.com', 108, 'M'),
(122, 'alvaro3', 'alvaro3@gmail.com', 97, 'H'),
(123, 'alvaro4', 'alvaro4@gmail.com', 15, 'M'),
(124, 'alvaro5', 'alvaro5@gmail.com', 38, 'M'),
(125, 'alvaro6', 'alvaro6@gmail.com', 86, 'M'),
(126, 'alvaro7', 'alvaro7@gmail.com', 93, 'H'),
(127, 'alvaro8', 'alvaro8@gmail.com', 76, 'M'),
(128, 'alvaro9', 'alvaro9@gmail.com', 68, 'H'),
(129, 'alvaro0', 'alvaro0@gmail.com', 24, 'H'),
(130, 'alvaro1', 'alvaro1@gmail.com', 37, 'M'),
(131, 'alvaro2', 'alvaro2@gmail.com', 105, 'H'),
(132, 'alvaro3', 'alvaro3@gmail.com', 69, 'M'),
(133, 'alvaro4', 'alvaro4@gmail.com', 53, 'H'),
(134, 'alvaro5', 'alvaro5@gmail.com', 27, 'H'),
(135, 'alvaro6', 'alvaro6@gmail.com', 36, 'M'),
(136, 'alvaro7', 'alvaro7@gmail.com', 107, 'H'),
(137, 'alvaro8', 'alvaro8@gmail.com', 17, 'H'),
(138, 'alvaro9', 'alvaro9@gmail.com', 6, 'M'),
(139, 'alvaro0', 'alvaro0@gmail.com', 65, 'H'),
(140, 'alvaro1', 'alvaro1@gmail.com', 3, 'M'),
(141, 'alvaro2', 'alvaro2@gmail.com', 39, 'H'),
(142, 'alvaro3', 'alvaro3@gmail.com', 52, 'H'),
(143, 'alvaro4', 'alvaro4@gmail.com', 17, 'H'),
(144, 'alvaro5', 'alvaro5@gmail.com', 48, 'H'),
(145, 'alvaro6', 'alvaro6@gmail.com', 86, 'H'),
(146, 'alvaro7', 'alvaro7@gmail.com', 87, 'M'),
(147, 'alvaro8', 'alvaro8@gmail.com', 23, 'M'),
(148, 'alvaro9', 'alvaro9@gmail.com', 21, 'H'),
(149, 'alvaro0', 'alvaro0@gmail.com', 86, 'H'),
(150, 'alvaro1', 'alvaro1@gmail.com', 69, 'H'),
(151, 'alvaro2', 'alvaro2@gmail.com', 61, 'M'),
(152, 'alvaro3', 'alvaro3@gmail.com', 85, 'H'),
(153, 'alvaro4', 'alvaro4@gmail.com', 104, 'M'),
(154, 'alvaro5', 'alvaro5@gmail.com', 113, 'M'),
(155, 'alvaro6', 'alvaro6@gmail.com', 21, 'H'),
(156, 'alvaro7', 'alvaro7@gmail.com', 28, 'M'),
(157, 'alvaro8', 'alvaro8@gmail.com', 114, 'M'),
(158, 'alvaro9', 'alvaro9@gmail.com', 29, 'H'),
(159, 'alvaro0', 'alvaro0@gmail.com', 85, 'H'),
(160, 'alvaro1', 'alvaro1@gmail.com', 68, 'H'),
(161, 'alvaro2', 'alvaro2@gmail.com', 15, 'H'),
(162, 'alvaro3', 'alvaro3@gmail.com', 40, 'H'),
(163, 'alvaro4', 'alvaro4@gmail.com', 80, 'H'),
(164, 'alvaro5', 'alvaro5@gmail.com', 92, 'H'),
(165, 'alvaro6', 'alvaro6@gmail.com', 117, 'H'),
(166, 'alvaro7', 'alvaro7@gmail.com', 103, 'H'),
(167, 'alvaro8', 'alvaro8@gmail.com', 65, 'H'),
(168, 'alvaro9', 'alvaro9@gmail.com', 61, 'M'),
(169, 'alvaro0', 'alvaro0@gmail.com', 52, 'M'),
(170, 'alvaro1', 'alvaro1@gmail.com', 8, 'M'),
(171, 'alvaro2', 'alvaro2@gmail.com', 92, 'H'),
(172, 'alvaro3', 'alvaro3@gmail.com', 12, 'H'),
(173, 'alvaro4', 'alvaro4@gmail.com', 45, 'M'),
(174, 'alvaro5', 'alvaro5@gmail.com', 53, 'M'),
(175, 'alvaro6', 'alvaro6@gmail.com', 49, 'M'),
(176, 'alvaro7', 'alvaro7@gmail.com', 58, 'H'),
(177, 'alvaro8', 'alvaro8@gmail.com', 28, 'M'),
(178, 'alvaro9', 'alvaro9@gmail.com', 105, 'H'),
(179, 'alvaro0', 'alvaro0@gmail.com', 113, 'H'),
(180, 'alvaro1', 'alvaro1@gmail.com', 14, 'M'),
(181, 'alvaro2', 'alvaro2@gmail.com', 49, 'H'),
(182, 'alvaro3', 'alvaro3@gmail.com', 117, 'M'),
(183, 'alvaro4', 'alvaro4@gmail.com', 71, 'M'),
(184, 'alvaro5', 'alvaro5@gmail.com', 61, 'M'),
(185, 'alvaro6', 'alvaro6@gmail.com', 16, 'M'),
(186, 'alvaro7', 'alvaro7@gmail.com', 10, 'H'),
(187, 'alvaro8', 'alvaro8@gmail.com', 34, 'M'),
(188, 'alvaro9', 'alvaro9@gmail.com', 16, 'M'),
(189, 'Maximo', 'max@gemail.com', 19, 'H');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes_has_direccion`
--

CREATE TABLE `clientes_has_direccion` (
  `Clientes_idClientes` int(11) NOT NULL,
  `Direccion_idDireccion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `idDireccion` int(11) NOT NULL,
  `calle` varchar(45) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `provincia` varchar(45) DEFAULT NULL,
  `codigoPostal` int(11) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------
-- Crear tabla color
CREATE TABLE `color` (
  `idColor` int(11) NOT NULL AUTO_INCREMENT,
  `codhex` varchar(7) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idColor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Crear tabla categoria
CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `idCatPadre` int(11) DEFAULT NULL,
  PRIMARY KEY (`idCategoria`),
  CONSTRAINT `fk_categoria_categoria` FOREIGN KEY (`idCatPadre`) REFERENCES `categoria` (`idCategoria`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `Clientes_idClientes` int(11) NOT NULL,
  `Productos_idProductos` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `fechaPago` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProductos` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `peso` int(11) DEFAULT NULL,
  `tamano` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- Agregar columna idColor a la tabla productos
ALTER TABLE `productos`
  ADD COLUMN `idColor` int(11) DEFAULT NULL AFTER `precio`;

-- Agregar columna idCategoria a la tabla productos
ALTER TABLE `productos`
  ADD COLUMN `idCategoria` int(11) DEFAULT NULL AFTER `idColor`;

-- Agregar clave foránea idColor a la tabla productos
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_productos_color` FOREIGN KEY (`idColor`) REFERENCES `color` (`idColor`) ON DELETE CASCADE ON UPDATE CASCADE;

-- Agregar clave foránea idCategoria a la tabla productos
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_productos_categoria` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`) ON DELETE CASCADE ON UPDATE CASCADE;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_has_atributos`
--

CREATE TABLE `productos_has_atributos` (
  `Productos_idProductos` int(11) NOT NULL,
  `Atributos_idAtributos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `sexo` varchar(1) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `salt` varchar(16) DEFAULT NULL,
  `activo` tinyint(4) DEFAULT NULL,
  `codActivacion` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `atributos`
--
ALTER TABLE `atributos`
  ADD PRIMARY KEY (`idAtributos`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idClientes`);

--
-- Indices de la tabla `clientes_has_direccion`
--
ALTER TABLE `clientes_has_direccion`
  ADD PRIMARY KEY (`Clientes_idClientes`,`Direccion_idDireccion`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`idDireccion`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`Clientes_idClientes`,`Productos_idProductos`),
  ADD KEY `fk_Clientes_has_Productos_Productos1` (`Productos_idProductos`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProductos`);

--
-- Indices de la tabla `productos_has_atributos`
--
ALTER TABLE `productos_has_atributos`
  ADD PRIMARY KEY (`Productos_idProductos`,`Atributos_idAtributos`),
  ADD KEY `fk_Productos_has_Atributos_Atributos1` (`Atributos_idAtributos`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idClientes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `fk_Clientes_has_Productos_Productos1` FOREIGN KEY (`Productos_idProductos`) REFERENCES `productos` (`idProductos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos_has_atributos`
--
ALTER TABLE `productos_has_atributos`
  ADD CONSTRAINT `fk_Productos_has_Atributos_Atributos1` FOREIGN KEY (`Atributos_idAtributos`) REFERENCES `atributos` (`idAtributos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Productos_has_Atributos_Productos1` FOREIGN KEY (`Productos_idProductos`) REFERENCES `productos` (`idProductos`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
