-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2016 at 12:16 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `escoawwx_david`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `meta_keywords` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_icon`, `category_name`, `category_slug`, `status`, `meta_keywords`, `meta_description`) VALUES
(1, 'fa-suitcase', 'Travel', 'travel', 0, '', ''),
(2, 'fa-female', 'Fashion', 'fashion', 0, '', ''),
(3, 'fa-magnet', 'Electronics', 'electronics', 0, '', ''),
(4, 'fa-university', 'Insurance', 'insurance', 0, '', ''),
(5, 'fa-cutlery', 'Food & Drinks', 'fooddrinks', 0, '', ''),
(6, 'fa-ticket', 'Other', 'other', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `on_post` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `from_user` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

CREATE TABLE `listings` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_cat_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `featured_listing` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `listing_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `video` text COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `map_lat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `map_long` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amenities` text COLLATE utf8_unicode_ci NOT NULL,
  `working_hours_mon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `working_hours_tue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `working_hours_wed` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `working_hours_thurs` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `working_hours_fri` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `working_hours_sat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `working_hours_sun` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `featured_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `review_avg` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`id`, `user_id`, `cat_id`, `sub_cat_id`, `location_id`, `featured_listing`, `title`, `listing_slug`, `description`, `keyword`, `video`, `address`, `map_lat`, `map_long`, `amenities`, `working_hours_mon`, `working_hours_tue`, `working_hours_wed`, `working_hours_thurs`, `working_hours_fri`, `working_hours_sat`, `working_hours_sun`, `featured_image`, `review_avg`, `status`, `created_at`, `updated_at`) VALUES
