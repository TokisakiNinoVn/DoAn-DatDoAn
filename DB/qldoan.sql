-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2024 at 08:41 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qldoan`
--

-- --------------------------------------------------------

--
-- Table structure for table `ban_an`
--

CREATE TABLE `ban_an` (
  `id` int(11) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ban_an`
--

INSERT INTO `ban_an` (`id`, `name`) VALUES
(1, 'Bàn 1'),
(2, 'Bàn 2'),
(3, 'Bàn 3'),
(4, 'Bàn 4'),
(5, 'Bàn 5'),
(6, 'Bàn 6'),
(7, 'Bàn 7'),
(8, 'Bàn 8'),
(9, 'Bàn 9'),
(10, 'Bàn 10'),
(11, 'bàn 11'),
(12, 'Bàn 12');

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` int(11) NOT NULL,
  `date_order` varchar(50) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `date_order`, `total`) VALUES
(131, 'Wed-15-05-2024', 8400100);

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`id`, `name`) VALUES
(1, 'Lẩu sinh viên'),
(2, 'Đồ ăn thêm'),
(3, 'Đồ uống'),
(4, 'Đồ tráng miệng'),
(5, 'Đồ ăn nhanh');

-- --------------------------------------------------------

--
-- Table structure for table `detail_bills`
--

CREATE TABLE `detail_bills` (
  `id` int(11) NOT NULL,
  `id_bill` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `detail_bills`
--

INSERT INTO `detail_bills` (`id`, `id_bill`, `id_product`, `soluong`) VALUES
(110, 104, 1, 1),
(111, 105, 1, 2),
(112, 106, 7, 4),
(113, 107, 3, 1),
(114, 108, 1, 2),
(115, 108, 3, 3),
(116, 109, 7, 3),
(117, 110, 3, 6),
(118, 111, 21, 1),
(119, 112, 1, 1),
(120, 113, 1, 7),
(121, 114, 3, 1),
(122, 115, 7, 3),
(123, 116, 1, 2),
(124, 116, 49, 1),
(125, 117, 7, 1),
(126, 117, 3, 1),
(127, 118, 3, 1),
(128, 119, 7, 1),
(129, 120, 3, 1),
(130, 121, 7, 1),
(131, 122, 1, 1),
(132, 122, 7, 1),
(133, 122, 3, 1),
(134, 123, 3, 1),
(135, 123, 1, 1),
(136, 123, 21, 1),
(137, 124, 7, 1),
(138, 124, 3, 2),
(139, 124, 1, 2),
(140, 125, 7, 1),
(141, 125, 49, 1),
(142, 126, 7, 1),
(143, 126, 49, 1),
(144, 127, 7, 1),
(145, 128, 7, 1),
(146, 129, 3, 1),
(147, 129, 7, 1),
(148, 130, 1, 1),
(149, 131, 7, 7),
(150, 131, 1, 1),
(151, 131, 49, 1);

-- --------------------------------------------------------

--
-- Table structure for table `giohang_khach`
--

CREATE TABLE `giohang_khach` (
  `id` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_products` int(11) NOT NULL,
  `name_product` varchar(200) NOT NULL,
  `image_product` text NOT NULL,
  `soluong` int(11) NOT NULL,
  `tong_gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `giohang_khach`
--

INSERT INTO `giohang_khach` (`id`, `id_users`, `id_products`, `name_product`, `image_product`, `soluong`, `tong_gia`) VALUES
(195, 6, 5, 'Lẩu ếch', 'lauech.jpg', 3, 10500000),
(196, 1, 5, 'Lẩu ếch', 'lauech.jpg', 4, 14000000),
(197, 1, 20, 'Lẩu chim câu', 'uXu_lauchimcau.jpg', 6, 24000000),
(198, 1, 30, 'pepsi', 'x9m_pepsi.jpg', 1, 100000),
(199, 7, 14, 'Quýt', 'quyt.jpg', 3, 10500000),
(200, 7, 15, 'Khoai tây chiên', 'khoaitaychien.jpg', 5, 1000000),
(201, 7, 11, 'Rượu vokamen', 'ruouvoka.jpg', 1, 300000),
(202, 7, 12, 'Rượu chuối hột', 'ruouchuoihot.jpg', 1, 300000),
(203, 7, 13, 'Dưa hấu', 'duahau.jpg', 1, 500000),
(204, 7, 14, 'Quýt', 'quyt.jpg', 3, 10500000),
(205, 9, 6, 'Lẩu cần', 'laucodon.jpg', 1, 250000),
(206, 9, 43, 'Dưa chuột', 'aQU_dưa chuột.jpg', 1, 20000),
(207, 9, 50, 'Mì hành', '37g_miHanh.jpg', 1, 70000),
(208, 9, 47, 'Ngô chiên', 'Drg_Ngô chiên.jpg', 1, 250000),
(209, 9, 41, 'Mỳ tôm', '1CP_my tôm.jpg', 1, 50000),
(210, 9, 42, 'Xoài lắc', 'TJc_xoai lắc.jpg', 1, 200000),
(211, 9, 43, 'Dưa chuột', 'aQU_dưa chuột.jpg', 1, 20000),
(212, 9, 44, 'Củ đậu', 'Qxw_cu-dau-700x500.jpg', 1, 150000),
(213, 9, 45, 'Cóc dầm', 'LoI_coc-dam-2.jpg', 1, 150000),
(214, 8, 10, 'Thịt bò mĩ', 'thitbomi.jpg', 1, 3500000),
(215, 8, 29, 'Cocacola', 'EiJ_coca.jpg', 5, 500000),
(216, 8, 42, 'Xoài lắc', 'TJc_xoai lắc.jpg', 4, 800000);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon_khach`
--

