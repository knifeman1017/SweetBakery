-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 12, 2019 at 09:48 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sweetsbakery`
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
('BK10', 'Cookies ', '', 'Tuiles-d-amandes_tcm90-24805_w1024_n.png', 20000, 'khac'),
('G01', 'Financier', 'Với hình dáng của những chiếc thỏi vàng mang nhiều ý nghĩa may mắn, hộp bánh financier sẽ trở thành một món quà tuyệt vời dành cho những người thân yêu.', 'PaPro02-.png', 100000, 'Donggoi'),
('G02', 'Cookies Dừa', 'Những chiếc cookies dừa nhỏ bé thơm nức, hoàn hảo cho những ai nghiện vị bùi béo của dừa.', 'PaPro03-Coconut-Cookies-.png', 50000, 'donggoi'),
('G03', 'Sandwich', 'Có phần vỏ mềm, dai vừa phải, phần ruột bánh mịn, xốp và thơm,', 'PaPro04-Sandwich.png', 25000, 'Donggoi'),
('G04', 'Bánh Mì Sáu Múi', 'Bánh mì ngọt với các loại nhân hột gà, đậu xanh, socôla tiện dụng nhưng vẫn ngon miệng và dinh dưỡng.', 'PaPro05-.png', 15000, 'Donggoi'),
('G05', 'Bánh Cua Mini', 'Những chiếc bánh cua nhỏ có vị ngọt nhẹ và thơm bơ, một món ăn nhẹ hoàn hảo.', 'PaPro06-Mini-Croissant.png', 25000, 'Donggoi'),
('G06', 'Lexus', 'Chiếc bánh lexus giòn xốp với vị ngọt từ lớp đường phủ bên trên, đúng chuẩn bánh kiểu Pháp.', 'PaPro07-Lexus.png', 50000, 'Donggoi'),
('G07', ' Bánh Mì Hamburger', 'Từng chiếc bánh hamburger tròn đều và xốp mịn, cùng với hương vị của mè, thích hợp cho mọi cách sử dụng.', 'PaPro08-Hamburger-Buns.png', 27000, 'Donggoi'),
('G08', 'Bánh Mì Lúa Mạch', 'Bánh mì lúa mạch bổ dưỡng với hương vị đặc trưng của ngũ cốc.', 'PaPro09-.png', 25000, 'Donggoi'),
('G09', 'Bánh muffin hương vani', '', '11715247833118.png', 45000, 'Donggoi'),
('G10', 'Cookies hương vani', 'có hương vị mềm, thơm ngon từ bột mỳ, trứng gà tươi và hương vani hấp dẫn. Sản phẩm được đóng hộp hợp vệ sinh, thích hợp là món ăn vặt bổ sung năng lượng.', '11709884203038.png', 30000, 'Donggoi'),
('G11', 'Bánh Ekura hộp 4 chiếc', 'Dược làm từ các thành phần tự nhiên như: nước, trứng, bột mì, dầu thực vật, bơ, đường, sữa bột... không chứa chất bảo quản, an toàn khi sử dụng. ', '9554504319006.png', 14000, 'Donggoi'),
('G12', 'Bánh muffin trà xanh', '​ có hương vị thơm ngon từ bột mỳ, bơ, trứng gà kết hợp với hương vị trà xanh thơm ngon. ', '11709929259038.png', 40000, 'Donggoi'),
('K01', 'RED VELVET', 'Cốt bánh red velvet 4 lớp với nhân kem vanilla, trang trí bằng bánh macaron, chocolate', 'Banh-kem-_636955045828620288_HasThumb_Thumb.png', 280000, 'Banhkem'),
('K02', ' COCONUT', 'Đặc trưng của bánh kem Coconut là vị thơm bùi của dừa. Cốt bánh Vanila 4 lớp nhân kem dừa xốp, bồng bềnh như mây là gợi ý tuyệt vời nếu bạn đã quá quen với hương vị truyền thống.', 'Banh-kem-_636955049356176509_HasThumb_Thumb.png', 320000, 'Banhkem'),
('K03', 'CARAMEL JELLY', 'Bánh kem tươi cốt bánh Vanilla 3 lớp, nhân thạch caramel, kem tươi trang trí sốt caramel và socola', 'Banh-kem-_636955033758064465_HasThumb_Thumb.png', 280000, 'Banhkem'),
('K04', 'BLUE OCEAN', 'Cốt bánh vani 4 lớp nhân kem vani, trang trí chủ đề đại dương với hình kẹo đường ngộ nghĩnh', 'bluene_636952391301933341_HasThumb_Thumb.png', 350000, 'Banhkem'),
('K05', 'OPERA', 'Bánh kem Opera với cốt bánh vanilla 4 lớp cùng lóp kem bơ café đắng nhẹ, phủ lớp socola ngọt ngào tạo một sự kết hợp hoàn hảo cho bánh vào những dịp ý nghĩa', 'ANHUPWEB-_636815845878761041_HasThumb_Thumb.png', 320000, 'Banhkem'),
('K06', 'CHOCOLATE LOVE', 'Chocolate Love với cốt bánh vanilla 4 lớp, bánh được phủ lên lớp kem socola đen ngọt ngào, trang trí trên mặt bánh là những chiếc bánh donut và những bánh quy Oreo tạo nên sự kết hợp hoàn hảo cho chiếc bánh ấn tượng này.', 'Chocolate_637001623823496507_HasThumb_Thumb.png', 250000, 'Banhkem'),
('K07', 'SPRING FLOWER', 'Chiếc bánh mùa xuân Spring Flower bao gồm hỗn hợp mứt hoa quả gồm dâu tây, phúc bồn tử,việt quất, nho đen, một khu vườn hoa sắc màu tích hợp trong một chiếc bánh ý nghĩa', '9f70d1043_636978483412264593_HasThumb_Thumb.png', 390000, 'Banhkem'),
('K08', 'CHOCOLATE FRUIT', 'Chocolate Fruit với cốt bánh socola 3 lớp, bánh được phủ lớp trang trí kem tươi và mứt táo đặc biết. Trang trí thêm nhưng chái cherry đem giòn, ngọt độc đáo và những lát socola mỏng tạo cho không gian ăn uống, tiệc tùng lí tưởng của bạn.', 'ANHUPWEB-_636815847913097398_HasThumb_Thumb.png', 200000, 'Banhkem'),
('K09', 'SWEET AUTUMN', 'Bánh kem Sweet Autumn như một lớp bông mịn màng với cốt bánh vanilla 4 lớp, phủ thêm những lát socola bào và lớp kem tươi béo ngậy.', 'ANHUPWEB-_636815846204199655_HasThumb_Thumb.png', 280000, 'Banhkem'),
('K10', 'TIRAMISU', 'Bánh kem Tiramisu là sự kết hợp đặc trưng giữa cốt kem vanilla 3 lớp và rượu rum tạo nên hương vị cho chiếc bánh mềm mịn, mát lạnh. Bánh được phủ lên vị phomai kem béo ngậy, thêm vào đó là lớp dừa, cacao trang trí lên mặt bánh.', 'Tiramisu-_636980077321218052_HasThumb_Thumb.png', 320000, 'Banhkem'),
('K11', 'BLACK FOREST', 'Black Forest ý tưởng tuyệt vời cho tình nhân, cốt bánh socola 3 lớp ngọt ngào, nhân vị cocktail trái cây tươi thêm những lát socola bào cho một buổi tối lãng mạn.', 'ANHUPWEB-_636815848497730837_HasThumb_Thumb.png', 360000, 'Banhkem'),
('K12', ' BOSTON CHOCOLATE', 'Boston Chocolate, với cốt bánh socola 3 lớp đặc trưng với hương vị ngọt ngào, phủ lớp kem vanilla béo ngậy pha chút vị đắng của những lát socola giòn tan. Phủ trang trí lên những lát socola và những trái cherry chín mọng đặt lên mặt bánh.', 'ANHUPWEB-_636815848293349147_HasThumb_Thumb.png', 250000, 'Banhkem'),
('M01', 'Bánh mỳ Baguette', 'Những ổ bánh mì vàng đều với lớp vỏ ngoài giòn tan và phần ruột bên trong xốp mềm.', '10262651568158.png', 5000, 'Banhmi'),
('M02', 'Bánh mỳ nho', ' được làm từ nguồn nguyên liệu tự nhiên, an toàn, nên bạn hoàn toàn yên tâm khi sử dụng. Sản phẩm là sự kết hợp hoàn hảo giữa các thành phần như: bột mì, nước, đường, kem tươi, trứng gà, bột ngô, nho khô… cho ra hương vị bánh vô cùng thơm ngon, hấp dẫn.\r\n', '9486168162334.png', 15000, 'Banhmi'),
('M03', 'Bánh mỳ chà bông', ' được làm từ nguồn nguyên liệu tự nhiên, an toàn, nên bạn hoàn toàn yên tâm khi sử dụng. Sản phẩm là sự kết hợp hoàn hảo giữa các thành phần như: bột mì Bông Hồng Xanh, đường trắng, men tươi, trứng gà, sữa bột béo nguyên kem… cho ra hương vị bánh vô cùng thơm ngon, hấp dẫn.', '10225982930974.png', 15000, 'Banhmi'),
('M04', 'Bánh Danish anh đào', 'được làm từ nguồn nguyên liệu tự nhiên, an toàn, nên bạn hoàn toàn yên tâm khi sử dụng. Sản phẩm là sự kết hợp hoàn hảo giữa các thành phần như: bột mì, nước, đường, kem tươi, trứng gà, bột ngô, cherry… cho ra hương vị bánh vô cùng thơm ngon, hấp dẫn.', '9487413772318.png', 16000, 'Banhmi'),
('M05', 'Dăm bông cheese', 'được làm từ các thành phần tự nhiên như: bột mì, đường kính, men tươi, bơ lạt, dăm bông, phô mai... không chứa chất bảo quản, an toàn khi sử dụng. ', '9541499748382.png', 15000, 'Banhmi'),
('M06', 'Pizza hỗn hợp 18cm', 'có thành phần gồm bột mì, dầu ăn, xúc xích, phô mai... Sản phẩm cung cấp dinh dưỡng và năng lượng cho cơ thể, giúp duy trì các hoạt động thường ngày.bông và béo thơm của trứng cút.', '10206499274782.png', 22000, 'Banhmi'),
('M07', 'Đan Mạch Xúc Xích', '\r\nLớp bánh đan mạch cuộc xúc xích được phủ thêm chà bông gà và sốt mayonnaise.', 'Bread07-.png', 20000, 'Banhmi'),
('M08', 'Bánh Mì Salad Kẹp', 'Bánh mì mè kẹp thịt ham, phô mai, rau xà lách và cà chua thơm ngon và bổ dưỡng', 'Bread08.png', 32000, 'Banhmi'),
('M09', 'Pizza jambon', 'Sản phẩm là sự kết hợp hoàn hảo giữa các thành phần như: bột mì chìa khóa đỏ, men tươi ngọt, đường kính, dầu ăn, sữa bột béo, bơ nhạt... mang đến những hương vị bánh vô cùng thơm ngon, hấp dẫn. ', '9507509960734.png', 39000, 'Banhmi'),
('M10', 'Pizza cá ngừ', 'sự kết hợp hoàn hảo của bột mì chìa khóa đỏ, đường kính, dầu ăn... với thành phần nguyên liệu phủ trên bề mặt bánh cùng hương vị của cá ngừ và các gia vị tự nhiên trên nền bánh pizza đế mỏng.', '9485576601630.png', 70000, 'Banhmi'),
('M11', 'Pizza xúc xích', 'sự kết hợp hoàn hảo của bột mì chìa khóa đỏ, đường kính, dầu ăn... với thành phần nguyên liệu an toàn cùng hương vị của xúc xích và gia vị tự nhiên trên nền bánh pizza đế mỏng.', '9486003929118.png', 50000, 'Banhmi'),
('M12', 'Bánh mỳ gà nấm', ' được làm từ các thành phần tự nhiên như: bột mì, đường kính, men tươi, trứng gà, đùi gà rút xương, nấm đông cô, khoai tây, bơ lạt... không chứa chất bảo quản, an toàn khi sử dụng. ', '9541899321374.png', 24000, 'Banhmi'),
('N01', 'Chocolate Almond Cake', '\"Được làm từ bông lan nâu, đen, bên cạnh lớp chocolate đen và viền hạnh nhân lát, mang đến mùi vị bùi thơm ngọt ngào.\r\n', 'SliCake01-.png', 25000, 'Banhngot'),
('N02', 'Lemon Cream Cake', 'Chiếc bánh nhỏ nhắn mang vị chanh nhẹ nhàng sẽ làm tươi mới mọi vị giác của bạn.', 'SliCake02-.png', 27000, 'Banhngot'),
('N03', 'Marble Cheesecake', 'Từ vị béo của phô mai anchor hoà cùng vị ngọt của chocolate trắng và đen đã tạo nên chiếc bánh marble cheesecake mềm mại và thơm ngon.', 'SliCake03-.png', 30000, 'Banhngot'),
('N04', 'Mini Black Forest', 'Những chiếc Black Forest với kích thước nhỏ nhưng vẫn giữ được mùi vị sôcôla đặc trưng của mình.\r\n', 'SliCake04-Mini-Black-Forest.png', 35000, 'Banhngot'),
('N05', 'Bánh Cà Rốt', 'Với sự kết hợp của các mùi vị cà rốt, quả óc chó, bơ lạt, phô mai đã tạo nên chiếc bánh kem cà rốt thơm ngon và tốt cho sức khỏe', 'SliCake05-Carrot-Cake.png', 32000, 'Banhngot'),
('N06', 'Chocolate Cocoa', 'Trải nghiệm từng tần hương vị của lớp bông lan mềm mịn, lớp kem mousse thơm béo và vị chocolate quyến rũ.', 'SliCake06-.png', 27000, 'Banhngot'),
('N07', 'Strawberry Dome', 'Khối cầu mang mùi hương dịu nhẹ cùng vị ngọt đến từ lớp kem mousse và kem sữa tươi.', 'SliCake07-.png', 29000, 'Banhngot'),
('N08', 'Blueberry Vani', 'Chiếc bánh bốn tầng được làm từ những lớp bánh bông lan tươi mịn, lớp mousse blueberry thơm ngọt và lớp mousse kem sữa béo mịn.', 'SliCake08-.png', 33000, 'Banhngot'),
('N09', 'Orange Vani', 'Cảm nhận vị cam hòa quyện giữa lớp kem mousse béo ngọt và bánh bông lan mịn màng.', 'SliCake09-.png', 35000, 'Banhngot'),
('N10', 'BANANA', 'Bánh chuối truyền thống, sự kết hợp của 100% chuối tươi và nước cốt dừa Việt Nam.', '270_crop_BANHCHUOI.png', 19000, 'Banhngot'),
('N11', 'CHEESE GREEN TEA', 'Một sự sáng tạo mới mẻ, kết hợp giữa trà xanh đậm đà và phô mai ít béo.', '270_crop_PHOMAITRAXANH.png', 29000, 'Banhngot'),
('N12', 'CHEESE COFFEE', 'Làm từ cà phê truyền thống của Highlands, kết hợp với phô mai thơm ngon! Chiếc bánh phù hợp đi cùng với bất cứ món cà phê nào!', '270_crop_PHOMAICAPHE.png', 29000, 'Banhngot'),
('TT01', 'TRÀNG TIỀN PHỐ', 'Hộp 5 bánh : Gốm 4 bánh 70 gr + 1 bánh 150 gr', 'trangtien-1-600x596.png', 520000, 'Theomua'),
('TT02', 'TẠ HIỆN PHỐ', 'Hộp 4 bánh 120gr : 2 bánh nướng, 2 bánh dẻo tuỳ', 'tahien-1-600x598.png', 550000, 'Theomua'),
('TT03', 'HÀNG ĐÀO PHỐ', 'Hộp 6 bánh 70gr : 3 bánh nướng, 3 bánh dẻo ', 'hangdao-1-600x599.png', 480000, 'Theomua'),
('TT04', 'ĐIỆN BIÊN PHỦ PHỐ', 'Hộp 6 bánh 120gr : 3 bánh nướng, 3 bánh dẻo', 'dienbien-1-600x597.png', 580000, 'Theomua'),
('TT05', 'HỘP HÀ THÀNH', 'Hộp 8 bánh 70gr : 4 bánh nướng, 4 bánh dẻo', 'vip1-1-600x596.png', 790000, 'Theomua'),
('TT06', 'LÝ THƯỜNG KIỆT PHỐ', 'Hộp 6 bánh 120gr : 3 bánh nướng, 3 bánh dẻo', 'lythuongkiet-1-600x600.png', 630000, 'Theomua');

-- --------------------------------------------------------

--
-- Table structure for table `tb_store`
--

DROP TABLE IF EXISTS `tb_store`;
CREATE TABLE IF NOT EXISTS `tb_store` (
  `store_id` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Name Store` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dia chi` text COLLATE utf8_unicode_ci NOT NULL,
  `ngay dang ki cua hang` date DEFAULT NULL,
  PRIMARY KEY (`store_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_store`
--

INSERT INTO `tb_store` (`store_id`, `Name Store`, `dia chi`, `ngay dang ki cua hang`) VALUES
('1', 'Sweetsbakery CMT8', '590 Cách Mạng Tháng Tám, Quận 3, TPHCM', '1970-01-01'),
('2', 'Sweetsbakery PXL ', '193 Phan Xích Long, Phường 7, Phú Nhuận, Hồ Chí Minh', '2019-09-09'),
('3', 'Store NTT ', '129 Nguyễn Trọng Tuyển, Phường 15, Phú Nhuận, Hồ Chí Minh', '2019-09-10'),
('4', NULL, '', NULL);

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
