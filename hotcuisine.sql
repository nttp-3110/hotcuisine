-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2016 at 07:59 AM
-- Server version: 5.6.17-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotcuisine`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Hinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TieuDe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NoiDung` text COLLATE utf8_unicode_ci NOT NULL,
  `ThongTinNoiBat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Moi` int(11) DEFAULT '0',
  `NoiBat` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `Hinh`, `TieuDe`, `NoiDung`, `ThongTinNoiBat`, `Moi`, `NoiBat`, `created_at`, `updated_at`) VALUES
(2, 'IdQ1ilZsKE.jpg', 'Nhà hàng thế giới nghiêng 235 mỹ đình', '<p>Tính đến tháng 10 năm 2012 Nhà Hàng Thế Giới Nghiêng Mỹ Đình đã đón hơn 500.000 thực khách.Kế thừa tinh hoa ẩm thực trên khắp thế giới, liên tục cập nhật các món ngon, món lạ của 3 miền đất nước, Nhà Hàng Thế Giới Nghiêng Mỹ Đình trở thành địa điểm thưởng</p>\r\n', '<p>Kế thừa tinh hoa ẩm thực trên khắp thế giới, liên tục cập nhật các món ngon, món lạ của 3 miền đất nước, Nhà Hàng Thế Giới Nghiêng Mỹ Đình trở thành địa điểm thưởng thức ẩm thực lý tưởng của rất nhiều thực khách.</p>\r\n', 0, 1, '2016-06-27 17:00:00', '2016-07-05 09:20:20'),
(6, 'reDcEi4Ue5.jpg', 'Nhà hàng thế giới nghiêng 23 độ 5 Mỹ Đình là một thành viên trong Hệ thống Nhà Hàng Thế giới nghiêng', '<p>Tính đến tháng 10 năm 2012 Nhà Hàng Thế Giới Nghiêng Mỹ Đình đã đón hơn 500.000 thực khách.Kế thừa tinh hoa ẩm thực trên khắp thế giới, liên tục cập nhật các món ngon, món lạ của 3 miền đất nước, Nhà Hàng Thế Giới Nghiêng Mỹ Đình trở thành địa điểm thưởng.<span style="color:rgb(101, 46, 44); font-family:arial; font-size:12px">Nhà hàng thế giới nghiêng 23 độ 5 Mỹ Đình là một thành viên trong Hệ thống Nhà Hàng Thế giới nghiêngNhà hàng thế giới nghiêng 23 độ 5 Mỹ Đình là một thành viên trong Hệ thống Nhà Hàng Thế giới nghiêng.</span></p>\r\n', '<p><span style="color:rgb(101, 46, 44); font-family:arial; font-size:12px">Nhà hàng thế giới nghiêng 23 độ 5 Mỹ Đình là một thành viên trong Hệ thống Nhà Hàng Thế giới nghiêng.</span>Kế thừa tinh hoa ẩm thực trên khắp thế giới, liên tục cập nhật các món n', 1, 0, '2016-06-27 17:00:00', '2016-07-05 09:19:30');

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE IF NOT EXISTS `binhluan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idUser` int(10) unsigned NOT NULL,
  `idSP` int(10) unsigned NOT NULL,
  `NoiDung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `binhluan_iduser_foreign` (`idUser`),
  KEY `binhluan_idsp_foreign` (`idSP`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `idUser`, `idSP`, `NoiDung`, `created_at`, `updated_at`) VALUES
(23, 6, 5, 'ngon', '2016-07-05 03:01:38', '2016-07-05 03:01:38');

-- --------------------------------------------------------

--
-- Table structure for table `dichvu`
--

CREATE TABLE IF NOT EXISTS `dichvu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `TieuDe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NoiDungVanTat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NoiDung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NoiBat` int(11) NOT NULL,
  `Moi` int(11) NOT NULL DEFAULT '0',
  `Hinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `dichvu`
--

INSERT INTO `dichvu` (`id`, `TieuDe`, `NoiDungVanTat`, `NoiDung`, `NoiBat`, `Moi`, `Hinh`, `created_at`, `updated_at`) VALUES
(2, 'Giới thiệu thực đơn và ghi món ăn', '<p><span style="font-family:arial,helvetica,sans-serif">Những nhân viên hỗ trợ (bus persons) giúp nhân viên phục vụ bằng cách đảm bảo thực phẩm cung cấp và thiết bị phục vụ luôn được làm đầy, di chuyển bàn ghế, chế nước, châm trà và càfê cho khách, lau dọ', '<p><span style="font-family:arial,helvetica,sans-serif">Nhiệm vụ phục vụ thức ăn là trách nhiệm chính của nhân viên phục vụ, thỉnh thoảng có thêm nhân viên hỗ trợ (bus persons). Mặc dù nhiệm vụ của họ khi ở nhà hàng này có thể khác so với khi ở nhà hàng k', 1, 0, 'DMv4mS1n5j.png', '2016-06-28 03:40:20', '2016-07-05 09:32:04'),
(6, 'Cung cấp thực đơn rượu', '<p><span style="font-family:arial,helvetica,sans-serif">Những nhân viên hỗ trợ (bus persons) giúp nhân viên phục vụ bằng cách đảm bảo thực phẩm cung cấp và thiết bị phục vụ luôn được làm đầy, di chuyển bàn ghế, chế nước, châm trà và càfê cho khách, lau dọ', '<p><span style="font-family:arial,helvetica,sans-serif">Nhiệm vụ phục vụ thức ăn là trách nhiệm chính của nhân viên phục vụ, thỉnh thoảng có thêm nhân viên hỗ trợ (bus persons). Mặc dù nhiệm vụ của họ khi ở nhà hàng này có thể khác so với khi ở nhà hàng k', 1, 0, 'gmVy0SarIt.png', '2016-06-28 03:40:20', '2016-07-05 09:34:03'),
(7, 'Đưa và nhận món ăn đã gọi', '<p><span style="font-family:arial,helvetica,sans-serif">Những nhân viên hỗ trợ (bus persons) giúp nhân viên phục vụ bằng cách đảm bảo thực phẩm cung cấp và thiết bị phục vụ luôn được làm đầy, di chuyển bàn ghế, chế nước, châm trà và càfê cho khách, lau dọ', '<p><span style="font-family:arial,helvetica,sans-serif">Nhiệm vụ phục vụ thức ăn là trách nhiệm chính của nhân viên phục vụ, thỉnh thoảng có thêm nhân viên hỗ trợ (bus persons). Mặc dù nhiệm vụ của họ khi ở nhà hàng này có thể khác so với khi ở nhà hàng k', 1, 0, 'K5Qn0xBeRU.png', '2016-06-28 03:40:20', '2016-07-05 09:34:40'),
(8, 'Giới thiệu thực đơn và ghi món ăn', '<p><span style="font-family:arial,helvetica,sans-serif">Những nhân viên hỗ trợ (bus persons) giúp nhân viên phục vụ bằng cách đảm bảo thực phẩm cung cấp và thiết bị phục vụ luôn được làm đầy, di chuyển bàn ghế, chế nước, châm trà và càfê cho khách, lau dọ', '<p><span style="font-family:arial,helvetica,sans-serif">Nhiệm vụ phục vụ thức ăn là trách nhiệm chính của nhân viên phục vụ, thỉnh thoảng có thêm nhân viên hỗ trợ (bus persons). Mặc dù nhiệm vụ của họ khi ở nhà hàng này có thể khác so với khi ở nhà hàng k', 0, 1, 'XTSsqC07kg.png', '2016-06-28 03:40:20', '2016-07-05 09:52:32'),
(9, 'Giới thiệu thực đơn và ghi món ăn', '<p><span style="font-family:arial,helvetica,sans-serif">Những nhân viên hỗ trợ (bus persons) giúp nhân viên phục vụ bằng cách đảm bảo thực phẩm cung cấp và thiết bị phục vụ luôn được làm đầy, di chuyển bàn ghế, chế nước, châm trà và càfê cho khách, lau dọ', '<p><span style="font-family:arial,helvetica,sans-serif">Nhiệm vụ phục vụ thức ăn là trách nhiệm chính của nhân viên phục vụ, thỉnh thoảng có thêm nhân viên hỗ trợ (bus persons). Mặc dù nhiệm vụ của họ khi ở nhà hàng này có thể khác so với khi ở nhà hàng k', 0, 1, 'UjAU11KLJW.png', '2016-06-28 03:40:20', '2016-07-05 09:52:20'),
(10, 'Giới thiệu thực đơn và ghi món ăn', '<p><span style="font-family:arial,helvetica,sans-serif">Những nhân viên hỗ trợ (bus persons) giúp nhân viên phục vụ bằng cách đảm bảo thực phẩm cung cấp và thiết bị phục vụ luôn được làm đầy, di chuyển bàn ghế, chế nước, châm trà và càfê cho khách, lau dọ', '<p><span style="font-family:arial,helvetica,sans-serif">Nhiệm vụ phục vụ thức ăn là trách nhiệm chính của nhân viên phục vụ, thỉnh thoảng có thêm nhân viên hỗ trợ (bus persons). Mặc dù nhiệm vụ của họ khi ở nhà hàng này có thể khác so với khi ở nhà hàng k', 0, 1, 'vFwGEl9Ew3.png', '2016-06-28 03:40:20', '2016-07-05 09:52:09'),
(11, 'Giới thiệu thực đơn và ghi món ăn', '<p><span style="font-family:arial,helvetica,sans-serif">Những nhân viên hỗ trợ (bus persons) giúp nhân viên phục vụ bằng cách đảm bảo thực phẩm cung cấp và thiết bị phục vụ luôn được làm đầy, di chuyển bàn ghế, chế nước, châm trà và càfê cho khách, lau dọ', '<p><span style="font-family:arial,helvetica,sans-serif">Nhiệm vụ phục vụ thức ăn là trách nhiệm chính của nhân viên phục vụ, thỉnh thoảng có thêm nhân viên hỗ trợ (bus persons). Mặc dù nhiệm vụ của họ khi ở nhà hàng này có thể khác so với khi ở nhà hàng k', 0, 1, 'DMv4mS1n5j.png', '2016-06-28 03:40:20', '2016-07-05 09:51:58');

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE IF NOT EXISTS `lienhe` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `DiaChi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SoDienThoai` int(11) NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ThongTin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `lienhe`
--

INSERT INTO `lienhe` (`id`, `DiaChi`, `SoDienThoai`, `Email`, `ThongTin`, `created_at`, `updated_at`) VALUES
(1, '123 Hùng Vương, Tân Phú, HCM', 962929642, 'hotcuisine123@gmail.com', 'Bản quyền nội dung thuộc : Nhà hàng Thế Giới Hot Cuisine 23 độ 5', '2016-06-06 17:00:00', '2016-07-05 08:56:43');

-- --------------------------------------------------------

--
-- Table structure for table `loaisp`
--

CREATE TABLE IF NOT EXISTS `loaisp` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TenKhongDau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `loaisp`
--

INSERT INTO `loaisp` (`id`, `Ten`, `TenKhongDau`, `created_at`, `updated_at`) VALUES
(2, 'lẩu', 'lau', '2016-06-27 19:44:17', '2016-06-27 19:44:17'),
(3, 'Cơm', 'com', '2016-06-05 17:00:00', '2016-06-08 17:00:00'),
(4, 'Bún', 'Bun', '2016-05-31 17:00:00', '2016-06-15 17:00:00'),
(5, 'Phở', 'Pho', '2016-05-31 17:00:00', '2016-06-22 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_06_19_150049_Slide', 1),
('2016_06_23_011137_LoaiSP', 2),
('2016_06_19_150614_DichVu', 3),
('2016_06_19_150638_LienHe', 3),
('2016_06_19_150810_About', 3),
('2016_06_19_150542_SanPham', 4),
('2016_06_19_150828_NhanVien', 4),
('2016_06_19_150717_BinhLuan', 5);

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE IF NOT EXISTS `nhanvien` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `GioiThieu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Hinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `LinkFB` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `LinkTwiter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `LinkGoogle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`id`, `Ten`, `GioiThieu`, `Hinh`, `LinkFB`, `LinkTwiter`, `LinkGoogle`, `created_at`, `updated_at`) VALUES
(1, 'Rackham', 'Có nhiều năm kinh nghiệm và đạt được nhiều thành tích cao', 'DnCWZunWwp.jpg', 'https://facebook.com/', 'http://twiter.com/', 'google.com', '2016-06-30 17:39:10', '2016-06-30 17:39:10'),
(2, 'Malorum', 'Có nhiều năm kinh nghiệm và đạt được nhiều thành tích cao', '1Jeox3WIKV.jpg', 'https://facebook.com/', 'http://twiter.com/', 'google.com', '2016-06-30 17:39:10', '2016-06-30 17:45:16'),
(3, ' Finibus', 'Có nhiều năm kinh nghiệm và đạt được nhiều thành tích cao', '5KAIEU43gu.jpg', 'https://facebook.com/', 'http://twiter.com/', 'google.com', '2016-06-30 17:39:10', '2016-06-30 17:45:53'),
(4, 'Bonorum', 'Có nhiều năm kinh nghiệm và đạt được nhiều thành tích cao', 'v76gvTH14J.jpg', 'https://facebook.com/', 'http://twiter.com/', 'google.com', '2016-06-30 17:39:10', '2016-06-30 17:46:37'),
(5, 'Rackham', 'Có nhiều năm kinh nghiệm và đạt được nhiều thành tích cao', 'DnCWZunWwp.jpg', 'https://facebook.com/', 'http://twiter.com/', 'google.com', '2016-06-30 17:39:10', '2016-06-30 17:39:10'),
(6, 'Rackham', 'Có nhiều năm kinh nghiệm và đạt được nhiều thành tích cao', 'DnCWZunWwp.jpg', 'https://facebook.com/', 'http://twiter.com/', 'google.com', '2016-06-30 17:39:10', '2016-06-30 17:39:10');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idLoaiSP` int(10) unsigned NOT NULL,
  `Ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TenKhongDau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NoiDung` text COLLATE utf8_unicode_ci NOT NULL,
  `NoiDungVanTat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NoiBat` int(11) NOT NULL,
  `Hinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Gia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Moi` int(11) NOT NULL,
  `SoLuotXem` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sanpham_idloaisp_foreign` (`idLoaiSP`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `idLoaiSP`, `Ten`, `TenKhongDau`, `NoiDung`, `NoiDungVanTat`, `NoiBat`, `Hinh`, `Gia`, `Moi`, `SoLuotXem`, `created_at`, `updated_at`) VALUES
