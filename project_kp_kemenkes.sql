-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2022 at 03:47 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_kp_kemenkes`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'idajubaidah@gmail.com', 2, '2022-02-17 08:51:30', 0),
(2, '::1', 'admin12', 2, '2022-02-17 08:53:53', 0),
(3, '::1', 'ida@gmail.com', NULL, '2022-02-17 08:54:59', 0),
(4, '::1', 'admin', NULL, '2022-02-17 08:55:30', 0),
(5, '::1', 'admin', NULL, '2022-02-17 08:55:41', 0),
(6, '::1', 'admin', NULL, '2022-02-17 08:56:02', 0),
(7, '::1', 'idajubaidah32@gmail.com', NULL, '2022-02-17 08:56:14', 0),
(8, '::1', 'admin12', 2, '2022-02-17 08:56:29', 0),
(9, '::1', 'admin12', 2, '2022-02-17 08:56:49', 0),
(10, '::1', 'ida@gmail.com', 4, '2022-02-17 09:01:24', 1),
(11, '::1', 'ida@gmail.com', 4, '2022-02-17 09:02:48', 1),
(12, '::1', 'ida@gmail.com', 4, '2022-02-17 09:12:30', 1),
(13, '::1', 'admin', NULL, '2022-02-21 19:30:22', 0),
(14, '::1', 'admin', NULL, '2022-02-21 19:30:59', 0),
(15, '::1', 'ida@gmail.com', NULL, '2022-02-21 19:31:28', 0),
(16, '::1', 'admin', NULL, '2022-02-21 19:31:41', 0),
(17, '::1', 'admin', NULL, '2022-02-21 19:31:50', 0),
(18, '::1', 'idajubaidah32@gmail.com', NULL, '2022-02-21 19:32:23', 0),
(19, '::1', 'idajubaidah32@gmail.com', NULL, '2022-02-21 19:32:38', 0),
(20, '::1', 'admin', NULL, '2022-02-21 19:32:47', 0),
(21, '::1', 'admin12', NULL, '2022-02-21 19:33:06', 0),
(22, '::1', 'ida', NULL, '2022-02-21 19:33:43', 0),
(23, '::1', 'ida', NULL, '2022-02-21 19:33:50', 0),
(24, '::1', 'ida', NULL, '2022-02-21 19:33:58', 0),
(25, '::1', 'admin', NULL, '2022-02-21 19:36:05', 0),
(26, '::1', 'admin', NULL, '2022-02-21 19:36:15', 0),
(27, '::1', 'admin', NULL, '2022-02-21 19:36:23', 0),
(28, '::1', 'idajubaidah@gmail.com', NULL, '2022-02-21 19:38:09', 0),
(29, '::1', 'idajubaidah@gmail.com', NULL, '2022-02-21 19:38:18', 0),
(30, '::1', 'idajubaidah32@gmail.com', 1, '2022-02-21 19:43:59', 0),
(31, '::1', 'idajubaidah32@gmail.com', NULL, '2022-02-21 19:44:06', 0),
(32, '::1', 'idajubaidah@gmail.com', NULL, '2022-02-21 19:44:14', 0),
(33, '::1', 'ida', NULL, '2022-02-21 19:44:22', 0),
(34, '::1', 'admin', NULL, '2022-02-21 19:46:06', 0),
(35, '::1', 'days@gmail.com', 5, '2022-02-21 19:46:28', 1),
(36, '::1', 'days@gmail.com', 5, '2022-02-24 19:54:01', 1),
(37, '::1', 'days@gmail.com', 5, '2022-02-27 22:26:02', 1),
(38, '::1', 'days@gmail.com', 5, '2022-02-28 07:43:06', 1),
(39, '::1', 'admin', NULL, '2022-02-28 09:27:29', 0),
(40, '::1', 'days@gmail.com', 5, '2022-02-28 09:27:39', 1),
(41, '::1', 'days@gmail.com', 5, '2022-02-28 10:46:32', 1),
(42, '::1', 'days@gmail.com', 5, '2022-02-28 19:35:06', 1),
(43, '::1', 'days@gmail.com', 5, '2022-03-02 00:40:53', 1),
(44, '::1', 'days@gmail.com', 5, '2022-03-02 02:20:40', 1),
(45, '::1', 'days@gmail.com', 5, '2022-03-06 08:09:27', 1),
(46, '::1', 'days@gmail.com', 5, '2022-03-07 09:14:59', 1),
(47, '::1', 'days@gmail.com', 5, '2022-03-07 21:25:25', 1),
(48, '::1', 'days@gmail.com', 5, '2022-03-08 07:41:34', 1),
(49, '::1', 'days@gmail.com', 5, '2022-03-08 21:35:15', 1),
(50, '::1', 'days@gmail.com', 5, '2022-03-12 07:16:36', 1),
(51, '::1', 'days@gmail.com', 5, '2022-03-14 01:11:45', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2022-02-07-142851', 'App\\Database\\Migrations\\Registers', 'default', 'App', 1644246112, 1),
(2, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1645107423, 2);

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE `registers` (
  `id` int(10) UNSIGNED NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('Perempuan','Laki-laki') NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `jenis_tes` enum('PCR','Antigen') NOT NULL,
  `tgl_tes` date NOT NULL,
  `kd_satuan_kerja` varchar(20) NOT NULL,
  `kd_unit_kerja` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registers`
