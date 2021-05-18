-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2020 at 07:35 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workshop_work_io`
--
CREATE DATABASE IF NOT EXISTS `workshop_work_io` DEFAULT CHARACTER SET utf32 COLLATE utf32_general_ci;
USE `workshop_work_io`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_emp`
--

CREATE TABLE `tbl_emp` (
  `m_id` int(11) NOT NULL,
  `m_username` varchar(50) NOT NULL,
  `m_password` varchar(50) NOT NULL,
  `m_firstname` varchar(50) NOT NULL,
  `m_name` varchar(100) NOT NULL,
  `m_lastname` varchar(100) NOT NULL,
  `m_position` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `m_phone` varchar(20) NOT NULL,
  `m_email` varchar(50) NOT NULL,
  `m_level` varchar(10) NOT NULL,
  `m_datesave` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_emp`
--

INSERT INTO `tbl_emp` (`m_id`, `m_username`, `m_password`, `m_firstname`, `m_name`, `m_lastname`, `m_position`, `img`, `m_phone`, `m_email`, `m_level`, `m_datesave`) VALUES
(1, '111', '111', 'นาย', 'ทดสอบ', 'ระบบ', 'โปรแกรมเมอร์', 'e1.png', '0948616709', 'ee@gmail.com', 'staff', '2020-03-24'),
(2, '222', '222', 'นาย', 'พนง.', 'ในบริษัท', 'โปรแกรมเมอร์', 'e2.png', '0948616709', 'wev@gmail.com', 'staff', '2020-03-24'),
(3, '333', '333', 'นางสาว', 'frontend', 'dd', 'frontend', 'e3.png', '0948616709', 'den@gmail.com', 'staff', '2020-03-24'),
(4, '444', '444', 'นาย', 'admin', 'naja', 'admin', 'e1.png', '0948616709', 'dena@gmail.com', 'admin', '2020-03-24 ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_work_io`
--

CREATE TABLE `tbl_work_io` (
  `id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL COMMENT 'ไอดี พนง.',
  `workdate` date NOT NULL,
  `workin` time NOT NULL,
  `workout` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `tbl_work_io`
--

INSERT INTO `tbl_work_io` (`id`, `m_id`, `workdate`, `workin`, `workout`) VALUES
(1, 1, '2020-03-21', '11:55:34', '12:01:19'),
(2, 2, '2020-03-23', '12:07:05', '12:07:45'),
(3, 3, '2020-03-24', '12:19:03', NULL),
(4, 1, '2020-03-22', '13:14:23', '13:15:02'),
(5, 1, '2020-03-23', '13:27:14', '13:28:27'),
(6, 1, '2020-03-24', '13:32:04', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_emp`
--
ALTER TABLE `tbl_emp`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `tbl_work_io`
--
ALTER TABLE `tbl_work_io`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_emp`
--
ALTER TABLE `tbl_emp`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_work_io`
--
ALTER TABLE `tbl_work_io`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
