-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 16, 2019 at 03:00 PM
-- Server version: 5.7.23-23
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fcuivmmy_q_save`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '1Admin', 'admin@test.com', '$2y$10$0wxuL4lFhcfbyNgJzMx18.Tyiw57CeX5L83ZjxLP9wjc05JQzoM9S', 'Q6pxEfks4jGwasP42LPi24i4JFPyFnUKOSgjyf1BbSl5gVI5buUlwK95DaK3', '2019-09-26 13:21:38', '2019-09-27 06:40:05'),
(2, 'ahmed ramadan', 'deve.ahmedramadan@gmail.com', '$2y$10$8xeqwUy91m.3fBjX82ueQuZ07Ic9S.KtnI/sbMV3qDps76Y88gQji', NULL, '2019-10-04 20:43:59', '2019-10-04 20:43:59');

-- --------------------------------------------------------

--
-- Table structure for table `beststudent`
--

CREATE TABLE `beststudent` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_Teacher_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_Teacher_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Lecture_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Lecture_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_Teacher` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beststudent`
--

INSERT INTO `beststudent` (`id`, `name_ar`, `name_en`, `name_Teacher_ar`, `name_Teacher_en`, `text_ar`, `text_en`, `date_ar`, `date_en`, `Lecture_ar`, `Lecture_en`, `job_ar`, `job_en`, `img`, `img_Teacher`, `created_at`, `updated_at`) VALUES
(3, 'ارهت عثمان', 'Arhet osman', 'حسناء محمد', 'Hasnaa Ahmed', 'ارهت افضل طالبه لدي,هي زكيه ما شاء الله وتتعلم بسرعه جزاها الله كل خير', 'Arhet is My Best Student, She is Smart Ma shaa Allah, Jazaha Allah Kol Khair', 'اكتوبر-2018', 'Oct-2018', 'قراءه  القرآن بالتجويد', 'Reading Quran With Tajweed', 'معلمه قرآن', 'Quran Teacher', 'beststudent/S88Nz2PVrMA6TMBCPTgB2iVTCwstuwmwkmeQaeah.png', 'beststudent/wwl4NnTEDgvf1RNeWd2bISiiQ9iWpcl7OdYDqZtF.jpeg', '2019-09-27 07:52:56', '2019-10-15 15:54:17'),
(6, 'Lacota Maldonado', 'Levi Noble', 'Risa Avila', 'Ferris Carter', 'We are leading online Quran & Arabic teaching institute. We are expert in using state of the art technologies to teach online. We have teacher\'s who are certified by Al-Ahzar and also fluently speaks in english and well trained to teach online.', '-', '22-Sep-1979', '06-Jun-1980', 'Molestiae voluptatem', 'Nostrum repellendus', 'Proident et et vita', 'Et ut ut ut consequa', 'beststudent/2ix5BQtRnnfVq8H09tl1QThxLSyJ72ELfTMTZHq2.jpeg', 'beststudent/NEcXkBw4eTupgwEqv6qa5ueBPitCohsMmzxsBxOP.jpeg', '2019-09-28 05:30:55', '2019-10-15 18:24:07'),
(7, 'Aurelia Velasquez', 'Hayes Gould', 'Dakota Bray', 'Isabelle Powell', 'Our payments are securely processed by paypal. We gurantee you that we don\'t store your credit card info in our database.', 'Our payments are securely processed by paypal. We gurantee you that we don\'t store your credit card info in our database.', '16-Mar-1975', '11-Mar-1991', 'Quos et fugiat volup', 'Adipisci quis ad err', 'Sint ratione eius v', 'Tenetur magnam itaqu', 'beststudent/tlqx244RTqsMg3oTBuzR4sptkid4B3vtmd7NGLKm.jpeg', 'beststudent/nouJdoucsztEA48IL57WrSgMFLH8M0CBesurFqil.jpeg', '2019-09-28 05:31:12', '2019-10-06 17:27:12'),
(8, 'Ross Marsh', 'Keiko Bridges', 'Keegan Bond', 'Rose Mccarthy', 'Our payments are securely processed by paypal. We gurantee you that we don\'t store your credit card info in our database.', 'Our payments are securely processed by paypal. We gurantee you that we don\'t store your credit card info in our database.	Our payments are securely processed by paypal. We gurantee you that we don\'t store your credit card info in our database.', '10-Oct-2000', '22-Apr-1977', 'Est sit velit ipsa', 'Neque irure ipsum n', 'Elit qui ex volupta', 'Perspiciatis velit', 'beststudent/03bqSFRX1UmrPNB3ugkS8cByPB781Ugu6psjTYIg.jpeg', 'beststudent/xMHs2gmph7hOwxJg0NPdWsfsODu4h3NyIWIt1oO9.jpeg', '2019-09-28 05:31:36', '2019-10-06 17:28:51');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `head_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `head_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_diffe_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_diffe_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `head_ar`, `head_en`, `text_ar`, `text_en`, `color_diffe_ar`, `color_diffe_en`, `icon`, `created_at`, `updated_at`) VALUES
(2, 'تجربه العربي', 'QURAN COURSES', 'تجربه العربي تاني ,تجربه العربي ,تجربه العربي', '1. Reading        ,2. Memorization,3. Tafseer Quran,4. Tajweed(Beginners),5. Tajweed(Advanced)', 'Dicta in dolore enim', 'Molestiae impedit o', 'courses/tCRM4tl2CPYWAyhdiPk3hUG7zG8Ygl0kKEYk7HYf.jpeg', '2019-09-27 04:19:04', '2019-10-06 16:37:34'),
(3, 'Aut sit nesciunt ex', 'ISLAMIC STUDIES', 'Error aut beatae est', '1. Daily Islamic Sutions (Duaa) 									,2. The Prophets’ Stories 									,3. Learning Islamic Manners 									,4. Five Pillars of Islam', 'Lorem Lorem ipsum,Lorem Lorem ipsum,Lorem Lorem ipsum,Lorem Lorem ipsum', 'Enim eum duis minim', 'courses/z7zTcv4LI4WCd9FrI2vHK051xNLRPk21PAoSH9ms.jpeg', '2019-09-29 14:53:54', '2019-10-11 22:18:27'),
(4, 'Architecto rem aut u', 'ARABIC COURSES', 'تجربه العربي تجربه العربي تجربه العربي تجربه العربي تجربه العربي تجربه العربي تجربه العربي تجربه العربي', '1. Arabic grammer  									,2. Arabic Conversation  									,3. General Arabic Courses for Non-Native Speakers  									,4. Arabic for kid 									,5. How to Read Arabic', 'Id non dolor tempor', 'Ut mollit porro quia', 'courses/M8eBqyrpQNNBOziaeg2IoieMcRdH1kO2dvWOdSkE.jpeg', '2019-09-29 14:54:12', '2019-10-06 16:44:06'),
(5, 'Est nemo molestiae u', 'IJAAZAH PROGRAMS', 'Velit est voluptate', '1. Quran Recitation Ijaazah  									,2. Quran Memorization Ijaazah 									,3. Abroad Ijaazah 									,4. Learn Ten Qira’at Online', 'Est aut laboris vol', 'Itaque labore suscip', 'courses/fndB79A3QRf3j32XAEiQSHYwHeinhZGQ85ltLU3q.jpeg', '2019-10-04 11:25:39', '2019-10-06 16:45:45');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `dep_name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dep_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relation_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(10) UNSIGNED NOT NULL,
  `payment_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `callus_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `callus_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emaill` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `import_info_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `import_info_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutus_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutus_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `googel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_appstore` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_googelplay` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_appstore` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_googelplay` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `payment_ar`, `payment_en`, `contact_ar`, `contact_en`, `callus_ar`, `callus_en`, `emaill`, `import_info_ar`, `import_info_en`, `aboutus_ar`, `aboutus_en`, `facebook`, `twitter`, `instagram`, `googel`, `youtube`, `link_appstore`, `link_googelplay`, `img_appstore`, `img_googelplay`, `created_at`, `updated_at`) VALUES
(2, 'Our payments are securely processed by paypal. We gurantee you that we don\'t store your credit card info in our database.', 'Our payments are securely processed by paypal. We gurantee you that we don\'t store your credit card info in our database.', 'Head Office Location: Toronto, Canada Branch Office Location: Cairo, EgyptHead Office Location: Toronto,', 'Head Office Location: Toronto, Canada Branch Office Location: Cairo, EgyptHead Office Location: Toronto,', '+44 7418397601', '+44 7418397601', 'info@quransqaure.com', 'Success Stories,  Free Registration,  Like us in Facebook,  Tweet us,  Watch us our Vimeo Videos', '+44 7418397601,  Free Registration,  Like us in Facebook,  Tweet us,  Watch us our Vimeo Videos', 'We are leading online Quran & Arabic teaching institute. We are expert in using state of the art technologies to teach online. We have teacher\'s who are certified by Al-Ahzar and also fluently speaks in english and well trained to teach online.', 'We are leading online Quran & Arabic teaching institute. We are expert in using state of the art technologies to teach online. We have teacher\'s who are certified by Al-Ahzar and also fluently speaks in english and well trained to teach online.', 'https://www.facebook.com/quransquare', 'http://twitter.com/quransquare', 'https://www.instagram.com/quransquare', 'https://www.Googel.com', 'https://www.youtube.com/channel/UCz2rDPNQZ97l0Sld77nv7Ow', 'https://www.apple.com/', 'https://play.google.com/store/', 'footer/YGXTRItxsSmqqXnME89fSoWUhqmrSbTRyLttRMwA.png', 'footer/rNnvIuGlaBhJzpodrKD5TPF1lpxVtmn7WYUxdRWb.png', '2019-09-27 04:45:03', '2019-10-16 17:57:58');

-- --------------------------------------------------------

--
-- Table structure for table `halfhour`
--

CREATE TABLE `halfhour` (
  `id` int(10) UNSIGNED NOT NULL,
  `head_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `head_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateshow_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateshow_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descount3_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descount3_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percentage3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descount6_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descount6_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percentage6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descount12_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descount12_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percentage12` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `halfhour`
