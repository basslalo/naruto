-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-09-2016 a las 00:23:09
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escuela`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id_alu` int(50) NOT NULL,
  `nom_alu` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ap_alu` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `am_alu` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `num_con_alu` int(20) NOT NULL,
  `curp_alu` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `edad_alu` int(100) NOT NULL,
  `nacio_alu` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `sexo_alu` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `car_alu` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `naci_alu` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `sem_alu` int(50) NOT NULL,
  `tel_casa_alu` int(20) NOT NULL,
  `tel_cel_alu` int(20) NOT NULL,
  `rfc_alu` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `calle_alu` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `num_alu` int(20) NOT NULL,
  `col_alu` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `cp_alu` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `biblioteca`
--

CREATE TABLE `biblioteca` (
  `id_bi` int(50) NOT NULL,
  `sec_bi` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `art_bi` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `enc_bi` varchar(180) COLLATE utf8_spanish_ci NOT NULL,
  `hor_bi` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `tal_bi` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `aut_bi` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `edi_bi` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `edic_bi` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `fic_bi` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `tes_bi` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `for_bi` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `gen_bi` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `rev_bi` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `per_bi` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `tel_bi` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `biblioteca`
--

INSERT INTO `biblioteca` (`id_bi`, `sec_bi`, `art_bi`, `enc_bi`, `hor_bi`, `tal_bi`, `aut_bi`, `edi_bi`, `edic_bi`, `fic_bi`, `tes_bi`, `for_bi`, `gen_bi`, `rev_bi`, `per_bi`, `tel_bi`) VALUES
(2, 'vh', 'jh', 'hv', 'jh', 'tal', 'vhj', 'vg', 'fht', 'dhf', 'dgf', 'd', 'ghd', 'fgd', 'd', 0),
(3, 'tyfecwcwc', 'ty', 'dtyewcewcw', 'fyt', 'tal', 'ru6', 'edi', 'edic', 'fic', 'tes', 'for', 'gen', 'rev', 'per', 0),
(4, 'breb', 'y', 'vjy', 'vj', 'tal', 'v', 'edi', 'edic', 'fic', 'tes', 'for', 'gen', 'rev', 'per', 0),
(5, 'prueb', 'ewfew', 'dewfecfs', 'hhv', 'tal', 'v', 'vjh', 'v', 'jhv', 'hjv', 'hjv', 'hjv', 'hj', 'vhj', 0),
(8, 'hv', 'jhvh', 'jv', 'hjv', 'tal', 'hjv', 'jh', 'vhj', 'vghc', 'hgc', 'nbc', 'm', 'vmn', 'bmn', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escuela`
--

