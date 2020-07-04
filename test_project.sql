-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2020 at 08:01 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin123');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_07_03_174250_create_data_table', 2),
(4, '2020_07_03_175333_create_posts_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `created_at`, `updated_at`, `title`, `link`, `type`, `section`, `details`, `status`) VALUES
(5, '2020-07-04 03:19:34', '2020-07-04 03:19:34', 'What Happened to the Bodies From the Titanic?', 'https://www.youtube.com/embed/Y3Qa-1o26CI', 'video', 'section1', 'If you like this video - put Thumb Up button (please) and \r\nSubscribe to Ridddle channel. We will make this universe smarter together!\r\nOkay, okay. I got to go..... See You Soooooooooooooooon dudes ;)', 1),
(6, '2020-07-04 03:22:47', '2020-07-04 03:22:47', 'What Happened to the Bodies From the Titanic', 'https://www.youtube.com/embed/Y3Qa-1o26CI', 'video', 'section1', 'If you like this video - put Thumb Up button (please) and \r\nSubscribe to Ridddle channel. We will make this universe smarter together!\r\nOkay, okay. I got to go..... See You Soooooooooooooooon dudes ;)', 1),
(7, '2020-07-04 04:37:53', '2020-07-04 04:37:53', 'The Most Mysterious and Scary Sounds Ever Recorded in Space', 'https://www.youtube.com/embed/hTHOzVzd_-8', 'video', 'section1', 'If you like this video - put Thumb Up button (please) and \r\nSubscribe to Ridddle channel. We will make this universe smarter together!\r\nOkay, okay. I got to go..... See You Soooooooooooooooon dudes ;)', 0),
(8, '2020-07-04 05:21:13', '2020-07-04 05:21:13', 'She Is A Little Big\"', 'https://www.youtube.com/embed/52PtNDXTvfU', 'video', 'section1', 'Tlc react epic\r\nFloor Gang Merch! https://represent.com/store/pewdiepie (Thank you)\r\nSubscribe to become a FLOOR GANG Member here: https://www.youtube.com/channel/UC-lH...\r\nGet exclusive epic pewdiepie inside epic access and huge PP!\r\n\r\nOutro: add Just Die Already as wishlist #ad: https://store.steampowered.com/app/97...\r\n\r\nAnd Check out https://youtu.be/FQgLsYOKP8w Arkade Blaster Pro! #ad', 0),
(9, '2020-07-04 05:50:43', '2020-07-04 05:50:43', 'How Big Can a Rocket Actually Be? Size Comparison.', 'https://placeimg.com/640/480/any', 'post', 'section2', 'https://placeimg.com/100/100/any', 1),
(10, '2020-07-04 07:01:01', '2020-07-04 07:01:01', 'test', 'http://placeimg.com/640/480/any', 'post', 'section2', 'rextcgygubhijok', 1),
(11, '2020-07-04 07:01:01', '2020-07-04 07:01:01', 'Lorem ipsum dolor sit amet ', 'http://placeimg.com/640/480/any', 'post', 'section2', 'consectetur adipisicing elit. Temporibus nostrum adipisci consequuntur nobis? Voluptas laborum velit, voluptatem numquam dolores minus exercitationem repudiandae qui eum explicabo soluta, itaque impedit excepturi sit.', 0),
(14, '2020-07-04 07:01:01', '2020-07-04 07:01:01', 'Lorem ipsum ', 'https://placeimg.com/640/480/any', 'post', 'section2', 'consectetur adipisicing elit. Temporibus nostrum adipisci consequuntur nobis? Voluptas laborum velit, voluptatem numquam dolores minus exercitationem repudiandae qui eum explicabo soluta, itaque impedit excepturi sit.', 0),
(15, '2020-07-04 07:19:03', '2020-07-04 07:19:03', 'rerum ipsa eveniet libero alias', 'https://placeimg.com/640/480/any', 'post', 'section2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore officia harum in corporis sed. Hic ipsam aliquam sit expedita cumque reprehenderit vel, doloribus nesciunt ad, rerum ipsa eveniet libero alias.', 1),
(16, '2020-07-04 07:19:55', '2020-07-04 07:19:55', 'expedita cumque reprehenderit ve', 'https://placeimg.com/640/480/any', 'post', 'section2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore officia harum in corporis sed. Hic ipsam aliquam sit expedita cumque reprehenderit vel, doloribus nesciunt ad, rerum ipsa eveniet libero alias.', 0),
(17, '2020-07-04 10:46:03', '2020-07-04 10:46:03', 'Killswitch Engage - The Signal Fire (First Time Hearing) TM Reacts (2LM Reaction)', 'https://www.youtube.com/embed/iwZ8PYkJcYY', 'video', 'section1', 'Wow! This is my first time ever listening to metal music yet alone this is my first time ever hearing and reacting to Killswitch Engage. i have really been missing out on all types of music but this right here is at the peak of all misses. Metal music will put you in a different mind state and its crazy!', 0),
(19, '2020-07-04 11:52:04', '2020-07-04 11:52:04', 'First Time Hearing!! Wage War - The River \"Official Video\" TM Reacts (2LM Reaction)', 'https://www.youtube.com/embed/cQhEdROJfCo', 'video', 'section1', 'All I\'m going to say without spoiling anything in this video is! This is one reaction and video you don\'t want to miss. For the first time ever I\'m diving into Wage War so experience with me! Enjoy!', 0),
(20, '2020-07-04 11:53:10', '2020-07-04 11:53:10', 'testing purpose', 'https://placeimg.com/640/480/any', 'post', 'section2', 'All I\'m going to say without spoiling anything in this video is! This is one reaction and video you don\'t want to miss. For the first time ever I\'m diving into Wage War so experience with me! Enjoy!', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
