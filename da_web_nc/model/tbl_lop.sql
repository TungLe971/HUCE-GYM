-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 24, 2023 lúc 07:44 AM
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
-- Cấu trúc bảng cho bảng `tbl_lop`
--

CREATE TABLE `tbl_lop` (
  `id_lop` int(50) NOT NULL,
  `id_nv` int(50) NOT NULL,
  `types_room` varchar(50) NOT NULL,
  `ten_lop` varchar(50) NOT NULL,
  `packages` varchar(50) DEFAULT NULL,
  `thoi_luong` int(50) NOT NULL,
  `ngay_hoat_dong` varchar(50) DEFAULT NULL,
  `so_luong_hv` int(11) DEFAULT NULL,
  `time_start` date DEFAULT NULL,
  `time_end` date DEFAULT NULL,
  `doanh_thu` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_lop`
--

INSERT INTO `tbl_lop` (`id_lop`, `id_nv`, `types_room`, `ten_lop`, `packages`, `thoi_luong`, `ngay_hoat_dong`, `so_luong_hv`, `time_start`, `time_end`, `doanh_thu`) VALUES
(1, 4, 'Boxing', 'Boxing oneshot', 'basic', 10, 'all', 40, '2023-01-11', '2023-10-11', 200000),
(2, 1, 'Gym', 'Gym đi là vạm vỡ', '1 tháng', 10, 't2,t4,t6', 40, '2022-05-11', '2023-10-11', 250000),
(3, 1, 'Gym', 'Gym đi là vạm vỡ', '1 tháng', 10, 't3,t5,t7', 40, '2020-05-11', '2023-01-11', 250000),
(4, 3, 'Swimming', 'Swimming tận chân trời', 'advance', 3, 't2,t4,t6', 3, '2023-02-11', '2023-03-11', 35000),
(5, 3, 'Aerobic', 'Aerobic nơi tình yêu bắt đầu', 'advance', 3, 't3,t5,t7', 3, '2023-05-11', '2023-06-11', 300000),
(6, 2, 'Yoga', 'Yoga xập xình', 'advance', 10, 't2,t3', 40, '2022-07-11', '2023-07-11', 25000),
(7, 1, 'Yoga', 'Yoga tịnh như nước', 'advance', 10, 't2,t3', 40, '2023-05-11', '2023-10-11', 30000),
(8, 4, 'Boxing', 'Boxing cứng cỏi', 'advance', 10, 'all', 40, '2023-03-11', '2023-10-11', 200000),
(9, 6, 'Aerobic', 'Aerobic nhịp điệu', 'basic', 10, 'all', 50, '2023-05-11', '2023-06-31', 500000),
(10, 5, 'Yoga', 'Yoga lười biếng', 'basic', 20, 't2,t4,t6', 30, '2023-04-11', '2023-10-11', 20000),
(11, 14, 'Boxing', 'Boxing oneshot', 'basic', 10, 'all', 40, '2023-01-11', '2023-10-11', 200000),
(12, 1, 'Gym', 'Gym đi là vạm vỡ', '1 tháng', 10, 't2,t4,t6', 40, '2022-05-11', '2023-10-11', 250000),
(13, 11, 'Gym', 'Gym thoát ế', '6 tháng', 3, 'all', 100, '2023-02-11', '2023-10-11', 90000),
(14, 7, 'Gym', 'Gym đi là vạm vỡ', '1 tháng', 10, 't3,t5,t7', 40, '2023-01-11', '2023-02-11', 250000),
(15, 3, 'Aerobic', 'Aerobic nơi tình yêu bắt đầu', 'advance', 3, 't3,t5,t7', 3, '2023-07-11', '2023-06-11', 500000),
(16, 8, 'Yoga', 'Yoga xập xình', 'advance', 10, 't2,t4,t6', 40, '2022-06-11', '2023-08-11', 250000),
(17, 4, 'Boxing', 'Boxing cứng cỏi', 'advance', 10, 'all', 40, '2023-03-11', '2023-05-11', 200000),
(18, 9, 'Swimming', 'Swimming tận chân trời', 'advance', 3, 't3,t5,t7', 3, '2023-02-11', '2023-03-11', 50000),
(19, 5, 'Yoga', 'Yoga lười biếng', 'basic', 20, 't2,t4,t6', 30, '2023-07-11', '2023-12-11', 40000),
(20, 10, 'Yoga', 'Yoga tịnh như nước', 'advance', 10, 't3,t5,t7', 40, '2023-08-11', '2023-10-11', 100000),
(21, 12, 'Aerobic', 'Aerobic nhịp điệu', 'basic', 10, 'all', 50, '2023-05-11', '2023-06-31', 500000),
(22, 16, 'Gym', 'Gym thoát ế', '6 tháng', 3, 't3,t5,t7', 100, '2023-03-11', '2023-09-11', 100000);
--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_lop`
--
ALTER TABLE `tbl_lop`
  ADD PRIMARY KEY (`id_lop`),
  ADD KEY `id_nv` (`id_nv`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_lop`
--
ALTER TABLE `tbl_lop`
  MODIFY `id_lop` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8893;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
