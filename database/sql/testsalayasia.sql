-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2017 at 07:19 PM
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
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `brand_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `services` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `products` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `team` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `featured_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `title`, `brand_slug`, `description`, `services`, `products`, `team`, `contact_us`, `featured_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Erican', 'erican', '', '', '', '', '', 'erican_1476940673', 1, '2016-10-06 01:40:39', '2016-10-20 12:17:53'),
(2, 'help', 'help', '', '', '', '', '', 'help_1476940707', 1, '2016-10-06 01:49:45', '2016-10-20 12:18:27'),
(4, 'limko', 'limko', '', '', '', '', '', 'limko_1476940738', 1, '2016-10-12 05:59:42', '2016-10-20 12:18:58'),
(5, 'Mahsa', 'mahsa', '', '', '', '', '', 'mahsa_1476940782', 1, '2016-10-12 06:00:03', '2016-10-20 12:19:42'),
(6, 'Apu', 'apu', 'Description ', 'Services ', 'Products ', 'Team ', 'Contact Us ', 'apu_1476940631', 1, '2016-10-12 06:14:09', '2016-12-02 13:12:25'),
(7, 'multimedia', 'multimedia', '', '', '', '', '', 'multimedia_1476940807', 1, '2016-10-20 12:20:07', '2016-10-20 12:27:18'),
(8, 'Segi', 'segi', '', '', '', '', '', 'segi_1476940826', 1, '2016-10-20 12:20:26', '2016-10-20 12:27:21'),
(9, 'ucsi', 'ucsi', '', '', '', '', '', 'ucsi_1476940841', 1, '2016-10-20 12:20:41', '2016-10-20 12:27:25'),
(10, 'UkM', 'ukm', '', '', '', '', '', 'ukm_1476940866', 1, '2016-10-20 12:21:06', '2016-10-20 12:27:29'),
(11, 'university of Malaya', 'university-of-malaya', '', '', '', '', '', 'university-of-malaya_1476940892', 1, '2016-10-20 12:21:32', '2016-10-20 12:28:10'),
(12, 'UMK', 'umk', '', '', '', '', '', 'umk_1476940906', 1, '2016-10-20 12:21:46', '2016-10-20 12:27:32'),
(13, 'UMP', 'ump', '', '', '', '', '', 'ump_1476940932', 1, '2016-10-20 12:22:13', '2016-10-20 12:27:39'),
(14, 'UNIKL', 'unikl', '', '', '', '', '', 'unikl_1476940950', 1, '2016-10-20 12:22:30', '2016-10-20 12:27:45'),
(15, 'UNIMAp', 'unimap', '', '', '', '', '', 'unimap_1476940972', 1, '2016-10-20 12:22:52', '2016-10-20 12:27:50'),
(16, 'UNImas', 'unimas', '', '', '', '', '', 'unimas_1476940991', 1, '2016-10-20 12:23:12', '2016-10-20 12:27:54'),
(17, 'unisel', 'unisel', '', '', '', '', '', 'unisel_1476941008', 1, '2016-10-20 12:23:29', '2016-10-20 12:27:59'),
(18, 'Uniten', 'uniten', '', '', '', '', '', 'uniten_1476941029', 1, '2016-10-20 12:23:49', '2016-10-20 12:28:05'),
(19, 'UPM', 'upm', '', '', '', '', '', 'upm_1476941046', 1, '2016-10-20 12:24:06', '2016-10-20 12:28:14'),
(20, 'Usim', 'usim', '', '', '', '', '', 'usim_1476941062', 1, '2016-10-20 12:24:22', '2016-10-20 12:28:19'),
(21, 'USM', 'usm', '', '', '', '', '', 'usm_1476941076', 1, '2016-10-20 12:24:36', '2016-10-20 12:28:37'),
(22, 'UTAR', 'utar', '', '', '', '', '', 'utar_1476941090', 1, '2016-10-20 12:24:50', '2016-10-20 12:28:44'),
(23, 'UTEM', 'utem', '', '', '', '', '', 'utem_1476941108', 1, '2016-10-20 12:25:09', '2016-10-20 12:28:50'),
(24, 'UTHM', 'uthm', '', '', '', '', '', 'uthm_1476941128', 1, '2016-10-20 12:25:28', '2016-10-20 12:28:55'),
(25, 'UTIM', 'utim', '', '', '', '', '', 'utim_1476941144', 1, '2016-10-20 12:25:44', '2016-10-20 12:29:00'),
(26, 'UUm', 'uum', '', '', '', '', '', 'uum_1476941225', 1, '2016-10-20 12:27:06', '2016-10-20 12:29:04');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL,
  `category_icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `meta_keywords` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `aim_category` text COLLATE utf8_unicode_ci NOT NULL,
  `careers_category` text COLLATE utf8_unicode_ci NOT NULL,
  `admission_category` text COLLATE utf8_unicode_ci NOT NULL,
  `featured_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `category_icon`, `category_name`, `category_slug`, `status`, `meta_keywords`, `description`, `aim_category`, `careers_category`, `admission_category`, `featured_image`) VALUES
(9, 0, 'fa-rub', 'ENGINEERING', 'global-economic', 0, '', 'Till the one day when the lady met this fellow and they knew it was much more than a hunch. It’s time to put on makeup.', '', '', '', 'deals_1478329992'),
(11, 0, 'fa-rub', 'BUSINESS', 'business', 0, '', 'Till the one day when the lady met this fellow and they knew it was much more than a hunch. It''s time to put on makeup.', 'The aim of the category', 'Careers for the student graduate from this category', 'Admission Requirements', 'business_1478333156'),
(12, 0, 'fa-pagelines', 'COMPUTER SCIENCE', 'computer-science', 0, '', 'Till the one day when the lady met this fellow and they knew it was much more than a hunch. It’s time to put on makeup.', '', '', '', 'computer-science_1478333343'),
(13, 0, 'fa-bell-o', 'MEDICEN & HEALTH', 'medicene-pharmacy-health-care', 0, '', 'Till the one day when the lady met this fellow and they knew it was much more than a hunch. It’s time to put on makeup.', '', '', '', 'medicene-pharmacy-health-care_1478333444'),
(14, 0, 'fa-rouble', 'SCIENCE', 'political-science', 0, '', 'Till the one day when the lady met this fellow and they knew it was much more than a hunch. It’s time to put on makeup.', '', '', '', 'political-science_1478333515'),
(15, 0, '', 'SOCIAL SCIENCE', 'youth-study', 0, '', 'Till the one day when the lady met this fellow and they knew it was much more than a hunch. It’s time to put on makeup.', '', '', '', 'youth-study_1478333584');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE `city` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_id` int(11) NOT NULL,
  `city_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `famous_places` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `featured_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `country_id`, `city_name`, `slug`, `famous_places`, `description`, `featured_image`, `status`, `created_at`, `updated_at`) VALUES
(18, 5, 'New York', 'new-york', 'red fort', 'df sdf', 'new-york_1480054812', 0, NULL, '2016-11-25 13:20:12'),
(23, 9, 'KL', 'akdlkd', 'askfnkjlaBF', '', 'akdlkd_1480090495', 0, '2016-11-25 23:14:55', '2016-11-25 23:14:55'),
(22, 5, 'Florida', 'florida', '', '', 'florida_1480065624', 0, '2016-11-25 16:20:25', '2016-11-25 16:20:25'),
(21, 4, 'New city', 'new-city', 'red fort', '', 'new-city_1480062183', 0, '2016-11-25 15:23:03', '2016-11-25 15:23:03');

-- --------------------------------------------------------

--
-- Table structure for table `city_gallery`
--

