-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
<<<<<<< HEAD
-- Tiempo de generación: 12-08-2024 a las 06:33:34
=======
-- Tiempo de generación: 07-08-2024 a las 18:28:09
>>>>>>> 6d33993d934292d9a037eaa255e8c86ba038422a
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
-- Estructura de tabla para la tabla `carrusel`
--

CREATE TABLE `carrusel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carrusel`
--

INSERT INTO `carrusel` (`id`, `img`) VALUES
(1, 'gif.gif'),
(2, './logo.jpg'),
(3, 'producto_3.jpg'),
(4, './logo.jpg'),
(5, 'producto_5.jpg'),
(6, 'producto_6.jpg'),
(7, 'producto_7.jpg'),
(8, 'producto_8.jpg'),
(9, 'producto_9.jpg'),
(10, 'producto_10.jpg');

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
<<<<<<< HEAD
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `bolivares` varchar(100) NOT NULL,
  `signo_monetario` varchar(1) NOT NULL,
  `imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `bolivares`, `signo_monetario`, `imagen`) VALUES
(1, 'colgate', 'gaboooooooo', 15.00, '', '', 'producto_1.jpg'),
(2, 'felix', 'sisiis', 6.00, '', '', 'producto_2.jpg'),
(3, 'feo', 'fdfdfd', 4.00, '', '', 'producto_3.jpg'),
(4, 'vvvvv', 'ggggg', 6.00, '', '', 'producto_4.jpg'),
(5, 'dvfddfd', 'vvvvvv', 4.00, '', '', 'producto_5.jpg'),
(6, 'jjhj', 'grrtr', 6.00, '', '', 'producto_6.jpg'),
(7, 'ggggg', 'jhjhjh', 4.00, '', '', 'producto_7.jpg'),
(8, 'xcxcxcxc', 'vvvvvvvv', 6.00, '', '', 'producto_8.jpg'),
(9, 'ghgjyy', 'hgfgfd', 4.00, '', '', 'producto_9.jpg'),
(10, 'sdsdss', 'sxzxzx', 6.00, '', '', 'producto_10.jpg');

-- --------------------------------------------------------

--
=======
>>>>>>> 6d33993d934292d9a037eaa255e8c86ba038422a
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
<<<<<<< HEAD
(1, 'Facebook', 'https://facebook.com', NULL, ''),
(2, 'Instagram', 'https://instagram.com', NULL, NULL),
(3, 'WhatsApp', 'https://wa.me/5804169055709999', NULL, '04169055705'),
(4, 'TikTok', 'https://tiktok.com', NULL, '');
=======
(1, 'Facebook', 'https://facebook.com', NULL, NULL),
(2, 'Instagram', 'https://instagram.com', NULL, NULL),
(3, 'WhatsApp', 'https://whatsapp.com', NULL, '04169055705'),
(4, 'TikTok', 'https://tiktok.com', NULL, NULL);
>>>>>>> 6d33993d934292d9a037eaa255e8c86ba038422a

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrusel`
--
ALTER TABLE `carrusel`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inicio_sesion`
--
ALTER TABLE `inicio_sesion`
  ADD PRIMARY KEY (`id`);

--
<<<<<<< HEAD
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
=======
>>>>>>> 6d33993d934292d9a037eaa255e8c86ba038422a
-- Indices de la tabla `redes_sociales`
--
ALTER TABLE `redes_sociales`
  ADD PRIMARY KEY (`id`);
<<<<<<< HEAD

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrusel`
--
ALTER TABLE `carrusel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
=======
>>>>>>> 6d33993d934292d9a037eaa255e8c86ba038422a
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
