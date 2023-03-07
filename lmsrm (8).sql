-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2023 at 01:13 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

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
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` int(11) NOT NULL,
  `agent_name` varchar(255) NOT NULL,
  `agent_address` varchar(255) NOT NULL,
  `agent_contact` varchar(255) NOT NULL,
  `agent_since_when` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` int(11) NOT NULL,
  `applicant_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `applicants_informations`
--

CREATE TABLE `applicants_informations` (
  `id` int(100) NOT NULL,
  `app_fname` varchar(255) NOT NULL,
  `app_lname` varchar(255) NOT NULL,
  `app_mname` varchar(255) NOT NULL,
  `app_DOB` varchar(255) NOT NULL,
  `app_isMarried` int(11) NOT NULL DEFAULT 0,
  `app_religion` varchar(255) NOT NULL,
  `app_nickname` varchar(255) NOT NULL,
  `app_present_add` varchar(255) NOT NULL,
  `app_previous_add` varchar(255) NOT NULL,
  `app_home_add` varchar(255) NOT NULL,
  `app_birth_place` varchar(255) NOT NULL,
  `app_isOwnHouseLot` int(11) NOT NULL DEFAULT 0,
  `app_length_of_residency` int(11) NOT NULL,
  `app_contact` varchar(15) NOT NULL,
  `app_isEmployed` int(11) NOT NULL DEFAULT 0,
  `app_firm` varchar(255) DEFAULT NULL,
  `app_address` varchar(255) DEFAULT NULL,
  `app_position` varchar(255) DEFAULT NULL,
  `app_salary` double DEFAULT NULL,
  `app_length_of_service` int(11) DEFAULT NULL,
  `app_isBusiness` int(11) NOT NULL DEFAULT 0,
  `app_business_name` varchar(255) DEFAULT NULL,
  `app_business_address` varchar(255) DEFAULT NULL,
  `app_business_line` varchar(255) DEFAULT NULL,
  `app_sinceWhen` varchar(255) DEFAULT NULL,
  `app_capital` double DEFAULT NULL,
  `app_net_income` double NOT NULL,
  `app_other_income` varchar(255) NOT NULL,
  `app_father_name` varchar(255) DEFAULT NULL,
  `app_father_DOB` varchar(255) DEFAULT NULL,
  `app_father_occupation` varchar(255) DEFAULT NULL,
  `app_mother_name` varchar(255) DEFAULT NULL,
  `app_mother_DOB` varchar(255) DEFAULT NULL,
  `app_mother_occupation` varchar(255) DEFAULT NULL,
  `app_co_maker_name` varchar(255) NOT NULL,
  `app_co_maker_address` varchar(255) NOT NULL,
  `app_co_maker_contact` varchar(15) NOT NULL,
  `app_agent_id` int(11) DEFAULT NULL,
  `app_signature` varchar(255) NOT NULL,
  `app_valid_id` int(11) NOT NULL,
  `app_tin_number` varchar(255) DEFAULT NULL,
  `app_sss_number` varchar(255) DEFAULT NULL,
  `app_email_add` varchar(255) DEFAULT NULL,
  `app_facebook_acc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(1, 'Rusi boxer motorcycle.jpg', 'Honda', NULL, NULL, NULL),
(2, 'Picture1.png', 'Kawasaki', NULL, NULL, NULL),
(3, 'rusilogo.png', 'Yamahas', NULL, NULL, NULL),
(34, 'rusilogo.png', 'Petron', NULL, NULL, NULL),
(35, 'rusilogo.png', 'Caltex', NULL, NULL, NULL),
(36, 'rusilogo.png', 'Sk Zic', NULL, NULL, NULL),
(37, 'rusilogo.png', 'HC TECH', NULL, NULL, NULL),
(38, 'rusilogo.png', 'CleanSing', NULL, NULL, NULL),
(39, 'rusilogo.png', 'Petron', NULL, NULL, NULL),
(40, 'rusilogo.png', 'FullySynthetic', NULL, NULL, NULL),
(42, 'rusilogo.png', 'asd', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` bigint(20) UNSIGNED NOT NULL,
  `invoice_number` varchar(255) NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `totalAmount` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_id`, `invoice_number`, `product_id`, `quantity`, `totalAmount`, `created_at`, `updated_at`) VALUES
