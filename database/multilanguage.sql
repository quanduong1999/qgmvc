-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2020 at 02:51 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multilanguage`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(10) NOT NULL,
  `en` varchar(64) CHARACTER SET utf8 NOT NULL,
  `vn` varchar(1000) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `en`, `vn`) VALUES
(4, 'CONTACT', 'LIÊN HỆ'),
(5, 'ORDERING GUIDE', 'HƯỚNG DẪN ĐẶT HÀNG'),
(6, 'REGISTRATION', 'ĐĂNG KÝ'),
(7, 'LOG IN', 'ĐĂNG NHẬP'),
(8, 'HOME PAGE', 'Trang Chủ'),
(9, 'BRAND SHOES', 'GIÀY HIỆU'),
(10, 'SPORT SHOES', 'GIÀY THỂ THAO '),
(11, 'SOCCER SHOES', 'GIÀY BÓNG ĐÁ'),
(12, 'LIVE SPORT', 'LIVE SPORT'),
(13, 'Cart', 'Giỏ hàng');

-- --------------------------------------------------------

--
-- Table structure for table `selected_lang`
--

CREATE TABLE `selected_lang` (
  `id` int(10) NOT NULL,
  `ln` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `selected_lang`
--

INSERT INTO `selected_lang` (`id`, `ln`) VALUES
(1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `selected_lang`
--
ALTER TABLE `selected_lang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `selected_lang`
--
ALTER TABLE `selected_lang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