DROP TABLE IF EXISTS `city_gallery`;
CREATE TABLE `city_gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `listing_id` int(11) NOT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `city_gallery`
--

INSERT INTO `city_gallery` (`id`, `listing_id`, `image_name`) VALUES
(15, 21, 'new-city_4159-b.jpg'),
(14, 21, 'new-city_6597-b.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
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
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `auther_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `testimonial_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `featured_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `auther_name`, `title`, `testimonial_slug`, `description`, `featured_image`, `status`, `created_at`, `updated_at`) VALUES
(5, '', 'USA', 'usa', '<p>For over three generations, the USA has been the preferred \r\ndestination of choice for students from India and other South Asian \r\ncountries. This is no surprise considering the fact that American \r\ninstitutions consistently feature in the top Universities of the world. \r\nIn the QS World University Rankings 2015-16, five of the top 10 \r\nUniversities are American institutions. They are as follows:</p>\r\n<ol><li>Massachusetts Institute of Technology (MIT) - 1st position internationally</li><li>Harvard University - 2nd position internationally</li><li>Stanford University - 3rd position internationally</li><li>California Institute of Technology (Caltech) - 5th position internationally</li><li>University of Chicago - 10th position internationally</li></ol>\r\n<h2>Why USA</h2>\r\n<ul><li>Strong Asian community presence in the major American cities.</li><li>The guarantee of a world-class education.</li><li>The wide variety of research-centric science and technology courses.</li><li>Job-oriented management courses.</li><li>Large number of scholarships and fellowships offered by institutions and the American government.</li><li>Part-time job opportunities while you are studying and career guidance after completion of studies.</li><li>An American degree is highly regarded by many employers around the world.</li><li>A vast country with varying landscape that offers a lot for the tourist and the nature-lover.</li></ul>\r\n<h2>The Value of the Dollar</h2>\r\n<p>The USA is made up of 50 states and is one of the largest countries \r\nin the world in terms of land mass and size. The country covers \r\ndifferent time zones and the climate varies from the freezing cold of \r\nAlaska to the pleasant tropical climate of Hawaii.</p>\r\n<p>Being the world''s most powerful economy, changes in the American \r\neconomy dictate the global economy. Be it the Great Depression of 1929 \r\nor the latest recession, it is the American dollar that dictates terms \r\nin the modern world.</p>\r\n<p>With breath-taking natural beauty from the Grand Canyon to the \r\nNiagara Falls and man-made marvels like the Statue of Liberty, The \r\nGolden Gate Bridge, Disney Land, The Smithsonian Museum, The Library of \r\nthe Congress and much more; the country offers a lot for a traveller.</p>\r\n<p>There are a lot of <a href="http://www.hotcoursesabroad.com/india/fund-your-studies/how-to-get-scholarship-to-study-abroad/did-you-know-that-the-us-govt-can-pay-for-your-studies/" target="_blank">scholarships</a>&nbsp;options available for Indian students as well. These scholarships will help reduce the financial burden of studying in the US.</p>\r\n<h2>People</h2>\r\n<p>With a fair mix of people of Caucasian, African and Asian origin; the\r\n USA is a land of opportunity that offers shelter, support and success \r\nto those who work hard and persevere. Slavery might have been abolished \r\nlong back and an Afro-American may be the President of the USA; but it \r\nis an inconvenient truth that racism still exists in quite a few cities.</p>\r\n<p>Overall, the people are friendly, open-minded and very frank and love\r\n speaking to others. This is unlike life in the UK, where conversation \r\namong strangers in public places is rare.</p>\r\n<h2>Law and Safety</h2>\r\n<p>Post the horrific attacks on 9/11, the law enforcement agencies have \r\nbecome extremely strict. It is advisable that students travel in groups \r\nfor the sake of safety in numbers. It is important to keep one''s \r\nofficial documents like passport, <a href="http://www.hotcoursesabroad.com/india/get-your-visa/how-to-apply-for-a-visa/applying-for-a-us-student-visa/" target="_blank">visa</a>\r\n and identity cards safely. It is best to avoid any flashy jewellery and\r\n accessories. It is wise to keep your friends and local guardians \r\ninformed of your travel plans.</p>\r\n<h2>Life as a Student in the USA</h2>\r\n<p>As a student in the USA, it is important that one is aware of one''s \r\nrights and the local laws, which one should follow. All leading \r\ninstitutions conduct a ''Student Orientation Programme'', which helps the \r\nstudent acclimatise to life in the USA.</p>\r\n<p>It is best for students to stay on-campus as it offers quick access \r\nto learning resources and the company of friends. Participating in the \r\nextra-curricular activities organised by the institution allows students\r\n to make friends and gives them a chance to develop their hobbies. Most \r\ninstitutions have hobby-clubs and student organisations for hobbies as \r\ndiverse as photography, computer games and spirituality.</p>\r\n<p>Read more about <a href="http://www.hotcoursesabroad.com/india/know-your-study-destination/how-to-get-ready-for-the-new-place/life-in-the-us/" target="_blank">student life in the US.</a></p>\r\n<h2>Popular Courses</h2>\r\n<p>Research by leading educational agencies and student recruitment \r\nfirms suggest that the MBA and an MS in Computers, Bio-technology and \r\nElectronics are amongst the most popular courses in the USA. Other \r\nspecialised post-graduate courses in streams like medicine, cosmetic \r\nsurgery, para-psychology, diabetes-research and genetics are also \r\nextremely popular.</p>\r\n<h2>Highly Valued Degree</h2>\r\n<p>With stiff competition from countries like the UK, Singapore and \r\nAustralia; American institutions are going all out to woo students from \r\nAsian countries. The change in the value of the US Dollar and the poor \r\nperformance of some Asian currencies are worrying factors that may lead \r\nto a decline in the number of students opting for an education in the \r\nUSA.</p>\r\n<p>But in spite of all this, the value of an American University \r\neducation has not declined. A degree from a reputed American institute \r\nis valued highly all around the world and students who seek to impress \r\nemployers should seriously consider studying in the US.</p>', 'usa_1477565038', 1, '2016-10-27 14:21:35', '2016-10-27 17:43:58'),
(4, '', 'Australia', 'australia', '<div itemprop="articleBody" class="art rgt_cnt oview"><p>Australia\r\n is the sixth largest country in the world, in terms of total area. With\r\n the world''s 12th largest economy, it is also one of the wealthiest \r\ncountries in the world, offering a good quality of life.</p>\r\n<h2>The Land Down Under</h2>\r\n<p>From architectural wonders such as the iconic Sydney Opera House to \r\nthe Great Barrier Reef, the world''s largest coral reef stretching to \r\nmore than 1,600 miles, Australia has everything one could ever dream of.</p>\r\n<h2>As a Student Destination</h2>\r\n<p>Australia is a popular student destination, and international student\r\n numbers are expected to increase after the Australian Government''s \r\nrecent lowering of visa assessment levels for 38 countries worldwide, \r\ninclusive of India.</p>\r\n<p>Indian students make up more than 9 per cent of Australia''s student \r\npopulation. The new visa application rules require international \r\nstudents to show less documentation and less proof of financial support,\r\n much to the advantage of the students.</p>\r\n<h2>Top Five Unis</h2>\r\n<p>Here''s a look at the top five Australian Universities as per the latest QS World University Rankings:</p>\r\n<ol><li>Australian National University - 19th position internationally</li><li>The University of Melbourne - 42nd position internationally</li><li>The University of Sydney - 45th position internationally</li><li>The University of Queensland - 46th position internationally</li><li>The University of New South Wales - 46th position internationally</li></ol>\r\n<h2>Study Options</h2>\r\n<p>Australian Universities offer international students a range of \r\nlearning options — associate degrees, bachelor degrees, master degrees \r\nand PhD degrees. Of the total international student population, almost \r\n40% are engaged in higher education programs and nearly 18% in English \r\nlanguage programs.</p>\r\n<p>Academic programs are offered all across the country in the areas of \r\nbusiness, humanities, engineering, tourism, medicine, and more. \r\nScholarships are available for eligible students.</p>\r\n<h2>Tuition Rates</h2>\r\n<p>Education in Australia, contrary to popular belief is very much \r\naffordable. In general, a bachelor''s degree could cost as less as AUD \r\n10,000; vocational programs could cost around AUD 5,000 and PhD degrees \r\nnearly AUD 18,000. To add to this, numerous <a href="http://www.hotcoursesabroad.com/india/fund-your-studies/how-to-get-scholarship-to-study-abroad/financial-assistance-for-higher-education-in-australia/" target="_blank">scholarship opportunities</a> funded by the Australian Government and private schools are available for students.</p>\r\n<p>Whether your interest lies in nature, technology, art, culture, \r\nadventure, food, wine or world-class academia, Australia definitely has \r\nsomething for you, and is a country of endless opportunities. You will \r\ndefinitely love the <a href="http://www.hotcoursesabroad.com/india/know-your-study-destination/how-to-get-ready-for-the-new-place/student-life-in-australia/" target="_blank">student life in Australia</a>, the outdoorsy culture, and the friendly people.</p>\r\n<p>Other popular tourist attractions in Australia that you could choose \r\nto explore include the Sydney Harbour Bridge, Fraser Island, Gold Coast,\r\n Uluru-Kata Tjuta National Park, Ocean Road, Kakadu National Park, the \r\nvast outback, ancient forests, unique wildlife and pristine marine \r\nenvironments. These are just a few facts and stats that touch on the \r\nappeal of Australia as a country.&nbsp;</p>\r\n<p><br></p>\r\n</div><br>', 'australia_1477564800', 1, '2016-10-27 14:06:58', '2016-10-27 17:40:01'),
(6, '', 'Uk', 'uk', '<p>England, Scotland, Wales and Northern Ireland make up the United \r\nKingdom (UK). There was a time when the East India Company and the \r\nBritish monarchy ruled over half the known world. The British had set up\r\n trading outposts, colonies and eventually leaving an English imprint on\r\n places as far spread out as Australia, India and the West Indies. \r\nToday, Great Britain has a constitutional monarchy with her royal \r\nmajesty, Queen Elizabeth II still inspiring the people of the country.</p>\r\n<h2>A Top-Choice for Asian Students</h2>\r\n<p>Institutions like the University of Oxford and the University of \r\nCambridge have stood the test of time and have continued to inspire and \r\nchallenge students to become outstanding individuals and responsible \r\ncitizens with their excellent courses. The UK has a strong Asian \r\ncommunity with people from India, Pakistan, Bangladesh, Sri Lanka and \r\nNepal all living there.</p>\r\n<h2>Why it makes sense to opt for the UK</h2>\r\n<ul><li>Still the very best for education in law, sciences, management and humanities.</li><li>Has the finest research and teaching facilities.</li><li>Students can find affordable housing options, and lots of student hostels and home-stays are available.</li><li>A strong Asian community presence in the major cities in the UK.</li><li>A degree from a reputed institution in the UK will enhance your CV.</li><li>A number of <a href="http://www.hotcoursesabroad.com/india/fund-your-studies/how-to-get-scholarship-to-study-abroad/pg-scholarships-for-indian-students-studying-in-the-uk/" target="_blank">scholarships</a> are offered by numerous organisations and Universities.</li><li>The option to work part-time and gain valuable work-experience is a big plus.</li><li>Meritorious students can progress to a doctoral course and conduct research.</li></ul>\r\n<h2>Top Unis</h2>\r\n<p>In the latest QS World University Rankings, four institutions from \r\nthe UK feature in the top-10 list. These are the four universities:</p>\r\n<ol><li>University of Cambridge - 3rd position internationally</li><li>University of Oxford - 6th position internationally</li><li>University College London (UCL) - 7th position internationally</li><li>Imperial College London - 8th position internationally</li></ol>\r\n<p>Though the USA still rules the roost with institutions in the top-10 \r\nlist; institutions from the UK are going equally strong. Going by recent\r\n trends, many Asian students are applying to study in institutions like \r\nBangor University, University of Edinburgh, University of Dundee and the\r\n University of Glasgow. This trend is also linked to the fact that these\r\n cities are less expensive when compared to living in London, Birmingham\r\n or Leeds.</p>\r\n<h2>Life in the UK</h2>\r\n<p>Scotland, Northern Ireland, Wales and England all have their specific\r\n traits. Depending on which city you live in, the way of life could \r\ndiffer drastically. For example, you might find that life in London is \r\nhectic and busy; while life in Dundee and Bangor is more gentle, relaxed\r\n and simple. The British are very private people; their calm and \r\nreserved nature should not be mistaken for arrogance. While travelling \r\nin the London Underground railway system, one can notice people standing\r\n and sitting methodically; lost in their own worlds, reading a book or \r\nlistening to music. It is very rare for strangers to make conversation \r\nin a public place.&nbsp;</p>\r\n<p>Punctuality and the queue system are hallmarks of British life; one \r\nis expected to be on time for an appointment and it is considered \r\nimpolite to be late without informing your host or the person whom you \r\nare scheduled to meet. The queues are methodical and display a sense of \r\nmilitary-precision. Whether it is a bank, a railway station or an \r\nairport, one has to wait for one''s turn in queues. There is no shouting \r\nand jostling and manic shoving of people in queues and this is good part\r\n of the British culture.</p>\r\n<p>You can read more on the student life in the UK <a href="http://www.hotcoursesabroad.com/india/know-your-study-destination/how-to-get-ready-for-the-new-place/student-life-in-the-uk/" target="_blank">here</a>.</p>\r\n<h2>Places to Visit</h2>\r\n<p>The UK offers a treasure-trove of places to visit for the intrepid \r\ntraveler. Some of popular places to visit in London are Windsor Castle, \r\nLondon Zoo, London Bridge, The Tower of London, Madame Tussauds Wax \r\nMuseum, Saint Paul''s Cathedral and more.</p>\r\n<p>The best thing to do would be to get a London Pass — a pre-paid card \r\nthat allows you access to more than 60 popular tourist destinations in \r\nand around London. The card comes with various validity periods and is \r\nextremely useful for sight-seeing in London.</p>\r\n<p>Scotland, Wales and Northern Ireland all have their own enchanting sight-seeing spots as well.</p>\r\n<h2>Global Reputation</h2>\r\n<p>Tighter immigration laws and an increase in tuition and accommodation\r\n costs have made the UK a bit less accessible than before. Student <a href="http://www.hotcoursesabroad.com/india/get-your-visa/how-to-apply-for-a-visa/how-to-apply-uk-student-visa/" target="_blank">visa</a>\r\n is fairly easy to acquire. The UK is also facing stiff competition from\r\n countries like Singapore and Malaysia which offer similar courses at a \r\nmuch lesser cost. In spite of all this, the allure of a British degree \r\nis still strong and applicants to popular institutions like the London \r\nSchool of Economics, the College of Law and Brunel University continue \r\nto rise in numbers.</p>', 'uk_1477565017', 1, '2016-10-27 14:22:34', '2016-10-27 17:43:37'),
(7, '', 'New Zealand', 'new-zealand', '<div itemprop="articleBody" class="art rgt_cnt oview"><p>Situated in the\r\n southwestern Pacific Ocean, New Zealand, the land known as the Long \r\nWhite Cloud for the local Maori people, is an island country. It \r\ncomprises the landmasses of the North and South Islands along with many \r\nsmaller islands. The New Zealand culture is a diverse and unique blend \r\nof Maori and European traditions, with influences from Asia, Polynesia, \r\nand many other countries.</p>\r\n<h2>New Zealand as a Study Destination</h2>\r\n<p>Not only is New Zealand an amazing location for shooting movies — you\r\n might remember that the Lord of the Rings was shot there; it is also a \r\ngreat student destination. Here are some reasons why New Zealand should \r\nbe considered as a study destination.</p>\r\n<ul><li>New Zealand''s higher education programs are well known for their \r\nquality. New Zealand’s Universities and educational institutions are \r\nrecognised internationally and are highly regarded by employers \r\nworldwide.</li><li>Teaching standards in the country are excellent and students will \r\nimmensely benefit from smaller class sizes that offer more \r\nindividualized attention.</li><li>The education system in New Zealand rewards students for both practical and academic achievements. <a href="http://www.hotcoursesabroad.com/india/fund-your-studies/how-to-get-scholarship-to-study-abroad/scholarships-to-study-in-newzealand/" target="_blank">Scholarships</a> are offered for meritorious students.</li><li>New Zealand is a young country where resourcefulness and \r\nindependence are highly regarded. Students can look forward to a very \r\nsupportive learning environment where they are encouraged to raise \r\nquestions and perform creatively.</li></ul>\r\n<h2>Study Options</h2>\r\n<p>The New Zealand Government has constructed polytechnics, state owned \r\nUniversities and colleges to promote higher education. The international\r\n University community of New Zealand comprises eight Universities.&nbsp;</p>\r\n<p>All leading Universities recognise qualifications acquired in New \r\nZealand Universities. There are over 20 polytechnics in New Zealand. \r\nThere are around 860 private training establishments which are mostly \r\nprivately funded. These institutes offer programs on various subjects \r\nranging from hospitality to scuba diving.</p>\r\n<p>Students can choose between diploma, degree, vocational and \r\npolytechnic courses. International students need to spend on an average \r\nNZD 1200 every month to manage their living expenses in New Zealand.</p>\r\n<h2>Top Five Unis</h2>\r\n<p>As per the QS World University Rankings 2015, here are the top five Universities of New Zealand:</p>\r\n<ol><li>The University of Auckland - 82nd position internationally</li><li>University of Otago - 173rd position internationally</li><li>University of Canterbury - 211th position internationally</li><li>Victoria University of Wellington - 229th position internationally</li><li>Massey University - 337th position internationally</li></ol>\r\n<h2>Tourist Attractions</h2>\r\n<p>Besides academia, there is always <a href="http://www.hotcoursesabroad.com/india/know-your-study-destination/how-to-get-ready-for-the-new-place/student-life-in-new-zealand/" target="_blank">room for activities</a>\r\n outside the classroom, given such a fabulous location. New Zealand''s \r\nNorth Island is well known for its island sanctuaries and active \r\nvolcanoes — it has a line of mountain ranges running with farmland on \r\nboth sides. The South Island houses some of the purest landscapes on \r\nearth— don’t miss out on seeing the massive Southern Alps, which is the \r\nbackbone of the South Island.</p>\r\n<p>You can enjoy picturesque fjords, spectacular glaciers, rugged \r\nmountains, rolling hillsides, vast plains, subtropical forest, and miles\r\n of coastline with beautiful sandy beaches. Even big cities are \r\nsurrounded by lush greenery and are located not far from the country''s \r\nhills and coasts.</p>\r\n<p>For an international student, New Zealand offers both spectacular \r\nsights and high quality education. In the recent years, New Zealand has \r\nbecome a popular study destination for many Indian students.</p>\r\n</div>', 'new-zealand_1477564944', 1, '2016-10-27 14:23:53', '2016-10-27 17:42:24'),
(8, '', 'Singapore', 'singapore', '<div itemprop="articleBody" class="art rgt_cnt oview"><p>Singapore is a \r\ncity-state and an island nation made up of 63 islands. Mainland \r\nSingapore is one of the most densely populated regions in Asia. \r\nSingapore is an anglicized version of the name ''Singapura'', which means \r\nthe ''Land of the Lions''.</p>\r\n<p>The modern history of Singapore commences with Sir Thomas Stamford \r\nRaffles setting up a trading outpost for the East India Company in 1819.\r\n In 1963, Singapore declared independence from the British and joined \r\nthe Malay Federation. In 1965, the country broke apart from the Malay \r\nFederation, and since then Singapore''s progress from an underdeveloped \r\ncountry to a financial and technological hub has been an inspiring \r\nstory.</p>\r\n<h2>Asia''s Emerging Higher Education Hub</h2>\r\n<p>The National University of Singapore (NUS) is ranked 12th and Nanyang\r\n Technological University (NTU) is ranked 13th in the lastest QS World \r\nUniversities Rankings for Asian universities. Other popular and leading \r\ninstitutions in Singapore are:</p>\r\n<ul><li>&nbsp;&nbsp; &nbsp;LASALLE College of the Arts</li><li>&nbsp;&nbsp; &nbsp;Nanyang Academy of Fine Arts (NAFA)</li><li>&nbsp;&nbsp; &nbsp;Management Development Institute of Singapore (MDIS)</li><li>&nbsp;&nbsp; &nbsp;Singapore Institute of Management (SIM)</li><li>&nbsp;&nbsp; &nbsp;MAGES Institute of Excellence</li></ul>\r\n<p>Singapore is extremely popular among students who wish to study \r\ncourses in animation, design, game development, music, etc. Courses in \r\nlaw and combined post-graduate courses in management and engineering are\r\n extremely popular choices for students from South-Asia. With numerous \r\ntechnological companies having offices in Singapore and some \r\ninstitutions offering scholarships for students with a ''work in \r\nSingapore clause'', Singapore has become a popular study destination for \r\nIndians.</p>\r\n<p>Students who opt for higher education courses in engineering also \r\nhave a good chance of securing jobs in Singapore after their \r\ninternships.</p>\r\n<h2>Why Singapore</h2>\r\n<ul><li>The courses are taught in English.</li><li>Tuition fees and living expenses are less compared to the USA and the UK. A lot of <a href="http://www.hotcoursesabroad.com/india/fund-your-studies/how-to-get-scholarship-to-study-abroad/what-scholarships-are-available-for-students-to-study-in-singapor/" target="_blank">scholarship options</a> are available as well.</li><li>With many Indians and Sri Lankans living there, Singapore has a strong South-east Asian community. <a href="http://www.hotcoursesabroad.com/india/know-your-study-destination/how-to-get-ready-for-the-new-place/student-life-in-singapore/">Student life</a> is pretty exciting in Singapore!</li><li>The country’s strict law enforcement policy and stable political environment offers students a lot of safety.</li><li>Zero tolerance to racism and drugs.</li><li>Some institutions offer courses in partnership with leading American and Australian institutions.</li><li>Well-connected to the rest of Asia as Singapore has one of the best airports in the region.</li><li>With good academic performance, chances of securing a job in Singapore are high.</li></ul>\r\n<h2>Singapore as a Study Destination</h2>\r\n<p>With its highly affordable education and top-notch courses in \r\ncomputer science, law and animation, Singapore is an excellent study \r\ndestination for Indian students. The <a href="http://www.hotcoursesabroad.com/india/get-your-visa/how-to-apply-for-a-visa/how-to-apply-for-a-singapore-student-visa/" target="_blank">visa</a>\r\n process is simple and hassle free as well. International students have \r\nthe option of completing a top-notch course that is on par with what is \r\nbeing offered in the UK and the US, at a much-cheaper cost in Singapore.\r\n Being very proximate to India also means cheaper air-fare.</p>\r\n<p>Additionally, institutions from the USA, UK and Australia have opened\r\n satellite campuses in Singapore to offer their courses at a subsidized \r\ncost. With so many positive factors in place, Singapore is all set to \r\nbecome the number one study abroad destination for Asian students.</p>\r\n<p>&nbsp;</p>\r\n</div>', 'singapore_1477564968', 1, '2016-10-27 14:24:49', '2016-10-27 17:42:48'),
(9, '', 'Malaysia', 'malaysia', '<div itemprop="articleBody" class="art rgt_cnt oview"><p>Malaysia is a \r\ncountry of diversity that thrives on multiculturalism. It is home to \r\nnumerous ethnic groups, races, and religions. Its geographical location \r\nis almost as diverse as its culture. Malaysia, known as the gateway to \r\nAsia, has just about the right balance of city life and nature. From \r\nKuala Lumpur''s Petronas Twin Towers to rainforests, Malaysia has a bit \r\nof everything. Living there allows you to explore rugged mountains, \r\nmangroves and sandy beaches.</p>\r\n<p>It is a country located amidst the South China Sea and is split into \r\ntwo parts, Peninsular and East Malaysia. The Peninsular Malaysia is made\r\n up of 1 state and 2 federal territories; and East Malaysia, separated \r\nfrom the Peninsular Malaysia by the South China Sea, consists of 2 \r\nstates and a third federal territory.</p>\r\n<h2>More than Just a Holiday Destination</h2>\r\n<p>Not only is Malaysia a top holiday destination, it is also turning \r\nout to be a popular study destination. Malaysia has been ranked the 11th\r\n most preferred study destination in the world by UNESCO. This rise can \r\nalso be attributed to their new and easy <a href="http://www.hotcoursesabroad.com/india/get-your-visa/how-to-apply-for-a-visa/applying-for-a-malaysian-student-visa-from-india/" target="_blank">visa process</a>. The country also accounts for two per cent of the world''s total international student population.</p>\r\n<h2>Cost of Living</h2>\r\n<p>One of the most popular reasons why international students choose \r\nMalaysia is its low cost of living and its affordable tuition fees. \r\nStudents will also find that the accommodation options are quite \r\naffordable. The average monthly rent for a room could range anywhere \r\nbetween USD 100 to USD 150, depending on the chosen accommodation. \r\nStudents can even contain their food bill for a month to USD 150 and \r\nhave their laundry for the month done for USD 20!</p>\r\n<h2>Academia</h2>\r\n<p>Malaysian colleges and Universities offer a wide variety of courses \r\nranging from the pre-university to the postgraduate levels. \r\nUndergraduate and postgraduate programmes are offered in various fields \r\nincluding pharmacy, medicine, engineering, law, business, economics, \r\ncommerce, information technology, and education.</p>\r\n<p>Here''s a look at the top five Malaysian Universities as per the latest QS Asian Rankings:</p>\r\n<p>1.&nbsp;&nbsp; &nbsp;Universiti Malaya&nbsp;<br>\r\n2. &nbsp; &nbsp;Universiti Sains Malaysia<br>\r\n3. &nbsp; &nbsp;Universiti Teknologi Malaysia&nbsp;<br>\r\n4.&nbsp;&nbsp; &nbsp;Universiti Kebangsaan Malaysia<br>\r\n5.&nbsp;&nbsp; &nbsp;Universiti Putra Malaysia&nbsp;</p>\r\n<p>Malaysia is also well known for being home to branch campuses of \r\nforeign institutions at affordable tuition rates. Examples of such \r\nuniversities are Monash University, Swinburne University of Technology, \r\nCurtin University of Technology, University of Nottingham, Raffles \r\nDesign Institute and SAE Institute. <a href="http://www.hotcoursesabroad.com/india/fund-your-studies/how-to-get-scholarship-to-study-abroad/scholarships-to-study-in-malaysia/" target="_blank">Scholarships</a> are available for eligible students.</p>\r\n<p>Outside of the classroom, there''s a <a href="http://www.hotcoursesabroad.com/india/know-your-study-destination/how-to-get-ready-for-the-new-place/student-life-in-malaysia/" target="_blank">world of activities</a>\r\n you can explore. You can explore the islands of Penang, Langkawi, \r\nPangkor and Tioman and experience a nice beach holiday, or have a look \r\nat the colourful stages of Malay history in Penang. You can also head \r\ndown to the famous Batu caves, a 400 million year old limestone hill \r\nwith a series of awe inspiring caves and cave temples. Student life in \r\nMalaysia is filled with such opportunities for adventure.</p>\r\n</div>', 'malaysia_1477564907', 1, '2016-10-27 14:26:08', '2016-10-27 17:41:47'),
(10, '', 'Canada', 'canada', '<div itemprop="articleBody" class="art rgt_cnt oview"><h2 style="font-style:normal; text-align:start">Picture Postcard Beauty From Sea to Sea!</h2>\r\n<p style="text-align:start">Sitting above the USA, Canada- for \r\nstarters-is a HUGE (9,984.670 sq km) country with six time zones (!), \r\nthe world’s largest coastline, and more number of lakes than all of the \r\nworld’s lakes combined!&nbsp;&nbsp; This large landmass (the second largest to be \r\nmore precise), Canada, takes the world’s breath away with its majestic \r\nrange of landscapes, glacial peaks, ice-fields, green vegetation, and \r\nmassive mountains. And yes/oui- it has two official languages – English \r\n&amp; French!</p>\r\n<p style="text-align:start">Filled with popular tourist attractions, \r\nthere is a long list of Canadian scenic wonders for students to sight \r\nsee. Most visited tourist spots at a quick glance: the Niagara Falls, \r\nthe 135 km-long Okanagan Lake with its supposedly scary Ogopogo monster \r\n(boo!), the Glacier National Park, the Banff National Park, and the \r\nCanadian Rockies, to name a few.</p>\r\n<h2 style="font-style:normal; text-align:start">Bagels &amp; Maple Syrup!</h2>\r\n<p style="text-align:start">From natural peaks to skyscrapers, Canada \r\nhas it all! Montreal and Toronto are two huge cities that offer just \r\nabout everything students could possibly ask for.</p>\r\n<p style="text-align:start">Toronto is a dynamic metropolis boasting \r\nsoaring skyscrapers, which seem dwarfed alongside the world-famous CN \r\nTower. This ethnically diverse city is also a major centre of higher \r\neducation and research with many well known educational institutions \r\nsuch as the University of Toronto.</p>\r\n<p style="text-align:start">The City of Saints, Montréal, is one that \r\ndefies all expectation with its lush mix of North American &amp; \r\nEuropean swagger and cutting-edge culture. The 2015 QS World University \r\nRankings rank the City the 8th-best place in the world to be a uni \r\nstudent. What’s more… the United Nations consistently ranks Canada one \r\nof the best places in the world to live in- given its low crime rates. \r\nThere are also “Walk Safe" programmes to assist people in getting to \r\npublic transportation during late hours.&nbsp;(Phew!)</p>\r\n<h2 style="font-style:normal; text-align:start">Opens Doors Globe-Over!</h2>\r\n<p style="text-align:start">Canada is the world’s most educated country \r\nwith over half of its residents being college graduates.&nbsp; Unlike back \r\nhome, the Country does not have a central education system but is under \r\nthe jurisdiction of each of its province. It is among the top three in \r\nthe world in terms of spending per capita for public post-secondary \r\neducation, as per the Organisation for Economic Co-operation and \r\nDevelopment (OECD).</p>\r\n<p style="text-align:start">Canadian Unis are well renowned for their \r\nhigh quality degrees and every year, no less than 12 unis make it into \r\nthe Times Higher Education Supplement Top 200.&nbsp;</p>\r\n<h2 style="font-style:normal; text-align:start">Options, Options, Options!</h2>\r\n<p style="text-align:start">Students can have their pick from more than \r\n10,000 undergraduate and graduate programmes offered across \r\napproximately 92 unis plus 175 community colleges.</p>\r\n<p style="text-align:start"><strong>A look at what to study in Canada:</strong></p>\r\n<ul><li>Certificate level (One year)</li><li>Diploma level (One or two years)</li><li>Advanced Diploma (Two or three-years)</li><li>Bachelor degrees (Four years of full-time study)</li><li>Post-graduate Diplomas/Certificates (One or two years)</li><li>Master’s degrees (one to two years)</li><li>Doctorate or PhD (four to seven years)</li></ul>\r\n<p style="text-align:start">Some popular courses at the undergraduate \r\nlevel- Bachelor of Engineering &amp; Bachelor of Administrative Studies,\r\n and at the postgraduate level- PGD in management, MBA, MS and LLB \r\ndegrees.</p>\r\n<p style="text-align:start">For those looking to go for postgrad study- \r\nyou’ve hit gold-Canada is the right place for you! Research happens to \r\nbe one of the key components of a Canadian education; the Canadian \r\nGovernment and industry support research in areas including \r\ntelecommunications, medicine, agriculture, computer technology, and \r\nenvironmental science.</p>\r\n<h2 style="font-style:normal; text-align:start">Join the Uni ‘Lineup’ Now!</h2>\r\n<p style="text-align:start">Here are a few of Canada’s most reputed \r\nunis… Concordia University, McMaster University, McGill University, \r\nUniversity of Alberta, Queen’s University, Universite de Montreal, \r\nUniversity of British Columbia, , University of Toronto, University of \r\nCalgary, University of Western Ontario, University of Waterloo, and York\r\n University.</p>\r\n<h2 style="font-style:normal; text-align:start">Loonies &amp; Toonies!</h2>\r\n<p style="text-align:start">The price tag for higher studies in Canada \r\nis roughly only half as much as it would be in other leading study \r\ndestinations like the US.&nbsp; Students will have to shell out anywhere from\r\n CAN $12,000 (nearly 6,35,000 INR) to CAN $35,000 (nearly 18,50,000 INR)\r\n for undergraduate programmes, and from CAN$10,000 (nearly 5,30,000INR)&nbsp;\r\n to CAN$39,000 (nearly 20,70,000INR)for postgraduate programmes per \r\nyear.</p>\r\n<p style="text-align:start">Annual living expenses could range from CAN$\r\n 7,000-14,000 (nearly 3, 70,000-22,20,000INR). Inclusive of \r\naccommodation which could cost&nbsp;students anywhere between $4,000 to \r\n$9,000 (2,11,000- 4,80,000INR) per year. These are reliable stats that \r\nhave been pulled out from our very own database.</p>\r\n<p style="text-align:start">Canadian unis mostly offer up to four \r\nintakes in an academic year- Jan, April, May, and September; \r\ninternational students are advised to apply at the earliest possible, as\r\n scholarships and admissions get more and more competitive closer to the\r\n deadline.</p>\r\n<h2 style="font-style:normal; text-align:start">The Canuck Pull!</h2>\r\n<p style="text-align:start">Apart from global recognition, overseas \r\neducation counselors confirm that student numbers have increased over \r\nthe years also owing to visa restrictions, rising educational costs, and\r\n the sharp decline of post-degree job opportunities in the other \r\ninternational study destinations.</p>\r\n<p style="text-align:start">International students may work part-time \r\nfor 20 hours per week – generally the first six months in campus and off\r\n campus post this period. During vacations, they can work for up to 40 \r\nhours and the average pay could be anywhere along the lines of CAD$7 to \r\nCAD$10 per hour (370 to 520INR per hour) or even more. Canadian unis \r\nalso offer paid internships alongside the course- mostly for \r\npost-graduate programmes like MBA.</p>\r\n<p style="text-align:start">And it gets better…on graduation, \r\ninternational students can apply for what is known as a Post-Graduation \r\nWork Permit, which gives them the opportunity to work in the Country for\r\n a three-year period. Students don’t even need to have a job offer in \r\nhand while applying for the permit! It is no wonder Canadian \r\ninternational student numbers have seen a 84% spike over the last decade\r\n (ICEF Monitor).</p>\r\n<h2 style="font-style:normal; text-align:start">‘Fun’-damentals of Student Life!</h2>\r\n<p style="text-align:start">Of course- it’s not all JUST about the \r\nrankings and fees, studying in Canada also brings with it many other \r\nbenefits. Canadian uni campuses are wired with the latest in technology \r\nand modern amenities, Olympic- quality sports facilities, art galleries,\r\n and public concert halls. Students will have incredible opportunities \r\nto meet like-minded peers and gain valuable international student \r\nexperience through student clubs and student-run governments. Some fun \r\nways for students to chill out (no pun intended!) outside their \r\nclassrooms include sailing, hiking, skiing and sledging!&nbsp;</p>\r\n<p style="text-align:start">They can really enjoy an active and varied \r\nlifestyle in this beautiful country, along with great health care \r\nbenefits, and most importantly the thing that Canada is most known for- \r\nfriendliness of the polite locals.</p>\r\n<h2 style="font-style:normal; text-align:start">Breaking the Canadian Ice!</h2>\r\n<p style="text-align:start">So first timers must get acquainted with a few Canadianisms to not come off as rude or ill-mannered…</p>\r\n<ul><li>Canadians take matters of etiquette quite seriously so when meeting \r\nsomeone for the first time, a firm handshake while meeting and departing\r\n is in order!</li><li>Canadians are formal when it comes to mentioning names and titles. \r\nUse their last names and appropriate titles until asked to make use of \r\ntheir first names- mostly used only by close friends and family.</li><li>Sunglasses and hats must be removed when conversing with someone.</li><li>And also it is considered rude to talk with hands in your pocket.</li></ul>\r\n<p style="text-align:start">&nbsp;</p>\r\n<p style="text-align:start">These are just a few common dont’s. Explore \r\nthe Canadian culture well a few months before your arrival there to help\r\n set in to your new environment quicker and minimise culture shock.&nbsp; But\r\n really- given all the facts and stats-where better to head to now for \r\nhigher studies than Canada, “eh”?&nbsp; In true Canadian style!</p>\r\n</div>', 'canada_1477564827', 1, '2016-10-27 14:27:37', '2016-10-27 17:40:27'),
(11, '', 'Germany', 'germany', '<div itemprop="articleBody" class="art rgt_cnt oview"><p><span style="font-size:13px">Germany\r\n has a long history of academic partnerships with India. Many great \r\nintellectuals have visited India over the years to conduct research on \r\nancient Indian texts and have published translations of works like the \r\n''Vedas'', the ''Ramayana'' and the ''Mahabharata''. The World Wars and the \r\nperception of Germany after the wars, the split and the unification of \r\nthe country are all recorded in history. What needs to be examined is \r\nthe sheer perseverance and skill with which Germany rebuilt itself and \r\nthe great advancements made in science and technology accomplished by \r\nGerman engineers. A fair bit of credit for this goes to German \r\nuniversities that offer top-quality education.</span></p>\r\n<h2>Germany – Quick Highlights</h2>\r\n<ul><li>Capital City – Berlin</li><li>Other Important Cities – Bonn, Munich, Cologne, Hamburg, Hanover and Frankfurt</li><li>Founder member of the European Union</li><li>Currency - Euro</li><li>Languages Spoken – German, Dutch, English</li><li>Oldest University – The Heidelberg University – established in 1386</li><li>Industries – Automobiles, Engineering and Manufacturing, Tourism and Agriculture.&nbsp;</li></ul>\r\n<h2>Why you can’t ignore Germany?</h2>\r\n<ul><li>Free education in all state-managed public universities.</li><li>If you know German and opt for classes taught in German the fee waiver applies.</li><li>Students only spend on food, accommodation and travel.</li><li>If you are lucky enough to enrol on a doctoral research-based \r\nprogramme, there are high possibilities of you securing a generous \r\nresearch grant, which will cover your expenses.</li><li>Top-class research facilities</li><li>Quick access to other countries in Europe</li><li>Opportunities to work while studying and post-study work-visa grants.</li><li>Germans have a deep-rooted fascination for Indians and Indian \r\nculture and there is a strong community of expatriate Indians in leading\r\n German cities.</li></ul>\r\n<h2>Top Ten Universities</h2>\r\n<p>The top ten universities in Germany are:</p>\r\n<ol><li>Technische Universität München</li><li>Ruprecht-Karls-Universität Heidelberg</li><li>Ludwig-Maximilians-Universität München</li><li>Kit, Karlsruher Institut Für Technologie Karlsruhe University</li><li>Freie Universität Berlin</li><li>Humboldt-Universität Zu Berlin</li><li>Universität Freiburg</li><li>Rheinisch-Westfälische Technische Hochschule Aachen Aachen</li><li>Georg-August-Universität Göttingen</li><li>Eberhard Karls Universität Tübingen.</li></ol>\r\n<p><a href="http://www.hotcoursesabroad.com/india/find-your-course/how-to-choose-the-right-study-abroad-destinations/top-ten-universities-in-germany/">Read this article</a> to learn more about each of these institutions.</p>\r\n<h2>The Erasmus+ Programme</h2>\r\n<p>The <a href="http://ec.europa.eu/programmes/erasmus-plus/index_en.htm">Erasmus+</a>\r\n is a European Union programme for Education, Training, Youth and Sport \r\nthat develops the employability quotient of youth in Europe and supports\r\n their education. There are a number of partner countries outside Europe\r\n who can also benefit from this programme. India falls into the category\r\n of an Erasmus partner country and students who meet the eligibility \r\nrequirements can apply for an Erasmus grant to study in Germany.</p>\r\n<p>This works if you are already enrolled as a student in an Indian \r\nuniversity which is a member of Erasmus Charter for Higher Education. \r\nYou can then apply to study for a higher degree at a German university, \r\nwhich is also a part of the Erasmus Charter.</p>\r\n<h2>Living as a Student in Germany</h2>\r\n<p>Germany is a great place for students to live and study. If you can \r\nsecure on-campus accommodation it is a good deal for you. You can \r\ncross-check if you can sign-up for meal plans or if you’re on-campus \r\nresidence halls allow you to do your own cooking in shared kitchen or \r\nen-suite kitchens. Alternatively, if you can afford to live in a private\r\n apartment near your campus that’s a good choice as well. A private \r\napartment will not force you to stick to strict timings and will allow \r\nyou to retain your independence.</p>\r\n<p>The following average prices from <strong>“Numbeo”</strong> give you a fair idea of the cost of living in Germany:</p>\r\n<ul><li>Milk (regular), (1 litre) - 0.74 € &nbsp; &nbsp;</li><li>Loaf of Fresh White Bread (500g) - 1.39 € &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</li><li>Rice (white), (1kg) - 1.44 € &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</li><li>Eggs (12) - 1.70 €</li><li>Meal, Inexpensive Restaurant - 10.00 €</li><li>Coke/Pepsi (0.33 litre bottle) - 1.98 €</li><li>Water (0.33 litre bottle) - 1.63 €</li><li>Basic (Electricity, Heating, Water, Garbage) for 85m2 Apartment - 217.44 €</li><li>Apartment (1 bedroom) in City Centre - 627.79 €.</li></ul>\r\n<h3>Travel and Transport</h3>\r\n<p>The country is well-connected by a rail network and within cities, \r\nbuses and the metro trains offer affordable travel. The \r\nIntercity-Express popularly known as ICE connects major cities including\r\n international destinations in Austria, Belgium, Denmark, France, the \r\nNetherlands and Switzerland. If you love travelling by the bus, you can \r\nopt for the IC Bus service as well. Students usually spend vacation time\r\n opting for the Eurail Pass and travelling across beautiful cities in \r\nEurope. In Germany itself, students can visit awe-inspiring castles, \r\nmuseums, churches, memorials of the World War and discover quaint little\r\n restaurants in mountain villages. If you can afford to travel, then you\r\n should not miss out on the beauty of Germany. The Oktoberfest where the\r\n world comes together to sample fine beer is a great event to attend. \r\nThe Berlin Film Festival brings together some of the world’s finest \r\nfilmmakers and their creations on one platform.</p>\r\n<h2>Life Experience</h2>\r\n<p>Germany offers a fascinating life experience. Be it football, food, \r\nmusic or the environment there are strong opinions among the public for \r\nevery cause. For most of the older citizens the memories of war the \r\nbifurcation of the country and the fall of the Berlin Wall are still \r\nhaunting memories and it is best to avoid bringing up such topics in \r\nconversation. The new generation of high-performing achievers is focused\r\n on creating a better life for themselves and the ''work hard and party \r\nharder culture'' is quite prominent in the country!</p>\r\n<p>As a student it is imperative that you focus on your goals and \r\ncomplete your degree. Have the right balance of studies and fun and make\r\n the most of your time in Germany! We have put together a list of \r\nprominent German universities and catalogued their courses. Do visit the\r\n course listings and apply for a programme at a University that fits \r\nyour requirements.</p>\r\n</div>', 'germany_1477564849', 1, '2016-10-27 14:29:01', '2016-10-27 17:40:49'),
(12, '', 'Hong Kong', 'hong-kong', '<div itemprop="articleBody" class="art rgt_cnt oview"><p>What is it that\r\n your mind conjures when you hear the words ''Hong Kong''? If you are \r\nthinking about an ultra modern city with skyscrapers, busy speedway \r\nlanes with high-end cars, big shopping malls and the legendary Bruce Lee\r\n movies, then your guess is right.</p>\r\n<p>The imprint of the British Empire is clearly still visible in Hong \r\nKong. Since 1997, Hong Kong functions with its own government and \r\ncurrency, but is officially a part of China. Hong Kong today is a \r\nbustling cosmopolitan city that houses the offices of top international \r\nbanks, pharmaceutical and technology companies.</p>\r\n<p>Hong Kong is slowly emerging as a cost-effective study destination as well; if one chooses to spend some time to learn Mandarin.</p>\r\n<p>Some of the advantages of studying in Hong Kong are:</p>\r\n<ul><li>&nbsp;The tuitions costs are significantly lesser when compared to the USA or the UK.</li><li>&nbsp;Hong Kong is the gateway to mainland China and offers a truly cosmopolitan life.&nbsp;</li><li>&nbsp;Hong Kong has a strong Indian community.</li><li>&nbsp;University accommodation is the best and most cost-effective accommodation option</li><li>&nbsp;Hong Kong has a lot to offer to the traveler. You can explore its vibrant nightlife, nature-treks, and the rest of China.</li><li>&nbsp;If one manages to learn Mandarin and become proficient in the \r\nlanguage, then it becomes a lot easier to secure a job in Hong Kong post\r\n graduation.</li><li>&nbsp;With a lot of direct flights from all major cities in India, Hong Kong is much more accessible than the USA or the UK.</li></ul>\r\n<h2>Top Three Unis</h2>\r\n<p>Three institutions from Hong Kong feature in the ''Top 50 under 50'' \r\nrankings of the QS World Rankings. They are ranked in this order:</p>\r\n<p>1.&nbsp;&nbsp; &nbsp;The Hong Kong University of Science and Technology (HKUST) is ranked first.<br>\r\n2.&nbsp;&nbsp; &nbsp;City University of Hong Kong is ranked fifth.<br>\r\n3.&nbsp;&nbsp; &nbsp;The Hong Kong Polytechnic University is ranked ninth.</p>\r\n<p>This speaks volumes on the high-quality education that is on offer in\r\n Hong Kong. In recent years, a number of students have also opted to \r\nstudy medicine and related courses in Hong Kong, as the fee is \r\nconsiderably lower. On returning to India after completing their medical\r\n studies, clearing an exam will allow them to practice as a registered \r\nmedical practitioner in India.</p>\r\n<h2>Why Hong Kong</h2>\r\n<p>Hong Kong is definitely mushrooming into a strong study-abroad \r\ndestination for Indian students as countries like the UK are tightening <a href="http://www.hotcoursesabroad.com/india/get-your-visa/how-to-apply-for-a-visa/steps-involved-in-applying-for-a-hong-kong-student-visa/" target="_blank">student visa </a>norms\r\n and the cost of air-travel is increasing with each passing day. Hong \r\nKong''s proximity to India, focused-teaching methods, low tuition costs \r\nand an excellent research network are some of the main reasons why \r\nIndian students should consider studying in Hong Kong.There are a number\r\n of <a href="http://www.hotcoursesabroad.com/india/fund-your-studies/how-to-get-scholarship-to-study-abroad/scholarships-for-studying-in-hong-kong/" target="_blank">scholarship options </a>available for Indian students as well.</p>\r\n</div>', 'hong-kong_1477564866', 1, '2016-10-27 14:30:09', '2016-10-27 17:41:06');
INSERT INTO `countries` (`id`, `auther_name`, `title`, `testimonial_slug`, `description`, `featured_image`, `status`, `created_at`, `updated_at`) VALUES
(13, '', 'Ireland', 'ireland', '<div itemprop="articleBody" class="art rgt_cnt oview"><p>There\r\n is something definitely magical about Ireland — it’s the land of elves,\r\n leprechauns, castles, warriors and balladeers. Ireland has a special \r\ncharm that bonds all Irish men and women together.</p>\r\n<p>The Republic of Ireland is not to be confused with Northern Ireland, \r\nwhich is still an integral part of the United Kingdom. Ireland''s 800 \r\nyears of rule under the British monarchy was a period of intrigue, \r\nstrife, famine, progress and intellectual development as some of the \r\nmost famous works in English Literature were written. Writers like \r\nGeorge Bernard Shaw, Oscar Wilde and James Joyce are all part of the \r\nIrish literary world.</p>\r\n<p>With visa rules becoming stricter in the UK and the US, Ireland should definitely be considered as a study destination.</p>\r\n<h2>Reasons to study in Ireland:</h2>\r\n<ul><li>&nbsp;Courses are taught in English</li><li>&nbsp;Courses are globally recognised and accredited by leading academic bodies</li><li>&nbsp;<a href="http://www.hotcoursesabroad.com/india/fund-your-studies/how-to-get-scholarship-to-study-abroad/scholarships-for-studying-in-ireland/" target="_blank">Scholarships</a> are given for deserving students</li><li>&nbsp;Strong Asian community</li><li>&nbsp;Close proximity to London and is well-connected to the rest of Europe - the <a href="http://www.hotcoursesabroad.com/india/know-your-study-destination/how-to-get-ready-for-the-new-place/student-life-in-ireland/" target="_blank">student life</a> is something everyone must experience</li><li>&nbsp;A land of astounding beauty with some amazing cliffs, lakes and beaches</li></ul>\r\n<h2>Top Ten Institutions in Ireland</h2>\r\n<p>There are more than 30 Universities in Ireland. The top 10 institutions in Ireland are:</p>\r\n<ol><li>Trinity College Dublin and University of Dublin</li><li>University College Cork</li><li>University College Dublin</li><li>Dublin City University</li><li>University of Limerick</li><li>National University of Ireland, Galway</li><li>Dublin Institute of Technology</li><li>National University of Ireland, Maynooth</li><li>Royal College of Surgeons in Ireland</li><li>Cork Institute of Technology</li></ol>\r\n<h2>Life in Ireland</h2>\r\n<p>The Irish are known to be fun-loving people and take great pride in \r\ntheir Nordic-Saxon heritage. The country suffered during the economic \r\ndownturn of 2008 but has fared pretty well and is focussing a lot on \r\ntourism to draw foreign exchange and improve the economy. As a student \r\nwith a modest lifestyle; one can live comfortably with about 1500 to \r\n1600 Euros a month. The Irish are extremely passionate about their food \r\nand drink and most towns have restaurants that cater to every budget and\r\n taste. Bread, Irish stew, Shepherd''s Pie and a glass of Guinness are a \r\nbig part of the Irish cuisine. The Irish are also passionate about rugby\r\n and football, and even cricket is gaining popularity today.</p>\r\n<p>Ireland is a place of amazing natural beauty and some of the popular tourist spots are:</p>\r\n<ul><li>Saint Patrick''s Cathedral in Armagh and in Dublin</li><li>Dublin Castle - the seat of power of the British empire when they ruled Ireland</li><li>The Rock of Cashel - an ancient fortress town.</li><li>Kilkenny Castle - originally built in 1172 as a wooden structure, it\r\n is now a stone structure and maintained as a heritage site by the \r\ngovernment.</li><li>The National Gallery of Ireland - a museum preserving Irish and European art collections.</li></ul>\r\n<h2>Why Ireland</h2>\r\n<p>With the cost of living in Ireland being considerably lesser when \r\ncompared to London, Dublin and Cork have become attractive options for \r\ntop class higher education. The proximity to London also allows students\r\n to visit London during the weekends. Ireland offers University degrees \r\non par with those offered in the UK and the USA, and at a lesser cost. \r\nYou can save a lot of money by opting to study in Ireland.</p>\r\n</div><br>', 'ireland_1477564891', 1, '2016-10-27 14:31:34', '2016-10-27 17:41:32'),
(14, '', ' Sweden', 'sweden', '<div itemprop="articleBody" class="art rgt_cnt oview"><p>Sweden, the \r\nthird largest country in the European Union, is located in Northern \r\nEurope. With a population of nearly 9.5 million, it has a low population\r\n density. Sweden remains a popular destination for its "nature tourism",\r\n receiving international visitors from the world-over who enjoy its \r\nbreath taking scenery and untouched wilderness.</p>\r\n<p>Sweden''s cities like Stockholm are well known for its rich cultural \r\nheritage and idyllic setting; the cities are spread out across 14 \r\nislands. Gothenburg, which is Sweden''s second largest city, offers \r\nmulticultural experiences and a vibrant entertainment scene, and Malmo \r\nis a bustling cosmopolitan city.</p>\r\n<p>In the year 2013, the Reputation Institute rated Sweden to be the \r\nsecond most reputable country world-wide. Sweden currently has nearly \r\n35,000 international students as part of its vibrant study scene.</p>\r\n<h2>Study Experience</h2>\r\n<p>Swedish colleges and Universities lay a strong emphasis on group work\r\n and work towards creating a forward thinking culture to keep students \r\nclose to industry trends and connected to latest ideas. Higher education\r\n in Sweden encourages students to take on more responsibilities, \r\npersonal initiatives and act independently. <a href="http://www.hotcoursesabroad.com/india/know-your-study-destination/how-to-get-ready-for-the-new-place/student-life-in-sweden/" target="_blank">Student life</a>\r\n is something that everyone will enjoy in Sweden. Generally, there is an\r\n informal and relaxed relationship between teachers and students in \r\neducational institutions, making the study atmosphere an open and a warm\r\n one.</p>\r\n<h2>Top Five Unis</h2>\r\n<p>Here''s a look at the top five Swedish Universities as per the latest QS World University Rankings:</p>\r\n<ul><li>Lund University - 70th position internationally</li><li>KTH, Royal Institute of Technology - 92nd position internationally</li><li>Uppsala University - 102nd position internationally</li><li>Chalmers University of Technology - 132nd position internationally</li><li>Stockholm University - 182nd position internationally</li></ul>\r\n<h2>Industry-ready courses</h2>\r\n<p>Students taking up master’s degrees are generally offered the \r\nopportunity to practice the theory from their programs. Most of these \r\ncourses are offered in close collaboration with the industry, to help \r\nstudents prepare for future employment.</p>\r\n<h2>Research-oriented education</h2>\r\n<p>Sweden is one of the world''s most research intensive and innovative \r\nnations. Educational institutions such as Karolinska Institute, Lund \r\nUniversity, and the Royal Institute of Technology have indulged in \r\nresearch activities that have contributed to the success of the \r\ncountry''s high tech companies on a global scale. <a href="http://www.hotcoursesabroad.com/india/fund-your-studies/how-to-get-scholarship-to-study-abroad/scholarships-to-study-in-sweden/" target="_blank">Scholarships</a> are given out generously for students to pursue their education.</p>\r\n<p>Sweden spends nearly four per cent of its GDP towards research and \r\ndevelopment, one of the highest rates in the world. This gives Sweden \r\nthe leading position in areas such as nanotechnology, cancer research, \r\nand environmental technology. A major portion of the research conducted \r\nin the country, i.e. around 75 per cent is funded by companies. These \r\nare considered investments and have helped organisations such as \r\nSandvik, Ericsson, and the Volvo Group.</p>\r\n<p>Studying in Sweden is a different experience altogether. It can \r\nprovide a student with a whole new experience. But given the country’s \r\nrapid growth rates and investment in the education sector, Sweden can \r\nsoon become a popular study destination for international students. It \r\nis also to be noted that their <a href="http://www.hotcoursesabroad.com/india/get-your-visa/how-to-apply-for-a-visa/how-to-apply-for-a-swedish-student-visa/" target="_blank">visas</a> are slightly different from that of UK and USA.</p>\r\n</div>', 'sweden_1477564993', 1, '2016-10-27 14:32:42', '2016-10-27 17:43:13'),
(15, '', 'Netherlands', 'netherlands', '<div itemprop="articleBody" class="art rgt_cnt oview"><p>The \r\nNetherlands, or Holland as it is popularly known, is a constitutional \r\nmonarchy with one of the most stable economies in all of Europe. The \r\ncapital city of the Netherlands is Amsterdam but the seat of the \r\ngovernment is at The Hague.&nbsp;</p>\r\n<p>With a population of nearly 16.5 million people, the Netherlands is \r\none of the most densely populated countries in Europe. Nearly a third of\r\n the Netherlands is below sea-level and for a long time the Dutch \r\nconstructed dykes and barricades to ensure that their lands do not get \r\nflooded by sea-water.&nbsp;</p>\r\n<p>Nearly 40% of the country''s population lives in the area known as the\r\n Randstad — this area is made up of cities like Amsterdam, Rotterdam, \r\nThe Hague and Utrecht. Languages like Dutch, German and English are \r\nspoken by people in this region.&nbsp;</p>\r\n<p>The Netherlands is home to world-famous companies like Philips, \r\nUnilever, Rabobank, KPMG, Endemol, Elsevier and more. This proves once \r\nagain that it is not the size of a nation, but the ambitions of its \r\npeople that contribute to its economic growth.</p>\r\n<p>Over the years, the Netherlands has changed from being just an \r\nindustrial and tourist centre, and has become a hub for higher education\r\n thanks to their friendly immigration laws and easy <a href="http://www.hotcoursesabroad.com/india/get-your-visa/how-to-apply-for-a-visa/how-to-apply-for-a-netherlands-student-visa/" target="_blank">visa processing</a>.\r\n This is largely because since the early 1990s, leading Dutch \r\ninstitutions have begun offering a select few courses to international \r\nstudents, which are taught in English.<br>\r\nThe Netherlands is renowned for its technical, scientific and \r\nengineering courses. Five Dutch universities feature in the world''s top \r\n100 universities as per the latest QS Rankings:</p>\r\n<ol><li>University of Amsterdam – 55th position internationally</li><li>Delft University of Technology - 64th position internationally</li><li>Utrecht University - 94th position internationally</li><li>Leiden University - 95th position internationally</li><li>Erasmus University, Rotterdam - 92nd position internationally</li></ol>\r\n<h2>Should you Study in the Netherlands?</h2>\r\n<p>Most students do not have the Netherlands in their list of study \r\nabroad destinations because they think that the courses are taught in \r\nDutch; and they will have to learn a new language and focus on learning \r\nthe nuances of the Dutch language. This is true to a certain extent as a\r\n majority of the institutions offer their courses in Dutch, but since \r\nthe 1990s, more and more premier Dutch institutions are offering a \r\nselect few courses taught in English for international students. This \r\ndoes not mean that the student should not learn Dutch. Picking up a new \r\nlanguage is useful and one may even land a job in the Netherlands on \r\ncompletion of the course.</p>\r\n<h2><span style="font-size:13px">Key Points:</span></h2>\r\n<ul><li>The courses are extremely challenging and are designed for the best minds.</li><li>Opportunities for postgraduate research in areas like electronics, computer science and engineering are high.</li><li>Limited <a href="http://www.hotcoursesabroad.com/india/fund-your-studies/how-to-get-scholarship-to-study-abroad/scholarships-to-study-in-netherlands/" target="_blank">scholarships</a> are offered by most institutions.</li><li>The standard of living is quite high, but opting for accommodation \r\nin student hostels or a home-stay will enable students to save money.</li><li>Being a progressive economy the prices of essential commodities are \r\nhigh, but one can save money by shopping at weekly farmer markets that \r\nare held in most major towns.</li></ul>\r\n<h2>Living in the Netherlands</h2>\r\n<p><a href="http://www.hotcoursesabroad.com/india/know-your-study-destination/how-to-get-ready-for-the-new-place/student-life-in-the-netherlands/" target="_blank">Student life</a>&nbsp;in\r\n Netherlands can be really exciting. The Dutch are a friendly bunch of \r\npeople who love football, fine art, technology, good food and drinks. \r\nPeople visiting the Netherlands from Asia can expect a culture shock. \r\nThe consumption of ''soft drugs'' is legal and hash burgers are popular, \r\nlesbian and gay rights are respected seriously and no discrimination is \r\nmade. The Dutch are seriously progressive thinkers and there is a \r\ngenuine respect for the state and the law.&nbsp;</p>\r\n<h2>Places to visit</h2>\r\n<p>The Holland Pass is the best way to enjoy all the leading tourist \r\nsites in Holland. The pass allows you discounts and other benefits when \r\ntravelling and sight-seeing.</p>\r\n<p>Here are some of the most popular tourist-spots in the Netherlands.</p>\r\n<ul><li>The flower fields of Leiden and Den Helder and the tulip gardens \r\nalong the route from Leiden to Haarlem are must-visit sites. Cycling \r\ndown the road adjoining the tulip fields is a special experience.</li><li>The canals of Amsterdam are as picturesque as the canals of Venice. \r\nThe 17th century canal ring area in Amsterdam is a UNESCO certified \r\nheritage site.</li><li>The Royal Palace and the Museum are iconic landmarks. The 350-year \r\nold Royal Palace is a witness to many of the historical moments that \r\nchanged the political scenario of Europe.</li><li>The Van Gogh Museum attracts over 1.5 million visitors every year —a\r\n remarkable feat considering that Van Gogh only sold one painting when \r\nhe was alive. Most visitors combine this visit along with a trip to the \r\nRijksmuseum.</li></ul>\r\n<h2>Courses with a Focus on Research</h2>\r\n<p>The Netherlands is in no way less expensive than the UK. In many \r\naspects, the cost of living is the same. Students who wish to try \r\nsomething different and explore life in a beautiful country with a focus\r\n on top-notch research-centric courses might wish to apply to study in \r\nthe Netherlands.</p>\r\n<p>&nbsp;</p>\r\n</div>', 'netherlands_1477564925', 1, '2016-10-27 14:33:36', '2016-10-27 17:42:05'),
(16, '', 'Yemen', 'alymn', '<p>لتنا نتلتلتال تحصنمطسقكنكمسنبض</p><p><br></p><p>نصىبمنىسنةيىلس</p><p>ميلنسىيشنلتىض</p><p><br></p><p>نيملىنكسلشرترىر تتاملتانل تارتارر<br></p>', 'alymn_1479031817', 1, '2016-11-13 17:10:17', '2016-11-13 17:10:32'),
(17, '', 'Egypt', 'msr', '<font><font>Nssh</font></font><font><font>Fever</font></font><font><font>Ton</font></font>', 'msr_1479994602', 1, '2016-11-24 20:36:42', '2017-01-01 23:13:46');

