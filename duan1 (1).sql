-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2023 at 08:55 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `bill_name` varchar(255) NOT NULL,
  `bill_address` varchar(255) NOT NULL,
  `bill_email` varchar(255) NOT NULL,
  `bill_tel` varchar(255) NOT NULL,
  `bill_pttt` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1:Thanh toán trực tiếp\r\n2:Chuyển khoản\r\n3:Thanh toán online',
  `ngaydathang` date NOT NULL,
  `total` int(11) NOT NULL,
  `bill_status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0:Đơn hàng mới\r\n1:Đang xử lý\r\n2:Đang giao hàng\r\n3:Đã giao hàng',
  `receive_name` varchar(255) DEFAULT NULL,
  `receive_address` varchar(255) DEFAULT NULL,
  `receive_email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `ma_sp` int(10) NOT NULL,
  `ma_kh` int(10) NOT NULL,
  `ngay_them` date NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `noi_dung`, `ma_sp`, `ma_kh`, `ngay_them`, `status`) VALUES
(1, 'fsfd', 10, 1, '2023-12-02', '1'),
(3, '1', 12, 1, '2023-12-04', '1');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `soluong` int(3) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `idbill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(1, 'Thiếu nhi'),
(2, 'Văn học'),
(3, 'Truyện'),
(4, 'Sách Tâm Lý');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `namesp` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `tacgia` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `sell_price` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `luotxem` int(11) NOT NULL,
  `iddm` int(11) NOT NULL,
  `mota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `namesp`, `amount`, `tacgia`, `price`, `sell_price`, `img`, `luotxem`, `iddm`, `mota`) VALUES
