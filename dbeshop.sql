-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-04-2023 a las 00:51:10
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbeshop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `prod_qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` longtext NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `popular` tinyint(4) NOT NULL DEFAULT 0,
  `image` varchar(191) DEFAULT NULL,
  `meta_title` varchar(191) NOT NULL,
  `meta_descrip` varchar(191) NOT NULL,
  `meta_keywords` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `status`, `popular`, `image`, `meta_title`, `meta_descrip`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(5, 'Televisions', 'tvs', 'all kinds of electronics', 1, 1, '1672178498.jpg', 'Televisions', 'good televisions', 'good televisions', '2022-12-21 06:03:28', '2022-12-28 05:10:45'),
(6, 'Mobil', 'mobils', 'All kinds of mobils', 1, 1, '1672178530.jpg', 'mobile phones', 'mobile phones, good mobile phones', 'mobile phones, good mobile phones', '2022-12-21 06:07:12', '2022-12-28 05:11:17'),
(10, 'Tablets', 'tablets', 'All kinds of tablets', 1, 1, '1672178543.jpg', 'tablets', 'tablets all kinds', 'tablets all kinds', '2022-12-22 04:25:10', '2022-12-28 05:11:10'),
(13, 'Fashion', 'fashion', 'All kinds of clothes and dresses', 1, 0, '1672178595.jpg', 'fashion, modern fashion', 'fashion, modern fashion', 'fashion, modern fashion', '2022-12-22 23:11:14', '2022-12-28 21:41:25'),
(17, 'Dark Coffee', 'dark-coffe', 'asldkjf;al kdjfaldjfla kdjfa a;sdlk fjalkdj f', 1, 1, '1677169448.jpg', 'ldkjfas f', 'a dsf adf', 'ads fasd f', '2023-02-23 22:24:08', '2023-02-23 23:03:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configs`
--

CREATE TABLE `configs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(191) DEFAULT NULL,
  `currency` varchar(191) NOT NULL DEFAULT 'USD',
  `currency_simbol` varchar(191) NOT NULL DEFAULT '$',
  `tax_status` tinyint(4) NOT NULL DEFAULT 0,
  `tax` int(11) NOT NULL DEFAULT 0,
  `paypal` tinyint(4) NOT NULL DEFAULT 0,
  `dbt` tinyint(4) NOT NULL DEFAULT 0,
  `shipping_description` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `configs`
--

INSERT INTO `configs` (`id`, `logo`, `currency`, `currency_simbol`, `tax_status`, `tax`, `paypal`, `dbt`, `shipping_description`, `created_at`, `updated_at`) VALUES
(1, '1678811561.jpg', 'USD $', '$', 1, 8, 1, 1, 'To distribute locally is free and is received the same day, for the rest of states and other countries will be charged separately', '2023-02-13 23:08:39', '2023-03-14 22:32:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_20_164418_create_categories_table', 2),
(6, '2022_12_22_174834_create_products_table', 3),
(7, '2022_12_28_175036_create_carts_table', 4),
(8, '2022_12_28_175319_create_carts_table', 5),
(9, '2023_01_09_173718_create_orders_table', 6),
(10, '2023_01_09_174317_create_order_items_table', 6),
(11, '2023_01_17_170939_create_wishlists_table', 7),
(12, '2023_01_30_154745_create_ratings_table', 8),
(13, '2023_01_31_172307_create_reviews_table', 9),
(14, '2023_02_13_224240_create_configs_table', 10),
(15, '2023_03_21_215853_add_timezone_field_to_users_table', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `fname` varchar(191) NOT NULL,
  `lname` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `address1` varchar(191) NOT NULL,
  `address2` varchar(191) DEFAULT NULL,
  `city` varchar(191) NOT NULL,
  `state` varchar(191) NOT NULL,
  `country` varchar(191) NOT NULL,
  `zipcode` varchar(191) NOT NULL,
  `note` varchar(191) DEFAULT NULL,
  `total_tax` decimal(11,2) DEFAULT 0.00,
  `total_price` decimal(11,2) DEFAULT NULL,
  `payment_mode` varchar(191) DEFAULT NULL,
  `payment_id` varchar(191) DEFAULT NULL,
  `status` varchar(191) NOT NULL DEFAULT '0',
  `tracking_no` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `fname`, `lname`, `email`, `phone`, `address1`, `address2`, `city`, `state`, `country`, `zipcode`, `note`, `total_tax`, `total_price`, `payment_mode`, `payment_id`, `status`, `tracking_no`, `created_at`, `updated_at`) VALUES
(43, 1, 'Otto', 'Szarata', 'szystems@hotmail.com', '42153288', '1120 e 2nd st apt 12', 'Diagonal 2 32-22 zona 3', 'Long Beach', 'California', 'EEUU', '90802', 'nota de compra', '0.00', '86.00', 'Paid by PayPal', '4C352398S5045733Y', '1', 'eshop8161', '2023-01-24 23:54:22', '2023-02-23 22:28:41'),
(44, 1, 'Otto', 'Szarata', 'szystems@hotmail.com', '42153288', '1120 e 2nd st apt 12', 'Diagonal 2 32-22 zona 3', 'Long Beach', 'California', 'EEUU', '90802', NULL, '0.00', '30.00', 'Paid by PayPal', '4V129281NU3572717', '1', 'eshop1666', '2023-01-25 04:17:59', '2023-02-17 22:02:49'),
(45, 1, 'Otto', 'Szarata', 'szystems@hotmail.com', '42153288', '1120 e 2nd st apt 12', 'Diagonal 2 32-22 zona 3', 'Long Beach', 'California', 'EEUU', '90802', NULL, '0.00', '30.00', 'Paid by PayPal', '9HC9299599236332J', '0', 'eshop3765', '2023-01-25 04:21:39', '2023-01-25 04:21:39'),
(46, 1, 'Otto', 'Szarata', 'szystems@hotmail.com', '42153288', '1120 e 2nd st apt 12', 'Diagonal 2 32-22 zona 3', 'Long Beach', 'California', 'EEUU', '90802', NULL, '0.00', '56.00', 'Paid by PayPal', '0V868865TV508702P', '0', 'eshop8793', '2023-01-25 04:24:40', '2023-01-25 04:24:40'),
(47, 1, 'Otto', 'Szarata', 'szystems@hotmail.com', '42153288', '1120 e 2nd st apt 12', 'Diagonal 2 32-22 zona 3', 'Long Beach', 'California', 'EEUU', '90802', NULL, '0.00', '30.00', 'Paid by PayPal', '5H5797139L034770R', '0', 'eshop8544', '2023-01-25 04:25:33', '2023-01-25 04:25:33'),
(48, 1, 'Otto', 'Szarata', 'szystems@hotmail.com', '42153288', '1120 e 2nd st apt 12', 'Diagonal 2 32-22 zona 3', 'Long Beach', 'California', 'EEUU', '90802', NULL, '0.00', '30.00', 'Paid by PayPal', '579088449N4015107', '0', 'eshop6652', '2023-01-25 04:27:10', '2023-01-25 04:27:10'),
(49, 1, 'Otto', 'Szarata', 'szystems@hotmail.com', '42153288', '1120 e 2nd st apt 12', 'Diagonal 2 32-22 zona 3', 'Long Beach', 'California', 'EEUU', '90802', NULL, '0.00', '30.00', 'Paid by PayPal', '3SA10215C9404981B', '0', 'eshop2025', '2023-01-25 04:28:04', '2023-01-25 04:28:04'),
(50, 1, 'Otto', 'Szarata', 'szystems@hotmail.com', '42153288', '1120 e 2nd st apt 12', 'Diagonal 2 32-22 zona 3', 'Long Beach', 'California', 'EEUU', '90802', NULL, '0.00', '30.00', 'Paid by PayPal', '6M8839806X5714617', '0', 'eshop7216', '2023-01-25 04:29:50', '2023-01-25 04:29:50'),
(51, 1, 'Otto', 'Szarata', 'szystems@hotmail.com', '42153288', '1120 e 2nd st apt 12', 'Diagonal 2 32-22 zona 3', 'Long Beach', 'California', 'EEUU', '90802', NULL, '0.00', '5000.00', 'POD or DBT', NULL, '0', 'eshop9078', '2023-01-25 04:51:41', '2023-01-25 04:51:41'),
(52, 1, 'Otto', 'Szarata', 'szystems@hotmail.com', '42153288', '1120 e 2nd st apt 12', 'Diagonal 2 32-22 zona 3', 'Long Beach', 'California', 'EEUU', '90802', NULL, '0.00', '6030.00', 'POD or DBT', NULL, '0', 'eshop3725', '2023-02-01 04:24:04', '2023-02-01 04:24:04'),
(53, 1, 'Otto', 'Szarata', 'szystems@hotmail.com', '42153288', '1120 e 2nd st apt 12', 'Diagonal 2 32-22 zona 3', 'Long Beach', 'California', 'EEUU', '90802', NULL, '1490.64', '7576.64', 'POD or DBT', NULL, '0', 'eshop1461', '2023-02-17 05:37:49', '2023-02-17 05:37:49'),
(54, 1, 'Otto', 'Szarata', 'szystems@hotmail.com', '42153288', '1120 e 2nd st apt 12', 'Diagonal 2 32-22 zona 3', 'Long Beach', 'California', 'EEUU', '90802', NULL, '1206.72', '6262.72', 'POD or DBT', NULL, '0', 'eshop7289', '2023-02-17 05:45:41', '2023-02-17 05:45:41'),
(55, 1, 'Otto', 'Szarata', 'szystems@hotmail.com', '42153288', '1120 e 2nd st apt 12', 'Diagonal 2 32-22 zona 3', 'Long Beach', 'California', 'EEUU', '90802', NULL, '724.80', '3764.80', 'POD or DBT', NULL, '0', 'eshop6865', '2023-02-17 05:54:43', '2023-02-17 05:54:43'),
(56, 1, 'Otto', 'Szarata', 'szystems@hotmail.com', '42153288', '1120 e 2nd st apt 12', 'Diagonal 2 32-22 zona 3', 'Long Beach', 'California', 'EEUU', '90802', NULL, '960.00', '8960.00', 'POD or DBT', NULL, '0', 'eshop1355', '2023-02-17 05:59:03', '2023-02-17 05:59:03'),
(57, 1, 'Otto', 'Szarata', 'szystems@hotmail.com', '42153288', '1120 e 2nd st apt 12', 'Diagonal 2 32-22 zona 3', 'Long Beach', 'California', 'EEUU', '90802', NULL, '724.80', '724.80', 'POD or DBT', NULL, '0', 'eshop9368', '2023-02-17 06:27:47', '2023-02-17 06:27:47'),
(58, 1, 'Otto', 'Szarata', 'szystems@hotmail.com', '42153288', '1120 e 2nd st apt 12', 'Diagonal 2 32-22 zona 3', 'Long Beach', 'California', 'EEUU', '90802', NULL, '724.80', '6764.80', 'POD or DBT', NULL, '0', 'eshop3287', '2023-02-17 06:29:55', '2023-02-17 06:29:55'),
(59, 1, 'Otto', 'Szarata', 'szystems@hotmail.com', '42153288', '1120 e 2nd st apt 12', 'Diagonal 2 32-22 zona 3', 'Long Beach', 'California', 'EEUU', '90802', NULL, '724.80', '6764.80', 'Paid by PayPal', '3CL972594J283132P', '0', 'eshop9115', '2023-02-17 06:31:42', '2023-02-17 06:31:42'),
(60, 1, 'Otto', 'Szarata', 'szystems@hotmail.com', '42153288', '1120 e 2nd st apt 12', 'Diagonal 2 32-22 zona 3', 'Long Beach', 'California', 'EEUU', '90802', NULL, '0.00', '80.00', 'POD or DBT', NULL, '0', 'eshop1126', '2023-02-17 06:44:19', '2023-02-17 06:44:19'),
(61, 1, 'Otto', 'Szarata', 'szystems@hotmail.com', '42153288', '1120 e 2nd st apt 12', 'Diagonal 2 32-22 zona 3', 'Long Beach', 'California', 'EEUU', '90802', NULL, '246.40', '3326.40', 'POD or DBT', NULL, '0', 'eshop7721', '2023-02-23 22:46:24', '2023-02-23 22:46:24'),
(62, 1, 'Otto', 'Szarata', 'szystems@hotmail.com', '42153288', '1120 e 2nd st apt 12', 'Diagonal 2 32-22 zona 3', 'Long Beach', 'California', 'EEUU', '90802', NULL, '21.76', '293.76', 'Paid by PayPal', '9RH07740BE484601P', '0', 'eshop5142', '2023-04-03 21:53:57', '2023-04-03 21:53:57'),
(63, 1, 'Otto', 'Szarata', 'szystems@hotmail.com', '42153288', '1120 e 2nd st apt 12', 'Diagonal 2 32-22 zona 3', 'Long Beach', 'California', 'EEUU', '90802', NULL, '27.84', '375.84', 'POD or DBT', NULL, '0', 'eshop4800', '2023-04-03 22:02:38', '2023-04-03 22:02:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` decimal(11,2) NOT NULL,
  `discount` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `prod_id`, `qty`, `price`, `discount`, `created_at`, `updated_at`) VALUES
