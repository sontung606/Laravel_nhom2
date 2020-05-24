-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2020 at 10:25 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_banhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_customer` int(11) DEFAULT NULL,
  `date_order` date DEFAULT NULL,
  `total` float DEFAULT NULL COMMENT 'tổng tiền',
  `payment` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'hình thức thanh toán',
  `note` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `status_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `id_customer`, `date_order`, `total`, `payment`, `note`, `created_at`, `updated_at`, `status_id`) VALUES
(14, 14, '2017-03-23', 160000, 'COD', 'k', '2017-03-23 04:46:05', '2017-03-23 04:46:05', 0),
(13, 13, '2017-03-21', 400000, 'ATM', 'Vui lòng giao hàng trước 5h', '2017-03-21 07:29:31', '2017-03-21 07:29:31', 0),
(12, 12, '2017-03-21', 520000, 'COD', 'Vui lòng chuyển đúng hạn', '2017-03-21 07:20:07', '2017-03-21 07:20:07', 0),
(11, 11, '2017-03-21', 420000, 'COD', 'không chú', '2017-03-21 07:16:09', '2017-03-21 07:16:09', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bill_detail`
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
-- Dumping data for table `bill_detail`
--

INSERT INTO `bill_detail` (`id`, `id_bill`, `id_product`, `quantity`, `unit_price`, `created_at`, `updated_at`) VALUES
(18, 15, 62, 5, 220000, '2017-03-24 07:14:32', '2017-03-24 07:14:32'),
(17, 14, 2, 1, 160000, '2017-03-23 04:46:05', '2017-03-23 04:46:05'),
(16, 13, 60, 1, 200000, '2017-03-21 07:29:31', '2017-03-21 07:29:31'),
(15, 13, 59, 1, 200000, '2017-03-21 07:29:31', '2017-03-21 07:29:31'),
(14, 12, 60, 2, 200000, '2017-03-21 07:20:07', '2017-03-21 07:20:07'),
(13, 12, 61, 1, 120000, '2017-03-21 07:20:07', '2017-03-21 07:20:07'),
(12, 11, 61, 1, 120000, '2017-03-21 07:16:09', '2017-03-21 07:16:09'),
(11, 11, 57, 2, 150000, '2017-03-21 07:16:09', '2017-03-21 07:16:09');

-- --------------------------------------------------------

--
-- Table structure for table `bill_status`
--

CREATE TABLE `bill_status` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bill_status`
--

INSERT INTO `bill_status` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Mới đặt hàng', NULL, NULL),
(2, 'Đang xử lý', NULL, NULL),
(3, 'Đang giao hàng', NULL, NULL),
(4, 'Chờ thanh toán', NULL, NULL),
(5, 'Đã thanh toán', NULL, NULL),
(6, 'Mới đặt hàng', NULL, NULL),
(7, 'Đang xử lý', NULL, NULL),
(8, 'Đang giao hàng', NULL, NULL),
(9, 'Chờ thanh toán', NULL, NULL),
(10, 'Đã thanh toán', NULL, NULL),
(11, 'Mới đặt hàng', NULL, NULL),
(12, 'Đang xử lý', NULL, NULL),
(13, 'Đang giao hàng', NULL, NULL),
(14, 'Chờ thanh toán', NULL, NULL),
(15, 'Đã thanh toán', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `gender`, `email`, `address`, `phone_number`, `note`, `created_at`, `updated_at`) VALUES
(13, 'Hương Hương', 'Nữ', 'huongnguyenak96@gmail.com', 'Lê Thị Riêng, Quận 1', '23456789', 'Vui lòng giao hàng trước 5h', '2017-03-21 07:29:31', '2017-03-21 07:29:31'),
(12, 'Khoa phạm', 'Nam', 'khoapham@gmail.com', 'Lê thị riêng', '1234567890', 'Vui lòng chuyển đúng hạn', '2017-03-21 07:20:07', '2017-03-21 07:20:07'),
(11, 'Hương Hương', 'Nữ', 'huongnguyenak96@gmail.com', 'Lê Thị Riêng, Quận 1', '234567890-', 'không chú', '2017-03-21 07:16:09', '2017-03-21 07:16:09'),
(19, 'Trường', '???', 'abca@gmail.com', '288 trần quốc toản', '0505085009', 'AAA', '2020-05-24 02:32:09', '2020-05-24 02:32:09'),
(14, 'Tỷ', '?? :) ???', 'abs@gmail.com', '123 lê văn sỹ', '0505085009', 'Hello', '2020-05-24 02:28:29', '2020-05-24 02:28:16');

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
(1, '2020_05_09_150810_add_column_bill_table', 1),
(2, '2020_05_09_151105_creat_table_bill_status', 1),
(3, '2020_05_15_221902_add_column_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'tiêu đề',
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'nội dung',
  `image` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'hình',
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image`, `create_at`, `update_at`) VALUES
(1, 'Mùa trung thu năm nay, Hỷ Lâm Môn muốn gửi đến quý khách hàng sản phẩm mới xuất hiện lần đầu tiên tại Việt nam \"Bánh trung thu Bơ Sữa HongKong\".', 'Những ý tưởng dưới đây sẽ giúp bạn sắp xếp tủ quần áo trong phòng ngủ chật hẹp của mình một cách dễ dàng và hiệu quả nhất. ', 'sample1.jpg', '2017-03-11 06:20:23', '0000-00-00 00:00:00'),
(2, 'Tư vấn cải tạo phòng ngủ nhỏ sao cho thoải mái và thoáng mát', 'Chúng tôi sẽ tư vấn cải tạo và bố trí nội thất để giúp phòng ngủ của chàng trai độc thân thật thoải mái, thoáng mát và sáng sủa nhất. ', 'sample2.jpg', '2016-10-20 02:07:14', '0000-00-00 00:00:00'),
(3, 'Đồ gỗ nội thất và nhu cầu, xu hướng sử dụng của người dùng', 'Đồ gỗ nội thất ngày càng được sử dụng phổ biến nhờ vào hiệu quả mà nó mang lại cho không gian kiến trúc. Xu thế của các gia đình hiện nay là muốn đem thiên nhiên vào nhà ', 'sample3.jpg', '2016-10-20 02:07:14', '0000-00-00 00:00:00'),
(4, 'Hướng dẫn sử dụng bảo quản đồ gỗ, nội thất.', 'Ngày nay, xu hướng chọn vật dụng làm bằng gỗ để trang trí, sử dụng trong văn phòng, gia đình được nhiều người ưa chuộng và quan tâm. Trên thị trường có nhiều sản phẩm mẫu ', 'sample4.jpg', '2016-10-20 02:07:14', '0000-00-00 00:00:00'),
(5, 'Phong cách mới trong sử dụng đồ gỗ nội thất gia đình', 'Đồ gỗ nội thất gia đình ngày càng được sử dụng phổ biến nhờ vào hiệu quả mà nó mang lại cho không gian kiến trúc. Phong cách sử dụng đồ gỗ hiện nay của các gia đình hầu h ', 'sample5.jpg', '2016-10-20 02:07:14', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_type` int(10) UNSIGNED DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit_price` float DEFAULT NULL,
  `promotion_price` float DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `new` tinyint(4) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `id_type`, `description`, `unit_price`, `promotion_price`, `image`, `unit`, `new`, `created_at`, `updated_at`) VALUES
(1, 'Chuột máy tính Razer DeathAddder Essential', 1, '\r\n- Thương hiệu: Razer - Chuẩn kết nối: USB - 5 Nút có thể lập trình riêng biệt - Tích hợp led xanh đặc trưng của Razer', 999000, 789000, 'mouse1.jpg', 'VNĐ', 0, NULL, NULL),
(2, 'Chuột gaming MSI Clutch GM50 Gaming', 1, '\r\n- Cảm biến PMW-3330 - Thiết kế ergonomic và gọn nhẹ - Phím bấm Omron cho tuổi thọ lên đến 20 triệu click', 1100000, NULL, 'mouse2.jpg', 'VNĐ', 0, NULL, NULL),
(3, 'Chuột gaming Logitech G102', 1, '- DPI có sẵn : 400 - 800 - 1600 - 3200 (tối đa 8000dpi)- Có driver (Logitech Gaming Software) tuỳ chỉnh DPI, macro, led. - Có bộ nhớ trong tích hợp trên chuột để lưu các thiết lập.- Lift-off distance (khoảng cách nhận tín hiệu) : ~1.8 mm (pad vải), ~2mm (pad cứng). - Cảm biến MERCURY - một loại cảm biến quang học chất lượng cao được phát triển tại Hoa Kỳ.', 470000, 400000, 'mouse3.png', 'VNĐ', 0, NULL, '2020-05-23 14:17:25'),
(4, 'Chuột gaming Fuhlen L102', 1, '- Thiết kế độc đáo và phong cách thiết kế- Tốc độ của chuột lên tới 1000DPI- Chất liệu gia công cao cấp giúp cho thời gian sử dụng lâu hơn- Bảo hành 2 năm', 129000, NULL, 'mouse4.jpg', 'VNĐ', 0, NULL, NULL),
(5, 'Chuột chơi game ASUS ROG Pugio', 1, '- Độc quyền đẩy-fit chuyển đổi thiết kế ổ cắm để dễ dàng thay đổi kích cỡ và kéo dài tuổi thọ của con chuột - Bộ cảm biến quang học cấp độ chơi game với 7200 DPI, 150 IPS và tăng tốc 30g để theo dõi nhanh và chính xác - Thiết kế nút riêng biệt với lực khởi động thấp hơn và đáp ứng nhanh hơn - Giao diện trực quan ROG Armory để dễ dàng tùy chỉnh các nút, hiệu chuẩn bề mặt, hiệu suất, cài đặt độ sáng Aura RGB và hơn thế nữa\r\n', 1590000, NULL, 'mouse5.jpg', 'VNĐ', 0, NULL, NULL),
(6, 'Tai nghe Over-ear Logitech G Pro X', 2, '- Tai nghe chơi game Pro X for xanh thoại  @- Đêm tai thiet ke with the cao su không make cảm giác thoải mái  @- Khung tai nghe bằng thép and nhôm cao cấp, bền bỉ  @- Tích hợp âm thanh vòm DTS Headphone: X 2.0  @- Điều Tốt, bạn có thể sử dụng tính  @năng của chúng ', 3899000, 3289000, 'tainghe1.jpg', 'VNĐ', 0, NULL, NULL),
(7, 'Tai nghe Over-ear Razer Tiamat 7.1 V2', 2, '- Tương thích đa nền tảng\r\n- 4 x 50mm củ loa âm thanh\r\n- Bộ điều chỉnh âm thanh trên dây\r\n- Jack 3.5 audio kết hợp\r\n- Dải tần đáp ứng: 100 – 10 kHz\r\n- Loại micrô: ECM', 5889000, NULL, 'tainghe2.jpg', 'VNĐ', 0, NULL, NULL),
(8, 'Tai nghe không dây Over-ear CORSAIR HS70 Wireless White CA-9011177-AP', 2, ' Kết nối không dây - Micro có thể tháo rời - Thời lượng pin lên đến 16 giờ. - Mang lại sự thoải mái đặc biệt, chất lượng âm thanh vượt trội - Chuẩn kết nối: Wireless', 2850000, NULL, 'tainghe3.jpg', 'VNĐ', 0, NULL, NULL),
(9, 'Tai nghe Over-ear Zidli ZH20', 2, '- Tai nghe 7.1 với LED RGB độc đáo  - Mic đa hướng và khử nhiễu, điều chỉnh theo nhu cầu - Khung thép chắc chắn kèm ốp đệm đầu và Ear-Cup fullsize với chất liệu da cao cấp - Âm trường rộng phù hợp các loại Game', 790000, NULL, 'tainghe4.jpg', 'VNĐ', 0, NULL, NULL),
(10, 'Tai nghe Ovan X6', 2, '- Thiết Kế: Over Ear (trùm kín quanh tai)\r\n- Kết Nối: Jack 3.5mm (audio) / Jack 3.5mm (mic)\r\n- Chức Năng: Volume Control / Microphone Mute\r\n- Tai nghe \"Gaming\" mang đến một phong cách chuyên nghiệp cùng một chất lượng âm thanh tuyệt vời', 260000, 210000, 'tainghe5.jpg', 'VNĐ', 0, NULL, NULL),
(11, 'Bàn phím cơ CORSAIR K70 MK.2 RGB MX (Full size/Cherry MX Red/RGB) CH-9109010-NA', 3, '- Bàn phím cơ\r\n- Kết nối USB 2.0\r\n- Kiểu switch Cherry MX', 3690000, NULL, 'banphim1.jpg', 'VNĐ', 0, NULL, NULL),
(12, 'Bàn phím cơ Razer Huntsman Elite (RZ03-01870100-R3M1) (Full size/Razer Opto/RGB)', 3, '- Bàn phím cơ\r\n- Kết nối USB 2.0\r\n- Kiểu switch Razer Opto', 5499000, NULL, 'banphim2.jpg', 'VNĐ', 0, NULL, NULL),
(13, 'Bàn phím cơ ASUS Strix Flare PNK Ltd (Fullsize/Cherry MX Blue) (Xám, Hồng)', 3, '- Bàn phím cơ\r\n- Kết nối: USB\r\n- Switch: Cherry MX\r\n- Phím chức năng: Có', 4390000, NULL, 'banphim3.jpg', 'VNĐ', 0, NULL, NULL),
(14, 'Bà̀n phím giả cơ Logitech Gaming G213 (Đen)', 3, '- Bà̀n phím giả cơ\r\n- Kết nối USB 2.0\r\n- Kiểu switch Rubber Dome', 990000, NULL, 'banphim4.jpg', 'VNĐ', 0, NULL, NULL),
(16, 'Màn Hình cong Samsung 27\" LC27F397FHEXXV (1920x1080/VA/60Hz/4ms/FreeSync)', 4, '- Kích thước: 27\"\r\n- Độ phân giải: 1920 x 1080 ( 16:9 )\r\n- Công nghệ tấm nền: VA\r\n- Góc nhìn: 178 (H) / 178 (V)\r\n- Tần số quét: 60Hz\r\n- Thời gian phản hồi: 4 ms', 4490000, NULL, 'manhinh1.jpg', 'VNĐ', 0, NULL, NULL),
(17, 'Màn hình LCD Gigabyte AORUS 25\" KD25F Gaming', 4, '- Kích thước: 25\" (1920 x 1080), Tỷ lệ 16:9\r\n- Tấm nền TN, Góc nhìn: 170 (H) / 160 (V)\r\n- Tần số quét: 240Hz , Thời gian phản hồi 0.5 ms\r\n- HIển thị màu sắc: 16.7 triệu màu\r\n- Cổng hình ảnh: 1 x DisplayPort 1.2, 2 x HDMI 2.0', 13490000, NULL, 'manhinh2.jpg', 'VNĐ', 0, NULL, NULL),
(18, 'Màn hình cong MSI Optix 31.5\" AG32CV', 4, '- Kích thước: 31.5\" (1920 x 1080), Tỷ lệ 16:9\r\n- Tấm nền VA, Góc nhìn: 178 (H) / 178 (V)\r\n- Tần số quét: 165Hz , Thời gian phản hồi 1 ms\r\n- HIển thị màu sắc: 16.7 triệu màu\r\n- Cổng hình ảnh: 1 x DisplayPort 1.2, 1 x HDMI 2.0, 1 x DVI', 8060000, NULL, 'manhinh3.jpg', 'VNĐ', 0, NULL, NULL),
(19, 'Màn hình cong Samsung 31.5\" LC32JG54QQEXXV', 4, '- Kích thước: 31.5\" (2560 x 1440), Tỷ lệ 16:9\r\n- Tấm nền VA, Góc nhìn: 178 (H) / 178 (V)\r\n- Tần số quét: 144Hz , Thời gian phản hồi 4 ms\r\n- HIển thị màu sắc: 16.7 triệu màu\r\n- Cổng hình ảnh: 1 x DisplayPort, 2 x HDMI', 10389000, NULL, 'manhinh4.jpg', 'VNĐ', 0, NULL, NULL),
(20, 'Màn Hình LCD Samsung 21.5\" LS22E45UFS/XV', 4, '- Kích thước: 21.5\" (1920 x 1080), Tỷ lệ 16:9\r\n- Tấm nền TN, Góc nhìn: 170 (H) / 160 (V)\r\n- Tần số quét: 60Hz , Thời gian phản hồi 5 ms\r\n- HIển thị màu sắc: 16.7 triệu màu\r\n- Cổng hình ảnh: , 1 x HDMI, 1 x DVI, 1 x VGA/D-sub', 2690000, NULL, 'manhinh5.jpg', 'VNĐ', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `link` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `link`, `image`, `updated_at`, `created_at`) VALUES
(6, 'banphim', 'banphim.jpg', '2020-05-23 21:31:16', '2020-05-23 21:31:16'),
(7, 'chuot', 'maxresdefault.jpg', '2020-05-23 21:31:28', '2020-05-23 21:31:28'),
(8, 'manhinh', 'monitor.jpg', '2020-05-23 21:31:34', '2020-05-23 21:31:34'),
(9, 'head', 'headphone.jpg', '2020-05-23 21:31:39', '2020-05-23 21:31:39');

-- --------------------------------------------------------

--
-- Table structure for table `type_products`
--

CREATE TABLE `type_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `type_products`
--

INSERT INTO `type_products` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Chuột', 'Chuột dùng để chơi game', 'mouse.jpg', NULL, NULL),
(2, 'Tai nghe', 'Dùng để nghe nhạc hoặc nghe tiếng game', 'tainghe.jpg', NULL, NULL),
(3, 'Bàn phím', 'Dùng để chơi game', 'banphim.jpg', NULL, '2020-05-24 02:30:13'),
(4, 'Màn hình', 'Màn hình máy tính (Computer display, Visual display unit hoặc hay bị gọi là Monitor) là thiết bị điện tử kết nối với máy tính với mục đích hiển thị và phục vụ cho quá trình giao tiếp giữa người sử dụng với máy tính. ... Đối với máy tính xách tay màn hình là một bộ phận gắn chung không thể tách rờ', 'manhinh.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `phone`, `address`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(6, 'Hương Hương', 'huonghuong08.php@gmail.com', '$2y$10$rGY4KT6ZSMmLnxIbmTXrsu2xdgRxm8x0UTwCyYCAzrJ320kYheSRq', '23456789', 'Hoàng Diệu 2', NULL, '2017-03-23 07:17:33', '2017-03-23 07:17:33', 0),
(7, 'Trần Đức Tâm', 'admin@gmail.com', '$2y$10$amPLmki2N90975gFXCUiH.vMcLZ/e1CePvY0zUYaumthReEVYxggG', NULL, NULL, 'mgR8GXs1Sqb3YwEwD8dvWsi5MtKCoAIIVsZXGcUTxIuyP8uAz9rPnBdiZIu6', NULL, NULL, 1),
(8, 'Khach mua hang', 'guest@gmail.com', '$2y$10$AS2aS5Ll8hVNl04OEZWOgOARUkvdc9aZgUlC9a8uo1nJh5EzYu46m', NULL, NULL, NULL, NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bills_ibfk_1` (`id_customer`);

--
-- Indexes for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_detail_ibfk_2` (`id_product`);

--
-- Indexes for table `bill_status`
--
ALTER TABLE `bill_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_id_type_foreign` (`id_type`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_products`
--
ALTER TABLE `type_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `bill_status`
--
ALTER TABLE `bill_status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `type_products`
--
ALTER TABLE `type_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_id_type_foreign` FOREIGN KEY (`id_type`) REFERENCES `type_products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