--

INSERT INTO `halfhour` (`id`, `head_ar`, `head_en`, `dateshow_ar`, `dateshow_en`, `number`, `content_ar`, `content_en`, `descount3_ar`, `descount3_en`, `percentage3`, `descount6_ar`, `descount6_en`, `percentage6`, `descount12_ar`, `descount12_en`, `percentage12`, `icon`, `created_at`, `updated_at`) VALUES
(4, 'WEEKLY 2 DAYS00', 'WEEKLY 2 DAYS', '35', '35', '30 £ /month', '100 جنيه مصري,عدد 2 محاضره اسبوعيا,8 محاضرات شهريا , 30 دقيقه لكل محاضره', '38 $ , 2 Day / Week,8 Classes / Month,30 Mins / Day', 'Vitae ipsum a aperi', '2 Months = 54 £', 'SAVE 10 %', 'Modi expedita laudan', '3 Months = 72 £', 'SAVE 20 %', 'Veniam ad modi debi', '6 Months = 117 £', 'SAVE 35 %', NULL, '2019-09-27 08:00:32', '2019-10-15 19:57:39'),
(5, 'WEEKLY 3 DAYS', 'WEEKLY 3 DAYS', '48', '48', '44 £ /month', '56 $ , 3 Day / Week,12 Classes / Month,30 Mins / Day', '56 $ , 3 Day / Week,12 Classes / Month,30 Mins / Day', 'Obcaecati architecto', '2 Months = 79 £', 'SAVE 10 %', 'Et fugiat autem cupi', '3 Months = 106 £', 'SAVE 20 %', 'Non sit est perspic', '6 Months = 172 £', 'SAVE 35 %', NULL, '2019-09-29 10:12:07', '2019-10-14 20:03:03'),
(6, 'WEEKLY 4 DAYS', 'WEEKLY 4 DAYS', '65', '65', '58 £ /month', '73 $ ,4 Days / Week,16 Classes / Month,30 Mins / Day', '73 $ ,4 Days / Week,16 Classes / Month,30 Mins / Day', 'Duis sit accusantium', '2 Months = 105 £', 'SAVE 10 %', 'Est esse aut mollit', '3 Months = 140 £', 'SAVE 20 %', 'Dolore eos officia i', '6 Months = 226 £', 'SAVE 35 %', NULL, '2019-09-29 10:32:54', '2019-10-14 19:32:13'),
(7, 'WEEKLY 5 DAYS', 'WEEKLY 5 DAYS', '77', '77', '72 £ /month', '91 $ , 5 Day / Week,20 Classes / Month,30 Mins / Day', '91 $ , 5 Day / Week,20 Classes / Month,30 Mins / Day', 'Exercitationem Nam a', '2 Months = 130 £', 'SAVE 10 %', 'Consectetur volupta', '3 Months = 173 £', 'SAVE 20 %', 'Commodi amet mollit', '6 Months = 281 £', 'SAVE 35 %', NULL, '2019-09-29 10:34:14', '2019-10-14 20:12:11'),
(9, 'WEEKLY 6 DAYS', 'WEEKLY 6 DAYS', '90', '90', '84 £ /month', '106 $ , 6 Day / Week,24 Classes / Month,30 Mins / Day', '106 $ , 6 Day / Week,24 Classes / Month,30 Mins / Day', '2 Months = 152 £', '2 Months = 152 £', 'SAVE 10 %', '3 Months = 202 £', '3 Months = 202 £', 'SAVE 20 %', '6 Months = 328 £', '6 Months = 328 £', 'SAVE 35 %', NULL, '2019-10-14 19:53:28', '2019-10-14 19:53:28');

