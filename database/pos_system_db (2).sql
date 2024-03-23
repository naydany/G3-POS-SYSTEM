-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2024 at 07:57 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
(13, 'fruit', 'natural', '2024-03-04 10:27:21'),
(14, 'Foods', 'We have a  lot of foot that more delecious.', '2024-03-11 09:08:30');

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
(10, 'DFFS-433', 'coca', 1, '2024-03-11 19:27:38', 6, 1, 6, 'Cash'),
(12, 'FSS-342', 'chicken', 2, '2024-03-13 07:42:28', 12, 12, 1, 'Cash'),
(13, 'FSS-342', 'chicken', 2, '2024-03-13 07:49:57', 12, 12, 1, 'Cash'),
(14, 'SFFA-1', 'Debra Castro', 3, '2024-03-13 07:50:49', 4, 1, 4, 'Cash'),
(15, 'DFFS-433', 'coca', 3, '2024-03-13 07:50:54', 4, 1, 4, 'Cash'),
(17, 'SFFA-1', 'Debra Castro', 4, '2024-03-13 07:51:30', 4, 1, 4, 'Cash'),
(19, 'FSS-342', 'chicken', 4, '2024-03-13 07:51:49', 48, 12, 4, 'Cash'),
(20, 'DFFS-433', 'coca', 5, '2024-03-13 09:08:19', 3, 1, 3, 'Paypal'),
(21, 'FSS-342', 'chicken', 6, '2024-03-13 09:40:04', 36, 12, 3, 'Cash'),
(22, 'FSS-342', 'chicken', 7, '2024-03-13 10:34:13', 48, 12, 4, 'Cash'),
(23, 'DFFS-433', 'coca', 7, '2024-03-14 20:55:10', 1, 1, 1, 'Cash'),
(24, 'JDL-33', 'orange', 8, '2024-03-15 18:13:32', 100, 10, 10, 'Paypal'),
(25, 'SFFA-1', 'Debra Castro', 9, '2024-03-17 11:41:05', 1, 1, 1, 'Cash'),
(26, 'SFS-342', 'Chocolate', 10, '2024-03-17 11:46:53', 15, 5, 3, 'Cash'),
(33, 'SFS-342', 'Chocolate', 11, '2024-03-17 15:57:06', 5, 5, 1, 'Paypal'),
(34, 'JDL-33', 'orange', 11, '2024-03-17 15:57:12', 10, 10, 1, 'Paypal'),
(36, 'DFFS-433', 'coca', 12, '2024-03-17 15:58:33', 4, 1, 4, 'Cash'),
(38, 'SFFA-1', 'Debra Castro', 13, '2024-03-17 16:04:33', 6, 1, 6, 'Paypal'),
(39, 'SFS-342', 'Chocolate', 13, '2024-03-17 16:04:40', 10, 5, 2, 'Paypal'),
(41, 'FSS-342', 'chicken', 14, '2024-03-17 16:07:44', 12, 12, 1, 'Cash'),
(42, 'slfjks', 'cake', 15, '2024-03-17 16:13:04', 16, 4, 4, 'Cash'),
(43, 'DFFS-433', 'coca', 16, '2024-03-17 16:34:00', 2, 1, 2, 'Cash'),
(44, 'SFFA-1', 'Debra Castro', 17, '2024-03-18 07:51:07', 2, 1, 2, 'Cash'),
(45, 'SFFA-1', 'Debra Castro', 18, '2024-03-18 10:51:43', 9, 1, 9, 'Paypal'),
(46, 'DFFS-433', 'coca', 18, '2024-03-18 10:51:55', 3, 1, 3, 'Paypal'),
(48, 'FSS-342', 'chicken', 19, '2024-03-18 10:53:55', 84, 12, 7, 'Cash'),
(49, 'SFFA-1', 'Debra Castro', 19, '2024-03-18 10:54:08', 4, 1, 4, 'Cash'),
(51, 'FSS-342', 'chicken', 20, '2024-03-18 10:53:55', 84, 12, 7, 'Cash'),
(52, 'SFFA-1', 'Debra Castro', 20, '2024-03-18 10:54:08', 4, 1, 4, 'Cash'),
(54, 'FSS-342', 'chicken', 21, '2024-03-18 10:53:55', 84, 12, 7, 'Paypal'),
(55, 'SFFA-1', 'Debra Castro', 21, '2024-03-18 10:54:08', 4, 1, 4, 'Paypal'),
(56, 'SFFA-1', 'Debra Castro', 21, '2024-03-18 11:09:14', 1, 1, 1, 'Paypal'),
(57, 'FSS-342', 'chicken', 22, '2024-03-19 15:10:52', 24, 12, 2, 'Cash'),
(58, 'slfjks', 'hambergur', 22, '2024-03-22 19:12:49', 12, 4, 3, 'Cash'),
(60, 'FSS-342', 'chicken', 23, '2024-03-19 15:10:52', 24, 12, 2, 'Cash'),
(61, 'slfjks', 'hambergur', 23, '2024-03-22 19:12:49', 12, 4, 3, 'Cash');

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
(4, 0, 0, 0, 'coca', '1', 6, 'Paid', '2024-03-11 19:27:38', 6),
(5, 0, 0, 0, 'chicken', '12', 1, '', '2024-03-13 07:49:57', 12),
(6, 0, 0, 0, 'Debra Castro', '1', 4, 'Paid', '2024-03-13 07:50:49', 4),
(7, 0, 0, 0, 'coca', '1', 4, '1', '2024-03-13 07:50:54', 4),
(8, 0, 0, 0, 'Debra Castro', '1', 4, 'Paid', '2024-03-13 07:51:30', 4),
(9, 0, 0, 0, 'chicken', '12', 4, '1', '2024-03-13 07:51:44', 48),
(10, 0, 0, 0, 'chicken', '12', 4, '1', '2024-03-13 07:51:49', 48),
(11, 0, 0, 0, 'coca', '1', 3, 'Paid', '2024-03-13 09:08:19', 3),
(12, 0, 0, 0, 'chicken', '12', 3, 'Paid', '2024-03-13 09:40:04', 36),
(13, 0, 0, 0, 'chicken', '12', 4, 'Paid', '2024-03-13 10:34:13', 48),
(14, 0, 0, 0, 'coca', '1', 1, '1', '2024-03-14 20:55:10', 1),
(15, 0, 0, 0, 'orange', '10', 10, 'Paid', '2024-03-15 18:13:32', 100),
(16, 0, 0, 0, 'Debra Castro', '1', 1, 'Paid', '2024-03-17 11:41:05', 1),
(17, 0, 0, 0, 'Chocolate', '5', 3, '', '2024-03-17 11:43:18', 15),
(18, 0, 0, 0, 'Chocolate', '5', 3, 'Paid', '2024-03-17 11:46:53', 15),
(19, 0, 0, 0, 'coca', '1', 1, 'Paid', '2024-03-17 11:53:08', 1),
(20, 0, 0, 0, 'orange', '10', 2, '', '2024-03-17 13:05:46', 20),
(21, 0, 0, 0, 'orange', '10', 3, '', '2024-03-17 13:24:05', 30),
(22, 0, 0, 0, 'cake', '4', 2, '', '2024-03-17 13:57:47', 8),
(23, 0, 0, 0, 'Debra Castro', '1', 2, '', '2024-03-17 15:35:39', 2),
(24, 0, 0, 0, 'Chocolate', '5', 2, 'Paid', '2024-03-17 15:52:53', 10),
(25, 0, 0, 0, 'Chocolate', '5', 1, 'Paid', '2024-03-17 15:57:06', 5),
(26, 0, 0, 0, 'orange', '10', 1, '1', '2024-03-17 15:57:12', 10),
(27, 0, 0, 0, 'coca', '1', 4, 'Paid', '2024-03-17 15:58:33', 4),
(28, 0, 0, 0, 'Debra Castro', '1', 6, 'Paid', '2024-03-17 16:04:33', 6),
(29, 0, 0, 0, 'Chocolate', '5', 2, '', '2024-03-17 16:04:41', 10),
(30, 0, 0, 0, 'chicken', '12', 1, 'Paid', '2024-03-17 16:07:44', 12),
(31, 0, 0, 0, 'cake', '4', 4, 'Paid', '2024-03-17 16:13:04', 16),
(32, 0, 0, 0, 'coca', '1', 2, 'Paid', '2024-03-17 16:34:00', 2),
(33, 0, 0, 0, 'Debra Castro', '1', 2, 'Paid', '2024-03-18 07:51:07', 2),
(34, 0, 0, 0, 'Debra Castro', '1', 9, 'Paid', '2024-03-18 10:51:43', 9),
(35, 0, 0, 0, 'coca', '1', 3, '1', '2024-03-18 10:51:55', 3),
(36, 0, 0, 0, 'chicken', '12', 7, 'Paid', '2024-03-18 10:53:55', 84),
(37, 0, 0, 0, 'Debra Castro', '1', 4, '', '2024-03-18 10:54:08', 4),
(38, 0, 0, 0, 'Debra Castro', '1', 1, '', '2024-03-18 11:09:14', 1),
(39, 0, 0, 0, 'chicken', '12', 2, 'Paid', '2024-03-19 15:10:52', 24),
(40, 0, 0, 0, 'hambergur', '4', 3, '', '2024-03-22 19:12:49', 12),
(41, 0, 0, 0, 'hambergur', '4', 2, '', '2024-03-22 19:14:39', 8);

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
(60, 'slfjks', '', '', 0, '', '', '2024-03-22 19:14:39', 8, 'hambergur', 4, 2);

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
  `cate_id` int(11) NOT NULL,
  `cate_name` varchar(100) NOT NULL,
  `sup_name` varchar(100) NOT NULL,
  `sup_id` int(11) NOT NULL,
  `pro_original_price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `pro_name`, `pro_code`, `pro_img`, `pro_desc`, `pro_price`, `pro_date`, `pro_quantity`, `cate_id`, `cate_name`, `sup_name`, `sup_id`, `pro_original_price`) VALUES
(43, 'apple', 'SFFA-1', '65eae8ae98794.jpg', '', '1', '0000-00-00 00:00:00', 210, 0, 'Drink', 'Benedict Becker', 0, 0),
(44, 'chicken', 'FSS-342', '65ee67d0623f4.jpg', '', '12', '0000-00-00 00:00:00', 60, 0, 'Foods', 'LaLa', 0, 0),
(45, 'coca', 'DFFS-433', '65ee7be515d46.png', '', '1', '0000-00-00 00:00:00', 365, 0, 'Drink', 'dany nay', 0, 0),
(46, 'hambergur', 'slfjks', '65eef883432fb.jpg', '', '4', '0000-00-00 00:00:00', -2, 0, 'Cookie', 'Benedict Becker', 0, 0),
(47, 'Chocolate', 'SFS-342', '65f39eb4abd3f.jpg', '', '5', '0000-00-00 00:00:00', 68, 0, 'Cookie', 'Benedict Becker', 0, 0),
(48, 'orange', 'JDL-33', '65f39eee625ed.jpg', '', '10', '0000-00-00 00:00:00', 424, 0, 'fruit', 'dany nay', 0, 0),
(49, 'sprice', 'RES-93', '65fcde85c6a83.png', '', '4', '0000-00-00 00:00:00', 124, 0, 'Drink', 'Benedict Becker', 0, 2),
(50, 'Milk', 'DFS-242', '65fcde0d30195.jpg', '', '5', '0000-00-00 00:00:00', 100, 0, 'Drink', 'dany nay', 0, 3),
(53, 'cake', 'SSD', '65f83c6d9a2b5.jpg', '', '2', '0000-00-00 00:00:00', 23, 0, 'Cookie', 'Benedict Becker', 0, 0);

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
(6, 'Benedict Becker', '', 'Seim Rap', 84),
(7, 'dany nay', '', 'Tropeang chuk village, street 371', 975139490);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `role`, `address`, `phone`, `image`) VALUES
(36, 'Dany Nay22', '$2y$10$cPXCLEbeQmou//jDu1HCN.chJhPnVl7h/NwIwHYnwdpEzZ1.pX./q', 'admin@gmail.com', 'admin', 'Takeo', 975139490, '65fbdd339f3d0.jpg'),
(48, 'Carter Mcmahon', '$2y$10$a8z1H2MxMW0MPZkh4Ak9Ae4B3SvRvd1OoZcCC10NPKzrlisyPS8fe', 'dany.nay@student.passerellesnumeriques.org', 'admin', 'Harum obcaecati nobi', 23145644, '65e359d94932a.jpg'),
(57, 'dany nay22', '$2y$10$uhJbiVSBxpfc0GeEs91.WOH/jI9lmjviMCOhgWqIeIwxYllhKF3eS', 'koko@mailinator.com', 'staff', 'Tropeang chuk village', 975139490, '65e538b93353e.jpg'),
(62, 'Mohammad Lott', '$2y$10$j4PfG2AZNjrj7MvEBCxt8ezSuiT5JeAYZwX2iaoX8VuQ7RxImLYVO', 'da@gmail.com', 'admin', 'Dolore labore labori', 171, '65eaec30c8ba7.png'),
(65, 'Wynne Blevins', '$2y$10$IbeCFXE0Bi/XFD3NSkKUe.AzLCa6pIVPRb6gdjR7hkLNvZCMfCa4C', 'nyny@gmail.com', 'cashier', 'Repellendus ', 639, '65e7bb56eddc3.png'),
(68, 'Nana', '$2y$10$8g5RXId24EqI4HAWd8xSOeRUjDXSh/igaANDTB/UBwP1OFnB.5SI2', 'nana@gmail.com', 'stock manager', 'Takeo', 9699043, '65ee6bcfaff61.jpg'),
(73, 'dany nay', '$2y$10$8KlOHBbkZgTBxWUhRdQKF.BAEMmzgavStEbhj00o1wyyQTc.gldXu', 'dada@gmail.com', 'stock manager', 'Tropeang chuk village', 975139980, '65efbf81b6bcd.jpg'),
(74, 'staff', '$2y$10$tLlUufKFp0N2TSzXvsf6NOyG2pRExUv4/.0qq4eCMRNMKHlG/IqNS', 'staff@gmail.com', 'cashier', 'Tropeang chuk village', 975139490, '65efc43f5626e.jpg'),
(77, 'Jack Hensley', '$2y$10$Sglf5Avi8tETW76qUGsczOlkAnwMx4iUIrrF.wgIdI62UuqKZZ2gm', 'sicizu@mailinator.com', 'cashier', 'Est mollitia non no', 44, '65fce7fa635bb.png'),
(78, 'Mira Montgomery', '$2y$10$w417iqVtaFQBu3KCHOGHn.6cUiYEa4Ds6d04QQ4M5MkUkDenPooAa', 'paxuwygu@mailinator.com', 'admin', 'Molestiae debitis om', 495, '65fcec2b760ce.png');

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
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `oldpayments`
--
ALTER TABLE `oldpayments`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `sup_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
