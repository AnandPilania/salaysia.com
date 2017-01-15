-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Oct 11, 2016 at 10:57 PM
-- Server version: 5.5.49-cll-lve
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `testsalayasia`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `login_with` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `usertype` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_role` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
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
  `dob` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `study_plan` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `facebook_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `twitter_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `linkedin_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dribbble_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `instagram_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `facebook_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `google_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login_with`, `usertype`, `user_role`, `first_name`, `last_name`, `email`, `password`, `gender`, `image_icon`, `mobile`, `contact_email`, `website`, `address`, `dob`, `study_plan`, `facebook_url`, `twitter_url`, `linkedin_url`, `dribbble_url`, `instagram_url`, `facebook_id`, `google_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '', 'Admin', '', 'John', 'Deo', 'kulwinder.waveinfotech.biz@gmail.com', '$2y$10$jhKBxtk8b9ufVcAdeD3T9uhBLmHvPDQfIbobSfkrQoOT4mLDNDnc6', '', 'upload/members/john-84f8f2c1e72fce52d8b6d017aff5e2bf-b.jpg', '', 'info@escortguidedirectory.com', '', '', '', '', '', '', '', '', '', '', '', 'Nktmeqtn3nc8Rq41V2CQxH96AI4vZkcXARlmHsA7EAzRwruIAsoaLIrfRdbm', '2016-09-14 07:12:52', '2016-10-11 14:28:34'),
(8, '', 'User', '', 'Daniel', 'Onwude', 'info@dicowebsolution.com', '$2y$10$PRrARo4uBzJhXB/57kI8juDwnCbIgdpvZnrqbNE3Oe7LaHTWuLM22', '', NULL, '08065634738', 'daneng2005@gmail.com', '', '', '', '', '', '', '', '', '', '', '', NULL, '2016-10-11 12:55:54', '2016-10-11 12:55:54'),
(6, '', 'User', '', 'dave', 'dave', 'kulwinder.waveinfo@gmail.com', '$2y$10$n0y3wxqNn5t2QknifVO3KehSeqCQhecd8uNgttLczvypX.BG5dBry', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', 'iinghsF9icSJdvWAB6mvwE90Bpi4r1Txo3LDb44vqRTqCo212CcHkRAJRxkV', '2016-09-19 07:22:06', '2016-10-10 17:31:45'),
(12, '', 'User', 'Regular user', 'cgfg', 'gdfgdg', 'kulwinder.waveinfotech.biz1@gmail.com', '$2y$10$Bac1i.QV4VN.TPQfrHdOV.3ctZd6vEaga6V9i4YuFUn.77qaAg8CC', '', NULL, '243432', '', '', '', '11-Oct-2016', '2', '', '', '', '', '', '', '', NULL, '2016-10-11 15:31:32', '2016-10-11 15:31:32');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