-- --------------------------------------------------------

--
-- Table structure for table `hour`
--

CREATE TABLE `hour` (
  `id` int(10) UNSIGNED NOT NULL,
  `head_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `head_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateshow_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateshow_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descount3_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descount3_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percentage3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descount6_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descount6_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percentage6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descount12_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descount12_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percentage12` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hour`
--

INSERT INTO `hour` (`id`, `head_ar`, `head_en`, `dateshow_ar`, `dateshow_en`, `number`, `content_ar`, `content_en`, `descount3_ar`, `descount3_en`, `percentage3`, `descount6_ar`, `descount6_en`, `percentage6`, `descount12_ar`, `descount12_en`, `percentage12`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'يوم واحد فى اسبوعيا', 'WEEKLY 1 DAY', '35', '35', '30 £ /month', '38 $ , 1 Day / Week,4 Classes / Month,60 Mins / Day', '38 $ , 1 Day / Week,4 Classes / Month,60 Mins / Day', 'Ut commodi culpa it', '2 Months = 54 £', 'SAVE 10 %', 'Tempora eum ipsum d', '3 Months = 72 £', 'SAVE 20 %', 'Sunt quod velit dol', '6 Months = 117 £', 'SAVE 35 %', NULL, '2019-09-27 04:45:29', '2019-10-15 19:42:44'),
(4, 'WEEKLY 2 DAYS', 'WEEKLY 2 DAYS', '65', '65', '58 £ /month', '73 $ ,2 Days / Week,8 Classes / Month,60 Mins / Day', '73 $ ,2 Days / Week,8 Classes / Month,60 Mins / Day', 'Minim laboriosam re', '2 Months = 105 £', 'SAVE 10 %', 'Tenetur autem labori', '3 Months = 140 £', 'SAVE 20 %', 'Mollitia facere dolo', '6 Months = 226 £', 'SAVE 35 %', NULL, '2019-09-29 10:50:00', '2019-10-14 18:34:51'),
(5, 'WEEKLY 3 DAYS', 'WEEKLY 3 DAYS', '90', '90', '84 £ /month', '106 $ , 3 Day / Week,12 Classes / Month,60 Mins / Day', '106 $ , 3 Day / Week,12 Classes / Month,60 Mins / Day', 'Rem fugiat aute imp', '2 Months = 152 £', 'SAVE 10 %', 'Maxime cupidatat eiu', '3 Months = 202 £', 'SAVE 20 %', 'Eiusmod exercitation', '6 Months = 328 £', 'SAVE 35 %', NULL, '2019-09-29 10:52:44', '2019-10-14 17:44:40'),
(6, 'WEEKLY 4 DAYS', 'WEEKLY 4 DAYS', '115', '115', '108 £ /month', '136 $ , 4 Day / Week,16 Classes / Month,60 Mins / Day', '136 $ , 4 Day / Week,16 Classes / Month,60 Mins / Day', 'Dolorem pariatur Re', '2 Months = 195 £', 'SAVE 10 %', 'Voluptatem voluptate', '3 Months = 260 £', 'SAVE 20 %', 'Et doloremque culpa', '6 Months = 422 £', 'SAVE 35 %', NULL, '2019-09-29 10:53:39', '2019-10-14 18:00:26'),
(7, 'WEEKLY 5 DAYS', 'Weekly 5 Days', '140', '140', '130 £ /month', '163 $ , 5 Day / Week,20 Classes / Month,60 Mins / Day', '163 $ , 5 Day / Week,20 Classes / Month,60 Mins / Day', 'Earum quo autem offi', '2 Months =  234 £', 'SAVE 10 %', 'Ea aut et non soluta', '3 Months = 312 £', 'SAVE 20 %', 'Dignissimos molestia', '6 Months = 507 £', 'SAVE 35 %', NULL, '2019-10-14 03:22:40', '2019-10-14 18:50:59'),
(8, 'WEEKLY 6 DAYS', 'WEEKLY 6 DAYS', '170', '170', '150 £ /month', '188 $ , 6 Day / Week,24 Classes / Month,60 Mins / Day', '188 $ , 6 Day / Week,24 Classes / Month,60 Mins / Day', 'Ea dolorem minima ut', '2 Months = 270 £', 'SAVE 10 %', 'Doloremque maiores m', '3 Months = 360 £', 'SAVE 20 %', 'A et tempor obcaecat', '6 Months = 585 £', 'SAVE 35 %', NULL, '2019-10-14 03:22:56', '2019-10-14 19:01:15');

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
(3, '2018_02_23_212935_create_admins_table', 1),
(4, '2018_03_30_002607_create_settings_table', 1),
(5, '2018_03_31_112715_create_files_table', 1),
(6, '2018_06_22_145313_create_departments_table', 1),
(7, '2019_08_26_222252_create_whyus_table', 1),
(8, '2019_08_26_22225_create_Courses_table', 1),
(9, '2019_08_26_22225_create_Videos_table', 1),
(10, '2019_08_26_2222_create_teachers_table', 1),
(11, '2019_08_26_223_create_testimonial_table', 1),
(12, '2019_08_26_224_create_beststudent_table', 1),
(13, '2019_08_26_22_create_halfhour_table', 1),
(14, '2019_08_26_29_create_hour_table', 1),
(15, '2019_08_2_22222222222222222_create_footer_table', 1),
(16, '2019_08_2_2222_create_slider_table', 1),
(17, '2019_08_2_222_create_news_table', 1),
(18, '2019_08_2_223_create_contact_table', 1),
(19, '2019_08_2_224_create_student_table', 1),
(20, 'z2019_08_26_22225_create_stat_table', 1),
(21, 'z2019_08_26_2222_create_quick_table', 1),
(22, 'z2019_08_26_222_create_teachersignup_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `quick`
--

CREATE TABLE `quick` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quick`
--

INSERT INTO `quick` (`id`, `name`, `email`, `subject`, `phone`, `message`, `icon`, `created_at`, `updated_at`) VALUES
(7, 'Mohamed', 'quransquare@gmail.com', NULL, '01100469388', NULL, NULL, '2019-10-05 02:53:37', '2019-10-05 02:53:37'),
(8, 'byrop', 'divecubo@mailinator.com', NULL, '52', NULL, NULL, '2019-10-11 13:38:41', '2019-10-11 13:38:41');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `sitename_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sitename_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_lang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ar',
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `keywords` longtext COLLATE utf8mb4_unicode_ci,
  `status` enum('open','close') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `message_maintenance` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `sitename_ar`, `sitename_en`, `logo`, `icon`, `email`, `main_lang`, `description`, `keywords`, `status`, `message_maintenance`, `created_at`, `updated_at`) VALUES
(1, 'sitename_ar', 'sitename_en', 'settings/waqIJDuChLJ67svlE7nqZLgJU3ddMRbDrPnOwR4z.png', 'settings/3QKGSCvMLxfjWGHsMLJ7eYHT0NIKcD5iNoGz1yvF.png', 'm@m.com', 'ar', 'description', 'keywords', 'open', 'message_maintenance', '2019-09-26 13:21:38', '2019-10-16 21:45:27');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) UNSIGNED NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text1_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text1_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text2_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text2_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text3_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text3_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `link`, `head_en`, `head_ar`, `title_en`, `title_ar`, `text1_ar`, `text1_en`, `text2_ar`, `text2_en`, `text3_ar`, `text3_en`, `img`, `created_at`, `updated_at`) VALUES
(31, 'https://quransquare.com/quransquare/public/admin/slider/create', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'slider/1234567899.jpg', '2019-10-16 17:33:47', '2019-10-16 21:49:44');