CREATE TABLE `hoadon_khach` (
  `id` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `tong_slsp` int(11) NOT NULL,
  `status_bill` text NOT NULL,
  `tong_hoadon` int(11) NOT NULL,
  `type_pay` text NOT NULL,
  `an_o_quan` text NOT NULL,
  `ngay` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hoadon_khach`
--

INSERT INTO `hoadon_khach` (`id`, `id_users`, `tong_slsp`, `status_bill`, `tong_hoadon`, `type_pay`, `an_o_quan`, `ngay`) VALUES
(59, 1, 6, '1', 1550000, '0', 'at_store', '2024-05-15 11:48:47'),
(60, 1, 10, '1', 2000000, '1', 'take_away', '2024-05-15 11:49:03'),
(61, 1, 6, '1', 19500000, '1', 'take_away', '2024-05-15 12:05:28'),
(62, 1, 1, '1', 250000, '1', 'take_away', '2024-05-15 12:11:19'),
(63, 1, 1, '0', 700000, '1', 'at_store', '2024-05-15 12:24:27'),
(64, 6, 23, '0', 36700000, '1', 'at_store', '2024-05-15 12:25:56'),
(65, 6, 9, '0', 2050000, '1', 'take_away', '2024-05-15 12:26:23'),
(66, 6, 1, '1', 3500000, '0', 'at_store', '2024-05-15 12:26:53'),
(67, 6, 1, '1', 250000, '0', 'at_store', '2024-05-15 13:08:23'),
(68, 6, 4, '0', 2000000, '1', 'at_store', '2024-05-15 13:11:17');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `passw` text NOT NULL,
  `email` text NOT NULL,
  `addr` text NOT NULL,
  `sdt` text NOT NULL,
  `avatar_user` text NOT NULL,
  `notes` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`id`, `username`, `passw`, `email`, `addr`, `sdt`, `avatar_user`, `notes`) VALUES
(1, 'tokisakinino', 'tokisakininocute', 'nino.owner.original@gmail.com', 'ICTU Thái Nguyên', '0867807842', 'avtElysia(7).jpg', 'https://nino.is-a.dev/'),
(6, 'mio_cute', 'mio2004@', 'mio@gmail.com', 'Thai Nguyen - Vie', '+8481276318', 'avtElysia(10).jpg', ''),
(7, 'mio', 'mio2xx4', 'mio@gmail.com', '', '', 'avtElysia(9).jpg', ''),
(8, 'nino2k3', '0000', 'nino.owner.original@gmail.com', 'Thái Nguyên', '0867807842', 'avtElysia(12).jpg', ''),
(9, 'among', 'nguyenvana', 'nguyenvana@gmail.com', 'Hà Giang', '02938711', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `order_mon_an`
--

CREATE TABLE `order_mon_an` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `ban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `order_mon_an`
--

INSERT INTO `order_mon_an` (`id`, `id_product`, `quantity`, `ban`) VALUES
(130, 7, 1, 7),
(133, 49, 3, 3),
(135, 7, 1, 0),
(137, 7, 4, 0),
(140, 1, 1, 7),
(141, 7, 6, 12),
(142, 7, 1, 12),
(143, 1, 1, 12),
(144, 49, 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_category` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `img` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `id_category`, `unit_price`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Lẩu thập cẩm ', 1, 3500000, 'lauthapcam.jpg', '2024-04-15 17:31:44', '2024-04-15 17:31:44'),
(3, 'Lẩu hải sản ', 1, 3500000, 'lauhaisanM.jpg', '2024-04-15 17:31:39', '2024-04-15 17:31:39'),
(5, 'Lẩu ếch', 1, 3500000, 'lauech.jpg', '2024-04-15 17:31:35', '2024-04-15 17:31:35'),
(6, 'Lẩu cần', 1, 250000, 'laucodon.jpg', '2024-03-05 16:50:40', '2024-03-05 16:50:40'),
(7, 'Lẩu thái ', 1, 700000, 'lauthaiM.jpg', '2024-04-15 17:31:26', '2024-04-15 17:31:26'),
(9, 'Thịt gà', 2, 2000000, 'thitga.jpg', '2024-04-15 17:31:21', '2024-04-15 17:31:21'),
(10, 'Thịt bò mĩ', 2, 3500000, 'thitbomi.jpg', '2024-04-15 17:31:13', '2024-04-15 17:31:13'),
(11, 'Rượu vokamen', 3, 300000, 'ruouvoka.jpg', '2024-04-15 17:31:09', '2024-04-15 17:31:09'),
(12, 'Rượu chuối hột', 3, 300000, 'ruouchuoihot.jpg', '2024-04-15 17:31:00', '2024-04-15 17:31:00'),
(13, 'Dưa hấu', 4, 500000, 'duahau.jpg', '2024-04-15 17:30:56', '2024-04-15 17:30:56'),
(14, 'Quýt', 4, 3500000, 'quyt.jpg', '2024-04-15 17:30:53', '2024-04-15 17:30:53'),
(15, 'Khoai tây chiên', 5, 200000, 'khoaitaychien.jpg', '2024-04-15 17:30:48', '2024-04-15 17:30:48'),
(17, 'Lẩu hải sản 2', 1, 2500000, 'P04_MS1_lauhaisan2.jpg', '2024-04-15 17:30:43', '2024-04-15 17:30:43'),
(18, 'Lẩu cá', 1, 3500000, 'UpD_lauca.jpg', '2024-04-15 17:30:38', '2024-04-15 17:30:38'),
(19, 'Lẩu thập cẩm 2', 1, 4000000, '283_lauthapcam2.jpg', '2024-04-15 17:30:34', '2024-04-15 17:30:34'),
(20, 'Lẩu chim câu', 1, 4000000, 'uXu_lauchimcau.jpg', '2024-04-15 17:30:30', '2024-04-15 17:30:30'),
(21, 'Lẩu gà VIP', 1, 300000, 'Seu_lauga+ca.jpg', '2024-04-15 17:12:28', '2024-04-15 17:12:28'),
(22, 'Lẩu cua', 1, 5000000, 'zc4_laucua.jpg', '2024-04-15 17:30:23', '2024-04-15 17:30:23'),
(23, 'Lẩu ốc', 1, 4000000, 'mzp_lauoc.jpg', '2024-04-15 17:30:20', '2024-04-15 17:30:20'),
(24, 'rượu dừa', 3, 500000, 'eBB_rượu dừa.jpg', '2024-04-15 17:30:15', '2024-04-15 17:30:15'),
(25, 'rượu nếp cái', 3, 5000000, '5YT_ruou-nếp.jpg', '2024-04-15 17:30:11', '2024-04-15 17:30:11'),
(26, 'rượu đinh lăng', 3, 500000, 'E3b_ruou-dinh-lang-500ml.png', '2024-04-15 17:30:06', '2024-04-15 17:30:06'),
(27, 'rượu táo mèo', 3, 500000, 'VHP_rượu táo mèo.png', '2024-04-15 17:30:03', '2024-04-15 17:30:03'),
(28, 'rượu ong khoái', 3, 500000, 'X6R_OngKhoaiBe.jpg', '2024-04-15 17:29:59', '2024-04-15 17:29:59'),
(29, 'Cocacola', 3, 100000, 'EiJ_coca.jpg', '2024-04-15 17:29:53', '2024-04-15 17:29:53'),
(30, 'pepsi', 3, 100000, 'x9m_pepsi.jpg', '2024-04-15 17:29:50', '2024-04-15 17:29:50'),
(31, '7up', 3, 100000, 'VNR_7up.jpg', '2024-04-15 17:29:15', '2024-04-15 17:29:15'),
(32, 'numberone', 3, 100000, 'chp_bo-huc-1.jpg', '2024-04-15 17:29:19', '2024-04-15 17:29:19'),
(33, 'lavie', 3, 50000, '77n_lavie.png', '2024-04-15 17:29:11', '2024-04-15 17:29:11'),
(34, 'Cá phi lê', 2, 500000, 'AKu_cá.jpg', '2024-04-15 17:29:04', '2024-04-15 17:29:04'),
(35, 'Cua đá', 2, 1500000, 'dfg_cua.jpg', '2024-04-15 17:29:25', '2024-04-15 17:29:25'),
(36, 'ốc xào', 2, 500000, '2D7_ốc xào.jpg', '2024-04-15 17:29:30', '2024-04-15 17:29:30'),
(37, 'Váng đậu', 2, 100000, '9nB_vang-dau-02.jpg', '2024-04-15 17:29:38', '2024-04-15 17:29:38'),
(38, 'Nấm kim', 2, 150000, '1h8_nấm kím.jpg', '2024-04-15 17:29:43', '2024-04-15 17:29:43'),
(39, 'Bò quấn nấm', 2, 500000, 'h7I_bò nấm.jpg', '2024-04-15 17:28:55', '2024-04-15 17:28:55'),
(40, 'đậu phụ', 2, 100000, 'D8S_dau-phu.jpg', '2024-04-15 17:27:00', '2024-04-15 17:27:00'),
(41, 'Mỳ tôm', 2, 50000, '1CP_my tôm.jpg', '2024-04-15 17:26:23', '2024-04-15 17:26:23'),
(42, 'Xoài lắc', 4, 200000, 'TJc_xoai lắc.jpg', '2024-04-15 17:26:14', '2024-04-15 17:26:14'),
(43, 'Dưa chuột', 4, 20000, 'aQU_dưa chuột.jpg', '2024-04-15 17:13:14', '2024-04-15 17:13:14'),
(44, 'Củ đậu', 4, 150000, 'Qxw_cu-dau-700x500.jpg', '2024-04-15 17:26:11', '2024-04-15 17:26:11'),
(45, 'Cóc dầm', 4, 150000, 'LoI_coc-dam-2.jpg', '2024-04-15 17:26:08', '2024-04-15 17:26:08'),
(46, 'Humberger', 5, 250000, 'obZ_humberger.jpg', '2024-04-15 17:26:04', '2024-04-15 17:26:04'),
(47, 'Ngô chiên', 5, 250000, 'Drg_Ngô chiên.jpg', '2024-04-15 17:26:00', '2024-04-15 17:26:00'),
(48, 'Khoai lang kén', 5, 150000, 'cFa_khoai-lang-ken-1450342877-1569975-1482478714.jpg', '2024-04-15 17:25:57', '2024-04-15 17:25:57'),
(49, 'Khoai lang chiên', 5, 100, 'bJO_Khoai lang chiên.jpg', '2024-05-10 16:47:22', '2024-05-10 16:47:22'),
(50, 'Mì hành', 1, 70000, '37g_miHanh.jpg', '2024-03-05 17:02:29', '2024-03-05 17:02:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) NOT NULL,
  `passw` varchar(100) NOT NULL,
  `toprole` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `passw`, `toprole`) VALUES
(1, 'Tokisaki Nino', 'admin@gmail.com', '0000', 1),
(2, 'Order', 'order@gmail.com', '0000', 2),
(3, 'Nhabep', 'nhabep@gmail.com', '0000', 3),
(7, 'Tokisaki Nino', 'nino.owner.original@gmail.com', 'tokisakininocute', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ban_an`
--
ALTER TABLE `ban_an`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_bills`
--
ALTER TABLE `detail_bills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `giohang_khach`
--
ALTER TABLE `giohang_khach`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users` (`id_users`),
  ADD KEY `id_products` (`id_products`),
  ADD KEY `tong_gia` (`tong_gia`),
  ADD KEY `id_products_2` (`id_products`);

--
-- Indexes for table `hoadon_khach`
--
ALTER TABLE `hoadon_khach`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_users` (`id_users`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`(768));

--
-- Indexes for table `order_mon_an`
--
ALTER TABLE `order_mon_an`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `ban_an`
--
ALTER TABLE `ban_an`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `detail_bills`
--
ALTER TABLE `detail_bills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `giohang_khach`
--
ALTER TABLE `giohang_khach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT for table `hoadon_khach`
--
ALTER TABLE `hoadon_khach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order_mon_an`
--
ALTER TABLE `order_mon_an`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `giohang_khach`
--
ALTER TABLE `giohang_khach`
  ADD CONSTRAINT `giohang_khach_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `khachhang` (`id`),
  ADD CONSTRAINT `giohang_khach_ibfk_2` FOREIGN KEY (`id_products`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
