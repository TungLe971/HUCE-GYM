-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 12, 2023 lúc 02:19 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

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
-- Cấu trúc bảng cho bảng `tbl_sinh_nhat_hoi_vien`
--

CREATE TABLE `tbl_sinh_nhat_hoi_vien` (
  `id_hv` varchar(50) NOT NULL,
  `ten_hv` varchar(50) NOT NULL,
  `diem_tich_luy` float NOT NULL,
  `ngay_sinh` date NOT NULL,
  `id_gift` int(11) DEFAULT NULL,
  `trang_thai` tinyint(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sinh_nhat_hoi_vien`
--

INSERT INTO `tbl_sinh_nhat_hoi_vien` (`id_hv`, `ten_hv`, `diem_tich_luy`, `ngay_sinh`, `id_gift`, `trang_thai`) VALUES
('0', 'kien', 1, '2023-05-25', NULL, 0),
('1', '1', 1, '2023-05-23', 1, 1),
('10', '10', 10, '2023-05-24', NULL, 0),
('11', '454', 1, '2023-05-24', NULL, 0),
('50', 'Kiên', 53434500, '2013-05-01', NULL, 0),
('7', '7', 7, '0000-00-00', NULL, 0),
('94', 'Vương Chiến ', 12, '2023-06-14', NULL, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_sinh_nhat_hoi_vien`
--
ALTER TABLE `tbl_sinh_nhat_hoi_vien`
  ADD UNIQUE KEY `id_hv` (`id_hv`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
