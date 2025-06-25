-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-06-2025 a las 20:27:22
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gonzalez_eduardo`
--
CREATE DATABASE IF NOT EXISTS `gonzalez_eduardo` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `gonzalez_eduardo`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--
-- Creación: 09-06-2025 a las 18:57:40
--

CREATE TABLE `perfiles` (
  `id_perfiles` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id_perfiles`, `descripcion`) VALUES
(1, 'admin'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--
-- Creación: 09-06-2025 a las 19:01:44
-- Última actualización: 25-06-2025 a las 18:09:49
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `direccion` varchar(70) NOT NULL,
  `codigo_postal` varchar(10) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `perfil_id` int(11) NOT NULL DEFAULT 2,
  `baja` varchar(2) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `direccion`, `codigo_postal`, `telefono`, `email`, `pass`, `perfil_id`, `baja`) VALUES
(1, 'Eduardo', 'Gonzalez', 'Mi direccion 404', '3432', '3777123456', 'eduardo@gmail.com', '$2y$10$.dWVWU5rZbzJGxMw8iO.HuoLCbIXUxW7GPIHF6TXvx54ezPPSjwqu', 1, 'NO'),
(3, 'Cambio', 'Prueba', 'prueba', '234234', '2342343243', 'prueba@prueba.com', '$2y$10$2c7ZyVtBOVStwsru7r9PsujuJbD.8HH/jZ0RRAJS84HeNmy8M150O', 2, 'NO'),
(4, 'Cliente', 'Cliente', 'direccion del cliente 123', '3432', '123456', 'cliente@cliente.com', '$2y$10$auNQYguXbmFOQZ3x9NA6KuHxlUQTdG.uUNt41V2HBwPj/otjs./lm', 2, 'NO'),
(5, 'Cliente2', 'Cleinte2', 'Corrientes 12433', '3453', '3794137462', 'cliente2@cliente.com', '$2y$10$djotkiE8opDdY3Mj4aRJ9ehHqWpRKC.8VcKxl2nPzltUOjz8WJ/F.', 2, 'NO'),
(6, 'cliente3', 'cliente3', 'Bella Vista 1245', '3432', '3777345678', 'cliente3@cliente.com', '$2y$10$AWwlpty5fBZaKK0LolpzZ.mkZ8sZdVyHss3RTPS0LR5BByidBt26m', 2, 'NO'),
(7, 'cliente4', 'cliente4', 'Goya 4321', '3400', '3777571589', 'cliente4@cliente.com', '$2y$10$Lw8wguggQiJ0pHz703Sze.Bnowdge89SnIUYKcXlfOaetDrRywTxe', 2, 'NO'),
(8, 'cliente5', 'cliente5', 'Direccion del cliente', '4533', '3482438756', 'cliente5@cliente.com', '$2y$10$YFYAH8g.QP5sURPSp9zMXONQvrYTHq6gJGSo.ggkQkmKP0e2jkpHi', 2, 'NO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id_perfiles`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id_perfiles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
