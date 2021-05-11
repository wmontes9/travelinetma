-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 11-05-2021 a las 22:10:26
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tmatravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividads`
--

DROP TABLE IF EXISTS `actividads`;
CREATE TABLE IF NOT EXISTS `actividads` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

DROP TABLE IF EXISTS `compra`;
CREATE TABLE IF NOT EXISTS `compra` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) DEFAULT NULL,
  `id_transaccion` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metodo` varchar(34) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_paquete` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `valor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descuento` int(11) DEFAULT '0',
  `otros_descuentos` int(11) DEFAULT NULL,
  `fecha` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`id`, `id_cliente`, `id_transaccion`, `metodo`, `id_paquete`, `valor`, `descuento`, `otros_descuentos`, `fecha`, `estado`, `created_at`, `updated_at`) VALUES
(5, 2, '19420-1618385357-52856', 'PSE', '6', '390000', 210000, 0, '2021-04-14', 'APPROVED', '2021-04-14 07:28:44', '2021-04-14 07:29:34'),
(6, 2, '19420-1618387073-19077', 'PSE', '6', '200000', 0, 0, '2021-04-14', 'APPROVED', '2021-04-14 07:57:40', '2021-04-14 07:58:06'),
(7, 2, '19420-1618442147-44431', 'PSE', '6', '400000', 0, 0, '2021-04-14', 'APPROVED', '2021-04-14 23:13:38', '2021-04-14 23:16:13'),
(8, 3, '19420-1620323943-22351', 'PSE', '6', '360000', 0, 0, '2021-05-06', 'APPROVED', '2021-05-06 17:51:01', '2021-05-06 17:59:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destinos`
--

