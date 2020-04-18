-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2020 at 02:10 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `github_lernquranonline`
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
(1, 'mohamed', 'm@m.com', '$2y$10$nR9qAMYN/964UDG1lu6yruhpMUxqfATHjRRS/iCAYFppRrO9PfuNS', 'XmELKhb4tBeAed8dki2Hq5ijIdu0NLSs7SyEgYpxe4OiF7YZtDkBf30bSJ45', NULL, '2020-03-28 10:14:33'),
(2, 'Mohamed', 'admin@test.com', '$2y$10$lbeTnmrQSy/eqjghiWVDBOtP.VimNkOmxLV3uIWgrM9T0URrQ/Iwe', NULL, '2020-04-10 20:57:08', '2020-04-10 20:57:08');

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
(1, 'إيزابيل زيمرمان', 'Isabelle Zimmerman', 'ميار عمرو', 'Mayar Amr', 'إيزابيل زيمرمان طالب  متميزة في التجويد', 'Isabel Zimmerman is a distinguished student of intonation', '08-Dec-2019', '20-Dec-2012', 'فى كورس التجويد', 'Tajweed course', 'Tajweed', 'التجويد', 'beststudent/ocndIBGhzeGGwfvz4VatotlhV4lxplwAgrTYF62z.jpeg', 'beststudent/A7V5idJOVMMd4rVb9Dcu6ZQuUrTwILg2gzk8qeFt.jpeg', '2020-03-28 10:28:39', '2020-04-12 00:38:55'),
(2, 'باندورا زيمرمان', 'Pandora Zimmerman', 'Zelda Lewis', 'Urielle Malone', 'طالبه مميزه وقد اجتازت معنا اكثر من 12 مستوى انها   طالبه   على خلق رفيع وقدر عالى من الستيعاب', 'She is a distinguished student, and she has passed with us over 12 levels. She is a student with a high degree of creation and a high degree of assimilation', '08-2020-مارس-', '11-Mar-2020', 'دوراه تحفيظ القران', 'Quran cource', 'Id nobis ad eaque du', 'Ea in qui voluptatem', 'beststudent/8LOrb4qVvukZBlkiQvkkeQq7LyWR4utb3rmsf0Zz.png', 'beststudent/ojx5yVT8ehu42eNtKocUl2SB27IGPeo8SvNwAZ0X.jpeg', '2020-03-28 10:29:08', '2020-04-12 00:43:45'),
(3, 'هايز جولد', 'Hayes Gould', 'MOhamed Ali', 'Isabelle Powell', 'حقا هاينز جولد طالب مثاليا لقد  تعلم اكثر من 7 كورسات  فى وقت قصير جدا   لقد حصل هلى المركز الاول   فى معظم الكروسات', 'Really, Heinz Gold is a perfect student. He learned more than 7 courses in a very short time. He won first place in most of the crosses.', '1997-اكتوبر-22', '1997-Oct-22', 'Sunt voluptas omnis', 'Aliquip sapiente neq', 'Ad consequatur Ut q', 'Nihil sit enim nisi', 'beststudent/UK3ra2zl1EOWrzcPzKwFYBa3R4c5aVD2NJspr0m2.jpeg', 'beststudent/pfYxMPHnXHDCCzu9cCEfh4GNlSpovWXwlWAtE2EZ.jpeg', '2020-03-28 10:29:30', '2020-04-12 00:48:24'),
(4, 'Ariana Velasquez', 'أريانا فيلاسكيز', 'Brock Hensley', 'Sydney Fuller', 'طالب مثاليا لقد  تعلم اكثر من  اللغه العربيه   وع حفظ القران الكريم  واتقنهما معنا  بفضل من الله', 'Ideally student, he has learned more than Arabic and memorized the Holy Quran and perfected them with us thanks to God', '23-May-1973', '09-Mar-1985', 'Assumenda vero moles', 'Voluptate adipisci v', 'Quis in anim dolor p', 'Voluptatum eu est ad', 'beststudent/rOCuLzULJyuIoxt4wmu52iZaiTZ1ZBk8JK7BbH8I.jpeg', 'img_Teacher/KJKlSZyF3qrkWNci7yG28q7RMCpbOD2INiDjRJwC.jpeg', '2020-03-29 09:47:58', '2020-04-12 00:52:08'),
(5, 'Sloane Dawson', 'Jenette Stone', 'Joseph Whitehead', 'Eden Housebbb', 'Reprehenderit vitae', 'Et ea ut in ut nostr', '21-Jun-1981', '10-Dec-2010', 'Rerum asperiores fug', 'Impedit qui cum vel', 'Blanditiis aut tempo', 'Laboriosam aut exce', 'beststudent/75EeNWFvS2DQVC935jNdnrvfa6tj43oPu2REcO57.png', 'img_Teacher/qAj3ixDHNwvwcCyh5xrORCaV1DEZznNUUjiZYRUV.jpeg', '2020-04-16 10:19:54', '2020-04-16 10:19:54');

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

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `phone`, `message`, `icon`, `created_at`, `updated_at`) VALUES
(8, 'Rebecca Wade', 'meqyq@mailinator.net', 'Fugit nostrud sapie', '+1 (894) 612-1111', 'Odit dolor aut minim', NULL, '2020-04-02 16:29:37', '2020-04-02 16:29:37'),
(9, 'Patience Armstrong', 'gejojeti@mailinator.net', NULL, '+1 (819) 455-3995', 'Explicabo Cupiditat', NULL, '2020-04-02 16:32:10', '2020-04-02 16:32:10'),
(10, 'Alma Villarreal', 'gykaxyp@mailinator.com', NULL, '+1 (728) 529-5604', 'Lorem officiis cillu', NULL, '2020-04-02 22:24:40', '2020-04-02 22:24:40'),
(11, 'Dexter Tillman', 'gyfas@mailinator.com', NULL, '+1 (195) 166-8299', 'Ipsam aut omnis dolo', NULL, '2020-04-02 22:35:17', '2020-04-02 22:35:17'),
(12, 'Mohamed', 'A2@2A.com', NULL, '01147201321', 'cccccccccc', NULL, '2020-04-02 22:35:40', '2020-04-02 22:35:40'),
(13, 'Mohamed', 'A2@2A.com', NULL, '01147201321', 'xxxxxxxxxxxx', NULL, '2020-04-02 22:36:20', '2020-04-02 22:36:20'),
(14, 'Mohamed', 'A2@2A.com', NULL, '01147201321', 'xxxxxxxxxxxx', NULL, '2020-04-02 22:36:22', '2020-04-02 22:36:22'),
(15, 'Ocean Mack', 'rejyquwim@mailinator.net', NULL, '+1 (469) 723-4202', 'Consequatur facilis', NULL, '2020-04-02 22:40:47', '2020-04-02 22:40:47'),
(16, 'Harper Oneil', 'damo@mailinator.net', NULL, '+1 (671) 933-1747', 'Repudiandae dolores', NULL, '2020-04-02 22:41:20', '2020-04-02 22:41:20'),
(17, 'Sacha Davenport', 'tarucuxole@mailinator.com', NULL, '+1 (791) 811-9191', 'In quia ut in enim e', NULL, '2020-04-02 22:45:07', '2020-04-02 22:45:07'),
(18, 'Ingrid Langley', 'gaxuhekeq@mailinator.net', NULL, '+1 (753) 358-1952', 'Ea aut enim rem sed', NULL, '2020-04-02 22:46:33', '2020-04-02 22:46:33'),
(19, 'Mohamed', 'm01127673780@gmail.com', NULL, '01147201321', 'ؤؤؤ', NULL, '2020-04-02 22:51:09', '2020-04-02 22:51:09'),
(20, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-02 22:51:34', '2020-04-02 22:51:34'),
(21, 'Zeus Ashley', 'lonu@mailinator.com', NULL, '+1 (698) 751-2476', 'At ipsam voluptate i', NULL, '2020-04-03 05:30:42', '2020-04-03 05:30:42'),
(22, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-03 05:40:23', '2020-04-03 05:40:23'),
(23, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-03 05:40:29', '2020-04-03 05:40:29'),
(24, 'Mohamed', 'A2@2A.com', NULL, '01147201321', '111111111111', NULL, '2020-04-03 08:27:41', '2020-04-03 08:27:41'),
(25, 'badry', 'm01127673780@gmail.com', NULL, '01147201321', NULL, NULL, '2020-04-03 08:28:36', '2020-04-03 08:28:36'),
(26, 'Mohamed', 'A2@2A.com', NULL, '01147201321', NULL, NULL, '2020-04-03 08:29:40', '2020-04-03 08:29:40'),
(27, 'Mufutau Valdez', 'fexevu@mailinator.net', NULL, '+1 (291) 875-7636', 'Cupidatat sequi eum', NULL, '2020-04-03 08:30:27', '2020-04-03 08:30:27'),
(28, 'Leilani Mooney', 'tizusi@mailinator.net', NULL, '+1 (461) 357-5439', 'Ipsa consequatur u', NULL, '2020-04-03 08:32:28', '2020-04-03 08:32:28'),
(29, 'Leilani Mooney', 'tizusi@mailinator.net', NULL, '+1 (461) 357-5439', 'Ipsa consequatur u', NULL, '2020-04-03 08:32:46', '2020-04-03 08:32:46'),
(30, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-03 08:35:00', '2020-04-03 08:35:00'),
(31, 'Baxter Lawson', 'myfavisimi@mailinator.net', NULL, '+1 (905) 782-9804', 'Quaerat quo est susc', NULL, '2020-04-03 08:35:53', '2020-04-03 08:35:53'),
(32, 'Haley Fisher', 'jory@mailinator.com', NULL, '+1 (406) 378-3038', 'Dolores et optio qu', NULL, '2020-04-03 08:36:48', '2020-04-03 08:36:48'),
(33, 'Cameron Bright', 'fomo@mailinator.com', NULL, '+1 (494) 979-2174', 'Aut aliquid sequi qu', NULL, '2020-04-03 08:37:55', '2020-04-03 08:37:55'),
(34, 'Leah Nichols', 'guna@mailinator.com', NULL, '+1 (544) 781-6359', 'Sint voluptatem aut', NULL, '2020-04-03 09:37:44', '2020-04-03 09:37:44'),
(35, 'Wayne Dillard', 'ryvelyjy@mailinator.net', NULL, '+1 (904) 291-9843', 'Quo beatae ea ducimu', NULL, '2020-04-03 09:43:21', '2020-04-03 09:43:21'),
(36, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-03 09:45:03', '2020-04-03 09:45:03'),
(37, 'Dexter Colon', 'laxup@mailinator.com', NULL, '+1 (776) 311-9422', 'Voluptates exercitat', NULL, '2020-04-03 09:45:23', '2020-04-03 09:45:23'),
(38, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-03 09:48:37', '2020-04-03 09:48:37'),
(39, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-03 09:48:53', '2020-04-03 09:48:53'),
(40, 'Lynn Leach', 'ditoxit@mailinator.net', NULL, '+1 (846) 716-9831', 'Sit voluptatem aliq', NULL, '2020-04-03 09:51:37', '2020-04-03 09:51:37'),
(41, 'Lani Owen', 'xixusy@mailinator.net', NULL, '+1 (808) 701-1892', 'Aut facilis et ullam', NULL, '2020-04-03 09:54:14', '2020-04-03 09:54:14'),
(42, 'Tamara Burch', 'buqafyqoh@mailinator.net', NULL, '+1 (723) 863-1271', 'Atque quia ea neque', NULL, '2020-04-03 09:58:13', '2020-04-03 09:58:13'),
(43, 'Ria Lang', 'hewex@mailinator.net', NULL, '+1 (665) 802-7334', 'Est dolore in provi', NULL, '2020-04-03 09:58:45', '2020-04-03 09:58:45'),
(44, 'Reuben Bradley', 'zebupo@mailinator.net', NULL, '+1 (747) 283-9511', 'Quis ratione commodi', NULL, '2020-04-03 10:01:29', '2020-04-03 10:01:29'),
(45, 'Yasir Vinson', 'buvofeke@mailinator.net', NULL, '+1 (151) 314-6151', 'Magna laboriosam qu', NULL, '2020-04-03 10:10:20', '2020-04-03 10:10:20'),
(46, 'Harding Walton', 'quzycaqyd@mailinator.com', NULL, '+1 (234) 824-9565', 'Lorem quidem maxime', NULL, '2020-04-03 10:11:13', '2020-04-03 10:11:13'),
(47, 'Reece Fry', 'cazepyhos@mailinator.net', NULL, '+1 (724) 149-2338', 'Necessitatibus nisi', NULL, '2020-04-07 00:00:11', '2020-04-07 00:00:11'),
(48, 'Barrett Santiago', 'qezy@mailinator.com', NULL, NULL, NULL, NULL, '2020-04-07 00:04:12', '2020-04-07 00:04:12'),
(49, 'Kelly Robles', 'fohi@mailinator.com', NULL, NULL, NULL, NULL, '2020-04-07 00:13:45', '2020-04-07 00:13:45'),
(50, 'Susan Osborne', 'xatonun@mailinator.net', NULL, NULL, NULL, NULL, '2020-04-08 09:47:38', '2020-04-08 09:47:38'),
(51, 'Noel Casey', 'gajyrixupu@mailinator.com', NULL, NULL, NULL, NULL, '2020-04-08 11:28:01', '2020-04-08 11:28:01'),
(52, 'Vaughan Cunningham', 'samesolep@mailinator.net', NULL, '+1 (869) 143-8188', 'Autem quo quis commo', NULL, '2020-04-10 19:01:45', '2020-04-10 19:01:45'),
(53, 'Illana Velez', 'jujadoj@mailinator.com', NULL, NULL, NULL, NULL, '2020-04-10 19:16:46', '2020-04-10 19:16:46'),
(54, 'Simon Moreno', 'winuryba@mailinator.net', NULL, NULL, NULL, NULL, '2020-04-10 19:17:25', '2020-04-10 19:17:25'),
(55, 'Omar', 'bacic@mailinator.net', NULL, '+1 (173) 601-5081', 'Architecto minus vol', NULL, '2020-04-10 20:07:46', '2020-04-10 20:07:46'),
(56, 'TCHE Omar', 'O@O.O', NULL, NULL, NULL, NULL, '2020-04-10 20:12:45', '2020-04-10 20:12:45'),
(57, 'Linus Kidd', 'senuse@mailinator.com', NULL, NULL, NULL, NULL, '2020-04-13 06:05:05', '2020-04-13 06:05:05'),
(58, 'محمد', 'admin@admin.com', NULL, NULL, NULL, NULL, '2020-04-13 23:59:12', '2020-04-13 23:59:12'),
(59, 'Faith Ford ببببلللللحححح2222', 'm@m.n', NULL, '+1 (352) 567-3949', NULL, NULL, '2020-04-15 15:00:51', '2020-04-15 15:00:51');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `head_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `head_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_ar` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(1, 'دورة تلاوة القرآن الكريم', 'Quran recitation course', 'تلاوة القرآن تعلم كيفية تلاوة القرآن بالطريقة الصحيحة كما أفاد النبي محمد (صلى الله عليه وسلم).', 'Quran Recitation Learn how to correctly recite the Quran in the way as reported by the Prophet Muhammad (PBUH).', 'Lorem Lorem ipsum,Lorem Lorem ipsum,Lorem Lorem ipsum,Lorem Lorem ipsum', 'recitation', 'courses/lAT2B1IgY6CLkwD2zvIqPXxxFAO8GdzoR7hXmGGS.jpeg', '2020-03-28 10:22:36', '2020-04-11 03:18:07'),
(2, 'دوره  الدراسات الإسلامية', 'Islamic studies course', 'الدراسات الإسلامية تعرف على الإسلام والالتزامات والسنة والدعاء والمزيد من كبار علماء القرآن.', 'Islamic Studies Learn about Islam, obligations, sunnah, Dua’a (supplication), and more by top Quran scholars.', 'دوره  الدراسات الإسلامية', 'Islamic studies course', 'courses/CjwUE1nJbtcky2lstkrnWspeDcFi6eBaEjyaoaoC.jpeg', '2020-03-28 10:23:12', '2020-04-11 03:31:47'),
(3, 'قراءة أساسيات القرآن', 'Reading Quran Basics', 'قراءة أساسيات القرآن تعلم أساسيات قراءة القرآن على الإنترنت مع أفضل علماء القرآن على الإنترنت. و الازهر الشريف  , فى العالم العربى والاسلامى', 'Read the basics of the Quran Learn the basics of reading the Qur’an online with the best internet Quran scholars. And Al-Azhar Al-Sharif, in the Arab and Islamic world', 'text', 'text', 'courses/r2TLcJsGe0hKF5qXgjFzdruA19dZg98EYY0QvdSa.webp', '2020-03-28 10:23:33', '2020-04-11 03:44:07'),
(4, 'تعلم القواعد النحوية للغة العربية', 'Cupiditate corporis', 'تعلم القواعد النحوية للغة العربية لتكون قادرة على قراءة وكتابة اللغة العربية بشكل مثالي.', 'Arabic Grammar Learn the grammatical rules of Arabic language to be able to read and write Arabic perfectly.', 'Consequatur dolore', 'Fuga Dolorum minima', 'courses/G5AIipuKY5kqLS5dNpccHD7rvFCU5mwlEd7k0EYW.webp', '2020-03-28 10:24:03', '2020-04-11 03:49:21'),
(5, 'دورة قواعد التجويد أون لاين', 'Online Tajweed grammar course', 'التجويد هو إعطاء كل حرف صحيح ونطقه من المكان الصحيح في الفم / الأنف / الحلق. الكلمة نفسها تعني \"لتحسين\". تم تصميم هذه الدورة لتعليم قواعد التجويد من منظور نظري وعملي', 'Tajweed is to give each letter a correct and pronounced place from the right place in the mouth / nose / throat The word itself means \"to improve.\" This course is designed to teach the rules of intonation from a theoretical and practical perspective', 'Tajweed', 'التجويد', 'courses/HKUKmGJpTUq7ceORTqbAlMwVgAtPOYbD5pTU0m5z.jpeg', '2020-04-03 22:22:36', '2020-04-11 02:59:16'),
(6, 'إجازة القران', 'Quran Ijazah', 'احصل على إجازة عبر الإنترنت في \"تلاوة القرآن\" و / أو \"تحفيظ القرآن\" من قبل معلمين معتمدين.', 'Get Ijazah online in “Quran Recitation” and / or “Quran Memorization” by certified tutors.', 'none', 'none', 'courses/mgfcbc0xlAUhDOBadFYoPG6O3piXMrfpLwBcKn3O.jpeg', '2020-04-03 22:23:22', '2020-04-11 03:39:00'),
(7, 'حفظ القرآن  عن ظهر قلب.', 'Quran Memorization', 'تحفيظ القرآن تعلم وتحفيظ القرآن بدقة مع علماء جامعة الأزهر. تعرف على معنى الآيات وأسباب كشفها. يركز تحفيظ القرآن على إكمال تحفيظ كتاب الله في أقصر وقت بدقة عالية ودقة مع علماء من جامعة الأزهر يحملون إجازة واحدة أو أكثر.', 'QURAN MEMORIZATION Learn and memorize the Quran accurately with scholars from Al-Azhar University. Learn the meaning of the verses and the reasons behind revealing them. Quran Memorization focuses on completing the memorization of the Book of Allah in the shortest time with high accuracy and precision with scholars from Al-Azhar University who carry one or more Ijazaah.', 'Sint veniam laudan', 'Neque veniam earum', 'courses/N9KuCCEw7zw8pLumaS8D3lWnF7esTmv9c0JHhc4h.jpeg', '2020-04-03 22:23:37', '2020-04-11 03:56:05'),
(8, 'Officia aut ea alias', 'Consectetur consequ', 'تعلم اللغة العربية واتقن لغة القرآن بدورة شاملة مقسمة إلى 4 مستويات و 14 مرحلة تمتد من اتساع وعمق اللغة العربية من عدم القدرة على التعرف على حروف الأبجدية إلى المستويات المتقدمة التي تدرس مواضيع مختارة في القواعد والأدب.', 'Learn Arabic and master the language of the Quran with a comprehensive course divided into 4 levels and 14 stages that span the breadth and depth of the Arabic language from not being able to recognize the letters of the alphabet to advanced levels that study selected topics in grammar and literature.', 'Aliqua Quia eu dict', 'Molestiae et cumque', 'courses/TjH1BeCQMp4TTJ1tSetQvRPXFDW4jO7qFhILfozF.jpeg', '2020-04-03 22:24:08', '2020-04-11 04:00:33'),
(9, 'Dolores ut rerum aut', 'Qui aut dicta assume', 'Est id odit autem e', 'Sunt rerum quos nece', 'Cillum est facere es', 'Alias quasi velit in', 'courses/NanLcRVXaSNgnQTAHJlbuM8m57yH1fFKB2Bfqd5y.jpeg', '2020-04-13 05:13:26', '2020-04-13 05:13:26'),
(10, 'Similique autem aper', 'Sunt dolorem invent', 'Voluptate aliquid si', 'Enim facilis enim ma', 'Quisquam maxime aut', 'Enim aliqua Anim vo', 'courses/ObnBPGATnWBQzVkidBh9wsFZSsaUfJtKLJ8vbXds.jpeg', '2020-04-13 05:21:24', '2020-04-13 05:21:24'),
(11, 'Hic sed perferendis', 'Repudiandae deleniti', 'In sit in sint est', 'Unde minus quaerat s', 'Ipsam deserunt error', 'Dicta esse pariatur', 'courses/eOQwf7lbpN9F7ZnBDftoOVNJPdjA8GaM7Bq91oJz.jpeg', '2020-04-13 05:21:44', '2020-04-13 05:21:44'),
(12, 'Et velit hic dolore', 'Omnis nemo pariatur', 'Facilis aperiam eu s', 'Velit et recusandae', 'Aut iste sed ea eu a', 'Totam fugiat minima', 'courses/rik7tyV9UnzVZlU8c95EFBd5NXpMDFREMrDZWn4C.jpeg', '2020-04-13 05:22:00', '2020-04-13 05:22:00'),
(13, 'Dolore quia odio eve', 'Nulla in labore enim', 'Amet necessitatibus', 'Nam officia adipisci', 'Non neque nulla volu', 'Ipsum molestiae id', 'courses/aQsrYfBc3OWWEdqOIyZLD8iytZvcjmsdMc9EIzk9.jpeg', '2020-04-13 05:22:19', '2020-04-13 05:22:19'),
(14, 'Aut elit non optio', 'Ut ut aut rem cumque', 'Quia vel iusto tempo', 'Officia quia hic per', 'Ullamco sint a fugi', 'Itaque voluptates re', 'courses/xH8maQkObq4r9EktCjKkP2WUIT2qplcTHbtnQQ24.jpeg', '2020-04-13 05:22:53', '2020-04-13 05:22:53'),
(15, 'Distinctio Totam sa', 'Consequatur soluta m', 'Qui et excepteur nem', 'Consequat Rerum com', 'Beatae sit officia a', 'Quisquam et dicta as', 'courses/Ym8VvxecrGQFKBvMSbc6O8YBs3QV20T9QjYYXqyW.jpeg', '2020-04-13 05:23:18', '2020-04-13 05:23:18'),
(16, 'Occaecat vel omnis n', 'Nam culpa voluptate', 'Autem commodo error', 'Consectetur deserun', 'Dolore cillum duis s', 'In est rem similiqu', 'courses/LvAVKVUTU3LdZSlfOVOn6t8T0wfk6ZgcO0GQ6tIR.webp', '2020-04-13 05:23:41', '2020-04-13 05:23:41'),
(17, 'Corporis impedit co', 'In delectus esse i', 'Esse irure nihil qui', 'Qui sunt qui debitis', 'Eius enim aut quia n', 'Eu illum voluptate', 'courses/X3QFrY3pLO7kkGqg5sgaVwE052bfatWNBPcYioXB.jpeg', '2020-04-13 05:23:58', '2020-04-13 05:23:58'),
(18, 'Sit eu incididunt n', 'Quod laborum Laboru', 'Magna nobis est num', 'Modi fuga Illum as', 'Nulla explicabo Ips', 'Nisi sunt laboriosa', 'courses/2eAkh1AX5Fu0mehJTzB8YY34Jea97dkuDJKKEku9.jpeg', '2020-04-13 05:24:22', '2020-04-13 05:24:22'),
(19, 'Voluptatem doloremq', 'Atque qui sed nihil', 'Quos mollitia sed si', 'Voluptatem Officiis', 'Irure cupidatat volu', 'Praesentium quas vol', 'courses/COydMCyXqg5BsQ1sd5n7Xr5fe4fgGVrQ8ByJFroq.webp', '2020-04-13 05:24:37', '2020-04-13 05:24:37'),
(20, 'Veniam iste placeat', 'Quam recusandae Des', 'Fuga Elit cupidita', 'Iste quia voluptatem', 'Dolor aut quam ad ar', 'Rerum doloribus eius', 'courses/0AbpWXwvX7OIQEj9GJZtlQb3hD70xPZWPpNM38NK.jpeg', '2020-04-13 05:24:59', '2020-04-13 05:24:59'),
(21, 'Nulla libero sunt c', 'Rem dolores cupidita', 'Velit cupiditate di', 'Culpa sed consectetu', 'Impedit temporibus', 'Laboriosam voluptat', 'courses/ynmACyHFCN6M0rBFSVrsWGraR6t0cAAE5kxgO7HE.png', '2020-04-13 05:26:25', '2020-04-13 05:26:25'),
(22, 'Esse laboriosam ha', 'Tempore non cupidit', 'Iusto cumque nostrum', 'Quia magnam dolorem', 'Dolorem quod et id', 'Est minim alias vol', 'courses/o9ikXhmu8r1AzIrZAwPxYEfoYR789TELVPpy2FDE.png', '2020-04-13 05:30:13', '2020-04-13 05:30:13'),
(23, 'Iste ipsa veniam f', 'Aliquid iste suscipi', 'Deleniti dolor dolor', 'Temporibus et conseq', 'At incidunt et aspe', 'Et dolor cumque comm', 'courses/pZK0WsXPuyYwSRQckgqntqe2M9S6kb50lmJNFLQi.png', '2020-04-13 05:30:51', '2020-04-13 05:32:58'),
(24, 'Velit eos cumque cu', 'Sit eum enim esse d', 'Esse fugiat corrupt', 'Reiciendis culpa ut', 'Aperiam et incididun', 'Labore iste deserunt', 'courses/AB2TqwLpqmS3DFPOZ48EuJetsH78eIk13KRmW0bP.jpeg', '2020-04-13 05:31:34', '2020-04-13 05:31:34'),
(25, 'Ad ut et tempor cons', 'Odio adipisicing quo', 'Voluptatem excepteu', 'Iure cumque tenetur', 'Cillum ut iste quo d', 'Itaque voluptas id q', 'courses/EAZf2Gpf2ZKXGe4iy9Pir2RhVP6yAw577k6olYwj.jpeg', '2020-04-13 05:33:25', '2020-04-13 05:33:25'),
(26, 'Sit quos voluptatem', 'Obcaecati officiis q', 'Quis dolor nostrud l', 'Consequatur culpa q', 'Qui eaque sint neces', 'In accusamus omnis d', 'courses/tIY1TiDKDz4RFJXszh17IwpE1gBBkwachSfAirfO.jpeg', '2020-04-13 05:35:00', '2020-04-13 05:35:00'),
(27, 'Architecto labore si', 'Quis consequatur co', 'Dolor quos nemo qui', 'Ullam necessitatibus', 'Neque natus nostrum', 'Eu quam blanditiis q', 'courses/zaWCtIUrt860NLNqwu3tMbzd8XX9dRCQDwlNoA5q.jpeg', '2020-04-13 05:36:33', '2020-04-13 05:36:33'),
(28, 'In ratione commodo e', 'Tenetur omnis archit', 'Fugiat facilis quas', 'Dolorem dolore esse', 'Id dolore ullam veri', 'Minus autem sit do v', 'courses/Bua1uTIlpBXKG2yImY7ZD98jip3WaQvGTWxipWbB.jpeg', '2020-04-13 05:37:01', '2020-04-13 05:37:01'),
(29, 'Et et culpa magna u', 'Omnis optio dolorem', 'Voluptatum sint culp', 'Cum cillum fugit al', 'Aut est dolore ea no', 'Animi qui consequun', 'courses/L7PQM98enhhfKLQZWiWd9ts0oJf206OBzq526Qec.jpeg', '2020-04-13 05:37:25', '2020-04-13 05:37:25');

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
(1, 'تتم معالجة مدفوعاتنا بشكل آمن عن طريق باي بال. نضمن لك أننا لا نقوم بتخزين معلومات بطاقتك الائتمانية في قاعدة بياناتنا.', 'Our payments are securely processed by paypal. We gurantee you that we don\'t store your credit card info in our database.', 'المكتب الرئيسي: تورونتو ، كندا موقع المكتب الفرعي: القاهرة ، مصر موقع المكتب الرئيسي: تورونتو ، موقع المكتب الرئيسى الثالث الولايات المتحده الامركيه ولدينا فروع فى انحاء العالم', 'Head office: Toronto, Canada Branch office location: Cairo, Egypt Head office location: Toronto, location of the third head office The United States of America We have branches around the world', '+44 7418397601', '+44 7418397601', 'info@quransqaure.com', '+44 7418397601, تسجيل مجاني ,  مثلنا    كما في Facebook , غرد لنا  واترك لنا رساله,  شاهد  الفيديوهات   الخاصة بنا', '+44 7418397601,Free Registration,Like us in Facebook,Tweet us,Watch us our Vimeo Videos', 'نحن معهد رائد لتعليم القرآن الكريم واللغة العربية. نحن خبراء في استخدام أحدث التقنيات للتدريس عبر الإنترنت. لدينا مدرسون معتمدون من الأحرار ويتحدثون اللغة الإنجليزية بطلاقة ويتدربون جيدًا على التدريس عبر الإنترنت.', 'We are leading online Quran & Arabic teaching institute. We are expert in using state of the art technologies to teach online. We have teacher\'s who are certified by Al-Ahzar and also fluently speaks in english and well trained to teach online.', 'https://www.facebook.com', 'http://twitter.com', 'https://www.instagram.com', 'https://www.googel.com', 'https://www.youtube.com', 'https://www.potidevihecomiq.org.uk', 'https://play.google.com/store/', 'footer/NabdM2coVhZGM8cxEfQ2KzCjwHPWZBsfe1NGNdCV.png', 'footer/tsTXxhkHTvJpuZNPMMf5gGDFsvGTjvwoAeLyVJ6N.png', NULL, '2020-04-12 00:14:24');

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
(1, 'العرض الاول', 'First package', 'بدلا من    $54', 'instead of   54$', '40$', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 196.00 دولار', '3 months = US$ 196.00', '25%', 'سته أشهر = 196.00 دولار', '6 months = US$ 196.00', '6%', 'سنه أشهر = 196.00 دولار', '12  months = US$ 196.00', '12%', NULL, '2020-03-28 10:30:51', '2020-04-11 18:00:37'),
(8, 'العرض الثانى ', 'second package', 'بدلا من    $100 ', 'instead of   100%', '89$', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 296.00 دولار', '3 months = US$ 296.00', '17%', 'سته أشهر = 296.00 دولار', '6 months = US$ 296.00', '6%', 'سنه أشهر = 306.00 دولار', '12  months = US$ 36.00', '12%', NULL, '2020-03-28 10:30:51', '2020-04-11 17:38:18'),
(9, 'العرض الثالث ', 'third package', 'بدلا من    $120%', 'instead of   $120 %', '110$', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 250.00 دولار', '3 months = US$ 250.00', '15%\r\n', 'سته أشهر = 350.00 دولار', '6 months = US$ 350.00', '6%', 'سنه أشهر = 450.00 دولار', '12  months = US$ 450.00 ', '12%', NULL, '2020-03-28 10:30:51', '2020-04-11 17:38:18'),
(10, 'العرض الرابع ', 'fourth package', 'بدلا من    $400$ ', 'instead of   $400', '%30', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 350.00 دولار', '3 months = US$ 350.00', '20%', 'سته أشهر = 490.00 دولار', '6 months = US$ 490.00', '6%', 'سنه أشهر = 500.00 دولار', '12  months = US$ 500.00', '12%', NULL, '2020-03-28 10:30:51', '2020-04-11 17:38:18'),
(11, 'العرض الخامس ', 'Fifth\r\n package', 'بدلا من    $54', 'instead of   54$', '40$', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 196.00 دولار', '3 months = US$ 196.00', '25%', 'سته أشهر = 196.00 دولار', '6 months = US$ 196.00', '6%', 'سنه أشهر = 196.00 دولار', '12  months = US$ 196.00', '12%', NULL, '2020-03-28 10:30:51', '2020-04-11 18:00:37'),
(12, 'العرض السادس ', 'Sixth package', 'بدلا من    $100 ', 'instead of   100%', '89$', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 296.00 دولار', '3 months = US$ 296.00', '17%', 'سته أشهر = 296.00 دولار', '6 months = US$ 296.00', '6%', 'سنه أشهر = 306.00 دولار', '12  months = US$ 36.00', '12%', NULL, '2020-03-28 10:30:51', '2020-04-11 17:38:18'),
(13, 'العرض السابع ', 'seventh package', 'بدلا من    $120%', 'instead of   $120 %', '110$', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 250.00 دولار', '3 months = US$ 250.00', '15%\r\n', 'سته أشهر = 350.00 دولار', '6 months = US$ 350.00', '6%', 'سنه أشهر = 450.00 دولار', '12  months = US$ 450.00 ', '12%', NULL, '2020-03-28 10:30:51', '2020-04-11 17:38:18'),
(14, 'العرض الثامن ', 'Eighth  \r\npackage', 'بدلا من    $400$ ', 'instead of   $400', '%30', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 350.00 دولار', '3 months = US$ 350.00', '20%', 'سته أشهر = 490.00 دولار', '6 months = US$ 490.00', '6%', 'سنه أشهر = 500.00 دولار', '12  months = US$ 500.00', '12%', NULL, '2020-03-28 10:30:51', '2020-04-11 17:38:18'),
(15, 'العرض الاول', 'First package', 'بدلا من    $54', 'instead of   54$', '40$', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 196.00 دولار', '3 months = US$ 196.00', '25%', 'سته أشهر = 196.00 دولار', '6 months = US$ 196.00', '6%', 'سنه أشهر = 196.00 دولار', '12  months = US$ 196.00', '12%', NULL, '2020-03-28 10:30:51', '2020-04-11 18:00:37'),
(16, 'العرض الثانى ', 'second package', 'بدلا من    $100 ', 'instead of   100%', '89$', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 296.00 دولار', '3 months = US$ 296.00', '17%', 'سته أشهر = 296.00 دولار', '6 months = US$ 296.00', '6%', 'سنه أشهر = 306.00 دولار', '12  months = US$ 36.00', '12%', NULL, '2020-03-28 10:30:51', '2020-04-11 17:38:18'),
(17, 'العرض الثالث ', 'third package', 'بدلا من    $120%', 'instead of   $120 %', '110$', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 250.00 دولار', '3 months = US$ 250.00', '15%\r\n', 'سته أشهر = 350.00 دولار', '6 months = US$ 350.00', '6%', 'سنه أشهر = 450.00 دولار', '12  months = US$ 450.00 ', '12%', NULL, '2020-03-28 10:30:51', '2020-04-11 17:38:18'),
(18, 'العرض الرابع ', 'fourth package', 'بدلا من    $400$ ', 'instead of   $400', '%30', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 350.00 دولار', '3 months = US$ 350.00', '20%', 'سته أشهر = 490.00 دولار', '6 months = US$ 490.00', '6%', 'سنه أشهر = 500.00 دولار', '12  months = US$ 500.00', '12%', NULL, '2020-03-28 10:30:51', '2020-04-11 17:38:18'),
(19, 'العرض الخامس ', 'Fifth\r\n package', 'بدلا من    $54', 'instead of   54$', '40$', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 196.00 دولار', '3 months = US$ 196.00', '25%', 'سته أشهر = 196.00 دولار', '6 months = US$ 196.00', '6%', 'سنه أشهر = 196.00 دولار', '12  months = US$ 196.00', '12%', NULL, '2020-03-28 10:30:51', '2020-04-11 18:00:37'),
(20, 'العرض السادس ', 'Sixth package', 'بدلا من    $100 ', 'instead of   100%', '89$', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 296.00 دولار', '3 months = US$ 296.00', '17%', 'سته أشهر = 296.00 دولار', '6 months = US$ 296.00', '6%', 'سنه أشهر = 306.00 دولار', '12  months = US$ 36.00', '12%', NULL, '2020-03-28 10:30:51', '2020-04-11 17:38:18'),
(21, 'العرض السابع ', 'seventh package', 'بدلا من    $120%', 'instead of   $120 %', '110$', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 250.00 دولار', '3 months = US$ 250.00', '15%\r\n', 'سته أشهر = 350.00 دولار', '6 months = US$ 350.00', '6%', 'سنه أشهر = 450.00 دولار', '12  months = US$ 450.00 ', '12%', NULL, '2020-03-28 10:30:51', '2020-04-11 17:38:18'),
(22, 'العرض الثامن ', 'Eighth  \r\npackage', 'بدلا من    $400$ ', 'instead of   $400', '%30', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 350.00 دولار', '3 months = US$ 350.00', '20%', 'سته أشهر = 490.00 دولار', '6 months = US$ 490.00', '6%', 'سنه أشهر = 500.00 دولار', '12  months = US$ 500.00', '12%', NULL, '2020-03-28 10:30:51', '2020-04-11 17:38:18'),
(23, 'العرض الاول', 'First package', 'بدلا من    $54', 'instead of   54$', '40$', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 196.00 دولار', '3 months = US$ 196.00', '25%', 'سته أشهر = 196.00 دولار', '6 months = US$ 196.00', '6%', 'سنه أشهر = 196.00 دولار', '12  months = US$ 196.00', '12%', NULL, '2020-03-28 10:30:51', '2020-04-11 18:00:37'),
(24, 'العرض الثانى ', 'second package', 'بدلا من    $100 ', 'instead of   100%', '89$', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 296.00 دولار', '3 months = US$ 296.00', '17%', 'سته أشهر = 296.00 دولار', '6 months = US$ 296.00', '6%', 'سنه أشهر = 306.00 دولار', '12  months = US$ 36.00', '12%', NULL, '2020-03-28 10:30:51', '2020-04-11 17:38:18'),
(25, 'العرض الثالث ', 'third package', 'بدلا من    $120%', 'instead of   $120 %', '110$', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 250.00 دولار', '3 months = US$ 250.00', '15%\r\n', 'سته أشهر = 350.00 دولار', '6 months = US$ 350.00', '6%', 'سنه أشهر = 450.00 دولار', '12  months = US$ 450.00 ', '12%', NULL, '2020-03-28 10:30:51', '2020-04-11 17:38:18'),
(26, 'العرض الرابع ', 'fourth package', 'بدلا من    $400$ ', 'instead of   $400', '%30', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 350.00 دولار', '3 months = US$ 350.00', '20%', 'سته أشهر = 490.00 دولار', '6 months = US$ 490.00', '6%', 'سنه أشهر = 500.00 دولار', '12  months = US$ 500.00', '12%', NULL, '2020-03-28 10:30:51', '2020-04-11 17:38:18'),
(27, 'العرض الخامس ', 'Fifth\r\n package', 'بدلا من    $54', 'instead of   54$', '40$', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 196.00 دولار', '3 months = US$ 196.00', '25%', 'سته أشهر = 196.00 دولار', '6 months = US$ 196.00', '6%', 'سنه أشهر = 196.00 دولار', '12  months = US$ 196.00', '12%', NULL, '2020-03-28 10:30:51', '2020-04-11 18:00:37'),
(28, 'العرض السادس ', 'Sixth package', 'بدلا من    $100 ', 'instead of   100%', '89$', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 296.00 دولار', '3 months = US$ 296.00', '17%', 'سته أشهر = 296.00 دولار', '6 months = US$ 296.00', '6%', 'سنه أشهر = 306.00 دولار', '12  months = US$ 36.00', '12%', NULL, '2020-03-28 10:30:51', '2020-04-11 17:38:18'),
(29, 'العرض السابع ', 'seventh package', 'بدلا من    $120%', 'instead of   $120 %', '110$', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 250.00 دولار', '3 months = US$ 250.00', '15%\r\n', 'سته أشهر = 350.00 دولار', '6 months = US$ 350.00', '6%', 'سنه أشهر = 450.00 دولار', '12  months = US$ 450.00 ', '12%', NULL, '2020-03-28 10:30:51', '2020-04-11 17:38:18'),
(30, 'العرض الثامن ', 'Eighth  \r\npackage', 'بدلا من    $400$ ', 'instead of   $400', '%30', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 350.00 دولار', '3 months = US$ 350.00', '20%', 'سته أشهر = 490.00 دولار', '6 months = US$ 490.00', '6%', 'سنه أشهر = 500.00 دولار', '12  months = US$ 500.00', '12%', NULL, '2020-03-28 10:30:51', '2020-04-11 17:38:18'),
(31, 'العرض الاول', 'First package', 'بدلا من    $54', 'instead of   54$', '40$', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 196.00 دولار', '3 months = US$ 196.00', '25%', 'سته أشهر = 196.00 دولار', '6 months = US$ 196.00', '6%', 'سنه أشهر = 196.00 دولار', '12  months = US$ 196.00', '12%', NULL, '2020-03-28 10:30:51', '2020-04-11 18:00:37'),
(32, 'العرض الثانى ', 'second package', 'بدلا من    $100 ', 'instead of   100%', '89$', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 296.00 دولار', '3 months = US$ 296.00', '17%', 'سته أشهر = 296.00 دولار', '6 months = US$ 296.00', '6%', 'سنه أشهر = 306.00 دولار', '12  months = US$ 36.00', '12%', NULL, '2020-03-28 10:30:51', '2020-04-11 17:38:18'),
(33, 'العرض الثالث ', 'third package', 'بدلا من    $120%', 'instead of   $120 %', '110$', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 250.00 دولار', '3 months = US$ 250.00', '15%\r\n', 'سته أشهر = 350.00 دولار', '6 months = US$ 350.00', '6%', 'سنه أشهر = 450.00 دولار', '12  months = US$ 450.00 ', '12%', NULL, '2020-03-28 10:30:51', '2020-04-11 17:38:18'),
(34, 'العرض الرابع ', 'fourth package', 'بدلا من    $400$ ', 'instead of   $400', '%30', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 350.00 دولار', '3 months = US$ 350.00', '20%', 'سته أشهر = 490.00 دولار', '6 months = US$ 490.00', '6%', 'سنه أشهر = 500.00 دولار', '12  months = US$ 500.00', '12%', NULL, '2020-03-28 10:30:51', '2020-04-11 17:38:18'),
(35, 'العرض الخامس ', 'Fifth\r\n package', 'بدلا من    $54', 'instead of   54$', '40$', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 196.00 دولار', '3 months = US$ 196.00', '25%', 'سته أشهر = 196.00 دولار', '6 months = US$ 196.00', '6%', 'سنه أشهر = 196.00 دولار', '12  months = US$ 196.00', '12%', NULL, '2020-03-28 10:30:51', '2020-04-11 18:00:37'),
(36, 'العرض السادس ', 'Sixth package', 'بدلا من    $100 ', 'instead of   100%', '89$', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 296.00 دولار', '3 months = US$ 296.00', '17%', 'سته أشهر = 296.00 دولار', '6 months = US$ 296.00', '6%', 'سنه أشهر = 306.00 دولار', '12  months = US$ 36.00', '12%', NULL, '2020-03-28 10:30:51', '2020-04-11 17:38:18'),
(37, 'العرض السابع ', 'seventh package', 'بدلا من    $120%', 'instead of   $120 %', '110$', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 250.00 دولار', '3 months = US$ 250.00', '15%\r\n', 'سته أشهر = 350.00 دولار', '6 months = US$ 350.00', '6%', 'سنه أشهر = 450.00 دولار', '12  months = US$ 450.00 ', '12%', NULL, '2020-03-28 10:30:51', '2020-04-11 17:38:18'),
(38, 'العرض الثامن ', 'Eighth  \r\npackage', 'بدلا من    $400$ ', 'instead of   $400', '%30', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 350.00 دولار', '3 months = US$ 350.00', '20%', 'سته أشهر = 490.00 دولار', '6 months = US$ 490.00', '6%', 'سنه أشهر = 500.00 دولار', '12  months = US$ 500.00', '12%', NULL, '2020-03-28 10:30:51', '2020-04-11 17:38:18');

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
(1, 'العرض الاول', 'First package', 'US$150', 'US$ 150', '110$', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 296.00 دولار', '3 months = US$ 296.00', '7%', 'سته أشهر = 196.00 دولار', '6 months = US$ 196.00', '6%', 'سنه أشهر = 196.00 دولار', '12  months = US$ 196.00', '12%', NULL, NULL, '2020-04-11 18:13:07'),
(5, 'العرض الثانى ', 'secondpackage', 'US$190', 'US$ 190', '170$', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 296.00 دولار', '3 months = US$ 296.00', '9%', 'سته أشهر = 200.00 دولار', '6 months = US$ 200.00', '11%', 'سنه أشهر = 300.00 دولار', '12  months = US$ 300.00', '12%', NULL, NULL, '2020-04-11 18:13:07'),
(6, 'العرض الثالث ', 'thirdpackage', 'US$250', 'US$ 250', '260$', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 296.00 دولار', '3 months = US$ 296.00', '15%', 'سته أشهر = 196.00 دولار', '6 months = US$ 196.00', '6%', 'سنه أشهر = 196.00 دولار', '12  months = US$ 196.00', '12%', NULL, NULL, '2020-04-11 18:13:07'),
(7, 'العرض الرابع ', 'fourth \r\npackage', 'US$190', 'US$ 190', '170$', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 296.00 دولار', '3 months = US$ 296.00', '9%', 'سته أشهر = 200.00 دولار', '6 months = US$ 200.00', '11%', 'سنه أشهر = 300.00 دولار', '12  months = US$ 300.00', '12%', NULL, NULL, '2020-04-11 18:13:07'),
(8, 'العرض الاول', 'First package', 'US$150', 'US$ 150', '110$', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 296.00 دولار', '3 months = US$ 296.00', '7%', 'سته أشهر = 196.00 دولار', '6 months = US$ 196.00', '6%', 'سنه أشهر = 196.00 دولار', '12  months = US$ 196.00', '12%', NULL, NULL, '2020-04-11 18:13:07'),
(9, 'العرض الثانى ', 'secondpackage', 'US$190', 'US$ 190', '170$', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 296.00 دولار', '3 months = US$ 296.00', '9%', 'سته أشهر = 200.00 دولار', '6 months = US$ 200.00', '11%', 'سنه أشهر = 300.00 دولار', '12  months = US$ 300.00', '12%', NULL, NULL, '2020-04-11 18:13:07'),
(10, 'العرض الثالث ', 'thirdpackage', 'US$250', 'US$ 250', '260$', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 296.00 دولار', '3 months = US$ 296.00', '15%', 'سته أشهر = 196.00 دولار', '6 months = US$ 196.00', '6%', 'سنه أشهر = 196.00 دولار', '12  months = US$ 196.00', '12%', NULL, NULL, '2020-04-11 18:13:07'),
(11, 'العرض الرابع ', 'fourth \r\npackage', 'US$190', 'US$ 190', '170$', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 296.00 دولار', '3 months = US$ 296.00', '9%', 'سته أشهر = 200.00 دولار', '6 months = US$ 200.00', '11%', 'سنه أشهر = 300.00 دولار', '12  months = US$ 300.00', '12%', NULL, NULL, '2020-04-11 18:13:07'),
(12, 'العرض الاول', 'First package', 'US$150', 'US$ 150', '110$', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 296.00 دولار', '3 months = US$ 296.00', '7%', 'سته أشهر = 196.00 دولار', '6 months = US$ 196.00', '6%', 'سنه أشهر = 196.00 دولار', '12  months = US$ 196.00', '12%', NULL, NULL, '2020-04-11 18:13:07'),
(13, 'العرض الثانى ', 'secondpackage', 'US$190', 'US$ 190', '170$', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 296.00 دولار', '3 months = US$ 296.00', '9%', 'سته أشهر = 200.00 دولار', '6 months = US$ 200.00', '11%', 'سنه أشهر = 300.00 دولار', '12  months = US$ 300.00', '12%', NULL, NULL, '2020-04-11 18:13:07'),
(14, 'العرض الثالث ', 'thirdpackage', 'US$250', 'US$ 250', '260$', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 296.00 دولار', '3 months = US$ 296.00', '15%', 'سته أشهر = 196.00 دولار', '6 months = US$ 196.00', '6%', 'سنه أشهر = 196.00 دولار', '12  months = US$ 196.00', '12%', NULL, NULL, '2020-04-11 18:13:07'),
(15, 'العرض الرابع ', 'fourth \r\npackage', 'US$190', 'US$ 190', '170$', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 296.00 دولار', '3 months = US$ 296.00', '9%', 'سته أشهر = 200.00 دولار', '6 months = US$ 200.00', '11%', 'سنه أشهر = 300.00 دولار', '12  months = US$ 300.00', '12%', NULL, NULL, '2020-04-11 18:13:07'),
(16, 'العرض الاول', 'First package', 'US$150', 'US$ 150', '110$', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 296.00 دولار', '3 months = US$ 296.00', '7%', 'سته أشهر = 196.00 دولار', '6 months = US$ 196.00', '6%', 'سنه أشهر = 196.00 دولار', '12  months = US$ 196.00', '12%', NULL, NULL, '2020-04-11 18:13:07'),
(17, 'العرض الثانى ', 'secondpackage', 'US$190', 'US$ 190', '170$', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 296.00 دولار', '3 months = US$ 296.00', '9%', 'سته أشهر = 200.00 دولار', '6 months = US$ 200.00', '11%', 'سنه أشهر = 300.00 دولار', '12  months = US$ 300.00', '12%', NULL, NULL, '2020-04-11 18:13:07'),
(18, 'العرض الثالث ', 'thirdpackage', 'US$250', 'US$ 250', '260$', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 296.00 دولار', '3 months = US$ 296.00', '15%', 'سته أشهر = 196.00 دولار', '6 months = US$ 196.00', '6%', 'سنه أشهر = 196.00 دولار', '12  months = US$ 196.00', '12%', NULL, NULL, '2020-04-11 18:13:07'),
(19, 'العرض الرابع ', 'fourth \r\npackage', 'US$190', 'US$ 190', '170$', 'نصف ساعه يوميا  ,  اسبوعيا  /  2يوم  ,     شهريا / 8 فصول', '2 Days / Week , 8 Classes / Month ,  30 Mins / Day', 'ثالث أشهر = 296.00 دولار', '3 months = US$ 296.00', '9%', 'سته أشهر = 200.00 دولار', '6 months = US$ 200.00', '11%', 'سنه أشهر = 300.00 دولار', '12  months = US$ 300.00', '12%', NULL, NULL, '2020-04-11 18:13:07');

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
(6, '2019_08_26_222252_create_whyus_table', 1),
(7, '2019_08_26_22225_create_Courses_table', 1),
(8, '2019_08_26_22225_create_Videos_table', 1),
(9, '2019_08_26_2222_create_teachers_table', 1),
(10, '2019_08_26_223_create_testimonial_table', 1),
(11, '2019_08_26_224_create_beststudent_table', 1),
(12, '2019_08_26_22_create_halfhour_table', 1),
(13, '2019_08_26_29_create_hour_table', 1),
(14, '2019_08_2_2222_create_slider_table', 1),
(15, '2019_08_2_2222_create_slidertext_table ', 1),
(16, '2019_08_2_222_create_news_table', 1),
(17, '2019_08_2_223_create_contact_table', 1),
(18, '2019_08_2_224_create_student_table', 1),
(19, 'z2019_08_26_22225_create_stat_table', 1),
(20, 'z2019_08_26_2222_create_quick_table', 1),
(21, 'z2019_08_26_222_create_footer_table', 1),
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

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('m@m.com', '$2y$10$zca5k7mT4xTT5/22Eh8/WuaZrxPhsWYKW2WICrO4T.9gs4LtrO67C', '2020-04-15 03:58:40'),
('m@m.com', 'eac960cda3c6d3b4871430f4d33f060a79a50848421d9fad040ef884dc8d17c0', '2020-04-15 03:58:40');

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
(3, 'Odessa Young', 'fifamedyzi@mailinator.net', NULL, '90', NULL, NULL, '2020-04-02 21:24:13', '2020-04-02 21:24:13'),
(4, 'Lionel Mcdaniel', 'meditubony@mailinator.net', NULL, '90', NULL, NULL, '2020-04-02 21:28:04', '2020-04-02 21:28:04'),
(5, 'Cheyenne Logan', 'kirad@mailinator.net', NULL, '38', NULL, NULL, '2020-04-02 21:31:20', '2020-04-02 21:31:20'),
(6, 'Nathaniel Reese', 'cinudi@mailinator.com', NULL, '71', NULL, NULL, '2020-04-02 21:37:32', '2020-04-02 21:37:32'),
(7, 'Macey Farmer', 'qonor@mailinator.net', NULL, '15', NULL, NULL, '2020-04-02 21:39:08', '2020-04-02 21:39:08'),
(8, 'Imelda Lopez', 'baboby@mailinator.com', NULL, '24', NULL, NULL, '2020-04-02 21:41:09', '2020-04-02 21:41:09'),
(9, 'Hayden Perry', 'dejaf@mailinator.net', NULL, '76', NULL, NULL, '2020-04-02 21:43:30', '2020-04-02 21:43:30'),
(10, 'Ainsley Haney', 'pacixusiji@mailinator.com', NULL, '13', NULL, NULL, '2020-04-02 21:46:59', '2020-04-02 21:46:59'),
(11, 'Jada Manning', 'huxetucyn@mailinator.com', NULL, '27', NULL, NULL, '2020-04-02 21:47:50', '2020-04-02 21:47:50'),
(12, 'Lael Nielsen', 'fame@mailinator.com', NULL, '35', NULL, NULL, '2020-04-02 21:48:49', '2020-04-02 21:48:49'),
(13, 'Cassandra Patel', 'sado@mailinator.net', NULL, '94', NULL, NULL, '2020-04-02 21:51:52', '2020-04-02 21:51:52'),
(14, 'Dakota Roth', 'nysywovus@mailinator.net', NULL, '84', NULL, NULL, '2020-04-02 21:53:00', '2020-04-02 21:53:00'),
(15, 'Dahlia Lane', 'nelowyk@mailinator.net', NULL, '21', NULL, NULL, '2020-04-02 21:57:28', '2020-04-02 21:57:28'),
(16, 'Hayden Stewart', 'comuh@mailinator.com', NULL, '62', NULL, NULL, '2020-04-02 21:58:10', '2020-04-02 21:58:10'),
(17, 'Jillian Martinez', 'cizecyx@mailinator.com', NULL, '100', NULL, NULL, '2020-04-02 22:01:10', '2020-04-02 22:01:10'),
(18, 'Dominic Underwood', 'jokysedo@mailinator.net', NULL, '28', NULL, NULL, '2020-04-02 22:01:58', '2020-04-02 22:01:58'),
(19, 'Sybil Jimenez', 'qilirequni@mailinator.net', NULL, '74', NULL, NULL, '2020-04-02 22:03:35', '2020-04-02 22:03:35'),
(20, 'Karyn Holden', 'cujaca@mailinator.net', NULL, '29', NULL, NULL, '2020-04-02 22:04:31', '2020-04-02 22:04:31'),
(21, 'Perry Lewis', 'wuvucoq@mailinator.com', NULL, '27', NULL, NULL, '2020-04-02 22:05:57', '2020-04-02 22:05:57'),
(22, 'Ignacia Yates', 'pucopyr@mailinator.com', NULL, '88', NULL, NULL, '2020-04-02 22:08:31', '2020-04-02 22:08:31'),
(23, 'Kameko Burnett', 'xugihahob@mailinator.net', NULL, '65', NULL, NULL, '2020-04-02 22:14:48', '2020-04-02 22:14:48'),
(24, 'Steel Winters', 'wisyweq@mailinator.com', NULL, '34', NULL, NULL, '2020-04-02 22:15:34', '2020-04-02 22:15:34'),
(25, 'Anika Perez', 'cewewa@mailinator.net', NULL, '74', NULL, NULL, '2020-04-02 22:16:20', '2020-04-02 22:16:20'),
(26, 'Diana Morrow', 'mezeral@mailinator.com', NULL, '67', NULL, NULL, '2020-04-02 22:24:54', '2020-04-02 22:24:54'),
(27, 'Logan Frank', 'macuro@mailinator.net', NULL, '16', NULL, NULL, '2020-04-02 22:27:08', '2020-04-02 22:27:08'),
(28, 'Odette Tanner', 'womisep@mailinator.com', NULL, '81', NULL, NULL, '2020-04-02 22:30:12', '2020-04-02 22:30:12'),
(29, 'Ruby Whitley', 'buqitis@mailinator.com', NULL, '14', NULL, NULL, '2020-04-02 22:30:50', '2020-04-02 22:30:50'),
(30, 'Mohamed', 'A2@2A.com', NULL, '01147201321', NULL, NULL, '2020-04-02 22:31:32', '2020-04-02 22:31:32'),
(31, 'Eaton David', 'ticedy@mailinator.net', NULL, '61', NULL, NULL, '2020-04-02 22:33:19', '2020-04-02 22:33:19'),
(32, 'Eden Kent', 'cyzarigaz@mailinator.com', NULL, '9', NULL, NULL, '2020-04-02 22:41:32', '2020-04-02 22:41:32'),
(33, 'Amaya Baxter', 'gihulebux@mailinator.net', NULL, '85', NULL, NULL, '2020-04-02 22:44:31', '2020-04-02 22:44:31'),
(34, 'Brady Cash', 'tuka@mailinator.com', NULL, '58', NULL, NULL, '2020-04-02 22:46:56', '2020-04-02 22:46:56'),
(35, 'Ella Reyes', 'viwo@mailinator.net', NULL, '38', NULL, NULL, '2020-04-02 22:48:53', '2020-04-02 22:48:53'),
(36, 'Roary Gilliam', 'mifobi@mailinator.net', NULL, '62', NULL, NULL, '2020-04-02 22:49:12', '2020-04-02 22:49:12'),
(37, 'Jarrod Lloyd', 'viledodo@mailinator.com', NULL, '11', NULL, NULL, '2020-04-02 22:49:54', '2020-04-02 22:49:54'),
(38, 'MacKensie Hunter', 'nilotoky@mailinator.com', NULL, '1', NULL, NULL, '2020-04-02 22:50:06', '2020-04-02 22:50:06'),
(39, 'محمد سعيد فرج يعقوب', 'm01127673780@gmail.com', NULL, '01147201321', NULL, NULL, '2020-04-02 22:50:34', '2020-04-02 22:50:34'),
(40, 'Uma Callahan', 'kimuma@mailinator.net', NULL, '13', NULL, NULL, '2020-04-02 23:34:23', '2020-04-02 23:34:23'),
(41, 'Mohamed', 'A2@2A.com', NULL, '01147201321', NULL, NULL, '2020-04-03 05:19:32', '2020-04-03 05:19:32'),
(42, 'Clarke Herman', 'kesugoh@mailinator.net', NULL, '96', NULL, NULL, '2020-04-03 05:20:13', '2020-04-03 05:20:13'),
(43, 'Bianca Lyons', 'huro@mailinator.net', NULL, '92', NULL, NULL, '2020-04-03 05:31:04', '2020-04-03 05:31:04'),
(44, 'Cade Cohen', 'dosazukegi@mailinator.com', NULL, '29', NULL, NULL, '2020-04-03 08:30:47', '2020-04-03 08:30:47'),
(45, 'Adrian Lester', 'cibotuwe@mailinator.net', NULL, '7', NULL, NULL, '2020-04-03 08:32:08', '2020-04-03 08:32:08'),
(46, 'lyqika@mailinator.com', 'wocuv@mailinator.com', NULL, '46', NULL, NULL, '2020-04-03 08:34:27', '2020-04-03 08:34:27'),
(47, 'Kelly Bradford', 'juverivoqy@mailinator.net', NULL, '13', NULL, NULL, '2020-04-03 08:34:41', '2020-04-03 08:34:41'),
(48, 'Andrew Williamson', 'qylijap@mailinator.net', NULL, '18', NULL, NULL, '2020-04-03 08:36:30', '2020-04-03 08:36:30'),
(49, 'dddd', 'daceto@mailinator.com', NULL, '01147201321', NULL, NULL, '2020-04-03 09:44:48', '2020-04-03 09:44:48'),
(50, 'Daryl Mccarty', 'kybuky@mailinator.com', NULL, '91', NULL, NULL, '2020-04-03 09:50:26', '2020-04-03 09:50:26'),
(51, 'Halee Wright', 'nigijusiq@mailinator.com', NULL, '76', NULL, NULL, '2020-04-03 09:51:09', '2020-04-03 09:51:09'),
(52, 'Jaime Dyer', 'socab@mailinator.com', NULL, '5', NULL, NULL, '2020-04-03 10:00:09', '2020-04-03 10:00:09'),
(53, 'Lawrence Mullen', 'jewiqesu@mailinator.net', NULL, '29', NULL, NULL, '2020-04-03 10:05:30', '2020-04-03 10:05:30'),
(54, 'Hayley Sykes', 'xatus@mailinator.com', NULL, '43', NULL, NULL, '2020-04-03 10:08:19', '2020-04-03 10:08:19'),
(55, 'Dolan Ware', 'quwaf@mailinator.net', NULL, '55', NULL, NULL, '2020-04-03 13:25:44', '2020-04-03 13:25:44'),
(56, 'Geraldine Hendrix', 'nolamokeqa@mailinator.net', NULL, '14', NULL, NULL, '2020-04-03 19:53:08', '2020-04-03 19:53:08'),
(57, 'Curran Quinn', 'cumig@mailinator.com', NULL, '87', NULL, NULL, '2020-04-03 22:52:55', '2020-04-03 22:52:55'),
(58, 'Marshall Lindsay', 'godogijo@mailinator.net', NULL, '65', NULL, NULL, '2020-04-06 20:53:25', '2020-04-06 20:53:25'),
(59, 'Tamara Bowman', 'qyhises@mailinator.net', NULL, '41', NULL, NULL, '2020-04-06 21:08:56', '2020-04-06 21:08:56'),
(60, 'Isabella Carney', 'cofefy@mailinator.com', NULL, '23', NULL, NULL, '2020-04-08 11:20:56', '2020-04-08 11:20:56'),
(61, 'Jane Delaney', 'niwepuvaf@mailinator.com', NULL, '71', NULL, NULL, '2020-04-08 11:21:44', '2020-04-08 11:21:44'),
(62, 'Delilah Savage', 'sonagugoz@mailinator.net', NULL, '72', NULL, NULL, '2020-04-08 11:22:34', '2020-04-08 11:22:34'),
(63, 'Zeph Paul', 'fogoqa@mailinator.net', NULL, '55', NULL, NULL, '2020-04-08 11:27:17', '2020-04-08 11:27:17'),
(64, 'Honorato Leonard', 'jamevos@mailinator.net', NULL, '67', NULL, NULL, '2020-04-08 11:28:17', '2020-04-08 11:28:17'),
(65, 'MOhamed', 'M@M.com', NULL, '01147201321', NULL, NULL, '2020-04-10 19:15:34', '2020-04-10 19:15:34'),
(66, 'Omar', 'm@m.com', NULL, '01147201321', NULL, NULL, '2020-04-10 20:06:51', '2020-04-10 20:06:51'),
(67, 'Montana Jackson', 'zysik@mailinator.net', NULL, '78', NULL, NULL, '2020-04-10 20:55:36', '2020-04-10 20:55:36'),
(68, 'MOhamed', 'zewo@mailinator.net', NULL, '62', NULL, NULL, '2020-04-13 04:28:49', '2020-04-13 04:28:49');

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
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('open','close') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `message_maintenance` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `sitename_ar`, `sitename_en`, `logo`, `icon`, `email`, `main_lang`, `description`, `keywords`, `status`, `message_maintenance`, `created_at`, `updated_at`) VALUES
(1, 'Kato Fitzgeraldssssssss', 'Mercedes Conleyssssssss', 'settings/eR2nVwjkKD7f9NklPzGEjRItHgRsKbHANQCGwZ0K.png', 'settings/diTOw8yaGA0lZJ53MK2a5xo3knYHj47lqTdBYZ4l.png', 'johy@mailinator.comssssssssss', 'en', 'Ut ut ut culpa ex la', 'Sed qui rep\r\nudiandae', 'open', 'Quasi numquam exerci', NULL, '2020-04-17 09:41:55');

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
(4, 'https://www.netysaqivufisob.org.au', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'slider/F5M7Q7E9sK48GfNr3BH1itsd1gRTbHVQPJSgqURf.jpeg', '2020-03-29 16:57:10', '2020-03-29 16:58:29'),
(6, 'https://www.rywiqy.net', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'slider/KQ2I5f2odgTEXhkurEDAK0maxobpvcE39amywvwN.jpeg', '2020-03-29 17:02:38', '2020-03-29 17:02:38'),
(7, 'https://www.ganosufag.mobi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'slider/IITr745sohAipqUbHAJQfWr43oAhZtpEQELtPusG.jpeg', '2020-03-29 18:36:19', '2020-03-29 18:36:19'),
(8, 'https://www.tewiqijybaviv.net', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'slider/AFIGATmiz5JVbNfrlvIZW1PJVYihfgk4p5DY9nt1.jpeg', '2020-03-29 18:36:33', '2020-04-03 23:44:42'),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'slider/4gXgR99LF7HDbcPkz6RmFmuqhvG1Z4gX7UfKJ4bt.jpeg', '2020-04-03 23:44:59', '2020-04-04 00:09:39'),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'slider/p5coyOVu6phNiwmuHCNNaQlGdTRLLJNnMqMtRBYa.jpeg', '2020-04-04 00:10:24', '2020-04-04 00:22:42'),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'slider/YivuKLpmM3F13BCuu9KAyeC1rHKZNpOwWTGyvUY3.png', '2020-04-04 00:10:58', '2020-04-04 00:10:58'),
(13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'slider/d55E9ttDY0txe9iHfbj0lZu4fHSGH27ArzdxUmyc.jpeg', '2020-04-04 00:11:52', '2020-04-12 00:54:23'),
(14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'slider/47LtAIwwRPpXHWgMQyGqOYTvStXpHAvqGOmwdF6X.jpeg', '2020-04-04 00:14:07', '2020-04-04 00:14:07'),
(15, 'https://www.nodaw.us', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'slider/cZEegJegP7PJnwHcy3QuIPvl5ADvyLp49jm9az7m.jpeg', '2020-04-04 01:02:59', '2020-04-04 01:02:59'),
(16, 'https://www.miwopare.cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'slider/QBXD20ejuARoVZSCeVXGOGW80IGgK1E881e869Yz.webp', '2020-04-07 19:56:16', '2020-04-07 19:56:16'),
(17, 'https://www.rajisaqym.cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'slider/rnO23HBrvX89dqH1iqNyEvFj2B04ZfKCdtaphsN3.jpeg', '2020-04-07 19:57:22', '2020-04-07 19:57:22'),
(18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'slider/C55IU0K6oOCCtEqlLj9ikL0UpZ6LI1t9aVVW3qzf.jpeg', '2020-04-07 19:58:46', '2020-04-07 19:58:46'),
(19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'slider/r4m6MJmN95cCRISVJ1hhp8GfsgCmBPL2KUpWrsrR.jpeg', '2020-04-07 19:58:56', '2020-04-07 19:58:56'),
(20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'slider/oZFlxsW59VpdYRwl3uNjgcm3GCBqc6nAdNzQUZ9N.jpeg', '2020-04-07 19:59:13', '2020-04-07 19:59:13'),
(21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'slider/8uShiDYEqCvq2hLeBJoGF8VYGAeppQDypeZybmIc.jpeg', '2020-04-07 19:59:50', '2020-04-07 19:59:50'),
(22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'slider/PqleHs6R4uiMBxEiRCbw1MG09aWobY78rzao61YY.jpeg', '2020-04-07 20:00:46', '2020-04-07 20:00:46'),
(23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'slider/7eqB11RqV1m78kiUBse8cplZv0mJgyypDwSvkYKK.jpeg', '2020-04-07 20:01:37', '2020-04-07 20:01:37');

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
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slidertext`
--

INSERT INTO `slidertext` (`id`, `link`, `head_en`, `head_ar`, `title_en`, `title_ar`, `text1_ar`, `text1_en`, `text2_ar`, `text2_en`, `text3_ar`, `text3_en`, `img`, `created_at`, `updated_at`) VALUES
(1, 'https://www.sadud.com.au', 'Your Big Opportunity', 'فرصتك الكبرى', '30 Minutes Free Trial Class', 'دقيقة تجريبية مجانية       30', 'نحن نقدم عبر الإنترنت', 'We are leading online', 'القرآن والعربية', 'Quran & Arabic', '. نحن معهد  تدريس رائد', 'teaching institute', NULL, '2020-03-28 10:42:51', '2020-04-11 00:14:06');

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
(1, 'Et facilis explicabo', '59', 'عداد الكروسات', 'number of courses', 'stat/yOeSqVq55sQYRMBH2TT5p2G7PTu5caw91g40Vgt8.png', '2020-03-28 10:26:09', '2020-04-13 01:56:44'),
(2, 'Sunt cillum odit nu', '35', 'عدد المقارئ', 'number of readers', 'stat/o9PtVlsz3J1xecmM1DjrDddSvj4yUHKTpTX2Ayru.png', '2020-03-28 10:26:22', '2020-04-13 01:57:56'),
(3, 'Eum fugiat recusanda', '666', 'عدد المقاطع الصوتيه', 'Number of audio clips', 'stat/bS6FZt5bepKpAZsWOxgvayaqVCRSfyjKLRhYzL6X.png', '2020-03-28 10:27:04', '2020-04-13 02:04:52'),
(4, 'Est amet a consequa', '160', 'عدد المواعيد', 'Number of appointments', 'stat/JRyIVsqzzb3I1tFoOTeSjE5ePhyuOJ9EApw3tqT9.png', '2020-03-28 10:27:17', '2020-04-13 02:05:11'),
(5, 'Accusantium distinct', '17', 'عداد التسجيلات الجديده', 'New record counter', 'stat/ql6i9MPmNsROsbGXWCEWH189DBreLFhlGEXdz9GX.png', '2020-03-29 13:39:34', '2020-04-13 02:02:00'),
(6, 'Incididunt ut quaera', '388', 'عدد الطلاب والطالبات', 'number of   students', 'stat/B267NNYUQmBzd2iTjVHlFteJdQOJpAY4CXpAuN6V.png', '2020-04-12 04:33:19', '2020-04-13 02:09:12'),
(10, 'Blanditiis in ut per', '728', 'Labore explicabo Mo', 'Dolore culpa officia', 'stat/t6HeJRfrYgeuIXUG6Nji3RQX8Kvy4WBFI0ztk9Oc.png', '2020-04-14 19:12:59', '2020-04-14 19:12:59'),
(11, 'Magnam sequi nulla d', '687', 'Autem magna inventor', 'Ipsum ut perspiciat', 'stat/YxKKuqgzeq6H7Tvx2byIXu71tpo4Y17f1ttLA1Wx.png', '2020-04-14 19:13:27', '2020-04-14 19:13:27'),
(12, 'Placeat ex rerum au', '683', 'Eveniet ex adipisic', 'Quaerat aliquam cons', 'stat/TH7pFQ1Nr7qv0ea0CFmwCIxWWYSbx9B02m8gCOkV.png', '2020-04-14 19:14:52', '2020-04-14 19:14:52'),
(13, 'Quam sit ab distinct', '802', 'Delectus sint moles', 'Rerum nisi ipsum qui', 'stat/7B4uOJn2cGdnI4SIQ8o7xyWEL48ukLKh9U1iw640.png', '2020-04-14 19:15:12', '2020-04-14 19:15:12'),
(14, 'Dolor perferendis si', '422', 'Debitis est fuga N', 'Assumenda similique', 'stat/lYN4zCar9DiH0FQ8DhKkAJqffEZirv810RRX3CjE.jpeg', '2020-04-14 19:15:31', '2020-04-14 19:15:31'),
(15, 'Iste recusandae Omn', '141', 'Necessitatibus quis', 'Quam rerum consequun', 'stat/mPemOCstE0zr4mzcQw3PuWGcOe009k641diSfqKu.gif', '2020-04-14 19:16:11', '2020-04-14 19:16:11'),
(16, 'Deserunt minima quib', '313', 'Eum ullam aut incidi', 'Ea dicta blanditiis', 'stat/gC8pXXRv79ZJY18KWjoqheTdVHL4P2M6jTAZVTzn.png', '2020-04-14 19:17:01', '2020-04-14 19:17:01'),
(17, 'Velit vitae totam do', '754', 'Doloremque doloribus', 'Laboris commodo at v', 'stat/6CrDHMJpIHHy7vw0Gz0S5fpoMNBakyRKJqFxNLPw.png', '2020-04-14 19:17:19', '2020-04-14 19:17:19'),
(18, 'Pariatur Ipsum dolo', '288', 'Quia ut odio dolorem', 'Iste eiusmod incidid', 'stat/9YzingmvW9YhLGYTAuX4zj8JcfxBsRyBmnuysKzS.png', '2020-04-14 19:17:35', '2020-04-14 19:17:35'),
(19, 'Qui non non molestia', '146', 'Ipsam animi quasi e', 'Voluptate doloribus', 'stat/Zrd4ETYTqH3HDBas6lqU0dFMgYdXBQXVS0OOite2.png', '2020-04-14 19:18:25', '2020-04-14 19:18:25'),
(20, 'Rem autem occaecat i', '16', 'Velit nisi enim face', 'Dolore reprehenderit', 'stat/uMDVsPnpBJZWla7QjdqJBeRR7DD9CtC9aaBJEedd.png', '2020-04-14 19:18:45', '2020-04-14 19:18:45'),
(21, 'Nulla placeat numqu', '542', 'Laborum alias placea', 'In aut ut dicta aliq', 'stat/dXfwf19NDatgIBB7S9UhbEbU3ewy9z98HX1N95M0.png', '2020-04-14 19:18:58', '2020-04-14 19:18:58'),
(22, 'Perferendis consequa', '798', 'Qui eum laboris labo', 'Quod assumenda aut l', 'stat/GU6vSPceZ7BduoN7R75IvIU4odtwhyNOU6Y7lIXY.png', '2020-04-14 19:19:16', '2020-04-14 19:19:16'),
(23, 'Et impedit nisi ali', '737', 'Ratione et corrupti', 'Voluptatem Laborum', 'stat/0mi1bUJiYRpi0JXXTNXEhSPeILw3ZbdKqCKYYBIe.png', '2020-04-14 19:19:29', '2020-04-14 19:19:29'),
(24, 'fa fa-user', '134', 'Delectus sit neces', 'Nostrum est quia vel', NULL, '2020-04-14 19:19:56', '2020-04-14 19:19:56'),
(25, 'fa-film', '128', 'Ut omnis molestias d', 'Rerum officia ut rei', NULL, '2020-04-14 19:29:48', '2020-04-14 19:29:48'),
(26, 'fa-headphones', '691', 'Rem similique mollit', 'Quia ab nemo volupta', NULL, '2020-04-14 19:30:18', '2020-04-14 19:30:18'),
(27, 'fa-pencil-square-o', '948', 'Sint et ab eaque vol', 'Voluptatem fugiat re', NULL, '2020-04-14 19:30:42', '2020-04-14 19:30:42'),
(28, 'pe-7s-users', '955', 'Placeat ea beatae n', 'Incididunt non commo', NULL, '2020-04-14 19:31:44', '2020-04-14 19:31:44');

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
(17, 'Hedda Kemp', 'lyxoso@mailinator.com', '+1 (333) 994-8634', 'Laborum Dolore ex d', 'Advertisement', 'Holy See (Vatican City State)', '(GMT -4:30) Caracas', '1980-05-17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8:00 AM', NULL, '2020-04-02 12:31:45', '2020-04-02 12:31:45'),
(18, NULL, NULL, NULL, NULL, 'Word of mouth', 'United States', '(GMT -5:00) Eastern Time (US & Canada), Bogota, Lima', '2020-04-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '12:00 AM', NULL, '2020-04-02 12:49:37', '2020-04-02 12:49:37'),
(19, 'Hedda Pratt', 'ryvugyriko@mailinator.com', '+1 (106) 853-3978', 'Ducimus ut laborios', 'Other', 'Bahamas', '(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent', '2005-03-07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '11:00 AM', 'E:\\xampp\\tmp\\phpA62B.tmp', '2020-04-02 12:59:25', '2020-04-02 12:59:25'),
(20, 'Kendall Terrell', 'tejafaq@mailinator.com', '+1 (514) 522-1597', 'Hic rem sed molestia', 'Instagram', 'Montserrat', '(GMT +4:30) Kabul', '2000-07-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4:30 AM', NULL, '2020-04-02 15:57:32', '2020-04-02 15:57:32'),
(21, 'Maya Bradley', 'zitonati@mailinator.net', '+1 (904) 207-9314', 'Consequatur Tempore', 'Advertisement', 'Oman', '(GMT -6:00) Central Time (US & Canada), Mexico City', '2007-08-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1:30 PM', NULL, '2020-04-02 16:02:32', '2020-04-02 16:02:32'),
(22, 'Joelle Gibson', 'wogu@mailinator.net', '+1 (465) 793-4566', 'Quibusdam quos asper', 'Advertisement', 'Malaysia', '(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg', '2018-10-24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '11:30 PM', 'E:\\xampp\\tmp\\php6C87.tmp', '2020-04-02 16:03:45', '2020-04-02 16:03:45'),
(23, 'Clio Melton', 'peca@mailinator.com', '+1 (987) 373-8268', 'Quia nobis consequat', 'Facebook', 'Uganda', '(GMT +7:00) Bangkok, Hanoi, Jakarta', '2002-12-07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10:00 PM', NULL, '2020-04-02 16:04:46', '2020-04-02 16:04:46'),
(24, 'Serena Aguirre', 'dufetilid@mailinator.net', '+1 (933) 325-6073', 'Sit et id ex unde', 'Instagram', 'Portugal', '(GMT +11:00) Magadan, Solomon Islands, New Caledonia', '1991-02-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6:00 AM', NULL, '2020-04-02 16:06:51', '2020-04-02 16:06:51'),
(25, 'Cadman Lee', 'bowebi@mailinator.net', '+1 (275) 621-3098', 'Veniam deserunt ius', 'Google or other search', 'Ireland', '(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka', '2015-12-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '11:30 AM', 'E:\\xampp\\tmp\\phpB54F.tmp', '2020-04-02 22:38:23', '2020-04-02 22:38:23'),
(26, 'Priscilla Decker', 'ridohypu@mailinator.com', '+1 (639) 207-7796', 'Excepturi hic conseq', 'Google or other search', 'Cuba', '(GMT +6:00) Almaty, Dhaka, Colombo', '1993-11-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4:30 PM', NULL, '2020-04-02 22:40:26', '2020-04-02 22:40:26'),
(27, 'Keane Decker', 'zileju@mailinator.com', '+1 (293) 853-8351', 'Soluta incididunt vo', 'Facebook', 'Azerbaijan', '(GMT +9:30) Adelaide, Darwin', '2007-04-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5:30 AM', 'E:\\xampp\\tmp\\phpA8D0.tmp', '2020-04-02 22:44:52', '2020-04-02 22:44:52'),
(28, 'Germane Langley', 'pyjihylal@mailinator.net', '+1 (819) 994-4503', 'Distinctio Aspernat', 'Instagram', 'Ecuador', '(GMT -10:00) Hawaii', '2010-10-04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5:30 PM', 'E:\\xampp\\tmp\\php7CC2.tmp', '2020-04-03 10:06:16', '2020-04-03 10:06:16'),
(29, 'Kermit Dennis', 'conobamij@mailinator.com', '+1 (766) 622-8632', 'Magni dolor ad molli', 'Other', 'Uzbekistan', '(GMT -3:00) Brazil, Buenos Aires, Georgetown', '2000-06-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9:30 AM', 'E:\\xampp\\tmp\\phpFDF9.tmp', '2020-04-03 10:06:48', '2020-04-03 10:06:48'),
(30, 'Abra Huff', 'lucilu@mailinator.com', '+1 (761) 356-7249', 'Officia officia quis', 'Other', 'Saint Lucia', '(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk', '1983-06-29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6:30 PM', NULL, '2020-04-08 11:28:45', '2020-04-08 11:28:45'),
(31, 'Laith Jennings', 'hesak@mailinator.net', '+1 (271) 657-3346', 'Ut earum consequatur', 'Other', 'Greenland', '(GMT -7:00) Mountain Time (US & Canada)', '1970-05-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5:30 PM', NULL, '2020-04-08 11:29:16', '2020-04-08 11:29:16'),
(32, 'Amanda English', 'mofo@mailinator.com', '+1 (317) 436-3105', 'Adipisicing quo elig', 'Advertisement', 'French Southern Territories', '(GMT +5:30) Mumbai, Kolkata, Chennai, New Delhi', '1991-08-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6:00 PM', '/tmp/phpDXnVsp', '2020-04-10 19:20:26', '2020-04-10 19:20:26'),
(33, 'Omar student', 'wylyqyler@mailinator.net', '+1 (837) 764-9851', 'Any message', 'Other', 'Congo', '(GMT -6:00) Central Time (US & Canada), Mexico City', '1999-01-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '11:00 AM', '/tmp/phpEvjD76', '2020-04-10 20:16:27', '2020-04-10 20:16:27'),
(34, 'ahmed', 'e@z.com', '88966', NULL, 'Word of mouth', 'United States', '(GMT -5:00) Eastern Time (US & Canada), Bogota, Lima', '2020-04-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '12:00 AM', '/tmp/phpKDeZ3W', '2020-04-11 19:34:47', '2020-04-11 19:34:47'),
(35, 'MOhamed', 'lihazasu@mailinator.net', '+1 (596) 968-9579', 'Accusantium laboris', 'Instagram', 'Uruguay', '(GMT -4:30) Caracas', '1994-07-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4:00 AM', '/tmp/php2i8V2c', '2020-04-12 01:13:19', '2020-04-12 01:13:19'),
(36, 'Mohamed', 'cajuxis@mailinator.net', '+1 (367) 671-3737', 'Elit qui dolores ir', 'Other', 'Mayotte', '(GMT +8:00) Beijing, Perth, Singapore, Hong Kong', '2006-12-30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6:00 PM', '/tmp/phplf0iFT', '2020-04-12 01:14:05', '2020-04-12 01:14:05'),
(37, 'MOhameed', 'zetata@mailinator.com', '+1 (184) 496-6892', 'Doloremque eos exped', 'Google or other search', 'Malaysia', '(GMT) Western Europe Time, London, Lisbon, Casablanca, Greenwich', '1994-03-04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2:00 AM', '/tmp/phpOyzmz4', '2020-04-12 01:14:51', '2020-04-12 01:14:51');

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
(1, 'https://www.youtube.com/watch?v=FC8QqkKOv6A', 'Ciara Rojas', 'Travis Adkins', 'Et nulla labore odit', 'https://www.youtube.com/watch?v=prYJM6SBz24&list=RDzciOuadQ98g&index=5', 'teachers/S8o5bJASj4c9HSk9sBXjwhWWk21viSZJP2lpeqcW.jpeg', '2020-03-28 10:25:31', '2020-04-11 14:21:28'),
(2, 'https://www.youtube.com/watch?v=zciOuadQ98g', 'Luke Daniels', 'Joelle Cooke', 'Obcaecati delectus', 'Earum ipsam id fuga', 'teachers/SrscKZSCKYrlbQ5dqiJn7ZUtwgMsQDIx6vlw5WRj.jpeg', '2020-03-28 10:25:53', '2020-04-11 14:19:05'),
(3, 'https://www.youtube.com/watch?v=0AsPF8NBt90', 'Ronan Ballard', 'Audra Petty', 'A aut praesentium al', 'Voluptatum necessita', 'teachers/EeXT08IuueB9yEjaQpnmKwC20wXLbE38mJAjoTq2.png', '2020-03-29 10:31:21', '2020-04-11 14:12:51'),
(4, 'https://www.youtube.com/watch?v=GF7lc0lwbFE&list=RDzciOuadQ98g&index=3', 'Allegra Gallagher', 'Colby Odom', 'Aspernatur non volup', 'Laborum Sed volupta', 'teachers/lgsMoCTHiSiryo2Im7hA5Em5v0nqNsTYsiUDgP0J.jpeg', '2020-03-29 10:32:56', '2020-04-11 14:20:01'),
(5, 'https://www.youtube.com/watch?v=prYJM6SBz24&list=RDzciOuadQ98g&index=5', 'Holly Calderon', 'Lana Richards', 'Cum non natus quia n', 'Doloremque eos pari', 'teachers/h2WzlcFK9WfdlpP3Co8X6tVN2jGqARtXQ2KCSCO2.png', '2020-03-29 10:58:47', '2020-04-11 14:22:08'),
(6, 'https://www.youtube.com/watch?v=gK7fbkXfUAo', 'Vaughan Guy', 'Unity Stuart', 'Distinctio Accusant', 'Labore qui occaecat', 'teachers/mOg0VRwCfL62dbBsEbwCdGU4rT6rfpvAK6CL1Qez.png', '2020-03-29 10:59:17', '2020-04-11 14:11:14'),
(7, 'https://www.youtube.com/watch?v=Dcb29E94Mn4', 'Victor Wilkerson', 'Pearl Wiley', 'Iste velit sed qui c', 'Cupiditate deserunt', 'teachers/BSJxjsm9OqtLrOK1LabxcwKGcu5goO1SLtOyG5JK.png', '2020-03-29 11:00:00', '2020-04-11 14:17:25'),
(8, 'https://www.youtube.com/watch?v=y9aQVdaZdDQ&t=51s', 'Ulysses Avila', 'Kylee Gates', 'Aut temporibus totam', 'Modi ut ipsum offici', 'teachers/KwQGCR3ItJX8BwAqDr51tPOMjAWgaFqgyAuKUyc5.png', '2020-03-29 11:00:13', '2020-04-11 14:10:10'),
(9, 'https://www.youtube.com/watch?v=mwX08fZ4PZg', 'Mariam Garcia', 'Indira Gill', 'Mollitia et vero id', 'Numquam unde lorem u', 'teachers/pn8t7StRsnsUFj4G5HpIhtL6j3TgMehSHkCp0MMv.png', '2020-03-29 11:20:16', '2020-04-11 14:09:10'),
(10, 'https://www.youtube.com/watch?v=fELlP2-eKH0&list=RDzciOuadQ98g&index=7', 'مولان كورتشي', 'Mevlan Kurtishi', 'Exercitation ex ut v', 'Dolor voluptas vel u', 'teachers/AJKu24ExgFpmbvqiSW7dxxa9KyPuU1SZciKYjqMo.jpeg', '2020-04-11 14:29:12', '2020-04-11 14:29:12'),
(11, 'https://www.youtube.com/watch?v=DkRCHYLKMN4&feature=emb_logo', 'Judith Larson', 'Besir Duraku', 'بشير دوراكو', 'Ut reiciendis repudi', 'teachers/kCnoYmfxVzPIkReaX9P912P8LMQ6Wj6od66Tmppx.jpeg', '2020-04-11 14:37:10', '2020-04-11 14:37:10'),
(12, 'https://www.youtube.com/watch?v=iV4OQp7wADU&feature=emb_logo', 'محمود جلال', 'Mahmoud Jalal', 'Minima perferendis b', 'Eligendi quia ut ut', 'teachers/8I88jRItkAdrnyQ54NvnLC7ZQR2waluA86Ju62hJ.jpeg', '2020-04-11 14:41:19', '2020-04-11 14:41:19');

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

--
-- Dumping data for table `teachersignup`
--

INSERT INTO `teachersignup` (`id`, `name`, `email`, `phone`, `message`, `how_aboutus`, `location`, `timezone`, `date`, `time`, `icon`, `created_at`, `updated_at`) VALUES
(145, 'Clarke Pope', 'rakosuwuqo@mailinator.net', '+1 (308) 446-3675', 'Dolore molestiae off', 'Instagram', 'Nepal', '(GMT +4:00) Abu Dhabi, Muscat, Yerevan, Baku, Tbilisi', NULL, NULL, NULL, '2020-04-02 14:03:40', '2020-04-02 14:03:40'),
(146, 'Dexter Wilkerson', 'zafyqen@mailinator.com', '+1 (683) 753-2925', 'Commodi voluptate se', 'Other', 'Isle Of Man', '(GMT +4:00) Abu Dhabi, Muscat, Yerevan, Baku, Tbilisi', NULL, NULL, NULL, '2020-04-02 14:05:29', '2020-04-02 14:05:29'),
(147, 'Dalton Burke', 'tysehite@mailinator.net', '+1 (266) 497-8551', 'Ratione nisi qui adi', 'Instagram', 'Guernsey', '(GMT +6:00) Almaty, Dhaka, Colombo', NULL, NULL, 'E:\\xampp\\tmp\\phpB6DD.tmp', '2020-04-02 14:06:06', '2020-04-02 14:06:06'),
(148, 'September Hopper', 'sydelo@mailinator.com', '+1 (908) 423-7885', 'Voluptatem voluptate', 'Facebook', 'Paraguay', '(GMT +4:30) Kabul', NULL, NULL, NULL, '2020-04-02 14:06:38', '2020-04-02 14:06:38'),
(149, 'Kyla Davidson', 'begixo@mailinator.com', '+1 (517) 557-2476', 'Est animi voluptat', 'Advertisement', 'Iceland', '(GMT -11:00) Midway Island, Samoa', NULL, NULL, NULL, '2020-04-02 14:11:10', '2020-04-02 14:11:10'),
(150, 'Haley Clarke', 'fafiryqy@mailinator.net', '+1 (167) 203-6137', 'Recusandae Nisi ita', 'Google or other search', 'Slovakia', '(GMT +9:30) Adelaide, Darwin', NULL, NULL, 'E:\\xampp\\tmp\\phpC185.tmp', '2020-04-02 14:11:36', '2020-04-02 14:11:36'),
(151, 'Neve Bowman', 'fecawajevy@mailinator.com', '+1 (933) 507-5069', 'Tempora cum et vel v', 'Advertisement', 'Saudi Arabia', '(GMT +6:30) Yangon, Cocos Islands', NULL, NULL, NULL, '2020-04-02 14:12:32', '2020-04-02 14:12:32'),
(152, 'Caesar Evans', 'tipydiq@mailinator.com', '+1 (543) 895-5262', 'Facere ipsa mollit', 'Google or other search', 'Saint Pierre And Miquelon', '(GMT) Western Europe Time, London, Lisbon, Casablanca, Greenwich', NULL, NULL, 'E:\\xampp\\tmp\\phpFBAB.tmp', '2020-04-02 14:12:57', '2020-04-02 14:12:57'),
(153, 'Cameron Vang', 'gotym@mailinator.com', '+1 (834) 536-4895', 'Voluptatum do maiore', 'Advertisement', 'Ghana', '(GMT -3:00) Brazil, Buenos Aires, Georgetown', NULL, NULL, 'E:\\xampp\\tmp\\php9BB5.tmp', '2020-04-02 14:13:38', '2020-04-02 14:13:38'),
(154, 'عادل', 'hejufu@mailinator.com', '+1 (333) 662-9261', 'Ratione quia dolores', 'Other', 'Liberia', '(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk', NULL, NULL, NULL, '2020-04-02 14:51:32', '2020-04-02 14:51:32'),
(155, 'عادل', 'hylyhafane@mailinator.com', '+1 (385) 633-9022', 'Quod ad illo sunt do', 'Facebook', 'Indonesia', '(GMT +1:00 hour) Brussels, Copenhagen, Madrid, Paris', NULL, NULL, 'E:\\xampp\\tmp\\phpEF84.tmp', '2020-04-02 14:53:19', '2020-04-02 14:53:19'),
(156, 'Willow Mcdowell', 'virosy@mailinator.net', '+1 (138) 524-5919', 'In enim obcaecati es', 'Google or other search', 'Puerto Rico', '(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg', NULL, NULL, NULL, '2020-04-02 15:07:41', '2020-04-02 15:07:41'),
(157, 'Amal Quinn', 'ceqyzilyf@mailinator.com', '+1 (207) 249-9239', 'Laborum Quaerat ab', 'Other', 'Italy', '(GMT +5:45) Kathmandu', NULL, NULL, 'E:\\xampp\\tmp\\php43F4.tmp', '2020-04-02 15:31:54', '2020-04-02 15:31:54'),
(158, 'Nolan Saunders', 'hoxifenu@mailinator.com', '+1 (602) 332-5483', 'Rerum delectus anim', 'Google or other search', 'Faroe Islands', '(GMT +6:00) Almaty, Dhaka, Colombo', NULL, NULL, 'E:\\xampp\\tmp\\php858D.tmp', '2020-04-02 15:33:16', '2020-04-02 15:33:16'),
(159, 'Xyla Schroeder', 'sefyre@mailinator.com', '+1 (886) 416-6515', 'Nihil cillum ea ut l', 'Advertisement', 'Latvia', '(GMT +4:00) Abu Dhabi, Muscat, Yerevan, Baku, Tbilisi', NULL, NULL, 'E:\\xampp\\tmp\\php44D7.tmp', '2020-04-02 15:34:05', '2020-04-02 15:34:05'),
(160, 'Quyn Conley', 'giherew@mailinator.com', '+1 (851) 396-3908', 'Debitis magni ea eaq', 'Google or other search', 'Benin', '(GMT) Western Europe Time, London, Lisbon, Casablanca, Greenwich', NULL, NULL, 'E:\\xampp\\tmp\\php3533.tmp', '2020-04-02 15:35:07', '2020-04-02 15:35:07'),
(161, 'Aline Espinoza', 'geqexuvu@mailinator.com', '+1 (158) 427-2996', 'Cupiditate aspernatu', 'Advertisement', 'Saint Lucia', '(GMT -5:00) Eastern Time (US & Canada), Bogota, Lima', NULL, NULL, NULL, '2020-04-02 15:36:50', '2020-04-02 15:36:50'),
(162, 'Aline Espinoza', 'geqexuvu@mailinator.com', '+1 (158) 427-2996', 'Cupiditate aspernatu', 'Advertisement', 'Saint Lucia', '(GMT -5:00) Eastern Time (US & Canada), Bogota, Lima', NULL, NULL, NULL, '2020-04-02 15:37:12', '2020-04-02 15:37:12'),
(163, 'محمد سعيد فرج', 'faresa@mailinator.net', '+1 (658) 779-8919', 'Rerum nobis fugit u', 'Instagram', 'Sierra Leone', '(GMT +1:00 hour) Brussels, Copenhagen, Madrid, Paris', NULL, NULL, 'E:\\xampp\\tmp\\phpB344.tmp', '2020-04-02 15:37:50', '2020-04-02 15:37:50'),
(164, 'محمد سعيد فرج', 'cezub@mailinator.net', '+1 (461) 316-4227', 'Dolor Nam et proiden', 'Google or other search', 'Macedonia, The Former Yugoslav Republic Of', '(GMT -5:00) Eastern Time (US & Canada), Bogota, Lima', NULL, NULL, 'E:\\xampp\\tmp\\php13EA.tmp', '2020-04-02 15:40:26', '2020-04-02 15:40:26'),
(165, 'MOhamed Saeed Jacoub', 'jujafyw@mailinator.net', '+1 (955) 684-7931', 'Placeat fuga Ullam', 'Advertisement', 'Tajikistan', '(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk', NULL, NULL, 'E:\\xampp\\tmp\\php2C31.tmp', '2020-04-02 15:41:38', '2020-04-02 15:41:38'),
(166, 'محمد سعيد فرج يعقوب', 'fojuc@mailinator.com', '+1 (563) 777-8812', 'Ipsam incididunt cup', 'Other', 'New Caledonia', '(GMT -10:00) Hawaii', NULL, NULL, 'E:\\xampp\\tmp\\phpB080.tmp', '2020-04-02 15:43:17', '2020-04-02 15:43:17'),
(167, 'Amery Lowery', 'wyvaxapoh@mailinator.com', '+1 (804) 313-3312', 'Ex et ipsum debitis', 'Advertisement', 'Mauritius', '(GMT +6:00) Almaty, Dhaka, Colombo', NULL, NULL, NULL, '2020-04-02 15:46:33', '2020-04-02 15:46:33'),
(168, 'Sean Foreman', 'xybevocexu@mailinator.net', '+1 (482) 971-3521', 'Doloremque minus qui', 'Other', 'Burundi', '(GMT -8:00) Pacific Time (US & Canada)', NULL, NULL, NULL, '2020-04-02 15:47:40', '2020-04-02 15:47:40'),
(169, 'Hashim Riggs', 'manejar@mailinator.com', '+1 (133) 598-9661', 'Quam qui nihil ipsa', 'Google or other search', 'Tokelau', '(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka', NULL, NULL, 'E:\\xampp\\tmp\\php1A1B.tmp', '2020-04-02 15:50:17', '2020-04-02 15:50:17'),
(170, 'Dylan Dorsey', 'dihu@mailinator.com', '+1 (132) 959-4663', 'Ducimus atque odio', 'Instagram', 'United States', '(GMT -4:30) Caracas', NULL, NULL, NULL, '2020-04-02 15:54:54', '2020-04-02 15:54:54'),
(171, 'Brett Molina', 'ficativaq@mailinator.com', '+1 (806) 841-4567', 'In minus debitis lab', 'Facebook', 'Chile', '(GMT -7:00) Mountain Time (US & Canada)', NULL, NULL, NULL, '2020-04-02 15:57:16', '2020-04-02 15:57:16'),
(172, 'Ryan Macdonald', 'jokesidis@mailinator.net', '+1 (381) 613-9913', 'Dolores iusto adipis', 'Instagram', 'Montserrat', '(GMT +5:45) Kathmandu', NULL, NULL, '/tmp/phphRqkAs', '2020-04-10 19:23:01', '2020-04-10 19:23:01');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_ar` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_ar` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_ar` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_ar` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name_ar`, `name_en`, `job_ar`, `job_en`, `text_ar`, `text_en`, `country_ar`, `country_en`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Wade Cherry', 'Phillip Miller', 'Tempore sint et ea', 'Aperiam explicabo C', 'يدرس طفلاي في معهد quransquare وهي تجربة جيدة للغاية حيث أن المعلم من ذوي الخبرة والمهنية التي يهتمون بها كثيرًا بشأن مستوى التعلم لدى الأطفال. يمكنني المتابعة خطوة بخطوة مع المعلم أثناء تلقي البريد الإلكتروني بعد كل فصل يخبرني ما تعلمه الأطفال وما هو الواجب المنزلي. الحمد لله أنني استطعت أن أجد مثل هذا البرنامج الرائع لمساعدتي وأطفالي ونقلنا إلى الجنة. جزاكم الله كل خير على جهودهم.', 'My two kids are studying at quransquare institute and it\'s a very good experience as the teacher are so experienced and professional they care a lot about the learning level of the kids. I can follow up step by step with the teacher as i receive email after each class that tells me what the kids learned and what is the homework. Alhamdulillah that I could find such a amazing program to help me and my kids and take us to Jannah. May Allah reward every one there for their efforts.', 'Eligendi suscipit id', 'Dolorem facilis accu', 'testimonial/TkrZh7nIm91F3LabXAWjG3k5jx7t4CTBPADs8fBS.jpeg', '2020-03-28 04:27:33', '2020-04-11 12:46:43'),
(2, 'Bradley Turner', 'Hall Kramer', 'Velit vel est quas q', 'Reiciendis ullam del', 'و  لقد وضعنا ابننا الأصغر في  ساحه القران  للتعرف على الأخلاق الإسلامية ، والحمد لله معلمه مدهش وهم يعلمون من خلال لعب ألعاب على الإنترنت أمر رائع حقًا. ما شاء الله.  لقد وضعنا ابننا الأصغر في  ساحه القران  للتعرف على الأخلاق الإسلامية ، والحمد لله معلمه مدهش وهم يعلمون من خلال لعب ألعاب على الإنترنت أمر رائع حقًا. ما شاء الله.', 'We put our younger son in quransquare  to learn about islamic manners and Alhamdulillah his teacher is amazing and they teach by playing online games that\'s really cool. Masha Allah. We put our younger son in quransquare  to learn about islamic manners and Alhamdulillah his teacher is amazing and they teach by playing online games that\'s really cool. Masha Allah.', 'الوليات المتحده', 'USA', 'testimonial/kpZvq5hKp1tJClDdQz5N55LTBQVWqT9M5rCVc8ao.jpeg', '2020-03-28 04:27:50', '2020-04-11 12:39:27'),
(3, 'Vera Terry', 'Jillian Parsons', 'Dolore aute incididu', 'Eius cillum veniam', 'لقد كانت تجربة رائعة مع دروس القرآن واللغة العربية في معهد   ساحه القران . مناسبة جدًا للأطفال وكذلك للأشخاص الذين لديهم وظائف بدوام كامل حيث أن الفصول الدراسية مرنة للغاية. المعلمون محترفون ومعرفة. الموقع سهل الاستخدام. سيوصي 100 ٪ بذلك لأي شخص يبحث عن دروس عبر الإنترنت.', 'It was a great experience with the lessons of the Qur\'an and the Arabic language at the Witch Institute of the Qur\'an. Very suitable for children as well as for people with full-time jobs as the classes are very flexible. The teachers are professional and knowledgeable. The site is easy to use. 100% would recommend this to anyone looking for online lessons.', 'Velit et soluta nec', 'Similique proident', 'testimonial/SINgbl10XwS7dMbfdR2bGv4IK937UggLC2DXc16t.jpeg', '2020-03-29 11:23:40', '2020-04-11 12:49:17'),
(4, 'Regan Rich', 'Dacey Andrews', 'Iure consequuntur id', 'Enim officia quis la', 'عمري 65 سنة. كنت أفتح القرآن وأقبله وأعيده لأنني لا أستطيع القراءة ولا يمكنني معرفة أي شيء. الآن وبعد أن انضممت إلى quransquare ، أنا سعيد جدًا لأنني بدأت في قراءة القرآن الحمد لله.', 'I am 65 years old. I used to open Quran and kiss it and put it back as I can not read and I can not figure out anything. Now and after I joined quransquare I am very happy as I started reading Quran Alhamdulillah.', 'Aut laudantium magn', 'Eu ut cillum qui sim', 'testimonial/W8kvDsucbyMPjt4lDxpDNDVdz9eOQVazY7e3awp5.gif', '2020-03-29 11:24:02', '2020-04-11 12:44:19'),
(5, 'Rhona Stout', 'Paki Levine', 'Soluta non velit mo', 'Qui similique dolore', 'نحن نبحث عن مدرس قرآني خاص لأطفالنا الثلاثة حتى وجدنا ساحة القرآن. نحن نحب الخدمة المهنية التي نحصل عليها ، فهي متجاوبة للغاية. نحن في الواقع نوصي بـ طريق الجنة للكثير من رفقائنا وعائلاتنا.', 'We have been looking for a private Quran teacher for our three kids till we found quran square . We love the professional service we get, they are very responsive. We are actually recommending TareequlJannah for lot of our firends and families.', 'Cillum quis dolor mo', 'Dolore at itaque nem', 'testimonial/zNAAJAy7ltcjYB1G0V24RkO50xO32a6LsdcZr8t1.jpeg', '2020-03-29 12:35:24', '2020-04-11 12:52:12'),
(6, 'Mohamed', 'محمد', 'دكتور اسنان', 'Doctor of Dentist', 'Masyaa Allah ... Alhamdulillah .. أنا سعيد للغاية ومتحمس ويشرفني حقًا تلقي هذا الإنجاز الرائع من NETWORK. آمل أن تجعلني هذه الجائزة الرائعة أكثر حماسا لقراءة القرآن وحفظه وأيضا لتشجيع أصدقائي المسلمين حول العالم ... أمين. جازك الله خير.', 'Masyaa Allah ... Alhamdulillah.. I am tremendously happy, excited and really honoured to receive this outstanding achievement from  NETWORK. I hope this fantastic award can make me more motivated to read and memorize Al Qur\'an and also to encourage my moslem friends around the world... Aameen. Jaazak Allah Khair.', 'Aliquam fugiat laud', 'Magnam adipisicing l', 'testimonial/78B4qnnEIJiocjBsPUekvJ6sQaTho2u1fTE9tFUr.jpeg', '2020-04-11 12:58:41', '2020-04-11 12:58:41'),
(7, 'ميتالينا', 'Mitalina', 'طالبه', 'student', 'السلام عليكم ، اسمي ميتالينا هومايرا من إندونيسيا ، عمري 9 سنوات ، بفضل لجنة ساحة القرآن التي منحتني الفرصة للمشاركة في مسابقة القرآن الدولية للقرآن في عام 2020 ، أشعر بالامتنان لكوني جزءًا من مسابقة القرآن هذه اجتمعت مع قريع وقورية في جميع أنحاء العالم من خلال عقد المؤتمرات بالفيديو ، والحمد لله بفضل الله دخلت النهائي في المركز الثالث من 500 مشارك في هذه المسابقة.', 'Assalamu alaykum, my name is Mitalina Humaira from Indonesia, I am 9 years old, thanks to the quran square committee which has given me the opportunity to participate in the IQRA International Quran Competition in 2020, I feel grateful to be part of this Quran competition, gathering with Qori \'and Qoriah throughout the world through video conferencing, and thank God with the grace of Allah I entered the final in the third position of 500 participants in this competition.', 'اندونسيا', 'Indonesia', 'testimonial/7upqLmtTKGhRkX5N038nC01kXgPuGfI28T8f0Q0E.jpeg', '2020-04-11 13:04:46', '2020-04-11 13:04:46');

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
(1, 'Kibo Hyde', 'zoru@mailinator.com', '$2y$10$9jYt2VhKbYhXklpV8SY.5ORzajytulGiMrOY4/RBPhMgqcy7HUYhq', 'company', NULL, '2020-04-10 21:01:21', '2020-04-10 21:01:21');

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
(1, 'https://youtu.be/Lyd3FW2VmEY', 'videos/04tayPQsOunmO5sYuohVf9UBP6vv9JJ49SvchShD.jpeg', '2020-03-28 10:24:34', '2020-04-03 23:16:26'),
(2, 'https://www.youtube.com/watch?v=xja--m10prE', 'videos/q4TapwUKl3TjjDtfe5tTB7mKqn3xTpdc4QB0zFct.png', '2020-03-28 10:25:01', '2020-04-03 23:27:47'),
(3, 'https://alazhararabiconline.com/wp-content/uploads/2018/08/How-it-works-Azhar-Quran1080P_HD-1.mp4?_=1', 'videos/sAGmfkRB8EdAE7zo1rETK3iqNo7tpdVqqdQgzG4c.png', '2020-04-03 23:38:46', '2020-04-03 23:38:46'),
(4, 'https://www.youtube.com/watch?v=xja--m10prE', 'videos/So99NgKRfMU5CGvM0S54SrLEsddNJ5c16K6RVI8z.jpeg', '2020-04-04 00:19:45', '2020-04-04 00:19:45'),
(5, 'https://www.youtube.com/watch?v=2sLnHDpZJgY', 'videos/cA251FKpldb2tQb0tU7r3ONkerzjit6UToocu0ex.png', '2020-04-04 00:59:00', '2020-04-04 00:59:00'),
(6, 'https://www.youtube.com/watch?v=xja--m10prE', 'videos/mnavOQrMQZBdXj3gAExhGor0vgC19o1NFbZCmK7e.png', '2020-04-04 01:09:50', '2020-04-04 01:09:50');

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
(1, 'مرونة كاملة 24/7', 'Full flexibility 24/7', 'مرونة كاملة على مدار الساعة ، سبعة أيام في الأسبوع ، بعد العمل ، في عطلات نهاية الأسبوع ، أو في استراحة الغداء: في أي يوم وفي أي وقت تريد ، نحن هنا! نحن موجودون دائمًا في خدمتكم وخدمات القرآن الكريم', 'Total flexibility around the clock, seven days a week, after work, on weekends, or at lunch break: any day, any time you want, we are here! We are always present at your service and Holy Quran services', '356/30/24/7 مرونة كاملة', '356/30/24/7', 'whyus/YhTcqLsVZJL9SmDKKgO6q0Soxzti1ns59hPEICMR.png', '2020-03-28 10:17:46', '2020-04-11 12:20:13'),
(2, 'المعلمين المعتمدين', 'Certified Teachers', 'يتوفر الأزهر المعلم والمعلمة المهنية الأزهرية. ,  والمعلمين لدينا يجدونا   معظم لغات العالم !', 'Available Al-Azhar Teacher and Al-Azhar Professional Teacher. Our teachers find us in most of the world\'s languages!', 'معلمين  لديهم الخبرات الكبيره *', 'Teachers have great experiences', 'whyus/wNmwYDZQOrhenD4xEIU9cbRFb3f9LQ7ojWAs8IB8.png', '2020-03-28 10:18:02', '2020-04-11 01:12:19'),
(3, 'فئة تجريبية مجانية', 'Free Trial Class', 'احصل على أول صف تجريبي مجاني ولا يلزم الدفع. , سجل الان  واحصل علي  المحاضره  المجانيه , نحن سعداء بالتعامل معكم', 'Get your first free trial row and no payment required. Register now and get the free lecture. We are happy to do business with you', 'عروض ومحاضرات مجانيه', 'Free offers and lectures', 'whyus/NUbMfWnHqOahcfBPvnVVXdUo1wfRewf7qEvXqJMO.png', '2020-03-28 10:18:13', '2020-04-11 01:07:41'),
(4, '100٪ ضمان استعادة الاموال', '100% Money Back Guarantee', 'سنقوم برد أموالك إذا لم تكن راضيًا في غضون أسبوع. 100٪ ضمان استعادة الاموال.', 'We will refund your money if you are not satisfied within a week. 100% money back guarantee. ! Firstly, we are interested in meeting our students\' needs', '*توفير سهوله التعامل المادى  بكل الوسائل', 'Provide easy physical handling by all means *', 'whyus/WoiahTVPBWwljuCl0O7iwcoV8xFMf6iICNNbyCfc.png', '2020-03-28 10:20:14', '2020-04-11 01:17:42'),
(5, 'دورة الدراسات الإسلامية', 'Islamic Studies Course', 'كل ما تريد معرفته عن الإسلام: مجموعة من الدروس الإسلامية التي تقدم بطريقة سهلة وعملية عن العقيدة والفقه وسنة النبي محمد (صلى الله عليه وسلم).', 'All what you need to know about Islam: a set of Islamic lessons presented in an easy and practical way on Aqeeda, Feqh, Sunna of prophet Muhammed (PBUH).', 'بالإضافة إلى دروس خاصة حول السلوك الإسلامي العملي مثل: تكريم الوالدين ، احترام كبار السن ، زيارة المرضى', 'As well as special lessons about practical Islamic', 'whyus/aPNhcc5cKfSWcgmCZbXmzUr3wcXutw4WJIsfQ163.png', '2020-04-03 22:59:09', '2020-04-11 12:52:02'),
(6, 'تعتمد دورة التجويد الأساسية', 'The Basic Tajweed course', 'على شرح قواعد التجويد نظريا وتطبيقها بطريقة عملية وسهلة. يتعلم  أسماء قواعد التجويد مثل:الإخفاء وإدغم .. وغيرهم. بالإضافة إلى ذلك ، يتعلم ,ربط الحروف العربية وخصائصها', '100% Money Back Guarantee We will refund your money if you aren\'t satisfied in a week. 100% Money Back Guarantee. Laborum voluptas sed', '( وذلك لإتقان قراءة القرآن كما نزل النبي محمد (صلى الله عليه وسلم,', 'prophet Muhammed (PBUH).', 'whyus/W4DKsWZkshCZawo3iJI06coHsQKm7fOtDN5ZoEwm.png', '2020-04-03 23:01:36', '2020-04-11 02:00:07'),
(7, 'دورة   مصباح  الهدى', 'Al Huda lamp cycle', 'هي أسهل وأسرع طريقة لتعلم قراءة القرآن. يبدأ بتعلم حروف الأبجدية العربية الفردية. ثم تعلم حروف العلة (Fatha ، Khasra و Dhamma). بعد ذلك ، يتعلم الطلاب Sukoon و Shadda لممارسة النطق الصحيح لكل حرف. يتميز بكلمات تمارين عملية', 'It is the easiest and fastest way to learn to read the Quran. He begins to learn the letters of the individual Arabic alphabet. Then learn the vowels (Fatha, Khasra and Dhamma).', 'دورات مميزه', 'Featured courses', 'whyus/DyMnRRz7u3IstjpXHCawRLGs3Ff5xPoWuemMUhri.png', '2020-04-03 23:01:56', '2020-04-11 01:35:30'),
(8, 'دورة إجازة عبر الإنترنت', 'Online Ijazah course', 'لتحقيق أعلى مستوى من تلاوة القرآن على أكمل وجه. يقوم الطالب بتلاوة كل القرآن الكريم لمعلمه من الذاكرة ويحصل على شهادة رسمية \"إجازة\" مع \"سند\" لتعليم القرآن الكريم بقواعد التجويد. أيضا ، نقدم', 'For achieving the highest level of reciting quran perfectly. Student will recite all the Holy Quran to his/her teacher from memory and getting an official certificate “Ijazah”', '\"تلاوة إجازة\" لأولئك الذين لا يمكنهم حفظ كل القرآن الكريم', 'with “Sanad” for teaching quran with Tajweed Rules. Also,', 'whyus/4UcJEKUzU8cWrX8rk9p97P1wWxS55G06Dq78WWxx.png', '2020-04-03 23:02:14', '2020-04-11 01:39:31'),
(9, 'مرونة كاملة 24/7', 'Full flexibility 24/7', 'مرونة كاملة على مدار الساعة ، سبعة أيام في الأسبوع ، بعد العمل ، في عطلات نهاية الأسبوع ، أو في استراحة الغداء: في أي يوم وفي أي وقت تريد ، نحن هنا! نحن موجودون دائمًا في خدمتكم وخدمات القرآن الكريم', 'Total flexibility around the clock, seven days a week, after work, on weekends, or at lunch break: any day, any time you want, we are here! We are always present at your service and Holy Quran services', '356/30/24/7 مرونة كاملة', '356/30/24/7', 'whyus/YhTcqLsVZJL9SmDKKgO6q0Soxzti1ns59hPEICMR.png', '2020-03-28 10:17:46', '2020-04-11 12:20:13'),
(10, 'المعلمين المعتمدين', 'Certified Teachers', 'يتوفر الأزهر المعلم والمعلمة المهنية الأزهرية. ,  والمعلمين لدينا يجدونا   معظم لغات العالم !', 'Available Al-Azhar Teacher and Al-Azhar Professional Teacher. Our teachers find us in most of the world\'s languages!', 'معلمين  لديهم الخبرات الكبيره *', 'Teachers have great experiences', 'whyus/wNmwYDZQOrhenD4xEIU9cbRFb3f9LQ7ojWAs8IB8.png', '2020-03-28 10:18:02', '2020-04-11 01:12:19'),
(11, 'فئة تجريبية مجانية', 'Free Trial Class', 'احصل على أول صف تجريبي مجاني ولا يلزم الدفع. , سجل الان  واحصل علي  المحاضره  المجانيه , نحن سعداء بالتعامل معكم', 'Get your first free trial row and no payment required. Register now and get the free lecture. We are happy to do business with you', 'عروض ومحاضرات مجانيه', 'Free offers and lectures', 'whyus/NUbMfWnHqOahcfBPvnVVXdUo1wfRewf7qEvXqJMO.png', '2020-03-28 10:18:13', '2020-04-11 01:07:41'),
(12, '100٪ ضمان استعادة الاموال', '100% Money Back Guarantee', 'سنقوم برد أموالك إذا لم تكن راضيًا في غضون أسبوع. 100٪ ضمان استعادة الاموال.', 'We will refund your money if you are not satisfied within a week. 100% money back guarantee. ! Firstly, we are interested in meeting our students\' needs', '*توفير سهوله التعامل المادى  بكل الوسائل', 'Provide easy physical handling by all means *', 'whyus/WoiahTVPBWwljuCl0O7iwcoV8xFMf6iICNNbyCfc.png', '2020-03-28 10:20:14', '2020-04-11 01:17:42'),
(13, 'دورة الدراسات الإسلامية', 'Islamic Studies Course', 'كل ما تريد معرفته عن الإسلام: مجموعة من الدروس الإسلامية التي تقدم بطريقة سهلة وعملية عن العقيدة والفقه وسنة النبي محمد (صلى الله عليه وسلم).', 'All what you need to know about Islam: a set of Islamic lessons presented in an easy and practical way on Aqeeda, Feqh, Sunna of prophet Muhammed (PBUH).', 'بالإضافة إلى دروس خاصة حول السلوك الإسلامي العملي مثل: تكريم الوالدين ، احترام كبار السن ، زيارة المرضى', 'As well as special lessons about practical Islamic', 'whyus/aPNhcc5cKfSWcgmCZbXmzUr3wcXutw4WJIsfQ163.png', '2020-04-03 22:59:09', '2020-04-11 12:52:02'),
(14, 'تعتمد دورة التجويد الأساسية', 'The Basic Tajweed course', 'على شرح قواعد التجويد نظريا وتطبيقها بطريقة عملية وسهلة. يتعلم  أسماء قواعد التجويد مثل:الإخفاء وإدغم .. وغيرهم. بالإضافة إلى ذلك ، يتعلم ,ربط الحروف العربية وخصائصها', '100% Money Back Guarantee We will refund your money if you aren\'t satisfied in a week. 100% Money Back Guarantee. Laborum voluptas sed', '( وذلك لإتقان قراءة القرآن كما نزل النبي محمد (صلى الله عليه وسلم,', 'prophet Muhammed (PBUH).', 'whyus/W4DKsWZkshCZawo3iJI06coHsQKm7fOtDN5ZoEwm.png', '2020-04-03 23:01:36', '2020-04-11 02:00:07'),
(15, 'دورة   مصباح  الهدى', 'Al Huda lamp cycle', 'هي أسهل وأسرع طريقة لتعلم قراءة القرآن. يبدأ بتعلم حروف الأبجدية العربية الفردية. ثم تعلم حروف العلة (Fatha ، Khasra و Dhamma). بعد ذلك ، يتعلم الطلاب Sukoon و Shadda لممارسة النطق الصحيح لكل حرف. يتميز بكلمات تمارين عملية', 'It is the easiest and fastest way to learn to read the Quran. He begins to learn the letters of the individual Arabic alphabet. Then learn the vowels (Fatha, Khasra and Dhamma).', 'دورات مميزه', 'Featured courses', 'whyus/DyMnRRz7u3IstjpXHCawRLGs3Ff5xPoWuemMUhri.png', '2020-04-03 23:01:56', '2020-04-11 01:35:30'),
(16, 'دورة إجازة عبر الإنترنت', 'Online Ijazah course', 'لتحقيق أعلى مستوى من تلاوة القرآن على أكمل وجه. يقوم الطالب بتلاوة كل القرآن الكريم لمعلمه من الذاكرة ويحصل على شهادة رسمية \"إجازة\" مع \"سند\" لتعليم القرآن الكريم بقواعد التجويد. أيضا ، نقدم', 'For achieving the highest level of reciting quran perfectly. Student will recite all the Holy Quran to his/her teacher from memory and getting an official certificate “Ijazah”', '\"تلاوة إجازة\" لأولئك الذين لا يمكنهم حفظ كل القرآن الكريم', 'with “Sanad” for teaching quran with Tajweed Rules. Also,', 'whyus/4UcJEKUzU8cWrX8rk9p97P1wWxS55G06Dq78WWxx.png', '2020-04-03 23:02:14', '2020-04-11 01:39:31'),
(17, 'مرونة كاملة 24/7', 'Full flexibility 24/7', 'مرونة كاملة على مدار الساعة ، سبعة أيام في الأسبوع ، بعد العمل ، في عطلات نهاية الأسبوع ، أو في استراحة الغداء: في أي يوم وفي أي وقت تريد ، نحن هنا! نحن موجودون دائمًا في خدمتكم وخدمات القرآن الكريم', 'Total flexibility around the clock, seven days a week, after work, on weekends, or at lunch break: any day, any time you want, we are here! We are always present at your service and Holy Quran services', '356/30/24/7 مرونة كاملة', '356/30/24/7', 'whyus/YhTcqLsVZJL9SmDKKgO6q0Soxzti1ns59hPEICMR.png', '2020-03-28 10:17:46', '2020-04-11 12:20:13'),
(18, 'المعلمين المعتمدين', 'Certified Teachers', 'يتوفر الأزهر المعلم والمعلمة المهنية الأزهرية. ,  والمعلمين لدينا يجدونا   معظم لغات العالم !', 'Available Al-Azhar Teacher and Al-Azhar Professional Teacher. Our teachers find us in most of the world\'s languages!', 'معلمين  لديهم الخبرات الكبيره *', 'Teachers have great experiences', 'whyus/wNmwYDZQOrhenD4xEIU9cbRFb3f9LQ7ojWAs8IB8.png', '2020-03-28 10:18:02', '2020-04-11 01:12:19'),
(19, 'فئة تجريبية مجانية', 'Free Trial Class', 'احصل على أول صف تجريبي مجاني ولا يلزم الدفع. , سجل الان  واحصل علي  المحاضره  المجانيه , نحن سعداء بالتعامل معكم', 'Get your first free trial row and no payment required. Register now and get the free lecture. We are happy to do business with you', 'عروض ومحاضرات مجانيه', 'Free offers and lectures', 'whyus/NUbMfWnHqOahcfBPvnVVXdUo1wfRewf7qEvXqJMO.png', '2020-03-28 10:18:13', '2020-04-11 01:07:41'),
(20, '100٪ ضمان استعادة الاموال', '100% Money Back Guarantee', 'سنقوم برد أموالك إذا لم تكن راضيًا في غضون أسبوع. 100٪ ضمان استعادة الاموال.', 'We will refund your money if you are not satisfied within a week. 100% money back guarantee. ! Firstly, we are interested in meeting our students\' needs', '*توفير سهوله التعامل المادى  بكل الوسائل', 'Provide easy physical handling by all means *', 'whyus/WoiahTVPBWwljuCl0O7iwcoV8xFMf6iICNNbyCfc.png', '2020-03-28 10:20:14', '2020-04-11 01:17:42'),
(21, 'دورة الدراسات الإسلامية', 'Islamic Studies Course', 'كل ما تريد معرفته عن الإسلام: مجموعة من الدروس الإسلامية التي تقدم بطريقة سهلة وعملية عن العقيدة والفقه وسنة النبي محمد (صلى الله عليه وسلم).', 'All what you need to know about Islam: a set of Islamic lessons presented in an easy and practical way on Aqeeda, Feqh, Sunna of prophet Muhammed (PBUH).', 'بالإضافة إلى دروس خاصة حول السلوك الإسلامي العملي مثل: تكريم الوالدين ، احترام كبار السن ، زيارة المرضى', 'As well as special lessons about practical Islamic', 'whyus/aPNhcc5cKfSWcgmCZbXmzUr3wcXutw4WJIsfQ163.png', '2020-04-03 22:59:09', '2020-04-11 12:52:02'),
(22, 'تعتمد دورة التجويد الأساسية', 'The Basic Tajweed course', 'على شرح قواعد التجويد نظريا وتطبيقها بطريقة عملية وسهلة. يتعلم  أسماء قواعد التجويد مثل:الإخفاء وإدغم .. وغيرهم. بالإضافة إلى ذلك ، يتعلم ,ربط الحروف العربية وخصائصها', '100% Money Back Guarantee We will refund your money if you aren\'t satisfied in a week. 100% Money Back Guarantee. Laborum voluptas sed', '( وذلك لإتقان قراءة القرآن كما نزل النبي محمد (صلى الله عليه وسلم,', 'prophet Muhammed (PBUH).', 'whyus/W4DKsWZkshCZawo3iJI06coHsQKm7fOtDN5ZoEwm.png', '2020-04-03 23:01:36', '2020-04-11 02:00:07'),
(23, 'دورة   مصباح  الهدى', 'Al Huda lamp cycle', 'هي أسهل وأسرع طريقة لتعلم قراءة القرآن. يبدأ بتعلم حروف الأبجدية العربية الفردية. ثم تعلم حروف العلة (Fatha ، Khasra و Dhamma). بعد ذلك ، يتعلم الطلاب Sukoon و Shadda لممارسة النطق الصحيح لكل حرف. يتميز بكلمات تمارين عملية', 'It is the easiest and fastest way to learn to read the Quran. He begins to learn the letters of the individual Arabic alphabet. Then learn the vowels (Fatha, Khasra and Dhamma).', 'دورات مميزه', 'Featured courses', 'whyus/DyMnRRz7u3IstjpXHCawRLGs3Ff5xPoWuemMUhri.png', '2020-04-03 23:01:56', '2020-04-11 01:35:30'),
(24, 'دورة إجازة عبر الإنترنت', 'Online Ijazah course', 'لتحقيق أعلى مستوى من تلاوة القرآن على أكمل وجه. يقوم الطالب بتلاوة كل القرآن الكريم لمعلمه من الذاكرة ويحصل على شهادة رسمية \"إجازة\" مع \"سند\" لتعليم القرآن الكريم بقواعد التجويد. أيضا ، نقدم', 'For achieving the highest level of reciting quran perfectly. Student will recite all the Holy Quran to his/her teacher from memory and getting an official certificate “Ijazah”', '\"تلاوة إجازة\" لأولئك الذين لا يمكنهم حفظ كل القرآن الكريم', 'with “Sanad” for teaching quran with Tajweed Rules. Also,', 'whyus/4UcJEKUzU8cWrX8rk9p97P1wWxS55G06Dq78WWxx.png', '2020-04-03 23:02:14', '2020-04-11 01:39:31'),
(25, 'مرونة كاملة 24/7', 'Full flexibility 24/7', 'مرونة كاملة على مدار الساعة ، سبعة أيام في الأسبوع ، بعد العمل ، في عطلات نهاية الأسبوع ، أو في استراحة الغداء: في أي يوم وفي أي وقت تريد ، نحن هنا! نحن موجودون دائمًا في خدمتكم وخدمات القرآن الكريم', 'Total flexibility around the clock, seven days a week, after work, on weekends, or at lunch break: any day, any time you want, we are here! We are always present at your service and Holy Quran services', '356/30/24/7 مرونة كاملة', '356/30/24/7', 'whyus/YhTcqLsVZJL9SmDKKgO6q0Soxzti1ns59hPEICMR.png', '2020-03-28 10:17:46', '2020-04-11 12:20:13'),
(26, 'المعلمين المعتمدين', 'Certified Teachers', 'يتوفر الأزهر المعلم والمعلمة المهنية الأزهرية. ,  والمعلمين لدينا يجدونا   معظم لغات العالم !', 'Available Al-Azhar Teacher and Al-Azhar Professional Teacher. Our teachers find us in most of the world\'s languages!', 'معلمين  لديهم الخبرات الكبيره *', 'Teachers have great experiences', 'whyus/wNmwYDZQOrhenD4xEIU9cbRFb3f9LQ7ojWAs8IB8.png', '2020-03-28 10:18:02', '2020-04-11 01:12:19'),
(27, 'فئة تجريبية مجانية', 'Free Trial Class', 'احصل على أول صف تجريبي مجاني ولا يلزم الدفع. , سجل الان  واحصل علي  المحاضره  المجانيه , نحن سعداء بالتعامل معكم', 'Get your first free trial row and no payment required. Register now and get the free lecture. We are happy to do business with you', 'عروض ومحاضرات مجانيه', 'Free offers and lectures', 'whyus/NUbMfWnHqOahcfBPvnVVXdUo1wfRewf7qEvXqJMO.png', '2020-03-28 10:18:13', '2020-04-11 01:07:41'),
(28, '100٪ ضمان استعادة الاموال', '100% Money Back Guarantee', 'سنقوم برد أموالك إذا لم تكن راضيًا في غضون أسبوع. 100٪ ضمان استعادة الاموال.', 'We will refund your money if you are not satisfied within a week. 100% money back guarantee. ! Firstly, we are interested in meeting our students\' needs', '*توفير سهوله التعامل المادى  بكل الوسائل', 'Provide easy physical handling by all means *', 'whyus/WoiahTVPBWwljuCl0O7iwcoV8xFMf6iICNNbyCfc.png', '2020-03-28 10:20:14', '2020-04-11 01:17:42'),
(29, 'دورة الدراسات الإسلامية', 'Islamic Studies Course', 'كل ما تريد معرفته عن الإسلام: مجموعة من الدروس الإسلامية التي تقدم بطريقة سهلة وعملية عن العقيدة والفقه وسنة النبي محمد (صلى الله عليه وسلم).', 'All what you need to know about Islam: a set of Islamic lessons presented in an easy and practical way on Aqeeda, Feqh, Sunna of prophet Muhammed (PBUH).', 'بالإضافة إلى دروس خاصة حول السلوك الإسلامي العملي مثل: تكريم الوالدين ، احترام كبار السن ، زيارة المرضى', 'As well as special lessons about practical Islamic', 'whyus/aPNhcc5cKfSWcgmCZbXmzUr3wcXutw4WJIsfQ163.png', '2020-04-03 22:59:09', '2020-04-11 12:52:02'),
(30, 'تعتمد دورة التجويد الأساسية', 'The Basic Tajweed course', 'على شرح قواعد التجويد نظريا وتطبيقها بطريقة عملية وسهلة. يتعلم  أسماء قواعد التجويد مثل:الإخفاء وإدغم .. وغيرهم. بالإضافة إلى ذلك ، يتعلم ,ربط الحروف العربية وخصائصها', '100% Money Back Guarantee We will refund your money if you aren\'t satisfied in a week. 100% Money Back Guarantee. Laborum voluptas sed', '( وذلك لإتقان قراءة القرآن كما نزل النبي محمد (صلى الله عليه وسلم,', 'prophet Muhammed (PBUH).', 'whyus/W4DKsWZkshCZawo3iJI06coHsQKm7fOtDN5ZoEwm.png', '2020-04-03 23:01:36', '2020-04-11 02:00:07'),
(31, 'دورة   مصباح  الهدى', 'Al Huda lamp cycle', 'هي أسهل وأسرع طريقة لتعلم قراءة القرآن. يبدأ بتعلم حروف الأبجدية العربية الفردية. ثم تعلم حروف العلة (Fatha ، Khasra و Dhamma). بعد ذلك ، يتعلم الطلاب Sukoon و Shadda لممارسة النطق الصحيح لكل حرف. يتميز بكلمات تمارين عملية', 'It is the easiest and fastest way to learn to read the Quran. He begins to learn the letters of the individual Arabic alphabet. Then learn the vowels (Fatha, Khasra and Dhamma).', 'دورات مميزه', 'Featured courses', 'whyus/DyMnRRz7u3IstjpXHCawRLGs3Ff5xPoWuemMUhri.png', '2020-04-03 23:01:56', '2020-04-11 01:35:30'),
(32, 'دورة إجازة عبر الإنترنت', 'Online Ijazah course', 'لتحقيق أعلى مستوى من تلاوة القرآن على أكمل وجه. يقوم الطالب بتلاوة كل القرآن الكريم لمعلمه من الذاكرة ويحصل على شهادة رسمية \"إجازة\" مع \"سند\" لتعليم القرآن الكريم بقواعد التجويد. أيضا ، نقدم', 'For achieving the highest level of reciting quran perfectly. Student will recite all the Holy Quran to his/her teacher from memory and getting an official certificate “Ijazah”', '\"تلاوة إجازة\" لأولئك الذين لا يمكنهم حفظ كل القرآن الكريم', 'with “Sanad” for teaching quran with Tajweed Rules. Also,', 'whyus/4UcJEKUzU8cWrX8rk9p97P1wWxS55G06Dq78WWxx.png', '2020-04-03 23:02:14', '2020-04-11 01:39:31'),
(33, 'مرونة كاملة 24/7', 'Full flexibility 24/7', 'مرونة كاملة على مدار الساعة ، سبعة أيام في الأسبوع ، بعد العمل ، في عطلات نهاية الأسبوع ، أو في استراحة الغداء: في أي يوم وفي أي وقت تريد ، نحن هنا! نحن موجودون دائمًا في خدمتكم وخدمات القرآن الكريم', 'Total flexibility around the clock, seven days a week, after work, on weekends, or at lunch break: any day, any time you want, we are here! We are always present at your service and Holy Quran services', '356/30/24/7 مرونة كاملة', '356/30/24/7', 'whyus/YhTcqLsVZJL9SmDKKgO6q0Soxzti1ns59hPEICMR.png', '2020-03-28 10:17:46', '2020-04-11 12:20:13'),
(34, 'المعلمين المعتمدين', 'Certified Teachers', 'يتوفر الأزهر المعلم والمعلمة المهنية الأزهرية. ,  والمعلمين لدينا يجدونا   معظم لغات العالم !', 'Available Al-Azhar Teacher and Al-Azhar Professional Teacher. Our teachers find us in most of the world\'s languages!', 'معلمين  لديهم الخبرات الكبيره *', 'Teachers have great experiences', 'whyus/wNmwYDZQOrhenD4xEIU9cbRFb3f9LQ7ojWAs8IB8.png', '2020-03-28 10:18:02', '2020-04-11 01:12:19'),
(35, 'فئة تجريبية مجانية', 'Free Trial Class', 'احصل على أول صف تجريبي مجاني ولا يلزم الدفع. , سجل الان  واحصل علي  المحاضره  المجانيه , نحن سعداء بالتعامل معكم', 'Get your first free trial row and no payment required. Register now and get the free lecture. We are happy to do business with you', 'عروض ومحاضرات مجانيه', 'Free offers and lectures', 'whyus/NUbMfWnHqOahcfBPvnVVXdUo1wfRewf7qEvXqJMO.png', '2020-03-28 10:18:13', '2020-04-11 01:07:41'),
(36, '100٪ ضمان استعادة الاموال', '100% Money Back Guarantee', 'سنقوم برد أموالك إذا لم تكن راضيًا في غضون أسبوع. 100٪ ضمان استعادة الاموال.', 'We will refund your money if you are not satisfied within a week. 100% money back guarantee. ! Firstly, we are interested in meeting our students\' needs', '*توفير سهوله التعامل المادى  بكل الوسائل', 'Provide easy physical handling by all means *', 'whyus/WoiahTVPBWwljuCl0O7iwcoV8xFMf6iICNNbyCfc.png', '2020-03-28 10:20:14', '2020-04-11 01:17:42'),
(37, 'دورة الدراسات الإسلامية', 'Islamic Studies Course', 'كل ما تريد معرفته عن الإسلام: مجموعة من الدروس الإسلامية التي تقدم بطريقة سهلة وعملية عن العقيدة والفقه وسنة النبي محمد (صلى الله عليه وسلم).', 'All what you need to know about Islam: a set of Islamic lessons presented in an easy and practical way on Aqeeda, Feqh, Sunna of prophet Muhammed (PBUH).', 'بالإضافة إلى دروس خاصة حول السلوك الإسلامي العملي مثل: تكريم الوالدين ، احترام كبار السن ، زيارة المرضى', 'As well as special lessons about practical Islamic', 'whyus/aPNhcc5cKfSWcgmCZbXmzUr3wcXutw4WJIsfQ163.png', '2020-04-03 22:59:09', '2020-04-11 12:52:02'),
(38, 'تعتمد دورة التجويد الأساسية', 'The Basic Tajweed course', 'على شرح قواعد التجويد نظريا وتطبيقها بطريقة عملية وسهلة. يتعلم  أسماء قواعد التجويد مثل:الإخفاء وإدغم .. وغيرهم. بالإضافة إلى ذلك ، يتعلم ,ربط الحروف العربية وخصائصها', '100% Money Back Guarantee We will refund your money if you aren\'t satisfied in a week. 100% Money Back Guarantee. Laborum voluptas sed', '( وذلك لإتقان قراءة القرآن كما نزل النبي محمد (صلى الله عليه وسلم,', 'prophet Muhammed (PBUH).', 'whyus/W4DKsWZkshCZawo3iJI06coHsQKm7fOtDN5ZoEwm.png', '2020-04-03 23:01:36', '2020-04-11 02:00:07'),
(39, 'دورة   مصباح  الهدى', 'Al Huda lamp cycle', 'هي أسهل وأسرع طريقة لتعلم قراءة القرآن. يبدأ بتعلم حروف الأبجدية العربية الفردية. ثم تعلم حروف العلة (Fatha ، Khasra و Dhamma). بعد ذلك ، يتعلم الطلاب Sukoon و Shadda لممارسة النطق الصحيح لكل حرف. يتميز بكلمات تمارين عملية', 'It is the easiest and fastest way to learn to read the Quran. He begins to learn the letters of the individual Arabic alphabet. Then learn the vowels (Fatha, Khasra and Dhamma).', 'دورات مميزه', 'Featured courses', 'whyus/DyMnRRz7u3IstjpXHCawRLGs3Ff5xPoWuemMUhri.png', '2020-04-03 23:01:56', '2020-04-11 01:35:30'),
(40, 'دورة إجازة عبر الإنترنت', 'Online Ijazah course', 'لتحقيق أعلى مستوى من تلاوة القرآن على أكمل وجه. يقوم الطالب بتلاوة كل القرآن الكريم لمعلمه من الذاكرة ويحصل على شهادة رسمية \"إجازة\" مع \"سند\" لتعليم القرآن الكريم بقواعد التجويد. أيضا ، نقدم', 'For achieving the highest level of reciting quran perfectly. Student will recite all the Holy Quran to his/her teacher from memory and getting an official certificate “Ijazah”', '\"تلاوة إجازة\" لأولئك الذين لا يمكنهم حفظ كل القرآن الكريم', 'with “Sanad” for teaching quran with Tajweed Rules. Also,', 'whyus/4UcJEKUzU8cWrX8rk9p97P1wWxS55G06Dq78WWxx.png', '2020-04-03 23:02:14', '2020-04-11 01:39:31'),
(41, 'مرونة كاملة 24/7', 'Full flexibility 24/7', 'مرونة كاملة على مدار الساعة ، سبعة أيام في الأسبوع ، بعد العمل ، في عطلات نهاية الأسبوع ، أو في استراحة الغداء: في أي يوم وفي أي وقت تريد ، نحن هنا! نحن موجودون دائمًا في خدمتكم وخدمات القرآن الكريم', 'Total flexibility around the clock, seven days a week, after work, on weekends, or at lunch break: any day, any time you want, we are here! We are always present at your service and Holy Quran services', '356/30/24/7 مرونة كاملة', '356/30/24/7', 'whyus/YhTcqLsVZJL9SmDKKgO6q0Soxzti1ns59hPEICMR.png', '2020-03-28 10:17:46', '2020-04-11 12:20:13'),
(42, 'المعلمين المعتمدين', 'Certified Teachers', 'يتوفر الأزهر المعلم والمعلمة المهنية الأزهرية. ,  والمعلمين لدينا يجدونا   معظم لغات العالم !', 'Available Al-Azhar Teacher and Al-Azhar Professional Teacher. Our teachers find us in most of the world\'s languages!', 'معلمين  لديهم الخبرات الكبيره *', 'Teachers have great experiences', 'whyus/wNmwYDZQOrhenD4xEIU9cbRFb3f9LQ7ojWAs8IB8.png', '2020-03-28 10:18:02', '2020-04-11 01:12:19'),
(43, 'فئة تجريبية مجانية', 'Free Trial Class', 'احصل على أول صف تجريبي مجاني ولا يلزم الدفع. , سجل الان  واحصل علي  المحاضره  المجانيه , نحن سعداء بالتعامل معكم', 'Get your first free trial row and no payment required. Register now and get the free lecture. We are happy to do business with you', 'عروض ومحاضرات مجانيه', 'Free offers and lectures', 'whyus/NUbMfWnHqOahcfBPvnVVXdUo1wfRewf7qEvXqJMO.png', '2020-03-28 10:18:13', '2020-04-11 01:07:41'),
(44, '100٪ ضمان استعادة الاموال', '100% Money Back Guarantee', 'سنقوم برد أموالك إذا لم تكن راضيًا في غضون أسبوع. 100٪ ضمان استعادة الاموال.', 'We will refund your money if you are not satisfied within a week. 100% money back guarantee. ! Firstly, we are interested in meeting our students\' needs', '*توفير سهوله التعامل المادى  بكل الوسائل', 'Provide easy physical handling by all means *', 'whyus/WoiahTVPBWwljuCl0O7iwcoV8xFMf6iICNNbyCfc.png', '2020-03-28 10:20:14', '2020-04-11 01:17:42'),
(45, 'دورة الدراسات الإسلامية', 'Islamic Studies Course', 'كل ما تريد معرفته عن الإسلام: مجموعة من الدروس الإسلامية التي تقدم بطريقة سهلة وعملية عن العقيدة والفقه وسنة النبي محمد (صلى الله عليه وسلم).', 'All what you need to know about Islam: a set of Islamic lessons presented in an easy and practical way on Aqeeda, Feqh, Sunna of prophet Muhammed (PBUH).', 'بالإضافة إلى دروس خاصة حول السلوك الإسلامي العملي مثل: تكريم الوالدين ، احترام كبار السن ، زيارة المرضى', 'As well as special lessons about practical Islamic', 'whyus/aPNhcc5cKfSWcgmCZbXmzUr3wcXutw4WJIsfQ163.png', '2020-04-03 22:59:09', '2020-04-11 12:52:02'),
(46, 'تعتمد دورة التجويد الأساسية', 'The Basic Tajweed course', 'على شرح قواعد التجويد نظريا وتطبيقها بطريقة عملية وسهلة. يتعلم  أسماء قواعد التجويد مثل:الإخفاء وإدغم .. وغيرهم. بالإضافة إلى ذلك ، يتعلم ,ربط الحروف العربية وخصائصها', '100% Money Back Guarantee We will refund your money if you aren\'t satisfied in a week. 100% Money Back Guarantee. Laborum voluptas sed', '( وذلك لإتقان قراءة القرآن كما نزل النبي محمد (صلى الله عليه وسلم,', 'prophet Muhammed (PBUH).', 'whyus/W4DKsWZkshCZawo3iJI06coHsQKm7fOtDN5ZoEwm.png', '2020-04-03 23:01:36', '2020-04-11 02:00:07'),
(47, 'دورة   مصباح  الهدى', 'Al Huda lamp cycle', 'هي أسهل وأسرع طريقة لتعلم قراءة القرآن. يبدأ بتعلم حروف الأبجدية العربية الفردية. ثم تعلم حروف العلة (Fatha ، Khasra و Dhamma). بعد ذلك ، يتعلم الطلاب Sukoon و Shadda لممارسة النطق الصحيح لكل حرف. يتميز بكلمات تمارين عملية', 'It is the easiest and fastest way to learn to read the Quran. He begins to learn the letters of the individual Arabic alphabet. Then learn the vowels (Fatha, Khasra and Dhamma).', 'دورات مميزه', 'Featured courses', 'whyus/DyMnRRz7u3IstjpXHCawRLGs3Ff5xPoWuemMUhri.png', '2020-04-03 23:01:56', '2020-04-11 01:35:30'),
(48, 'دورة إجازة عبر الإنترنت', 'Online Ijazah course', 'لتحقيق أعلى مستوى من تلاوة القرآن على أكمل وجه. يقوم الطالب بتلاوة كل القرآن الكريم لمعلمه من الذاكرة ويحصل على شهادة رسمية \"إجازة\" مع \"سند\" لتعليم القرآن الكريم بقواعد التجويد. أيضا ، نقدم', 'For achieving the highest level of reciting quran perfectly. Student will recite all the Holy Quran to his/her teacher from memory and getting an official certificate “Ijazah”', '\"تلاوة إجازة\" لأولئك الذين لا يمكنهم حفظ كل القرآن الكريم', 'with “Sanad” for teaching quran with Tajweed Rules. Also,', 'whyus/4UcJEKUzU8cWrX8rk9p97P1wWxS55G06Dq78WWxx.png', '2020-04-03 23:02:14', '2020-04-11 01:39:31'),
(49, 'مرونة كاملة 24/7', 'Full flexibility 24/7', 'مرونة كاملة على مدار الساعة ، سبعة أيام في الأسبوع ، بعد العمل ، في عطلات نهاية الأسبوع ، أو في استراحة الغداء: في أي يوم وفي أي وقت تريد ، نحن هنا! نحن موجودون دائمًا في خدمتكم وخدمات القرآن الكريم', 'Total flexibility around the clock, seven days a week, after work, on weekends, or at lunch break: any day, any time you want, we are here! We are always present at your service and Holy Quran services', '356/30/24/7 مرونة كاملة', '356/30/24/7', 'whyus/YhTcqLsVZJL9SmDKKgO6q0Soxzti1ns59hPEICMR.png', '2020-03-28 10:17:46', '2020-04-11 12:20:13'),
(50, 'المعلمين المعتمدين', 'Certified Teachers', 'يتوفر الأزهر المعلم والمعلمة المهنية الأزهرية. ,  والمعلمين لدينا يجدونا   معظم لغات العالم !', 'Available Al-Azhar Teacher and Al-Azhar Professional Teacher. Our teachers find us in most of the world\'s languages!', 'معلمين  لديهم الخبرات الكبيره *', 'Teachers have great experiences', 'whyus/wNmwYDZQOrhenD4xEIU9cbRFb3f9LQ7ojWAs8IB8.png', '2020-03-28 10:18:02', '2020-04-11 01:12:19'),
(51, 'فئة تجريبية مجانية', 'Free Trial Class', 'احصل على أول صف تجريبي مجاني ولا يلزم الدفع. , سجل الان  واحصل علي  المحاضره  المجانيه , نحن سعداء بالتعامل معكم', 'Get your first free trial row and no payment required. Register now and get the free lecture. We are happy to do business with you', 'عروض ومحاضرات مجانيه', 'Free offers and lectures', 'whyus/NUbMfWnHqOahcfBPvnVVXdUo1wfRewf7qEvXqJMO.png', '2020-03-28 10:18:13', '2020-04-11 01:07:41'),
(52, '100٪ ضمان استعادة الاموال', '100% Money Back Guarantee', 'سنقوم برد أموالك إذا لم تكن راضيًا في غضون أسبوع. 100٪ ضمان استعادة الاموال.', 'We will refund your money if you are not satisfied within a week. 100% money back guarantee. ! Firstly, we are interested in meeting our students\' needs', '*توفير سهوله التعامل المادى  بكل الوسائل', 'Provide easy physical handling by all means *', 'whyus/WoiahTVPBWwljuCl0O7iwcoV8xFMf6iICNNbyCfc.png', '2020-03-28 10:20:14', '2020-04-11 01:17:42'),
(53, 'دورة الدراسات الإسلامية', 'Islamic Studies Course', 'كل ما تريد معرفته عن الإسلام: مجموعة من الدروس الإسلامية التي تقدم بطريقة سهلة وعملية عن العقيدة والفقه وسنة النبي محمد (صلى الله عليه وسلم).', 'All what you need to know about Islam: a set of Islamic lessons presented in an easy and practical way on Aqeeda, Feqh, Sunna of prophet Muhammed (PBUH).', 'بالإضافة إلى دروس خاصة حول السلوك الإسلامي العملي مثل: تكريم الوالدين ، احترام كبار السن ، زيارة المرضى', 'As well as special lessons about practical Islamic', 'whyus/aPNhcc5cKfSWcgmCZbXmzUr3wcXutw4WJIsfQ163.png', '2020-04-03 22:59:09', '2020-04-11 12:52:02'),
(54, 'تعتمد دورة التجويد الأساسية', 'The Basic Tajweed course', 'على شرح قواعد التجويد نظريا وتطبيقها بطريقة عملية وسهلة. يتعلم  أسماء قواعد التجويد مثل:الإخفاء وإدغم .. وغيرهم. بالإضافة إلى ذلك ، يتعلم ,ربط الحروف العربية وخصائصها', '100% Money Back Guarantee We will refund your money if you aren\'t satisfied in a week. 100% Money Back Guarantee. Laborum voluptas sed', '( وذلك لإتقان قراءة القرآن كما نزل النبي محمد (صلى الله عليه وسلم,', 'prophet Muhammed (PBUH).', 'whyus/W4DKsWZkshCZawo3iJI06coHsQKm7fOtDN5ZoEwm.png', '2020-04-03 23:01:36', '2020-04-11 02:00:07'),
(55, 'دورة   مصباح  الهدى', 'Al Huda lamp cycle', 'هي أسهل وأسرع طريقة لتعلم قراءة القرآن. يبدأ بتعلم حروف الأبجدية العربية الفردية. ثم تعلم حروف العلة (Fatha ، Khasra و Dhamma). بعد ذلك ، يتعلم الطلاب Sukoon و Shadda لممارسة النطق الصحيح لكل حرف. يتميز بكلمات تمارين عملية', 'It is the easiest and fastest way to learn to read the Quran. He begins to learn the letters of the individual Arabic alphabet. Then learn the vowels (Fatha, Khasra and Dhamma).', 'دورات مميزه', 'Featured courses', 'whyus/DyMnRRz7u3IstjpXHCawRLGs3Ff5xPoWuemMUhri.png', '2020-04-03 23:01:56', '2020-04-11 01:35:30'),
(56, 'دورة إجازة عبر الإنترنت', 'Online Ijazah course', 'لتحقيق أعلى مستوى من تلاوة القرآن على أكمل وجه. يقوم الطالب بتلاوة كل القرآن الكريم لمعلمه من الذاكرة ويحصل على شهادة رسمية \"إجازة\" مع \"سند\" لتعليم القرآن الكريم بقواعد التجويد. أيضا ، نقدم', 'For achieving the highest level of reciting quran perfectly. Student will recite all the Holy Quran to his/her teacher from memory and getting an official certificate “Ijazah”', '\"تلاوة إجازة\" لأولئك الذين لا يمكنهم حفظ كل القرآن الكريم', 'with “Sanad” for teaching quran with Tajweed Rules. Also,', 'whyus/4UcJEKUzU8cWrX8rk9p97P1wWxS55G06Dq78WWxx.png', '2020-04-03 23:02:14', '2020-04-11 01:39:31'),
(57, 'مرونة كاملة 24/7', 'Full flexibility 24/7', 'مرونة كاملة على مدار الساعة ، سبعة أيام في الأسبوع ، بعد العمل ، في عطلات نهاية الأسبوع ، أو في استراحة الغداء: في أي يوم وفي أي وقت تريد ، نحن هنا! نحن موجودون دائمًا في خدمتكم وخدمات القرآن الكريم', 'Total flexibility around the clock, seven days a week, after work, on weekends, or at lunch break: any day, any time you want, we are here! We are always present at your service and Holy Quran services', '356/30/24/7 مرونة كاملة', '356/30/24/7', 'whyus/YhTcqLsVZJL9SmDKKgO6q0Soxzti1ns59hPEICMR.png', '2020-03-28 10:17:46', '2020-04-11 12:20:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `halfhour`
--
ALTER TABLE `halfhour`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `hour`
--
ALTER TABLE `hour`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `slidertext`
--
ALTER TABLE `slidertext`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stat`
--
ALTER TABLE `stat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `teachersignup`
--
ALTER TABLE `teachersignup`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `whyus`
--
ALTER TABLE `whyus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
