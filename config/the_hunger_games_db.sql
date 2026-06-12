-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 12, 2026 at 01:25 PM
-- Server version: 8.0.45
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `the_hunger_games_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `characters`
--

CREATE TABLE `characters` (
  `id` int NOT NULL,
  `movie_id` int NOT NULL,
  `character_name` varchar(100) NOT NULL,
  `role_type` enum('Utama','Pendukung','Antagonis') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `characters`
--

INSERT INTO `characters` (`id`, `movie_id`, `character_name`, `role_type`) VALUES
(1, 1, 'Katniss Everdeen', 'Utama'),
(2, 1, 'Peeta Mellark', 'Pendukung'),
(3, 1, 'Gale Hawthorne', 'Pendukung'),
(4, 1, 'Haymitch Abernathy', 'Pendukung'),
(5, 1, 'Effie Trinket', 'Pendukung'),
(6, 1, 'Primrose Everdeen', 'Pendukung'),
(7, 1, 'Cinna', 'Pendukung'),
(8, 1, 'Rue', 'Pendukung'),
(9, 1, 'President Snow', 'Antagonis'),
(10, 1, 'Cato', 'Antagonis'),
(11, 1, 'Seneca Crane', 'Antagonis'),
(12, 2, 'Katniss Everdeen', 'Utama'),
(13, 2, 'Peeta Mellark', 'Pendukung'),
(14, 2, 'Finnick Odair', 'Pendukung'),
(15, 2, 'Johanna Mason', 'Pendukung'),
(16, 2, 'Plutarch Heavensbee', 'Pendukung'),
(17, 2, 'Haymitch Abernathy', 'Pendukung'),
(18, 2, 'Effie Trinket', 'Pendukung'),
(19, 2, 'Cinna', 'Pendukung'),
(20, 2, 'Beetee Latier', 'Pendukung'),
(21, 2, 'Mags', 'Pendukung'),
(22, 2, 'President Snow', 'Antagonis'),
(23, 3, 'Katniss Everdeen', 'Utama'),
(24, 3, 'Gale Hawthorne', 'Pendukung'),
(25, 3, 'Finnick Odair', 'Pendukung'),
(26, 3, 'Plutarch Heavensbee', 'Pendukung'),
(27, 3, 'President Alma Coin', 'Pendukung'),
(28, 3, 'Cressida', 'Pendukung'),
(29, 3, 'Haymitch Abernathy', 'Pendukung'),
(30, 3, 'Boggs', 'Pendukung'),
(31, 3, 'Primrose Everdeen', 'Pendukung'),
(32, 3, 'President Snow', 'Antagonis'),
(33, 4, 'Katniss Everdeen', 'Utama'),
(34, 4, 'Peeta Mellark', 'Pendukung'),
(35, 4, 'Gale Hawthorne', 'Pendukung'),
(36, 4, 'Finnick Odair', 'Pendukung'),
(37, 4, 'Johanna Mason', 'Pendukung'),
(38, 4, 'Cressida', 'Pendukung'),
(39, 4, 'Boggs', 'Pendukung'),
(40, 4, 'President Alma Coin', 'Antagonis'),
(41, 4, 'President Snow', 'Antagonis'),
(42, 5, 'Coriolanus Snow Muda', 'Utama'),
(43, 5, 'Lucy Gray Baird', 'Utama'),
(44, 5, 'Sejanus Plinth', 'Pendukung'),
(45, 5, 'Tigris Snow', 'Pendukung'),
(46, 5, 'Casca Highbottom', 'Pendukung'),
(47, 5, 'Lucretius \"Lucky\" Flickerman', 'Pendukung'),
(48, 5, 'Clemensia Dovecote', 'Pendukung'),
(49, 5, 'Dr. Volumnia Gaul', 'Antagonis');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int NOT NULL,
  `title` varchar(150) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `release_year` int NOT NULL,
  `synopsis` text NOT NULL,
  `poster_image` varchar(255) DEFAULT 'poster-default.jpg',
  `hero_image` varchar(255) DEFAULT 'hero-default.jpg',
  `base_rating` decimal(3,1) NOT NULL DEFAULT '0.0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `genre`, `release_year`, `synopsis`, `poster_image`, `hero_image`, `base_rating`) VALUES
(1, 'The Hunger Games', 'Aksi, Sci-Fi', 2012, 'Katniss Everdeen secara sukarela menggantikan adik perempuannya di Hunger Games, sebuah pertarungan mematikan yang disiarkan langsung di televisi Capitol.', 'the hunger games 2012.webp', 'banner_thg12.jpg', '7.2'),
(2, 'Catching Fire', 'Aksi, Sci-Fi', 2013, 'Setelah memenangkan Hunger Games ke-74, Katniss dan Peeta harus kembali ke arena dalam Quarter Quell, sementara pemberontakan mulai bergolak di distrik-distrik.', 'catchingfire.jpg', 'bannet_cd.jpg', '7.5'),
(3, 'Mockingjay Part 1', 'Drama, Sci-Fi', 2014, 'Katniss Everdeen berada di Distrik 13 setelah menghancurkan arena pertandingan. Di bawah pimpinan Presiden Coin, Katniss menjadi simbol pemberontakan.', 'mockiingjay pt 1.webp', 'banner_mockingjay.jpg', '6.6'),
(4, 'Mockingjay Part 2', 'Aksi, Sci-Fi', 2015, 'Saat perang Panem meningkat menjadi kehancuran skala penuh, Katniss dan pasukannya menyusup ke Capitol untuk membunuh Presiden Snow.', 'mockiingjay pt 2.webp', 'banner_mockingjay2.jpg', '6.5'),
(5, 'The Ballad of Songbirds & Snakes', 'Drama, Aksi', 2023, 'Coriolanus Snow muda ditugaskan menjadi mentor bagi Lucy Gray Baird, tribut perempuan dari Distrik 12 yang miskin, dalam Hunger Games ke-10.', 'theballad.webp', 'banner_theballad.jpg', '6.8');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `movie_id` int NOT NULL,
  `rating` int NOT NULL,
  `review_text` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `movie_id`, `rating`, `review_text`, `created_at`) VALUES
(1, 4, 2, 5, 'bagus', '2026-06-12 12:31:49'),
(2, 4, 3, 4, 'bagus', '2026-06-12 12:46:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') DEFAULT 'user',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `username`, `email`, `password`, `role`, `created_at`) VALUES
(3, 'admin', 'admin', 'admin@admin', '$2y$10$OU47Rbi/6.79G3DP/QDPCO6qDG/i9lgjDnss86pOmWh29S4odWPvi', 'admin', '2026-06-12 11:48:40'),
(4, 'user', 'user', 'user@user', '$2y$10$isJnHJnYlPDToFc5vMLTfuoAJ/cGrxU8OxTfOpk6PxsDWsDMct6H2', 'user', '2026-06-12 11:50:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `characters`
--
ALTER TABLE `characters`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `characters`
--
ALTER TABLE `characters`
  ADD CONSTRAINT `characters_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