--

INSERT INTO `registers` (`id`, `nik`, `nama`, `alamat`, `tgl_lahir`, `jenis_kelamin`, `no_hp`, `jenis_tes`, `tgl_tes`, `kd_satuan_kerja`, `kd_unit_kerja`) VALUES
(2, '1111111111111111', 'ida', 'Jln. kemang sari IV Gg. Pulo 1 Jatibening baru Pondok Gede Kota Bekasi', '2018-12-21', 'Perempuan', '111111111111', 'PCR', '2022-03-10', '700702000000 ', '700702000001'),
(3, '2222222222222222', 'Indriani', 'Jln. Jendral Sudriman RT003/09 Bekasi Kota', '2013-03-30', 'Perempuan', '00000000000', 'Antigen', '2022-03-10', '700705000000 ', '700705000001'),
(4, '3333333333333333', 'Riska', 'Indosiar Jakarta Barat', '2017-06-22', 'Perempuan', '3333333333333', 'Antigen', '2022-03-11', '700701000000 ', '700701000003'),
(5, '4444444444444444', 'Andre', 'Jatimekar Pondok Gede Kota Bekasi', '1999-01-18', 'Laki-laki', '082118211821', 'Antigen', '2022-03-14', '700703000000 ', '700703000002'),
(6, '5555555555555555', 'Budi', 'Bandung', '2016-10-28', 'Laki-laki', '088875543637', 'Antigen', '2022-03-14', '700704000000 ', '700704000001'),
(7, '6666666666666667', 'Ani', 'Cikunir Bekasi', '2016-07-09', 'Perempuan', '088875543637', 'Antigen', '2022-03-16', '700702000000 ', '700702000002'),
(8, '8888888888888888', 'Ainun', 'Jatibening baru pondok gede kota bekasi 17412', '2015-12-14', 'Perempuan', '088875543630', 'PCR', '2022-03-17', '700704000000 ', '700704000003'),
(9, '1111111111111112', 'Ida Jubaidah', 'Jatimekar', '2010-12-21', 'Perempuan', '088875543633', 'PCR', '2022-03-14', '700705000000 ', '700705000001'),
(10, '1111111111111112', 'Ida Jubaidah', 'Jatimekar', '2010-12-21', 'Perempuan', '088875543633', 'Antigen', '2022-03-15', '700705000000 ', '700705000001'),
(11, '1234567891011345', 'aaaaaaaaaaaa', 'Jatimekar', '2022-02-04', 'Perempuan', '088875543630', 'Antigen', '2022-03-14', '700703000000 ', '700703000001'),
(12, '1234567891011345', 'aaaaaaaaaaaa', 'Jatimekar', '2022-02-04', 'Perempuan', '088875543630', 'PCR', '2022-03-14', '700703000000 ', '700703000001'),
(13, '1234567891011345', 'aaaaaaaaaaaa', 'Jatimekar', '2022-02-04', 'Perempuan', '088875543630', 'PCR', '2022-03-14', '700703000000 ', '700703000001'),
(14, '1111111111111112', 'Ida Jubaidah', 'Jatimekar', '2010-12-21', 'Perempuan', '088875543633', 'PCR', '2022-03-16', '700705000000 ', '700705000001'),
(15, '1234567891011345', 'aaaaaaaaaaaa', 'Jatimekar', '2022-02-04', 'Perempuan', '088875543630', 'Antigen', '2022-03-15', '700703000000 ', '700703000001'),
(16, '6666666666666666', 'Ida Jubaidah', 'Jatibening', '2021-11-11', 'Perempuan', '088875543633', 'PCR', '2022-03-16', '700704000000 ', '700704000002'),
(17, '1234567891011345', 'aaaaaaaaaaaa', 'Jatimekar', '2022-02-04', 'Perempuan', '088875543630', 'Antigen', '2022-03-15', '700703000000 ', '700703000001'),
(18, '9999999999999999', 'Ida Jubaidah', 'Bandung', '2021-12-09', 'Perempuan', '088875543637', 'PCR', '2022-03-16', '700704000000 ', '700704000002'),
(19, '1234', 'ss', 'Jatimekar', '2022-03-04', 'Perempuan', '088875543633', 'PCR', '2022-03-16', '700704000000 ', '700704000002');

