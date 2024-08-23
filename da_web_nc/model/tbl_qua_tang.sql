-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 10, 2023 lúc 07:38 PM
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
-- Cấu trúc bảng cho bảng `tbl_qua_tang`
--

CREATE TABLE `tbl_qua_tang` (
  `id_gift` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `time_start` date DEFAULT NULL,
  `diem` float NOT NULL,
  `so_luong` int(11) NOT NULL,
  `image` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_qua_tang`
--

INSERT INTO `tbl_qua_tang` (`id_gift`, `name`, `time_start`, `diem`, `so_luong`, `image`) VALUES
(15, '2', '2023-06-07', 5000, 100, '../../../controller/controller_su_kien/sinh_nhat_hoi_vien/upload/book.jpg'),
(16, '123', '2022-06-04', 13, 123, '../../../controller/controller_su_kien/sinh_nhat_hoi_vien/upload/book.jpg'),
(17, '2', '2023-10-02', 5000, 100, '../../../controller/controller_su_kien/sinh_nhat_hoi_vien/upload/286726960_754293565600055_8298832806698565642_n.png'),
(18, '3', '2023-07-02', 500, 100, '../../../controller/controller_su_kien/sinh_nhat_hoi_vien/upload/anh1.png'),
(19, '8', '2023-04-02', 20, 100, '../../../controller/controller_su_kien/sinh_nhat_hoi_vien/upload/anh.png'),
(20, '923', '2023-04-02', 13, 123, '../../../controller/controller_su_kien/sinh_nhat_hoi_vien/upload/IMG_3294.jpeg'),
(21, '323', '2023-01-02', 13, 123, '../../../controller/controller_su_kien/sinh_nhat_hoi_vien/upload/IMG_5043.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_qua_tang`
--
ALTER TABLE `tbl_qua_tang`
  ADD PRIMARY KEY (`id_gift`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_qua_tang`
--
ALTER TABLE `tbl_qua_tang`
  MODIFY `id_gift` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
