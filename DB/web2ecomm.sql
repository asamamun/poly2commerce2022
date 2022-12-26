-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2022 at 01:13 PM
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

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `created_at`) VALUES
(1, 'Mobile', 'mobile', 'mobile.jpg', '2022-12-26 05:31:08'),
(2, 'Electronics', 'Electronics', 'electronics.png', '2022-12-26 05:31:33'),
(3, 'vehicle', 'vehicle', 'vehicle.png', '2022-12-26 05:31:54'),
(4, 'Property', 'Property', 'property.png', '2022-12-26 05:32:25'),
(5, 'Fashion', 'Fashion', 'fashion.png', '2022-12-26 05:32:46'),
(6, 'Sports', 'Sports', 'sports.png', '2022-12-26 05:33:13');

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

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sku`, `category_id`, `subcategory_id`, `name`, `description`, `price`, `quantity`, `images`, `discount`, `created_at`) VALUES
(1, '', 2, 3, 'Asus aj', '', 333333.00, 50, '', 5, '2022-12-26 06:49:20'),
(3, 'asd', 2, 3, 'asdasd', 'asdffdsgdfg', 5555.00, 44, '63a9450d7c3d2.png', 3, '2022-12-26 06:54:05'),
(4, '111', 2, 3, 'aaaaa', 'aaaaaaaaaaaaaaaaaaa', 120.00, 50, '63a9462acf254.png', 50, '2022-12-26 06:58:50'),
(5, '99', 1, 2, 'Redmi Note 9', 'Redmi Note 9 is a line of Android-based smartphones as part of the Redmi Note series by Redmi, a sub-brand of Xiaomi Inc.', 18.00, 1, '63a9464c8d07d.png', 10, '2022-12-26 06:59:24'),
(8, 'mobbb', 2, 4, 'asdfasdf', 'asdfasdfdsa fdsafsdaf', 77777.00, 40, '63a949435589f.png', 0, '2022-12-26 07:12:03'),
(9, 'sku', 1, 2, 'Rafi', 'none', 2100.00, 2, '63a9498b6856f.png', 21, '2022-12-26 07:13:15');

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

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `name`, `description`, `image`, `created_at`) VALUES
(1, 1, 'Button Phone', 'Button Phone', 'phone1.png', '2022-12-26 05:34:00'),
(2, 1, 'Smart Phone', 'Smart Phone', 'phone2.png', '2022-12-26 05:34:24'),
(3, 2, 'Laptops', 'Laptops', 'laptop.png', '2022-12-26 05:40:33'),
(4, 2, 'Desktop', 'Desktop', 'desktop.png', '2022-12-26 05:40:58');

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
(3, 'Travis Scott', 'travis@gmail.com', '$2y$10$S6YeD9n/s71HpMjL68nkC.nZDsVrY4juAMz0s2FSV5UNo.iRn3XJ6', '2', '2022-12-21 05:51:32'),
(4, 'prantodeb', 'prantodeb@gmail.com', '$2y$10$SRVMSaqJAGkZAgr64zB6qu1abTCc.dUIDjbWUc/bJpdEZ9VDKVE06', '2', '2022-12-21 05:51:33'),
(5, 'weirdrafi', 'mazharulrafi@gmail.com', '$2y$10$sjUdfuzXaXmk2TIbHkOXneXgmCrsZKjEeEq5NR6RNc7.YFFSFpZqO', '2', '2022-12-21 05:52:14'),
(6, 'Shuvo', 'wafirashraful0186@gmail.com', '$2y$10$6eIVsMk93n.BHXEfB7qifucK.b5ZrjLSDVpMIg20UQtCAP/LipfMq', '2', '2022-12-21 05:52:16'),
(7, 'md.mosaraf', 'mosharof111@gmail.com', '$2y$10$R2PhFyKyXKbKuDERF/zET.NbJ9LMy499uv6HAmqkGz4jhoiRWaSJ.', '2', '2022-12-21 05:52:46'),
(8, 'rahima', 'yeamin123@gmail.com', '$2y$10$lJE.LtR7kPiEVmsTJBoN0ubDr5th3elXCBEX7GIOtahmOPujgdcUW', '2', '2022-12-21 05:53:03'),
(10, 'nishat subha', 'nishatshubah@gmail.com', '$2y$10$SziD.OmavpG2YI7aHdcM5.Vnl7bZ8GCV2/4UsUjrxBmHo40rnnzQy', '2', '2022-12-21 05:54:12'),
(12, 'RAKIB', 'rakib@gmail.com', '$2y$10$GBjYDAX3.quj8TUFz4XeJ.WCUsRbAmRgbrhH94UqdPRlNCX6WJoB.', '2', '2022-12-21 05:56:04'),
(13, 'mamun', 'mamun@gmail.com', '$2y$10$Ye/Fg9wjBMlMlrAgDii7reFIR8Mv17GCXdJbCF3xg2v7LO54p.5CK', '2', '2022-12-21 06:16:28'),
(14, 'weirdrafi', 'rafi@gmail.com', '$2y$10$O6beZa/WaCHQg84bSP1U4uEVKwJg74Key0t0eLKOBlTiNtWpryD..', '2', '2022-12-26 06:57:02'),
(15, 'messi', 'messi123@gmail.com', '$2y$10$TI1sYv9ADY7hvEZ7/ATrbOu8kSbhmQ0XkL8QjpsZ8pwter8EtNnFm', '2', '2022-12-26 06:57:08'),
(18, 'nishat', 'nishat@gmail.com', '$2y$10$xB3f0RqX43mjAq1KgL5lUuskftfjDpL7MqBf9EeOKILVzrCxQl8UG', '1', '2022-12-26 06:59:13'),
(19, 'Akhi Ali', 'akhi@gmail.com', '$2y$10$.I2EFX1Kbecp8oJrrnCAC.DHB1J.Z4UZT0Yr6eej5JNVleDIBrpcS', '1', '2022-12-26 07:02:14'),
(20, 'Mosa: Lima Akter', 'limaislam4334@gmail.com', '$2y$10$r9jxz3Rz7TmIzOSAODQVw.F7wbOBR1YYvmpsvAbKULxAp9lfQLb2i', '1', '2022-12-26 07:02:52'),
(21, 'test', 'test@gmail.com', '$2y$10$vuebGOJRHf4VxKkfIBQ.geSQJ.SAFlsa3kl0E.Gwaj8lf1IO2SqPy', '2', '2022-12-26 07:05:17');

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
  ADD UNIQUE KEY `sku` (`sku`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `subcategory_id` (`subcategory_id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`);

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
