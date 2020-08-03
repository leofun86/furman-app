-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 03-08-2020 a las 21:35:33
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id2311096_base`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abril`
--

CREATE TABLE `abril` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `lugar` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `empresa` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tramite` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comentario` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `honorarios` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `timbres` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `multas` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `boletos` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agosto`
--

CREATE TABLE `agosto` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `lugar` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `empresa` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tramite` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comentario` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `honorarios` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timbres` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `multas` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `boletos` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agregar_dia`
--

CREATE TABLE `agregar_dia` (
  `id` int(11) NOT NULL,
  `lugar` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `empresa` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `tramite` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diciembre`
--

CREATE TABLE `diciembre` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `lugar` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `empresa` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tramite` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comentario` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `honorarios` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `timbres` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `multas` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `boletos` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enero`
--

CREATE TABLE `enero` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `lugar` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `empresa` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tramite` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comentario` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `honorarios` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `timbres` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `multas` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `boletos` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `enero`
--

INSERT INTO `enero` (`id`, `fecha`, `lugar`, `empresa`, `tramite`, `comentario`, `honorarios`, `timbres`, `multas`, `boletos`) VALUES
(71, '2019-01-14', 'DGI', 'Química Aplicada', 'Inscripción', '', '150', '340', '', '38'),
(72, '2019-01-14', 'OTRO', 'C. Noble', 'Entrega de sobre', 'Entrega en FOCER', '150', '', '', '38'),
(73, '2019-01-14', 'DR. MAZZA', 'José Vianna', 'Retirar sobres', '', '150', '', '', '38'),
(74, '2019-01-07', 'DGI', 'Doriler', 'Consulta', 'Solicitar prórroga cert. único', '150', '', '', '38'),
(75, '2019-01-08', 'DGI', 'Doriler', 'Copia 2015 convenios', '', '150', '', '', '38'),
(76, '2019-01-08', 'DGI', 'Doriler', 'Declaraciones juradas X2', '', '150', '', '', ''),
(77, '2019-01-08', 'DGI', 'Doriler', 'Levantar suspensiones', '', '150', '', '', ''),
(78, '2019-01-08', 'DGI', 'Doriler', 'Renovación certificado. único', '', '150', '', '', ''),
(79, '2019-01-10', 'CBH', 'José Vianna', 'Entrega sobre', '', '150', '', '', '38'),
(80, '2019-01-10', 'OTRO', 'José Vianna', 'Partida defunción', '', '150', '', '128', '38'),
(81, '2019-01-16', 'OTRO', 'José Vianna', 'Partida divorcio', '', '150', '', '', '38'),
(82, '2019-01-17', 'DGI', 'Química Aplicada', 'Consulta', 'Consulta en Ventanilla Única', '150', '', '', '38'),
(83, '2019-01-18', 'DGI', 'Ipnl', 'Cambio domicilio', 'Cambio domicilio de Laura Martinez', '150', '170', '', '38'),
(84, '2019-01-22', 'DGI', 'Alsi ltda', 'Autorizar crédito', 'En Cede', '150', '', '', '16.5'),
(85, '2019-01-22', 'DGI', 'Coraldot', 'Cambio de imputación', '', '150', '170', '', ''),
(86, '2019-01-22', 'OTRO', 'Ipnl', 'Entregar documentación', '', '150', '', '', '16.5'),
(87, '2019-01-23', 'DGI', 'Alsi ltda', 'Autorizar  crédito', '', '150', '', '', '16.5'),
(88, '2019-01-23', 'DGI', 'Alsi ltda', 'Crédito', 'Pago por error', '150', '170', '15', ''),
(89, '2019-07-03', 'DGI', 'Doriler', 'De ¡claración jurada', 'Ninguno', '150', '140', '300', '16.5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `febrero`
--

CREATE TABLE `febrero` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `lugar` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `empresa` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tramite` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comentario` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `honorarios` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `timbres` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `multas` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `boletos` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `julio`
--

CREATE TABLE `julio` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `lugar` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `empresa` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tramite` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comentario` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `honorarios` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `timbres` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `multas` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `boletos` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `julio`
--

INSERT INTO `julio` (`id`, `fecha`, `lugar`, `empresa`, `tramite`, `comentario`, `honorarios`, `timbres`, `multas`, `boletos`) VALUES
(1, '2019-07-03', 'BPS', 'Doriler', 'Declaración Jurada', 'Ninguno', '150', '140', '300', '16.5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `junio`
--

CREATE TABLE `junio` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `lugar` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `empresa` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tramite` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comentario` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `honorarios` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timbres` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `multas` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `boletos` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `junio`
--

INSERT INTO `junio` (`id`, `fecha`, `lugar`, `empresa`, `tramite`, `comentario`, `honorarios`, `timbres`, `multas`, `boletos`) VALUES
(51, '2018-06-29', 'DGI', 'Os Penedos', 'Declaración jurada x2', '', '120', '320', '', ''),
(52, '2018-06-29', 'ABITAB', 'Coraldot', 'Declaración jurada', '', '120', '160', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `mail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `mail`, `pass`, `tipo`) VALUES
(1, 'furmanyasoc@gmail.com', 'elosojope', 'contador'),
(2, 'admin', 'contrasenia1986', 'gestor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marzo`
--

CREATE TABLE `marzo` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `lugar` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `empresa` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tramite` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comentario` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `honorarios` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `timbres` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `multas` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `boletos` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mayo`
--

CREATE TABLE `mayo` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `lugar` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `empresa` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tramite` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comentario` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `honorarios` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `timbres` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `multas` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `boletos` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noviembre`
--

CREATE TABLE `noviembre` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `lugar` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `empresa` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tramite` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comentario` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `honorarios` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timbres` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `multas` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `boletos` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `octubre`
--

CREATE TABLE `octubre` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `lugar` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `empresa` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tramite` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comentario` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `honorarios` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timbres` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `multas` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `boletos` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `setiembre`
--

CREATE TABLE `setiembre` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `lugar` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `empresa` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tramite` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comentario` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `honorarios` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timbres` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `multas` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `boletos` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `abril`
--
ALTER TABLE `abril`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `agosto`
--
ALTER TABLE `agosto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `agregar_dia`
--
ALTER TABLE `agregar_dia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `diciembre`
--
ALTER TABLE `diciembre`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `enero`
--
ALTER TABLE `enero`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `febrero`
--
ALTER TABLE `febrero`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `julio`
--
ALTER TABLE `julio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `junio`
--
ALTER TABLE `junio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `marzo`
--
ALTER TABLE `marzo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mayo`
--
ALTER TABLE `mayo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noviembre`
--
ALTER TABLE `noviembre`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `octubre`
--
ALTER TABLE `octubre`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `setiembre`
--
ALTER TABLE `setiembre`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `abril`
--
ALTER TABLE `abril`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `agosto`
--
ALTER TABLE `agosto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `agregar_dia`
--
ALTER TABLE `agregar_dia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `diciembre`
--
ALTER TABLE `diciembre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `enero`
--
ALTER TABLE `enero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT de la tabla `febrero`
--
ALTER TABLE `febrero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `julio`
--
ALTER TABLE `julio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `junio`
--
ALTER TABLE `junio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `marzo`
--
ALTER TABLE `marzo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mayo`
--
ALTER TABLE `mayo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `noviembre`
--
ALTER TABLE `noviembre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `octubre`
--
ALTER TABLE `octubre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `setiembre`
--
ALTER TABLE `setiembre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
