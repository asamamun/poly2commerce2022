-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2022 at 12:48 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web2ecomm`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `sku` varchar(128) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `price` float(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `images` varchar(512) NOT NULL,
  `discount` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role` set('1','2','3') NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `created_at`) VALUES
(2, 'admin', 'admin@gmail.com', '$2y$10$ITPqwFI8Ofx4lyZiLiWdMOA6EuI/nXNl2qlUl8qItRR1DbjkKZlha', '2', '2022-12-21 05:50:15'),
(3, 'Travis Scott', 'travis@gmail.com', '$2y$10$S6YeD9n/s71HpMjL68nkC.nZDsVrY4juAMz0s2FSV5UNo.iRn3XJ6', '1', '2022-12-21 05:51:32'),
(4, 'prantodeb', 'prantodeb@gmail.com', '$2y$10$SRVMSaqJAGkZAgr64zB6qu1abTCc.dUIDjbWUc/bJpdEZ9VDKVE06', '1', '2022-12-21 05:51:33'),
(5, 'weirdrafi', 'mazharulrafi@gmail.com', '$2y$10$sjUdfuzXaXmk2TIbHkOXneXgmCrsZKjEeEq5NR6RNc7.YFFSFpZqO', '1', '2022-12-21 05:52:14'),
(6, 'Shuvo', 'wafirashraful0186@gmail.com', '$2y$10$6eIVsMk93n.BHXEfB7qifucK.b5ZrjLSDVpMIg20UQtCAP/LipfMq', '1', '2022-12-21 05:52:16'),
(7, 'md.mosaraf', 'mosharof111@gmail.com', '$2y$10$R2PhFyKyXKbKuDERF/zET.NbJ9LMy499uv6HAmqkGz4jhoiRWaSJ.', '1', '2022-12-21 05:52:46'),
(8, 'rahima', 'yeamin123@gmail.com', '$2y$10$lJE.LtR7kPiEVmsTJBoN0ubDr5th3elXCBEX7GIOtahmOPujgdcUW', '1', '2022-12-21 05:53:03'),
(10, 'nishat subha', 'nishatshubah@gmail.com', '$2y$10$SziD.OmavpG2YI7aHdcM5.Vnl7bZ8GCV2/4UsUjrxBmHo40rnnzQy', '1', '2022-12-21 05:54:12'),
(12, 'RAKIB', 'rakib@gmail.com', '$2y$10$GBjYDAX3.quj8TUFz4XeJ.WCUsRbAmRgbrhH94UqdPRlNCX6WJoB.', '1', '2022-12-21 05:56:04'),
(13, 'mamun', 'mamun@gmail.com', '$2y$10$Ye/Fg9wjBMlMlrAgDii7reFIR8Mv17GCXdJbCF3xg2v7LO54p.5CK', '1', '2022-12-21 06:16:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sku` (`sku`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
