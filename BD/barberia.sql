-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-08-2024 a las 18:28:09
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
-- Base de datos: `barberia`
--
CREATE DATABASE IF NOT EXISTS `barberia` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `barberia`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inicio_sesion`
--

CREATE TABLE `inicio_sesion` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `clave` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `inicio_sesion`
--

INSERT INTO `inicio_sesion` (`id`, `usuario`, `clave`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes_sociales`
--

CREATE TABLE `redes_sociales` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `link` varchar(500) DEFAULT NULL,
  `mas_acciones` int(100) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `redes_sociales`
--

INSERT INTO `redes_sociales` (`id`, `nombre`, `link`, `mas_acciones`, `telefono`) VALUES
(1, 'Facebook', 'https://facebook.com', NULL, NULL),
(2, 'Instagram', 'https://instagram.com', NULL, NULL),
(3, 'WhatsApp', 'https://whatsapp.com', NULL, '04169055705'),
(4, 'TikTok', 'https://tiktok.com', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inicio_sesion`
--
ALTER TABLE `inicio_sesion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `redes_sociales`
--
ALTER TABLE `redes_sociales`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
