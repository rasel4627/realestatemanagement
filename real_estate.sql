-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2021 at 10:52 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real_estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agent` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `setting` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `remember_token`, `city`, `property_type`, `status`, `agent`, `blog`, `other`, `role`, `setting`, `type`, `created_at`, `updated_at`) VALUES
(3, 'Admin', '01782614627', 'admin@gmail.com', NULL, '$2y$10$JjAHgJV7oA.myxyDG8Td7uxndAuhVBR7zWZVXZFCGKuXn3iqNuXDC', NULL, '1', '1', '1', '1', '1', '1', '1', '1', 1, NULL, '2021-02-26 04:23:28'),
(4, 'Juwel Ahmed', '01827161625', 'juwel@gmail.com', NULL, '$2y$10$bXjTAZIA4KE68GRCGgwl4.ExwBsCxDFdJ0KOFa8rkilDeLX/4uW9G', NULL, '1', '1', '1', NULL, '1', NULL, NULL, '1', 2, NULL, NULL),
(5, 'Saifur Rahman Rasel', '01782614627', 'rasel4627@gmail.com', NULL, '$2y$10$.A7vMTs5Jn8cxWsL3beheuHkIh5PITi65iff1ZM/Pz5/PTBuFrMo6', NULL, '1', '1', NULL, '1', '1', NULL, NULL, '1', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `description1`, `description2`, `date`, `image_one`, `image_two`, `created_at`, `updated_at`) VALUES
(2, '	\r\n\r\nEasy your wait to the Global sotck', '<p><span style=\"color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Duis mattis laoreet neque, et ornare neque sollicitudin at. Proin sagittis dolor sed mi elementum pretium. Donec et justo ante. Vivamus egestas sodales est, eu rhoncus urna semper eu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer tristique elit lobortis purus bibendum, quis dictum metus mattis. Phasellus posuere felis sed eros porttitor mattis. Curabitur massa magna, tempor in blandit id, porta in ligula. Aliquam laoreet nisl massa, at interdum mauris sollicitudin et.</span></p><p><span style=\"color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Duis mattis laoreet neque, et ornare neque sollicitudin at. Proin sagittis dolor sed mi elementum pretium. Donec et justo ante. Vivamus egestas sodales est, eu rhoncus urna semper eu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer tristique elit lobortis purus bibendum, quis dictum metus mattis. Phasellus posuere felis sed eros porttitor mattis. Curabitur massa magna, tempor in blandit id, porta in ligula. Aliquam laoreet nisl massa, at interdum mauris sollicitudin et.</span></p><p><span style=\"color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Duis mattis laoreet neque, et ornare neque sollicitudin at. Proin sagittis dolor sed mi elementum pretium. Donec et justo ante. Vivamus egestas sodales est, eu rhoncus urna semper eu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer tristique elit lobortis purus bibendum, quis dictum metus mattis. Phasellus posuere felis sed eros porttitor mattis. Curabitur massa magna, tempor in blandit id, porta in ligula. Aliquam laoreet nisl massa, at interdum mauris sollicitudin et.</span></p><p><span style=\"color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\"><br></span><span style=\"color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\"><br></span><span style=\"color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\"><br></span>                   	\r\n                   </p>', '<p><span style=\"color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Vivamus egestas sodales est, eu rhoncus urna semper eu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer tristique elit lobortis purus bibendum, quis dictum metus mattis. Phasellus posuere felis sed eros porttitor mattis. Curabitur massa magna, tempor in blandit id, porta in ligula. Aliquam laoreet nisl massa, at interdum mauris sollicitudin et.</span></p><p>                   	\r\n                   </p><p><span style=\"color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Vivamus egestas sodales est, eu rhoncus urna semper eu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer tristique elit lobortis purus bibendum, quis dictum metus mattis. Phasellus posuere felis sed eros porttitor mattis. Curabitur massa magna, tempor in blandit id, porta in ligula. Aliquam laoreet nisl massa, at interdum mauris sollicitudin et.</span><span style=\"color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Vivamus egestas sodales est, eu rhoncus urna semper eu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer tristique elit lobortis purus bibendum, quis dictum metus mattis. Phasellus posuere felis sed eros porttitor mattis. Curabitur massa magna, tempor in blandit id, porta in ligula. Aliquam laoreet nisl massa, at interdum mauris sollicitudin et.</span><br></p>', '2021-03-14', 'public/frontend/images/1694154127351355.jpg', 'public/frontend/images/1694154130580534.jpg', NULL, NULL),
(3, 'Find desirable property is our main goal', '<p><span style=\"color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue</span><span style=\"color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue</span><span style=\"color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue</span></p><p><span style=\"color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue</span><span style=\"color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue</span><span style=\"color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue</span><span style=\"color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue</span><span style=\"color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue</span><span style=\"color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\"><br></span></p>', '<p><span style=\"color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue</span><span style=\"color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue</span><span style=\"color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue</span></p><p><span style=\"color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue</span><span style=\"color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue</span><span style=\"color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue</span></p><p><span style=\"color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue</span><span style=\"color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue</span><span style=\"color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue</span><span style=\"color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\"><br></span><span style=\"color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\"><br></span>                   	\r\n                   </p>', '2021-03-14', 'public/frontend/images/1694154352847372.jpg', 'public/frontend/images/1694154353861290.jpg', NULL, NULL),
(4, 'Get the best property in Town', '<span style=\"box-sizing: border-box; color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue</span><span style=\"box-sizing: border-box; color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue</span><span style=\"box-sizing: border-box; color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue</span><span style=\"box-sizing: border-box; color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue</span><span style=\"box-sizing: border-box; color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue</span><span style=\"box-sizing: border-box; color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue</span><span style=\"box-sizing: border-box; color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue</span><span style=\"box-sizing: border-box; color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue</span><span style=\"box-sizing: border-box; color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue</span><span style=\"box-sizing: border-box; color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue</span>', '<span style=\"box-sizing: border-box; color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue</span><span style=\"box-sizing: border-box; color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue</span><span style=\"box-sizing: border-box; color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue</span><span style=\"box-sizing: border-box; color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue</span><span style=\"box-sizing: border-box; color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue</span><span style=\"box-sizing: border-box; color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue</span><span style=\"box-sizing: border-box; color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue</span><span style=\"box-sizing: border-box; color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue</span><span style=\"box-sizing: border-box; color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue</span><span style=\"box-sizing: border-box; color: rgb(103, 103, 103); font-family: robotoregular; font-size: 15px;\">Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue</span>', '2021-03-14', 'public/frontend/images/1694198507273417.jpg', 'public/frontend/images/1694198511362658.jpg', '2021-03-14 09:20:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `property_type`, `created_at`, `updated_at`) VALUES
(1, 'Office', NULL, NULL),
(2, 'House', NULL, NULL),
(7, 'Parking', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city`, `created_at`, `updated_at`) VALUES
(1, 'Sylhet', NULL, NULL),
(2, 'Dhaka', NULL, NULL),
(3, 'Comilla', NULL, NULL),
(4, 'Chittagong', NULL, NULL),
(6, 'Khulna', NULL, NULL),
(7, 'Rajshahi', NULL, NULL),
(8, 'Barishal', NULL, NULL),
(9, 'Rangpur', NULL, NULL),
(10, 'Feni', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `blog_id`, `name`, `phone`, `email`, `comment`, `created_at`, `updated_at`) VALUES
(1, 4, 'Saifur Rahman Rasel', '01782614627', 'saifurrahmanrasel4627@gmail.com', 'Best Website', '2021-03-14 09:41:17', NULL),
(2, 3, 'Saifur Rahman Rasel', '01782614627', 'saifurrahmanrasel4627@gmail.com', 'Best website for property search..', '2021-03-14 09:41:56', NULL);

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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_10_05_052517_create_admins_table', 1),
(5, '2021_02_28_180925_create_categories_table', 2),
(6, '2021_02_28_195249_create_propertystatus_table', 3),
(7, '2021_02_28_205050_create_agents_table', 4),
(8, '2021_03_06_061917_create_settings_table', 5),
(9, '2021_03_07_213535_create_properties_table', 6),
(10, '2021_03_09_195312_create_city_table', 7),
(11, '2021_03_13_205137_create_blog_table', 8),
(12, '2021_03_14_092543_create_comment_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `agent_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bedrooms` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bathrooms` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `garage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `built_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `floor_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `ac` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `belcony` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dinning` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drawing` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `swimming_pool` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cable_tv` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_four` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_five` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `agent_id`, `title`, `address`, `location`, `city`, `property_type`, `property_status`, `area`, `bedrooms`, `bathrooms`, `garage`, `price`, `built_year`, `floor_type`, `video`, `status`, `ac`, `belcony`, `dinning`, `drawing`, `swimming_pool`, `cable_tv`, `image_one`, `image_two`, `image_three`, `image_four`, `image_five`, `description`, `created_at`, `updated_at`) VALUES
(4, '9', 'House Property For Rent', '12 Payra', 'Dorgah Moholla', '1', '2', '4', '800', '3', '2', '1', '20000', '2020', 'Tiles', 'https://www.youtube.com/watch?v=ATSgwZXOuUo', 0, '1', '1', '1', '1', NULL, '1', 'public/frontend/images/1693874505876520.jpg', 'public/frontend/images/1693874508646162.jpg', 'public/frontend/images/1693874512120192.jpg', 'public/frontend/images/1693874516527368.jpg', 'public/frontend/images/1693874519413873.jpg', 'This house is well decorated. The security system of our building is very high. 24/7 hour electricity & water supply are available. So that you may feel comfort of this property.  ', NULL, NULL),
(5, '9', 'House Property For Rent', 'Shurovi 21', 'Tilaghor', '1', '2', '4', '750', '3', '2', '1', '18000', '2018', 'Tiles', 'https://www.youtube.com/watch?v=ATSgwZXOuUo', 1, NULL, '1', '1', '1', NULL, '1', 'public/frontend/images/1693874910501959.jpg', 'public/frontend/images/1693874913318293.jpg', 'public/frontend/images/1693874920362978.jpg', 'public/frontend/images/1693874926483059.jpg', 'public/frontend/images/1693874934329451.jpg', 'This house is well decorated. The security system of our building is very high. 24/7 hour electricity & water supply are available. So that you may feel comfort of this property.  ', NULL, NULL),
(6, '11', 'Property Sale', '31/2 Antaji', 'Baridhara', '2', '1', '1', '800', '3', '3', '1', '50000', '2018', 'Tiles', 'https://www.youtube.com/watch?v=ATSgwZXOuUo', 1, '1', '1', '1', '1', '1', '1', 'public/frontend/images/1693875725111543.jpg', 'public/frontend/images/1693875728272674.jpg', 'public/frontend/images/1693875729558422.jpg', 'public/frontend/images/1693875731723978.jpg', 'public/frontend/images/1693875735364551.jpg', 'This house is well decorated. The security system of our building is very high. 24/7 hour electricity & water supply are available. So that you may feel comfort of this property.  ', NULL, NULL),
(7, '11', 'House Property For Rent', 'vhai 14/5', 'Chittagonj', '4', '2', '4', '750', '4', '2', '1', '30000', '2020', 'Tiles', 'https://www.youtube.com/watch?v=ATSgwZXOuUo', 1, NULL, '1', '1', '1', NULL, '1', 'public/frontend/images/1693876062995794.jpg', 'public/frontend/images/1693876066535850.jpg', 'public/frontend/images/1693876070111549.jpg', 'public/frontend/images/1693876075187916.jpg', 'public/frontend/images/1693876076535380.jpg', 'This house is well decorated. The security system of our building is very high. 24/7 hour electricity & water supply are available. So that you may feel comfort of this property.  ', NULL, NULL),
(8, '10', 'Property for Sale', 'a/12 victoria', 'Comilla', '3', '2', '1', '900', '4', '3', '1', '20000', '2019', 'Tiles', 'https://www.youtube.com/watch?v=ATSgwZXOuUo', 1, NULL, '1', '1', '1', NULL, '1', 'public/frontend/images/1693876603163583.jpg', 'public/frontend/images/1693876605975780.jpg', 'public/frontend/images/1693876609551817.jpg', 'public/frontend/images/1693876613319239.jpg', 'public/frontend/images/1693876618178587.jpg', 'This house is well decorated. The security system of our building is very high. 24/7 hour electricity & water supply are available. So that you may feel comfort of this property.  ', NULL, NULL),
(9, '10', 'House Property For Rent', 'Sector 13', 'khulna', '6', '2', '4', '1000', '4', '3', '1', '25000', '2020', 'Tiles', 'https://www.youtube.com/watch?v=ATSgwZXOuUo', 1, '1', '1', '1', '1', NULL, '1', 'public/frontend/images/1693876876533317.jpg', 'public/frontend/images/1693876878960167.jpg', 'public/frontend/images/1693876882424818.jpg', 'public/frontend/images/1693876888367952.jpg', 'public/frontend/images/1693876891464320.jpg', 'This house is well decorated. The security system of our building is very high. 24/7 hour electricity & water supply are available. So that you may feel comfort of this property.  ', NULL, NULL),
(10, '12', 'rent a house', '13 modina', 'Sylhet', '1', '2', '1', '900', '1', '1', '1', '21000', '2021', 'Tiles', NULL, 1, NULL, '1', '1', '1', NULL, '1', 'public/frontend/images/1693877774640026.jpg', 'public/frontend/images/1693877778198616.jpg', 'public/frontend/images/1693877781914789.jpg', 'public/frontend/images/1693877786202662.jpg', 'public/frontend/images/1693877791274304.jpg', 'This house is well decorated. The security system of our building is very high. 24/7 hour electricity & water supply are available. So that you may feel comfort of this property.  ', NULL, NULL),
(11, '12', 'Property for Rent', '4/achondi', 'Sylhet', '1', '2', '4', '750', '3', '2', '1', '18000', '2018', 'Tiles', 'https://www.youtube.com/watch?v=ATSgwZXOuUo', 1, NULL, '1', '1', '1', NULL, '1', 'public/frontend/images/1693878421608852.jpg', 'public/frontend/images/1693878424314514.jpg', 'public/frontend/images/1693878426250250.jpg', 'public/frontend/images/1693878428312818.jpg', 'public/frontend/images/1693878432396749.jpg', 'This house is well decorated. The security system of our building is very high. 24/7 hour electricity & water supply are available. So that you may feel comfort of this property.  ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `propertystatus`
--

CREATE TABLE `propertystatus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `propertystatus`
--

INSERT INTO `propertystatus` (`id`, `property_status`, `created_at`, `updated_at`) VALUES
(1, 'Sale', NULL, NULL),
(4, 'Rent', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skype_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `listing_banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agent_banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_details_banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `company_name`, `company_logo`, `phone`, `address`, `location`, `email`, `skype_link`, `fb_link`, `listing_banner`, `agent_banner`, `property_details_banner`, `created_at`, `updated_at`) VALUES
(1, 'Real Estate', 'public/backend/img/1693469119785881.png', '01712111999', 'Provati 18, Zindabazar', 'Sylhet', 'estateagency@gmail.com', 'www.skype.com/estateagency', 'www.facebook.com/estateagency', 'public/backend/img/1693651110660879.jpg', 'public/backend/img/1693651111938359.jpg', 'public/backend/img/1693651111636296.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skype` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `telephone`, `skype`, `fb`, `twitter`, `image`, `about`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 'Juwel Ahmed', '01827161633', 'juwel@gmail.com', '++880188111', 'Http://www.skype.com/juwel21200', 'http://www.facebook.com/juwel2512', 'Http://www.twitter.com/juwel001', 'public/backend/img/1693872404627396.jpg', 'You can check my all properties  which is desirable for you', NULL, '$2y$10$47.Jfman.EPoqDI1QoOXNui0CAmhv0K742go7usoNjI6BhtgNYSBi', NULL, '2021-03-07 13:54:11', '2021-03-07 13:54:11'),
(10, 'Saifur', '01782614627', 'rasel4627@gmail.com', '++880188677', 'Http://skype.com/rasel41', 'http://www.facebook.com/rasel4627', 'Http://www.twitter.com/rasel27', 'public/backend/img/1693693339075955.jpg', 'You can freely contact with me for any needed..I always try to reply as soon as possible', NULL, '$2y$10$dU3qMsf1t5ezQKaOgd0Mp.G/Ygxx6bxyd04WPlFW/X5Pmf6RTV7Nu', NULL, '2021-03-08 13:29:02', '2021-03-08 13:29:02'),
(11, 'Masruf', '01827161625', 'masruf@gmail.com', '+0881901123', 'Http://www.skype.com/mashruf21200', 'http://www.facebook.com/mashruf2512', 'Http://www.twitter.com/mashruf001', 'public/backend/img/1693875145795815.jpg', 'You can contatct me for house rent or Property sale.', NULL, '$2y$10$/Fj9OMNVhCRFzAoyEL48GO0iVqlTlC7UgzDGMMmOpMcfW7NfAcGAq', NULL, '2021-03-10 12:55:02', '2021-03-10 12:55:02'),
(12, 'Naeem Uddin', '01780272460', 'shakil@gmail.com', '++880188111', 'Http://www.skype.com/shakil21200', 'http://www.facebook.com/shakil2512', 'Http://www.twitter.com/shakil001', 'public/backend/img/1694395823911659.jpg', 'I want to sell my property. You can contact me within 9.00 AM-10.00PM .', NULL, '$2y$10$N3qJIr1txTLJHRJ7VOolN.TlcLQ.zx3lAijwSJLc2dELSNhixdLTq', NULL, '2021-03-10 14:15:01', '2021-03-10 14:15:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `propertystatus`
--
ALTER TABLE `propertystatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `propertystatus`
--
ALTER TABLE `propertystatus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
