-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2019 a las 00:35:46
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

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
  `company_name` varchar(200) NOT NULL,
  `contact_name` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `observations` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `customers`
--

INSERT INTO `customers` (`id`, `create_date`, `company_name`, `contact_name`, `phone`, `mail`, `observations`) VALUES
(34, '2019-10-23', 'Text', 'sadsad', '6564486', 'sadasdas@dsadsa.asd', 'sadasdsa');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
