-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2017 at 06:56 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `about_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `about_description`, `about_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', 'about_images/31.jpg', 1, '2017-10-21 23:01:27', '2017-10-22 01:02:14');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'All Brands', 'this is For All Brands', 1, '2017-10-19 05:21:04', '2017-10-20 11:33:13'),
(2, 'VEGETABLES', 'This Is For Vegetables brand', 1, '2017-10-19 05:21:45', '2017-10-20 11:26:25'),
(4, 'FRUITS', 'this is For  Fruits', 1, '2017-10-19 05:22:31', '2017-10-20 11:26:24'),
(6, 'JUICES', 'This Is For Juices', 1, '2017-10-19 05:23:00', '2017-10-20 11:26:22'),
(7, 'PET FOOD', 'This is For Pet Food Brand', 1, '2017-10-19 05:24:30', '2017-10-20 11:26:20'),
(10, 'BREAD & BAKERY', 'This is for Bread & bakery', 1, '2017-10-19 05:25:27', '2017-10-20 11:26:17'),
(11, 'CLEANING', 'this is for Cleaning', 1, '2017-10-19 05:26:01', '2017-10-19 05:26:01'),
(16, 'DRY FRUITS', 'This is for Dry Fruits', 1, '2017-10-19 05:27:46', '2017-10-19 05:27:46'),
(17, 'DAIRY PRODUCTS', 'this is for Dairy Products', 1, '2017-10-19 05:28:19', '2017-10-19 05:28:19'),
(19, 'Food', 'This is Food Brand', 1, '2017-10-19 10:47:31', '2017-10-19 10:47:31'),
(21, 'Drinks', 'dgfdgdg', 1, '2017-10-19 11:21:09', '2017-10-19 11:21:09'),
(22, 'Frozen Food', 'This is frozen food', 1, '2017-10-31 10:26:43', '2017-10-31 10:28:29');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Households', 'this is households item', 1, '2017-10-19 01:58:00', '2017-10-20 11:23:20'),
(2, 'Vegetables&Fruits', 'This is for Vegetables&Fruits', 1, '2017-10-19 01:59:13', '2017-10-20 11:23:21'),
(3, 'Kitchen', 'This is For Kitchen', 1, '2017-10-19 01:59:37', '2017-10-19 01:59:37'),
(4, 'Beverages', 'This is For Beverages', 1, '2017-10-19 02:00:03', '2017-10-20 11:23:23'),
(5, 'Pet Food', 'This is For Pet Food', 1, '2017-10-19 02:00:29', '2017-10-19 02:00:29'),
(6, 'Frozen Foods', 'This is for Frozen food', 1, '2017-10-19 02:01:12', '2017-10-19 02:01:12'),
(7, 'Bread & Bekary', 'This is Bread And Bakery', 1, '2017-10-19 02:01:40', '2017-10-19 02:01:40'),
(9, 'Vegatables', 'this is for Vegetables', 1, '2017-10-19 04:03:24', '2017-10-19 04:03:24'),
(10, 'Drinks', 'This is For Drinks', 1, '2017-10-19 04:03:43', '2017-10-19 04:03:43'),
(11, 'Branded Foods', 'this is for Branded Food', 1, '2017-10-19 10:42:26', '2017-10-19 10:42:26');

-- --------------------------------------------------------

--
-- Table structure for table `ecommerces`
--

