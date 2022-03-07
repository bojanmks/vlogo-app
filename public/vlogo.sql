-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2022 at 01:42 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vlogo`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_log`
--

CREATE TABLE `access_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `access_log`
--

INSERT INTO `access_log` (`id`, `ip`, `path`, `method`, `created_at`, `updated_at`) VALUES
(1, '127.0.0.1', 'logout', 'POST', '2022-03-07 11:29:45', NULL),
(2, '127.0.0.1', 'admin/food', 'GET', '2022-03-07 11:29:45', NULL),
(3, '127.0.0.1', 'login', 'GET', '2022-03-07 11:29:45', NULL),
(4, '127.0.0.1', 'register', 'GET', '2022-03-07 11:29:49', NULL),
(5, '127.0.0.1', 'register', 'POST', '2022-03-07 11:29:59', NULL),
(6, '127.0.0.1', 'login', 'GET', '2022-03-07 11:29:59', NULL),
(7, '127.0.0.1', 'login', 'POST', '2022-03-07 11:30:01', NULL),
(8, '127.0.0.1', 'login', 'GET', '2022-03-07 11:30:02', NULL),
(9, '127.0.0.1', 'login', 'POST', '2022-03-07 11:30:08', NULL),
(10, '127.0.0.1', '/', 'GET', '2022-03-07 11:30:08', NULL),
(11, '127.0.0.1', 'restaurants/5', 'GET', '2022-03-07 11:30:19', NULL),
(12, '127.0.0.1', 'restaurants/food', 'POST', '2022-03-07 11:30:20', NULL),
(13, '127.0.0.1', 'cart/items', 'POST', '2022-03-07 11:30:20', NULL),
(14, '127.0.0.1', 'cart/add', 'POST', '2022-03-07 11:30:23', NULL),
(15, '127.0.0.1', 'cart/items', 'POST', '2022-03-07 11:30:24', NULL),
(16, '127.0.0.1', 'cart/add', 'POST', '2022-03-07 11:30:24', NULL),
(17, '127.0.0.1', 'cart/items', 'POST', '2022-03-07 11:30:25', NULL),
(18, '127.0.0.1', 'cart/add', 'POST', '2022-03-07 11:30:25', NULL),
(19, '127.0.0.1', 'cart/items', 'POST', '2022-03-07 11:30:26', NULL),
(20, '127.0.0.1', 'cart/add', 'POST', '2022-03-07 11:30:26', NULL),
(21, '127.0.0.1', 'cart/items', 'POST', '2022-03-07 11:30:26', NULL),
(22, '127.0.0.1', 'cart/add', 'POST', '2022-03-07 11:30:27', NULL),
(23, '127.0.0.1', 'cart/items', 'POST', '2022-03-07 11:30:27', NULL),
(24, '127.0.0.1', 'cart/add', 'POST', '2022-03-07 11:30:28', NULL),
(25, '127.0.0.1', 'cart/items', 'POST', '2022-03-07 11:30:28', NULL),
(26, '127.0.0.1', 'restaurants/food', 'POST', '2022-03-07 11:30:29', NULL),
(27, '127.0.0.1', 'cart/add', 'POST', '2022-03-07 11:30:31', NULL),
(28, '127.0.0.1', 'cart/items', 'POST', '2022-03-07 11:30:31', NULL),
(29, '127.0.0.1', 'orders/store', 'POST', '2022-03-07 11:30:33', NULL),
(30, '127.0.0.1', 'restaurants/5', 'GET', '2022-03-07 11:30:33', NULL),
(31, '127.0.0.1', 'restaurants/food', 'POST', '2022-03-07 11:30:34', NULL),
(32, '127.0.0.1', 'cart/items', 'POST', '2022-03-07 11:30:34', NULL),
(33, '127.0.0.1', 'restaurants', 'GET', '2022-03-07 11:30:35', NULL),
(34, '127.0.0.1', 'restaurants/filter', 'POST', '2022-03-07 11:30:36', NULL),
(35, '127.0.0.1', 'restaurants/10', 'GET', '2022-03-07 11:30:37', NULL),
(36, '127.0.0.1', 'restaurants/food', 'POST', '2022-03-07 11:30:37', NULL),
(37, '127.0.0.1', 'cart/items', 'POST', '2022-03-07 11:30:38', NULL),
(38, '127.0.0.1', 'restaurants/food', 'POST', '2022-03-07 11:30:39', NULL),
(39, '127.0.0.1', 'cart/add', 'POST', '2022-03-07 11:30:42', NULL),
(40, '127.0.0.1', 'cart/items', 'POST', '2022-03-07 11:30:42', NULL),
(41, '127.0.0.1', 'restaurants/food', 'POST', '2022-03-07 11:30:42', NULL),
(42, '127.0.0.1', 'cart/add', 'POST', '2022-03-07 11:30:43', NULL),
(43, '127.0.0.1', 'cart/items', 'POST', '2022-03-07 11:30:44', NULL),
(44, '127.0.0.1', 'cart/add', 'POST', '2022-03-07 11:30:44', NULL),
(45, '127.0.0.1', 'cart/items', 'POST', '2022-03-07 11:30:44', NULL),
(46, '127.0.0.1', 'cart/add', 'POST', '2022-03-07 11:30:45', NULL),
(47, '127.0.0.1', 'cart/items', 'POST', '2022-03-07 11:30:45', NULL),
(48, '127.0.0.1', 'orders/store', 'POST', '2022-03-07 11:30:47', NULL),
(49, '127.0.0.1', 'restaurants/10', 'GET', '2022-03-07 11:30:47', NULL),
(50, '127.0.0.1', 'restaurants/food', 'POST', '2022-03-07 11:30:47', NULL),
(51, '127.0.0.1', 'cart/items', 'POST', '2022-03-07 11:30:48', NULL),
(52, '127.0.0.1', 'logout', 'POST', '2022-03-07 11:30:49', NULL),
(53, '127.0.0.1', 'restaurants/10', 'GET', '2022-03-07 11:30:49', NULL),
(54, '127.0.0.1', 'login', 'GET', '2022-03-07 11:30:49', NULL),
(55, '127.0.0.1', 'login', 'POST', '2022-03-07 11:30:55', NULL),
(56, '127.0.0.1', '/', 'GET', '2022-03-07 11:30:56', NULL),
(57, '127.0.0.1', 'admin', 'GET', '2022-03-07 11:30:57', NULL),
(58, '127.0.0.1', 'admin/users', 'GET', '2022-03-07 11:31:04', NULL),
(59, '127.0.0.1', 'admin/orders', 'GET', '2022-03-07 11:31:07', NULL),
(60, '127.0.0.1', 'admin/orders/1', 'GET', '2022-03-07 11:31:09', NULL),
(61, '127.0.0.1', 'admin/orders', 'GET', '2022-03-07 11:31:14', NULL),
(62, '127.0.0.1', 'admin/orders/2', 'GET', '2022-03-07 11:31:16', NULL),
(63, '127.0.0.1', 'admin/orders', 'GET', '2022-03-07 11:31:20', NULL),
(64, '127.0.0.1', 'admin/restaurants', 'GET', '2022-03-07 11:31:21', NULL),
(65, '127.0.0.1', 'admin/restaurants/5/edit', 'GET', '2022-03-07 11:31:27', NULL),
(66, '127.0.0.1', 'admin/restaurants', 'GET', '2022-03-07 11:31:29', NULL),
(67, '127.0.0.1', 'admin/restaurants', 'GET', '2022-03-07 11:32:03', NULL),
(68, '127.0.0.1', 'admin/restaurants/5/edit', 'GET', '2022-03-07 11:32:08', NULL),
(69, '127.0.0.1', 'admin/restaurants/5', 'PUT', '2022-03-07 11:32:09', NULL),
(70, '127.0.0.1', 'admin/restaurants', 'GET', '2022-03-07 11:32:10', NULL),
(71, '127.0.0.1', '/', 'GET', '2022-03-07 11:32:12', NULL),
(72, '127.0.0.1', 'restaurants', 'GET', '2022-03-07 11:32:14', NULL),
(73, '127.0.0.1', 'restaurants/filter', 'POST', '2022-03-07 11:32:15', NULL),
(74, '127.0.0.1', 'restaurants/filter', 'POST', '2022-03-07 11:32:17', NULL),
(75, '127.0.0.1', 'restaurants/filter', 'POST', '2022-03-07 11:32:17', NULL),
(76, '127.0.0.1', 'restaurants/filter', 'POST', '2022-03-07 11:32:17', NULL),
(77, '127.0.0.1', 'restaurants/filter', 'POST', '2022-03-07 11:32:18', NULL),
(78, '127.0.0.1', 'restaurants/filter', 'POST', '2022-03-07 11:32:18', NULL),
(79, '127.0.0.1', 'restaurants/filter', 'POST', '2022-03-07 11:32:18', NULL),
(80, '127.0.0.1', '/', 'GET', '2022-03-07 11:32:19', NULL),
(81, '127.0.0.1', 'restaurants/search', 'POST', '2022-03-07 11:32:21', NULL),
(82, '127.0.0.1', 'restaurants/search', 'POST', '2022-03-07 11:32:21', NULL),
(83, '127.0.0.1', 'restaurants/search', 'POST', '2022-03-07 11:32:22', NULL),
(84, '127.0.0.1', 'restaurants/search', 'POST', '2022-03-07 11:32:22', NULL),
(85, '127.0.0.1', 'restaurants/search', 'POST', '2022-03-07 11:32:22', NULL),
(86, '127.0.0.1', 'admin', 'GET', '2022-03-07 11:32:23', NULL),
(87, '127.0.0.1', 'admin/restaurants', 'GET', '2022-03-07 11:32:25', NULL),
(88, '127.0.0.1', 'admin/restaurants/5/edit', 'GET', '2022-03-07 11:32:27', NULL),
(89, '127.0.0.1', 'admin/restaurants/5', 'PUT', '2022-03-07 11:32:28', NULL),
(90, '127.0.0.1', 'admin/restaurants', 'GET', '2022-03-07 11:32:29', NULL),
(91, '127.0.0.1', 'admin/food', 'GET', '2022-03-07 11:32:33', NULL),
(92, '127.0.0.1', 'admin/food/1/edit', 'GET', '2022-03-07 11:32:42', NULL),
(93, '127.0.0.1', 'admin/food/1', 'PUT', '2022-03-07 11:32:45', NULL),
(94, '127.0.0.1', 'admin/food', 'GET', '2022-03-07 11:32:45', NULL),
(95, '127.0.0.1', 'admin/food/1/edit', 'GET', '2022-03-07 11:32:49', NULL),
(96, '127.0.0.1', 'admin/food/1', 'PUT', '2022-03-07 11:32:51', NULL),
(97, '127.0.0.1', 'admin/food', 'GET', '2022-03-07 11:32:51', NULL),
(98, '127.0.0.1', 'admin/categories', 'GET', '2022-03-07 11:33:52', NULL),
(99, '127.0.0.1', 'admin/categories/10/edit', 'GET', '2022-03-07 11:33:54', NULL),
(100, '127.0.0.1', 'admin/categories/10', 'PUT', '2022-03-07 11:33:56', NULL),
(101, '127.0.0.1', 'admin/categories', 'GET', '2022-03-07 11:33:56', NULL),
(102, '127.0.0.1', 'admin/categories/10/edit', 'GET', '2022-03-07 11:33:58', NULL),
(103, '127.0.0.1', 'admin/categories/10', 'PUT', '2022-03-07 11:34:00', NULL),
(104, '127.0.0.1', 'admin/categories', 'GET', '2022-03-07 11:34:00', NULL),
(105, '127.0.0.1', 'admin/orders', 'GET', '2022-03-07 11:34:02', NULL),
(106, '127.0.0.1', 'admin/categories', 'GET', '2022-03-07 11:34:04', NULL),
(107, '127.0.0.1', 'admin/food', 'GET', '2022-03-07 11:34:05', NULL),
(108, '127.0.0.1', 'admin/restaurants', 'GET', '2022-03-07 11:34:09', NULL),
(109, '127.0.0.1', 'admin/users', 'GET', '2022-03-07 11:34:11', NULL),
(110, '127.0.0.1', 'admin/users/5/edit', 'GET', '2022-03-07 11:34:36', NULL),
(111, '127.0.0.1', 'admin/users/5', 'PUT', '2022-03-07 11:34:39', NULL),
(112, '127.0.0.1', 'admin/users', 'GET', '2022-03-07 11:34:39', NULL),
(113, '127.0.0.1', 'logout', 'POST', '2022-03-07 11:34:41', NULL),
(114, '127.0.0.1', 'admin/users', 'GET', '2022-03-07 11:34:41', NULL),
(115, '127.0.0.1', 'login', 'GET', '2022-03-07 11:34:42', NULL),
(116, '127.0.0.1', 'login', 'POST', '2022-03-07 11:34:46', NULL),
(117, '127.0.0.1', '/', 'GET', '2022-03-07 11:34:46', NULL),
(118, '127.0.0.1', 'admin', 'GET', '2022-03-07 11:34:48', NULL),
(119, '127.0.0.1', 'admin/users', 'GET', '2022-03-07 11:34:50', NULL),
(120, '127.0.0.1', 'admin/users/5/edit', 'GET', '2022-03-07 11:34:52', NULL),
(121, '127.0.0.1', 'admin/users/5', 'PUT', '2022-03-07 11:34:54', NULL),
(122, '127.0.0.1', 'admin/users', 'GET', '2022-03-07 11:34:54', NULL),
(123, '127.0.0.1', 'login', 'GET', '2022-03-07 11:34:54', NULL),
(124, '127.0.0.1', 'login', 'POST', '2022-03-07 11:34:59', NULL),
(125, '127.0.0.1', '/', 'GET', '2022-03-07 11:34:59', NULL),
(126, '127.0.0.1', 'admin', 'GET', '2022-03-07 11:35:01', NULL),
(127, '127.0.0.1', 'admin/users', 'GET', '2022-03-07 11:35:03', NULL),
(128, '127.0.0.1', 'admin/orders', 'GET', '2022-03-07 11:35:38', NULL),
(129, '127.0.0.1', 'admin', 'GET', '2022-03-07 11:35:41', NULL),
(130, '127.0.0.1', 'logout', 'POST', '2022-03-07 11:35:42', NULL),
(131, '127.0.0.1', 'admin', 'GET', '2022-03-07 11:35:43', NULL),
(132, '127.0.0.1', 'login', 'GET', '2022-03-07 11:35:43', NULL),
(133, '127.0.0.1', 'register', 'GET', '2022-03-07 11:35:49', NULL),
(134, '127.0.0.1', 'register', 'POST', '2022-03-07 11:35:56', NULL),
(135, '127.0.0.1', 'login', 'GET', '2022-03-07 11:35:56', NULL),
(136, '127.0.0.1', 'login', 'POST', '2022-03-07 11:36:00', NULL),
(137, '127.0.0.1', '/', 'GET', '2022-03-07 11:36:00', NULL),
(138, '127.0.0.1', 'restaurants/6', 'GET', '2022-03-07 11:36:02', NULL),
(139, '127.0.0.1', 'restaurants/food', 'POST', '2022-03-07 11:36:03', NULL),
(140, '127.0.0.1', 'cart/items', 'POST', '2022-03-07 11:36:03', NULL),
(141, '127.0.0.1', 'cart/add', 'POST', '2022-03-07 11:36:04', NULL),
(142, '127.0.0.1', 'cart/items', 'POST', '2022-03-07 11:36:05', NULL),
(143, '127.0.0.1', 'cart/add', 'POST', '2022-03-07 11:36:07', NULL),
(144, '127.0.0.1', 'cart/items', 'POST', '2022-03-07 11:36:07', NULL),
(145, '127.0.0.1', 'cart/add', 'POST', '2022-03-07 11:36:09', NULL),
(146, '127.0.0.1', 'cart/items', 'POST', '2022-03-07 11:36:09', NULL),
(147, '127.0.0.1', 'restaurants/food', 'POST', '2022-03-07 11:36:11', NULL),
(148, '127.0.0.1', 'cart/add', 'POST', '2022-03-07 11:36:14', NULL),
(149, '127.0.0.1', 'cart/items', 'POST', '2022-03-07 11:36:14', NULL),
(150, '127.0.0.1', 'orders/store', 'POST', '2022-03-07 11:36:17', NULL),
(151, '127.0.0.1', 'restaurants/6', 'GET', '2022-03-07 11:36:17', NULL),
(152, '127.0.0.1', 'restaurants/food', 'POST', '2022-03-07 11:36:17', NULL),
(153, '127.0.0.1', 'cart/items', 'POST', '2022-03-07 11:36:18', NULL),
(154, '127.0.0.1', 'logout', 'POST', '2022-03-07 11:36:19', NULL),
(155, '127.0.0.1', 'restaurants/6', 'GET', '2022-03-07 11:36:19', NULL),
(156, '127.0.0.1', 'login', 'GET', '2022-03-07 11:36:19', NULL),
(157, '127.0.0.1', 'login', 'POST', '2022-03-07 11:36:24', NULL),
(158, '127.0.0.1', '/', 'GET', '2022-03-07 11:36:25', NULL),
(159, '127.0.0.1', 'admin', 'GET', '2022-03-07 11:36:27', NULL),
(160, '127.0.0.1', 'admin/orders', 'GET', '2022-03-07 11:36:46', NULL),
(161, '127.0.0.1', 'admin/categories', 'GET', '2022-03-07 11:36:51', NULL),
(162, '127.0.0.1', 'admin/food', 'GET', '2022-03-07 11:36:54', NULL),
(163, '127.0.0.1', 'admin/users', 'GET', '2022-03-07 11:37:14', NULL),
(164, '127.0.0.1', 'admin/food', 'GET', '2022-03-07 11:37:16', NULL),
(165, '127.0.0.1', 'admin/food', 'GET', '2022-03-07 11:38:16', NULL),
(166, '127.0.0.1', 'admin/food', 'GET', '2022-03-07 11:38:22', NULL),
(167, '127.0.0.1', 'admin/food', 'GET', '2022-03-07 11:39:10', NULL),
(168, '127.0.0.1', 'admin', 'GET', '2022-03-07 11:39:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `action_log`
--

CREATE TABLE `action_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `action` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `action_log`
--

