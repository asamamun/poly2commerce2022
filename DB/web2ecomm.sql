-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2022 at 01:08 PM
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
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` float(10,2) NOT NULL,
  `quantity` int(4) NOT NULL DEFAULT 1,
  `op` varchar(128) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `order_id`, `product_id`, `price`, `quantity`, `op`, `created_at`) VALUES
(1, 11, 3, 5555.00, 1, '', '2022-12-29 06:21:40'),
(2, 11, 8, 77777.00, 1, '', '2022-12-29 06:21:40'),
(3, 11, 5, 18.00, 1, '', '2022-12-29 06:21:40'),
(4, 12, 3, 5555.00, 1, '', '2022-12-29 06:22:21'),
(5, 12, 8, 77777.00, 1, '', '2022-12-29 06:22:21'),
(6, 12, 5, 18.00, 1, '', '2022-12-29 06:22:21'),
(7, 13, 3, 5555.00, 1, '', '2022-12-29 06:23:02'),
(8, 13, 8, 77777.00, 1, '', '2022-12-29 06:23:02'),
(9, 13, 5, 18.00, 1, '', '2022-12-29 06:23:02'),
(10, 14, 3, 5555.00, 1, '', '2022-12-29 06:23:53'),
(11, 14, 8, 77777.00, 1, '', '2022-12-29 06:23:53'),
(12, 14, 5, 18.00, 1, '', '2022-12-29 06:23:53'),
(13, 15, 3, 5555.00, 1, '', '2022-12-29 06:27:31'),
(14, 15, 8, 77777.00, 1, '', '2022-12-29 06:27:31'),
(15, 15, 5, 18.00, 1, '', '2022-12-29 06:27:31'),
(16, 16, 10, 50000.00, 1, '', '2022-12-29 06:29:11'),
(17, 16, 10, 50000.00, 1, '', '2022-12-29 06:29:12'),
(18, 17, 3, 5555.00, 1, '', '2022-12-29 06:29:40'),
(19, 17, 8, 77777.00, 1, '', '2022-12-29 06:29:40'),
(20, 17, 5, 18.00, 1, '', '2022-12-29 06:29:41'),
(21, 18, 10, 50000.00, 1, '', '2022-12-29 06:30:42'),
(22, 18, 10, 50000.00, 1, '', '2022-12-29 06:30:42'),
(23, 19, 10, 50000.00, 1, '', '2022-12-29 06:30:57'),
(24, 19, 10, 50000.00, 1, '', '2022-12-29 06:30:57'),
(25, 20, 3, 5555.00, 1, '', '2022-12-29 06:31:02'),
(26, 20, 8, 77777.00, 1, '', '2022-12-29 06:31:02'),
(27, 20, 5, 18.00, 1, '', '2022-12-29 06:31:02'),
(28, 21, 10, 50000.00, 1, '', '2022-12-29 06:31:10'),
(29, 21, 10, 50000.00, 1, '', '2022-12-29 06:31:10'),
(30, 22, 10, 50000.00, 1, '', '2022-12-29 06:31:25'),
(31, 22, 10, 50000.00, 1, '', '2022-12-29 06:31:25'),
(32, 23, 10, 50000.00, 1, '', '2022-12-29 06:35:01'),
(33, 23, 9, 2100.00, 1, '', '2022-12-29 06:35:02'),
(34, 23, 5, 18.00, 1, '', '2022-12-29 06:35:02'),
(35, 24, 10, 50000.00, 1, '', '2022-12-29 06:50:58'),
(36, 24, 9, 2100.00, 1, '', '2022-12-29 06:50:58'),
(37, 24, 10, 50000.00, 1, '', '2022-12-29 06:50:58'),
(38, 24, 9, 2100.00, 1, '', '2022-12-29 06:50:58'),
(39, 25, 8, 77777.00, 1, '', '2022-12-29 06:51:04'),
(40, 25, 3, 5555.00, 1, '', '2022-12-29 06:51:04'),
(41, 25, 9, 2100.00, 1, '', '2022-12-29 06:51:04'),
(42, 25, 8, 77777.00, 1, '', '2022-12-29 06:51:04'),
(43, 26, 8, 77777.00, 1, '', '2022-12-29 06:51:07'),
(44, 26, 3, 5555.00, 1, '', '2022-12-29 06:51:07'),
(45, 26, 9, 2100.00, 1, '', '2022-12-29 06:51:07'),
(46, 26, 8, 77777.00, 1, '', '2022-12-29 06:51:07'),
(47, 27, 8, 77777.00, 1, '', '2022-12-29 06:51:20'),
(48, 27, 3, 5555.00, 1, '', '2022-12-29 06:51:20'),
(49, 27, 9, 2100.00, 1, '', '2022-12-29 06:51:20'),
(50, 27, 8, 77777.00, 1, '', '2022-12-29 06:51:20'),
(51, 28, 8, 77777.00, 1, '', '2022-12-29 06:51:20'),
(52, 28, 3, 5555.00, 1, '', '2022-12-29 06:51:21'),
(53, 28, 9, 2100.00, 1, '', '2022-12-29 06:51:21'),
(54, 28, 8, 77777.00, 1, '', '2022-12-29 06:51:21');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total` float(10,2) NOT NULL,
  `discount` float(6,2) NOT NULL,
  `comment` varchar(512) NOT NULL,
  `payment` set('cash','bkash','nogod','cod') NOT NULL,
  `trxid` varchar(72) NOT NULL,
  `status` set('pe','pr','sh','co') NOT NULL DEFAULT 'pe' COMMENT '"pending","processing","shipped","completed"',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total`, `discount`, `comment`, `payment`, `trxid`, `status`, `created_at`) VALUES
(1, 2, 87517.50, 0.00, 'asdfdsafdsf', 'bkash', 'asd', 'pe', '2022-12-29 05:53:32'),
(3, 2, 87000.00, 517.50, 'asdfdsafdsf', 'bkash', 'asd123', 'pe', '2022-12-29 05:54:08'),
(4, 2, 87000.00, 517.50, 'asdfdsafdsf', 'bkash', 'asd124', 'pe', '2022-12-29 05:55:05'),
(5, 24, 5000.00, 851.65, 'hey sir', 'cod', '12dfgg3344d', 'pe', '2022-12-29 05:55:53'),
(6, 24, 100000.00, 5000.00, 'Amr product ta taratari jeno pai', 'bkash', 'BD06232025610402', 'pe', '2022-12-29 06:10:14'),
(9, 2, 87000.00, 517.50, '123', 'cash', '', 'pe', '2022-12-29 06:20:15'),
(11, 2, 87000.00, 517.50, '123', 'cash', '', 'pe', '2022-12-29 06:21:40'),
(12, 2, 87000.00, 517.50, 'asfdsdaf', 'cash', '', 'pe', '2022-12-29 06:22:21'),
(13, 2, 87394.50, 123.00, 'asdf', 'cash', '', 'pe', '2022-12-29 06:23:01'),
(14, 2, 87394.50, 123.00, 'sdf', 'cash', '', 'pe', '2022-12-29 06:23:53'),
(15, 2, 87000.00, 517.50, '123', 'cash', '', 'pe', '2022-12-29 06:27:31'),
(16, 24, 104934.00, 66.00, 'ergvbt', 'cash', 'dfcrtgetvyvb643', 'pe', '2022-12-29 06:29:11'),
(17, 2, 87394.50, 123.00, 'asdf', 'bkash', 'sadf', 'pe', '2022-12-29 06:29:40'),
(18, 24, 104934.00, 66.00, 'ergvbt', 'cash', 'dfcrtgetvyvb643', 'pe', '2022-12-29 06:30:42'),
(19, 24, 0.00, 0.00, '5cwqfd ', 'cash', '5555523vrfgv', 'pe', '2022-12-29 06:30:57'),
(20, 2, 87394.50, 123.00, 'sdfdsf', 'bkash', '123', 'pe', '2022-12-29 06:31:02'),
(21, 24, 0.00, 0.00, '5cwqfd ', 'cash', '5555523vrfgv', 'pe', '2022-12-29 06:31:10'),
(22, 24, 104985.00, 15.00, 'f v tvrtc', 'cash', 'dfffffffffffffffffffffff', 'pe', '2022-12-29 06:31:25'),
(23, 2, 54700.00, 23.90, '123', 'cash', '123', 'pe', '2022-12-29 06:35:01'),
(24, 24, 109395.00, 15.00, 'sir amr product ta taratari diye diyen', 'cash', 'BD06232025610402', 'pe', '2022-12-29 06:50:57'),
(25, 23, 171339.45, 30.00, 'rytryn6e', 'bkash', 'rtrt', 'pe', '2022-12-29 06:51:04'),
(26, 23, 171339.45, 30.00, 'rytryn6e', 'bkash', 'rtrt', 'pe', '2022-12-29 06:51:07'),
(27, 23, 171339.45, 30.00, 'rytryn6e', 'bkash', 'rtrt', 'pe', '2022-12-29 06:51:20'),
(28, 23, 171339.45, 30.00, 'rytryn6e', 'bkash', 'rtrt', 'pe', '2022-12-29 06:51:20');

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
  `hot` set('0','1') NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sku`, `category_id`, `subcategory_id`, `name`, `description`, `price`, `quantity`, `images`, `discount`, `hot`, `created_at`) VALUES
