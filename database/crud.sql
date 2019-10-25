-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 25-10-2019 a las 05:36:45
-- Versión del servidor: 5.7.23
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `crud`
--
CREATE DATABASE IF NOT EXISTS `crud` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `crud`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `create_date` date NOT NULL,
  `mail` varchar(200) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `motivo_visita` varchar(200) NOT NULL,
  `telefono` varchar(200) NOT NULL,
  `comentarios` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `customers`
--

INSERT INTO `customers` (`id`, `create_date`, `mail`, `nombre`, `motivo_visita`, `telefono`, `comentarios`) VALUES
(35, '2019-10-23', 'test@test.com', 'Pepito', 'Venta', '3054348536', 'lol'),
(36, '2019-10-23', 'test@test.com', 'Mauricio', 'Alquiler', '3056098292', 'Lorem Impsut2'),
(37, '2019-10-23', 'test@test.com', 'Peter', 'Venta', '3056098292', 'Lorem Impsut'),
(38, '2019-10-23', 'test@test.com', 'Maria', 'Alquiler', '3152208654', 'LOLOLOL'),
(40, '2019-10-23', 'test@test.com', 'Cristobal', 'Compra', '3056098292', 'Lorem Impsut2'),
(41, '2019-10-23', 'mayorgajuancamilo@gmail.com', 'Simon', 'Alquiler', '3152208654', 'Lorem Impsut');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
