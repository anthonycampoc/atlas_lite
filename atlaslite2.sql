-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-08-2024 a las 16:58:17
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `atlaslite2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abonos`
--

CREATE TABLE `abonos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `abono` decimal(12,2) DEFAULT NULL,
  `saldo` decimal(12,2) NOT NULL,
  `abono_date` datetime DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fechaE` date DEFAULT NULL,
  `sale_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `abonos`
--

INSERT INTO `abonos` (`id`, `abono`, `saldo`, `abono_date`, `descripcion`, `fechaE`, `sale_id`, `created_at`, `updated_at`) VALUES
(1, NULL, '459.40', '2024-08-18 09:47:11', NULL, NULL, 1, '2024-08-18 19:47:11', '2024-08-18 19:47:11'),
(2, NULL, '1378.20', '2024-08-18 09:48:32', NULL, NULL, 2, '2024-08-18 19:48:32', '2024-08-18 19:48:32'),
(3, NULL, '71.82', '2024-08-18 09:49:42', NULL, NULL, 3, '2024-08-18 19:49:42', '2024-08-18 19:49:42'),
(4, NULL, '1286.32', '2024-08-18 09:53:28', NULL, NULL, 4, '2024-08-18 19:53:28', '2024-08-18 19:53:28'),
(5, NULL, '45.94', '2024-08-18 09:54:17', NULL, NULL, 5, '2024-08-18 19:54:17', '2024-08-18 19:54:17'),
(6, NULL, '70.20', '2024-08-18 09:54:49', NULL, NULL, 6, '2024-08-18 19:54:49', '2024-08-18 19:54:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bunises`
--