CREATE TABLE `escuela` (
  `id_esc` int(50) NOT NULL,
  `nom_esc` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `cam_esc` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `cla_esc` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `zona_esc` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `sec_esc` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `niv_esc` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_esc` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `email_esc` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `cap_esc` longtext COLLATE utf8_spanish_ci NOT NULL,
  `pag_esc` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `red_esc` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `rfc_esc` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `cue_esc` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `calle_esc` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `nume_esc` int(10) NOT NULL,
  `col_esc` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `cp_esc` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idiomas`
--

CREATE TABLE `idiomas` (
  `id_idi` int(50) NOT NULL,
  `mat_idi` text COLLATE utf8_spanish_ci NOT NULL,
  `nivel_idi` int(20) NOT NULL,
  `dura_idi` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `clave_idi` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `maes_idi` varchar(180) COLLATE utf8_spanish_ci NOT NULL,
  `dia_idi` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `costo_idi` int(120) NOT NULL,
  `unidad_idi` int(10) NOT NULL,
  `aula_idi` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `tel_idi` int(20) NOT NULL,
  `email_idi` varchar(150) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `idiomas`
--

INSERT INTO `idiomas` (`id_idi`, `mat_idi`, `nivel_idi`, `dura_idi`, `clave_idi`, `maes_idi`, `dia_idi`, `costo_idi`, `unidad_idi`, `aula_idi`, `tel_idi`, `email_idi`) VALUES
(1, '5', 5, '5', '5', '5', '5', 5, 5, '5', 5, '5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `id_mat` int(11) NOT NULL,
  `nom_mat` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `cre_mat` int(80) NOT NULL,
  `cla_mat` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `gru_mat` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `sal_mat` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `hor_mat` varchar(80) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mobiliario`
--

CREATE TABLE `mobiliario` (
  `id_mob` int(50) NOT NULL,
  `sillas_mob` int(100) NOT NULL,
  `mesas_mob` int(100) NOT NULL,
  `eqcom_mob` int(100) NOT NULL,
  `esca_mob` int(100) NOT NULL,
  `impre_mob` int(100) NOT NULL,
  `copi_mob` int(100) NOT NULL,
  `fax_mob` int(100) NOT NULL,
  `tel_mob` int(100) NOT NULL,
  `canon_mob` int(100) NOT NULL,
  `esco_mob` int(100) NOT NULL,
  `garra_mob` int(100) NOT NULL,
  `tra_mob` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `mobiliario`
--

INSERT INTO `mobiliario` (`id_mob`, `sillas_mob`, `mesas_mob`, `eqcom_mob`, `esca_mob`, `impre_mob`, `copi_mob`, `fax_mob`, `tel_mob`, `canon_mob`, `esco_mob`, `garra_mob`, `tra_mob`) VALUES
(2, 4, 44, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(3, 5, 5, 1, 5, 531, 535, 58, 2, 5, 2, 8, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `id_pro` int(11) NOT NULL,
  `nom_pro` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `ap_pro` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `am_pro` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `dir_pro` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `curp_pro` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `nacio_pro` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `edad_pro` int(100) NOT NULL,
  `naci_pro` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `sexo_pro` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `tel_casa_pro` int(100) NOT NULL,
  `tel_cel_pro` int(100) NOT NULL,
  `rfc_pro` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`id_pro`, `nom_pro`, `ap_pro`, `am_pro`, `dir_pro`, `curp_pro`, `nacio_pro`, `edad_pro`, `naci_pro`, `sexo_pro`, `tel_casa_pro`, `tel_cel_pro`, `rfc_pro`) VALUES
(1, 'ivanjhwvfehj', 'tft', 'fty', 'vt', 'v', 'vt', 0, 'v', 'tv', 0, 0, 'vt'),
(3, 'jorge', 'h', 'vhjv', 'j', 'hvj', 'hv', 0, 'hv', 'jhv', 0, 0, 'vjh'),
(4, 'jorge', 'h', 'vhjv', 'j', 'hvj', 'hv', 0, 'hv', 'jhv', 0, 0, 'vjh'),
(5, 'Jorge', 'JH', 'F', 'HF', 'JH', 'FJ', 0, 'J', 'JHF', 0, 0, 'HF'),
(6, 'KHVKVK', 'J', 'KJV', 'KJV', 'KJV', 'JKV', 0, 'JK', 'VJK', 0, 0, 'VVSV'),
(8, 'erock', 'kh', 'kb', 'kjb', 'b', 'kjbk', 0, 'kjb', 'jkb', 0, 0, 'jk');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id_alu`);

--
-- Indices de la tabla `biblioteca`
--
ALTER TABLE `biblioteca`
  ADD PRIMARY KEY (`id_bi`);

--
-- Indices de la tabla `escuela`
--
ALTER TABLE `escuela`
  ADD PRIMARY KEY (`id_esc`);

--
-- Indices de la tabla `idiomas`
--
ALTER TABLE `idiomas`
  ADD PRIMARY KEY (`id_idi`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id_mat`);

--
-- Indices de la tabla `mobiliario`
--
ALTER TABLE `mobiliario`
  ADD PRIMARY KEY (`id_mob`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`id_pro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id_alu` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `biblioteca`
--
ALTER TABLE `biblioteca`
  MODIFY `id_bi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `escuela`
--
ALTER TABLE `escuela`
  MODIFY `id_esc` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `idiomas`
--
ALTER TABLE `idiomas`
  MODIFY `id_idi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `id_mat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `mobiliario`
--
ALTER TABLE `mobiliario`
  MODIFY `id_mob` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
