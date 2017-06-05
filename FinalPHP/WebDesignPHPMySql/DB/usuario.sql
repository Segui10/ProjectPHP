-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-06-2017 a las 21:31:02
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud_users`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `user` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `sisop` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `marca` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `model` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `screen` int(11) NOT NULL,
  `sty` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `repan` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `pro` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `core` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `speed` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `birthdate` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `country` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `comment` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `urlimg` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `antutu` int(11) NOT NULL,
  `fav` tinyint(1) NOT NULL,
  `email` varchar(500) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`user`, `sisop`, `marca`, `model`, `screen`, `sty`, `repan`, `pro`, `core`, `speed`, `birthdate`, `country`, `comment`, `urlimg`, `antutu`, `fav`, `email`) VALUES
('AI7', 'IOS', 'Apple', 'iPhone7', 5, 'LCDIPS', '720 x 1280', 'Apple', '4', '2,4', '16/06/2017', 'EspaÃ±a', 'Encontrar el mejor precio para el Apple iPhone 7 32GB no es una tarea fÃ¡cil. AquÃ­ encontrarÃ¡s donde comprar el Apple iPhone 7 32GB al mejor precio. Rastreamos constantemente los precios en mÃ¡s de 100 tiendas para que puedas encontrar la tienda de confianza con el mejor precio.', 'https://d2giyh01gjb6fi.cloudfront.net/phone_front/0001/37/thumb_36250_phone_front_big.jpeg', 178397, 1, 'firemovieapp@gmail.com'),
('ML950XL', 'Windows Phone', 'Microsoft', 'Lumia9500XL', 6, 'Amoled', '1440 x 2560', 'QualcommSnapdragon', '8', '2', '14/06/2017', 'EspaÃ±a', 'Encontrar el mejor precio para el Microsoft Lumia 950 XL Dual SIM no es una tarea fÃ¡cil. AquÃ­ encontrarÃ¡s donde comprar el Microsoft Lumia 950 XL Dual SIM al mejor precio. Rastreamos constantemente los precios en mÃ¡s de 100 tiendas para que puedas encontrar la tienda de confianza con el mejor precio.', 'https://d2giyh01gjb6fi.cloudfront.net/phone_front/0001/14/thumb_13860_phone_front_big.jpeg', 61000, 1, 'firemovieapp@gmail.com'),
('SGS8', 'Android', 'Samsung', 'GalaxyS8', 5, 'Super Amoled', '320 x 480', 'Samsung Exynos', '8', '2,5', '06/06/1990', 'EspaÃ±a', 'Encontrar el mejor precio para el Samsung Galaxy S8 4GB 64GB G950F no es una tarea fácil. Aquí encontrarás donde comprar el Samsung Galaxy S8 4GB 64GB G950F al mejor precio. Rastreamos constantemente los precios en más de 100 tiendas para que puedas encontrar la tienda de confianza con el mejor precio.', 'https://d2giyh01gjb6fi.cloudfront.net/phone_front/0001/61/thumb_60270_phone_front_big.jpeg', 175000, 1, 'firemovieapp@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
