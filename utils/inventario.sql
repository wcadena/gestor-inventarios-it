-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-10-2017 a las 22:38:03
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db69751_inventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arbols`
--

CREATE TABLE `arbols` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre_comun` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_cientifico` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `patrimonial` enum('si','no') COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagen` blob NOT NULL,
  `historia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lat` double(20,10) NOT NULL,
  `lng` double(20,10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `arbols`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arbol__padrinos`
--

CREATE TABLE `arbol__padrinos` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `arbol_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `id` int(10) UNSIGNED NOT NULL,
  `area` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `empresa` varchar(191) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `areas`
--



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditorias`
--

CREATE TABLE `auditorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `accion` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `controller` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mensaje` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacoras`
--

CREATE TABLE `bitacoras` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_equipos` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `custodio_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `problema` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `solucion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estado` enum('enviado','recibido','en_reparacion','espera_repuesto','reparado','para_dar_baja','en_garantía') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `bitacoras`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `busquedas`
--

CREATE TABLE `busquedas` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `palabra_q` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `instancia` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `instancia_id` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `dato` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `busquedas`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache`
--

CREATE TABLE `cache` (
  `key` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `check_lists`
--

CREATE TABLE `check_lists` (
  `id` int(10) UNSIGNED NOT NULL,
  `area_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_check_lists` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `unik_check_lists` char(36) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `check_lists`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `check_list__opciones_check_lists`
--

CREATE TABLE `check_list__opciones_check_lists` (
  `id` int(10) UNSIGNED NOT NULL,
  `check_list_id` int(10) UNSIGNED NOT NULL,
  `opciones_check_list_id` int(10) UNSIGNED DEFAULT NULL,
  `valor1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `valor2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `valor3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `valor4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `valor5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `valor6` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `valor7` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `valor8` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `valor9` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `valor10` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `atributo` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `check_list__opciones_check_lists`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracions`
--

CREATE TABLE `configuracions` (
  `id` int(10) UNSIGNED NOT NULL,
  `atributo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` enum('texto','lista','num') COLLATE utf8_unicode_ci NOT NULL,
  `valores_fuente` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fijo` enum('FIJO','MOVIL') COLLATE utf8_unicode_ci NOT NULL,
  `valor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `empresa` varchar(191) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `configuracions`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `custodios`
--

CREATE TABLE `custodios` (
  `id` int(10) UNSIGNED NOT NULL,
  `pais` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ciudad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `documentoIdentificacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cargo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `compania` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado` enum('ACTIVO','INACTIVO') COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nombre_responsable` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `area_piso` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `notificado` int(10) UNSIGNED DEFAULT '0',
  `verification_token` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `token` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direccion_preferida` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `longitud_1` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `latitud_1` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `longitud_2` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `latitud_2` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono_celular_notificacion` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slack_id` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `custodios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `denuncias`
--

CREATE TABLE `denuncias` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagen` blob NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lugar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lat` double(20,10) NOT NULL,
  `lng` double(20,10) NOT NULL,
  `motivo_den_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `denuncias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `empresa` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `empresas`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id` int(10) UNSIGNED NOT NULL,
  `modelo_equipo_id` int(10) UNSIGNED NOT NULL,
  `orden_de_compra_id` int(10) UNSIGNED NOT NULL,
  `custodio_id` int(10) UNSIGNED NOT NULL,
  `estacione_id` int(10) UNSIGNED NOT NULL,
  `area_id` int(10) UNSIGNED NOT NULL,
  `check_list_id` int(10) UNSIGNED DEFAULT NULL,
  `imagen` blob,
  `num_cajas` int(11) DEFAULT NULL,
  `sociedad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `no_serie` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `codigo_barras` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `codigo_avianca` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `codigo_otro` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estado` enum('BUENO','MALO','NUEVO') COLLATE utf8_unicode_ci NOT NULL,
  `estatus` enum('VIGENTE','BODEGA','BAJA') COLLATE utf8_unicode_ci NOT NULL,
  `garantia` enum('SI','NO') COLLATE utf8_unicode_ci NOT NULL,
  `observaciones` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `codigo_contable` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hp_warrantyLevel` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hp_endDate` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hp_displaySerialNumber` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hp_modelNumber` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hp_countryOfPurchase` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hp_newProduct_seriesName` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hp_newProduct_imageUrl` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hp_warrantyResultRedirectUrl` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `equipos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos_logs`
--

CREATE TABLE `equipos_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_equipos` int(10) UNSIGNED NOT NULL,
  `acciondb` enum('crear','actualizar','editar','borrar') COLLATE utf8_unicode_ci NOT NULL,
  `modelo_equipo_id` int(10) UNSIGNED NOT NULL,
  `orden_de_compra_id` int(10) UNSIGNED NOT NULL,
  `custodio_id` int(10) UNSIGNED NOT NULL,
  `estacione_id` int(10) UNSIGNED NOT NULL,
  `area_id` int(10) UNSIGNED NOT NULL,
  `check_list_id` int(10) UNSIGNED DEFAULT NULL,
  `imagen` blob,
  `num_cajas` int(11) DEFAULT NULL,
  `sociedad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `no_serie` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `codigo_barras` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `codigo_avianca` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `codigo_otro` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estado` enum('BUENO','MALO','NUEVO') COLLATE utf8_unicode_ci NOT NULL,
  `estatus` enum('VIGENTE','BODEGA','BAJA') COLLATE utf8_unicode_ci NOT NULL,
  `garantia` enum('SI','NO') COLLATE utf8_unicode_ci NOT NULL,
  `observaciones` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `codigo_contable` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hp_warrantyLevel` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hp_endDate` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hp_displaySerialNumber` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hp_modelNumber` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hp_countryOfPurchase` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hp_newProduct_seriesName` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hp_newProduct_imageUrl` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hp_warrantyResultRedirectUrl` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_users` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `equipos_logs`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estaciones`
--

CREATE TABLE `estaciones` (
  `id` int(10) UNSIGNED NOT NULL,
  `estacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pais` enum('ECUADOR','COLOMBIA','EL SALVADOR') COLLATE utf8_unicode_ci NOT NULL,
  `nombre_largo` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `empresa` varchar(191) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `estaciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `facebook_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informe_manto_prevs`
--

CREATE TABLE `informe_manto_prevs` (
  `id` int(10) UNSIGNED NOT NULL,
  `custodio_id` int(10) UNSIGNED NOT NULL,
  `area_id` int(10) UNSIGNED NOT NULL,
  `no_orden` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_solicitud` date NOT NULL,
  `fecha_ejecucion` date NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fin` time NOT NULL,
  `informe_manto_prev_cate_id` int(10) UNSIGNED NOT NULL,
  `requerimiento` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `solucion` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resolucion` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informe_manto_prev_cates`
--

CREATE TABLE `informe_manto_prev_cates` (
  `id` int(10) UNSIGNED NOT NULL,
  `categoria` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informe_manto_prev_tecs`
--

CREATE TABLE `informe_manto_prev_tecs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `informe_manto_prev_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

/*CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
*/
--
-- Volcado de datos para la tabla `migrations`
--

--
-- Estructura de tabla para la tabla `modelo_equipos`
--

CREATE TABLE `modelo_equipos` (
  `id` int(10) UNSIGNED NOT NULL,
  `modelo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fabricante` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `garantia_anios` int(11) NOT NULL,
  `tipo_equipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `modelo_equipos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motivos__denuncias`
--

CREATE TABLE `motivos__denuncias` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre_denuncia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `motivos__denuncias`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `notifiable_id` int(10) UNSIGNED NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_access_tokens`
--
/*
CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `oauth_access_tokens`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `scopes` text COLLATE utf8_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `oauth_auth_codes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `oauth_clients`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `oauth_personal_access_clients`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `oauth_refresh_tokens`
--
*/

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opciones_check_lists`
--

CREATE TABLE `opciones_check_lists` (
  `id` int(10) UNSIGNED NOT NULL,
  `area_id` int(10) UNSIGNED NOT NULL,
  `atributo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mandatorio` enum('SI','NO') COLLATE utf8_unicode_ci NOT NULL,
  `tipo` enum('si-no','text','equipo_id','fecha','si-no&version','ip','equipo_id&texto','ARD','CM','FM','SAPE','CM TA','SAPE TA','CM AV','SAPE AV','OBSERVACIONES') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `opciones_check_lists`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_de_compras`
--

CREATE TABLE `orden_de_compras` (
  `id` int(10) UNSIGNED NOT NULL,
  `ordenCompra` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_compra` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `orden_de_compras`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `o_auth_apps`
--

CREATE TABLE `o_auth_apps` (
  `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `token_secret` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `client_secret` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `activo` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `token_type` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `expires_in` date DEFAULT NULL,
  `access_token` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `refresh_token` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `o_auth_apps`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre_comun` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_cientifico` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `patrimonial` tinyint(1) NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `historia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lng` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puestos`
--

CREATE TABLE `puestos` (
  `id` int(10) UNSIGNED NOT NULL,
  `ubicacion_id` int(10) UNSIGNED DEFAULT NULL,
  `codigo` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `detalle` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `x` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `y` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estado` enum('OCUPADO','RESERVADO','LIBRE') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `puestos`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puestos_custodios`
--

CREATE TABLE `puestos_custodios` (
  `id` int(10) UNSIGNED NOT NULL,
  `puesto_id` int(10) UNSIGNED DEFAULT NULL,
  `custodio_id` int(10) UNSIGNED NOT NULL,
  `fecha_inicio` datetime NOT NULL,
  `fecha_fin` datetime DEFAULT NULL,
  `horas_trabajadas` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `puestos_custodios`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repo_novedades`
--

CREATE TABLE `repo_novedades` (
  `id` int(10) UNSIGNED NOT NULL,
  `custodio_id` int(10) UNSIGNED NOT NULL,
  `fecha_novedades` date NOT NULL,
  `correo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `novedad` enum('Asignación','Reasignación','Baja') COLLATE utf8_unicode_ci NOT NULL,
  `observaciones` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `antiguo_custodio_id` int(10) UNSIGNED NOT NULL,
  `traslado_custodio_id` int(10) UNSIGNED DEFAULT NULL,
  `estado` enum('Traslado','Devolución') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `repo_novedades`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repo_novedades_detalles`
--

CREATE TABLE `repo_novedades_detalles` (
  `id` int(10) UNSIGNED NOT NULL,
  `repo_novedades_id` int(10) UNSIGNED NOT NULL,
  `id_equipos` int(10) UNSIGNED NOT NULL,
  `modelo_equipo_id` int(10) UNSIGNED NOT NULL,
  `orden_de_compra_id` int(10) UNSIGNED NOT NULL,
  `custodio_id` int(10) UNSIGNED NOT NULL,
  `estacione_id` int(10) UNSIGNED NOT NULL,
  `area_id` int(10) UNSIGNED NOT NULL,
  `check_list_id` int(10) UNSIGNED DEFAULT NULL,
  `imagen` blob,
  `num_cajas` int(11) DEFAULT NULL,
  `sociedad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `no_serie` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `codigo_barras` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `codigo_avianca` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `codigo_otro` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estado` enum('BUENO','MALO','NUEVO') COLLATE utf8_unicode_ci NOT NULL,
  `estatus` enum('VIGENTE','BODEGA','BAJA') COLLATE utf8_unicode_ci NOT NULL,
  `garantia` enum('SI','NO') COLLATE utf8_unicode_ci NOT NULL,
  `observaciones` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `repo_novedades_detalles`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacions`
--

CREATE TABLE `ubicacions` (
  `id` int(10) UNSIGNED NOT NULL,
  `estacione_id` int(10) UNSIGNED NOT NULL,
  `edificio` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `piso` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `area_id` int(10) UNSIGNED DEFAULT NULL,
  `imagen` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `ubicacions`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rol` enum('usuario','administrador','system','registrado','planta_fisica','recursos_humanos','encargado_activos_fijos','sistemas') COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `facebook_user_id` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `token` char(36) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `verified` varchar(191) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `verification_token` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `documentoIdentificacion` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `empresa` varchar(191) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--


--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `arbols`
--
ALTER TABLE `arbols`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `arbol__padrinos`
--
ALTER TABLE `arbol__padrinos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `arbol__padrinos_arbol_id_foreign` (`arbol_id`),
  ADD KEY `arbol__padrinos_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `areas_empresa_foreign` (`empresa`);

--
-- Indices de la tabla `auditorias`
--
ALTER TABLE `auditorias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auditorias_users_id_foreign` (`users_id`);

--
-- Indices de la tabla `bitacoras`
--
ALTER TABLE `bitacoras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bitacoras_custodio_id_foreign` (`custodio_id`),
  ADD KEY `bitacoras_id_equipos_foreign` (`id_equipos`),
  ADD KEY `bitacoras_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `busquedas`
--
ALTER TABLE `busquedas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `busquedas_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `cache`
--
ALTER TABLE `cache`
  ADD UNIQUE KEY `cache_key_unique` (`key`);

--
-- Indices de la tabla `check_lists`
--
ALTER TABLE `check_lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `check_lists_area_id_foreign` (`area_id`),
  ADD KEY `check_lists_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `check_list__opciones_check_lists`
--
ALTER TABLE `check_list__opciones_check_lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `check_list__opciones_check_lists_check_list_id_foreign` (`check_list_id`),
  ADD KEY `check_list__opciones_check_lists_opciones_check_list_id_foreign` (`opciones_check_list_id`);

--
-- Indices de la tabla `configuracions`
--
ALTER TABLE `configuracions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `configuracions_empresa_foreign` (`empresa`);

--
-- Indices de la tabla `custodios`
--
ALTER TABLE `custodios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `custodios_token_unique` (`token`);

--
-- Indices de la tabla `denuncias`
--
ALTER TABLE `denuncias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `denuncias_motivo_den_id_foreign` (`motivo_den_id`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD UNIQUE KEY `empresas_empresa_unique` (`empresa`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipos_modelo_equipo_id_foreign` (`modelo_equipo_id`),
  ADD KEY `equipos_orden_de_compra_id_foreign` (`orden_de_compra_id`),
  ADD KEY `equipos_custodio_id_foreign` (`custodio_id`),
  ADD KEY `equipos_estacione_id_foreign` (`estacione_id`),
  ADD KEY `equipos_area_id_foreign` (`area_id`),
  ADD KEY `equipos_check_list_id_foreign` (`check_list_id`);

--
-- Indices de la tabla `equipos_logs`
--
ALTER TABLE `equipos_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estaciones`
--
ALTER TABLE `estaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `estaciones_empresa_foreign` (`empresa`);

--
-- Indices de la tabla `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `events_facebook_id_index` (`facebook_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `informe_manto_prevs`
--
ALTER TABLE `informe_manto_prevs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `informe_manto_prevs_custodio_id_foreign` (`custodio_id`),
  ADD KEY `informe_manto_prevs_area_id_foreign` (`area_id`),
  ADD KEY `informe_manto_prevs_informe_manto_prev_cate_id_foreign` (`informe_manto_prev_cate_id`);

--
-- Indices de la tabla `informe_manto_prev_cates`
--
ALTER TABLE `informe_manto_prev_cates`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `informe_manto_prev_tecs`
--
ALTER TABLE `informe_manto_prev_tecs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `informe_manto_prev_tecs_user_id_foreign` (`user_id`),
  ADD KEY `informe_manto_prev_tecs_informe_manto_prev_id_foreign` (`informe_manto_prev_id`);

--
-- Indices de la tabla `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_reserved_at_index` (`queue`,`reserved_at`);

--
-- Indices de la tabla `modelo_equipos`
--
ALTER TABLE `modelo_equipos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `motivos__denuncias`
--
ALTER TABLE `motivos__denuncias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_id_notifiable_type_index` (`notifiable_id`,`notifiable_type`);
/*
--
-- Indices de la tabla `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indices de la tabla `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indices de la tabla `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indices de la tabla `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);
*/
--
-- Indices de la tabla `opciones_check_lists`
--
ALTER TABLE `opciones_check_lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `opciones_check_lists_area_id_foreign` (`area_id`);

--
-- Indices de la tabla `orden_de_compras`
--
ALTER TABLE `orden_de_compras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `o_auth_apps`
--
ALTER TABLE `o_auth_apps`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `puestos`
--
ALTER TABLE `puestos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `puestos_codigo_unique` (`codigo`),
  ADD KEY `puestos_ubicacion_id_foreign` (`ubicacion_id`);

--
-- Indices de la tabla `puestos_custodios`
--
ALTER TABLE `puestos_custodios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `puestos_custodios_puesto_id_foreign` (`puesto_id`),
  ADD KEY `puestos_custodios_custodio_id_foreign` (`custodio_id`);

--
-- Indices de la tabla `repo_novedades`
--
ALTER TABLE `repo_novedades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `repo_novedades_custodio_id_foreign` (`custodio_id`),
  ADD KEY `repo_novedades_antiguo_custodio_id_foreign` (`antiguo_custodio_id`),
  ADD KEY `repo_novedades_traslado_custodio_id_foreign` (`traslado_custodio_id`);

--
-- Indices de la tabla `repo_novedades_detalles`
--
ALTER TABLE `repo_novedades_detalles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `repo_novedades_detalles_repo_novedades_id_foreign` (`repo_novedades_id`),
  ADD KEY `repo_novedades_detalles_id_equipos_foreign` (`id_equipos`),
  ADD KEY `repo_novedades_detalles_modelo_equipo_id_foreign` (`modelo_equipo_id`),
  ADD KEY `repo_novedades_detalles_orden_de_compra_id_foreign` (`orden_de_compra_id`),
  ADD KEY `repo_novedades_detalles_custodio_id_foreign` (`custodio_id`),
  ADD KEY `repo_novedades_detalles_estacione_id_foreign` (`estacione_id`),
  ADD KEY `repo_novedades_detalles_area_id_foreign` (`area_id`),
  ADD KEY `repo_novedades_detalles_check_list_id_foreign` (`check_list_id`);

--
-- Indices de la tabla `ubicacions`
--
ALTER TABLE `ubicacions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ubicacions_estacione_id_foreign` (`estacione_id`),
  ADD KEY `ubicacions_area_id_foreign` (`area_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_empresa_foreign` (`empresa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `arbols`
--
ALTER TABLE `arbols`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `arbol__padrinos`
--
ALTER TABLE `arbol__padrinos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT de la tabla `auditorias`
--
ALTER TABLE `auditorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `bitacoras`
--
ALTER TABLE `bitacoras`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `busquedas`
--
ALTER TABLE `busquedas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `check_lists`
--
ALTER TABLE `check_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `check_list__opciones_check_lists`
--
ALTER TABLE `check_list__opciones_check_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `configuracions`
--
ALTER TABLE `configuracions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `custodios`
--
ALTER TABLE `custodios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `denuncias`
--
ALTER TABLE `denuncias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `equipos_logs`
--
ALTER TABLE `equipos_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `estaciones`
--
ALTER TABLE `estaciones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `informe_manto_prevs`
--
ALTER TABLE `informe_manto_prevs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `informe_manto_prev_cates`
--
ALTER TABLE `informe_manto_prev_cates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `informe_manto_prev_tecs`
--
ALTER TABLE `informe_manto_prev_tecs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `modelo_equipos`
--
ALTER TABLE `modelo_equipos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT de la tabla `motivos__denuncias`
--
ALTER TABLE `motivos__denuncias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `oauth_clients`
--
-- ALTER TABLE `oauth_clients`
--  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `oauth_personal_access_clients`
--
-- ALTER TABLE `oauth_personal_access_clients`
--  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `opciones_check_lists`
--
ALTER TABLE `opciones_check_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `orden_de_compras`
--
ALTER TABLE `orden_de_compras`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `puestos`
--
ALTER TABLE `puestos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `puestos_custodios`
--
ALTER TABLE `puestos_custodios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `repo_novedades`
--
ALTER TABLE `repo_novedades`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `repo_novedades_detalles`
--
ALTER TABLE `repo_novedades_detalles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ubicacions`
--
ALTER TABLE `ubicacions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `arbol__padrinos`
--
ALTER TABLE `arbol__padrinos`
  ADD CONSTRAINT `arbol__padrinos_arbol_id_foreign` FOREIGN KEY (`arbol_id`) REFERENCES `arbols` (`id`),
  ADD CONSTRAINT `arbol__padrinos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `areas`
--
ALTER TABLE `areas`
  ADD CONSTRAINT `areas_empresa_foreign` FOREIGN KEY (`empresa`) REFERENCES `empresas` (`empresa`);

--
-- Filtros para la tabla `auditorias`
--
ALTER TABLE `auditorias`
  ADD CONSTRAINT `auditorias_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `bitacoras`
--
ALTER TABLE `bitacoras`
  ADD CONSTRAINT `bitacoras_custodio_id_foreign` FOREIGN KEY (`custodio_id`) REFERENCES `custodios` (`id`),
  ADD CONSTRAINT `bitacoras_id_equipos_foreign` FOREIGN KEY (`id_equipos`) REFERENCES `equipos` (`id`),
  ADD CONSTRAINT `bitacoras_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `busquedas`
--
ALTER TABLE `busquedas`
  ADD CONSTRAINT `busquedas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `check_lists`
--
ALTER TABLE `check_lists`
  ADD CONSTRAINT `check_lists_area_id_foreign` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`),
  ADD CONSTRAINT `check_lists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `check_list__opciones_check_lists`
--
ALTER TABLE `check_list__opciones_check_lists`
  ADD CONSTRAINT `check_list__opciones_check_lists_check_list_id_foreign` FOREIGN KEY (`check_list_id`) REFERENCES `check_lists` (`id`),
  ADD CONSTRAINT `check_list__opciones_check_lists_opciones_check_list_id_foreign` FOREIGN KEY (`opciones_check_list_id`) REFERENCES `opciones_check_lists` (`id`);

--
-- Filtros para la tabla `configuracions`
--
ALTER TABLE `configuracions`
  ADD CONSTRAINT `configuracions_empresa_foreign` FOREIGN KEY (`empresa`) REFERENCES `empresas` (`empresa`);

--
-- Filtros para la tabla `denuncias`
--
ALTER TABLE `denuncias`
  ADD CONSTRAINT `denuncias_motivo_den_id_foreign` FOREIGN KEY (`motivo_den_id`) REFERENCES `motivos__denuncias` (`id`);

--
-- Filtros para la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD CONSTRAINT `equipos_area_id_foreign` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`),
  ADD CONSTRAINT `equipos_check_list_id_foreign` FOREIGN KEY (`check_list_id`) REFERENCES `check_lists` (`id`),
  ADD CONSTRAINT `equipos_custodio_id_foreign` FOREIGN KEY (`custodio_id`) REFERENCES `custodios` (`id`),
  ADD CONSTRAINT `equipos_estacione_id_foreign` FOREIGN KEY (`estacione_id`) REFERENCES `estaciones` (`id`),
  ADD CONSTRAINT `equipos_modelo_equipo_id_foreign` FOREIGN KEY (`modelo_equipo_id`) REFERENCES `modelo_equipos` (`id`),
  ADD CONSTRAINT `equipos_orden_de_compra_id_foreign` FOREIGN KEY (`orden_de_compra_id`) REFERENCES `orden_de_compras` (`id`);

--
-- Filtros para la tabla `estaciones`
--
ALTER TABLE `estaciones`
  ADD CONSTRAINT `estaciones_empresa_foreign` FOREIGN KEY (`empresa`) REFERENCES `empresas` (`empresa`);

--
-- Filtros para la tabla `informe_manto_prevs`
--
ALTER TABLE `informe_manto_prevs`
  ADD CONSTRAINT `informe_manto_prevs_area_id_foreign` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`),
  ADD CONSTRAINT `informe_manto_prevs_custodio_id_foreign` FOREIGN KEY (`custodio_id`) REFERENCES `custodios` (`id`),
  ADD CONSTRAINT `informe_manto_prevs_informe_manto_prev_cate_id_foreign` FOREIGN KEY (`informe_manto_prev_cate_id`) REFERENCES `informe_manto_prev_cates` (`id`);

--
-- Filtros para la tabla `informe_manto_prev_tecs`
--
ALTER TABLE `informe_manto_prev_tecs`
  ADD CONSTRAINT `informe_manto_prev_tecs_informe_manto_prev_id_foreign` FOREIGN KEY (`informe_manto_prev_id`) REFERENCES `informe_manto_prevs` (`id`),
  ADD CONSTRAINT `informe_manto_prev_tecs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `opciones_check_lists`
--
ALTER TABLE `opciones_check_lists`
  ADD CONSTRAINT `opciones_check_lists_area_id_foreign` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`);

--
-- Filtros para la tabla `puestos`
--
ALTER TABLE `puestos`
  ADD CONSTRAINT `puestos_ubicacion_id_foreign` FOREIGN KEY (`ubicacion_id`) REFERENCES `ubicacions` (`id`);

--
-- Filtros para la tabla `puestos_custodios`
--
ALTER TABLE `puestos_custodios`
  ADD CONSTRAINT `puestos_custodios_custodio_id_foreign` FOREIGN KEY (`custodio_id`) REFERENCES `custodios` (`id`),
  ADD CONSTRAINT `puestos_custodios_puesto_id_foreign` FOREIGN KEY (`puesto_id`) REFERENCES `puestos` (`id`);

--
-- Filtros para la tabla `repo_novedades`
--
ALTER TABLE `repo_novedades`
  ADD CONSTRAINT `repo_novedades_antiguo_custodio_id_foreign` FOREIGN KEY (`antiguo_custodio_id`) REFERENCES `custodios` (`id`),
  ADD CONSTRAINT `repo_novedades_custodio_id_foreign` FOREIGN KEY (`custodio_id`) REFERENCES `custodios` (`id`),
  ADD CONSTRAINT `repo_novedades_traslado_custodio_id_foreign` FOREIGN KEY (`traslado_custodio_id`) REFERENCES `custodios` (`id`);

--
-- Filtros para la tabla `repo_novedades_detalles`
--
ALTER TABLE `repo_novedades_detalles`
  ADD CONSTRAINT `repo_novedades_detalles_area_id_foreign` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`),
  ADD CONSTRAINT `repo_novedades_detalles_check_list_id_foreign` FOREIGN KEY (`check_list_id`) REFERENCES `check_lists` (`id`),
  ADD CONSTRAINT `repo_novedades_detalles_custodio_id_foreign` FOREIGN KEY (`custodio_id`) REFERENCES `custodios` (`id`),
  ADD CONSTRAINT `repo_novedades_detalles_estacione_id_foreign` FOREIGN KEY (`estacione_id`) REFERENCES `estaciones` (`id`),
  ADD CONSTRAINT `repo_novedades_detalles_id_equipos_foreign` FOREIGN KEY (`id_equipos`) REFERENCES `equipos` (`id`),
  ADD CONSTRAINT `repo_novedades_detalles_modelo_equipo_id_foreign` FOREIGN KEY (`modelo_equipo_id`) REFERENCES `modelo_equipos` (`id`),
  ADD CONSTRAINT `repo_novedades_detalles_orden_de_compra_id_foreign` FOREIGN KEY (`orden_de_compra_id`) REFERENCES `orden_de_compras` (`id`),
  ADD CONSTRAINT `repo_novedades_detalles_repo_novedades_id_foreign` FOREIGN KEY (`repo_novedades_id`) REFERENCES `repo_novedades` (`id`);

--
-- Filtros para la tabla `ubicacions`
--
ALTER TABLE `ubicacions`
  ADD CONSTRAINT `ubicacions_area_id_foreign` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`),
  ADD CONSTRAINT `ubicacions_estacione_id_foreign` FOREIGN KEY (`estacione_id`) REFERENCES `estaciones` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_empresa_foreign` FOREIGN KEY (`empresa`) REFERENCES `empresas` (`empresa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
