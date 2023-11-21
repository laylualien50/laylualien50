-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2023 lúc 01:34 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `da1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `matk` int(11) NOT NULL,
  `masp` int(11) NOT NULL,
  `noidung` text NOT NULL,
  `ngaybl` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `trinhtrang` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `madh` int(11) NOT NULL,
  `masp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `madm` int(11) NOT NULL,
  `tendm` varchar(100) NOT NULL,
  `anh` varchar(200) DEFAULT NULL,
  `soluongsp` int(11) DEFAULT NULL,
  `thutu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`madm`, `tendm`, `anh`, `soluongsp`, `thutu`) VALUES
(1, 'Tất cả sản phẩm', NULL, NULL, NULL),
(2, 'Áo thun', NULL, NULL, NULL),
(3, 'Áo polo', NULL, NULL, NULL),
(4, 'Áo sơ mi', NULL, NULL, NULL),
(5, 'Áo khoác', NULL, NULL, NULL),
(6, 'Hoodie', NULL, NULL, NULL),
(7, 'Quần ', NULL, NULL, NULL),
(8, 'Phụ kiện', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `madh` int(11) NOT NULL,
  `ngaydathang` datetime NOT NULL,
  `makh` int(11) NOT NULL COMMENT 'Liên kết đến bảng taikhoan',
  `tongtien` int(11) NOT NULL,
  `ghichu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` int(11) NOT NULL,
  `tensp` varchar(100) NOT NULL,
  `anhsp` varchar(200) NOT NULL,
  `giasp` int(11) NOT NULL,
  `giacu` int(11) DEFAULT NULL,
  `motangan` varchar(100) DEFAULT NULL,
  `motachitiet` varchar(200) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `madm` int(11) NOT NULL,
  `ngaytao` datetime(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `anhsp`, `giasp`, `giacu`, `motangan`, `motachitiet`, `soluong`, `madm`, `ngaytao`) VALUES
(1, 'Áo thun in hình 285', 'aothun1.png', 99000, NULL, NULL, NULL, NULL, 2, NULL),
(2, 'Áo thun in hình Happens in LA', 'aothun2.png', 399000, NULL, NULL, NULL, NULL, 2, NULL),
(3, 'Áo thun in hình điện thoại', 'aothun3.png', 299000, NULL, NULL, NULL, NULL, 2, NULL),
(4, 'Áo khoác bóng chày Disney100', 'aokhoac1.png', 2499000, NULL, NULL, NULL, NULL, 5, NULL),
(5, 'Áo thun in hình Restless Youth', 'aothun4.png', 299000, NULL, NULL, NULL, NULL, 2, NULL),
(10, 'Áo khoác bóng chày vải satin', 'aokhoac2.png', 1099000, NULL, NULL, NULL, NULL, 5, NULL),
(11, 'Áo sơ mi khoác dệt chéo', 'aokhoac3.png', 1699000, NULL, NULL, NULL, NULL, 5, NULL),
(12, 'Áo khoác giả lông cừu', 'aokhoac4.png', 1499000, NULL, NULL, NULL, NULL, 5, NULL),
(13, 'Mũ dệt kim', 'phukien1.png', 229000, NULL, NULL, NULL, NULL, 8, NULL),
(14, 'Áo polo bằng cotton', 'polo1.png', 299000, NULL, NULL, NULL, NULL, 3, NULL),
(15, 'Áo có mũ thiên thần', 'hoodie1.png', 499000, NULL, NULL, NULL, NULL, 6, NULL),
(16, 'Áo hoodie kéo khoá', 'hoodie2.png', 899000, NULL, NULL, NULL, NULL, 6, NULL),
(17, 'Quần dài túi hộp', 'quan1.png', 1099000, NULL, NULL, NULL, NULL, 7, NULL),
(18, 'Quần jogger túi hộp vải nylon Slim', 'quan2.png', 699000, NULL, NULL, NULL, NULL, 7, NULL),
(19, 'Quần jogger túi hộp', 'quan3.png', 699000, NULL, NULL, NULL, NULL, 7, NULL),
(20, 'Quần short nỉ ', 'quan4.png', 299000, NULL, NULL, NULL, NULL, 7, NULL),
(27, 'Áo sơ mi khoác nhẹ lót vải teddy', 'somi1.png', 1499000, NULL, NULL, NULL, NULL, 4, NULL),
(28, 'Áo sơ mi xếp ly ', 'somi2.png', 699000, NULL, NULL, NULL, NULL, 4, NULL),
(29, 'Áo sơ mi nhung tăm ', 'somi3.png', 499000, NULL, NULL, NULL, NULL, 4, NULL),
(30, 'Áo sơ mi Oxford ngắn tay', 'somi4.png', 499000, NULL, NULL, NULL, NULL, 4, NULL),
(31, 'Bộ 2 găng tay smartphone', 'phukien2.png', 229000, NULL, NULL, NULL, NULL, 8, NULL),
(32, 'Thắt lưng vải co giãn', 'phukien3.png', 399000, NULL, NULL, NULL, NULL, 8, NULL),
(33, 'Mũ lưỡi trai chạy bộ', 'phukien4.png', 399000, NULL, NULL, NULL, NULL, 8, NULL),
(34, 'Áo polo cotton Slim', 'polo2.png', 399000, NULL, NULL, NULL, NULL, 3, NULL),
(35, 'Áo polo logo mặt trời', 'polo3.png', 499000, NULL, NULL, NULL, NULL, 3, NULL),
(36, 'Áo polo xếp ly dáng thoải mái', 'polo4.png', 499000, NULL, NULL, NULL, NULL, 3, NULL),
(37, 'Áo hoodie Torino Tour', 'hoodie3.png', 899000, NULL, NULL, NULL, NULL, 6, NULL),
(38, 'Áo hoodie Himālaya', 'hoodie4.png', 899000, NULL, NULL, NULL, NULL, 6, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `shipping_address` varchar(255) DEFAULT NULL,
  `shipping_city` varchar(50) DEFAULT NULL,
  `billing_address` varchar(255) NOT NULL,
  `billing_city` varchar(50) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updation_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_admin` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `full_name`, `phone`, `shipping_address`, `shipping_city`, `billing_address`, `billing_city`, `register_date`, `updation_date`, `is_admin`) VALUES
(5, 'email@aa.com', 'username', 'password', 'full_name', '123456789', 'shipping_address', 'shipping_city', 'billing_address', 'billing_city', '2023-09-27 10:01:54', '0000-00-00 00:00:00', 0),
(8, 'email@aa.com', 'username', 'password', 'full_name', '123', 'shipping_address', 'shipping_city', 'billing_address', 'billing_city', '2023-09-27 12:05:54', '2023-09-27 12:05:54', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`matk`,`masp`);

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`madh`,`masp`),
  ADD KEY `masp` (`masp`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`madm`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`madh`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`),
  ADD KEY `fk_sp_dm` (`madm`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `madm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `madh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `masp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`madh`) REFERENCES `donhang` (`madh`),
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_sp_dm` FOREIGN KEY (`madm`) REFERENCES `danhmuc` (`madm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