(60, 43, 10, 1, '30.00', 1, '2023-01-24 23:54:22', '2023-01-24 23:54:22'),
(61, 43, 9, 1, '56.00', 1, '2023-01-24 23:54:22', '2023-01-24 23:54:22'),
(62, 44, 10, 1, '30.00', 1, '2023-01-25 04:17:59', '2023-01-25 04:17:59'),
(63, 45, 10, 1, '30.00', 1, '2023-01-25 04:21:39', '2023-01-25 04:21:39'),
(64, 46, 9, 1, '56.00', 1, '2023-01-25 04:24:41', '2023-01-25 04:24:41'),
(65, 47, 10, 1, '30.00', 1, '2023-01-25 04:25:33', '2023-01-25 04:25:33'),
(66, 48, 10, 1, '30.00', 1, '2023-01-25 04:27:10', '2023-01-25 04:27:10'),
(67, 49, 10, 1, '30.00', 1, '2023-01-25 04:28:04', '2023-01-25 04:28:04'),
(68, 50, 10, 1, '30.00', 1, '2023-01-25 04:29:50', '2023-01-25 04:29:50'),
(69, 51, 8, 1, '5000.00', 0, '2023-01-25 04:51:41', '2023-01-25 04:51:41'),
(70, 52, 10, 1, '30.00', 1, '2023-02-01 04:24:04', '2023-02-01 04:24:04'),
(71, 52, 5, 1, '6000.00', 0, '2023-02-01 04:24:04', '2023-02-01 04:24:04'),
(72, 53, 9, 7, '56.00', 1, '2023-02-17 05:37:49', '2023-02-17 05:37:49'),
(73, 53, 10, 1, '30.00', 1, '2023-02-17 05:37:49', '2023-02-17 05:37:49'),
(74, 53, 5, 2, '6000.00', 0, '2023-02-17 05:37:49', '2023-02-17 05:37:49'),
(75, 54, 9, 1, '56.00', 1, '2023-02-17 05:45:41', '2023-02-17 05:45:41'),
(76, 54, 8, 2, '5000.00', 0, '2023-02-17 05:45:41', '2023-02-17 05:45:41'),
(77, 55, 7, 1, '40.00', 0, '2023-02-17 05:54:43', '2023-02-17 05:54:43'),
(78, 55, 1, 2, '3000.00', 0, '2023-02-17 05:54:43', '2023-02-17 05:54:43'),
(79, 56, 1, 1, '3000.00', 0, '2023-02-17 05:59:03', '2023-02-17 05:59:03'),
(80, 56, 8, 1, '5000.00', 0, '2023-02-17 05:59:03', '2023-02-17 05:59:03'),
(81, 57, 6, 2, '3000.00', 0, '2023-02-17 06:27:47', '2023-02-17 06:27:47'),
(82, 57, 7, 1, '40.00', 0, '2023-02-17 06:27:47', '2023-02-17 06:27:47'),
(83, 58, 1, 2, '3000.00', 0, '2023-02-17 06:29:55', '2023-02-17 06:29:55'),
(84, 58, 7, 1, '40.00', 0, '2023-02-17 06:29:55', '2023-02-17 06:29:55'),
(85, 59, 6, 2, '3000.00', 0, '2023-02-17 06:31:42', '2023-02-17 06:31:42'),
(86, 59, 7, 1, '40.00', 0, '2023-02-17 06:31:42', '2023-02-17 06:31:42'),
(87, 60, 7, 2, '40.00', 0, '2023-02-17 06:44:19', '2023-02-17 06:44:19'),
(88, 61, 1, 1, '3000.00', 0, '2023-02-23 22:46:24', '2023-02-23 22:46:24'),
(89, 61, 7, 2, '40.00', 0, '2023-02-23 22:46:24', '2023-02-23 22:46:24'),
(90, 62, 9, 2, '56.00', 1, '2023-04-03 21:53:57', '2023-04-03 21:53:57'),
(91, 62, 11, 2, '50.00', 0, '2023-04-03 21:53:57', '2023-04-03 21:53:57'),
(92, 62, 10, 2, '30.00', 1, '2023-04-03 21:53:57', '2023-04-03 21:53:57'),
(93, 63, 9, 3, '56.00', 1, '2023-04-03 22:02:38', '2023-04-03 22:02:38'),
(94, 63, 14, 2, '15.00', 1, '2023-04-03 22:02:38', '2023-04-03 22:02:38'),
(95, 63, 11, 3, '50.00', 0, '2023-04-03 22:02:38', '2023-04-03 22:02:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('szystems@hotmail.com', '$2y$10$LtXqCh5hScwxhtKtwF5AQuUt.RhoP6wBGzvtL1Ofo9UIjkciJIGPa', '2023-02-03 05:33:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cate_id` bigint(20) NOT NULL,
  `code` varchar(191) DEFAULT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `small_description` mediumtext NOT NULL,
  `description` longtext NOT NULL,
  `original_price` varchar(191) NOT NULL,
  `selling_price` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `tax` varchar(191) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `trending` tinyint(4) NOT NULL,
  `discount` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `cate_id`, `code`, `name`, `slug`, `small_description`, `description`, `original_price`, `selling_price`, `image`, `qty`, `tax`, `status`, `trending`, `discount`, `created_at`, `updated_at`) VALUES
(1, 6, '334534', 'Samsung A32', 'samsung-a32', 'Good Cellphone', 'good cellphone for every body', '3000', '2500', '1671816139.jpg', 3, NULL, 1, 1, 0, '2022-12-23 04:47:12', '2023-02-23 22:46:24'),
(5, 5, '45645', 'Smart TV Samsung 42\" 4k Oled', 'tv-samsung-42- oled', 'Smart TV Samsung 42\" 4k Oled', 'Smart TV Samsung 42\" 4k Oled, controller, stand wall, 4 hdmi ports, 2 usb 2.0.', '6000', '5500', '1672179006.jpg', 0, NULL, 1, 1, 0, '2022-12-28 04:09:45', '2023-02-17 05:37:49'),
(6, 10, '67657', 'Tablet Samsung 10\"', 'tablet-samsung-10', 'Tablet Samsung 10\" android 12', 'Tablet Samsung 10\" android 12, oled 1port, stand', '3000', '2500', '1672179119.jpg', 4, NULL, 1, 1, 0, '2022-12-28 04:11:59', '2023-02-17 06:31:42'),
(7, 13, '35245', 'Women T-Shirt Blue M', 'tshit-women-blue-m', 'Women T-Shirt Blue M', 'Women T-Shirt Blue M, textile polifonic', '40', '35', '1672179300.jpg', 1, NULL, 1, 0, 0, '2022-12-28 04:15:00', '2023-02-23 22:46:24'),
(8, 5, '47453', 'TV Toshiba 55\" Smart 4K', 'tv-toshiba-55', 'TV toshiba 55\" Smart 4K', 'TV Toshiba 55\" Smart 4K whit controller, 4 ports hdmi', '5000', '4500', '1672185184.jpg', 5, NULL, 1, 1, 0, '2022-12-28 05:53:04', '2023-02-17 05:59:03'),
(9, 13, '23545', 'Bag for woman', 'Bag-For-Woman', 'Beige ring handle circle cross body bag', 'Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing. Sed lectus.', '110', '56', '1672248805.jpg', 5, NULL, 1, 1, 1, '2022-12-28 23:33:25', '2023-04-03 22:02:38'),
(10, 13, '74437', 'Jeans for men blue', 'Jeans-For-Men-Blue', 'Jeans for men', 'Jeans for men blue', '40', '30', '1673369149.jpg', 8, NULL, 1, 1, 1, '2023-01-10 22:45:49', '2023-04-03 21:53:57'),
(11, 13, '52344', 'Borwn Shoes for woman', 'Borwn-Shoes-For-Woman', 'Height Borwn shoes for woman', 'height Black shoes for woman can use in formal acts o informal', '50', '40', '1676655086.jpg', 15, NULL, 1, 1, 0, '2023-02-17 23:28:38', '2023-04-03 22:02:38'),
(12, 13, '36723', 'Overol for woman', 'Overol-For-Woman12', 'Overol for woman size 30', 'Overol for woman color blue size 30', '75', '50', '1676682700.jpg', 10, NULL, 0, 1, 1, '2023-02-18 07:11:40', '2023-02-20 21:58:45'),
(13, 13, '63416', 'Yellow dress for woman', 'Yellow-Dress-For-Woman', 'Yellow dress for woman size 40', 'Yellow dress for woman size 40 small tight with holes and rumbus', '60', '45', '1676910751.jpg', 20, NULL, 1, 1, 0, '2023-02-20 22:32:31', '2023-02-20 22:32:31'),
(14, 17, '234234234', 'Bocacosta Coffee Dark', 'Bocacosta-Coffee-Dark14', 'dfgdfgdfgdfg', 'sdfg sdfg sdf sfdg sfdgsf sfddg sfdg sdfg sfdg sfd gsfd gsdfg', '20', '15', '1677169603.jpg', 8, NULL, 1, 1, 1, '2023-02-23 22:26:43', '2023-04-03 22:02:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `stars_rated` int(11) NOT NULL,
  `review` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ratings`
--

INSERT INTO `ratings` (`id`, `user_id`, `prod_id`, `stars_rated`, `review`, `created_at`, `updated_at`) VALUES
(1, 1, 9, 4, 'Good bag', '2023-01-30 22:40:30', '2023-02-01 04:32:55'),
(2, 1, 10, 3, 'Good jeans for work', '2023-01-31 06:01:50', '2023-02-01 04:37:24'),
(3, 2, 10, 3, 'The product was decent in my opinion', '2023-01-31 00:29:24', '2023-01-31 00:29:24'),
(4, 1, 1, 4, 'Good cellphone but small', '2023-01-31 06:47:07', '2023-02-01 04:20:08'),
(5, 1, 8, 3, 'Good tv for 4k', '2023-01-31 06:50:24', '2023-02-01 04:18:13'),
(7, 1, 5, 4, 'Good tv for standar users', '2023-02-01 04:24:40', '2023-02-01 04:24:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `lname` varchar(191) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `address1` varchar(191) DEFAULT NULL,
  `address2` varchar(191) DEFAULT NULL,
  `city` varchar(191) DEFAULT NULL,
  `state` varchar(191) DEFAULT NULL,
  `country` varchar(191) DEFAULT NULL,
  `zipcode` varchar(191) DEFAULT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `principal` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `timezone` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `lname`, `phone`, `address1`, `address2`, `city`, `state`, `country`, `zipcode`, `role_as`, `status`, `principal`, `remember_token`, `created_at`, `updated_at`, `timezone`) VALUES
(1, 'Otto Szarata', 'szystems@hotmail.com', NULL, '$2y$10$kdmLU.0IgcTI/K96fCWlXecz6AUGboIQHYj8FtlaoG0CLTx4FHhu6', '', '42153288', '1120 e 2nd st apt 12', 'Diagonal 2 32-22 zona 3', 'Long Beach', 'California', 'EEUU', '90802', 1, 1, 1, 'Z7n6HfsN6q00mygtRbbYycBwXrVpz0nPKBz2NXXFcnsekJQkNNYmupbAOIIw', '2022-12-17 00:25:50', '2023-03-22 22:42:10', 'America/Guatemala'),
(2, 'Otto Szarata', 'szotto18@hotmail.com', NULL, '$2y$10$xlxxqXS9OogTQU35mT6C5.5XdFx3NccWHxxzSNGnAZSmuSN.AGRYC', '', '+50242153288', 'y 1120 e 2nd st apt 12', '2nd Address', 'long beach', 'ca', 'Estados Unidos', '90802', 0, 1, 0, NULL, '2022-12-17 03:48:19', '2023-01-11 04:22:12', NULL),
(3, 'Francisco Maldonado', 'szotto18@gmail.com', NULL, '$2y$10$lfeJlbbof86GaM0S/8KCKOxSnppBIBbb3CchtuTQEK2Ifc5Zw0m8K', NULL, '+50242153288', 'Diagonal 2 32-22 zona 3', 'Diagonal 2 32-28 zona 3', 'Quetzaltenango', 'Quetzaltenango', 'Guatemala', '09001', 0, 1, 0, NULL, '2023-01-14 00:06:45', '2023-01-14 04:21:04', NULL),
(4, 'maco cuellar', 'mc@gmail.com-Deleted-Deleted-Deleted', NULL, '$2y$10$KkBvIxJ6BsuTvdUBa8OBJOSW.7Qx8EQR2yHo72WRJC19zUwEBIZgK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, '2023-01-14 00:09:38', '2023-03-17 23:00:16', NULL),
(5, 'asdf', 'asdf@lskdf.com-Deleted', NULL, '$2y$10$Ph8T1fUlQ0B9UfluNVt0Wep15w5aJC/Y7z7vP8leMmmSqY9cxw0ay', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, '2023-01-14 00:13:09', '2023-01-14 04:17:56', NULL),
(6, 'nombre', 'email@email.com', NULL, 'eshop1677', NULL, '234234324', 'primera direccion', 'segunda direccion', 'quetzaltenango', 'quetgostate', 'Guatemala', '09001', 0, 1, 0, NULL, '2023-01-17 05:14:51', '2023-01-17 05:14:51', NULL),
(7, 'Alfredo Sagastume', 'asagas@hotmail.com', NULL, '$2y$10$lPBbNdklPT.x/m2XEhB7/OrKN2weO7TICzhb4Av8MyDbiwFatRUL6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0, NULL, '2023-02-02 23:54:04', '2023-02-02 23:54:04', NULL),
(8, 'Afredo Durango', 'alfredo@hotmail.com', NULL, '$2y$10$Yq5G3OPHFSxz0DrvyxwLxO4MHCH/1xPEHTNXr..phhlu3sVoD9GVa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0, NULL, '2023-02-03 04:17:10', '2023-02-03 04:17:10', NULL),
(9, 'Ulises Godoy', 'uligodo@gmail.com', NULL, '$2y$10$ru3l0OY6cWdgtFEzZGfv5ecAmfzXK9JSzmKp/KxzwtsyuWNhOEU2i', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0, NULL, '2023-02-03 04:20:00', '2023-02-03 04:20:00', NULL),
(10, 'Bruno Fernandez', 'bfernandez@gmail.com', NULL, '$2y$10$LLouA/qLOXM52hwtmXfGbO/4wtBxvmNpKQMmmddv54ZdOZkWHXBVu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0, NULL, '2023-02-03 04:29:35', '2023-02-03 04:29:35', NULL),
(11, 'Mamfredo Jackobs', 'mjack@gmail.com', NULL, '$2y$10$dsMdYYqqpH7Lp9zI2.CjaesF.mSzlySUVUsZ0lo9SAEN8GolQKrPm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0, NULL, '2023-02-03 04:32:18', '2023-02-03 04:32:18', NULL),
(12, 'Almeida Giron', 'ag@gmail.com', NULL, 'eshop4954', NULL, '23423423', 'Zona 4 56-89', NULL, 'Guatemala', 'Guatemala', 'Guatemala', '09001', 0, 1, 0, NULL, '2023-03-22 04:30:43', '2023-03-22 04:30:43', NULL),
(13, 'Michi Santisteban', 'michi@gmail.com', NULL, 'eshop8336', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0, NULL, '2023-03-22 04:34:45', '2023-03-22 04:34:45', 'America/Guatemala'),
(14, 'opulo marco', 'opulo@gmail.com', NULL, '$2y$10$hH7g/ULfIpSiFiIspb3CZO7tA9FBZe029QuDYrDvmXfFpKJiZCCtK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0, NULL, '2023-03-22 04:58:45', '2023-03-22 04:58:45', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `prod_id`, `created_at`, `updated_at`) VALUES
(25, 1, 14, '2023-04-03 22:01:01', '2023-04-03 22:01:01'),
(26, 1, 11, '2023-04-03 22:01:33', '2023-04-03 22:01:33');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `configs`
--
ALTER TABLE `configs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de la tabla `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