(28, 'RS-20522', 13, 1, 200, NULL, NULL),
(29, 'RS-20522', 15, 1, 250, NULL, NULL),
(30, 'RS-22230', 13, 2, 0, NULL, NULL),
(31, 'RS-22230', 16, 1, 350, NULL, NULL),
(32, 'RS-22230', 15, 1, 250, NULL, NULL),
(33, 'RS-22230', 17, 1, 200, NULL, NULL),
(34, 'RS-2330', 12, 1, 38, NULL, NULL),
(35, 'RS-72932', 12, 1, 38, NULL, NULL);

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
(8, '2023_02_28_144112_create_invoice_table', 1),
(9, '2023_02_29_061132_create_productsales_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `motorcycles`
--

CREATE TABLE `motorcycles` (
  `id` int(11) NOT NULL,
  `motor_name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `motor_engineType` varchar(100) NOT NULL,
  `motor_displacement` varchar(100) NOT NULL,
  `motor_startingsystem` varchar(100) NOT NULL,
  `motor_borestroke` varchar(100) NOT NULL,
  `motor_brakeTypeFront` varchar(100) NOT NULL,
  `motor_brakeTypeRear` varchar(100) NOT NULL,
  `motor_tiresizeFront` varchar(100) NOT NULL,
  `motor_tiresizeRear` varchar(100) NOT NULL,
  `motor_wheelType` varchar(100) NOT NULL,
  `motor_overallDimension` varchar(100) NOT NULL,
  `motor_curbweight` varchar(100) NOT NULL,
  `motor_seatheight` varchar(100) NOT NULL,
  `motor_groundClearance` varchar(100) NOT NULL,
  `motor_fuelTankCapacity` varchar(100) NOT NULL,
  `motor_fuelSystem` varchar(100) NOT NULL,
  `motor_batteryType` varchar(100) NOT NULL,
  `motor_engineOilCapacity` varchar(100) NOT NULL,
  `motor_gearShiftPattern` varchar(100) NOT NULL,
  `motor_description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `motorcycles`
--

INSERT INTO `motorcycles` (`id`, `motor_name`, `image`, `motor_engineType`, `motor_displacement`, `motor_startingsystem`, `motor_borestroke`, `motor_brakeTypeFront`, `motor_brakeTypeRear`, `motor_tiresizeFront`, `motor_tiresizeRear`, `motor_wheelType`, `motor_overallDimension`, `motor_curbweight`, `motor_seatheight`, `motor_groundClearance`, `motor_fuelTankCapacity`, `motor_fuelSystem`, `motor_batteryType`, `motor_engineOilCapacity`, `motor_gearShiftPattern`, `motor_description`) VALUES
(1, 'CBR150R 150R', 'cbr150R.png', '4-Stroke, 4-Valve, DOHC, Liquid-Cooled', '149cc', 'Electric', '57.3 x 57.8 mm', 'Hydraulic Disc with ABS', 'Hydraulic Disc with ABS', '100/80-17M/C 52P (Tubeless)', '130/70-17M/C 62P (Tubeless)', 'Cast Wheel', '1,983 X 700 X 1,090 mm', '138 kg', '\r\n788 mm', '151 mm', '12L', 'PGM-Fi', '\r\n12V 5Ah MF-Wet', '1.3 L', '1-N-2-3-4-5-6 (Down Up)', 'Race like a champion everyday with power and confidence on the road. It has an overall design upgrade with Fireblade-inspired image that will surely ignite your passion in riding.\n\nIt features a new assist/slipper clutch, inverted front fork, and new LED headlight, tail light design, and front winker. On the other hand, it retains its Bank Angle Sensor, a built-in safety feature that automatically turns off the engine when you bank 60° on either sides.\n\nThe New CBR150R comes in Winning Red (Honda Tri-Color) color variant and has a suggested retail price of PhP 183,900.00.\n\nFire Up Your Ride with The New CBR150R!'),
(2, 'CBR250R 150R', 'cbr150R.png', '4-Stroke, 4-Valve, DOHC, Liquid-Cooled', '149cc', 'Electric', '57.3 x 57.8 mm', 'Hydraulic Disc with ABS', 'Hydraulic Disc with ABS', '100/80-17M/C 52P (Tubeless)', '130/70-17M/C 62P (Tubeless)', 'Cast Wheel', '1,983 X 700 X 1,090 mm', '138 kg', '\r\n788 mm', '151 mm', '12L', 'PGM-Fi', '\r\n12V 5Ah MF-Wet', '1.3 L', '1-N-2-3-4-5-6 (Down Up)', 'Race like a champion everyday with power and confidence on the road. It has an overall design upgrade with Fireblade-inspired image that will surely ignite your passion in riding.\n\nIt features a new assist/slipper clutch, inverted front fork, and new LED headlight, tail light design, and front winker. On the other hand, it retains its Bank Angle Sensor, a built-in safety feature that automatically turns off the engine when you bank 60° on either sides.\n\nThe New CBR150R comes in Winning Red (Honda Tri-Color) color variant and has a suggested retail price of PhP 183,900.00.\n\nFire Up Your Ride with The New CBR150R!');

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
(12, 34, 1, '202510', '2Tpowerburn', '200ml', 38.5, 35, 38, 62, '2T-petron', NULL, NULL, NULL),
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
(5, 'Receptionist', NULL, NULL, NULL);

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
  `transaction_voucher_id` bigint(20) UNSIGNED DEFAULT NULL,
  `transaction_invoice_number` varchar(20) NOT NULL,
  `transaction_cfullName` varchar(255) NOT NULL,
  `transaction_caddress` varchar(255) NOT NULL,
  `transaction_totalAmount` double NOT NULL,
  `transaction_payment` varchar(255) NOT NULL,
  `transaction_change` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `transaction_voucher_id`, `transaction_invoice_number`, `transaction_cfullName`, `transaction_caddress`, `transaction_totalAmount`, `transaction_payment`, `transaction_change`, `created_at`, `updated_at`, `deleted_at`) VALUES
(23, 0, 'RS-20522', 'Kevin Felix Caluag', 'Bago General Tinio NE', 450, '500', '50', NULL, NULL, NULL),
(24, 0, 'RS-22230', 'Myna Bulawit', 'Concepcion', 1200, '1200', '0', NULL, NULL, NULL),
(25, 0, 'RS-2330', 'Customer-RS-2330', 'Address-RS-2330', 38, '50', '12', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_role_id` bigint(20) UNSIGNED NOT NULL,
  `user_profile` varchar(50) NOT NULL,
  `user_fname` varchar(255) NOT NULL,
  `user_mname` varchar(255) DEFAULT NULL,
  `user_lname` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_contact` varchar(255) NOT NULL,
  `user_DOB` varchar(255) NOT NULL,
  `isMale` varchar(10) NOT NULL,
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

INSERT INTO `users` (`id`, `user_role_id`, `user_profile`, `user_fname`, `user_mname`, `user_lname`, `user_address`, `user_contact`, `user_DOB`, `isMale`, `user_email`, `user_username`, `user_password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'WIN_20221215_17_51_23_Pro.jpg', 'kevin', 'felix', 'caluag', 'Bago General Tinio NE', '09261364720', 'Jan-13-2001', 'male', 'superadmin@gmail.com', 'superadmin', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, NULL, NULL),
(2, 4, 'myna.jpg', 'myna', '', 'bulawit', 'Conception General Tinio NE.', '09268123667', 'Feb-14-2002', 'female', 'branchmanager@gmail.com', 'branchmanager', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, NULL, NULL),
(3, 1, 'userlogomale.png', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasdasd', 'asdasd', 'male', 'kfc1010@gmail.com', 'kfc', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, NULL, NULL);

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
(0, 'NULL', 'NULL', 'NULL', 0, NULL, NULL),
(3, '3', 'fdfe', '34234', 0, NULL, NULL),
(4, 'weqwe', 'qweqwe', '12', 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicants_app_info_id` (`applicant_id`);

--
-- Indexes for table `applicants_informations`
--
ALTER TABLE `applicants_informations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`),
  ADD KEY `invoice_product_id_foreign` (`product_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motorcycles`
--
ALTER TABLE `motorcycles`
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
  ADD KEY `transactions_transaction_voucher_id_foreign` (`transaction_voucher_id`);

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
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applicants_informations`
--
ALTER TABLE `applicants_informations`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `motorcycles`
--
ALTER TABLE `motorcycles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vouchers`
--
ALTER TABLE `vouchers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applicants`
--
ALTER TABLE `applicants`
  ADD CONSTRAINT `applicants_app_info_id` FOREIGN KEY (`applicant_id`) REFERENCES `applicants_informations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_product_supplier_id_foreign` FOREIGN KEY (`product_supplier_id`) REFERENCES `suppliers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transaction_voucher_id` FOREIGN KEY (`transaction_voucher_id`) REFERENCES `vouchers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_user_role_id_foreign` FOREIGN KEY (`user_role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
