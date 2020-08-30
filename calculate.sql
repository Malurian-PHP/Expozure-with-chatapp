-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 11, 2020 at 02:51 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calculate`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `primary_category` enum('host','sponsor') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondary_category` enum('host','sponsor') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tertiary_category` enum('host','sponsor') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `post_id` bigint(20) NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from` int(10) UNSIGNED NOT NULL,
  `to` int(10) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `from`, `to`, `text`, `created_at`, `updated_at`) VALUES
(1, 15, 1, 'Vero exercitationem inventore qui.', '2020-03-07 07:40:24', '2020-03-07 07:40:24'),
(2, 4, 6, 'Voluptates labore ducimus earum qui iste.', '2020-03-07 07:40:24', '2020-03-07 07:40:24'),
(3, 10, 20, 'Est rem fugit numquam ea repellat ea quae.', '2020-03-07 07:40:24', '2020-03-07 07:40:24'),
(4, 7, 10, 'Esse sapiente incidunt corporis soluta molestias ea.', '2020-03-07 07:40:24', '2020-03-07 07:40:24'),
(5, 17, 2, 'Aliquid id rem sed debitis quod qui corrupti.', '2020-03-07 07:40:24', '2020-03-07 07:40:24'),
(6, 20, 14, 'Ipsa error est facilis qui distinctio harum molestiae magni.', '2020-03-07 07:40:24', '2020-03-07 07:40:24'),
(7, 7, 4, 'Voluptatem quisquam esse fuga qui.', '2020-03-07 07:40:24', '2020-03-07 07:40:24'),
(8, 1, 18, 'Expedita eum dolorum quia quibusdam nisi veniam.', '2020-03-07 07:40:25', '2020-03-07 07:40:25'),
(9, 17, 10, 'Eum et dolor id perferendis voluptas.', '2020-03-07 07:40:25', '2020-03-07 07:40:25'),
(10, 18, 20, 'Similique culpa atque id beatae rerum sunt et.', '2020-03-07 07:40:25', '2020-03-07 07:40:25'),
(11, 6, 15, 'Numquam voluptatem adipisci et.', '2020-03-07 07:40:25', '2020-03-07 07:40:25'),
(12, 12, 15, 'Ea veniam hic sequi dolorum alias officia vero.', '2020-03-07 07:40:25', '2020-03-07 07:40:25'),
(13, 10, 6, 'Ut maxime suscipit eos harum ea tempore totam qui.', '2020-03-07 07:40:25', '2020-03-07 07:40:25'),
(14, 11, 13, 'Quia tempore ipsum et enim.', '2020-03-07 07:40:25', '2020-03-07 07:40:25'),
(15, 11, 13, 'Blanditiis nihil aut ea enim nam exercitationem.', '2020-03-07 07:40:25', '2020-03-07 07:40:25'),
(16, 18, 19, 'Error ad suscipit rem dolore sit nihil.', '2020-03-07 07:40:25', '2020-03-07 07:40:25'),
(17, 12, 5, 'Facere sed ipsa similique placeat.', '2020-03-07 07:40:25', '2020-03-07 07:40:25'),
(18, 18, 6, 'Praesentium voluptas eveniet et et et a.', '2020-03-07 07:40:25', '2020-03-07 07:40:25'),
(19, 14, 2, 'Magnam suscipit quis dolores unde corrupti.', '2020-03-07 07:40:25', '2020-03-07 07:40:25'),
(20, 14, 9, 'Suscipit hic error iure esse est vero.', '2020-03-07 07:40:25', '2020-03-07 07:40:25'),
(21, 9, 3, 'Sequi totam libero ullam labore mollitia sunt veritatis.', '2020-03-07 07:40:25', '2020-03-07 07:40:25'),
(22, 6, 7, 'Reiciendis et atque saepe non dolorem vero.', '2020-03-07 07:40:25', '2020-03-07 07:40:25'),
(23, 19, 11, 'Eos voluptatem amet consequuntur neque incidunt.', '2020-03-07 07:40:25', '2020-03-07 07:40:25'),
(24, 14, 5, 'Est quia architecto expedita dignissimos ut atque itaque.', '2020-03-07 07:40:25', '2020-03-07 07:40:25'),
(25, 9, 3, 'Et dolores ducimus veritatis incidunt minus est.', '2020-03-07 07:40:25', '2020-03-07 07:40:25'),
(26, 2, 15, 'Enim officia consequatur magnam amet ea voluptatum.', '2020-03-07 07:40:25', '2020-03-07 07:40:25'),
(27, 16, 8, 'Officia blanditiis a fugiat consequatur aut possimus ab.', '2020-03-07 07:40:25', '2020-03-07 07:40:25'),
(28, 18, 10, 'Dolorem ipsa porro aut.', '2020-03-07 07:40:25', '2020-03-07 07:40:25'),
(29, 3, 16, 'Odio aliquam quo ut voluptatem.', '2020-03-07 07:40:25', '2020-03-07 07:40:25'),
(30, 18, 17, 'Libero id quo nesciunt et et magni qui.', '2020-03-07 07:40:25', '2020-03-07 07:40:25'),
(31, 4, 7, 'Sint dolorum maiores minus odio perferendis quod quasi.', '2020-03-07 07:40:25', '2020-03-07 07:40:25'),
(32, 14, 6, 'Quae atque facere aut incidunt vel in mollitia.', '2020-03-07 07:40:25', '2020-03-07 07:40:25'),
(33, 7, 4, 'Delectus dolorem incidunt vel pariatur aut neque ipsa.', '2020-03-07 07:40:25', '2020-03-07 07:40:25'),
(34, 7, 13, 'Consequatur officia excepturi animi corporis voluptas.', '2020-03-07 07:40:26', '2020-03-07 07:40:26'),
(35, 14, 2, 'Reprehenderit repellendus ex qui nihil enim ut odio.', '2020-03-07 07:40:26', '2020-03-07 07:40:26'),
(36, 19, 7, 'Architecto sunt voluptatem eum harum.', '2020-03-07 07:40:26', '2020-03-07 07:40:26'),
(37, 5, 3, 'Corporis reprehenderit asperiores ullam est.', '2020-03-07 07:40:26', '2020-03-07 07:40:26'),
(38, 3, 9, 'Amet ut et provident incidunt corporis explicabo est.', '2020-03-07 07:40:26', '2020-03-07 07:40:26'),
(39, 5, 18, 'Quaerat sit sed reiciendis quia et cupiditate.', '2020-03-07 07:40:26', '2020-03-07 07:40:26'),
(40, 6, 8, 'Recusandae placeat quia praesentium fugit dolore amet.', '2020-03-07 07:40:26', '2020-03-07 07:40:26'),
(41, 12, 13, 'Recusandae quaerat maxime et enim.', '2020-03-07 07:40:26', '2020-03-07 07:40:26'),
(42, 10, 20, 'Sequi aspernatur nihil laboriosam.', '2020-03-07 07:40:26', '2020-03-07 07:40:26'),
(43, 14, 8, 'Voluptatibus molestiae non minus dolore.', '2020-03-07 07:40:26', '2020-03-07 07:40:26'),
(44, 11, 4, 'Modi voluptatem ut vel quaerat porro vero perferendis.', '2020-03-07 07:40:26', '2020-03-07 07:40:26'),
(45, 1, 4, 'Non voluptas omnis quia repellendus veritatis quam sunt.', '2020-03-07 07:40:26', '2020-03-07 07:40:26'),
(46, 8, 19, 'Aut labore consequatur optio sint et.', '2020-03-07 07:40:26', '2020-03-07 07:40:26'),
(47, 2, 17, 'Ut sed qui et nisi autem perferendis.', '2020-03-07 07:40:26', '2020-03-07 07:40:26'),
(48, 17, 9, 'Velit non dolor accusamus quos deleniti necessitatibus.', '2020-03-07 07:40:26', '2020-03-07 07:40:26'),
(49, 9, 2, 'Saepe natus ex ut et ut dolor.', '2020-03-07 07:40:26', '2020-03-07 07:40:26'),
(50, 20, 14, 'Placeat beatae rerum minima molestias.', '2020-03-07 07:40:26', '2020-03-07 07:40:26'),
(51, 17, 1, 'Amet et consequatur ex repellendus repellat nihil veritatis.', '2020-03-07 07:40:26', '2020-03-07 07:40:26'),
(52, 20, 1, 'Dolorem vel aut ut aspernatur dolorem velit veniam non.', '2020-03-07 07:40:26', '2020-03-07 07:40:26'),
(53, 3, 13, 'Laborum aperiam voluptatem molestiae corporis.', '2020-03-07 07:40:26', '2020-03-07 07:40:26'),
(54, 18, 17, 'Omnis in numquam nemo porro dolor quia similique labore.', '2020-03-07 07:40:26', '2020-03-07 07:40:26'),
(55, 19, 15, 'Fugit fugiat molestiae reiciendis consectetur.', '2020-03-07 07:40:26', '2020-03-07 07:40:26'),
(56, 3, 9, 'Nesciunt voluptatem id magni delectus.', '2020-03-07 07:40:26', '2020-03-07 07:40:26'),
(57, 5, 11, 'Quibusdam autem qui vel facere inventore omnis est.', '2020-03-07 07:40:26', '2020-03-07 07:40:26'),
(58, 4, 20, 'Consequatur et quo non ut vitae repellendus alias.', '2020-03-07 07:40:26', '2020-03-07 07:40:26'),
(59, 14, 16, 'Ut molestiae reiciendis atque quo.', '2020-03-07 07:40:26', '2020-03-07 07:40:26'),
(60, 4, 6, 'Blanditiis itaque architecto voluptatem magnam expedita praesentium.', '2020-03-07 07:40:26', '2020-03-07 07:40:26'),
(61, 3, 4, 'Quia ratione voluptatem asperiores inventore.', '2020-03-07 07:40:26', '2020-03-07 07:40:26'),
(62, 7, 14, 'Debitis fugiat ad corporis eum impedit id ut.', '2020-03-07 07:40:26', '2020-03-07 07:40:26'),
(63, 2, 18, 'Eaque dolorem placeat et sequi voluptatem.', '2020-03-07 07:40:27', '2020-03-07 07:40:27'),
(64, 8, 3, 'Consequatur voluptatibus dolorem est recusandae laborum natus nobis odit.', '2020-03-07 07:40:27', '2020-03-07 07:40:27'),
(65, 11, 16, 'Officia debitis consequatur et distinctio.', '2020-03-07 07:40:27', '2020-03-07 07:40:27'),
(66, 7, 9, 'Molestiae possimus non autem ut quos sint.', '2020-03-07 07:40:27', '2020-03-07 07:40:27'),
(67, 3, 12, 'Magni illum soluta saepe aut amet facere labore fuga.', '2020-03-07 07:40:27', '2020-03-07 07:40:27'),
(68, 7, 4, 'Voluptas enim rerum earum sequi ut.', '2020-03-07 07:40:27', '2020-03-07 07:40:27'),
(69, 18, 2, 'Ut asperiores sed similique voluptas sed laudantium.', '2020-03-07 07:40:27', '2020-03-07 07:40:27'),
(70, 3, 13, 'Quo neque deserunt aut quia suscipit.', '2020-03-07 07:40:27', '2020-03-07 07:40:27'),
(71, 5, 9, 'Id praesentium qui similique est facilis aut.', '2020-03-07 07:40:27', '2020-03-07 07:40:27'),
(72, 8, 6, 'Et illum ut aliquid et tempore provident a.', '2020-03-07 07:40:27', '2020-03-07 07:40:27'),
(73, 9, 17, 'Perspiciatis nam iure sit dolores ipsam.', '2020-03-07 07:40:27', '2020-03-07 07:40:27'),
(74, 2, 11, 'Iure est commodi ratione est.', '2020-03-07 07:40:27', '2020-03-07 07:40:27'),
(75, 9, 3, 'Cupiditate officia nulla non et qui esse non.', '2020-03-07 07:40:27', '2020-03-07 07:40:27'),
(76, 3, 20, 'Qui sit voluptatem fugiat omnis itaque.', '2020-03-07 07:40:27', '2020-03-07 07:40:27'),
(77, 1, 2, 'Tempora at quia repudiandae et.', '2020-03-07 07:40:27', '2020-03-07 07:40:27'),
(78, 19, 18, 'Odio soluta consequuntur odit nemo placeat.', '2020-03-07 07:40:27', '2020-03-07 07:40:27'),
(79, 4, 15, 'Ipsa et nesciunt omnis cupiditate qui maiores.', '2020-03-07 07:40:27', '2020-03-07 07:40:27'),
(80, 16, 18, 'Dicta quia adipisci facere consequuntur.', '2020-03-07 07:40:27', '2020-03-07 07:40:27'),
(81, 3, 10, 'Consequatur nihil culpa optio.', '2020-03-07 07:40:27', '2020-03-07 07:40:27'),
(82, 1, 9, 'Distinctio consequatur autem sed aut hic aspernatur deserunt.', '2020-03-07 07:40:27', '2020-03-07 07:40:27'),
(83, 4, 10, 'Quaerat ex quia ut libero facilis enim.', '2020-03-07 07:40:27', '2020-03-07 07:40:27'),
(84, 1, 4, 'Numquam tenetur et recusandae aut.', '2020-03-07 07:40:27', '2020-03-07 07:40:27'),
(85, 13, 15, 'Repellendus minima atque reiciendis odit earum voluptas impedit recusandae.', '2020-03-07 07:40:28', '2020-03-07 07:40:28'),
(86, 1, 7, 'Qui sint aut est neque tempora autem velit.', '2020-03-07 07:40:28', '2020-03-07 07:40:28'),
(87, 9, 17, 'Quo qui magni aut.', '2020-03-07 07:40:28', '2020-03-07 07:40:28'),
(88, 7, 17, 'Consequatur magni voluptas cum labore consequatur sed sit.', '2020-03-07 07:40:28', '2020-03-07 07:40:28'),
(89, 16, 4, 'Quibusdam eos reprehenderit ad consequatur.', '2020-03-07 07:40:28', '2020-03-07 07:40:28'),
(90, 8, 20, 'Magnam reprehenderit animi vero unde.', '2020-03-07 07:40:28', '2020-03-07 07:40:28'),
(91, 8, 6, 'Aut cupiditate voluptatem at quod exercitationem rerum perferendis.', '2020-03-07 07:40:28', '2020-03-07 07:40:28'),
(92, 13, 9, 'Qui qui architecto quia debitis voluptatum.', '2020-03-07 07:40:28', '2020-03-07 07:40:28'),
(93, 19, 17, 'Culpa laudantium ex rerum deleniti ipsum reiciendis.', '2020-03-07 07:40:28', '2020-03-07 07:40:28'),
(94, 5, 10, 'Distinctio in et fugiat ducimus est id.', '2020-03-07 07:40:28', '2020-03-07 07:40:28'),
(95, 15, 9, 'Aperiam veniam possimus harum vitae minus animi.', '2020-03-07 07:40:28', '2020-03-07 07:40:28'),
(96, 5, 10, 'Dignissimos laudantium est soluta veritatis vel et voluptas.', '2020-03-07 07:40:28', '2020-03-07 07:40:28'),
(97, 15, 20, 'Eligendi molestiae doloribus fugiat officia corrupti.', '2020-03-07 07:40:28', '2020-03-07 07:40:28'),
(98, 18, 12, 'Voluptas sed unde illo et voluptas delectus.', '2020-03-07 07:40:28', '2020-03-07 07:40:28'),
(99, 10, 12, 'Quas nesciunt voluptatem fugiat dolor nisi numquam non.', '2020-03-07 07:40:28', '2020-03-07 07:40:28'),
(100, 16, 13, 'Ducimus quibusdam aperiam deserunt modi.', '2020-03-07 07:40:28', '2020-03-07 07:40:28'),
(101, 10, 5, 'Ab distinctio ut sunt adipisci.', '2020-03-07 07:40:28', '2020-03-07 07:40:28'),
(102, 9, 4, 'Nobis aliquid et aut similique ipsam.', '2020-03-07 07:40:28', '2020-03-07 07:40:28'),
(103, 12, 19, 'Qui unde et corrupti odit sint optio nihil.', '2020-03-07 07:40:28', '2020-03-07 07:40:28'),
(104, 20, 10, 'Laudantium aliquid neque unde sed voluptatem fugiat provident est.', '2020-03-07 07:40:28', '2020-03-07 07:40:28'),
(105, 2, 6, 'Accusantium accusantium odio magni enim quidem doloremque.', '2020-03-07 07:40:28', '2020-03-07 07:40:28'),
(106, 2, 9, 'Voluptates in accusamus dolore sint aliquam deserunt magnam.', '2020-03-07 07:40:28', '2020-03-07 07:40:28'),
(107, 15, 14, 'Architecto exercitationem ad dolor consequatur aut est rerum.', '2020-03-07 07:40:28', '2020-03-07 07:40:28'),
(108, 1, 2, 'Esse est laboriosam non ducimus.', '2020-03-07 07:40:28', '2020-03-07 07:40:28'),
(109, 10, 12, 'Eveniet eum sed commodi sed.', '2020-03-07 07:40:28', '2020-03-07 07:40:28'),
(110, 10, 17, 'Nobis dolore incidunt maiores iusto modi.', '2020-03-07 07:40:28', '2020-03-07 07:40:28'),
(111, 6, 7, 'Aut atque itaque sed voluptatem.', '2020-03-07 07:40:28', '2020-03-07 07:40:28'),
(112, 1, 15, 'Aut et illo in rem minus sed.', '2020-03-07 07:40:28', '2020-03-07 07:40:28'),
(113, 1, 15, 'Iure esse iure optio dolore.', '2020-03-07 07:40:28', '2020-03-07 07:40:28'),
(114, 1, 12, 'Omnis voluptatem dolor sint blanditiis et.', '2020-03-07 07:40:28', '2020-03-07 07:40:28'),
(115, 10, 4, 'Veniam illum sed fugit explicabo quia.', '2020-03-07 07:40:29', '2020-03-07 07:40:29'),
(116, 16, 15, 'Numquam vero hic nesciunt itaque.', '2020-03-07 07:40:29', '2020-03-07 07:40:29'),
(117, 18, 12, 'Occaecati laboriosam aliquam ut nemo.', '2020-03-07 07:40:29', '2020-03-07 07:40:29'),
(118, 16, 5, 'Tenetur rerum laboriosam necessitatibus qui ipsa voluptatibus.', '2020-03-07 07:40:29', '2020-03-07 07:40:29'),
(119, 4, 1, 'Dolores inventore deserunt molestias.', '2020-03-07 07:40:29', '2020-03-07 07:40:29'),
(120, 18, 20, 'Tempore itaque quam eos voluptate.', '2020-03-07 07:40:29', '2020-03-07 07:40:29'),
(121, 14, 1, 'Vero doloremque nihil eum earum id eligendi.', '2020-03-07 07:40:29', '2020-03-07 07:40:29'),
(122, 1, 17, 'Consequatur placeat nemo quos cumque omnis.', '2020-03-07 07:40:29', '2020-03-07 07:40:29'),
(123, 14, 5, 'Voluptatum omnis soluta repellendus dolor non voluptas minus.', '2020-03-07 07:40:29', '2020-03-07 07:40:29'),
(124, 16, 19, 'Ex cum enim quia aliquam quibusdam.', '2020-03-07 07:40:29', '2020-03-07 07:40:29'),
(125, 11, 2, 'Tempora aut odit blanditiis voluptas.', '2020-03-07 07:40:29', '2020-03-07 07:40:29'),
(126, 8, 1, 'Provident animi tenetur architecto quidem perspiciatis ea voluptatibus.', '2020-03-07 07:40:29', '2020-03-07 07:40:29'),
(127, 18, 11, 'Accusamus rerum perferendis porro.', '2020-03-07 07:40:29', '2020-03-07 07:40:29'),
(128, 7, 18, 'Culpa quae consequuntur dolore sed.', '2020-03-07 07:40:29', '2020-03-07 07:40:29'),
(129, 4, 8, 'Voluptas pariatur voluptatem est sint reiciendis dolorum omnis.', '2020-03-07 07:40:29', '2020-03-07 07:40:29'),
(130, 20, 5, 'Cum magnam illum consequatur rerum id error aliquam voluptatum.', '2020-03-07 07:40:29', '2020-03-07 07:40:29'),
(131, 19, 20, 'Possimus delectus illum officiis placeat.', '2020-03-07 07:40:29', '2020-03-07 07:40:29'),
(132, 14, 3, 'Beatae at dolorem et aliquam ut impedit accusantium.', '2020-03-07 07:40:29', '2020-03-07 07:40:29'),
(133, 16, 19, 'Omnis accusantium neque magni vitae accusamus est dolor.', '2020-03-07 07:40:29', '2020-03-07 07:40:29'),
(134, 10, 14, 'Ratione voluptate quae asperiores sunt et expedita.', '2020-03-07 07:40:29', '2020-03-07 07:40:29'),
(135, 17, 6, 'Delectus adipisci beatae molestiae quidem.', '2020-03-07 07:40:29', '2020-03-07 07:40:29'),
(136, 11, 17, 'Cum facere dolor et enim.', '2020-03-07 07:40:29', '2020-03-07 07:40:29'),
(137, 2, 15, 'Modi quisquam quaerat quisquam molestiae.', '2020-03-07 07:40:29', '2020-03-07 07:40:29'),
(138, 14, 7, 'Fugiat sed id voluptatem necessitatibus non necessitatibus est.', '2020-03-07 07:40:29', '2020-03-07 07:40:29'),
(139, 9, 20, 'Ipsa incidunt odit et est cumque atque nam.', '2020-03-07 07:40:30', '2020-03-07 07:40:30'),
(140, 5, 7, 'Impedit beatae corrupti quidem soluta.', '2020-03-07 07:40:30', '2020-03-07 07:40:30'),
(141, 5, 1, 'Quia architecto libero vero iusto sequi sed et.', '2020-03-07 07:40:30', '2020-03-07 07:40:30'),
(142, 5, 20, 'Quos nihil soluta blanditiis quaerat.', '2020-03-07 07:40:30', '2020-03-07 07:40:30'),
(143, 3, 17, 'Accusamus suscipit harum magnam est sapiente.', '2020-03-07 07:40:30', '2020-03-07 07:40:30'),
(144, 3, 1, 'Incidunt omnis temporibus minus blanditiis voluptatem et.', '2020-03-07 07:40:30', '2020-03-07 07:40:30'),
(145, 19, 10, 'Excepturi dolor dolorum beatae.', '2020-03-07 07:40:30', '2020-03-07 07:40:30'),
(146, 3, 8, 'Rerum enim ea facilis eum.', '2020-03-07 07:40:30', '2020-03-07 07:40:30'),
(147, 1, 5, 'Sed velit laborum porro perferendis ut architecto.', '2020-03-07 07:40:30', '2020-03-07 07:40:30'),
(148, 13, 15, 'Iure praesentium vel explicabo rerum dolores labore.', '2020-03-07 07:40:30', '2020-03-07 07:40:30'),
(149, 9, 5, 'Sint fugiat earum cum eos beatae placeat.', '2020-03-07 07:40:30', '2020-03-07 07:40:30'),
(150, 6, 10, 'Ut praesentium harum odit sit qui eius nihil.', '2020-03-07 07:40:30', '2020-03-07 07:40:30'),
(151, 6, 9, 'Ut consequatur repellat id sint nam iste maiores.', '2020-03-07 07:40:30', '2020-03-07 07:40:30'),
(152, 14, 7, 'Rerum non ipsam molestias.', '2020-03-07 07:40:31', '2020-03-07 07:40:31'),
(153, 11, 19, 'Minus ut sit blanditiis voluptates officiis et.', '2020-03-07 07:40:31', '2020-03-07 07:40:31'),
(154, 18, 3, 'Ipsa at quidem nisi vel qui.', '2020-03-07 07:40:31', '2020-03-07 07:40:31'),
(155, 5, 3, 'Rerum optio quia enim dolores fugiat.', '2020-03-07 07:40:31', '2020-03-07 07:40:31'),
(156, 9, 13, 'Reiciendis quisquam dolore in quo facilis.', '2020-03-07 07:40:31', '2020-03-07 07:40:31'),
(157, 17, 11, 'Debitis quis neque provident dolorum tempore.', '2020-03-07 07:40:31', '2020-03-07 07:40:31'),
(158, 16, 18, 'Voluptate quam tempore totam quod.', '2020-03-07 07:40:31', '2020-03-07 07:40:31'),
(159, 7, 9, 'Sunt illo rem ea atque.', '2020-03-07 07:40:31', '2020-03-07 07:40:31'),
(160, 11, 7, 'Dignissimos ipsum et maxime blanditiis.', '2020-03-07 07:40:31', '2020-03-07 07:40:31'),
(161, 2, 11, 'Atque sint laborum omnis architecto est quis quia.', '2020-03-07 07:40:31', '2020-03-07 07:40:31'),
(162, 16, 2, 'Earum voluptatem et et ut ipsam.', '2020-03-07 07:40:31', '2020-03-07 07:40:31'),
(163, 12, 14, 'Sapiente quae qui architecto ut molestiae et.', '2020-03-07 07:40:31', '2020-03-07 07:40:31'),
(164, 1, 18, 'Maiores voluptatibus tenetur iure consequatur sint dolorum ex.', '2020-03-07 07:40:31', '2020-03-07 07:40:31'),
(165, 2, 16, 'Ipsa neque quibusdam eius esse.', '2020-03-07 07:40:31', '2020-03-07 07:40:31'),
(166, 3, 6, 'Blanditiis quaerat rerum perspiciatis totam.', '2020-03-07 07:40:31', '2020-03-07 07:40:31'),
(167, 1, 11, 'Quam sint modi deleniti natus.', '2020-03-07 07:40:31', '2020-03-07 07:40:31'),
(168, 17, 1, 'Corporis nesciunt placeat ipsa dolor.', '2020-03-07 07:40:32', '2020-03-07 07:40:32'),
(169, 2, 18, 'Distinctio error maiores voluptas libero dolore.', '2020-03-07 07:40:32', '2020-03-07 07:40:32'),
(170, 14, 12, 'Accusamus tenetur at consectetur praesentium hic est.', '2020-03-07 07:40:32', '2020-03-07 07:40:32'),
(171, 5, 14, 'Quia quia ipsum ullam.', '2020-03-07 07:40:32', '2020-03-07 07:40:32'),
(172, 20, 8, 'Eos qui est amet repudiandae rerum neque omnis suscipit.', '2020-03-07 07:40:32', '2020-03-07 07:40:32'),
(173, 2, 17, 'Dignissimos provident animi dolores adipisci aut molestias vitae.', '2020-03-07 07:40:32', '2020-03-07 07:40:32'),
(174, 7, 17, 'Facilis sit dolorem eius ut qui.', '2020-03-07 07:40:32', '2020-03-07 07:40:32'),
(175, 14, 12, 'Enim aspernatur ducimus officia nulla modi qui qui.', '2020-03-07 07:40:32', '2020-03-07 07:40:32'),
(176, 14, 7, 'Ipsum dignissimos aut ex doloremque occaecati.', '2020-03-07 07:40:32', '2020-03-07 07:40:32'),
(177, 11, 9, 'Illo omnis perspiciatis quidem quo eum deleniti dolorem.', '2020-03-07 07:40:32', '2020-03-07 07:40:32'),
(178, 20, 13, 'Dolores est ullam dolores neque quia.', '2020-03-07 07:40:32', '2020-03-07 07:40:32'),
(179, 3, 18, 'Ullam facere aut repellat est aliquid.', '2020-03-07 07:40:32', '2020-03-07 07:40:32'),
(180, 12, 15, 'Earum quis soluta tempora temporibus maiores.', '2020-03-07 07:40:33', '2020-03-07 07:40:33'),
(181, 8, 7, 'Totam consequatur quibusdam beatae reprehenderit eligendi.', '2020-03-07 07:40:33', '2020-03-07 07:40:33'),
(182, 3, 6, 'Aut repellendus in illo.', '2020-03-07 07:40:33', '2020-03-07 07:40:33'),
(183, 20, 6, 'Consequuntur et esse ea.', '2020-03-07 07:40:33', '2020-03-07 07:40:33'),
(184, 16, 6, 'Quia in accusantium aut nisi laudantium magnam iste facere.', '2020-03-07 07:40:33', '2020-03-07 07:40:33'),
(185, 2, 16, 'Rerum consequatur quis qui a et.', '2020-03-07 07:40:33', '2020-03-07 07:40:33'),
(186, 11, 8, 'Sit voluptatum perferendis aspernatur esse.', '2020-03-07 07:40:33', '2020-03-07 07:40:33'),
(187, 9, 20, 'Non repellendus minus inventore maiores.', '2020-03-07 07:40:33', '2020-03-07 07:40:33'),
(188, 5, 8, 'Rerum quaerat facere mollitia quisquam aut.', '2020-03-07 07:40:33', '2020-03-07 07:40:33'),
(189, 1, 9, 'Est dolor accusamus provident illo repellendus veniam error.', '2020-03-07 07:40:33', '2020-03-07 07:40:33'),
(190, 2, 18, 'Eaque minus ipsa expedita et corrupti occaecati.', '2020-03-07 07:40:33', '2020-03-07 07:40:33'),
(191, 18, 5, 'Qui aperiam aut qui sint odio doloribus voluptas.', '2020-03-07 07:40:33', '2020-03-07 07:40:33'),
(192, 12, 7, 'Quod in omnis sit ab voluptatem ducimus.', '2020-03-07 07:40:33', '2020-03-07 07:40:33'),
(193, 2, 1, 'Eveniet dolor quis explicabo dolore.', '2020-03-07 07:40:33', '2020-03-07 07:40:33'),
(194, 10, 11, 'Nihil et at adipisci.', '2020-03-07 07:40:33', '2020-03-07 07:40:33'),
(195, 4, 9, 'Eum dolores architecto doloremque qui cupiditate.', '2020-03-07 07:40:33', '2020-03-07 07:40:33'),
(196, 18, 1, 'Quia dolores est deleniti aut impedit dolorum qui qui.', '2020-03-07 07:40:33', '2020-03-07 07:40:33'),
(197, 3, 6, 'Enim eligendi ducimus cum reiciendis.', '2020-03-07 07:40:33', '2020-03-07 07:40:33'),
(198, 12, 4, 'Libero nesciunt dolorem aut cupiditate.', '2020-03-07 07:40:33', '2020-03-07 07:40:33'),
(199, 1, 12, 'Enim cumque adipisci ratione omnis alias.', '2020-03-07 07:40:33', '2020-03-07 07:40:33'),
(200, 14, 15, 'Laudantium recusandae nisi blanditiis rerum.', '2020-03-07 07:40:33', '2020-03-07 07:40:33'),
(201, 20, 18, 'Cupiditate ad blanditiis aut quae soluta ut.', '2020-03-07 07:40:33', '2020-03-07 07:40:33'),
(202, 13, 3, 'Reprehenderit occaecati velit tempora voluptas eum qui.', '2020-03-07 07:40:33', '2020-03-07 07:40:33'),
(203, 19, 16, 'Quia odit vel iusto adipisci perspiciatis.', '2020-03-07 07:40:33', '2020-03-07 07:40:33'),
(204, 1, 4, 'Qui molestias molestiae natus voluptatem quia.', '2020-03-07 07:40:33', '2020-03-07 07:40:33'),
(205, 16, 17, 'Aut commodi dicta deleniti illo nemo et veritatis.', '2020-03-07 07:40:34', '2020-03-07 07:40:34'),
(206, 13, 19, 'Ratione qui omnis soluta et quia.', '2020-03-07 07:40:34', '2020-03-07 07:40:34'),
(207, 11, 18, 'Illo dolor ut porro facilis.', '2020-03-07 07:40:34', '2020-03-07 07:40:34'),
(208, 16, 6, 'Consequatur temporibus numquam accusantium et non.', '2020-03-07 07:40:34', '2020-03-07 07:40:34'),
(209, 15, 3, 'Nulla est autem repudiandae dignissimos fuga exercitationem.', '2020-03-07 07:40:34', '2020-03-07 07:40:34'),
(210, 20, 19, 'Quis ipsum facere dolore eius eveniet modi doloribus.', '2020-03-07 07:40:34', '2020-03-07 07:40:34'),
(211, 12, 19, 'Nisi dolores iusto voluptatem libero libero dolor error.', '2020-03-07 07:40:34', '2020-03-07 07:40:34'),
(212, 5, 15, 'Eaque aspernatur autem placeat qui.', '2020-03-07 07:40:34', '2020-03-07 07:40:34'),
(213, 12, 5, 'Voluptate debitis est qui voluptate quod.', '2020-03-07 07:40:34', '2020-03-07 07:40:34'),
(214, 12, 9, 'Ipsum consequuntur minus non aut dolores.', '2020-03-07 07:40:34', '2020-03-07 07:40:34'),
(215, 16, 14, 'Quia facere maiores quidem sunt.', '2020-03-07 07:40:34', '2020-03-07 07:40:34'),
(216, 4, 5, 'Tempora ullam voluptatum corrupti adipisci voluptatum pariatur.', '2020-03-07 07:40:34', '2020-03-07 07:40:34'),
(217, 16, 19, 'Placeat molestias enim rerum laudantium dignissimos facilis aut.', '2020-03-07 07:40:34', '2020-03-07 07:40:34'),
(218, 15, 18, 'Nobis qui recusandae rerum voluptatem perferendis.', '2020-03-07 07:40:34', '2020-03-07 07:40:34'),
(219, 15, 18, 'Error suscipit ex molestias minima deleniti qui labore.', '2020-03-07 07:40:34', '2020-03-07 07:40:34'),
(220, 12, 4, 'Et alias in omnis ut quia.', '2020-03-07 07:40:34', '2020-03-07 07:40:34'),
(221, 19, 8, 'Hic enim earum officia corporis corrupti architecto beatae.', '2020-03-07 07:40:34', '2020-03-07 07:40:34'),
(222, 14, 4, 'Nisi pariatur mollitia culpa iste laudantium ipsam facilis.', '2020-03-07 07:40:34', '2020-03-07 07:40:34'),
(223, 11, 4, 'Culpa sed non ut.', '2020-03-07 07:40:34', '2020-03-07 07:40:34'),
(224, 18, 17, 'Dolore a repellat dolorum id.', '2020-03-07 07:40:34', '2020-03-07 07:40:34'),
(225, 20, 9, 'Enim voluptatem deserunt corrupti nemo ab blanditiis alias.', '2020-03-07 07:40:34', '2020-03-07 07:40:34'),
(226, 16, 17, 'Dolores ipsam placeat numquam asperiores dignissimos placeat eos.', '2020-03-07 07:40:34', '2020-03-07 07:40:34'),
(227, 4, 13, 'Minima ut earum veniam vero neque voluptatibus nesciunt.', '2020-03-07 07:40:34', '2020-03-07 07:40:34'),
(228, 18, 16, 'In nesciunt dolorem cupiditate at.', '2020-03-07 07:40:34', '2020-03-07 07:40:34'),
(229, 17, 8, 'Consequatur quis porro nisi labore soluta id dolores.', '2020-03-07 07:40:34', '2020-03-07 07:40:34'),
(230, 8, 2, 'Libero nemo quo consequuntur nobis delectus asperiores.', '2020-03-07 07:40:35', '2020-03-07 07:40:35'),
(231, 15, 12, 'Illum dolorum quis vel magnam ea non.', '2020-03-07 07:40:35', '2020-03-07 07:40:35'),
(232, 6, 15, 'Quaerat maxime deleniti sed laudantium ut dolorum.', '2020-03-07 07:40:35', '2020-03-07 07:40:35'),
(233, 19, 1, 'Nobis quibusdam voluptatem eaque deleniti fugiat.', '2020-03-07 07:40:35', '2020-03-07 07:40:35'),
(234, 4, 16, 'Beatae eos et qui blanditiis.', '2020-03-07 07:40:35', '2020-03-07 07:40:35'),
(235, 15, 12, 'Quas qui inventore error labore commodi et.', '2020-03-07 07:40:35', '2020-03-07 07:40:35'),
(236, 9, 1, 'Laborum omnis nostrum ipsam et ex eaque animi commodi.', '2020-03-07 07:40:35', '2020-03-07 07:40:35'),
(237, 15, 10, 'Debitis at vero dolor nam perspiciatis voluptatibus.', '2020-03-07 07:40:35', '2020-03-07 07:40:35'),
(238, 12, 18, 'Quidem aspernatur dolorem voluptates perspiciatis necessitatibus perferendis voluptatem.', '2020-03-07 07:40:35', '2020-03-07 07:40:35'),
(239, 5, 17, 'Et quod repudiandae rem maiores.', '2020-03-07 07:40:35', '2020-03-07 07:40:35'),
(240, 17, 4, 'Placeat id quisquam vero aut placeat ea recusandae.', '2020-03-07 07:40:35', '2020-03-07 07:40:35'),
(241, 11, 17, 'In debitis aut quia.', '2020-03-07 07:40:35', '2020-03-07 07:40:35'),
(242, 13, 7, 'Blanditiis ea cupiditate et rem facere aspernatur sequi.', '2020-03-07 07:40:35', '2020-03-07 07:40:35'),
(243, 14, 4, 'Quisquam ut saepe reprehenderit excepturi molestiae labore at nihil.', '2020-03-07 07:40:35', '2020-03-07 07:40:35'),
(244, 20, 7, 'Nisi blanditiis dolorem amet non.', '2020-03-07 07:40:35', '2020-03-07 07:40:35'),
(245, 1, 11, 'Officiis animi quam qui in nesciunt dolorem minima.', '2020-03-07 07:40:35', '2020-03-07 07:40:35'),
(246, 4, 10, 'Repudiandae quisquam minus aut aut eos sit consequatur minima.', '2020-03-07 07:40:35', '2020-03-07 07:40:35'),
(247, 11, 10, 'Soluta alias numquam ut dicta.', '2020-03-07 07:40:35', '2020-03-07 07:40:35'),
(248, 5, 12, 'Aut tenetur libero qui voluptatem vel.', '2020-03-07 07:40:35', '2020-03-07 07:40:35'),
(249, 20, 1, 'Veniam modi voluptatem quia atque omnis harum.', '2020-03-07 07:40:35', '2020-03-07 07:40:35'),
(250, 16, 1, 'Voluptatibus ut quam sapiente.', '2020-03-07 07:40:35', '2020-03-07 07:40:35'),
(251, 13, 20, 'Quis velit fuga harum laborum dolorem.', '2020-03-07 07:40:35', '2020-03-07 07:40:35'),
(252, 3, 1, 'Sit officia adipisci possimus soluta fugiat.', '2020-03-07 07:40:35', '2020-03-07 07:40:35'),
(253, 16, 10, 'Ab temporibus sed soluta iure aut.', '2020-03-07 07:40:35', '2020-03-07 07:40:35'),
(254, 1, 10, 'Dolorum animi ut sapiente modi asperiores impedit.', '2020-03-07 07:40:35', '2020-03-07 07:40:35'),
(255, 12, 3, 'Illo adipisci est sequi.', '2020-03-07 07:40:35', '2020-03-07 07:40:35'),
(256, 7, 19, 'Odio corrupti non aut rem.', '2020-03-07 07:40:35', '2020-03-07 07:40:35'),
(257, 1, 15, 'Quos aliquam aut ea cum fuga vel.', '2020-03-07 07:40:35', '2020-03-07 07:40:35'),
(258, 19, 15, 'Odio dolore dolor pariatur maiores vel aut animi.', '2020-03-07 07:40:35', '2020-03-07 07:40:35'),
(259, 3, 15, 'Et expedita dolorum ratione aut amet.', '2020-03-07 07:40:36', '2020-03-07 07:40:36'),
(260, 18, 1, 'Cupiditate voluptatem sed omnis rerum.', '2020-03-07 07:40:36', '2020-03-07 07:40:36'),
(261, 3, 18, 'Officia molestias ut cupiditate.', '2020-03-07 07:40:36', '2020-03-07 07:40:36'),
(262, 13, 16, 'Rerum voluptatem ipsa dolorem ut in.', '2020-03-07 07:40:36', '2020-03-07 07:40:36'),
(263, 7, 6, 'Qui consequuntur tempore tenetur.', '2020-03-07 07:40:36', '2020-03-07 07:40:36'),
(264, 9, 14, 'Vel aut adipisci assumenda quidem eum voluptatem quia.', '2020-03-07 07:40:36', '2020-03-07 07:40:36'),
(265, 1, 3, 'Ad natus doloremque enim voluptas.', '2020-03-07 07:40:36', '2020-03-07 07:40:36'),
(266, 18, 7, 'Qui ut totam hic magnam ipsam quo.', '2020-03-07 07:40:36', '2020-03-07 07:40:36'),
(267, 19, 7, 'Quia voluptatem eligendi unde et dolorem id.', '2020-03-07 07:40:36', '2020-03-07 07:40:36'),
(268, 15, 14, 'Tempora dolor modi debitis inventore repellendus fugiat similique.', '2020-03-07 07:40:36', '2020-03-07 07:40:36'),
(269, 9, 15, 'Maxime nesciunt ea ratione labore qui quasi excepturi harum.', '2020-03-07 07:40:36', '2020-03-07 07:40:36'),
(270, 9, 17, 'Aut voluptatibus unde earum id.', '2020-03-07 07:40:36', '2020-03-07 07:40:36'),
(271, 5, 19, 'In voluptates accusamus hic veniam quam.', '2020-03-07 07:40:36', '2020-03-07 07:40:36'),
(272, 16, 18, 'Dolor sequi magni vel in temporibus molestias.', '2020-03-07 07:40:36', '2020-03-07 07:40:36'),
(273, 12, 6, 'Iste qui rem consequuntur nam nam.', '2020-03-07 07:40:36', '2020-03-07 07:40:36'),
(274, 12, 3, 'Asperiores corrupti dolorum qui atque et soluta eum.', '2020-03-07 07:40:36', '2020-03-07 07:40:36'),
(275, 19, 18, 'Voluptates eos numquam ut adipisci eveniet.', '2020-03-07 07:40:36', '2020-03-07 07:40:36'),
(276, 8, 17, 'Animi nobis minus porro exercitationem in.', '2020-03-07 07:40:36', '2020-03-07 07:40:36'),
(277, 6, 14, 'Quaerat quibusdam laboriosam hic dignissimos dolor unde optio.', '2020-03-07 07:40:36', '2020-03-07 07:40:36'),
(278, 15, 17, 'Deserunt assumenda illo et voluptatem.', '2020-03-07 07:40:36', '2020-03-07 07:40:36'),
(279, 19, 20, 'Reprehenderit perspiciatis ad dicta id voluptate architecto dolor.', '2020-03-07 07:40:36', '2020-03-07 07:40:36'),
(280, 3, 8, 'Doloribus hic ratione fuga blanditiis et aut animi ullam.', '2020-03-07 07:40:36', '2020-03-07 07:40:36'),
(281, 14, 18, 'Ea at illo nobis aut.', '2020-03-07 07:40:36', '2020-03-07 07:40:36'),
(282, 15, 16, 'Nihil recusandae eaque magni fugiat sint est voluptas.', '2020-03-07 07:40:36', '2020-03-07 07:40:36'),
(283, 20, 4, 'Sit est velit quam eos exercitationem et.', '2020-03-07 07:40:36', '2020-03-07 07:40:36'),
(284, 6, 17, 'Non ut nostrum cum iste culpa.', '2020-03-07 07:40:36', '2020-03-07 07:40:36'),
(285, 16, 2, 'Et omnis et tempore natus quo.', '2020-03-07 07:40:36', '2020-03-07 07:40:36'),
(286, 13, 15, 'Rerum ut distinctio ab fugiat totam.', '2020-03-07 07:40:37', '2020-03-07 07:40:37'),
(287, 13, 8, 'Fuga nulla neque et ducimus omnis at qui corrupti.', '2020-03-07 07:40:37', '2020-03-07 07:40:37'),
(288, 18, 12, 'Dicta quibusdam ipsam praesentium ab.', '2020-03-07 07:40:37', '2020-03-07 07:40:37'),
(289, 20, 11, 'Quasi voluptate quis voluptas quam eligendi hic occaecati.', '2020-03-07 07:40:37', '2020-03-07 07:40:37'),
(290, 4, 2, 'Similique assumenda rerum maiores architecto itaque aperiam saepe.', '2020-03-07 07:40:37', '2020-03-07 07:40:37'),
(291, 1, 14, 'Aut culpa molestias natus ipsam qui accusamus eveniet occaecati.', '2020-03-07 07:40:37', '2020-03-07 07:40:37'),
(292, 17, 15, 'Fugit alias consequatur quas et ipsum sit.', '2020-03-07 07:40:37', '2020-03-07 07:40:37'),
(293, 19, 1, 'Iure pariatur dolores eum occaecati.', '2020-03-07 07:40:37', '2020-03-07 07:40:37'),
(294, 5, 9, 'Libero quasi illum qui quia repellat consequatur est.', '2020-03-07 07:40:37', '2020-03-07 07:40:37'),
(295, 14, 17, 'Blanditiis quod dolorem ratione quasi qui itaque.', '2020-03-07 07:40:37', '2020-03-07 07:40:37'),
(296, 13, 8, 'Rem voluptate totam sapiente aut consequatur nobis.', '2020-03-07 07:40:37', '2020-03-07 07:40:37'),
(297, 3, 4, 'Expedita consequatur sed vel praesentium aut sint soluta.', '2020-03-07 07:40:37', '2020-03-07 07:40:37'),
(298, 3, 16, 'Aliquam assumenda eos voluptates sed in omnis aspernatur veritatis.', '2020-03-07 07:40:37', '2020-03-07 07:40:37'),
(299, 2, 16, 'Reprehenderit illum ullam aut asperiores.', '2020-03-07 07:40:37', '2020-03-07 07:40:37'),
(300, 6, 7, 'Consequuntur asperiores quae qui ut quia vel nihil.', '2020-03-07 07:40:37', '2020-03-07 07:40:37'),
(301, 2, 10, 'Sit maiores voluptate quos ducimus velit eaque.', '2020-03-07 07:40:37', '2020-03-07 07:40:37'),
(302, 9, 8, 'Eum aspernatur sunt quasi veniam rerum quis.', '2020-03-07 07:40:37', '2020-03-07 07:40:37'),
(303, 3, 14, 'Pariatur recusandae ad aperiam animi enim consequuntur enim.', '2020-03-07 07:40:37', '2020-03-07 07:40:37'),
(304, 12, 3, 'Magni aut praesentium alias ullam.', '2020-03-07 07:40:37', '2020-03-07 07:40:37'),
(305, 9, 4, 'Facilis adipisci nihil et id.', '2020-03-07 07:40:37', '2020-03-07 07:40:37'),
(306, 19, 9, 'Reiciendis omnis illo veritatis in temporibus velit.', '2020-03-07 07:40:37', '2020-03-07 07:40:37'),
(307, 5, 11, 'Et quaerat quo qui sed quam voluptatem aut.', '2020-03-07 07:40:37', '2020-03-07 07:40:37'),
(308, 3, 9, 'Error et error rerum atque porro laboriosam.', '2020-03-07 07:40:37', '2020-03-07 07:40:37'),
(309, 12, 16, 'Qui eum dolorum doloribus et ipsa a.', '2020-03-07 07:40:37', '2020-03-07 07:40:37'),
(310, 15, 11, 'Et assumenda nemo est est expedita.', '2020-03-07 07:40:37', '2020-03-07 07:40:37'),
(311, 10, 5, 'Consequatur vel quaerat voluptatem autem a.', '2020-03-07 07:40:37', '2020-03-07 07:40:37'),
(312, 7, 9, 'Qui voluptatum possimus natus blanditiis rerum doloribus.', '2020-03-07 07:40:38', '2020-03-07 07:40:38'),
(313, 13, 7, 'Iure tenetur aspernatur et labore consequatur.', '2020-03-07 07:40:38', '2020-03-07 07:40:38'),
(314, 15, 19, 'Qui quas sint vitae eum rerum.', '2020-03-07 07:40:38', '2020-03-07 07:40:38'),
(315, 12, 6, 'Laboriosam omnis harum impedit eaque.', '2020-03-07 07:40:38', '2020-03-07 07:40:38'),
(316, 15, 18, 'Officiis voluptas quaerat repellat sit voluptas necessitatibus officiis a.', '2020-03-07 07:40:38', '2020-03-07 07:40:38'),
(317, 19, 7, 'Et est vero eveniet labore minus.', '2020-03-07 07:40:38', '2020-03-07 07:40:38'),
(318, 12, 10, 'Temporibus voluptatem amet quibusdam minima.', '2020-03-07 07:40:38', '2020-03-07 07:40:38'),
(319, 20, 3, 'Saepe dolor aut et odit alias nihil.', '2020-03-07 07:40:38', '2020-03-07 07:40:38'),
(320, 5, 13, 'Quibusdam amet facilis perferendis tempore est est.', '2020-03-07 07:40:38', '2020-03-07 07:40:38'),
(321, 19, 18, 'Assumenda rem ad corporis aspernatur.', '2020-03-07 07:40:38', '2020-03-07 07:40:38'),
(322, 5, 6, 'Magnam incidunt maiores consequatur.', '2020-03-07 07:40:38', '2020-03-07 07:40:38'),
(323, 14, 20, 'Repudiandae eius dolores nam eligendi ipsum nihil.', '2020-03-07 07:40:38', '2020-03-07 07:40:38'),
(324, 2, 3, 'Dolores dicta aut odit laboriosam dolor animi.', '2020-03-07 07:40:38', '2020-03-07 07:40:38'),
(325, 20, 13, 'Rem voluptas nulla tenetur enim.', '2020-03-07 07:40:38', '2020-03-07 07:40:38'),
(326, 13, 17, 'Commodi asperiores et quo quibusdam.', '2020-03-07 07:40:38', '2020-03-07 07:40:38'),
(327, 12, 14, 'Nam error natus repudiandae quis non recusandae.', '2020-03-07 07:40:38', '2020-03-07 07:40:38'),
(328, 15, 10, 'Porro non delectus tenetur iure.', '2020-03-07 07:40:38', '2020-03-07 07:40:38'),
(329, 6, 3, 'Id minima odio praesentium unde.', '2020-03-07 07:40:38', '2020-03-07 07:40:38'),
(330, 1, 17, 'Itaque aut voluptatem eum nihil quas.', '2020-03-07 07:40:38', '2020-03-07 07:40:38'),
(331, 15, 8, 'Sint in harum atque vel.', '2020-03-07 07:40:38', '2020-03-07 07:40:38'),
(332, 4, 19, 'Rerum natus rerum autem possimus aut non.', '2020-03-07 07:40:38', '2020-03-07 07:40:38'),
(333, 20, 8, 'Odit minima nihil adipisci at magni.', '2020-03-07 07:40:38', '2020-03-07 07:40:38'),
(334, 3, 2, 'Delectus expedita ducimus autem vitae vel aut non officiis.', '2020-03-07 07:40:38', '2020-03-07 07:40:38'),
(335, 16, 7, 'Omnis doloribus exercitationem eos eos.', '2020-03-07 07:40:38', '2020-03-07 07:40:38'),
(336, 3, 13, 'Eius laudantium mollitia alias neque quos.', '2020-03-07 07:40:38', '2020-03-07 07:40:38'),
(337, 14, 6, 'Commodi impedit voluptatum at quia sapiente esse.', '2020-03-07 07:40:38', '2020-03-07 07:40:38'),
(338, 12, 9, 'Libero voluptatem perferendis qui eius repellat.', '2020-03-07 07:40:39', '2020-03-07 07:40:39'),
(339, 19, 9, 'Nostrum voluptatem rerum et eos facere aut ipsum.', '2020-03-07 07:40:39', '2020-03-07 07:40:39'),
(340, 12, 3, 'Sed quos atque quia unde accusamus nam.', '2020-03-07 07:40:39', '2020-03-07 07:40:39'),
(341, 15, 7, 'Voluptatem est vel soluta assumenda architecto alias.', '2020-03-07 07:40:39', '2020-03-07 07:40:39'),
(342, 14, 16, 'Alias qui quae voluptas dolores.', '2020-03-07 07:40:39', '2020-03-07 07:40:39'),
(343, 5, 6, 'Sapiente expedita atque excepturi minima blanditiis et.', '2020-03-07 07:40:39', '2020-03-07 07:40:39'),
(344, 5, 8, 'Qui occaecati sint ipsum.', '2020-03-07 07:40:39', '2020-03-07 07:40:39'),
(345, 13, 4, 'Laborum ut libero dolorem quia nostrum molestiae at iusto.', '2020-03-07 07:40:39', '2020-03-07 07:40:39'),
(346, 4, 15, 'Aut sequi laboriosam modi voluptatem tempora error.', '2020-03-07 07:40:39', '2020-03-07 07:40:39'),
(347, 13, 3, 'Consequatur cumque qui eum cumque ut repellat ut.', '2020-03-07 07:40:39', '2020-03-07 07:40:39'),
(348, 17, 15, 'Dolor qui nam sint minus adipisci inventore.', '2020-03-07 07:40:39', '2020-03-07 07:40:39'),
(349, 11, 10, 'Voluptas in occaecati asperiores aut ut.', '2020-03-07 07:40:39', '2020-03-07 07:40:39'),
(350, 8, 18, 'Doloribus ex labore corporis nisi facilis et.', '2020-03-07 07:40:39', '2020-03-07 07:40:39'),
(351, 2, 1, 'New guy', '2020-03-08 08:01:08', '2020-03-08 08:01:08'),
(352, 2, 1, 'More tests', '2020-03-08 08:01:21', '2020-03-08 08:01:21'),
(353, 2, 3, 'New message', '2020-03-08 08:47:21', '2020-03-08 08:47:21'),
(354, 2, 3, 'More messages', '2020-03-08 08:47:26', '2020-03-08 08:47:26'),
(355, 2, 1, 'New', '2020-03-08 09:32:43', '2020-03-08 09:32:43'),
(356, 1, 2, 'Hi', '2020-03-08 22:33:47', '2020-03-08 22:33:47'),
(357, 2, 1, 'Hey', '2020-03-08 22:33:59', '2020-03-08 22:33:59'),
(358, 2, 1, 'Testing', '2020-03-08 22:42:45', '2020-03-08 22:42:45'),
(359, 2, 1, 'go', '2020-03-08 22:49:47', '2020-03-08 22:49:47'),
(360, 4, 1, 'Hello', '2020-03-09 02:28:16', '2020-03-09 02:28:16'),
(361, 4, 1, 'Hello', '2020-03-09 02:57:08', '2020-03-09 02:57:08'),
(362, 1, 4, 'Disturbing', '2020-03-09 02:58:42', '2020-03-09 02:58:42'),
(363, 1, 4, 'More message', '2020-03-09 02:59:13', '2020-03-09 02:59:13'),
(364, 4, 1, 'disturbing', '2020-03-09 02:59:38', '2020-03-09 02:59:38'),
(365, 1, 2, 'Testing', '2020-03-09 03:13:36', '2020-03-09 03:13:36'),
(366, 2, 1, 'Testing', '2020-03-09 04:46:11', '2020-03-09 04:46:11'),
(367, 2, 6, 'Why this', '2020-03-09 04:46:31', '2020-03-09 04:46:31'),
(368, 6, 11, 'Test again', '2020-03-09 05:15:36', '2020-03-09 05:15:36'),
(369, 6, 10, 'Please work', '2020-03-09 05:17:46', '2020-03-09 05:17:46'),
(370, 2, 4, 'Hello', '2020-03-09 05:22:13', '2020-03-09 05:22:13'),
(371, 4, 2, 'Simple message', '2020-03-09 05:22:23', '2020-03-09 05:22:23'),
(372, 2, 4, 'Wonderful to meet you', '2020-03-09 05:22:31', '2020-03-09 05:22:31'),
(373, 4, 2, 'Took some time to get this working thought', '2020-03-09 05:22:42', '2020-03-09 05:22:42'),
(374, 2, 4, 'A lot of work lol', '2020-03-09 05:22:55', '2020-03-09 05:22:55'),
(375, 2, 4, 'We are using admin to test', '2020-03-09 05:26:31', '2020-03-09 05:26:31'),
(376, 2, 4, 'My screen recorder does not let me record two browsers simultaneously', '2020-03-09 05:27:04', '2020-03-09 05:27:04'),
(377, 2, 4, 'So I will record one and the other', '2020-03-09 05:27:17', '2020-03-09 05:27:17'),
(378, 2, 4, 'Not sure if that works', '2020-03-09 05:27:23', '2020-03-09 05:27:23'),
(379, 4, 2, 'Testing', '2020-03-09 05:54:10', '2020-03-09 05:54:10'),
(380, 2, 4, 'New test', '2020-03-09 05:54:17', '2020-03-09 05:54:17'),
(381, 4, 2, 'Messenger app is working', '2020-03-09 05:54:25', '2020-03-09 05:54:25'),
(382, 2, 4, 'More test', '2020-03-09 05:54:29', '2020-03-09 05:54:29'),
(383, 4, 2, 'Live messaging', '2020-03-09 05:54:35', '2020-03-09 05:54:35'),
(384, 2, 4, 'New tests', '2020-03-09 05:54:47', '2020-03-09 05:54:47'),
(385, 1, 2, 'Hi Hi', '2020-03-10 06:37:42', '2020-03-10 06:37:42'),
(386, 2, 1, 'Hello', '2020-03-10 06:37:54', '2020-03-10 06:37:54'),
(387, 1, 2, 'Testing', '2020-03-10 06:38:07', '2020-03-10 06:38:07'),
(388, 1, 2, 'Chrome is giving issues', '2020-03-10 06:38:22', '2020-03-10 06:38:22'),
(389, 2, 1, 'Why is chrome giving issues', '2020-03-10 06:38:31', '2020-03-10 06:38:31');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_01_01_210254_create_categories_table', 1),
(5, '2020_02_13_020232_create_notifications_table', 1),
(6, '2020_02_16_152917_create_skills_table', 1),
(7, '2020_02_19_180747_create_posts_table', 1),
(8, '2020_02_19_181526_create_comments_table', 1),
(9, '2020_03_07_005852_create_messages_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('024d5d2c-be44-4fdc-ab51-5806dcdfe81e', 'App\\Notifications\\GeneralNotification', 'App\\User', 1, '{\"title\":\"Update Notification\",\"body\":\"You updated your profile successfully\",\"type\":\"General\"}', NULL, '2020-03-10 07:23:42', '2020-03-10 07:23:42'),
('0695093b-85ff-4fe2-bad8-764ccbb471d9', 'App\\Notifications\\GeneralNotification', 'App\\User', 1, '{\"title\":\"Update Notification\",\"body\":\"You updated your profile successfully\",\"type\":\"General\"}', NULL, '2020-03-11 07:49:51', '2020-03-11 07:49:51'),
('cc6bdd0d-c13d-48af-a246-292324bc333e', 'App\\Notifications\\GeneralNotification', 'App\\User', 4, '{\"title\":\"Update Notification\",\"body\":\"You updated your profile successfully\",\"type\":\"General\"}', NULL, '2020-03-10 18:27:53', '2020-03-10 18:27:53'),
('e60f4ba0-8626-418b-98e4-f4935384f838', 'App\\Notifications\\GeneralNotification', 'App\\User', 1, '{\"title\":\"Update Notification\",\"body\":\"You updated your profile successfully\",\"type\":\"General\"}', NULL, '2020-03-10 07:27:01', '2020-03-10 07:27:01');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `skill_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill_5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `user_id`, `skill_1`, `skill_2`, `skill_3`, `skill_4`, `skill_5`, `created_at`, `updated_at`) VALUES
(1, 1, 'PHP', 'JavaScript', 'Java', 'Node.js', 'Python', '2020-03-10 07:21:31', '2020-03-10 07:21:31'),
(2, 4, 'Java', 'Physics', 'Chemistry', 'Vue.js', 'Python', '2020-03-10 18:13:48', '2020-03-10 18:13:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user.jpg',
  `address2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position_company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `industry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT '1',
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `primary_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secondary_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tertiary_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `address2`, `address`, `current_company`, `position_company`, `education`, `industry`, `country`, `website`, `zip`, `is_featured`, `state`, `about`, `phone`, `email`, `primary_category`, `secondary_category`, `tertiary_category`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Gerard Nesi', '15838949881.jpg', 'Texas', 'Kansas', 'Nasa', 'Lead JavaScript Developer', 'Yale', 'Mechanical Engineering', 'Germany', 'https://nasa.org', '11111', 1, 'Brussels', 'Lorem Ipsum is simply dummy text of the printing\r\n            and typesetting industry. Lorem Ipsum has been the industrys\r\n            standard dummy text ever since the 1500s, when an unknown printer\r\n            took a galley of type and scrambled it to make a type specimen\r\n            book. It has survived not only five centuries, but also the leap\r\n            into electronic typesetting, remaining essentially unchanged. It\r\n            was popularised in the 1960s with the release of Letraset sheets\r\n            containing Lorem Ipsum passages, and more recently with desktop\r\n            publishing software like Aldus PageMaker including versions of\r\n            Lorem Ipsum.', '783939020', 'gerard@mail.com', 'Accounting', 'Agriculture', 'Advertising', NULL, '$2y$10$jJIZgCsLoEZtTTksyHxUee5kHj93gybdwFy6trTQv53utYcBGIIX.', NULL, NULL, '2020-03-11 07:49:49'),
(2, 'test', '1.jpg', NULL, NULL, 'Nasa', 'Lead JavaScript Developer', 'Yale', 'Mechanical Engineering', 'Germany', 'https://nasa.org', '11111', 1, 'Brussels', 'Lorem Ipsum is simply dummy text of the printing\n            and typesetting industry. Lorem Ipsum has been the industrys\n            standard dummy text ever since the 1500s, when an unknown printer\n            took a galley of type and scrambled it to make a type specimen\n            book. It has survived not only five centuries, but also the leap\n            into electronic typesetting, remaining essentially unchanged. It\n            was popularised in the 1960s with the release of Letraset sheets\n            containing Lorem Ipsum passages, and more recently with desktop\n            publishing software like Aldus PageMaker including versions of\n            Lorem Ipsum.', NULL, 'test@mail.com', 'Accounting', 'Agriculture', 'Advertising', NULL, '$2y$10$7d6csuqovP7ldaAyjVuos.RgBZLqoa04EqDYGA8jrkitoZTB/lzvy', NULL, NULL, NULL),
(3, 'test1', '2.jpg', NULL, NULL, 'Nasa', 'Lead JavaScript Developer', 'Yale', 'Mechanical Engineering', 'Germany', 'https://nasa.org', '11111', 1, 'Brussels', 'Lorem Ipsum is simply dummy text of the printing\n            and typesetting industry. Lorem Ipsum has been the industrys\n            standard dummy text ever since the 1500s, when an unknown printer\n            took a galley of type and scrambled it to make a type specimen\n            book. It has survived not only five centuries, but also the leap\n            into electronic typesetting, remaining essentially unchanged. It\n            was popularised in the 1960s with the release of Letraset sheets\n            containing Lorem Ipsum passages, and more recently with desktop\n            publishing software like Aldus PageMaker including versions of\n            Lorem Ipsum.', NULL, 'test1@mail.com', 'Accounting', 'Agriculture', 'Advertising', NULL, '$2y$10$2x2K2Dt2DeM6yHLR2WfKE.GIv8LE3F2.4HaCWD2Nlaqmen.C56Cia', NULL, NULL, NULL),
(4, 'admin', '8.jpg', NULL, NULL, 'Nasa', 'Lead JavaScript Developer', 'Yale', 'Mechanical Engineering', 'Germany', 'https://nasa.org', '11111', 1, 'Brussels', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', NULL, 'admin@mail.com', 'Accounting', 'Agriculture', 'Advertising', NULL, '$2y$10$B1u3JQf/s8sVWaGSvH2yLeR8bcrxxZ11NFo0ChbyFO50DdHbq5iJ2', NULL, NULL, '2020-03-10 18:27:52'),
(5, 'game', '3.jpg', NULL, NULL, 'Nasa', 'Lead JavaScript Developer', 'Yale', 'Mechanical Engineering', 'Germany', 'https://nasa.org', '11111', 1, 'Brussels', 'Lorem Ipsum is simply dummy text of the printing\n            and typesetting industry. Lorem Ipsum has been the industrys\n            standard dummy text ever since the 1500s, when an unknown printer\n            took a galley of type and scrambled it to make a type specimen\n            book. It has survived not only five centuries, but also the leap\n            into electronic typesetting, remaining essentially unchanged. It\n            was popularised in the 1960s with the release of Letraset sheets\n            containing Lorem Ipsum passages, and more recently with desktop\n            publishing software like Aldus PageMaker including versions of\n            Lorem Ipsum.', NULL, 'game@mail.com', 'Accounting', 'Agriculture', 'Advertising', NULL, '$2y$10$r8TGK6EuPzVb8dJ9sDPCyOaCmu2iRBBHu0Kht.obz5vRzOQZdt4QS', NULL, NULL, NULL),
(6, 'Prof. Sage Effertz', '10.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '(534) 237-6461', 1, 'Nebraska', 'Suscipit recusandae quidem doloribus facere vel nostrum.', '1-279-767-3534 x72938', 'cameron.windler@example.net', 'Biology', 'Physics', 'Mathematics', '2020-03-07 07:36:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'g7Ogb81a9DfdMRhp2YobhX93qIgzehzHECFTtPdoFOUMSNpJEYSiOV1MPBEk', '2020-03-07 07:36:30', '2020-03-07 07:36:30'),
(7, 'Travon Mills', '12.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '332-208-8175', 1, 'District of Columbia', 'Autem unde accusantium molestiae id ducimus.', '(827) 837-4861', 'schulist.bella@example.com', 'Biology', 'Physics', 'Mathematics', '2020-03-07 07:36:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Gjjklu7DGH', '2020-03-07 07:36:30', '2020-03-07 07:36:30'),
(8, 'Jay Hickle', '7.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '730.361.8858', 1, 'New Mexico', 'Fugiat adipisci quaerat ipsum ut eum velit illo.', '+1-990-649-9547', 'kulas.demetris@example.net', 'Biology', 'Physics', 'Mathematics', '2020-03-07 07:36:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '0ICTYwa9K3', '2020-03-07 07:36:30', '2020-03-07 07:36:30'),
(9, 'Antonetta Johnston DVM', '8.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '(456) 887-6377 x330', 1, 'Minnesota', 'Sunt nulla quod repellendus ut sit.', '+19162138298', 'rosemary.ledner@example.net', 'Biology', 'Physics', 'Mathematics', '2020-03-07 07:36:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'vKMVhIhjKJ', '2020-03-07 07:36:30', '2020-03-07 07:36:30'),
(10, 'Ms. Genevieve Casper I', '6.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1-206-504-0322', 1, 'Kansas', 'Temporibus voluptas quasi quis eveniet dolorem est.', '1-963-208-0053 x7571', 'elinore44@example.com', 'Biology', 'Physics', 'Mathematics', '2020-03-07 07:36:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'vqpga2LX1q', '2020-03-07 07:36:31', '2020-03-07 07:36:31'),
(11, 'Clemens Watsica', '4.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '(538) 934-7445 x5144', 1, 'Alabama', 'Molestias praesentium rerum aut harum cupiditate temporibus quis.', '+14735564390', 'gordon18@example.org', 'Biology', 'Physics', 'Mathematics', '2020-03-07 07:36:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'nOjqXOJEOC', '2020-03-07 07:36:31', '2020-03-07 07:36:31'),
(12, 'Sven Witting', '8.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '(659) 899-1600 x09023', 1, 'District of Columbia', 'Neque ut placeat quam debitis quia quas fugiat.', '1-324-518-5892', 'wilburn.goodwin@example.net', 'Biology', 'Physics', 'Mathematics', '2020-03-07 07:36:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'y14GUv8a3S', '2020-03-07 07:36:31', '2020-03-07 07:36:31'),
(13, 'Adell Abernathy', '8.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1-296-294-8309 x7924', 1, 'Oklahoma', 'Molestiae rerum atque magni doloribus.', '227.613.1848 x64179', 'jasmin72@example.org', 'Biology', 'Physics', 'Mathematics', '2020-03-07 07:36:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'zmjEawezyY', '2020-03-07 07:36:31', '2020-03-07 07:36:31'),
(14, 'Keon Ferry', '7.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '975.953.4533', 1, 'Missouri', 'Placeat et et molestias molestiae placeat ea.', '+1 (564) 265-0656', 'novella.schowalter@example.org', 'Biology', 'Physics', 'Mathematics', '2020-03-07 07:36:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'sjCmTxzVvF', '2020-03-07 07:36:31', '2020-03-07 07:36:31'),
(15, 'Prof. Benjamin Bartell MD', '10.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '506.520.6769 x6597', 1, 'North Carolina', 'Et perferendis consequuntur et iste fuga quis rerum.', '(624) 232-5537 x4809', 'alvera80@example.org', 'Biology', 'Physics', 'Mathematics', '2020-03-07 07:36:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'tTnxkg9DcX', '2020-03-07 07:36:31', '2020-03-07 07:36:31'),
(16, 'Ron Altenwerth I', '6.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1-601-504-2397 x805', 1, 'Michigan', 'Voluptate dolores labore quaerat eos quod.', '380.761.4973 x22647', 'twolff@example.com', 'Biology', 'Physics', 'Mathematics', '2020-03-07 07:36:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ge8bZ7HweS', '2020-03-07 07:36:31', '2020-03-07 07:36:31'),
(17, 'Tristian Jacobi I', '2.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '974-497-1864 x33378', 1, 'Oregon', 'Mollitia nostrum et voluptatem.', '1-458-587-7567 x760', 'dswaniawski@example.org', 'Biology', 'Physics', 'Mathematics', '2020-03-07 07:36:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'D3loYjKJer', '2020-03-07 07:36:31', '2020-03-07 07:36:31'),
(18, 'Toney Ankunding', '9.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '+1 (704) 700-1313', 1, 'Massachusetts', 'Molestiae impedit ut qui ut vero esse.', '(943) 275-4362', 'vhermiston@example.com', 'Biology', 'Physics', 'Mathematics', '2020-03-07 07:36:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'DZV7v8uT1P', '2020-03-07 07:36:31', '2020-03-07 07:36:31'),
(19, 'Mr. Gillian Conroy', '12.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1-296-810-0309 x29359', 1, 'Vermont', 'Ut ut eaque omnis.', '971-499-7239 x979', 'demario.hansen@example.com', 'Biology', 'Physics', 'Mathematics', '2020-03-07 07:36:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Dw4qWc1TSs', '2020-03-07 07:36:31', '2020-03-07 07:36:31'),
(20, 'Rey Davis', '10.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '790-602-9743 x7694', 1, 'Michigan', 'Repudiandae voluptatem veniam debitis est minima molestias.', '675.357.5647 x4230', 'cleveland.roberts@example.com', 'Biology', 'Physics', 'Mathematics', '2020-03-07 07:36:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '4ViDKDyAaK', '2020-03-07 07:36:31', '2020-03-07 07:36:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=390;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
