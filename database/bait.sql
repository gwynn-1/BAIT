-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2017 at 07:37 AM
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
-- Table structure for table `blog_news`
--

CREATE TABLE `blog_news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `detail` text,
  `id_type` int(11) NOT NULL,
  `author` varchar(150) DEFAULT NULL,
  `image` varchar(150) DEFAULT '',
  `total` int(11) DEFAULT NULL,
  `available` int(11) DEFAULT NULL,
  `borrow_time` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `detail`, `id_type`, `author`, `image`, `total`, `available`, `borrow_time`, `created_at`, `updated_at`) VALUES
(1, 'Đánh thức con người phi thường trong bạn', '<p>s&aacute;ch mới</p>\r\n\r\n<p><img alt=\"\" src=\"http://bait.vn/book_image/tren-duong-bang.jpg\" style=\"height:600px; width:800px\" /></p>', 1, 'Anthony Robbins', NULL, 20, 20, 7, '2017-12-08 17:31:43', '2017-12-11 10:31:31'),
(2, 'Bốn mùa cuộc sống - Châm ngôn ngày mới', 'sách mới', 1, 'Jim Rohn', '', 20, 20, 7, '2017-12-08 17:31:43', '2017-12-08 17:32:06'),
(3, 'Biến lạ thành quen', 'sách mới', 1, 'Vũ Quần Phương', '', 20, 20, 7, '2017-12-08 17:31:43', '2017-12-08 17:32:06'),
(4, 'Quốc gia khởi nghiệp', 'sách mới', 1, 'Dan Senor, Saul Singer', '', 20, 20, 7, '2017-12-08 17:31:44', '2017-12-08 17:32:06'),
(5, 'Người thông minh học tập như thế nào?', 'sách mới', 1, 'Ronald Gross', '', 20, 20, 7, '2017-12-08 17:31:44', '2017-12-08 17:32:06'),
(6, 'Hạnh phúc ở quanh ta', 'sách mới', 1, 'Nguyệt Hòa', '', 20, 20, 7, '2017-12-08 17:31:44', '2017-12-08 17:32:06'),
(7, 'Bí mật trị vì vương quốc đến quản lí công ty', 'sách mới', 1, 'Shedon Bowles – Richard Silvano – Susan Silvano', '', 20, 20, 7, '2017-12-08 17:31:44', '2017-12-08 17:32:07'),
(8, 'Nếu tôi biết được khi còn 20', 'sách mới', 1, 'Tina Seelig', '', 20, 20, 7, '2017-12-08 17:31:44', '2017-12-08 17:32:07'),
(9, 'Đúng việc', 'sách mới', 1, 'Giản Tư Trung', '', 20, 20, 7, '2017-12-08 17:31:44', '2017-12-08 17:32:07'),
(10, 'Đừng bao giờ đi ăn một mình', 'sách mới', 1, 'Keith Ferrazzi', '', 20, 20, 7, '2017-12-08 17:31:44', '2017-12-08 17:32:07'),
(11, 'Mỗi ngày tiết kiệm một giờ', 'sách mới', 1, 'Michael Heppell', '', 20, 20, 7, '2017-12-08 17:31:44', '2017-12-08 17:32:07'),
(12, 'Những quyết định thay đổi cuộc sống', 'sách mới', 1, 'Spencer Johnson', '', 20, 20, 7, '2017-12-08 17:31:44', '2017-12-08 17:32:07'),
(13, 'Lời hứa về một cây bút chì', 'sách mới', 1, 'Adam Braun', '', 20, 20, 7, '2017-12-08 17:31:44', '2017-12-08 17:32:07'),
(14, 'Khai sinh nhà đổi mới', 'sách mới', 1, 'Tony Wagner', '', 20, 20, 7, '2017-12-08 17:31:44', '2017-12-08 17:32:07'),
(15, 'Nói nhiều không bằng nói đúng', 'sách mới', 1, '2.1/2 Bạn Tốt', '', 20, 20, 7, '2017-12-08 17:31:44', '2017-12-08 17:32:07'),
(16, 'KAIZEN TEIAN', 'sách mới', 1, 'Japan Human Relations Association', '', 20, 20, 7, '2017-12-08 17:31:44', '2017-12-08 17:32:07'),
(17, 'Cẩm nang nhà tự nhiên kinh tế', 'sách mới', 1, 'Robert H.Frank', '', 20, 20, 7, '2017-12-08 17:31:44', '2017-12-08 17:32:07'),
(18, 'Cái dũng của thánh nhân', 'sách mới', 1, 'Thu Giang Nguyễn Duy Cần', '', 20, 20, 7, '2017-12-08 17:31:44', '2017-12-08 17:32:07'),
(19, 'Nghệ thuật dùng người', 'sách mới', 1, 'Trung Nghĩa', '', 20, 20, 7, '2017-12-08 17:31:44', '2017-12-08 17:32:07'),
(20, 'Nghệ thuật giao tiếp để thành công', 'sách mới', 1, 'Leil Lowndes', '', 20, 20, 7, '2017-12-08 17:31:44', '2017-12-08 17:32:07'),
(21, 'Đường đến thành công', 'sách mới', 1, 'Inamori Kazuo', '', 20, 20, 7, '2017-12-08 17:31:44', '2017-12-08 17:32:07'),
(22, 'Những kĩ năng thực hành xã hội cần thiết cho sinh viên', 'sách mới', 1, 'Nhiều tác giả', '', 20, 20, 7, '2017-12-08 17:31:44', '2017-12-08 17:32:07'),
(23, 'Trí tuệ thông thái', 'sách mới', 1, 'Eran Katz', '', 20, 20, 7, '2017-12-08 17:31:44', '2017-12-08 17:32:08'),
(24, 'Sinh viên! Bạn là Sư tử hay Thỏ', 'sách mới', 1, 'Nguyễn Đức', '', 20, 20, 7, '2017-12-08 17:31:45', '2017-12-08 17:32:08'),
(25, 'Suối nguồn tươi trẻ 2', 'sách mới', 1, 'Peter Kelder', '', 20, 20, 7, '2017-12-08 17:31:45', '2017-12-08 22:56:24'),
(26, 'Quản lí xuyên văn hóa', 'sách mới', 1, 'Charlene M. Solomon - Michael S. Schell', '', 20, 20, 7, '2017-12-08 17:31:45', '2017-12-08 17:32:08'),
(27, 'Đời thay đổi khi chúng ta thay đổi', 'sách mới', 1, 'Andrew Matthews', '', 20, 20, 7, '2017-12-08 17:31:45', '2017-12-08 17:32:08'),
(28, 'Phụng sự để dẫn đầu', 'sách mới', 1, 'James M. Strock', '', 20, 20, 7, '2017-12-08 17:31:45', '2017-12-08 17:32:08'),
(29, 'Biết ta đích thực là ai?', 'sách mới', 1, 'Alan Watts', '', 20, 20, 7, '2017-12-08 17:31:45', '2017-12-08 17:32:08'),
(30, '7 loại hình thông minh', 'sách mới', 1, 'Thomas Armstrong', '', 20, 20, 7, '2017-12-08 17:31:45', '2017-12-08 17:32:08'),
(31, '20 tuổi quyết định cuộc đời người đàn ông', 'sách mới', 1, 'Đỗ Bằng Trình', '', 20, 20, 7, '2017-12-08 17:31:45', '2017-12-08 17:32:08'),
(32, 'Cà phê cùng Tony', 'sách mới', 1, 'Tony Buổi Sáng', 'ca-phe-cung-tony-1512739481.jpg', 20, 20, 7, '2017-12-08 17:35:00', '2017-12-08 20:24:41'),
(33, 'Nhà Giả Kim', 'sách mới', 1, 'Paulo Coelho', 'nha-gia-kim.jpg', 20, 20, 7, '2017-12-08 17:31:45', '2017-12-08 17:32:08'),
(34, 'Khai sinh nhà đổi mới', 'sách mới', 1, 'Tony Wagner', '', 20, 20, 7, '2017-12-08 17:31:45', '2017-12-08 17:32:08'),
(35, 'Lối tư duy của người thông minh', 'sách mới', 1, 'Art Markman', '', 20, 20, 7, '2017-12-08 17:31:45', '2017-12-08 17:32:08'),
(37, 'Trên đường băng', 'sách mới', 1, 'Tony Buổi Sáng', 'tren-duong-bang.jpg', 20, 20, 7, '2017-12-08 17:31:45', '2017-12-08 17:32:08'),
(38, 'Chiến tranh và hòa bình', 'sách mới', 2, 'Leo Tolstoy', '', 20, 20, 7, '2017-12-08 17:31:45', '2017-12-08 17:32:08'),
(39, 'Thề ước thầm lặng', 'sách mới', 2, 'Catherine Bybee', '', 20, 20, 7, '2017-12-08 17:31:45', '2017-12-08 17:32:09'),
(40, 'Lục tiểu linh đồng - tập 1', 'sách mới', 2, 'Lục Tiểu Linh Đồng', '', 20, 20, 7, '2017-12-08 17:31:45', '2017-12-08 17:32:09'),
(41, 'Thơ văn Hồ Chí Minh', 'sách mới', 2, '', '', 20, 20, 7, '2017-12-08 17:31:45', '2017-12-08 17:32:09'),
(42, 'Bơ đi mà sống', 'sách mới', 2, 'Mèo Xù', 'bo-di-ma-song.jpg', 20, 20, 7, '2017-12-08 17:31:45', '2017-12-08 17:32:09'),
(43, 'Bài học đầu tiên', 'sách mới', 2, 'Trần Thị Hồng Hạnh', '', 20, 20, 7, '2017-12-08 17:31:45', '2017-12-08 17:32:09'),
(44, 'Danh ngôn thế giới', 'sách mới', 2, 'Kim Dung', '', 20, 20, 7, '2017-12-08 17:31:46', '2017-12-08 17:32:09'),
(45, 'Xin hãy cho con thêm thời gian', 'sách mới', 2, 'Tố Oanh và nhiều tác giả', '', 20, 20, 7, '2017-12-08 17:31:46', '2017-12-08 17:32:09'),
(46, 'Chiếc đồng hồ cúc cu', 'sách mới', 2, '', '', 20, 20, 7, '2017-12-08 17:31:46', '2017-12-08 17:32:09'),
(47, 'Chúng ta rồi sẽ ổn thôi', 'sách mới', 2, 'Gào - Minh Nhật', '', 20, 20, 7, '2017-12-08 17:31:46', '2017-12-08 17:32:09'),
(48, 'Em độc thân em kiêu hãnh', 'sách mới', 2, 'Tuệ Nhi', 'em-doc-than-em-kieu-hanh-1512739351.jpg', 20, 20, 7, '2017-12-08 17:31:46', '2017-12-08 20:22:31'),
(49, 'A beautiful bad girl', 'sách mới', 2, 'Thùy Chi', '', 20, 20, 7, '2017-12-08 17:31:46', '2017-12-08 17:32:09'),
(50, 'Cô bé Fadette', 'sách mới', 2, 'George Sand', '', 20, 20, 7, '2017-12-08 17:31:46', '2017-12-08 17:32:09'),
(51, 'Tiếng chim hót trong bụi mận gai 1', 'sách mới', 2, 'Colleen McCullough', '', 20, 20, 7, '2017-12-08 17:31:46', '2017-12-08 17:32:09'),
(52, 'Những giấc mơ xanh', 'sách mới', 2, 'Nguyễn Công Kiệt', '', 20, 20, 7, '2017-12-08 17:31:46', '2017-12-08 17:32:09'),
(53, 'Lối đi ngay dưới chân mình', 'sách mới', 2, 'Nguyễn Lê My Hoàn', '', 20, 20, 7, '2017-12-08 17:31:46', '2017-12-08 17:32:10'),
(54, 'Vang bóng một thời', 'sách mới', 2, 'Nguyễn Tuân', '', 20, 20, 7, '2017-12-08 17:31:46', '2017-12-08 17:32:10'),
(55, 'Ngày trôi về phía cũ', 'sách mới', 2, 'Anh Khang', '', 20, 20, 7, '2017-12-08 17:31:46', '2017-12-08 17:32:10'),
(56, 'Ba chàng ngốc', 'sách mới', 2, 'Chetan Bhagat', '', 20, 20, 7, '2017-12-08 17:31:46', '2017-12-08 17:32:10'),
(57, 'Trở về EDEN', 'sách mới', 2, 'Rosalind Miles', '', 20, 20, 7, '2017-12-08 17:31:46', '2017-12-08 17:32:10'),
(58, 'Nhà thờ Đưc bà PARIS', 'sách mới', 2, 'Victor Hugo', '', 20, 20, 7, '2017-12-08 17:31:46', '2017-12-08 17:32:10'),
(60, 'Tôi nghĩ tôi thích nước Mỹ', 'sách mới', 2, 'Dương Thụy', '', 20, 20, 7, '2017-12-08 17:31:46', '2017-12-08 17:32:10'),
(61, 'Quà tặng của cuộc sống', 'sách mới', 2, 'Nhiều tác giả', '', 20, 20, 7, '2017-12-08 17:31:46', '2017-12-08 17:32:10'),
(62, 'Chiếc áo lặn và con bướm', 'sách mới', 2, 'Jean Dominique Bauby', '', 20, 20, 7, '2017-12-08 17:31:47', '2017-12-08 17:32:10'),
(63, 'Trui rèn trong Biển Đỏ', 'sách mới', 2, '', '', 20, 20, 7, '2017-12-08 17:31:47', '2017-12-08 17:32:10'),
(64, 'Tình bạn', 'sách mới', 2, '', '', 20, 20, 7, '2017-12-08 17:31:47', '2017-12-08 17:32:10'),
(65, 'Tôội lỗi dưới ánh mặt trời', 'sách mới', 2, 'Agatha Christie', '', 20, 20, 7, '2017-12-08 17:31:47', '2017-12-08 17:32:10'),
(66, 'Bí ẩn về con chó lúc nủa đêm', 'sách mới', 2, 'Mark Haddon.', '', 20, 20, 7, '2017-12-08 17:31:47', '2017-12-08 17:32:10'),
(67, 'Rừng NaUy', 'sách mới', 2, 'Haruki Murakami', '', 20, 20, 7, '2017-12-08 17:31:47', '2017-12-08 17:32:10'),
(68, 'Cuộc chiến tranh bắt buộc', 'sách mới', 2, 'Theo Lao Động', '', 20, 20, 7, '2017-12-08 17:31:47', '2017-12-08 17:32:10'),
(69, '5 tuần trên kinh khí cầu', 'sách mới', 2, 'Jules Verne', '', 20, 20, 7, '2017-12-08 17:31:47', '2017-12-08 17:32:10'),
(70, 'Một câu chuyện chán đời buồn cười', 'sách mới', 2, 'Ned Vizzini', '', 20, 20, 7, '2017-12-08 17:31:47', '2017-12-08 17:32:10'),
(71, 'Trí thức Nam Bộ', 'sách mới', 2, '', '', 20, 20, 7, '2017-12-08 17:31:47', '2017-12-08 17:32:10'),
(72, '3 người lính ngự lâm', 'sách mới', 2, 'Alexander Dumas', '', 20, 20, 7, '2017-12-08 17:31:47', '2017-12-08 17:32:10'),
(73, 'Sẽ có cách đừng lo', 'sách mới', 2, 'Tuệ Nghi', '', 20, 20, 7, '2017-12-08 17:31:47', '2017-12-08 17:32:11'),
(74, 'Dường cái quan bút kí', 'sách mới', 2, 'Bùi Quang Đạt', '', 20, 20, 7, '2017-12-08 17:31:47', '2017-12-08 17:32:11'),
(75, 'Tình dại khờ', 'sách mới', 2, 'Ngũ Mỹ Trân', '', 20, 20, 7, '2017-12-08 17:31:47', '2017-12-08 17:32:11'),
(76, 'Mây chiều', 'sách mới', 2, '', '', 20, 20, 7, '2017-12-08 17:31:47', '2017-12-08 17:32:11'),
(77, 'Hãy can đảm và tốt bụng', 'sách mới', 2, 'Nhiều Tác Giả', '', 20, 20, 7, '2017-12-08 17:31:48', '2017-12-08 17:32:11'),
(78, 'Câu chuyện cà phê', 'sách mới', 2, '', '', 20, 20, 7, '2017-12-08 17:31:48', '2017-12-08 17:32:11'),
(79, 'Thư giãn cuối tuần', 'sách mới', 2, 'Nhiều Tác Giả', '', 20, 20, 7, '2017-12-08 17:31:48', '2017-12-08 17:32:11'),
(80, 'Lịch sử Việt Nam bằng tranh', 'sách mới', 2, 'Trần Bạch Đằng', '', 20, 20, 7, '2017-12-08 17:31:48', '2017-12-08 17:32:11'),
(81, '25 năm tôi làm việc ở CIA', 'sách mới', 2, 'Ralph W. McGehee', '', 20, 20, 7, '2017-12-08 17:31:48', '2017-12-08 17:32:11'),
(82, 'Cho một khởi đầu mới', 'sách mới', 2, 'Nhiều Tác Giả', '', 20, 20, 7, '2017-12-08 17:31:48', '2017-12-08 17:32:11'),
(83, 'TOEFL iBT', 'sách mới', 3, '', '', 20, 20, 7, '2017-12-08 17:31:48', '2017-12-08 17:32:11'),
(84, 'Cẩm nang tự học IELTS', 'sách mới', 3, '', '', 20, 20, 7, '2017-12-08 17:31:48', '2017-12-08 17:32:11'),
(85, 'TOEFL Junior Reading', 'sách mới', 3, '', '', 20, 20, 7, '2017-12-08 17:31:48', '2017-12-08 17:32:11'),
(86, 'TOEFL Junior Listening', 'sách mới', 3, '', '', 20, 20, 7, '2017-12-08 17:31:48', '2017-12-08 17:32:11'),
(87, 'Adventure at the castle 10b', 'sách mới', 3, '', '', 20, 20, 7, '2017-12-08 17:31:48', '2017-12-08 17:32:11'),
(88, 'ELON MUSK', 'sách mới', 4, 'Ashlee Vance', '', 20, 20, 7, '2017-12-08 17:31:48', '2017-12-08 17:32:11'),
(89, 'I-VAN TUÔC GHÊ-NHÉP', 'sách mới', 4, 'N.Bôgôxlốpxki', '', 20, 20, 7, '2017-12-08 17:31:48', '2017-12-08 17:32:11'),
(90, 'Mozart', 'sách mới', 4, 'Gil Ji Yeon - Choi Young Ran', '', 20, 20, 7, '2017-12-08 17:31:48', '2017-12-08 17:32:12'),
(91, 'Quê hương và gia thế của chủ tịch Hồ Chí Minh', 'sách mới', 4, 'Trần Minh Siêu', '', 20, 20, 7, '2017-12-08 17:31:48', '2017-12-08 17:32:12'),
(92, 'Võ Văn Kiệt trong lòng trí thức', 'sách mới', 4, '', '', 20, 20, 7, '2017-12-08 17:31:48', '2017-12-08 17:32:12'),
(93, 'Thư riêng của Bác Hồ', 'sách mới', 4, 'Trần Quân Ngọc', '', 20, 20, 7, '2017-12-08 17:31:48', '2017-12-08 17:32:12'),
(94, 'Bác Hồ con người và phong cách', 'sách mới', 4, 'Nguyễn Văn Khoan', '', 20, 20, 7, '2017-12-08 17:31:48', '2017-12-08 17:32:12'),
(95, 'CHÍNH XÁC', 'sách mới', 5, '', '', 20, 20, 7, '2017-12-08 17:31:48', '2017-12-08 17:32:12'),
(96, 'Lập trình Symbolic trong Trí tuệ nhân tạo', 'sách mới', 5, '', '', 20, 20, 7, '2017-12-08 17:31:48', '2017-12-08 17:32:12'),
(97, 'Nhập môn về kĩ thuật', 'sách mới', 5, '', '', 20, 20, 7, '2017-12-08 17:31:48', '2017-12-08 17:32:12');

-- --------------------------------------------------------

--
-- Table structure for table `book_type`
--

CREATE TABLE `book_type` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book_type`
--

