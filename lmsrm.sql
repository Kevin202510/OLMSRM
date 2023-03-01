-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2023 at 03:47 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lmsrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_logo` varchar(255) DEFAULT NULL,
  `brand_display_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_logo`, `brand_display_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'honda.jpg', 'Honda', NULL, NULL, NULL),
(2, 'honda.jpg', 'Kawasaki', NULL, NULL, NULL),
(3, 'honda.jpg', 'Yamahas', NULL, NULL, NULL),
(34, 'petron', 'Petron', NULL, NULL, NULL),
(35, 'Caltex', 'Caltex', NULL, NULL, NULL),
(36, 'Sk Zic', 'Sk Zic', NULL, NULL, NULL),
(37, 'HC TECH', 'HC TECH', NULL, NULL, NULL),
(38, 'CleanSing', 'CleanSing', NULL, NULL, NULL),
(39, 'Petron', 'Petron', NULL, NULL, NULL),
(40, 'FullySynthetic', 'FullySynthetic', NULL, NULL, NULL);

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
(1, '2022_02_27_061011_create_roles_table', 1),
(2, '2023_01_27_060941_create_users_table', 1),
(3, '2023_02_26_060856_create_suppliers_table', 1),
(4, '2023_02_26_061046_create_brands_table', 1),
(5, '2023_02_27_060813_create_products_table', 1),
(6, '2023_02_27_063547_create_vouchers_table', 1),
(7, '2023_02_28_061217_create_transactions_table', 1),
(8, '2023_02_29_061132_create_productsales_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_brand_id` bigint(20) UNSIGNED NOT NULL,
  `product_supplier_id` bigint(20) UNSIGNED NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_description` varchar(255) DEFAULT NULL,
  `product_size` varchar(255) DEFAULT NULL,
  `product_purchaseprice` double DEFAULT NULL,
  `product_wholesale` double DEFAULT NULL,
  `product_saleprice` double DEFAULT NULL,
  `product_stocksavail` double DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_brand_id`, `product_supplier_id`, `product_code`, `product_description`, `product_size`, `product_purchaseprice`, `product_wholesale`, `product_saleprice`, `product_stocksavail`, `product_image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(12, 34, 1, '12345', '2Tpowerburn', '200ml', 38.5, 35, 38, 62, '2T-petron', NULL, NULL, NULL),
(13, 35, 3, '674', 'Havoline', '1litters', 200, 195, 200, 42, 'Caltex', NULL, NULL, NULL),
(14, 36, 4, '144', 'ZIC', '1L', 200, 190, 200, 42, 'SK ZIC', NULL, NULL, NULL),
(15, 37, 5, '1234', 'HT TECH', '4T', 250, 245, 250, 62, 'HT TECH', NULL, NULL, NULL),
(16, 38, 6, '3456', 'CleanSing', 'Ax7', 350, 345, 350, 42, 'CleanSing', NULL, NULL, NULL),
(17, 39, 7, '9876', 'Petron Sprint', '1lit', 200, 193, 200, 62, 'PetronSprint', NULL, NULL, NULL),
(18, 40, 8, '645345', 'Makoto', '1L', 190, 180, 190, 62, 'FullySynthetic', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `productsales`
--

CREATE TABLE `productsales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_display_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_display_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Administrator', NULL, NULL, NULL),
(2, 'Branch Manager', NULL, NULL, NULL),
(3, 'Sales Agent', NULL, NULL, NULL),
(4, 'Mekaniko', NULL, NULL, NULL),
(5, 'Receptionist', NULL, NULL, NULL),
(6, 'Cashier', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `supplier_company_name` varchar(255) NOT NULL,
  `supplier_contact` varchar(255) NOT NULL,
  `supplier_address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `supplier_name`, `supplier_company_name`, `supplier_contact`, `supplier_address`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Ralph Keith Villanueva', 'Rio Chico MotorParts', '723942897479', 'Rio Chico NE', NULL, NULL, NULL),
(2, 'Jhonhil Bago', 'Bago MotoParts', '283974234872', 'Pias General Tinio NE', NULL, NULL, NULL),
(3, 'myna', 'Gapan MotorParts', '09912924016', 'Gapan ', NULL, NULL, NULL),
(4, 'Joshua', 'Rio Chico MotorParts', '09262220994', 'Rio Chico', NULL, NULL, NULL),
(5, 'Bisaya', 'Nazareth MotorParts', '09567496923', 'Nazareth', NULL, NULL, NULL),
(6, 'Rafael', 'Bago MotorParts', '0934567345', 'Bago', NULL, NULL, NULL),
(7, 'quen', 'Nazareth', '0923487654', 'Nazareth', NULL, NULL, NULL),
(8, 'Mabel', 'Concepcion MotorParts', '098765432', 'Concepcion', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaction_voucher_id` bigint(20) UNSIGNED NOT NULL,
  `transaction_product_id` bigint(20) UNSIGNED NOT NULL,
  `transaction_cfullName` varchar(255) NOT NULL,
  `transaction_caddress` varchar(255) NOT NULL,
  `transaction_ccontact` varchar(255) NOT NULL,
  `transaction_product_quantity` int(11) NOT NULL,
  `transaction_totalamount` varchar(255) NOT NULL,
  `transaction_payment` varchar(255) NOT NULL,
  `transaction_change` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_role_id` bigint(20) UNSIGNED NOT NULL,
  `user_fname` varchar(255) NOT NULL,
  `user_mname` varchar(255) DEFAULT NULL,
  `user_lname` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_contact` varchar(255) NOT NULL,
  `user_DOB` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_role_id`, `user_fname`, `user_mname`, `user_lname`, `user_address`, `user_contact`, `user_DOB`, `user_email`, `user_username`, `user_password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'kevin', 'felix', 'caluag', 'Bago General Tinio NE', '09261364720', 'Jan-13-2001', 'superadmin@gmail.com', 'superadmin', 'password', NULL, NULL, NULL),
(2, 2, 'myna', '', 'bulawit', 'Conception General Tinio NE.', '09268123667', 'Feb-14-2002', 'branchmanager@gmail.com', 'branchmanager', 'password', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vouchers`
--

CREATE TABLE `vouchers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `voucher_code` varchar(255) NOT NULL,
  `voucher_description` varchar(255) NOT NULL,
  `voucher_discount` varchar(255) NOT NULL,
  `voucher_isActive` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vouchers`
--

INSERT INTO `vouchers` (`id`, `voucher_code`, `voucher_description`, `voucher_discount`, `voucher_isActive`, `created_at`, `updated_at`) VALUES
(2, '3242', 'fdf', '34234', 0, NULL, NULL),
(3, '3', 'fdfe', '34234', 0, NULL, NULL),
(4, 'weqwe', 'qweqwe', '12', 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_product_supplier_id_foreign` (`product_supplier_id`);

--
-- Indexes for table `productsales`
--
ALTER TABLE `productsales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_transaction_voucher_id_foreign` (`transaction_voucher_id`),
  ADD KEY `transactions_transaction_product_id_foreign` (`transaction_product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_user_email_unique` (`user_email`),
  ADD UNIQUE KEY `users_user_username_unique` (`user_username`),
  ADD KEY `users_user_role_id_foreign` (`user_role_id`);

--
-- Indexes for table `vouchers`
--
ALTER TABLE `vouchers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `productsales`
--
ALTER TABLE `productsales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vouchers`
--
ALTER TABLE `vouchers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_product_supplier_id_foreign` FOREIGN KEY (`product_supplier_id`) REFERENCES `suppliers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_transaction_product_id_foreign` FOREIGN KEY (`transaction_product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transactions_transaction_voucher_id_foreign` FOREIGN KEY (`transaction_voucher_id`) REFERENCES `vouchers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_user_role_id_foreign` FOREIGN KEY (`user_role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
