-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2016 at 09:53 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testsalayasia`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses_trans`
--

CREATE TABLE `courses_trans` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(550) COLLATE utf8_unicode_ci NOT NULL,
  `lang` varchar(2) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `courses_trans`
--

INSERT INTO `courses_trans` (`id`, `title`, `category`, `level`, `duration`, `type`, `description`, `lang`) VALUES
(1, 'المحاسبة', 'الأعمال', 'خريج,لغة', '3-5 سنوات', 'دوام جزئي', '<font><font>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </font><font>Aeneas advantage Reserved needs. </font><font>Aeneas mass. </font><font>Et magnis dis parturient montes Cras iaculis justo eu libero. </font><font>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </font><font>There is no recipe for a mass</font></font>', 'ar'),
(2, 'التكنولوجيا الحيوية', 'الطب والصحة', 'خريج', '1-5 سنوات', 'دوام جزئي', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo\r\n ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis\r\n dis parturient montes, nascetur ridiculus mus. Donec quam felis, \r\nultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa\r\n quis enim', 'ar'),
(4, 'الهندسة المدنية', 'الهندسة', 'دراسات عليا', '3 سنوات', 'دوام كامل', '<font><font>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </font><font>Aeneas advantage Reserved needs. </font><font>Aeneas mass. </font><font>Et magnis dis parturient montes Cras iaculis justo eu libero. </font><font>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </font><font>There is no recipe for a mass</font></font>', 'ar'),
(5, 'علوم الحاسوب وتكنولوجيا المعلومات', 'علوم الحاسب', 'خريج', '3-5 سنوات', 'دوام كامل', '<font><font><font><font>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </font></font></font><font><font><font>Aeneas advantage Reserved needs. </font></font></font><font><font><font>Aeneas, Mass. </font></font></font><font><font><font>Et magnis dis parturient montes Cras iaculis justo eu libero. </font></font></font><font><font><font>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </font></font></font><font><font><font>There is no recipe for a mass</font></font></font></font>', 'ar'),
(8, 'ماجستير في إدارة الأعمال', 'الأعمال', 'دراسات عليا', 'سنتين', 'دوام جزئي', '<font><font>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </font><font>Aeneas advantage Reserved needs. </font><font>Aeneas mass. </font><font>Et magnis dis parturient montes Cras iaculis justo eu libero. </font><font>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </font><font>There is no recipe for a mass</font></font>', 'ar'),
(9, 'التمريض', 'الطب و الصحة', 'خريج', '1-5 سنوات', 'دوام كامل', '<font><font>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </font><font>Aeneas advantage Reserved needs. </font><font>Aeneas mass. </font><font>Et magnis dis parturient montes Cras iaculis justo eu libero. </font><font>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </font><font>There is no recipe for a mass</font></font>', 'ar'),
(10, 'الهندسة الزراعية', 'الهندسة', 'خريج', 'سنتين', 'دوام كامل', '', 'ar'),
(13, 'هندسة العمليات', 'الهندسة', 'دبلومة', '1-5 سنوات', 'دوام كامل', '', 'ar'),
(15, 'بكاريوس التكنولوجيا الحيوية', 'العلوم', 'طالب', '3 سنوات', 'دوام كامل', '<div style="text-align: justify;"><span style="color: rgb(0, 0, 0);"><span style="font-family: Arial;">\n                                                         العالم، ويعتبر على نطاق واسع كمحرك جديد للنمو ل\n                                                         الاقتصاد العالمي. تغطية الرعاية الطبية والصحية\n                                                         الصناعات والقطاعات الزراعية والصناعية \n                                  ', 'ar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses_trans`
--
ALTER TABLE `courses_trans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses_trans`
--
ALTER TABLE `courses_trans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
