-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-06-2016 a las 08:19:43
-- Versión del servidor: 5.5.49-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `DB`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `user` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `sisop` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `marca` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `model` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `screen` int COLLATE utf8_spanish_ci NOT NULL,
  `sty` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `repan` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `pro` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `core` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `speed` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `birthdate` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `country` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `comment` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `urlimg` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `antutu` int COLLATE utf8_spanish_ci NOT NULL,
  `cober` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `fav`boolean COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`user`,`sisop`,`marca`,`model`,`screen`,`sty`,`repan`,`pro`,`core`,`speed`, `birthdate`, `country`, `comment`,`urlimg`,`antutu`,`cober`,`fav`) VALUES
('ancoca','Android','marca','galaxy','5','IPS','320 x 480','snapdragon','5','2,4', '19/07/1993', 'Francia', 'Welcome to this page','https://d2giyh01gjb6fi.cloudfront.net/phone_front/0001/08/thumb_7881_phone_front_big.jpeg','50000','2G',true),
('daurgil','Android','marca2','galaxy','5','IPS','320 x 480','snapdragon','4','3,1', '06/06/1990', 'EspaÃ±a', 'Hoal mundo','https://d2giyh01gjb6fi.cloudfront.net/phone_front/0001/35/thumb_34632_phone_front_big.jpeg','400000','3G',false),
('usuario','Windows Phone','marca3','galaxy','5','320 x 480','IPS','snapdragon','6','2,1', '16/05/1980', 'EspaÃ±a', 'Adios mundo','https://d2giyh01gjb6fi.cloudfront.net/phone_front/0001/67/thumb_66416_phone_front_big.jpeg','10','3G',true);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