CREATE TABLE `bunises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `bunises`
--

INSERT INTO `bunises` (`id`, `name`, `description`, `telephone`, `logo`, `mail`, `address`, `ruc`, `created_at`, `updated_at`) VALUES
(1, 'ATLAS', 'ATLAS', '0900000000', 'logo.svg', 'ATLAS@atlastechnology.tech', 'Almedo y 10 de agosto', '0800000000001', '2024-08-18 19:46:17', '2024-08-18 19:46:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `name`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Deborah Bahringer', 'Beatae vero fugit sint quis id. Voluptatem vero voluptatum porro cumque. Repellendus et quam amet omnis magni neque molestias consequatur.', NULL, '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(2, 'Kip Bergnaum', 'Eligendi perspiciatis culpa voluptatem necessitatibus recusandae. Quia aut nulla voluptatem saepe. Ut quos facere provident illo odio ratione aut et.', NULL, '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(3, 'Felipa Simonis', 'Eius sequi sed et rerum quidem. Et corporis cupiditate nostrum perferendis expedita. Vel eum repudiandae id voluptas similique. Ut qui rerum rerum pariatur.', NULL, '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(4, 'Mr. Emmitt Dach', 'Saepe voluptatem eum unde deleniti adipisci blanditiis ratione ea. Dolorem ratione animi sed. Nulla et voluptas molestiae nam aut. Aut blanditiis ut possimus sed. Est provident rerum id.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(5, 'Ima Lesch', 'Minus dolores odit quam molestiae eius reprehenderit. Officia labore id tempore modi cupiditate quisquam. Voluptas vel at ad dolorem. Commodi possimus voluptas ut sequi voluptatem provident dolorem.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(6, 'Isobel Upton', 'Pariatur at voluptatem est eveniet quod. Rerum eum quam harum. Inventore corporis et aut magni quam fugit.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(7, 'Shirley Wolff', 'Nihil nemo repellendus minima aut error. Aut molestiae expedita quod sequi. Ipsam blanditiis aut officiis modi optio. Ullam velit saepe est dolorem ut.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(8, 'Taryn Becker', 'Et non et praesentium. Esse ut quo modi. Minus dicta amet omnis illo impedit quos iure accusantium. Laudantium aliquam omnis nobis et est.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(9, 'Kara Jakubowski', 'Molestias repellendus enim alias ipsa. Voluptatem maxime ut aperiam voluptas aspernatur. Fugit nostrum exercitationem inventore placeat.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(10, 'Winifred Schulist', 'Sequi labore aliquam aliquid rerum non et officia. Quis et voluptas ex optio officia. Odit ut odit quod sunt et eum optio.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(11, 'Burnice Strosin', 'Ducimus rerum quis enim reprehenderit rerum et. Aut quaerat at enim accusantium sed consequatur. Magnam laboriosam iure dolor odio harum. Qui velit voluptatem nesciunt ex.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(12, 'Maegan Armstrong', 'Laudantium a magnam cumque earum alias maiores debitis. Asperiores aut porro repellendus suscipit officia deserunt quisquam est.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(13, 'Mr. Wilford Ortiz PhD', 'Quos et rerum ex asperiores. Ratione omnis autem nobis porro explicabo natus. Voluptatibus quod autem qui sed omnis. Natus qui velit et.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(14, 'Lynn White DVM', 'Expedita eius mollitia sit voluptatum incidunt optio aut. Ut et ea voluptas et. Explicabo perspiciatis et culpa qui aliquid harum. Distinctio voluptates perferendis quo ullam aspernatur.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(15, 'Keyshawn Schroeder', 'Voluptates laudantium quas ipsa nesciunt dolorum distinctio aut inventore. Reiciendis officia sed et. Voluptatibus aut alias aperiam quae rem et id.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(16, 'Mariana Mertz', 'Quo et architecto voluptatem natus dolores qui non. Accusamus rem dolor dolores laboriosam minima est dolor. Rerum sed quis omnis et.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(17, 'Vladimir Simonis', 'Quidem ut molestiae id nihil. Totam saepe fuga modi et eum aut. Cum vel ut numquam explicabo odit ea nihil ut.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(18, 'Dewayne Erdman', 'Doloremque et tempore hic ad ut tempora qui. Veniam consequatur culpa ipsam. Modi non fugiat quisquam quas ratione. Dolores placeat nam qui eius placeat.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(19, 'Cristal Schulist', 'Quibusdam debitis iusto dolore. Dicta quia unde in. Quia quisquam molestiae nam autem cum dolorem aut.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(20, 'Minnie Johnston', 'Repellat quo ratione tempore nostrum quae quidem est. Amet molestiae atque sint id placeat. Dolorem et deserunt reprehenderit. Occaecati aliquid quia et eos voluptatibus.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(21, 'Michale Mills', 'Aliquid est explicabo quia. Itaque enim et consequatur fugiat. Pariatur quas veritatis est iure possimus.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(22, 'Prof. Moses Mosciski', 'Maxime id assumenda nam sint. Nam quae quod dolor eum eius quibusdam. Magnam sit dolor enim vitae. Temporibus expedita libero natus tempore ipsum. Harum expedita dolore et.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(23, 'Mr. Danial Anderson', 'Harum quaerat tempore totam voluptatem. Quasi iusto at dignissimos voluptate et. Quisquam minus iure eveniet vitae qui. Aut vitae suscipit velit consequuntur hic.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(24, 'Alberta Marvin DDS', 'Suscipit asperiores nemo quidem nihil. Animi quo voluptatem aperiam sunt. Ullam quia nihil qui est sunt. Aperiam ut aut voluptas voluptatibus et expedita.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(25, 'Madilyn Toy', 'Blanditiis aspernatur voluptatem aperiam itaque dolore odio. Est qui laborum officia enim exercitationem necessitatibus nemo aut. Debitis ratione harum omnis quia ipsam architecto.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(26, 'Dr. Carmen King', 'Impedit est nesciunt id sunt molestias minus quam. Reiciendis nihil aspernatur in reiciendis omnis. Atque labore velit aliquid sit assumenda.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(27, 'Delaney Boyle', 'Officia incidunt debitis totam mollitia voluptatem quia ea. Molestiae qui nesciunt id voluptatem rem est aut dolorem. Vel nulla optio dolores possimus qui dolorum. Sint rerum qui ipsum minima dicta.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(28, 'Emmanuelle Swaniawski', 'Necessitatibus praesentium odio nulla non ut. Ullam corrupti voluptatem autem nesciunt voluptas voluptates. Autem rem distinctio repellendus sequi voluptatem.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(29, 'Kayley Purdy', 'Sapiente dolorem nesciunt molestias sed voluptas praesentium. Quae omnis unde sunt laborum sint. Voluptas dolorum amet voluptatem commodi molestiae nulla.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(30, 'Miss Josie Murazik PhD', 'Rem doloremque iste possimus soluta numquam voluptates doloremque rem. Magni qui tempora quia a. Modi error et deleniti doloribus. Aut voluptatem quia officiis iste doloremque omnis.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(31, 'Dr. Kyla VonRueden', 'Eum nihil aut expedita eveniet. Consequuntur enim vero porro quas. Illo amet ea exercitationem veritatis dolor optio.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(32, 'Jaime Rosenbaum', 'Aperiam incidunt corrupti harum facere quisquam. Distinctio ab nobis quisquam. Optio ut magnam iste quibusdam corporis culpa.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(33, 'Dennis McGlynn', 'Inventore temporibus dolor maxime ipsam illo vero. Minus dicta et non ratione nihil eos. Ipsum sit asperiores illo cupiditate. Ducimus est et quisquam est.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(34, 'Mr. Coty Senger II', 'Facere adipisci voluptatibus alias qui occaecati voluptatem. Eum et aperiam ab voluptatem veniam a distinctio.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(35, 'Alaina Ondricka Jr.', 'Reprehenderit aperiam reiciendis quis sed quidem. Aut quidem qui harum quas cumque. Non similique deserunt corrupti quia nostrum atque qui. Aut consequatur illo quam sunt.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(36, 'Art Farrell', 'Pariatur consequatur exercitationem facere deleniti dolorem dolores et. Neque sed error repellat deserunt aperiam cum nostrum.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(37, 'Adriel Lemke', 'Architecto ratione vel ratione eius itaque culpa qui. Voluptate natus aut voluptatem molestias aut. Amet totam possimus vitae omnis dolores necessitatibus nemo.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(38, 'Kacey Hayes DDS', 'Nam et excepturi saepe. Reprehenderit officia voluptatibus facere culpa eos. Velit dicta et deserunt illo. Commodi culpa ipsam praesentium enim at est.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(39, 'Carmen McCullough', 'Dignissimos dolores repudiandae non aliquam. Earum corporis mollitia sit ea.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(40, 'Dr. Loraine Hermiston', 'Explicabo qui pariatur est nihil laborum sapiente fugiat. Et consequuntur aut doloremque reprehenderit et omnis. Nihil aut sapiente eligendi aliquid. Velit ea nam et nobis.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(41, 'Mr. Chaz Kassulke', 'Delectus suscipit et vitae atque sit facilis ipsum. Voluptatem qui consequatur iusto debitis. Aut perferendis distinctio modi omnis impedit vero error.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(42, 'Troy Ebert', 'Unde blanditiis est est et facere harum itaque. Sapiente inventore maxime veritatis fugit. Est eaque omnis distinctio non nobis aut ullam. Similique itaque laudantium veritatis.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(43, 'Prof. Grady Little Jr.', 'Consequuntur ut ab laudantium enim autem suscipit ad. Perferendis laborum cum ea sit consequatur quod doloribus. Doloremque iure cupiditate dolore quas labore ut qui.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(44, 'Ericka Lind', 'Maiores aut rem non. Necessitatibus aut magni est sint qui. Et ea quia deleniti praesentium odit. Reiciendis impedit esse animi architecto ab iure corporis.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(45, 'Prof. Demario Haley', 'Consequatur omnis exercitationem nihil. Quibusdam id sit sunt inventore voluptatem itaque. Aut omnis optio nam in. Minus corporis qui possimus nisi.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(46, 'Lowell Stamm', 'Deserunt magnam voluptas autem iusto. Minima ex amet praesentium beatae perspiciatis accusantium eum. Quia harum deserunt nostrum suscipit error adipisci.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(47, 'Amelia Kilback', 'Sequi maiores aut non velit accusamus. Blanditiis quas impedit vel quo eum dicta. Dolores et rem corrupti doloremque atque nostrum. Quos architecto eos molestiae.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(48, 'Jules Rempel', 'Nulla quos nam adipisci. Fuga qui non dolor eum sed. Dolorem assumenda ea nobis deserunt assumenda. Ea est hic occaecati quibusdam.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(49, 'Leonora Medhurst DDS', 'Optio explicabo expedita iure qui odit et a. Molestiae ea eaque cumque non sint hic aut. Placeat molestiae quisquam laboriosam.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(50, 'Lucile Schumm', 'Veritatis eius natus repellendus debitis. Voluptatum sit labore vero architecto qui. Repellat qui qui exercitationem debitis non. Ad officiis consectetur provident suscipit eum.', NULL, '2024-08-18 19:46:17', '2024-08-18 19:46:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `identification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clients`
--

INSERT INTO `clients` (`id`, `identification`, `name`, `last_name`, `phone`, `image`, `address`, `email`, `created_at`, `updated_at`) VALUES
(1, '0000000000', 'CONSUMIDOR FINAL', 'CONSUMIDOR FINAL', 'CONSUMIDOR FINAL', NULL, 'CONSUMIDOR FINAL', 'CONSUMIDOR FINAL', '2024-08-18 19:46:17', '2024-08-18 19:46:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageable_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(739, '2014_10_12_000000_create_users_table', 1),
(740, '2014_10_12_100000_create_password_resets_table', 1),
(741, '2019_08_19_000000_create_failed_jobs_table', 1),
(742, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(743, '2021_08_28_002022_create_categorias_table', 1),
(744, '2021_08_28_014505_create_providers_table', 1),
(745, '2021_08_31_214455_create_products_table', 1),
(746, '2021_08_31_235713_create_clients_table', 1),
(747, '2021_09_01_184746_create_purchases_table', 1),
(748, '2021_09_01_185313_create_purchase_details_table', 1),
(749, '2021_09_01_232341_create_sales_table', 1),
(750, '2021_09_01_233405_create_sale_details_table', 1),
(751, '2021_09_17_180916_create_bunises_table', 1),
(752, '2021_09_24_041227_create_printers_table', 1),
(753, '2021_09_25_230534_create_permission_tables', 1),
(754, '2021_11_16_194825_create_estados_table', 1),
(755, '2021_11_16_194826_create_abonos_table', 1),
(756, '2021_11_27_194620_create_eventos_table', 1),
(757, '2021_12_04_051427_create_images_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `description`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'users.index', 'Lista y navega todos los usuarios del sistema', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(2, 'users.create', 'Podría crear nuevos usuarios en el sistema', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(3, 'users.show', 'Ve en detalle cada usuario del sistema', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(4, 'users.edit', 'Podría editar cualquier dato de un usuario del sistema', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(5, 'users.destroy', 'Podría eliminar cualquier usuario del sistema', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(6, 'roles.index', 'Lista y navega todos los roles del sistema', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(7, 'roles.show', 'Ve en detalle cada rol del sistema', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(8, 'roles.create', 'Podría crear nuevos roles en el sistema', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(9, 'roles.edit', 'Podría editar cualquier dato de un rol del sistema', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(10, 'roles.destroy', 'Podría eliminar cualquier rol del sistema', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(11, 'categories.index', 'Lista y navega por todos los categorías del sistema.', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(12, 'categories.show', 'Ver en detalle cada categoría del sistema.', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(13, 'categories.edit', 'Editar cualquier dato de un categoría del sistema.', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(14, 'categories.create', 'Crea cualquier dato de una categoría del sistema.', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(15, 'categories.destroy', 'Eliminar cualquier dato de una categoría del sistema.', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(16, 'clients.index', 'Lista y navega por todos los clientes del sistema.', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(17, 'clients.show', 'Ver en detalle cada cliente del sistema.', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(18, 'clients.edit', 'Editar cualquier dato de un cliente del sistema.', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(19, 'clients.create', 'Crea cualquier dato de un cliente del sistema.', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(20, 'clients.destroy', 'Eliminar cualquier dato de un cliente del sistema.', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(21, 'products.index', 'Lista y navega por todos los productos del sistema.', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(22, 'products.show', 'Ver en detalle cada producto del sistema.', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(23, 'products.edit', 'Editar cualquier dato de un producto del sistema.', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(24, 'products.create', 'Crea cualquier dato de un producto del sistema.', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(25, 'products.destroy', 'Eliminar cualquier dato de un producto del sistema.', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(26, 'providers.index', 'Lista y navega por todos los proveedores del sistema.', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(27, 'providers.show', 'Ver en detalle cada proveedor del sistema.', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(28, 'providers.edit', 'Editar cualquier dato de un proveedor del sistema.', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(29, 'providers.create', 'Crea cualquier dato de un proveedor del sistema.', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(30, 'providers.destroy', 'Eliminar cualquier dato de un proveedor del sistema.', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(31, 'purchases.index', 'Lista y navega por todos los compras del sistema.', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(32, 'purchases.show', 'Ver en detalle cada compra del sistema.', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(33, 'purchases.create', 'Crea cualquier dato de un compra del sistema.', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(34, 'sales.index', 'Lista y navega por todos los ventas del sistema.', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(35, 'sales.show', 'Ver en detalle cada venta del sistema.', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(36, 'sales.create', 'Crea cualquier dato de un venta del sistema.', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(37, 'purchases.pdf', 'Puede descargar todos los reportes de las compras en PDF.', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(38, 'sales.pdf', 'Puede descargar todos los reportes de las ventas en PDF.', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(39, 'sales.print', 'Puede imprimir boletas de todas las ventas.', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(40, 'business.index', 'Navega por los datos de la empresa.', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(41, 'business.edit', 'Editar cualquier dato de la empresa.', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(42, 'printers.index', 'Navega por los datos de la impresora.', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(43, 'printers.edit', 'Editar cualquier dato de la impresora.', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(44, 'upload.purchases', 'Puede subir comprobantes de una compra.', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(45, 'change.status.products', 'Permite cambiar el estado de un producto.', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(46, 'change.status.purchases', 'Permite cambiar el estado de un compra.', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(47, 'change.status.sales', 'Permite cambiar el estado de un venta.', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(48, 'reports.day', 'Permite ver los reportes de ventas por día.', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(49, 'reports.date', 'Permite ver los reportes por un rango de fechas de las ventas.', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `printers`
--

CREATE TABLE `printers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `printers`
--

