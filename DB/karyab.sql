-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2025 at 06:11 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karyab`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `job` enum('انجنیر برق','فلز کار','آشپز','نجار','رنگمال','انجنیر مبایل','مستری','خیاط','کارگر','قالین شویی','عیار دیش','نما کار','بیکار') NOT NULL,
  `province` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `profile_photo` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL,
  `introduce` text CHARACTER SET utf16 COLLATE utf16_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `job`, `province`, `district`, `profile_photo`, `password`, `introduce`) VALUES
(1, 'خیرالله آزاد ', '0791242511', '', 'پنجشیر', 'خنچ', 'rtuetrte', '$2y$10$NQMBdgviF84atJNBqLwXR.ah6fXzGn4dH3ze3KrJgD6FD9r/65j7i', 'سلام من خیر لله استم در هر نوع فرمایشات شما در مورد دوخت ها پذیرفته میشود'),
(19, 'hamoid', '0792242511', '', 'تخار', 'فرخار', 'img-124.jpj', '$2y$10$xRQO5LnsBbZiD9mc1z2Mse9QA4VpIRMepWhCM12BNH7a.faL4RSlG', 'سلام من حنید استم در هر نوع فرمایشات شما در مورد دوخت ها پذیرفته میشود'),
(20, 'zahid', '0730607517', 'خیاط', 'تخار', 'تالقان', '', '12345678', 'سلام من زاهد استم در هر نوع فرمایشات شما در مورد دوخت ها پذیرفته میشود'),
(21, 'مطیع', '077223344', 'خیاط', 'کندز', 'کندز', '', '121212', 'سلام من مطیع الله استم در هر نوع فرمایشات شما در مورد دوخت ها پذیرفته میشود'),
(22, 'فرزاد', '0730607767', 'خیاط', 'تخار', 'تالقان', '', '2323', 'سلام من فرزاد استم در هر نوع فرمایشات شما در مورد دوخت ها پذیرفته میشود'),
(23, 'زاهد دیوانه', '0730607767', 'خیاط', 'بعلان', 'پل خمری', '', '1212', 'سلام ن سیبمکنتشسیبش\r\nسی\r\nبش\r\nسی\r\nبشسیب\r\nسیبتشسنمیتباسیشنتبا سی'),
(24, 'خبیب', '0730607767', 'کارگر', 'تخار', 'ورسج', '', '12323', 'سلام من یبشسیب\r\nشسیبشتنسیابتشسیکبم شمنسیت بکشنسیتب کشسینبت شکسیمب ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
