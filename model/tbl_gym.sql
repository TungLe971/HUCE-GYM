-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2023 at 06:14 PM
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
-- Table structure for table `tbl_gym`
--

CREATE TABLE `tbl_gym` (
  `id` int(11) NOT NULL,
  `1_lan` text NOT NULL,
  `1_thang` text NOT NULL,
  `3_thang` text NOT NULL,
  `6_thang` text NOT NULL,
  `1_nam` text NOT NULL,
  `2_nam` text NOT NULL,
  `5_nam` text NOT NULL,
  `gym_rieng` text NOT NULL,
  `yoga_basic` text NOT NULL,
  `yoga_average` text NOT NULL,
  `yoga_advance` text NOT NULL,
  `yoga_rieng` text NOT NULL,
  `aerobic_basic` text NOT NULL,
  `aerobic_average` text NOT NULL,
  `aerobic_advance` text NOT NULL,
  `aerobic_rieng` text NOT NULL,
  `boxing_basic` text NOT NULL,
  `boxing_average` text NOT NULL,
  `boxing_advance` text NOT NULL,
  `boxing_rieng` text NOT NULL,
  `swimming_basic` text NOT NULL,
  `swimming_average` text NOT NULL,
  `swimming_advance` text NOT NULL,
  `swimming_rieng` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_gym`
--

INSERT INTO `tbl_gym` (`id`, `1_lan`, `1_thang`, `3_thang`, `6_thang`, `1_nam`, `2_nam`, `5_nam`, `gym_rieng`, `yoga_basic`, `yoga_average`, `yoga_advance`, `yoga_rieng`, `aerobic_basic`, `aerobic_average`, `aerobic_advance`, `aerobic_rieng`, `boxing_basic`, `boxing_average`, `boxing_advance`, `boxing_rieng`, `swimming_basic`, `swimming_average`, `swimming_advance`, `swimming_rieng`) VALUES
(2, '49k', '200k', '500k', '1000k', '2000k', '4400k', '10000k', '50k/h', '50k/buổi', '70k/buổi', '100k/buổi', '100k extra', '50k/buổi', '70k/buổi', '100k/buổi', '100k extra', '50k/buổi', '70k/buổi', '100k/buổi', '150k extra', '50k/buổi', '70k/buổi', '100k/buổi', '200k extra');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_gym`
--
ALTER TABLE `tbl_gym`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_gym`
--
ALTER TABLE `tbl_gym`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