INSERT INTO `printers` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Prueba', '2024-08-18 19:46:17', '2024-08-18 19:46:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sell_price` decimal(12,2) NOT NULL,
  `status` enum('ACTIVE','DEACTIVATE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `categoria_id` bigint(20) UNSIGNED NOT NULL,
  `provider_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `code`, `name`, `stock`, `image`, `sell_price`, `status`, `categoria_id`, `provider_id`, `created_at`, `updated_at`) VALUES
(1, '72036', 'Janis Hauck', 1, 'Reva Kutchjpg', '45.94', 'ACTIVE', 47, 21, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(2, '81576', 'Jany Kerluke', 29, 'Gloria Spinkajpg', '34.18', 'ACTIVE', 26, 9, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(3, '68225', 'Lorine Considine', 1, 'Ellie O\'Harajpg', '2.34', 'ACTIVE', 7, 7, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(4, '93924', 'Prof. Terrance Roberts IV', 49, 'Dr. Eleazar Sipesjpg', '71.56', 'ACTIVE', 46, 26, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(5, '47949', 'Jerry Huels', 34, 'Mac Denesikjpg', '53.41', 'ACTIVE', 32, 39, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(6, '48565', 'Jacinto Senger', 18, 'Avis Zulaufjpg', '62.99', 'ACTIVE', 40, 24, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(7, '64634', 'Hailee Thompson', 36, 'Ralph Homenickjpg', '55.54', 'ACTIVE', 45, 45, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(8, '875', 'Vallie Volkman', 29, 'Blanche O\'Keefejpg', '19.58', 'ACTIVE', 19, 17, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(9, '19326', 'Mr. Jedediah Ledner V', 44, 'Prof. Jaden Rosenbaumjpg', '92.72', 'ACTIVE', 38, 4, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(10, '72555', 'Mr. Bradly Kuhn', 16, 'Malachi Yundt MDjpg', '99.11', 'ACTIVE', 36, 6, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(11, '92805', 'Dock Von III', 21, 'Blaise Baumbachjpg', '21.87', 'ACTIVE', 18, 43, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(12, '94365', 'Lola Rau DDS', 24, 'Wilber McCulloughjpg', '44.78', 'ACTIVE', 20, 15, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(13, '7774', 'Otilia Schuppe', 39, 'Shaun Andersonjpg', '38.24', 'ACTIVE', 1, 43, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(14, '94399', 'Serena Hackett', 47, 'Kiara Funk IIjpg', '12.62', 'ACTIVE', 4, 30, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(15, '96085', 'Mrs. Matilda Wisoky', 22, 'Prof. Gino Dare Ijpg', '35.56', 'ACTIVE', 10, 36, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(16, '66092', 'Roberto Bayer', 28, 'Payton Gerlach Jr.jpg', '29.27', 'ACTIVE', 26, 21, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(17, '17607', 'Dr. Kim Ankunding Sr.', 3, 'Frederique Murphyjpg', '71.88', 'ACTIVE', 20, 39, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(18, '49931', 'Nathaniel Crist', 20, 'Prof. Florian Witting IIIjpg', '32.24', 'ACTIVE', 19, 31, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(19, '64214', 'Miss Evie Schulist', 8, 'Norris Bashirianjpg', '80.74', 'ACTIVE', 45, 44, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(20, '41741', 'Kelsi Frami', 48, 'Prof. Zaria Wunschjpg', '44.61', 'ACTIVE', 34, 19, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(21, '12616', 'Rosella Lowe', 24, 'Dr. Oceane Jerde Ijpg', '81.41', 'ACTIVE', 46, 13, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(22, '16665', 'Prof. Keshaun Block II', 32, 'Dr. Hyman Hauckjpg', '25.70', 'ACTIVE', 15, 45, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(23, '88539', 'Martine Wisoky', 22, 'Rosella Labadie DVMjpg', '49.56', 'ACTIVE', 21, 25, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(24, '99954', 'Kian Hudson Jr.', 4, 'Jennings Satterfieldjpg', '96.66', 'ACTIVE', 46, 25, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(25, '87858', 'Ms. Daniela Roberts', 47, 'Javon Mantejpg', '3.66', 'ACTIVE', 31, 23, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(26, '57146', 'Mrs. Berneice Marquardt V', 10, 'Hazel Schillerjpg', '37.11', 'ACTIVE', 33, 17, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(27, '15373', 'Ms. Nikita Morar', 28, 'Cathy Grahamjpg', '50.89', 'ACTIVE', 21, 12, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(28, '36008', 'Mrs. Janelle Lindgren MD', 4, 'Mrs. Felicity Treutel PhDjpg', '45.95', 'ACTIVE', 44, 22, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(29, '54219', 'Prof. Elwyn Gleichner III', 19, 'Kayli Abernathyjpg', '1.21', 'ACTIVE', 1, 23, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(30, '66123', 'Brandi Macejkovic I', 49, 'Ariel Hilljpg', '27.64', 'ACTIVE', 29, 37, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(31, '51932', 'Kara Lindgren', 22, 'Mr. Dave Raynor Ijpg', '53.41', 'ACTIVE', 7, 31, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(32, '84191', 'Audreanne Goodwin', 32, 'Ms. Leora Schowalterjpg', '57.61', 'ACTIVE', 29, 39, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(33, '97989', 'Carmel Nader', 36, 'Janelle Cummingsjpg', '60.87', 'ACTIVE', 15, 23, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(34, '33627', 'Maxwell Spinka', 11, 'Gustave Torphyjpg', '74.09', 'ACTIVE', 19, 17, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(35, '13198', 'Marcelina Harvey', 3, 'Samir Pacochajpg', '23.94', 'ACTIVE', 38, 45, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(36, '42743', 'Charlie Hane', 36, 'Archibald Lowejpg', '56.16', 'ACTIVE', 50, 9, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(37, '84074', 'Dr. Bertram Armstrong', 26, 'Prof. Adolfo Erdmanjpg', '38.92', 'ACTIVE', 7, 5, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(38, '49560', 'Prof. Sean Fadel DVM', 17, 'Dr. Jeremy Okuneva Vjpg', '47.02', 'ACTIVE', 12, 10, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(39, '68710', 'Florencio Corwin III', 12, 'Newell Lesch DDSjpg', '9.07', 'ACTIVE', 37, 23, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(40, '99498', 'Rick Zieme', 40, 'Giovanni Hellerjpg', '5.21', 'ACTIVE', 41, 43, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(41, '3035', 'Ed Abbott', 12, 'Jeromy Rutherfordjpg', '62.59', 'ACTIVE', 1, 13, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(42, '6661', 'Rollin McClure', 32, 'Marjolaine Schinner Vjpg', '94.19', 'ACTIVE', 40, 33, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(43, '46802', 'Imani Deckow', 2, 'Prof. Arnold Thompson Vjpg', '28.85', 'ACTIVE', 39, 50, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(44, '65474', 'Erick Lueilwitz', 6, 'Mrs. Gregoria Sanford Jr.jpg', '75.71', 'ACTIVE', 33, 13, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(45, '59501', 'Dr. Nicola Pacocha', 5, 'Lonnie Gleason MDjpg', '67.07', 'ACTIVE', 24, 1, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(46, '75509', 'Lenna Hyatt Sr.', 18, 'Dr. Tate Parker MDjpg', '48.25', 'ACTIVE', 48, 19, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(47, '40099', 'Jarod Gerlach I', 10, 'Zula Yundtjpg', '42.58', 'ACTIVE', 45, 36, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(48, '67687', 'Ms. Veda Abshire I', 3, 'Lisa Kuhn Ijpg', '13.57', 'ACTIVE', 18, 17, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(49, '3248', 'Dr. Janick Nicolas', 12, 'Dr. Marjory Schmelerjpg', '73.34', 'ACTIVE', 27, 14, '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(50, '7552', 'Annabel Braun', 35, 'Art Cummingsjpg', '43.28', 'ACTIVE', 48, 48, '2024-08-18 19:46:17', '2024-08-18 19:46:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `providers`
--

CREATE TABLE `providers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `providers`
--

INSERT INTO `providers` (`id`, `name`, `email`, `ruc`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Lawrence Stokes', 'helmer.renner@example.org', '957865059', '916 Upton Cliff Apt. 714\nEast Alana, MA 58274-4827', '786.999.9047', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(2, 'Estelle VonRueden', 'qbalistreri@example.org', '507702976', '2704 Hipolito Orchard\nWest Coltenhaven, UT 73316', '+1 (505) 707-7258', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(3, 'Vivien Green', 'ehessel@example.net', '655776731', '791 Mariela Bridge\nSchneidershire, AR 51700-1469', '989-822-4473', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(4, 'Lorenza Langworth III', 'xmorissette@example.net', '216563611', '1084 Juvenal Shores\nRaymundomouth, MN 01564', '1-954-290-3485', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(5, 'Nick Blanda', 'dach.carroll@example.com', '79695356', '143 Germaine Mall Suite 521\nSouth Elyseberg, NE 49016', '(913) 591-6579', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(6, 'Adelia DuBuque', 'ccronin@example.net', '782827107', '83506 Runolfsdottir Groves\nKozeyton, FL 14374-1419', '1-210-571-2680', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(7, 'Devan Hodkiewicz MD', 'feil.heather@example.net', '586037405', '22701 Toy Terrace Suite 012\nDejaborough, CO 72195', '314.593.0112', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(8, 'Ms. Mary Pouros', 'agustin.dibbert@example.net', '121814207', '76867 Kunde Trail\nMarietown, NE 53919', '+17549350716', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(9, 'Addison Rosenbaum MD', 'idibbert@example.net', '657881394', '6654 Ferry Circle\nThieltown, IN 70521', '(786) 602-2599', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(10, 'Ms. Coralie Schuppe', 'emann@example.com', '766222498', '6785 Mayert Ranch Apt. 864\nEast Emilyland, ND 99525-2732', '325.625.0799', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(11, 'Miss Katelin Sauer DDS', 'pansy.torphy@example.org', '119619060', '2267 Blanca Underpass\nElnorafurt, AR 35611-6987', '+1.706.675.5304', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(12, 'Prof. Donnell Hansen I', 'bdare@example.net', '454435368', '957 Marvin River Suite 917\nPort Alanisstad, OR 76582', '980.518.1295', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(13, 'Syble Sporer', 'charles91@example.org', '619876857', '137 Goodwin Freeway Suite 872\nNorth Halle, KY 99967', '(417) 554-9082', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(14, 'Miss Olga McLaughlin', 'jordane14@example.com', '336090109', '5119 Cormier Island\nNorth Baileyhaven, AK 51382', '+15416851585', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(15, 'Aylin O\'Hara', 'nicole48@example.com', '792653198', '865 Lemuel Roads\nChristville, OK 48796-5104', '+18642153797', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(16, 'Hudson Batz Jr.', 'aschamberger@example.net', '218093449', '308 Syble Pike Apt. 825\nEast Sierraview, DE 78883', '+1.551.440.4625', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(17, 'Prof. Myrna Cummerata', 'atorphy@example.com', '849557889', '992 Rachael Run\nHomenickchester, KS 75484', '347.683.3453', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(18, 'Dr. Enos Lockman II', 'idickinson@example.com', '79261021', '66957 Hudson Port Suite 071\nAlexismouth, NM 98264', '1-838-269-2039', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(19, 'Tierra Cummings I', 'kelsi78@example.org', '832405740', '338 Erdman Divide\nLake Angie, GA 71517-8900', '(520) 283-2022', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(20, 'Quincy Runolfsson', 'ojohnston@example.org', '544624776', '96265 Stanton Roads Apt. 123\nPort Wymantown, NH 73932-7522', '1-551-803-0721', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(21, 'Miss Savanna Hintz', 'vandervort.lucy@example.com', '782076261', '641 Sauer Squares\nPort Pattie, OH 31071', '+1 (380) 210-5494', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(22, 'Dell Schinner', 'cartwright.luis@example.org', '582528721', '390 Brendan Divide Apt. 994\nNew Santiagoside, OH 75738', '1-415-624-5817', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(23, 'Omer Von', 'goyette.toy@example.org', '742270509', '2234 Boehm Courts\nMrazview, TN 55144-8003', '+1.914.978.8183', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(24, 'Thomas Nikolaus', 'braeden29@example.net', '472368341', '3668 Howe Ports Apt. 099\nWest Benniestad, IN 55437', '1-725-749-4007', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(25, 'Lyda Kihn I', 'karina22@example.net', '575670896', '914 Manuel Plains\nSouth Avafort, NH 80244-0127', '1-347-404-7590', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(26, 'Diego Grady', 'teichmann@example.org', '786605624', '524 Magdalen Summit\nAstridborough, TN 99915-4436', '+1-518-948-7497', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(27, 'Dario Jast', 'walter.weimann@example.com', '839571312', '19390 Mayra Vista Apt. 582\nNorth Lennamouth, KS 67979-1267', '470-900-1762', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(28, 'Palma DuBuque', 'euna.hayes@example.net', '965513801', '199 Melvin Mission Suite 928\nWilsonmouth, HI 27849-8602', '1-240-410-4266', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(29, 'Adella Legros', 'gkuhlman@example.net', '375039098', '112 Jesse Alley\nRavenport, AR 22925-4146', '339.480.3366', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(30, 'Dr. Sheldon Barrows MD', 'henderson.dare@example.com', '727388152', '95987 Diamond Springs Apt. 165\nNoemyton, OH 80633', '689-934-8423', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(31, 'Prof. Geoffrey Becker Jr.', 'elvie21@example.com', '274484041', '39181 Herminio Ways Apt. 382\nTownehaven, WI 00915-8127', '+1.907.773.4852', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(32, 'Jamie Howe PhD', 'randi.wiegand@example.org', '104633056', '3273 Marquardt Shore Suite 966\nNorth Buster, ID 63121', '+1 (781) 572-2278', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(33, 'Mrs. Magdalen Shields MD', 'mbruen@example.com', '735722675', '533 Darrel Pines\nNorth Yoshikoburgh, SD 90371-0339', '810-754-4996', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(34, 'Deangelo Steuber', 'shannon94@example.com', '61881079', '5483 Stracke Tunnel Apt. 403\nPollichland, GA 41881', '(620) 830-0466', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(35, 'Dillon Runolfsdottir Jr.', 'maiya33@example.org', '970662812', '12977 Afton Road Suite 075\nUllrichland, OR 36250-5379', '1-631-556-2453', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(36, 'Jacey Powlowski', 'hope.fadel@example.org', '929655137', '909 Cameron Trail Apt. 814\nEast Deannashire, ND 79454-0772', '1-804-372-9382', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(37, 'Ryann Bosco I', 'anabelle60@example.org', '363210385', '81056 Ned Tunnel Apt. 683\nRaubury, WA 87783', '860.957.2684', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(38, 'Miss Teresa Botsford', 'hilpert.hollie@example.net', '114606206', '50706 Braeden Parks\nNew Vivianne, MN 39278', '+1 (267) 427-2357', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(39, 'Idella Wolff', 'lowe.rosanna@example.org', '779934177', '82204 Crona Valley\nEast Trentmouth, NC 76510-5491', '+1.445.833.9067', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(40, 'Gay Cole', 'verna.keebler@example.net', '675647051', '810 Runte Pines\nEverettview, MD 25355-1501', '(512) 905-3144', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(41, 'Ole Gaylord', 'santino.kunde@example.org', '123995390', '40567 Juana Orchard Apt. 867\nLefflertown, MI 00514-4831', '475.884.8724', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(42, 'Heath Swift', 'luther.spinka@example.com', '37228245', '29349 Wilkinson Hollow\nSouth Bennie, WY 27985-7591', '(219) 826-6336', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(43, 'Mrs. Alexanne Mosciski', 'ashlynn35@example.org', '531849528', '97303 Noble Ways Apt. 405\nKuhlmanburgh, MS 52625-9423', '+19013038995', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(44, 'Candido Effertz', 'aurelio.maggio@example.org', '842693508', '6069 Champlin Prairie\nRahsaanmouth, ID 50877', '425-666-0433', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(45, 'Aletha Stanton I', 'nicolas.dooley@example.org', '323847773', '51226 Reilly Hill\nJeremychester, MT 74320-6672', '+1-725-516-2778', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(46, 'Keanu Walker', 'gennaro.wisoky@example.org', '663317918', '75909 Beatty Cove\nReichertfort, OK 25636-8929', '+1 (435) 251-1291', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(47, 'Rosalia Dach', 'lucas.zieme@example.net', '52282697', '46028 Ortiz Mount Apt. 597\nNew Floshire, AR 06589-2056', '1-971-813-6022', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(48, 'Mrs. Shirley Boyer', 'joshua.jerde@example.net', '67896231', '28142 Heller Dale Suite 999\nMagnusbury, NE 21757', '+1.919.954.8650', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(49, 'Jacinto Okuneva', 'noconner@example.net', '793800083', '8966 Elda Stravenue Apt. 727\nBarrowsborough, SC 01011', '1-959-981-7891', '2024-08-18 19:46:17', '2024-08-18 19:46:17'),
(50, 'Gay Lesch', 'smiller@example.com', '370434409', '87438 Ankunding Flat Suite 268\nMarleeborough, HI 81537', '+1 (240) 851-1880', '2024-08-18 19:46:17', '2024-08-18 19:46:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `purchases`
--

CREATE TABLE `purchases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tax` decimal(12,2) NOT NULL DEFAULT 12.00,
  `total` decimal(12,2) NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `puchase_date` datetime NOT NULL,
  `status` enum('VALID','CANCELED') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'VALID',
  `provider_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Disparadores `purchases`
--
DELIMITER $$
CREATE TRIGGER `tr_updStockCompraAnular` AFTER UPDATE ON `purchases` FOR EACH ROW BEGIN
  UPDATE products p
    JOIN purchase_details di
      ON di.product_id = p.id
     AND di.purchase_id = new.id
     set p.stock = p.stock - di.quantity;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `purchase_details`
--

CREATE TABLE `purchase_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(12,2) NOT NULL,
  `purchase_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Disparadores `purchase_details`
--
DELIMITER $$
CREATE TRIGGER `tr_updStockCompra` AFTER INSERT ON `purchase_details` FOR EACH ROW BEGIN
 UPDATE products SET stock = stock + NEW.quantity 
 WHERE products.id = NEW.product_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2024-08-18 19:46:16', '2024-08-18 19:46:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sales`
--

CREATE TABLE `sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tax` decimal(12,2) NOT NULL DEFAULT 12.00,
  `total` decimal(12,2) NOT NULL,
  `sale_date` datetime NOT NULL,
  `estado_abono` int(11) DEFAULT NULL,
  `fechaE` date DEFAULT NULL,
  `abono` int(11) DEFAULT 1,
  `status` enum('VALID','CANCELED') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'VALID',
  `estado` enum('PUEDE RETIRAR','ENTREGADO') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PUEDE RETIRAR',
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sales`
--

INSERT INTO `sales` (`id`, `tax`, `total`, `sale_date`, `estado_abono`, `fechaE`, `abono`, `status`, `estado`, `client_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '0.00', '459.40', '2024-08-18 09:47:11', 1, NULL, 1, 'VALID', 'PUEDE RETIRAR', 1, 1, '2024-08-18 19:47:11', '2024-08-18 19:47:11'),
(2, '0.00', '1378.20', '2024-08-18 09:48:32', 1, NULL, 1, 'VALID', 'PUEDE RETIRAR', 1, 1, '2024-08-18 19:48:32', '2024-08-18 19:48:32'),
(3, '0.00', '71.82', '2024-08-18 09:49:42', 1, NULL, 1, 'VALID', 'PUEDE RETIRAR', 1, 1, '2024-08-18 19:49:42', '2024-08-18 19:49:42'),
(4, '0.00', '1286.32', '2024-08-18 09:53:28', 1, NULL, 1, 'VALID', 'PUEDE RETIRAR', 1, 1, '2024-08-18 19:53:28', '2024-08-18 19:53:28'),
(5, '0.00', '45.94', '2024-08-18 09:54:17', 1, NULL, 1, 'VALID', 'PUEDE RETIRAR', 1, 1, '2024-08-18 19:54:17', '2024-08-18 19:54:17'),
(6, '0.00', '70.20', '2024-08-18 09:54:49', 1, NULL, 1, 'VALID', 'PUEDE RETIRAR', 1, 1, '2024-08-18 19:54:49', '2024-08-18 19:54:49');

--
-- Disparadores `sales`
--
DELIMITER $$
CREATE TRIGGER `tr_updStockVentaAnular` AFTER UPDATE ON `sales` FOR EACH ROW BEGIN
  UPDATE products p
    JOIN sale_details dv
      ON dv.product_id = p.id
     AND dv.sale_id= new.id
     set p.stock = p.stock + dv.quantity;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sale_details`
--

CREATE TABLE `sale_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(12,2) NOT NULL,
  `discount` decimal(12,2) NOT NULL,
  `sale_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sale_details`
--

INSERT INTO `sale_details` (`id`, `quantity`, `price`, `discount`, `sale_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 10, '45.94', '0.00', 1, 1, '2024-08-18 19:47:11', '2024-08-18 19:47:11'),
(2, 30, '45.94', '0.00', 2, 1, '2024-08-18 19:48:32', '2024-08-18 19:48:32'),
(3, 3, '23.94', '0.00', 3, 35, '2024-08-18 19:49:42', '2024-08-18 19:49:42'),
(4, 28, '45.94', '0.00', 4, 1, '2024-08-18 19:53:28', '2024-08-18 19:53:28'),
(5, 1, '45.94', '0.00', 5, 1, '2024-08-18 19:54:17', '2024-08-18 19:54:17'),
(6, 30, '2.34', '0.00', 6, 3, '2024-08-18 19:54:49', '2024-08-18 19:54:49');

--
-- Disparadores `sale_details`
--
DELIMITER $$
CREATE TRIGGER `tr_updStockVenta` AFTER INSERT ON `sale_details` FOR EACH ROW BEGIN
 UPDATE products SET stock = stock - NEW.quantity 
 WHERE products.id = NEW.product_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@atlast.com', 'user.png', NULL, '$2y$10$FNipBc/QpjLX8/kzP4Ns9O7SDPgjwsx434ifjWJf/tUaFsxifTiai', NULL, '2024-08-18 19:46:16', '2024-08-18 19:46:16'),
(2, 'Hettie Cormier', 'dejuan.rau@example.org', NULL, '2024-08-18 19:46:16', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '7mNrhzXgZN', '2024-08-18 19:46:16', '2024-08-18 19:46:16');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `abonos`
--
ALTER TABLE `abonos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `abonos_sale_id_foreign` (`sale_id`);

--
-- Indices de la tabla `bunises`
--
ALTER TABLE `bunises`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categorias_name_unique` (`name`);

--
-- Indices de la tabla `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clients_identification_unique` (`identification`),
  ADD UNIQUE KEY `clients_phone_unique` (`phone`),
  ADD UNIQUE KEY `clients_email_unique` (`email`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_imageable_type_imageable_id_index` (`imageable_type`,`imageable_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `printers`
--
ALTER TABLE `printers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_code_unique` (`code`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD KEY `products_categoria_id_foreign` (`categoria_id`),
  ADD KEY `products_provider_id_foreign` (`provider_id`);

--
-- Indices de la tabla `providers`
--
ALTER TABLE `providers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `providers_name_unique` (`name`);

--
-- Indices de la tabla `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `purchases_provider_id_foreign` (`provider_id`),
  ADD KEY `purchases_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `purchase_details`
--
ALTER TABLE `purchase_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `purchase_details_purchase_id_foreign` (`purchase_id`),
  ADD KEY `purchase_details_product_id_foreign` (`product_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sales_client_id_foreign` (`client_id`),
  ADD KEY `sales_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `sale_details`
--
ALTER TABLE `sale_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sale_details_sale_id_foreign` (`sale_id`),
  ADD KEY `sale_details_product_id_foreign` (`product_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `abonos`
--
ALTER TABLE `abonos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `bunises`
--
ALTER TABLE `bunises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=758;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `printers`
--
ALTER TABLE `printers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `providers`
--
ALTER TABLE `providers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `purchase_details`
--
ALTER TABLE `purchase_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sales`
--
ALTER TABLE `sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `sale_details`
--
ALTER TABLE `sale_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `abonos`
--
ALTER TABLE `abonos`
  ADD CONSTRAINT `abonos_sale_id_foreign` FOREIGN KEY (`sale_id`) REFERENCES `sales` (`id`);

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`),
  ADD CONSTRAINT `products_provider_id_foreign` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`id`);

--
-- Filtros para la tabla `purchases`
--
ALTER TABLE `purchases`
  ADD CONSTRAINT `purchases_provider_id_foreign` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`id`),
  ADD CONSTRAINT `purchases_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `purchase_details`
--
ALTER TABLE `purchase_details`
  ADD CONSTRAINT `purchase_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `purchase_details_purchase_id_foreign` FOREIGN KEY (`purchase_id`) REFERENCES `purchases` (`id`);

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`),
  ADD CONSTRAINT `sales_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `sale_details`
--
ALTER TABLE `sale_details`
  ADD CONSTRAINT `sale_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `sale_details_sale_id_foreign` FOREIGN KEY (`sale_id`) REFERENCES `sales` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