(3, 'asd', 2, 3, 'asdasd', 'asdffdsgdfg', 5555.00, 44, '63a9450d7c3d2.png', 3, '1', '2022-12-26 06:54:05'),
(4, '111', 2, 3, 'aaaaa', 'aaaaaaaaaaaaaaaaaaa', 120.00, 50, '63a9462acf254.png', 50, '0', '2022-12-26 06:58:50'),
(5, '99', 1, 2, 'Redmi Note 9', 'Redmi Note 9 is a line of Android-based smartphones as part of the Redmi Note series by Redmi, a sub-brand of Xiaomi Inc.', 18.00, 1, '63a9464c8d07d.png', 10, '1', '2022-12-26 06:59:24'),
(8, 'mobbb', 2, 4, 'asdfasdf', 'asdfasdfdsa fdsafsdaf', 77777.00, 40, '63a949435589f.png', 0, '1', '2022-12-26 07:12:03'),
(9, 'sku', 1, 2, 'Rafi', 'none', 2100.00, 2, '63a9498b6856f.png', 21, '1', '2022-12-26 07:13:15'),
(10, 'dell12345', 2, 3, 'Dell Latitude', 'some desc', 50000.00, 50, '63aaf39fa58dd.png', 2, '1', '2022-12-27 13:31:11');

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
(21, 'test', 'test@gmail.com', '$2y$10$vuebGOJRHf4VxKkfIBQ.geSQJ.SAFlsa3kl0E.Gwaj8lf1IO2SqPy', '2', '2022-12-26 07:05:17'),
(22, 'ignes', 'ignesis@gmail.com', '$2y$10$t2ZwoJ7lOLGVv6a8dH5O0eIPuPh4FNMULf/vE0tKKbOC2P8lVPSry', '2', '2022-12-29 05:32:33'),
(23, 'shubo', 'shubo@gmail.com', '$2y$10$OyY5oOfSXhzolalFiHhkpuTfEoQdF37CV6fgoE3DVV24/LvzIRolu', '1', '2022-12-29 05:51:22'),
(24, 'abcd', 'abcd@gmail.com', '$2y$10$OMqzsRwk4picY3ymz5/J9O9qJJqMyDNwUUODDpIsfnOGmjQ5GVJ0.', '2', '2022-12-29 05:54:45'),
(25, 'weirdrafi', 'Rafi@test.com', '$2y$10$HQzLeKFkukYBzHszOsmAK.k2gAfaie7FoZyzl5mdBs8KmQ00ILOHW', '2', '2022-12-29 06:50:08');

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
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

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
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `orderdetails_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

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