(6, 'Trôi - Nguyễn Ngọc Tư', 1207, 'Nguyễn Ngọc Tư', 90000, 15000, 'troi.jpg', 1234, 3, '“Em thà trôi một mình. Nhưng những gì còn sót lại của một cù lao phân rã chẳng là bao. Vài ba mái nhà lấp ló trên mặt nước, một vài cái lu, những rẻo đất đủ rộng cho một người ngồi thì cũng có, lại trôi đờ đẫn đằng xa. Mãi mới có mảnh đất trôi gần, đúng lúc nó rùng mình nứt làm hai.\r\n\r\nTrong mê lộ của nước, mình chẳng biết trôi được đến đâu. Không bãi bờ gì để định vị. Ngó đâu cũng chỉ thấy nước và bọt nước, cùng những vật chất nổi nênh.\r\n\r\nGiờ thì mạnh ai nấy trôi.” - Trích tác phẩm.'),
(10, 'Người Tập Lớn', 23, 'Chà', 109000, 10000, 'nguoi-tap-lon.jpg', 32423, 2, 'Chà – một tác giả mới được nhiều bạn đọc yêu thích nhờ lối viết hài hước, dễ thương. Chà mang đến sự tích cực qua từng trang viết với giọng văn gần gũi, giản dị. Những câu chuyện mà bất cứ ai cũng dễ gặp phải sẽ được kể qua một lăng kính mới đầy tích cực. Cuốn sách đầu tay “Người tập lớn” được phát hành vào tháng 2 như một lời nhắc bạn hãy chậm lại một chút để cảm nhận những điều tử tế giữa cuộc sống này.'),
(11, 'Hoàng Tử Bé', 234, 'Antoine de Saint-Exupéry', 50000, 5000, 'hoang-tu-be.jpg', 123, 1, 'Hoàng tử bé được xuất bản lần đầu năm 1943 của nhà văn, phi công người Pháp Antoine de Saint-exupéry là một trong những cuốn tiểu thuyết kinh điển nổi tiếng nhất mọi thời đại. Câu chuyện ngắn gọn về cuộc gặp gỡ diệu kỳ giữa viên phi công bị rơi máy bay và Hoàng tử bé giữa sa mạc Sa-ha-ra hoang vu. Hành tinh quê hương và các mối quan hệ của hoàng tử bé dần hé lộ: Tình bạn, tình yêu thương của Hoàng tử bé dành cho bông hồng duy nhất, tình cảm sâu sắc dành cho chú cáo.'),
(12, 'Thỏ Bảy Màu Và Những Người Nghĩ Nó Là Bạn ', 1241, 'HUỲNH THÁI NGỌC', 99000, 25000, 'tho-7-mau.jpg', 2454, 1, 'Thỏ Bảy Màu là fanpage sở hữu hơn 2,6tr lượt thích trên mạng xã hội. Với hình tượng nhân vật thú vị cùng phong cách sáng tạo độc đáo, Thỏ bảy màu vẫn luôn là thu hút được số lượng lớn người quan tâm thể hiện qua nhiều bài viết với hàng chục nghìn lượt like và share.\r\n\r\nThỏ Bảy Màu là một nhân vật hư cấu chẳng còn xa lạ gì với anh em dùng mạng xã hội với slogan “Nghe lời Thỏ, kiếp này coi như bỏ!”.'),
(13, 'Truyện Kinh Dị Việt Nam - Truyện Đường Rừng', 243, 'Lan Khai', 50000, 15000, 'duong-rung.jpg', 234, 3, '“Là một cây bút nổi tiếng trên văn đàn cả nước những năm ba mươi đầu thế kỷ XX, các sáng tác của Lan Khai (Lâm Tuyền Khách) đã sớm xuất hiện trên các tờ báo: Loa, Ngọ Báo, Đông Pháp, Đông Phương, Rạng Đông, Tiểu thuyết thứ Bảy, Ích Hữu, Phổ thông bán nguyệt san... Đồng hành với những cuốn tiểu thuyết về đường rừng, về tâm lý - xã hội và lịch sử, tác phẩm lý luận phê bình, các bài ký, các công trình sưu tầm văn học dân gian, những bản dịch, những tác phẩm hội họa, còn xuất hiện hàng loạt những truyện ngắn truyền kỳ và truyện cổ tích thần kỳ của Nhà văn đường rừng với các chủ đề và kiểu dạng khác nhau, đã góp phần vào cuộc cách tân thể loại văn học, để lại ấn tượng sâu đậm trong bạn đọc hơn tám thập niên qua.'),
(14, 'Nam Thiên Kì Đàm', 234, 'Fanpage Truyện Thần Thoại', 40000, 5000, 'nam-thien-ky.jpg', 342, 3, '“Trời đất thiên địa sinh ra vạn vật trên đời. Lẫn giữa người phàm, đã có bậc thánh nhân, tiên Phật oai linh, thì cũng sẽ có những loài yêu ma quỷ quái dị thường. Khi thì là đại thụ thành tinh, khi lại là vong hồn oan khuất còn lưu luyến cõi trần, lúc lại từ loài súc sinh hóa thành. Từ thuở xa xưa, chúng đã luôn tồn tại bên cạnh chúng ta trong muôn hình vạn trạng. Nay lục tìm sách vở, hoặc nhớ lại lời cổ nhân mà kể ra đôi chuyện quỷ dị.”'),
(25, 'Lý Thuyết Trò Chơi', 30, 'Trần Phách Hàm', 170000, 45000, 'aaa.jpg', 30, 4, 'Lý Thuyết Trò Chơi\r\n\r\nĐời người giống như trò chơi, mỗi bước đều phải cân nhắc xem đi như thế nào, đi về đâu, phải kết hợp nhiều yếu tố lại chúng ta mới có thể đưa ra được lựa chọn. Mà trong quá trình chọn lựa này các yếu tố khiến ta phải cân nhắc và những đường đi khác nhau sẽ ảnh hưởng trực tiếp đến kết quả.\r\n\r\nCuốn sách Lý thuyết trò chơi là bách khoa toàn thư về tâm lý học, về tẩy não và chống lại tẩy não, thao túng và chống lại thao túng, thống trị và chống lại thống trị. Cuốn sách giới thiệu công thức chiến thắng cho những “trò chơi” đấu trí giữa người với người trong cuộc sống hằng ngày; phân tách các khái niệm lý thuyết trò chơi vốn mơ hồ trở thành ngôn ngữ dễ hiểu và kết nối liền mạch với nghệ thuật tâm lý học; cho phép bạn nắm vững những bí ẩn của trò chơi tâm lý trong thời gian ngắn nhất.\r\n\r\nNhững kỹ năng trong Lý thuyết trò chơi có thể giúp chúng ta đọc thấu hoạt động tâm lý người khác, và từ đó chiếm thế chủ động trong trò chơi đấu trí giữa những người xung quanh.\r\n\r\nNhững trích dẫn hay:\r\n\r\n- Nếu coi một ván chơi như một trò chơi, mà trò chơi luôn luôn có thắng thua. Một bên thắng thì đồng nghĩa bên kia thất bại.\r\n\r\n- Đằng sau những người chiến thắng lẫy lừng đều che giấu một nỗi khổ tâm và chua xót của kẻ thua cuộc.\r\n\r\nHãy coi xã hội này như một ván cờ, mà mỗi chúng ta đều là những kỳ thủ. Từng đường đi nước bước của ta đều tương ứng với việc đặt từng con cờ. Một kỳ thủ tinh tường cẩn thận sẽ không hấp tấp đánh cờ, họ thường thông qua việc suy đoán lẫn nhau, thậm chí tính kế để từng bước đi đều khống chế đối phương cho đến khi giành được thắng lợi cuối cùng. Mà thuyết trò chơi chính là cuốn sách giáo khoa dạy những kỳ thủ chúng ta nên đánh cờ như thế nào.\r\n\r\nMã hàng	8936066697088\r\nTên Nhà Cung Cấp	1980 Books\r\nTác giả	Trần Phách Hàm\r\nNgười Dịch	Vu Vũ\r\nNXB	Dân Trí\r\nNăm XB	2023\r\nNgôn Ngữ	Tiếng Việt\r\nTrọng lượng (gr)	340\r\nKích Thước Bao Bì	20.5 x 13 x 1.6 cm\r\nSố trang	320\r\nHình thức	Bìa Mềm\r\nSản phẩm bán chạy nhất	Top 100 sản phẩm Tâm lý bán chạy của tháng\r\nGiá sản phẩm trên Fahasa.com đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như Phụ phí đóng gói, phí vận chuyển, phụ phí hàng cồng kềnh,...\r\nChính sách khuyến mãi trên Fahasa.com không áp dụng cho Hệ thống Nhà sách Fahasa trên toàn quốc\r\nLý Thuyết Trò Chơi\r\n\r\nĐời người giống như trò chơi, mỗi bước đều phải cân nhắc xem đi như thế nào, đi về đâu, phải kết hợp nhiều yếu tố lại chúng ta mới có thể đưa ra được lựa chọn. Mà trong quá trình chọn lựa này các yếu tố khiến ta phải cân nhắc và những đường đi khác nhau sẽ ảnh hưởng trực tiếp đến kết quả.\r\n\r\nCuốn sách Lý thuyết trò chơi là bách khoa toàn thư về tâm lý học, về tẩy não và chống lại tẩy não, thao túng và chống lại thao túng, thống trị và chống lại thống trị. Cuốn sách giới thiệu công thức chiến thắng cho những “trò chơi” đấu trí giữa người với người trong cuộc sống hằng ngày; phân tách các khái niệm lý thuyết trò chơi vốn mơ hồ trở thành ngôn ngữ dễ hiểu và kết nối liền mạch với nghệ thuật tâm lý học; cho phép bạn nắm vững những bí ẩn của trò chơi tâm lý trong thời gian ngắn nhất.\r\n\r\nNhững kỹ năng trong Lý thuyết trò chơi có thể giúp chúng ta đọc thấu hoạt động tâm lý người khác, và từ đó chiếm thế chủ động trong trò chơi đấu trí giữa những người xung quanh.\r\n\r\nNhững trích dẫn hay:\r\n\r\n- Nếu coi một ván chơi như một trò chơi, mà trò chơi luôn luôn có thắng thua. Một bên thắng thì đồng nghĩa bên kia thất bại.\r\n\r\n- Đằng sau những người chiến thắng lẫy lừng đều che giấu một nỗi khổ tâm và chua xót của kẻ thua cuộc.\r\n\r\nHãy coi xã hội này như một ván cờ, mà mỗi chúng ta đều là những kỳ thủ. Từng đường đi nước bước của ta đều tương ứng với việc đặt từng con cờ. Một kỳ thủ tinh tường cẩn thận sẽ không hấp tấp đánh cờ, họ thường thông qua việc suy đoán lẫn nhau, thậm chí tính kế để từng bước đi đều khống chế đối phương cho đến khi giành được thắng lợi cuối cùng. Mà thuyết trò chơi chính là cuốn sách giáo khoa dạy những kỳ thủ chúng ta nên đánh cờ như thế nào.'),
(26, 'Thuật Thao Túng - Góc Tối Ẩn Sau Những Câu Nói', 25, 'Wladislaw Jachtchenko', 139000, 41000, 'untitledthaotungtamly.jpg', 45, 4, 'Thuật Thao Túng\r\n\r\nBạn có muốn giành phần thắng cuối cùng trong các cuộc tranh luận?\r\n\r\nBạn có muốn dẹp đi bộ mặt kiêu ngạo của các đồng nghiệp xung quanh mình?\r\n\r\nBạn có muốn chứng minh rằng bạn đã đúng về mọi thứ?\r\n\r\nĐây là quyển sách chứa đựng đáp án mà bạn mong muốn. Thuật thao túng sẽ giúp bạn thuần thục các kỹ năng thuộc bộ môn “nghệ thuật” làm chủ cảm xúc, làm chủ vận mệnh, điều chỉnh tâm lý và đạt được thứ bạn muốn một cách tinh vi: thao túng tâm lý người đối diện, khiến họ hành động theo hướng ta mong đợi. Không những vậy, quyển sách còn giúp bạn nhìn nhận lại về định nghĩa thao túng, những tốt-xấu ẩn giấu đằng sau và giải đáp vấn đề đạo đức con người mà bạn luôn trăn trở khi thực hiện những hành vi này. Bật mí, con người khi vừa sinh ra đã làm một thao tác thao túng tâm lý người khác rồi đấy!\r\n\r\nCó thể bạn chưa biết, bạn đã và đang thao túng người khác hoặc bị người khác thao túng thông qua cử chỉ ngôn hành mỗi ngày, như-một-trò-đùa.\r\n\r\nCó thể bạn chưa biết, nạn nhân bị thao túng chưa chắc đã rơi vào tình thế bất lợi, nhưng rơi vào tình thế bất lợi chắc chắn đã bị thao túng.\r\n\r\nCó thể bạn chưa biết, người có đạo đức chắc chắn không thao túng người khác, nhưng kẻ thao túng người khác chưa chắc đã vô đạo đức.\r\n\r\nVới 10 kỹ năng và 37 thủ thuật, Thuật thao túng sẽ giúp bạn nhận ra và thoát khỏi những suy nghĩ xấu xa nơi tiềm thức của chính mình, đồng thời vạch trần góc tối ẩn giấu sau mỗi câu nói của đối phương, đưa những chiêu trò thao túng ấy ra ánh sáng để mọi người không lần nữa rơi vào cạm bẫy. Hơn cả, quyển sách này sẽ dẫn lối bạn trở thành một “nghệ nhân” thao túng có đạo đức.\r\n\r\nVề tác giả\r\n\r\nTác giả người Đức Wladislaw Jachtchenko - diễn giả hàng đầu châu Âu, người sáng lập Học viện Argumentorik giảng dạy về giao tiếp - dạy bạn cách giao tiếp phù hợp để đạt được điều bạn muốn.\r\n\r\nMã hàng	8935325009006\r\nTên Nhà Cung Cấp	AZ Việt Nam\r\nTác giả	Wladislaw Jachtchenko\r\nNgười Dịch	Vũ Trung Phi Yến\r\nNXB	Thế Giới\r\nNăm XB	2022\r\nNgôn Ngữ	Tiếng Việt\r\nTrọng lượng (gr)	350\r\nKích Thước Bao Bì	20 x 14.5 cm\r\nSố trang	344\r\nHình thức	Bìa Mềm\r\nSản phẩm bán chạy nhất	Top 100 sản phẩm Tâm lý bán chạy của tháng\r\nGiá sản phẩm trên Fahasa.com đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như Phụ phí đóng gói, phí vận chuyển, phụ phí hàng cồng kềnh,...\r\nChính sách khuyến mãi trên Fahasa.com không áp dụng cho Hệ thống Nhà sách Fahasa trên toàn quốc\r\nThuật Thao Túng\r\n\r\nBạn có muốn giành phần thắng cuối cùng trong các cuộc tranh luận?\r\n\r\nBạn có muốn dẹp đi bộ mặt kiêu ngạo của các đồng nghiệp xung quanh mình?\r\n\r\nBạn có muốn chứng minh rằng bạn đã đúng về mọi thứ?\r\n\r\nĐây là quyển sách chứa đựng đáp án mà bạn mong muốn. Thuật thao túng sẽ giúp bạn thuần thục các kỹ năng thuộc bộ môn “nghệ thuật” làm chủ cảm xúc, làm chủ vận mệnh, điều chỉnh tâm lý và đạt được thứ bạn muốn một cách tinh vi: thao túng tâm lý người đối diện, khiến họ hành động theo hướng ta mong đợi. Không những vậy, quyển sách còn giúp bạn nhìn nhận lại về định nghĩa thao túng, những tốt-xấu ẩn giấu đằng sau và giải đáp vấn đề đạo đức con người mà bạn luôn trăn trở khi thực hiện những hành vi này. Bật mí, con người khi vừa sinh ra đã làm một thao tác thao túng tâm lý người khác rồi đấy!\r\n\r\nCó thể bạn chưa biết, bạn đã và đang thao túng người khác hoặc bị người khác thao túng thông qua cử chỉ ngôn hành mỗi ngày, như-một-trò-đùa.\r\n\r\nCó thể bạn chưa biết, nạn nhân bị thao túng chưa chắc đã rơi vào tình thế bất lợi, nhưng rơi vào tình thế bất lợi chắc chắn đã bị thao túng.\r\n\r\nCó thể bạn chưa biết, người có đạo đức chắc chắn không thao túng người khác, nhưng kẻ thao túng người khác chưa chắc đã vô đạo đức.\r\n\r\nVới 10 kỹ năng và 37 thủ thuật, Thuật thao túng sẽ giúp bạn nhận ra và thoát khỏi những suy nghĩ xấu xa nơi tiềm thức của chính mình, đồng thời vạch trần góc tối ẩn giấu sau mỗi câu nói của đối phương, đưa những chiêu trò thao túng ấy ra ánh sáng để mọi người không lần nữa rơi vào cạm bẫy. Hơn cả, quyển sách này sẽ dẫn lối bạn trở thành một “nghệ nhân” thao túng có đạo đức.\r\n\r\nVề tác giả\r\n\r\nTác giả người Đức Wladislaw Jachtchenko - diễn giả hàng đầu châu Âu, người sáng lập Học viện Argumentorik giảng dạy về giao tiếp - dạy bạn cách giao tiếp phù hợp để đạt được điều bạn muốn.'),
(27, 'Đứa Trẻ Hiểu Chuyện Thường Không Có Kẹo Ăn', 17, 'Nguyên Anh', 148000, 36000, '8935325011818.jpg', 30, 4, 'Đứa Trẻ Hiểu Chuyện Thường Không Có Kẹo Ăn\r\n\r\n“Đứa trẻ hiểu chuyện thường không có kẹo ăn” – Cuốn sách dành cho những thời thơ ấu đầy vết thương.\r\n\r\nTrên đời này có một điều rất kỳ diệu, đó là bậc phụ huynh nào cũng mong muốn con mình trở nên hoàn hảo theo một hình mẫu giống hệt nhau.\r\n\r\nLanh lẹ, khôn khéo, dễ thương, luôn nhìn cha mẹ với gương mặt tươi cười trong sáng.\r\n\r\nKhi người lớn yêu cầu chúng làm gì đó, chúng sẽ vui vẻ làm theo. Không phàn nàn, không oán trách, không cáu gắt, lại càng không phản kháng cãi cự.\r\n\r\nNhững khi cha mẹ mệt mỏi hay chán chường, chúng sẽ rúc vào lòng cha mẹ như một chú chim nhỏ, giúp họ giải tỏa ưu tư phiền muộn.\r\n\r\nThậm chí ngay cả khi cha mẹ cáu giận, đối xử bất công với chúng, chúng cũng phải nhanh chóng tha thứ, dịu dàng an ủi ngược lại cha mẹ.\r\n\r\nChúng chẳng khác nào một con búp bê phó mặc hoàn toàn cho người khác sắp xếp. Thà bản thân chịu thiệt cũng không để cha mẹ buồn lòng.\r\n\r\nNhưng bạn biết không, đằng sau những đứa trẻ hiểu chuyện ngoan ngoãn trong mơ ấy, hóa ra lại toàn là sự tổn thương. Chúng không muốn tổn thương người khác, vì vậy chúng lựa chọn tổn thương chính mình.\r\n\r\nMà chúng làm tất cả những điều đó chỉ đơn giản là vì yêu thương cha mẹ mình mà thôi.\r\n\r\nNếu bạn cũng từng là một đứa trẻ như thế, từng phải hạ thấp bản thân, từng buộc phải nhường nhịn người khác, từng phải học cách nhận biết sắc mặt từ khi còn quá nhỏ… thì nhất định đừng bỏ qua cuốn sách “Đứa trẻ hiểu chuyện thường không có kẹo ăn” của tác giả Nguyên Anh.\r\n\r\nVới tư cách cố vấn cấp hai quốc gia, Nguyên Anh đã từng là người tìm cách chữa lành vết thương cho hàng nghìn tâm hồn mang theo tổn thương thời thơ ấu. Từng câu, từng chữ bà viết nên đều xuất phát từ những câu chuyện hoàn toàn có thật.\r\n\r\nCó thể sau khi đọc xong, những vết thương của bạn vẫn sẽ chẳng thể lành lại vĩnh viễn, nhưng chỉ cần bạn cảm thấy ổn hơn một chút, như vậy là đủ rồi.\r\n\r\nMã hàng	8935325011818\r\nTên Nhà Cung Cấp	AZ Việt Nam\r\nTác giả	Nguyên Anh\r\nNgười Dịch	Nguyệt Lạc\r\nNXB	Văn Học\r\nNăm XB	2023\r\nNgôn Ngữ	Tiếng Việt\r\nTrọng lượng (gr)	400\r\nKích Thước Bao Bì	20.5 x 14.5 x 1 cm\r\nSố trang	368\r\nHình thức	Bìa Mềm\r\nSản phẩm bán chạy nhất	Top 100 sản phẩm Tâm lý bán chạy của tháng\r\nGiá sản phẩm trên Fahasa.com đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như Phụ phí đóng gói, phí vận chuyển, phụ phí hàng cồng kềnh,...\r\nChính sách khuyến mãi trên Fahasa.com không áp dụng cho Hệ thống Nhà sách Fahasa trên toàn quốc\r\nĐứa Trẻ Hiểu Chuyện Thường Không Có Kẹo Ăn\r\n\r\n“Đứa trẻ hiểu chuyện thường không có kẹo ăn” – Cuốn sách dành cho những thời thơ ấu đầy vết thương.\r\n\r\nTrên đời này có một điều rất kỳ diệu, đó là bậc phụ huynh nào cũng mong muốn con mình trở nên hoàn hảo theo một hình mẫu giống hệt nhau.\r\n\r\nLanh lẹ, khôn khéo, dễ thương, luôn nhìn cha mẹ với gương mặt tươi cười trong sáng.\r\n\r\nKhi người lớn yêu cầu chúng làm gì đó, chúng sẽ vui vẻ làm theo. Không phàn nàn, không oán trách, không cáu gắt, lại càng không phản kháng cãi cự.\r\n\r\nNhững khi cha mẹ mệt mỏi hay chán chường, chúng sẽ rúc vào lòng cha mẹ như một chú chim nhỏ, giúp họ giải tỏa ưu tư phiền muộn.\r\n\r\nThậm chí ngay cả khi cha mẹ cáu giận, đối xử bất công với chúng, chúng cũng phải nhanh chóng tha thứ, dịu dàng an ủi ngược lại cha mẹ.\r\n\r\nChúng chẳng khác nào một con búp bê phó mặc hoàn toàn cho người khác sắp xếp. Thà bản thân chịu thiệt cũng không để cha mẹ buồn lòng.\r\n\r\nNhưng bạn biết không, đằng sau những đứa trẻ hiểu chuyện ngoan ngoãn trong mơ ấy, hóa ra lại toàn là sự tổn thương. Chúng không muốn tổn thương người khác, vì vậy chúng lựa chọn tổn thương chính mình.\r\n\r\nMà chúng làm tất cả những điều đó chỉ đơn giản là vì yêu thương cha mẹ mình mà thôi.\r\n\r\nNếu bạn cũng từng là một đứa trẻ như thế, từng phải hạ thấp bản thân, từng buộc phải nhường nhịn người khác, từng phải học cách nhận biết sắc mặt từ khi còn quá nhỏ… thì nhất định đừng bỏ qua cuốn sách “Đứa trẻ hiểu chuyện thường không có kẹo ăn” của tác giả Nguyên Anh.\r\n\r\nVới tư cách cố vấn cấp hai quốc gia, Nguyên Anh đã từng là người tìm cách chữa lành vết thương cho hàng nghìn tâm hồn mang theo tổn thương thời thơ ấu. Từng câu, từng chữ bà viết nên đều xuất phát từ những câu chuyện hoàn toàn có thật.\r\n\r\nCó thể sau khi đọc xong, những vết thương của bạn vẫn sẽ chẳng thể lành lại vĩnh viễn, nhưng chỉ cần bạn cảm thấy ổn hơn một chút, như vậy là đủ rồi.'),
(28, 'Tâm Lý Học Tội Phạm - Phác Họa Chân Dung Kẻ Phạm Tội', 19, 'Diệp Hồng Vũ', 145000, 31300, 'ph_c-h_a-ch_n-dung-k_-ph_m-t_i.jpg', 103, 4, 'TÂM LÝ HỌC TỘI PHẠM - PHÁC HỌA CHÂN DUNG KẺ PHẠM TỘI\r\n\r\nTội phạm, nhất là những vụ án mạng, luôn là một chủ đề thu hút sự quan tâm của công chúng, khơi gợi sự hiếu kỳ của bất cứ ai. Một khi đã bắt đầu theo dõi vụ án, hẳn bạn không thể không quan tâm tới kết cục, đặc biệt là cách thức và động cơ của kẻ sát nhân, từ những vụ án phạm vi hẹp cho đến những vụ án làm rúng động cả thế giới.\r\n\r\nLấy 36 vụ án CÓ THẬT kinh điển nhất trong hồ sơ tội phạm của FBI, “Tâm lý học tội phạm - phác họa chân dung kẻ phạm tội” mang đến cái nhìn toàn cảnh của các chuyên gia về chân dung tâm lý tội phạm. Trả lời cho câu hỏi: Làm thế nào phân tích được tâm lý và hành vi tội phạm, từ đó khôi phục sự thật thông qua các manh mối, từ hiện trường vụ án, thời gian, dấu tích,… để tìm ra kẻ sát nhân thực sự. \r\n\r\nĐằng sau máu và nước mắt là các câu chuyện rợn tóc gáy về tội ác, góc khuất xã hội và những màn đấu trí đầy gay cấn giữa điều tra viên và kẻ phạm tội. Trong số đó có những con quỷ ăn thịt người; những cô gái xinh đẹp nhưng xảo quyệt; và cả cách trả thù đầy man rợ của các nhà khoa học,… Một số đã sa vào lưới pháp luật ngay khi chúng vừa ra tay, nhưng cũng có những kẻ cứ vậy ngủ yên hơn hai mươi năm. \r\n\r\nBằng giọng văn sắc bén, “Tâm lý học tội phạm - phác họa chân dung kẻ phạm tội” hứa hẹn dẫn dắt người đọc đi qua các cung bậc cảm xúc từ tò mò, ngạc nhiên đến sợ hãi, hoang mang tận cùng. Chúng ta sẽ lần tìm về quá khứ để từng bước gỡ những nút thắt chưa được giải, khiến ta \"ngạt thở\" đọc tới tận trang cuối cùng. \r\n\r\nHy vọng cuốn sách sẽ giúp bạn có cái nhìn sâu sắc, rõ ràng hơn về bộ môn tâm lý học tội phạm và có thể rèn luyện thêm sự tư duy, nhạy bén.\r\n\r\nMã hàng	8935325001819\r\nTên Nhà Cung Cấp	AZ Việt Nam\r\nTác giả	Diệp Hồng Vũ\r\nNgười Dịch	Đỗ Ái Nhi\r\nNXB	NXB Thanh Niên\r\nNăm XB	2021\r\nNgôn Ngữ	Tiếng Việt\r\nTrọng lượng (gr)	300\r\nKích Thước Bao Bì	24 x 16 cm x 1.4\r\nSố trang	280\r\nHình thức	Bìa Mềm\r\nSản phẩm hiển thị trong	\r\nAZ Việt Nam\r\nĐồ Chơi Cho Bé - Giá Cực Tốt\r\nTủ Sách Tâm Lý Kỹ Năng\r\nSản phẩm bán chạy nhất	Top 100 sản phẩm Tâm lý bán chạy của tháng\r\nGiá sản phẩm trên Fahasa.com đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như Phụ phí đóng gói, phí vận chuyển, phụ phí hàng cồng kềnh,...\r\nChính sách khuyến mãi trên Fahasa.com không áp dụng cho Hệ thống Nhà sách Fahasa trên toàn quốc\r\nTÂM LÝ HỌC TỘI PHẠM - PHÁC HỌA CHÂN DUNG KẺ PHẠM TỘI\r\n\r\nTội phạm, nhất là những vụ án mạng, luôn là một chủ đề thu hút sự quan tâm của công chúng, khơi gợi sự hiếu kỳ của bất cứ ai. Một khi đã bắt đầu theo dõi vụ án, hẳn bạn không thể không quan tâm tới kết cục, đặc biệt là cách thức và động cơ của kẻ sát nhân, từ những vụ án phạm vi hẹp cho đến những vụ án làm rúng động cả thế giới.\r\n\r\nLấy 36 vụ án CÓ THẬT kinh điển nhất trong hồ sơ tội phạm của FBI, “Tâm lý học tội phạm - phác họa chân dung kẻ phạm tội” mang đến cái nhìn toàn cảnh của các chuyên gia về chân dung tâm lý tội phạm. Trả lời cho câu hỏi: Làm thế nào phân tích được tâm lý và hành vi tội phạm, từ đó khôi phục sự thật thông qua các manh mối, từ hiện trường vụ án, thời gian, dấu tích,… để tìm ra kẻ sát nhân thực sự. \r\n\r\nĐằng sau máu và nước mắt là các câu chuyện rợn tóc gáy về tội ác, góc khuất xã hội và những màn đấu trí đầy gay cấn giữa điều tra viên và kẻ phạm tội. Trong số đó có những con quỷ ăn thịt người; những cô gái xinh đẹp nhưng xảo quyệt; và cả cách trả thù đầy man rợ của các nhà khoa học,… Một số đã sa vào lưới pháp luật ngay khi chúng vừa ra tay, nhưng cũng có những kẻ cứ vậy ngủ yên hơn hai mươi năm. \r\n\r\nBằng giọng văn sắc bén, “Tâm lý học tội phạm - phác họa chân dung kẻ phạm tội” hứa hẹn dẫn dắt người đọc đi qua các cung bậc cảm xúc từ tò mò, ngạc nhiên đến sợ hãi, hoang mang tận cùng. Chúng ta sẽ lần tìm về quá khứ để từng bước gỡ những nút thắt chưa được giải, khiến ta \"ngạt thở\" đọc tới tận trang cuối cùng. \r\n\r\nHy vọng cuốn sách sẽ giúp bạn có cái nhìn sâu sắc, rõ ràng hơn về bộ môn tâm lý học tội phạm và có thể rèn luyện thêm sự tư duy, nhạy bén.\r\n\r\n'),
(29, 'Tuyển Tập Truyện Cổ Tích', 15, 'Nguyễn Hướng Dương', 90000, 15000, 'image_195509_1_39438.jpg', 50, 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `email` varchar(120) NOT NULL,
  `role` int(11) DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1,
  `tel` varchar(25) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `role`, `status`, `tel`, `address`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 2, 1, '0377777777', 'laclongquan'),
(3, 'huy', '123456', 'nguyenhuy23112004@tdtu.edu.vn', 2, 1, '', ''),
(4, 'hayho', '123456', 'nahdha@gmail.com', 2, 1, '', ''),
(5, 'haihai', '123456', 'nguyenhuy23112004@gmail.com', 1, 1, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sp` (`ma_sp`) USING BTREE,
  ADD KEY `lk_binhluan_khachhang` (`ma_kh`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `lk_binhluan_khachhang` FOREIGN KEY (`ma_kh`) REFERENCES `taikhoan` (`id`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