-- --------------------------------------------------------

--
-- Table structure for table `slidertext`
--

CREATE TABLE `slidertext` (
  `id` int(10) UNSIGNED NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text1_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text1_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text2_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text2_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text3_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text3_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slidertext`
--

INSERT INTO `slidertext` (`id`, `link`, `head_en`, `head_ar`, `title_en`, `title_ar`, `text1_ar`, `text1_en`, `text2_ar`, `text2_en`, `text3_ar`, `text3_en`, `img`, `created_at`, `updated_at`) VALUES
(1, 'https://www.motuta.com', 'Quran Square                    \"Learn Quran at the touch of a button\"', 'تجربه', '3 simple steps to start', 'العنوان بالعربيه', 'النص 1 با لعربيه', '1-Take A Free Trial Class ...', 'النص 2 بالعربيه', '2- Choose your Plan ...', 'تجربه تجربه', '3- Start Learning Quran ...', 'slidertext/Ogr4tHTGQUtE6Ut2IOPdV0f6IUiSYiaTRXRTJXAs.jpeg', '2019-10-02 03:45:23', '2019-10-09 17:47:37');

-- --------------------------------------------------------

--
-- Table structure for table `slidertext-oldd`
--

CREATE TABLE `slidertext-oldd` (
  `head_ar` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stat`
--

CREATE TABLE `stat` (
  `id` int(10) UNSIGNED NOT NULL,
  `font_awesome` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stat`
--

INSERT INTO `stat` (`id`, `font_awesome`, `number`, `head_ar`, `head_en`, `img`, `created_at`, `updated_at`) VALUES
(4, 'icon-trophy', '180', 'اختبار العربي', 'QURAN TUTORS AVAILABLE', 'stat/t95enwptX5KNS499aNSBs5ePx9EpDlFx1PZNRkQh.png', '2019-09-28 09:07:16', '2019-10-12 05:28:41'),
(5, 'icon-video', '1700', 'REGISTERED STUDENTS', 'REGISTERED STUDENTS', 'stat/Sl3Nq4IzfYdkUe1A2MzkIRK5cGCY470HxwcUJ4Uz.png', '2019-09-29 10:07:11', '2019-10-16 16:17:27'),
(6, 'icon-happy', '64000', 'CLASSROOM SESSIONS COMPLETED', 'CLASSROOM SESSIONS COMPLETED', 'stat/4wQtJX907ERFRxmGBvlc3tijJCLG1UrlAhjzgEij.png', '2019-09-29 10:08:26', '2019-10-12 02:35:42'),
(9, 'fa  fa-heart', '18', 'OUR COURSES', 'OUR COURSES', 'stat/0ByK8wT1gizgss89xsR96OQngmssprbTLSIvj12T.png', '2019-10-11 22:26:32', '2019-10-16 16:16:17');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `how_aboutus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timezone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st1_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st1_Gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st1_course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st1_age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st2_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st2_Gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st2_course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st2_age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st3_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st3_Gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st3_course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st3_age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st4_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st4_Gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st4_course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st4_age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st5_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st5_Gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st5_course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st5_age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `phone`, `message`, `how_aboutus`, `location`, `timezone`, `date`, `st1_name`, `st1_Gender`, `st1_course`, `st1_age`, `st2_name`, `st2_Gender`, `st2_course`, `st2_age`, `st3_name`, `st3_Gender`, `st3_course`, `st3_age`, `st4_name`, `st4_Gender`, `st4_course`, `st4_age`, `st5_name`, `st5_Gender`, `st5_course`, `st5_age`, `time`, `icon`, `created_at`, `updated_at`) VALUES
(34, 'Fadel Osim', 'sohaipadel4@gmail.com', '1069144879', 'test', 'Word of mouth', 'American Samoa', '(GMT +1:00 hour) Brussels, Copenhagen, Madrid, Paris', '2019-10-23', 'Mohamed Abd Elmoaty', 'Male', 'Ijaazah', '20', 'Mona', 'Female', 'Ijaazah', '20', 'Ali', 'Female', 'Arabic', '30', NULL, 'Male', NULL, '4', NULL, 'Male', NULL, '4', '5:30 AM', NULL, '2019-10-16 12:38:13', '2019-10-16 12:38:13');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `head_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `head_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `link`, `name_ar`, `name_en`, `head_ar`, `head_en`, `img`, `created_at`, `updated_at`) VALUES
(6, 'https://www.youtube.com/watch?v=jOxehEa--C8', 'معلمة اللغة العربية', 'Sister.Hasnaa', 'معلمة اللغة العربية', 'The Arabic   Lamia', 'teachers/BcKElfNOcomKgpxpfBTrjQpjkxkBZbAON5Om9qSE.jpeg', '2019-09-29 11:41:14', '2019-10-06 20:23:44'),
(7, 'https://www.youtube.com/watch?v=E5Q1lD_rw3s', 'سوف نبقى هنا', 'Brother.Mohamed', 'سوف نبقى هنا', 'sawf nabqa hona', 'teachers/5OtgvS3V0tz48i3HqWDFr72gnbt1UTeVGOeLpMNu.jpeg', '2019-09-29 11:44:26', '2019-10-06 20:24:09');

