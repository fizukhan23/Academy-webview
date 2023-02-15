-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 14, 2023 at 03:35 PM
-- Server version: 10.3.37-MariaDB-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `celebritybytes_Academy`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `option` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `tit1` varchar(255) DEFAULT NULL,
  `descrip1` varchar(255) DEFAULT NULL,
  `tit2` varchar(255) DEFAULT NULL,
  `descrip2` varchar(255) DEFAULT NULL,
  `tit3` varchar(255) DEFAULT NULL,
  `descrip3` varchar(255) DEFAULT NULL,
  `tit4` varchar(255) DEFAULT NULL,
  `descrip4` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `option`, `image`, `title`, `description`, `tit1`, `descrip1`, `tit2`, `descrip2`, `tit3`, `descrip3`, `tit4`, `descrip4`, `created_at`, `updated_at`) VALUES
(2, 'What We Do', 'image-1675068006.jpg', 'type here', 'type here ur description', 'REQUIRING STRENGTH', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa', 'FIEXIBILITY', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa', 'BEAUTY OF EXERCISE', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa', 'BALANCE', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa', '2023-01-27 04:14:13', '2023-01-30 06:35:20'),
(3, 'About Us', 'image-1675230180.jpg', 'about us', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-30 02:21:30', '2023-02-01 00:13:18');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `title2` varchar(255) NOT NULL,
  `link2` varchar(255) NOT NULL,
  `img3` varchar(255) DEFAULT NULL,
  `title3` varchar(255) NOT NULL,
  `link3` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `photo`, `video`, `name`, `link`, `img2`, `title2`, `link2`, `img3`, `title3`, `link3`, `created_at`, `updated_at`) VALUES
(5, 'photo-1675148864.jpg', 'video-1675148864.mp4', 'ACADEMY', 'service-1.html', 'img2-1675148864.jpg', 'EVENTS', 'service-1.html', 'img3-1675148870.jpg', 'STUNT', 'service-1.html', '2023-01-31 01:37:50', '2023-01-31 01:37:50');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `option` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `option`, `category`, `created_at`, `updated_at`) VALUES
(4, '', 'any name', '2023-01-17 13:27:41', '2023-01-17 13:27:41'),
(5, 'Product', 'shoes', '2023-01-18 02:17:33', '2023-01-19 00:55:30');

-- --------------------------------------------------------

--
-- Table structure for table `combine`
--

