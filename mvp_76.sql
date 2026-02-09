-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 09, 2026 at 08:17 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvp_76`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `plant_id` int NOT NULL,
  `buyer_name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `payment_method` enum('transfer','cash') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` enum('pending','accepted','completed') DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `plant_id`, `buyer_name`, `address`, `payment_method`, `status`, `created_at`) VALUES
(12, 4, 11, 'Jaden', 'surtikanti', 'transfer', 'completed', '2026-02-06 06:57:50'),
(13, 10, 12, 'dawdw', 'surtikanti', 'cash', 'completed', '2026-02-09 05:09:35'),
(14, 13, 13, 'bjorka', 'cimanggis', 'transfer', 'completed', '2026-02-09 05:20:19'),
(15, 13, 16, 'bjorkin', 'cimanggis', 'cash', 'pending', '2026-02-09 07:55:10');

-- --------------------------------------------------------

--
-- Table structure for table `plants`
--

CREATE TABLE `plants` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int NOT NULL,
  `status` enum('ready','pending','sold') DEFAULT 'ready',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `plants`
--

INSERT INTO `plants` (`id`, `name`, `price`, `status`, `created_at`) VALUES
(11, 'siomay', 10000, 'sold', '2026-02-06 06:57:44'),
(12, 'siomay', 10000, 'sold', '2026-02-09 04:50:08'),
(13, 'cilung', 20000, 'sold', '2026-02-09 04:50:14'),
(14, 'cilung', 20000, 'ready', '2026-02-09 06:50:26'),
(15, 'siomay', 20000, 'ready', '2026-02-09 06:50:32'),
(16, 'martabak mini ', 2400, 'pending', '2026-02-09 06:50:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `role`) VALUES
(4, 'Jaden', '12345', 'admin'),
(10, 'Cihadwadwa', 'dawdwad', 'user'),
(11, 'admin', 'admin', 'admin'),
(13, 'susah', 'banget', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plant_id` (`plant_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `plants`
--
ALTER TABLE `plants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `plants`
--
ALTER TABLE `plants`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`plant_id`) REFERENCES `plants` (`id`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
