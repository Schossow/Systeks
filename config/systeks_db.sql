-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 07-11-2020 a las 17:55:46
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `systeks_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `full_name` varchar(35) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`id`, `username`, `full_name`, `email`, `user_type`, `password`) VALUES
(6, 'AleSchossow', 'Alexandra Quezada', 'ale@gmail.com', 'regular', '$2y$10$fd9nj9fyrYfUnRI5NLrRD.DvIPBFl8hjm1FTnYC8dhEd/4jM.j98q'),
(5, 'Angelik', 'Angelik Zeballos', 'angelik@gmail.com', 'regular', '$2y$10$60OUkNKLuDnDf2.kRj2.oOrh1w.O01qgHfW5KO.KJzY2JX3kOIN/6'),
(4, 'schossow', 'ALEJANDRO QUEZADA', 'schossow.1373@gmail.com', 'principal', '$2y$10$FsZqNy5xVmH5wXx3He5jw.tHlFectxQkU9l/Q8tM39j7mgqLlLL.6'),
(7, 'efwefewf', 'eweefw efwefewf', 'efwef@vsvwv.com', 'principal', '$2y$10$aqEKvvdWMh6IYuDiP6D/8eD6.4xTI5C.d6ri.Rhr0ViViWDeMKN3i'),
(8, 'aboeo', 'fhowehf woefihwoief', 'klwkef@gmail.com', 'principal', '$2y$10$AC6R3cOY74JSME9FDQjmouH6dk7dmfqr9aPajCfyOVUb3sDCbKBQW'),
(9, 'nowehfo', 'icoe vowhfoew', 'neowei@gmail.com', 'principal', '$2y$10$JIkkDsJ3ufwvDBgXRSfifOF5oLUqcTyeSU0mE1aVpRQqeLUxHhve2'),
(10, 'fwfwe', 'efwef efwefefw', 'iuwe@gmail.com', 'regular', '$2y$10$6qZmvHcPg9VGZPCFoyVcsOI2SrQaVjA6VOKFH8xtXgsvtckBoGGny'),
(11, 'efwoef', 'iojeof jovoeivo', 'nvo@gmail.com', 'principal', '$2y$10$/AyT4dyvCn1N2.9wD7y3nO4D.dNOqrlhRZpgRUancXaJpYeWz/rwS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expenses`
--

DROP TABLE IF EXISTS `expenses`;
CREATE TABLE IF NOT EXISTS `expenses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `amount` float NOT NULL,
  `by_username` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `date_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `visibility` varchar(5) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `expenses`
--

INSERT INTO `expenses` (`id`, `name`, `description`, `amount`, `by_username`, `date`, `date_time`, `visibility`) VALUES
(1, 'b', 'Prueba', 55, 'schossow', '2020-11-07', '2020-11-07 15:50:40', 'si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `income`
--

DROP TABLE IF EXISTS `income`;
CREATE TABLE IF NOT EXISTS `income` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `amount` float NOT NULL,
  `by_username` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `date_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `visibility` varchar(5) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `income`
--

INSERT INTO `income` (`id`, `name`, `description`, `amount`, `by_username`, `date`, `date_time`, `visibility`) VALUES
(1, 'A', 'Prueba', 55, 'schossow', '2020-11-07', '2020-11-07 15:49:12', 'si');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
