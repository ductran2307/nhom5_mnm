-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 17, 2020 lúc 04:02 PM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_banbanhngot`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_customer` int(11) DEFAULT NULL,
  `date_order` date DEFAULT NULL,
  `total` float DEFAULT NULL COMMENT 'tổng tiền',
  `payment` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'hình thức thanh toán',
  `note` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'trạng thái',
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `bills`
--

INSERT INTO `bills` (`id`, `id_customer`, `date_order`, `total`, `payment`, `note`, `status`, `created_at`, `updated_at`) VALUES
(51, 56, '2020-06-06', 780000, 'ATM', 'ok', 'Đang xử lý', '2020-06-06 03:59:29', '2020-06-06 03:59:29'),
(50, 55, '2020-06-03', 420000, 'COD', 'ok', 'Đang xử lý', '2020-06-03 11:46:33', '2020-06-03 11:46:33'),
(49, 54, '2020-06-03', 350000, 'ATM', 'test', 'Đang xử lý', '2020-06-03 04:55:05', '2020-06-03 04:55:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_bill` int(10) NOT NULL,
  `id_product` int(10) NOT NULL,
  `quantity` int(11) NOT NULL COMMENT 'số lượng',
  `unit_price` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `bill_detail`
--

INSERT INTO `bill_detail` (`id`, `id_bill`, `id_product`, `quantity`, `unit_price`, `created_at`, `updated_at`) VALUES
(65, 47, 164, 1, 410000, '2020-06-03 04:51:56', '2020-06-03 04:51:56'),
(64, 46, 163, 1, 390000, '2020-06-03 04:50:26', '2020-06-03 04:50:26'),
(63, 46, 169, 1, 350000, '2020-06-03 04:50:26', '2020-06-03 04:50:26'),
(62, 45, 159, 2, 2550000, '2020-06-03 04:47:36', '2020-06-03 04:47:36'),
(66, 48, 163, 1, 390000, '2020-06-03 04:52:38', '2020-06-03 04:52:38'),
(67, 49, 168, 1, 350000, '2020-06-03 04:55:05', '2020-06-03 04:55:05'),
(68, 50, 150, 1, 420000, '2020-06-03 11:46:33', '2020-06-03 11:46:33'),
(69, 51, 152, 2, 390000, '2020-06-06 03:59:29', '2020-06-06 03:59:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_type` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_vietnamese_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `id_type`, `name`, `description`, `created_at`, `updated_at`) VALUES
(95, 36, 'Bánh socola', 'bánh socola', '2020-05-27 15:31:02', '2020-05-27 15:31:02'),
(96, 36, 'Bánh bắp', 'Bánh bắp', '2020-05-27 15:31:21', '2020-05-27 15:31:21'),
(97, 36, 'Bánh kem matcha trà xanh', 'Bánh kem matcha trà xanh', '2020-05-27 15:31:47', '2020-05-27 15:31:47'),
(98, 37, 'Mừng đầy tháng', 'Mừng đầy tháng', '2020-05-27 15:33:29', '2020-05-27 15:33:29'),
(99, 37, 'Thôi nôi', 'Thôi nôi', '2020-05-27 15:33:52', '2020-05-27 15:33:52'),
(100, 37, 'Mừng thọ', 'Mừng thọ', '2020-05-27 15:34:28', '2020-05-27 15:34:28'),
(101, 37, 'Bánh cưới/Kỷ niệm ngày cưới', 'Bánh cưới/Kỷ niệm ngày cưới', '2020-05-27 15:34:44', '2020-05-27 15:34:44'),
(102, 37, 'Khai trương - Tất niên', 'Khai trương - Tất niên', '2020-05-27 15:34:57', '2020-05-27 15:34:57'),
(103, 39, 'Ông - Bà', 'Ông - Bà', '2020-05-27 15:35:35', '2020-05-27 15:35:35'),
(104, 39, 'Bố - Mẹ', 'Bố - Mẹ', '2020-05-27 15:35:49', '2020-05-27 15:35:49'),
(105, 39, 'Anh Trai', 'Anh Trai', '2020-05-27 15:37:56', '2020-05-27 15:37:56'),
(106, 39, 'Chị gái', 'Chị gái', '2020-05-27 15:38:14', '2020-05-27 15:38:14'),
(107, 39, 'Người yêu', 'Người yêu', '2020-05-27 15:38:32', '2020-05-27 15:38:32'),
(108, 39, 'Vợ - Chồng yêu', 'Vợ - Chồng yêu', '2020-05-27 15:38:44', '2020-05-27 15:38:44'),
(109, 39, 'Mừng Ngày của Mẹ', 'Mừng Ngày của Mẹ', '2020-05-27 15:39:00', '2020-05-27 15:39:00'),
(110, 38, 'Ngôi nhà', 'Ngôi nhà', '2020-05-27 15:39:25', '2020-05-27 15:39:25'),
(111, 38, 'Lịch - Quyển lịch', 'Lịch - Quyển lịch', '2020-05-27 15:39:39', '2020-05-27 15:39:39'),
(112, 38, '18+', '18+', '2020-05-27 15:39:53', '2020-05-27 15:39:53'),
(113, 38, 'Lô gô/nắp bia', 'Lô gô/nắp bia', '2020-05-27 15:40:08', '2020-05-27 15:40:08'),
(114, 38, 'Quả bóng/sân banh', 'Quả bóng/sân banh', '2020-05-27 15:40:24', '2020-05-27 15:40:24'),
(115, 38, 'Bắt hình thú nhỏ', 'Bắt hình thú nhỏ', '2020-05-27 15:41:18', '2020-05-27 15:41:18'),
(116, 40, 'Siêu nhân', 'Siêu nhân', '2020-05-27 15:41:35', '2020-05-27 15:41:35'),
(117, 40, 'Chú chuột Mickey', 'Chú chuột Mickey', '2020-05-27 15:41:57', '2020-05-27 15:41:57'),
(118, 40, 'Doremi/Doremon', 'Doremi/Doremon', '2020-05-27 15:42:11', '2020-05-27 15:42:11'),
(119, 40, 'Nobita - Xuka', 'Nobita - Xuka', '2020-05-27 15:42:29', '2020-05-27 15:42:29'),
(120, 46, 'Valentine/ngày lễ tình nhân 14-2', 'Valentine/ngày lễ tình nhân 14-2', '2020-05-27 15:56:50', '2020-05-27 15:56:50'),
(121, 46, 'Ngày quốc tế phụ nữ 8-3', 'Ngày quốc tế phụ nữ 8-3', '2020-05-27 15:57:06', '2020-05-27 15:57:06'),
(122, 46, 'Ngày phụ nữ Việt Nam 20-10', 'Ngày phụ nữ Việt Nam 20-10', '2020-05-27 15:57:26', '2020-05-27 15:57:26'),
(123, 46, 'Ngày Halloween', 'Ngày Halloween', '2020-05-27 15:57:47', '2020-05-27 15:57:47'),
(124, 46, 'Giáng sinh', 'giáng sinh', '2020-05-27 15:58:08', '2020-05-27 15:58:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_product` int(10) UNSIGNED NOT NULL,
  `content` varchar(2000) COLLATE utf8_vietnamese_ci NOT NULL,
  `name` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `id_product`, `content`, `name`, `email`, `created_at`, `updated_at`) VALUES
(11, 169, 'sdfsdf', 'tuyển', 'sdfsd@gmail.com', '2020-06-04 04:36:03', '2020-06-04 04:36:03'),
(12, 169, 'bánh rất ngon', 'tuyển', 'tuyen197@gmail.com', '2020-06-04 04:50:18', '2020-06-04 04:50:18'),
(13, 169, 'very good', 'test', 'hangocanh23@gmail.com', '2020-06-04 04:52:42', '2020-06-04 04:52:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `name`, `gender`, `email`, `address`, `phone_number`, `note`, `created_at`, `updated_at`) VALUES
(48, 'admin', 'nam', 'dotuyen016@gmail.com', 'Đội 7- Thôn Năm Mẫu - Xã Tứ Dân', '0369712385', 'ok', '2020-06-03 04:47:36', '2020-06-03 04:47:36'),
(49, 'admin', 'nữ', 'dotuyen016@gmail.com', 'Đội 7- Thôn Năm Mẫu - Xã Tứ Dân', '0369712385', NULL, '2020-06-03 04:50:26', '2020-06-03 04:50:26'),
(50, 'admin', 'nam', 'dotuyen016@gmail.com', 'Đội 7- Thôn Năm Mẫu - Xã Tứ Dân', '0369712385', 'hay', '2020-06-03 04:50:34', '2020-06-03 04:50:34'),
(51, 'admin', 'nam', 'dotuyen016@gmail.com', 'Đội 7- Thôn Năm Mẫu - Xã Tứ Dân', '0369712385', 'ok', '2020-06-03 04:51:56', '2020-06-03 04:51:56'),
(52, 'admin', 'nam', 'dotuyen016@gmail.com', 'Đội 7- Thôn Năm Mẫu - Xã Tứ Dân', '0369712385', 'ok', '2020-06-03 04:51:58', '2020-06-03 04:51:58'),
(53, 'admin', 'nam', 'dotuyen016@gmail.com', 'Đội 7- Thôn Năm Mẫu - Xã Tứ Dân', '0369712385', 'ok', '2020-06-03 04:52:38', '2020-06-03 04:52:38'),
(54, 'admin', 'nam', 'dotuyen016@gmail.com', 'Đội 7- Thôn Năm Mẫu - Xã Tứ Dân', '0369712385', 'test', '2020-06-03 04:55:05', '2020-06-03 04:55:05'),
(55, 'Đỗ Văn Tuyển', 'nam', 'dotuyen1412197@gmail.com', 'Đội 7- Thôn Năm Mẫu - Xã Tứ Dân, Huyện Khoái Châu - Tỉnh Hưng Yên', '+84369712385', 'ok', '2020-06-03 11:46:33', '2020-06-03 11:46:33'),
(56, 'admin', 'nam', 'dotuyen016@gmail.com', 'Đội 7- Thôn Năm Mẫu - Xã Tứ Dân', '0369712385', 'ok', '2020-06-06 03:59:28', '2020-06-06 03:59:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_employees` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL COMMENT 'tên nhân viên',
  `email` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL COMMENT 'email',
  `address` varchar(250) COLLATE utf8_vietnamese_ci NOT NULL COMMENT 'địa chỉ',
  `phone` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL COMMENT 'số điện thoại',
  `gender` varchar(10) COLLATE utf8_vietnamese_ci NOT NULL COMMENT 'giới tính',
  `position` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL COMMENT 'chức vụ',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `import_bill`
--

CREATE TABLE `import_bill` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_import_bill_detail` int(10) UNSIGNED NOT NULL,
  `total_price` float NOT NULL,
  `id_employees` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `import_bill_detail`
--

CREATE TABLE `import_bill_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_product` int(10) UNSIGNED NOT NULL COMMENT 'mã sản phẩm',
  `id_type_product` int(10) UNSIGNED NOT NULL COMMENT 'mã loại sp',
  `id_category` int(10) UNSIGNED NOT NULL COMMENT 'mã danh mục',
  `id_supplier` int(10) UNSIGNED NOT NULL COMMENT 'mã nhà cung cấp',
  `quantity` int(10) NOT NULL COMMENT 'số lượng',
  `unit_price` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` int(20) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `lienhe`
--

INSERT INTO `lienhe` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(3, 'Đỗ Văn Tuyển', 'dotuyen1412197@gmail.com', 369712385, 'OK', '2020-06-15 15:22:52', '2020-06-15 15:22:52'),
(4, 'Tuyển Đỗ Văn', 'dotuyen1412197@gmail.com', 369712385, 'HI test', '2020-06-15 15:23:46', '2020-06-15 15:23:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'tiêu đề',
  `summary` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tóm tắt',
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'nội dung',
  `image` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'hình',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `summary`, `content`, `image`, `created_at`, `updated_at`) VALUES
(6, '<strong>B&aacute;nh phồng sữa - m&oacute;n b&aacute;nh đặc sản của miền T&acirc;y</strong>', '<p><strong>B&aacute;nh phồng sữa</strong>&nbsp;l&agrave; m&oacute;n b&aacute;nh được&nbsp;nhiều người biết&nbsp;đến, nhưng kh&ocirc;ng &iacute;t bạn trẻ thắc mắc đ&oacute; l&agrave; b&aacute;nh như thế n&agrave;o. Đ&acirc;y l&agrave; một loại b&aacute;nh đặc sản của qu&ecirc; hương miền T&acirc;y. Chiếc&nbsp;<strong>b&aacute;nh phồng sữa dừa</strong>&nbsp;c&oacute; h&igrave;nh dạng giống chiếc b&aacute;nh tr&aacute;ng, nhưng c&oacute; vị ngọt thanh v&agrave; thơm t&ugrave;y theo hương vị bạn chọn.</p>', '<h3><strong>Nguy&ecirc;n liệu l&agrave;m b&aacute;nh phồng sữa dừa</strong></h3>\r\n\r\n<p><strong>B&aacute;nh phồng sữa dừa</strong>&nbsp;được c&aacute;c nghệ nh&acirc;n l&agrave;m từ c&aacute;c&nbsp; nguy&ecirc;n liệu đơn giản, hấp dẫn mọi nh&agrave;. Chiếc b&aacute;nh được l&agrave;m từ mạch nha, đường, sữa, nước cốt dừa, sầu ri&ecirc;ng v&agrave; khoai m&igrave;. T&ugrave;y theo sở th&iacute;ch của mỗi người m&agrave; chiếc b&aacute;nh sẽ c&oacute; m&ugrave;i sầu ri&ecirc;ng, hoặc dừa.</p>\r\n\r\n<p><img src=\"https://bizweb.dktcdn.net/100/333/744/files/banh-phong-sua-2.jpg?v=1578707097877\" /><br />\r\nMẫu b&aacute;nh phồng sữa dừa đặc sản Bến Tre</p>\r\n\r\n<p><em><strong>&gt;&gt;&gt;&gt; Click tham khảo ngay&nbsp;<a href=\"https://banhngot.vn/banh-tra-sua-tran-chau-duong-den\">b&aacute;nh tr&agrave; sữa tr&acirc;n ch&acirc;u đường đen</a></strong></em></p>\r\n\r\n<h3><strong>Điều hấp dẫn của b&aacute;nh phồng sữa</strong></h3>\r\n\r\n<p>B&aacute;nh phồng sữa tuy c&oacute; h&igrave;nh d&aacute;ng đơn giản nhưng lại cuốn h&uacute;t c&aacute;c thực kh&aacute;ch v&ocirc; c&ugrave;ng. Miếng b&aacute;nh c&oacute; độ dai, c&agrave;ng nhai lại c&agrave;ng ngọt. Chiếc&nbsp;<strong>b&aacute;nh phồng sữa dừa</strong>&nbsp;n&agrave;y khi bạn cắn một miếng b&aacute;nh nhỏ sẽ bị th&ocirc;i th&uacute;c cắn ngay miếng b&aacute;nh tiếp theo v&agrave; kh&ocirc;ng thể n&agrave;o dừng lại.</p>\r\n\r\n<p><img src=\"https://bizweb.dktcdn.net/100/333/744/files/banh-phong-sua-3.jpg?v=1578707125712\" /><br />\r\nMẫu b&aacute;nh phồng sữa nhơn ho&agrave;ng đặc biệt</p>\r\n\r\n<h2><strong>C&aacute;c loại b&aacute;nh phồng sữa dừa</strong></h2>\r\n\r\n<h3><strong>B&aacute;nh phồng sữa ho&agrave;ng dung hảo hạng</strong></h3>\r\n\r\n<p>Chiếc<strong>&nbsp;b&aacute;nh phồng sữa dừa ho&agrave;ng dung</strong>&nbsp;được c&aacute;c thực kh&aacute;ch lựa chọn rất nhiều để d&agrave;nh tặng cho người th&acirc;n y&ecirc;u của m&igrave;nh. Chiếc b&aacute;nh thu h&uacute;t mọi người bởi vị ngọt thanh, thơm m&aacute;t, th&iacute;ch hợp để vừa thưởng thức vừa tr&ograve; chuyện c&ugrave;ng bạn b&egrave; v&agrave; người th&acirc;n y&ecirc;u của m&igrave;nh.</p>\r\n\r\n<p><img src=\"https://bizweb.dktcdn.net/100/333/744/files/banh-phong-sua-4.jpg?v=1578707151900\" /><br />\r\nMẫu b&aacute;nh sữa dừa nhơn ho&agrave;ng hảo hạng</p>\r\n\r\n<p><em><strong>&gt;&gt;&gt;&gt; Click tham khảo ngay&nbsp;<a href=\"https://banhngot.vn/banh-nep\">b&aacute;nh nếp c&aacute;ch l&agrave;m b&aacute;nh nếp</a></strong></em></p>\r\n\r\n<h3><strong>B&aacute;nh phồng sữa nhơn ho&agrave;ng&nbsp;chất lượng</strong></h3>\r\n\r\n<p>Một loại&nbsp;<strong>b&aacute;nh phồng sữa dừa</strong>&nbsp;hấp dẫn, chất lượng m&agrave; bạn nhất định kh&ocirc;ng được bỏ qua đ&oacute; ch&iacute;nh l&agrave;&nbsp;<strong>b&aacute;nh phồng sữa nhơn ho&agrave;ng</strong>. Chiếc b&aacute;nh được l&agrave;m từ sữa &ocirc;ng thọ, mạch nha như những chiếc&nbsp;<strong>b&aacute;nh phồng sữa</strong>&nbsp;kh&aacute;c nhưng điều cuốn h&uacute;t l&agrave; bởi thiết kế bao b&ograve; b&aacute;nh bến ngo&agrave;i.</p>\r\n\r\n<p><img src=\"https://bizweb.dktcdn.net/100/333/744/files/banh-phong-sua-5.jpg?v=1578707174245\" /><br />\r\nMẫu b&aacute;nh sữa dừa ho&agrave;ng dung</p>\r\n\r\n<h3><strong>B&aacute;nh phồng sữa nướng đặc biệt v&agrave; hấp dẫn</strong></h3>\r\n\r\n<p><strong>B&aacute;nh phồng sữa nướng</strong>&nbsp;l&agrave; m&oacute;n b&aacute;nh mới nổi trong thời gian gần đ&acirc;y. Chiếc&nbsp;<strong>b&aacute;nh phồng sữa</strong>&nbsp;kh&aacute;c biệt so với c&aacute;c loại b&aacute;nh kh&aacute;c bởi chiếc b&aacute;nh được nướng tr&ecirc;n l&ograve; tạo sự gi&ograve;n tan, mang hương vị thơm ngon nh&egrave; nhẹ của sữa, của nước cốt dừa khiến c&aacute;c thực kh&aacute;ch kh&ocirc;ng thể chối từ.&nbsp;</p>\r\n\r\n<p><img src=\"https://bizweb.dktcdn.net/100/333/744/files/banh-phong-sua-6.jpg?v=1578707305359\" /><br />\r\nMẫu b&aacute;nh phồng sữa độc đ&aacute;o</p>\r\n\r\n<p><em><strong>&gt;&gt;&gt;&gt; Tham khảo ngay c&aacute;c mẫu b&aacute;nh sinh nhật tại&nbsp;<a href=\"https://banhngot.vn/banh-kem-quan-8\">Tiệm b&aacute;nh kem quận 8</a>&nbsp;</strong></em></p>\r\n\r\n<h2><strong>B&aacute;nh phồng sữa sầu ri&ecirc;ng d&agrave;nh tặng cho người th&acirc;n</strong></h2>\r\n\r\n<h3><strong>B&aacute;nh phồng sữa sầu ri&ecirc;ng c&oacute; g&igrave; kh&aacute;c so với c&aacute;c loại b&aacute;nh phồng sữa</strong></h3>\r\n\r\n<p><strong>B&aacute;nh phồng sữa sầu ri&ecirc;ng</strong>&nbsp;mang m&ugrave;i đặc trưng của sầu ri&ecirc;ng. M&ugrave;i b&aacute;nh c&oacute; hương thơm nh&egrave; nhẹ, ng&agrave;o ngạt của sầu ri&ecirc;ng tươi, đ&acirc;y ch&iacute;nh l&agrave; m&oacute;n b&aacute;nh hảo hạng để bạn d&agrave;nh tặng cho người th&acirc;n, bạn b&egrave; l&agrave; người cực kỳ đam m&ecirc; với hương vị của sầu ri&ecirc;ng.</p>\r\n\r\n<p><img src=\"https://bizweb.dktcdn.net/100/333/744/files/banh-phong-sua-7.jpg?v=1578707328375\" /><br />\r\nMẫu b&aacute;nh phồng sữa sầu ri&ecirc;ng</p>\r\n\r\n<h3><strong>C&ocirc;ng dụng của b&aacute;nh phồng sữa</strong></h3>\r\n\r\n<p><strong>B&aacute;nh phồng sữa dừa&nbsp;</strong>được sử dụng l&agrave;m m&oacute;n b&aacute;nh tr&aacute;ng miệng, l&agrave;m qu&agrave; tặng cho người th&acirc;n y&ecirc;u. Đ&acirc;y l&agrave; m&oacute;n b&aacute;nh đơn giản, bạn c&oacute; thể t&igrave;m mua ở c&aacute;c si&ecirc;u thị một c&aacute;ch dễ d&agrave;ng, gi&aacute; tiền hợp l&yacute;. Chắc chắn rằng, m&oacute;n b&aacute;nh n&agrave;y sẽ kh&ocirc;ng l&agrave;m bạn thất vọng.</p>\r\n\r\n<p><img src=\"https://bizweb.dktcdn.net/100/333/744/files/banh-phong-sua-8.jpg?v=1578707358288\" /><br />\r\nMẫu b&aacute;nh phồng sữa dừa thơm ngon</p>', 'banh-phong-sua-1.jpg', '2020-06-04 15:47:51', '2020-06-04 15:47:51'),
(7, '<strong>B&aacute;nh m&igrave; bơ sữa - M&oacute;n ăn ngon của tuổi thơ</strong>', '<p>Ng&agrave;y b&eacute;, những m&oacute;n qu&agrave; ăn vặt vẫn chỉ xoay quanh c&aacute;c m&oacute;n ăn d&acirc;n d&atilde; quen thuộc xung quanh nh&agrave;, l&agrave;m từ c&aacute;c nguy&ecirc;n liệu thuần Việt như b&aacute;nh m&igrave;, b&aacute;nh gạo, b&aacute;nh b&ograve;, b&aacute;nh ti&ecirc;u,... đ&ocirc;i khi ch&uacute;ng ta c&ograve;n kh&ocirc;ng c&oacute; m&agrave; ăn. Những m&oacute;n b&aacute;nh &quot;đắt tiền&quot; như b&aacute;nh m&igrave; bơ sữa lại c&agrave;ng được mọi người th&iacute;ch th&uacute;&nbsp;</p>', '<p>C&aacute;c loại b&aacute;nh m&igrave; sữa ngon tuyệt kh&ocirc;ng thể qu&ecirc;n</p>\r\n\r\n<p>B&aacute;nh bột m&igrave; sữa b&eacute;o ngậy&nbsp;</p>\r\n\r\n<p>B&aacute;nh m&igrave; sữa tươi cho bữa s&aacute;ng gi&agrave;u năng lượng</p>\r\n\r\n<p>M&aacute;ch bạn c&aacute;c loại b&aacute;nh bột m&igrave; sữa đặc nổi tiếng</p>\r\n\r\n<p>B&aacute;nh m&igrave; sữa chua lạ miệng nhất định phải thử</p>\r\n\r\n<p>M&oacute;n b&aacute;nh bột m&igrave; trứng sữa tươi ngon nhất</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" dir=\"ltr\">\r\n	<tbody>\r\n		<tr>\r\n			<td>b&aacute;nh m&igrave; bơ sữa</td>\r\n		</tr>\r\n		<tr>\r\n			<td>b&aacute;nh m&igrave; sữa</td>\r\n		</tr>\r\n		<tr>\r\n			<td>b&aacute;nh bột m&igrave; sữa</td>\r\n		</tr>\r\n		<tr>\r\n			<td>b&aacute;nh m&igrave; sữa chua</td>\r\n		</tr>\r\n		<tr>\r\n			<td>b&aacute;nh m&igrave; sữa tươi</td>\r\n		</tr>\r\n		<tr>\r\n			<td>banh mi sua</td>\r\n		</tr>\r\n		<tr>\r\n			<td>b&aacute;nh m&igrave; sữa đặc</td>\r\n		</tr>\r\n		<tr>\r\n			<td>b&aacute;nh bột m&igrave; sữa đặc</td>\r\n		</tr>\r\n		<tr>\r\n			<td>b&aacute;nh bột m&igrave; trứng sữa tươi</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'banh-mi-bo-sua-1.jpg', '2020-06-04 15:48:09', '2020-06-04 15:48:09'),
(4, '<strong>B&aacute;nh sữa chua c&oacute; nguồn gốc từ đ&acirc;u?</strong>', '<p>Khi c&aacute;i t&ecirc;n&nbsp;<em>&quot;b&aacute;nh sữa chua&quot;</em>&nbsp;lần đầu xuất hiện, ngay lập tức m&oacute;n b&aacute;nh n&agrave;y trở th&agrave;nh m&oacute;n ăn vặt sang chảnh v&agrave; ngon l&agrave;nh trong giới trẻ v&agrave; c&aacute;c mẹ bỉm sữa.&nbsp;<strong>B&aacute;nh sữa chua</strong>&nbsp;chủ yếu được x&aacute;ch tay từ Đ&agrave;i Loan, l&agrave; d&ograve;ng b&aacute;nh phổ biến bởi hương vị độc đ&aacute;o, k&iacute;ch thước nhỏ gọn tiện lợi. Ngo&agrave;i ra&nbsp;<strong>b&aacute;nh sữa chua H&agrave;n Quốc</strong>&nbsp;cũng l&agrave; thương hiệu được nhiều bạn trẻ săn đ&oacute;n.</p>', '<p><em><img src=\"https://bizweb.dktcdn.net/100/333/744/files/banh-sua-chua-horsh.jpg?v=1578708983800\" /></em></p>\r\n\r\n<p><em>B&aacute;nh sữa chua mềm mịn thơm b&eacute;o</em></p>\r\n\r\n<h2><strong>C&aacute;c loại b&aacute;nh sữa chua phổ biến nhất</strong></h2>\r\n\r\n<h3><strong>B&aacute;nh sữa chua Horsh Đ&agrave;i Loan</strong></h3>\r\n\r\n<p><strong>B&aacute;nh sữa chua Horsh</strong>&nbsp;l&agrave; c&aacute;i t&ecirc;n c&oacute; thể xem như quen thuộc nhất. B&aacute;nh Horsh cũng l&agrave; d&ograve;ng b&aacute;nh đầu ti&ecirc;n khiến cho b&aacute;nh sữa chua trở n&ecirc;n nổi tiếng v&agrave; phổ biến tại Việt Nam. Với bao b&igrave; sang trọng bắt mắt, th&iacute;ch hợp l&agrave;m qu&agrave; tặng cho c&aacute;c bạn nhỏ.</p>\r\n\r\n<p>&gt;&gt;&gt; Tham khảo&nbsp;<em><strong><a href=\"https://banhngot.vn/banh-kem-quan-7\">Tiệm b&aacute;nh kem quận 7</a></strong></em></p>\r\n\r\n<p><em><img src=\"https://bizweb.dktcdn.net/100/333/744/files/banh-sua-chua.jpg?v=1578709031913\" /><br />\r\nB&aacute;nh sữa chua Horsh sang trọng</em></p>\r\n\r\n<h3><strong>B&aacute;nh sữa chua ph&ocirc; mai</strong></h3>\r\n\r\n<p><strong>B&aacute;nh sữa chua ph&ocirc; mai</strong>&nbsp;xuất hiện sau khi b&aacute;nh sữa chua Horsh đ&atilde; mở đường v&agrave;o Việt Nam. Tương tự như Horsh, b&aacute;nh sữa chua ph&ocirc; mai cũng c&oacute; lớp sanwich mềm b&ecirc;n ngo&agrave;i bọc phần nh&acirc;n sữa chua ph&ocirc; mai b&eacute;o mịn, m&aacute;t lạnh b&ecirc;n trong.</p>\r\n\r\n<p>&gt;&gt;&gt; Xem th&ecirc;m B&aacute;nh bắp ph&ocirc; mai&nbsp;&nbsp;<em><strong><a href=\"https://banhngot.vn/banh-bap-pho-mai\" target=\"_blank\">https://banhngot.vn/banh-bap-pho-mai</a></strong></em></p>\r\n\r\n<p><em><img src=\"https://bizweb.dktcdn.net/thumb/grande/100/333/744/files/banh-sua-chua-pho-mai.jpg?v=1578709052049\" /><br />\r\nB&aacute;nh sữa chua ph&ocirc; mai ăn liền</em></p>\r\n\r\n<h2><strong>C&aacute;c loại b&aacute;nh sữa chua s&aacute;ng tạo độc đ&aacute;o</strong></h2>\r\n\r\n<h3><strong>B&aacute;nh sữa chua gi&ograve;n</strong></h3>\r\n\r\n<p><em>B&aacute;nh sữa chua gi&ograve;n&nbsp;</em>l&agrave; người anh em song sinh của m&oacute;n b&aacute;nh sữa chua sanwich. C&ugrave;ng do h&atilde;ng Horsh sản xuất, b&aacute;nh sữa chua gi&ograve;n cũng c&oacute; phần nh&acirc;n sữa chua trứ danh. Tuy nhi&ecirc;n thay v&igrave; d&ugrave;ng lớp sanwich mềm, b&aacute;nh sữa chua gi&ograve;n sử dụng b&aacute;nh xốp để tạo độ cứng gi&ograve;n cho b&aacute;nh.</p>\r\n\r\n<p>&gt;&gt;&gt; Click xem ngay&nbsp;<em><strong><a href=\"https://banhngot.vn/banh-kem-quan-tan-binh\">Tiệm b&aacute;nh kem quận T&acirc;n B&igrave;nh</a></strong></em></p>\r\n\r\n<p><em><img src=\"https://bizweb.dktcdn.net/thumb/grande/100/333/744/files/banh-sua-chua-gion.jpg?v=1578709066893\" /><br />\r\nB&aacute;nh sữa chua gi&ograve;n thương hiệu Horsh</em></p>\r\n\r\n<h3><strong>B&aacute;nh sữa chua sầu ri&ecirc;ng</strong></h3>\r\n\r\n<p>Vẫn l&agrave; thương hiệu b&aacute;nh sữa chua Horsh, nay đ&atilde; c&oacute; th&ecirc;m hương vị sầu ri&ecirc;ng cho c&aacute;c bạn thưởng thức.&nbsp;<strong>B&aacute;nh sữa chua sầu ri&ecirc;ng</strong>&nbsp;với lớp sanwich mềm, b&ecirc;n trong thấm đượm nh&acirc;n sữa chua sầu ri&ecirc;ng, vừa x&eacute; vỏ đ&atilde; thơm nức mũi.</p>\r\n\r\n<p><em><img src=\"https://bizweb.dktcdn.net/thumb/grande/100/333/744/files/banh-sua-chua-sau-rieng.jpg?v=1578709083813\" /><br />\r\nB&aacute;nh sữa chua sầu ri&ecirc;ng thơm lừng</em></p>\r\n\r\n<h3><strong>B&aacute;nh sữa chua ph&ocirc; mai nướng</strong></h3>\r\n\r\n<p>Với những fan cuồng ph&ocirc; mai th&igrave; kh&ocirc;ng thể bỏ qua m&oacute;n&nbsp;<strong>b&aacute;nh sữa chua ph&ocirc; mai nướng</strong>&nbsp;n&agrave;y. Đ&acirc;y l&agrave; m&oacute;n b&aacute;nh tươi được l&agrave;m từ bột m&igrave;, trứng, sữa tươi v&agrave; ph&ocirc; mai. Lớp ph&ocirc; mai nướng phủ tr&ecirc;n mặt b&aacute;nh ch&iacute;nh l&agrave; phần tinh hoa nhất của b&aacute;nh!</p>\r\n\r\n<p><em><img src=\"https://bizweb.dktcdn.net/100/333/744/files/banh-sua-chua-pho-mai-nuong.jpg?v=1578709174576\" /><br />\r\nB&aacute;nh sữa chua nướng độc đ&aacute;o</em></p>', 'banh-sua-chua.jpg', '2020-06-04 15:48:17', '2020-06-04 15:48:17'),
(5, '<strong>B&Aacute;NH SỮA TƯƠI - C&Aacute;I T&Ecirc;N CHƯA BAO GIỜ NGỪNG HOT</strong>', '<p>C&aacute;c m&oacute;n b&aacute;nh khi l&agrave;m từ sữa lại mang hương vị sữa đặc trưng, rất thơm, b&eacute;o v&agrave; ngon.&nbsp;<em><strong><a href=\"https://banhngot.vn/banh-sua-bo\">B&aacute;nh sữa b&ograve;</a></strong></em>,&nbsp;hay<strong>&nbsp;b&aacute;nh sữa tươi,&nbsp;</strong>ngay từ khi xuất hiện đ&atilde; g&acirc;y được sức h&uacute;t v&ocirc; c&ugrave;ng lớn. Sở dĩ n&oacute; g&acirc;y được sức hấp dẫn như vậy l&agrave; bởi n&oacute; l&agrave; một m&oacute;n ăn vặt. M&agrave; c&aacute;c m&oacute;n ăn vặt vẫn lu&ocirc;n thu h&uacute;t đ&ocirc;ng đảo sự ch&uacute; &yacute;, v&agrave; m&oacute;n ăn vặt lu&ocirc;n hấp dẫn nhiều người. Chẳng ai nỡ chối từ một m&oacute;n&nbsp;<strong>b&aacute;nh sữa tươi chi&ecirc;n&nbsp;</strong>v&agrave;ng tươi, cực k&iacute;ch th&iacute;ch vị gi&aacute;c đ&uacute;ng kh&ocirc;ng n&agrave;o! Bạn đ&atilde; thử m&oacute;n b&aacute;nh ngon n&agrave;y chưa nhỉ? C&oacute; rất nhiều hương vị để bạn thưởng thức đấy!</p>', '<h2><strong>B&Aacute;NH SỮA TƯƠI VỚI NHIỀU HƯƠNG VỊ</strong></h2>\r\n\r\n<h3><strong>B&aacute;nh sữa tươi ngon ngất ng&acirc;y</strong></h3>\r\n\r\n<p><strong>B&aacute;nh sữa tươi -&nbsp;</strong>c&aacute;i t&ecirc;n k&iacute;ch th&iacute;ch sự t&ograve; m&ograve; đ&uacute;ng kh&ocirc;ng n&agrave;o! Đ&acirc;y kh&ocirc;ng chỉ l&agrave; m&oacute;n b&aacute;nh c&oacute; t&ecirc;n gọi hấp dẫn, m&agrave; thực chất l&agrave; một m&oacute;n b&aacute;nh si&ecirc;u ngon v&agrave; bổ dưỡng đấy. Chỉ xuất hiện trong thời gian gần đ&acirc;y, thế nhưng c&aacute;i t&ecirc;n&nbsp;<strong>b&aacute;nh sữa tươi</strong>&nbsp;đ&atilde; nhanh ch&oacute;ng lấp đấy trong menu c&aacute;c h&agrave;ng qu&aacute;n ăn vặt. Nếu ban đầu, người ta ăn chỉ v&igrave; t&ograve; m&ograve;, th&igrave; sau đ&oacute; người ta lại thưởng thức b&aacute;nh như một m&oacute;n ngon m&igrave;nh y&ecirc;u th&iacute;ch.</p>\r\n\r\n<p><img src=\"https://bizweb.dktcdn.net/100/333/744/files/sua-tuoi.jpg?v=1578709874155\" /><br />\r\n<em>H&igrave;nh ảnh b&aacute;nh sữa tươi</em></p>\r\n\r\n<p>C&aacute;i g&igrave; cũng c&oacute; nguy&ecirc;n do của n&oacute; đ&uacute;ng kh&ocirc;ng n&agrave;o! Kh&ocirc;ng phải ngẫu nhi&ecirc;n m&agrave;&nbsp;<strong>b&aacute;nh sữa tươi&nbsp;</strong>lại nhanh ch&oacute;ng phổ biến, v&agrave; được nhiều người ưa chuộng đến thế. Tất cả đều c&oacute; nguy&ecirc;n do cả đấy. V&igrave; b&aacute;nh được l&agrave;m từ sữa tươi n&ecirc;n n&oacute; v&ocirc; c&ugrave;ng bổ dưỡng, v&agrave; c&aacute;c em nhỏ ho&agrave;n to&agrave;n c&oacute; thể y&ecirc;n t&acirc;m thưởng thức. C&aacute;c bố mẹ cũng y&ecirc;n t&acirc;m khi cho con ăn m&oacute;n ăn vặt n&agrave;y. Bật m&iacute; một điều l&agrave; người lớn cũng rất th&iacute;ch vị&nbsp;<strong>b&aacute;nh sữa tươi</strong>&nbsp;nữa đấy.</p>\r\n\r\n<p><img src=\"https://bizweb.dktcdn.net/100/333/744/files/sua-tuoiiii.jpg?v=1578709924099\" /><br />\r\n<em>H&igrave;nh ảnh b&aacute;nh sữa tươi</em></p>\r\n\r\n<p>&gt;&gt;&gt;&gt; Mua b&aacute;nh kem sinh nhật? Đến ngay&nbsp;<em><strong><a href=\"https://banhngot.vn/banh-kem-quan-5\">Tiệm b&aacute;nh kem quận 5</a></strong></em></p>\r\n\r\n<h3><strong>B&aacute;nh sữa tươi chi&ecirc;n x&ugrave; ngon tuyệt vời</strong></h3>\r\n\r\n<p>Một trong những hương vị ngon nhất của m&oacute;n ăn n&agrave;y ch&iacute;nh l&agrave;&nbsp;<strong>b&aacute;nh sữa tươi chi&ecirc;n x&ugrave;</strong>. Một chiếc b&aacute;nh v&agrave;ng v&agrave;ng, gi&ograve;n ở vỏ b&aacute;nh, thơm v&agrave; b&eacute;o ngậy vị sữa ở b&ecirc;n trong thật ấn tượng phải kh&ocirc;ng n&agrave;o. Khi đ&atilde; được chế biến th&agrave;nh m&oacute;n chi&ecirc;n,&nbsp;<strong>b&aacute;nh sữa tươi chi&ecirc;n gi&ograve;n&nbsp;</strong>sẽ c&agrave;ng ngon hơn khi được chấm tương ớt, hoặc tương đen đấy. Chỉ nghĩ th&ocirc;i đ&atilde; thấy k&iacute;ch th&iacute;ch rồi đ&uacute;ng kh&ocirc;ng n&agrave;o!</p>\r\n\r\n<p><img src=\"https://bizweb.dktcdn.net/100/333/744/files/sua-tuoi-chien-xu.jpg?v=1578709755171\" /><br />\r\n<em>H&igrave;nh ảnh b&aacute;nh sữa tươi chi&ecirc;n</em></p>\r\n\r\n<p><strong>B&aacute;nh sữa tươi chi&ecirc;n&nbsp;</strong>l&agrave; m&oacute;n ăn vặt ngon v&agrave; bổ dưỡng, th&iacute;ch hợp để nh&acirc;m nhi, t&aacute;n gẫn, v&agrave; ăn chơi. Nếu bạn t&igrave;m kiếm một m&oacute;n ăn vặt ngon, an to&agrave;n, v&agrave; ph&ugrave; hợp cho nhiều độ tuổi th&igrave;&nbsp;<strong>b&aacute;nh sữa tươi chi&ecirc;n x&ugrave;&nbsp;</strong>l&agrave; một ứng cử vi&ecirc;n rất s&aacute;ng gi&aacute;. M&oacute;n ăn n&agrave;y rất biết c&aacute;ch chiều l&ograve;ng người, nhiều người ở nhiều độ tuổi kh&aacute;c nhau đều bị m&oacute;n b&aacute;nh n&agrave;y hấp dẫn.</p>\r\n\r\n<p><img src=\"https://bizweb.dktcdn.net/100/333/744/files/sua-tuoi-chien.jpg?v=1578709736952\" /><br />\r\n<em>H&igrave;nh ảnh b&aacute;nh sữa tươi chi&ecirc;n x&ugrave;</em></p>\r\n\r\n<p>&gt;&gt;&gt;&gt;&gt; Thưởng thức&nbsp;<em><strong><a href=\"https://banhngot.vn/banh-tra-sua-tran-chau-duong-den\">B&aacute;nh tr&agrave; sữa tr&acirc;n ch&acirc;u đường đen mới lạ!</a></strong></em></p>\r\n\r\n<h2><strong>MU&Ocirc;N V&Agrave;N C&Aacute;CH CHẾ BIẾN B&Aacute;NH SỮA TƯƠI&nbsp;</strong></h2>\r\n\r\n<h3><strong>B&aacute;nh sữa tươi tr&acirc;n ch&acirc;u độc lạ</strong></h3>\r\n\r\n<p>Theo thời gian, những m&oacute;n b&aacute;nh sẽ được đổi mới, s&aacute;ng tạo th&ecirc;m nhiều hương vị độc đ&aacute;o v&agrave; mới lạ.&nbsp;<strong>B&aacute;nh sữa tươi</strong>&nbsp;cũng kh&ocirc;ng ngoại lệ. Một trong những hương vị b&aacute;nh g&acirc;y sốt x&igrave;nh xịch trong thời gian gần đ&acirc;y ch&iacute;nh l&agrave;&nbsp;<strong>b&aacute;nh sữa tươi tr&acirc;n ch&acirc;u.&nbsp;</strong>Nghe thật mới mẻ v&agrave; s&aacute;ng tạo đ&uacute;ng kh&ocirc;ng n&agrave;o! Chỉ nghe t&ecirc;n th&ocirc;i đ&atilde; k&iacute;ch th&iacute;ch sự t&ograve; m&ograve; v&agrave; mong muốn thưởng thức rồi!</p>\r\n\r\n<p><img src=\"https://bizweb.dktcdn.net/100/333/744/files/sua-tuoi-tcd.jpg?v=1578709650659\" /><br />\r\n<em>H&igrave;nh ảnh b&aacute;nh sữa tươi tr&acirc;n ch&acirc;u</em></p>\r\n\r\n<h3><strong>B&aacute;nh sữa tươi tr&acirc;n ch&acirc;u đường đen</strong></h3>\r\n\r\n<p><strong>B&aacute;nh sữa tươi tr&acirc;n ch&acirc;u đường đen&nbsp;</strong>l&agrave; một sự kết hợp như thế n&agrave;o nhỉ? Ta vẫn quen thuộc với&nbsp;<strong>b&aacute;nh sữa tươi</strong>&nbsp;thơm b&eacute;o, hay tr&acirc;n ch&acirc;u đường đen dai dai, ngọt ngọt, thơm thơm. C&ograve;n&nbsp;<strong>b&aacute;nh sữa tươi ch&acirc;n tr&acirc;u -&nbsp;</strong>sự kết hợp n&agrave;y sẽ tạo ra hương vị g&igrave; nhỉ? Nhưng khi ngẫm lại th&igrave; sự kết hợp n&agrave;y cũng kh&aacute; l&agrave; hợp l&iacute;, v&agrave; m&oacute;n b&aacute;nh n&agrave;y chắc hẳn sẽ chiếm được t&igrave;nh cảm của nhiều người lắm đ&acirc;y!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"https://bizweb.dktcdn.net/100/333/744/files/sua-tuoi-tc.jpg?v=1578709664393\" /><br />\r\n<em>H&igrave;nh ảnh b&aacute;nh sữa tươi tr&acirc;n ch&acirc;u đường đen</em></p>', 'sua-tuoiii.jpg', '2020-06-04 15:48:25', '2020-06-04 15:48:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_type` int(10) UNSIGNED DEFAULT NULL,
  `id_category` int(10) UNSIGNED DEFAULT NULL,
  `id_supplier` int(11) UNSIGNED DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit_price` float DEFAULT NULL COMMENT 'giá gốc',
  `promotion_price` float DEFAULT NULL COMMENT 'giá sale',
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'đơn vị',
  `new` tinyint(4) DEFAULT 0,
  `status` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `id_type`, `id_category`, `id_supplier`, `description`, `unit_price`, `promotion_price`, `image`, `unit`, `new`, `status`, `created_at`, `updated_at`) VALUES
(145, 'bns1- thanh tao', 36, 95, NULL, '<h3><a href=\"https://banhngot.vn/bns1-thanh-tao\" rel=\"dofollow\" title=\"bns1- thanh tao\">bns1- thanh tao</a></h3>', 330000, NULL, 'bns1-340k-gato-socola-1.jpg', 'chiếc', 1, '', '2020-05-27 16:21:43', '2020-05-27 16:21:43'),
(146, 'bsn26', 36, 95, NULL, '<p>bsn26 sdfsdf</p>', 350000, NULL, 'bns26-350k-gato-socola-26.jpg', 'chiếc', 1, '', '2020-06-01 07:36:01', '2020-06-01 07:36:01'),
(147, 'S64 bánh kem gắn tim socola', 36, 95, NULL, '<h3><a href=\"https://banhngot.vn/s64-banh-kem-gan-tim-socola\" rel=\"dofollow\" title=\"S64 bánh kem gắn tim socola\">S64 b&aacute;nh kem gắn tim socola</a></h3>', 350000, NULL, 's64-banh-sinh-nhat-cong-ty-khach-hang-350-160.jpg', 'chiếc', 1, '', '2020-06-01 07:36:59', '2020-06-01 07:36:59'),
(148, 'S65 Bánh bắp tặng sếp', 36, 96, NULL, '<h3><a href=\"https://banhngot.vn/s31-banh-bap-tang-sep\" rel=\"dofollow\" title=\"S65 Bánh bắp tặng sếp\">S65 B&aacute;nh bắp tặng sếp</a></h3>', 360000, NULL, 's32-banh-sinh-nhat-cong-ty-khach-hang-360-125.jpg', 'chiếc', 0, '', '2020-06-01 07:37:45', '2020-06-01 07:37:45'),
(149, 'S4 Bánh sinh nhật nhân viên', 36, 96, NULL, '<h3><a href=\"https://banhngot.vn/s4-banh-sinh-nhat-nhan-vien\" rel=\"dofollow\" title=\"S4 Bánh sinh nhật nhân viên\">S4 B&aacute;nh sinh nhật nh&acirc;n vi&ecirc;n</a></h3>', 270000, NULL, 's4-banh-bap-banh-sinh-nhat-cong-ty-khach-hang-380-129.jpg', 'chiếc', 1, '', '2020-06-01 07:38:21', '2020-06-01 07:38:21'),
(150, 'TS5 Bánh matcha trà xanh tặng chồng', 36, 97, NULL, '<h3><a href=\"https://banhngot.vn/ts5-banh-matcha-tra-xanh-tang-chong\" rel=\"dofollow\" title=\"TS5 Bánh matcha trà xanh tặng chồng\">TS5 B&aacute;nh matcha tr&agrave; xanh tặng</a></h3>', 420000, NULL, 'banh-kem-tra-xanh-ts-6.jpg', 'chiếc', 1, '', '2020-06-01 07:39:13', '2020-06-01 07:39:13'),
(151, 'TS2 Bánh kem trà xanh tròn', 36, 97, NULL, '<h3><a href=\"https://banhngot.vn/ts2-banh-kem-tra-xanh-tron\" rel=\"dofollow\" title=\"TS2 Bánh kem trà xanh tròn\">TS2 B&aacute;nh kem tr&agrave; xanh tr&ograve;n</a></h3>', 380000, NULL, '2019-08-15-115448.jpg', 'chiếc', 1, '', '2020-06-01 07:39:49', '2020-06-01 07:39:49'),
(152, 'be21 thánh gióng 4.0', 37, 98, NULL, '<h3><a href=\"https://banhngot.vn/be21-thanh-giong-4-0\" rel=\"dofollow\" title=\"be21 thánh gióng 4.0\">be21 th&aacute;nh gi&oacute;ng 4.0</a></h3>', 390000, NULL, 'be21-390-banh-sinh-nhat-be-trai-21.jpg', 'chiếc', 1, '', '2020-06-01 07:40:55', '2020-06-01 07:40:55'),
(153, 'bt30 viên gạch đầu đời', 37, 98, NULL, '<h3><a href=\"https://banhngot.vn/bt30-vien-gach-dau-doi\" rel=\"dofollow\" title=\"bt30 viên gạch đầu đời\">bt30 vi&ecirc;n gạch đầu đời</a></h3>', 640000, 560000, 'bt30-450-gato-day-thang-30.jpg', 'chiếc', 1, '', '2020-06-01 07:41:42', '2020-06-01 07:41:42'),
(154, 'tn26 gà cùng một mẹ', 37, 99, NULL, '<h3><a href=\"https://banhngot.vn/tn26-ga-cung-mot-me\" rel=\"dofollow\" title=\"tn26 gà cùng một mẹ\">tn26 g&agrave; c&ugrave;ng một mẹ</a></h3>', 450000, NULL, 'tn29-650-banh-thoi-noi-29.jpg', 'chiếc', 1, '', '2020-06-01 07:42:36', '2020-06-01 07:42:36'),
(155, 'tn21 gà vàng ngoan hiền', 37, 99, NULL, '<h3><a href=\"https://banhngot.vn/tn20-may-bay-1\" rel=\"dofollow\" title=\"tn21 gà vàng ngoan hiền\">tn21 g&agrave; v&agrave;ng ngoan hiền</a></h3>', 550000, NULL, 'tn21-550-banh-thoi-noi-21.jpg', 'chiếc', 1, '', '2020-06-01 07:43:02', '2020-06-01 07:43:02'),
(156, 'mt8 rồng vàng', 37, 100, NULL, '<h3><a href=\"https://banhngot.vn/mt8-rong-vang\" rel=\"dofollow\" title=\"mt8 rồng vàng\">mt8 rồng v&agrave;ng</a></h3>', 890000, NULL, '950-banh-mung-tho-8.jpg', 'chiếc', 0, '', '2020-06-01 07:43:52', '2020-06-01 07:43:52'),
(157, 'mt7 tiền tài bền vững', 37, 100, NULL, '<h3><a href=\"https://banhngot.vn/mt7-tien-tai-ben-vung\" rel=\"dofollow\" title=\"mt7 tiền tài bền vững\">mt7 tiền t&agrave;i bền vững</a></h3>', 850000, NULL, '850-banh-mung-tho-7.jpg', 'chiếc', 1, '', '2020-06-01 07:44:21', '2020-06-01 07:44:21'),
(158, 'PN33 - bánh kem tim sắc tím', 37, 101, NULL, '<h3><a href=\"https://banhngot.vn/pn33-banh-kem-tim-sac-tim\" rel=\"dofollow\" title=\"PN33 - bánh kem tim sắc tím\">PN33 - b&aacute;nh kem tim sắc t&iacute;m</a></h3>', 450000, NULL, 'pn-34-400000-banh-kem-20-10.jpg', 'chiếc', 1, '', '2020-06-01 07:45:23', '2020-06-01 07:45:23'),
(159, 'bc48 bánh đính hôn', 37, 101, NULL, '<h3><a href=\"https://banhngot.vn/bc48-banh-dinh-hon\" rel=\"dofollow\" title=\"bc48 bánh đính hôn\">bc48 b&aacute;nh đ&iacute;nh h&ocirc;n</a></h3>', 2550000, NULL, 'bnc47-900k-gato-banh-cuoi-47.jpg', 'chiếc', 1, '', '2020-06-01 07:45:48', '2020-06-01 07:45:48'),
(160, 'TG(4) Bánh kem tân gia hình ngôi nhà', 37, 102, NULL, '<p>TG(4) B&aacute;nh kem t&acirc;n gia h&igrave;nh ng&ocirc;i nh&agrave;</p>', 450000, NULL, 'tg-4-banh-kem-mung-tan-gia-nha-moi.jpg', 'chiếc', 1, '', '2020-06-01 07:46:43', '2020-06-01 07:46:43'),
(161, 'TG(2) Bánh kem tân gia ông thần tài', 37, 102, NULL, '<h3><a href=\"https://banhngot.vn/tg-2-banh-kem-tan-gia-ong-than-tai\" rel=\"dofollow\" title=\"TG(2) Bánh kem tân gia ông thần tài\">TG(2) B&aacute;nh kem t&acirc;n gia &ocirc;ng thần</a>&nbsp;t&agrave;i</h3>', 379000, NULL, 'tg-2-banh-kem-mung-tan-gia-nha-moi.jpg', 'chiếc', 1, '', '2020-06-01 07:47:29', '2020-06-01 07:47:29'),
(162, 'mt20 mừng thọ ông ngoại', 39, 103, NULL, '<h3><a href=\"https://banhngot.vn/mt20-mung-tho-ong-ngoai\" rel=\"dofollow\" title=\"mt20 mừng thọ ông ngoại\">mt20 mừng thọ &ocirc;ng ngoại</a></h3>', 500000, NULL, '500-banh-mung-tho-20.jpg', 'chiếc', 1, '', '2020-06-01 07:48:25', '2020-06-01 07:48:25'),
(163, 'Bánh kem mừng ngày của mẹ', 39, 104, NULL, '<h3><a href=\"https://banhngot.vn/banh-kem-mung-ngay-cua-me\" rel=\"dofollow\" title=\"Bánh kem mừng ngày của mẹ\">B&aacute;nh kem mừng ng&agrave;y của mẹ</a></h3>', 390000, NULL, '2019-09-19-151359.jpg', 'chiếc', 1, '', '2020-06-01 07:49:18', '2020-06-01 07:49:18'),
(164, 'bn31 chú công an vui tính', 40, 116, NULL, '<h3><a href=\"https://banhngot.vn/bn31-chu-cong-an-vui-tinh\" rel=\"dofollow\" title=\"bn31 chú công an vui tính\">bn31 ch&uacute; c&ocirc;ng an vui t&iacute;nh</a></h3>', 410000, NULL, 'bnh31-350k-gato-ve-hinh-31.jpg', 'chiếc', 1, '', '2020-06-01 07:50:37', '2020-06-01 07:50:37'),
(165, 'S64 bánh kem gắn tim socola', 41, NULL, NULL, '<h3><a href=\"https://banhngot.vn/s64-banh-kem-gan-tim-socola\" rel=\"dofollow\" title=\"S64 bánh kem gắn tim socola\">S64 b&aacute;nh kem gắn tim socola</a></h3>', 350000, NULL, 's64-banh-sinh-nhat-cong-ty-khach-hang-350-160.jpg', 'chiếc', 1, '', '2020-06-01 07:55:28', '2020-06-01 07:55:28'),
(166, 'S61 bánh kem socola hoa baby', 41, NULL, NULL, '<h3><a href=\"https://banhngot.vn/s61-banh-kem-socola-hoa-baby\" rel=\"dofollow\" title=\"S61 bánh kem socola hoa baby\">S61 b&aacute;nh kem socola hoa baby</a></h3>', 450000, NULL, 's62-mung-sinh-nhat-ba-banh-sinh-nhat-cong-ty-khach-hang-97.jpg', 'chiếc', 1, '', '2020-06-01 07:55:55', '2020-06-01 07:55:55'),
(167, 'S17 Bánh kem Lịch tháng 6', 41, NULL, NULL, '<h3><a href=\"https://banhngot.vn/s17-banh-kem-lich-thang-6\" rel=\"dofollow\" title=\"S17 Bánh kem Lịch tháng 6\">S17 B&aacute;nh kem Lịch th&aacute;ng 6</a></h3>', 450000, NULL, 's17-banh-kem-hoa-tuoi-banh-sinh-nhat-cong-ty-khach-hang-450-154.jpg', 'chiếc', 1, '', '2020-06-01 07:56:39', '2020-06-01 07:56:39'),
(168, 'PN46- Sinh nhật hồng', 42, NULL, NULL, '<h3><a href=\"https://banhngot.vn/pn46-sinh-nhat-hong\" rel=\"dofollow\" title=\"PN46- Sinh nhật hồng\">PN46- Sinh nhật hồng</a></h3>', 350000, NULL, 'pn-46-400000-banh-kem-20-10.jpg', 'chiếc', 1, '', '2020-06-01 07:57:34', '2020-06-01 07:57:34'),
(169, 'X25 bánh chocolate bánh quế', 42, 95, NULL, '<p>X25 b&aacute;nh chocolate b&aacute;nh quế</p>', 350000, NULL, 'banh-socola-quan-1.jpg', 'chiếc', 1, '', '2020-06-01 07:58:19', '2020-06-04 04:22:27'),
(170, 'PN43- bánh kem socola 20-10', 36, 95, NULL, '<p>Sắp đến&nbsp;<strong>20/10</strong>&nbsp;rồi b&acirc;y giờ&nbsp;đi đ&acirc;u cũng thấy mọi người chọn qu&agrave; cho mẹ, cho người y&ecirc;u,...</p>\r\n\r\n<p>C&ograve;n bạn, bạn đ&atilde; c&oacute; cho m&igrave;nh c&acirc;u trả lời cho c&acirc;u hỏi h&oacute;c b&uacute;a &quot;<strong>Ng&agrave;y phụ nữ Việt Nam 20/10</strong>&nbsp;th&igrave; chọn qu&agrave; g&igrave; những người phụ nữ y&ecirc;u thương xung quanh bạn chưa?&quot;</p>\r\n\r\n<p>Kh&ocirc;ng cần những m&oacute;n qu&agrave; cầu kỳ, những vật phẩm đắt tiền, đ&ocirc;i khi chỉ cần một m&oacute;n qu&agrave; đơn giản như chiếc b&aacute;nh sinh nhật socola hay b&oacute; hoa tươi do ch&iacute;nh tay bạn lựa chọn để tặng người ấy l&agrave; đủ để khiến mẹ bạn, chị g&aacute;i bạn hay người y&ecirc;u bạn bất ngờ v&agrave; cảm động lắm rồi!</p>\r\n\r\n<p>Với nguồn nguy&ecirc;n liệu tuyển chọn, những chiếc b&aacute;nh kem của Banhngot.vn được l&agrave;m ra cực tỉ mỉ theo quy tr&igrave;nh kiểm so&aacute;t chất lượng, đảm bảo cho bạn nhận tận tay FREESHIP những chiếc b&aacute;nh giống hệt h&igrave;nh ảnh mẫu b&aacute;nh đ&atilde; chọn, l&agrave;m h&agrave;i l&ograve;ng người nhận b&aacute;nh nh&eacute;!</p>', 360000, NULL, 'pn-43-400000-banh-kem-20-10.jpg', 'chiếc', 1, '', '2020-06-15 15:47:27', '2020-06-15 15:47:27'),
(171, 'bns3 ngọt ngào', 36, 95, NULL, '<p>Nội dung đang cập nhật.</p>', 350000, NULL, 'bns3-370k-gato-socola-3.jpg', 'chiếc', 1, '', '2020-06-15 15:49:23', '2020-06-15 15:49:23'),
(172, 'S8 bánh sinh nhật [Sinco]', 36, 96, NULL, '<p>Đậy l&agrave; mẫu b&aacute;nh của một c&ocirc;ng ty gửi tặng cho kh&aacute;ch h&agrave;ng của m&igrave;nh, kh&ocirc;ng qu&aacute; cầu kỳ phức tạp nhưng lại bắt mắt v&agrave; đủ thu h&uacute;t để g&acirc;y ấn tượng, tạo thiện cảm trong l&ograve;ng đối t&aacute;c.&nbsp;<strong>B&aacute;nh kem bắp S8</strong>&nbsp;với m&agrave;u trắng - v&agrave;ng chủ đạo cực kỳ sang trọng, điểm xuyết th&ecirc;m v&agrave;i b&ocirc;ng hoa xinh tươi l&agrave;m tăng sức sống cho chiếc b&aacute;nh sinh nhật. Lời ch&uacute;c được viết xinh xắn tr&ecirc;n miếng socola h&igrave;nh tr&aacute;i tim si&ecirc;u dễ thương.</p>\r\n\r\n<p>Một chiếc b&aacute;nh kem độc đ&aacute;o d&agrave;nh tặng kh&aacute;ch h&agrave;ng v&agrave;o ng&agrave;y sinh nhật l&agrave; một m&oacute;n qu&agrave; v&ocirc; c&ugrave;ng tuyệt vời gi&uacute;p quan hệ của cả 2 c&ocirc;ng ty c&agrave;ng th&ecirc;m khăng kh&iacute;t. Nếu chọn được một chiếc b&aacute;nh kem tặng kh&aacute;ch h&agrave;ng th&acirc;n thiết khi được trang tr&iacute; c&ocirc;ng phu, tỉ mỉ sẽ phần n&agrave;o khẳng định đẳng cấp, vị thế của c&ocirc;ng ty bạn. B&ecirc;n cạnh đ&oacute;, việc nhận một m&oacute;n qu&agrave; &yacute; nghĩa sẽ khiến kh&aacute;ch h&agrave;ng th&ecirc;m h&agrave;i l&ograve;ng, từ đ&oacute; th&ecirc;m vững niềm tin v&agrave;o thương hiệu c&ocirc;ng ty, v&agrave;o những ưu đ&atilde;i m&agrave; c&ocirc;ng ty mang lại. C&ograve;n chờ g&igrave; nữa m&agrave; kh&ocirc;ng đặt&nbsp;<strong>S8 b&aacute;nh sinh nhật</strong>&nbsp;n&agrave;y để l&agrave;m qu&agrave; cho đối t&aacute;c đi n&agrave;o!</p>', 380000, NULL, 's8-sinco-banh-sinh-nhat-cong-ty-khach-hang-380-127.jpg', 'chiếc', 1, '', '2020-06-15 15:50:48', '2020-06-15 15:50:48'),
(173, 'X14 Bánh bắp dâu tây', 36, 96, NULL, '<p><em>B&aacute;nh kem bắp d&acirc;u t&acirc;y</em>&nbsp;l&agrave; loại b&aacute;nh đặc biệt thơm ngon v&agrave; được kh&aacute;ch h&agrave;ng lựa chọn nhiều nhất tại cửa h&agrave;ng bởi sự thơm ngon hảo hạng kết hợp giữa bắp v&agrave; sự trang tr&iacute; bắt mắt của những quả d&acirc;u t&acirc;y mọng nước. Đ&acirc;y chắc chắn sẽ l&agrave; m&oacute;n qu&agrave; &yacute; nghĩa d&agrave;nh tặng cho người th&acirc;n v&agrave; bạn b&egrave;.</p>\r\n\r\n<p><em>Chiếc b&aacute;nh kem&nbsp;</em>n&agrave;y với phần b&aacute;nh b&ocirc;ng lan thơm ngon đạt đến sự tuyệt vời nhất, khiến c&aacute;c thực kh&aacute;ch thưởng thức miếng n&agrave;o l&agrave; nhớ ngay miếng đ&oacute;. V&agrave; đặc biệt phần lớp kem được l&agrave;m c&ocirc;ng phu đạt đến sự dẻo s&aacute;nh đặc biệt nhất, g&oacute;p phần l&agrave;m cho chiếc b&aacute;nh th&ecirc;m hấp dẫn.</p>\r\n\r\n<p><img src=\"https://bizweb.dktcdn.net/thumb/large/100/333/744/products/2019-06-15-143604.jpg?v=1560585230867\" /></p>', 380000, NULL, '2019-06-15-143604.jpg', 'chiếc', 1, '', '2020-06-15 15:52:04', '2020-06-15 15:52:04'),
(174, 'S3 Bánh bắp - Bánh kem sinh nhật hấp dẫn', 36, 96, NULL, '<p>Những chiếc b&aacute;nh kem bắp ngọt ng&agrave;o v&agrave; thơm ngon với những tạo h&igrave;nh s&aacute;ng tạo v&agrave; độc đ&aacute;o sẽ l&agrave; m&oacute;n qu&agrave; mừng sinh nhật v&ocirc; c&ugrave;ng &yacute; nghĩa, h&atilde;y l&agrave;m cho buổi tiệc sinh nhật của ch&iacute;nh bạn hay những người m&agrave; bạn y&ecirc;u thương được trọn vẹn v&agrave; độc đ&aacute;o bởi những chiếc b&aacute;nh kem bắp thơm ngon ở Banhngot.vn nh&eacute;.</p>', 360000, NULL, 's3-banh-bap-banh-sinh-nhat-cong-ty-khach-hang-360-121.jpg', 'chiếc', 0, '', '2020-06-15 15:53:23', '2020-06-15 15:53:23'),
(175, 'X24 - Bánh kem bắp cho ngày hè đầy năng lượng', 36, 96, NULL, '<p>B&aacute;nh kem bắp l&agrave; một d&ograve;ng b&aacute;nh d&acirc;n d&atilde; nhưng kh&ocirc;ng k&eacute;m phần hấp dẫn. B&aacute;nh kem bắp được sử dụng như một m&oacute;n ăn dinh dưỡng hằng ng&agrave;y, nhất l&agrave; trong những ng&agrave;y h&egrave;, khi bạn cần một nguồn năng lượng dồi d&agrave;o cho c&aacute;c hoạt động.</p>', 340000, NULL, 'x24-banh-kem-bap.jpg', 'chiếc', 1, '', '2020-06-15 15:54:21', '2020-06-15 15:54:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `link` varchar(100) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) UNSIGNED NOT NULL,
  `name_supplier` varchar(250) COLLATE utf8_vietnamese_ci NOT NULL,
  `image` varchar(2000) COLLATE utf8_vietnamese_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `supplier_1`
--

CREATE TABLE `supplier_1` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_products`
--

CREATE TABLE `type_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `type_products`
--

INSERT INTO `type_products` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(36, 'Bánh kem ngon', 'Bánh sinh nhật socola với hương vị đặc trưng nồng nàn và ngọt ngào sẽ là món quà vô cùng thú vị và hấp dẫn để dành tặng những người mà bạn thương yêu nhân dịp sinh nhật hay những ngày lễ kỷ niệm.', 'banh-kem-tra-xanh-ts-6.jpg', '2020-05-27 15:25:34', '2020-06-01 09:59:42'),
(37, 'Bánh sự kiện', 'Trong cuộc đời mỗi người đều trải qua những khoảnh khắc, những sự kiện khác nhau, mỗi một cột mốc là một dấu ấn kỷ niệm ta có mặt trên thế giới này. Banhngot.vn hân hạnh cùng bạn ghi lại những khoảnh khắc thú vị của hành trình cuộc sống qua những chiếc bánh kem sự kiện thơm ngon ngọt ngào nhất.', '950-banh-mung-tho-8.jpg', '2020-05-27 15:25:53', '2020-06-01 10:00:25'),
(38, 'Bánh độc lạ', 'Bạn muốn có một món quà sinh nhật độc đáo và lạ mắt dành tặng cho bạn bè người thân nhân dịp sinh nhật, bạn đang tìm những mẫu bánh kem siêu hot và bá đạo để ngày vui thêm nhiều tiếng cười, hãy đến ngay với hệ thống bánh kem Banhngot.vn nhé!', 'tg-4-banh-kem-mung-tan-gia-nha-moi.jpg', '2020-05-27 15:26:14', '2020-06-01 10:01:00'),
(39, 'Người thân yêu', 'Những lời yêu thương chưa một lần dám nói, những điều thầm kín luôn cất giữ trong lòng, những tâm tư chưa một lẫn được giải bày…hãy để banhngot.vn làm thay bạn điều đó qua những chiếc bánh kem ngọt ngào nhé!', '2019-09-19-151359.jpg', '2020-05-27 15:26:52', '2020-06-01 10:01:39'),
(40, 'Nhân vật hoạt hình', NULL, NULL, '2020-05-27 15:27:12', '2020-05-27 15:27:12'),
(41, 'Bánh đẹp', NULL, NULL, '2020-05-27 15:27:22', '2020-05-27 15:27:22'),
(42, 'Bánh in hình ảnh', NULL, NULL, '2020-05-27 15:27:33', '2020-05-27 15:27:33'),
(43, 'Gato nhiều tầng', NULL, NULL, '2020-05-27 15:28:12', '2020-05-27 15:28:12'),
(44, 'Trái tim', NULL, NULL, '2020-05-27 15:28:23', '2020-05-27 15:28:23'),
(45, 'Bánh 12 con giáp', NULL, NULL, '2020-05-27 15:28:34', '2020-05-27 15:28:34'),
(46, 'Dịp tặng', NULL, NULL, '2020-05-27 15:29:56', '2020-05-27 15:29:56'),
(47, 'Bánh sinh nhật', NULL, NULL, '2020-05-27 15:30:07', '2020-05-27 15:30:07'),
(48, 'Tặng khách hàng', NULL, NULL, '2020-05-27 15:30:17', '2020-05-27 15:30:17'),
(49, 'Combo Hoa tươi - Bánh kem sinh nhật', NULL, NULL, '2020-05-27 15:44:30', '2020-05-27 15:44:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `level` int(3) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `phone`, `address`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(17, 'admin1', 'dotuyen1412197@gmail.com', '$2y$10$.sVgfkvjzdmqUDtg4ZbEdu8n8oOvRVH2j3lNlOI7YORTAyjgXvrgi', '0369712385', 'Đội 7- Thôn Năm Mẫu - Xã Tứ Dân', 1, 'thwh4zWXLABk2RdLPaS6FVv67DcWGeQ28hwlUi0NW593O5BerSH51OUyzFbB', '2020-01-11 12:37:00', '2020-01-11 12:37:00'),
(18, 'admin', 'dotuyen016@gmail.com', '$2y$10$OoJeP4NzSkwZVv8qHOGs5OGv/1Isd7oEwZQHIGgoCURsREnNi3vtS', '0369712385', 'Đội 7- Thôn Năm Mẫu - Xã Tứ Dân', 1, 'UGBHk4ommop8gS8VjTQRWMJOI8SbMMXmZYtTHyGuXSovvvdTk0XngwuBT5Lo', '2020-02-11 10:02:30', '2020-02-11 10:02:30');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bills_ibfk_1` (`id_customer`);

--
-- Chỉ mục cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_detail_ibfk_2` (`id_product`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_type` (`id_type`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_product` (`id_product`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `import_bill`
--
ALTER TABLE `import_bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_employees` (`id_employees`),
  ADD KEY `id_import_bill_detail` (`id_import_bill_detail`);

--
-- Chỉ mục cho bảng `import_bill_detail`
--
ALTER TABLE `import_bill_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_type_product` (`id_type_product`),
  ADD KEY `id_category` (`id_category`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_id_type_foreign` (`id_type`),
  ADD KEY `id_category` (`id_category`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `supplier_1`
--
ALTER TABLE `supplier_1`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `type_products`
--
ALTER TABLE `type_products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `import_bill`
--
ALTER TABLE `import_bill`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `import_bill_detail`
--
ALTER TABLE `import_bill_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `supplier_1`
--
ALTER TABLE `supplier_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `type_products`
--
ALTER TABLE `type_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `type_products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
