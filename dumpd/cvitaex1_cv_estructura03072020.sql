-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-07-2020 a las 21:04:43
-- Versión del servidor: 10.4.10-MariaDB
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
-- Base de datos: `cvitaex1_cv`
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT 0,
  `confirmation_code` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  MODIFY `id_designs_pdf` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `catdesigns_view`
--
ALTER TABLE `catdesigns_view`
  MODIFY `id_designs_view` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clas_conocimientos`
--
ALTER TABLE `clas_conocimientos`
  MODIFY `id_clas_conocimientos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `consulta_cv`
--
ALTER TABLE `consulta_cv`
  MODIFY `id_consulta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `datos_pers`
--
ALTER TABLE `datos_pers`
  MODIFY `id_datos_per` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `designview_stay`
--
ALTER TABLE `designview_stay`
  MODIFY `id_view_stay` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `exp_profs`
--
ALTER TABLE `exp_profs`
  MODIFY `id_exprof` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `form_acas`
--
ALTER TABLE `form_acas`
  MODIFY `id_form_aca` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `form_ex_acas`
--
ALTER TABLE `form_ex_acas`
  MODIFY `id_form_exaca` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `idio_infos`
--
ALTER TABLE `idio_infos`
  MODIFY `id_idinfo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `obj_profs`
--
ALTER TABLE `obj_profs`
  MODIFY `id_obj` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `otros`
--
ALTER TABLE `otros`
  MODIFY `id_otros` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `resumens`
--
ALTER TABLE `resumens`
  MODIFY `id_resumen` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user_designs_pdf`
--
ALTER TABLE `user_designs_pdf`
  MODIFY `id_user_designs_pdf` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user_designs_view`
--
ALTER TABLE `user_designs_view`
  MODIFY `id_user_designs_view` int(11) NOT NULL AUTO_INCREMENT;

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