CREATE TABLE `ecommerces` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2017_10_17_092337_create_ecommerces_table', 1),
(4, '2017_10_19_065112_create_categories_table', 2),
(5, '2017_10_19_070157_create_products_table', 3),
(6, '2017_10_19_111213_create_brands_table', 4),
(7, '2017_10_19_170449_create_products_table', 5),
(8, '2017_10_20_164948_create_sliders_table', 6),
(9, '2017_10_22_043433_create_abouts_table', 7),
(10, '2017_10_22_051232_create_teams_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(8,2) NOT NULL,
  `product_quantity` int(10) NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `product_name`, `product_price`, `product_quantity`, `product_code`, `product_image`, `product_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Knorr Instant Soup (100 Gm)', 3.00, 0, '1', 'product_images/5.png', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 1, '2017-10-19 11:13:39', '2017-10-31 03:38:09'),
(2, 1, 1, 'Chings Noodles (75 Gm)', 5.00, 0, '2', 'product_images/6.png', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 1, '2017-10-19 11:14:40', '2017-10-31 03:39:34'),
(3, 1, 1, 'Lahsun Sev (150 Gm)', 3.00, 0, '3', 'product_images/7.png', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 1, '2017-10-19 11:15:12', '2017-10-31 03:39:48'),
(4, 1, 1, 'Premium Bake Rusk (300 Gm)', 5.00, 0, '4', 'product_images/8.png', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 1, '2017-10-19 11:15:46', '2017-10-31 03:39:55'),
(6, 2, 1, 'Fresh Spinach (Palak)', 2.00, 0, '5', 'product_images/9.png', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 1, '2017-10-19 11:16:53', '2017-10-31 03:43:43'),
(8, 2, 1, 'Fresh Mango Dasheri', 5.00, 0, '6', 'product_images/10.png', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 1, '2017-10-19 11:18:43', '2017-10-31 03:43:51'),
(9, 2, 1, 'Fresh Apple Red (1 Kg)', 4.00, 0, '7', 'product_images/11.png', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 1, '2017-10-19 11:19:12', '2017-10-31 03:43:59'),
(10, 2, 1, 'Fresh Broccoli (500 Gm)', 2.00, 0, '8', 'product_images/12.png', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 1, '2017-10-19 11:19:44', '2017-10-31 03:44:07'),
(11, 4, 1, 'Mixed Fruit Juice (1 Ltr)', 5.00, 0, '9', 'product_images/13.png', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 1, '2017-10-19 11:20:23', '2017-10-31 03:43:10'),
(12, 4, 1, 'Prune Juice - Sunsweet (1 Ltr)', 5.00, 0, '10', 'product_images/14.png', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 1, '2017-10-19 11:20:52', '2017-10-31 03:43:02'),
(13, 4, 21, 'Coco Cola Zero Can (330 Ml)', 3.00, 0, '11', 'product_images/15.png', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 1, '2017-10-19 11:22:13', '2017-10-19 11:22:13'),
(14, 4, 21, 'Sprite Bottle (2 Ltr)', 3.00, 0, '12', 'product_images/16.png', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 1, '2017-10-19 11:24:38', '2017-10-19 11:24:38'),
(15, 10, 21, 'Orange Soft Drink', 5.00, 250, '13', 'product_images/49.png', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 1, '2017-10-31 09:55:30', '2017-10-31 10:12:46'),
(16, 10, 21, 'Aamras Juice (250 Ml)', 4.00, 250, '14', 'product_images/50.png', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 1, '2017-10-31 10:09:12', '2017-10-31 10:16:49'),
(18, 10, 21, 'Schweppes Water (250 ltr)', 4.00, 250, '15', 'product_images/55.png', 'Schweppes Water (250 Ltr) drinks water you can safe Your Life. ', 1, '2017-10-31 10:19:45', '2017-10-31 10:41:25'),
(19, 6, 22, 'Pepper Salami (250 Gm)', 10.00, 250, '16', 'product_images/65.png', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 1, '2017-10-31 10:31:17', '2017-10-31 10:40:16'),
(20, 6, 22, 'Sumeru Green Pees (500 Gm)', 9.00, 500, '17', 'product_images/66.png', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 1, '2017-10-31 10:32:19', '2017-10-31 10:39:44'),
(21, 6, 22, 'Tikka Chicken (300 Gm)', 6.00, 300, '18', 'product_images/67.png', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 1, '2017-10-31 10:33:37', '2017-10-31 10:39:10'),
(22, 6, 22, 'Mixed Vegetables (500 Gm)', 6.00, 500, '19', 'product_images/64.png', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 1, '2017-10-31 10:34:30', '2017-10-31 10:35:21'),
(23, 7, 10, 'Raisin Rolls (2 In 1 Pack)', 4.00, 100, '20', 'product_images/37.png', '<p><div class=\"snipcart-item block\" style=\"box-sizing: border-box; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"snipcart-thumb agileinfo_single_right_snipcart\" style=\"box-sizing: border-box; margin: 0px 0px 2em;\"></div></div></p><div class=\"w3agile_description\" style=\"box-sizing: border-box; margin: 2em 0px; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><p style=\"box-sizing: border-box; margin: 0.5em 0px 0px; font-size: 14px; color: rgb(153, 153, 153); line-height: 2em; width: 328.047px;\">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p><p style=\"box-sizing: border-box; margin: 0.5em 0px 0px; font-size: 14px; color: rgb(153, 153, 153); line-height: 2em; width: 328.047px;\"></p></div>', 1, '2017-10-31 10:44:22', '2017-10-31 10:44:22'),
(24, 7, 10, 'Masala Bread (500 Gm)', 4.00, 200, '21', 'product_images/41.png', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 1, '2017-10-31 10:45:28', '2017-10-31 10:52:58'),
(25, 7, 17, 'Assorted Muffins (200 Gm)', 4.00, 200, '21', 'product_images/46.png', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 1, '2017-10-31 10:45:28', '2017-10-31 10:50:19'),
(26, 7, 16, 'Raisin Rolls (2 In 1 Pack)', 4.00, 200, '21', 'product_images/42.png', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 1, '2017-10-31 10:45:29', '2017-10-31 10:54:25'),
(27, 7, 16, 'Rolls Chocolate (3 Pcs)', 5.00, 250, '22', 'product_images/46.png', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 1, '2017-10-31 10:46:15', '2017-10-31 10:55:13'),
(29, 9, 2, 'Fresh Cauliflower (2 No\'s)', 5.00, 500, '25', 'product_images/30.png', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 1, '2017-10-31 10:58:20', '2017-10-31 11:23:17'),
(30, 9, 2, 'Fresh Brinjal Bharta (1 Kg)', 2.00, 1000, '30', 'product_images/31.png', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 1, '2017-10-31 11:18:23', '2017-10-31 11:21:20'),
(31, 9, 2, 'Fresh Basket Onion (1 Kg)', 5.00, 500, '31', 'product_images/33.png', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 1, '2017-10-31 11:19:15', '2017-10-31 11:21:39'),
(32, 9, 2, 'Fresh Muskmelon (1 Kg)', 5.00, 2000, '32', 'product_images/34.png', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 1, '2017-10-31 11:20:03', '2017-10-31 11:20:45');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `slider_text_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_text_two` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_text_three` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_text_one`, `slider_text_two`, `slider_text_three`, `slider_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(5, 'Make Your', 'Food', 'With Spicy', 'slider_images/1.jpg', 1, '2017-10-24 11:17:29', '2017-10-24 11:17:29'),
(6, 'upto', '50%', 'off.', 'slider_images/2.jpg', 1, '2017-10-24 11:21:08', '2017-10-24 11:21:08'),
(7, 'Make Your', 'Food', 'With Spicy', 'slider_images/3.jpg', 1, '2017-10-24 11:22:11', '2017-10-24 11:22:11');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `member_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `member_name`, `member_designation`, `member_message`, `team_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'MARTIN PAUL', 'Manager', 'fdgfgfg', 'team_images/32.jpg', 1, '2017-10-22 04:02:45', '2017-10-23 01:29:23'),
(2, 'MICHAEL RICK', 'Supervisor', 'fjdafkjfk', 'team_images/33.jpg', 1, '2017-10-23 11:50:38', '2017-10-23 11:50:38'),
(3, 'THOMAS CARL', 'Supervisor', 'hskhsjkks', 'team_images/34.jpg', 1, '2017-10-23 11:51:13', '2017-10-23 12:30:10'),
(5, 'LAURA LEE', 'CEO', 'fdfdf', 'team_images/35.jpg', 1, '2017-10-23 11:51:49', '2017-10-23 11:51:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_level` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `access_level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nazmul', 'najmul@gmail.com', '$2y$10$6BTorVqFVvGXVencz4ZEhOpDcjhExnAOuU3J9AgSgLiBsBA6iWa0i', 1, 'EFFgTsa6PU8BSoQTPRntPKZ29BOakBNZu6NPTxk2hroaoXrcidOrlTPEYBpP', '2017-10-18 12:28:28', '2017-10-24 12:18:17'),
(2, 'nazmul', 'najmulh62@gmail.com', '$2y$10$pFUJn/KUebpPWhZBcTboEeykWHPFK47pTDuRLLlsutznj44DjWdmS', 1, NULL, '2017-10-24 12:20:12', '2017-10-24 12:20:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ecommerces`
--
ALTER TABLE `ecommerces`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ecommerces`
--
ALTER TABLE `ecommerces`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