-- --------------------------------------------------------

--
-- Table structure for table `countries_trans`
--

DROP TABLE IF EXISTS `countries_trans`;
CREATE TABLE `countries_trans` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `lang` varchar(2) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `countries_trans`
--

INSERT INTO `countries_trans` (`id`, `title`, `description`, `lang`) VALUES
(5, 'الولايات المتحدة الامريكية', '<p>لأكثر من ثلاثة أجيال، كانت الولايات المتحدة الأمريكية الوجهة المفضلة بالنسبة للخيار للطلاب من الهند وغيرها من دول جنوب آسيا.\nوهذه ليست مفاجأة بالنظر إلى حقيقة أن الجامعات الأمريكية تعتبر من أعلى الجامعات في العالم.\nفي ترتيب الجامعات على مستوى العالم لعام 2016 كان اعلى خمس جامعات من اصل عشرة على النحو التالي: \n</p>\n<ol><li>معهد ماساتشوستس للتكنولوجيا – الأول عالميا</li><li>جامعة هارفرد – الثاني عالميا</li><li>جامعة ستانفورد – الثالثة عالميا</li><li>معهد كاليفورنيا للتكنولوجيا – الخامس عالميا</li><li>جامعة شيكاغو – العاشر عالميا</li></ol>\n<h2>لماذا الولايات المتحدة الأمريكية</h2>\n<ul><li>الوجود القوي للجالية الآسيوية في المدن الأمريكية الكبرى.</li><li>ضمان تعليم من الطراز العالمي.</li><li>تشكيلة واسعة من العلوم والتكنولوجيا و دورات البحوث.</li><li>الدورات الموجهة لأدارة الأعمال.</li><li>عدد كبير من المنح الدراسية والمنح الدراسية التي تقدمها المؤسسات والحكومة الأمريكية.</li><li>فرص عمل بدوام جزئي بينما تدرس والتوجيه المهني بعد الانتهاء من الدراسات.</li><li>يعتبر الحصول على شهادة أمريكية كبير من قبل العديد من أرباب العمل في جميع أنحاء العالم.</li><li>بلد شاسع مع اختلاف المناظر الطبيعية التي يقدم الكثير للسائح ومحبي الطبيعة.</li></ul>\n<h2>قيمة الدولار</h2>\n<p>ويتكون الولايات المتحدة الأمريكية تتكون من 50 ولاية، وهي واحدة من أكبر الدول \nفي العالم من حيث مساحة الأرض وحجم. يغطي البلاد \nمناطق زمنية مختلفة، ويختلف المناخ من البرد تجميد \nألاسكا إلى المناخ الاستوائي لطيف من هاواي.</p>\n<p>كونها أكبر قوة اقتصادية في العالم، والتغيرات في الاقتصاد الأمريكي \nتملي الاقتصاد العالمي. سواء كان الكساد العظيم عام 1929 \nأو الركود الأخير، هو الدولار الأمريكي الذي يملي الشروط \nفي العالم الحديث.</p>\n<p>مع أخذ نفسا الجمال الطبيعي من جراند كانيون إلى \nشلالات نياجرا وعجائب من صنع الإنسان مثل تمثال الحرية، وجسر البوابة الذهبية\n، ديزني لاند، ومتحف سميثسونيان، ومكتبة الكونغرس \nوأكثر من ذلك بكثير. يقدم البلاد الكثير للمسافر.</p>\n<p>هناك الكثير من <a href="http://www.hotcoursesabroad.com/india/fund-your-studies/how-to-get-scholarship-to-study-abroad/did-you-know-that-the-us-govt-can-pay-for-your-studies/" target="_blank">منح دراسية</a>&nbsp;الخيارات المتاحة للطلاب الهنود أيضا. وهذه المنح يساعد على التقليل من الأعباء المالية للدراسة في الولايات المتحدة.</p>\n<h2>الناس</h2>\n<p>مع مزيج العادل للشعب قوقازي، أصول أفريقية وآسيوية. و\nالولايات المتحدة هي أرض الفرص التي توفر المأوى والدعم والنجاح \nلأولئك الذين يعملون بجد ومثابرة. قد ألغيت العبودية \nطويلة الى الوراء والأفرو-أمريكية قد يكون رئيس الولايات المتحدة الأمريكية؛ ولكن \nهي الحقيقة المؤلمة أن العنصرية لا تزال موجودة في عدد غير قليل من المدن.</p>\n<p>وعموما، فإن الناس ودودون، منفتح وصريح للغاية والحب \nالتحدث إلى الآخرين. هذا هو عكس الحياة في المملكة المتحدة، حيث محادثة \nبين الغرباء في الأماكن العامة أمر نادر الحدوث.</p>\n<h2>القانون والسلامة</h2>\n<p>الرد على الهجمات المروعة في 9/11، وكالات إنفاذ القانون و\nأصبحت صارمة للغاية. فإنه من المستحسن أن الطلاب يسافرون في مجموعات \nمن أجل السلامة في الأرقام. فمن المهم للحفاظ على وثائق رسمية واحدة ل\nمثل جواز السفر، <a href="http://www.hotcoursesabroad.com/india/get-your-visa/how-to-apply-for-a-visa/applying-for-a-us-student-visa/" target="_blank">تأشيرة</a>\n وبطاقات الهوية بأمان. فمن الأفضل لتجنب أي مجوهرات براقة و\nالاكسسوارات. فمن الحكمة أن تبقي أصدقائك وأولياء الأمور المحلية \nعلم خطط السفر الخاصة بك.</p>\n<h2>الحياة كطالب في الولايات المتحدة الأمريكية</h2>\n<p>كطالب في الولايات المتحدة الأمريكية، من المهم أن واحد هو علم واحد في مجال حقوق \nوالقوانين المحلية، والتي يجب أن يتم اتباعها. كل المؤسسات الرائدة \nبشن ''برنامج توجيه الطلاب، مما يساعد الطالب \nالتأقلم مع الحياة في الولايات المتحدة الأمريكية.</p>\n<p>فمن الأفضل للطلاب للبقاء في الحرم الجامعي، حيث أنها توفر وصولا سريعا إلى \nمصادر التعلم والشركة من الأصدقاء. المشاركة في \nالأنشطة اللاصفية من قبل المؤسسة نظمت يتيح للطلاب \nلتكوين صداقات ويعطيهم فرصة لتطوير هواياتهم. معظم \nالمؤسسات لديها هواية النوادي والمنظمات الطلابية لممارسة الهوايات كما \nمتنوعة مثل التصوير الفوتوغرافي، وألعاب الكمبيوتر والروحانية.</p>\n<p>إقرأ المزيد حول <a href="http://www.hotcoursesabroad.com/india/know-your-study-destination/how-to-get-ready-for-the-new-place/life-in-the-us/" target="_blank">الحياة الطلابية في الولايات المتحدة.</a></p>\n<h2>الدورات الشهيرة</h2>\n<p>وتشير الأبحاث التي أجرتها الهيئات التعليمية الرائدة وتوظيف الطلاب \nالشركات التي ماجستير في إدارة الأعمال وماجستير في أجهزة الكمبيوتر، التكنولوجيا الحيوية و\nإلكترونيات هي من بين الدورات الأكثر شعبية في الولايات المتحدة الأمريكية. دورات أخرى \nالمتخصصة الدراسات العليا في تيارات مثل الطب، ومستحضرات التجميل \nجراحة، الفقرة علم النفس، ومرض السكري البحوث والوراثة هي أيضا \nشعبية للغاية.</p>\n<h2>درجة ذات قيمة عالية</h2>\n<p>مع منافسة شرسة من دول مثل المملكة المتحدة وسنغافورة و\nاستراليا؛ المؤسسات الأمريكية ويفعلون كل ما يمكن لجذب الطلاب من \nالبلدان الآسيوية. التغير في قيمة الدولار الأمريكي وضعف العوامل \nأداء بعض العملات الآسيوية القلق التي قد تؤدي \nإلى انخفاض في عدد الطلاب الذين يختارون التعليم في \nالولايات المتحدة الأمريكية.</p>\n<p>ولكن على الرغم من كل ذلك، فإن قيمة التعليم الجامعة الأمريكية \nلم ينخفض. وتبلغ قيمة شهادة من المعهد الأمريكي سمعته الطيبة \nللغاية في جميع أنحاء العالم، والطلاب الذين يسعون لإقناع \nأرباب العمل ينبغي أن تنظر بجدية دراسة في الولايات المتحدة.</p>', 'ar'),
(4, 'أسترليا', '<div itemprop="articleBody" class="art rgt_cnt oview"><p>أستراليا \nهي سادس أكبر دولة في العالم من حيث المساحة الكلية. مع ثاني عشر\nأكبر اقتصاد في العالم، كما أنها واحدة من أغنى \nدول العالم، وتقديم نوعية جيدة من الحياة.</p>\n<h2>بانخفاض تحت الأرض</h2>\n<p>من عجائب الهندسة المعمارية مثل دار الأوبرا في سيدني الشهير إلى \nالحاجز المرجاني العظيم، أكبر الشعاب المرجانية في العالم تمتد إلى \nأكثر من 1600 ميل، أستراليا يحتوي على كل ما يمكن للمرء أن يحلم أي وقت مضى.</p>\n<h2>كما وجهة الطلاب</h2>\n<p>استراليا هي وجهة الطالب شعبية، و\nومن المتوقع أعداد الطلاب الدوليين لزيادة بعد الأخيرة تخفيض تأشيرة مستويات الحكومة الأسترالية \nتقييم لمدة 38 دولة حول العالم، \nبما في الهند.</p>\n<p>الطلاب الهنود يشكلون أكثر من 9 في المائة من الطلاب \nسكان أستراليا. تتطلب قواعد التأشيرة الجديدة للطلاب الدوليين \nلإظهار أقل ثائق وبراهين أقل من الدعم المالي، \nكثيرا لصالح الطلاب.</p>\n<h2>أعلى خمسة أونيس</h2>\n<p>وفيما يلي نظرة على أبرز خمسة الجامعات الاسترالية وفقا لأحدث ترتيب عالمي للجامعات:</p>\n<ol><li>الجامعة الوطنية الاسترالية – التاسع عشر عالميا</li><li>جامعة ملبورن – الثاني والأربعون عالميا</li><li>جامعة سيدني – الخامس والأربعون عالميا</li><li>جامعة كوينزلاند – السادس والأربعون عالميا</li><li>جامعة نيو ساوث ويلز– السادس والأربعون عالميا</li></ol>\n<h2>خيارات الدراسة</h2>\n<p>الجامعات الاسترالية تقدم الطلاب الدوليين مجموعة من \nخيارات التعلم - درجة الدبلوم، درجة البكالوريوس، درجة الماجستير \nودرجة الدكتوراه. من إجمالي عدد الطلاب الدوليين، وتشارك تقريبا \n40٪ في برامج التعليم العالي وما يقرب من 18٪ في برامج اللغة الإنجليزية\n.</p>\n<p>وتقدم البرامج الأكاديمية في جميع أنحاء البلاد في مجالات \nالأعمال، والعلوم الإنسانية، والهندسة، والسياحة، والطب، وأكثر من ذلك. متوفرة للطلاب المستحقين \nالمنح الدراسية.</p>\n<h2>أسعار الرسوم الدراسية</h2>\n<p>التعليم في أستراليا، خلافا للاعتقاد الشائع هو الكثير جدا \nبأسعار معقولة. بشكل عام، يمكن درجة البكالوريوس تكلفة أقل كما \nعشرة ألاف دولار أسترالي; \nيمكن أن تكلف البرامج المهنية في جميع أنحاء\n خمسة ألاف دولار أسترالي\n و \n دراجات الدكتوراه \nحول ثمانية عشر ألف دولار أسترالي.\n إضافة إلى ذلك، العديد من <a href="http://www.hotcoursesabroad.com/india/fund-your-studies/how-to-get-scholarship-to-study-abroad/financial-assistance-for-higher-education-in-australia/" target="_blank">منح دراسية</a> بتمويل من المدارس الحكومية والخاصة الاسترالية متاحة للطلاب.</p>\n<p>سواء اهتمامك يكمن في الطبيعة، والتكنولوجيا، والفن، والثقافة، \nمغامرة، والغذاء، والنبيذ أو المؤسسات الأكاديمية ذات المستوى العالمي، أستراليا لديها بالتأكيد \nشيء بالنسبة لك، وهي بلد الفرص التي لا نهاية لها. سوف \nبالتأكيد أحب <a href="http://www.hotcoursesabroad.com/india/know-your-study-destination/how-to-get-ready-for-the-new-place/student-life-in-australia/" target="_blank">الحياة الطلابية في أستراليا</a>، وثقافة مغامر، وشعب ودود.</p>\n<p>وتشمل مناطق الجذب السياحي شعبية أخرى في أستراليا التي يمكن أن تختار \nلاستكشاف جسر ميناء سيدني، جزيرة فريزر، جولد كوست، \nأولورو-كاتا بارك تجوتا الوطنية، شارع المحيط، وبارك كاكادو الوطنية، و\nالمناطق النائية الشاسعة والغابات القديمة، والحياة البرية الفريدة والبحرية البكر \nالبيئات. هذه ليست سوى بعض الحقائق واحصائيات أن أتطرق إلى هذا النداء \nاستراليا كبلد.&nbsp;</p>\n<p><br></p>\n</div><br>', 'ar'),
(6, 'المملكة المتحدة', '<p>انكلترا واسكتلندا وويلز وأيرلندا الشمالية تشكل \nالمملكة المتحدة . كان هناك وقت عندما حكمت شركة الهند الشرقية و\nالملكية البريطانية أكثر من نصف العالم المعروف. كان البريطانيون اقامة البؤر الاستيطانية \nالتداول، المستعمرات، وترك في نهاية المطاف بصمة الإنجليزية على \nالأماكن تنتشر لمسافة تصل الى استراليا والهند وجزر الهند الغربية. \nاليوم، بريطانيا العظمى لديها ملكية دستورية معها المالكة \nالجلالة الملكة اليزابيث الثانية لا تزال تلهم الشعب من البلاد.</p>\n<h2>أحد أهم خيار لطلاب الآسيوي</h2>\n<p>وقفت المؤسسات مثل جامعة أكسفورد وجامعة كامبريدج \nاختبار الزمن واستمرت في إلهام و\nالطلاب التحدي لتصبح شخصيات مرموقة و\nمواطنين مسؤولين مع الدورات الممتازة. المملكة المتحدة لديها الآسيوية \nمجتمع قوي مع الناس من الهند وباكستان وبنغلاديش وسريلانكا ونيبال \nجميع الذين يعيشون هناك.</p>\n<h2>لماذا كان من المنطقي أن تختار المملكة المتحدة</h2>\n<ul><li>لا تزال أفضل جدا للتعليم في القانون والعلوم والإدارة والعلوم الإنسانية.</li><li>لديه خيرة مرافق البحث والتدريس.</li><li>تتوفر الطلاب أن تجد خيارات سكنية بأسعار معقولة، والكثير من بيوت الطلبة والإقامة في المنازل.</li><li>حضور قوي الجالية الآسيوية في المدن الرئيسية في المملكة المتحدة.</li><li>وهناك شهادة من مؤسسة مرموقة في المملكة المتحدة تعزيز سيرتك الذاتية.</li><li>عدد من <a href="http://www.hotcoursesabroad.com/india/fund-your-studies/how-to-get-scholarship-to-study-abroad/pg-scholarships-for-indian-students-studying-in-the-uk/" target="_blank">منح دراسية</a> يتم تقديمها من قبل المنظمات والجامعات عديدة.</li><li>الخيار للعمل بدوام جزئي والحصول على قيمة العمل والخبرة هو زائد كبيرة.</li><li>ويمكن للطلاب جدارة تقدم الى برنامج الدكتوراه وإجراء البحوث.</li></ul>\n<h2>أعلى دائرة إعلامية</h2>\n<p>في أحدث جامعة التصنيف العالمي، أربع مؤسسات من \nميزة المملكة المتحدة في قائمة أعلى 10. هذه هي الجامعات الأربع:</p>\n<ol><li>جامعة كامبردج – الثالث عالميا</li><li>جامعة أكسفورد – السادس عالميا</li><li>جامعة كلية لندن – السابع عالميا</li><li>إمبريال كوليدج لندن – الثامن عالميا</li></ol>\n<p>على الرغم من أن الولايات المتحدة الأمريكية لا تزال تسيطر على المجثم مع المؤسسات في أعلى 10 \nقائمة. مؤسسات من المملكة المتحدة تسير بنفس القدر من القوة. تسير وفقا الأخيرة \nالاتجاهات، وكثير من الطلاب الآسيويين تطبق للدراسة في مؤسسات مثل جامعة بانجور\n، جامعة أدنبرة، جامعة دندي وجامعة \nغلاسكو. ويرتبط هذا الاتجاه أيضا إلى حقيقة أن هذه \nالمدن هي أقل تكلفة بالمقارنة مع الذين يعيشون في لندن وبرمنغهام \nأو ليدز.</p>\n<h2>الحياة في المملكة المتحدة</h2>\n<p>اسكتلندا وايرلندا الشمالية وويلز وانجلترا جميعا الخاصة بهم \nالصفات. اعتمادا على المدينة التي تعيش فيها، وأسلوب الحياة يمكن أن \nتختلف بشكل كبير. على سبيل المثال، قد تجد أن الحياة في لندن هي \nالمحمومة ومشغول. بينما الحياة في دندي وبانجور هو أكثر لطيف، خففت \nوبسيطة. البريطانيون هم الناس خاصة جدا. لا ينبغي أن يكون طبيعتها الهادئة و\nمحفوظة مخطئا لالغطرسة. أثناء السفر \nفي نظام السكك الحديدية مترو أنفاق لندن، يمكن للمرء أن يلاحظ الناس يقفون \nويجلس بشكل منهجي. خسر في عوالمهم الخاصة، وقراءة كتاب أو الاستماع إلى الموسيقى\n. ومن النادر جدا للغرباء لجعل المحادثة \nفي مكان عام.&nbsp;</p>\n<p>الالتزام بالمواعيد والنظام طابور وبصمات الحياة البريطانية. واحد \nومن المتوقع أن يكون في الوقت المناسب للحصول على موعد، ويعتبر ذلك \nغير مهذب في وقت متأخر دون ابلاغ المضيف الخاص بك أو الشخص الذي من المقرر ان يجتمع\n. قوائم الانتظار منهجية وعرض الشعور \nالجيش الدقة. سواء كان بنك، محطة للسكك الحديدية أو مطار\n، يتعين على المرء أن الانتظار لدورة واحدة في قوائم الانتظار. لا يوجد الصراخ \nوتتصارع وتدافع الهوس من الناس في طوابير وهذا هو جزء لا بأس به \nمن الثقافة البريطانية.</p>\n<p>يمكنك قراءة المزيد عن الحياة الطلابية في المملكة المتحدة <a href="http://www.hotcoursesabroad.com/india/know-your-study-destination/how-to-get-ready-for-the-new-place/student-life-in-the-uk/" target="_blank">هنا</a>.</p>\n<h2>اماكن للزيارة</h2>\n<p>تقدم المملكة المتحدة على كنز دفين من الأماكن للزيارة ل\nمسافر الجسور. بعض الأماكن شعبية لزيارة في لندن هي قلعة وندسور، \nحديقة حيوانات لندن، جسر لندن، وبرج لندن، متحف مدام توسو الشمع \nالمتحف، وكاتدرائية سانت بول، وأكثر من ذلك.</p>\n<p>فإن أفضل شيء يمكن القيام به للحصول على ممر لندن - بطاقة مسبقة الدفع \nالذي يسمح لك الوصول إلى أكثر من 60 وجهة سياحية شعبية في \nوحول لندن. البطاقة تأتي مع فترات صلاحية مختلفة وغير \nمفيدة للغاية لرؤية البصر في لندن.</p>\n<p>اسكتلندا وويلز وأيرلندا الشمالية جميعا ساحر البقع نزهة الخاصة كذلك.</p>\n<h2>التقييم العالمي</h2>\n<p>جعلت قوانين الهجرة صرامة وزيادة في الرسوم الدراسية والإقامة \nتكاليف المملكة المتحدة أقل قليلا يمكن الوصول إليها من قبل. طالب علم <a href="http://www.hotcoursesabroad.com/india/get-your-visa/how-to-apply-for-a-visa/how-to-apply-uk-student-visa/" target="_blank">تأشيرة</a>\n من السهل إلى حد ما للحصول على. تواجه المملكة المتحدة أيضا منافسة شرسة من دول \nمثل سنغافورة وماليزيا التي تقدم دورات مماثلة في \nبتكلفة أقل بكثير. على الرغم من كل ذلك، فإن جاذبية درجة البريطانية \nلا تزال قوية والمتقدمين للمؤسسات الشعبية مثل \nمدرسة لندن للاقتصاد، كلية القانون وجامعة برونيل تواصل \nلترتفع في الأرقام.</p>', 'ar'),
(7, 'نيوزلاندا', '<div itemprop="articleBody" class="art rgt_cnt oview"><p>تقع في جنوب غرب المحيط الهادي \nونيوزيلندا والأرض المعروفة باسم طويل \nسحابة الأبيض للشعب الماوري المحلي، هي دولة جزيرة. ذلك \nتضم اليابسة جزر الشمال والجنوب جنبا إلى جنب مع العديد من الجزر الصغيرة\n. ثقافة نيوزيلندا هي متنوعة وفريدة من نوعها مزيج \nالماوري والتقاليد الأوروبية، مع تأثيرات من آسيا، بولينيزيا، \nوالعديد من البلدان الأخرى.</p>\n<h2>نيوزيلندا كوجهة دراسة</h2>\n<p>ليس فقط نيوزيلندا موقع مذهلة لتصوير الأفلام - لك \nقد نتذكر أن سيد الخواتم وقتل هناك. وإنما هو أيضا \nالمقصد طالب كبير. وفيما يلي بعض الأسباب لماذا يجب أن \nتعتبر نيوزيلندا كوجهة الدراسة.</p>\n<ul><li>وبرامج التعليم العالي في نيوزيلندا معروفة بجودة الجامعات والمؤسسات التعليمية في نيوزيلندا و\nالمعترف بها دوليا وبتقدير كبير من قبل أرباب العمل \nفي جميع أنحاء العالم.</li><li>معايير التدريس في البلاد ممتازة وسيقوم الطلاب \nتستفيد كثيرا من أحجام الفصول الصغيرة التي تقدم المزيد من الاهتمام \nفردية.</li><li>نظام التعليم في نيوزيلندا مكافآت الطلاب للإنجازات الأكاديمية والعملية على حد سواء. <a href="http://www.hotcoursesabroad.com/india/fund-your-studies/how-to-get-scholarship-to-study-abroad/scholarships-to-study-in-newzealand/" target="_blank">منح دراسية</a> تقدم للطلاب على أساس الجدارة.</li><li>نيوزيلندا بلد الشباب حيث تعتبر درجة عالية الحيلة و\nالاستقلال. ويمكن للطلاب نتطلع إلى غاية \nبيئة تعليمية داعمة حيث يتم تشجيعهم على رفع \nأسئلة وتنفيذ خلاق.</li></ul>\n<h2>خيارات الدراسة</h2>\n<p>وقد شيدت حكومة نيوزيلندا المعاهد الفنية، المملوكة للدولة \nالجامعات والكليات لتعزيز التعليم العالي. ويتكون مجتمع الجامعة \nالدولي نيوزيلندا ثمانية الجامعات.&nbsp;</p>\n<p>كل الجامعات الرائدة تعترف المؤهلات المكتسبة في نيو \nنيوزيلندا الجامعات. وهناك أكثر من 20 معهدا فنيا في نيوزيلندا. \nهناك حوالي 860 مؤسسات التدريب الخاصة التي هي في معظمها \nممولة من القطاع الخاص. هذه المعاهد تقدم برامج على مختلف الموضوعات \nبدءا من الضيافة لرياضة الغطس.</p>\n<p>يمكن للطلاب الاختيار بين الدبلوم، درجة والمهني و\nدورات العلوم التطبيقية. الطلاب الدوليين في حاجة إلى إنفاق في المتوسط ​​1200\nدولار نيوزلاندي كل شهر لإدارة نفقات معيشتهم في نيوزيلندا.</p>\n<h2>أعلى خمس جامعات</h2>\n<p>وفقا لجامعة التصنيف العالمي عام 2015، وفيما يلي أهم خمس جامعات نيوزيلندا:</p>\n<ol><li>جامعة أوكلاند – إثنان وثمانون عالميا</li><li>جامعة أوتاجو – مائة وثلاثة وسبعون عالميا</li><li>جامعة كانتربري – مائتان وإحدى عشر عالميا</li><li>جامعة فيكتوريا في ويلينغتون – مائتان تسعة وعشرون عالميا</li><li>جامعة ماسي – ثلاثة مائة وسبعة وثلاثون عالميا</li></ol>\n<h2>مناطق الجذب السياحي.</h2>\n<p>إلى جانب الأوساط الأكاديمية، وهناك دائما <a href="http://www.hotcoursesabroad.com/india/know-your-study-destination/how-to-get-ready-for-the-new-place/student-life-in-new-zealand/" target="_blank">غرفة للأنشطة</a>\n خارج الفصول الدراسية، نظرا مثل هذا الموقع رائع. \nالجزيرة الشمالية في نيوزيلندا هو معروف جيدا لالمقدسات الجزيرة ونشطة \nالبراكين - لديها خط من السلاسل الجبلية التي تعمل مع الأراضي الزراعية على \nكلا الجانبين. منازل جزيرة جنوب بعض من أنقى المناظر الطبيعية على \nأرضي لا تفوت على رؤية جنوب جبال الألب واسع، وهو \nالعمود الفقري للجزيرة الجنوبية.</p>\n<p>يمكنك التمتع المضايق الخلابة والأنهار الجليدية الرائعة، وعرة \nالجبال، وسفوح التلال المتداول، السهول الشاسعة والغابات شبه الاستوائية، وأميال من الساحل \nمع الشواطئ الرملية الجميلة. حتى في المدن الكبيرة \nتحيط بها الخضرة وتقع غير بعيد من \nالتلال في البلاد والسواحل.</p>\n<p>بالنسبة للطالب الدولي، نيوزيلندا يقدم كل مذهلة \nمشاهد وتعليم عالي الجودة. في السنوات الأخيرة، ونيوزيلندا \nتصبح وجهة الدراسة شعبية بالنسبة للعديد من الطلاب الهنود.</p>\n</div>', 'ar'),
(8, 'سنغافورة', '<div itemprop="articleBody" class="art rgt_cnt oview"><p>سنغافورة هي مدينة للدولة \nوجعلت دولة جزيرة تتكون من 63 جزيرة. البر الرئيسى \nسنغافورة هي واحدة من أكثر المناطق كثافة سكانية في آسيا. \nسنغافورة هو نسخة إنكليزيا اسم ''في سنغافورة ''، مما يعني \nعلى'' أرض الأسود''.</p>\n<p>التاريخ الحديث للسنغافورة يبدأ مع السير توماس ستامفورد رافلز \nاقامة بؤرة استيطانية التداول لشركة الهند الشرقية في 1819. \nوفي عام 1963، أعلنت سنغافورة استقلالها عن \nاتحاد الملايو البريطانية، وانضم. في عام 1965، اندلعت في البلاد بصرف النظر عن \nاتحاد الملايو، ومنذ ذلك الحين كان التقدم في سنغافورة من بلد متخلف \nإلى مركز مالي والتكنولوجي و\nقصة ملهمة.</p>\n<h2>في آسيا الناشئة التعليم العالي المحور</h2>\n<p>يأتي في المرتبة جامعة سنغافورة الوطنية (جامعة سنغافورة الوطنية) 12th و نانيانغ \nالجامعة التكنولوجية في المرتبة ال13 التي وأحدث العالمية \nالجامعات ترتيب الجامعات الآسيوية. المؤسسات الشعبية وقيادة \nالأخرى في سنغافورة هي:</p>\n<ul><li>&nbsp;&nbsp; &nbsp;كلية لاسالي للفنون</li><li>&nbsp;&nbsp; &nbsp;أكاديمية نانيانغ للفنون الجميلة</li><li>&nbsp;&nbsp; &nbsp;معهد التنمية الإدارية في سنغافورة</li><li>&nbsp;&nbsp; &nbsp;معهد سنغافورة للإدارة</li><li>&nbsp;&nbsp; &nbsp;معهد السحراء التميز</li></ul>\n<p>سنغافورة تحظى بشعبية كبيرة بين الطلاب الذين يرغبون في الدراسة \nدورات في الرسوم المتحركة، وتصميم، وتطوير اللعبة والموسيقى وغيرها دورات في القانون \nوالجمع بين دورات الدراسات العليا في الإدارة والهندسة و\nالخيارات الشعبية للغاية للطلاب من جنوب آسيا. مع العديد من الشركات التكنولوجية \nلديها مكاتب في سنغافورة وبعض المؤسسات \nتقديم منح دراسية للطلاب مع ''العمل في بند \nسنغافورة، أصبحت سنغافورة وجهة الدراسة شعبية ل\nالهنود.</p>\n<p>الطلاب الذين يختارون لدورات التعليم العالي في الهندسة أيضا \nلديها فرصة جيدة لتأمين فرص العمل في سنغافورة بعد فوزه \nالداخلي.</p>\n<h2>لماذا سنغافورة</h2>\n<ul><li>تدرس هذه الدورات في اللغة الإنجليزية.</li><li>هي أقل مقارنة الرسوم الدراسية ونفقات المعيشة إلى الولايات المتحدة الأمريكية والمملكة المتحدة. الكثير من <a href="http://www.hotcoursesabroad.com/india/fund-your-studies/how-to-get-scholarship-to-study-abroad/what-scholarships-are-available-for-students-to-study-in-singapor/" target="_blank">خيارات المنح دراسية</a> تتوفر أيضا.</li><li>مع العديد من الهنود والسريلانكيين الذين يعيشون هناك، وسنغافورة لديها جالية جنوب شرق آسيا قوي. <a href="http://www.hotcoursesabroad.com/india/know-your-study-destination/how-to-get-ready-for-the-new-place/student-life-in-singapore/">الحياة الطلابية</a> هو مثير جدا في سنغافورة!</li><li>سياسة إنفاذ القانون صارمة للبلاد وبيئة سياسية مستقرة تقدم للطلاب الكثير من السلامة.</li><li>عدم التسامح مع العنصرية والمخدرات.</li><li>بعض المؤسسات تقدم دورات في شراكة مع المؤسسات الأمريكية والأسترالية الرائدة.</li><li>اتصال جيد لبقية دول آسيا مثل سنغافورة واحدة من أفضل المطارات في المنطقة.</li><li>مع الأداء الأكاديمي الجيد، وفرص الحصول على وظيفة في سنغافورة مرتفعة.</li></ul>\n<h2>سنغافورة باعتبارها وجهة الدراسة</h2>\n<p>مع دوراته التعليم وأرفع بأسعار معقولة للغاية في \nعلوم الحاسوب والقانون والرسوم المتحركة، وسنغافورة هي دراسة ممتازة \nمقصدا للطلاب هنود. ال <a href="http://www.hotcoursesabroad.com/india/get-your-visa/how-to-apply-for-a-visa/how-to-apply-for-a-singapore-student-visa/" target="_blank">تأشيرة</a>\n العملية بسيطة وخالية من المتاعب أيضا. الطلاب الدوليين لديها \nخيار استكمال دورة أرفع التي هي على قدم المساواة مع ما \nالمعروضة في بريطانيا والولايات المتحدة، بتكلفة بشدة أرخص في سنغافورة. \nيجري على مقربة جدا إلى الهند يعني أيضا أرخص نقل الجوي أجرة.</p>\n<p>بالإضافة إلى ذلك، فتحت المؤسسات من الولايات المتحدة الأمريكية والمملكة المتحدة واستراليا \nحرم الأقمار الصناعية في سنغافورة لتقديم مقرراتهم في \nتكلفة المدعومة. مع ذلك العديد من العوامل الايجابية في مكان، وسنغافورة هي كل مجموعة ل\nتصبح الدراسة رقم واحد في الخارج وجهة للطلاب الآسيوية.</p>\n<p>&nbsp;</p>\n</div>', 'ar'),
(9, 'مالزيا', '<div itemprop="articleBody" class="art rgt_cnt oview"><p>ماليزيا بلد \nمن التنوع الذي يتغذى على التعددية الثقافية. فهي موطن ل\nالمجموعات العرقية العديدة، والأجناس، والأديان. موقعها الجغرافي \nيكاد متنوعة مثل ثقافتها. ماليزيا، والمعروفة باسم بوابة إلى \nآسيا، لديها فقط عن التوازن الصحيح من حياة المدينة والطبيعة. من برجي بتروناس \nكوالا لمبور إلى الغابات المطيرة، ماليزيا قليلا \nمن كل شيء. الذين يعيشون هناك تسمح لك لاستكشاف الجبال الوعرة، \nأشجار المانغروف والشواطئ الرملية.</p>\n<p>وهي دولة تقع في خضم بحر الصين الجنوبي وينقسم إلى قسمين\n، شبه الجزيرة وشرق ماليزيا. ويتكون شبه جزيرة ماليزيا \nتتكون من 1 الدولة و2 أقاليم فيدرالية. وشرق ماليزيا، وفصلها \nمن شبه جزيرة ماليزيا التي كتبها بحر الصين الجنوبي، وتتكون من 2 \nالدول والأراضي الاتحادية الثالثة.</p>\n<h2>أكثر من مجرد وجهة عطلة</h2>\n<p>ليس فقط هو ماليزيا مقصد سياحي، لأنه تحول أيضا \nليكون وجهة الدراسة شعبية. وقد جاءت ماليزيا في المرتبة الوجهة الدراسة ال11 \nالأكثر تفضيلا في العالم من قبل منظمة اليونسكو. يمكن \nأيضا أن يعزى هذا الارتفاع إلى هم جديدة وسهلة <a href="http://www.hotcoursesabroad.com/india/get-your-visa/how-to-apply-for-a-visa/applying-for-a-malaysian-student-visa-from-india/" target="_blank">عملية الحصول على التأشيرة</a>. حسابات الدولة أيضا لاثنين في المائة من إجمالي عدد الطلاب الدوليين في العالم.</p>\n<h2>تكلفة المعيشة</h2>\n<p>واحد من الأسباب الأكثر شعبية لماذا الطلاب الدوليين اختيار \nماليزيا هي منخفضة التكلفة في المعيشة ورسومها الدراسية بأسعار معقولة. \nالطلاب سوف تجد أيضا أن خيارات السكن لا بأس به \nبأسعار معقولة. متوسط ​​الإيجار الشهري لغرفة ويمكن أن تتراوح في أي مكان \nما بين 100 دولار إلى 150 دولار، اعتمادا على أماكن الإقامة الذي تم اختياره. \nالطلاب يمكن أن تحتوي حتى فاتورة الغذاء لمدة شهر إلى 150 دولار، و\nيكون ملابسهم لشهر به لمدة 20 دولار!</p>\n<h2>الأكاديمية</h2>\n<p>الكليات والجامعات الماليزية تقدم مجموعة واسعة من الدورات \nبدءا من مرحلة ما قبل الجامعة إلى الدراسات العليا. وتقدم \nالجامعية والدراسات العليا البرامج في مختلف المجالات بما في ذلك \nوالصيدلة، والطب، والهندسة، والقانون، والأعمال التجارية، الاقتصاد، \nالتجارة وتكنولوجيا المعلومات، والتعليم.</p>\n<p>وفيما يلي نظرة على أبرز خمسة الجامعات الماليزية وفقا لأحدث ترتيب الآسيوية:</p>\n<p>1.&nbsp;&nbsp; &nbsp;جامعة مالايا&nbsp;<br>\n2. &nbsp; &nbsp;جامعة العلوم الماليزية<br>\n3. &nbsp; &nbsp;جامعة ماليزيا للتكنولوجيا&nbsp;<br>\n4.&nbsp;&nbsp; &nbsp;جامعة كيبانغسان ماليزيا<br>\n5.&nbsp;&nbsp; &nbsp;جامعة بوترا الماليزية&nbsp;</p>\n<p>وماليزيا أيضا معروفة جيدا لكونها موطن لفرع حرم \nالمؤسسات الأجنبية في معدلات الرسوم الدراسية بأسعار معقولة. ومن الأمثلة على هذه \nالجامعات هي جامعة موناش، جامعة سوينبرن للتكنولوجيا، \nجامعة كورتين للتكنولوجيا، جامعة نوتنغهام، رافلز معهد التصميم \n. <a href="http://www.hotcoursesabroad.com/india/fund-your-studies/how-to-get-scholarship-to-study-abroad/scholarships-to-study-in-malaysia/" target="_blank">منح دراسية</a> تتوفر للطلاب المستحقين.</p>\n<p>خارج الفصول الدراسية، وهناك <a href="http://www.hotcoursesabroad.com/india/know-your-study-destination/how-to-get-ready-for-the-new-place/student-life-in-malaysia/" target="_blank">العالم من الأنشطة</a>\n يمكنك استكشاف. يمكنك استكشاف جزر بينانغ ولانكاوي، \nبانكور وجزيرة تيومان وتجربة عطلة شاطئ لطيفة، أو إلقاء نظرة \nفي مراحل ملونة من تاريخ الملايو في بينانغ. يمكنك أيضا التوجه \nوصولا الى كهوف باتو الشهيرة، وهو 400 مليون سنة الحجر الجيري القديم تلة \nمع سلسلة من الرعب الكهوف والمعابد ملهمة الكهف. شغل في الحياة الطلابية في ماليزيا \nمع مثل هذه الفرص للمغامرة.</p>\n</div>', 'ar'),
(10, 'كندا', '<div itemprop="articleBody" class="art rgt_cnt oview"><h2 style="font-style:normal; text-align:start">صورة بطاقة بريدية الجمال من البحر إلى البحر!</h2>\n<p style="text-align:start">الوصول للولايات المتحدة الأمريكية وكندا - بالنسبة للمبتدئين، هو شيء صعب هم من البلاد ذات الست مناطق زمنية, \nأكبر ساحل في العالم، وأكثر عدد من البحيرات من جميع بحيرات العالم مجتمعة!&nbsp;&nbsp; هذا اليابسة كبيرة (ثاني أكبر ليكون أكثر دقة)، كندا، يأخذ نفسا في العالم بعيدا مع مجموعة مهيب للالمناظر الطبيعية، والقمم الجليدية، حقول الجليد، والغطاء النباتي الأخضر، والجبال واسعة النطاق. ونعم / oui- لديها لغتين رسميتين - الإنجليزية \n&amp; والفرنسية!</p>\n<p style="text-align:start">مليئة مناطق الجذب السياحي شعبية، وهناك قائمة طويلة من العجائب الطبيعية الكندية للطلاب لمشهد نرى. الأكثر زيارة المواقع السياحية في لمحة سريعة على شلالات نياجرا، وأكنغن بحيرة 135 كم طويلة مع وحشها أوجوبوجو المخيف، والحديقة الوطنية الجليدية، وحديقة بانف الوطنية، وجبال روكي الكندية، على سبيل المثال لا الحصر.</p>\n<h2 style="font-style:normal; text-align:start">خبز البيغل &amp; شراب القيقب!</h2>\n<p style="text-align:start">من قمم الطبيعية لناطحات السحاب، كندا فقد كل شيء! مونتريال وتورنتو هما مدن ضخمة التي تقدم كل شيء تقريبا الطلاب يمكن ان تسأل عنه..</p>\n<p style="text-align:start">تورنتو هي مدينة ديناميكية التفاخر ارتفاع ناطحات السحاب، والتي يبدو تتضاءل إلى جانب برج سي إن الشهيرة على مستوى العالم. هذه المدينة المتنوعة عرقيا هي أيضا مركز رئيسي للتعليم العالي والبحث مع العديد من المؤسسات التعليمية المعروفة مثل جامعة تورنتو.</p>\n<p style="text-align:start">مدينة القديسين، مونتريال، هو الذي يتحدى كل التوقعات مع مزيج الخصبة في أمريكا الشمالية &amp; \nاختيال الأوروبي والثقافة المتطورة. التصنيف العالمي جامعة 2015 ترتيب مدينة في المركز الثامن، أفضل لاعب في العالم ليكون الطالب أحادي. ما هو أكثر من ذلك ... الأمم المتحدة في المرتبة باستمرار كندا واحدة من أفضل الأماكن في العالم للعيش في- بالنظر إلى معدلات لها انخفاض معدل الجريمة. وهناك أيضا ''المشي برامج آمنة'' لمساعدة الناس في الحصول على وسائل النقل العام في ساعات متأخرة.</p>\n<h2 style="font-style:normal; text-align:start">الأبواب مفتوحة!</h2>\n<p style="text-align:start">Cكندا هي البلد الأكثر تعليما في العالم مع أكثر من نصف سكانها يجري خريجي الجامعات. على عكس المنزل الخلفي، والبلد لايوجد نظام التعليم المركزي ولكن ليس تحت ولاية كل من إقليمها. ومن بين المراكز الثلاثة الاولى في العالم من حيث الإنفاق للفرد الواحد في مرحلة ما بعد التعليم الثانوي العام، وفقا لمنظمة التعاون الاقتصادي والتنمية.</p>\n<p style="text-align:start">الكندي أونيس وعرف جيدا لدرجة جودتها العالية وكل عام، ما لا يقل عن 12 دائرة الإعلام في تدخل الكرة إلى التايمز للتعليم العالي الملحق الأعلى 200.&nbsp;</p>\n<h2 style="font-style:normal; text-align:start">خيارات، خيارات، خيارات!</h2>\n<p style="text-align:start">ويمكن للطلاب أن يكون اختيارهم من بين أكثر من 10،000 البرامج الجامعية والدراسات العليا المقدمة عبر ما يقرب من 92 دائرة الإعلام بالإضافة إلى 175 كليات المجتمع.</p>\n<p style="text-align:start"><strong>نظرة على ما للدراسة في كندا:</strong></p>\n<ul><li>مستوى الشهادة (سنة واحدة)</li><li>مستوى الدبلوم (واحد أو عامين)</li><li>دبلوم متقدم (اثنان أو ثلاثة أعوام)</li><li>درجة البكالوريوس (أربع سنوات من الدراسة بدوام كامل)</li><li>دبلومات الدراسات العليا / شهادات (واحد أو عامين)</li><li>درجة الماجستير (1-2 سنوات)</li><li>الدكتوراه أو دكتوراه (4-7 سنوات)</li></ul>\n<p style="text-align:start">بعض الدورات شعبية على مستوى البكالوريوس في الهندسة &amp; بكالوريوس في الدراسات الإدارية، وعلى مستوى الدراسات العليا في الإدارة، ودرجة الماجستير في إدارة الأعمال، ماجستير وبكالوريوس في القانون.</p>\n<p style="text-align:start">للراغبين في الذهاب للدراسة - \nقد ضربت الذهب كندا هو المكان المناسب لك! يحدث البحوث لتكون واحدة من المكونات الرئيسية للتعليم الكندي. الحكومة الكندية ودعم البحوث الصناعية في المناطق بما في ذلك الاتصالات السلكية واللاسلكية، والطب، والزراعة، وتكنولوجيا الحاسوب، والعلوم البيئية.</p>\n<h2 style="font-style:normal; text-align:start">انظم الان!</h2>\n<p style="text-align:start">وهنا عدد قليل من دائرة الإعلام في كندا من حيث السمعة الطيبة ... جامعة كونكورديا، جامعة ماكماستر، جامعة ماكغيل، جامعة ألبرتا، جامعة كوينز، جامعة دي مونتريال، جامعة كولومبيا البريطانية، جامعة تورنتو، جامعة كالغاري، جامعة ويسترن اونتاريو، جامعة واترلو، وجامعة يورك.</p>\n<h2 style="font-style:normal; text-align:start">مجانين &amp; توونيس!</h2>\n<p style="text-align:start">ثمن للدراسات العليا في كندا هي تقريبا نصف فقط بقدر ما سيكون في غيرها من الوجهات الدراسة الرائدة مثل الولايات المتحدة.&nbsp; الطلاب سوف يكون دفع في أي مكان من CAN 12،000 $ (حوالي 6،35،000 INR) إلى CAN 35،000 $ (ما يقرب من 18،50،000 INR) لبرامج البكالوريوس، ومن CAN 10،000 $ (حوالي 5،30،000INR) إلى CAN 39،000 $ (ما يقرب من 20،70،000 INR) لبرامج الدراسات العليا سنويا.</p>\n<p style="text-align:start">نفقات المعيشة السنوية يمكن أن تتراوح CAN $ 7،000-14،000 (ما يقرب من 3، 70،000-22،20،000INR). بما في ذلك أماكن الإقامة التي قد تكلف الطلاب في أي مكان بين 4000 $ إلى 9000 $ (2،11،000- 4،80،000INR) سنويا. هذه هي احصائيات موثوقة التي تم سحبها من قاعدة البيانات الخاصة جدا لدينا.</p>\n<p style="text-align:start">دائرة الإعلام الكندية تقدم في الغالب ما يصل إلى أربعة مآخذ في سنة- الأكاديمية يناير وأبريل ومايو، وسبتمبر. وينصح الطلاب الدوليين لتطبيق في أسرع وقت ممكن، والمنح الدراسية والقبول الحصول على أكثر وأكثر قدرة على المنافسة أقرب إلى الموعد النهائي.</p>\n<h2 style="font-style:normal; text-align:start">سحب كندا!</h2>\n<p style="text-align:start">وبصرف النظر عن الاعتراف العالمي، في الخارج\nتؤكد المستشارين التعليم أن عدد الطلاب قد زاد خلال\nبسبب السنوات أيضا إلى القيود على تأشيرات الدخول، وارتفاع تكاليف التعليم، و\n  تراجع حاد في فرص العمل بعد درجة في الآخر\nوجهات دراسة دولية.</p>\n<p style="text-align:start">الطلاب الدوليين قد عمل بدوام جزئي\nلمدة 20 ساعة في الأسبوع - عموما خلال الأشهر الستة الأولى في الحرم الجامعي وخارجه\n  الحرم الجامعي ما بعد هذه الفترة. أثناء الإجازات، وأنها يمكن أن تعمل لمدة تصل إلى 40\nساعات ومتوسط الأجور يمكن أن تكون في أي مكان على طول خطوط CAD $ 7 إلى\nCAD 10 $ للساعة الواحدة (370 إلى 520INR في الساعة) أو حتى أكثر من ذلك. دائرة الإعلام الكندية\nأيضا بتقديم برامج تدريبية مدفوعة الأجر إلى جانب طبعا- في الغالب ل\nبرامج الدراسات العليا مثل الماجستير في إدارة الأعمال.</p>\n<p style="text-align:start">وأنها تحصل على أفضل ... بعد التخرج،\nيمكن للطلاب الأجانب التقدم بطلب للحصول ما يعرف باسم مرحلة ما بعد التخرج\nتصريح العمل، والتي تتيح لهم الفرصة للعمل في البلد ل\n  فترة ثلاث سنوات. الطلاب لا تحتاج حتى أن يكون عرضا للعمل في\nاليد في حين التقدم بطلب للحصول على تصريح! وليس من عجب الكندية\nشهدت أعداد الطلاب الدوليين على ارتفاع 84٪ خلال العقد الماضي.</p>\n<h2 style="font-style:normal; text-align:start">أساسيات الحياة الطلابية!</h2>\n<p style="text-align:start">من طبعا- هذا ليس كل شيء فقط حول\nالتصنيف والرسوم، الذين يدرسون في كندا يجلب معه أيضا غيرها الكثير\nفوائد. والسلكية حرم يوني الكندية مع أحدث تكنولوجيا\nوسائل الراحة الحديثة، الأولمبية - مرافق رياضية جودة، والمعارض الفنية،\n  وقاعات الحفلات الموسيقية العامة. سوف تتاح للطلاب فرص لا تصدق\nلقاء الأقران مثل التفكير واكتساب الطلاب الدوليين قيمة\nالخبرة من خلال الأندية الطلابية والحكومات يديرها الطلاب. بعض المرح\nطرق للطلاب لهدئ أعصابك (لا يقصد التوريه!) خارج بهم\nوتشمل الفصول الدراسية الإبحار، والمشي والتزلج والتزلج\n!&nbsp;</p>\n<p style="text-align:start">ويمكن أن يتمتع حقا نشطة ومتنوعة\nنمط الحياة في هذا البلد الجميل، جنبا إلى جنب مع الرعاية الصحية الكبيرة\nفوائد، والأهم من ذلك الشيء الذي كندا الأكثر شهرة ل-\nسهولة من السكان المحليين مهذبا.</p>\n<h2 style="font-style:normal; text-align:start">كسر الجليد الكندي!</h2>\n<p style="text-align:start">حتى توقيت الأولى يجب أن تعرف مع نمط الكندي قليل أن لا تؤتي ثمارها وقحا كما أو سوء ومهذب…</p>\n<ul><li>الكنديون تأخذ زمام الأمور من آداب على محمل الجد تماما لذلك لدى لقائه\nشخص ما لأول مرة، مصافحة شركة بينما يجتمع والمغادرين\n  هو من أجل!</li><li>الكنديون رسمي عندما يتعلق الأمر بالذكر أسماء وألقاب.\nاستخدام مشاركة اسمائهم والقابهم المناسبة حتى طلب للاستفادة من\nأول أسمائهم - تستخدم في الغالب إلا من قبل الأصدقاء المقربين والعائلة.</li><li>يجب إزالة النظارات الشمسية والقبعات عند التحدث مع شخص ما.</li><li>وأيضا يعتبر وقحا لاجراء محادثات مع إبقاء اليدين في جيبك.</li></ul>\n<p style="text-align:start">&nbsp;</p>\n<p style="text-align:start">هذه ليست سوى عدد قليل من سيرة ذاتية العادى. إستكشاف\nالثقافة الكندية جيدا بضعة أشهر قبل وصولك هناك للمساعدة\n  المنصوص عليها في لبيئة جديدة بشكل أسرع وتقليل الصدمة الثقافية.&nbsp; لكن\n  حقا - في ضوء كل الحقائق واحصائيات - حيث من الأفضل أن يتوجه إلى الآن ل\nالدراسات العليا من كندا ?&nbsp; في النمط الكندي صحيح!</p>\n</div>', 'ar'),
(11, 'ألمنيا', '<div itemprop="articleBody" class="art rgt_cnt oview"><p><span style="font-size:13px">ألمانيا\n  لديها تاريخ طويل من شراكات أكاديمية مع الهند. عدد كبير\nوقد زار المثقفين الهند على مر السنين لإجراء بحوث حول\nالترجمات القديمة النصوص الهندية ونشرت أعمال مثل\n"الفيدا"، و "رامايانا" و "ماهابهاراتا". الحربين العالميتين و\nتصور ألمانيا بعد الحرب، والانقسام وتوحيد\nوسجلت البلاد كلها في التاريخ. ما يجب فحص غير\nالمثابرة محض والمهارة التي ألمانيا إعادة بناء نفسها و\nالتطورات الكبيرة التي بذلت في مجال العلوم والتكنولوجيا التي أنجزتها\nالمهندسين الألمان. قليلا لا بأس به من الفضل في هذا يعود إلى الألمانية\nالجامعات التي تقدم تعليم عالي الجودة.</span></p>\n<h2>ألمنيا - خطوط عريضة</h2>\n<ul><li>العصمة برالين</li><li>مدن أخرى هامة – بون، ميونخ، كولونيا، هامبورج، هانوفر وفرانكفورت</li><li>عضو مؤسس في الاتحاد الأوروبي</li><li>العملات - اليورو</li><li>اللغات التي يتحدث بها - الألمانية، الهولندية، الإنجليزية</li><li>أقدم جامعة - جامعة هايدلبرغ - التي أنشئت عام 1386</li><li>الصناعات - سيارات والهندسة والتصنيع والسياحة والزراعة.&nbsp;</li></ul>\n<h2>لماذا لا يمكن تجاهل ألمانيا?</h2>\n<ul><li>التعليم المجاني في جميع الجامعات الحكومية التي تديرها الدولة.</li><li>إذا كنت تعرف الألمانية واختيار تدرس باللغة الألمانية ينطبق على إعفاء من الرسوم.</li><li>يقضي الطلاب فقط على الغذاء والسكن والسفر.</li><li>إذا كنت محظوظا بما فيه الكفاية للتسجيل في القائمة على البحوث بعد الدكتوراه\nبرنامج، هناك احتمالات عالية منكم تأمين سخية\nمنحة بحثية، والتي سوف تغطي النفقات الخاصة بك.</li><li>مرافق البحوث الطبقة - الأعلى</li><li>الوصول السريع إلى بلدان أخرى في أوروبا</li><li>فرص للعمل أثناء الدراسة وبعد الدراسة المنح عمل تأشيرة.</li><li>الألمان لديهم سحر عميق الجذور للهنود والهندي\nالثقافة وهناك مجتمع قوي من الهنود المغتربين في قيادة\n  المدن الألمانية.</li></ul>\n<h2>أفضل عشرة جامعات</h2>\n<p>أعلى عشر جامعات في ألمانيا:</p>\n<ol><li>جامعة ميونخ التقنية</li><li>جامعة هايدلبرغ</li><li>جامعة لودفيغ ماكسيميليان في ميونخ</li><li>يت، معهد كارلسروه للتكنولوجيا جامعة كارلسروه</li><li>جامعة برلين الحرة</li><li>جامعة هومبولت في برلين</li><li>جامعة فرايبورغ</li><li>رينيش - غرب ستفاليا التقنية جامعة آخن</li><li>Gجامعة غوتنغن</li><li>جامعة توبنغن.</li></ol>\n<p><a href="http://www.hotcoursesabroad.com/india/find-your-course/how-to-choose-the-right-study-abroad-destinations/top-ten-universities-in-germany/">قراءة هذا المقال</a> لمعرفة المزيد حول كل من المؤسسات.</p>\n<h2>برنامج ايراسموس</h2>\n<p><a href="http://ec.europa.eu/programmes/erasmus-plus/index_en.htm">ايراسموس</a>\n هو برنامج الاتحاد الأوروبي للتعليم والتدريب والشباب والرياضة\nلم يطور حاصل توظيف الشباب في أوروبا والدعم\n  تعليمهم. وهناك عدد من البلدان الشريكة خارج أوروبا\n  الذي بالتالي يمكن أن تستفيد من هذا البرنامج. الهند يندرج في هذه الفئة\n  من بلد شريك ايراسموس والطلاب الذين يستوفون الأهلية\nيمكن أن تنطبق شروط منح إيراسموس للدراسة في ألمانيا.</p>\n<p>يعمل هذا إذا كنت مسجلا بالفعل كطالب في الهند\nالجامعة جميع الذي هو عضو في ميثاق ايراسموس للتعليم العالي.\nيمكنك ثم تطبيق الدراسة للحصول على درجة أعلى في إحدى الجامعات الألمانية،\nجميع وهو لذلك جزء من ميثاق ايراسموس.</p>\n<h2>اليعيش كطالب في ألمانيا</h2>\n<p>ألمانيا هو مكان عظيم للطلاب للعيش والدراسة. إذا كنت تستطيع\nآمنة الإقامة في الحرم الجامعي هو صفقة جيدة بالنسبة لك. يمكنك\nعبر الاختيار إذا يمكنك التسجيل للحصول على خطة وجبة أو إذا كنت في الحرم الجامعي\nالمباني السكنية تسمح لك ان تفعل الخاص بك الطبخ في المطبخ المشترك أو\nمطابخ داخلية. بدلا من ذلك، إذا كنت تستطيع أن تعيش في القطاع الخاص\n  شقة بالقرب من الحرم الجامعي الخاص بك وهذا هو اختيار جيد كذلك. والقطاع الخاص\nسوف شقة لا يجبرك على التمسك مواعيد صارمة وسيسمح\nلك الاحتفاظ استقلالكم.</p>\n<p>وبعد متوسط الأسعار من <strong>“رقم”</strong> تعطيك فكرة عادلة من تكاليف المعيشة في ألمانيا:</p>\n<ul><li>الحليب (العادية)، (1 لتر) - 0.74 € &nbsp; &nbsp;</li><li>رغيف من الخبز الأبيض الطازج (500G) - 1.39 € &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</li><li>الأرز (أبيض)، (1KG) - 1.44 € &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</li><li>بيض (12) - 1.70 €</li><li>وجبة، ومطعم غير مكلفة - 10.00 €</li><li>كولا/بيبسي (زجاجة 0.33 لتر)-1.98 يورو</li><li>المياه (زجاجة 0.33 لتر)-1.63 يورو</li><li>الأساسية (الكهرباء والتدفئة والمياه والنفايات) ل85m2 شقة - 217.44 €</li><li>شقة (غرفة نوم 1) في سيتي سنتر - 627.79 €.</li></ul>\n<h3>السفر والنقل</h3>\n<p>والبلاد اتصال جيد من قبل شبكة السكك الحديدية وداخل المدن،\nالحافلات وقطارات المترو تقدم السفر بأسعار معقولة. ال\nبين المدن اكسبريس المعروف شعبيا باسم يربط المدن الرئيسية بما في ذلك\n  جهات دولية في النمسا، بلجيكا، الدنمارك، فرنسا،\nهولندا وسويسرا. إذا كنت من محبي السفر عن طريق الحافلة، يمكنك\nتختار لخدمة الحافلات أيضا. الطلاب عادة ما يقضون وقت العطلة\n  اختيار لباس رايل والسفر في جميع أنحاء المدن الجميلة في\nأوروبا. في ألمانيا نفسها، يمكن للطلاب زيارة القلاع المذهلة،\nالمتاحف والكنائس والنصب التذكارية للحرب العالمية واكتشاف غريبة بعض الشيء\n  المطاعم في القرى الجبلية. إذا كنت تستطيع السفر، فإنك\n  يجب أن لا تفوت على جمال ألمانيا. مهرجان أكتوبر حيث\n  يأتي العالم معا لتذوق البيرة على ما يرام هو حدث عظيم للحضور.\nمهرجان برلين السينمائي يجمع بعض من العالم أروع\nصناع السينما وإبداعاتهم على منصة واحدة.</p>\n<h2>تجربة الحياة</h2>\n<p>تقدم ألمانيا تجربة حياة رائعة. سواء كان ذلك كرة القدم، والغذاء،\nالموسيقى أو البيئة هناك آراء قوية بين الجمهور ل\nكل قضية. بالنسبة لمعظم المواطنين من كبار السن ذكريات الحرب\nالتشعب من البلاد وسقوط جدار برلين لا تزال\nيطارد ذكريات وأنه من الأفضل لتجنب تنشئة مثل هذه المواضيع في\nمحادثة. ويركز جيل جديد من الانجازات أداء عالية\n  على خلق حياة أفضل لأنفسهم و "العمل الجاد والحزبية\nأصعب الثقافة "بارزة للغاية في البلاد!</p>\n<p>كما طالب لا بد أن تركز على الأهداف والخاص\nإكمال درجة الخاصة بك. لديهم التوازن الصحيح للدراسات ومتعة وكسب\n  ومعظم وقتك في ألمانيا! لقد وضعنا معا قائمة\nالجامعات الألمانية البارزة وفهرسة دراستهم. هل زيارة\n  قوائم الدورة وتقديم طلب للحصول على البرنامج في جامعة يلائم\nمتطلباتك.</p>\n</div>', 'ar'),
(12, 'هونج كونج', '<div itemprop="articleBody" class="art rgt_cnt oview"><p>ماهذا\n  عقلك تستحضر عندما تسمع عبارة "هونج كونج"؟ إذا كنت\nالتفكير في مدينة حديثة جدا مع ناطحات السحاب، سباق الدراجات النارية مشغول\nالممرات مع السيارات الراقية ومراكز التسوق الكبيرة والأسطوري بروس لي\n  الأفلام، ثم تخمين الخاص بك هو الصحيح.</p>\n<p>بصمة من الإمبراطورية البريطانية بشكل واضح لا تزال واضحة في هونغ\nهونغ. منذ عام 1997، وظائف هونغ كونغ مع حكومتها الخاصة و\nالعملة، ولكن هي رسميا جزء من الصين. هونغ كونغ اليوم هو\nمدينة عالمية تعج بالحركة الذي يضم مكاتب قمة دولية\nالشركات البنوك، والمستحضرات الدوائية والتكنولوجيا.</p>\n<p>هونج كونج تخرج ببطء كوجهة دراسة فعالة من حيث التكلفة، وكذلك؛ إذا واحد يختار لقضاء بعض الوقت لتعلم الماندرين.</p>\n<p>بعض مزايا الدراسة في هونغ كونغ هي:</p>\n<ul><li>&nbsp;تكاليف الرسوم الدراسية هي أقل بكثير بالمقارنة مع الولايات المتحدة أو المملكة المتحدة.</li><li>&nbsp;هونغ كونغ هو المدخل إلى البر الرئيسي للصين ويوفر لهم حياة عالمية حقا.&nbsp;</li><li>&nbsp;هونج كونج لديها جالية هندية قوية.</li><li>&nbsp;السكن الجامعي هي الأفضل والأكثر فعالية من حيث التكلفة خيار الإقامة</li><li>&nbsp;هونج كونج لديها الكثير لتقدمه للمسافر. يمكنك استكشاف الحياة الليلية النابضة بالحياة، والطبيعة، الرحلات، وبقية الصين.</li><li>&nbsp;اذا تمكن واحد لتعلم الماندرين وإتقان في\nاللغة، ثم يصبح من الأسهل كثيرا على تأمين وظيفة في هونج كونج\n  تخرج.</li><li>&nbsp;مع الكثير من الرحلات الجوية المباشرة من جميع المدن الرئيسية في الهند وهونغ كونغ هو أكثر من ذلك بكثير يمكن الوصول إليها من الولايات المتحدة أو المملكة المتحدة.</li></ul>\n<h2>أعلى ثلاث جامعات</h2>\n<p>ثلاث مؤسسات من ميزة هونغ كونغ في "أفضل 50 تحت 50 ''\nالتصنيف العالمي للتصنيفات العالمية. تصنف أنها في هذا النظام:</p>\n<p>1.&nbsp;&nbsp; &nbsp;يأتي في المرتبة جامعة هونغ كونغ للعلوم والتكنولوجيا لأول مرة.<br>\n2.&nbsp;&nbsp; &nbsp;يأتي في المرتبة جامعة مدينة هونغ كونغ المركز الخامس.<br>\n3.&nbsp;&nbsp; &nbsp;يأتي في المرتبة جامعة هونغ كونغ للفنون التطبيقية التاسع.</p>\n<p>هذا يدل دلالة على تعليم عالي الجودة الذي هو على العرض في\n  هونغ كونغ. في السنوات الأخيرة، وقد اختار عدد من الطلاب أيضا ل\nدراسة دورات الطب والمرتبطة بها في هونغ كونغ، حيث أن الرسم هو\nأقل بكثير. ولدى عودته إلى الهند بعد استكمال علاجهم\n  الدراسات، وتطهير امتحان سيسمح لهم بممارسة باعتباره مسجل\nطبيب في الهند.</p>\n<h2>لماذا هونغ كونغ</h2>\n<p>هونج كونج تتكاثر بالتأكيد إلى قوية الدراسة في الخارج\nمقصدا للطلاب هنود إلى دول مثل المملكة المتحدة وتشديد <a href="http://www.hotcoursesabroad.com/india/get-your-visa/how-to-apply-for-a-visa/steps-involved-in-applying-for-a-hong-kong-student-visa/" target="_blank">تأشيرة طالب </a>المعايير\n  وتكلفة الهواء السفر يتزايد مع مرور كل يوم. كونغ\nفي هونغ قربها من الهند، وأساليب تركز على التعليم وتكاليف الرسوم الدراسية منخفضة\nوشبكة البحوث الممتازة هي بعض من الأسباب الرئيسية ل\nيجب على الطلاب الهنود يعتبرون دراسة في هونغ كونغ. وهناك عدد\n  من <a href="http://www.hotcoursesabroad.com/india/fund-your-studies/how-to-get-scholarship-to-study-abroad/scholarships-for-studying-in-hong-kong/" target="_blank">خيارات منحة دراسية </a>متاح للطلاب الهندية، فضلا عن.</p>\n</div>', 'ar'),
(13, 'أيرلندا', '<div itemprop="articleBody" class="art rgt_cnt oview"><p>There\r\n is something definitely magical about Ireland — it’s the land of elves,\r\n leprechauns, castles, warriors and balladeers. Ireland has a special \r\ncharm that bonds all Irish men and women together.</p>\r\n<p>The Republic of Ireland is not to be confused with Northern Ireland, \r\nwhich is still an integral part of the United Kingdom. Ireland''s 800 \r\nyears of rule under the British monarchy was a period of intrigue, \r\nstrife, famine, progress and intellectual development as some of the \r\nmost famous works in English Literature were written. Writers like \r\nGeorge Bernard Shaw, Oscar Wilde and James Joyce are all part of the \r\nIrish literary world.</p>\r\n<p>With visa rules becoming stricter in the UK and the US, Ireland should definitely be considered as a study destination.</p>\r\n<h2>Reasons to study in Ireland:</h2>\r\n<ul><li>&nbsp;Courses are taught in English</li><li>&nbsp;Courses are globally recognised and accredited by leading academic bodies</li><li>&nbsp;<a href="http://www.hotcoursesabroad.com/india/fund-your-studies/how-to-get-scholarship-to-study-abroad/scholarships-for-studying-in-ireland/" target="_blank">Scholarships</a> are given for deserving students</li><li>&nbsp;Strong Asian community</li><li>&nbsp;Close proximity to London and is well-connected to the rest of Europe - the <a href="http://www.hotcoursesabroad.com/india/know-your-study-destination/how-to-get-ready-for-the-new-place/student-life-in-ireland/" target="_blank">student life</a> is something everyone must experience</li><li>&nbsp;A land of astounding beauty with some amazing cliffs, lakes and beaches</li></ul>\r\n<h2>Top Ten Institutions in Ireland</h2>\r\n<p>There are more than 30 Universities in Ireland. The top 10 institutions in Ireland are:</p>\r\n<ol><li>Trinity College Dublin and University of Dublin</li><li>University College Cork</li><li>University College Dublin</li><li>Dublin City University</li><li>University of Limerick</li><li>National University of Ireland, Galway</li><li>Dublin Institute of Technology</li><li>National University of Ireland, Maynooth</li><li>Royal College of Surgeons in Ireland</li><li>Cork Institute of Technology</li></ol>\r\n<h2>Life in Ireland</h2>\r\n<p>The Irish are known to be fun-loving people and take great pride in \r\ntheir Nordic-Saxon heritage. The country suffered during the economic \r\ndownturn of 2008 but has fared pretty well and is focussing a lot on \r\ntourism to draw foreign exchange and improve the economy. As a student \r\nwith a modest lifestyle; one can live comfortably with about 1500 to \r\n1600 Euros a month. The Irish are extremely passionate about their food \r\nand drink and most towns have restaurants that cater to every budget and\r\n taste. Bread, Irish stew, Shepherd''s Pie and a glass of Guinness are a \r\nbig part of the Irish cuisine. The Irish are also passionate about rugby\r\n and football, and even cricket is gaining popularity today.</p>\r\n<p>Ireland is a place of amazing natural beauty and some of the popular tourist spots are:</p>\r\n<ul><li>Saint Patrick''s Cathedral in Armagh and in Dublin</li><li>Dublin Castle - the seat of power of the British empire when they ruled Ireland</li><li>The Rock of Cashel - an ancient fortress town.</li><li>Kilkenny Castle - originally built in 1172 as a wooden structure, it\r\n is now a stone structure and maintained as a heritage site by the \r\ngovernment.</li><li>The National Gallery of Ireland - a museum preserving Irish and European art collections.</li></ul>\r\n<h2>Why Ireland</h2>\r\n<p>With the cost of living in Ireland being considerably lesser when \r\ncompared to London, Dublin and Cork have become attractive options for \r\ntop class higher education. The proximity to London also allows students\r\n to visit London during the weekends. Ireland offers University degrees \r\non par with those offered in the UK and the USA, and at a lesser cost. \r\nYou can save a lot of money by opting to study in Ireland.</p>\r\n</div><br>', 'ar'),
(14, 'السويد', '<div itemprop="articleBody" class="art rgt_cnt oview"><p>Sweden, the \r\nthird largest country in the European Union, is located in Northern \r\nEurope. With a population of nearly 9.5 million, it has a low population\r\n density. Sweden remains a popular destination for its "nature tourism",\r\n receiving international visitors from the world-over who enjoy its \r\nbreath taking scenery and untouched wilderness.</p>\r\n<p>Sweden''s cities like Stockholm are well known for its rich cultural \r\nheritage and idyllic setting; the cities are spread out across 14 \r\nislands. Gothenburg, which is Sweden''s second largest city, offers \r\nmulticultural experiences and a vibrant entertainment scene, and Malmo \r\nis a bustling cosmopolitan city.</p>\r\n<p>In the year 2013, the Reputation Institute rated Sweden to be the \r\nsecond most reputable country world-wide. Sweden currently has nearly \r\n35,000 international students as part of its vibrant study scene.</p>\r\n<h2>Study Experience</h2>\r\n<p>Swedish colleges and Universities lay a strong emphasis on group work\r\n and work towards creating a forward thinking culture to keep students \r\nclose to industry trends and connected to latest ideas. Higher education\r\n in Sweden encourages students to take on more responsibilities, \r\npersonal initiatives and act independently. <a href="http://www.hotcoursesabroad.com/india/know-your-study-destination/how-to-get-ready-for-the-new-place/student-life-in-sweden/" target="_blank">Student life</a>\r\n is something that everyone will enjoy in Sweden. Generally, there is an\r\n informal and relaxed relationship between teachers and students in \r\neducational institutions, making the study atmosphere an open and a warm\r\n one.</p>\r\n<h2>Top Five Unis</h2>\r\n<p>Here''s a look at the top five Swedish Universities as per the latest QS World University Rankings:</p>\r\n<ul><li>Lund University - 70th position internationally</li><li>KTH, Royal Institute of Technology - 92nd position internationally</li><li>Uppsala University - 102nd position internationally</li><li>Chalmers University of Technology - 132nd position internationally</li><li>Stockholm University - 182nd position internationally</li></ul>\r\n<h2>Industry-ready courses</h2>\r\n<p>Students taking up master’s degrees are generally offered the \r\nopportunity to practice the theory from their programs. Most of these \r\ncourses are offered in close collaboration with the industry, to help \r\nstudents prepare for future employment.</p>\r\n<h2>Research-oriented education</h2>\r\n<p>Sweden is one of the world''s most research intensive and innovative \r\nnations. Educational institutions such as Karolinska Institute, Lund \r\nUniversity, and the Royal Institute of Technology have indulged in \r\nresearch activities that have contributed to the success of the \r\ncountry''s high tech companies on a global scale. <a href="http://www.hotcoursesabroad.com/india/fund-your-studies/how-to-get-scholarship-to-study-abroad/scholarships-to-study-in-sweden/" target="_blank">Scholarships</a> are given out generously for students to pursue their education.</p>\r\n<p>Sweden spends nearly four per cent of its GDP towards research and \r\ndevelopment, one of the highest rates in the world. This gives Sweden \r\nthe leading position in areas such as nanotechnology, cancer research, \r\nand environmental technology. A major portion of the research conducted \r\nin the country, i.e. around 75 per cent is funded by companies. These \r\nare considered investments and have helped organisations such as \r\nSandvik, Ericsson, and the Volvo Group.</p>\r\n<p>Studying in Sweden is a different experience altogether. It can \r\nprovide a student with a whole new experience. But given the country’s \r\nrapid growth rates and investment in the education sector, Sweden can \r\nsoon become a popular study destination for international students. It \r\nis also to be noted that their <a href="http://www.hotcoursesabroad.com/india/get-your-visa/how-to-apply-for-a-visa/how-to-apply-for-a-swedish-student-visa/" target="_blank">visas</a> are slightly different from that of UK and USA.</p>\r\n</div>', 'ar');
INSERT INTO `countries_trans` (`id`, `title`, `description`, `lang`) VALUES
(15, 'هولندا', '<div itemprop="articleBody" class="art rgt_cnt oview"><p>The \r\nNetherlands, or Holland as it is popularly known, is a constitutional \r\nmonarchy with one of the most stable economies in all of Europe. The \r\ncapital city of the Netherlands is Amsterdam but the seat of the \r\ngovernment is at The Hague.&nbsp;</p>\r\n<p>With a population of nearly 16.5 million people, the Netherlands is \r\none of the most densely populated countries in Europe. Nearly a third of\r\n the Netherlands is below sea-level and for a long time the Dutch \r\nconstructed dykes and barricades to ensure that their lands do not get \r\nflooded by sea-water.&nbsp;</p>\r\n<p>Nearly 40% of the country''s population lives in the area known as the\r\n Randstad — this area is made up of cities like Amsterdam, Rotterdam, \r\nThe Hague and Utrecht. Languages like Dutch, German and English are \r\nspoken by people in this region.&nbsp;</p>\r\n<p>The Netherlands is home to world-famous companies like Philips, \r\nUnilever, Rabobank, KPMG, Endemol, Elsevier and more. This proves once \r\nagain that it is not the size of a nation, but the ambitions of its \r\npeople that contribute to its economic growth.</p>\r\n<p>Over the years, the Netherlands has changed from being just an \r\nindustrial and tourist centre, and has become a hub for higher education\r\n thanks to their friendly immigration laws and easy <a href="http://www.hotcoursesabroad.com/india/get-your-visa/how-to-apply-for-a-visa/how-to-apply-for-a-netherlands-student-visa/" target="_blank">visa processing</a>.\r\n This is largely because since the early 1990s, leading Dutch \r\ninstitutions have begun offering a select few courses to international \r\nstudents, which are taught in English.<br>\r\nThe Netherlands is renowned for its technical, scientific and \r\nengineering courses. Five Dutch universities feature in the world''s top \r\n100 universities as per the latest QS Rankings:</p>\r\n<ol><li>University of Amsterdam – 55th position internationally</li><li>Delft University of Technology - 64th position internationally</li><li>Utrecht University - 94th position internationally</li><li>Leiden University - 95th position internationally</li><li>Erasmus University, Rotterdam - 92nd position internationally</li></ol>\r\n<h2>Should you Study in the Netherlands?</h2>\r\n<p>Most students do not have the Netherlands in their list of study \r\nabroad destinations because they think that the courses are taught in \r\nDutch; and they will have to learn a new language and focus on learning \r\nthe nuances of the Dutch language. This is true to a certain extent as a\r\n majority of the institutions offer their courses in Dutch, but since \r\nthe 1990s, more and more premier Dutch institutions are offering a \r\nselect few courses taught in English for international students. This \r\ndoes not mean that the student should not learn Dutch. Picking up a new \r\nlanguage is useful and one may even land a job in the Netherlands on \r\ncompletion of the course.</p>\r\n<h2><span style="font-size:13px">Key Points:</span></h2>\r\n<ul><li>The courses are extremely challenging and are designed for the best minds.</li><li>Opportunities for postgraduate research in areas like electronics, computer science and engineering are high.</li><li>Limited <a href="http://www.hotcoursesabroad.com/india/fund-your-studies/how-to-get-scholarship-to-study-abroad/scholarships-to-study-in-netherlands/" target="_blank">scholarships</a> are offered by most institutions.</li><li>The standard of living is quite high, but opting for accommodation \r\nin student hostels or a home-stay will enable students to save money.</li><li>Being a progressive economy the prices of essential commodities are \r\nhigh, but one can save money by shopping at weekly farmer markets that \r\nare held in most major towns.</li></ul>\r\n<h2>Living in the Netherlands</h2>\r\n<p><a href="http://www.hotcoursesabroad.com/india/know-your-study-destination/how-to-get-ready-for-the-new-place/student-life-in-the-netherlands/" target="_blank">Student life</a>&nbsp;in\r\n Netherlands can be really exciting. The Dutch are a friendly bunch of \r\npeople who love football, fine art, technology, good food and drinks. \r\nPeople visiting the Netherlands from Asia can expect a culture shock. \r\nThe consumption of ''soft drugs'' is legal and hash burgers are popular, \r\nlesbian and gay rights are respected seriously and no discrimination is \r\nmade. The Dutch are seriously progressive thinkers and there is a \r\ngenuine respect for the state and the law.&nbsp;</p>\r\n<h2>Places to visit</h2>\r\n<p>The Holland Pass is the best way to enjoy all the leading tourist \r\nsites in Holland. The pass allows you discounts and other benefits when \r\ntravelling and sight-seeing.</p>\r\n<p>Here are some of the most popular tourist-spots in the Netherlands.</p>\r\n<ul><li>The flower fields of Leiden and Den Helder and the tulip gardens \r\nalong the route from Leiden to Haarlem are must-visit sites. Cycling \r\ndown the road adjoining the tulip fields is a special experience.</li><li>The canals of Amsterdam are as picturesque as the canals of Venice. \r\nThe 17th century canal ring area in Amsterdam is a UNESCO certified \r\nheritage site.</li><li>The Royal Palace and the Museum are iconic landmarks. The 350-year \r\nold Royal Palace is a witness to many of the historical moments that \r\nchanged the political scenario of Europe.</li><li>The Van Gogh Museum attracts over 1.5 million visitors every year —a\r\n remarkable feat considering that Van Gogh only sold one painting when \r\nhe was alive. Most visitors combine this visit along with a trip to the \r\nRijksmuseum.</li></ul>\r\n<h2>Courses with a Focus on Research</h2>\r\n<p>The Netherlands is in no way less expensive than the UK. In many \r\naspects, the cost of living is the same. Students who wish to try \r\nsomething different and explore life in a beautiful country with a focus\r\n on top-notch research-centric courses might wish to apply to study in \r\nthe Netherlands.</p>\r\n<p>&nbsp;</p>\r\n</div>', 'ar'),
(16, 'اليمن', '<p>لتنا نتلتلتال تحصنمطسقكنكمسنبض</p><p><br></p><p>نصىبمنىسنةيىلس</p><p>ميلنسىيشنلتىض</p><p><br></p><p>نيملىنكسلشرترىر تتاملتانل تارتارر<br></p>', 'ar'),
(17, 'مصر', '<font><font>Nssh</font></font><font><font>Fever</font></font><font><font>Ton</font></font>', 'ar');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '1',
  `univ_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `course_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(550) COLLATE utf8_unicode_ci NOT NULL,
  `specialreq` varchar(800) COLLATE utf8_unicode_ci NOT NULL,
  `subjects` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `accreditation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fees` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `feescycle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_from` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `featured_listing` int(11) NOT NULL DEFAULT '0',
  `featured_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `user_id`, `univ_id`, `title`, `course_slug`, `description`, `specialreq`, `subjects`, `location`, `accreditation`, `type`, `level`, `fees`, `feescycle`, `start_from`, `category`, `duration`, `featured_listing`, `featured_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 'Accounting', 'accounting', '<font><font>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </font><font>Aeneas advantage Reserved needs. </font><font>Aeneas mass. </font><font>Et magnis dis parturient montes Cras iaculis justo eu libero. </font><font>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </font><font>There is no recipe for a mass</font></font>', 'Special Requirements added<br>', 'Subjects ', 'Course Location ', 'Accreditation Code ', 'Part Time', 'Graduate,Language', '5000', 'all', '2016-11-12,2016-11-15,11/12/2019', 'BUSINESS', '3-5 yr', 1, 'accounting_1479995957', 1, '2016-10-06 01:40:39', '2016-12-02 12:55:17'),
