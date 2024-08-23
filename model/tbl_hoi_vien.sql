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
-- Cấu trúc bảng cho bảng `tbl_hoi_vien`
--

CREATE TABLE `tbl_hoi_vien` (
  `id_hv` int(50) NOT NULL,
  `name_hv` varchar(50) NOT NULL,
  `ngay_sinh` date NOT NULL,
  `gioi_tinh` varchar(10) DEFAULT NULL,
  `tuoi` int(11) NOT NULL,
  `sdt` varchar(50) NOT NULL,
  `email` text DEFAULT NULL,
  `cmnd` varchar(50) NOT NULL,
  `bien_xe` varchar(50) DEFAULT NULL,
  `diem_tich_luy` float NOT NULL,
  `chieu_cao` float DEFAULT NULL,
  `can_nang` float DEFAULT NULL,
  `phan_tram_mo` float DEFAULT NULL,
  `ngay_cap_nhat` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_hoi_vien`
--

INSERT INTO `tbl_hoi_vien` (`id_hv`, `name_hv`, `ngay_sinh`, `gioi_tinh`, `tuoi`, `sdt`, `email`, `cmnd`, `bien_xe`, `diem_tich_luy`, `chieu_cao`, `can_nang`, `phan_tram_mo`, `ngay_cap_nhat`) VALUES
(1, 'Trần Kiên Cường', '2001-05-10', '1', 40, '89555562265', NULL, '262659890005', '55O-16599', 200, 0, 0, 0, NULL),
(2, 'Mạc Khoa Điềm', '2023-05-16', '0', 19, '0192773', NULL, '24242342', 'f56e6', 3, 0, 0, 0, NULL),
(3, 'Nguyễn Tiến Học', '2023-05-24', '0', 12, '12345', NULL, '54321', '36', 43, 0, 0, 0, NULL),
(4, 'Đoàn Văn H', '2023-05-26', '0', 9, '678', NULL, '9876', '89j', 45, 0, 0, 0, NULL),
(5, 'Nguyễn Đầu Moi', '2023-05-08', '0', 12, '21212', NULL, '342424', 'r34', 4, 0, 0, 0, NULL),
(6, 'Vương Chiến Thắng<br>', '2023-05-17', '0', 12, '545', NULL, '5765654', '54', 777, 0, 0, 0, NULL),
(10, 'Lê Bá Thắng', '2023-05-04', '0', 32, '23243', NULL, '435643', '43', 43, 0, 0, 0, NULL),
(17, 'Tạ Quang Huy', '2023-05-04', '0', 32, '434', NULL, '54545', 'vr4', 3, 0, 0, 0, NULL),
(18, 'Le Minh B', '1999-05-12', '0', 20, '15646846', NULL, '32145345', '29M-5654', 6000, 0, 0, 0, NULL),
(27, 'Đỗ Công Vinh', '2023-05-05', '0', 78, '0105459809', NULL, '5465404611', '24T-64561', 4540, 0, 0, 0, NULL),
(28, 'Khổng Minh', '2023-05-17', '0', 46, '48804848', NULL, '646468786', '90S-8485', 5454, 0, 0, 0, NULL),
(29, 'Nguyễn Văn A', '2023-05-17', '0', 26, '526599899', NULL, '454968798', 'dsad9898', 2135, 0, 0, 0, NULL),
(30, 'Nguyễn Văn B', '2023-05-19', '0', 56, '454658748', NULL, '4684787', 'ds787', 132, 0, 0, 0, NULL),
(31, 'Trần Tiến K', '2023-05-18', '0', 12, '854864', NULL, '46546', 'd4661', 1000, 0, 0, 0, NULL),
(32, 'Đỗ Bá G', '2023-05-26', '0', 69, '245665610', NULL, '26598943', 'sad66', 1516, 0, 0, 0, NULL),
(33, 'Đoàn Văn P', '2023-05-25', '0', 55, '46641213', NULL, '11000354', 'd5612', 2365, 0, 0, 0, NULL),
(34, 'Hồ Quang Ninh', '1968-05-12', 'Nữ', 26, '01163068', NULL, '54540326', '66Y-54561', 1, 0, 0, 0, NULL),
(36, 'Vũ Đình Duy', '2004-05-11', 'Nữ', 31, '345346', NULL, '235464', '20P-76587', 53, 0, 0, 0, NULL),
(37, 'Châu Tinh Trình', '1999-05-06', 'Nữ', 27, '013596946', NULL, '0011649663', '80K-56134', 50, 0, 0, 0, NULL),
(38, 'Đinh Thị Bưởi', '2005-05-21', 'female', 26, '00135966', NULL, '265611270', '67O-46513', 30, 0, 0, 0, NULL),
(39, 'Lý Thái Tổ', '1243-05-04', 'Nữ', 800, '000000000', NULL, '000000000', '00O-0000', 0, 0, 0, 0, NULL),
(40, 'Lê Bá Thông', '2023-05-29', 'Nam', 18, '016534946', 'aciw@gmail.com', '121234310', '29P-6562', 5000, 0, 0, 0, NULL),
(41, 'Nguyễn Nguyên', '2023-06-01', 'Nam', 20, '12616161', 'avx@gmail.com', '45464646', '26H-45564', 45, 0, 0, 0, NULL),
(42, 'a', '2023-06-02', 'Nam', 18, '12616161', 'aciw@gmail.com', '45464646', '29P-6562', 656, 0, 0, 0, NULL),
(78, 'Nguyễn Văn Tó', '2023-08-10', 'Nam', 19, '45678610', '14', '62763775', '3r21', 19, 1.57, 100, 1009, '2023-05-18'),
(79, 'Bùi Trường Kỳ', '2023-05-08', 'Nam', 34, '45464534', '', '45643255', '4g6', 5, 1.56, 70, 15, '2023-03-03'),
(80, 'Nghị Quốc Hiền', '2023-09-10', 'nam', 20, '43446366', '', '45422566', 'r44', 10, 1.79, 100, 20, NULL),
(81, 'Nhữ Chế Phương', '2023-05-09', 'Nữ', 24, '10872306', '', '13301578', '99l0', 2, 1.6, 50, 10, NULL),
(82, 'Cấn Hữu Minh', '2023-06-06', 'Nam', 14, '15051489', '', '16926649', '18p0', 23, 1.8, 60, 3, NULL),
(83, 'Dã Bảo Hân', '2023-05-09', 'Nam', 24, '13074010', '', '16391644', '12f34', 21, 1.3, 100, 30, NULL),
(84, 'Hi Hồng Nga', '2023-05-24', 'Nữ', 12, '12009599', '', '16982899', '6y7', 13, 1.5, 45, 5, NULL),
(85, 'Nguyễn Văn Tó', '2023-05-03', 'Nam', 14, '37242664', '', '327636746', '3r5', 3, NULL, NULL, NULL, NULL),
(86, 'Nguyễn Thị Thảo', '2023-05-11', 'Nam', 24, '973166263', '', '327362646', '2f34', 4, NULL, NULL, NULL, NULL),
(87, 'Nguyễn Thu', '2023-05-04', 'Nữ', 23, '1456765645', '', '6765676767', '67h', 76, NULL, NULL, NULL, NULL),
(88, 'vu', '2023-05-02', 'Nam', 1, '1', '', '1', '1', 1, NULL, NULL, NULL, NULL),
(89, 'frgev', '2023-05-09', 'Nam', 1, '1', '1', '1', '1', 1, NULL, NULL, NULL, NULL),
(90, 'vad', '2023-05-04', 'Khác', 32, '323', 'hiewf', '2', '1', 1, NULL, NULL, NULL, NULL),
(91, 'fw', '2023-05-03', 'Nam', 3, '32', '3', '3', '3', 3, NULL, NULL, NULL, NULL),
(92, '4g', '2023-05-12', 'Nam', 5, '5', '5', '5', '5', 5, NULL, NULL, NULL, NULL),
(93, 'Nguyễn Trạch Vân', '2023-06-08', 'Nữ', 18, '164095989', 'cic@gmail.com', '165464684', '43D-59561', 1000, NULL, NULL, NULL, NULL),
(94, 'Vương Chiến ', '2023-06-14', '1', 30, '0331646216', 'ds', '001202035487', '56M-46584', 12, NULL, NULL, NULL, NULL);

--
-- Bẫy `tbl_hoi_vien`
--
DELIMITER $$
CREATE TRIGGER `DELETE_card` AFTER DELETE ON `tbl_hoi_vien` FOR EACH ROW DELETE FROM card WHERE card.id_hv = old.id_hv
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `DELETE_snhv` AFTER DELETE ON `tbl_hoi_vien` FOR EACH ROW DELETE FROM tbl_sinh_nhat_hoi_vien WHERE tbl_sinh_nhat_hoi_vien.id_hv = old.id_hv
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `INSERT_snhv` AFTER INSERT ON `tbl_hoi_vien` FOR EACH ROW INSERT INTO `tbl_sinh_nhat_hoi_vien` (`id_hv`, `ten_hv`, `diem_tich_luy`, `ngay_sinh`) VALUES 
(new.id_hv, new.name_hv, new.diem_tich_luy, new.ngay_sinh)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `UPDATE_snhv` AFTER UPDATE ON `tbl_hoi_vien` FOR EACH ROW UPDATE tbl_sinh_nhat_hoi_vien SET tbl_sinh_nhat_hoi_vien.ten_hv = new.name_hv,
tbl_sinh_nhat_hoi_vien.diem_tich_luy = new.diem_tich_luy, tbl_sinh_nhat_hoi_vien.ngay_sinh = new.ngay_sinh WHERE  tbl_sinh_nhat_hoi_vien.id_hv = new.id_hv
$$
DELIMITER ;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_hoi_vien`
--
ALTER TABLE `tbl_hoi_vien`
  ADD PRIMARY KEY (`id_hv`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_hoi_vien`
--
ALTER TABLE `tbl_hoi_vien`
  MODIFY `id_hv` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
