-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2023 at 03:51 PM
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
-- Table structure for table `tbl_notice`
--

CREATE TABLE `tbl_notice` (
  `id` int(11) NOT NULL,
  `notice` mediumtext DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `addAt` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_notice`
--

INSERT INTO `tbl_notice` (`id`, `notice`, `status`, `addAt`) VALUES
(1, 'Đây là 1 thông báo rất quan trọng yêu cầu anh em chú ý đọc thật kỹ nhá :V', 1, '2023-05-07 16:58:16'),
(2, 'Tình hình dịch bệnh bây giờ rất phức tạp anh em không nên chủ quan. Thực hiện nghiêm túc 2k của bộ Y tế', 1, '2023-05-06 16:59:21'),
(3, 'chào ae nhá', 1, '2023-05-09 22:08:03'),
(4, 'con gừng', 1, '2023-05-09 22:09:11'),
(5, 'Tôi có thông báo mới cho ae đay', 1, '2023-05-09 22:16:50'),
(19, 'Ae nhập text vào ô bên cạnh thông báo nhá', 1, '2023-05-13 20:50:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_notice`
--
ALTER TABLE `tbl_notice`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_notice`
--
ALTER TABLE `tbl_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