DROP TABLE IF EXISTS `destinos`;
CREATE TABLE IF NOT EXISTS `destinos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_paquete` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `destinos_id_paquete_foreign` (`id_paquete`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `destinos`
--

INSERT INTO `destinos` (`id`, `id_paquete`, `nombre`, `created_at`, `updated_at`) VALUES
(6, 6, 'Sáchica', '2021-02-06 05:33:16', '2021-02-06 05:33:16'),
(7, 6, 'Tinjaca', '2021-02-06 05:37:59', '2021-02-06 05:37:59'),
(8, 6, 'Desierto de la candelaria', '2021-02-06 05:56:33', '2021-02-06 05:56:33'),
(9, 6, 'Taller del barro', '2021-02-06 05:59:53', '2021-02-06 05:59:53'),
(10, 6, 'Ráquira', '2021-02-06 06:06:25', '2021-02-06 06:06:25'),
(11, 6, 'Granja de las avestruces', '2021-02-06 06:11:10', '2021-02-06 06:11:10'),
(12, 7, 'Paipa', '2021-04-15 06:00:50', '2021-04-15 06:00:50'),
(13, 7, 'Pantano de Vargas', '2021-04-15 06:01:37', '2021-04-15 06:01:37'),
(14, 7, 'Cuitava', '2021-04-15 06:02:32', '2021-04-15 06:02:32'),
(15, 7, 'Playa Blanca', '2021-04-15 06:02:50', '2021-04-15 06:02:50'),
(16, 7, 'Tota', '2021-04-15 06:03:05', '2021-04-15 06:03:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_compra`
--

DROP TABLE IF EXISTS `detalle_compra`;
CREATE TABLE IF NOT EXISTS `detalle_compra` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_compra` bigint(20) UNSIGNED NOT NULL,
  `nombres` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eps` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo_documento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `documento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `descuento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `detalle_compra_id_compra_foreign` (`id_compra`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `detalle_compra`
--

INSERT INTO `detalle_compra` (`id`, `id_compra`, `nombres`, `apellidos`, `eps`, `tipo_documento`, `documento`, `edad`, `valor`, `descuento`, `created_at`, `updated_at`) VALUES
(11, 7, 'Jhony', 'A', 'confamiliar', 'CC', '3243', '22', '200000', '0', '2021-04-14 23:13:38', '2021-04-14 23:13:38'),
(10, 6, 'natalia', 'boyaca', 'confamiliar', 'RC', '1002709384', '26', '200000', '0', '2021-04-14 07:57:40', '2021-04-14 07:57:40'),
(9, 5, 'brayan', 'Nova', 'confamiliar', 'RC', '79915438', '17', '200000', '50000', '2021-04-14 07:28:44', '2021-04-14 07:28:44'),
(8, 5, 'valery', 'morales', 'confamiliar', 'RC', '324322', '4', '200000', '160000', '2021-04-14 07:28:44', '2021-04-14 07:28:44'),
(7, 5, 'Jhony', 'Boyaca', 'confamiliar', 'RC', '1002709384', '21', '200000', '0', '2021-04-14 07:28:44', '2021-04-14 07:28:44'),
(12, 7, 'Wilson', 'Montes', 'confamiliar', 'CC', '3213212321', '30', '200000', '0', '2021-04-14 23:13:38', '2021-04-14 23:13:38'),
(13, 8, 'Jhony', 'Boyaca', 'confamiliar', 'CC', '1002709384', '22', '180000', '0', '2021-05-06 17:51:01', '2021-05-06 17:51:01'),
(14, 8, 'Didier', 'Califa', 'No se sabe', 'CC', '35465446', '54', '180000', '0', '2021-05-06 17:51:02', '2021-05-06 17:51:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_servicio`
--

DROP TABLE IF EXISTS `detalle_servicio`;
CREATE TABLE IF NOT EXISTS `detalle_servicio` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_paquete` bigint(20) UNSIGNED NOT NULL,
  `id_servicio` bigint(20) UNSIGNED NOT NULL,
  `valor` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `detalle_servicio_id_paquete_index` (`id_paquete`),
  KEY `detalle_servicio_id_servicio_index` (`id_servicio`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `detalle_servicio`
--

INSERT INTO `detalle_servicio` (`id`, `id_paquete`, `id_servicio`, `valor`, `created_at`, `updated_at`) VALUES
(1, 6, 1, 80000.00, '2021-02-06 06:20:07', '2021-02-06 06:20:07'),
(3, 6, 5, 15000.00, '2021-02-06 06:20:07', '2021-02-06 06:20:07'),
(4, 6, 6, 60000.00, '2021-02-06 06:20:07', '2021-02-06 06:20:07'),
(5, 6, 7, 25000.00, '2021-02-06 06:20:07', '2021-02-06 06:20:07'),
(6, 7, 1, 80000.00, '2021-04-15 06:35:36', '2021-04-15 06:42:03'),
(13, 7, 2, 30000.00, '2021-05-06 22:02:38', '2021-05-06 22:02:38'),
(9, 7, 4, 20000.00, '2021-04-15 06:35:36', '2021-04-15 06:35:36'),
(10, 7, 5, 15000.00, '2021-04-15 06:35:36', '2021-04-15 06:42:03'),
(11, 7, 6, 60000.00, '2021-04-15 06:35:36', '2021-04-15 06:42:03'),
(12, 7, 7, 25000.00, '2021-04-15 06:42:03', '2021-04-15 06:42:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `establecimientos`
--

DROP TABLE IF EXISTS `establecimientos`;
CREATE TABLE IF NOT EXISTS `establecimientos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_tipo` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_imagen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `establecimientos_id_tipo_foreign` (`id_tipo`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `establecimientos`
--

INSERT INTO `establecimientos` (`id`, `id_tipo`, `nombre`, `direccion`, `telefono`, `descripcion`, `url`, `url_imagen`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hotel Ocetá', 'Cl. 19 #7-64, Tunja, Boyacá', '3124385634', 'Disfruta de la ciudad, visita y conoce lugares espectaculares, estamos ubicados estratégicamente en el centro histórico y financiero de la Ciudad de Tunja, a una cuadra de la Plaza de Bolívar, rodeado de bellas construcciones coloniales donde usted podrá desarrollar actividades comerciales y de negocios.', 'https://hotelocetatunja.com/', 'M5YlRB6Q2AfLDtePDRm8Q4q32bxqC8K8Egdxt5I4.png', '2021-05-06 22:30:40', '2021-05-06 22:30:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagens`
--

DROP TABLE IF EXISTS `imagens`;
CREATE TABLE IF NOT EXISTS `imagens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_destino` bigint(20) UNSIGNED NOT NULL,
  `url_imagen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `imagens_id_destino_foreign` (`id_destino`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `imagens`
--

INSERT INTO `imagens` (`id`, `id_destino`, `url_imagen`, `created_at`, `updated_at`) VALUES
(1, 6, 'lJBj4odNnFdiMzPlj7Vc1igzjGF39HyN2t0eG1eN.jpg', '2021-02-06 05:34:53', '2021-02-06 05:34:53'),
(2, 6, '994TDqEKsmJ3eai8oakNnGRk28sktcRMrJMbIzNe.jpg', '2021-02-06 05:35:11', '2021-02-06 05:35:11'),
(3, 6, 'gmwmQUhrxGYpFptToDnbLwxhNsjxNWxpOMwcjhgK.jpg', '2021-02-06 05:36:28', '2021-02-06 05:36:28'),
(4, 6, 'bKMpRwowyGCsJSaPtfN1sKntXqEYjAmfaDwdbQsE.jpg', '2021-02-06 05:39:36', '2021-02-06 05:39:36'),
(5, 7, 'tlHfXQQmoGaYf4ODfpGITvFMqHT3qGcjmzMzbe78.jpg', '2021-02-06 05:41:28', '2021-02-06 05:41:28'),
(6, 7, 'crhm97Y2LAuQ2GkTozca17GWI7eL8MVfw1fD1bah.jpg', '2021-02-06 05:42:19', '2021-02-06 05:42:19'),
(7, 7, 'S0WdCJGvmyw24huR1Bc4z7LmLekVrIoRr13Nh2Je.jpg', '2021-02-06 05:42:50', '2021-02-06 05:42:50'),
(8, 7, 'LwjsObpk6B7b5w5Wx2XHAdKuwrji3l5Mxc1UXeTy.jpg', '2021-02-06 05:55:27', '2021-02-06 05:55:27'),
(9, 8, '4UJGBeiGgFidIcGVM2AVD0vlL2iKNTgJjmmDKWyZ.jpg', '2021-02-06 05:57:21', '2021-02-06 05:57:21'),
(10, 8, 'ajgGqk4pcA8HebIyh2Sg0asigOF9xsil84KELlkb.jpg', '2021-02-06 05:58:03', '2021-02-06 05:58:03'),
(11, 8, 'diFBU3LVGg4y8ay9RbNxlaV0FB1bDYBTb6cWV2yK.jpg', '2021-02-06 05:58:55', '2021-02-06 05:58:55'),
(12, 8, 'j4IsCNHbHzC9Mw7vUUvlQ6CRtwxWb3lnTwXNuSUv.jpg', '2021-02-06 05:59:12', '2021-02-06 05:59:12'),
(13, 9, '1YBy9hK96kxrUNTspnpxsVr4YaH3XY6f6DtRe95O.jpg', '2021-02-06 06:03:40', '2021-02-06 06:03:40'),
(14, 9, 'wEqjzIXgY7uR1Bb1Hizn0pqs1giLFGZ1FoRdKohl.jpg', '2021-02-06 06:03:58', '2021-02-06 06:03:58'),
(15, 9, 'dgs2RNGZbu2GCnS0LOSnGBPhnFqNGGqrZn2wbgFW.jpg', '2021-02-06 06:04:35', '2021-02-06 06:04:35'),
(16, 9, 'YGpyav6QGzszK8DuVGl4sPcP7sjJP60KGJeP7W3U.jpg', '2021-02-06 06:04:58', '2021-02-06 06:04:58'),
(17, 10, 'NQUlBlSkP5kfXPrYIIQpCpy7aRNNiwQlA4wuaMh5.jpg', '2021-02-06 06:07:08', '2021-02-06 06:07:08'),
(18, 10, 'DmQay5F191J6Y5e1N7qv0hIgTk00u96zNG8IlLj2.jpg', '2021-02-06 06:07:41', '2021-02-06 06:07:41'),
(19, 10, 'f7icgxbsQaCKgHQyMi4vlPWuTnwo5K0gvSYpEi9k.jpg', '2021-02-06 06:09:12', '2021-02-06 06:09:12'),
(20, 11, 'idnYL2gxzMasqf6SVMvLhdJhDMymG6mb8FbyxJ0U.jpg', '2021-02-06 06:11:52', '2021-02-06 06:11:52'),
(21, 11, 'lGBxQo4bCIPGqjk95WZo5Z6oP5w5r6HZEZSBiqJG.jpg', '2021-02-06 06:12:13', '2021-02-06 06:12:13'),
(22, 11, 'ixyKL7eXWYr379NiKpkqtAdrTFbqWrE4TQqJ4ewd.jpg', '2021-02-06 06:12:40', '2021-02-06 06:13:59'),
(23, 15, 'frC7JKnekYSy0GmfwRWrK0qMPFMm92cDfhvak1lR.jpg', '2021-04-15 06:32:39', '2021-04-15 06:32:39'),
(24, 15, 'adMJb9o0WsVHXYCdm1XttBa8WlrD77WKxG7hDbTs.jpg', '2021-04-15 06:32:57', '2021-04-15 06:32:57'),
(25, 15, 'O2vbieQqWjTM95CvGjXzW1NOhK8kC5NU3NwJT3MF.jpg', '2021-04-15 06:33:14', '2021-04-15 06:33:14'),
(26, 15, 'xTWL0pZfuE1Ec017TuGcrhzxaC8nvjc8a96v6JGV.jpg', '2021-04-15 06:33:35', '2021-04-15 06:33:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `itinerarios`
--

DROP TABLE IF EXISTS `itinerarios`;
CREATE TABLE IF NOT EXISTS `itinerarios` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_paquete` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `itinerarios_id_paquete_foreign` (`id_paquete`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineas`
--

DROP TABLE IF EXISTS `lineas`;
CREATE TABLE IF NOT EXISTS `lineas` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vivencia` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `lineas`
--

INSERT INTO `lineas` (`id`, `image`, `nombre`, `vivencia`, `created_at`, `updated_at`) VALUES
(9, 'desiertoCandelaria.bmp.jpg', 'Súper línea', 'Disfruta de esta súper línea viajera, que te brinda la oportunidad de participar en varias actividades, realizando un increíble recorrido por diferentes Municipios de Boyacá en un solo día y con un único propósito: que, a través del viaje, queden guardadas en tus vivencias las tradiciones milenarias de nuestra tierra.\r\n</br>\r\nAcompáñanos a este extraordinario plan que te permite experimentar el Taller de la Tagua, el Taller del Barro, la visita al Monasterio del Desierto de la Candelaria, apreciar la ingeniosa Casa Ecológica, visitar “Gondava” el Maravilloso Parque de los Dinosaurios, explorar e interactuar en la Granja de los Avestruces y la Casa Terracota.', '2021-02-06 05:15:02', '2021-02-06 05:15:02'),
(10, 'mn2FvezMj2OMgXrMT4ignhfTzTfUDq9xdtaSCox5.jpg', 'Playa Andina', 'Este maravilloso plan turístico, nos entrega un recorrido que integra \r\nartesanía, gastronomía y geografía sin igual, permitiendo visitar la \r\nsorprendente Playa Blanca del Lago de Tota, adquirir elaboradas y \r\ntradicionales artesanías, disfrutar deliciosas y autóctonas muestras \r\ngastronómicas como lo son: los amasijos de Paipa, la especialidad de \r\nAquitania Trucha Arcoíris y los deliciosos postres de Iza.', '2021-04-15 05:51:34', '2021-04-15 05:51:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_11_02_165209_create_lineas_table', 1),
(5, '2019_11_02_165240_create_paquetes_table', 1),
(6, '2019_11_02_165308_create_destinos_table', 1),
(7, '2019_11_02_165309_create_tipos_table', 1),
(8, '2019_11_02_165402_create_tipo_lineas_table', 1),
(9, '2019_11_02_165422_create_servicios_table', 1),
(10, '2019_11_02_165450_create_imagens_table', 1),
(11, '2019_11_02_165538_create_itinerarios_table', 1),
(12, '2019_11_27_225635_create_actividads_table', 2),
(13, '2021_01_12_204145_add_detalle_servicio', 2),
(14, '2021_01_13_014837_add_table_rol', 2),
(15, '2021_01_13_015633_add_table_type_user', 2),
(16, '2021_01_13_020334_rename_colums_table_user', 2),
(17, '2021_01_21_204353_add_table_tarifa', 3),
(19, '2021_01_23_001318_add_attr_in_table_lineas', 4),
(20, '2021_02_03_143517_create_tipo__establecimientos_table', 5),
(21, '2021_02_03_143518_create_establecimientos_table', 5),
(22, '2021_02_04_234403_add_table_compra', 6),
(23, '2021_02_05_000140_add_table_detalle_compra', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquetes`
--

DROP TABLE IF EXISTS `paquetes`;
CREATE TABLE IF NOT EXISTS `paquetes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_linea` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duracion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `paquetes_id_linea_foreign` (`id_linea`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `paquetes`
--

INSERT INTO `paquetes` (`id`, `id_linea`, `nombre`, `duracion`, `valor`, `created_at`, `updated_at`) VALUES
(6, 9, 'Pasadía', '1 Dia', '200000', '2021-02-06 05:19:43', '2021-05-06 22:48:48'),
(7, 10, 'Pasadia', '1', '200000', '2021-04-15 05:54:20', '2021-04-15 05:54:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rols`
--

DROP TABLE IF EXISTS `rols`;
CREATE TABLE IF NOT EXISTS `rols` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `rols`
--

INSERT INTO `rols` (`id`, `tipo`, `created_at`, `updated_at`) VALUES
(1, 'SuperAdmin', '2021-01-13 07:22:39', '2021-01-13 07:22:39'),
(2, 'Admin', '2021-01-13 07:22:39', '2021-01-13 07:22:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

DROP TABLE IF EXISTS `servicios`;
CREATE TABLE IF NOT EXISTS `servicios` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_paquete` bigint(20) UNSIGNED DEFAULT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `servicios_id_paquete_foreign` (`id_paquete`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `id_paquete`, `nombre`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Transporte', '2021-01-26 08:36:35', '2021-01-26 08:36:35'),
(2, NULL, 'Almuerzo', '2021-01-26 08:36:55', '2021-01-26 08:36:55'),
(3, NULL, 'Hospedaje', '2021-01-26 08:37:04', '2021-01-26 08:37:04'),
(4, NULL, 'Desayuno', '2021-01-26 08:37:14', '2021-01-26 08:37:14'),
(5, NULL, 'Seguro', '2021-01-26 08:37:32', '2021-01-26 08:37:32'),
(6, NULL, 'Entradas a las actividades', '2021-01-26 08:37:43', '2021-01-26 08:37:43'),
(7, NULL, 'Guía turístico', '2021-01-26 08:37:52', '2021-01-26 08:37:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifa`
--

DROP TABLE IF EXISTS `tarifa`;
CREATE TABLE IF NOT EXISTS `tarifa` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_paquete` bigint(20) UNSIGNED NOT NULL,
  `edad_min` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edad_max` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `valor` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tarifa_id_paquete_index` (`id_paquete`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tarifa`
--

INSERT INTO `tarifa` (`id`, `id_paquete`, `edad_min`, `edad_max`, `valor`, `created_at`, `updated_at`) VALUES
(1, 6, '18', '100', 0, '2021-02-06 06:22:07', '2021-02-06 06:22:07'),
(2, 6, '0', '5', 80, '2021-02-06 06:28:39', '2021-02-06 06:28:39'),
(3, 6, '5', '17', 25, '2021-02-06 06:29:09', '2021-02-06 06:29:09'),
(4, 7, '0', '5', 80, '2021-04-15 06:37:25', '2021-04-15 06:37:25'),
(5, 7, '5', '17', 25, '2021-04-15 06:39:11', '2021-04-15 06:39:11'),
(6, 7, '18', '100', 0, '2021-04-15 06:39:33', '2021-04-15 06:39:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

DROP TABLE IF EXISTS `tipos`;
CREATE TABLE IF NOT EXISTS `tipos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipos`
--

INSERT INTO `tipos` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'pedagogica', NULL, NULL),
(2, 'turistica', NULL, NULL),
(3, 'viajera', NULL, NULL),
(4, 'Educativa', '2021-01-22 20:47:48', '2021-01-22 20:47:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

DROP TABLE IF EXISTS `tipo_documento`;
CREATE TABLE IF NOT EXISTS `tipo_documento` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sigla` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`id`, `tipo`, `sigla`, `created_at`, `updated_at`) VALUES
(1, 'RC - Registro Civil', 'RC', NULL, NULL),
(2, 'TI - Tarjeta de identidad', 'TI', NULL, NULL),
(3, 'CC - Cédula de ciudadanía', 'CC', NULL, NULL),
(4, 'CE - Cédula de extranjería', 'CE', NULL, NULL),
(5, 'PA - Pasaporte', 'PA', NULL, NULL),
(6, 'MS - Menor sin identificación', 'MS', NULL, NULL),
(7, 'AS - Adulto sin identidad.', 'AS', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_lineas`
--

DROP TABLE IF EXISTS `tipo_lineas`;
CREATE TABLE IF NOT EXISTS `tipo_lineas` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_linea` bigint(20) UNSIGNED NOT NULL,
  `id_tipo` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tipo_lineas_id_linea_foreign` (`id_linea`),
  KEY `tipo_lineas_id_tipo_foreign` (`id_tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_lineas`
--

INSERT INTO `tipo_lineas` (`id`, `id_linea`, `id_tipo`, `created_at`, `updated_at`) VALUES
(1, 9, 3, '2021-02-06 05:15:02', '2021-02-06 05:15:02'),
(2, 10, 2, '2021-04-15 05:51:34', '2021-04-15 05:51:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo__establecimientos`
--

DROP TABLE IF EXISTS `tipo__establecimientos`;
CREATE TABLE IF NOT EXISTS `tipo__establecimientos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo__establecimientos`
--

INSERT INTO `tipo__establecimientos` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Hoteles', '2021-05-06 22:28:46', '2021-05-06 22:28:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type_user`
--

DROP TABLE IF EXISTS `type_user`;
CREATE TABLE IF NOT EXISTS `type_user` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_rol` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `type_user_id_user_index` (`id_user`),
  KEY `type_user_id_rol_index` (`id_rol`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `type_user`
--

INSERT INTO `type_user` (`id`, `id_user`, `id_rol`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `foto` varchar(198) COLLATE utf8mb4_unicode_ci DEFAULT 'avatar.png',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `apellidos` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `documento` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `foto`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `apellidos`, `documento`, `telefono`) VALUES
(1, 'avatar.png', 'admin', 'admin@admin.com', NULL, '$2y$10$q6JfoCm.a6feHyKmw7pUmecepFIS91fhO84eLHZ4CU/mnfranNy0O', NULL, '2021-01-13 07:23:13', '2021-01-13 07:23:13', 'sistema', '00000000000', '00000000000'),
(2, 'avatar.png', 'jhony', 'jhonnova19@gmail.com', NULL, NULL, NULL, '2021-04-14 03:30:18', '2021-04-14 03:30:18', NULL, NULL, '3138582316'),
(3, 'avatar.png', 'Wilson', 'wmontes@gmail.com', NULL, NULL, NULL, '2021-05-06 17:51:01', '2021-05-06 17:51:01', NULL, NULL, '31346546');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `destinos`
--
ALTER TABLE `destinos`
  ADD CONSTRAINT `destinos_id_paquete_foreign` FOREIGN KEY (`id_paquete`) REFERENCES `paquetes` (`id`);

--
-- Filtros para la tabla `imagens`
--
ALTER TABLE `imagens`
  ADD CONSTRAINT `imagens_id_destino_foreign` FOREIGN KEY (`id_destino`) REFERENCES `destinos` (`id`);

--
-- Filtros para la tabla `itinerarios`
--
ALTER TABLE `itinerarios`
  ADD CONSTRAINT `itinerarios_id_paquete_foreign` FOREIGN KEY (`id_paquete`) REFERENCES `paquetes` (`id`);

--
-- Filtros para la tabla `paquetes`
--
ALTER TABLE `paquetes`
  ADD CONSTRAINT `paquetes_id_linea_foreign` FOREIGN KEY (`id_linea`) REFERENCES `lineas` (`id`);

--
-- Filtros para la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD CONSTRAINT `servicios_id_paquete_foreign` FOREIGN KEY (`id_paquete`) REFERENCES `paquetes` (`id`);

--
-- Filtros para la tabla `tipo_lineas`
--
ALTER TABLE `tipo_lineas`
  ADD CONSTRAINT `tipo_lineas_id_linea_foreign` FOREIGN KEY (`id_linea`) REFERENCES `lineas` (`id`),
  ADD CONSTRAINT `tipo_lineas_id_tipo_foreign` FOREIGN KEY (`id_tipo`) REFERENCES `tipos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
