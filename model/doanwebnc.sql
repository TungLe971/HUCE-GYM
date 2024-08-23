-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2023 at 05:12 AM
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
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` varchar(50) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `card_id` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `packages` varchar(50) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `types_room` varchar(50) DEFAULT NULL,
  `time_start` date DEFAULT NULL,
  `time_end` date DEFAULT NULL,
  `id_hv` varchar(50) DEFAULT NULL,
  `id_nv` varchar(50) DEFAULT NULL,
  `time_private` float DEFAULT NULL,
  `total_money` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `even`
--

CREATE TABLE `even` (
  `id_even` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `time_start` date NOT NULL,
  `time_end` date NOT NULL,
  `id_nv` varchar(50) DEFAULT NULL,
  `id_hv` varchar(50) DEFAULT NULL,
  `id_gift` varchar(50) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `expense` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `luong`
--

CREATE TABLE `luong` (
  `id_nv` varchar(50) NOT NULL,
  `time_start` date NOT NULL,
  `so_cong` float NOT NULL,
  `luong_tren_cong` float NOT NULL,
  `luong` float NOT NULL,
  `trang_thai` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dung_cu_tap`
--

CREATE TABLE `tbl_dung_cu_tap` (
  `id_may` varchar(50) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `nha_cung_cap` varchar(50) NOT NULL,
  `ngay_nhap` date NOT NULL,
  `gia_nhap` float NOT NULL,
  `bao_tri` varchar(50) NOT NULL,
  `bao_hanh` varchar(50) NOT NULL,
  `chi_phi_bao_tri` float NOT NULL,
  `ghi_chu` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hoi_vien`
--

CREATE TABLE `tbl_hoi_vien` (
  `id_hv` varchar(50) NOT NULL,
  `name_hv` varchar(50) NOT NULL,
  `ngay_sinh` date NOT NULL,
  `gioi_tinh` tinyint(1) NOT NULL DEFAULT 0,
  `tuoi` int(11) NOT NULL,
  `sdt` varchar(50) NOT NULL,
  `cmnd` varchar(50) NOT NULL,
  `bien_xe` varchar(50) DEFAULT NULL,
  `diem_tich_luy` float NOT NULL,
  `gmail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nuoc_va_thuc_pham`
--

CREATE TABLE `tbl_nuoc_va_thuc_pham` (
  `id_nuoc_va_tp` varchar(50) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_personal`
--

CREATE TABLE `tbl_personal` (
  `id_personal` varchar(50) NOT NULL,
  `id_hv` varchar(50) NOT NULL,
  `id_nv` varchar(50) NOT NULL,
  `thoi_luong` float NOT NULL,
  `so_buoi` int(11) NOT NULL,
  `doanh_thu` float NOT NULL,
  `ngay` varchar(50) NOT NULL,
  `time_start` date NOT NULL,
  `time_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quan_ly_lop`
--

CREATE TABLE `tbl_quan_ly_lop` (
  `ten_lop` varchar(50) NOT NULL,
  `goi` varchar(50) NOT NULL,
  `thoi_luong` float NOT NULL,
  `ngay` varchar(50) NOT NULL,
  `time_start` date NOT NULL,
  `time_end` date NOT NULL,
  `so_luong_hv` int(11) NOT NULL,
  `so_hv_toi_da` int(11) NOT NULL,
  `id_nv` varchar(50) NOT NULL,
  `doanh_thu` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_qua_tang`
--

CREATE TABLE `tbl_qua_tang` (
  `id_gift` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `diem` float NOT NULL,
  `so_luong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_suc_khoe_hoi_vien`
--

CREATE TABLE `tbl_suc_khoe_hoi_vien` (
  `id_hv` varchar(50) NOT NULL,
  `chieu_cao` float NOT NULL,
  `can_nang` float NOT NULL,
  `phan_tram_mo` float NOT NULL,
  `id_pt` varchar(50) NOT NULL,
  `ngay_cap_nhap` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wardrobe`
--

CREATE TABLE `wardrobe` (
  `id_wardrobe` varchar(50) NOT NULL,
  `so_tu` int(11) NOT NULL,
  `loai_tu` varchar(50) NOT NULL,
  `trang_thai` tinyint(1) DEFAULT 0,
  `id_hv` varchar(50) DEFAULT NULL,
  `time_start` date DEFAULT NULL,
  `time_end` date DEFAULT NULL,
  `ghi_chu` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`card_id`),
  ADD KEY `id_hv` (`id_hv`,`id_nv`);

--
-- Indexes for table `even`
--
ALTER TABLE `even`
  ADD PRIMARY KEY (`id_even`),
  ADD KEY `id_nv` (`id_nv`,`id_hv`,`id_gift`);

--
-- Indexes for table `luong`
--
ALTER TABLE `luong`
  ADD PRIMARY KEY (`id_nv`);

--
-- Indexes for table `tbl_dung_cu_tap`
--
ALTER TABLE `tbl_dung_cu_tap`
  ADD PRIMARY KEY (`id_may`);

--
-- Indexes for table `tbl_hoi_vien`
--
ALTER TABLE `tbl_hoi_vien`
  ADD PRIMARY KEY (`id_hv`);

--
-- Indexes for table `tbl_nhan_vien`
--
ALTER TABLE `tbl_nhan_vien`
  ADD PRIMARY KEY (`id_nv`);

--
-- Indexes for table `tbl_nuoc_va_thuc_pham`
--
ALTER TABLE `tbl_nuoc_va_thuc_pham`
  ADD PRIMARY KEY (`id_nuoc_va_tp`);

--
-- Indexes for table `tbl_personal`
--
ALTER TABLE `tbl_personal`
  ADD PRIMARY KEY (`id_personal`),
  ADD KEY `id_hv` (`id_hv`,`id_nv`);

--
-- Indexes for table `tbl_quan_ly_lop`
--
ALTER TABLE `tbl_quan_ly_lop`
  ADD PRIMARY KEY (`ten_lop`),
  ADD KEY `id_nv` (`id_nv`);

--
-- Indexes for table `tbl_qua_tang`
--
ALTER TABLE `tbl_qua_tang`
  ADD PRIMARY KEY (`id_gift`);

--
-- Indexes for table `tbl_suc_khoe_hoi_vien`
--
ALTER TABLE `tbl_suc_khoe_hoi_vien`
  ADD PRIMARY KEY (`id_hv`),
  ADD KEY `id_pt` (`id_pt`);

--
-- Indexes for table `wardrobe`
--
ALTER TABLE `wardrobe`
  ADD PRIMARY KEY (`id_wardrobe`),
  ADD KEY `id_hv` (`id_hv`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