INSERT INTO `action_log` (`id`, `ip`, `path`, `method`, `user_id`, `action`, `created_at`, `updated_at`) VALUES
(1, '127.0.0.1', 'logout', 'POST', 3, 'User logged out.', '2022-03-07 11:29:45', NULL),
(2, '127.0.0.1', 'register', 'POST', 5, 'User registered themselves.', '2022-03-07 11:29:59', NULL),
(3, '127.0.0.1', 'login', 'POST', 5, 'User failed to log in.', '2022-03-07 11:30:02', NULL),
(4, '127.0.0.1', 'login', 'POST', 5, 'User logged in.', '2022-03-07 11:30:08', NULL),
(5, '127.0.0.1', 'cart/add', 'POST', 5, 'User added Barbeque Sauce (ID: 74) to their cart.', '2022-03-07 11:30:23', NULL),
(6, '127.0.0.1', 'cart/add', 'POST', 5, 'User added Barbeque Sauce (ID: 74) to their cart.', '2022-03-07 11:30:24', NULL),
(7, '127.0.0.1', 'cart/add', 'POST', 5, 'User added Chick-n-Strips (ID: 78) to their cart.', '2022-03-07 11:30:25', NULL),
(8, '127.0.0.1', 'cart/add', 'POST', 5, 'User added Chick-n-Strips (ID: 78) to their cart.', '2022-03-07 11:30:26', NULL),
(9, '127.0.0.1', 'cart/add', 'POST', 5, 'User added Chicken Sandwich (ID: 76) to their cart.', '2022-03-07 11:30:27', NULL),
(10, '127.0.0.1', 'cart/add', 'POST', 5, 'User added Cobb Salad (ID: 79) to their cart.', '2022-03-07 11:30:28', NULL),
(11, '127.0.0.1', 'cart/add', 'POST', 5, 'User added Deluxe Sandwich (ID: 82) to their cart.', '2022-03-07 11:30:31', NULL),
(12, '127.0.0.1', 'orders/store', 'POST', 5, 'User created an order. Order id: 1', '2022-03-07 11:30:33', NULL),
(13, '127.0.0.1', 'cart/add', 'POST', 5, 'User added The Batman Pizza (ID: 146) to their cart.', '2022-03-07 11:30:42', NULL),
(14, '127.0.0.1', 'cart/add', 'POST', 5, 'User added Caesar Wings (ID: 137) to their cart.', '2022-03-07 11:30:43', NULL),
(15, '127.0.0.1', 'cart/add', 'POST', 5, 'User added Coca-Cola - 2l Bottle (ID: 139) to their cart.', '2022-03-07 11:30:44', NULL),
(16, '127.0.0.1', 'cart/add', 'POST', 5, 'User added Caesar Wings (ID: 137) to their cart.', '2022-03-07 11:30:45', NULL),
(17, '127.0.0.1', 'orders/store', 'POST', 5, 'User created an order. Order id: 2', '2022-03-07 11:30:47', NULL),
(18, '127.0.0.1', 'logout', 'POST', 5, 'User logged out.', '2022-03-07 11:30:49', NULL),
(19, '127.0.0.1', 'login', 'POST', 3, 'User logged in.', '2022-03-07 11:30:55', NULL),
(20, '127.0.0.1', 'logout', 'POST', 3, 'User logged out.', '2022-03-07 11:34:41', NULL),
(21, '127.0.0.1', 'login', 'POST', 5, 'User logged in.', '2022-03-07 11:34:46', NULL),
(22, '127.0.0.1', 'login', 'POST', 3, 'User logged in.', '2022-03-07 11:34:59', NULL),
(23, '127.0.0.1', 'logout', 'POST', 3, 'User logged out.', '2022-03-07 11:35:42', NULL),
(24, '127.0.0.1', 'register', 'POST', 6, 'User registered themselves.', '2022-03-07 11:35:56', NULL),
(25, '127.0.0.1', 'login', 'POST', 6, 'User logged in.', '2022-03-07 11:36:00', NULL),
(26, '127.0.0.1', 'cart/add', 'POST', 6, 'User added All The Meats (ID: 59) to their cart.', '2022-03-07 11:36:04', NULL),
(27, '127.0.0.1', 'cart/add', 'POST', 6, 'User added Cheesesticks (ID: 62) to their cart.', '2022-03-07 11:36:07', NULL),
(28, '127.0.0.1', 'cart/add', 'POST', 6, 'User added Cinnamon Pullaparts (ID: 65) to their cart.', '2022-03-07 11:36:09', NULL),
(29, '127.0.0.1', 'cart/add', 'POST', 6, 'User added Pepsi - 2l Bottle (ID: 70) to their cart.', '2022-03-07 11:36:14', NULL),
(30, '127.0.0.1', 'orders/store', 'POST', 6, 'User created an order. Order id: 3', '2022-03-07 11:36:17', NULL),
(31, '127.0.0.1', 'logout', 'POST', 6, 'User logged out.', '2022-03-07 11:36:19', NULL),
(32, '127.0.0.1', 'login', 'POST', 3, 'User logged in.', '2022-03-07 11:36:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `food_id` bigint(20) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `restaurant_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `name`, `image`, `price`, `category_id`, `restaurant_id`, `created_at`, `updated_at`) VALUES
(1, 'Big Mac', 'mcdonalds_big_mac.jpg', 2.99, 2, 1, '2022-03-07 11:29:31', '2022-03-07 11:32:51'),
(2, 'Big Mac Combo Meal', 'mcdonalds_big_mac_combo_meal.jpg', 6.99, 8, 1, '2022-03-07 11:29:31', NULL),
(3, 'Cheeseburger', 'mcdonalds_cheeseburger.jpg', 1.99, 2, 1, '2022-03-07 11:29:31', NULL),
(4, 'Cheeseburger Combo Meal', 'mcdonalds_cheeseburger_combo_meal.jpg', 6.99, 8, 1, '2022-03-07 11:29:31', NULL),
(5, 'Chicken McNuggets', 'mcdonalds_chicken_mcnuggets.jpg', 3.99, 6, 1, '2022-03-07 11:29:31', NULL),
(6, 'Coca Cola', 'mcdonalds_coca_cola.jpg', 0.99, 10, 1, '2022-03-07 11:29:31', NULL),
(7, 'Double Cheeseburger', 'mcdonalds_double_cheeseburger.jpg', 2.99, 2, 1, '2022-03-07 11:29:31', NULL),
(8, 'Double Quarter Pounder', 'mcdonalds_double_quarter_pounder.jpg', 2.99, 2, 1, '2022-03-07 11:29:31', NULL),
(9, 'Fanta', 'mcdonalds_fanta.jpg', 0.99, 10, 1, '2022-03-07 11:29:31', NULL),
(10, 'Hamburger', 'mcdonalds_hamburger.jpg', 1.99, 2, 1, '2022-03-07 11:29:31', NULL),
(11, 'Hot Caramel Sundae', 'mcdonalds_hot_caramel_sundae.jpg', 1.99, 4, 1, '2022-03-07 11:29:31', NULL),
(12, 'Hot Fudge Sundae', 'mcdonalds_hot_fudge_sundae.jpg', 1.99, 4, 1, '2022-03-07 11:29:31', NULL),
(13, 'McChicken', 'mcdonalds_mcchicken.jpg', 1.99, 2, 1, '2022-03-07 11:29:31', NULL),
(14, 'Quarter Pounder', 'mcdonalds_quarter_pounder.jpg', 1.99, 2, 1, '2022-03-07 11:29:31', NULL),
(15, 'Sprite', 'mcdonalds_sprite.jpg', 0.99, 10, 1, '2022-03-07 11:29:31', NULL),
(16, 'World Famous Fries', 'mcdonalds_world_famous_fries.jpg', 1.99, 3, 1, '2022-03-07 11:29:31', NULL),
(17, '330ml 7up', 'kfc_330ml_7up.jpg', 0.99, 10, 2, '2022-03-07 11:29:31', NULL),
(18, '330ml Pepsi', 'kfc_330ml_pepsi.jpg', 0.99, 10, 2, '2022-03-07 11:29:31', NULL),
(19, 'BBQ Sauce', 'kfc_bbq_sauce.jpg', 0.99, 14, 2, '2022-03-07 11:29:31', NULL),
(20, 'Colonel Salad', 'kfc_colonel_salad.jpg', 3.99, 12, 2, '2022-03-07 11:29:31', NULL),
(21, 'Fries', 'kfc_fries.jpg', 2.99, 3, 2, '2022-03-07 11:29:31', NULL),
(22, 'Hot Wings Bucket', 'kfc_hot_wings_bucket.jpg', 8.99, 6, 2, '2022-03-07 11:29:31', NULL),
(23, 'Smartster', 'kfc_smartster.jpg', 2.99, 3, 2, '2022-03-07 11:29:31', NULL),
(24, 'Sweet & Sour Sauce', 'kfc_sweet_&_sour_sauce.jpg', 0.99, 14, 2, '2022-03-07 11:29:31', NULL),
(25, 'Twister', 'kfc_twister.jpg', 3.99, 13, 2, '2022-03-07 11:29:31', NULL),
(26, 'Twister Meal', 'kfc_twister_meal.jpg', 7.99, 8, 2, '2022-03-07 11:29:31', NULL),
(27, 'Variety Meal', 'kfc_variety_meal.jpg', 8.99, 8, 2, '2022-03-07 11:29:31', NULL),
(28, 'Zinger Box Meal', 'kfc_zinger_box_meal.jpg', 8.99, 8, 2, '2022-03-07 11:29:31', NULL),
(29, 'Zinger Burger Meal', 'kfc_zinger_burger_meal.jpg', 8.99, 8, 2, '2022-03-07 11:29:31', NULL),
(30, 'Zinger Burger Single', 'kfc_zinger_burger_single.jpg', 2.99, 2, 2, '2022-03-07 11:29:31', NULL),
(31, 'Zinger Tower Burger', 'kfc_zinger_tower_burger.jpg', 3.99, 2, 2, '2022-03-07 11:29:31', NULL),
(32, 'Baja Chicken & Bacon Wrap', 'subway_baja_chicken_&_bacon_wrap.jpg', 5.99, 13, 4, '2022-03-07 11:29:31', NULL),
(33, 'Baja Turkey Avocado Salad', 'subway_baja_turkey_avocado_salad.jpg', 3.99, 12, 4, '2022-03-07 11:29:31', NULL),
(34, 'Black Forest Ham Salad', 'subway_black_forest_ham_salad.jpg', 3.99, 12, 4, '2022-03-07 11:29:31', NULL),
(35, 'Buffalo Chicken Sandwich', 'subway_buffalo_chicken_sandwich.jpg', 4.49, 11, 4, '2022-03-07 11:29:31', NULL),
(36, 'Cold Cut Combo Sandwich', 'subway_cold_cut_combo_sandwich.jpg', 3.99, 11, 4, '2022-03-07 11:29:31', NULL),
(37, 'Meatball Marinara Sandwich', 'subway_meatball_marinara_sandwich.jpg', 5.99, 11, 4, '2022-03-07 11:29:31', NULL),
(38, 'Mozza Meat Sandwich', 'subway_mozza_meat_sandwich.jpg', 4.99, 11, 4, '2022-03-07 11:29:31', NULL),
(39, 'Mozza Meat Wrap', 'subway_mozza_meat_wrap.jpg', 4.99, 13, 4, '2022-03-07 11:29:31', NULL),
(40, 'Spicy Italian Salad', 'subway_spicy_italian_salad.jpg', 3.99, 12, 4, '2022-03-07 11:29:31', NULL),
(41, 'Subway Club Sandwich', 'subway_subway_club_sandwich.jpg', 4.99, 11, 4, '2022-03-07 11:29:31', NULL),
(42, 'Subway Club Wrap', 'subway_subway_club_wrap.jpg', 4.99, 13, 4, '2022-03-07 11:29:31', NULL),
(43, 'Supreme Meats Sandwich', 'subway_supreme_meats_sandwich.jpg', 5.99, 11, 4, '2022-03-07 11:29:31', NULL),
(44, '3 Meats', 'dominos_3_meats.jpg', 8.99, 1, 3, '2022-03-07 11:29:31', NULL),
(45, '7up', 'dominos_7up.jpg', 1.99, 10, 3, '2022-03-07 11:29:31', NULL),
(46, 'Boneless Chicken Tenders', 'dominos_boneless_chicken_tenders.jpg', 3.99, 6, 3, '2022-03-07 11:29:31', NULL),
(47, 'Buttermilk Chicken Pieces', 'dominos_buttermilk_chicken_pieces.jpg', 4.99, 6, 3, '2022-03-07 11:29:31', NULL),
(48, 'Chicken Supreme', 'dominos_chicken_supreme.jpg', 8.99, 1, 3, '2022-03-07 11:29:31', NULL),
(49, 'Choc Lava Cake', 'dominos_choc_lava_cake.jpg', 5.99, 4, 3, '2022-03-07 11:29:31', NULL),
(50, 'Choc Lava Puff Roll', 'dominos_choc_lava_puff_roll.jpg', 4.99, 4, 3, '2022-03-07 11:29:31', NULL),
(51, 'Double Bacon Cheeseburger', 'dominos_double_bacon_cheeseburger.jpg', 8.99, 1, 3, '2022-03-07 11:29:31', NULL),
(52, 'Fire Breather', 'dominos_fire_breather.jpg', 7.99, 1, 3, '2022-03-07 11:29:31', NULL),
(53, 'Garlic Bread', 'dominos_garlic_bread.jpg', 2.99, 3, 3, '2022-03-07 11:29:31', NULL),
(54, 'Godfather', 'dominos_godfather.jpg', 7.99, 1, 3, '2022-03-07 11:29:31', NULL),
(55, 'Oven Baked Chips', 'dominos_oven_baked_chips.jpg', 7.99, 3, 3, '2022-03-07 11:29:31', NULL),
(56, 'Pepperoni', 'dominos_pepperoni.jpg', 7.99, 1, 3, '2022-03-07 11:29:31', NULL),
(57, 'Pepsi', 'dominos_pepsi.jpg', 1.99, 10, 3, '2022-03-07 11:29:31', NULL),
(58, 'Vanilla Custard Puff Roll', 'dominos_vanilla_custard_puff_roll.jpg', 4.99, 4, 3, '2022-03-07 11:29:31', NULL),
(59, 'All The Meats', 'papa_johns_all_the_meats.jpg', 8.99, 1, 6, '2022-03-07 11:29:31', NULL),
(60, 'Breadsticks', 'papa_johns_breadsticks.jpg', 2.99, 3, 6, '2022-03-07 11:29:31', NULL),
(61, 'Cheese', 'papa_johns_cheese.jpg', 6.99, 1, 6, '2022-03-07 11:29:31', NULL),
(62, 'Cheesesticks', 'papa_johns_cheesesticks.jpg', 2.99, 3, 6, '2022-03-07 11:29:31', NULL),
(63, 'Chicken Florentine Pasta', 'papa_johns_chicken_florentine_pasta.jpg', 7.99, 15, 6, '2022-03-07 11:29:31', NULL),
(64, 'Chocolate Chip Cookie', 'papa_johns_chocolate_chip_cookie.jpg', 2.99, 4, 6, '2022-03-07 11:29:31', NULL),
(65, 'Cinnamon Pullaparts', 'papa_johns_cinnamon_pullaparts.jpg', 3.99, 4, 6, '2022-03-07 11:29:31', NULL),
(66, 'Creamy Red Sauce Pasta With Italian Sausage', 'papa_johns_creamy_red_sauce_pasta_with_italian_sausage.jpg', 9.99, 15, 6, '2022-03-07 11:29:31', NULL),
(67, 'Garden Fresh', 'papa_johns_garden_fresh.jpg', 6.99, 1, 6, '2022-03-07 11:29:31', NULL),
(68, 'Hawaiian', 'papa_johns_hawaiian.jpg', 6.99, 1, 6, '2022-03-07 11:29:31', NULL),
(69, 'Pepperoni', 'papa_johns_pepperoni.jpg', 7.99, 1, 6, '2022-03-07 11:29:31', NULL),
(70, 'Pepsi - 2l Bottle', 'papa_johns_pepsi_2l.jpg', 3.49, 10, 6, '2022-03-07 11:29:31', NULL),
(71, 'Pepsi - 500ml Bottle', 'papa_johns_pepsi_500ml.jpg', 1.99, 10, 6, '2022-03-07 11:29:31', NULL),
(72, 'Sausage and Bacon Supreme', 'papa_johns_sausage_and_bacon_supreme.jpg', 8.99, 1, 6, '2022-03-07 11:29:31', NULL),
(73, 'The Works', 'papa_johns_the_works.jpg', 8.99, 1, 6, '2022-03-07 11:29:31', NULL),
(74, 'Barbeque Sauce', 'chickfila_barbeque_sauce.jpg', 1.99, 14, 5, '2022-03-07 11:29:31', NULL),
(75, 'Chicken Biscuit', 'chickfila_chicken_biscuit.jpg', 2.99, 9, 5, '2022-03-07 11:29:31', NULL),
(76, 'Chicken Sandwich', 'chickfila_chicken_sandwich.jpg', 3.99, 11, 5, '2022-03-07 11:29:31', NULL),
(77, 'Chick-Fil-A Sauce', 'chickfila_chick-fil-a_sauce.jpg', 1.99, 14, 5, '2022-03-07 11:29:31', NULL),
(78, 'Chick-n-Strips', 'chickfila_chick-n-strips.jpg', 3.99, 6, 5, '2022-03-07 11:29:31', NULL),
(79, 'Cobb Salad', 'chickfila_cobb_salad.jpg', 3.99, 12, 5, '2022-03-07 11:29:31', NULL),
(80, 'Coca-Cola', 'chickfila_coca-cola.jpg', 2.99, 10, 5, '2022-03-07 11:29:31', NULL),
(81, 'Cool Wrap', 'chickfila_cool_wrap.jpg', 3.99, 13, 5, '2022-03-07 11:29:31', NULL),
(82, 'Deluxe Sandwich', 'chickfila_deluxe_sandwich.jpg', 4.49, 11, 5, '2022-03-07 11:29:31', NULL),
(83, 'Dr Pepper', 'chickfila_dr_pepper.jpg', 2.99, 10, 5, '2022-03-07 11:29:31', NULL),
(84, 'Egg White Grill', 'chickfila_egg_white_grill.jpg', 2.49, 9, 5, '2022-03-07 11:29:31', NULL),
(85, 'Fruit Cup', 'chickfila_fruit_cup.jpg', 2.49, 3, 5, '2022-03-07 11:29:31', NULL),
(86, 'Grilled Chicken Sandwich', 'chickfila_grilled_chicken_sandwich.jpg', 4.49, 11, 5, '2022-03-07 11:29:31', NULL),
(87, 'Hash Brown Scramble Bowl', 'chickfila_hash_brown_scramble_bowl.jpg', 2.99, 9, 5, '2022-03-07 11:29:31', NULL),
(88, 'Nuggets', 'chickfila_nuggets.jpg', 3.99, 6, 5, '2022-03-07 11:29:31', NULL),
(89, 'Spicy Chicken Sandwich', 'chickfila_spicy_chicken_sandwich.jpg', 3.99, 11, 5, '2022-03-07 11:29:31', NULL),
(90, 'Spicy Deluxe Sandwich', 'chickfila_spicy_deluxe_sandwich.jpg', 4.49, 11, 5, '2022-03-07 11:29:31', NULL),
(91, 'Spicy Southwest Salad', 'chickfila_spicy_southwest_salad.jpg', 3.99, 12, 5, '2022-03-07 11:29:31', NULL),
(92, 'Waffle Potato Fries', 'chickfila_waffle_potato_fries.jpg', 2.99, 3, 5, '2022-03-07 11:29:31', NULL),
(93, 'Bacon, Gouda & Egg Sandwich', 'starbucks_bacon_gouda_&_egg_sandwich.jpg', 2.99, 9, 8, '2022-03-07 11:29:31', NULL),
(94, 'Caffe Americano', 'starbucks_caffe_americano.jpg', 3.99, 5, 8, '2022-03-07 11:29:31', NULL),
(95, 'Caffe Latte', 'starbucks_caffe_latte.jpg', 4.99, 5, 8, '2022-03-07 11:29:31', NULL),
(96, 'Caffe Misto', 'starbucks_caffe_misto.jpg', 4.99, 5, 8, '2022-03-07 11:29:31', NULL),
(97, 'Caffe Mocha', 'starbucks_caffe_mocha.jpg', 4.99, 5, 8, '2022-03-07 11:29:31', NULL),
(98, 'Cappuccino', 'starbucks_cappuccino.jpg', 4.49, 5, 8, '2022-03-07 11:29:31', NULL),
(99, 'Caramel Macchiato', 'starbucks_caramel_macchiato.jpg', 5.99, 5, 8, '2022-03-07 11:29:31', NULL),
(100, 'Cinnamon Dolce Latte', 'starbucks_cinnamon_dolce_latte.jpg', 4.99, 5, 8, '2022-03-07 11:29:31', NULL),
(101, 'Crispy Grilled Cheese on Sourdough', 'starbucks_crispy_grilled_cheese_on_sourdough.jpg', 4.99, 11, 8, '2022-03-07 11:29:31', NULL),
(102, 'Double-Smoked Bacon, Cheddar & Egg Sandwich', 'starbucks_double-smoked_bacon_cheddar_&_egg_sandwich.jpg', 3.99, 9, 8, '2022-03-07 11:29:31', NULL),
(103, 'Ham & Swiss on Baguette', 'starbucks_ham_&_swiss_on_baguette.jpg', 4.99, 11, 8, '2022-03-07 11:29:31', NULL),
(104, 'Impossible Breakfast Sandwich', 'starbucks_impossible_breakfast_sandwich.jpg', 3.99, 9, 8, '2022-03-07 11:29:31', NULL),
(105, 'Spinach, Feta & Egg White Wrap', 'starbucks_spinach_feta_&_egg_white_wrap.jpg', 3.99, 9, 8, '2022-03-07 11:29:31', NULL),
(106, 'White Chocolate Mocha', 'starbucks_white_chocolate_mocha.jpg', 5.99, 5, 8, '2022-03-07 11:29:31', NULL),
(107, 'Blackberry Izze', 'chipotle_blackberry_izze.jpg', 1.99, 10, 9, '2022-03-07 11:29:31', NULL),
(108, 'Burrito', 'chipotle_burrito.jpg', 10.99, 7, 9, '2022-03-07 11:29:31', NULL),
(109, 'Burrito Bowl', 'chipotle_burrito_bowl.jpg', 12.99, 7, 9, '2022-03-07 11:29:31', NULL),
(110, 'Chips & Guacamole', 'chipotle_chips_&_guacamole.jpg', 4.99, 3, 9, '2022-03-07 11:29:31', NULL),
(111, 'Chips & Gueso Blanco', 'chipotle_chips_&_queso_blanco.jpg', 4.99, 3, 9, '2022-03-07 11:29:31', NULL),
(112, 'Guacamole', 'chipotle_guacamole.jpg', 2.99, 14, 9, '2022-03-07 11:29:31', NULL),
(113, 'High Protein Bowl', 'chipotle_high_protein_bowl.jpg', 11.99, 12, 9, '2022-03-07 11:29:31', NULL),
(114, 'Keto Salad Bowl', 'chipotle_keto_salad_bowl.jpg', 11.99, 12, 9, '2022-03-07 11:29:31', NULL),
(115, 'Kid\'s Quesadilla', 'chipotle_kids_quesadilla.jpg', 8.99, 7, 9, '2022-03-07 11:29:31', NULL),
(116, 'Mexical Coca-Cola', 'chipotle_mexican_coca-cola.jpg', 1.99, 10, 9, '2022-03-07 11:29:31', NULL),
(117, 'Mexican Sprite', 'chipotle_mexican_sprite.jpg', 1.99, 10, 9, '2022-03-07 11:29:31', NULL),
(118, 'Quesadilla', 'chipotle_quesadilla.jpg', 10.99, 7, 9, '2022-03-07 11:29:31', NULL),
(119, 'Queso Blanco', 'chipotle_queso_blanco.jpg', 2.99, 14, 9, '2022-03-07 11:29:31', NULL),
(120, 'Tacos', 'chipotle_tacos.jpg', 6.99, 7, 9, '2022-03-07 11:29:31', NULL),
(121, 'Whole30 Salad Bowl', 'chipotle_whole30_salad_bowl.jpg', 11.99, 12, 9, '2022-03-07 11:29:31', NULL),
(122, 'Americano', 'dunkindonuts_americano.jpg', 6.99, 5, 7, '2022-03-07 11:29:31', NULL),
(123, 'Bacon, Egg & Cheese', 'dunkindonuts_bacon_egg_&_cheese.jpg', 6.99, 9, 7, '2022-03-07 11:29:31', NULL),
(124, 'Cappuccino', 'dunkindonuts_cappuccino.jpg', 5.99, 5, 7, '2022-03-07 11:29:31', NULL),
(125, 'Coffe', 'dunkindonuts_coffe.jpg', 5.99, 5, 7, '2022-03-07 11:29:31', NULL),
(126, 'Donut', 'dunkindonuts_donut.jpg', 4.99, 4, 7, '2022-03-07 11:29:31', NULL),
(127, 'Egg & Cheese', 'dunkindonuts_egg_&_cheese.jpg', 5.99, 9, 7, '2022-03-07 11:29:31', NULL),
(128, 'Iced Americano', 'dunkindonuts_iced_americano.jpg', 6.99, 5, 7, '2022-03-07 11:29:31', NULL),
(129, 'Iced Coffe', 'dunkindonuts_iced_coffe.jpg', 5.99, 5, 7, '2022-03-07 11:29:31', NULL),
(130, 'Latte', 'dunkindonuts_latte.jpg', 6.99, 5, 7, '2022-03-07 11:29:31', NULL),
(131, 'Macchiato', 'dunkindonuts_macchiato.jpg', 6.99, 5, 7, '2022-03-07 11:29:31', NULL),
(132, 'Munchkins Donut Hole Treats', 'dunkindonuts_munchkins_donut_hole_treats.jpg', 5.99, 4, 7, '2022-03-07 11:29:31', NULL),
(133, 'Sausage, Egg & Cheese', 'dunkindonuts_sausage_egg_&_cheese.jpg', 6.99, 9, 7, '2022-03-07 11:29:31', NULL),
(134, 'Wake-Up Wrap', 'dunkindonuts_wake-up_wrap.jpg', 4.99, 9, 7, '2022-03-07 11:29:31', NULL),
(135, '3 Meat Treat', 'littlecaesars_3_meat_treat.jpg', 10.99, 1, 10, '2022-03-07 11:29:31', NULL),
(136, '4-N-1 Pizza', 'littlecaesars_4-n-1_pizza.jpg', 11.99, 1, 10, '2022-03-07 11:29:31', NULL),
(137, 'Caesar Wings', 'littlecaesars_caesar_wings.jpg', 5.99, 6, 10, '2022-03-07 11:29:31', NULL),
(138, 'Cheese', 'littlecaesars_cheese.jpg', 9.99, 1, 10, '2022-03-07 11:29:31', NULL),
(139, 'Coca-Cola - 2l Bottle', 'littlecaesars_coca-cola_2l_bottle.jpg', 2.99, 10, 10, '2022-03-07 11:29:31', NULL),
(140, 'Complete Meal', 'littlecaesars_complete_meal.jpg', 14.99, 8, 10, '2022-03-07 11:29:31', NULL),
(141, 'Crazy Combo', 'littlecaesars_crazy_combo.jpg', 2.99, 8, 10, '2022-03-07 11:29:31', NULL),
(142, 'Fun Meal', 'littlecaesars_fun_meal.jpg', 17.99, 8, 10, '2022-03-07 11:29:31', NULL),
(143, 'Hula Hawaiian', 'littlecaesars_hula_hawaiian.jpg', 10.99, 1, 10, '2022-03-07 11:29:31', NULL),
(144, 'Party Meal', 'littlecaesars_party_meal.jpg', 20.99, 8, 10, '2022-03-07 11:29:31', NULL),
(145, 'Pepperoni', 'littlecaesars_pepperoni.jpg', 9.99, 1, 10, '2022-03-07 11:29:31', NULL),
(146, 'The Batman Pizza', 'littlecaesars_the_batman_pizza.jpg', 11.99, 1, 10, '2022-03-07 11:29:31', NULL),
(147, 'Ultimate Supreme', 'littlecaesars_ultimate_supreme.jpg', 10.99, 1, 10, '2022-03-07 11:29:31', NULL),
(148, 'Veggie', 'littlecaesars_veggie.jpg', 10.99, 1, 10, '2022-03-07 11:29:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `food_category`
--

CREATE TABLE `food_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `listed` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food_category`
--

INSERT INTO `food_category` (`id`, `name`, `listed`, `created_at`, `updated_at`) VALUES
(1, 'Pizza', 1, '2022-03-07 11:29:31', NULL),
(2, 'Burgers', 1, '2022-03-07 11:29:31', NULL),
(3, 'Sides', 0, '2022-03-07 11:29:31', NULL),
(4, 'Desserts', 1, '2022-03-07 11:29:31', NULL),
(5, 'Coffee', 1, '2022-03-07 11:29:31', NULL),
(6, 'Chicken', 1, '2022-03-07 11:29:31', NULL),
(7, 'Mexican', 1, '2022-03-07 11:29:31', NULL),
(8, 'Combos', 0, '2022-03-07 11:29:31', NULL),
(9, 'Breakfast', 1, '2022-03-07 11:29:31', NULL),
(10, 'Beverages', 0, '2022-03-07 11:29:31', '2022-03-07 11:34:00'),
(11, 'Sandwiches', 1, '2022-03-07 11:29:31', NULL),
(12, 'Salads', 1, '2022-03-07 11:29:31', NULL),
(13, 'Wraps', 1, '2022-03-07 11:29:31', NULL),
(14, 'Extras', 0, '2022-03-07 11:29:31', NULL),
(15, 'Pasta', 1, '2022-03-07 11:29:31', NULL);

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_02_15_163241_create_nav_table', 1),
(3, '2022_02_15_173714_create_social_table', 1),
(4, '2022_02_17_152646_create_user_table', 1),
(5, '2022_02_17_175912_create_role_table', 1),
(6, '2022_02_23_172742_create_access_log_table', 1),
(7, '2022_02_24_133917_create_restaurant_table', 1),
(8, '2022_02_24_134058_create_food_category_table', 1),
(9, '2022_02_24_134316_create_food_table', 1),
(10, '2022_02_26_180808_create_action_log_table', 1),
(11, '2022_03_01_202424_create_cart_table', 1),
(12, '2022_03_02_134314_create_order_table', 1),
(13, '2022_03_02_134333_create_order_detail_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nav`
--

CREATE TABLE `nav` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nav`
--

INSERT INTO `nav` (`id`, `name`, `icon`, `route`, `order`, `admin`) VALUES
(1, 'Home', NULL, 'home', 1, 0),
(2, 'Restaurants', NULL, 'restaurants.index', 2, 0),
(3, 'Contact', NULL, 'contact', 3, 0),
(4, 'Author', NULL, 'author', 4, 0),
(5, 'Dashboard', 'fas fa-tachometer-alt', 'admin.dashboard', 1, 1),
(6, 'Actions', 'fas fa-tasks', 'admin.actions', 2, 1),
(7, 'Users', 'fa fa-user', 'admin.users.index', 3, 1),
(8, 'Restaurants', 'fa fa-cutlery', 'admin.restaurants', 4, 1),
(9, 'Food', 'fa-solid fa-burger', 'admin.food.index', 5, 1),
(10, 'Food Categories', 'fas fa-pizza-slice', 'admin.categories.index', 6, 1),
(11, 'Orders', 'fas fa-shopping-cart', 'admin.orders', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_id`, `address`, `created_at`, `updated_at`) VALUES
(1, 5, 'Ljubljanska 11/3', '2022-03-07 11:30:33', NULL),
(2, 5, 'Dimitrija Tucovica 154A', '2022-03-07 11:30:47', NULL),
(3, 6, 'Ljubljanska 11/3', '2022-03-07 11:36:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `food_id` bigint(20) UNSIGNED NOT NULL,
  `price_at_the_time` double(8,2) NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `food_id`, `price_at_the_time`, `amount`, `created_at`, `updated_at`) VALUES
(1, 1, 74, 1.99, 2, '2022-03-07 11:30:33', NULL),
(2, 1, 78, 3.99, 2, '2022-03-07 11:30:33', NULL),
(3, 1, 76, 3.99, 1, '2022-03-07 11:30:33', NULL),
(4, 1, 79, 3.99, 1, '2022-03-07 11:30:33', NULL),
(5, 1, 82, 4.49, 1, '2022-03-07 11:30:33', NULL),
(6, 2, 146, 11.99, 1, '2022-03-07 11:30:47', NULL),
(7, 2, 137, 5.99, 2, '2022-03-07 11:30:47', NULL),
(8, 2, 139, 2.99, 1, '2022-03-07 11:30:47', NULL),
(9, 3, 59, 8.99, 1, '2022-03-07 11:36:17', NULL),
(10, 3, 62, 2.99, 1, '2022-03-07 11:36:17', NULL),
(11, 3, 65, 3.99, 1, '2022-03-07 11:36:17', NULL),
(12, 3, 70, 3.49, 1, '2022-03-07 11:36:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recommended` tinyint(1) NOT NULL DEFAULT 0,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`id`, `name`, `image`, `recommended`, `active`, `created_at`, `updated_at`) VALUES
(1, 'McDonald\'s', 'mcdonalds.jpg', 1, 1, '2022-03-07 11:29:31', NULL),
(2, 'KFC', 'kfc.jpg', 1, 1, '2022-03-07 11:29:31', NULL),
(3, 'Domino\'s Pizza', 'dominos.jpg', 1, 1, '2022-03-07 11:29:31', NULL),
(4, 'Subway', 'subway.jpg', 1, 1, '2022-03-07 11:29:31', NULL),
(5, 'Chick-Fil-A', 'chick_fil_a.jpg', 1, 1, '2022-03-07 11:29:31', '2022-03-07 11:32:28'),
(6, 'Papa John\'s', 'papa_johns.jpg', 1, 1, '2022-03-07 11:29:31', NULL),
(7, 'Dunkin Donut\'s', 'dunkin_donuts.jpg', 0, 1, '2022-03-07 11:29:31', NULL),
(8, 'Starbucks', 'starbucks.jpg', 0, 1, '2022-03-07 11:29:31', NULL),
(9, 'Chipotle', 'chipotle.jpg', 0, 1, '2022-03-07 11:29:31', NULL),
(10, 'Little Caesars', 'little_caesars.jpg', 0, 1, '2022-03-07 11:29:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'user', NULL, NULL),
(2, 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `href` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asset` tinyint(1) NOT NULL,
  `author` tinyint(1) NOT NULL,
  `order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `icon`, `href`, `asset`, `author`, `order`) VALUES
(1, 'fab fa-facebook', 'https://www.facebook.com/bojan.maksimovic.908', 0, 0, 1),
(2, 'fab fa-instagram', 'https://www.instagram.com/bojanm___/', 0, 0, 2),
(3, 'fab fa-twitter', 'https://twitter.com/bojanm_', 0, 0, 3),
(4, 'fas fa-file-pdf', 'documentation.pdf', 1, 0, 4),
(5, 'fab fa-facebook-f', 'https://www.facebook.com/bojan.maksimovic.908', 0, 1, 1),
(6, 'fab fa-twitter', 'https://twitter.com/bojanm_', 0, 1, 2),
(7, 'fab fa-github', 'https://github.com/bojanmks', 0, 1, 3),
(8, 'fas fa-file-pdf', 'documentation.pdf', 1, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'korisnik1', 'korisnik1@gmail.com', '5116f16d3399fcb6571f571d79f35f41', 1, '2022-03-07 11:29:31', NULL),
(2, 'korisnik2', 'korisnik2@gmail.com', '5116f16d3399fcb6571f571d79f35f41', 1, '2022-03-07 11:29:31', NULL),
(3, 'admin1', 'admin1@gmail.com', '0192023a7bbd73250516f069df18b500', 2, '2022-03-07 11:29:31', NULL),
(4, 'admin2', 'admin2@gmail.com', '0192023a7bbd73250516f069df18b500', 2, '2022-03-07 11:29:31', NULL),
(5, 'bojanm00', 'bojanm00@gmail.com', '2a89afb221c007c2723065886371e4c9', 1, '2022-03-07 11:29:59', '2022-03-07 11:34:54'),
(6, 'bojanm01', 'bojanm01@gmail.com', '2a89afb221c007c2723065886371e4c9', 1, '2022-03-07 11:35:56', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_log`
--
ALTER TABLE `access_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `action_log`
--
ALTER TABLE `action_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `action_log_user_id_index` (`user_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cart_user_id_food_id_unique` (`user_id`,`food_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `food_name_restaurant_id_unique` (`name`,`restaurant_id`),
  ADD KEY `food_category_id_index` (`category_id`),
  ADD KEY `food_restaurant_id_index` (`restaurant_id`);

--
-- Indexes for table `food_category`
--
ALTER TABLE `food_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `food_category_name_unique` (`name`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nav`
--
ALTER TABLE `nav`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nav_order_admin_unique` (`order`,`admin`),
  ADD UNIQUE KEY `nav_name_admin_unique` (`name`,`admin`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_user_id_index` (`user_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order_detail_order_id_food_id_unique` (`order_id`,`food_id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `restaurant_name_unique` (`name`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `social_order_author_unique` (`order`,`author`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_username_unique` (`username`),
  ADD UNIQUE KEY `user_email_unique` (`email`),
  ADD KEY `user_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access_log`
--
ALTER TABLE `access_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `action_log`
--
ALTER TABLE `action_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `food_category`
--
ALTER TABLE `food_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `nav`
--
ALTER TABLE `nav`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
