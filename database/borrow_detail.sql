-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2017 at 05:02 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bait`
--

-- --------------------------------------------------------

--
-- Table structure for table `borrow_detail`
--

CREATE TABLE `borrow_detail` (
  `id` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  `id_reader` int(11) NOT NULL,
  `borrow_date` datetime DEFAULT NULL,
  `return_date` datetime DEFAULT NULL,
  `is_return` tinyint(1) NOT NULL,
  `is_keep` tinyint(1) NOT NULL,
  `expire_date` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `borrow_detail`
--

INSERT INTO `borrow_detail` (`id`, `id_book`, `id_reader`, `borrow_date`, `return_date`, `is_return`, `is_keep`, `expire_date`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL, 2, 1, '2017-12-11 10:54:06', '2017-12-12 10:55:36', '2017-12-13 21:12:04'),
(2, 4, 1, '2017-12-11 12:22:40', '2017-12-12 12:22:38', 0, 0, NULL, '2017-12-12 13:28:51', '2017-12-13 21:12:46'),
(3, 2, 4, NULL, NULL, 2, 1, '2017-12-10 13:28:56', '2017-12-12 13:29:30', '2017-12-13 21:12:11'),
(4, 8, 6, '2017-12-13 23:01:55', '2017-12-20 23:01:55', 0, 0, NULL, '2017-12-13 12:25:18', '2017-12-13 23:01:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `borrow_detail`
--
ALTER TABLE `borrow_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_brdetail_reader` (`id_reader`),
  ADD KEY `id_book` (`id_book`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `borrow_detail`
--
ALTER TABLE `borrow_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `borrow_detail`
--
ALTER TABLE `borrow_detail`
  ADD CONSTRAINT `borrow_detail_ibfk_1` FOREIGN KEY (`id_book`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `fk_brdetail_reader` FOREIGN KEY (`id_reader`) REFERENCES `readers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
