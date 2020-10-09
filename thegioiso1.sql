-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 09, 2020 lúc 03:09 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thegioiso1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_09_07_130614_td_user', 2),
(5, '2020_09_07_131756_td_category', 3),
(6, '2020_09_07_132546_td_cateallproduct', 4),
(7, '2020_09_07_133231_td_product', 5),
(8, '2020_09_08_021237_td_comment', 6),
(9, '2020_09_08_021713_td_transaction', 7),
(10, '2020_09_08_022145_td_order', 8),
(11, '2020_09_08_025900_td_tintuc', 9),
(12, '2020_09_19_030735_td_rating', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `td_cateallproduct`
--

CREATE TABLE `td_cateallproduct` (
  `cateall_id` int(10) UNSIGNED NOT NULL,
  `cateall_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cateall_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cateall_product` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `td_cateallproduct`
--

INSERT INTO `td_cateallproduct` (`cateall_id`, `cateall_name`, `cateall_slug`, `cateall_product`, `created_at`, `updated_at`) VALUES
(1, 'Samsung', 'samsung', 1, '2020-09-07 06:30:54', '2020-09-07 06:30:54'),
(2, 'Oppo', 'oppo', 1, '2020-09-07 06:31:03', '2020-09-07 06:31:03'),
(3, 'Iphone', 'iphone', 1, '2020-09-07 06:31:21', '2020-09-07 06:31:21'),
(4, 'Huawei', 'huawei', 1, '2020-09-07 06:31:35', '2020-09-07 06:31:35'),
(5, 'XiaoMi', 'xiaomi', 1, '2020-09-07 06:31:42', '2020-09-07 06:31:42'),
(6, 'Nokia', 'nokia', 1, '2020-09-07 06:31:51', '2020-09-07 06:31:51'),
(7, 'Realme', 'realme', 1, '2020-09-07 06:31:59', '2020-09-07 06:31:59'),
(8, 'Vivo', 'vivo', 1, '2020-09-07 06:32:07', '2020-09-07 06:32:07'),
(9, 'Acer', 'acer', 2, '2020-09-07 07:30:52', '2020-09-07 07:30:52'),
(10, 'Pin, sạc dự phòng', 'pin-sac-du-phong', 4, '2020-09-07 07:50:45', '2020-09-07 07:50:45'),
(12, 'Phụ kiện chính hãng', 'phu-kien-chinh-hang', 4, '2020-09-07 07:55:46', '2020-09-07 07:55:46'),
(13, 'Hp', 'hp', 2, '2020-09-07 20:58:35', '2020-09-07 20:58:35'),
(14, 'Asus', 'asus', 2, '2020-09-07 23:58:01', '2020-09-07 23:58:01'),
(15, 'Lenovo', 'lenovo', 2, '2020-09-07 23:58:17', '2020-09-07 23:58:17'),
(17, 'MacBook', 'macbook', 2, '2020-09-07 23:59:06', '2020-09-07 23:59:06'),
(18, 'Dell', 'dell', 2, '2020-09-07 23:59:26', '2020-09-07 23:59:26'),
(19, 'Máy tính bảng Masstel', 'may-tinh-bang-masstel', 3, '2020-09-08 01:19:49', '2020-09-29 08:20:30'),
(20, 'Máy tính bảng Mobell', 'may-tinh-bang-mobell', 3, '2020-09-08 01:20:06', '2020-09-29 08:14:28'),
(21, 'Cáp sạc', 'cap-sac', 4, '2020-09-08 20:54:01', '2020-09-08 20:54:01'),
(22, 'Tai nghe', 'tai-nghe', 4, '2020-09-08 20:54:25', '2020-09-08 20:54:25'),
(23, 'Loa', 'loa', 4, '2020-09-08 20:54:35', '2020-09-08 20:54:35'),
(24, 'Thẻ nhớ', 'the-nho', 4, '2020-09-08 20:54:46', '2020-09-08 20:54:46'),
(25, 'Ốp lưng điện thoại', 'op-lung-dien-thoai', 4, '2020-09-08 20:55:03', '2020-09-08 20:55:03'),
(26, 'Pin dự phòng', 'pin-du-phong', 4, '2020-09-08 20:55:17', '2020-09-08 20:55:17'),
(27, 'USB', 'usb', 4, '2020-09-08 20:55:35', '2020-09-08 20:55:35'),
(28, 'Ổ cứng', 'o-cung', 4, '2020-09-08 20:55:47', '2020-09-08 20:55:47'),
(29, 'Chuột máy tính', 'chuot-may-tinh', 4, '2020-09-08 20:56:05', '2020-09-08 20:56:05'),
(30, 'Balo, túi chống sốc', 'balo-tui-chong-soc', 4, '2020-09-08 20:56:26', '2020-09-08 20:56:26'),
(31, 'Camera giám sát', 'camera-giam-sat', 4, '2020-09-08 20:56:43', '2020-09-08 20:56:43'),
(32, 'Thiết bị mạng', 'thiet-bi-mang', 4, '2020-09-08 20:56:58', '2020-09-08 20:56:58'),
(33, 'Máy tính bảng Ipad', 'may-tinh-bang-ipad', 3, '2020-09-29 08:02:32', '2020-09-29 08:02:32'),
(34, 'Máy tính bảng samsung', 'may-tinh-bang-samsung', 3, '2020-09-29 08:13:12', '2020-09-29 08:13:12'),
(35, 'Máy tính bảng Lenovo', 'may-tinh-bang-lenovo', 3, '2020-09-29 08:15:33', '2020-09-29 08:15:33'),
(36, 'Máy tính bảng huawei', 'may-tinh-bang-huawei', 3, '2020-09-29 08:18:35', '2020-09-29 08:18:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `td_category`
--

CREATE TABLE `td_category` (
  `cate_id` int(10) UNSIGNED NOT NULL,
  `cate_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `td_category`
--

INSERT INTO `td_category` (`cate_id`, `cate_name`, `cate_slug`, `created_at`, `updated_at`) VALUES
(1, 'Điện thoại', 'dien-thoai', '2020-09-07 06:24:04', '2020-09-07 06:24:04'),
(2, 'Laptop', 'laptop', '2020-09-07 06:24:23', '2020-09-07 06:24:23'),
(3, 'Tablet', 'tablet', '2020-09-07 06:24:31', '2020-09-07 06:24:31'),
(4, 'Phụ kiện', 'phu-kien', '2020-09-07 06:24:43', '2020-09-07 06:24:43'),
(5, 'Đồng hồ', 'dong-ho', '2020-09-07 06:24:55', '2020-09-07 06:24:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `td_comment`
--

CREATE TABLE `td_comment` (
  `cm_id` int(10) UNSIGNED NOT NULL,
  `cm_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cm_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cm_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cm_product` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `td_comment`
--

INSERT INTO `td_comment` (`cm_id`, `cm_name`, `cm_email`, `cm_content`, `cm_product`, `created_at`, `updated_at`) VALUES
(1, 'duy tùng', 'admin@gmail.com', 'sản phẩm này pin sài khoảng bao lâu shop ơi ?', 2, '2020-09-07 19:16:13', '2020-09-07 19:16:13'),
(2, 'Hùng', 'tichuot455@gmail.com', 'Laptop không mạnh như giới thiệu !', 29, '2020-09-23 02:52:00', '2020-09-23 02:52:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `td_order`
--

CREATE TABLE `td_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `or_transaction_id` int(11) NOT NULL,
  `or_product_id` int(11) NOT NULL,
  `or_qty` tinyint(4) NOT NULL,
  `or_price` int(11) DEFAULT NULL,
  `or_sell` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `td_order`
--

INSERT INTO `td_order` (`id`, `or_transaction_id`, `or_product_id`, `or_qty`, `or_price`, `or_sell`, `created_at`, `updated_at`) VALUES
(26, 25, 9, 1, 21900000, NULL, '2020-10-03 02:56:10', '2020-10-03 02:56:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `td_product`
--

CREATE TABLE `td_product` (
  `prod_id` int(10) UNSIGNED NOT NULL,
  `prod_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_price` int(11) NOT NULL,
  `prod_warranty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_condition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_status` tinyint(4) NOT NULL,
  `prod_promotion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_featured` tinyint(4) NOT NULL,
  `prod_cate` int(10) UNSIGNED NOT NULL,
  `prod_cateall` int(10) UNSIGNED NOT NULL,
  `prod_total_number` int(20) DEFAULT 0,
  `prod_rating_number` int(20) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `td_product`
--

INSERT INTO `td_product` (`prod_id`, `prod_name`, `prod_price`, `prod_warranty`, `prod_description`, `prod_img`, `prod_slug`, `prod_condition`, `prod_status`, `prod_promotion`, `prod_featured`, `prod_cate`, `prod_cateall`, `prod_total_number`, `prod_rating_number`, `created_at`, `updated_at`) VALUES
(1, 'Samsung Galaxy A51 (8GB/128GB)', 7800000, '12 tháng', '<p>samsung</p>', 'v1.jpg', 'samsung-galaxy-a51-8gb128gb', 'máy mới 100%', 1, '8500000', 1, 1, 1, 0, 0, '2020-09-07 07:02:47', '2020-09-07 07:02:47'),
(2, 'OPPO Reno4', 8490000, '12 tháng', '<p>oppo</p>', 'v2.jpg', 'oppo-reno4', 'máy mới 100%', 1, '0%', 3, 1, 2, 0, 0, '2020-09-07 07:09:22', '2020-09-07 07:09:22'),
(4, 'Acer Aspire 3 A315 34 P26U N5030 (NX.HE3SV.00H)', 8700000, '12 tháng', '<p>acer</p>', 'lapbn1.jpg', 'acer-aspire-3-a315-34-p26u-n5030-nxhe3sv00h', 'máy mới 100%', 1, '0%', 3, 2, 9, 0, 0, '2020-09-07 07:41:24', '2020-09-07 07:41:24'),
(5, 'Pin sạc dự phòng Polymer 10.000 mAh QC 3.0 eValu PA F1 Air Nhôm Bạc', 455000, '12 tháng', '<p>pin</p>', 'pkk2.jpg', 'pin-sac-du-phong-polymer-10000-mah-qc-30-evalu-pa-f1-air-nhom-bac', 'máy mới 100%', 1, '650000', 0, 4, 10, 0, 0, '2020-09-07 07:54:34', '2020-09-07 07:54:34'),
(6, 'Đầu Thu Android TV Box Xiaomi Mi Stick Đen', 1100000, '12 tháng', '<p>aaaaaaaaaaaaaa</p>', 'dauthu.jpg', 'dau-thu-android-tv-box-xiaomi-mi-stick-den', 'máy mới 100%', 1, '1500000', 0, 4, 12, 0, 0, '2020-09-07 07:56:39', '2020-09-07 07:56:39'),
(7, 'Samsung Galaxy Tab S7', 2000000, '12 tháng', '<p>sssssssssssssss</p>', 'sstab1.jpg', 'samsung-galaxy-tab-s7', 'máy mới 100%', 1, '0%', 0, 3, 1, 0, 0, '2020-09-07 07:58:53', '2020-09-07 07:58:53'),
(8, 'OPPO Reno3', 7800000, '12 tháng', '<p>Tặng 2 suất mua Đồng hồ thời trang giảm 40%</p>', 'oppo3.jpg', 'oppo-reno3', 'máy mới 100%', 1, '8500000', 0, 1, 2, 5, 1, '2020-09-07 20:42:08', '2020-09-20 02:36:38'),
(9, 'iPhone 11 64GB', 21900000, '12 tháng', '<p>Tặng 2 suất mua Đồng hồ thời trang giảm 40%</p>', 'dt13.jpg', 'iphone-11-64gb', 'máy mới 100%', 1, '0%', 0, 1, 3, 0, 3, '2020-09-07 20:43:26', '2020-09-20 02:35:22'),
(10, 'Xiaomi Redmi 9 (4GB/64GB)', 3990000, '12 tháng', '<p>Tặng 2 suất mua Đồng hồ thời trang giảm 40%</p>', 'xiao2.jpg', 'xiaomi-redmi-9-4gb64gb', 'máy mới 100%', 1, '0%', 0, 1, 5, 3, 3, '2020-09-07 20:44:31', '2020-09-20 01:00:55'),
(11, 'Samsung Galaxy A21s (6GB/64GB)', 4900000, '12 tháng', '<p>Tặng 2 suất mua Đồng hồ thời trang giảm 40%</p>', 'dtt1.jpg', 'samsung-galaxy-a21s-6gb64gb', 'máy mới 100%', 1, '5600000', 2, 1, 1, 0, 0, '2020-09-07 20:45:40', '2020-09-07 20:45:40'),
(12, 'Realme C12', 3400000, '12 tháng', '<p>Tặng 2 suất mua Đồng hồ thời trang giảm 40%</p>', 'real.jpg', 'realme-c12', 'máy mới 100%', 1, '0%', 2, 1, 7, 7, 2, '2020-09-07 20:47:13', '2020-09-20 03:11:25'),
(13, 'XiaoMi Note9 Pro', 5600000, '12 tháng', '<p>Tặng 2 suất mua Đồng hồ thời trang giảm 40%</p>', 'dt9.jpg', 'xiaomi-note9-pro', 'máy mới 100%', 1, '0%', 2, 1, 5, 0, 0, '2020-09-07 20:50:45', '2020-09-07 20:50:45'),
(14, 'Acer Aspire 3 A315 34 P26U N5030 (NX.HE3SV.00H)', 7490000, '12 tháng', '<p>Q&ugrave;a 100.000đ</p>', 'lt11.jpg', 'acer-aspire-3-a315-34-p26u-n5030-nxhe3sv00h', 'máy mới 100%', 1, '0%', 1, 2, 9, 0, 0, '2020-09-08 00:14:25', '2020-09-08 00:14:25'),
(15, 'HP1 348 G7 i3 8130U (9PG83PA)', 11300000, '12 tháng', '<p>Giảm th&ecirc;m 200.000đ</p>', 'hp4.jpg', 'hp1-348-g7-i3-8130u-9pg83pa', 'máy mới 100%', 1, '0%', 1, 2, 13, 0, 0, '2020-09-08 00:19:01', '2020-09-08 00:31:51'),
(16, 'Asus VivoBook X509MA N4020 (BR271T)', 6900000, '12 tháng', '<p>Giảm th&ecirc;m 200.000đ</p>', 'laptop6.jpg', 'asus-vivobook-x509ma-n4020-br271t', 'máy mới 100%', 1, '0%', 1, 2, 14, 0, 0, '2020-09-08 00:19:57', '2020-09-08 00:19:57'),
(18, 'Samsung Galaxy Tab A8 8\" T295 (2019)', 3690000, '12 tháng', '<p>Tặng th&ecirc;m 2k.m&atilde;i kh&aacute;c</p>', 'tab2.jpg', 'samsung-galaxy-tab-a8-8-t295-2019', 'máy mới 100%', 1, '0%', 1, 3, 1, 0, 0, '2020-09-08 00:57:50', '2020-09-08 00:57:50'),
(19, 'Lenovo Tab E10 TB-X104L Đen', 3190000, '12 tháng', '<p>Giảm th&ecirc;m 200.000đ</p>', 'huu2.jpg', 'lenovo-tab-e10-tb-x104l-den', 'máy mới 100%', 1, '0%', 1, 3, 15, 0, 0, '2020-09-08 01:10:46', '2020-09-08 01:10:46'),
(20, 'Acer Aspire 3 A315 34 P26U N5030Lenovo IdeaPad S145 15IIL i3 1005G1 (81W8001XVN)', 11490000, '12 tháng', '<p>aaaaaaaaaaaaaaaa</p>', 'le1.jpg', 'acer-aspire-3-a315-34-p26u-n5030lenovo-ideapad-s145-15iil-i3-1005g1-81w8001xvn', 'máy mới 100%', 1, '12500000', 2, 2, 15, 0, 0, '2020-09-08 01:27:17', '2020-09-08 01:27:17'),
(21, 'Asus VivoBook X409JA i3 1005G1 (EK015T)', 10890000, '12 tháng', '<p>Giảm th&ecirc;m 400.000 v&agrave; Qu&agrave; 170.000đ</p>', 'lt2.jpg', 'asus-vivobook-x409ja-i3-1005g1-ek015t', 'máy mới 100%', 1, '0%', 0, 2, 14, 0, 0, '2020-09-08 01:30:48', '2020-09-08 01:30:48'),
(22, 'Asus VivoBook A512FA i3 10110U (EJ2033T)', 13690000, '12 tháng', '<p>Giảm th&ecirc;m 400.000 v&agrave; Qu&agrave; 170.000đ</p>', 'laptop9.jpg', 'asus-vivobook-a512fa-i3-10110u-ej2033t', 'máy mới 100%', 1, '0%', 1, 2, 14, 0, 0, '2020-09-08 01:32:01', '2020-09-08 01:32:01'),
(23, 'HP 348 G7 i5 10210U (9PH06PA)', 16290000, '12 tháng', '<p>Giảm th&ecirc;m 400.000 v&agrave; Qu&agrave; 170.000đ</p>', 'hp1.jpg', 'hp-348-g7-i5-10210u-9ph06pa', 'máy mới 100%', 1, '18500000', 1, 2, 13, 0, 0, '2020-09-08 01:33:17', '2020-09-08 01:33:17'),
(24, 'MacBook Air 2020 i5 256GB (Z0YL)', 31900000, '12 tháng', '<p>Giảm th&ecirc;m 400.000 v&agrave; Qu&agrave; 170.000đ</p>', 'mb1.jpg', 'macbook-air-2020-i5-256gb-z0yl', 'máy mới 100%', 1, '0%', 0, 2, 17, 0, 0, '2020-09-08 01:35:12', '2020-09-08 01:35:12'),
(25, 'Dell Inspiron 3580 i5 8265U (70184569)', 14190000, '12 tháng', '<p>Giảm th&ecirc;m 400.000 v&agrave; Qu&agrave; 170.000đ</p>', 'dell.jpg', 'dell-inspiron-3580-i5-8265u-70184569', 'máy mới 100%', 1, '0%', 0, 2, 18, 0, 0, '2020-09-08 01:36:01', '2020-09-08 01:36:01'),
(26, 'Lenovo IdeaPad S340 14IIL i5 1035G1 (81VV003SVN)', 15990000, '12 tháng', '<p>Giảm th&ecirc;m 400.000 v&agrave; Qu&agrave; 170.000đ</p>', 'laptop10.jpg', 'lenovo-ideapad-s340-14iil-i5-1035g1-81vv003svn', 'máy mới 100%', 1, '0%', 1, 2, 15, 0, 0, '2020-09-08 01:37:18', '2020-09-08 01:37:18'),
(27, 'MacBook Air 2017 128GB (MQD32SA/A)', 19900000, '12 tháng', '<p>Giảm th&ecirc;m 400.000 v&agrave; Qu&agrave; 170.000đ</p>', 'mac.jpg', 'macbook-air-2017-128gb-mqd32saa', 'máy mới 100%', 1, '0%', 1, 2, 17, 0, 0, '2020-09-08 01:38:24', '2020-09-08 01:38:24'),
(28, 'HP 15s du1056TU 6405U (1W7R5PA)', 14560000, '12 tháng', '<p>Giảm th&ecirc;m 400.000 v&agrave; Qu&agrave; 170.000đ</p>', 'hp2.jpg', 'hp-15s-du1056tu-6405u-1w7r5pa', 'máy mới 100%', 1, '0%', 1, 2, 13, 0, 0, '2020-09-08 01:40:00', '2020-09-08 01:40:00'),
(29, 'Dell Inspiron 5490 i5 10210U (FMKJV1)', 21760000, '12 tháng', '<p>Giảm th&ecirc;m 400.000 v&agrave; Qu&agrave; 170.000đ</p>', 'lq2.jpg', 'dell-inspiron-5490-i5-10210u-fmkjv1', 'máy mới 100%', 1, '0%', 1, 2, 18, 0, 0, '2020-09-08 01:41:23', '2020-09-08 01:41:23'),
(31, 'Masstel Tab 10 Pro', 2190000, '12 tháng', '<p>Qu&agrave; 200.000đ</p>', 'tab11.jpg', 'masstel-tab-10-pro', 'máy mới 100%', 1, '0%', 2, 3, 19, 0, 0, '2020-09-08 20:43:18', '2020-09-08 20:43:18'),
(33, 'Samsung Galaxy Tab S6', 18490000, '12 tháng', '<p>Qu&agrave; 200.000đ</p>', 'ss1.jpg', 'samsung-galaxy-tab-s6', 'máy mới 100%', 1, '0%', 2, 3, 1, 0, 0, '2020-09-08 20:47:10', '2020-09-08 20:47:10'),
(34, 'Lenovo Tab M8 (TB-8505X)', 3850000, '12 tháng', '<p>Qu&agrave; 200.000đ</p>', 'tab9.jpg', 'lenovo-tab-m8-tb-8505x', 'máy mới 100%', 1, '0%', 4, 3, 15, 0, 0, '2020-09-08 20:48:17', '2020-09-08 20:48:17'),
(38, 'Huawei MediaPad M5 Lite', 7900000, '12 tháng', '<p>Qu&agrave; 200.000đ</p>', 't4.jpg', 'huawei-mediapad-m5-lite', 'máy mới 100%', 1, '0%', 4, 3, 4, 0, 0, '2020-09-08 20:52:56', '2020-09-08 20:52:56'),
(39, 'Thẻ nhớ MicroSD 64 GB Lexar class 10 UHS-I', 330000, '12 tháng', '<p>aaaaaaaaaaaaaaaaaaaaaa</p>', 'tn2.jpg', 'the-nho-microsd-64-gb-lexar-class-10-uhs-i', 'máy mới 100%', 1, '550000', 0, 4, 24, 0, 0, '2020-09-09 02:18:23', '2020-09-09 02:18:23'),
(40, 'Ốp lưng Galaxy S20 Ultra Nhựa dẻo Slim TPU JM Đen', 35000, '12 tháng', '<p>aaaaaaa</p>', 'pp5.jpg', 'op-lung-galaxy-s20-ultra-nhua-deo-slim-tpu-jm-den', 'máy mới 100%', 1, '0%', 0, 4, 25, 0, 0, '2020-09-09 02:19:36', '2020-09-09 02:19:36'),
(41, 'Miếng dán kính full màn hình iPhone X/Xs/11 Pro GSP-116', 90000, '12 tháng', '<p>aaaaa</p>', 'gr5.jpg', 'mieng-dan-kinh-full-man-hinh-iphone-xxs11-pro-gsp-116', 'máy mới 100%', 1, '100000', 0, 4, 25, 0, 0, '2020-09-09 02:20:35', '2020-09-09 02:20:35'),
(42, 'Chuột không dây Zadez M356', 135000, '12 tháng', '<p>aaaaaa</p>', 'chuot.jpg', 'chuot-khong-day-zadez-m356', 'máy mới 100%', 1, '156000', 0, 4, 29, 0, 0, '2020-09-09 02:21:19', '2020-09-09 02:21:19'),
(43, 'Ốp lưng iPad Air 2019 Nắp gập Stand Flip MEEKER Navy', 178000, '12 tháng', '<p>aaaaa</p>', 'o1.jpg', 'op-lung-ipad-air-2019-nap-gap-stand-flip-meeker-navy', 'máy mới 100%', 1, '200000', 0, 4, 25, 0, 0, '2020-09-09 02:22:21', '2020-09-09 02:22:21'),
(44, 'Tai nghe Bluetooth Roman R552N Xanh', 2400000, '12 tháng', '<p>aaaaaaaaaaaaaaa</p>', 'gr1.jpg', 'tai-nghe-bluetooth-roman-r552n-xanh', 'máy mới 100%', 1, '320000', 0, 4, 22, 0, 0, '2020-09-09 02:23:17', '2020-09-09 02:23:17'),
(45, 'USB 3.0 - 3.1 16 GB Transcend JetFlash 790', 200000, '12 tháng', '<p>aaaaaaaa</p>', 'gr4.jpg', 'usb-30-31-16-gb-transcend-jetflash-790', 'máy mới 100%', 1, '0%', 0, 4, 27, 0, 0, '2020-09-09 02:23:56', '2020-09-09 02:23:56'),
(47, 'Tai nghe AirPods Pro sạc không dây Apple MWP22', 6990000, '12 tháng', '<p>Qu&agrave; 100.000đ</p>', 'ch1.jpg', 'tai-nghe-airpods-pro-sac-khong-day-apple-mwp22', 'máy mới 100%', 1, '0%', 2, 4, 12, 0, 0, '2020-09-09 02:26:23', '2020-09-09 02:26:23'),
(48, 'Loa bluetooth Sony SRS-XB33', 3690000, '12 tháng', '<p>aaaaaaaaaaa</p>', '111.jpg', 'loa-bluetooth-sony-srs-xb33', 'máy mới 100%', 1, '0%', 2, 4, 12, 0, 0, '2020-09-09 02:27:25', '2020-09-09 02:27:25'),
(49, 'Loa Bluetooth Harman Kardon SoundSticks 4 Trắng', 7990000, '12 tháng', '<p>aaaaaaa</p>', 'loa2.jpg', 'loa-bluetooth-harman-kardon-soundsticks-4-trang', 'máy mới 100%', 1, '0%', 2, 4, 12, 0, 0, '2020-09-09 02:29:04', '2020-09-09 02:29:04'),
(50, 'Tai nghe chụp tai Bluetooth Sony WH-1000XM4 Đen', 8490000, '12 tháng', '<p>aaaaaaaaaaa</p>', 'loa4.jpg', 'tai-nghe-chup-tai-bluetooth-sony-wh-1000xm4-den', 'máy mới 100%', 1, '0%', 2, 4, 12, 0, 0, '2020-09-09 02:30:35', '2020-09-09 02:30:35'),
(51, 'Camera IP Mi Home 360 Độ 1080P Xiaomi QDJ4058GL Trắng', 949000, '12 tháng', '<p>aaaaaaaaaaaaaaa</p>', 'cm1.jpg', 'camera-ip-mi-home-360-do-1080p-xiaomi-qdj4058gl-trang', 'máy mới 100%', 1, '0%', 2, 4, 12, 0, 0, '2020-09-09 02:31:37', '2020-09-09 02:31:37'),
(52, 'Tai nghe AirPods 2 sạc không dây Apple MRXJ2', 4990000, '12 tháng', '<p>aaaaaaaaaaaaa</p>', 'ch3.jpg', 'tai-nghe-airpods-2-sac-khong-day-apple-mrxj2', 'máy mới 100%', 1, '0%', 2, 4, 12, 0, 0, '2020-09-09 02:32:21', '2020-09-09 02:32:21'),
(53, 'Tai nghe Bluetooth True Wireless Sony WF-SP800N', 4790000, '12 tháng', '<p>aaaaaa</p>', 'pp6.jpg', 'tai-nghe-bluetooth-true-wireless-sony-wf-sp800n', 'máy mới 100%', 1, '0%', 2, 4, 12, 0, 0, '2020-09-09 02:33:07', '2020-09-09 02:33:07'),
(54, 'Tai nghe Bluetooth True Wireless Sony WF-SP800N', 1999000, '12 tháng', '<p>chỉ b&aacute;n online</p>', 'cm2.jpg', 'tai-nghe-bluetooth-true-wireless-sony-wf-sp800n', 'máy mới 100%', 1, '0%', 2, 4, 12, 0, 0, '2020-09-09 02:33:59', '2020-09-09 02:33:59'),
(55, 'Pin sạc dự phòng Polymer 10.000mAh Xiaomi Mi 18W Fast Charge Power Bank 3', 499000, '12 tháng', '<p>AAAAAAAA</p>', 'pin2.jpg', 'pin-sac-du-phong-polymer-10000mah-xiaomi-mi-18w-fast-charge-power-bank-3', 'máy mới 100%', 1, '0%', 2, 4, 12, 0, 0, '2020-09-09 02:34:41', '2020-09-16 07:05:51'),
(56, 'Lenovo IdeaPad S145 15IIL i3 1005G1 (81W8001XVN)', 11490000, '12 tháng', '<p>aaaaaaaaaaaaaaaaa</p>', 'lenovo.jpg', 'lenovo-ideapad-s145-15iil-i3-1005g1-81w8001xvn', 'máy mới 100%', 1, '0%', 4, 2, 15, 0, 0, '2020-09-09 02:41:04', '2020-09-29 09:43:18'),
(57, 'Lenovo IdeaPad Slim 3 15IIL05 i3 1005G1 (81WE003RVN)', 12990000, '12 tháng', '<p>Giảm th&ecirc;m 1.600.600 v&agrave; Qu&agrave; 100.00đ</p>', 'c2.jpg', 'lenovo-ideapad-slim-3-15iil05-i3-1005g1-81we003rvn', 'máy mới 100%', 1, '0%', 4, 2, 15, 0, 0, '2020-09-09 02:41:54', '2020-09-09 02:41:54'),
(58, 'Lenovo ThinkBook 14IML i3 10110U (20RV00B7VN)', 13490000, '12 tháng', '<p>Giảm th&ecirc;m 1.600.600 v&agrave; Qu&agrave; 100.00đ</p>', 'c3.jpg', 'lenovo-thinkbook-14iml-i3-10110u-20rv00b7vn', 'máy mới 100%', 1, '0%', 4, 2, 15, 0, 0, '2020-09-09 02:42:24', '2020-09-09 02:42:24'),
(59, 'Lenovo IdeaPad Slim 5 14IIL05 i5 1035G1 (81YH0050VN)', 17490000, '12 tháng', '<p>Giảm th&ecirc;m 1.600.600 v&agrave; Qu&agrave; 100.00đ</p>', 'c5.jpg', 'lenovo-ideapad-slim-5-14iil05-i5-1035g1-81yh0050vn', 'máy mới 100%', 1, '0%', 4, 2, 15, 0, 0, '2020-09-09 02:43:20', '2020-09-09 02:43:20'),
(60, 'Acer Aspire 3 A315 34 P26U N5030 (NX.HE3SV.00H)', 7480000, '12 tháng', '<p>Giảm th&ecirc;m 1.000.000&nbsp;v&agrave; Qu&agrave; 100.00đ</p>', 'c4.jpg', 'acer-aspire-3-a315-34-p26u-n5030-nxhe3sv00h', 'máy mới 100%', 1, '8500000', 4, 2, 9, 0, 0, '2020-09-09 02:44:36', '2020-09-09 02:44:36'),
(61, 'Acer Aspire 3 A315 54K 37B0 i3 8130U (NX.HEESV.00D)', 10900000, '12 tháng', '<p>Qu&agrave; 100.00đ</p>', 'c9.jpg', 'acer-aspire-3-a315-54k-37b0-i3-8130u-nxheesv00d', 'máy mới 100%', 1, '0%', 4, 2, 9, 0, 0, '2020-09-09 02:45:24', '2020-09-09 02:45:24'),
(62, 'Acer Aspire 3 A315 56 58EB i5 1035G1 (NX.HS5SV.00B)', 15990000, '12 tháng', '<p>Giảm th&ecirc;m 1.700.600 v&agrave; Qu&agrave; 100.00đ</p>', 'c6.jpg', 'acer-aspire-3-a315-56-58eb-i5-1035g1-nxhs5sv00b', 'máy mới 100%', 1, '0%', 4, 2, 9, 4, 1, '2020-09-09 02:46:04', '2020-09-24 08:49:46'),
(63, 'HP 15s du0063TU i5 8265U (6ZF63PA)', 11750000, '12 tháng', '<p>Giảm th&ecirc;m 1.600.600 v&agrave; Qu&agrave; 100.00đ</p>', 'c7.jpg', 'hp-15s-du0063tu-i5-8265u-6zf63pa', 'máy mới 100%', 1, '0%', 4, 2, 13, 0, 0, '2020-09-09 02:46:44', '2020-09-09 02:46:44'),
(64, 'HP Pavilion 15 cs2120TX i5 8265U (8AG58PA)', 13590000, '12 tháng', '<p>Giảm th&ecirc;m 1.200.600 v&agrave; Qu&agrave; 100.00đ</p>', 'c8.jpg', 'hp-pavilion-15-cs2120tx-i5-8265u-8ag58pa', 'máy mới 100%', 1, '0%', 4, 2, 13, 0, 0, '2020-09-09 02:47:53', '2020-09-09 02:47:53'),
(65, 'Pin sạc dự phòng 7.500mAh AVA LJ JP195', 119000, '12 tháng', '<p>aaaaaaaaaa</p>', 'pin3.jpg', 'pin-sac-du-phong-7500mah-ava-lj-jp195', 'máy mới 100%', 1, '300000đ', 4, 4, 10, 0, 0, '2020-09-09 02:52:59', '2020-09-09 02:52:59'),
(66, 'Pin sạc dự phòng 7.500 mAh AVA Cat 3S Cam Trắng', 199000, '12 tháng', '<p>aaaaaaaaaa</p>', 'p11.jpg', 'pin-sac-du-phong-7500-mah-ava-cat-3s-cam-trang', 'máy mới 100%', 1, '250000đ', 4, 4, 10, 0, 0, '2020-09-09 02:57:17', '2020-09-09 02:57:17'),
(67, 'Tai nghe Bluetooth Roman Q5C Đen', 240000, '12 tháng', '<p>aaaaaaaaaaa</p>', 'tn3.jpg', 'tai-nghe-bluetooth-roman-q5c-den', 'máy mới 100%', 1, '0%', 4, 4, 22, 0, 0, '2020-09-09 02:58:17', '2020-09-09 02:58:17'),
(68, 'Tai nghe Bluetooth Roman R552N Xanh', 240000, '12 tháng', '<p>aaaaaaaaaaaa</p>', 'gr1.jpg', 'tai-nghe-bluetooth-roman-r552n-xanh', 'máy mới 100%', 1, '250000đ', 4, 4, 22, 0, 0, '2020-09-09 02:59:08', '2020-09-09 02:59:08'),
(69, 'Pin sạc dự phòng Polymer 10.000mAh Type C Xmobile PW37Y5B Trắng', 450000, '12 tháng', '<p>aaaaaaaa</p>', 'pin4.jpg', 'pin-sac-du-phong-polymer-10000mah-type-c-xmobile-pw37y5b-trang', 'máy mới 100%', 1, '600000đ', 4, 4, 10, 0, 0, '2020-09-09 03:00:18', '2020-09-09 03:00:18'),
(70, 'Pin sạc dự phòng Polymer 10.000 mAh Xmobile Atela 10 Nhôm Xám', 422000, '12 tháng', '<p>aaaaaaaaaaaaaaa</p>', 'pin5.jpg', 'pin-sac-du-phong-polymer-10000-mah-xmobile-atela-10-nhom-xam', 'máy mới 100%', 1, '0%', 4, 4, 10, 0, 0, '2020-09-09 03:02:05', '2020-09-09 03:02:05'),
(71, 'Tai nghe chụp tai Gaming MozardX DS902 7.1 Đen', 792000, '12 tháng', '<p>aaaaaa</p>', 'tn1.jpg', 'tai-nghe-chup-tai-gaming-mozardx-ds902-71-den', 'máy mới 100%', 1, '800000đ', 4, 4, 22, 0, 0, '2020-09-09 03:03:08', '2020-09-09 03:03:08'),
(72, 'Tai nghe chụp tai Mozard IP-878 Đen Rêu', 210000, '12 tháng', '<p>aaaaaaaaaaaaaaaaaaaa</p>', 'tn7.jpg', 'tai-nghe-chup-tai-mozard-ip-878-den-reu', 'máy mới 100%', 1, '0%', 4, 4, 22, 0, 0, '2020-09-09 03:04:13', '2020-09-09 03:04:13'),
(73, 'Cáp Type C 1m Mbest DS462G-WB Xám', 96000, '12 tháng', '<p>aaa</p>', 'caps2.jpg', 'cap-type-c-1m-mbest-ds462g-wb-xam', 'máy mới 100%', 1, '120000đ', 4, 4, 21, 0, 0, '2020-09-09 03:05:01', '2020-09-09 03:05:01'),
(74, 'Cáp Micro 1m eValu LTM -01', 100000, '12 tháng', '<p>aaaaa</p>', 'pk1.jpg', 'cap-micro-1m-evalu-ltm-01', 'máy mới 100%', 1, '0%', 4, 4, 21, 0, 0, '2020-09-09 03:05:47', '2020-09-09 03:05:47'),
(75, 'Cáp 3 đầu Lightning Type C Micro 1m eValu Spanker B', 180000, '12 tháng', '<p>aaaaaa</p>', 'cap1.jpg', 'cap-3-dau-lightning-type-c-micro-1m-evalu-spanker-b', 'máy mới 100%', 1, '0%', 4, 4, 21, 0, 0, '2020-09-09 03:06:19', '2020-09-09 03:06:19'),
(76, 'Thẻ nhớ MicroSD 200 GB SanDisk Class 10', 1860000, '12 tháng', '<p>aaaaaaaaaaa</p>', 'tn9.jpg', 'the-nho-microsd-200-gb-sandisk-class-10', 'máy mới 100%', 1, '0%', 4, 4, 24, 0, 0, '2020-09-09 03:08:24', '2020-09-09 03:08:24'),
(77, 'Ổ cứng SSD 500GB WD My Passport GO Xanh Dương', 2740000, '12 tháng', '<p>aaaaaaaa</p>', 'p9.jpg', 'o-cung-ssd-500gb-wd-my-passport-go-xanh-duong', 'máy mới 100%', 1, '0%', 4, 4, 28, 0, 0, '2020-09-09 03:09:06', '2020-09-09 03:09:06'),
(78, 'Túi chống sốc Laptop 15 inch TOMTOC A13-E02G Xám', 879000, '12 tháng', '<p>aaaaaaaaa</p>', 'pp1.jpg', 'tui-chong-soc-laptop-15-inch-tomtoc-a13-e02g-xam', 'máy mới 100%', 1, '0%', 4, 4, 30, 0, 0, '2020-09-09 03:09:50', '2020-09-09 03:09:50'),
(79, 'Repeater (bộ mở rộng sóng) Wifi AC750 TP-Link RE205 Trắng', 449000, '12 tháng', '<p>aaaaaaaaaa</p>', 'rt1.jpg', 'repeater-bo-mo-rong-song-wifi-ac750-tp-link-re205-trang', 'máy mới 100%', 1, '0%', 4, 4, 32, 0, 0, '2020-09-09 03:10:55', '2020-09-09 03:10:55'),
(80, 'USB OTG 3.1 64GB Type C Sandisk SDDDC3 Đen', 498000, '12 tháng', '<p>aaaaaaaaaaaa</p>', 'ub1.jpg', 'usb-otg-31-64gb-type-c-sandisk-sdddc3-den', 'máy mới 100%', 1, '0%', 4, 4, 27, 0, 0, '2020-09-09 03:12:22', '2020-09-09 03:12:22'),
(81, 'Chuột Gaming Rapoo VT200 Đen', 590000, '12 tháng', '<p>aaa</p>', 'chuot1.jpg', 'chuot-gaming-rapoo-vt200-den', 'máy mới 100%', 1, '0%', 4, 4, 29, 0, 0, '2020-09-09 03:13:37', '2020-09-09 03:13:37'),
(82, 'Loa bluetooth Sony Extra Bass SRS-XB23', 2490000, '12 tháng', '<p>aaaaaaa</p>', 'loabt1.jpg', 'loa-bluetooth-sony-extra-bass-srs-xb23', 'máy mới 100%', 1, '0%', 4, 4, 23, 0, 0, '2020-09-09 03:14:33', '2020-09-09 03:14:33'),
(83, 'Ốp lưng Galaxy A11 nhựa dẻo Electroplate -Matte OSMIA Gold', 51000, '12 tháng', '<p>aaaaaaa</p>', 'op1.jpg', 'op-lung-galaxy-a11-nhua-deo-electroplate-matte-osmia-gold', 'máy mới 100%', 1, '0%', 4, 4, 25, 0, 0, '2020-09-09 03:15:23', '2020-09-09 03:15:23'),
(84, 'Camera IP 1080P Kbvision KN-TGH21PWN Trắng', 1250000, '12 tháng', '<p>aaaaaaaa</p>', 'cm3.jpg', 'camera-ip-1080p-kbvision-kn-tgh21pwn-trang', 'máy mới 100%', 1, '0%', 4, 4, 31, 0, 0, '2020-09-09 03:16:27', '2020-09-09 03:16:27'),
(86, 'Camera IP 1080P Xiaomi Mi Home Basic ZRM4037US Trắng', 649000, '12 tháng', '<p>aaaaaaaaaaaaaaaa</p>', 'cm5.jpg', 'camera-ip-1080p-xiaomi-mi-home-basic-zrm4037us-trang', 'máy mới 100%', 1, '0%', 0, 4, 31, 0, 0, '2020-09-09 21:00:58', '2020-09-09 21:00:58'),
(87, 'Tai nghe EP Bluetooth Sony WI-1000XM2', 6974000, '12 tháng', '<p>aaaaaaaaaaaaaaaaaa</p>', 'tn10.jpg', 'tai-nghe-ep-bluetooth-sony-wi-1000xm2', 'máy mới 100%', 1, '7400000', 4, 4, 12, 0, 0, '2020-09-09 21:05:53', '2020-09-09 21:05:53'),
(88, 'Bàn phím Magic Keyboard iPad Pro 12.9 (MXQU2ZA/A)', 9900000, '12 tháng', '<p>aaaaaaaaa</p>', 'bp1.jpg', 'ban-phim-magic-keyboard-ipad-pro-129-mxqu2zaa', 'máy mới 100%', 1, '1200000', 2, 4, 12, 0, 0, '2020-09-16 07:08:01', '2020-09-16 07:09:04'),
(89, 'Bao da Galaxy Note 20 Ultra Samsung Nắp gập Clear View Trắng', 1500000, '12 tháng', '<p>aaaaa</p>', 'bd1.jpg', 'bao-da-galaxy-note-20-ultra-samsung-nap-gap-clear-view-trang', 'máy mới 100%', 1, '0%', 2, 4, 12, 0, 0, '2020-09-16 07:10:25', '2020-09-16 07:10:25'),
(90, 'Bàn phím Smart Keyboard iPad 10.2 (MX3L2ZA/A)', 4950000, '12 tháng', '<p>aaaaaaaaaaa</p>', 'bp2.jpg', 'ban-phim-smart-keyboard-ipad-102-mx3l2zaa', 'máy mới 100%', 1, '0%', 2, 4, 12, 0, 0, '2020-09-16 07:11:13', '2020-09-16 07:11:13'),
(92, 'iPad Mini 7.9 inch Wifi 64GB (2019)', 9900000, '12 tháng', '<p>&nbsp;</p>\r\n\r\n<p>Qu&agrave; tặng k&egrave;m 200.000đ</p>', 'ty1.jpg', 'ipad-mini-79-inch-wifi-64gb-2019', 'máy mới 100%', 1, '0%', 3, 3, 33, 0, 0, '2020-09-29 09:02:57', '2020-09-29 09:02:57'),
(93, 'Lenovo Tab E10 TB-X104L Đen', 3100000, '12 tháng', '<p>Tặng k&egrave;m qu&agrave; 200.000đ</p>', 'ln.jpg', 'lenovo-tab-e10-tb-x104l-den', 'máy mới 100%', 1, '0%', 1, 3, 35, 0, 0, '2020-09-29 09:06:21', '2020-09-29 09:06:21'),
(94, 'Huawei MediaPad M5 Lite', 7210000, '12 tháng', '<p>giảm th&ecirc;m 300.000đ</p>', 'hw1.jpg', 'huawei-mediapad-m5-lite', 'máy mới 100%', 1, '0%', 2, 3, 36, 0, 0, '2020-09-29 09:17:09', '2020-09-29 09:17:09'),
(95, 'iPad Mini 7.9 inch Wifi Cellular 64GB (2019)', 13900000, '12 tháng', '<p>phần qu&agrave; đặc biệt 1.000.000đ</p>', 'tab3.jpg', 'ipad-mini-79-inch-wifi-cellular-64gb-2019', 'máy mới 100%', 1, '0%', 4, 3, 33, 0, 0, '2020-09-29 09:19:13', '2020-09-29 09:19:13'),
(96, 'iPad Pro 12.9 inch Wifi Cellular 128GB (2020)', 31500000, '12 tháng', '<p>Qu&agrave; tặng 500.000đ</p>', 'tab7.jpg', 'ipad-pro-129-inch-wifi-cellular-128gb-2020', 'máy mới 100%', 1, '0%', 4, 3, 33, 0, 0, '2020-09-29 09:20:58', '2020-09-29 09:20:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `td_rating`
--

CREATE TABLE `td_rating` (
  `id` int(10) UNSIGNED NOT NULL,
  `r_product_id` int(11) NOT NULL,
  `r_number` tinyint(4) DEFAULT NULL,
  `r_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `td_rating`
--

INSERT INTO `td_rating` (`id`, `r_product_id`, `r_number`, `r_content`, `created_at`, `updated_at`) VALUES
(10, 9, 4, 'sản phẩm quá tuyệt vời', NULL, NULL),
(11, 8, 5, 'ok', NULL, NULL),
(12, 12, 3, 'ok', NULL, NULL),
(13, 12, 4, 'sản phẩm quá ok', NULL, NULL),
(14, 62, 4, 'hàng tốt đấy shop !', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `td_tintuc`
--

CREATE TABLE `td_tintuc` (
  `id` int(10) UNSIGNED NOT NULL,
  `n_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n_contentslug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `n_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `n_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n_author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `n_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n_featured` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `n_view` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `td_tintuc`
--

INSERT INTO `td_tintuc` (`id`, `n_title`, `n_contentslug`, `n_content`, `n_description`, `n_author`, `n_img`, `n_featured`, `n_view`, `created_at`, `updated_at`) VALUES
(1, 'Vsmart', 'vsmart', '<p>1. Thiết kế Vsmart Aris Pro 5G mỹ m&atilde;n với camera ẩn dưới m&agrave;n h&igrave;nh</p>\r\n\r\n<p>Thật tự h&agrave;o với thế giới khi Việt Nam ch&uacute;ng ta đ&atilde; ph&aacute;t triển th&agrave;nh c&ocirc;ng điện thoại c&oacute; camera ẩn dưới m&agrave;n h&igrave;nh mang t&ecirc;n Vsmart Aris Pro 5G. Trước đ&oacute; OPPO từng giới thiệu chiếc điện thoại sử dụng camera ẩn dưới m&agrave;n h&igrave;nh, thế nhưng thiết bị vẫn c&ograve;n được được nghi&ecirc;n cứu th&ecirc;m v&agrave; chưa ch&iacute;nh thức tung ra tr&ecirc;n thị trường di động to&agrave;n cầu.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Files/2020/09/07/1288017/e7_800x450.jpg\" style=\"height:450px; width:800px\" /></p>\r\n\r\n<p>Vsmart Aris Pro 5G, một c&aacute;i t&ecirc;n c&oacute; lẽ sẽ khiến giới cầu nghệ to&agrave;n cầu nhắc đến tr&ecirc;n c&aacute;c mặt b&aacute;o c&ocirc;ng nghệ từ gi&acirc;y ph&uacute;t n&agrave;y đến khi sản phẩm ch&iacute;nh thức được ra mắt. Như m&igrave;nh c&oacute; n&oacute;i ở tr&ecirc;n, chiếc m&aacute;y sẽ sở hữu m&agrave;n h&igrave;nh v&ocirc; khuyết - một kh&aacute;i niệm mới, một định nghĩa của tương lai. B&ecirc;n cạnh đ&oacute;, c&aacute;c viền cạnh xung quanh m&agrave;n h&igrave;nh cũng được l&agrave;m mỏng v&agrave; mang đến trải nghiệm tuyệt vời hơn những g&igrave; ch&uacute;ng ta nghĩ.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Files/2020/09/07/1288017/e10_800x450.jpg\" style=\"height:450px; width:800px\" /></p>\r\n\r\n<p>Thật tuyệt vời phải kh&ocirc;ng n&agrave;o v&agrave; kh&ocirc;ng chỉ c&aacute;c bạn đ&acirc;u, ngay cả m&igrave;nh đ&acirc;y cũng thấy tự h&agrave;o trước những g&igrave; m&agrave; Vsmart l&agrave;m được. Chỉ v&agrave;i th&aacute;ng trước đ&oacute;, h&atilde;ng đ&atilde; g&acirc;y sốc khi mang c&ocirc;ng nghệ 5G v&agrave; ph&aacute;t triển th&agrave;nh c&ocirc;ng tr&ecirc;n đứa con tinh thần của m&igrave;nh. C&ograve;n b&acirc;y giờ lại đến camera ẩn dưới m&agrave;n h&igrave;nh, thế bạn c&oacute; mong đợi Vmart sẽ ph&aacute;t triển lu&ocirc;n m&agrave;n h&igrave;nh gập trong tươi lai kh&ocirc;ng nhỉ? Như bạn c&oacute; thể thấy, Vsmart Aris Pro 5G sẽ c&oacute; &iacute;t nhất khoảng 2 phi&ecirc;n bản m&agrave;u kh&aacute;c nhau, bao gồm m&agrave;u Xanh R&ecirc;u của sức sống v&agrave; m&agrave;u V&agrave;ng Đồng. Tuy nhi&ecirc;n bản th&acirc;n m&igrave;nh thấy m&agrave;u Xanh R&ecirc;u đẹp hơn, giống như sự sống, sự tồn tại v&agrave; sự tươi mới của một thiết bị mang trong nhiều nhiều thứ c&ocirc;ng nghệ ti&ecirc;n tiến.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Files/2020/09/07/1288017/e2_800x450.jpg\" style=\"height:450px; width:800px\" /></p>\r\n\r\n<p>Chiếc m&aacute;y của ch&uacute;ng ta sẽ c&oacute; cụm 4 camera ở mặt lưng v&agrave; được xếp v&agrave;o &ocirc; vu&ocirc;ng tr&ocirc;ng rất gọn g&agrave;ng. Thiết kế n&agrave;y đ&atilde; c&oacute; tr&ecirc;n một v&agrave;i h&atilde;ng trước đ&oacute;, c&oacute; thể nhiều bạn sẽ ch&ecirc; xấu nhưng c&aacute; nh&acirc;n m&igrave;nh lại cho rằng Vsmart đang muốn khẳng định camera tr&ecirc;n Aris Pro 5G kh&ocirc;ng phải dạng vừa. V&agrave; b&acirc;y giờ, m&igrave;nh sẽ n&oacute;i s&acirc;u hơn về camera ẩn dưới m&agrave;n h&igrave;nh của Vsmart Aris Pro 5G ở phần b&ecirc;n dưới nh&eacute;.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Files/2020/09/07/1288017/e8_800x450.jpg\" style=\"height:450px; width:800px\" /></p>\r\n\r\n<p>&nbsp;</p>', '1. Thiết kế Vsmart Aris Pro 5G mỹ mãn với camera ẩn dưới màn hình', 'Nguyễn Duy Tùng', '1.jpg', '0', 0, '2020-09-07 20:11:27', '2020-09-07 20:11:27'),
(2, 'Rò rỉ Nokia 3.4', 'ro-ri-nokia-34', '<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Files/2020/09/07/1288128/httech1_800x450.jpg\" style=\"height:450px; width:800px\" /></p>\r\n\r\n<p>HMD Global đ&atilde; c&oacute; sự cải tiến mạnh mẽ về ng&ocirc;n ngữ thiết kế của smartphone trong thời gian gần đ&acirc;y, điều n&agrave;y l&agrave;m cho Nokia 3.4 được dự đo&aacute;n sẽ sở hữu đường n&eacute;t thiết kế v&ocirc; c&ugrave;ng mới mẻ. Một số h&igrave;nh ảnh r&ograve; rỉ vừa được tiết lộ đ&atilde; cho thấy sự thay đổi thực sự về ngoại h&igrave;nh của m&aacute;y so với c&aacute;c thiết bị tiền nhiệm. C&aacute;c d&ograve;ng Nokia 3 series trước đ&acirc;y thường c&oacute; cụm camera đặt dọc theo th&acirc;n m&aacute;y, điều n&agrave;y đ&atilde; ho&agrave;n to&agrave;n thay đổi tr&ecirc;n Nokia 3.4. Thiết bị sẽ sở hữu cụm camera c&oacute; thiết kế tr&ograve;n tương tự như tr&ecirc;n Nokia 8.3 5G.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Files/2020/09/07/1288128/phonearena_800x374.jpg\" style=\"height:374px; width:800px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Mặc d&ugrave; th&ocirc;ng số ch&iacute;nh x&aacute;c về độ ph&acirc;n giải m&aacute;y ảnh tr&ecirc;n Nokia 3.4 vẫn chưa được tiết lộ nhưng theo một số nguồn tin, thiết bị sẽ c&oacute; 3 camera sau bao gồm một camera ch&iacute;nh, một cảm biến độ s&acirc;u v&agrave; một camera macro. B&ecirc;n dưới cụm camera hầm hố l&agrave; cảm biến v&acirc;n tay c&ugrave;ng logo Nokia được đặt dọc ph&ugrave; hợp với tổng thể thiết kế của mặt lưng. Nokia 3.4 dường như được l&agrave;m từ nhựa, điều n&agrave;y chắc chắn kh&ocirc;ng c&oacute; g&igrave; ngạc nhi&ecirc;n với một thiết bị gi&aacute; rẻ, nhưng chất liệu nhựa của m&aacute;y đ&atilde; được c&ocirc;ng ty thiết kế theo kiểu 3D n&ecirc;n nh&igrave;n rất cuốn h&uacute;t.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Files/2020/09/07/1288128/gizchina_600x600.jpg\" style=\"height:600px; width:600px\" /></p>\r\n\r\n<p>Trong khi c&aacute;c mẫu Nokia 3 series trước đ&acirc;y được cung cấp c&aacute;c m&agrave;u cơ bản như đen, trắng hay x&aacute;m th&igrave; Nokia 3.4 sẽ c&oacute; sự lột x&aacute;c ho&agrave;n to&agrave;n về m&agrave;u sắc khi sở hữu t&ocirc;ng m&agrave;u xanh lam nhạt ở giữa v&agrave; đậm dần về ph&iacute;a hai b&ecirc;n. Một số b&aacute;o c&aacute;o trước đ&oacute; cho thấy thiết bị sẽ c&oacute; m&agrave;n h&igrave;nh đục lỗ với phần viền được tinh giảm đ&aacute;ng kể. Hiện vẫn chưa c&oacute; nhiều th&ocirc;ng tin về th&ocirc;ng số kỹ thuật của m&aacute;y, tuy nhi&ecirc;n với thiết kế như tr&ecirc;n, Nokia 3.4 sẽ l&agrave; một trong những sản phẩm đầy hứa hẹn trong ph&acirc;n kh&uacute;c smartphone gi&aacute; rẻ. Bạn thấy thiết kế của Nokia 3.4 như thế n&agrave;o?</p>\r\n\r\n<p>Nguồn:&nbsp;<a href=\"https://www.phonearena.com/news/nokia-3-4-design-press-render-leak_id126988\" target=\"_blank\">PhoneArena</a></p>', 'Rò rỉ hình ảnh Nokia 3.4 với thiết kế cải tiến cùng cụm 3 camera hình tròn, dự đoán sẽ khuấy đảo phân khúc smartphone giá rẻ', 'Nguyễn Duy Tùng', '2.jpg', '0', 0, '2020-09-07 20:18:21', '2020-09-07 20:18:21'),
(3, 'Xuất hiện bằng chứng cho thấy Samsung', 'xuat-hien-bang-chung-cho-thay-samsung', '<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Files/2020/09/08/1288163/2_1024x574-800-resize.jpg\" style=\"height:448px; width:800px\" /></p>\r\n\r\n<p>Trong thời gian gần đ&acirc;y, c&aacute;c nh&agrave; sản xuất smartphone đang hướng tới những mẫu thiết kế của tương lai. V&agrave;i năm trước, smartphone m&agrave;n h&igrave;nh gập c&oacute; vẻ giống như khoa học viễn tưởng, th&igrave; b&acirc;y giờ n&oacute; đang dần phổ biến.</p>\r\n\r\n<p>Giờ đ&acirc;y, Samsung đ&atilde; được cấp bằng s&aacute;ng chế cho một smartphone ho&agrave;n to&agrave;n mới, đ&oacute; l&agrave; đi k&egrave;m với m&agrave;n h&igrave;nh trong suốt, nghe c&oacute; vẻ xa vời phải kh&ocirc;ng n&agrave;o?</p>\r\n\r\n<p>Theo b&aacute;o c&aacute;o của LetsGoDigital, g&atilde; khổng lồ c&ocirc;ng nghệ H&agrave;n Quốc đ&atilde; nộp bằng s&aacute;ng chế cho USPTO (Văn ph&ograve;ng S&aacute;ng chế v&agrave; Nh&atilde;n hiệu Hoa Kỳ) v&agrave; WIPO (Văn ph&ograve;ng Sở hữu Tr&iacute; tuệ Thế giới). Đơn nộp v&agrave;o ng&agrave;y 27/8/2020 v&agrave; m&ocirc; tả c&ocirc;ng nghệ cần thiết để tạo ra một chiếc điện thoại th&ocirc;ng minh trong suốt.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Files/2020/09/08/1288163/3_1024x782-800-resize.jpg\" style=\"height:611px; width:800px\" /></p>\r\n\r\n<p>Ngo&agrave;i ra, c&ocirc;ng nghệ n&agrave;y thậm ch&iacute; c&oacute; thể được sử dụng trong c&aacute;c thiết bị điện tử kh&aacute;c, bao gồm TV, m&agrave;n h&igrave;nh, m&aacute;y t&iacute;nh x&aacute;ch tay v&agrave; bảng điều khiển tr&ograve; chơi.</p>\r\n\r\n<p>Bằng s&aacute;ng chế m&ocirc; tả nhiều tới kh&iacute;a cạnh kỹ thuật, đi s&acirc;u v&agrave;o chi tiết c&aacute;c lớp v&agrave; th&agrave;nh phần cần thiết để đạt được độ trong suốt. Thiết bị được thấy trong bằng s&aacute;ng chế c&oacute; viền hẹp v&agrave; m&agrave;n h&igrave;nh lớn trong suốt. Một tấm nền OLED dường như đ&atilde; được sử dụng, v&igrave; loại m&agrave;n h&igrave;nh n&agrave;y c&oacute; thể cho ph&eacute;p &aacute;nh s&aacute;ng chiếu qua.</p>\r\n\r\n<p>Dẫu vậy, chi tiết về smartphone cũng như ng&agrave;y ra mắt sản phẩm thực tế vẫn chưa được Samsung x&aacute;c nhận. Ch&uacute;ng ta c&ugrave;ng ki&ecirc;n nhẫn chờ th&ecirc;m nh&eacute;. Bạn thấy thiết kế smartphone Galaxy trong suốt n&agrave;y thế n&agrave;o?</p>\r\n\r\n<p>Nguồn:&nbsp;<a href=\"https://www.gizmochina.com/2020/09/07/samsung-patents-device-with-transparent-display/\" target=\"_blank\">Gizmochina</a></p>', 'Xuất hiện bằng chứng cho thấy Samsung đang phát triển một smartphone Galaxy có màn hình trong suốt, bạn thấy kích thích không?', 'Nguyễn Hồng Pháp', 'e3.jpg', '0', 0, '2020-09-07 20:22:27', '2020-09-07 20:22:27'),
(4, 'Smartphone OPPO bí ẩn', 'smartphone-oppo-bi-an', '<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Files/2020/09/05/1287299/oppo_reno3_pro_800x450.jpg\" style=\"height:450px; width:800px\" /></p>\r\n\r\n<p>Một chiếc điện thoại OPPO b&iacute; ẩn với t&ecirc;n m&atilde; PECM10 / PECT10 đ&atilde; đạt được chứng nhận từ cơ quan viễn th&ocirc;ng TENAA của Trung Quốc. Hiện vẫn chưa r&otilde; t&ecirc;n gọi của thiết bị, nhưng rất c&oacute; thể đ&acirc;y l&agrave; một trong những điện thoại 5G gi&aacute; rẻ của nh&agrave; sản xuất Trung Quốc.</p>\r\n\r\n<p>Dữ liệu từ TENAA cho biết OPPO PECM10 / PECT10 c&oacute; k&iacute;ch thước tổng thể lần lượt l&agrave; 162 x 75 x 7.9 mm v&agrave; nặng 175 gram. Thiết bị c&oacute; ba phi&ecirc;n bản m&agrave;u bao gồm Đen, Trắng - T&iacute;m Gradient v&agrave; Bạc - Đỏ Gradient. C&oacute; thể thấy thiết kế mặt lưng của OPPO PECM10 / PECT10 rất đẹp v&agrave; bắt mắt.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Files/2020/09/05/1287299/oppo-pecm10-pecm10_800x484.jpg\" style=\"height:484px; width:800px\" /></p>\r\n\r\n<p>Thiết bị sẽ được t&iacute;ch hợp m&agrave;n h&igrave;nh LCD k&iacute;ch thước 6.5 inch với thiết kế nốt ruồi, cung cấp độ ph&acirc;n giải Full HD+ (1.080 x 2.400 px) v&agrave; tỷ lệ khung h&igrave;nh 20:9. Cung cấp năng lượng cho OPPO PECM10 / PECT10 sẽ l&agrave; vi&ecirc;n pin 3.954 mAh, dường như kh&ocirc;ng hỗ trợ c&ocirc;ng nghệ sạc nhanh.</p>\r\n\r\n<p>Điện thoại OPPO PECM10 / PECT10 sẽ được trang bị bộ xử l&yacute; 8 nh&acirc;n c&oacute; tần số cơ bản 2.0 GHz. Tại Trung Quốc, thiết bị c&oacute; ba phi&ecirc;n bản RAM từ 4 GB, 6 GB v&agrave; 8 GB, bộ nhớ ROM 128 GB, kh&ocirc;ng hỗ trợ khe cắm thẻ microSD.</p>\r\n\r\n<p>Thiết bị OPPO b&iacute; ẩn sẽ c&oacute; camera trước 8 MP, mặt sau l&agrave; một cụm h&igrave;nh vu&ocirc;ng chứa 3 cảm biến m&aacute;y ảnh, với camera ch&iacute;nh 16 MP v&agrave; 2 camera phụ 2 MP. Điện thoại sẽ được c&agrave;i sẵn Android 10, cảm biến v&acirc;n tay gắn ph&iacute;a cạnh b&ecirc;n.</p>\r\n\r\n<p>Bạn kỳ vọng thiết bị OPPO b&iacute; ẩn n&agrave;y sẽ c&oacute; gi&aacute; bao nhi&ecirc;u?</p>\r\n\r\n<p>Nguồn:&nbsp;<a href=\"https://www.gizmochina.com/2020/09/05/oppo-pecm10-pect10-full-specifications-images-emerge-on-tenaa/\" target=\"_blank\">Gizmochina</a></p>', 'Smartphone OPPO bí ẩn xuất hiện trên TENAA, để lộ thông số cấu hình và thiết kế vô cùng đẹp mắt, có thể là điện thoại 5G giá rẻ', 'Nguyễn Văn B', '4.jpg', '0', 0, '2020-09-07 20:27:01', '2020-09-07 20:27:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `td_transaction`
--

CREATE TABLE `td_transaction` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tr_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tr_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tr_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tr_totalprice` bigint(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `td_transaction`
--

INSERT INTO `td_transaction` (`id`, `user_name`, `tr_phone`, `tr_address`, `tr_note`, `tr_totalprice`, `created_at`, `updated_at`) VALUES
(25, 'duy tùng', '096343423', 'Nha Trang', 'giao hàng nhanh nhé !', 2190000000, '2020-10-03 02:56:10', '2020-10-03 02:56:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `td_user`
--

CREATE TABLE `td_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL,
  `phone` int(11) DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `td_user`
--

INSERT INTO `td_user` (`id`, `email`, `password`, `level`, `phone`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '$2y$10$GLmdzooSONuW60YeSv.fLuKcGYTo3/ODirRk4htEaveJ1RTObu9K.', 1, NULL, NULL, 'xJLtlSdD66Pcr6GqcloOqvxJ36aaEnW6rZswVXp1woDVnxqtzx2dUhV8z6hn', NULL, NULL),
(2, 'duytung123@gmail.com', '$2y$10$WcIpgMiNEVOWgBMYHKf1VeqiglJswxyTAjuykQPwLD.bqAF.iKbnq', 0, NULL, NULL, 'fehs2XEIh3Ts34gTEJBPmLY5k1fq1yt8tWOT2kOO0CSaqUXt2uSQVlMZAuPU', NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `td_cateallproduct`
--
ALTER TABLE `td_cateallproduct`
  ADD PRIMARY KEY (`cateall_id`);

--
-- Chỉ mục cho bảng `td_category`
--
ALTER TABLE `td_category`
  ADD PRIMARY KEY (`cate_id`);

--
-- Chỉ mục cho bảng `td_comment`
--
ALTER TABLE `td_comment`
  ADD PRIMARY KEY (`cm_id`),
  ADD KEY `td_comment_cm_product_foreign` (`cm_product`);

--
-- Chỉ mục cho bảng `td_order`
--
ALTER TABLE `td_order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `td_product`
--
ALTER TABLE `td_product`
  ADD PRIMARY KEY (`prod_id`),
  ADD KEY `td_product_prod_cateall_foreign` (`prod_cateall`);

--
-- Chỉ mục cho bảng `td_rating`
--
ALTER TABLE `td_rating`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `td_tintuc`
--
ALTER TABLE `td_tintuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `td_transaction`
--
ALTER TABLE `td_transaction`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `td_user`
--
ALTER TABLE `td_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `td_user_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `td_cateallproduct`
--
ALTER TABLE `td_cateallproduct`
  MODIFY `cateall_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `td_category`
--
ALTER TABLE `td_category`
  MODIFY `cate_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `td_comment`
--
ALTER TABLE `td_comment`
  MODIFY `cm_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `td_order`
--
ALTER TABLE `td_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `td_product`
--
ALTER TABLE `td_product`
  MODIFY `prod_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT cho bảng `td_rating`
--
ALTER TABLE `td_rating`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `td_tintuc`
--
ALTER TABLE `td_tintuc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `td_transaction`
--
ALTER TABLE `td_transaction`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `td_user`
--
ALTER TABLE `td_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `td_comment`
--
ALTER TABLE `td_comment`
  ADD CONSTRAINT `td_comment_cm_product_foreign` FOREIGN KEY (`cm_product`) REFERENCES `td_product` (`prod_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `td_product`
--
ALTER TABLE `td_product`
  ADD CONSTRAINT `td_product_prod_cateall_foreign` FOREIGN KEY (`prod_cateall`) REFERENCES `td_cateallproduct` (`cateall_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
