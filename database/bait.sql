-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2017 at 04:44 PM
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
  `main_image` varchar(150) DEFAULT NULL,
  `author` varchar(100) NOT NULL,
  `breaking` tinyint(4) DEFAULT NULL,
  `url_blog` varchar(200) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_news`
--

INSERT INTO `blog_news` (`id`, `title`, `content`, `main_image`, `author`, `breaking`, `url_blog`, `created_at`, `updated_at`) VALUES
(1, 'Bob - Chú mèo đường phố: Cuốn tự truyện đậm tính nhân văn và chân thật', '<p><strong>Khi quyển tự truyện Bob &ndash; Ch&uacute; m&egrave;o đường phố ra mắt, h&igrave;nh ảnh anh ch&agrave;ng m&egrave;o mướp v&agrave;ng mập c&ugrave;ng người chủ lang thang chơi đ&agrave;n khắp ga t&agrave;u điện ngầm London khiến cả thế giới n&aacute;o động. </strong></p>\r\n\r\n<p>Với những người kh&ocirc;ng may c&oacute; ho&agrave;n cảnh kh&oacute; khăn, vật nu&ocirc;i l&agrave; người bạn th&acirc;n thiết nhất, trong trường hợp n&agrave;y l&agrave; James Bowen một nhạc c&ocirc;ng đường phố đang trong qu&aacute; tr&igrave;nh cai nghiện phải sống cuộc đời c&ocirc; đơn, lẩn khuất trong g&oacute;c tối London, t&igrave;nh cờ gặp Bob, một ch&uacute; m&egrave;o mướp v&agrave;ng th&ocirc;ng minh, đ&aacute;ng y&ecirc;u. Cuộc đời anh c&oacute; nhiều thay đổi kể từ lần gặp định mệnh n&agrave;y, lạc quan hơn, y&ecirc;u đời v&agrave; mạnh mẽ hơn. &nbsp;</p>\r\n\r\n<p><img alt=\"bob chú mèo đường phố\" src=\"http://bait.vn/book_image/bob-chu-meo-duong-pho-cuon-tu-truyen-dam-tinh-nhan-van-va-chan-that-1514213549.jpg\" style=\"height:459px; width:590px\" /></p>\r\n\r\n<p>James c&ugrave;ng Bob h&aacute;t rong tr&ecirc;n những ga t&agrave;u điện ngầm London</p>\r\n\r\n<h2>&nbsp;&nbsp;Cuộc gặp gỡ của 2 kẻ lang thang</h2>\r\n\r\n<p>C&acirc;u chuyện l&agrave; c&aacute;i kết c&oacute; hậu cho em b&eacute; 4 ch&acirc;n kh&ocirc;ng may n&agrave;y, kh&ocirc;ng phải ch&uacute; m&egrave;o n&agrave;o cũng c&oacute; một m&aacute;i ấm, một chủ nh&acirc;n y&ecirc;u thương chăm s&oacute;c như Bob,&nbsp;ngo&agrave;i ra đ&oacute; cũng l&agrave; c&aacute;i kết c&oacute; hậu cho James khi anh tự nhận m&igrave;nh đ&atilde; c&oacute; cơ hội thứ hai l&agrave;m lại cuộc đời. Kể từ lần gặp đầu ti&ecirc;n khi &ldquo;M<em>ột ch&uacute; m&egrave;o mướp v&agrave;ng cuộn m&igrave;nh tr&ecirc;n tấm thảm ở bậc trước của một trong số những căn hộ tầng trệt tr&ecirc;n h&agrave;nh lang dẫn ra từ sảnh ch&iacute;nh</em>&rdquo; gần như James đ&atilde; quyết định cưu mang ch&uacute;, mặc cho t&igrave;nh cảnh tồi tệ của hai &ldquo;N<em>&oacute; hẳn đ&atilde; bầm dập v&agrave;o mộc cuộc ẩu đả hay một tai nạn g&igrave; đ&oacute; bởi lẽ cu cậu c&oacute; những vết sẹo tr&ecirc;n mặt v&agrave; ch&acirc;n, bộ l&ocirc;ng cậu r&otilde; thảm hại. Cậu ch&agrave;ng cực k&igrave; gầy v&agrave; tả tơi nhiều chỗ với &iacute;t nhất nửa t&aacute; những mảng l&ocirc;ng trụi lộ r&otilde; cả da</em>.&rdquo; C&ograve;n Jame cũng kh&ocirc;ng kh&aacute; hơn l&agrave; bao anh đang cai nghiện, sống trong một căn hộ tạm tr&uacute; v&agrave; l&agrave;m nghề h&aacute;t rong.</p>\r\n\r\n<h2>C&ugrave;ng nhau mưu sinh ở London</h2>\r\n\r\n<p>Cuộc sống của cả 2 tr&ocirc;i đi b&igrave;nh dị trong nửa đầu quyển s&aacute;ch, Bob gi&uacute;p James lạc quan hơn, trong khi James cho Bob c&oacute; một m&aacute;i nh&agrave; v&agrave; t&igrave;nh y&ecirc;u thương, cuộc sống của họ đơn giản c&ugrave;ng c&acirc;y đ&agrave;n ghita rong tủi khắp London, bắt đầu từ chương 11 quyển s&aacute;ch vẽ ra hiện thực cuộc sống hằng ng&agrave;y của họ. Hiện thực cuộc sống ch&iacute;nh l&agrave; London kh&ocirc;ng chỉ c&oacute; những người y&ecirc;u thương ch&uacute; m&egrave;o, b&ecirc;n cạnh những người xin chụp ảnh, h&agrave;o ph&oacute;ng cho Bob v&agrave; James tiền boa, vẫn kh&ocirc;ng &iacute;t người muốn ph&aacute; đ&aacute;m bộ đ&ocirc;i, với Bob đ&oacute; l&agrave; những con ch&oacute;, những lời đe dọa nhằm thẳng v&agrave;o n&oacute;, với James đ&oacute; l&agrave; những t&igrave;nh huống cản trở anh l&agrave;m việc, &ldquo;Lỗi nhận dạng&rdquo; bắt đầu kể về cuộc sống hiện thực của Bob v&agrave; James, London l&agrave; th&agrave;nh phố c&oacute; nguy&ecirc;n tắc cho người h&agrave;nh nghề đường phố, quy định đ&acirc;u l&agrave; nơi được h&aacute;t rong v&agrave; ai c&oacute; quyền bắt giam bạn, v&igrave; mưu sinh James ph&aacute; luật, anh h&aacute;t ở một khu t&agrave;u điện ngầm đ&ocirc;ng người qua lại, c&ocirc;ng việc tr&ocirc;i chảy đến khi anh bị bắt, bị phạt một số tiền k&egrave;m lời cảnh c&aacute;o, nếu c&ograve;n tiếp tục h&aacute;t sai vị tr&iacute; như thế n&agrave;y sẽ gặp rắc rối to. C&acirc;u chuyện khiến James hồi tưởng lại cuộc đời nghiện ngập, qu&aacute; khứ xấu hổ anh muốn qu&ecirc;n đi, anh muốn kiện những kẻ v&ocirc; khống m&igrave;nh nhưng bản th&acirc;n lại kh&ocirc;ng c&oacute; khả năng.</p>\r\n\r\n<p><img alt=\"reviewsach bob chú mèo đường phố\" src=\"https://reviewsach.net/wp-content/uploads/2017/12/DSC02815.jpg\" style=\"height:666px; width:1000px\" /></p>\r\n\r\n<p>Cuộc đời h&atilde;y c&ograve;n lắm gian nan, anh l&agrave; người v&ocirc; gia cư v&agrave; đang trong qu&aacute; tr&igrave;nh cai nghiện, điều kiện hiện tại khiến kh&ocirc;ng nơi n&agrave;o muốn nhận anh, kh&ocirc;ng ai muốn cho anh cơ hội, anh cố gắng để được ch&uacute; &yacute; nhưng mọi người xem anh kh&ocirc;ng tồn tại, chỉ c&oacute; hai nơi để đi, đường phố v&agrave; căn nh&agrave; x&atilde; hội, cuộc sống buồn ch&aacute;n cho đến khi Bob xuất hiện, anh c&oacute; người bầu bạn, anh kh&ocirc;ng c&ocirc; đơn sau nhiều năm trượt ng&atilde; nữa. Hằng ng&agrave;y anh c&ugrave;ng Bob đi h&aacute;t dạo tại c&aacute;c ga t&agrave;u điện ngầm, sự kiện vừa rồi như c&uacute; t&aacute;t mạnh v&agrave;o cả 2 khi cuộc đời họ chỉ mới thay đổi một ch&uacute;t.</p>\r\n\r\n<p><img alt=\"bob chú mèo đường phố (2)\" src=\"https://reviewsach.net/wp-content/uploads/2017/12/bob-chú-mèo-đường-phố-2.jpg\" style=\"height:562px; width:1000px\" /></p>\r\n\r\n<p>Phong c&aacute;ch quen thuộc của bộ đ&ocirc;i</p>\r\n\r\n<p>Một lần nữa cuộc sống tr&ecirc;n phố phường London kh&ocirc;ng hề dễ d&agrave;ng, anh phải tu&acirc;n thủ nguy&ecirc;n tắc &ldquo;cạnh tranh c&ocirc;ng bằng&rdquo;, nhưng d&ugrave; c&oacute; l&agrave; thế bộ đ&ocirc;i vẫn phải đối mặt với kh&ocirc;ng &iacute;t va chạm, một lần nữa James vẫn khẳng định m&igrave;nh sẽ l&agrave;m mọi thứ v&igrave; Bob, anh xem Bob như con v&agrave; l&agrave; nguồn động lực cho mọi nỗ lực trong cuộc sống. Những thắt n&uacute;i trong cuộc sống của &ldquo;hai ch&agrave;ng l&iacute;nh ngự l&acirc;m&rdquo; khiến nhiều người suy nghĩ, r&otilde; r&agrave;ng cuộc sống hi&ecirc;n tại kh&ocirc;ng c&oacute; nhiều cơ hội đổi đời cho những người như James, những con người lao động hằng ng&agrave;y tr&ecirc;n phố, l&agrave;m đủ nghề để sống m&agrave; vẫn bị n&eacute;m c&aacute;i nh&igrave;n khinh khỉnh v&agrave; những c&acirc;u n&oacute;i độc địa như &ldquo; Đi kiếm việc l&agrave;m đi, đừng c&oacute; ở đ&oacute; kh&ocirc;ng nữa&rdquo;, một suy nghĩ kh&aacute; cay độc của phần lớn ch&uacute;ng ta!</p>\r\n\r\n<h2>Điểm trừ đ&aacute;ng tiếc</h2>\r\n\r\n<p>Ngo&agrave;i những điểm l&yacute; th&uacute; kể tr&ecirc;n điểm trừ lớn của quyển s&aacute;ch ch&iacute;nh l&agrave; nội dung kh&aacute; kh&ocirc;ng li&ecirc;n quan đến nhan đề. Kể từ khi Bob xuất hiện, anh c&oacute; cơ hội l&agrave;m lại cuộc đời, trước đ&acirc;y anh hầu như kh&ocirc;ng được ch&uacute; &yacute;, mọi người xem anh l&agrave; v&ocirc; h&igrave;nh, nhưng ch&uacute; m&egrave;o khiến người ta dừng lại, ở ch&uacute; c&oacute; g&igrave; đ&oacute; th&uacute; h&uacute;t con người khủng khiếp, quyển s&aacute;ch xuất bản th&agrave;nh c&ocirc;ng l&agrave; nhờ Bob, b&igrave;a s&aacute;ch h&igrave;nh con m&egrave;o c&ugrave;ng ti&ecirc;u đề khiến nhiều người lầm tưởng quyển s&aacute;ch n&oacute;i về h&agrave;nh tr&igrave;nh của một ch&uacute; m&egrave;o hoang, nhưng ngược lại hơn 70% nội dung c&acirc;u chuyện kể về cuộc đời g&atilde; lang thang James Bowen. Nếu bạn l&agrave; một độc giả dễ bỏ qua chi&ecirc;u Marketing th&ocirc;ng minh naỳ, quyển s&aacute;ch vẫn mang gi&aacute; trị nh&acirc;n văn đ&aacute;ng kể.</p>', 'bob-chu-meo-duong-pho-cuon-tu-truyen-dam-tinh-nhan-van-va-chan-that-1514213549.jpg', 'Gấu Gấu', 1, 'bob-chu-meo-duong-pho-cuon-tu-truyen-dam-tinh-nhan-van-va-chan-that', '2017-12-25 18:40:08', '2017-12-25 22:16:57'),
(2, '6 người đi khắp thế gian: Cuốn tiểu thuyết giang hồ thượng hạng', '<h2>Bạo lực, nạn ph&acirc;n biệt chủng tộc, quan điểm t&igrave;nh dục &amp; h&agrave;nh tr&igrave;nh phi&ecirc;u lưu của những bạn trẻ qua những miền đất h&ugrave;ng vĩ l&agrave; c&acirc;u chuyện xuy&ecirc;n suốt trong cuốn s&aacute;ch S&aacute;u người đi khắp thế gian n&agrave;y.</h2>\r\n\r\n<p>Nếu c&oacute; bạn trẻ n&agrave;o từng ước mơ chinh phục cả thế giới, th&igrave; sẽ v&ocirc; c&ugrave;ng h&agrave;o hứng khi đọc tập 1 của cuốn <a href=\"https://reviewsach.net/6-nguoi-di-khap-the-gian/\">6 người đi khắp thế gian</a> n&agrave;y. Những khi chứng kiến Joe, Brittal hay Monica vượt qua mọi thứ, vứt bỏ tất cả &ldquo;bỏ nh&agrave; ra đi&rdquo; để chinh phục thế giới, chắc hẳn tr&aacute;i tim người đọc n&oacute; cũng sẽ rực ch&aacute;y theo. X&aacute;ch ba l&ocirc; l&ecirc;n v&agrave; đi th&ocirc;i n&agrave;o, c&aacute;c bạn trẻ!</p>\r\n\r\n<p>Nhưng rồi, khi đọc hết tập 2, những kẻ mộng mơ nhất c&oacute; lẽ cũng cần phải trầm ng&acirc;m suy nghĩ lại. Tất nhi&ecirc;n du lịch v&ograve;ng quanh thế giới l&agrave; một c&aacute;i sung sướng tột đỉnh của những t&acirc;m hồn th&iacute;ch phi&ecirc;u lưu, nhưng rồi khi giấc mơ chạm mặt đất, c&oacute; lẽ ai cũng run rợ m&agrave; kh&ocirc;ng d&aacute;m quả quyết với c&aacute;i mong muốn thuở ban đầu.</p>\r\n\r\n<p><img alt=\"sáu người đi khắp thế gian\" src=\"http://bait.vn/book_image/6-nguoi-di-khap-the-gian-cuon-tieu-thuyet-giang-ho-thuong-hang-1514213795.jpg\" style=\"height:666px; width:1000px\" /></p>\r\n\r\n<p><em><strong>Bởi c&aacute;i chết, chiến tranh &amp; bạo lực xảy ra tức th&igrave;, ngay cạnh h&agrave;nh tr&igrave;nh của họ.</strong></em></p>\r\n\r\n<p>Vậy th&igrave;, an to&agrave;n trở về c&oacute; lẽ l&agrave; khao kh&aacute;t lớn nhất, chứ kh&ocirc;ng phải l&agrave; ước mơ chinh phục địa cầu nữa rồi.</p>\r\n\r\n<p>Đ&aacute;nh trọng t&acirc;m v&agrave;o ước mơ của những c&aacute;i t&ocirc;i th&iacute;ch nổi loạn, kh&ocirc;ng ngoa khi James Albert Michener được mệnh danh l&agrave; thi&ecirc;n t&agrave;i thấu hiểu giới trẻ. Qua cuốn tiểu thuyết phi&ecirc;u lưu giang hồ thượng thặng n&agrave;y, chắc hẳn bạn đọc n&agrave;o cũng phải gật g&ugrave; th&aacute;n phục &amp; c&ocirc;ng nhận ch&acirc;n l&yacute; đ&oacute;.</p>\r\n\r\n<p>Ngo&agrave;i ra th&igrave; 2 cuốn s&aacute;ch n&agrave;y c&oacute; thể được xem l&agrave; một b&aacute;ch khoa to&agrave;n thư về chiến tranh, ch&iacute;nh trị, t&ocirc;n gi&aacute;o, t&igrave;nh dục &amp; những nền văn h&oacute;a kh&aacute;c nhau. Lượng kiến thức đồ sộ trong mỗi chương s&aacute;ch kh&ocirc;ng khỏi khiến độc giả v&agrave; ngay cả những nh&agrave; nghi&ecirc;n cứu cũng phải trầm trồ.</p>\r\n\r\n<p><img alt=\"review sách 6 người đi khắp thế gian\" src=\"https://reviewsach.net/wp-content/uploads/2017/10/review-sách-6-người-đi-khắp-thế-gian-2.jpg\" style=\"height:666px; width:1000px\" /></p>\r\n\r\n<h2>[Tập 1] Nguồn cơn của h&agrave;nh tr&igrave;nh chạy trốn hiện thực của s&aacute;u con người trẻ tuổi</h2>\r\n\r\n<p>Tập 1 của cuốn s&aacute;ch giới thiệu 6 nh&acirc;n vật ch&iacute;nh &amp; h&agrave;nh tr&igrave;nh từ qu&ecirc; hương bước tới với th&agrave;nh phố mặt trời, Torremolinos ở T&acirc;y Ban Nha, một c&aacute;i t&ecirc;n thật kh&oacute; nhớ, nhưng l&agrave; điểm chung của họ, bốn người Mỹ, một c&ocirc; tiểu thư nh&agrave; gi&agrave;u ở Anh Quốc&nbsp; &amp; một c&ocirc; g&aacute;i Na Uy gi&agrave;u nghị lực đầy kh&aacute;t khao vươn tới &aacute;nh s&aacute;ng.</p>\r\n\r\n<p>Cả 6 người với những l&yacute; do kh&aacute;c nhau v&agrave; v&ocirc; t&igrave;nh gặp nhau tại một nơi để rồi cuối c&ugrave;ng b&aacute;nh xe định mệnh chở họ đi phi&ecirc;u bạt giang hồ. Trước khi n&oacute;i về h&agrave;nh tr&igrave;nh đầy bất ngờ ấy, ch&uacute;ng ta sẽ c&ugrave;ng điểm qua khởi nguồn của mọi chuyện qua lời kể của nh&acirc;n vật t&ocirc;i &ndash; George Fairbanks, một &ocirc;ng gi&agrave; 61 tuổi v&ocirc; t&igrave;nh quen biết với cả 6 người v&agrave; cũng l&agrave; người hướng dẫn c&aacute;c bạn trẻ trong suốt chặng đường chinh phục thế gian của họ.</p>\r\n\r\n<h3><img alt=\"review sách 6 người đi khắp thế gian (2)\" src=\"https://reviewsach.net/wp-content/uploads/2017/10/review-sách-6-người-đi-khắp-thế-gian-2-1.jpg\" style=\"height:666px; width:1000px\" /></h3>\r\n\r\n<h3>Joe &ndash; tuổi trẻ l&agrave; ch&acirc;n thật</h3>\r\n\r\n<p><em>Kh&ocirc;ng c&oacute; người n&agrave;o đi&ecirc;n rồ tới mức muốn chiến tranh hơn ho&agrave; b&igrave;nh: v&igrave; trong thời b&igrave;nh con trai ch&ocirc;n cất cha, c&ograve;n trong thời chiến th&igrave; cha ch&ocirc;n cất con trai. (Herodotus)</em></p>\r\n\r\n<p>C&oacute; một anh ch&agrave;ng sinh vi&ecirc;n t&ecirc;n l&agrave; Joe v&igrave; ch&aacute;n gh&eacute;t chiến tranh &amp; th&ocirc;ng điệp ch&iacute;nh trị c&ugrave;ng lời k&ecirc;u gọi nhập ngũ chỉ để đi đ&aacute;nh nhau, đ&atilde; quyết định vứt bỏ thẻ qu&acirc;n dịch của m&igrave;nh. Anh trở th&agrave;nh kẻ tị nạn ch&iacute;nh trị khi mới 20 tuổi, rời đất nước để đến một nơi xa lạ dưới sự gi&uacute;p đỡ của những lực lượng kh&ocirc;ng ủng hộ ch&iacute;nh phủ.</p>\r\n\r\n<p>Ng&agrave;y 1 th&aacute;ng Gi&ecirc;ng năm 1969, Joe bắt đầu h&agrave;nh tr&igrave;nh đi v&agrave;o cảnh lưu đ&agrave;y. Anh kh&ocirc;ng hề nghĩ đến việc gọi điện thoại cho &ocirc;ng bố b&agrave; mẹ bất lực của m&igrave;nh: bởi anh hiểu l&agrave; cha anh sẽ cằn nhằn c&ograve;n mẹ anh sẽ kh&oacute;c l&oacute;c&hellip;.</p>\r\n\r\n<p>H&agrave;nh tr&igrave;nh đến với th&agrave;nh phố mặt trời của Joe đ&uacute;c kết bằng 2 từ : <strong>đi&ecirc;n rồ</strong>! Nhưng tuổi trẻ c&oacute; ai lại kh&ocirc;ng muốn được một lần như anh ta cơ chứ!</p>\r\n\r\n<p>Một kẻ th&agrave; bỏ trốn khỏi qu&ecirc; nh&agrave; chứ kh&ocirc;ng nhất quyết &ldquo;y&ecirc;u đại một c&ocirc; n&agrave;ng n&agrave;o đấy, t&iacute;nh kĩ chu kỳ rụng trứng &amp; l&agrave;m c&ocirc; ta c&oacute; bầu&rdquo; để tr&aacute;nh qu&acirc;n dịch, một sinh vi&ecirc;n lu&ocirc;n &aacute;m ảnh trong đầu l&agrave; những băn khoăn với &yacute; nghĩa &ldquo;tội nghiệp người da đen phải đi l&iacute;nh, người da trắng th&igrave; kh&ocirc;ng; người ngh&egrave;o bị l&ocirc;i ra trận, người khờ dại bị l&ugrave;a đi l&iacute;nh &amp; c&oacute; thể bị bắn chết, người gi&agrave;u &amp; người th&ocirc;ng minh th&igrave; sống an nh&agrave;n! V&agrave; Joe quy mọi tội lỗi, ch&aacute;n chường cảnh giả tạo l&agrave; do một ch&iacute;nh phủ đ&atilde; thối n&aacute;t v&agrave; sai lầm từ gốc rễ. Anh kh&ocirc;ng sử dụng những thủ đoạn đ&ecirc; h&egrave;n để trốn qu&acirc;n dịch như bao người &ldquo;kh&ocirc;n ngoan&rdquo; kh&aacute;c. Thậm ch&iacute; ngay khi được hỏi lần cuối c&ugrave;ng, anh th&agrave; ra đi như một tội phạm chứ kh&ocirc;ng th&egrave;m nhận lỗi v&igrave; đ&atilde; gửi thư trả lại thẻ qu&acirc;n dịch. V&agrave; r&otilde; r&agrave;ng ra đi l&agrave; một lựa chọn kh&ocirc;n ngoan, ch&iacute; &iacute;t th&igrave; c&ograve;n hơn l&agrave; v&ugrave;i những năm th&aacute;ng trẻ tuổi của anh ở trong t&ugrave;!</p>\r\n\r\n<p>Ch&iacute;nh những suy nghĩ dẫn Joe đến h&agrave;nh tr&igrave;nh đi khắp thế gian sau n&agrave;y, l&agrave; một minh chứng cho sự ngạo nghễ của những con người trẻ tuổi. Quyết t&acirc;m của Joe đủ lớn, để h&agrave;nh tr&igrave;nh đi đến th&agrave;nh phố Torremolinos (một nơi m&agrave; người ta n&oacute;i đủ mọi thứ tiếng trừ T&acirc;y Ban Nha) của anh trở n&ecirc;n dễ thở hơn bao giờ hết, d&ugrave; l&uacute;c ra đi trong t&uacute;i anh kh&ocirc;ng c&oacute; lấy một xu đ&aacute;ng tiền.</p>\r\n\r\n<h3><img alt=\"review sách 6 người đi khắp thế gian (3)\" src=\"https://reviewsach.net/wp-content/uploads/2017/10/review-sách-6-người-đi-khắp-thế-gian-3-1.jpg\" style=\"height:666px; width:1000px\" /></h3>\r\n\r\n<h3>Britta &ndash; c&ocirc; g&aacute;i Na Uy v&agrave; kh&aacute;t vọng nh&igrave;n thấy mặt trời</h3>\r\n\r\n<p>Britta được mi&ecirc;u tả l&agrave; một c&ocirc; g&aacute;i đầy nghị lực xuất ph&aacute;t từ đảo Tromso, c&aacute;ch v&ograve;ng Bắc cực hai trăm dặm về ph&iacute;a bắc. L&yacute; do c&ocirc; muốn rời xa qu&ecirc; hương rất đơn giản : c&ocirc; khao kh&aacute;t được nh&igrave;n thấy tia s&aacute;ng ấm &aacute;p từ Mặt trời, trốn xa v&ugrave;ng đất Na Uy t&ugrave; t&uacute;ng!</p>\r\n\r\n<p>Kh&aacute; nhiều người bị bệnh l&atilde;nh cảm sau khi trải qua một trải nghiệm t&igrave;nh dục tồi tệ trong qu&aacute; khứ, chẳng hạn như bị cưỡng bức, bị bạo h&agrave;nh&hellip;Tuy nhi&ecirc;n với Britta, một nạn nh&acirc;n của l&atilde;o gi&agrave; gh&ecirc; tởm (bị h&atilde;m hiếp khi chỉ mới 15 tuổi), đ&atilde; ho&agrave;n to&agrave;n vượt qua được vấn đề n&agrave;y v&agrave; c&oacute; những trải nghiệm ngọt ng&agrave;o với anh ch&agrave;ng bạn trai l&uacute;c chỉ mới 18 tuổi.</p>\r\n\r\n<p>V&agrave; đặc biệt hơn, d&ugrave; anh ch&agrave;ng kia c&oacute; khả năng l&agrave;m t&igrave;nh tuyệt vời đến mấy, c&ocirc; vẫn quyết định rời bỏ anh ta để ra đi đến với th&agrave;nh phố Mặt trời, với h&agrave;nh l&yacute; l&agrave; một tấm v&eacute; đ&atilde; b&oacute;c sạch số tiền của c&ocirc; d&agrave;nh dụm được trong suốt thời gian ở qu&ecirc; nh&agrave;</p>\r\n\r\n<p>Tại sao c&ocirc; g&aacute;i trẻ lại dũng cảm từ bỏ qu&ecirc; hương để chạy đến một nơi xa lạ kh&ocirc;ng người th&acirc;n th&iacute;ch? C&oacute; 2 l&yacute; do.</p>\r\n\r\n<p>Một l&agrave; v&igrave; bố c&ocirc;, một người h&ugrave;ng của qu&aacute; khứ khi chống ph&aacute;t x&iacute;t ở chiến tranh thế giới, v&agrave; một g&atilde; thất bại ở hiện tại khi m&agrave; giấc mơ đi đến h&ograve;n đảo Cleylon của &ocirc;ng chỉ m&atilde;i m&atilde;i l&agrave; ảo vọng. &Ocirc;ng chỉ biết mơ ước v&agrave;o ban đ&ecirc;m với những c&acirc;u h&ograve; của Thợ m&ograve; ngọc trai, trong khi ban ng&agrave;y th&igrave; vất vả kiếm sống ở một c&ocirc;ng ty xuất nhập khẩu, một nh&acirc;n vi&ecirc;n qu&egrave;n với đồng lương chết đ&oacute;i.</p>\r\n\r\n<p>L&yacute; do thứ hai.&nbsp; Hằng năm cứ đến v&agrave; ng&agrave;y hai mươi hai th&aacute;ng Ch&iacute;n, trong chu tr&igrave;nh l&ecirc;n xuống đ&atilde; định tr&ecirc;n khoảng trời, ngay cả giữa trưa mặt trời cũng khuất dưới đường ch&acirc;n trời, nghĩa l&agrave; ng&agrave;y th&igrave; ngắn v&agrave; đ&ecirc;m th&igrave; d&agrave;i v&ocirc; tận. Người d&acirc;n ở Tromso n&oacute;i rằng &ldquo;ch&uacute;ng ta đ&atilde; ở trong đường hầm&rdquo;. Nghĩa l&agrave; b&oacute;ng tối gần như bao phủ to&agrave;n bộ thời gian của khu vực, ngoại trừ một m&agrave;n sương x&aacute;m mỏng manh l&uacute;c 12h trưa.</p>\r\n\r\n<p>Với Britta th&igrave; đường hầm đ&oacute; v&ocirc; c&ugrave;ng khủng khiếp. C&ocirc; khao kh&aacute;t đi đến th&agrave;nh phố n&agrave;o đ&oacute; kh&aacute;c, để được thấy Mặt trời!</p>\r\n\r\n<p>&ldquo;Khi bạn mơ ước một thứ g&igrave; đ&oacute;, cả vũ trụ sẽ chung tay gi&uacute;p đỡ bạn&rdquo; C&acirc;u n&oacute;i của <a href=\"https://reviewsach.net/nha-gia-kim-cuon-sach-ban-chay-chi-sau-kinh-thanh/\">Nh&agrave; giả kim</a> rất th&iacute;ch hợp để minh họa về trường hợp n&agrave;y của Britta. Với những nỗ lực phi thường của c&ocirc; cộng th&ecirc;m một may mắn kh&ocirc;ng thể tin nổi, Britta đ&atilde; c&oacute; tấm v&eacute; để đến Toremolinos, đối với người kh&aacute;c th&igrave; đ&oacute; l&agrave; một chuyến du lịch 15 ng&agrave;y đơn thuần, c&ograve;n đối với c&ocirc;, đ&oacute; l&agrave; một h&agrave;nh tr&igrave;nh một đi kh&ocirc;ng trở lại, nơi c&ocirc; mơ ước được sống một cuộc đời kh&aacute;c, một h&agrave;nh tr&igrave;nh rạng rỡ dưới &aacute;nh mặt trời.</p>\r\n\r\n<p><strong><em>&ldquo;Con sẽ kh&ocirc;ng bao giờ quay lại&hellip;kh&ocirc;ng bao giờ. Mẹ n&oacute;i với cha nh&eacute;.&rdquo;</em></strong></p>\r\n\r\n<p><img alt=\"review sách 6 người đi khắp thế gian (4)\" src=\"https://reviewsach.net/wp-content/uploads/2017/10/review-sách-6-người-đi-khắp-thế-gian-4.jpg\" style=\"height:666px; width:1000px\" /></p>\r\n\r\n<h3>Monica &ndash; C&ocirc; tiểu thư người Anh v&agrave; h&agrave;nh tr&igrave;nh lang bạt kh&ocirc;ng mục đ&iacute;ch</h3>\r\n\r\n<p>Nếu như Joe rời tổ quốc chỉ để trốn tr&aacute;nh c&aacute;i hiện thực đ&aacute;ng ch&aacute;n l&agrave; anh phải l&agrave;m những việc v&ocirc; đạo đức để tr&aacute;nh qu&acirc;n dịch, hoặc l&agrave; nhập ngũ để chiến đấu với một l&yacute; tưởng kh&ocirc;ng h&ograve;a b&igrave;nh. Anh rời qu&ecirc; một c&aacute;ch đầy anh dũng, từ bỏ thi&ecirc;n đường của nhiều người để đến một nơi đầy b&atilde;o tố m&agrave; anh chưa từng tưởng tượng.</p>\r\n\r\n<p>Nếu như Britta bỏ nh&agrave; ra đi chỉ vi khao kh&aacute;t một cuộc sống tốt đẹp hơn, để qu&ecirc;n đi ng&agrave;y th&aacute;ng b&igrave;nh dị đến ch&aacute;n ng&aacute;n c&ugrave;ng những người t&igrave;nh chẳng đi đến đ&acirc;u. Một nỗ lực, một &yacute; ch&iacute; của một c&ocirc; g&aacute;i trẻ đ&aacute;ng ngưỡng mộ.</p>\r\n\r\n<p>Th&igrave; Monica, tiểu thư Monica l&agrave; đại diện cho một h&igrave;nh ảnh v&ocirc; c&ugrave;ng kh&ocirc;ng đẹp của tuổi trẻ. Hiếu thắng, kh&ocirc;ng m&agrave;ng đến kết cục &amp; sống b&ugrave; kh&uacute; vấp v&aacute;p ngớ ngẩn với ma t&uacute;y v&agrave; t&igrave;nh dục. Mặc d&ugrave; l&yacute; do c&ocirc; ra đi, ch&aacute;n gh&eacute;t sự l&atilde;nh đạo của cha c&ocirc; tại cộng h&ograve;a Vwadra, một quốc gia ch&acirc;u Phi giả tưởng, v&agrave; muốn tr&aacute;nh xa c&aacute;i b&oacute;ng qu&aacute; lớn của &ocirc;ng ấy, một ph&aacute;t ng&ocirc;n vi&ecirc;n, một ch&iacute;nh trị gia, một nh&agrave; ngoại giao Anh thất bại thảm hại.</p>\r\n\r\n<p>Nhưng c&ocirc; chạy trốn với kh&ocirc;ng mục đ&iacute;ch v&agrave; kh&ocirc;ng biết đến ng&agrave;y mai. V&agrave; rồi ma t&uacute;y v&agrave; t&igrave;nh dục cũng những cơn say &ldquo;hết m&igrave;nh&rdquo; kh&ocirc;ng gi&uacute;p c&ocirc; tốt đẹp hơn, m&agrave; ngược lại.</p>\r\n\r\n<p>Tuổi trẻ v&agrave; ph&aacute; c&aacute;ch, đ&oacute; l&agrave; những g&igrave; ngắn gọn v&agrave; tốt đẹp nhất để n&oacute;i về Monica. Đ&aacute;ng khen l&agrave; những quyết định t&aacute;o b&aacute;o của c&ocirc;, v&agrave; đ&aacute;ng tr&aacute;ch cũng l&agrave; những quyết định ấy.</p>\r\n\r\n<p>Sẽ kh&ocirc;ng b&agrave;n nhiều về c&ocirc; g&aacute;i n&agrave;y ở b&agrave;i review n&agrave;y nữa, tuy nhi&ecirc;n độc giả c&oacute; thể tự nh&igrave;n lại m&igrave;nh khi đọc tới những vấn đề m&agrave; c&ocirc; g&aacute;i mạnh mẽ n&agrave;y đ&atilde; trải qua, chi&ecirc;m nghiệm n&oacute; v&agrave; tự ra nhận x&eacute;t cho ri&ecirc;ng m&igrave;nh.</p>\r\n\r\n<p><img alt=\"review sách 6 người đi khắp thế gian (1)\" src=\"https://reviewsach.net/wp-content/uploads/2017/10/review-sách-6-người-đi-khắp-thế-gian-1-1.jpg\" style=\"height:666px; width:1000px\" /></p>\r\n\r\n<h3>Anh ch&agrave;ng da đen Cato v&agrave; nạn ph&acirc;n biệt chủng tộc</h3>\r\n\r\n<p>Bạn đọc quan t&acirc;m tới nạn ph&acirc;n biệt chủng tộc c&oacute; lẽ sẽ rất th&iacute;ch th&uacute; khi được nghe t&aacute;c giả tỉ mỉ mi&ecirc;u tả về anh ch&agrave;ng da đen Cato v&agrave; h&agrave;nh tr&igrave;nh đến với th&agrave;nh phố Mặt Trời.</p>\r\n\r\n<p>&ldquo;Về người Mỹ da đen, m&ocirc;t c&acirc;u đơn giản t&oacute;m tắt lịch sử x&aacute;c đ&aacute;ng của đất nước ch&uacute;ng ta: được thu&ecirc; cuối c&ugrave;ng, bị đuổi đầu ti&ecirc;n&rdquo;</p>\r\n\r\n<p>&ldquo;Suốt 364 ng&agrave;y trong năm, người da đen ki&ecirc;n nhẫn chịu đựng một nỗi thống khổ hẳn sẽ đẩy người da trắng v&agrave;o thế phải tự vẫn. Ng&agrave;y thứ 365, anh ta trốn tho&aacute;t bằng c&aacute;ch ở nh&agrave; uống say b&iacute; tỉ, v&agrave; rồi nh&acirc;n vi&ecirc;n x&atilde; hội b&aacute;o c&aacute;o, &ldquo;Anh ta kh&ocirc;ng c&oacute; khả năng l&agrave;m việc, như thường lệ&rdquo;</p>\r\n\r\n<p><img alt=\"review sách 6 người đi khắp thế gian (3)\" src=\"https://reviewsach.net/wp-content/uploads/2017/10/review-sách-6-người-đi-khắp-thế-gian-3.jpg\" style=\"height:666px; width:1000px\" /></p>\r\n\r\n<p>Khắc họa sự bất c&ocirc;ng đối với người da đen, t&aacute;c giả mi&ecirc;u tả những vụ bạo loạn, sự k&eacute;m hiểu biết của họ đồng thời kh&ocirc;ng qu&ecirc;n n&oacute;i về những kỳ thị, &aacute;c cảm của những người da trắng đối với họ. Hơn thế, nạn ph&acirc;n biệt chủng tộc c&ograve;n nặng nề hơn qua sự dối tr&aacute; v&agrave; ngớ ngẩn đến từ b&aacute;o ch&iacute; v&agrave; truyền th&ocirc;ng!</p>\r\n\r\n<p>Với những kẻ k&eacute;m hiểu biết chỉ nhận th&ocirc;ng tin một chiều, họ sẽ cho rằng Cato l&agrave; một kẻ khủng bố, theo đạo Hồi v&agrave; l&agrave; một tay s&uacute;ng nguy hiểm. C&ograve;n đối với nh&acirc;n vật t&ocirc;i trong truyện, Cato chỉ đơn giản l&agrave; một anh ch&agrave;ng da đen dễ mến v&agrave; thức thời. Nhưng d&ugrave; sao th&igrave; anh cũng l&agrave; một kẻ chạy trốn v&igrave; một cuộc đấu tranh cho sự c&ocirc;ng bằng của chủng tộc.</p>\r\n\r\n<p><img alt=\"review sách 6 người đi khắp thế gian (5)\" src=\"https://reviewsach.net/wp-content/uploads/2017/10/review-sách-6-người-đi-khắp-thế-gian-5.jpg\" style=\"height:666px; width:1000px\" /></p>\r\n\r\n<h3>Yigal, một anh ch&agrave;ng Do Th&aacute;i với tr&iacute; tuệ phi thường v&agrave; một tr&aacute;i tim n&oacute;ng ấm</h3>\r\n\r\n<p>Đọc phần mi&ecirc;u tả về Yigal, người đọc ho&agrave;n to&agrave;n c&oacute; thể h&igrave;nh dung được nền tảng gi&aacute;o dục của gia đ&igrave;nh v&agrave; m&ocirc;i trường sống ảnh hưởng như thế n&agrave;o tới tương lai con trẻ.</p>\r\n\r\n<p>Yigal l&agrave; một trường hợp đặc biệt như thế. Anh mang cả hai quốc tịch Mỹ v&agrave; Irasel, v&agrave; khi tổ quốc Do Th&aacute;i cần, anh sẵn s&agrave;ng vứt bỏ tương lai tốt đẹp ở Hoa Kỳ để s&aacute;t c&aacute;nh với những người l&iacute;nh b&ecirc;n chiếc xe tăng, bất chấp sự phản đối của gia đ&igrave;nh. Nhưng sau chuyện đ&oacute;, lại khiến anh đau đầu cho tương lai khi ph&acirc;n v&acirc;n kh&ocirc;ng biết n&ecirc;n l&agrave;m g&igrave; tiếp theo, trở về Mỹ l&agrave;m một sinh vi&ecirc;n ưu t&uacute; ở đại học Michigan theo &yacute; &ocirc;ng ngoại, hay sang Anh theo &yacute; &ocirc;ng nội để trở th&agrave;nh nh&agrave; khoa học chuy&ecirc;n t&acirc;m nghi&ecirc;n cứu tại Cambridge. Hay l&agrave; về Israel, ghi t&ecirc;n v&agrave;o trường Technion ở Haifa.</p>\r\n\r\n<p>Bế tắc trong việc lựa chọn tổ quốc cho ri&ecirc;ng m&igrave;nh, l&agrave; Irasel hay l&agrave; Mỹ, hay l&agrave; c&ocirc;ng d&acirc;n Anh, v&agrave; thế l&agrave; Yigal chạy đến T&acirc;y Ban Nha du lịch, v&agrave; cuối c&ugrave;ng theo ch&acirc;n c&aacute;c bạn trẻ kh&aacute;c l&agrave;m một v&ograve;ng quanh thế giới.</p>\r\n\r\n<p>Tuổi trẻ tươi đẹp, sống ch&aacute;y hết m&igrave;nh, ch&iacute;nh l&agrave; những h&igrave;nh ảnh n&oacute;i về Yigal</p>\r\n\r\n<p>Th&ocirc;ng qua c&acirc;u chuyện về Yigal, t&aacute;c giả khắc họa t&agrave;i t&igrave;nh về sự bất ổn, chiến tranh tại Quốc gia khởi nghiệp Irasel với trận chiến 6 ng&agrave;y trong đ&oacute; Yigal đ&oacute;ng vai tr&ograve; chủ chốt, đồng thời James Michener cũng đ&atilde; l&yacute; giải v&igrave; sao đất nước Do Th&aacute;i n&agrave;y vẫn l&agrave; điểm đến đ&aacute;ng mơ ước của nhiều người mặc d&ugrave; t&igrave;nh trạng chiến tranh lu&ocirc;n tiếp diễn.</p>\r\n\r\n<p>Th&ecirc;m một lần nữa, kho kiến thức đồ sộ của t&aacute;c giả về ch&iacute;nh trị, khoa học, địa chất được khai th&aacute;c tối đa. V&agrave; cuốn b&aacute;ch khoa thư n&agrave;y vẫn chưa c&oacute; điểm dừng.</p>\r\n\r\n<p><img alt=\"review sách 6 người đi khắp thế gian (8)\" src=\"https://reviewsach.net/wp-content/uploads/2017/10/review-sách-6-người-đi-khắp-thế-gian-8.jpg\" style=\"height:666px; width:1000px\" /></p>\r\n\r\n<h3>Gretchen, c&ocirc; g&aacute;i của Niềm hy vọng Mỹ</h3>\r\n\r\n<p>Nếu như Britta ứng xử tuyệt vời sau khi bị lạm dụng t&igrave;nh dục, th&igrave; Gretchen m&atilde;i m&atilde;i bị &aacute;m ảnh bởi một vụ tương tự, d&ugrave; c&ocirc; g&aacute;i n&agrave;y thậm ch&iacute; c&ograve;n mạnh mẽ hơn c&ocirc; g&aacute;i Na Uy khi d&aacute;m đứng l&ecirc;n đấu tranh ch&iacute;nh trị cho một nền d&acirc;n chủ Mỹ.</p>\r\n\r\n<p>Đ&aacute;nh đ&agrave;n ghi ta đi&ecirc;u luyện, h&aacute;t hay v&agrave; sẵn s&agrave;ng chết v&igrave; McCarthy, vay 200$ để l&agrave;m ph&iacute; đ&agrave;o tho&aacute;t cho một anh ch&agrave;ng trốn qu&acirc;n dịch, Gretchen t&igrave;m mọi c&aacute;ch l&agrave;m c&oacute; thể để tin v&agrave;o một nước Mỹ tốt đẹp hơn. Gọi Gretchen l&agrave; niềm hy vong Mỹ thật kh&ocirc;ng sai ch&uacute;t n&agrave;o.</p>\r\n\r\n<p>Viết về Gretchen, t&aacute;c giả lồng v&agrave;o đ&oacute; những kh&uacute;c ballad ngọt ng&agrave;o của c&aacute;c bản nhạc Child 305 kh&uacute;c được c&ocirc; g&aacute;i nhỏ nhắn n&agrave;y thể hiện, trước khi mi&ecirc;u tả kĩ c&agrave;ng về cơn &aacute;c mộng đ&atilde; biến Grettchen trở n&ecirc;n hoang mang: bị lạm dụng t&igrave;nh dục bởi cảnh s&aacute;t, trong khi c&ocirc; đấu tranh v&igrave; h&ograve;a b&igrave;nh cho đất nước!</p>\r\n\r\n<p>L&atilde;ng mạn với ballad hoa hồng &amp; vỡ mộng v&igrave; tiếng s&uacute;ng! Mi&ecirc;u tả về Gretchen thế c&oacute; lẽ l&agrave; đủ.</p>\r\n\r\n<p>Nhưng kh&ocirc;ng, c&ocirc; g&aacute;i n&agrave;y c&ograve;n l&agrave;m được nhiều điều t&iacute;ch cực hơn thế. L&agrave; điểm s&aacute;ng hiếm hoi m&agrave; 5 người c&ograve;n lại kh&ocirc;ng l&agrave;m được, d&ugrave; xuất ph&aacute;t điểm của c&ocirc; c&oacute; thể n&oacute;i l&agrave; k&eacute;m hơn so với phần c&ograve;n lại. Những &yacute; tưởng tươi mới của c&ocirc; trong tập 2 sẽ l&agrave; kh&uacute;c gi&aacute;ng ca ngọt ng&agrave;o m&agrave; t&aacute;c giả hiếm hoi thể hiện cho bạn đọc v&igrave; một ng&agrave;y mai tươi s&aacute;ng.</p>\r\n\r\n<p><em>Hết tập 1, đ&atilde; xong m&agrave;n dạo đầu, v&agrave; h&agrave;nh tr&igrave;nh của c&aacute;c bạn trẻ cũng mới chỉ ở bước đầu ti&ecirc;n!</em></p>\r\n\r\n<p><img alt=\"review sách 6 người đi khắp thế gian\" src=\"https://reviewsach.net/wp-content/uploads/2017/10/review-sách-6-người-đi-khắp-thế-gian-1.jpg\" style=\"height:666px; width:1000px\" /></p>\r\n\r\n<p>C&oacute; vẻ như t&aacute;c giả rất giỏi khi mi&ecirc;u tả một thế giới đầy biến động với chiến tranh v&ugrave;ng Trung Đ&ocirc;ng, chiến tranh Việt Nam, nạn ph&acirc;n biệt chủng tộc, &hellip; Tuy nhi&ecirc;n, sống trong một hiện thực t&agrave;n khốc như thế, những thanh ni&ecirc;n vỡ mộng về một cuộc sống m&agrave;u hồng chỉ c&ograve;n biết c&aacute;ch chạy trốn. Trong suốt tập 1, ch&agrave;ng trai trẻ Joe chỉ biết trốn qu&acirc;n dịch, kh&ocirc;ng th&egrave;m đấu tranh cho n&oacute;, Britta th&igrave; kh&ocirc;ng c&oacute; &yacute; định trở về nh&agrave; để l&agrave;m một c&aacute;i g&igrave; đ&oacute; tươi s&aacute;ng hơn cho nơi c&ocirc; được sinh ra, Monica chết sau h&agrave;nh tr&igrave;nh phi&ecirc;u bạt, c&aacute;c đại diện kh&aacute;c của những cuộc giải ph&oacute;ng d&acirc;n tộc ở ch&acirc;u Phi cũng&hellip;chẳng l&agrave;m g&igrave; kh&aacute; hơn.</p>\r\n\r\n<p>C&aacute;c bạn trẻ phản kh&aacute;ng với x&atilde; hội rất tốt, nhưng chưa g&oacute;p phần x&acirc;y dựng n&oacute; trở n&ecirc;n tốt đẹp hơn. V&agrave; r&otilde; r&agrave;ng l&agrave; t&aacute;c giả cũng kh&ocirc;ng c&oacute; giải đ&aacute;p cho những b&agrave;i to&aacute;n của hiện thực đương thời, một thế giới bất ổn v&agrave; nhiều nguy cơ b&ugrave;ng nổ</p>\r\n\r\n<p><img alt=\"Sáu người đi khắp thế gian 1992\" src=\"https://reviewsach.net/wp-content/uploads/2017/10/6-người-đi-khắp-thế-gian-Sách-hay-cho-bạn.jpg\" style=\"height:666px; width:1000px\" /></p>\r\n\r\n<h2>[Tập 2] Đ&ecirc;m phương nam ở T&acirc;y Ban Nha, B&ograve; t&oacute;t &amp; Rừng rậm ch&acirc;u Phi đầy &aacute;m ảnh</h2>\r\n\r\n<h2>Thay cho lời kết: Đ&ocirc;i điều về t&aacute;c giả &amp; t&aacute;c phẩm</h2>\r\n\r\n<p>James Albert Michener l&agrave; nh&agrave; văn nổi tiếng người Mỹ với tr&ecirc;n 40 đầu s&aacute;ch. &Ocirc;ng từng học v&agrave; giảng dạy ở nhiều trường đại học, nhận bằng thạc sỹ văn chương năm 1937 v&agrave; c&oacute; hơn 30 học vị tiến sĩ danh dự về nh&acirc;n văn, luật, thần học &amp; khoa học.</p>\r\n\r\n<p>C&aacute;c t&aacute;c phẩm của Michener b&aacute;n được gần 80 triệu bản tr&ecirc;n khắp thế giới, nhiều lần được chuyển thể th&agrave;nh phim v&agrave; nhận rất nhiều giải thưởng văn học uy t&iacute;n (Giải Pulitzer, giải Franklin, Huy chương V&agrave;ng của Viện nghi&ecirc;n cứu T&acirc;y Ban Nha, giải Einstein của Einstein Medical College&hellip;)</p>\r\n\r\n<p>Michener đ&atilde; tặng hơn 100 triệu đ&ocirc; la tiền nhuận b&uacute;t cho một số trường đại học, thư viện, viện bảo t&agrave;ng, chương tr&igrave;nh nghi&ecirc;n cứu&hellip;</p>\r\n\r\n<p>Bảo t&agrave;ng Nghệ thuật ở Doylestown, P&eacute;nsylvania, qu&ecirc; &ocirc;ng mang t&ecirc;n t&ecirc;n Michener.</p>\r\n\r\n<p>S&aacute;u người đi khắp thế gian (t&ecirc;n gốc l&agrave; The Drifters) được xuất bản năm 1971 v&agrave; suốt s&aacute;u th&aacute;ng liền nằm trong danh s&aacute;ch những t&aacute;c phẩm b&aacute;n chạy nhất New York.</p>', '6-nguoi-di-khap-the-gian-cuon-tieu-thuyet-giang-ho-thuong-hang-1514213795.jpg', 'Huy', NULL, '6-nguoi-di-khap-the-gian-cuon-tieu-thuyet-giang-ho-thuong-hang', '2017-12-25 21:56:35', '2017-12-25 21:56:56'),
(3, '[Tony Buổi Sáng] Trên đường băng : Thức tỉnh cảm hứng cho người trẻ', '<h2>Tr&ecirc;n đường băng l&agrave; cuốn s&aacute;ch nổi tiếng nhất của t&aacute;c giả Tony Buổi S&aacute;ng &amp; cũng l&agrave; t&aacute;c phẩm truyền cảm hứng bậc nhất cho c&aacute;c bạn trẻ, những người thanh ni&ecirc;n thời đại mới &amp; ho&agrave;i b&atilde;o lớn vượt khỏi &ldquo;ao l&agrave;ng&rdquo;.</h2>\r\n\r\n<p>Tr&ecirc;n đường băng l&agrave; cuốn s&aacute;ch thứ 2 của Tony Buổi s&aacute;ng sau cuốn đầu ti&ecirc;n l&agrave; Cafe c&ugrave;ng Tony, v&agrave; nội dung kh&ocirc;ng c&oacute; g&igrave; mới, vẫn l&agrave; tập hợp lại những b&agrave;i viết đ&atilde; từng được đăng trước đ&acirc;y tr&ecirc;n fanpage của t&aacute;c giả n&agrave;y. Điều th&uacute; vị l&agrave; mặc d&ugrave; những b&agrave;i viết trong s&aacute;ch mặc d&ugrave; đều được viết lại từ trong fanpage, nhưng Tr&ecirc;n đường băng n&agrave;y vẫn l&agrave; một trong những cuốn s&aacute;ch b&aacute;n chạy nhất tr&ecirc;n Tiki trong suốt 1 năm qua.</p>\r\n\r\n<p>Vậy điều g&igrave; l&agrave;m n&ecirc;n sự thần kỳ của cuốn s&aacute;ch n&agrave;y đến như vậy?</p>\r\n\r\n<h2>Những điều đặc biệt về t&aacute;c giả</h2>\r\n\r\n<p>C&oacute; lẽ cũng kh&aacute; nhiều người biết đến t&aacute;c giả Tony Buổi S&aacute;ng v&agrave; tập hợp những b&agrave;i viết của Tony tr&ecirc;n <a href=\"https://www.facebook.com/TonyBuoiSang/\">fanpage Tony BS</a> kh&aacute; nổi tiếng của &ldquo;anh&rdquo;. Nội dung của fanpage n&agrave;y chủ yếu để n&oacute;i về cảm hứng để bạn trẻ khởi nghiệp, t&ocirc;n vinh những tấm gương biết nghĩ, biết l&agrave;m, qua lời kể h&agrave;i hước v&agrave; văn phong d&iacute; dỏm của những t&aacute;c giả ẩn danh.</p>\r\n\r\n<p><img alt=\"Sách Trên Đường Băng\" src=\"https://reviewsach.net/wp-content/uploads/2017/11/nội-quy-trang-Tony-Buổi-sáng.jpg\" style=\"height:600px; width:960px\" /></p>\r\n\r\n<p>Nội quy d&iacute; dỏm của trang Tony Buổi s&aacute;ng Fanpage</p>\r\n\r\n<p>Điều th&uacute; vị của fanpage n&agrave;y đ&oacute; ch&iacute;nh l&agrave; việc nghi&ecirc;m cấm mọi b&igrave;nh luận, chỉ like hoặc share. Những ai kh&ocirc;ng đọc m&agrave; đ&atilde; vội v&agrave;ng comment sẽ lập tức bị block tự động. Fanpage n&agrave;y kh&ocirc;ng c&oacute; website, nhưng c&aacute;c website mạo danh t&aacute;c giả, ăn cắp b&agrave;i viết &amp; c&aacute;c fanpage vệ tinh ăn theo th&igrave; rất nhiều.</p>\r\n\r\n<p>Điều th&uacute; vị thứ hai ch&iacute;nh l&agrave; t&aacute;c giả l&agrave; một nh&acirc;n vật ẩn danh, hoặc cũng c&oacute; thể l&agrave; một nh&oacute;m admin d&ugrave;ng chung một b&uacute;t danh l&agrave; Tony. V&agrave; nhiều người tự xưng l&agrave; đ&atilde; gặp &ldquo;anh&rdquo; Tony ngo&agrave;i đời, nhưng nh&acirc;n vật n&agrave;y c&oacute; tồn tại hay kh&ocirc;ng vẫn c&ograve;n l&agrave; một b&iacute; ẩn. Hiện nay t&aacute;c giả &ldquo;Tony&rdquo; ch&iacute;nh thức đ&atilde; dừng viết tr&ecirc;n fanpage, c&aacute;c admin &ldquo;Tony2.0&rdquo; đang tiếp tục chấp b&uacute;t nhưng m&agrave; lời văn th&igrave; kh&ocirc;ng c&ograve;n được như xưa.</p>\r\n\r\n<p>V&agrave; điều th&uacute; vị thứ ba, cũng l&agrave; nội dung chủ đạo xuy&ecirc;n suốt của 2 cuốn s&aacute;ch, n&oacute;i về gi&aacute;o dục nhưng kh&ocirc;ng hề kh&ocirc; cứng, lời văn &iacute;t n&oacute;i đến gi&aacute;o điều l&yacute; thuyết m&agrave; ngược lại rất thực tiễn. Lời kể hoặc cố t&igrave;nh n&oacute;i sai ch&iacute;nh tả cho th&ecirc;m phần b&igrave;nh dị, hoặc cố t&igrave;nh sử dụng ng&ocirc;n ngữ của cộng đồng mạng để dễ tiếp cận bạn đọc trẻ tuổi, cũng l&agrave; đối tượng m&agrave; fanpage n&agrave;y hướng đến.</p>\r\n\r\n<h2>Những điểm nhấn trong cuốn s&aacute;ch Tr&ecirc;n đường băng</h2>\r\n\r\n<p>Nếu như cuốn s&aacute;ch Cafe c&ugrave;ng Tony ra đời chỉ đơn thuần l&agrave; tập hợp những b&agrave;i viết hay từ fanpage, nội dung chủ yếu vẫn l&agrave; kể lại những th&oacute;i hư, tật xấu của người Việt qua g&oacute;c nh&igrave;n h&agrave;i hước đồng thời kh&ocirc;ng qu&ecirc;n nhắn nhủ tới c&aacute;c bạn trẻ h&atilde;y tập sống tốt, h&atilde;y h&agrave;o sảng, nh&acirc;n nghĩa v&agrave; trung thực để hướng tới cuộc sống văn minh hơn. Những c&acirc;u chuyện về sự ng&acirc;y thơ của người Việt cũng lột trần hết sức tỉ mỉ, như th&oacute;i quen bị thương l&aacute;i Trung Quốc lừa gạt của b&agrave; con n&ocirc;ng d&acirc;n, th&oacute;i quen ăn thịt ch&oacute;, vượt đ&egrave;n đỏ, nhậu nhẹt&hellip;của cư d&acirc;n th&agrave;nh phố&hellip;Đọc Cafe c&ugrave;ng Tony, người đọc c&oacute; thể l&agrave; bất cứ ai, c&oacute; thể bật cười &amp; sau đ&oacute; trầm ng&acirc;m suy nghĩ v&igrave; bất chợt nh&igrave;n thấy ch&iacute;nh bản th&acirc;n m&igrave;nh ở trong đ&oacute;.</p>\r\n\r\n<p><img alt=\"Cafe cùng Tony - Trên đường băng\" src=\"http://bait.vn/book_image/%5Btony-buoi-sang%5D-tren-duong-bang--thuc-tinh-cam-hung-cho-nguoi-tre-1514213956.jpg\" style=\"height:508px; width:800px\" /></p>\r\n\r\n<p>Nội cung của Cafe c&ugrave;ng Tony hướng đối tượng rộng r&atilde;i cho nhiều người đọc</p>\r\n\r\n<p><a href=\"https://reviewsach.net/tony-buoi-sang-tren-duong-bang\">Tr&ecirc;n đường băng</a> th&igrave; nghi&ecirc;m t&uacute;c hơn &amp; được viết lại với mục đ&iacute;ch r&otilde; r&agrave;ng hơn hẳn. Đối tượng ch&iacute;nh l&agrave; c&aacute;c bạn trẻ tuổi v&agrave; tất cả những b&agrave;i viết giống như một tập san, l&agrave; cẩm nang cho bạn trẻ v&agrave;o đời.</p>\r\n\r\n<p>Cuốn s&aacute;ch giống như 1 chuyến bay, c&oacute; 3 phần l&agrave; Chuẩn bị h&agrave;nh trang, ngồi ph&ograve;ng chờ s&acirc;n bay &amp; l&ecirc;n đường th&igrave; phần 1 được xem l&agrave; phần chuẩn bị cũng được đề cập d&agrave;i nhất &amp; đặc sắc nhất. Bạn trẻ nu&ocirc;i ch&iacute; lớn sẽ ngất ng&acirc;y với những b&agrave;i viết đặc sắc như Chuyện thằng Qu&acirc;n, chuyện thằng Ki&ecirc;n, chuyện củ trấu, chị l&aacute;i đ&ograve;&hellip;</p>\r\n\r\n<p>C&oacute; lẽ bất cứ ai nh&igrave;n thấy t&ecirc;n những b&agrave;i viết tr&ecirc;n th&igrave; sẽ giật m&igrave;nh v&agrave; chắc chắn l&agrave; nếu kh&ocirc;ng đọc th&igrave; kh&ocirc;ng thể hiểu được nội dung b&agrave;i viết đang hướng tới c&aacute;i g&igrave;. Chẳng hạn như chuyện thằng Qu&acirc;n, t&aacute;c giả dẫn dụ người đọc đi một đoạn đường rất d&agrave;i khi kể về một người trưởng ph&ograve;ng trẻ tuổi để rồi dẫn tới c&aacute;i kết bất ngờ: Thế rốt cuộc the mission of life của bạn l&agrave; g&igrave;? Người đọc chắc hẳn sẽ kh&ocirc;ng khỏi suy ngẫm khi bước tới những d&ograve;ng cuối c&ugrave;ng của b&agrave;i viết.</p>\r\n\r\n<p>Trong phần 1 th&igrave; một v&agrave;i b&agrave;i viết cũng thuộc dạng h&agrave;i hước &amp; d&iacute; dỏm như Bệnh nghiện internet, kể về c&acirc;u chuyện 1 anh ch&agrave;ng l&agrave;m văn ph&ograve;ng lương 5 triệu, gần 30 tuổi rồi m&agrave; kh&ocirc;ng c&oacute; bạn g&aacute;i, kh&ocirc;ng biết l&agrave;m g&igrave; cho đời, ăn xong đi l&agrave;m rồi về ngủ &amp; l&ecirc;n mạng &ldquo;ch&eacute;m gi&oacute;&rdquo;. T&aacute;c giả c&oacute; lời khuy&ecirc;n với những ai như vậy l&agrave; &ldquo;h&atilde;y vứt laptop đi, rồi ra ngo&agrave;i đi nhặt r&aacute;c&hellip;&rdquo;</p>\r\n\r\n<p>C&ograve;n với những ai th&iacute;ch nghe lời khuy&ecirc;n về b&agrave;i học kinh doanh tr&ecirc;n mạng, t&aacute;c giả kể một c&acirc;u chuyện cười về anh ch&agrave;ng Tony đăng đ&agrave;n internet hỏi &ldquo;c&oacute; n&ecirc;n mở nh&agrave; m&aacute;y củi trấu để xuất qua mấy nước &ocirc;n đới l&agrave;m nhi&ecirc;n liệu sinh học kh&ocirc;ng&rdquo;. C&oacute; một anh ch&agrave;ng t&ecirc;n Th&agrave;nh, ở dưới Tiền Giang, tư vấn nhiệt t&igrave;nh lắm. Tony nghe theo th&ocirc;i l&agrave; nghe, v&igrave; ảnh n&oacute;i ảnh xuất khẩu mấy l&ocirc; rồi, cung kh&ocirc;ng đủ cầu. Anh Th&agrave;nh cho địa chỉ cơ sở sản xuất của anh ở dưới qu&ecirc;, n&oacute;i xuống tham quan, khuy&ecirc;n Tony cứ l&agrave;m đi, ảnh gi&uacute;p cho bao ti&ecirc;u sản phẩm. Mấy th&aacute;ng trời lo dự &aacute;n, chuẩn bị xong xu&ocirc;i hết, m&aacute;y m&oacute;c thiết bị nh&acirc;n lực g&igrave; đầy đủ cả. Tony quyết định xuống tận Tiền Giang đ&oacute;n anh Th&agrave;nh đi khai trương nh&agrave; m&aacute;y.</p>\r\n\r\n<p>V&ocirc; nh&agrave;, n&oacute;i cho tui gặp anh Th&agrave;nh, b&agrave; mẹ n&oacute;i: &ldquo;Nh&agrave; tui c&oacute; &ocirc;ng Th&agrave;nh n&agrave;o đ&acirc;u, chỉ c&oacute; thằng Th&agrave;nh đang học lớp 8, bữa nay n&oacute; đi thi học kỳ một chưa về&rdquo;. M&igrave;nh ngồi chờ để hỏi cho ra nhẽ, thấy n&oacute; đạp xe đi về, cười ha hả, n&oacute;i&rdquo; con tra google rồi tưởng tượng v&agrave; hướng dẫn cho ch&uacute; đ&oacute;, chứ con c&oacute; biết g&igrave; về ng&agrave;nh đ&oacute; đ&acirc;u ch&uacute;. Con c&ograve;n đi học m&agrave;&rdquo;.</p>\r\n\r\n<p><img alt=\"Trên đường băng - Tony Buổi sáng\" src=\"https://reviewsach.net/wp-content/uploads/2017/11/Trên-đường-băng.jpg\" style=\"height:689px; width:1000px\" /></p>\r\n\r\n<h2>Phần 3: D&agrave;nh cho những bạn trẻ th&iacute;ch l&agrave;m kinh doanh lớn.</h2>\r\n\r\n<p>C&oacute; lẽ đặc sắc nhất trong 3 phần th&igrave; vẫn l&agrave; những b&agrave;i viết cuối c&ugrave;ng. Phần 1 &amp; 2 th&igrave; bạn trẻ n&agrave;o cũng cần phải học tập v&agrave; nghiền ngẫm. C&ograve;n phần cuối l&agrave; những b&agrave;i viết d&agrave;nh cho c&aacute;c start up trẻ.</p>\r\n\r\n<p>Tiền đ&acirc;u khởi nghiệp? C&aacute;c bạn trẻ h&atilde;y đọc d&ugrave; chỉ 1 lần? Tr&ecirc;n đường băng. Đ&acirc;y l&agrave; t&ecirc;n của 3 b&agrave;i viết đặc sắc trong nh&oacute;m cuối c&ugrave;ng. Xin d&agrave;nh to&agrave;n bộ thời lượng review cuốn s&aacute;ch n&agrave;y để n&oacute;i về b&agrave;i viết cuối c&ugrave;ng.</p>\r\n\r\n<p><img alt=\"Trên đường băng của tác giả Tony Buổi sáng\" src=\"https://reviewsach.net/wp-content/uploads/2017/11/Trên-đường-băng-TnBS.jpg\" style=\"height:443px; width:665px\" /></p>\r\n\r\n<p>Một trong những b&agrave;i viết hay nhất của cuốn s&aacute;ch -Tr&ecirc;n đường băng</p>\r\n\r\n<p>Với b&agrave;i viết Tr&ecirc;n đường băng, t&aacute;c giả lấy v&iacute; dụ về việc l&agrave;m sao tiết kiệm đủ tiền chỉ với 6 triệu đồng lương/th&aacute;ng để c&oacute; thể t&iacute;ch vốn khởi nghiệp</p>\r\n\r\n<p>+) Ăn: tự nấu hoặc ăn b&igrave;nh d&acirc;n. Ăn chay hoặc ăn luộc, hạn chế đồ ăn nhiều dầu mỡ để tốt cho sức khoẻ.</p>\r\n\r\n<p>+) Ở: h&atilde;y ở trọ xa, đi xe bus. Điều n&agrave;y nghe thật kỳ cục. Nhưng nếu bạn đọc biết tư duy, sẽ nhận ra v&agrave;i điều đặc biệt trong những lời văn n&agrave;y. C&oacute; lẽ cũng kh&ocirc;ng n&ecirc;n b&igrave;nh luận g&igrave; th&ecirc;m về phần ở trọ</p>\r\n\r\n<p>+) Chơi: n&ecirc;n mời bạn b&egrave; ăn hai lần mỗi th&aacute;ng. H&atilde;y chọn bạn b&egrave; l&agrave; những người đang l&agrave;m c&ocirc;ng ty lớn, đang khởi nghiệp. C&aacute; mập th&igrave; qu&acirc;y quần dưới đ&aacute;y s&acirc;u, c&aacute; l&ograve;ng tong th&igrave; nhao nhao tr&ecirc;n mặt nước, cạnh tranh việc đớp bọt. Khoe quần &aacute;o, b&agrave;n chuyện ca sĩ n&agrave;y diễn vi&ecirc;n kia, b&igrave;nh luận t&ograve; m&ograve; Tony Buổi s&aacute;ng l&agrave; ai,&hellip;chỉ c&oacute; đ&aacute;m l&ograve;ng tong. Đ&aacute;m c&aacute; lớn sống im lặng.</p>\r\n\r\n<p>+) Học: d&agrave;nh &iacute;t nhất 10$ mỗi th&aacute;ng để học. C&oacute; thể mua s&aacute;ch, học đ&agrave;n piano, học tiếng anh hay bất cứ thứ g&igrave; m&igrave;nh th&iacute;ch, miễn l&agrave; học để mở mang kiến thức!</p>\r\n\r\n<p>+) Đi du lịch: mỗi th&aacute;ng để d&agrave;nh 1 tr cho việc đi chơi, mỗi năm sẽ d&agrave;nh ra được 12 triệu. H&atilde;y biết sang trang, h&atilde;y biết xuống d&ograve;ng. Nếu 30 tuổi m&agrave; chưa đi đ&acirc;u đi đ&oacute; th&igrave; cuộc đời mới chỉ ở 1 trang s&aacute;ch đầu ti&ecirc;n m&agrave; th&ocirc;i.</p>\r\n\r\n<p>+) Để d&agrave;nh: để 1 triệu trong ng&acirc;n h&agrave;ng, coi như kh&ocirc;ng c&oacute;, kh&ocirc;ng ti&ecirc;u. D&agrave;nh để l&agrave;m vốn khởi nghiệp về sau hoặc ph&ograve;ng khi c&oacute; việc đột xuất.</p>\r\n\r\n<h3>Về mức lương</h3>\r\n\r\n<p>Kh&aacute; nhiều bạn trẻ than phiền về mức lương m&atilde;i kh&ocirc;ng tăng. Tuy nhi&ecirc;n Tony khuy&ecirc;n rằng, h&atilde;y cống hiến. Đừng sợ người kh&aacute;c kh&ocirc;ng thấy nỗ lực của m&igrave;nh. Đừng kh&ocirc;n theo kiểu t&ocirc;i c&oacute; được g&igrave; kh&ocirc;ng, l&agrave;m nhiều lắm rồi lương cũng vậy. Tư duy n&agrave;y khiến m&igrave;nh ngh&egrave;o miết. H&atilde;y cố gắng l&agrave;m th&ecirc;m giờ, h&atilde;y l&agrave;m th&ecirc;m việc ở cơ quan, l&agrave;m sớm hơn, về trễ hơn.</p>\r\n\r\n<p><em>Thực ra những vấn đề n&oacute;i tr&ecirc;n chỉ đ&uacute;ng một phần. Rất nhiều doanh nghiệp kh&ocirc;ng c&oacute; kh&aacute;i niệm tăng lương. Đặc biệt như trong ng&agrave;nh Digital Marketing, rất nhiều Agency đuổi việc h&agrave;ng loạt nh&acirc;n sự chủ chốt &amp; tuyển dụng li&ecirc;n tục nh&acirc;n sự mới. Agency l&agrave;m vậy v&igrave; nh&acirc;n sự mới th&igrave; &ldquo;ngon, bổ, rẻ&rdquo; hơn nhiều so với lứa nh&acirc;n sự đ&atilde; được đ&agrave;o tạo.&nbsp;</em></p>\r\n\r\n<p><em>Thế n&ecirc;n, nếu bạn trẻ h&atilde;y tỉnh t&aacute;o, trong trường hợp như l&agrave;m việc ở Agency n&oacute;i tr&ecirc;n th&igrave; h&atilde;y nghỉ việc sớm nhất c&oacute; thể, l&agrave;m l&acirc;u d&agrave;i ở đ&acirc;y l&agrave; một v&iacute; dụ về sự m&ugrave; qu&aacute;ng. Tuy nhi&ecirc;n điều quan trọng l&agrave; h&atilde;y học tập, h&atilde;y cố gắng cống hiến hết sức c&oacute; thể, khi c&ograve;n l&agrave;m việc d&ugrave; ở bất cứ đ&acirc;u. Tuỳ cơ ứng biến nh&eacute;, c&aacute;c bạn trẻ.</em></p>\r\n\r\n<p>Để kết th&uacute;c b&agrave;i viết review n&agrave;y, xin d&agrave;nh tặng những vần thơ được Tony Buổi S&aacute;ng đặt ở cuối cuốn s&aacute;ch Tr&ecirc;n đường băng:</p>\r\n\r\n<p>Cứ ở m&atilde;i ao l&agrave;ng, ao rồi sẽ cạn</p>\r\n\r\n<p>Sao kh&ocirc;ng ra s&ocirc;ng ra biển để vẫy v&ugrave;ng</p>\r\n\r\n<p>Sao cứ tự tr&oacute;i m&igrave;nh trong nếp nghĩ b&ugrave;ng nh&ugrave;ng</p>\r\n\r\n<p>Sao cứ m&atilde;i online v&agrave; thở d&agrave;i ngao ng&aacute;n</p>\r\n\r\n<p>Sao cứ để tuổi trẻ tr&ocirc;i qua thật ch&aacute;n&hellip;.</p>\r\n\r\n<p>Tr&ecirc;n đường băng s&acirc;n bay mỗi đời người</p>\r\n\r\n<p>C&oacute; những kẻ đang chạy đ&agrave; v&agrave; cất c&aacute;nh!</p>', '[tony-buoi-sang]-tren-duong-bang--thuc-tinh-cam-hung-cho-nguoi-tre-1514213956.jpg', 'Huy', 1, '[tony-buoi-sang]-tren-duong-bang--thuc-tinh-cam-hung-cho-nguoi-tre', '2017-12-25 21:59:16', '2017-12-25 22:17:06');
INSERT INTO `blog_news` (`id`, `title`, `content`, `main_image`, `author`, `breaking`, `url_blog`, `created_at`, `updated_at`) VALUES
(4, '12 cuốn sách hay mùa Giáng sinh', '<h2>&quot;Gi&aacute;ng sinh y&ecirc;u thương&quot;, &quot;C&ocirc; b&eacute; b&aacute;n di&ecirc;m&quot;, &quot;Father Christmas&quot;... mang đến h&agrave;nh tr&igrave;nh th&uacute; vị, c&acirc;u chuyện cảm động cho thiếu nhi.</h2>\r\n\r\n<p><strong>1. &quot;A Ch</strong><strong>ristmas carol&quot; (Gi&aacute;ng sinh y&ecirc;u thương) của Charles Dickens</strong></p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" style=\"width:420px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Bìa cuốn sách Giáng sinh yêu thương.\" src=\"https://i-giaitri.vnecdn.net/2017/12/21/giang-sinh-yeu-thuong-mua-sach-9261-3790-1513841662.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>B&igrave;a cuốn s&aacute;ch &quot;Gi&aacute;ng sinh y&ecirc;u thương&quot;.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Đại văn h&agrave;o Charles Dickens viết <em>Gi&aacute;ng sinh y&ecirc;u thương</em> v&agrave;o năm 1843 khi &ocirc;ng 30 tuổi. Những c&acirc;u chuyện trong t&aacute;c phẩm được lấy cảm hứng từ trải nghiệm cuộc sống của nh&agrave; văn. C&acirc;u chuyện khắc họa sống động nh&acirc;n vật Ebenezer Scrooge keo kiệt, gắt gỏng. Tuy nhi&ecirc;n, &ocirc;ng gi&agrave; kh&oacute; ưa n&agrave;y đ&atilde; c&oacute; chuyển biến lớn về tư tưởng, t&igrave;nh cảm, nhận thức sau cuộc gh&eacute; thăm của những &quot;vị kh&aacute;ch si&ecirc;u nhi&ecirc;n&quot; trong đ&ecirc;m Gi&aacute;ng sinh như hồn ma vất vưởng Jacob Marley.</p>\r\n\r\n<p>Nh&acirc;n vật Ebenezer Scrooge l&agrave; hiện th&acirc;n của m&ugrave;a đ&ocirc;ng khắc nghiệt. Tuy vậy, tr&aacute;i tim của Scrooge trong thẳm s&acirc;u vẫn le l&oacute;i ngọn lửa thiện ch&acirc;n.</p>\r\n\r\n<p>Năm 2009, bộ phim hoạt h&igrave;nh 3D c&ugrave;ng t&ecirc;n chuyển thể từ cuốn s&aacute;ch ra mắt c&ocirc;ng ch&uacute;ng.</p>\r\n\r\n<p><strong>2. &quot;Father Christmas&quot; của Raymond Briggs</strong></p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"12 cuốn sách hay mùa Giáng sinh - 1\" src=\"https://i-giaitri.vnecdn.net/2017/12/21/Briggs1-6540-1513860394.jpg\" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Trong cuốn s&aacute;ch, &ocirc;ng gi&agrave; Noel thức giấc v&agrave;o đ&ecirc;m 24/12 để bắt đầu thời gian l&agrave;m việc d&agrave;i nhất của m&igrave;nh trong năm. &Ocirc;ng đi khắp thế giới, gặp nhiều c&acirc;u chuyện vui cũng như những vấn đề rắc rối. Trong khi hầu hết cuốn s&aacute;ch viết về Gi&aacute;ng sinh t&igrave;m c&aacute;ch kh&aacute;m ph&aacute; sự kỳ diệu của ph&eacute;p thuật th&igrave; điểm kh&aacute;c biệt của <em>Father Christmas</em> l&agrave; phơi b&agrave;y những mặt tr&aacute;i trong cuộc sống.</p>\r\n\r\n<p><strong>3. &quot;A child&#39;s Christmas in Wales&quot; của Dylan Thomas</strong></p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"12 cuốn sách hay mùa Giáng sinh - 2\" src=\"https://i-giaitri.vnecdn.net/2017/12/21/09-1291-1513860394.jpg\" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Dylan Thomas viết cuốn s&aacute;ch v&agrave;o năm 1952. T&aacute;c phẩm gần như tự truyện v&igrave; Thomas nghĩ về m&ugrave;a đ&ocirc;ng v&agrave; trải nghiệm bản th&acirc;n trong dịp Gi&aacute;ng sinh. Cuốn s&aacute;ch mang lại cho độc giả nhiều cảm x&uacute;c với những giọt nước mắt, kỷ niệm ấm &aacute;p thời ấu thơ.</p>\r\n\r\n<p><strong>4. &quot;Little women&quot; của Lousia May Alcott</strong></p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" style=\"width:420px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"12 cuốn sách hay mùa Giáng sinh - 3\" src=\"https://i-giaitri.vnecdn.net/2017/12/21/little-women-4204-1513860395.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Cuốn s&aacute;ch được viết v&agrave;o năm 1868, dựa tr&ecirc;n ch&iacute;nh những trải nghiệm của nh&agrave; văn người Mỹ - Louisa May Alcott. Qua cuốn s&aacute;ch, độc giả biết về cuộc sống từ ấu thơ đến khi trưởng th&agrave;nh của bốn chị em Meg, Jo, Beth v&agrave; Amy. Cuộc nội chiến Mỹ k&eacute;o d&agrave;i khiến cha của bốn c&ocirc; g&aacute;i mất việc, phải xa nh&agrave; t&igrave;m chỗ l&agrave;m mới, gia đ&igrave;nh rơi v&agrave;o cảnh ngh&egrave;o t&uacute;ng. Điều đ&oacute; khiến c&aacute;c c&ocirc; nỗ lực l&agrave;m việc để cải thiện đời sống. V&agrave;o dịp Gi&aacute;ng sinh, bốn c&ocirc; g&aacute;i cảm thấy tủi th&acirc;n khi gia đ&igrave;nh kh&ocirc;ng thể sum vầy v&igrave; vắng cha.</p>\r\n\r\n<p>Năm 2009, cuốn s&aacute;ch được ph&aacute;t h&agrave;nh tại Việt Nam.</p>\r\n\r\n<p><strong>5. &quot;Holidays on ice&quot; của David Sedaris</strong></p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" style=\"width:420px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Cuốn sách xuất bản năm 1997.\" src=\"https://i-giaitri.vnecdn.net/2017/12/21/03-9451-1513841662.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Cuốn s&aacute;ch xuất bản năm 1997.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Cuốn s&aacute;ch l&agrave; tuyển tập truyện ngắn, b&agrave;i viết về Gi&aacute;ng sinh của David Sedaris. Trong <em>Holidays on ice</em>, Sedaris ghi lại c&acirc;u chuyện đ&ecirc;m Noel c&ugrave;ng em g&aacute;i - Lisa - giải cứu c&ocirc; g&aacute;i bị quấy rối t&igrave;nh dục tại cửa h&agrave;ng tạp h&oacute;a.</p>\r\n\r\n<p><strong>6. &quot;The Snowman&quot; của Raymond Briggs</strong></p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"12 cuốn sách hay mùa Giáng sinh - 5\" src=\"https://i-giaitri.vnecdn.net/2017/12/21/cover-9790-1513860395.jpg\" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&quot;T&ocirc;i nhớ m&ugrave;a đ&ocirc;ng v&igrave; tuyết rơi d&agrave;y đặc. Tuyết rơi suốt đ&ecirc;m v&agrave; buổi s&aacute;ng t&ocirc;i thức dậy trong căn ph&ograve;ng tr&agrave;n ngập &aacute;nh s&aacute;ng. Cả thế giới dường như bị giữ lại trong tĩnh lặng. Đ&oacute; l&agrave; những ng&agrave;y kỳ diệu khiến t&ocirc;i viết <em>The </em><em>Snowman</em>&quot;, Raymond Briggs chia sẻ.</p>\r\n\r\n<p>Đ&ecirc;m Gi&aacute;ng sinh, người tuyết dẫn cậu b&eacute; (nh&acirc;n vật trong truyện) v&agrave;o h&agrave;nh tr&igrave;nh phi&ecirc;u lưu, kh&aacute;m ph&aacute; Bắc cực.</p>\r\n\r\n<p>Ra đời năm 1982, bộ phim hoạt h&igrave;nh 2D kh&ocirc;ng lời thoại - <em>The Snowman -</em> chuyển thể từ cuốn s&aacute;ch<em> </em>c&ugrave;ng t&ecirc;n đ&atilde; đ&aacute;nh thức tr&iacute; tưởng tượng của nhiều trẻ em tr&ecirc;n thế giới. Những h&igrave;nh ảnh đ&aacute;ng nhớ của phim như con ngựa hoang tr&ecirc;n đồng cỏ, c&aacute; voi v&ugrave;ng vẫy tr&ecirc;n biển hay cực quang được khắc họa mộc mạc, gần gũi với lứa tuổi trẻ thơ.</p>\r\n\r\n<p>C&ugrave;ng năm, bộ phim được đề cử giải Oscar cho &quot;Phim hoạt h&igrave;nh ngắn xuất sắc&quot;.</p>\r\n\r\n<p><strong>7.&nbsp;<em> </em>&quot;The dark is rising&quot; của Susan Copper</strong></p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"12 cuốn sách hay mùa Giáng sinh - 6\" src=\"https://i-giaitri.vnecdn.net/2017/12/21/00-3602-1513842329.jpg\" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Cuốn s&aacute;ch viết về cuộc chiến tranh giữa c&aacute;i thiện v&agrave; c&aacute;i &aacute;c, b&oacute;ng tối v&agrave; &aacute;nh s&aacute;ng. B&oacute;ng tối v&agrave; b&atilde;o tuyết ngự trị thế giới trong <em>The dark rising</em>. Vạn vật bị đ&oacute;ng băng, thiếu sức sống. Will - nh&acirc;n vật ch&iacute;nh trong truyện - g&aacute;nh v&aacute;c sứ mệnh giải cứu mu&ocirc;n lo&agrave;i tho&aacute;t khỏi t&igrave;nh trạng diệt vong. Cậu c&ugrave;ng những người bạn thực hiện h&agrave;nh tr&igrave;nh t&igrave;m &aacute;nh s&aacute;ng, chống lại &acirc;m mưu hủy diệt của thế lực b&oacute;ng đ&ecirc;m.</p>\r\n\r\n<p>Năm 2007, bộ phim <em>Quyền lực b&oacute;ng đ&ecirc;m</em> được chuyển thể từ t&aacute;c phẩm <em>The dark is rising </em>ra mắt kh&aacute;n giả.</p>\r\n\r\n<p><strong>8. &quot;Mog&#39;s Christmas&quot; của Judith Kerr</strong></p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" style=\"width:420px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"[Caption]\" src=\"https://i-giaitri.vnecdn.net/2017/12/21/000-1346-1513860395.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Cuốn s&aacute;ch do nh&agrave; xuất bản ph&aacute;t h&agrave;nh năm 2016.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>T&aacute;c phẩm kể về ch&uacute; m&egrave;o hậu đậu - Mog - g&acirc;y ra tai họa trước thềm Gi&aacute;ng sinh. Cuốn s&aacute;ch l&agrave; một trong những hiện tượng xuất bản trong năm 2015 với h&agrave;ng trăm ng&agrave;n bản được ti&ecirc;u thụ tại Anh ngay trong tuần đầu ti&ecirc;n ra mắt.</p>\r\n\r\n<p><strong>9. &quot;Letters from father Christmas&quot; của J.R.R Tolkien</strong></p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"12 cuốn sách hay mùa Giáng sinh - 8\" src=\"https://i-giaitri.vnecdn.net/2017/12/21/02-4710-1513841662.jpg\" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Nội dung cuốn s&aacute;ch như những bức thư Tolkien gửi cho con v&agrave;o dịp Gi&aacute;ng sinh h&agrave;ng năm. Nh&agrave; văn kể về cuộc sống tr&ecirc;n Bắc cực - qu&ecirc; hương của &ocirc;ng gi&agrave; Noel. Tại đ&oacute;, những c&acirc;u chuyện về đ&agrave;n tuần lộc v&agrave; gấu k&iacute;ch th&iacute;ch tr&iacute; tưởng tượng, niềm h&agrave;o hứng cho trẻ thơ.</p>\r\n\r\n<p><strong>10.&nbsp; &quot;The little match girl&quot;<em> </em>(C&ocirc; b&eacute; b&aacute;n di&ecirc;m) của Hans Christian Andersen</strong></p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" style=\"width:420px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Cô bé bán diêm xuất bản năm 1848.\" src=\"https://i-giaitri.vnecdn.net/2017/12/21/130-8225-1513842329.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&quot;C&ocirc; b&eacute; b&aacute;n di&ecirc;m&quot; xuất bản năm 1848.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><em>C&ocirc; b&eacute; b&aacute;n di&ecirc;m</em> được xuất bản lần đầu năm 1848 trong phần năm của cuốn <em>Nye Eventyr</em> (Những truyện cổ t&iacute;ch mới). C&acirc;u chuyện về c&ocirc; b&eacute; ngh&egrave;o khổ đi b&aacute;n di&ecirc;m trong đ&ecirc;m Gi&aacute;ng sinh v&agrave; từ gi&atilde; c&otilde;i đời trong gi&aacute; r&eacute;t m&ugrave;a đ&ocirc;ng đ&atilde; lấy đi nước mắt của h&agrave;ng triệu người trong hơn 150 năm qua. Kết cục kh&ocirc;ng giống như cổ t&iacute;ch truyền thống nhưng lại đậm chất nh&acirc;n văn đ&atilde; biến <em>C&ocirc; b&eacute; b&aacute;n di&ecirc;m</em> th&agrave;nh t&aacute;c phẩm bất hủ của nh&agrave; văn Hans Christian Andersen v&agrave; được lưu truyền qua nhiều thế hệ.</p>\r\n\r\n<p><strong>11. &quot;A Christmas memory&quot; của Truman Capote</strong></p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" style=\"width:420px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"A christmas memory xuất bản năm 1956\" src=\"https://i-giaitri.vnecdn.net/2017/12/21/01-4703-1513841662.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&quot;A christmas memory&quot; xuất bản năm 1956.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>T&aacute;c phẩm viết về niềm h&aacute;o hức chuẩn bị đ&oacute;n Gi&aacute;ng sinh của Buddy v&agrave; chị họ. Ho&agrave;n cảnh gia đ&igrave;nh kh&oacute; khăn nhưng Buddy lu&ocirc;n mong c&oacute; kỳ Gi&aacute;ng sinh &yacute; nghĩa. Cậu c&ugrave;ng chị họ quyết định tiết kiệm đồng xu để mua qu&agrave; cho mọi người. Gi&aacute;ng sinh đến, cả hai mua nguy&ecirc;n liệu về l&agrave;m b&aacute;nh rồi gửi cho những người họ quen hoặc chỉ gặp một, hai lần. Sau đ&oacute;, hai người v&agrave;o rừng, chặt c&acirc;y th&ocirc;ng Noel mang về nh&agrave;.</p>\r\n\r\n<p>Hai chị em d&agrave;nh cả ng&agrave;y để trang tr&iacute; c&acirc;y v&agrave; g&oacute;i qu&agrave; tặng người th&acirc;n. Buổi s&aacute;ng Gi&aacute;ng sinh, Buddy c&ugrave;ng chị họ dậy sớm v&agrave; mở những m&oacute;n qu&agrave; m&agrave; hai người chuẩn bị cho nhau. Đ&oacute; cũng l&agrave; lần cuối Buddy đ&oacute;n Gi&aacute;ng sinh c&ugrave;ng chị họ bởi kh&ocirc;ng l&acirc;u sau, cậu được đưa đến học tại trường qu&acirc;n sự.</p>\r\n\r\n<p><strong>12. &quot;The polar express&quot; của Chris van Allburg</strong></p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"12 cuốn sách hay mùa Giáng sinh - 11\" src=\"https://i-giaitri.vnecdn.net/2017/12/21/12-3438-1513841662.jpg\" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Cuốn s&aacute;ch n&oacute;i về cậu b&eacute; sống tại một đ&ocirc; thị Mỹ thập ni&ecirc;n 1950 với niềm tin &ocirc;ng gi&agrave; Noel l&agrave; c&oacute; thật. Trong đ&ecirc;m Gi&aacute;ng sinh, cậu b&eacute; bắt gặp chuyến t&agrave;u tốc h&agrave;nh tới Bắc cực đi ngang qua nh&agrave; m&igrave;nh. Cậu bước l&ecirc;n t&agrave;u v&agrave; bắt đầu chuyến phi&ecirc;u lưu đầy kỳ th&uacute; tới xứ sở của những điều kỳ diệu.</p>\r\n\r\n<p>Năm 2004, bộ phim <em>The polar express </em>chuyển thể từ cuốn s&aacute;ch c&ugrave;ng t&ecirc;n ra mắt c&ocirc;ng ch&uacute;ng. Phim do Robert Zemeckis l&agrave;m đạo diễn.</p>', '12-cuon-sach-hay-mua-giang-sinh-1514214318.jpg', 'Trọng Trường', 1, '12-cuon-sach-hay-mua-giang-sinh', '2017-12-25 22:05:18', '2017-12-25 22:17:19'),
(5, '6 cuốn sách bạn nên đọc trước khi tốt nghiệp', '<h2>Dưới đ&acirc;y l&agrave; 6 cuốn s&aacute;ch sẽ gi&uacute;p bạn chạm v&agrave;o thế giới thực.</h2>\r\n\r\n<p>Bạn biết kh&ocirc;ng? Những th&aacute;ng năm học đại học của bạn l&agrave; thời gian để bạn tập dượt v&agrave; thu nạp kiến thức v&agrave; kỹ năng cho sự nghiệp tương lai của bạn. V&agrave; nếu bạn thực sự muốn c&oacute; được th&agrave;nh c&ocirc;ng th&igrave; đ&acirc;y kh&ocirc;ng phải l&agrave; thời gian để bạn lơi l&agrave;. Trường đại học đ&atilde; dạy bạn v&ocirc; điều kiện về cuộc sống, ứng xử, kỹ năng giao tiếp v&agrave; cả c&ocirc;ng việc nh&agrave; nữa.&nbsp;</p>\r\n\r\n<p>Dưới đ&acirc;y l&agrave; 6 cuốn s&aacute;ch sẽ gi&uacute;p bạn chạm v&agrave;o thế giới thực.</p>\r\n\r\n<p><strong>Từ trường đại học đến sự nghiệp: Để th&agrave;nh c&ocirc;ng trong thế giới thực của Lindsey Pollak </strong></p>\r\n\r\n<div type=\"Photo\">\r\n<div><a href=\"https://kenh14cdn.com/2016/img-4134-1-1477998997332.jpg\" target=\"_blank\"><img alt=\"6 cuốn sách bạn nên đọc trước khi tốt nghiệp - Ảnh 1.\" src=\"https://kenh14cdn.com/2016/img-4134-1-1477998997332.jpg\" style=\"width:100%\" /></a></div>\r\n</div>\r\n\r\n<p>Chắc chắn, bạn đ&atilde; học được những điều cơ bản để t&igrave;m kiếm một c&ocirc;ng việc ở trường đại học của bạn, nhưng bạn c&oacute; thực sự nhớ hết tất cả? Đ&acirc;y ch&iacute;nh l&agrave; cuốn s&aacute;ch sẽ hướng dẫn bạn chuẩn bị hồ sơ online, ngoại h&igrave;nh, đơn xin việc, v&agrave; mạng lưới bạn cần thiết lập để t&igrave;m kiếm c&ocirc;ng việc của bạn. Pollack sẽ cho bạn biết l&yacute; do để l&agrave;m từng bước tr&ecirc;n v&agrave; để bạn thấy rằng chẳng c&oacute; bước n&agrave;o l&agrave; v&ocirc; &iacute;ch cả. Nếu bạn ho&agrave;n th&agrave;nh tất cả c&aacute;c nhiệm vụ c&oacute; trong cuốn s&aacute;ch n&agrave;y, bạn sẽ l&agrave; một ứng vi&ecirc;n cực kỳ tiềm năng rồi.</p>\r\n\r\n<p><strong>Sổ tay gia đ&igrave;nh Martha Stewart&rsquo;s: hướng dẫn c&aacute;ch chăm s&oacute;c mọi thứ trong nh&agrave; của Martha Stewart</strong></p>\r\n\r\n<div type=\"Photo\">\r\n<div><a href=\"https://kenh14cdn.com/2016/81y2qphwfcl-1477999087503.jpg\" target=\"_blank\"><img alt=\"6 cuốn sách bạn nên đọc trước khi tốt nghiệp - Ảnh 2.\" src=\"https://kenh14cdn.com/thumb_w/650/2016/81y2qphwfcl-1477999087503.jpg\" /></a></div>\r\n</div>\r\n\r\n<p>Cho d&ugrave; bạn sống trong một k&yacute; t&uacute;c x&aacute; hoặc trong một căn hộ, dọn dẹp nh&agrave; cửa l&agrave; điều quan trọng nhất bạn phải l&agrave;m. Ở ri&ecirc;ng đ&ograve;i hỏi bạn phải biết giữ g&igrave;n, chăm s&oacute;c cho ng&ocirc;i nh&agrave; của bạn. Cuốn s&aacute;ch n&agrave;y sẽ hướng dẫn bạn l&agrave;m việc nh&agrave; theo c&aacute;ch tối giản v&agrave; khoa học nhất. V&agrave; c&oacute; thể bạn sẽ t&igrave;m cuốn s&aacute;ch n&agrave;y trước khi mẹ đến thăm nh&agrave; bạn đấy!</p>\r\n\r\n<p><strong>Đắc nh&acirc;n t&acirc;m của Dale Carnegie</strong></p>\r\n\r\n<div type=\"Photo\">\r\n<div><a href=\"https://kenh14cdn.com/2016/810iasgmuyl-1477999147417.jpg\" target=\"_blank\"><img alt=\"6 cuốn sách bạn nên đọc trước khi tốt nghiệp - Ảnh 3.\" src=\"https://kenh14cdn.com/2016/810iasgmuyl-1477999147417.jpg\" /></a></div>\r\n</div>\r\n\r\n<p>Đ&acirc;y l&agrave; một trong những cuốn s&aacute;ch nổi tiếng b&aacute;n chạy nhất thế giới. Đắc nh&acirc;n t&acirc;m gi&uacute;p người đọc tự r&egrave;n luyện bản th&acirc;n bằng c&aacute;ch đưa ra những lời khuy&ecirc;n về c&aacute;ch ứng xử, giao tiếp để đạt được th&agrave;nh c&ocirc;ng trong cuộc sống. S&aacute;ch c&ograve;n hướng dẫn c&aacute;ch &quot;tr&ocirc;ng mặt m&agrave; bắt h&igrave;nh dong&quot;, c&aacute;ch g&acirc;y thiện cảm, hướng dẫn v&agrave; chỉ đạo người kh&aacute;c. H&atilde;y tập những th&oacute;i quen tốt m&agrave; cuốn s&aacute;ch cuốn s&aacute;ch đ&atilde; chỉ dẫn để tập cho m&igrave;nh những kỹ năng tốt bạn nh&eacute;.</p>\r\n\r\n<p><strong>7 th&oacute;i quen của bạn trẻ th&agrave;nh đạt của Stephen R. Covey</strong></p>\r\n\r\n<div type=\"Photo\">\r\n<div><a href=\"http://bait.vn/book_image/6-cuon-sach-ban-nen-doc-truoc-khi-tot-nghiep-1514214599.jpg\" target=\"_blank\"><img alt=\"6 cuốn sách bạn nên đọc trước khi tốt nghiệp - Ảnh 4.\" src=\"https://kenh14cdn.com/thumb_w/650/2016/stephen-covery-books-750-1477999209548.jpg\" /></a></div>\r\n</div>\r\n\r\n<p>Đ&acirc;y l&agrave; một trong những cuốn s&aacute;ch được t&igrave;m đọc nhiều nhất tr&ecirc;n c&aacute;c kệ sạch.&nbsp; Được coi như l&agrave; một c&ocirc;ng cụ sản xuất v&agrave; kinh doanh, cuốn s&aacute;ch n&agrave;y đ&atilde; truyền cảm hứng v&agrave; th&uacute;c đẩy th&agrave;nh c&ocirc;ng cho nhiều người. Khi bạn đang bắt đầu sự nghiệp của bạn, bạn cần c&oacute; định hướng đ&uacute;ng đắn, v&agrave; ch&iacute;nh định hướng sẽ gi&uacute;p bạn ph&aacute;t triển, t&ocirc;i luyện nhưng th&oacute;i quen dẫn đến th&agrave;nh c&ocirc;ng.</p>\r\n\r\n<p><strong>T&ocirc;i t&agrave;i giỏi, bạn cũng thế của Adam Khoo</strong></p>\r\n\r\n<div type=\"Photo\">\r\n<div><a href=\"https://kenh14cdn.com/2016/wgs-3d-book-smaller-735x1024-1477999289365.jpg\" target=\"_blank\"><img alt=\"6 cuốn sách bạn nên đọc trước khi tốt nghiệp - Ảnh 5.\" src=\"https://kenh14cdn.com/thumb_w/650/2016/wgs-3d-book-smaller-735x1024-1477999289365.jpg\" /></a></div>\r\n</div>\r\n\r\n<p>Cuốn s&aacute;ch của Adam Khoo ngay sau khi ph&aacute;t h&agrave;nh với bản dịch tiếng Việt đ&atilde; tạo ra kỷ lục mới cho ng&agrave;nh xuất bản Việt Nam với hơn 200.000 bản in được b&aacute;n ra v&agrave; hơn 400.000 e-book được ph&acirc;n phối.</p>\r\n\r\n<div id=\"admzone474524\">\r\n<div id=\"ads_zone474524\">&nbsp;</div>\r\n</div>\r\n\r\n<p>Đ&acirc;y l&agrave; cuốn s&aacute;ch kể về chặng đường th&agrave;nh c&ocirc;ng của t&aacute;c giả, từ một cậu b&eacute; bất t&agrave;i v&ocirc; dụng, từng xếp thứ hạng 156/160 học sinh ở một trường tệ nhất Singapore, vươn l&ecirc;n trở th&agrave;nh học sinh giỏi nhất lớp, giỏi nhất trường v&agrave; cuối c&ugrave;ng nhờ sự nỗ lực của m&igrave;nh, anh đ&atilde; trở th&agrave;nh một diễn giả t&agrave;i năng, một doanh nh&acirc;n th&agrave;nh đạt v&agrave; một triệu ph&uacute; th&agrave;nh c&ocirc;ng khi mới 26 tuổi.</p>\r\n\r\n<p>Đ&acirc;y l&agrave; cuốn s&aacute;ch đ&atilde; truyền cảm hứng cho rất nhiều bạn sinh vi&ecirc;n để c&oacute; thể tự tin ph&aacute;t huy những kỹ năng, điểm mạnh của bản th&acirc;n v&agrave; th&agrave;nh c&ocirc;ng trong cuộc sống.</p>\r\n\r\n<p><strong>Học kh&ocirc;n ngoan m&agrave; kh&ocirc;ng gian nan của Kevin Paul</strong></p>\r\n\r\n<div type=\"Photo\">\r\n<div><a href=\"https://kenh14cdn.com/2016/hoc-khon-ngoan-ma-khong-gian-nan-1477999577351.jpg\" target=\"_blank\"><img alt=\"6 cuốn sách bạn nên đọc trước khi tốt nghiệp - Ảnh 6.\" src=\"https://kenh14cdn.com/2016/hoc-khon-ngoan-ma-khong-gian-nan-1477999577351.jpg\" /></a></div>\r\n</div>\r\n\r\n<p>Đ&acirc;y l&agrave; một cuốn s&aacute;ch th&uacute; vị gi&uacute;p bạn c&oacute; những mẹo hay để học tập, quản l&yacute; thời gian, ghi nhớ khoa học v&agrave; đạt được những mục ti&ecirc;u đ&atilde; đề ra. Cuốn s&aacute;ch c&ograve;n vạch trần những điều nhiều sinh vi&ecirc;n đang hoang tưởng li&ecirc;n quan đến kỹ năng học tập để c&oacute; thể học tập hiệu quả m&agrave; kh&ocirc;ng tốn qu&aacute; nhiều sức lực.</p>', '6-cuon-sach-ban-nen-doc-truoc-khi-tot-nghiep-1514214599.jpg', 'Quỳnh Trang', NULL, '6-cuon-sach-ban-nen-doc-truoc-khi-tot-nghiep', '2017-12-25 22:09:59', '2017-12-25 22:10:34'),
(6, 'Mourinho bất ngờ ra mắt cuốn sách đầu tiên', '<h2>Đang trong thời điểm &quot;nước s&ocirc;i lửa bỏng&quot;, chiến lược gia người Bồ Đ&agrave;o Nha vẫn xuất bản cuốn s&aacute;ch n&oacute;i về triết l&yacute; huấn luyện của m&igrave;nh.</h2>\r\n\r\n<p>Thời điểm n&agrave;y, Chelsea đang c&oacute; chuỗi th&agrave;nh t&iacute;ch v&ocirc; c&ugrave;ng tệ hại. Hiện nh&agrave; ĐKVĐ Premier League mới c&oacute; vỏn vẹn 2 trận thắng kể từ đầu m&ugrave;a, đứng thứ 16 tr&ecirc;n BXH với 8 điểm.<br />\r\n&nbsp;</p>\r\n\r\n<div style=\"text-align:center\"><img alt=\"mou2d-2d4d3\" src=\"http://bait.vn/book_image/mourinho-bat-ngo-ra-mat-cuon-sach-dau-tien-1514214741.jpg\" style=\"height:375px; width:600px\" /><br />\r\n<em>Mourinho ra mắt cuốn s&aacute;ch đầu tay n&oacute;i về triết l&yacute; huấn luyện trong thời điểm Chelsea đang gặp kh&oacute; khăn</em></div>\r\n\r\n<p><br />\r\nMặc d&ugrave; vậy, Mourinho vẫn quyết định lựa chọn thời điểm kh&oacute; khăn n&agrave;y để giới thiệu cuốn s&aacute;ch c&oacute; nội dung đề cập tới triết l&yacute; b&oacute;ng đ&aacute;. Theo đ&oacute;, cuốn s&aacute;ch đầu ti&ecirc;n của Mourinho sẽ được nh&agrave; xuất bản Headline (Anh) ra mắt độc giả trong tuần tới.<br />\r\n<br />\r\nNội dung cuốn s&aacute;ch đề cập về triết l&yacute; b&oacute;ng đ&aacute; c&ugrave;ng những hiểu biết đặc biệt về l&agrave;ng t&uacute;c cầu của chiến lược gia người Bồ Đ&agrave;o Nha. B&ecirc;n cạnh đ&oacute;, HLV Chelsea cũng sẽ t&oacute;m lược to&agrave;n bộ thăng trầm trong suốt 15 năm l&agrave;m việc, để đạt tới đỉnh cao sự nghiệp ng&agrave;y h&ocirc;m nay. Cuốn s&aacute;ch đầu tay của &quot;Người đặc biệt&quot; được kỳ vọng sẽ tạo n&ecirc;n cơn sốt tr&ecirc;n thị trường s&aacute;ch nước Anh cũng như khu vực ch&acirc;u &Acirc;u.</p>\r\n\r\n<p>Ngo&agrave;i ra, theo hợp đồng thỏa thuận giữa đại diện của HLV Mourinho, c&ocirc;ng ty Creative Artists Agency với nh&agrave; xuất bản Headline, thuyền trưởng Chelsea sẽ tiến h&agrave;nh nhiều buổi đối thoại tuy&ecirc;n truyền s&aacute;ch, bắt đầu tại hiệu s&aacute;ch Waterstones tr&ecirc;n đường Piccadilly, thủ đ&ocirc; London.<br />\r\n&nbsp;</p>\r\n\r\n<div align=\"center\">\r\n<div style=\"text-align:center\"><img alt=\"mou1-7b3a5\" src=\"https://kenh14cdn.com/thumb_w/600/ec6f56bb4c/2015/10/08/mou1-7b3a5.png\" /></div>\r\n<em>Người h&acirc;m mộ c&oacute; cơ hội đối thoại với HLV t&agrave;i năng, c&aacute; t&iacute;nh bậc nhất thế giới</em></div>\r\n\r\n<p><br />\r\n&Ocirc;ng Jonathan Taylor, Gi&aacute;m đốc phụ tr&aacute;ch thể loại phi tiểu thuyết của nh&agrave; xuất bản Headline cho biết họ đ&atilde; mua được quyền xuất bản cuốn s&aacute;ch đầu ti&ecirc;n của HLV Mourinho sau nhiều th&aacute;ng đ&agrave;m ph&aacute;n v&agrave;o th&aacute;ng 5 năm nay. Ban đầu, cuốn s&aacute;ch n&agrave;y dự kiến sẽ xuất hiện tr&ecirc;n c&aacute;c kệ s&aacute;ch tr&ecirc;n to&agrave;n nước Anh v&agrave;o ng&agrave;y 8/10. Tuy nhi&ecirc;n, do một số vấn đề trục trặc, việc ra mắt cuốn s&aacute;ch n&agrave;y đ&atilde; bị l&ugrave;i lại.</p>', 'mourinho-bat-ngo-ra-mat-cuon-sach-dau-tien-1514214741.jpg', 'Bích Hà', NULL, 'mourinho-bat-ngo-ra-mat-cuon-sach-dau-tien', '2017-12-25 22:12:21', '2017-12-25 22:12:45');

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
  `recommend_book` tinyint(4) DEFAULT NULL,
  `url_book` varchar(200) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `detail`, `id_type`, `author`, `image`, `total`, `available`, `borrow_time`, `recommend_book`, `url_book`, `created_at`, `updated_at`) VALUES
(1, 'Đánh thức con người phi thường trong bạn', '<p>s&aacute;ch mới</p>\n\n<p><img alt=\"\" src=\"http://bait.vn/book_image/tren-duong-bang.jpg\" style=\"height:600px; width:800px\" /></p>', 1, 'Anthony Robbins', '', 20, 20, 7, 0, 'danh-thuc-con-nguoi-phi-thuong-trong-ban', '2017-12-24 14:26:07', '2017-12-24 14:26:31'),
(2, 'Bốn mùa cuộc sống - Châm ngôn ngày mới', 'sách mới', 1, 'Jim Rohn', '', 20, 20, 7, 0, 'bon-mua-cuoc-song--cham-ngon-ngay-moi', '2017-12-24 14:26:08', '2017-12-24 14:26:32'),
(3, 'Biến lạ thành quen', 'sách mới', 1, 'Vũ Quần Phương', '', 20, 20, 7, 0, 'bien-la-thanh-quen', '2017-12-24 14:26:08', '2017-12-24 14:26:32'),
(4, 'Quốc gia khởi nghiệp', 'sách mới', 1, 'Dan Senor, Saul Singer', '', 20, 20, 7, 0, 'quoc-gia-khoi-nghiep', '2017-12-24 14:26:08', '2017-12-24 14:26:32'),
(5, 'Người thông minh học tập như thế nào?', 'sách mới', 1, 'Ronald Gross', '', 20, 20, 7, 0, 'nguoi-thong-minh-hoc-tap-nhu-the-nao', '2017-12-24 14:26:08', '2017-12-24 14:26:32'),
(6, 'Hạnh phúc ở quanh ta', 'sách mới', 1, 'Nguyệt Hòa', '', 20, 20, 7, 0, 'hanh-phuc-o-quanh-ta', '2017-12-24 14:26:08', '2017-12-24 14:26:32'),
(7, 'Bí mật trị vì vương quốc đến quản lí công ty', 'sách mới', 1, 'Shedon Bowles – Richard Silvano – Susan Silvano', '', 20, 20, 7, 1, 'bi-mat-tri-vi-vuong-quoc-den-quan-li-cong-ty', '2017-12-24 14:26:08', '2017-12-24 14:26:32'),
(8, 'Nếu tôi biết được khi còn 20', 'sách mới', 1, 'Tina Seelig', '', 20, 20, 7, 0, 'neu-toi-biet-duoc-khi-con-20', '2017-12-24 14:26:08', '2017-12-24 14:26:32'),
(9, 'Đúng việc', 'sách mới', 1, 'Giản Tư Trung', '', 20, 20, 7, 0, 'dung-viec', '2017-12-24 14:26:08', '2017-12-24 14:26:32'),
(10, 'Đừng bao giờ đi ăn một mình', 'sách mới', 1, 'Keith Ferrazzi', '', 20, 20, 7, 0, 'dung-bao-gio-di-an-mot-minh', '2017-12-24 14:26:09', '2017-12-24 14:26:32'),
(11, 'Mỗi ngày tiết kiệm một giờ', 'sách mới', 1, 'Michael Heppell', '', 20, 20, 7, 0, 'moi-ngay-tiet-kiem-mot-gio', '2017-12-24 14:26:09', '2017-12-24 14:26:32'),
(12, 'Những quyết định thay đổi cuộc sống', 'sách mới', 1, 'Spencer Johnson', '', 20, 20, 7, 0, 'nhung-quyet-dinh-thay-doi-cuoc-song', '2017-12-24 14:26:09', '2017-12-24 14:26:32'),
(13, 'Lời hứa về một cây bút chì', 'sách mới', 1, 'Adam Braun', '', 20, 20, 7, 0, 'loi-hua-ve-mot-cay-but-chi', '2017-12-24 14:26:09', '2017-12-24 14:26:32'),
(14, 'Khai sinh nhà đổi mới', 'sách mới', 1, 'Tony Wagner', '', 20, 20, 7, 1, 'khai-sinh-nha-doi-moi', '2017-12-24 14:26:09', '2017-12-24 14:26:32'),
(15, 'Nói nhiều không bằng nói đúng', 'sách mới', 1, '2.1/2 Bạn Tốt', '', 20, 20, 7, 0, 'noi-nhieu-khong-bang-noi-dung', '2017-12-24 14:26:09', '2017-12-24 14:26:32'),
(16, 'KAIZEN TEIAN', 'sách mới', 1, 'Japan Human Relations Association', '', 20, 20, 7, 0, 'kaizen-teian', '2017-12-24 14:26:09', '2017-12-24 14:26:32'),
(17, 'Cẩm nang nhà tự nhiên kinh tế', 'sách mới', 1, 'Robert H.Frank', '', 20, 20, 7, 0, 'cam-nang-nha-tu-nhien-kinh-te', '2017-12-24 14:26:09', '2017-12-24 14:26:32'),
(18, 'Cái dũng của thánh nhân', 'sách mới', 1, 'Thu Giang Nguyễn Duy Cần', '', 20, 20, 7, 0, 'cai-dung-cua-thanh-nhan', '2017-12-24 14:26:09', '2017-12-24 14:26:32'),
(19, 'Nghệ thuật dùng người', 'sách mới', 1, 'Trung Nghĩa', '', 20, 20, 7, 0, 'nghe-thuat-dung-nguoi', '2017-12-24 14:26:09', '2017-12-24 14:26:32'),
(20, 'Nghệ thuật giao tiếp để thành công', 'sách mới', 1, 'Leil Lowndes', '', 20, 20, 7, 0, 'nghe-thuat-giao-tiep-de-thanh-cong', '2017-12-24 14:26:10', '2017-12-24 14:26:33'),
(21, 'Đường đến thành công', 'sách mới', 1, 'Inamori Kazuo', '', 20, 20, 7, 1, 'duong-den-thanh-cong', '2017-12-24 14:26:10', '2017-12-24 14:26:33'),
(22, 'Những kĩ năng thực hành xã hội cần thiết cho sinh viên', 'sách mới', 1, 'Nhiều tác giả', '', 20, 20, 7, 0, 'nhung-ki-nang-thuc-hanh-xa-hoi-can-thiet-cho-sinh-vien', '2017-12-24 14:26:10', '2017-12-24 14:26:33'),
(23, 'Trí tuệ thông thái', 'sách mới', 1, 'Eran Katz', '', 20, 20, 7, 0, 'tri-tue-thong-thai', '2017-12-24 14:26:10', '2017-12-24 14:26:33'),
(24, 'Sinh viên! Bạn là Sư tử hay Thỏ', 'sách mới', 1, 'Nguyễn Đức', '', 20, 20, 7, 0, 'sinh-vien!-ban-la-su-tu-hay-tho', '2017-12-24 14:26:10', '2017-12-24 14:26:33'),
(25, 'Suối nguồn tươi trẻ 2', 'sách mới', 1, 'Peter Kelder', '', 20, 20, 7, 1, 'suoi-nguon-tuoi-tre-2', '2017-12-24 14:26:10', '2017-12-24 14:26:33'),
(26, 'Quản lí xuyên văn hóa', 'sách mới', 1, 'Charlene M. Solomon - Michael S. Schell', '', 20, 20, 7, 0, 'quan-li-xuyen-van-hoa', '2017-12-24 14:26:10', '2017-12-24 14:26:33'),
(27, 'Đời thay đổi khi chúng ta thay đổi', 'sách mới', 1, 'Andrew Matthews', '', 20, 20, 7, 0, 'doi-thay-doi-khi-chung-ta-thay-doi', '2017-12-24 14:26:10', '2017-12-24 14:26:33'),
(28, 'Phụng sự để dẫn đầu', 'sách mới', 1, 'James M. Strock', '', 20, 20, 7, 1, 'phung-su-de-dan-dau', '2017-12-24 14:26:10', '2017-12-24 14:26:33'),
(29, 'Biết ta đích thực là ai?', 'sách mới', 1, 'Alan Watts', '', 20, 20, 7, 0, 'biet-ta-dich-thuc-la-ai', '2017-12-24 14:26:10', '2017-12-24 14:26:33'),
(30, '7 loại hình thông minh', 'sách mới', 1, 'Thomas Armstrong', '', 20, 20, 7, 0, '7-loai-hinh-thong-minh', '2017-12-24 14:26:11', '2017-12-24 14:26:33'),
(31, '20 tuổi quyết định cuộc đời người đàn ông', 'sách mới', 1, 'Đỗ Bằng Trình', '', 20, 20, 7, 0, '20-tuoi-quyet-dinh-cuoc-doi-nguoi-dan-ong', '2017-12-24 14:26:11', '2017-12-24 14:26:33'),
(32, 'Cà phê cùng Tony', 'sách mới', 1, 'Tony Buổi Sáng', 'ca-phe-cung-tony-1512739481.jpg', 20, 20, 7, 1, 'ca-phe-cung-tony', '2017-12-24 14:26:11', '2017-12-24 14:26:33'),
(33, 'Nhà Giả Kim', 'sách mới', 1, 'Paulo Coelho', 'nha-gia-kim.jpg', 20, 20, 7, 0, 'nha-gia-kim', '2017-12-24 14:26:11', '2017-12-24 14:26:33'),
(34, 'Khai sinh nhà đổi mới', 'sách mới', 1, 'Tony Wagner', '', 20, 20, 7, 1, 'khai-sinh-nha-doi-moi', '2017-12-24 14:26:11', '2017-12-24 14:26:33'),
(35, 'Lối tư duy của người thông minh', 'sách mới', 1, 'Art Markman', '', 20, 20, 7, 0, 'loi-tu-duy-cua-nguoi-thong-minh', '2017-12-24 14:26:11', '2017-12-24 14:26:33'),
(37, 'Trên đường băng', 'sách mới', 1, 'Tony Buổi Sáng', 'tren-duong-bang.jpg', 20, 20, 7, 0, 'tren-duong-bang', '2017-12-24 14:26:11', '2017-12-24 14:26:33'),
(38, 'Chiến tranh và hòa bình', 'sách mới', 2, 'Leo Tolstoy', '', 20, 20, 7, 1, 'chien-tranh-va-hoa-binh', '2017-12-24 14:26:11', '2017-12-24 14:26:33'),
(39, 'Thề ước thầm lặng', 'sách mới', 2, 'Catherine Bybee', '', 20, 20, 7, 0, 'the-uoc-tham-lang', '2017-12-24 14:26:11', '2017-12-24 14:26:33'),
(40, 'Lục tiểu linh đồng - tập 1', 'sách mới', 2, 'Lục Tiểu Linh Đồng', '', 20, 20, 7, 0, 'luc-tieu-linh-dong--tap-1', '2017-12-24 14:26:12', '2017-12-24 14:26:33'),
(41, 'Thơ văn Hồ Chí Minh', 'sách mới', 2, '', '', 20, 20, 7, 0, 'tho-van-ho-chi-minh', '2017-12-24 14:26:12', '2017-12-24 14:26:34'),
(42, 'Bơ đi mà sống', 'sách mới', 2, 'Mèo Xù', 'bo-di-ma-song.jpg', 20, 20, 7, 1, 'bo-di-ma-song', '2017-12-24 14:26:12', '2017-12-24 14:26:34'),
(43, 'Bài học đầu tiên', 'sách mới', 2, 'Trần Thị Hồng Hạnh', '', 20, 20, 7, 0, 'bai-hoc-dau-tien', '2017-12-24 14:26:12', '2017-12-24 14:26:34'),
(44, 'Danh ngôn thế giới', 'sách mới', 2, 'Kim Dung', '', 20, 20, 7, 0, 'danh-ngon-the-gioi', '2017-12-24 14:26:12', '2017-12-24 14:26:34'),
(45, 'Xin hãy cho con thêm thời gian', 'sách mới', 2, 'Tố Oanh và nhiều tác giả', '', 20, 20, 7, 0, 'xin-hay-cho-con-them-thoi-gian', '2017-12-24 14:26:12', '2017-12-24 14:26:34'),
(46, 'Chiếc đồng hồ cúc cu', 'sách mới', 2, '', '', 20, 20, 7, 0, 'chiec-dong-ho-cuc-cu', '2017-12-24 14:26:12', '2017-12-24 14:26:34'),
(47, 'Chúng ta rồi sẽ ổn thôi', 'sách mới', 2, 'Gào - Minh Nhật', '', 20, 20, 7, 0, 'chung-ta-roi-se-on-thoi', '2017-12-24 14:26:12', '2017-12-24 14:26:34'),
(48, 'Em độc thân em kiêu hãnh', 'sách mới', 2, 'Tuệ Nhi', 'em-doc-than-em-kieu-hanh-1512739351.jpg', 20, 20, 7, 0, 'em-doc-than-em-kieu-hanh', '2017-12-24 14:26:13', '2017-12-24 14:26:34'),
(49, 'A beautiful bad girl', 'sách mới', 2, 'Thùy Chi', '', 20, 20, 7, 1, 'a-beautiful-bad-girl', '2017-12-24 14:26:13', '2017-12-24 14:26:34'),
(50, 'Cô bé Fadette', 'sách mới', 2, 'George Sand', '', 20, 20, 7, 0, 'co-be-fadette', '2017-12-24 14:26:13', '2017-12-24 14:26:34'),
(51, 'Tiếng chim hót trong bụi mận gai 1', 'sách mới', 2, 'Colleen McCullough', '', 20, 20, 7, 0, 'tieng-chim-hot-trong-bui-man-gai-1', '2017-12-24 14:26:13', '2017-12-24 14:26:34'),
(52, 'Những giấc mơ xanh', 'sách mới', 2, 'Nguyễn Công Kiệt', '', 20, 20, 7, 0, 'nhung-giac-mo-xanh', '2017-12-24 14:26:13', '2017-12-24 14:26:34'),
(53, 'Lối đi ngay dưới chân mình', 'sách mới', 2, 'Nguyễn Lê My Hoàn', '', 20, 20, 7, 1, 'loi-di-ngay-duoi-chan-minh', '2017-12-24 14:26:13', '2017-12-24 14:26:34'),
(54, 'Vang bóng một thời', 'sách mới', 2, 'Nguyễn Tuân', '', 20, 20, 7, 0, 'vang-bong-mot-thoi', '2017-12-24 14:26:13', '2017-12-24 14:26:34'),
(55, 'Ngày trôi về phía cũ', 'sách mới', 2, 'Anh Khang', '', 20, 20, 7, 0, 'ngay-troi-ve-phia-cu', '2017-12-24 14:26:13', '2017-12-24 14:26:34'),
(56, 'Ba chàng ngốc', 'sách mới', 2, 'Chetan Bhagat', '', 20, 20, 7, 0, 'ba-chang-ngoc', '2017-12-24 14:26:13', '2017-12-24 14:26:34'),
(57, 'Trở về EDEN', 'sách mới', 2, 'Rosalind Miles', '', 20, 20, 7, 0, 'tro-ve-eden', '2017-12-24 14:26:14', '2017-12-24 14:26:34'),
(58, 'Nhà thờ Đưc bà PARIS', 'sách mới', 2, 'Victor Hugo', '', 20, 20, 7, 0, 'nha-tho-duc-ba-paris', '2017-12-24 14:26:14', '2017-12-24 14:26:34'),
(60, 'Tôi nghĩ tôi thích nước Mỹ', 'sách mới', 2, 'Dương Thụy', '', 20, 20, 7, 0, 'toi-nghi-toi-thich-nuoc-my', '2017-12-24 14:26:14', '2017-12-24 14:26:34'),
(61, 'Quà tặng của cuộc sống', 'sách mới', 2, 'Nhiều tác giả', '', 20, 20, 7, 0, 'qua-tang-cua-cuoc-song', '2017-12-24 14:26:14', '2017-12-24 14:26:34'),
(62, 'Chiếc áo lặn và con bướm', 'sách mới', 2, 'Jean Dominique Bauby', '', 20, 20, 7, 0, 'chiec-ao-lan-va-con-buom', '2017-12-24 14:26:14', '2017-12-24 14:26:34'),
(63, 'Trui rèn trong Biển Đỏ', 'sách mới', 2, '', '', 20, 20, 7, 1, 'trui-ren-trong-bien-do', '2017-12-24 14:26:14', '2017-12-24 14:26:35'),
(64, 'Tình bạn', 'sách mới', 2, '', '', 20, 20, 7, 0, 'tinh-ban', '2017-12-24 14:26:14', '2017-12-24 14:26:35'),
(65, 'Tôội lỗi dưới ánh mặt trời', 'sách mới', 2, 'Agatha Christie', '', 20, 20, 7, 0, 'tooi-loi-duoi-anh-mat-troi', '2017-12-24 14:26:14', '2017-12-24 14:26:35'),
(66, 'Bí ẩn về con chó lúc nủa đêm', 'sách mới', 2, 'Mark Haddon.', '', 20, 20, 7, 1, 'bi-an-ve-con-cho-luc-nua-dem', '2017-12-24 14:26:14', '2017-12-24 14:26:35'),
(67, 'Rừng NaUy', 'sách mới', 2, 'Haruki Murakami', '', 20, 20, 7, 0, 'rung-nauy', '2017-12-24 14:26:15', '2017-12-24 14:26:35'),
(68, 'Cuộc chiến tranh bắt buộc', 'sách mới', 2, 'Theo Lao Động', '', 20, 20, 7, 0, 'cuoc-chien-tranh-bat-buoc', '2017-12-24 14:26:15', '2017-12-24 14:26:35'),
(69, '5 tuần trên kinh khí cầu', 'sách mới', 2, 'Jules Verne', '', 20, 20, 7, 0, '5-tuan-tren-kinh-khi-cau', '2017-12-24 14:26:15', '2017-12-24 14:26:35'),
(70, 'Một câu chuyện chán đời buồn cười', 'sách mới', 2, 'Ned Vizzini', '', 20, 20, 7, 0, 'mot-cau-chuyen-chan-doi-buon-cuoi', '2017-12-24 14:26:15', '2017-12-24 14:26:35'),
(71, 'Trí thức Nam Bộ', 'sách mới', 2, '', '', 20, 20, 7, 0, 'tri-thuc-nam-bo', '2017-12-24 14:26:15', '2017-12-24 14:26:35'),
(72, '3 người lính ngự lâm', 'sách mới', 2, 'Alexander Dumas', '', 20, 20, 7, 0, '3-nguoi-linh-ngu-lam', '2017-12-24 14:26:15', '2017-12-24 14:26:35'),
(73, 'Sẽ có cách đừng lo', 'sách mới', 2, 'Tuệ Nghi', '', 20, 20, 7, 0, 'se-co-cach-dung-lo', '2017-12-24 14:26:16', '2017-12-24 14:26:35'),
(74, 'Dường cái quan bút kí', 'sách mới', 2, 'Bùi Quang Đạt', '', 20, 20, 7, 0, 'duong-cai-quan-but-ki', '2017-12-24 14:26:16', '2017-12-24 14:26:35'),
(75, 'Tình dại khờ', 'sách mới', 2, 'Ngũ Mỹ Trân', '', 20, 20, 7, 0, 'tinh-dai-kho', '2017-12-24 14:26:16', '2017-12-24 14:26:35'),
(76, 'Mây chiều', 'sách mới', 2, '', '', 20, 20, 7, 0, 'may-chieu', '2017-12-24 14:26:16', '2017-12-24 14:26:35'),
(77, 'Hãy can đảm và tốt bụng', 'sách mới', 2, 'Nhiều Tác Giả', '', 20, 20, 7, 1, 'hay-can-dam-va-tot-bung', '2017-12-24 14:26:16', '2017-12-24 14:26:35'),
(78, 'Câu chuyện cà phê', 'sách mới', 2, '', '', 20, 20, 7, 1, 'cau-chuyen-ca-phe', '2017-12-24 14:26:16', '2017-12-24 14:26:35'),
(79, 'Thư giãn cuối tuần', 'sách mới', 2, 'Nhiều Tác Giả', '', 20, 20, 7, 0, 'thu-gian-cuoi-tuan', '2017-12-24 14:26:16', '2017-12-24 14:26:35'),
(80, 'Lịch sử Việt Nam bằng tranh', 'sách mới', 2, 'Trần Bạch Đằng', '', 20, 20, 7, 1, 'lich-su-viet-nam-bang-tranh', '2017-12-24 14:26:17', '2017-12-24 14:26:36'),
(81, '25 năm tôi làm việc ở CIA', 'sách mới', 2, 'Ralph W. McGehee', '', 20, 20, 7, 0, '25-nam-toi-lam-viec-o-cia', '2017-12-24 14:26:17', '2017-12-24 14:26:36'),
(82, 'Cho một khởi đầu mới', 'sách mới', 2, 'Nhiều Tác Giả', '', 20, 20, 7, 0, 'cho-mot-khoi-dau-moi', '2017-12-24 14:26:17', '2017-12-24 14:26:36'),
(83, 'TOEFL iBT', 'sách mới', 3, '', '', 20, 20, 7, 0, 'toefl-ibt', '2017-12-24 14:26:17', '2017-12-24 14:26:36'),
(84, 'Cẩm nang tự học IELTS', 'sách mới', 3, '', '', 20, 20, 7, 0, 'cam-nang-tu-hoc-ielts', '2017-12-24 14:26:17', '2017-12-24 14:26:36'),
(85, 'TOEFL Junior Reading', 'sách mới', 3, '', '', 20, 20, 7, 0, 'toefl-junior-reading', '2017-12-24 14:26:17', '2017-12-24 14:26:36'),
(86, 'TOEFL Junior Listening', 'sách mới', 3, '', '', 20, 20, 7, 0, 'toefl-junior-listening', '2017-12-24 14:26:17', '2017-12-24 14:26:36'),
(87, 'Adventure at the castle 10b', 'sách mới', 3, '', '', 20, 20, 7, 0, 'adventure-at-the-castle-10b', '2017-12-24 14:26:17', '2017-12-24 14:26:36'),
(88, 'ELON MUSK', 'sách mới', 4, 'Ashlee Vance', '', 20, 20, 7, 0, 'elon-musk', '2017-12-24 14:26:17', '2017-12-24 14:26:36'),
(89, 'I-VAN TUÔC GHÊ-NHÉP', 'sách mới', 4, 'N.Bôgôxlốpxki', '', 20, 20, 7, 1, 'ivan-tuoc-ghenhep', '2017-12-24 14:26:17', '2017-12-24 14:26:36'),
(90, 'Mozart', 'sách mới', 4, 'Gil Ji Yeon - Choi Young Ran', '', 20, 20, 7, 0, 'mozart', '2017-12-24 14:26:17', '2017-12-24 14:26:36'),
(91, 'Quê hương và gia thế của chủ tịch Hồ Chí Minh', 'sách mới', 4, 'Trần Minh Siêu', '', 20, 20, 7, 0, 'que-huong-va-gia-the-cua-chu-tich-ho-chi-minh', '2017-12-24 14:26:18', '2017-12-24 14:26:36'),
(92, 'Võ Văn Kiệt trong lòng trí thức', 'sách mới', 4, '', '', 20, 20, 7, 0, 'vo-van-kiet-trong-long-tri-thuc', '2017-12-24 14:26:18', '2017-12-24 14:26:36'),
(93, 'Thư riêng của Bác Hồ', 'sách mới', 4, 'Trần Quân Ngọc', '', 20, 20, 7, 0, 'thu-rieng-cua-bac-ho', '2017-12-24 14:26:18', '2017-12-24 14:26:36'),
(94, 'Bác Hồ con người và phong cách', 'sách mới', 4, 'Nguyễn Văn Khoan', '', 20, 20, 7, 0, 'bac-ho-con-nguoi-va-phong-cach', '2017-12-24 14:26:18', '2017-12-24 14:26:36'),
(95, 'CHÍNH XÁC', 'sách mới', 5, '', '', 20, 20, 7, 0, 'chinh-xac', '2017-12-24 14:26:18', '2017-12-24 14:26:36'),
(96, 'Lập trình Symbolic trong Trí tuệ nhân tạo', 'sách mới', 5, '', '', 20, 20, 7, 0, 'lap-trinh-symbolic-trong-tri-tue-nhan-tao', '2017-12-24 14:26:18', '2017-12-24 14:26:36'),
(97, 'Nhập môn về kĩ thuật', 'sách mới', 5, '', '', 20, 20, 7, 1, 'nhap-mon-ve-ki-thuat', '2017-12-24 14:26:18', '2017-12-24 14:26:36');

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
(1, 'Huy', 'huytranle13@gmail.com', '$2y$10$B08TU3sq1J2Xckv78/3.v.3OrKP6rsGgzouEqfWFM8J6qx9PvhLye', 'QgwdiJa7qoI935LUcZHY6xJLsTKr4T5lfdrtfGYsrSzHJRY5JhLSZ8cEt9u1', '2017-12-17 05:19:59', '2017-12-17 05:19:59'),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
