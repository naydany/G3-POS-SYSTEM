-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2024 at 05:42 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos_system_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cate_id` int(11) NOT NULL,
  `cate_name` varchar(255) NOT NULL,
  `cate_desc` varchar(100) NOT NULL,
  `cate_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cate_id`, `cate_name`, `cate_desc`, `cate_date`) VALUES
(5, 'Clothes', 'quality and beautiful clothes', '2024-02-26 01:20:28'),
(8, 'Drink', 'You can drink which you want', '2024-02-26 01:22:40'),
(9, 'Cookie', 'Great quality', '2024-02-26 10:23:45'),
(13, 'fruits', 'naturals', '2024-03-04 10:27:21'),
(14, 'Foods', 'We have a  lot of foot that more delecious.gfd', '2024-03-11 09:08:30');

-- --------------------------------------------------------

--
-- Table structure for table `oldpayments`
--

CREATE TABLE `oldpayments` (
  `pay_id` int(11) NOT NULL,
  `pay_code` varchar(100) NOT NULL,
  `pro_name` varchar(100) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `pay_date` datetime NOT NULL,
  `pay_totalprice` int(50) NOT NULL,
  `pro_price` int(50) NOT NULL,
  `pro_quantity` int(100) NOT NULL,
  `method_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `oldpayments`
--

INSERT INTO `oldpayments` (`pay_id`, `pay_code`, `pro_name`, `cus_id`, `pay_date`, `pay_totalprice`, `pro_price`, `pro_quantity`, `method_status`) VALUES
(1, 'FSS-342', 'chicken', 0, '2024-03-11 09:21:25', 24, 12, 2, 'Cash'),
(2, 'SFFA-1', 'Debra Castro', 0, '2024-03-11 09:24:00', 10, 1, 10, 'Cash'),
(3, 'DFFS-433', 'coca', 0, '2024-03-11 11:14:31', 2, 1, 2, 'Cash'),
(10, 'DFFS-433', 'coca', 1, '2024-03-11 19:27:38', 6, 1, 6, 'Cash'),
(11, 'SFFA-1', 'Debra Castro', 1, '2024-03-14 22:24:11', 2, 1, 2, 'Cash'),
(13, 'FSS-342', 'chicken', 2, '2024-03-14 22:24:32', 48, 12, 4, 'Cash'),
(14, 'DFFS-433', 'coca', 2, '2024-03-14 22:24:43', 2, 1, 2, 'Cash'),
(16, 'SFFA-1', 'Debra Castro', 3, '2024-03-16 14:16:11', 3, 1, 3, 'Paypal'),
(17, 'DFFS-433', 'coca', 4, '2024-03-16 14:17:04', 2, 1, 2, 'Cash'),
(18, 'SFFA-1', 'Debra Castro', 5, '2024-03-16 21:13:56', 2, 1, 2, 'Paypal'),
(19, 'slfjks', 'cake', 6, '2024-03-16 22:14:22', 12, 4, 3, 'Cash'),
(20, 'DFFS-433', 'coca', 7, '2024-03-16 22:16:49', 5, 1, 5, 'Paypal'),
(21, 'FSS-342', 'chicken', 8, '2024-03-17 23:59:32', 24, 12, 2, 'Cash'),
(22, 'slfjks', 'cake', 8, '2024-03-17 23:59:49', 12, 4, 3, 'Cash'),
(23, 'SFFA-1', 'apple', 9, '2024-03-24 16:41:25', 2, 1, 2, 'Paypal');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders_detail`
--

CREATE TABLE `orders_detail` (
  `order_detail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `pro_price` varchar(255) NOT NULL,
  `pro_qty` int(11) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `order_date` datetime NOT NULL,
  `tatal_price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders_detail`
--

