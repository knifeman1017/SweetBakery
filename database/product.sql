-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 03, 2019 at 10:43 AM
-- Server version: 5.7.26
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_campaign`
--

DROP TABLE IF EXISTS `tb_campaign`;
CREATE TABLE IF NOT EXISTS `tb_campaign` (
  `campaign_id` int(11) NOT NULL AUTO_INCREMENT,
  `campaign_name` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `campaign_desc` varchar(300) COLLATE utf8_vietnamese_ci NOT NULL,
  `campaign_status` tinyint(4) NOT NULL,
  `campaign_to_date` date NOT NULL,
  `campaign_from_date` date NOT NULL,
  PRIMARY KEY (`campaign_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_campaignproduct`
--

DROP TABLE IF EXISTS `tb_campaignproduct`;
CREATE TABLE IF NOT EXISTS `tb_campaignproduct` (
  `campaign_id` int(11) NOT NULL,
  `product_id` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`campaign_id`,`product_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

DROP TABLE IF EXISTS `tb_customer`;
CREATE TABLE IF NOT EXISTS `tb_customer` (
  `customer_id` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `customer_password` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `customer_name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `customer_email` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `customer_tel` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`customer_id`, `customer_password`, `customer_name`, `customer_email`, `customer_tel`) VALUES
('anlh12', 'anlh1223', 'Le Huu An', 'anlh158@gmail.com', '02838386788'),
('taylor13', '12345', 'xuan duong', 'asdasdasd@gmail.com', '0777667414');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

DROP TABLE IF EXISTS `tb_product`;
CREATE TABLE IF NOT EXISTS `tb_product` (
  `product_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `product_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `product_description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Images` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `product_price` float NOT NULL,
  `product_category` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`product_id`, `product_name`, `product_description`, `Images`, `product_price`, `product_category`) VALUES
('BK01', 'Yogurt cup', 'Những ly yogourt mềm mịn cùng vị chua thanh nhẹ nhàng.', 'O1-.png', 20000, 'khac'),
('BK02', 'Coffee Cup', 'Vị thơm của kem cà phê bên cạnh những lớp bánh mềm mịn, làm nên món tráng miệng ngon tuyệt.', 'O2-Coffee-Cup.png', 30000, 'Khac'),
('BK03', 'Chocolate Cup', 'Kem chocolate kết hợp với từng lớp bánh bông lan, thật dễ dàng phát hiện tình yêu.', 'O3-Chocolate-Cup.png', 35000, 'Khac'),
('BK04', 'Brownie', 'Tín đồ của chocolate sẽ không thể nào bỏ qua brownie, loại bánh xốp dẻo vừa phải nhưng cũng đủ độ cứng giòn sẽ mang lại năng lượng tràn đầy bằng hương vị ngọt bùi của nó.', 'O4-Brownie.png', 33000, 'Khac'),
('BK05', 'Pudding', 'Không chỉ có vẻ ngoài đáng yêu, những hủ pudding của chúng tôi còn mang nhiều hương vị thơm ngon.', 'O5-Pudding.png', 24000, 'Khac'),
('BK06', 'Bông Lan Cuốn', 'Vài biến tấu nhẹ nhàng trong phần thiết kế đã tạo nên bộ sưu tập những cô nàng bông lan cuộn xinh xắn và ngọt ngào.', 'O6-Sweet-Roll.png', 55000, 'Khac'),
('BK07', 'Bông Lan Chuối', 'Từ những nguyên liệu đơn giản như chuối, bột mì và trứng gà, đã làm ra bánh bông lan chuối xốp mịn và thơm ngon.', 'O7-Banana-Cake.png', 30000, 'Khac'),
('BK08', 'Chocolate Muffin', 'Mùi hương chocolate quyến rũ, cùng hương vị ngọt nhẹ nhàng pha lẫn chút hậu đắng, những chiếc muffin chocolate sẽ chinh phục mọi vị giác của bạn.', 'O8-Chocolate-Muffin.png', 35000, 'Khac'),
('BK09', 'Blueberry Muffin', 'Muffin blueberry đặc trưng với hương vị chua nhè nhẹ của lớp mức việt quất, hòa quyện cùng lớp bánh xốp mềm mịn, thơm ngon.', 'O9-Blueberry-Muffin.png', 30000, 'Khac'),
('G01', 'Financier', 'Với hình dáng của những chiếc thỏi vàng mang nhiều ý nghĩa may mắn, hộp bánh financier sẽ trở thành một món quà tuyệt vời dành cho những người thân yêu.', 'PaPro02-.png', 100000, 'Donggoi'),
('G02', 'Cookies Dừa', 'Những chiếc cookies dừa nhỏ bé thơm nức, hoàn hảo cho những ai nghiện vị bùi béo của dừa.', 'PaPro03-Coconut-Cookies-.png', 50000, 'donggoi'),
('G03', 'Sandwich', 'Có phần vỏ mềm, dai vừa phải, phần ruột bánh mịn, xốp và thơm,', 'PaPro04-Sandwich.png', 25000, 'Donggoi'),
('G04', 'Bánh Mì Sáu Múi', 'Bánh mì ngọt với các loại nhân hột gà, đậu xanh, socôla tiện dụng nhưng vẫn ngon miệng và dinh dưỡng.', 'PaPro05-.png', 15000, 'Donggoi'),
('G05', 'Bánh Cua Mini', 'Những chiếc bánh cua nhỏ có vị ngọt nhẹ và thơm bơ, một món ăn nhẹ hoàn hảo.', 'PaPro06-Mini-Croissant.png', 25000, 'Donggoi'),
('G06', 'Lexus', 'Chiếc bánh lexus giòn xốp với vị ngọt từ lớp đường phủ bên trên, đúng chuẩn bánh kiểu Pháp.', 'PaPro07-Lexus.png', 50000, 'Donggoi'),
('G07', ' Bánh Mì Hamburger', 'Từng chiếc bánh hamburger tròn đều và xốp mịn, cùng với hương vị của mè, thích hợp cho mọi cách sử dụng.', 'PaPro08-Hamburger-Buns.png', 27000, 'Donggoi'),
('G08', 'Bánh Mì Lúa Mạch', 'Bánh mì lúa mạch bổ dưỡng với hương vị đặc trưng của ngũ cốc.', 'PaPro09-.png', 25000, 'Donggoi'),
('K01', '', 'Chiếc bánh bông lan kết hợp với lớp kem mousse, trang trí bởi cookie hình trái tim, socola trắng và dâu..', 'WhoCake01.png', 300000, 'Banhkem'),
('K02', ' ', 'Bánh bông lan được phủ bởi lớp kem sữa tươi và trái cây.', 'WhoCake02.png', 320000, 'Banhkem'),
('K03', '', 'Bánh kem sữa tươi.', 'WhoCake03.png', 280000, 'Banhkem'),
('K04', '', 'Bánh kem socola.', 'WhoCake04.png', 360000, 'Banhkem'),
('K05', '', '', 'fresh-cream-cake1-12.png', 340000, 'Banhkem'),
('K06', '', '\r\nBánh kem sữa tươi được trang trí với trái cây và socola.', 'WhoCake06.png', 320000, 'Banhkem'),
('K07', '', 'Bánh kem socola trang trí với mức, socola và trái cây.', 'WhoCake07.png', 360000, 'Banhkem'),
('K08', '', '\r\nBánh kem sữa tươi hình khuôn mặt dễ thương.', 'WhoCake08.png', 370000, 'Banhkem'),
('K09', '', 'Bánh kem đặc biệt.', 'WhoCake09.png', 390000, 'Banhkem'),
('K10', '', '\r\nBánh kem sữa tươi đặc biệt trang trí với mức, trái cây và socola.', 'WhoCake10.png', 380000, 'Banhkem'),
('K11', '', '', 'fresh-cream-cake1-06.png', 360000, 'Banhkem'),
('K12', '', '', 'fresh-cream-cake1-11.png', 350000, 'Banhkem'),
('M01', 'Bánh Mì', 'Những ổ bánh mì vàng đều với lớp vỏ ngoài giòn tan và phần ruột bên trong xốp mềm.', 'Bread01-Baguette.png', 10000, 'Banhmi'),
('M02', 'Pizza', 'Chiếc pizza có bánh đế giòn xốp được phủ bởi lớp phô mai béo ngậy, xúc xích và ớt chuông xanh.\r\n', 'Bread02-Pizza-ABCT201.png', 30000, 'Banhmi'),
('M03', 'Jambon Phô Mai', 'Bánh mì tươi, mềm kết hợp với vị béo mằn mặn của lớp chà bông cùng sốt mayonnaise.', 'Bread03-.png', 25000, 'Banhmi'),
('M04', 'Bánh Mì Sốt Nắm', 'Chiếc bánh thơm ngon mang mùi vị độc đáo đến từ sốt nấm và thịt ham', 'Bread04-.png', 28000, 'Banhmi'),
('M05', 'Pizza Xúc Xích', 'Phần ăn đầy đủ dinh dưỡng với xúc xích, thịt jambon cắt nhỏ và phô mai.', 'Bread05-.png', 27000, 'Banhmi'),
('M06', 'Bánh Mì Châu Âu', 'Bên cạnh một chút vị ngọt nhẹ đến từ bánh mì, còn có chút vị mặn của chà bông và béo thơm của trứng cút.', 'Bread06-.png', 25000, 'Banhmi'),
('M07', 'Bánh Đan Mạch Xúc Xích', '\r\nLớp bánh đan mạch cuộc xúc xích được phủ thêm chà bông gà và sốt mayonnaise.', 'Bread07-.png', 20000, 'Banhmi'),
('M08', 'Bánh Mì Salad Kẹp', 'Bánh mì mè kẹp thịt ham, phô mai, rau xà lách và cà chua thơm ngon và bổ dưỡng', 'Bread08.png', 32000, 'Banhmi'),
('M09', 'Croissant', '\r\nTừng chiếc croissant với những lớp vỏ xốp giòn và vị bơ thơm lừng bên trong.', 'Pastry01-Croissant.png', 25000, 'Banhmi'),
('M10', 'Lưới Dừa', 'Vị ngọt thơm đặc trưng của dừa kết hợp với bánh mì mềm mịn tạo nên chiếc bánh dừa hoàn hảo.', 'Pastry03-', 15000, 'Banhmi'),
('M11', 'Sâu Kem', 'Bạn có dám thử chú sâu béo ịt đầy ụ bơ này không ?', 'Pastry04-.png', 20000, 'Banhmi'),
('M12', 'Sú Chocolate Chip', 'Cảm nhân hương vị sô cô la trong từng miếng cắn', 'Pastry05-Chocolachip-Bun.png', 23000, 'Banhmi'),
('N01', 'Chocolate Almond Cake', '\"Được làm từ bông lan nâu, đen, bên cạnh lớp chocolate đen và viền hạnh nhân lát, mang đến mùi vị bùi thơm ngọt ngào.\r\n', 'SliCake01-.png', 25000, 'Banhngot'),
('N02', 'Lemon Cream Cake', 'Chiếc bánh nhỏ nhắn mang vị chanh nhẹ nhàng sẽ làm tươi mới mọi vị giác của bạn.', 'SliCake02-.png', 27000, 'Banhngot'),
('N03', 'Marble Cheesecake', 'Từ vị béo của phô mai anchor hoà cùng vị ngọt của chocolate trắng và đen đã tạo nên chiếc bánh marble cheesecake mềm mại và thơm ngon.', 'SliCake03-.png', 30000, 'Banhngot'),
('N04', 'Mini Black Forest', 'Những chiếc Black Forest với kích thước nhỏ nhưng vẫn giữ được mùi vị sôcôla đặc trưng của mình.\r\n', 'SliCake04-Mini-Black-Forest.png', 35000, 'Banhngot'),
('N05', 'Bánh Cà Rốt', 'Với sự kết hợp của các mùi vị cà rốt, quả óc chó, bơ lạt, phô mai đã tạo nên chiếc bánh kem cà rốt thơm ngon và tốt cho sức khỏe', 'SliCake05-Carrot-Cake.png', 32000, 'Banhngot'),
('N06', 'Chocolate Cocoa', 'Trải nghiệm từng tần hương vị của lớp bông lan mềm mịn, lớp kem mousse thơm béo và vị chocolate quyến rũ.', 'SliCake06-.png', 27000, 'Banhngot'),
('N07', 'Strawberry Dome', 'Khối cầu mang mùi hương dịu nhẹ cùng vị ngọt đến từ lớp kem mousse và kem sữa tươi.', 'SliCake07-.png', 29000, 'Banhngot'),
('N08', 'Blueberry Vani', 'Chiếc bánh bốn tầng được làm từ những lớp bánh bông lan tươi mịn, lớp mousse blueberry thơm ngọt và lớp mousse kem sữa béo mịn.', 'SliCake08-.png', 33000, 'Banhngot'),
('N09', 'Orange Vani', 'Cảm nhận vị cam hòa quyện giữa lớp kem mousse béo ngọt và bánh bông lan mịn màng.', 'SliCake09-.png', 35000, 'Banhngot'),
('TT01', 'Prenium', '', '8L2A5292-223x300.png', 780000, 'Theomua'),
('TT02', 'Modern Harmony', '', '8L2A0509-683x1024.png', 670000, 'Theomua'),
('TT03', 'Lava', '', 'lava-683x1024.png', 789000, 'Theomua'),
('TT04', 'Royal', '', '8L2A7253-683x1024.png', 750000, 'Theomua'),
('TT05', 'Golden Lava', '', 'goldenLavaBox.png', 860000, 'Theomua');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_campaignproduct`
--
ALTER TABLE `tb_campaignproduct`
  ADD CONSTRAINT `tb_campaignproduct_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `tb_product` (`product_id`),
  ADD CONSTRAINT `tb_campaignproduct_ibfk_2` FOREIGN KEY (`campaign_id`) REFERENCES `tb_campaign` (`campaign_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