INSERT INTO `book_type` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Kĩ năng', '2017-12-07 18:15:30', '2017-12-07 18:15:30'),
(2, 'Văn học', '2017-12-07 18:15:30', '2017-12-07 18:15:30'),
(3, 'Ngoại ngữ', '2017-12-07 18:15:30', '2017-12-07 18:15:30'),
(4, 'Danh nhân', '2017-12-07 18:15:30', '2017-12-07 18:16:14'),
(5, 'Khoa học - Công nghệ', '2017-12-07 18:15:30', '2017-12-07 18:15:30');

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
(2, 2, 4, NULL, NULL, 2, 1, '2017-12-10 13:28:56', '2017-12-12 13:29:30', '2017-12-13 21:12:11'),
(3, 4, 1, '2017-12-11 12:22:40', '2017-12-12 12:22:38', 0, 0, NULL, '2017-12-12 13:28:51', '2017-12-13 21:12:46'),
(4, 8, 6, '2017-12-13 23:01:55', '2017-12-21 23:01:55', 0, 0, NULL, '2017-12-13 12:25:18', '2017-12-17 10:24:18'),
(5, 14, 1, NULL, NULL, 2, 1, '2017-12-23 10:27:42', '2017-12-17 10:27:56', '2017-12-17 10:27:56');