(9, 1, 3, 0, 0, 0, 'Dummy product', 'dummy-product', 'Lorem Ipsum has been the industry''s standard dummy text ever since the \r\n1500s, when an unknown printer took a galley of type and scrambled it to\r\n make a type specimen book. It has survived not only five centuries, but\r\n also the leap into electronic typesetting, remaining essentially \r\nunchanged. It was popularised in the 1960s with the release of Letraset \r\nsheets containing Lorem Ipsum passages, and more recently with desktop \r\npublishing software like Aldus PageMaker including versions of Lorem \r\nIpsum', '', '', 'fdgdfgdfgd', '', '', 'add a amenities', '', '', '', '', '', '', '', 'dummy-product_1475664801', '', 1, '2016-10-04 06:37:34', '2016-10-05 05:23:21'),
(10, 1, 1, 0, 0, 0, 'Dummy product2', 'dummy-product2', 'Lorem Ipsum has been the industry''s standard dummy text ever since the \r\n1500s, when an unknown printer took a galley of type and scrambled it to\r\n make a type specimen book. It has survived not only five centuries, but\r\n also the leap into electronic typesetting, remaining essentially \r\nunchanged. It was popularised in the 1960s with the release of Letraset \r\nsheets containing Lorem Ipsum passages, and more recently with desktop \r\npublishing software like Aldus PageMaker including versions of Lorem \r\nIpsum', '', '', 'fdgdfgdfgd', '', '', 'add a amenities', '', '', '', '', '', '', '', 'dummy-product2_1475664768', '', 1, '2016-10-04 06:37:34', '2016-10-05 05:22:48'),
(11, 1, 5, 0, 0, 0, 'Dummy product3', 'dummy13', 'Lorem Ipsum has been the industry''s standard dummy text ever since the \r\n1500s, when an unknown printer took a galley of type and scrambled it to\r\n make a type specimen book. It has survived not only five centuries, but\r\n also the leap into electronic typesetting, remaining essentially \r\nunchanged. It was popularised in the 1960s with the release of Letraset \r\nsheets containing Lorem Ipsum passages, and more recently with desktop \r\npublishing software like Aldus PageMaker including versions of Lorem \r\nIpsum', '', '', 'fdgdfgdfgd', '', '', 'add a amenities', '', '', '', '', '', '', '', 'dummy-product3_1475664570', '', 1, '2016-10-04 06:37:34', '2016-10-05 05:19:32'),
(12, 1, 1, 0, 0, 0, 'Dummy product4', 'dummy-product4', 'Lorem Ipsum has been the industry''s standard dummy text ever since the \r\n1500s, when an unknown printer took a galley of type and scrambled it to\r\n make a type specimen book. It has survived not only five centuries, but\r\n also the leap into electronic typesetting, remaining essentially \r\nunchanged. It was popularised in the 1960s with the release of Letraset \r\nsheets containing Lorem Ipsum passages, and more recently with desktop \r\npublishing software like Aldus PageMaker including versions of Lorem \r\nIpsum', '', '', 'fdgdfgdfgd', '', '', 'add a amenities', '', '', '', '', '', '', '', 'dummy-product4_1475664830', '', 1, '2016-10-04 06:37:34', '2016-10-05 05:23:50'),
(13, 1, 1, 0, 0, 0, 'Dummy product5', 'dummy-product5', 'Lorem Ipsum has been the industry''s standard dummy text ever since the \r\n1500s, when an unknown printer took a galley of type and scrambled it to\r\n make a type specimen book. It has survived not only five centuries, but\r\n also the leap into electronic typesetting, remaining essentially \r\nunchanged. It was popularised in the 1960s with the release of Letraset \r\nsheets containing Lorem Ipsum passages, and more recently with desktop \r\npublishing software like Aldus PageMaker including versions of Lorem \r\nIpsum', '', '', 'fdgdfgdfgd', '', '', 'add a amenities', '', '', '', '', '', '', '', 'dummy-product5_1475664864', '', 1, '2016-10-04 06:37:34', '2016-10-05 05:24:24'),
(14, 1, 2, 0, 0, 0, 'Dummy product6', 'dummy-product6', 'Lorem Ipsum has been the industry''s standard dummy text ever since the \r\n1500s, when an unknown printer took a galley of type and scrambled it to\r\n make a type specimen book. It has survived not only five centuries, but\r\n also the leap into electronic typesetting, remaining essentially \r\nunchanged. It was popularised in the 1960s with the release of Letraset \r\nsheets containing Lorem Ipsum passages, and more recently with desktop \r\npublishing software like Aldus PageMaker including versions of Lorem \r\nIpsum', '', '', 'fdgdfgdfgd', '', '', 'add a amenities', '', '', '', '', '', '', '', 'dummy-product6_1475664888', '', 1, '2016-10-04 06:37:34', '2016-10-05 05:24:49'),
(15, 1, 4, 4, 0, 0, 'Dummy product7', 'dummy-product7', 'Lorem Ipsum has been the industry''s standard dummy text ever since the \r\n1500s, when an unknown printer took a galley of type and scrambled it to\r\n make a type specimen book. It has survived not only five centuries, but\r\n also the leap into electronic typesetting, remaining essentially \r\nunchanged. It was popularised in the 1960s with the release of Letraset \r\nsheets containing Lorem Ipsum passages, and more recently with desktop \r\npublishing software like Aldus PageMaker including versions of Lorem \r\nIpsum', '', '', 'fdgdfgdfgd', '', '', 'add a amenities', '', '', '', '', '', '', '', 'dummy-product7_1475664909', '', 1, '2016-10-04 06:37:34', '2016-10-05 05:25:09'),
(16, 1, 3, 6, 0, 0, 'Dummy product8', 'dummy-product8', 'Lorem Ipsum has been the industry''s standard dummy text ever since the \r\n1500s, when an unknown printer took a galley of type and scrambled it to\r\n make a type specimen book. It has survived not only five centuries, but\r\n also the leap into electronic typesetting, remaining essentially \r\nunchanged. It was popularised in the 1960s with the release of Letraset \r\nsheets containing Lorem Ipsum passages, and more recently with desktop \r\npublishing software like Aldus PageMaker including versions of Lorem \r\nIpsum', '', '', 'fdgdfgdfgd', '', '', 'add a amenities', '', '', '', '', '', '', '', 'dummy-product8_1475664931', '', 1, '2016-10-04 06:37:34', '2016-10-05 05:25:32'),
(17, 1, 5, 1, 0, 0, 'Dummy product9', 'dummy-product9', 'Lorem Ipsum has been the industry''s standard dummy text ever since the \r\n1500s, when an unknown printer took a galley of type and scrambled it to\r\n make a type specimen book. It has survived not only five centuries, but\r\n also the leap into electronic typesetting, remaining essentially \r\nunchanged. It was popularised in the 1960s with the release of Letraset \r\nsheets containing Lorem Ipsum passages, and more recently with desktop \r\npublishing software like Aldus PageMaker including versions of Lorem \r\nIpsum', '', '', 'fdgdfgdfgd', '', '', 'add a amenities', '', '', '', '', '', '', '', 'dummy-product9_1475664952', '', 1, '2016-10-04 06:37:34', '2016-10-05 05:25:52'),
(18, 1, 3, 6, 0, 0, 'Dummy product10', 'dummy-product10', 'Lorem Ipsum has been the industry''s standard dummy text ever since the \r\n1500s, when an unknown printer took a galley of type and scrambled it to\r\n make a type specimen book. It has survived not only five centuries, but\r\n also the leap into electronic typesetting, remaining essentially \r\nunchanged. It was popularised in the 1960s with the release of Letraset \r\nsheets containing Lorem Ipsum passages, and more recently with desktop \r\npublishing software like Aldus PageMaker including versions of Lorem \r\nIpsum', '', '', 'fdgdfgdfgd', '', '', 'add a amenities', '', '', '', '', '', '', '', 'dummy-product10_1475664975', '', 1, '2016-10-04 06:37:34', '2016-10-05 05:26:15'),
(19, 1, 1, 0, 0, 0, 'Dummy product65', 'dummy-product65', 'Lorem Ipsum has been the industry''s standard dummy text ever since the \r\n1500s, when an unknown printer took a galley of type and scrambled it to\r\n make a type specimen book. It has survived not only five centuries, but\r\n also the leap into electronic typesetting, remaining essentially \r\nunchanged. It was popularised in the 1960s with the release of Letraset \r\nsheets containing Lorem Ipsum passages, and more recently with desktop \r\npublishing software like Aldus PageMaker including versions of Lorem \r\nIpsum', '', '', 'fdgdfgdfgd', '', '', 'add a amenities', '', '', '', '', '', '', '', 'dummy-product6_1475664888', '', 1, '2016-10-04 06:37:34', '2016-10-05 05:24:49'),
(20, 1, 4, 0, 0, 0, 'Dummy product69', 'dummy-product69', 'Lorem Ipsum has been the industry''s standard dummy text ever since the \r\n1500s, when an unknown printer took a galley of type and scrambled it to\r\n make a type specimen book. It has survived not only five centuries, but\r\n also the leap into electronic typesetting, remaining essentially \r\nunchanged. It was popularised in the 1960s with the release of Letraset \r\nsheets containing Lorem Ipsum passages, and more recently with desktop \r\npublishing software like Aldus PageMaker including versions of Lorem \r\nIpsum', '', '', 'fdgdfgdfgd', '', '', 'add a amenities', '', '', '', '', '', '', '', 'dummy-product6_1475664888', '', 1, '2016-10-04 06:37:34', '2016-10-05 05:24:49'),
(21, 1, 2, 0, 0, 0, 'Dummy product56', 'dummy-product56', 'Lorem Ipsum has been the industry''s standard dummy text ever since the \r\n1500s, when an unknown printer took a galley of type and scrambled it to\r\n make a type specimen book. It has survived not only five centuries, but\r\n also the leap into electronic typesetting, remaining essentially \r\nunchanged. It was popularised in the 1960s with the release of Letraset \r\nsheets containing Lorem Ipsum passages, and more recently with desktop \r\npublishing software like Aldus PageMaker including versions of Lorem \r\nIpsum', '', '', 'fdgdfgdfgd', '', '', 'add a amenities', '', '', '', '', '', '', '', 'dummy-product5_1475664864', '', 1, '2016-10-04 06:37:34', '2016-10-05 05:24:24');