(2, 1, 0, 'Biotechnology ', 'biotechnology', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo\r\n ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis\r\n dis parturient montes, nascetur ridiculus mus. Donec quam felis, \r\nultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa\r\n quis enim', '', '', '', '', 'Part Time', 'Graduate', '50', '', 'Jan', 'MEDICEN & HEALTH', '1-5 yr', 1, 'biotechnology_1476866206', 1, '2016-10-06 01:49:45', '2016-11-09 19:19:09'),
(4, 1, 0, 'Civil Engineering', 'civil-engineering', '<font><font>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </font><font>Aeneas advantage Reserved needs. </font><font>Aeneas mass. </font><font>Et magnis dis parturient montes Cras iaculis justo eu libero. </font><font>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </font><font>There is no recipe for a mass</font></font>', '', '', '', '', 'Full Time', 'Postgraduate', '', '', '', 'ENGINEERING', '3yr', 1, 'civil-engineering_1479997475', 1, '2016-10-12 05:59:42', '2016-11-24 21:24:35'),
(5, 1, 0, 'Computer Science and IT', 'computer-science-and-it', '<font><font><font><font>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </font></font></font><font><font><font>Aeneas advantage Reserved needs. </font></font></font><font><font><font>Aeneas, Mass. </font></font></font><font><font><font>Et magnis dis parturient montes Cras iaculis justo eu libero. </font></font></font><font><font><font>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </font></font></font><font><font><font>There is no recipe for a mass</font></font></font></font>', '', '', '', '', 'Full Time', 'Graduate', '', '', '', 'COMPUTER SCIENCE', '3-5 yr', 1, 'computer-science-and-it_1479996405', 1, '2016-10-12 06:00:03', '2016-11-25 23:22:27'),
(8, 1, 0, 'MBA', 'mba', '<font><font>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </font><font>Aeneas advantage Reserved needs. </font><font>Aeneas mass. </font><font>Et magnis dis parturient montes Cras iaculis justo eu libero. </font><font>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </font><font>There is no recipe for a mass</font></font>', '', '', '', '', 'Part Time', 'Postgraduate', '', '', '', 'BUSINESS', '2yr', 1, 'mba_1479996293', 1, '2016-10-12 06:00:03', '2016-11-25 23:22:30'),
(9, 1, 0, 'Nursing', 'nursing', '<font><font>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </font><font>Aeneas advantage Reserved needs. </font><font>Aeneas mass. </font><font>Et magnis dis parturient montes Cras iaculis justo eu libero. </font><font>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </font><font>There is no recipe for a mass</font></font>', '', '', '', '', 'Full Time', 'Graduate', '', 'Every Year', '', 'MEDICEN & HEALTH', '1-5 yr', 1, 'nursing_1479995871', 1, '2016-10-12 06:00:03', '2016-11-25 23:22:34'),
(10, 1, 0, 'Agricultural Engineering', 'agricultural-engineering', '', '', '', '', '', 'Full Time', 'Graduate', '', '', '', 'ENGINEERING', '2yr', 1, 'agricultural-engineering_1479996038', 1, '2016-10-24 19:48:06', '2016-11-24 21:23:12'),
(13, 1, 0, 'Process Engineering', 'process-engineering', '', '', '', '', '', 'Full Time', 'Diploma', '', '', '', 'ENGINEERING', '1-5 yr', 1, 'process-engineering_1479996331', 1, '2016-11-13 23:58:23', '2016-11-25 23:22:37'),
(15, 1, 0, 'BSc (Hons) Biotechnology', 'bsc-hons-biotechnology', '<div style="text-align: justify;"><span style="color: rgb(0, 0, 0);"><span style="font-family: Arial;">Biotechnology, the fastest growing science-based industry in \r\n                                                        the world, is widely regarded as the new engine of growth for \r\n                                                        the global economy. Covering the medical and health care \r\n                                                        industries, the agricultural and industrial sectors, the \r\n                                  ', '<ul class="bullet1" style="text-align: justify;"><li><span style="font-family: Arial;"><span style="color: rgb(0, 0, 0);">A\r\n distinction (A+, A or A-) in the English Language subject at SPM/UEC \r\nlevel; or MUET Band 5; or a score of 196 (computer-based) / 525 \r\n(writing-based) / 69 (internet-based) in TOEFL; or Band 5.5 in IELTS.</span></span></li><li><span style="font-family: Arial;"><span style="color: rgb(0, 0, 0);">In\r\n the event that the English Language Requirements are not met, student \r\nmay be required to undertake additional English module(s) prior to or \r\nconcurrently with the undergraduate programme, based on the University’s\r\n decision.</span></span></li></ul>\r\n			                                                            <div style="text-align: justify;"><span style="font-fa', '', '', '', 'Full Time', 'Undergraduate', '5000.00', 'Every Year', '2016-11-12', 'SCIENCE', '3yr', 1, 'bsc-hons-biotechnology_1480090722', 1, '2016-11-25 23:18:42', '2016-11-25 23:22:22'),
(16, 1, 0, 'My course', 'my-course', 'This is a new course brother !!!', 'This is a nice course brother and you should accept it, this is a full excellent course !!!!!', 'Wow course !', 'Egypt', '123456', 'Full Time', 'Graduate,Postgraduate,Undergraduate', '5000', 'Every Year', '2016-11-12', 'BUSINESS', '4yr', 0, 'my-course_1483545407', 0, '2017-01-04 13:56:47', '2017-01-04 13:56:47');

-- --------------------------------------------------------

--
-- Table structure for table `courses_trans`
--

DROP TABLE IF EXISTS `courses_trans`;
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

-- --------------------------------------------------------

--
-- Table structure for table `durations`
--

DROP TABLE IF EXISTS `durations`;
CREATE TABLE `durations` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_category_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `featured_image` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `durations`
--

INSERT INTO `durations` (`id`, `cat_id`, `sub_category_name`, `sub_category_slug`, `status`, `featured_image`, `description`) VALUES
(9, 0, '2yr', '2-yr', 0, 'postgraduate_1478339221', ''),
(7, 0, '1 yr', '1-yr', 0, 'diploma_1478339098', ''),
(8, 0, '1-5 yr', '1-5-yr', 0, 'graduate_1478339175', ''),
(11, 0, '3yr', '3-yr', 0, '3-yr_1478341444', ''),
(12, 0, '3-5 yr', '3-5-yr', 0, '3-5-yr_1478341471', ''),
(13, 0, '4yr', '4-yr', 0, '4-yr_1478341495', ''),
(14, 0, 'English', 'salknaslnf', 0, 'salknaslnf_1479089564', 'skajnfkabfasnb');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

DROP TABLE IF EXISTS `fees`;
CREATE TABLE `fees` (
  `id` int(11) NOT NULL,
  `fees` decimal(65,2) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `start_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`id`, `fees`, `slug`, `start_date`) VALUES
(1, '5000.00', '', '2016-11-12'),
(4, '450.00', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `fees_cycle`
--

DROP TABLE IF EXISTS `fees_cycle`;
CREATE TABLE `fees_cycle` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees_cycle`
--

INSERT INTO `fees_cycle` (`id`, `title`, `slug`) VALUES
(1, 'Every Year', 'Every-Year'),
(2, 'Complete Year', 'Complete-Year');

-- --------------------------------------------------------

--
-- Table structure for table `fees_date`
--

DROP TABLE IF EXISTS `fees_date`;
CREATE TABLE `fees_date` (
  `id` int(11) NOT NULL,
  `start_date` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees_date`
--

INSERT INTO `fees_date` (`id`, `start_date`) VALUES
(1, '2016-11-12'),
(2, '2016-11-15'),
(3, '11/12/2019');

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

DROP TABLE IF EXISTS `inquiries`;
CREATE TABLE `inquiries` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '1',
  `uni_id` int(11) NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `countryCode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `monthRange` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `timeOptionId` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`id`, `user_id`, `uni_id`, `firstname`, `lastname`, `email`, `countryCode`, `mobile`, `level`, `monthRange`, `timeOptionId`, `created_at`, `updated_at`) VALUES
(10, 1, 24, 'hj', 'mehra', 'kulwinder.waveinfotech.biz11@gmail.com', '91', '464564646', 'Undergraduate', 'April - June 2019', 'Between 10AM to 1PM', '2016-11-04 19:29:06', '2016-11-04 19:29:06'),
(11, 1, 24, 'andy', 'mehra', 'kulwinder.waveinfotech.biz@gmail.com', '91', '464564646', 'Careerbased/Vocational', 'July - Oct 2016', 'Between 10AM to 1PM', '2016-11-04 19:39:31', '2016-11-04 19:39:31');

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

DROP TABLE IF EXISTS `listings`;
CREATE TABLE `listings` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_cat_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `featured_listing` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `listing_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `welcome_content` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `campus_content` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `academic_content` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `research_content` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `admissions_content` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facilities_content` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `accommodation_content` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `specialization` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `video` text COLLATE utf8_unicode_ci NOT NULL,
  `video2` text COLLATE utf8_unicode_ci NOT NULL,
  `video3` text COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_details` text COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `scolarship` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ranktype` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ranking` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `map_lat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `map_long` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amenities` text COLLATE utf8_unicode_ci NOT NULL,
  `featured_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `review_avg` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `view_count` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`id`, `user_id`, `cat_id`, `sub_cat_id`, `location_id`, `featured_listing`, `title`, `listing_slug`, `description`, `welcome_content`, `campus_content`, `academic_content`, `research_content`, `admissions_content`, `facilities_content`, `accommodation_content`, `level`, `specialization`, `keyword`, `video`, `video2`, `video3`, `address`, `contact_details`, `country`, `city`, `scolarship`, `ranktype`, `ranking`, `map_lat`, `map_long`, `amenities`, `featured_image`, `review_avg`, `view_count`, `status`, `created_at`, `updated_at`) VALUES
(27, 1, 0, 0, 0, 1, 'Punjab University', 'punjab-university', '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry''s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.', '', '', '', '', '', '', '', '', 'test 1', '', '', '', '', '', '', '5', 'New York', 'yes', '', '', '', '', 'kids,WiFi,Toys', 'punjab-university_1478505154', '', 16, 1, '2016-11-07 14:52:34', '2016-12-30 17:45:15'),
(26, 1, 0, 0, 0, 1, 'City University of London', 'city-university-of-london', '<strong>Lorem Ipsum1</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry''s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.', '<p>Welcome Content:1</p><p>is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry''s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and m', '<p>Campus Content:-1</p><p>is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry''s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and m', '<p>Academic Content1:-</p><p>is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry''s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and', '<p>Research Content:1-</p><p>is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry''s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and', '<p>Admissions Content:1-</p><p>is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry''s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, a', '<p>Facilities Content:1-</p><p>is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry''s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, a', '<p>Accommodation Content:1-</p><p>is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry''s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages', 'Diploma,Postgraduate', 'test 1,test 2', '', '<iframe width="400" height="400" src="https://www.youtube.com/embed/abgWUUXlAc0" frameborder="0" allowfullscreen></iframe>', '<iframe width="400" height="400" src="https://www.youtube.com/embed/abgWUUXlAc0" frameborder="0" allowfullscreen></iframe>', '<iframe width="400" height="400" src="https://www.youtube.com/embed/abgWUUXlAc0" frameborder="0" allowfullscreen></iframe>', 'Northampton Square,\r\n London EC1V 0HB,\r\n UK', '0567 567 45645', '5', '18', 'no', '', '', '51.5278', '0.1025', 'kids,WiFi,Toys', 'city-university-of-london_1478505068', '3', 206, 0, '2016-11-07 14:51:08', '2016-12-18 13:00:10'),
(23, 1, 0, 0, 0, 0, 'university Of California', 'university-of-california', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry''s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.</p>', '', '', '', '', '', '', '', 'Diploma', 'test 1', '', '', '', '', '', '', '5', 'all', 'yes', '', '1', '', '', 'kids,WiFi,Toys', 'university-of-california_1478504868', '', 7, 1, '2016-10-19 22:41:25', '2016-12-17 16:20:15'),
(24, 1, 0, 0, 0, 1, 'Universitiy Putra Malaysia', 'universitiy-putra-malaysia', 'UPM', '', '', '', '', '', '', '', 'Graduate', 'test 1', '', '', '', '', 'Serdang', '', '15', 'all', 'no', '', 'all', '', '', 'kids,University,Agriculture,innovation', 'universitiy-putra-malaysia_1477568612', '', 16, 1, '2016-10-25 12:20:14', '2016-12-17 16:20:11'),
(28, 1, 0, 0, 0, 0, 'University of Washington', 'university-of-washington', '<p style="margin-top: 0.5em; margin-bottom: 0.5em; line-height: inherit; color: rgb(37, 37, 37); font-family: sans-serif;">The&nbsp;<b>University of Washington</b>, commonly referred to as simply&nbsp;<b>Washington</b>,&nbsp;<b>UW</b>, or informally&nbsp;<b>U-Dub</b>, is a public flagship research university based in&nbsp;<a href="https://en.wikipedia.org/wiki/Seattle" title="Seattle" style="color: rgb(11, 0, 128); background-image: none; background-position: initial;">Seattle</a>,&nbsp;<a href="https://en.wikipedia.org/wiki/Washington_(state)" title="Washington (state)" style="color: rgb(11, 0, 128); background-image: none; background-position: initial;">Washington</a>, United States. Founded in 1861, Washington is one of the oldest universities on the West Coast.<sup id="cite_ref-5" class="reference" style="line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;"><a href="https://en.wikipedia.org/wiki/University_of_Washington#cite_note-5" style="color: rgb(11, 0, 128); background-image: none; background-position: initial;">[5]</a></sup><sup id="cite_ref-6" class="reference" style="line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;"><a href="https://en.wikipedia.org/wiki/University_of_Washington#cite_note-6" style="color: rgb(11, 0, 128); background-image: none; background-position: initial;">[6]</a></sup></p><p style="margin-top: 0.5em; margin-bottom: 0.5em; line-height: inherit; color: rgb(37, 37, 37); font-family: sans-serif;">The university has three campuses: the oldest and largest in the&nbsp;<a href="https://en.wikipedia.org/wiki/University_District,_Seattle" title="University District, Seattle" style="color: rgb(11, 0, 128); background-image: none; background-position: initial;">University District</a>&nbsp;of Seattle and two others in&nbsp;<a href="https://en.wikipedia.org/wiki/University_of_Washington_Tacoma" title="University of Washington Tacoma" style="color: rgb(11, 0, 128); background-image: none; background-position: initial;">Tacoma</a>&nbsp;and&nbsp;<a href="https://en.wikipedia.org/wiki/University_of_Washington_Bothell" title="University of Washington Bothell" style="color: rgb(11, 0, 128); background-image: none; background-position: initial;">Bothell</a>. Its operating expenses and research budget for fiscal year 2014–15 is expected to be $6.4 billion, continuing its historical record of being amongst the highest in the United States.<sup id="cite_ref-UW_Budget_Office_7-0" class="reference" style="line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;"><a href="https://en.wikipedia.org/wiki/University_of_Washington#cite_note-UW_Budget_Office-7" style="color: rgb(11, 0, 128); background-image: none; background-position: initial;">[7]</a></sup>&nbsp;UW occupies over 500 buildings, with over 20 million gross square footage of space, including the&nbsp;<a href="https://en.wikipedia.org/wiki/University_of_Washington_Plaza" title="University of Washington Plaza" style="color: rgb(11, 0, 128); background-image: none; background-position: initial;">University of Washington Plaza</a>, the 325-foot (99&nbsp;m) UW Tower, over 26 university libraries, as well as numerous conference centers.</p>', '<span style="color: rgb(87, 87, 87); font-family: " encode="" sans="" compressed",="" sans-serif;="" font-size:="" 19px;="" background-color:="" rgb(240,="" 237,="" 227);"="">Creativity is embedded in our DNA. Learn how contributing to revolutionary people and programs can lead to inclusive innovation for the benefit of Jayna – and millions more.</span>', '', '', '', '', '', '', 'Postgraduate', 'test 1', '', '', '', '', '', '', '5', '22', 'no', '', '3', '', '', 'kids,WiFi,Toys', 'university-of-washington_1480071886', '', 11, 1, '2016-11-25 18:04:47', '2017-01-10 16:03:15'),
(29, 1, 0, 0, 0, 0, 'added University', 'added-university', 'added University', 'added University', 'added University', 'added University', 'added University', 'added University', 'added University', 'added University', 'Diploma,Postgraduate', 'test 1,test 2', '', '', '', '', 'added University', 'added University', '5', '18', 'yes', '', '18', '', '', 'kids,WiFi,Toys', 'added-university_1480329771', '', 0, 0, '2016-11-28 17:42:51', '2016-11-28 17:42:51'),
(31, 1, 0, 0, 0, 0, 'New University ', 'new-university', 'New University <br>', 'New University <br>', 'New University <br>', 'New University <br>', 'New University <br>', 'New University <br>', 'New University <br>', 'New University <br>', 'Diploma,Graduate,Postgraduate,Undergraduate,Language', 'test 1,test 2', '', '', '', '', 'New University ', 'New University ', '5', 'Florida,New York', 'yes', '', '', '', '', 'kids,WiFi,Toys', 'new-university_1480581816', '', 0, 0, '2016-12-01 15:43:36', '2016-12-01 15:43:36');

-- --------------------------------------------------------

--
-- Table structure for table `listings_favourite_courses`
--

DROP TABLE IF EXISTS `listings_favourite_courses`;
CREATE TABLE `listings_favourite_courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `listing_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `listings_favourite_courses`
--

INSERT INTO `listings_favourite_courses` (`id`, `user_id`, `listing_id`, `created_at`, `updated_at`) VALUES
(7, 1, 8, '2016-10-22 13:09:05', '2016-10-22 13:09:05');

-- --------------------------------------------------------

--
-- Table structure for table `listings_favourite_university`
--

DROP TABLE IF EXISTS `listings_favourite_university`;
CREATE TABLE `listings_favourite_university` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `listing_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `listings_favourite_university`
--

INSERT INTO `listings_favourite_university` (`id`, `user_id`, `listing_id`, `created_at`, `updated_at`) VALUES
(7, 1, 11, '2016-10-22 12:19:34', '2016-10-22 12:19:34'),
(11, 21, 21, '2016-10-24 19:51:56', '2016-10-24 19:51:56'),
(6, 14, 21, '2016-10-21 19:17:36', '2016-10-21 19:17:36'),
(13, 1, 28, '2016-11-25 18:14:08', '2016-11-25 18:14:08'),
(12, 21, 11, '2016-10-24 19:52:47', '2016-10-24 19:52:47');

-- --------------------------------------------------------

--
-- Table structure for table `listings_rank`
--

DROP TABLE IF EXISTS `listings_rank`;
CREATE TABLE `listings_rank` (
  `id` int(11) NOT NULL,
  `listing_id` int(11) NOT NULL,
  `ranktype` varchar(255) NOT NULL,
  `ranking` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listings_rank`
--

INSERT INTO `listings_rank` (`id`, `listing_id`, `ranktype`, `ranking`) VALUES
(51, 27, '6', '113'),
(50, 27, '7', '19'),
(49, 27, '11', '517'),
(53, 31, '6', '114'),
(54, 31, '10', '117');

-- --------------------------------------------------------

--
-- Table structure for table `listings_reviews`
--

DROP TABLE IF EXISTS `listings_reviews`;
CREATE TABLE `listings_reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `listing_id` int(11) NOT NULL,
  `reviews_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `review` text COLLATE utf8_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `listings_reviews`
--

INSERT INTO `listings_reviews` (`id`, `user_id`, `listing_id`, `reviews_title`, `review`, `rating`, `date`) VALUES
(2, 14, 21, 'good', 'very good university', 5, 1476835200),
(3, 14, 26, 'Very good', 'City University London is a special place. ', 1, 1478649600),
(4, 28, 26, 'Excellent University', 'Brillient University with Experienced Faculty and Great Environment for Students.', 5, 1478649600);

-- --------------------------------------------------------

--
-- Table structure for table `listings_trans`
--

DROP TABLE IF EXISTS `listings_trans`;
CREATE TABLE `listings_trans` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `lang` varchar(2) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `listings_trans`
--

INSERT INTO `listings_trans` (`id`, `title`, `description`, `lang`) VALUES
(27, 'جامعة البنجاب', '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry''s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.', 'ar'),
(26, 'جامعة مدينة لندن', '<strong>Lorem Ipsum1</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry''s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.', 'ar'),
(23, 'جامعة كاليفورنيا', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry''s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.</p>', 'ar'),
(24, 'جامعة بوترا الماليزية', 'UPM', 'ar'),
(28, 'جامعة واشنطن', '<p style="margin-top: 0.5em; margin-bottom: 0.5em; line-height: inherit; color: rgb(37, 37, 37); font-family: sans-serif;">The&nbsp;<b>University of Washington</b>, commonly referred to as simply&nbsp;<b>Washington</b>,&nbsp;<b>UW</b>, or informally&nbsp;<b>U-Dub</b>, is a public flagship research university based in&nbsp;<a href="https://en.wikipedia.org/wiki/Seattle" title="Seattle" style="color: rgb(11, 0, 128); background-image: none; background-position: initial;">Seattle</a>,&nbsp;<a href="https://en.wikipedia.org/wiki/Washington_(state)" title="Washington (state)" style="color: rgb(11, 0, 128); background-image: none; background-position: initial;">Washington</a>, United States. Founded in 1861, Washington is one of the oldest universities on the West Coast.<sup id="cite_ref-5" class="reference" style="line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;"><a href="https://en.wikipedia.org/wiki/University_of_Washington#cite_note-5" style="color: rgb(11, 0, 128); background-image: none; background-position: initial;">[5]</a></sup><sup id="cite_ref-6" class="reference" style="line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;"><a href="https://en.wikipedia.org/wiki/University_of_Washington#cite_note-6" style="color: rgb(11, 0, 128); background-image: none; background-position: initial;">[6]</a></sup></p><p style="margin-top: 0.5em; margin-bottom: 0.5em; line-height: inherit; color: rgb(37, 37, 37); font-family: sans-serif;">The university has three campuses: the oldest and largest in the&nbsp;<a href="https://en.wikipedia.org/wiki/University_District,_Seattle" title="University District, Seattle" style="color: rgb(11, 0, 128); background-image: none; background-position: initial;">University District</a>&nbsp;of Seattle and two others in&nbsp;<a href="https://en.wikipedia.org/wiki/University_of_Washington_Tacoma" title="University of Washington Tacoma" style="color: rgb(11, 0, 128); background-image: none; background-position: initial;">Tacoma</a>&nbsp;and&nbsp;<a href="https://en.wikipedia.org/wiki/University_of_Washington_Bothell" title="University of Washington Bothell" style="color: rgb(11, 0, 128); background-image: none; background-position: initial;">Bothell</a>. Its operating expenses and research budget for fiscal year 2014–15 is expected to be $6.4 billion, continuing its historical record of being amongst the highest in the United States.<sup id="cite_ref-UW_Budget_Office_7-0" class="reference" style="line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;"><a href="https://en.wikipedia.org/wiki/University_of_Washington#cite_note-UW_Budget_Office-7" style="color: rgb(11, 0, 128); background-image: none; background-position: initial;">[7]</a></sup>&nbsp;UW occupies over 500 buildings, with over 20 million gross square footage of space, including the&nbsp;<a href="https://en.wikipedia.org/wiki/University_of_Washington_Plaza" title="University of Washington Plaza" style="color: rgb(11, 0, 128); background-image: none; background-position: initial;">University of Washington Plaza</a>, the 325-foot (99&nbsp;m) UW Tower, over 26 university libraries, as well as numerous conference centers.</p>', 'ar');

-- --------------------------------------------------------

--
-- Table structure for table `listing_courses`
--

DROP TABLE IF EXISTS `listing_courses`;
CREATE TABLE `listing_courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `listing_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `listing_courses`
--

INSERT INTO `listing_courses` (`id`, `user_id`, `listing_id`, `course_id`, `created_at`, `updated_at`) VALUES
(107, 0, 21, 5, '2016-10-28 13:27:29', '2016-10-28 13:27:29'),
(106, 0, 21, 4, '2016-10-28 13:27:29', '2016-10-28 13:27:29'),
(116, 0, 11, 1, '2016-10-28 13:29:51', '2016-10-28 13:29:51'),
(105, 0, 21, 2, '2016-10-28 13:27:29', '2016-10-28 13:27:29'),
(104, 0, 21, 1, '2016-10-28 13:27:28', '2016-10-28 13:27:28'),
(36, 0, 18, 4, '2016-10-15 19:39:26', '2016-10-15 19:39:26'),
(100, 0, 12, 9, '2016-10-28 13:23:45', '2016-10-28 13:23:45'),
(98, 0, 14, 5, '2016-10-28 13:22:11', '2016-10-28 13:22:11'),
(231, 0, 26, 10, '2016-11-25 19:28:05', '2016-11-25 19:28:05'),
(192, 0, 23, 4, '2016-11-25 17:13:47', '2016-11-25 17:13:47'),
(190, 0, 24, 10, '2016-11-25 17:13:28', '2016-11-25 17:13:28'),
(189, 0, 24, 9, '2016-11-25 17:13:28', '2016-11-25 17:13:28'),
(188, 0, 24, 8, '2016-11-25 17:13:28', '2016-11-25 17:13:28'),
(187, 0, 24, 5, '2016-11-25 17:13:28', '2016-11-25 17:13:28'),
(186, 0, 24, 4, '2016-11-25 17:13:28', '2016-11-25 17:13:28'),
(185, 0, 24, 2, '2016-11-25 17:13:28', '2016-11-25 17:13:28'),
(184, 0, 24, 1, '2016-11-25 17:13:28', '2016-11-25 17:13:28'),
(73, 0, 25, 1, '2016-10-27 18:37:13', '2016-10-27 18:37:13'),
(74, 0, 25, 4, '2016-10-27 18:37:13', '2016-10-27 18:37:13'),
(191, 0, 23, 2, '2016-11-25 17:13:47', '2016-11-25 17:13:47'),
(230, 0, 26, 8, '2016-11-25 19:28:05', '2016-11-25 19:28:05'),
(299, 0, 31, 15, '2016-12-01 15:46:55', '2016-12-01 15:46:55'),
(281, 0, 27, 8, '2016-12-01 15:22:23', '2016-12-01 15:22:23'),
(280, 0, 27, 4, '2016-12-01 15:22:23', '2016-12-01 15:22:23'),
(229, 0, 26, 2, '2016-11-25 19:28:05', '2016-11-25 19:28:05'),
(216, 0, 28, 13, '2016-11-25 18:28:43', '2016-11-25 18:28:43'),
(215, 0, 28, 10, '2016-11-25 18:28:43', '2016-11-25 18:28:43'),
(214, 0, 28, 9, '2016-11-25 18:28:43', '2016-11-25 18:28:43'),
(213, 0, 28, 8, '2016-11-25 18:28:43', '2016-11-25 18:28:43'),
(212, 0, 28, 5, '2016-11-25 18:28:43', '2016-11-25 18:28:43'),
(211, 0, 28, 4, '2016-11-25 18:28:43', '2016-11-25 18:28:43'),
(210, 0, 28, 2, '2016-11-25 18:28:43', '2016-11-25 18:28:43'),
(209, 0, 28, 1, '2016-11-25 18:28:43', '2016-11-25 18:28:43'),
(232, 0, 29, 1, '2016-11-28 17:42:51', '2016-11-28 17:42:51'),
(233, 0, 29, 2, '2016-11-28 17:42:51', '2016-11-28 17:42:51'),
(234, 0, 29, 9, '2016-11-28 17:42:51', '2016-11-28 17:42:51'),
(235, 0, 30, 1, '2016-11-30 01:02:15', '2016-11-30 01:02:15'),
(236, 0, 30, 2, '2016-11-30 01:02:15', '2016-11-30 01:02:15'),
(237, 0, 30, 4, '2016-11-30 01:02:15', '2016-11-30 01:02:15'),
(238, 0, 30, 5, '2016-11-30 01:02:15', '2016-11-30 01:02:15'),
(239, 0, 30, 8, '2016-11-30 01:02:15', '2016-11-30 01:02:15'),
(240, 0, 30, 9, '2016-11-30 01:02:15', '2016-11-30 01:02:15'),
(241, 0, 30, 10, '2016-11-30 01:02:15', '2016-11-30 01:02:15'),
(242, 0, 30, 13, '2016-11-30 01:02:15', '2016-11-30 01:02:15'),
(243, 0, 30, 15, '2016-11-30 01:02:15', '2016-11-30 01:02:15'),
(298, 0, 31, 13, '2016-12-01 15:46:55', '2016-12-01 15:46:55'),
(297, 0, 31, 10, '2016-12-01 15:46:55', '2016-12-01 15:46:55'),
(296, 0, 31, 9, '2016-12-01 15:46:55', '2016-12-01 15:46:55'),
(295, 0, 31, 8, '2016-12-01 15:46:55', '2016-12-01 15:46:55'),
(294, 0, 31, 5, '2016-12-01 15:46:55', '2016-12-01 15:46:55'),
(293, 0, 31, 4, '2016-12-01 15:46:55', '2016-12-01 15:46:55'),
(292, 0, 31, 2, '2016-12-01 15:46:55', '2016-12-01 15:46:55'),
(291, 0, 31, 1, '2016-12-01 15:46:55', '2016-12-01 15:46:55');

-- --------------------------------------------------------

--
-- Table structure for table `listing_gallery`
--

DROP TABLE IF EXISTS `listing_gallery`;
CREATE TABLE `listing_gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `listing_id` int(11) NOT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `listing_gallery`
--

INSERT INTO `listing_gallery` (`id`, `listing_id`, `image_name`) VALUES
(4, 9, 'dummy_8651-b.jpg'),
(11, 26, 'city-university-of-london_2597-b.jpg'),
(9, 26, 'city-university-of-london_3579-b.jpg'),
(10, 26, 'city-university-of-london_2070-b.jpg'),
(12, 26, 'city-university-of-london_5470-b.jpg'),
(13, 26, 'city-university-of-london_8147-b.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
CREATE TABLE `location` (
  `id` int(10) UNSIGNED NOT NULL,
  `location_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menubar`
--

DROP TABLE IF EXISTS `menubar`;
CREATE TABLE `menubar` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `ordering` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menubar`
--

INSERT INTO `menubar` (`id`, `parent_id`, `ordering`, `title`, `slug`, `link`) VALUES
(1, 0, 1, 'Home', '', 'home'),
(2, 0, 2, 'Find Courses', '#', '#'),
(3, 0, 3, 'About Us', '#', '#'),
(4, 3, 1, 'Services', 'services', 'services'),
(5, 3, 2, 'Features', '', '#'),
(6, 3, 3, 'Universities', 'universities', 'universities'),
(12, 2, 1, 'By Subject', 'searchbysubject', 'search?category=all&location=all&level=all'),
(8, 3, 5, 'Downloads', 'downloads', 'downloads'),
(9, 5, 1, 'Feature Universities', 'feature_universities', 'feature_universities'),
(10, 5, 2, 'Feature Courses', 'feature_courses', 'feature_courses'),
(11, 3, 1, 'Contact Us', 'contact', 'contact'),
(13, 2, 2, 'By Destination', 'searchbydestination', 'search?category=all&location=all&level=all'),
(14, 2, 3, 'By University', 'searchbyuniversity', 'search?category=all&location=all&level=all');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
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

DROP TABLE IF EXISTS `password_resets`;
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

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `featured_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `title`, `body`, `featured_image`, `slug`, `active`, `created_at`, `updated_at`) VALUES
(1, 1, 'service1', '																																				<p>Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n						\r\n		\r\n						\r\n		\r\n						\r\n		\r\n						\r\n		\r\n						\r\n		\r\n						\r\n		', 'dummyn_1476256024', 'dummy', 1, '2016-09-16 02:26:07', '2016-10-12 01:37:40'),
(13, 1, 'service2', '												Lorem Ipsum has been the industry''s standard dummy text ever since the \r\n1500s, when an unknown printer took a galley of type and scrambled it to\r\n make a type specimen book. It has survived not only five centuries, but\r\n also the leap into electronic typesetting, remaining essentially \r\nunchanged. It was popularised..\r\n						\r\n		\r\n						\r\n		', 'service2_1479996773', 'service2', 1, '2016-10-12 05:50:19', '2016-11-24 21:12:53'),
(14, 1, 'service3', '												Lorem Ipsum has been the industry''s standard dummy text ever since the \r\n1500s, when an unknown printer took a galley of type and scrambled it to\r\n make a type specimen book. It has survived not only five centuries, but\r\n also the leap into electroni..\r\n						\r\n		\r\n						\r\n		', 'service3_1479996699', 'service3', 1, '2016-10-12 05:52:18', '2016-11-24 21:12:17'),
(15, 1, 'service4', '						Lorem Ipsum has been the industry''s standard dummy text ever since the \r\n1500s, when an unknown printer took a galley of type and scrambled it to\r\n make a type specimen book. It has survived not only...\r\n						\r\n		', 'service4_1479996640', 'service4', 1, '2016-10-12 05:53:27', '2016-11-24 21:10:40');

-- --------------------------------------------------------

--
-- Table structure for table `posts_trans`
--

DROP TABLE IF EXISTS `posts_trans`;
CREATE TABLE `posts_trans` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `lang` varchar(2) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts_trans`
--

INSERT INTO `posts_trans` (`id`, `title`, `body`, `lang`) VALUES
(1, 'خدمة 1', '																																				<p>Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n						\r\n		\r\n						\r\n		\r\n						\r\n		\r\n						\r\n		\r\n						\r\n		\r\n						\r\n		', 'ar'),
(13, 'خدمة 2', '												Lorem Ipsum has been the industry''s standard dummy text ever since the \r\n1500s, when an unknown printer took a galley of type and scrambled it to\r\n make a type specimen book. It has survived not only five centuries, but\r\n also the leap into electronic typesetting, remaining essentially \r\nunchanged. It was popularised..\r\n						\r\n		\r\n						\r\n		', 'ar'),
(14, 'خدمة 3', '												Lorem Ipsum has been the industry''s standard dummy text ever since the \r\n1500s, when an unknown printer took a galley of type and scrambled it to\r\n make a type specimen book. It has survived not only five centuries, but\r\n also the leap into electroni..\r\n						\r\n		\r\n						\r\n		', 'ar'),
(15, 'خدمة 4', '						Lorem Ipsum has been the industry''s standard dummy text ever since the \r\n1500s, when an unknown printer took a galley of type and scrambled it to\r\n make a type specimen book. It has survived not only...\r\n						\r\n		', 'ar');

-- --------------------------------------------------------

--
-- Table structure for table `ranking`
--

DROP TABLE IF EXISTS `ranking`;
CREATE TABLE `ranking` (
  `id` int(11) NOT NULL,
  `rank_id` int(11) NOT NULL,
  `rank_min` int(11) NOT NULL,
  `rank_max` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ranking`
--

INSERT INTO `ranking` (`id`, `rank_id`, `rank_min`, `rank_max`, `title`, `slug`) VALUES
(13, 7, 5, 20, '35', ''),
(11, 6, 100, 250, '123', ''),
(14, 11, 500, 1000, '1-1000', ''),
(12, 10, 0, 0, '50', '');

-- --------------------------------------------------------

--
-- Table structure for table `rank_type`
--

DROP TABLE IF EXISTS `rank_type`;
CREATE TABLE `rank_type` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rank_type`
--

INSERT INTO `rank_type` (`id`, `title`, `slug`) VALUES
(7, 'QS World University Rankings', 'qs-ranking'),
(6, 'Shanghai Jiao Tong University', 'shanghai-ranking'),
(10, 'The Leiden Ranking', 'leiden-ranking'),
(11, 'The CHE Ranking', 'che-ranking'),
(12, 'Financial Times Rankings', 'financial-times-ranking');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
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
  `home_slide_image4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_slide_image5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_slide_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_slide_text` text COLLATE utf8_unicode_ci NOT NULL,
  `page_bg_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `about_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `about_description` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_address` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_lat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_long` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `terms_of_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `terms_of_description` text COLLATE utf8_unicode_ci NOT NULL,
  `privacy_policy_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `privacy_policy_description` text COLLATE utf8_unicode_ci NOT NULL,
  `service_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `service_description` text COLLATE utf8_unicode_ci NOT NULL,
  `facebook_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `twitter_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gplus_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `linkedin_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `site_email`, `site_logo`, `site_favicon`, `site_keywords`, `site_description`, `google_map_api`, `site_header_code`, `site_footer_code`, `site_copyright`, `addthis_share_code`, `disqus_comment_code`, `facebook_comment_code`, `home_slide_image1`, `home_slide_image2`, `home_slide_image3`, `home_slide_image4`, `home_slide_image5`, `home_slide_title`, `home_slide_text`, `page_bg_image`, `about_title`, `about_description`, `contact_title`, `contact_address`, `contact_email`, `contact_number`, `contact_lat`, `contact_long`, `terms_of_title`, `terms_of_description`, `privacy_policy_title`, `privacy_policy_description`, `service_title`, `service_description`, `facebook_url`, `twitter_url`, `gplus_url`, `linkedin_url`) VALUES
(1, 'Salaysia', 'info@salaysia.com', 'logo.png', 'favicon.png', '', '', ' AIzaSyC_vOkL9sqBX0dxvnpKY35IDMXGuXyLkYY', '', '', 'Copyright © 2016 The Salaysia', '', '', '', 'home_slide_image1.png', 'home_slide_image2.png', 'home_slide_image3.png', 'home_slide_image4.png', 'home_slide_image5.png', '', '', 'page_bg_image.png', 'About Us', '<div style="text-align: left;"><span style="font-size: 14px;">Salaysia For Educational Services is established to give advising \r\nservices on academic choices for students who want to study abroad. \r\nSalaysia provides guidance for students in applying and preparing to \r\njoin higher education. The mean objective of our company is open doors \r\nfor learners to new worlds and new perspectives with our partner \r\neducational institutes. </span></div>', 'Contact Us', '   Vista Pinggiran, jalan pinggiran, <br/>\r\n   43300, Seri Kempangan, Selangor,<br/>\r\n   Malaysia<br/>\r\n   Phone: 0060173589348<br/>\r\n   Whatsapp: 0060173589348 <br/>\r\n   Email: info@salaysia.com<br/>\r\n   Website: www.Salaysia.com\r\n', ' info@salaysia.com', '0060173589348', '30.716059', '76.849596', 'Terms and Condition', '', 'Privacy Policy', '', 'Studying abroad: What parents need to know', '<div class="services-description clearfix col-sm-12">\n					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean\n commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus \net magnis dis parturient montes, nascetur ridiculus mus. Donec quam \nfelis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla \nconsequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec,\n vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis\n vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer \ntincidunt. Cras dapibus.</p>\n					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean\n commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus \net magnis dis parturient montes, nascetur ridiculus mus. Donec quam \nfelis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla \nconsequat massa quis enim. Donec pede justo, fringilla vel, \n					</p>\n					<h4>STAY INFORMED</h4>\n					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean\n commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus \net magnis dis parturient montes, nascetur ridiculus mus. Donec quam \nfelis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla \nconsequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec,\n vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis\n vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer \ntincidunt. Cras dapibus.</p>\n					<h4>LET GO</h4>\n					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean\n commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus \net magnis dis parturient montes, nascetur ridiculus mus. Donec quam \nfelis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla \nconsequat massa quis enim. Donec pede justo, fringilla vel, \n					</p>\n					<h4>PACKING</h4>\n					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean\n commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus \net magnis dis parturient montes, nascetur ridiculus mus. Donec quam \nfelis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla \nconsequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec,\n vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis\n vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer \ntincidunt. Cras dapibus.</p>\n					<h4>COMMUNICATION</h4>\n					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean\n commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus \net magnis dis parturient montes, nascetur ridiculus mus. Donec quam \nfelis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla \nconsequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec,\n vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis\n vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer \ntincidunt. Cras dapibus.</p>\n					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean\n commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus \net magnis dis parturient montes, nascetur ridiculus mus. Donec quam \nfelis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla \nconsequat massa quis enim. Donec pede justo, fringilla vel, \n					</p>\n					<h4>FINANCES</h4>\n					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean\n commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus \net magnis dis parturient montes, nascetur ridiculus mus. Donec quam \nfelis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla \nconsequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec,\n vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis\n vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer \ntincidunt. Cras dapibus.</p>\n					<h4>RESPONSIBILITIES</h4>\n					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean\n commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus \net magnis dis parturient montes, nascetur ridiculus mus. Donec quam \nfelis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla \nconsequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec,\n vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis\n vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer \ntincidunt. Cras dapibus.</p>\n					<h4>RETURNING HOME</h4>\n					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean\n commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus \net magnis dis parturient montes, nascetur ridiculus mus. Donec quam \nfelis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla \nconsequat massa quis enim. Donec pede justo, fringilla vel, \n					</p>\n				</div>', 'https://www.facebook.com/salaysiaa/?fref=ts', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `specialization`
--

DROP TABLE IF EXISTS `specialization`;
CREATE TABLE `specialization` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `raking` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specialization`
--

INSERT INTO `specialization` (`id`, `title`, `slug`, `raking`) VALUES
(1, 'test 1', 'test', '12'),
(2, 'test 2', 'test1', '25');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `title`, `slug`) VALUES
(1, 'Subject', 'subject');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

DROP TABLE IF EXISTS `sub_categories`;
CREATE TABLE `sub_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_category_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `featured_image` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `cat_id`, `sub_category_name`, `sub_category_slug`, `status`, `featured_image`, `description`) VALUES
(9, 0, 'Postgraduate', 'postgraduate', 0, 'postgraduate_1478339221', ''),
(7, 0, 'Diploma', 'diploma', 0, 'diploma_1478339098', ''),
(8, 0, 'Graduate', 'graduate', 0, 'graduate_1478339175', ''),
(10, 0, 'Undergraduate', 'undergraduate', 0, 'undergraduate_1479053638', ''),
(11, 0, 'Language', 'english-arabic-fransh', 0, 'english-arabic-fransh_1479994518', '');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories_trans`
--

DROP TABLE IF EXISTS `sub_categories_trans`;
CREATE TABLE `sub_categories_trans` (
  `id` int(10) UNSIGNED NOT NULL,
  `sub_category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lang` varchar(2) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sub_categories_trans`
--

INSERT INTO `sub_categories_trans` (`id`, `sub_category_name`, `lang`) VALUES
(9, 'دراسات عليا', 'ar'),
(7, 'دبلوم', 'ar'),
(8, 'خريج', 'ar'),
(10, 'طالب', 'ar'),
(11, 'لغة', 'ar');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `auther_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `testimonial_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `featured_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `auther_name`, `title`, `testimonial_slug`, `description`, `featured_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mary', 'Testimonials', 'testimonials', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.', 'testimonials_1477983770', 1, '2016-10-06 01:40:39', '2016-11-01 14:02:50'),
(2, 'Andy', 'Testimonial2', 'testimonial2', 'Lorem ipsum dolohjr sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.', 'testimonial2_1477983706', 1, '2016-10-06 01:49:45', '2016-11-01 14:01:54'),
(3, 'Crris', 'Testimonial3', 'testimonial3', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.', 'testimonial3_1477983733', 1, '2016-10-06 01:50:37', '2016-11-01 14:02:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '1',
  `login_with` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `usertype` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_role` varchar(20) COLLATE utf8_unicode_ci DEFAULT 'Regular user',
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
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `parent_id`, `login_with`, `usertype`, `user_role`, `first_name`, `last_name`, `email`, `password`, `gender`, `image_icon`, `mobile`, `contact_email`, `website`, `address`, `dob`, `country`, `study_plan`, `facebook_url`, `twitter_url`, `linkedin_url`, `dribbble_url`, `instagram_url`, `facebook_id`, `google_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, '', 'Admin', 'University user', 'John', 'Deo', 'kulwinder.waveinfotech.biz@gmail.com', '$2y$10$jhKBxtk8b9ufVcAdeD3T9uhBLmHvPDQfIbobSfkrQoOT4mLDNDnc6', '', 'upload/members/john-84f8f2c1e72fce52d8b6d017aff5e2bf-b.jpg', '', 'info@escortguidedirectory.com', '', '', '23-oct-1987', 'India', '', '', '', '', '', '', '', '', 'lLh3fIJ6KoPwCu8pJLNakFmhexNYFLkHHUhHUOXDibI7BSFYRDHqL8m1zst8', '2016-09-14 07:12:52', '2016-12-17 16:21:32'),
(8, 1, '', 'User', 'Regular user', 'Daniel', 'Onwude', 'info@dicowebsolution.com', '$2y$10$PRrARo4uBzJhXB/57kI8juDwnCbIgdpvZnrqbNE3Oe7LaHTWuLM22', '', NULL, '08065634738', 'daneng2005@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2016-10-11 12:55:54', '2016-10-11 12:55:54'),
(16, 1, 'Facebook', 'User', 'Regular user', 'Praveen', 'Rai', 'praveenraigarg@gmail.com', '', 'male', 'https://graph.facebook.com/v2.5/1080747881974708/picture?type=large', '', '', '', '', '', '', '', '', '', '', '', '', '1080747881974708', '', 'r2YiYa7FWze5CvVEwoJxDmqg3Qld4yHQjtrXdLj1bstTeotwLOYR6SoCQiD5', '2016-10-19 14:23:34', '2016-10-19 20:26:11'),
(13, 1, '', 'User', 'Regular user', 'Nsikak', 'Udeonoh', 'daneng2005@gmail.com', '$2y$10$kqyrVnaH9bDCge77Azslb.lj2SNuvZaEeoH1VvVi.n5N5v4oe3Xae', '', NULL, '08035375791', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '2016-10-16 15:57:09', '2016-10-16 15:57:09'),
(14, 1, 'Facebook', 'User', 'Regular user', 'Wave', 'Infotech', 'waveinfotech.biz@gmail.com', '', 'male', 'https://graph.facebook.com/v2.5/1736138649983565/picture?type=large', '', '', '', '', '', '', '', '', '', '', '', '', '1736138649983565', '', '67KOyH05xKM6UGVBTqOxCVVGloY6AJQtWCPcMLnW2sn5p86nD7DIO8sFeLD0', '2016-10-18 16:55:45', '2016-11-09 14:59:25'),
(28, 1, 'Google', 'User', 'Regular user', 'Kumar', 'Rajesh', 'rajeshkumardeveloper@gmail.com', '', ' ', 'https://lh3.googleusercontent.com/-n7AMfXSWRYg/AAAAAAAAAAI/AAAAAAAAAAo/EbExfqPnIHM/photo.jpg?sz=50', '', '', '', '', '', '', '', '', '', '', '', '', '', '104409318306695496313', 'gOQZlgj7ARQJM9MKcCXJgA1ZjAelalx30mgqAeHcHjiw29GwbMAlSxJhMcCH', '2016-11-09 19:57:23', '2016-11-09 19:59:52'),
(20, 1, '', 'User', 'University user', 'ALA', 'Yahya', 'ala_hag500@yahoo.com', '$2y$10$XeTFWPt3Ad6ulMQ01BOlv.rzCs6ZgMjW8e2VwG2zgcOT9NEst63wG', '', NULL, '149310244', '', '', '', '19-Oct-1987', 'Albania', '4', '', '', '', '', '', '', '', NULL, '2016-10-19 22:40:25', '2016-10-22 18:42:03'),
(21, 1, 'Facebook', 'User', 'Regular user', 'Daniel', 'Onwude', 'danafricgems@gmail.com', '', 'male', 'https://graph.facebook.com/v2.5/10210928176825612/picture?type=large', '', '', '', '', '', '', '', '', '', '', '', '', '10210928176825612', '', 'OVkLGsqSn9Yvtpp2b95lxIs7m3aqws7X0ao7J5ODn9faUWpiVtpqwCWDh100', '2016-10-21 19:56:07', '2016-11-02 18:27:23'),
(29, 1, '', 'User', 'Agent user', 'alfadhl', 'yahaya', 'f_yahya@salaysia.com', '$2y$10$an8Bj3Vb4jbUvZjhUpfq/.DBoI1XG.rchnc9oLjpflGu6YIGtdcP6', '', NULL, '', '', '', '', '', 'Argentina', '', '', '', '', '', '', '', '', 'NyhctRTyr3n97ZbSyGQy1OpM2Y17s5LETV683ULLoM3joMLMVmuRMv2EOpcr', '2016-11-14 17:20:09', '2016-11-14 17:24:39'),
(24, 1, '', 'User', 'Regular user', 'Dan', 'Onwude', 'dandy@dicowebsolution.com', '$2y$10$G7zaI9BvGTX95gqz7UbBW.Vmdhsinn7zwylbmPvWJUw5Ah7lWRYqu', '', NULL, '', '', '', '', '', 'Nigeria', '', '', '', '', '', '', '', '', '6Ys37t5BO8ublI3oFCEooVmn6ooagJWRyMhKN5jpwkr8iR8xzcSSNJ1UkSPG', '2016-10-24 19:45:31', '2016-10-24 19:46:55'),
(25, 1, 'Google', 'Admin', 'Editor user', 'Daniel', 'Onwude', 'onwudedaniel@uniuyo.edu.ng', '$2y$10$8T2Ye7pOdOtNOrRi4Gpg7eLM5S/p1up5abuxCgZoKvsa5NSr8PceO', ' ', 'https://lh6.googleusercontent.com/-g8m2wZkbwKI/AAAAAAAAAAI/AAAAAAAAAAA/4g1tSVBq0GE/photo.jpg?sz=50', '', '', '', '', '', '', '', '', '', '', '', '', '', '116024327924378094726', 'c0Smt3LOgTVxv9wLijarUws5gXtslzraCeu6oSPJNdx6qOKfNvJAD28DKyrY', '2016-10-24 19:58:12', '2016-11-09 09:07:48'),
(26, 1, '', 'Admin', 'Editor user', 'cgfg', 'gdfgdg', 'kulwinder.waveinfotech.biz11@gmail.com', '$2y$10$yfaYl9mylIrvabG1OlwzFevIIy7N4rfPw3vSW6NQdDjDGHFkan.Nm', '', 'upload/members/cgfg-87f90ed587d20321c32cb960f66e446f-b.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'COdV55e30cP5R7hTKzQXuYsT8sJ0bGjvv7Xwth2hCTe2E1FEXKvaDVJnQm1b', '2016-11-02 12:35:03', '2016-11-03 17:08:02'),
(27, 26, '', 'User', 'Regular user', 'l;kd', 'k;kl', 'kulwinder.waveinfotech.biz111@gmail.com', '$2y$10$hGU2.EDW7l2XcKYXOQcNCeHikfAJ5HnAmXEROieeJXv4TDblTy0J.', '', NULL, '4849595959', '', '', '', '', 'Bahamas', 'April - June 2017', '', '', '', '', '', '', '', NULL, '2016-11-02 18:56:24', '2016-11-03 14:06:53'),
(30, 1, '', 'Admin', 'Editor user', 'PhP', 'web', 'dandy@salaysia.com', '$2y$10$v4Kc8bH2y8fkidfRPe2cReoDCN9ReIrfYh9D6HvAeU4EX/FY4g6eW', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'CsX6sIRvl2itcuWjHwSzjZtT8bkcTC1XMgaDxn8ZyuuxzgyomYqJDybuK8Fv', '2016-11-23 12:11:42', '2016-12-25 16:27:40'),
(31, 1, '', 'User', 'Regular user', 'Mohammad', 'Alaa', 'mrmalaa.2@gmail.com', '$2y$10$lLb8FQ2LERlbupnK6OWhp.JmPbFYw.8euNntCYa033ctTgiaeTRjC', '', NULL, '+201155222023', '', '', '', '20-Dec-2016', 'Germany', 'Jan - March 2017', '', '', '', '', '', '', '', NULL, '2016-12-20 19:27:25', '2016-12-20 19:27:25');

-- --------------------------------------------------------

--
-- Table structure for table `user_permissions`
--

DROP TABLE IF EXISTS `user_permissions`;
CREATE TABLE `user_permissions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `Countries` varchar(255) DEFAULT NULL,
  `Universities` varchar(255) DEFAULT NULL,
  `Courses` varchar(255) DEFAULT NULL,
  `Services` varchar(255) DEFAULT NULL,
  `Brands` varchar(255) DEFAULT NULL,
  `Testimonials` varchar(255) DEFAULT NULL,
  `Menu` varchar(255) NOT NULL,
  `Inqueries` varchar(255) DEFAULT NULL,
  `Users` varchar(255) DEFAULT NULL,
  `Setting` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_permissions`
--

INSERT INTO `user_permissions` (`id`, `user_id`, `Countries`, `Universities`, `Courses`, `Services`, `Brands`, `Testimonials`, `Menu`, `Inqueries`, `Users`, `Setting`, `created_at`, `updated_at`) VALUES
(8, 15, NULL, NULL, NULL, 'yes', NULL, NULL, 'yes', NULL, NULL, '', '2017-01-08 18:19:00', '2016-11-01 20:40:11'),
(6, 26, 'yes', NULL, NULL, NULL, NULL, NULL, 'yes', NULL, NULL, '', '2017-01-08 18:19:03', '2016-11-01 20:31:41'),
(9, 1, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', '2016-11-28 10:33:47', '2016-11-01 20:31:41'),
(10, 25, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', '2017-01-08 18:19:06', '2016-11-08 17:09:21'),
(11, 30, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', NULL, NULL, '2017-01-08 18:19:09', '2016-11-23 13:24:38');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city_gallery`
--
ALTER TABLE `city_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_on_post_foreign` (`on_post`),
  ADD KEY `comments_from_user_foreign` (`from_user`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries_trans`
--
ALTER TABLE `countries_trans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses_trans`
--
ALTER TABLE `courses_trans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `durations`
--
ALTER TABLE `durations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees_cycle`
--
ALTER TABLE `fees_cycle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees_date`
--
ALTER TABLE `fees_date`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_on_post_foreign` (`firstname`),
  ADD KEY `comments_from_user_foreign` (`lastname`);

--
-- Indexes for table `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listings_favourite_courses`
--
ALTER TABLE `listings_favourite_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listings_favourite_university`
--
ALTER TABLE `listings_favourite_university`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listings_rank`
--
ALTER TABLE `listings_rank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listings_reviews`
--
ALTER TABLE `listings_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listings_trans`
--
ALTER TABLE `listings_trans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listing_courses`
--
ALTER TABLE `listing_courses`
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
-- Indexes for table `menubar`
--
ALTER TABLE `menubar`
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
-- Indexes for table `posts_trans`
--
ALTER TABLE `posts_trans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ranking`
--
ALTER TABLE `ranking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rank_type`
--
ALTER TABLE `rank_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialization`
--
ALTER TABLE `specialization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories_trans`
--
ALTER TABLE `sub_categories_trans`
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
-- Indexes for table `user_permissions`
--
ALTER TABLE `user_permissions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `city_gallery`
--
ALTER TABLE `city_gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `courses_trans`
--
ALTER TABLE `courses_trans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `durations`
--
ALTER TABLE `durations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `fees_cycle`
--
ALTER TABLE `fees_cycle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `fees_date`
--
ALTER TABLE `fees_date`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `listings`
--
ALTER TABLE `listings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `listings_favourite_courses`
--
ALTER TABLE `listings_favourite_courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `listings_favourite_university`
--
ALTER TABLE `listings_favourite_university`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `listings_rank`
--
ALTER TABLE `listings_rank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `listings_reviews`
--
ALTER TABLE `listings_reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `listing_courses`
--
ALTER TABLE `listing_courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300;
--
-- AUTO_INCREMENT for table `listing_gallery`
--
ALTER TABLE `listing_gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menubar`
--
ALTER TABLE `menubar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `ranking`
--
ALTER TABLE `ranking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `rank_type`
--
ALTER TABLE `rank_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `specialization`
--
ALTER TABLE `specialization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `user_permissions`
--
ALTER TABLE `user_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