-- --------------------------------------------------------

--
-- Table structure for table `teachersignup`
--

CREATE TABLE `teachersignup` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `how_aboutus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timezone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name_ar`, `name_en`, `job_ar`, `job_en`, `text_ar`, `text_en`, `country_ar`, `country_en`, `img`, `created_at`, `updated_at`) VALUES
(11, 'Sr. Shanelle', 'Sr. Shanelle', 'ggggg', 'Alhamdullilah  I am sincerely pleased with my learning experience with Quran Square . I have now gained confidence in learning the Qu’ran.', 'اختبار العربي', 'Jazakom Allah Khair', 'Washington, USA', 'Washington, USA', 'testimonial/EhY8UgIzfTCvX30ZuDJy2dx2fck8jVXPYUuD0g9t.png', '2019-10-11 01:35:10', '2019-10-14 21:36:07'),
(14, 'Adam Munshi', 'Adam Munshi', 'Est voluptas dolorib', 'The courses are of great quality. I hope to continue with them for as long as I can', 'test', 'Let’s improve our lives by studying the Holy Quran.', 'Memphis USA', 'Memphis USA', 'testimonial/jm0Qpd5y3SGv5wtV6Jz0LexYlTHONGLOYKdFbbMc.jpeg', '2019-10-11 03:57:11', '2019-10-14 21:42:40'),
(15, 'Sister Shamim', 'Sister Shamim', 'It is a satisfying and helpful Quran lessons online Alhamdulillah. The teachers are very sincere and hardworking. My kids are very happy and encouraged.', 'It is a satisfying and helpful Quran lessons online Alhamdulillah. The teachers are very sincere and hardworking. My kids are very happy and encouraged.', 'test', 'Jazakom Allah Khair', 'London , UK', 'London , UK', 'testimonial/9jAwci9fZwwBrxwfwTEGAG2YYTkViUjtDljQVXkZ.png', '2019-10-14 21:45:59', '2019-10-14 21:45:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('user','vendor','company') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ariel Kennedy', 'tawisa@mailinator.net', '$2y$10$/u5lWqx5Ebi/VCUV7hVzDelXek4HxwZSFUJk75ojG/nw/EbPMqeTq', 'vendor', NULL, '2019-09-27 06:40:26', '2019-09-27 06:40:26');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `link`, `img`, `created_at`, `updated_at`) VALUES
(3, 'https://www.youtube.com/watch?v=aMKnCveaoD0', 'videos/Hg2sbYQpUQ2dDuhDiprgvfBG6LnHmGeKGVmhGNoj.png', '2019-09-27 07:09:08', '2019-10-04 23:42:22'),
(7, 'https://www.youtube.com/watch?v=5GW9-MiFHgA', 'videos/Xf4HGSrTAxZ3Ur0iZeqKuXQFRKQPjzVweWBMcikb.png', '2019-09-28 04:38:33', '2019-10-04 23:32:41'),
(8, 'https://www.youtube.com/watch?v=2hv5PYu86nk', 'videos/x2hZxxBzEKC3yOQRJLhIgYsi9Nnv2RINcDQRtxmo.png', '2019-09-28 05:05:07', '2019-10-04 18:27:12');

