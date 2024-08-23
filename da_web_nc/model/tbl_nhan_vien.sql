-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2023 at 11:10 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doanwebnc`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nhan_vien`
--

CREATE TABLE `tbl_nhan_vien` (
  `id_nv` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gioi_tinh` tinyint(1) NOT NULL DEFAULT 0,
  `tuoi` int(11) NOT NULL,
  `sdt` varchar(50) NOT NULL,
  `cmnd` varchar(50) NOT NULL,
  `bien_so_xe` varchar(50) DEFAULT NULL,
  `dia_chi` varchar(50) NOT NULL,
  `chuc_vu` varchar(50) NOT NULL,
  `gmail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_nhan_vien`
--

INSERT INTO `tbl_nhan_vien` (`id_nv`, `name`, `gioi_tinh`, `tuoi`, `sdt`, `cmnd`, `bien_so_xe`, `dia_chi`, `chuc_vu`, `gmail`) VALUES
(1, 'Lê Bá Đạo', 0, 25, '013565665', '001202033333', '30P-68562', 'loanh quanh Hà Nội', 'Quản lý', 'lmt3997@gmail.com'),
(2, 'Trần Đăng Minh', 0, 55, '013515465', '0015952633', '26C-62662', 'không phải Hải Phòng', 'PT', 'tdm@gmail.com'),
(3, 'Nguyễn Chí Hải', 0, 22, '013791203', '0019895613', '66V-6856', 'giữa biển Đông', 'PT', 'nch@gmail.com'),
(4, 'Võ Đình Dương', 0, 30, '089132645', '0015232646', '27R-056562', 'trên trời 8 trượng', 'PT', 'cđ@gmail.com'),
(5, 'Lương Thọ Đức', 0, 29, '0465151231', '00989988946', '60P-62659', 'nhà gần Hồ Gươm', 'PT', 'ltd@gmail.com'),
(6, 'Tạ Quang Diệu', 0, 65, '012255506', '001565623', '78T-23562', 'quanh co xứ Huế', 'PT', 'tqh@gmail.com'),
(7, 'Nguyễn Ngọc Ngạn', 0, 35, '08485612', '001263232333', '99N-6548', 'trong mỗi con tim', 'Nhân viên', 'nnn@gmail.com'),
(8, 'Mạc Bích Trang', 1, 24, '099125202', '0018981056', '30M-11142', 'đang tìm hộ khẩu', 'Lễ Tân', 'mbt@gmail.com'),
(9, 'Phùng Ánh Hương', 1, 23, '02623223', '0044658913', '55O-889856', 'đâu đâu cũng là nhà', 'PT', 'lpah@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_nhan_vien`
--
ALTER TABLE `tbl_nhan_vien`
  ADD PRIMARY KEY (`id_nv`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
