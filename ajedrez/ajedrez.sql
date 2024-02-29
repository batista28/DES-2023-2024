DROP DATABASE IF EXISTS `ajedrez`;
CREATE SCHEMA `ajedrez` ;
use ajedrez;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugador`
--

CREATE TABLE jugador (
    id_jugador INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    apellido VARCHAR(255) NOT NULL,
    alias VARCHAR(255),
    email VARCHAR(255) NOT NULL,
    fecha_nacimiento DATE NOT NULL
);


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `torneo`
--

CREATE TABLE torneo (
    id_torneo INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    organizador VARCHAR(255) NOT NULL,
    categoría VARCHAR(255) NOT NULL,
    plataforma VARCHAR(255) NOT NULL
);


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participaciones`
--

CREATE TABLE participaciones (
    id_participacion INT AUTO_INCREMENT PRIMARY KEY,
    id_jugador INT,
    id_torneo INT,
    fecha DATE NOT NULL,
    resultado VARCHAR(255),
    FOREIGN KEY (id_jugador) REFERENCES jugador(id_jugador),
    FOREIGN KEY (id_torneo) REFERENCES torneo(id_torneo)
);

--
-- Volcado de datos para la tabla `jugador`
--

INSERT INTO jugador (nombre, apellido, alias, email, fecha_nacimiento) VALUES
('Nombre1', 'Apellido1', 'Alias1', 'email1@example.com', '2000-01-01'),
('Nombre2', 'Apellido2', 'Alias2', 'email2@example.com', '2000-01-01'),
('Nombre3', 'Apellido3', 'Alias3', 'email3@example.com', '2000-01-01'),
('Nombre4', 'Apellido4', 'Alias4', 'email4@example.com', '2000-01-01'),
('Nombre5', 'Apellido5', 'Alias5', 'email5@example.com', '2000-01-01'),
('Nombre6', 'Apellido6', 'Alias6', 'email6@example.com', '2000-01-01'),
('Nombre7', 'Apellido7', 'Alias7', 'email7@example.com', '2000-01-01'),
('Nombre8', 'Apellido8', 'Alias8', 'email8@example.com', '2000-01-01'),
('Nombre9', 'Apellido9', 'Alias9', 'email9@example.com', '2000-01-01'),
('Nombre10', 'Apellido10', 'Alias10', 'email10@example.com', '2000-01-01'),
('Nombre11', 'Apellido11', 'Alias11', 'email11@example.com', '2000-01-01'),
('Nombre12', 'Apellido12', 'Alias12', 'email12@example.com', '2000-01-01'),
('Nombre13', 'Apellido13', 'Alias13', 'email13@example.com', '2000-01-01'),
('Nombre14', 'Apellido14', 'Alias14', 'email14@example.com', '2000-01-01'),
('Nombre15', 'Apellido15', 'Alias15', 'email15@example.com', '2000-01-15');

--
-- Volcado de datos para la tabla `torneo`
--

INSERT INTO torneo (nombre, organizador, categoría, plataforma) VALUES
('Torneo1', 'Organizador1', 'Categoría1', 'Plataforma1'),
('Torneo2', 'Organizador2', 'Categoría2', 'Plataforma2'),
('Torneo3', 'Organizador3', 'Categoría3', 'Plataforma3'),
('Torneo4', 'Organizador4', 'Categoría4', 'Plataforma4'),
('Torneo5', 'Organizador5', 'Categoría5', 'Plataforma5'),
('Torneo6', 'Organizador6', 'Categoría6', 'Plataforma6'),
('Torneo7', 'Organizador7', 'Categoría7', 'Plataforma7'),
('Torneo8', 'Organizador8', 'Categoría8', 'Plataforma8'),
('Torneo9', 'Organizador9', 'Categoría9', 'Plataforma9'),
('Torneo10', 'Organizador10', 'Categoría10', 'Plataforma10');

--
-- Volcado de datos para la tabla `participaciones`
--

INSERT INTO participaciones (id_jugador, id_torneo, fecha, resultado) VALUES
(1, 2, '2022-02-01', 'Segundo'),
(1, 3, '2022-03-01', 'Tercero'),
(2, 1, '2022-01-02', 'Cuarto'),
(2, 2, '2022-02-02', 'Primero'),
(3, 3, '2022-03-02', 'Segundo'),
(3, 4, '2022-04-01', 'Tercero'),
(4, 1, '2022-01-03', 'Cuarto'),
(4, 5, '2022-05-01', 'Primero'),
(5, 2, '2022-02-03', 'Segundo'),
(5, 6, '2022-06-01', 'Tercero'),
(6, 3, '2022-03-03', 'Cuarto'),
(6, 4, '2022-04-02', 'Primero'),
(7, 5, '2022-05-02', 'Segundo'),
(7, 6, '2022-06-02', 'Tercero'),
(8, 4, '2022-04-03', 'Cuarto'),
(8, 7, '2022-07-01', 'Primero'),
(9, 5, '2022-05-03', 'Segundo'),
(9, 8, '2022-08-01', 'Tercero'),
(10, 6, '2022-06-03', 'Cuarto'),
(10, 7, '2022-07-02', 'Primero'),
(11, 8, '2022-08-02', 'Segundo'),
(11, 9, '2022-09-01', 'Tercero'),
(12, 7, '2022-07-03', 'Cuarto'),
(12, 10, '2022-10-01', 'Primero'),
(13, 8, '2022-08-03', 'Segundo'),
(13, 9, '2022-09-02', 'Tercero'),
(14, 10, '2022-10-02', 'Cuarto'),
(14, 1, '2022-01-04', 'Primero'),
(15, 2, '2022-02-04', 'Segundo'),
(1, 4, '2022-04-04', 'Tercero'),
(2, 5, '2022-05-04', 'Cuarto'),
(3, 6, '2022-06-04', 'Primero'),
(4, 7, '2022-07-04', 'Segundo'),
(5, 8, '2022-08-04', 'Tercero'),
(6, 9, '2022-09-03', 'Cuarto'),
(7, 10, '2022-10-03', 'Primero'),
(8, 1, '2022-01-05', 'Segundo'),
(9, 2, '2022-02-05', 'Tercero'),
(10, 3, '2022-03-04', 'Cuarto'),
(11, 4, '2022-04-05', 'Primero'),
(12, 5, '2022-05-05', 'Segundo'),
(13, 6, '2022-06-05', 'Tercero'),
(14, 7, '2022-07-05', 'Cuarto'),
(15, 8, '2022-08-05', 'Primero'),
(1, 9, '2022-09-04', 'Segundo'),
(2, 10, '2022-10-04', 'Tercero'),
(3, 1, '2022-01-06', 'Cuarto'),
(4, 2, '2022-02-06', 'Primero');