-- --------------------------------------------------------

--
-- Table structure for table `listings_reviews`
--

CREATE TABLE `listings_reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `listing_id` int(11) NOT NULL,
  `reviews_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `review` text COLLATE utf8_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `listing_gallery`
--

CREATE TABLE `listing_gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `listing_id` int(11) NOT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `listing_gallery`
--

INSERT INTO `listing_gallery` (`id`, `listing_id`, `image_name`) VALUES
(4, 9, 'dummy_8651-b.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(10) UNSIGNED NOT NULL,
  `location_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_04_18_094331_create_settings_table', 1),
('2016_05_11_101945_create_categories_table', 1),
('2016_05_11_102900_create_listings_table', 1),
('2016_05_11_102933_create_listings_reviews_table', 1),
('2016_05_11_102956_create_listing_gallery_table', 1),
('2016_05_11_103038_create_location_table', 1),
('2016_05_11_103103_create_sub_categories_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('dave@coleswood.co.uk', '49240b30aa358b307305cd3e3eda233c9a232ed704e8381e16505ae954290186', '2016-09-19 07:28:25'),
('dave_gregs@hotmail.com', '26aa2596184eeb3161c1ccefc78402608e90558b704d3abe6f1fc4ce7aa09e40', '2016-09-19 07:20:55'),
('kuldip@viaviweb.com', 'f9686db553c200fe2a403263bc29aa103acfb8725ad672af4bd1600ab59bc65e', '2016-09-19 07:17:19');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `title`, `body`, `slug`, `active`, `created_at`, `updated_at`) VALUES
(1, 1, 'dummyn', '																								<p>Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n						\r\n		\r\n						\r\n		\r\n						\r\n		\r\n						\r\n		', 'dummy', 1, '2016-09-16 02:26:07', '2016-10-05 02:16:39'),
(4, 1, 'fdgdgy4eyrytr', '<p>Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'fdgdgy4eyrytr', 1, '2016-09-19 07:54:06', '2016-09-19 07:54:06'),
(5, 1, 'fdghfhfhgfhgfhgfhgfhgf', '<p>Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'fdghfhfhgfhgfhgfhgfhgf', 1, '2016-09-20 02:03:49', '2016-09-20 02:03:49'),
(6, 1, 'kljkl', '<p>Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'kljkl', 1, '2016-09-20 02:04:01', '2016-09-20 02:04:01'),
(7, 1, 'jtujyyu', '<p>Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'jtujyyu', 1, '2016-09-20 02:04:11', '2016-09-20 02:04:11'),
(10, 1, 'hello', 'Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'hello', 1, '2016-10-05 02:19:25', '2016-10-05 02:19:25');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `site_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_favicon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `google_map_api` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_header_code` text COLLATE utf8_unicode_ci NOT NULL,
  `site_footer_code` text COLLATE utf8_unicode_ci NOT NULL,
  `site_copyright` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `addthis_share_code` text COLLATE utf8_unicode_ci NOT NULL,
  `disqus_comment_code` text COLLATE utf8_unicode_ci NOT NULL,
  `facebook_comment_code` text COLLATE utf8_unicode_ci NOT NULL,
  `home_slide_image1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_slide_image2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_slide_image3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_slide_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_slide_text` text COLLATE utf8_unicode_ci NOT NULL,
  `page_bg_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `about_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `about_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `contact_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_address` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_lat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_long` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `terms_of_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `terms_of_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `privacy_policy_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `privacy_policy_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `facebook_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `twitter_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gplus_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `linkedin_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `site_email`, `site_logo`, `site_favicon`, `site_keywords`, `site_description`, `google_map_api`, `site_header_code`, `site_footer_code`, `site_copyright`, `addthis_share_code`, `disqus_comment_code`, `facebook_comment_code`, `home_slide_image1`, `home_slide_image2`, `home_slide_image3`, `home_slide_title`, `home_slide_text`, `page_bg_image`, `about_title`, `about_description`, `contact_title`, `contact_address`, `contact_email`, `contact_number`, `contact_lat`, `contact_long`, `terms_of_title`, `terms_of_description`, `privacy_policy_title`, `privacy_policy_description`, `facebook_url`, `twitter_url`, `gplus_url`, `linkedin_url`) VALUES
(1, 'ShopAll', 'info@shopall.com', 'logo.png', 'favicon.png', '', '', '', '', '', 'Copyright © 2016 The ShopAll ', '', '', '', 'home_slide_image1.png', 'home_slide_image2.png', 'home_slide_image3.png', '', '', 'page_bg_image.png', 'About Us', '', 'Contact Us', '', 'info@shopall.com', '', '', '', 'Terms and Condition', '', 'Privacy Policy', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_category_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `meta_keywords` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `cat_id`, `sub_category_name`, `sub_category_slug`, `status`, `meta_keywords`, `meta_description`) VALUES
(1, 1, 'Flight', 'flight', 0, '', ''),
(2, 1, 'Car Rental', 'car-rental', 0, '', ''),
(3, 2, 'Clothing', 'clothing', 0, '', ''),
(4, 2, 'Footwear', 'footwear', 0, '', ''),
(5, 3, 'Gaming', 'gaming', 0, '', ''),
(6, 3, 'Camera', 'camera', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `auther_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `testimonial_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `featured_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `auther_name`, `title`, `testimonial_slug`, `description`, `featured_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'subamin', 'Testimonial', 'testimonial', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.', 'testimonial_1475738742', 1, '2016-10-06 01:40:39', '2016-10-06 01:55:42'),
(2, 'admin', 'Testimonial2', 'testimonial2', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.', 'testimonial2_1475738384', 1, '2016-10-06 01:49:45', '2016-10-06 01:51:07'),
(3, 'admin', 'Testimonial3', 'testimonial3', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.', 'testimonial3_1475738437', 1, '2016-10-06 01:50:37', '2016-10-06 01:51:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `login_with` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `usertype` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `image_icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `facebook_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `twitter_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `linkedin_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dribbble_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `instagram_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `facebook_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `google_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login_with`, `usertype`, `first_name`, `last_name`, `email`, `password`, `gender`, `image_icon`, `mobile`, `contact_email`, `website`, `address`, `facebook_url`, `twitter_url`, `linkedin_url`, `dribbble_url`, `instagram_url`, `facebook_id`, `google_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '', 'Admin', 'John', 'Deo', 'dave_gregs@hotmail.com', '$2y$10$XuSsTy3CYfsu/pUbaTNrL.BZWOqExYEzhjXe6FArNsbiq4CxiZQZe', '', 'upload/members/john-84f8f2c1e72fce52d8b6d017aff5e2bf-b.jpg', '', 'info@escortguidedirectory.com', '', '', '', '', '', '', '', '', '', 'vlynMwVjt8UOhZsb1upG3766hONY5JbQzSqsZF3OuBKijaPEHI0shvoyU1g8', '2016-09-14 07:12:52', '2016-10-05 07:46:49'),
(7, '', 'User', 'Gina', 'West', 'amassageinlondon@gmail.com', '$2y$10$inFA6GEK89YPrNOtz6UBquRW6Ij4kdYFlIGXTGbk8IujIYDt.CIBy', '', NULL, '', '', 'http://carezzialondontantric.com/', '', 'https://www.facebook.com/carezzialondontantric', 'https://twitter.com/carezziatantric', '', '', '', '', '', NULL, '2016-09-20 11:25:29', '2016-09-20 12:51:42'),
(3, '', 'User', 'John', 'Jones', 'info@cheapwebhosting-uk.co.uk', '$2y$10$bbmW6RxTRux5TMpXLd51/.Gd2Y.IanMKUdxrsYBmA3USZdhAzHpby', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, '2016-09-19 06:42:56', '2016-09-19 06:42:56'),
(6, '', 'User', 'dave', 'dave', 'dave@coleswood.co.uk', '$2y$10$n0y3wxqNn5t2QknifVO3KehSeqCQhecd8uNgttLczvypX.BG5dBry', '', NULL, '', '', '', '', '', '', '', '', '', '', '', 'iinghsF9icSJdvWAB6mvwE90Bpi4r1Txo3LDb44vqRTqCo212CcHkRAJRxkV', '2016-09-19 07:22:06', '2016-09-20 08:53:12');

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_on_post_foreign` (`on_post`),
  ADD KEY `comments_from_user_foreign` (`from_user`);

--
-- Indexes for table `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listings_reviews`
--
ALTER TABLE `listings_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listing_gallery`
--
ALTER TABLE `listing_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_title_unique` (`title`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_author_id_foreign` (`author_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `listings`
--
ALTER TABLE `listings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `listings_reviews`
--
ALTER TABLE `listings_reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `listing_gallery`
--
ALTER TABLE `listing_gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