-- --------------------------------------------------------

--
-- Table structure for table `satuankerja`
--

CREATE TABLE `satuankerja` (
  `id_satuan_kerja` int(20) NOT NULL,
  `kd_satuan_kerja` varchar(20) NOT NULL,
  `satuan_kerja` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `satuankerja`
--

INSERT INTO `satuankerja` (`id_satuan_kerja`, `kd_satuan_kerja`, `satuan_kerja`) VALUES
(1, '700701000000', 'Sekretariat Badan Litbangkes'),
(2, '700702000000', 'Puslitbang Biomedis dan Teknologi Dasar Kesehatan'),
(3, '700703000000', 'Puslitbang Sumber Daya dan Pelayanan Kesehatan'),
(4, '700704000000', 'Puslitbang Upaya Kesehatan Masyarakat'),
(5, '700705000000', 'Puslitbang Humaniora dan Manajemen Kesehatan');

-- --------------------------------------------------------

--
-- Table structure for table `unitkerja`
--

CREATE TABLE `unitkerja` (
  `id_unit_kerja` int(20) NOT NULL,
  `kd_unit_kerja` varchar(20) NOT NULL,
  `unit_kerja` varchar(200) NOT NULL,
  `id_satuan_kerja` int(20) NOT NULL,
  `kd_satuan_kerja` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unitkerja`
--

INSERT INTO `unitkerja` (`id_unit_kerja`, `kd_unit_kerja`, `unit_kerja`, `id_satuan_kerja`, `kd_satuan_kerja`) VALUES
(1, '700701000001', 'Kelompok Substansi Keuangan dan Barang Milik Negara', 1, '700701000000'),
(2, '700701000002', 'Kelompok Substansi Umum, Dokumentasi, dan Jejaring', 1, '700701000000'),
(3, '700701000003', 'Kelompok Substansi Program dan Informasi', 1, '700701000000'),
(4, '700701000004', 'Kelompok Substansi Hukum, Organisasi, dan Kepegawaian', 1, '700701000000'),
(5, '700702000001', 'Kelompok Substansi Teknologi Dasar Kesehatan', 2, '700702000000'),
(6, '700702000002', 'Kelompok Substansi Biomedis', 2, '700702000000'),
(7, '700703000001', 'Kelompok Substansi Pelayanan Kesehatan', 3, '700703000000'),
(8, '700703000002', 'Kelompok Substansi Sumber Daya Kesehatan', 3, '700703000000'),
(9, '700704000001', 'Kelompok Substansi Pencegahan dan Pengendalian Penyakit', 4, '700704000000'),
(10, '700704000002', 'Kelompok Substansi Kesehatan Masyarakat', 4, '700704000000'),
(11, '700704000003', 'Kelompok Substansi Tata Usaha', 4, '700704000000'),
(12, '700705000001', 'Kelompok Substansi Humaniora Kesehatan', 5, '700705000000'),
(13, '700705000002', 'Kelompok Substansi Manajemen Kesehatan', 5, '700705000000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'idajubaidah@gmail.com', 'admin12', '$2y$10$.lgEHhVCOjjHuBR4v6tztO54nngK2ymgskXT2qvR2gQSZl1xVQSZe', NULL, NULL, NULL, 'b513dafed612d8da116c2dc8a00dbf03', NULL, NULL, 0, 0, '2022-02-17 08:49:56', '2022-02-17 08:49:56', NULL),
(4, 'ida@gmail.com', 'ida', '$2y$10$zwUIhRdri3WjQnWz1pmNCuw..atCBYGEuKvtI24VhBz37DSWnRJU6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-02-17 09:00:58', '2022-02-17 09:00:58', NULL),
(5, 'days@gmail.com', 'admin', '$2y$10$EJO.QIVdPR5toONcWWXqz.cZvg/Y2uRJ.B4K/vGM/2.Dyg2F0y6EC', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-02-21 19:45:55', '2022-02-21 19:45:55', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `satuankerja`
--
ALTER TABLE `satuankerja`
  ADD PRIMARY KEY (`id_satuan_kerja`);

--
-- Indexes for table `unitkerja`
--
ALTER TABLE `unitkerja`
  ADD PRIMARY KEY (`id_unit_kerja`),
  ADD KEY `id_satuan_kerja` (`id_satuan_kerja`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `satuankerja`
--
ALTER TABLE `satuankerja`
  MODIFY `id_satuan_kerja` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `unitkerja`
--
ALTER TABLE `unitkerja`
  MODIFY `id_unit_kerja` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
