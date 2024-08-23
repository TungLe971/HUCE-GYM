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
-- Cấu trúc bảng cho bảng `card`
--

CREATE TABLE `card` (
  `card_id` int(50) NOT NULL,
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

--
-- Đang đổ dữ liệu cho bảng `card`
--

INSERT INTO `card` (`card_id`, `status`, `packages`, `quantity`, `types_room`, `time_start`, `time_end`, `id_hv`, `id_nv`, `time_private`, `total_money`) VALUES
(16, 0, 'advance', 10, 'Swimming', '2022-04-04', '2023-07-04', '16', '7', NULL, 2030000),
(21, 1, 'basic', 10, 'Aerobic', '2023-02-05', '2024-04-05', '21', '8', NULL, 500000),
(22, 0, '6 tháng', 12, 'Gym', '2023-04-05', '2023-10-05', '22', '2', NULL, 600000),
(23, 1, 'average', 65, 'Swimming', '2023-02-05', '2024-04-05', '23', '1', NULL, 50000),
(24, 0, '6 tháng', 3, 'Gym', '2022-08-19', '2023-02-12', '24', '3', NULL, 210000),
(25, 0, 'average', 10, 'Yoga', '2023-04-21', '2023-07-21', '25', '4', NULL, 600000),
(101, 1, '2 tháng', 10, 'Boxing', '2023-09-02', '2023-11-02', '28', '12', NULL, 10000),
(108, 0, 'average', 10, 'Swimming', '2023-04-04', '2023-07-04', '2', '2', NULL, 200000),
(109, 1, '1 năm', 40, 'Gym', '2022-02-05', '2024-04-05', '3', '3', 60, 1000000),
(110, 1, 'average', 20, 'Boxing', '2023-02-05', '2024-04-05', '4', '4', NULL, 100000),
(111, 1, 'advance', 16, 'Yoga', '2023-01-01', '2023-04-02', '5', '5', NULL, 300000),
(112, 0, 'basic', 45, 'Yoga', '2023-02-12', '2023-10-12', '6', '6', NULL, 265000),
(113, 1, 'advance', 10, 'Boxing', '2023-02-05', '2024-07-05', '7', '7', NULL, 500000),
(114, 0, '6 tháng', 12, 'Gym', '2023-04-05', '2023-10-05', '8', '8', NULL, 600000),
(115, 1, 'average', 65, 'Swimming', '2022-02-05', '2023-04-05', '9', '3', NULL, 500000),
(116, 0, '6 tháng', 3, 'Gym', '2023-04-19', '2023-10-12', '10', '2', NULL, 210000),
(117, 0, 'average', 10, 'Yoga', '2023-01-06', '2023-02-12', '11', '9', NULL, 100000),
(118, 1, '3 tháng', 43, 'Gym', '2023-04-15', '2023-07-15', '12', '1', NULL, 600000),
(119, 0, 'advance', 10, 'Yoga', '2022-04-21', '2023-04-21', '13', '10', NULL, 600000),
(120, 1, 'basic', 23, 'Aerobic', '2023-04-04', '2023-05-04', '14', '12', NULL, 1200000),
(121, 1, 'advance', 50, 'Boxing', '2022-04-03', '2023-07-03', '15', '11', NULL, 2400000),
(123, 1, '1 năm', 40, 'Gym', '2023-04-05', '2024-04-05', '17', '14', 60, 100000),
(124, 1, 'advance', 25, 'Aerobic', '2023-02-05', '2024-04-05', '18', '12', NULL, 1000000),
(125, 1, 'advance', 35, 'Yoga', '2023-04-01', '2023-04-02', '19', '3', NULL, 3300000),
(126, 0, 'basic', 45, 'Yoga', '2023-12-12', '2023-02-12', '20', '13', NULL, 450000),
(132, 1, 'basic', 23, 'Swimming', '2023-04-04', '2023-10-04', '26', '16', NULL, 1200000),
(133, 1, 'basic', 50, 'Boxing', '2023-04-03', '2024-04-03', '27', '17', NULL, 2400000),
(135, 0, 'basic', 10, 'Aerobic', '2023-04-04', '2023-07-04', '29', '11', NULL, 2030000),
(136, 1, 'basic', 10, 'Aerobic', '2023-02-05', '2024-04-05', '30', '10', NULL, 500000),
(137, 0, '6 tháng', 12, 'Gym', '2023-04-05', '2023-10-05', '31', '6', NULL, 600000),
(138, 1, '3 tháng', 43, 'Gym', '2023-04-15', '2023-07-15', '32', '2', NULL, 600000),
(139, 0, '2 tháng', 645, 'Gym', '2023-02-05', '2024-04-05', '33', '1', NULL, 500000),
(140, 0, '49000', 2, 'Gym', '2023-05-30', '2023-05-30', '1', '1', NULL, 200000),
(143, 0, '70000', 2, 'Yoga', '2023-12-31', '2023-12-31', '38', '3', NULL, 140000);

--
-- Bẫy `card`
--
DELIMITER $$
CREATE TRIGGER `insert_dtl` AFTER INSERT ON `card` FOR EACH ROW UPDATE tbl_hoi_vien SET tbl_hoi_vien.diem_tich_luy = new.total_money/1000 WHERE tbl_hoi_vien.id_hv = new.id_hv
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_tich_diem` AFTER UPDATE ON `card` FOR EACH ROW UPDATE tbl_hoi_vien SET tbl_hoi_vien.diem_tich_luy = new.total_money/1000 WHERE tbl_hoi_vien.id_hv = new.id_hv
$$
DELIMITER ;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`card_id`),
  ADD UNIQUE KEY `id_hv_2` (`id_hv`),
  ADD KEY `id_hv` (`id_hv`),
  ADD KEY `id_nv` (`id_nv`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `card`
--
ALTER TABLE `card`
  MODIFY `card_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
