-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 04, 2023 lúc 12:19 AM
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
-- Cấu trúc bảng cho bảng `tbl_packages`
--

CREATE TABLE `tbl_packages` (
  `id_packages` int(11) NOT NULL,
  `types_room` varchar(50) NOT NULL,
  `name_packages` varchar(50) NOT NULL,
  `gia_packages` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_packages`
--

INSERT INTO `tbl_packages` (`id_packages`, `types_room`, `name_packages`, `gia_packages`) VALUES
(1, 'Gym', '1 lần', 49000),
(2, 'Gym', '1 tháng', 500000),
(3, 'Gym', '3 tháng', 500000),
(4, 'Gym', '6 tháng', 1000000),
(5, 'Gym', '1 năm', 2000000),
(6, 'Gym', '2 năm', 3000000),
(7, 'Gym', '5 năm', 4000000),
(8, 'Yoga', 'Lớp basic', 50000),
(9, 'Yoga', 'Lớp average', 70000),
(10, 'Yoga', 'Lớp advance', 100000),
(12, 'Aerobic', 'Lớp basic', 50000),
(13, 'Aerobic', 'Lớp average', 70000),
(14, 'Aerobic', 'Lớp advance', 100000),
(16, 'Boxing', 'Lớp basic', 50000),
(17, 'Boxing', 'Lớp average', 70000),
(18, 'Boxing', 'Lớp advance', 100000),
(20, 'Swimming', 'Lớp basic', 50000),
(21, 'Swimming', 'Lớp average', 70000),
(22, 'Swimming', 'Lớp advance', 100000);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_packages`
--
ALTER TABLE `tbl_packages`
  ADD PRIMARY KEY (`id_packages`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_packages`
--
ALTER TABLE `tbl_packages`
  MODIFY `id_packages` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