(5, 3, 'Ẩm thực châu âu', 'am-thuc-chau-au', '<p style="text-align:start"><span style="color:rgb(30, 30, 29); font-family:nhommuamobileregular,arial,helvetica,sans-serif; font-size:14px !important">Nền ẩm thực Châu Âu&nbsp;được nhớ đến bởi các món BBQNền ẩm thực Châu Âu&nbsp;được nhớ đến bởi các món ', 'Tổng hóa đơn menu thức ăn tại Nhà hàng BIG AL AMERICAN BBQ cho bạn cơ hội trải nghiệm ẩm thực đúng điệu vớ', 0, 'C05b0XBIMR.jpg', '50', 1, 9, '2016-06-27 20:17:55', '2016-07-05 10:13:17'),
(7, 3, 'Chả cá Lã Vọng (Hà Nội)', 'cha-ca-la-vong-ha-noi-', '<p>Thịt cá phi lê ướp với bột nghệ, bột ngọt, gừng sợi, nước mắmChả cá Lã Vọng được làm từ cá lăng, cá nheo, cá quả. Thịt cá phi lê ướp với bột nghệ, bột ngọt, gừng sợi, nước mắmChả cá Lã Vọng được làm từ cá lăng, cá nheo, cá quả. Thịt cá phi lê ướp với bột nghệ, bột ngọt, gừng sợi, nước mắm</p>\r\n\r\n<p>Chả cá Lã Vọng được làm từ cá lăng, cá nheo, cá quả. Thịt cá phi lê ướp với bột nghệ, bột ngọt, gừng sợi, nước mắmChả cá Lã Vọng được làm từ cá lăng, cá nheo, cá quả. Thịt cá phi lê ướp với bột nghệ, bột ngọt, gừng sợi, nước mắmChả cá Lã Vọng được làm từ cá lăng, cá nheo, cá quả.</p>\r\n\r\n<p>Thịt cá phi lê ướp với bột nghệ, bột ngọt, gừng sợi, nước mắmChả cá Lã Vọng được làm từ cá lăng, cá nheo, cá quả. Thịt cá phi lê ướp với bột nghệ, bột ngọt, gừng sợi, nước mắmChả cá Lã Vọng được làm từ cá lăng, cá nheo, cá quả. Thịt cá phi lê ướp với bột nghệ, bột ngọt, gừng sợi, nước mắmChả cá Lã Vọng được làm từ cá lăng, cá nheo, cá quả. Thịt cá phi lê ướp với bột nghệ, bột ngọt, gừng sợi, nước mắmChả cá Lã Vọng được làm từ cá lăng, cá nheo, cá quả. Thịt cá phi lê ướp với bột nghệ, bột ngọt, gừng sợi, nước mắmChả cá Lã Vọng được làm từ cá lăng, cá nheo, cá quả. Thịt cá phi lê ướp với bột nghệ, bột ngọt, gừng sợi, nước mắmChả cá Lã Vọng được làm từ cá lăng, cá nheo, cá quả. Thịt cá phi lê ướp với bột nghệ, bột ngọt, gừng sợi, nước mắmChả cá Lã Vọng được làm từ cá lăng, cá nheo, cá quả. Thịt cá phi lê ướp với bột nghệ, bột ngọt, gừng sợi, nước mắmChả cá Lã Vọng được làm từ cá lăng, cá nheo, cá quả. Thịt cá phi lê ướp với bột nghệ, bột ngọt, gừng sợi, nước mắmChả cá Lã Vọng được làm từ cá lăng, cá nheo, cá quả. Thịt cá phi lê ướp với bột nghệ, bột ngọt, gừng sợi, nước mắmChả cá Lã Vọng được làm từ cá lăng, cá nheo, cá quả. Thịt cá phi lê ướp với bột nghệ, bột ngọt, gừng sợi, nước mắmChả cá Lã Vọng được làm từ cá lăng, cá nheo, cá quả.m từ cá lăng, cá nheo, cá quả. Thịt cá phi lê ướp với bột nghệ, bột ngọt, gừng sợi, nước mắmChả cá Lã Vọng được làm từ cá lăng, cá nheo, cá quả. Thịt cá phi lê ướp với bột nghệ, bột ngọt, gừng sợi, nước mắmChả cá Lã Vọng được làm từ cá lăng, cá nheo, cá quả. Thịt cá phi lê ướp với bột nghệ, bột ngọt, gừng sợi, nước mắmChả cá Lã Vọng được làm từ cá lăng, cá nheo, cá quả. Thịt cá phi lê ướp vớđược làm từ cá lăng, cá nheo, cá quả. Thịt cá phi lê ướp với bột nghệ, bột ngọt, gừng sợi, nước mắmChả cá Lã Vọng được làm từ cá lăng, cá nheo, cá quả. Thịt cá phi lê ướp với bột nghệ, bột ngọt, gừng sợi, nước mắmChả cá Lã Vọng được làm từ cá lăng, cá nheo, cá quả. Thịt cá phi lê ướp với bột nghệ, bột ngọt, gừng sợi, nước mắmChả cá Lã Vọng được làm từ cá lăng, cá nheo, cá quả. Thịt cá phi lê ướp với bột nghệ, bột ngọt, gừng sợi, nước mắmChả cá Lã Vọng được làm từ cá lăng, cá nheo, cá quả. Thịt cá phi lê ướp với bột nghệ, bột ngọt, gừng sợi, nước mắmChả cá Lã Vọng được làm từ cá lăng, cá nheo, cá quả. Thịt cá phi lê ướp với bột nghệ, bột ngọt, gừng sợi, nước mắmChả cá Lã Vọng được làm từ cá lăng, cá nheo, cá quả. Thịt cá phi lê ướp với bột nghệ, bột ngọt, gừng sợi, nước mắmChả cá Lã Vọng được làm từ cá lăng, cá nheo, cá quả. Thịt cá phi lê ướp với bột nghệ, bột ngọt, gừng sợi, nước mắmChả cá Lã Vọng được làm từ cá lăng, cá nheo, cá quả. Thịt cá phi lê ướp với bột nghệ, bột ngọt, gừng sợi, nước mắmChả cá Lã Vọng được làm từ cá lăng, cá nheo, cá quả. Thịt cá phi lê ướp với bột nghệ, bột ngọt, gừng sợi, nước mắmChả cá Lã Vọng được làm từ cá lăng, cá nheo, cá quả. Thịt cá phi lê ướp với bột nghệ, bột ngọt, gừng sợi, nước mắmChả cá Lã Vọng được làm từ cá lăng, cá nheo, cá quả. Thịt cá phi lê ướp với bột nghệ, bột ngọt, gừng sợi, nước mắmChả cá Lã Vọng được làm từ cá lăng, cá nheo, cá quả. Thịt cá phi lê ướp với bột nghệ, bột ngọt, gừng sợi, nước mắmChả cá Lã Vọng được làm từ cá lăng, cá nheo, cá quả.</p>\r\n\r\n<p>Thịt cá phi lê ướp với bột nghệ, bột ngọt, gừng sợi, nước mắmChả cá Lã Vọng được làm từ cá lăng, cá nheo, cá quả. Thịt cá phi lê ướp với bột nghệ, bột ngọt, gừng sợi, nước mắmChả cá Lã Vọng được làm từ cá lăng, cá nheo, cá &nbsp;cá phi lê ướp với bột nghệ, bột ngọt, gừng sợi, nước mắm</p>\r\n', '<p><span style="color:rgb(101, 46, 44); font-family:helvetica neue,arial,helvetica,sans-serif; font-size:15.7333px">Chả cá Lã Vọng được làm từ cá lăng, cá nheo, cá quả. Thịt cá phi lê ướp với bột nghệ, bột ngọt, gừng sợi, nước mắm, mắm tôm, hành tím băm, ', 0, 'DQaL81Zq39.jpg', '35', 1, 23, '2016-06-27 20:17:55', '2016-07-05 10:23:14'),
(8, 3, 'Lợn “cắp nách” 6 món (Lai Châu)', 'lon-', '<p style="text-align:start"><span style="color:rgb(101, 46, 44); font-family:helvetica neue,arial,helvetica,sans-serif; font-size:15.7333px">Giống lợn này có sức chịu đựng rất giỏi, chúng tự tìm củ, rễ cây và lá rừng để ăn. Lợn con mới đẻ đã có thể chạy n', '<p><span style="color:rgb(101, 46, 44); font-family:helvetica neue,arial,helvetica,sans-serif; font-size:15.7333px">Lợn “cắp nách” (một số nơi gọi là lợn lửng) là loại lợn đặc sản chỉ có ở vùng cao và nhiều nhất ở Lai Châu.Giống lợn này có sức chịu đựng r', 1, 'NCbTQ1oRS6.jpg', '34', 1, 2, '2016-06-27 20:17:55', '2016-07-05 10:15:57'),
(9, 2, 'Chả mực Hạ Long (Quảng Ninh)', 'cha-muc-ha-long-quang-ninh-', '<p style="text-align:start"><span style="color:rgb(101, 46, 44); font-family:helvetica neue,arial,helvetica,sans-serif; font-size:16px">Chả mực của vùng biển Quảng Ninh là món chả được làm từ con cá mực (chỉ mực mai).Chất lượng chả mực Hạ Long (giòn và da', '<p><span style="color:rgb(101, 46, 44); font-family:helvetica neue,arial,helvetica,sans-serif; font-size:16px">Chả mực của vùng biển Quảng Ninh là món chả được làm từ con cá mực (chỉ mực mai).</span></p>\r\n', 1, 'G5iCHzFM9y.png', '25', 0, 15, '2016-06-27 20:17:55', '2016-07-05 08:27:25'),
(10, 2, 'Gà Tiên Yên (Quảng Ninh)', 'ga-tien-yen-quang-ninh-', '<p style="text-align:justify">Gà Tiên Yên là giống gà đồi, suốt ngày leo dốc, tìm sâu nên da vàng, thịt thơm, nước ngọt. Thịt gà Tiên Yên có thể chế biến đủ các món, vẫn không làm mất vị đặc trưng. Nhưng món ngon nhất vẫn là chế biến theo cách đơn giản nh', '<p>Thịt gà Tiên Yên ăn kèm là bánh gật gù. Bánh được tráng bằng bột gạo, cuộc thành từng cuộn cỡ ngón chân cái, bánh trong, mềm, dẻo mà không dính</p>\r\n', 0, 'DQaL81Zq39.jpg', '25', 1, 0, '2016-06-27 20:17:55', '2016-07-05 08:16:24'),
(12, 2, 'Cá rô chiên', 'ca-ro-chien', '<p style="text-align:start"><span style="color:rgb(101, 46, 44); font-family:helvetica neue,arial,helvetica,sans-serif; font-size:16px">Cá rô được luộc lên, gỡ từng miếng thịt, ướp gia vị cho thật thấm rồi rán vàng lên, hoặc viên lại từng viên cho vào tô ', '<p><span style="color:rgb(101, 46, 44); font-family:helvetica neue,arial,helvetica,sans-serif; font-size:16px">Cá rô được luộc lên, gỡ từng miếng thịt, ướp gia vị cho thật thấm rồi rán vàng lên.</span></p>\r\n', 1, '32PgxBM4fu.jpg', '25', 0, 0, '2016-06-27 20:17:55', '2016-07-05 08:27:55'),
(19, 2, 'Cá rô chiên', 'ca-ro-chien', '<p style="text-align:start"><span style="color:rgb(101, 46, 44); font-family:helvetica neue,arial,helvetica,sans-serif; font-size:16px">Cá rô được luộc lên, gỡ từng miếng thịt, ướp gia vị cho thật thấm rồi rán vàng lên, hoặc viên lại từng viên cho vào tô ', '<p><span style="color:rgb(101, 46, 44); font-family:helvetica neue,arial,helvetica,sans-serif; font-size:16px">Cá rô được luộc lên, gỡ từng miếng thịt, ướp gia vị cho thật thấm rồi rán vàng lên.</span></p>\r\n', 1, '32PgxBM4fu.jpg', '25', 0, 1, '2016-06-27 20:17:55', '2016-07-05 10:05:53'),
(20, 2, 'Chả cá Lã Vọng (Hà Nội)', 'cha-ca-la-vong-ha-noi-', '<p style="text-align:start"><span style="color:rgb(101, 46, 44); font-family:helvetica neue,arial,helvetica,sans-serif; font-size:15.7333px">Chả cá Lã Vọng được làm từ cá lăng, cá nheo, cá quả. Thịt cá phi lê ướp với bột nghệ, bột ngọt, gừng sợi, nước mắm', '<p><span style="color:rgb(101, 46, 44); font-family:helvetica neue,arial,helvetica,sans-serif; font-size:15.7333px">Chả cá Lã Vọng được làm từ cá lăng, cá nheo, cá quả. Thịt cá phi lê ướp với bột nghệ, bột ngọt, gừng sợi, nước mắm, mắm tôm, hành tím băm, ', 0, 'DQaL81Zq39.jpg', '35', 1, 5, '2016-06-27 20:17:55', '2016-07-05 08:26:57'),
(21, 2, 'Ẩm thực châu âu', 'am-thuc-chau-au', '<p style="text-align:start"><span style="color:rgb(30, 30, 29); font-family:nhommuamobileregular,arial,helvetica,sans-serif; font-size:14px !important">Nền ẩm thực Châu Âu&nbsp;được nhớ đến bởi các món BBQNền ẩm thực Châu Âu&nbsp;được nhớ đến bởi các món ', 'Tổng hóa đơn menu thức ăn tại Nhà hàng BIG AL AMERICAN BBQ cho bạn cơ hội trải nghiệm ẩm thực đúng điệu vớ', 0, 'C05b0XBIMR.jpg', '50', 1, 8, '2016-06-27 20:17:55', '2016-07-05 09:06:26');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE IF NOT EXISTS `slide` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `TieuDe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NoiDung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Hinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `AnHien` int(11) NOT NULL,
  `STT` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `TieuDe`, `NoiDung`, `Hinh`, `AnHien`, `STT`, `created_at`, `updated_at`) VALUES
(2, 'Nhà hàng thế giới nghiêng 235 mỹ đình', 'Kế thừa tinh hoa ẩm thực trên khắp thế giới, liên tục cập nhật các món ngon, món lạ của 3 miền đất nước, Nhà Hàng Thế Giới Nghiêng Mỹ Đình trở thành địa điểm thưởng thức ẩm thực lý tưởng của rất nhiều thực khách.', 'C6wJ4u4j7p.jpg', 1, 1, '2016-06-28 02:38:09', '2016-07-05 08:49:18'),
(4, 'Không gian nhà hàng Thế Giới Nghiêng 235 Mỹ Đình', 'Kế thừa tinh hoa ẩm thực trên khắp thế giới, liên tục cập nhật các món ngon, món lạ của 3 miền đất nước, Nhà Hàng Thế Giới Nghiêng Mỹ Đình trở thành địa điểm thưởng thức ẩm thực lý tưởng của rất nhiều thực khách.', 'acwuOWFt7e.jpg', 1, 2, '2016-06-28 02:46:58', '2016-07-05 08:54:57'),
(5, 'Phở khô (Gia Lai)', 'Sợi phở khô được làm từ bột gạo, không mềm và dẹp như sợi phở mà mảnh và dai như sợi hủ tiếu. Sợi phở khô trụng sơ rồi trộn với thịt bằm, bên trên rắc lớp hành phi vàng ươm, thơm phức. Nước lèo có thịt bò tái, gân, bắp, hoặc bò viên, cũng có thể là thịt g', 'vQcte6rqRm.jpg', 0, 3, '2016-06-28 02:52:01', '2016-07-05 09:22:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Thanh Phương', 'nguyenphuong@gmail.com', '$2y$10$RLcnCFgmzwVtzC595vn59OCCcj1H87tgahn0mpSkMN93kMPtPuKYy', 1, 'r9N0DkSL6CxjuTzE022e0Fa7bR84h9b2VeuduGJEM7c14CHPU0KdE1fNCVqj', NULL, '2016-07-05 22:14:08'),
(2, 'Dương1', 'duong@gmail.com', '$2y$10$utndBtELTcFzZRx.yznj4u27caFJgdRpOBCbNYfoGPN0CCOE/EXxS', 0, 'eaTXWPSl5O3snl3IWOvBCsRimt6RVkelr5nVjylYANo2DZeSxmB3WegaoW8N', '2016-06-29 17:41:15', '2016-07-04 19:33:33'),
(3, 'duyduy', 'duy@gmail.com', '$2y$10$h/zvGnRDBZ4pfeF1vBDXEux90AJF0g4So9uJhNFP7oZZPGB9ONhyu', 1, '5qZ3BcrgA7LR2HYID36F3PhxZvqCKgSqlmOIYAyMhktSRLSTX0aCII7K0Ivv', '2016-06-29 17:42:55', '2016-07-05 19:59:00'),
(5, 'Dương', 'duong1@gmail.com', '$2y$10$zxLbY9b1CjkFESuQekDnS.xJxteAUPdRR52.LA7eTd7.FUmrN6Xau', 0, NULL, '2016-07-04 18:07:06', '2016-07-04 18:15:04'),
(6, 'Kiều Dương', 'pp@gmail.com', '$2y$10$eaxKYtOuo.f57dgG8KBd4ua/fupoBQE1y7xm/l2Su/EN9gMI0fOka', 0, '0HkCofX5fpYOYMErSX02jc0JQkt1DLLjSX5oXUaBkDV0Yf5l5eqqimfTWEUA', '2016-07-05 02:12:06', '2016-07-05 22:13:44'),
(8, 'Trương', 'truongtieudi27@gmail.com', '$2y$10$TQ/YIWs7OTSla6X/EvbRBeB.a5aAf.f41Nabb08eAtIRxb4ueZsEu', 0, NULL, '2016-07-05 22:09:09', '2016-07-05 22:13:51');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_idsp_foreign` FOREIGN KEY (`idSP`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `binhluan_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_idloaisp_foreign` FOREIGN KEY (`idLoaiSP`) REFERENCES `loaisp` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
