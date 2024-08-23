-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 08, 2023 lúc 02:09 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doanwebnc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nuoc_va_thuc_pham`
--

CREATE TABLE `tbl_nuoc_va_thuc_pham` (
  `id_nuoc_va_tp` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `loai_tp` varchar(50) NOT NULL,
  `gia_ban` float NOT NULL,
  `gia_nhap` float NOT NULL,
  `so_luong_nhap` int(11) NOT NULL,
  `so_luong_ton` int(11) NOT NULL,
  `nha_cung_cap` varchar(50) NOT NULL,
  `ngay_nhap` date NOT NULL,
  `ngay_het_han` date NOT NULL,
  `tong_tien` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_nuoc_va_thuc_pham`
--

INSERT INTO `tbl_nuoc_va_thuc_pham` (`id_nuoc_va_tp`, `name`, `loai_tp`, `gia_ban`, `gia_nhap`, `so_luong_nhap`, `so_luong_ton`, `nha_cung_cap`, `ngay_nhap`, `ngay_het_han`, `tong_tien`) VALUES
(1, 'Trà lipton', 'Nước', 0, 0, 0, 0, '', '2023-09-01', '2024-01-01', 1000),
(2, 'Mass tăng cân', 'Thực phẩm', 0, 0, 0, 0, '', '2023-09-01', '2024-01-01', 3640),
(3, 'Trứng gà ', 'Thực phẩm', 0, 0, 0, 0, '', '2023-09-01', '2024-01-01', 1000),
(4, 'Trà lipton', 'Nước', 0, 0, 0, 0, '', '2023-09-01', '2024-01-01', 1420),
(5, 'Nước ép rau má', 'Nước', 0, 0, 0, 0, '', '2023-09-01', '2024-01-01', 4570),
(6, 'Meal Replacement', 'Thực phẩm', 0, 0, 0, 0, '', '2023-08-01', '2024-01-01', 4570),
(7, 'Nước ép rau má', 'Nước', 0, 0, 0, 0, '', '2023-08-01', '2024-01-01', 4000),
(8, 'Meal Replacement', 'Thực phẩm', 0, 0, 0, 0, '', '2023-08-01', '2024-01-01', 7000),
(9, 'Meal Replacement', 'Thực phẩm', 0, 0, 0, 0, '', '2023-08-01', '2024-01-01', 5760),
(10, 'Cơm ', 'Thực phẩm', 0, 0, 0, 0, '', '2023-08-01', '2024-01-01', 3000),
(11, 'Mass tăng cân', 'Thực phẩm', 0, 0, 0, 0, '', '2023-05-01', '2024-01-01', 3500),
(12, 'Dầu cá Omega', 'Thực phẩm', 0, 0, 0, 0, '', '2023-05-01', '2024-01-01', 4000),
(13, 'Vitamin', 'Thực phẩm', 25000, 1000, 100, 66, '', '2023-05-01', '2024-01-01', 7000),
(14, 'Dầu cá Omega', 'Thực phẩm', 20000, 1000, 100, 50, '', '2023-05-01', '2024-01-01', 9000),
(15, 'Mì tôm', 'Thực phẩm', 0, 0, 0, 0, '', '2023-06-01', '2024-01-01', 2000),
(16, 'Cafe', 'Nước', 0, 0, 0, 0, '', '2023-06-01', '2024-01-01', 3500),
(17, 'Vitamin', 'Thực phẩm', 0, 0, 0, 0, '', '2023-06-01', '2024-01-01', 6000),
(18, 'Cafe', 'Nước', 0, 0, 0, 0, '', '2023-06-01', '2024-01-01', 4700),
(19, 'Vitamin', 'Thực phẩm', 0, 0, 0, 0, '', '2023-11-01', '2024-01-01', 7000),
(20, 'Vitamin', 'Thực phẩm', 0, 0, 0, 0, '', '2023-11-01', '2024-01-01', 46000),
(21, 'Bột protein', 'Thực phẩm', 0, 0, 1000, 0, '', '2023-11-01', '2024-01-01', 1500),
(22, 'Dưa chuột', 'Thực phẩm', 100, 0, 1000, 0, '', '2023-01-01', '2024-01-01', 30000),
(23, 'Thịt bò', 'Thực phẩm', 100, 100, 1000, 100, '', '2023-01-01', '2024-01-01', 60000),
(24, 'C2', 'Nước', 0, 0, 0, 0, '', '2023-01-01', '2024-01-01', 11300),
(25, 'Dầu cá Omega', 'Thực phẩm', 0, 0, 0, 0, '', '2023-01-01', '2024-01-01', 80000),
(26, 'Cocacola', 'Nước', 8000, 10000, 100, 100, 'sad', '2023-02-11', '2024-12-11', 4000),
(27, 'Trà đào', 'Nước', 8000, 10000, 100, 100, 'sad', '2023-02-11', '2024-12-11', 8800),
(28, '0 độ', 'Nước', 8000, 10000, 100, 100, 'sad', '2023-02-11', '2024-12-11', 4730),
(29, 'Trà Thái', 'Nước', 8000, 1000020, 1000, 100424, 'sad', '2023-02-11', '2024-12-11', 4920),
(30, 'Bột protein', 'Thực phẩm', 8000, 10000, 100, 100, 'sad', '2023-02-11', '2024-12-11', 12000),
(31, 'Cocacola', 'Nước', 10000, 8000, 200, 100, 'Cocacola1', '2023-04-07', '2024-04-07', 1600),
(32, '0 độ', 'Nước', 8000, 10000, 100, 150, 'sad', '2023-02-11', '2024-12-11', 1300),
(33, 'Trà đào', 'Nước', 8000, 10000, 100, 100, 'sad', '2023-05-11', '2024-12-11', 64600),
(34, 'Fanta', 'Nước', 8000, 10000, 100, 300, 'sad', '2023-05-11', '2024-12-11', 9950),
(35, 'C2', 'Nước', 8000, 10000, 100, 100, 'sad', '2023-05-11', '2024-12-11', 4905),
(36, 'Trà Thái', 'Nước', 8000, 10000, 100, 123, 'sad', '2023-05-11', '2024-12-11', 11001),
(37, 'Pesci', 'Nước', 8000, 10000, 1006, 500, 'sad', '2023-05-11', '2024-12-11', 14600),
(38, 'Pesci', 'Nước', 8000, 10000, 1000, 100, 'sad', '2023-12-11', '2024-12-11', 15400),
(39, 'Nước khoáng', 'Nước', 8000, 1000020, 1000, 100424, 'sadboiz', '2023-12-11', '2024-12-11', 18400),
(40, 'Bột protein', 'Thực phẩm', 8000, 10000, 100, 100, 'sad', '2023-12-11', '2024-12-11', 16400),
(41, 'Bim bim', 'Thực phẩm', 0, 0, 1000, 0, '', '2023-07-01', '2024-01-01', 19000),
(42, 'Bim bim', 'Thực phẩm', 100, 0, 1000, 0, '', '2023-07-01', '2024-01-01', 54000),
(43, 'Thịt bò', 'Thực phẩm', 100, 100, 1000, 100, '', '2023-07-01', '2024-01-01', 7700),
(44, 'Xiên bẩn', 'Thực phẩm', 0, 0, 0, 0, '', '2023-07-01', '2024-01-01', 65100),
(45, 'Dầu cá Omega', 'Thực phẩm', 20000, 1000, 100, 50, '', '2023-07-01', '2024-01-01', 9000);


--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_nuoc_va_thuc_pham`
--
ALTER TABLE `tbl_nuoc_va_thuc_pham`
  ADD PRIMARY KEY (`id_nuoc_va_tp`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_nuoc_va_thuc_pham`
--
ALTER TABLE `tbl_nuoc_va_thuc_pham`
  MODIFY `id_nuoc_va_tp` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121343;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
