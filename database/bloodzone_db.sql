-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2019 at 11:42 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodzone_db`
--
CREATE DATABASE IF NOT EXISTS `bloodzone_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bloodzone_db`;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `a_id` int(11) NOT NULL,
  `d_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blood_bags`
--

CREATE TABLE `blood_bags` (
  `bb_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `donation_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity_cc` decimal(5,2) NOT NULL,
  `blood_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiry_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `centers`
--

CREATE TABLE `centers` (
  `c_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `landmark` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `license` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `donation_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pe_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ls_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bb_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount_donated_cc` decimal(5,2) NOT NULL,
  `donation_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `d_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donor_profiles`
--

CREATE TABLE `donor_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `d_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `landmark` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `global_inventories`
--

CREATE TABLE `global_inventories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bb_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `available` tinyint(1) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lab_scientists`
--

CREATE TABLE `lab_scientists` (
  `ls_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_24_122801_create_admins_table', 1),
(4, '2019_12_24_130428_create_centers_table', 1),
(5, '2019_12_24_131235_create_lab_scientists_table', 1),
(6, '2019_12_24_132322_create_donors_table', 1),
(7, '2019_12_24_132744_create_donor_profiles_table', 1),
(8, '2019_12_24_133231_create_appointments_table', 1),
(9, '2019_12_24_134305_create_donations_table', 1),
(10, '2019_12_24_135847_create_pre_exams_table', 1),
(11, '2019_12_24_140738_create_blood_bags_table', 1),
(12, '2019_12_24_142623_create_patients_table', 1),
(13, '2019_12_24_182104_create_transfusions_table', 1),
(14, '2019_12_24_224944_create_global_inventories_table', 1),
(15, '2019_12_24_231651_create_transactions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `p_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `blood_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `need_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pre_exams`
--

CREATE TABLE `pre_exams` (
  `pe_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hemoglobin_gDl` decimal(5,2) NOT NULL,
  `temperature_F` decimal(5,2) NOT NULL,
  `blood_pressure` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pulse_rate_BPM` int(11) NOT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `syphilis` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hepatitis_b` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hepatitis_c` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hepatitis_e` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hiv` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_transaction` date NOT NULL,
  `c_from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_units` int(11) NOT NULL,
  `unit_price` decimal(8,2) NOT NULL,
  `total_sales_price` decimal(8,2) NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transfusions`
--

CREATE TABLE `transfusions` (
  `t_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pe_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bb_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ls_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount_recieved_cc` decimal(5,2) NOT NULL,
  `transfusion_date` date NOT NULL,
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_id_unique` (`id`),
  ADD UNIQUE KEY `admins_admin_id_unique` (`admin_id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`a_id`),
  ADD UNIQUE KEY `appointments_a_id_unique` (`a_id`),
  ADD KEY `appointments_d_id_index` (`d_id`),
  ADD KEY `appointments_c_id_index` (`c_id`);

--
-- Indexes for table `blood_bags`
--
ALTER TABLE `blood_bags`
  ADD PRIMARY KEY (`bb_id`),
  ADD UNIQUE KEY `blood_bags_bb_id_unique` (`bb_id`);

--
-- Indexes for table `centers`
--
ALTER TABLE `centers`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `centers_c_id_unique` (`c_id`),
  ADD UNIQUE KEY `centers_email_unique` (`email`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`donation_id`),
  ADD UNIQUE KEY `donations_donation_id_unique` (`donation_id`),
  ADD KEY `donations_d_id_index` (`d_id`),
  ADD KEY `donations_pe_id_index` (`pe_id`),
  ADD KEY `donations_ls_id_index` (`ls_id`),
  ADD KEY `donations_c_id_index` (`c_id`),
  ADD KEY `donations_bb_id_index` (`bb_id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`d_id`),
  ADD UNIQUE KEY `donors_d_id_unique` (`d_id`);

--
-- Indexes for table `donor_profiles`
--
ALTER TABLE `donor_profiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `donor_profiles_id_unique` (`id`),
  ADD KEY `donor_profiles_d_id_index` (`d_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `global_inventories`
--
ALTER TABLE `global_inventories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `global_inventories_id_unique` (`id`),
  ADD KEY `global_inventories_bb_id_index` (`bb_id`),
  ADD KEY `global_inventories_c_id_index` (`c_id`);

--
-- Indexes for table `lab_scientists`
--
ALTER TABLE `lab_scientists`
  ADD PRIMARY KEY (`ls_id`),
  ADD UNIQUE KEY `lab_scientists_ls_id_unique` (`ls_id`),
  ADD UNIQUE KEY `lab_scientists_email_unique` (`email`),
  ADD KEY `lab_scientists_c_id_index` (`c_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`p_id`),
  ADD UNIQUE KEY `patients_p_id_unique` (`p_id`);

--
-- Indexes for table `pre_exams`
--
ALTER TABLE `pre_exams`
  ADD PRIMARY KEY (`pe_id`),
  ADD UNIQUE KEY `pre_exams_pe_id_unique` (`pe_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transaction_id`),
  ADD UNIQUE KEY `transactions_transaction_id_unique` (`transaction_id`),
  ADD KEY `transactions_c_from_index` (`c_from`),
  ADD KEY `transactions_c_to_index` (`c_to`);

--
-- Indexes for table `transfusions`
--
ALTER TABLE `transfusions`
  ADD PRIMARY KEY (`t_id`),
  ADD UNIQUE KEY `transfusions_t_id_unique` (`t_id`),
  ADD KEY `transfusions_p_id_index` (`p_id`),
  ADD KEY `transfusions_pe_id_index` (`pe_id`),
  ADD KEY `transfusions_c_id_index` (`c_id`),
  ADD KEY `transfusions_bb_id_index` (`bb_id`),
  ADD KEY `transfusions_ls_id_index` (`ls_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donor_profiles`
--
ALTER TABLE `donor_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `global_inventories`
--
ALTER TABLE `global_inventories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
