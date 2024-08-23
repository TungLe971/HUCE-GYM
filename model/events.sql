-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2023 at 09:10 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

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
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `noi_dung` varchar(500) DEFAULT NULL,
  `nguoi_tao` varchar(100) DEFAULT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `noi_dung`, `nguoi_tao`, `start`, `end`) VALUES
(23, 'Tặng 1 tỷ', 'Tập 1 tiếng tại hucegym tặng 1 tỷ .... zimbabwe', 'Cao Văn Thấp', '2023-06-02', '2023-06-03'),
(24, 'phờ ri nước', 'tập 1 tiếng uống nước free cả đời', 'Nguyễn Khả Ngân', '2023-06-01', '2023-06-02'),
(25, 'tặng 10 tỷ', 'đấm chủ phòng tặng 10 tỷ', 'Trần Thanh sơn', '2023-06-08', '2023-06-09'),
(26, 'tặng 100 tỷ', 'cọ nhà vệ sinh nhận 100 tỷ', 'Nguyễn Nhàn', '2023-06-09', '2023-06-10'),
(27, 'tặng 10000 tỷ', 'Đấm chủ phòng tặng 100 tỷ', 'Cao Văn Thấp', '2023-06-03', '2023-06-04'),
(28, 'tặng 1 đấm', 'uống 10 lít rượi tặng 1 đấm', 'Vũ Minh Đức', '2023-06-23', '2023-06-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