-- --------------------------------------------------------

--
-- Table structure for table `comment_blog`
--

CREATE TABLE `comment_blog` (
  `id` int(11) NOT NULL,
  `id_reader` int(11) NOT NULL,
  `id_blog` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `comment_book`
--

CREATE TABLE `comment_book` (
  `id` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  `id_reader` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_05_10_130540_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Full', '2017-12-17 05:21:30', '2017-12-17 05:21:30'),
(2, 'Full but Users', '2017-12-17 05:22:23', '2017-12-17 05:22:23');

-- --------------------------------------------------------

--
-- Table structure for table `permission_roles`
--

CREATE TABLE `permission_roles` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_roles`
--

INSERT INTO `permission_roles` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `permission_users`
--

CREATE TABLE `permission_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `readers`
--

CREATE TABLE `readers` (
  `id` int(11) NOT NULL,
  `mssv` varchar(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `school` varchar(250) NOT NULL,
  `email` varchar(200) NOT NULL,
  `sdt` int(11) NOT NULL,
  `facebook` varchar(150) DEFAULT NULL,
  `password` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `readers`
--

INSERT INTO `readers` (`id`, `mssv`, `name`, `school`, `email`, `sdt`, `facebook`, `password`, `created_at`, `updated_at`) VALUES
(1, '15520464', 'Nguyễn Văn Lương', 'UIT', '15520464@gm.uit.edu.vn', 1634891751, '', 'not-null', '2017-12-12 10:39:46', '2017-12-12 10:42:11'),
(2, '16521387', 'Trần Hoàng Tuấn', 'UIT', '16521387@gm.uit.edu.vn', 1653888175, '', 'not-null', '2017-12-12 10:39:46', '2017-12-12 10:42:11'),
(3, '15520234', 'Nguyễn Văn Hiếu', 'UIT', '15520234@gm.uit.edu.vn', 1655253842, '', 'not-null', '2017-12-12 10:39:46', '2017-12-12 10:42:11'),
(4, '15520713', 'Đỗ Như Quỳnh', 'UIT', '15520713@gm.uit.edu.vn', 971415075, '', 'not-null', '2017-12-12 10:39:46', '2017-12-12 10:42:11'),
(5, '16521016', 'Dương Thị Xuân Quỳnh', 'UIT', '16521016@gm.uit.edu.vn', 1672711439, '', 'not-null', '2017-12-12 10:39:46', '2017-12-12 10:42:11'),
(6, '16520449', 'Trần Văn Hoàng', 'UIT', '16520449@gm.uit.edu.vn', 915498459, '', 'not-null', '2017-12-12 10:39:46', '2017-12-12 10:42:11'),
(7, '16521269', 'Nguyễn Sơn Trà', 'UIT', '16521269@gm.uit.edu.vn', 1664562396, '', 'not-null', '2017-12-12 10:39:46', '2017-12-12 10:42:11'),
(8, '16521340', 'Phan Nhật Trường', 'UIT', '16521340@gm.uit.edu.vn', 1697529049, '', 'not-null', '2017-12-12 10:39:46', '2017-12-12 10:42:11'),
(9, '16521287', 'Nguyễn Văn Trí', 'UIT', '16521287@gm.uit.edu.vn', 947654407, '', 'not-null', '2017-12-12 10:39:46', '2017-12-12 10:42:11'),
(10, '16520695', 'Phan Vĩnh Long', 'UIT', '16520695@gm.uit.edu.vn', 971823458, '', 'not-null', '2017-12-12 10:39:46', '2017-12-12 10:42:11'),
(11, '16521582', 'Nguyễn Đình Vinh', 'UIT', '16521582@gm.uit.edu.vn', 912033870, '', 'not-null', '2017-12-12 10:39:46', '2017-12-12 10:42:11'),
(12, 'K164020235', 'Lê Thị Hồ Thương', 'UEL', 'thuonglth16402@st.uel.edu.vn', 1666674293, '', 'not-null', '2017-12-12 10:39:46', '2017-12-12 10:42:12'),
(13, 'K164020239', 'Võ Thị Xuân Trang', 'UEL', 'trangvtx16402@st.uel.edu.vn', 1627713530, '', 'not-null', '2017-12-12 10:39:46', '2017-12-12 10:42:12'),
(14, 'K164020131', 'Phan Thị Như Hoa', 'UEL', 'hoaptn16402@st.uel.edu.vn', 1637984678, '', 'not-null', '2017-12-12 10:39:47', '2017-12-12 10:42:12'),
(15, '17520933', 'Võ Thị Ngọc Phương', 'UIT', '17520933@gm.uit.edu.vn', 1674434680, '', 'not-null', '2017-12-12 10:39:47', '2017-12-12 10:42:12'),
(16, '17521109', 'Lê Phan Vũ Thuận', 'UIT', '17521109@gm.uit.edu.vn', 1635162579, '', 'not-null', '2017-12-12 10:43:19', '2017-12-12 10:43:19'),
(17, '17520328', 'Trần Quang Đạo', 'UIT', '17520328@gm.uit.edu.vn', 1673599258, '', 'not-null', '2017-12-12 10:43:19', '2017-12-12 10:43:19'),
(18, '16521084', 'Trần Đình Tạo', 'UIT', 'trandinhtao1998@gmail.com', 1673206562, '', 'not-null', '2017-12-12 10:43:19', '2017-12-12 10:43:19'),
(19, '17520702', 'Nguyễn Huỳnh Lợi', 'UIT', '17520702@gm.uit.edu.vn', 961178682, '', 'not-null', '2017-12-12 10:43:19', '2017-12-12 10:43:19'),
(20, '16520191', 'Nguyễn Hữu Đạt', 'UIT', '16520191@gm.uit.edu.vn', 1629480055, '', 'not-null', '2017-12-12 10:43:19', '2017-12-12 10:43:19'),
(21, '17520926', 'Nguyễn Thị Bích Phượng', 'UIT', '17520926@gm.uit.edu.vn', 914129953, '', 'not-null', '2017-12-12 10:43:19', '2017-12-12 10:43:19'),
(22, '1656030112', 'Trần Thị Như Quỳnh', 'USSH', 'trannhuquynhbck16@gmail.com', 973003935, '', 'not-null', '2017-12-12 10:43:19', '2017-12-12 10:43:19'),
(23, '1756110054', 'Lê Huỳnh Tuyết Hương', 'USSH', 'toilamotmauxanh@gmail.com', 919177427, '', 'not-null', '2017-12-12 10:43:19', '2017-12-12 10:43:19'),
(24, '17520452', 'Vũ Anh Hào', 'UIT', '17520452@gm.uit.edu.vn', 928291447, '', 'not-null', '2017-12-12 10:43:19', '2017-12-12 10:43:19'),
(25, '17521295', 'Cáp Hữu Anh Đức', 'UIT', 'ken.manucian.125@gmail.com', 1245248345, '', 'not-null', '2017-12-12 10:43:19', '2017-12-12 10:43:19'),
(26, '14520786', 'Phùng Thanh Tài', 'UIT', 'taipt1301@gmail.com', 961118679, '', 'not-null', '2017-12-12 10:43:19', '2017-12-12 10:43:19'),
(27, '1757060071', 'Nguyễn Thị Mai Lan', 'USSH', 'nhoklan89810@gmail.com', 1692895398, '', 'not-null', '2017-12-12 10:43:20', '2017-12-12 10:43:20'),
(28, '16520373', 'Đặng Văn Hiệp', 'UIT', '16520373@gm.uit.edu.vn', 1237897572, '', 'not-null', '2017-12-12 10:43:20', '2017-12-12 10:43:20'),
(29, '17520929', 'Phan Lê Kim Phượng', 'UIT', '17520929@gm.uit.edu.vn', 934034906, '', 'not-null', '2017-12-12 10:43:20', '2017-12-12 10:43:20');

-- --------------------------------------------------------

--
-- Table structure for table `repcomment_blog`
--

CREATE TABLE `repcomment_blog` (
  `id` int(11) NOT NULL,
  `id_comment` int(11) NOT NULL,
  `id_reader` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `repcomment_book`
--

CREATE TABLE `repcomment_book` (
  `id` int(11) NOT NULL,
  `id_comment` int(11) NOT NULL,
  `id_reader` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2017-12-17 05:21:12', '2017-12-17 05:21:12'),
(2, 'Staff', '2017-12-17 05:21:45', '2017-12-17 05:21:45');

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE `role_users` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_users`
--

INSERT INTO `role_users` (`role_id`, `user_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Huy', 'huytranle13@gmail.com', '$2y$10$B08TU3sq1J2Xckv78/3.v.3OrKP6rsGgzouEqfWFM8J6qx9PvhLye', 'A40Ij7L6y6XPRMRTFNtI4Q8EyiRmSgHrPnFmYGqwuTwOatz066vFqFfWHWLr', '2017-12-17 05:19:59', '2017-12-17 05:19:59'),
(2, 'Huy Vĩnh', 'huylevinh13@gmail.com', '$2y$10$NmmArNFwcyllYoNFigXI/.1N/hxuZdai9uwcvDU9aMkmDOnpoY/ju', 'nIknCsDSKKRfmNuBsvhqICrGB3TrTOg8ntMyOYSfZN62eP3Dv3PJKB6iiWME', '2017-12-17 05:30:10', '2017-12-17 05:30:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_news`
--
ALTER TABLE `blog_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_books_booktype` (`id_type`);

--
-- Indexes for table `book_type`
--
ALTER TABLE `book_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borrow_detail`
--
ALTER TABLE `borrow_detail`
  ADD PRIMARY KEY (`id_book`,`id_reader`),
  ADD UNIQUE KEY `unique` (`id`),
  ADD KEY `fk_brdetail_reader` (`id_reader`,`id_book`) USING BTREE;

--
-- Indexes for table `comment_blog`
--
ALTER TABLE `comment_blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_blog` (`id_blog`),
  ADD KEY `id_reader` (`id_reader`);

--
-- Indexes for table `comment_book`
--
ALTER TABLE `comment_book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_book` (`id_book`),
  ADD KEY `id_reader` (`id_reader`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_roles`
--
ALTER TABLE `permission_roles`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_roles_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_users`
--
ALTER TABLE `permission_users`
  ADD PRIMARY KEY (`user_id`,`permission_id`),
  ADD KEY `permission_users_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `readers`
--
ALTER TABLE `readers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `repcomment_blog`
--
ALTER TABLE `repcomment_blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_comment` (`id_comment`),
  ADD KEY `id_reader` (`id_reader`);

--
-- Indexes for table `repcomment_book`
--
ALTER TABLE `repcomment_book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_comment` (`id_comment`),
  ADD KEY `id_reader` (`id_reader`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`role_id`,`user_id`),
  ADD KEY `role_users_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_news`
--
ALTER TABLE `blog_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
--
-- AUTO_INCREMENT for table `book_type`
--
ALTER TABLE `book_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `borrow_detail`
--
ALTER TABLE `borrow_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `comment_blog`
--
ALTER TABLE `comment_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comment_book`
--
ALTER TABLE `comment_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `readers`
--
ALTER TABLE `readers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `repcomment_blog`
--
ALTER TABLE `repcomment_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `repcomment_book`
--
ALTER TABLE `repcomment_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `FK_books_booktype` FOREIGN KEY (`id_type`) REFERENCES `book_type` (`id`);

--
-- Constraints for table `borrow_detail`
--
ALTER TABLE `borrow_detail`
  ADD CONSTRAINT `borrow_detail_ibfk_1` FOREIGN KEY (`id_book`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `borrow_detail_ibfk_2` FOREIGN KEY (`id_book`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `borrow_detail_ibfk_3` FOREIGN KEY (`id_book`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `fk_brdetail_reader` FOREIGN KEY (`id_reader`) REFERENCES `readers` (`id`);

--
-- Constraints for table `comment_blog`
--
ALTER TABLE `comment_blog`
  ADD CONSTRAINT `comment_blog_ibfk_1` FOREIGN KEY (`id_blog`) REFERENCES `blog_news` (`id`),
  ADD CONSTRAINT `comment_blog_ibfk_2` FOREIGN KEY (`id_reader`) REFERENCES `readers` (`id`);

--
-- Constraints for table `comment_book`
--
ALTER TABLE `comment_book`
  ADD CONSTRAINT `comment_book_ibfk_1` FOREIGN KEY (`id_book`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `comment_book_ibfk_2` FOREIGN KEY (`id_reader`) REFERENCES `readers` (`id`);

--
-- Constraints for table `permission_roles`
--
ALTER TABLE `permission_roles`
  ADD CONSTRAINT `permission_roles_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_users`
--
ALTER TABLE `permission_users`
  ADD CONSTRAINT `permission_users_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `repcomment_blog`
--
ALTER TABLE `repcomment_blog`
  ADD CONSTRAINT `repcomment_blog_ibfk_1` FOREIGN KEY (`id_comment`) REFERENCES `comment_blog` (`id`),
  ADD CONSTRAINT `repcomment_blog_ibfk_2` FOREIGN KEY (`id_reader`) REFERENCES `readers` (`id`);

--
-- Constraints for table `repcomment_book`
--
ALTER TABLE `repcomment_book`
  ADD CONSTRAINT `repcomment_book_ibfk_1` FOREIGN KEY (`id_comment`) REFERENCES `comment_book` (`id`),
  ADD CONSTRAINT `repcomment_book_ibfk_2` FOREIGN KEY (`id_reader`) REFERENCES `readers` (`id`);

--
-- Constraints for table `role_users`
--
ALTER TABLE `role_users`
  ADD CONSTRAINT `role_users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
