-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 06, 2022 lúc 09:23 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `1951061106_university`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien`
--

CREATE TABLE `giangvien` (
  `mgv` int(10) NOT NULL,
  `hovaten` varchar(100) NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` varchar(10) NOT NULL,
  `trinhdo` varchar(100) NOT NULL,
  `chuyenmon` varchar(100) NOT NULL,
  `hocham` varchar(100) NOT NULL,
  `hocvi` varchar(100) NOT NULL,
  `coquan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `giangvien`
--

INSERT INTO `giangvien` (`mgv`, `hovaten`, `ngaysinh`, `gioitinh`, `trinhdo`, `chuyenmon`, `hocham`, `hocvi`, `coquan`) VALUES
(2, 'tùng', '2001-03-18', '1', 'đại học', 'cntt', '1', '1', 'dhtl'),
(3, 'Anh', '2001-06-06', 'nữ', 'đại học', 'cntt', '1', '1', 'dhbk'),
(4, 'Dương', '2001-07-20', 'nam', 'cao đẳng', 'kt', '1', '1', 'cdbn'),
(9, 'Ngọc', '2001-01-01', 'nữ', 'dh', 'qtkd', '1', '1', 'dhqg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`mgv`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  MODIFY `mgv` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