CREATE TABLE `combine` (
  `id` int(11) NOT NULL,
  `option` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `paragraph` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `combine`
--

INSERT INTO `combine` (`id`, `option`, `heading`, `paragraph`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Return Policy', 'return policy', 'I am an interior designer from Brooklyn, with a strong focus in interior and furniture design. I love to get new experiences and always learn', 'from my surroundings. I\'ve done more than 50 projects. You can check it through portfolio section on this website. I looking forward to any opportunities and challenges.', '2023-01-27 04:04:17', '2023-02-06 23:55:51'),
(3, 'Shipping', 'Shipping', 'I am an interior designer from', 'Brooklyn, with a strong focus in interior and furniture design. I nges.', '2023-02-06 07:32:47', '2023-02-06 07:32:47'),
(4, 'Course Guidline', 'Course Guidline', 'I am an interior designer from Brooklyn, with a strong focus in interior and furniture design. I love to get new experiences and always learn', 'from my surroundings. I\'ve done more than 50 projects. You can check it through portfolio section on this website. I looking forward to any opportunities and challenges.', '2023-02-06 23:27:36', '2023-02-06 23:27:36'),
(5, 'Term and Condition', 'Term and Condition', 'I am an interior designer from Brooklyn, with a strong focus in interior and furniture design. I love to get new experiences and always learn', 'from my surroundings. I\'ve done more than 50 projects. You can check it through portfolio section on this website. I looking forward to any opportunities and challenges.', '2023-02-06 23:55:25', '2023-02-06 23:55:25'),
(6, 'Privacy Policy', 'Privacy Policy', 'I am an interior designer from Brooklyn, with a strong focus in interior and furniture design. I love to get new experiences and always learn', 'I am an interior designer from Brooklyn, with a strong focus in interior and furniture design. I love to get new experiences and always learn', '2023-02-07 00:03:03', '2023-02-07 00:03:03');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `catid` varchar(255) NOT NULL,
  `subid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `syllebus` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `time` time(6) NOT NULL,
  `trainer` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `accreditation` varchar(255) NOT NULL,
  `pre_reuqisite` varchar(255) NOT NULL,
  `mode` varchar(255) NOT NULL,
  `video` varchar(255) DEFAULT NULL,
  `equipment_need` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `catid`, `subid`, `name`, `description`, `syllebus`, `duration`, `time`, `trainer`, `price`, `accreditation`, `pre_reuqisite`, `mode`, `video`, `equipment_need`, `created_at`, `updated_at`) VALUES
(8, '5', '1', 'sdf', 'type here', 'fgf', '45', '00:00:03.000000', 'name', '10', 'type here', 'type here', 'Online', 'video-1674118058.mp4', 'ddfd', '2023-01-19 03:17:38', '2023-01-19 03:17:53'),
(9, '5', '1', 'tyoo', 'type here', 'type here', '34', '00:00:03.000000', 'name', '23.8', 'type here', 'dff', 'Online', '[\"video-1672125722.mp4\",\"Stop Motion (A.Pantoja).mp4\"]', 'ddfd', '2023-01-19 06:37:47', '2023-01-19 06:37:47');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mainbanner`
--

CREATE TABLE `mainbanner` (
  `id` int(11) NOT NULL,
  `video` varchar(255) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mainbanner`
--

INSERT INTO `mainbanner` (`id`, `video`, `images`, `created_at`, `updated_at`) VALUES
(1, 'video-1674306090.mp4', 'images-1675243110.jpg', '2023-01-21 07:31:30', '2023-02-01 03:48:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(6, '2023_02_06_092738_create_sessions_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pro_report`
--

CREATE TABLE `pro_report` (
  `id` int(11) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `skill` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pro_report`
--

INSERT INTO `pro_report` (`id`, `student_id`, `skill`, `description`, `created_at`, `updated_at`) VALUES
(2, '4', '2022-12-29', 'Courses may be sorted by an admin or manager from Administration>Site administration>Courses>Manage courses and categories.', '2023-01-18 05:29:11', '2023-01-19 03:59:03');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('xdQSDAPFa6qEHZfTlD4UudkHr4DolUQLBdyyWzCQ', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36 Edg/109.0.1518.78', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiWG9ZdlRQemhrR1JVa0NjOTZMS1lCN2VrR1lCYWtsa3NLN1pPVE82RSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZGRzdHVkZW50Ijt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRNYlF6MnFWa3o1eU1NcWUwcG9XUC5lSy5NbHJZUXVUNVdzVVE3T3hPdkVYYkdRdllUVlk1QyI7fQ==', 1675676972),
('ytCL53Eeu7FUnnWWUfpCRfqfzipFXFSpBUmFfeEW', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36 Edg/109.0.1518.78', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiOHpDTDY1RDhyZjZFam1RclVySUUwUW5ZTkh1UkpmdDN5Z1ExRUdXdSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZGRtYWluYmFubmVyIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRNYlF6MnFWa3o1eU1NcWUwcG9XUC5lSy5NbHJZUXVUNVdzVVE3T3hPdkVYYkdRdllUVlk1QyI7fQ==', 1675684311);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `res_party` varchar(200) NOT NULL,
  `res_partyid` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `parent_phone` varchar(255) NOT NULL,
  `stu_course` varchar(255) NOT NULL,
  `mem_fes` varchar(255) NOT NULL,
  `mem_date` date NOT NULL,
  `monthly_fee` varchar(255) NOT NULL,
  `mon_date` date NOT NULL,
  `regis_fee` varchar(255) NOT NULL,
  `regis_date` date NOT NULL,
  `re_takingcourse` varchar(255) NOT NULL,
  `remark` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `surname`, `DOB`, `age`, `gender`, `image`, `res_party`, `res_partyid`, `address`, `postal_code`, `country`, `phone`, `parent_phone`, `stu_course`, `mem_fes`, `mem_date`, `monthly_fee`, `mon_date`, `regis_fee`, `regis_date`, `re_takingcourse`, `remark`, `created_at`, `updated_at`) VALUES
(4, 'Sorting', 'courses', '2022-12-28', '23', 'Female', 'image-1673952348.png', 'gfhfgh', '665', 'indore mp', '234', 'India', '999777000', '999777000', 'any name', '4500', '2023-01-04', '670', '2023-01-20', '56', '2023-01-20', 'type ur reason', '45', '2023-01-17 05:15:48', '2023-01-19 03:34:59');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `subcategory` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `subcategory`, `created_at`, `updated_at`) VALUES
(1, 'girl', '2023-01-17 13:28:21', '2023-01-19 01:01:09');

-- --------------------------------------------------------

--
-- Table structure for table `trainner`
--

CREATE TABLE `trainner` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(200) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `apptitude` varchar(255) NOT NULL,
  `student_evaluation` varchar(255) NOT NULL,
  `convenient_hours` varchar(255) NOT NULL,
  `convenient_days` varchar(255) NOT NULL,
  `workshop_tit` varchar(255) DEFAULT NULL,
  `workshop_description` varchar(255) DEFAULT NULL,
  `workshop_date` varchar(255) DEFAULT NULL,
  `workshop_to` varchar(255) DEFAULT NULL,
  `workshop_duration` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trainner`
--

INSERT INTO `trainner` (`id`, `name`, `surname`, `DOB`, `age`, `gender`, `image`, `status`, `address`, `country`, `postal_code`, `mobile`, `qualification`, `apptitude`, `student_evaluation`, `convenient_hours`, `convenient_days`, `workshop_tit`, `workshop_description`, `workshop_date`, `workshop_to`, `workshop_duration`, `created_at`, `updated_at`) VALUES
(2, 'khan', 'patel', '2023-01-04', '33', 'Female', NULL, 'Unmarride', 'indore mp', 'India', '234', '999777000', 'qualification-1673426088.docx', 'text', 'type here', 'type here', '23', NULL, 'type heere any description', '2022-12-29', NULL, '23days', '2023-01-11 03:04:48', '2023-01-11 03:04:48'),
(4, 'Sorting', 'courses', '2022-12-30', '23', 'Female', 'image-1673958516.jpg', 'Marride', 'indore mp', 'India', '234', '999777000', 'qualification-1673958516.docx', 'text', 'type here', '56', '23', NULL, NULL, NULL, NULL, NULL, '2023-01-17 06:58:36', '2023-01-17 06:58:36'),
(5, 'erwe', 'courses', '2023-01-04', '23', 'Female', 'image-1674129799.jpg', 'Unmarride', 'indore mp', 'India', '234', '999777000', '[\"app (2).pdf\",\"text.pdf\"]', 'ertrt', 'sfdfdf', '32', '4', NULL, NULL, NULL, NULL, NULL, '2023-01-19 06:33:19', '2023-01-19 06:33:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin@gmail.com', NULL, '$2y$10$MbQz2qVkz5yMMqe0poWP.eK.MlrYQuT5WsUQ7OxOvEXbGQvYTVY5C', NULL, NULL, NULL, NULL, '2023-02-06 04:03:49', '2023-02-06 04:03:49');

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `id` int(11) NOT NULL,
  `coach_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `duration` time(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`id`, `coach_id`, `title`, `from_date`, `to_date`, `description`, `duration`, `created_at`, `updated_at`) VALUES
(2, '2', 'hjf', '2023-01-14', '2023-01-10', 'type here', '00:00:24.000000', '2023-01-18 04:46:27', '2023-01-19 04:42:10'),
(3, '4', '7', '2023-01-19', '2023-01-12', 'Stagline', '00:00:02.000000', '2023-01-18 04:58:02', '2023-01-18 04:58:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `combine`
--
ALTER TABLE `combine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `mainbanner`
--
ALTER TABLE `mainbanner`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pro_report`
--
ALTER TABLE `pro_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainner`
--
ALTER TABLE `trainner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `combine`
--
ALTER TABLE `combine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mainbanner`
--
ALTER TABLE `mainbanner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pro_report`
--
ALTER TABLE `pro_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