INSERT INTO `orders_detail` (`order_detail_id`, `order_id`, `cus_id`, `pro_id`, `pro_name`, `pro_price`, `pro_qty`, `order_status`, `order_date`, `tatal_price`) VALUES
(1, 0, 0, 0, 'Jameson Heath', '3', 4, '', '2024-03-11 14:46:44', 12),
(2, 0, 0, 0, 'Jameson Heath', '3', 4, '', '2024-03-11 14:51:37', 12),
(3, 0, 0, 0, 'coca', '1', 2, '', '2024-03-11 14:51:53', 2),
(4, 0, 0, 0, 'coca', '1', 6, '', '2024-03-11 19:27:38', 6),
(5, 0, 0, 0, 'Debra Castro', '1', 2, '', '2024-03-14 22:24:11', 2),
(6, 0, 0, 0, 'chicken', '12', 4, '', '2024-03-14 22:24:32', 48),
(7, 0, 0, 0, 'coca', '1', 2, '', '2024-03-14 22:24:43', 2),
(8, 0, 0, 0, 'coca', '1', 2, 'Paid', '2024-03-15 22:26:11', 2),
(9, 0, 0, 0, 'Debra Castro', '1', 3, '', '2024-03-16 14:13:56', 3),
(10, 0, 0, 0, 'Debra Castro', '1', 1, '', '2024-03-16 14:14:11', 1),
(11, 0, 0, 0, 'Debra Castro', '1', 3, 'Paid', '2024-03-16 14:16:11', 3),
(12, 0, 0, 0, 'coca', '1', 2, 'Paid', '2024-03-16 14:17:04', 2),
(13, 0, 0, 0, 'Debra Castro', '1', 2, '', '2024-03-16 21:13:57', 2),
(14, 0, 0, 0, 'cake', '4', 3, 'Paid', '2024-03-16 22:14:22', 12),
(15, 0, 0, 0, 'coca', '1', 5, 'Paid', '2024-03-16 22:16:49', 5),
(16, 0, 0, 0, 'chicken', '12', 2, 'Paid', '2024-03-17 23:59:32', 24),
(17, 0, 0, 0, 'cake', '4', 3, '', '2024-03-17 23:59:49', 12),
(18, 0, 0, 0, 'apple', '1', 2, 'Paid', '2024-03-24 16:41:25', 2),
(19, 0, 0, 0, 'haberger', '4', 3, '', '2024-03-24 22:20:12', 12);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `pay_id` int(11) NOT NULL,
  `pay_code` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `order_code` varchar(255) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `pay_atm` varchar(255) NOT NULL,
  `method_status` varchar(255) NOT NULL,
  `pay_date` datetime NOT NULL,
  `pay_totalprice` int(100) NOT NULL,
  `pro_name` varchar(100) NOT NULL,
  `pro_price` int(100) NOT NULL,
  `pro_quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`pay_id`, `pay_code`, `order_id`, `order_code`, `cus_id`, `pay_atm`, `method_status`, `pay_date`, `pay_totalprice`, `pro_name`, `pro_price`, `pro_quantity`) VALUES
(36, 'slfjks', '', '', 0, '', '', '2024-03-24 22:20:12', 12, 'haberger', 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` int(10) UNSIGNED NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `pro_code` varchar(255) NOT NULL,
  `pro_img` varchar(255) NOT NULL,
  `pro_desc` varchar(255) NOT NULL,
  `pro_price` varchar(255) NOT NULL,
  `pro_date` datetime NOT NULL,
  `pro_quantity` int(11) NOT NULL,
  `pro_original_price` int(100) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `cate_name` varchar(100) NOT NULL,
  `sup_name` varchar(100) NOT NULL,
  `sup_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `pro_name`, `pro_code`, `pro_img`, `pro_desc`, `pro_price`, `pro_date`, `pro_quantity`, `pro_original_price`, `cate_id`, `cate_name`, `sup_name`, `sup_id`) VALUES
(62, 'Orange', 'FSS-342', '660052de4c195.jpg', '', '4', '2024-03-24 23:20:05', 105, 4, 0, 'fruits', 'dany nay', 0);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `sup_id` int(10) UNSIGNED NOT NULL,
  `sup_name` varchar(255) NOT NULL,
  `sup_country` varchar(255) NOT NULL,
  `sup_address` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`sup_id`, `sup_name`, `sup_country`, `sup_address`, `phone`) VALUES
(2, 'dany nay', 'Tempor deleniti sit', 'Tropeang chuk village, street 371', 975139490),
(4, 'LaLa', '', 'Tropeang chuk village, street 371', 74334334),
(5, 'Nich', '', 'Phnom Penh', 2147483647),
(6, 'Becker', '', 'Seim Rap', 84);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `otp` int(10) DEFAULT NULL,
  `role` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `otp`, `role`, `address`, `phone`, `image`) VALUES
(57, 'dany nay22', '$2y$10$uhJbiVSBxpfc0GeEs91.WOH/jI9lmjviMCOhgWqIeIwxYllhKF3eS', 'koko@mailinator.com', NULL, 'staff', 'Tropeang chuk village', 975139490, '65e538b93353e.jpg'),
(79, 'Dany', '$2y$10$KaRQo.bvSymlbRhOuOaxjejidOiUGyRv75l.bcshxxw8YQjZT8fqe', 'admin@gmail.com', NULL, 'admin', 'Phnom Penh', 975139490, '660056c1d4f4b.jpg'),
(80, 'dany nay', '$2y$10$b82DwjM5PV5R5Q6DOnwwEuDrZwa/u5IkwHiE8k19MbfgHMlZPagw2', 'dany.nay@student.passerellesnumeriques.org', NULL, 'admin', 'Tropeang chuk village', 975139490, '660056dd6f8f8.jpg'),
(81, 'Solida', '$2y$10$dFa0gtypGQUZXvMUtT4vluKUFDhRqBn.xRZn2AYvG8RFKgic6sXF.', 'cashier@gmail.com', NULL, 'cashier', 'Takeo', 96345342, '6600573c44faf.jpg'),
(82, 'Sovana', '$2y$10$N.GQGl3oNrFnfHj.XHsud.wIbQpuacMBGg3A/73Cd9mMoy4yNxxFa', 'menager@gmail.come', NULL, 'stock manager', 'Tropeang chuk village', 1645646, '6600579fc3472.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `oldpayments`
--
ALTER TABLE `oldpayments`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `orders_product_id_index` (`product_id`);

--
-- Indexes for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`order_detail_id`),
  ADD KEY `orders_detail_cus_id_index` (`cus_id`),
  ADD KEY `orders_detail_pro_id_index` (`pro_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`pay_id`),
  ADD KEY `payments_ordre_id_index` (`order_id`),
  ADD KEY `payments_cus_id_index` (`cus_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `products_sup_id_index` (`sup_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`sup_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `oldpayments`
--
ALTER TABLE `oldpayments`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `sup_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