-- --------------------------------------------------------

--
-- Table structure for table `whyus`
--

CREATE TABLE `whyus` (
  `id` int(10) UNSIGNED NOT NULL,
  `head_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `head_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_diffe_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_diffe_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `whyus`
--

INSERT INTO `whyus` (`id`, `head_ar`, `head_en`, `text_ar`, `text_en`, `color_diffe_ar`, `color_diffe_en`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'تجريبية مجانية', 'FREE DEMO CLASS', 'احصل على أول صف مجاني و', 'Get your first free class and', 'نص ........', 'no payment is required.', 'whyus/g1KWtKAJccr0lsEkcZugYAhkytmGg6l0W7OYIJMk.png', '2019-09-26 13:25:48', '2019-10-12 04:49:53'),
(2, '100% MONEY BACK', '100% MONEY BACK', 'Praesentium voluptat', '. We will refund your money if you aren\'t satisfied in a week.', 'In sapiente velit q', '. 100% Money Back Guarantee', 'whyus/4iTMC2p2XnvwEU8kQwQBO4V5AQL33RjVUx1XhxGu.png', '2019-09-27 04:14:58', '2019-10-06 15:47:13'),
(3, 'CERTIFIED TEACHERS', 'CERTIFIED TEACHERS', 'Et nulla eius dolor', '. Al-Azhar certified male and female', 'Sequi et excepturi p', 'professional teachers are available', 'whyus/Gvm7ttjGlhC4CLwKUTWVy1UhZb2J5OgnC5VqgZHX.png', '2019-09-27 06:48:08', '2019-10-06 15:55:58'),
(5, '24/7 SUPPORT & SCHEDULE', '24/7 SUPPORT & SCHEDULE', 'Aspernatur nobis ali', 'Very Flexible 24/7 support & schedule at', 'Voluptatibus autem e', 'anytime of the day', 'whyus/SLu5kMYGkWODOgdqnaDynmMx4cPB23zuJqHODUgn.png', '2019-09-27 07:29:02', '2019-10-06 15:59:00');

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
-- Indexes for table `beststudent`
--
ALTER TABLE `beststudent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departments_parent_foreign` (`parent`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `halfhour`
--
ALTER TABLE `halfhour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hour`
--
ALTER TABLE `hour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `quick`
--
ALTER TABLE `quick`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slidertext`
--
ALTER TABLE `slidertext`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stat`
--
ALTER TABLE `stat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachersignup`
--
ALTER TABLE `teachersignup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whyus`
--
ALTER TABLE `whyus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `beststudent`
--
ALTER TABLE `beststudent`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `halfhour`
--
ALTER TABLE `halfhour`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hour`
--
ALTER TABLE `hour`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quick`
--
ALTER TABLE `quick`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `slidertext`
--
ALTER TABLE `slidertext`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stat`
--
ALTER TABLE `stat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teachersignup`
--
ALTER TABLE `teachersignup`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `whyus`
--
ALTER TABLE `whyus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `departments_parent_foreign` FOREIGN KEY (`parent`) REFERENCES `departments` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
