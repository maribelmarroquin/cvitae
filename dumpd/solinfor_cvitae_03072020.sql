-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 03-07-2020 a las 13:59:03
-- Versión del servidor: 5.7.29-cll-lve
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `solinfor_cvitae`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catdesigns_pdf`
--

CREATE TABLE `catdesigns_pdf` (
  `id_designs_pdf` int(11) NOT NULL,
  `design_pdf` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `vigencia_ini` datetime NOT NULL,
  `vigencia_fin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `catdesigns_pdf`
--

INSERT INTO `catdesigns_pdf` (`id_designs_pdf`, `design_pdf`, `vigencia_ini`, `vigencia_fin`) VALUES
(1, 'Autumn', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Elegance', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'diseño3', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'diseño4', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catdesigns_view`
--

CREATE TABLE `catdesigns_view` (
  `id_designs_view` int(11) NOT NULL,
  `design_view` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `vigencia_ini` datetime NOT NULL,
  `vigencia_fin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `catdesigns_view`
--

INSERT INTO `catdesigns_view` (`id_designs_view`, `design_view`, `vigencia_ini`, `vigencia_fin`) VALUES
(1, 'EleganceView', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'AutumnView', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clas_conocimientos`
--

CREATE TABLE `clas_conocimientos` (
  `id_clas_conocimientos` int(11) NOT NULL,
  `clasificacion` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `fk_user_clas_conocimientos` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clas_conocimientos`
--

INSERT INTO `clas_conocimientos` (`id_clas_conocimientos`, `clasificacion`, `fk_user_clas_conocimientos`, `created_at`, `updated_at`) VALUES
(1, 'Idiomas', 2, '2020-07-01 21:14:45', '2020-07-01 21:14:45'),
(2, 'Idiomas', 1, '2020-07-01 21:51:31', '2020-07-01 21:51:31'),
(3, 'Software', 1, '2020-07-01 21:51:31', '2020-07-01 21:51:31'),
(4, 'Protocolos', 2, '2020-07-01 21:29:34', '2020-07-01 21:29:34'),
(5, 'Lenguajes de Desarrollo', 2, '2020-07-01 21:29:51', '2020-07-01 21:29:51'),
(6, 'Bases de Datos', 2, '2020-07-01 21:31:55', '2020-07-01 21:31:55'),
(7, 'Frameworks', 2, '2020-07-01 21:34:20', '2020-07-01 21:34:20'),
(8, 'CMS', 2, '2020-07-01 21:34:47', '2020-07-01 21:34:47'),
(9, 'Sistemas Operativos', 2, '2020-07-01 21:35:54', '2020-07-01 21:35:54'),
(11, 'Software', 2, '2020-07-01 21:39:58', '2020-07-01 21:39:58'),
(12, 'Idiomas', 1, '2020-07-01 21:51:31', '2020-07-01 21:51:31'),
(13, 'Software', 1, '2020-07-01 21:51:31', '2020-07-01 21:51:31'),
(14, 'Algo', 6, '2020-07-01 21:52:56', '2020-07-01 21:52:56'),
(15, 'Algo', 6, '2020-07-01 21:52:56', '2020-07-01 21:52:56'),
(16, 'Idiomas', 7, '2020-07-01 21:55:38', '2020-07-01 21:55:38'),
(17, 'Software', 7, '2020-07-01 21:55:38', '2020-07-01 21:55:38'),
(18, 'Idiomas', 11, '2020-07-01 21:58:28', '2020-07-01 21:58:28'),
(19, 'Software', 11, '2020-07-01 21:58:28', '2020-07-01 21:58:28'),
(20, 'Idiomas', 12, '2020-07-01 22:01:10', '2020-07-01 22:01:10'),
(21, 'Software', 12, '2020-07-01 22:01:10', '2020-07-01 22:01:10'),
(22, 'algo', 2, '2020-07-01 22:12:38', '2020-07-01 22:12:38'),
(23, 'Idiomas', 15, '2020-07-02 17:41:54', '2020-07-02 17:41:54'),
(24, 'Frameworks', 15, '2020-07-02 17:43:20', '2020-07-02 17:43:20'),
(26, 'Lenguajes de Desarrollo Frontend', 15, '2020-07-02 17:49:33', '2020-07-02 17:49:33'),
(27, 'Lenguajes de Desarrollo Backend', 15, '2020-07-02 17:54:20', '2020-07-02 17:54:20'),
(28, 'Sistemas Gestores de Bases de Datos', 15, '2020-07-02 18:21:43', '2020-07-02 18:21:43'),
(29, 'IDE\'s y editores de código', 15, '2020-07-02 18:31:26', '2020-07-02 18:31:26'),
(30, 'Protocolos de Intercambio de Datos', 15, '2020-07-02 18:35:08', '2020-07-02 18:35:08'),
(31, 'CMS', 15, '2020-07-02 18:36:45', '2020-07-02 18:36:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta_cv`
--

CREATE TABLE `consulta_cv` (
  `id_consulta` int(10) UNSIGNED NOT NULL,
  `user_cons` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `empresa` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `cont` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fk_user_consulta` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `consulta_cv`
--

INSERT INTO `consulta_cv` (`id_consulta`, `user_cons`, `empresa`, `password`, `cont`, `fk_user_consulta`, `remember_token`, `created_at`, `updated_at`) VALUES
(36, 'HnDml', NULL, '$2y$10$A5bYWpjP299yUnsxxgOPcOVE/5qw7AUW3t2q5S5t304jOkYLnu3vW', '1', 1, 'Tp3APBzw6WxMEw1mBAItiHMxCjqy8FauifPxeCHvvou7RP27pgdHIy7CHOde', '2019-07-09 13:22:44', '2019-07-09 13:25:06'),
(111, '9rjgf', NULL, '$2y$10$ykyHXHfrWWIzLx3YCd8dyuQhwgkdvQ87SazWkVT42.xVGlzQfHiwi', '1', 2, NULL, '2019-08-20 01:40:05', '2019-08-21 06:33:22'),
(115, 'EfFz4', NULL, '$2y$10$1OgAPGwsq2XIpi260v2ftu.vDTpGz2DyzJ06Vmpl4MlYPDG2FDdNy', '1', 2, NULL, '2019-08-20 01:40:47', '2019-08-23 23:22:29'),
(119, 'HjofU', NULL, '$2y$10$WJueqzRGptVBHicrjxVRGe2FbQNz76d0TJQDrg8ZpckbJd67gkTpS', '0', 6, NULL, '2019-09-26 02:33:22', '2019-09-26 02:33:22'),
(120, 'D524V', NULL, '$2y$10$2/O0zVVQtTU3QfVVA/GlUenHm2RLASp77hgqgdMWURt7gFdbJYWQ6', '0', 6, NULL, '2019-09-26 04:11:37', '2019-09-26 04:11:37'),
(121, 'r8WA2', NULL, '$2y$10$mrovtBDXlo9iH1rlpg.BVO75F3tKLt0delKzS.it9r1p6Ireb44Uq', '1', 7, NULL, '2019-10-04 22:20:25', '2019-10-04 22:21:23'),
(125, 'TNS42', NULL, '$2y$10$916l9.QKywLpsW1rnK2eT.TW7FQM.FfrnrLZ5gaWq.OSTj7I4jIAS', '1', 2, 'WTm26JMpzYaPEfjFClJfrjpJFTWoUmEmW8UU365AZeHYX9KbtikReEgyNRpN', '2019-11-02 06:37:41', '2019-11-02 06:41:37'),
(126, 'XUP2o', NULL, '$2y$10$AgY7IOUfofiRUykkikfxKOORGqOCl6NvbyxRsj4yvQlGUeAbE2gP2', '0', 9, NULL, '2019-11-02 07:23:10', '2019-11-02 07:23:10'),
(128, '1dWoq', NULL, '$2y$10$SVA8AVG08Uhj1ANb9yVxy.9QK/Z0Vn3W1cp1m.2OhWiOOchURejDu', '1', 2, NULL, '2019-12-17 10:16:45', '2019-12-17 10:17:50'),
(129, 'JBL8y', NULL, '$2y$10$caTi0.kBlFGJd6xroOa5uO2.I2MBkQPDcEGFktrGmBpzhnBAW3rKm', '0', 11, NULL, '2020-03-04 10:56:49', '2020-03-04 10:56:49'),
(135, 'sfMmq', NULL, '$2y$10$YYi8GXEIlSt9M4EkyfLhluybeNojnf9bFhDaosp4PLcfo1Ens.4R6', '1', 2, NULL, '2020-04-01 03:29:41', '2020-04-03 22:18:46'),
(138, 'ltF9K', 'Empresa Ejemplo S.A. de C.V.', '$2y$10$16zFUzWLYHl7VepnlMGBYOeQtON0schCv89e1cfuJ.hNY22ampHYu', '4', 2, NULL, '2020-07-01 20:55:16', '2020-07-02 16:04:57'),
(139, 'yehn5', 'Empresa Ejemplo S.A. de C.V.', '$2y$10$0vpgHS99AuhMOFaG3iDtfu2dIDPW9.5SeJj/ZacoRFMqbysA4pGMq', '2', 15, NULL, '2020-07-02 18:52:53', '2020-07-02 20:19:33'),
(140, '5oU6H', 'Human Access', '$2y$10$Z4gC8Wi5gb1wOc0TBg/TJejwQ1GV7r6C80XIFbsISNJKsnERMq4am', '0', 15, NULL, '2020-07-02 20:41:58', '2020-07-02 20:41:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_pers`
--

CREATE TABLE `datos_pers` (
  `id_datos_per` int(10) UNSIGNED NOT NULL,
  `ruta` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `profesion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_nac` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lugar_nac` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `edo_civil` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email_u` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sitio` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fk_user_dp` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `datos_pers`
--

INSERT INTO `datos_pers` (`id_datos_per`, `ruta`, `nombre`, `profesion`, `fecha_nac`, `lugar_nac`, `edo_civil`, `direccion`, `telefono`, `email_u`, `sitio`, `fk_user_dp`, `created_at`, `updated_at`) VALUES
(1, '172020_153549_742019_22419_maribel2.jpg', 'Maribel Guadalupe Marroquín Caratachea', 'Ingeniero en Sistemas Computacionales', '1988-03-11', 'Nogales, Veracruz.', 'Unión libre', 'Calle 3 no. 210, col. Agrícola Pantitlan, Iztacalco, CDMX.', '2721871856', 'maribel.marroquin11@gmail.com', 'https://www.linkedin.com/in/maribel-marroquín/', 2, '2019-04-09 09:04:19', '2020-07-01 20:35:49'),
(2, '872019_221038_lau.JPG', 'Laura Iset Aguilera Ruiz', 'Licenciada en Educación Deportiva', '12 de mayo de 1988', 'Guadalajara, Jal.', 'Unión libre', 'Poniente 3 no. 25 int. 15', '2727089484', 'iset120588@gmail.com', '', 1, '2019-07-09 13:10:38', '2019-07-09 13:10:38'),
(3, '2592019_122814_722018_201613_maribel.jpg', 'algo', 'algo', '22', 'algo', 'algo', 'algoo', 'algo', 'algo', 'algo', 6, '2019-09-26 02:28:14', '2019-09-26 02:28:14'),
(4, '4102019_81731_solinfori7_x512.png', 'algo asdasd', 'algoasdasd', '11', 'algoasdas', 'algoadsasd', 'algoasdasd', 'algoasdasd', '', '', 7, '2019-10-04 22:07:08', '2019-10-04 22:17:31'),
(5, '1112019_152342_medicine-hospital-health-care-computer-icons-physician-others-1a30c4a4d63484b53fee66795d32366d.png', '', '', '', '', '', '', '', '', '', 9, '2019-11-02 07:23:42', '2019-11-02 07:23:42'),
(6, '332020_232116_JoseMarroquin.jpg', 'José Luis Marroquín Caratachea', 'Médico Cirujano/ Auxiliar de Enfermeria', '27', 'Orizaba, Veracruz', 'Union Libre', 'Calle 3, no. exterior: 210, no. interior 24 Col. Agrícola Pantitlan, Alcaldía Iztacalco. CP: 08100.', '2721348221', 'jk5000@hotmail.com', '', 11, '2020-03-04 09:42:37', '2020-03-04 11:21:16'),
(7, NULL, 'María Isabel Caratachea Hernández', 'Licenciatura en Intervención Educativa/ Especialidad en Educación Inicial/ Técnica Puericulturista', '50', 'Orizaba, Veracruz', 'Casada', 'Calle 3, no. exterior: 210, no. interior 24 Col. Agrícola Pantitlan, Alcaldía Iztacalco. CP: 08100.', '2721308982', 'caratachea_lebasi@hotmail.com', '', 12, '2020-03-04 10:55:37', '2020-03-04 10:55:37'),
(8, '332020_231955_JoseMarroquin.jpg', 'José Luis Marroquín Caratachea', 'Médico Cirujano/ Auxiliar de Enfermeria', '27', 'Orizaba, Veracruz', 'Union Libre', 'Calle 3, no. exterior: 210, no. interior 24 Col. Agrícola Pantitlan, Alcaldía Iztacalco. CP: 08100.', '2721348221', 'jk5000@hotmail.com', '', 13, '2020-03-04 11:08:35', '2020-03-04 11:19:55'),
(9, '272020_114251_742019_22419_maribel2.jpg', 'Maribel Guadalupe Marroquín Caratachea', 'Lic. en Ingeniería en Sistemas Computacionales', '1988-03-11', 'Nogales, Veracruz.', 'Unión libre', 'Calle 3 no. 210, col. Agrícola Pantitlán, del. Iztacalco, CDMX', '272 187 1856', 'maribel.marroquin11@gmail.com', 'https://www.linkedin.com/in/maribel-marroquín/', 15, '2020-07-02 16:42:51', '2020-07-02 16:42:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `designview_stay`
--

CREATE TABLE `designview_stay` (
  `id_view_stay` int(11) NOT NULL,
  `view_stay` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `fk_user_view` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `designview_stay`
--

INSERT INTO `designview_stay` (`id_view_stay`, `view_stay`, `fk_user_view`, `created_at`, `updated_at`) VALUES
(1, 'EleganceView', 1, '2020-07-01 16:55:05', '2020-07-01 16:55:05'),
(2, 'EleganceView', 2, '2020-07-01 16:55:05', '2020-07-01 16:55:05'),
(5, 'EleganceView', 3, '2020-07-01 16:55:05', '2020-07-01 16:55:05'),
(6, 'EleganceView', 4, '2020-07-01 16:55:05', '2020-07-01 16:55:05'),
(7, 'EleganceView', 5, '2020-07-01 16:55:05', '2020-07-01 16:55:05'),
(8, 'EleganceView', 6, '2020-07-01 16:55:05', '2020-07-01 16:55:05'),
(9, 'EleganceView', 7, '2020-07-01 16:55:05', '2020-07-01 16:55:05'),
(10, 'EleganceView', 8, '2020-07-01 16:55:05', '2020-07-01 16:55:05'),
(11, 'EleganceView', 9, '2020-07-01 16:55:05', '2020-07-01 16:55:05'),
(12, 'EleganceView', 11, '2020-07-01 16:55:05', '2020-07-01 16:55:05'),
(13, 'EleganceView', 12, '2020-07-01 16:55:05', '2020-07-01 16:55:05'),
(14, 'EleganceView', 13, '2020-07-01 16:55:05', '2020-07-01 16:55:05'),
(15, 'EleganceView', 15, '2020-07-02 15:54:35', '2020-07-02 15:54:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exp_profs`
--

CREATE TABLE `exp_profs` (
  `id_exprof` int(10) UNSIGNED NOT NULL,
  `empresa` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cargo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `funciones` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `jefe` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `inicio_lab` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fin_lab` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status_fin` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `motivos` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `logros` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `principal` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `principal_vista` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fk_user_ep` int(10) UNSIGNED NOT NULL,
  `order_ep` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `exp_profs`
--

INSERT INTO `exp_profs` (`id_exprof`, `empresa`, `cargo`, `funciones`, `jefe`, `telefono`, `inicio_lab`, `fin_lab`, `status_fin`, `motivos`, `logros`, `principal`, `principal_vista`, `fk_user_ep`, `order_ep`, `created_at`, `updated_at`) VALUES
(1, 'H. Ayuntamiento de Río Blanco', 'Auxiliar de Biblioteca', 'Mantenimiento a equipo de cómputo.\r\nAtención a usuarios y asesorías personalizadas.\r\nExpedición de credenciales para préstamo a domicilio.\r\nGestión de préstamos a domicilio.\r\nOrden y limpieza de las instalaciones.', 'Mónica Karina González Rosas', NULL, '2015-01', '2015-07', 'fin', 'Finalización de Servicio Social.', 'Incremento en la visita de usuarios, gracias a\r\nlas asesorías personalizadas implementadas por iniciativa propia.', 'OK', 'OK', 2, 1, '2019-04-09 09:13:30', '2020-07-01 21:03:50'),
(2, 'Facultad de Medicina de la Universidad Veracruzana', 'Desarrollador Web', '- Diseño y desarrollo de aplicación web en PHP con Laravel.\r\n- Documentación de diseño, desarrollo y pruebas del SW en base a la metodología RUP.', 'Alejandro Pimentel Domínguez', NULL, '2015-08', '2016-02', 'fin', 'Finalización de Residencias Profesionales', 'Agilización del desarrollo web mediante la aplicación de nuevas tecnologías obteniendo software óptimo y en menor tiempo.', 'OK', 'OK', 2, 2, '2019-04-10 06:23:26', '2020-07-01 21:04:30'),
(3, 'S.I.F.E.I. S.A. de C.V.', 'Agente de Soporte Técnico', '- Atención a clientes vía telefónica y seguimiento de incidencias mediante sistema de tickets.\r\n- Solución de incidentes en el funcionamiento de aplicaciones propias de la empresa.\r\n- Actividades diversas en beneficio de la empresa.', 'José Antonio Hernández', '2727266999', '2018-01', '2019-10', 'fin', 'Cambio de puesto.', 'Adquirir conocimiento de las funciones de una estructura empresarial, perfeccionamiento del uso de S. O. Windows y bases de datos en MariaDB. Conocimiento de las reglas de emisión de los diferentes tipos de CFDi versión 3.3, con base en la Guía de llenado del SAT y la RMF.', 'OK', 'OK', 2, 3, '2019-04-10 07:16:49', '2020-07-01 21:06:07'),
(4, 'Proyecto Personal.', 'Desarrollador Web', 'Análisis, diseño, desarrollo, implementación, mejoras y mantenimiento de proyecto para la elaboración, gestión de contenido, y exportación de un Curriculum Vitae facilitando, al usuario final, su desarrollo. El presente CV se generó con dicho sistema.', 'N/A', NULL, '2018-12', NULL, 'laborando', 'Proyecto aún en proceso.', 'Autoaprendizaje, mejora en pensamiento lógico  y análisis, mayor capacidad de organización y mayor conocimiento del framework Laravel.', 'OK', 'OK', 2, 4, '2019-07-01 18:50:15', '2020-07-01 21:08:10'),
(5, 'Preescolar José Maria Morelos y Pavón', 'Profesor de Educación Física', 'Planeación, educación y gestión de grupos de nivel preescolar.', 'Elizabeth Nora Mendoza', '2721871856', 'AGOSTO 2016', 'JULIO 2017', 'fin', 'Finalización de Servicio Social.', 'Mayor experiencia en el trato al alumno y en técnicas de enseñanza dentro de la educación física.', 'OK', NULL, 1, 1, '2019-07-09 13:17:47', '2019-07-09 13:17:47'),
(6, 'algo', 'algo', 'algo', 'algo', 'algo', 'algo', 'algo', 'fin', 'algo', 'algo', 'OK', NULL, 6, 1, '2019-09-26 02:31:24', '2019-09-26 02:31:24'),
(7, 'Empresa 1 S.A. de C.V.', 'Desarrollador Web', 'algo', 'Alejandro Pimentel Domínguez', '012721000490', 'ENERO 2015', 'Hasta la fecha', 'fin', 'Finalización de Servicio Social.', 'algo', 'OK', NULL, 7, 1, '2019-10-04 22:09:39', '2019-10-04 22:09:39'),
(8, 'S.I.F.E.I. S.A. de C.V.', 'Desarrollador Jr.', '-Colaboración en el desarrollo de un web service RESTFull para sistema de reportes y utilierías, bajo las tecnologías Spring Framework e Hibernate con java.\r\n-Atención a clientes en cuanto a dudas con el uso de Web Service para timbrado Fiscal Digital.', 'Ing. Mary Quiahua', '272 726 69 99', '2019-10', '2020-01', 'fin', 'Finalización por motivos personales.', 'Aprendizaje incremental en el uso de Framework Spring e Hibernate, así como en el desarrollo de web service y cliente RestFull, bajo MVC.\r\nMayor conocimiento del proceso del CFDI, de generación de XML y timbrado.', 'OK', 'OK', 2, 5, '2019-12-17 09:59:44', '2020-07-01 21:09:23'),
(9, 'Hospital Regional de Río Blanco', 'Pasante de Servicio Social', 'Realización de Servicio Social, desempeñando rol de enfermero en las distintas áreas hospitalarias, rotando en: CEYE, Cirugía Ambulatoria, Banco de Leche, Fisioterapia y Rehabilitación, Oncología, Quimioterapia, Medicina Interna, Cirugía General, Módulo MATER, Urgencias, Quirófano, Toco cirugía y Ginecología y Obstetricia.', 'Guadalupe Hernández Pérez', '', '1° de Agosto del 2011', '31 de Julio del 2012', 'fin', 'Culminación de Servicio Social', 'Obtuve amplias habilidades para: cateterismo de accesos periféricos, ministración de medicamentos enterales y parenterales, cateterismo vesical, circular procedimientos médico-quirurgicos, curaciones, preparación de fórmulas lácteas, técnicas de limpieza, sanitización y esterilización, RCP básico, vacunación, manejo de red de frío, somatometría, uso de terapia de electroestimulación y ultrasonido, mecanoterapia, toma de muestras, manejo de hoja de enfermería, baño de esponja, manejo de drenajes,', 'OK', NULL, 11, 1, '2020-03-04 10:19:00', '2020-03-04 11:24:50'),
(10, 'Pasitos 1,2,3', 'Enfermero General', 'Revisión clínica y apoyo a brindar terapia electiva a niños de 0 - 6 años', 'María Isabel Caratachea Hernández', '2721308982', '1° de Agosto del 2011', '31 de Julio del 2012', 'fin', 'Inicio de Estudios Profesionales', 'Adquirí conocimiento y habilidades prácticas para la aplicación de distintas terapias a niños de 0-6 años, tales como: conductual, de lenguaje, mecanoterapia, estimulación temprana. Así como somatometría en el pediátrico, toma de signos vitales.', 'OK', NULL, 11, 2, '2020-03-04 10:23:25', '2020-03-04 10:23:25'),
(11, 'Hospital General de Zona Numero 8', 'Médico Pasante de Servicio Social', 'Internado Médico de Pregrado y Servicio Social', 'Carmela Resendiz Dattoly', '2717497657', '1° de Agosto del 2017', '31 de Julio del 2019', 'fin', 'Culminación de Servicio Social', '', 'OK', NULL, 11, 3, '2020-03-04 10:30:00', '2020-03-04 10:30:00'),
(12, 'Gardner College', 'Docente', 'Docente Frente a grupo, para la capacitación en primeros auxilios, y área de biología como preparación para ingreso a universidad.', 'Angel de Jesús Ramos Fuentes', '2711133965', 'Septiembre 2018', 'Abril 2019', 'fin', 'Cambio de Domicilio', 'Desarrollarme como docente ante grupo, realizando planeación y preparación de temario académico, así como de recursos didácticos para la clase proporcionada. Desenvolvimiento para hablar frente a grupo así como realización de evaluaciones.', 'OK', NULL, 11, 4, '2020-03-04 10:41:18', '2020-03-04 10:41:18'),
(13, 'Escuela Fray Bartolomé de las Casas', 'Maestra frente a grupo en maternal y primer grado ', 'Maestra frente a grupo, realizando actividades para un desarrollo  integral del niño a través de campos formativos de desarrollo personal y social, lenguaje, comunicación, desarrollo físico, cognitivo y salud', 'Griselda Flores Badillo', '', '1° de agosto 2004', 'Julio 2005', 'fin', 'Inicio de estudios nivel licenciatura', 'Logro de aprendizaje personal a través de la experiencia como maestra\r\nDespertar el interés de los alumnos por aprender\r\nMotivación hacia los alumnos mediante clases dinámicas \r\nEnriquecer mis conocimientos emprendiendo nuevos proyectos en conjunto con los alumnos', 'OK', NULL, 12, 1, '2020-03-04 11:27:32', '2020-03-04 11:27:32'),
(14, 'DIF EN IXHUATLANCILLO VERACRUZ', 'COORDINADOR DE PROYECTO \"SI NO CUIDAS MI ALIMENTAC', 'COORDINADORA DE PROYECTO', '', '', 'AGOSTO 2007', 'FEBRERO 2008', 'fin', 'SE MODIFICARON LOS HÁBITOS ALIMENTICIOS EN NIÑOS D', 'DESARROLLO Y CAMBIOS DE ALIMENTACIÓN EN LA PEQUEÑA MUESTRA DE NIÑOS\r\nAPRENDIZAJE PERSONAL A TRAVÉS DE LA BÚSQUEDA DE INFORMACIÓN\r\nAPOYO POR PARTE DE LOS PADRES DE LOS NIÑOS\r\nAPOYO DEL DIF MUNICIPAL', 'OK', NULL, 12, 2, '2020-03-04 11:49:31', '2020-03-04 11:49:31'),
(15, 'Hospital Regional de Río Blanco Veracruz', 'COORDINADOR DE PROYECTO \"PINTANDO SONRISAS\"', 'COORDINADORA DE PROYECTO', '', '', 'FEBRERO 2018 ', 'JULIO 2018', 'fin', 'CULMINACIÓN DE PERIODO ESCOLAR DE LA UNIVERSIDAD', 'CAMBIO DE ESTADO ANÍMICO DE LOS NIÑOS HOSPITALIZADOS EN EL ÁREA DE QUIMIOTERAPIA Y ÁREA DE DISTINCIÓN DE NIÑOS HOSPITALIZADOS CON DIAGNÓSTICO DE CÁNCER', 'OK', NULL, 12, 3, '2020-03-04 11:57:36', '2020-03-04 11:57:36'),
(16, 'MUNICIPIO DE IXHUATLANCILLO', 'COORDINADOR DE PROYECTO ESTIMULACIÓN TEMPRANA MÓVI', 'COORDINADORA DE PROYECTO', '', '', 'AGOSTO 2018', 'DICIEMBRE 2008', 'fin', 'CULMINACIÓN DEL PROYECTO', 'CAPACITACIÓN A LOS PADRES SOBRE LA IMPORTANCIA DEL DESARROLLO INTEGRAL DEL NIÑO\r\nASISTENCIA DE LOS PADRES DE LOS NIÑOS AL PROGRAMA  DE ESTI,ULACION TEMPRANA', 'OK', NULL, 12, 4, '2020-03-04 12:05:23', '2020-03-04 12:05:23'),
(17, 'Biblioteca mpal. \"Vicente Guerrero\", Rio Blanco.', 'Auxiliar de Biblioteca', 'Atención a usuarios, expedición de credenciales para prestamos a domicilio, orden del acervo bibliotecario, limpieza de las instalaciones, mantenimiento a equipo de cómputo y asesorías personalizadas, impartidas por iniciativa propia, en las asignaturas Matemáticas, Física y Computación.', 'Mónica Karina González Rosas', NULL, '2015-01', '2015-07', 'fin', 'Finalización de Servicio Social', 'Mayor asistencia de usuarios y la oportunidad de compartir mis conocimientos en apoyo a la sociedad.', '-', 'OK', 15, 1, '2020-07-02 19:21:44', '2020-07-02 20:22:52'),
(18, 'Facultad de Medicina de la Universidad Veracruzana', 'Desarrollador Web', 'Diseño y desarrollo de Aplicación web para la generación de evaluaciones académicas, utilizando PHP con Laravel. Documentación de diseño, desarrollo y pruebas del SW en base a la metodología RUP.', 'Alejandro Pimentel Domínguez', NULL, '2015-08', '2016-02', 'fin', 'Finalización de Residencias Profesionales', 'Adquirir conocimiento del Framework Laravel, lo que derivó en la agilización del desarrollo e implementación de mis conocimientos académicos.', 'OK', 'OK', 15, 2, '2020-07-02 19:30:38', '2020-07-02 19:30:38'),
(19, 'Black Ecco S.A.P.I. de C.V.', 'Analista Programador PHP', 'Verificación y reporte del correcto funcionamiento de un proyecto externo de tienda en línea, así como gestión de contenido.', 'Carlos Alberto Ornelas Guido', NULL, '2017-04', '2017-08', 'fin', 'Renuncia por motivos personales', 'Adquisición de experiencia en CMS Open Cart y gestión de contenido.', 'OK', 'OK', 15, 3, '2020-07-02 19:40:40', '2020-07-02 19:40:40'),
(20, 'S.I.F.E.I. S.A. de C.V.', 'Agente de Soporte Técnico', 'Atención a clientes vía telefónica y seguimiento de incidencias mediante sistema de tickets. Solución de incidentes en el funcionamiento de aplicaciones propias de la empresa. Actividades diversas en beneficio de la empresa.', 'José Antonio Hernández', '272 726 69 99', '2018-01', '2019-10', 'fin', 'Cambio de puesto', 'Adquirir conocimiento de la interacción y funciones de los departamentos de una estructura empresarial, perfeccionamiento del uso de S. O. Windows y bases de datos en MariaDB. Conocimiento de las reglas de emisión de los diferentes tipos de CFDi versión 3.3, con base en la Guía de llenado del SAT y la RMF.', 'OK', 'OK', 15, 4, '2020-07-02 19:45:26', '2020-07-02 19:45:26'),
(21, 'S.I.F.E.I. S.A. de C.V.', 'Desarrollador Jr.', 'Colaboración en el desarrollo de un web service RESTFull para sistema de reportes y utilierías, bajo las tecnologías Spring Framework e Hibernate con java. Atención a clientes prospecto para cierre de venta en cuanto a dudas con el uso de Web Service SOAP y desarrollo de ejemplos básicos de conexión con el servicio mencionado, en los lenguajes solicitados por los prospectos, para timbrado Fiscal Digital y cancelación de CFDI\'s.', 'Gloria Minerva González Hernández', '272 726 69 99', '2019-10', '2020-02', 'fin', 'Renuncia por motivos personales.', 'Aprendizaje del uso del Framework Spring e Hibernate, así como en el desarrollo de web service y cliente RestFull, bajo MVC. Mayor conocimiento del proceso de generación y timbrado de un CFDI, y desarrollo de un web service y cliente SOAP.', 'OK', 'OK', 15, 5, '2020-07-02 20:03:14', '2020-07-02 20:03:14'),
(22, 'Proyecto Personal.', 'Desarrollador Web', 'Análisis, diseño, desarrollo, implementación, mejoras y mantenimiento de proyecto para la elaboración, gestión de contenido, y exportación de un Curriculum Vitae utilizando php mediante Laravel.', 'N/A', NULL, '2019-07', NULL, 'laborando', 'Proyecto aún en proceso.', 'Autoaprendizaje, mejora en pensamiento lógico y análisis, mayor capacidad de organización y mayor conocimiento del framework Laravel.', 'OK', 'OK', 15, 6, '2020-07-02 20:05:06', '2020-07-02 20:09:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `form_acas`
--

CREATE TABLE `form_acas` (
  `id_form_aca` int(10) UNSIGNED NOT NULL,
  `nivel` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `especialidad` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instituto` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ano_ini` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ano_fin` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `doc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ruta_doc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `principal` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `principal_vista` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fk_user_fa` int(10) UNSIGNED NOT NULL,
  `order_fa` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `form_acas`
--

INSERT INTO `form_acas` (`id_form_aca`, `nivel`, `especialidad`, `instituto`, `ano_ini`, `ano_fin`, `status`, `doc`, `ruta_doc`, `principal`, `principal_vista`, `fk_user_fa`, `order_fa`, `created_at`, `updated_at`) VALUES
(1, 'Licenciatura', 'Ingeniería en Sistemas Computacionales', 'Instituto Tecnológico de Orizaba', '2010-01', '2015-12', 'fin', 'Certificado, título y cédula profesional', '672019_17921_Cedula_Frente.jpeg', 'OK', 'OK', 2, 1, '2019-04-09 09:06:51', '2020-07-01 20:58:35'),
(2, 'Bachillerato tecnológico', NULL, 'CETIS 146', '2003-08', '2006-07', 'fin', 'Certificado y Carta de Pasante', '672019_17106_certificado_frente.jpg', 'OK', 'OK', 2, 2, '2019-07-01 17:45:34', '2020-07-01 20:59:28'),
(3, 'Licenciatura', 'Educación Deportiva', 'UPAV', 'ENERO 2010', 'DICIEMBRE 2015', 'fin', 'Certificado y Carta de Pasante', '', 'OK', NULL, 1, 1, '2019-07-09 13:19:59', '2019-07-09 13:19:59'),
(4, 'algo', 'algo', 'algo', 'algo', 'algo', 'fin', 'algo', '', 'OK', NULL, 6, 1, '2019-09-26 02:28:50', '2019-09-26 02:28:50'),
(5, 'Licenciatura', 'algo', 'algo', 'algo', 'algo', 'fin', 'algo', '4102019_8744_solinfori1.png', 'OK', NULL, 7, 1, '2019-10-04 22:07:44', '2019-10-04 22:07:44'),
(6, 'Licenciatura', 'algo', 'algo', 'algo', 'algo', 'fin', 'algo', '', 'OK', NULL, 7, 2, '2019-10-04 22:11:57', '2019-10-04 22:11:57'),
(11, 'Licenciatura', ' Médico Cirujano', 'Universidad Veracruzana', '2012', '2019', 'fin', 'Título y Cédula Profesional', '332020_215311_titulo pepe.jpg', 'OK', NULL, 11, 1, '2020-03-04 09:53:11', '2020-03-04 09:53:11'),
(12, 'Bachillerato Tecnológico', 'Enfermería General', 'C.E.t.i.s. 146 ', '2008', '2011', 'fin', 'Constancia de Término de Servicio Social', '332020_22120_pp enfermeria.jpg', 'OK', NULL, 11, 2, '2020-03-04 10:01:20', '2020-03-04 10:04:43'),
(13, 'Licenciatura', 'Intervención Educativa/ Educación Inicial', 'Universidad Pedagógica Nacional', '2005', '2010', 'fin', 'Certificado de Estudios Profesionales/ Carta de Pa', '', 'OK', NULL, 12, 1, '2020-03-04 11:05:03', '2020-03-04 11:05:03'),
(15, 'Bachillerato Tecnológico', 'Puericultura', 'I.S.E.C.F.', '2001', '2004', 'fin', 'Título y Cédula Profesional', '', 'OK', NULL, 12, 2, '2020-03-04 11:06:10', '2020-03-04 11:06:10'),
(16, 'Bachillerato tecnológico', NULL, 'CETis 146, Rio Blanco, Ver.', '2003-08', NULL, 'fin', 'Certificado y Carta de Pasante', '272020_11520_25112017_1783_cer-frontal.jpg', 'OK', 'OK', 15, 1, '2020-07-02 16:52:00', '2020-07-02 16:52:00'),
(17, 'Licenciatura', 'Ingeniería en Sistemas Computacionales', 'Instituto Tecnológico de Orizaba TecNM', '2010-01', '2015-12', 'fin', 'Certificado, título y cédula profesional', '272020_115451_672019_17921_Cedula_Frente.jpeg', 'OK', 'OK', 15, 2, '2020-07-02 16:54:51', '2020-07-02 16:54:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `form_ex_acas`
--

CREATE TABLE `form_ex_acas` (
  `id_form_exaca` int(10) UNSIGNED NOT NULL,
  `curso` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `desc` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `instituto` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `duración` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `doc_ex` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ruta_docex` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `principal` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `principal_vista` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fk_user_fe` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `form_ex_acas`
--

INSERT INTO `form_ex_acas` (`id_form_exaca`, `curso`, `desc`, `instituto`, `duración`, `doc_ex`, `ruta_docex`, `principal`, `principal_vista`, `fk_user_fe`, `created_at`, `updated_at`) VALUES
(1, 'Curso', 'Fundamentos de Programación', 'Instituto Tecnológico de Orizaba TecNM', '20 hrs.', 'Diploma', NULL, 'OK', 'OK', 2, '2019-04-10 06:36:11', '2020-07-01 21:00:29'),
(2, 'Conferencias', '1er. Ciclo de Conferencias sobre Cultura Digital Orizaba.', 'Instituto Tecnológico de Orizaba TecNM', 'Una semana', 'Diploma', NULL, 'OK', 'OK', 2, '2019-04-10 06:37:35', '2020-07-01 21:00:46'),
(3, 'Curso', 'Mantenimiento de Computadoras', 'Instituto Tecnológico de Orizaba TecNM', '30 hrs.', 'Diploma', NULL, 'OK', 'OK', 2, '2019-04-10 06:38:39', '2020-07-01 21:00:52'),
(4, 'Curso', 'Backend Profesional', 'Instituto Tecnológico de Orizaba TecNM', '30 hrs.', 'Diploma', NULL, 'OK', 'OK', 2, '2019-04-10 06:40:05', '2020-07-01 21:00:58'),
(5, 'Conferencias', 'Ciclo de Conferencias del 5° Congreso Nacional de Ingenierías', 'Instituto Tecnológico de Orizaba TecNM', 'Una semana', 'Diploma', NULL, 'OK', 'OK', 2, '2019-04-10 06:41:09', '2020-07-01 21:01:05'),
(6, 'Curso', 'Programación en PHP con Laravel', 'Instituto Tecnológico de Orizaba TecNM', '30 hrs.', 'Diploma', NULL, 'OK', 'OK', 2, '2019-04-10 06:42:01', '2020-07-01 21:01:14'),
(7, 'Conferencias', 'Ciclo de conferencias del 6° Congreso Nacional de Ingenierías.', 'Instituto Tecnológico de Orizaba TecNM', 'Una semana', 'Diploma', NULL, 'OK', 'OK', 2, '2019-04-10 06:42:39', '2020-07-01 21:01:23'),
(8, 'Conferencias', 'Descripción informativa de la descripción.', 'UPAV', '1 semana', 'Diploma', NULL, 'OK', NULL, 1, '2019-07-09 13:11:33', '2019-07-09 13:11:33'),
(9, 'Curso', 'Universidad Java: De Cero a Master', 'Global Mentoring', '68 hrs.', 'En proceso 72%', NULL, 'OK', 'OK', 2, '2019-08-12 17:14:56', '2020-07-01 21:01:30'),
(10, 'Curso', 'algo', 'algoq', 'algo', 'slgo', NULL, 'OK', NULL, 6, '2019-09-26 02:30:37', '2019-09-26 02:30:37'),
(11, 'Curso', 'algo', 'algo', 'algo', 'algo', NULL, 'OK', NULL, 7, '2019-10-04 22:07:58', '2019-10-04 22:07:58'),
(12, 'Curso', 'Fundamentos de Programación. \r\nDel 22 al 26 de octubre del 2012.', 'Instituto Tecnológico de Orizaba TecNM', '20 hrs.', 'Diploma', '272020_123042_202007021200261002.jpg', '-', 'OK', 15, '2020-07-02 17:30:44', '2020-07-02 17:34:51'),
(13, 'Conferencias', '1er ciclo de Conferencias sobre Cultura Digital Orizaba', 'Instituto Tecnológico de Orizaba TecNM', '27 de mayo del 2013', 'Diploma', '272020_123359_202007021200261004.jpg', 'OK', 'OK', 15, '2020-07-02 17:34:00', '2020-07-02 17:34:00'),
(14, 'Curso', 'Mantenimiento de Computadoras. Del 21 al 25 de octubre de 2013.', 'Instituto Tecnológico de Orizaba TecNM', '30 hrs.', 'Diploma', '272020_123618_202007021200261001.jpg', 'OK', 'OK', 15, '2020-07-02 17:36:18', '2020-07-02 17:36:18'),
(15, 'Conferencias', 'Ciclo de conferencias del 5° Congreso Nacional de Ingenierías.', 'Instituto Tecnológico de Orizaba TecNM', 'Una semana', 'Diploma', '272020_123829_202007021200261000.jpg', 'OK', 'OK', 15, '2020-07-02 17:38:29', '2020-07-02 17:38:29'),
(16, 'Curso', 'Backend profesional. Octubre 2014.', 'Instituto Tecnológico de Orizaba TecNM', '30 hrs.', 'Diploma', '272020_12396_202007021200261000.jpg', 'OK', 'OK', 15, '2020-07-02 17:39:06', '2020-07-02 17:39:06'),
(17, 'Conferencias', 'Ciclo de conferencias del 6° Congreso Nacional de Ingenierías. Octubre 2015.', 'Instituto Tecnológico de Orizaba TecNM', 'Una semana', 'Diploma', '272020_124010_202007021200261003.jpg', 'OK', 'OK', 15, '2020-07-02 17:40:10', '2020-07-02 17:40:26'),
(18, 'Curso', 'Programación en PHP con Laravel. Octubre 2015.', 'Instituto Tecnológico de Orizaba TecNM', '30 hrs.', 'Diploma', '272020_124122_202007021200261003.jpg', 'OK', 'OK', 15, '2020-07-02 17:41:22', '2020-07-02 17:41:22'),
(19, 'Curso', 'Universidad Java: de Cero a Master.', 'Udemy - Global Mentoring.', '81 hrs. de video bajo demanda.', 'En proceso: 82%', NULL, 'OK', 'OK', 15, '2020-07-02 20:14:21', '2020-07-02 20:21:27'),
(20, 'Curso', 'Master en JavaScript: Aprender JS, jQuery, Angular, NodeJS.', 'Udemy - Victor Robles', '32 hrs de video bajo demanda.', 'En proceso: 20%', NULL, 'OK', 'OK', 15, '2020-07-02 20:16:37', '2020-07-02 20:16:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idio_infos`
--

CREATE TABLE `idio_infos` (
  `id_idinfo` int(10) UNSIGNED NOT NULL,
  `idi_info` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nivel` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `clasificacion` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `principal` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `principal_vista` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fk_user_ii` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `idio_infos`
--

INSERT INTO `idio_infos` (`id_idinfo`, `idi_info`, `nivel`, `clasificacion`, `principal`, `principal_vista`, `fk_user_ii`, `created_at`, `updated_at`) VALUES
(1, 'Ingles', '30%', '1', 'OK', 'OK', 2, '2019-04-09 09:08:53', '2020-07-01 21:31:28'),
(2, 'Desarrollo usando Framework Laravel', '70%', '7', 'OK', 'OK', 2, '2019-04-09 09:09:15', '2020-07-01 21:36:25'),
(3, 'Desarrollo de servicio y cliente Web Service SOAP', '20%', '4', 'OK', 'OK', 2, '2019-04-09 09:09:54', '2020-07-01 21:37:02'),
(4, 'Desarrollo web y de escritorio con Java', '60%', '5', 'OK', 'OK', 2, '2019-04-09 09:10:15', '2020-07-01 21:36:39'),
(5, 'Desarrollo con PHP', '70%', '5', 'OK', 'OK', 2, '2019-04-09 09:10:28', '2020-07-01 21:38:48'),
(6, 'Desarrollo y consultas de BD usando MySQL', '70%', '6', 'OK', 'OK', 2, '2019-04-10 06:43:54', '2020-07-01 21:35:08'),
(9, 'Desarrollo y consultas usando Microsoft Access', '80%', '6', 'OK', 'OK', 2, '2019-07-01 21:08:40', '2020-07-01 21:32:52'),
(10, 'Desarrollo y consultas usando MariaDB', '80%', '6', 'OK', 'OK', 2, '2019-07-01 21:09:00', '2020-07-01 21:38:18'),
(11, 'Diseño en Photoshop', '30%', '11', 'OK', 'OK', 2, '2019-07-01 21:10:08', '2020-07-01 21:40:16'),
(12, 'Implementación de CMS WordPress', '50%', '8', 'OK', 'OK', 2, '2019-07-01 21:13:14', '2020-07-01 21:38:26'),
(13, 'Implementación de CMS OpenCart', '30%', '8', 'OK', 'OK', 2, '2019-07-01 21:13:52', '2020-07-01 21:34:55'),
(14, 'Uso OTRS (Sistema de tickets para helpdesk)', '50%', '10', 'OK', 'OK', 2, '2019-07-01 21:15:41', '2020-07-01 21:38:34'),
(15, 'S. O. Windows 7, 8, 8.1, 10', '80%', '9', 'OK', 'OK', 2, '2019-07-01 21:29:05', '2020-07-01 21:36:15'),
(16, 'S. O. Ubuntu', '70%', '9', 'OK', 'OK', 2, '2019-07-01 21:34:13', '2020-07-01 21:36:47'),
(20, 'Ingles', '30%', '2', 'OK', NULL, 1, '2019-07-09 13:12:43', '2019-07-09 13:12:43'),
(21, 'Microsoft Office', '70%', '3', 'OK', NULL, 1, '2019-07-09 13:13:00', '2019-07-09 13:13:00'),
(22, 'algo', 'algo', '14', 'OK', NULL, 6, '2019-09-26 02:30:53', '2019-09-26 02:30:53'),
(23, 'Ingles', '80%', '16', 'OK', NULL, 7, '2019-10-04 22:08:17', '2019-10-04 22:08:17'),
(24, 'OTRS', '80%', '17', 'OK', NULL, 7, '2019-10-04 22:08:26', '2019-10-04 22:08:26'),
(25, 'Inglés ', '65%', '18', 'OK', NULL, 11, '2020-03-04 10:05:47', '2020-03-04 10:05:47'),
(26, 'Paquetería Office', '80%', '19', 'OK', NULL, 11, '2020-03-04 10:06:21', '2020-03-04 10:06:21'),
(28, 'Lenguaje de Señas Mexicano', '10%', '18', 'OK', NULL, 11, '2020-03-04 10:07:39', '2020-03-04 10:07:39'),
(29, 'Inglés ', '20%', '20', 'OK', NULL, 12, '2020-03-04 11:07:58', '2020-03-04 11:07:58'),
(30, 'Paquetería Office', '60%', '21', 'OK', NULL, 12, '2020-03-04 11:08:11', '2020-03-04 11:08:11'),
(31, 'algo', '12%', '22', 'OK', 'OK', 2, '2020-07-01 22:12:54', '2020-07-01 22:12:54'),
(32, 'Ingles', '30%', '23', 'OK', 'OK', 15, '2020-07-02 17:42:34', '2020-07-02 17:42:34'),
(33, 'Laravel', '70%', '24', 'OK', 'OK', 15, '2020-07-02 17:43:31', '2020-07-02 17:43:31'),
(34, 'Spring Framework', '20%', '24', 'OK', 'OK', 15, '2020-07-02 17:44:25', '2020-07-02 17:44:25'),
(35, 'Hibernate 5.3', '20%', '24', 'OK', 'OK', 15, '2020-07-02 17:45:00', '2020-07-02 17:45:00'),
(36, 'Bootstrap', '50%', '24', 'OK', 'OK', 15, '2020-07-02 17:45:52', '2020-07-02 17:45:52'),
(40, 'CSS', '60%', '26', 'OK', 'OK', 15, '2020-07-02 17:50:05', '2020-07-02 17:50:05'),
(41, 'JavaScript', '60%', '26', 'OK', 'OK', 15, '2020-07-02 17:53:20', '2020-07-02 17:53:20'),
(42, 'PHP', '70%', '27', 'OK', 'OK', 15, '2020-07-02 17:54:35', '2020-07-02 18:18:21'),
(43, 'Java', '80%', '27', 'OK', 'OK', 15, '2020-07-02 17:54:52', '2020-07-02 17:54:52'),
(44, 'MySQL/MariaDB', '70%', '28', 'OK', 'OK', 15, '2020-07-02 18:22:24', '2020-07-02 18:23:04'),
(45, 'PostgreSQL', '60%', '28', 'OK', 'OK', 15, '2020-07-02 18:23:58', '2020-07-02 18:23:58'),
(46, 'NetBeans', '60%', '29', 'OK', 'OK', 15, '2020-07-02 18:32:05', '2020-07-02 18:32:05'),
(47, 'Sublime Text', '60%', '29', 'OK', 'OK', 15, '2020-07-02 18:32:26', '2020-07-02 18:32:26'),
(48, 'Visual Code', '50%', '29', 'OK', 'OK', 15, '2020-07-02 18:32:50', '2020-07-02 18:32:50'),
(49, 'REST', '50%', '30', 'OK', 'OK', 15, '2020-07-02 18:35:59', '2020-07-02 18:35:59'),
(50, 'SOAP', '60%', '30', 'OK', 'OK', 15, '2020-07-02 18:36:09', '2020-07-02 18:36:09'),
(51, 'Wordpress', '30%', '31', 'OK', 'OK', 15, '2020-07-02 18:37:28', '2020-07-02 18:37:28'),
(52, 'OpenCart', '20%', '31', 'OK', 'OK', 15, '2020-07-02 18:37:48', '2020-07-02 18:37:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obj_profs`
--

CREATE TABLE `obj_profs` (
  `id_obj` int(10) UNSIGNED NOT NULL,
  `objetivo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `des_obj` longtext COLLATE utf8_unicode_ci NOT NULL,
  `principal` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `principal_vista` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fk_user_op` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `obj_profs`
--

INSERT INTO `obj_profs` (`id_obj`, `objetivo`, `des_obj`, `principal`, `principal_vista`, `fk_user_op`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Incrementar y aplicar mis conocimientos en el área de la programación web y móvil de manera profesional, en proyectos de gran importancia, para una empresa de alto prestigio, permitiéndome alcanzar y rebasar mis metas personales, profesionales y sociales.', 'OK', 'OK', 2, '2019-07-09 12:51:06', '2020-07-01 22:59:38'),
(2, '', '\"Formar parte de una empresa en la que pueda poner en práctica todos mis conocimientos, que me brinde la oportunidad de alcanzar todas mis metas trazadas, y que me ofrezca la oportunidad de crecer en el área laboral, personal e intelectual.\"', 'OK', NULL, 1, '2019-07-09 13:07:24', '2019-07-09 13:07:24'),
(3, 'algo', 'algo', NULL, NULL, 6, '2019-09-26 02:31:57', '2019-09-26 02:31:57'),
(4, 'Obtencion de Especialidad Médica y Maestría', 'A mediano y largo plazo con deseo de superación mediante realización de posgrado (Especialidad Médica en Ginecología y Obstetricia) así como maestría en Educación e Investigación Clínica.', NULL, NULL, 11, '2020-03-04 10:43:52', '2020-03-04 10:43:52'),
(5, 'dfghdfgd', 'dfgdfg', NULL, NULL, 2, '2020-06-11 06:07:54', '2020-06-11 06:07:54'),
(6, NULL, 'Incrementar y aplicar mis conocimientos en el área de la programación web de manera profesional, en proyectos de gran importancia, para una empresa de alto prestigio, permitiéndome alcanzar y rebasar mis metas personales, profesionales y sociales.', 'OK', 'OK', 15, '2020-07-02 20:06:56', '2020-07-02 20:06:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otros`
--

CREATE TABLE `otros` (
  `id_otros` int(10) UNSIGNED NOT NULL,
  `dato` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `des_dato` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ruta_dato` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `principal` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `principal_vista` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fk_user_o` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `otros`
--

INSERT INTO `otros` (`id_otros`, `dato`, `des_dato`, `ruta_dato`, `principal`, `principal_vista`, `fk_user_o`, `created_at`, `updated_at`) VALUES
(1, 'Disponibilidad de incorporación', 'Inmediata', NULL, 'OK', 'OK', 2, '2019-04-09 09:13:56', '2020-07-01 23:00:04'),
(2, 'Disponibilidad para viajar', 'Si', NULL, 'OK', 'OK', 2, '2019-07-01 20:44:29', '2020-07-01 23:00:18'),
(3, 'Disponibilidad de cambio de residencia', 'Si', NULL, 'OK', 'OK', 2, '2019-07-01 20:45:21', '2020-07-01 23:00:27'),
(4, 'Disponibilidad de incorporación', 'Inmediata', NULL, 'OK', NULL, 1, '2019-07-09 13:18:05', '2019-07-09 13:18:05'),
(5, 'Disponibilidad de cambio de residencia', 'Si', NULL, 'OK', NULL, 1, '2019-07-09 13:18:32', '2019-07-09 13:18:32'),
(6, 'Disponibilidad para viajar', 'Si', NULL, 'OK', NULL, 1, '2019-07-09 13:18:46', '2019-07-09 13:18:46'),
(7, 'algo', 'algo', NULL, 'OK', NULL, 6, '2019-09-26 02:31:39', '2019-09-26 02:31:39'),
(8, 'Disponibilidad de incorporación', 'algo', NULL, 'OK', NULL, 7, '2019-10-04 22:09:57', '2019-10-04 22:09:57'),
(9, 'Disponibilidad de incorporación', 'Inmediata', NULL, 'OK', 'OK', 15, '2020-07-02 20:05:44', '2020-07-02 20:05:44'),
(10, 'Disponibilidad para viajar', 'Si', NULL, 'OK', 'OK', 15, '2020-07-02 20:05:57', '2020-07-02 20:05:57'),
(11, 'Disponibilidad de cambio de residencia', 'Si', NULL, 'OK', 'OK', 15, '2020-07-02 20:06:11', '2020-07-02 20:06:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resumens`
--

CREATE TABLE `resumens` (
  `id_resumen` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `resumen` longtext COLLATE utf8_unicode_ci NOT NULL,
  `principal` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `principal_vista` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fk_user_re` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `resumens`
--

INSERT INTO `resumens` (`id_resumen`, `titulo`, `resumen`, `principal`, `principal_vista`, `fk_user_re`, `created_at`, `updated_at`) VALUES
(1, 'Web Development', 'Adepta al Desarrollo de Software, con año y medio de experiencia obtenida en el uso de nuevas tecnologías y en la sistematización de procesos, sin dejar atrás mi experiencia como agente de soporte técnico, donde incremente y puse en practica algunas habilidades como trabajo en equipo, solución de problemas y atención a clientes. \r\nMantengo un alto entusiasmo por desarrollarme profesionalmente y así alcanzar mis objetivos personales. \r\nCon capacidad para trabajar de manera efectiva bajo presión.', 'OK', 'OK', 2, '2019-04-09 09:01:25', '2020-07-01 20:57:08'),
(2, 'Ingeniero Industrial', '«Como Licenciada en Educación Deportiva, mi formación académica, humana y laboral se ha enfocado al desarrollo y la implementación de propuestas útiles en el campo de la productividad. Tengo experiencia con el manejo de grupos de enseñanza y su educación física. Soy un profesional comprometido con la investigación, el liderazgo y el trabajo en equipo».', 'OK', NULL, 1, '2019-07-09 13:08:10', '2019-07-09 13:12:31'),
(3, 'titulo', 'resumen', '\'OK\'', NULL, 5, '2019-09-26 01:10:34', '2019-09-26 01:10:34'),
(4, 'algo', ',algo, algo,algo,algoalgoalgoalgovalgoalgoalgoalgoalgoalgoalgoalgoalgoalgoalgoalgoalgoalgoalgoalgoalgoalgoalgoalgoalgoalgoalgoalgoalgoalgoalgoalgoalgo\r\n,algo, algo,algo,algoalgoalgoalgovalgoalgoalgoalgoalgoalgoalgoalgoalgoalgoalgoalgoalgoalgoalgoalgoalgoalgoalgoalgoalgoalgoalgoalgoalgoalgoalgoalgoalgo', 'OK', NULL, 6, '2019-09-26 01:48:46', '2019-09-26 02:32:52'),
(5, 'Algo', 'Esto', 'OK', NULL, 7, '2019-10-04 22:06:37', '2019-10-04 22:19:23'),
(6, 'Algo', 'Algo', '-', NULL, 9, '2019-11-02 07:24:02', '2019-11-02 07:24:02'),
(7, 'Algo', 'Algo algo algo 3 veces', '\'OK\'', NULL, 9, '2019-11-02 07:24:16', '2019-11-02 07:24:16'),
(9, 'Médico Cirujano', 'Médico cirujano formado bajo el programa académico de conocimientos de medicina general, con 2 años de experiencia en atención a pacientes de primer nivel, así  como conocimientos y habilidades prácticas de segundo nivel de atención adquiridos durante el Internado Médico de Pregrado y el Servicio Social, donde reforcé el trabajo en equipo, solución de problemas de índole médico-administrativos, desempeñándome como Coordinador de Servicio Social, Carreras Técnicas y Ciclos Clínicos de diversas áreas de la salud (Medicina, Enfermería, Nutrición, Técnico laboratorista, Químico clínico, TSU histopatólogo-biotecnólogo y embalsamador, Técnico radiólogo, Fisioterapia, Odontología y Pedagogía), sin dejar de lado mi experiencia en el área de Enfermería al ser Técnico de dicha especialidad.', 'OK', NULL, 11, '2020-03-04 09:40:07', '2020-03-04 11:21:26'),
(10, 'Licenciada en Intervención Educativa', 'Profesional adepta a Desarrollo de programas, planes y proyectos que involucran a la educación en el niño de 0-4 años, tanto sano como con factor de riesgo, así como la creación de ambientes de aprendizaje para incidir en el proceso de construcción de conocimiento de los sujetos mediante la aplicación de modelos didáctico y pedagógicos y el uso de recursos de la tecnología educativa, sin dejar de lado mi experiencia en Coordinación de Programas hospitalarios de ámbito médico-administrativo.', '\'OK\'', NULL, 12, '2020-03-04 10:54:10', '2020-03-04 10:54:10'),
(11, 'Médico Cirujano', 'Médico cirujano formado bajo el programa académico de conocimientos de medicina general, con 2 años de experiencia en atención a pacientes de primer nivel, así como conocimientos y habilidades prácticas de segundo nivel de atención adquiridos durante el Internado Médico de Pregrado y el Servicio Social, donde reforcé el trabajo en equipo, solución de problemas de índole médico-administrativos, desempeñándome como Coordinador de Servicio Social, Carreras Técnicas y Ciclos Clínicos de diversas áreas de la salud (Medicina, Enfermería, Nutrición, Técnico laboratorista, Químico clínico, TSU histopatólogo-biotecnólogo y embalsamador, Técnico radiólogo, Fisioterapia, Odontología y Pedagogía), sin dejar de lado mi experiencia en el área de Enfermería al ser Técnico de dicha especialidad.', 'OK', NULL, 13, '2020-03-04 11:08:10', '2020-03-04 11:20:06'),
(12, 'Web Development', 'Apasionada del aprendizaje continuo y con deseos de poner en práctica mis conocimientos en torno al desarrollo web. Cuento con experiencia en Laravel, con php, aplicado en un par de proyectos, y en menor medida en Spring e Hibernate, durante cuatro meses, tecnologías en las que me sigo preparando constantemente. Así mismo, tengo experiencia como agente de soporte técnico y asistencia a clientes prospecto, para cierre de venta, en torno al consumo de servicios web.', 'OK', 'OK', 15, '2020-07-02 16:35:56', '2020-07-02 16:39:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'LIAR', 'iset120588@gmail.com', '$2y$10$QoAsz.qqg4zsnlgoYQMPe.Aj6ZRNWE3gLhgZVQg/enZoCFwAARjwe', 'WCodlVskl4vLjiKSUe9j1K97tWPA3F9k2qFfpctuWYkQkGV8IUMyYEDJZeO8', '2019-04-09 08:58:54', '2019-07-09 13:23:08'),
(2, 'MGMC', 'maribelgmarcar@gmail.com', '$2y$10$HS5wVQVZm1uUMNxfWS/C5up6HZrfElkt/bt4Y56yPj0Zmso7Aa1Em', '9anCfsrpC11ItUggPog9yn3kBc3xejnJJrI537HbkEFn7tfbMPWNgM2tFPMa', '2019-04-09 08:59:46', '2020-07-01 22:52:23'),
(3, 'Maribel2', 'maribel.marroquin@solinfori.com', '$2y$10$O9eWIP851TFeHlMG8SrHKe0ue7QeXi.fxEihmCPvT06ByA0tm6MdO', NULL, '2019-06-10 04:20:34', '2019-06-10 04:20:34'),
(4, 'Maribel3', 'maribelgmarcar@outlook.es', '$2y$10$MAfL5mup.rJ3GyrfHz4gBOTAIzeXWx/xq7DB9UBxXjqOeixqAKLX.', NULL, '2019-06-10 04:22:12', '2019-06-10 04:22:12'),
(5, 'test', 'mquiahua@gmail.com', '$2y$10$xBg8.a7DtekPTm9vxd13NeETbbfsneBix5dRAq8QEJVGtPES49C8G', NULL, '2019-09-26 01:08:59', '2019-09-26 01:08:59'),
(6, 'nuevo', 'nuevo@ejemplo.com', '$2y$10$8gCbAALy.o.1LX/J7kaTnOA1El8J4m/rkXEyPVZnBnC/g1PSh41Di', NULL, '2019-09-26 01:48:14', '2019-09-26 01:48:14'),
(7, 'LIAR123', 'liar@gmail.com', '$2y$10$eQ6F1HJZEjD/9JUfiA2sc.GQ/.PafNsxsL3pYR4GgsLxWX8dpIG8.', 'e7y9lKGeyNZ6xfE3J6VZXTeuGSTiMxuor49Wk1AI9FectP5R5e8PuZEmbVMF', '2019-10-04 22:06:19', '2019-10-04 22:21:03'),
(9, 'Ejem2', 'ejemplo@cvfacil', '$2y$10$o3kbiB08WM0jKrcstuvue.B/3Bsn28Pb4NHFkkuI/MKrxSDe9qSUa', '5fKSsgtTYFfTevGArD7G8GaIzsre26lfINh7cP4ZPVqI5KNkcj6iYtGyG5fz', '2019-11-02 07:22:28', '2019-11-02 07:26:08'),
(11, 'Marroking', 'jk5000@hotmail.com', '$2y$10$Hj77fdE5Au8j.DbELsVj..gRAQknd.rTHr/kdxKgqxvC734GrBali', '8P8KAqT73HST2sheMejZPMXWnBO2PhgsK5RNV72zMMS4GiwdTkqFfMml6MZ5', '2020-03-04 09:28:57', '2020-03-04 11:25:39'),
(12, 'Isabel', 'caratachea_lebasi@hotmail.com', '$2y$10$wZZ8eum3.hrTXUQ9GPmgHO4oxFz5fCbD4Ns.jZh7hwvdg3WUd0MCO', 'VIPJujmXm5Pv5m07B5ROhIgfjD40mVDWGfN75rCWdD3vHsdDAhdGjOBZClk5', '2020-03-04 10:48:11', '2020-03-04 12:06:04'),
(13, 'Ejemplo10', 'ejemplo@gmail.com', '$2y$10$3NIqo.U8Sgnluo4TnoBFC.c2.OlUNAmOyPqy0WLmE5yvjIU24vKf2', 'WiHgaQeIDzGvBMTwdqvUFdmuXvxlROEHiarPiZANf7xSX0q67Kba6eUGEsGo', '2020-03-04 11:05:03', '2020-03-04 11:20:29'),
(15, 'maribel.marroquin11', 'maribel.marroquin11@gmail.com', '$2y$10$/bh5WyCFO7Y4rZN00Iegt.9bDlbJ3ZojR2Tdv6dXEk6cPhvd1Ac3W', NULL, '2020-07-02 15:54:35', '2020-07-02 15:54:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_designs_pdf`
--

CREATE TABLE `user_designs_pdf` (
  `id_user_designs_pdf` int(11) NOT NULL,
  `fk_design_pdf` int(11) NOT NULL,
  `fk_user_pdf` int(11) NOT NULL,
  `vigencia_ini_pdf` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `vigencia_fin_pdf` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `user_designs_pdf`
--

INSERT INTO `user_designs_pdf` (`id_user_designs_pdf`, `fk_design_pdf`, `fk_user_pdf`, `vigencia_ini_pdf`, `vigencia_fin_pdf`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2020-07-01 01:44:55', '2030-07-01 01:44:55', '2020-07-01 01:44:55', '2020-07-01 01:44:55'),
(2, 2, 1, '2020-07-01 01:44:55', '2030-07-01 01:44:55', '2020-07-01 01:44:55', '2020-07-01 01:44:55'),
(3, 1, 2, '2020-07-01 01:44:55', '2030-07-01 01:44:55', '2020-07-01 01:44:55', '2020-07-01 01:44:55'),
(4, 2, 2, '2020-07-01 01:44:55', '2030-07-01 01:44:55', '2020-07-01 01:44:55', '2020-07-01 01:44:55'),
(5, 1, 3, '2020-07-01 01:49:42', '2030-07-01 01:49:42', '2020-07-01 01:49:42', '2020-07-01 01:49:42'),
(6, 2, 3, '2020-07-01 01:49:42', '2030-07-01 01:49:42', '2020-07-01 01:49:42', '2020-07-01 01:49:42'),
(7, 1, 3, '2020-07-01 01:49:42', '2030-07-01 01:49:42', '2020-07-01 01:49:42', '2020-07-01 01:49:42'),
(8, 2, 3, '2020-07-01 01:49:42', '2030-07-01 01:49:42', '2020-07-01 01:49:42', '2020-07-01 01:49:42'),
(9, 1, 4, '2020-07-01 01:49:42', '2030-07-01 01:49:42', '2020-07-01 01:49:42', '2020-07-01 01:49:42'),
(10, 2, 4, '2020-07-01 01:49:42', '2030-07-01 01:49:42', '2020-07-01 01:49:42', '2020-07-01 01:49:42'),
(11, 1, 5, '2020-07-01 01:49:42', '2030-07-01 01:49:42', '2020-07-01 01:49:42', '2020-07-01 01:49:42'),
(12, 2, 5, '2020-07-01 01:49:42', '2030-07-01 01:49:42', '2020-07-01 01:49:42', '2020-07-01 01:49:42'),
(13, 1, 6, '2020-07-01 01:49:42', '2030-07-01 01:49:42', '2020-07-01 01:49:42', '2020-07-01 01:49:42'),
(14, 2, 6, '2020-07-01 01:49:42', '2030-07-01 01:49:42', '2020-07-01 01:49:42', '2020-07-01 01:49:42'),
(15, 1, 7, '2020-07-01 01:49:42', '2030-07-01 01:49:42', '2020-07-01 01:49:42', '2020-07-01 01:49:42'),
(16, 2, 7, '2020-07-01 01:49:42', '2030-07-01 01:49:42', '2020-07-01 01:49:42', '2020-07-01 01:49:42'),
(17, 1, 8, '2020-07-01 01:49:42', '2030-07-01 01:49:42', '2020-07-01 01:49:42', '2020-07-01 01:49:42'),
(18, 2, 8, '2020-07-01 01:49:42', '2030-07-01 01:49:42', '2020-07-01 01:49:42', '2020-07-01 01:49:42'),
(19, 1, 9, '2020-07-01 01:49:42', '2030-07-01 01:49:42', '2020-07-01 01:49:42', '2020-07-01 01:49:42'),
(20, 2, 9, '2020-07-01 01:49:42', '2030-07-01 01:49:42', '2020-07-01 01:49:42', '2020-07-01 01:49:42'),
(21, 1, 11, '2020-07-01 01:49:42', '2030-07-01 01:49:42', '2020-07-01 01:49:42', '2020-07-01 01:49:42'),
(22, 2, 11, '2020-07-01 01:49:42', '2030-07-01 01:49:42', '2020-07-01 01:49:42', '2020-07-01 01:49:42'),
(23, 1, 12, '2020-07-01 01:49:42', '2030-07-01 01:49:42', '2020-07-01 01:49:42', '2020-07-01 01:49:42'),
(24, 2, 12, '2020-07-01 01:49:42', '2030-07-01 01:49:42', '2020-07-01 01:49:42', '2020-07-01 01:49:42'),
(25, 1, 13, '2020-07-01 01:49:42', '2030-07-01 01:49:42', '2020-07-01 01:49:42', '2020-07-01 01:49:42'),
(26, 2, 13, '2020-07-01 01:49:42', '2030-07-01 01:49:42', '2020-07-01 01:49:42', '2020-07-01 01:49:42'),
(27, 1, 14, '2020-07-02 15:32:59', '2030-07-02 15:32:59', '2020-07-02 15:32:59', '2020-07-02 15:32:59'),
(28, 2, 14, '2020-07-02 15:32:59', '2030-07-02 15:32:59', '2020-07-02 15:32:59', '2020-07-02 15:32:59'),
(29, 1, 15, '2020-07-02 15:54:35', '2030-07-02 15:54:35', '2020-07-02 15:54:35', '2020-07-02 15:54:35'),
(30, 2, 15, '2020-07-02 15:54:35', '2030-07-02 15:54:35', '2020-07-02 15:54:35', '2020-07-02 15:54:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_designs_view`
--

CREATE TABLE `user_designs_view` (
  `id_user_designs_view` int(11) NOT NULL,
  `design_view` int(11) NOT NULL,
  `fk_user_design_view` int(11) NOT NULL,
  `vigencia_ini_view` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `vigencia_fin_view` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `user_designs_view`
--

INSERT INTO `user_designs_view` (`id_user_designs_view`, `design_view`, `fk_user_design_view`, `vigencia_ini_view`, `vigencia_fin_view`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2020-07-01 01:53:36', '2030-07-01 01:53:36', '2020-07-01 01:53:36', '2020-07-01 01:53:36'),
(2, 2, 1, '2020-07-01 01:53:36', '2030-07-01 01:53:36', '2020-07-01 01:53:36', '2020-07-01 01:53:36'),
(3, 1, 1, '2020-07-01 01:53:36', '2030-07-01 01:53:36', '2020-07-01 01:53:36', '2020-07-01 01:53:36'),
(4, 2, 1, '2020-07-01 01:53:36', '2030-07-01 01:53:36', '2020-07-01 01:53:36', '2020-07-01 01:53:36'),
(5, 1, 2, '2020-07-01 01:53:36', '2030-07-01 01:53:36', '2020-07-01 01:53:36', '2020-07-01 01:53:36'),
(6, 2, 2, '2020-07-01 01:53:36', '2030-07-01 01:53:36', '2020-07-01 01:53:36', '2020-07-01 01:53:36'),
(7, 1, 3, '2020-07-01 01:53:36', '2030-07-01 01:53:36', '2020-07-01 01:53:36', '2020-07-01 01:53:36'),
(8, 2, 3, '2020-07-01 01:53:36', '2030-07-01 01:53:36', '2020-07-01 01:53:36', '2020-07-01 01:53:36'),
(9, 1, 4, '2020-07-01 01:53:36', '2030-07-01 01:53:36', '2020-07-01 01:53:36', '2020-07-01 01:53:36'),
(10, 2, 4, '2020-07-01 01:53:36', '2030-07-01 01:53:36', '2020-07-01 01:53:36', '2020-07-01 01:53:36'),
(11, 1, 5, '2020-07-01 01:53:36', '2030-07-01 01:53:36', '2020-07-01 01:53:36', '2020-07-01 01:53:36'),
(12, 2, 5, '2020-07-01 01:53:36', '2030-07-01 01:53:36', '2020-07-01 01:53:36', '2020-07-01 01:53:36'),
(13, 1, 6, '2020-07-01 01:53:36', '2030-07-01 01:53:36', '2020-07-01 01:53:36', '2020-07-01 01:53:36'),
(14, 2, 6, '2020-07-01 01:53:36', '2030-07-01 01:53:36', '2020-07-01 01:53:36', '2020-07-01 01:53:36'),
(15, 1, 7, '2020-07-01 01:53:36', '2030-07-01 01:53:36', '2020-07-01 01:53:36', '2020-07-01 01:53:36'),
(16, 2, 7, '2020-07-01 01:53:36', '2030-07-01 01:53:36', '2020-07-01 01:53:36', '2020-07-01 01:53:36'),
(17, 1, 8, '2020-07-01 01:53:36', '2030-07-01 01:53:36', '2020-07-01 01:53:36', '2020-07-01 01:53:36'),
(18, 2, 8, '2020-07-01 01:53:36', '2030-07-01 01:53:36', '2020-07-01 01:53:36', '2020-07-01 01:53:36'),
(19, 1, 9, '2020-07-01 01:53:36', '2030-07-01 01:53:36', '2020-07-01 01:53:36', '2020-07-01 01:53:36'),
(20, 2, 9, '2020-07-01 01:53:36', '2030-07-01 01:53:36', '2020-07-01 01:53:36', '2020-07-01 01:53:36'),
(21, 1, 11, '2020-07-01 01:53:36', '2030-07-01 01:53:36', '2020-07-01 01:53:36', '2020-07-01 01:53:36'),
(22, 2, 11, '2020-07-01 01:53:36', '2030-07-01 01:53:36', '2020-07-01 01:53:36', '2020-07-01 01:53:36'),
(23, 1, 12, '2020-07-01 01:53:36', '2030-07-01 01:53:36', '2020-07-01 01:53:36', '2020-07-01 01:53:36'),
(24, 2, 12, '2020-07-01 01:53:36', '2030-07-01 01:53:36', '2020-07-01 01:53:36', '2020-07-01 01:53:36'),
(25, 1, 13, '2020-07-01 01:53:36', '2030-07-01 01:53:36', '2020-07-01 01:53:36', '2020-07-01 01:53:36'),
(26, 2, 13, '2020-07-01 01:53:36', '2030-07-01 01:53:36', '2020-07-01 01:53:36', '2020-07-01 01:53:36'),
(27, 1, 14, '2020-07-02 15:32:59', '2030-07-02 15:32:59', '2020-07-02 15:32:59', '2020-07-02 15:32:59'),
(28, 2, 14, '2020-07-02 15:32:59', '2030-07-02 15:32:59', '2020-07-02 15:32:59', '2020-07-02 15:32:59'),
(29, 1, 15, '2020-07-02 15:54:35', '2030-07-02 15:54:35', '2020-07-02 15:54:35', '2020-07-02 15:54:35'),
(30, 2, 15, '2020-07-02 15:54:35', '2030-07-02 15:54:35', '2020-07-02 15:54:35', '2020-07-02 15:54:35');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `catdesigns_pdf`
--
ALTER TABLE `catdesigns_pdf`
  ADD PRIMARY KEY (`id_designs_pdf`);

--
-- Indices de la tabla `catdesigns_view`
--
ALTER TABLE `catdesigns_view`
  ADD PRIMARY KEY (`id_designs_view`);

--
-- Indices de la tabla `clas_conocimientos`
--
ALTER TABLE `clas_conocimientos`
  ADD PRIMARY KEY (`id_clas_conocimientos`);

--
-- Indices de la tabla `consulta_cv`
--
ALTER TABLE `consulta_cv`
  ADD PRIMARY KEY (`id_consulta`),
  ADD UNIQUE KEY `consulta_cv_id_consulta_unique` (`id_consulta`),
  ADD UNIQUE KEY `consulta_cv_user_cons_unique` (`user_cons`),
  ADD KEY `consulta_cv_fk_user_consulta_foreign` (`fk_user_consulta`);

--
-- Indices de la tabla `datos_pers`
--
ALTER TABLE `datos_pers`
  ADD PRIMARY KEY (`id_datos_per`),
  ADD UNIQUE KEY `datos_pers_id_datos_per_unique` (`id_datos_per`),
  ADD KEY `datos_pers_fk_user_dp_foreign` (`fk_user_dp`);

--
-- Indices de la tabla `designview_stay`
--
ALTER TABLE `designview_stay`
  ADD PRIMARY KEY (`id_view_stay`);

--
-- Indices de la tabla `exp_profs`
--
ALTER TABLE `exp_profs`
  ADD PRIMARY KEY (`id_exprof`),
  ADD UNIQUE KEY `exp_profs_id_exprof_unique` (`id_exprof`),
  ADD KEY `exp_profs_fk_user_ep_foreign` (`fk_user_ep`);

--
-- Indices de la tabla `form_acas`
--
ALTER TABLE `form_acas`
  ADD PRIMARY KEY (`id_form_aca`),
  ADD UNIQUE KEY `form_acas_id_form_aca_unique` (`id_form_aca`),
  ADD KEY `form_acas_fk_user_fa_foreign` (`fk_user_fa`);

--
-- Indices de la tabla `form_ex_acas`
--
ALTER TABLE `form_ex_acas`
  ADD PRIMARY KEY (`id_form_exaca`),
  ADD UNIQUE KEY `form_ex_acas_id_form_exaca_unique` (`id_form_exaca`),
  ADD KEY `form_ex_acas_fk_user_fe_foreign` (`fk_user_fe`);

--
-- Indices de la tabla `idio_infos`
--
ALTER TABLE `idio_infos`
  ADD PRIMARY KEY (`id_idinfo`),
  ADD UNIQUE KEY `idio_infos_id_idinfo_unique` (`id_idinfo`),
  ADD KEY `idio_infos_fk_user_ii_foreign` (`fk_user_ii`);

--
-- Indices de la tabla `obj_profs`
--
ALTER TABLE `obj_profs`
  ADD PRIMARY KEY (`id_obj`),
  ADD UNIQUE KEY `obj_profs_id_obj_unique` (`id_obj`),
  ADD KEY `obj_profs_fk_user_op_foreign` (`fk_user_op`);

--
-- Indices de la tabla `otros`
--
ALTER TABLE `otros`
  ADD PRIMARY KEY (`id_otros`),
  ADD UNIQUE KEY `otros_id_otros_unique` (`id_otros`),
  ADD KEY `otros_fk_user_o_foreign` (`fk_user_o`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `resumens`
--
ALTER TABLE `resumens`
  ADD PRIMARY KEY (`id_resumen`),
  ADD UNIQUE KEY `resumens_id_resumen_unique` (`id_resumen`),
  ADD KEY `resumens_fk_user_re_foreign` (`fk_user_re`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_id_unique` (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `user_designs_pdf`
--
ALTER TABLE `user_designs_pdf`
  ADD PRIMARY KEY (`id_user_designs_pdf`);

--
-- Indices de la tabla `user_designs_view`
--
ALTER TABLE `user_designs_view`
  ADD PRIMARY KEY (`id_user_designs_view`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catdesigns_pdf`
--
ALTER TABLE `catdesigns_pdf`
  MODIFY `id_designs_pdf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `catdesigns_view`
--
ALTER TABLE `catdesigns_view`
  MODIFY `id_designs_view` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `clas_conocimientos`
--
ALTER TABLE `clas_conocimientos`
  MODIFY `id_clas_conocimientos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `consulta_cv`
--
ALTER TABLE `consulta_cv`
  MODIFY `id_consulta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT de la tabla `datos_pers`
--
ALTER TABLE `datos_pers`
  MODIFY `id_datos_per` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `designview_stay`
--
ALTER TABLE `designview_stay`
  MODIFY `id_view_stay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `exp_profs`
--
ALTER TABLE `exp_profs`
  MODIFY `id_exprof` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `form_acas`
--
ALTER TABLE `form_acas`
  MODIFY `id_form_aca` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `form_ex_acas`
--
ALTER TABLE `form_ex_acas`
  MODIFY `id_form_exaca` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `idio_infos`
--
ALTER TABLE `idio_infos`
  MODIFY `id_idinfo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de la tabla `obj_profs`
--
ALTER TABLE `obj_profs`
  MODIFY `id_obj` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `otros`
--
ALTER TABLE `otros`
  MODIFY `id_otros` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `resumens`
--
ALTER TABLE `resumens`
  MODIFY `id_resumen` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `user_designs_pdf`
--
ALTER TABLE `user_designs_pdf`
  MODIFY `id_user_designs_pdf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `user_designs_view`
--
ALTER TABLE `user_designs_view`
  MODIFY `id_user_designs_view` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `consulta_cv`
--
ALTER TABLE `consulta_cv`
  ADD CONSTRAINT `consulta_cv_fk_user_consulta_foreign` FOREIGN KEY (`fk_user_consulta`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `datos_pers`
--
ALTER TABLE `datos_pers`
  ADD CONSTRAINT `datos_pers_fk_user_dp_foreign` FOREIGN KEY (`fk_user_dp`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `exp_profs`
--
ALTER TABLE `exp_profs`
  ADD CONSTRAINT `exp_profs_fk_user_ep_foreign` FOREIGN KEY (`fk_user_ep`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `form_acas`
--
ALTER TABLE `form_acas`
  ADD CONSTRAINT `form_acas_fk_user_fa_foreign` FOREIGN KEY (`fk_user_fa`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `form_ex_acas`
--
ALTER TABLE `form_ex_acas`
  ADD CONSTRAINT `form_ex_acas_fk_user_fe_foreign` FOREIGN KEY (`fk_user_fe`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `idio_infos`
--
ALTER TABLE `idio_infos`
  ADD CONSTRAINT `idio_infos_fk_user_ii_foreign` FOREIGN KEY (`fk_user_ii`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `obj_profs`
--
ALTER TABLE `obj_profs`
  ADD CONSTRAINT `obj_profs_fk_user_op_foreign` FOREIGN KEY (`fk_user_op`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `otros`
--
ALTER TABLE `otros`
  ADD CONSTRAINT `otros_fk_user_o_foreign` FOREIGN KEY (`fk_user_o`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `resumens`
--
ALTER TABLE `resumens`
  ADD CONSTRAINT `resumens_fk_user_re_foreign` FOREIGN KEY (`fk_user_re`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
