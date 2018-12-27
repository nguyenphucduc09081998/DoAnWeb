-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 27, 2018 lúc 05:05 PM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dataweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `congty`
--

CREATE TABLE `congty` (
  `MaCongTy` int(10) NOT NULL,
  `TenCongTy` text COLLATE utf8_unicode_ci NOT NULL,
  `IconCongTy` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `AnhCongTy` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChiCongTy` text COLLATE utf8_unicode_ci NOT NULL,
  `TGLamViecCongTy` text COLLATE utf8_unicode_ci NOT NULL,
  `DaiNgoCongTy` text COLLATE utf8_unicode_ci NOT NULL,
  `IDuser` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `congty`
--

INSERT INTO `congty` (`MaCongTy`, `TenCongTy`, `IconCongTy`, `AnhCongTy`, `DiaChiCongTy`, `TGLamViecCongTy`, `DaiNgoCongTy`, `IDuser`) VALUES
(1, 'FPTsoft', '/images/congty1.png', '/images/anhcongty1.png', 'tp Nha Trang', 'ádfsafsaf', 'Được đóng bảo hiểm', 1),
(2, 'LUXOFT', '/images/congty2.png', '/images/anhcongty2.png', 'Nha Trang, Khánh Hòa', 'Thứ 2 - 6', 'Được đi du lịch', 6),
(3, 'VietinBank', '/images/congty3.png', '/images/anhcongty3.png', 'Ba Đình, Hà Nội', 'Thứ 2 - 7', 'Được Đóng Bảo Hiểm, Tham gia các khóa học nâng cao', 14),
(4, 'SONY', '/images/congty4.png', '/images/anhcongty4.png', 'Quận 9, Tp Hồ Chí Minh', 'Thứ 2 - 6', 'Được Đi du lịch 2 lần trong năm', 3),
(5, 'HiCom', '/images/congty5.png', '/images/anhcongty5.png', 'tp Nha Trang', 'thứ 2 - 6', 'Được Đi du lịch, và đóng bảo hiểm', 11),
(6, 'Fujinet', '/images/congty7.png', '/images/anhcongty7.png', 'Quân 8, Tp Hồ Chí Minh', 'Thứ 2-6', 'Được tham đi tham quan, du lịch', 2),
(7, 'PepSi', '/images/congty6.png', '/images/anhcongty6.png', 'tp Nha Trang', 'thứ 2 - 6', 'Được Đi du lịch, và đóng bảo hiểm', 11),
(8, 'PS', '/images/congty8.png', '/images/anhcongty8.png', 'Quận 2, Tp Hồ Chí Minh', 'Thứ 2-7', 'Được Đi hoc nâng cao nước ngoài, bảo hiểm', 3),
(9, 'PETMEX', '/images/congty9.png', '/images/anhcongty9.png', 'tp Nha Trang', 'thứ 2 - 6', 'Được Đi du lịch, và đóng bảo hiểm', 11),
(11, 'hiếu soft', '/images/thiet-ke-logo-cong-ty-thuong-mai-phuong-bac-pbc_thumb_1466496409.jpg', '/images/13_1.jpg', 'thành phố Hồ Chí Minh', 'hoạt động giờ hành chính từ thứ 2 đến thứ 7', 'có thưởng tết, lương tháng 13', 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `congviec`
--

CREATE TABLE `congviec` (
  `MaCongViec` int(10) NOT NULL,
  `TenCongViec` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MoTaCongViec` text COLLATE utf8_unicode_ci NOT NULL,
  `MucLuongCongViec` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `YeuCauCongViec` text COLLATE utf8_unicode_ci NOT NULL,
  `TinhChatCongViec` int(10) NOT NULL,
  `SoLuongCongViec` int(10) NOT NULL,
  `AnhCongViec` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NganhCongViec` int(10) NOT NULL,
  `MaCongTy` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `congviec`
--

INSERT INTO `congviec` (`MaCongViec`, `TenCongViec`, `MoTaCongViec`, `MucLuongCongViec`, `YeuCauCongViec`, `TinhChatCongViec`, `SoLuongCongViec`, `AnhCongViec`, `NganhCongViec`, `MaCongTy`) VALUES
(1, 'Lập trình ứng dụng điện thoại', '- Tham gia lập trình trong các dự án sử dụng ngôn ngữ C/C++ trên hệ điều hành Linux/Windows/MAC trong lĩnh vực y tế với khách hàng châu âu\r\n- Cài đặt môi trường theo hướng dẫn\r\n- Cài đặt thuật toán, lập trình theo mô tả trong thiết kế hoặc do người phụ  trách hướng dẫn\r\n- Thực hiện unit test cho phần mềm, phân tích và sửa lỗi.', 'từ 10-15 triệu', 'Kinh nghiệm: 2 năm.\r\nTrình Độ: Đại Học.', 1, 3, '/images/anhcongviec1.png', 1, 1),
(2, 'Quản trị cơ sở dữ liệu', '- Cài đặt môi trường theo hướng dẫn\r\n- Cài đặt thuật toán, lập trình theo mô tả trong thiết kế hoặc do người phụ  trách hướng dẫn', 'từ 15-20 triệu', 'Kinh Nghiệm:3 năm.\r\nTrình Độ: Cao Đẳng-Đại Học.', 1, 2, '/images/anhcongviec6.png', 1, 6),
(3, 'Kĩ sư phần mềm', '-Làm việc trong môi trường chuyên nghiệp, cạnh tranh công bằng trong các dự án với KH châu Âu hoăc Nhật Bản.\r\nLĩnh vực dự án cập nhật: IOT, Big Data, ITS (lntelligent Transport System), Data Management.', 'Từ 13-15 triệu', 'C/C++ căn bản.\r\nĐọc, hiểu, viết bằng tiếng Anh.', 1, 5, '/images/anhcongviec1.png', 1, 1),
(5, 'Nhân Viên TesTer', '- tiến hành test sản phẩm phần mềm\r\n- làm việc với các tool test', 'từ 20 - 25 triệu', '- có kinh nghiệm tỏng tester\r\n- tỉ mĩ, cẩn thận', 1, 3, '/images/anhcongviec2.png', 1, 2),
(6, 'lập trình viên php', '-làm việc với ngôn ngữ php\r\n- lập trình website', '15-20 triệu', ' - 2 năm kinh nghiệm lập trình php\r\n - đọc hiểu tiếng anh\r\n - khả năng làm việc nhóm', 1, 3, '/images/anhcongviec2.png', 1, 2),
(7, 'nhân viên ngân hàng', 'Biên dịch\r\n\r\nBiên tập, sản xuất bản tin Kienlongbank\r\n\r\nCập nhật trang thông tin điện tử, diễn đàn nội bộ\r\n\r\nBiên tập phỏng vấn viết bài\r\n\r\nKết nối với Báo chí và cộng đồng\r\n\r\nCác công việc khác theo phân công', '7-10 triệu', '-Tốt nghiệp Cao đẳng trở lên các trường trong và ngoài nước với các chuyên ngành: Kinh tế, Quản trị kinh doanh, Tài chính, Ngân hàng…\r\n- Thành thạo internet và mạng xã hội\r\n- Không quá 35 tuổi', 1, 2, '/images/anhcongviec3.png', 3, 3),
(8, 'Kĩ sư điện-điện tử', '- Đảm nhiệm các công tác kỹ thuật.\r\n- Lắp ráp, vận hành, thi công sản phẩm.\r\n- Kiểm tra, sửa chữa, bảo trì máy móc thiết bị đã giao cho khách hàng.\r\n- Hỗ trợ tư vấn khách hàng về chuyên môn.\r\n- Các công việc cụ thể khác sẽ được trao đổi trong buổi phỏng vấn.', '15-20 triệu', 'Nam sinh năm 1980 - 1989\r\n- Ưu tiên: Tốt nghiệp ĐH Bách Khoa/ĐH Sư Phạm Kỹ Thuật chuyên ngành Điện – Điện tử, Điện Công nghiệp\r\n- Có kinh nghiệm ít nhất 5 năm trong ngành.\r\n- Đạo đức tốt, chăm chỉ, siêng năng, nhiệt tình. \r\n- Ưu tiên tiếng anh chuyên ngành đọc hiểu tốt, giao tiếp khá.\r\n- Siêng năng, cẩn thận, thích khám phá tìm tòi công nghệ mới.\r\n- Làm việc độc lập và team work tốt.\r\n- Có khả năng quản lý điều hành nhằm đảm bảo chất lượng và thời gian giao sản phẩm đến tay khách hàng.\r\n- Có tinh thần trách nhiệm, nghiêm túc trong công việc, gắn bó lâu dài.\r\n- Sẵn sàng đi công tác xa khi Công ty có yêu cầu.\r\n\r\n', 1, 2, '/images/anhcongviec4.png', 2, 4),
(9, 'tư vấn sản phẩm dịch vụ', '-	Hướng dẫn, giới thiệu, tư vấn sản phẩm dịch vụ, các gói giải tài chính của công ty\r\n-	Thực hiện công tác chăm sóc khách hàng\r\n-	Thực hiện thu thập thông tin, tình hình khách hàng', '7-10 triệu', '- Tốt nghiệp Trung Cấp trở lên. \r\n- Ưu tiên ứng viên có kinh nghiệm Sales, tư vấn bán hàng là một lợi thế\r\n- Nhanh nhẹn, năng động, chịu học hỏi.\r\n- ', 0, 10, '/images/anhcongviec3.png', 3, 3),
(10, 'Nhân viên truyền thông', 'Biên dịch\r\n\r\nBiên tập, sản xuất bản tin Kienlongbank\r\n\r\nCập nhật trang thông tin điện tử, diễn đàn nội bộ\r\n\r\nBiên tập phỏng vấn viết bài\r\n\r\nKết nối với Báo chí và cộng đồng\r\n\r\nCác công việc khác theo phân công', '  7-10 triệu', '- Tốt nghiệp Cao đẳng trở lên các trường trong và ngoài nước với các chuyên ngành: Kinh tế, Quản trị kinh doanh, Tài chính, Ngân hàng…\r\n- Thành thạo internet và mạng xã hội\r\n- Không quá 35 tuổi\r\n- 1 năm kinh  nghiệnm', 1, 2, '/images/anhcongviec3.png', 3, 3),
(11, 'Nhân Viên Tư Vấn', '- Lập kế hoạch, triển khai các công tác tư vấn qua điện thoại, tư vấn trực tiếp, chăm sóc khách hàng qua điện thoại dựa trên nguồn khách hàng công ty hỗ trợ.\r\n- Làm việc nhóm, Không áp đặt doanh số cá nhân. Đảm bảo chỉ tiêu chung của team làm việc (từ 6-8 bạn/team).\r\n- Trải nghiệm các vị trí công việc theo năng lực để phát triển và hoàn thiện kỹ năng, tạo cơ hội thăng tiến nhanh (Trao đổi cụ thể khi phòng vấn).', '6-10 triệu', '*YÊU CẦU ĐẦU VÀO:\r\n- Tự tin vào khả năng giao tiếp, tư vấn, thuyết phục.\r\n- Yêu thích lĩnh vực dịch vụ khách hàng.\r\n- Muốn phát triển bản thân, đột phá thu nhập.\r\n- Nam/nữ: tuổi từ 20 – 28, ngoại hình khá.\r\n*YÊU CẦU TRONG QUÁ TRÌNH LÀM VIỆC:\r\n- Ham học hỏi, chịu khó, kiên trì.\r\n- Không ngừng phấn đấu và rèn luyện bản thân.\r\n- Không được ngừng đột phá giới hạn trong công việc tạo thành công và tạo thu nhập hơn mong đợi', 0, 3, 'images/nvTuvan.jpg', 3, 8),
(12, 'Nhân Viên Tư Vấn, Giới Thiệu Dịch Vụ', '- Hướng dẫn khách hàng sử dụng dịch vụ, ứng dụng của công ty.\r\n- Làm việc cùng team/đội nhóm, chịu trách nhiệm thực hiện các sự kiện kích hoạt để tăng trưởng người dùng ở các địa điểm có mặt khách hàng mục tiêu (Trường học, căn tin, hội chợ việc làm, hội chợ, những địa điểm tập trung đông khách hàng,...)\r\n- Điều phối, giám sát, tuyển dụng nhân viên thời vụ, đại sứ sinh viên,... và báo cáo (ngày, tuần, tháng) các hoạt động nội bộ của nhóm cho quản lý.\r\n- Chuẩn bị Vật dụng trưng bày cho các sự kiện, event sẽ tham gia,...\r\n- Hỗ trợ và theo dõi kết qủa từ các đại lý\r\n- Quản lý các đại lý đang ký kết\r\n- Lên ý tưởng các sự kiện để đạt chỉ tiêu của nhóm​.\r\n- Các công việc khác theo yêu cầu của quản lý.', '7-10 triệu', '- Tốt nghiệp Đại học, Cao đẳng, Trung cấp,THPT... chuyên ngành Marketing hoặc có kinh nghiệm làm sales/bán hàng là một lợi thế\r\n- Không ngại khó khăn, siêng năng, cần cù, chịu khó\r\n- Trung thực, nhiệt tình và trách nhiệm cao trong công việc\r\n- Khả năng giao tiếp tốt, nhanh nhẹn, có khả năng thuyết phục khách hàng\r\n- Có hiểu biết về Marketing/bán hàng, ưu tiên có kinh nghiệm ở vị trí tương đương từ 1 năm trở lên.\r\n- Sử dụng thành thạo vi tính văn phòng, Internet…\r\n- Có phương tiện di chuyển.\r\n- Tiếng Anh giao tiếp cơ bản\r\n- Độ tuổi: 20 - 28 tuổi.', 1, 5, 'images/anhcongviec7.jpg', 3, 7),
(13, 'nhân viên bán hàng', '- Chào đón, tính tiền cho khách.\r\n- Làm việc theo ca luân phiên, 8 tiếng/ca.\r\n- Làm các công việc theo sự bố trí của Cửa hàng Trưởng\r\n- làm việc trong môi trường độc hại', '5-7 triệu', '- Độ tuổi từ 18-30 tuổi, đủ 18 tuổi trở lên\r\n- CHỈ NHẬN ỨNG VIÊN NỘP HỒ SƠ TRỰC TIẾP TẠI VĂN PHÒNG, KHÔNG NHẬN HỒ SƠ NỘP TRỰC TUYẾN HOẶC QUA EMAIL\r\n- Yêu thích công việc bán hàng.\r\n- Siêng năng, chăm chỉ, trung thực.\r\n- Có trách nhiệm trong công việc.\r\n- Có tinh thần ham học hỏi.\r\n- Có mục tiêu phấn đấu để thăng tiến trong công việc.', 0, 3, 'images/anhcongviec9.jpg', 2, 9),
(14, 'Nhân Viên Theo Dõi Đơn Hàng (Bộ Phận Kinh Doanh)', '- Tiếp nhận, xử lý theo dõi và quản lý đơn hàng: tính định mức nguyên liệu, làm lịch sản xuất\r\n- Theo dõi đôn đốc tiến độ sản xuất đơn hàng mình đang quản lý để đảm bảo kịp ngày giao hàng.\r\n- Liên hệ khách hàng qua điện thoại, email công ty.\r\n- Trao đổi cụ thể khi phỏng vấn.', '7-10 triệu', '- Trình độ: Cao đẳng, đại học ( ưu tiên có kinh nghiệm)\r\n- Khả năng giao tiếp tốt, tính toán tốt, cẩn thận.\r\n- Biết tiếng anh (nghe, nói , đọc, viết)\r\n- Nhiệt tình, nhanh nhẹn, hoạt bát, tinh thần trách nhiệm với công việc.', 1, 3, 'images/anhcongviec8.png', 3, 8),
(15, 'nhân viên bán hàng', '', '3 triệu', '                          fds', 1, 2, '', 0, 1),
(20, 'Nhân Viên Thống Kê', '- Lập sổ theo dõi tài sản, vật tư, hàng hoá xuất nhập ra khỏi công ty. Sổ theo dõi tài sản xuất nhập gồm các cột sau: ngày, người giữ tài sản, tên tài sản, qui cách, đơn vị, số lượng, nhập/xuất, ghi chú.\r\n- Kiểm tra con dấu và chữ ký của người có đủ thẩm quyền ký xác nhận giấy tờ và hóa đơn xuất nhập.', '8 triệu', '- Nghiệp vụ bảo vệ và giao tiếp.\r\n\r\n– Nghiệp vụ ứng phó trong tình huống khẩn cấp.\r\n\r\n– Nghiệp vụ cấp cứu người bị nạn.', 1, 3, '/images/anhcongviec5.png', 3, 5),
(24, 'Nhân Viên Bảo Vệ', ' Hướng dẫn khách vị trí đỗ xe\r\n Giám sát xe của khách tránh làm cho xe của khách hị hư hỏng, mất mát đồ.', '8 triệu', 'Giữ gìn tất cả tài sản liên quan đến xe của khách.', 1, 7, '/images/download.jpg', 2, 1),
(25, 'nhân viên bán hàng', '-làm việc qua điện thoại của công ty\r\n- tư vấn online\r\n- nói chuyện liên tục', '4 triệu', '- nhiệt tình\r\n- làm việc siêng năng', 0, 2, '/images/uit2_yust.jpg', 1, 11),
(26, 'lập trình font-end', '-làm việc môi trường chuyên nglksdjkjf', '4 triệu', 'dkjsajdgjas', 1, 2, '/images/13_1.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoixinviec`
--

CREATE TABLE `nguoixinviec` (
  `MaNguoiXinViec` int(10) NOT NULL,
  `TenNguoiXinViec` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `EmailNguoiXinViec` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SDTNguoiXinViec` int(12) NOT NULL,
  `TrinhDoNguoiXinViec` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `KinhNghiemNguoiXinViec` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MaCongViec` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoixinviec`
--

INSERT INTO `nguoixinviec` (`MaNguoiXinViec`, `TenNguoiXinViec`, `EmailNguoiXinViec`, `SDTNguoiXinViec`, `TrinhDoNguoiXinViec`, `KinhNghiemNguoiXinViec`, `MaCongViec`) VALUES
(8, 'Phúc Đức', 'duc@gmail.com', 123456789, 'Trung Cấp', '2 năm', 6),
(9, 'Lê Minh Hiếu', 'hieu@gmail.com', 258147369, 'Trung Cấp', '3 năm', 1),
(10, 'hai', 'hai@gmail.com', 256365254, 'Trung Cấp', '4 năm', 6),
(11, 'duc1', 'duc1@gmail.com', 147852369, 'Cao Đẳng', '4 năm', 2),
(12, 'Phúc Đức', 'duc2@gmail.com', 123456159, 'Cao Đẳng', '3 năm', 7),
(13, 'Phúc Đức', 'duc4@gmail.com', 123456432, 'Trung Cấp', '1 năm', 0),
(14, 'Phúc Đức', 'duc5@gmail.com', 753215989, 'Cao Đẳng', '3 năm', 0),
(15, 'Phúc Đức', 'duc7@gmail.com', 756984258, 'Trung Cấp', '4 năm', 3),
(16, 'Phúc Đức', 'duc8@gmail.com', 789123456, 'Trung Cấp', '1 năm', 15),
(17, 'Lê Minh Hiếu', 'hieu1@gmail.com', 123456, 'Đại Học', '5 năm', 0),
(18, 'Phúc Đức', 'hieu2@gmail.com', 456342352, 'Trung Cấp', '3 năm', 0),
(19, 'Phúc Đức', 'hieu4@gmail.com', 123456, 'Cao Đẳng', '3 năm', 5),
(20, 'Phúc Đức', 'hieu7@gmail.com', 123456, 'Đại Học', '4 năm', 8),
(21, 'Le minh hieu', 'hieu@mailinator.com', 399823676, 'Cao Đẳng', '2 năm', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `MaUser` int(10) NOT NULL,
  `Username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`MaUser`, `Username`, `Password`) VALUES
(1, 'fptsoft', '202cb962ac59075b964b07152d234b70'),
(2, 'Fujinet', '202cb962ac59075b964b07152d234b70'),
(3, 'ps', '202cb962ac59075b964b07152d234b70'),
(6, 'luxoft', '202cb962ac59075b964b07152d234b70'),
(9, 'PETMEX', '202cb962ac59075b964b07152d234b70'),
(11, 'HiCom', '202cb962ac59075b964b07152d234b70'),
(14, 'VietinBank', '202cb962ac59075b964b07152d234b70'),
(15, 'duc123', '202cb962ac59075b964b07152d234b70'),
(16, 'duc1', '202cb962ac59075b964b07152d234b70'),
(17, 'hieu1', '202cb962ac59075b964b07152d234b70'),
(20, 'hieule', '202cb962ac59075b964b07152d234b70');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `congty`
--
ALTER TABLE `congty`
  ADD PRIMARY KEY (`MaCongTy`);

--
-- Chỉ mục cho bảng `congviec`
--
ALTER TABLE `congviec`
  ADD PRIMARY KEY (`MaCongViec`);

--
-- Chỉ mục cho bảng `nguoixinviec`
--
ALTER TABLE `nguoixinviec`
  ADD PRIMARY KEY (`MaNguoiXinViec`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`MaUser`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `congty`
--
ALTER TABLE `congty`
  MODIFY `MaCongTy` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `congviec`
--
ALTER TABLE `congviec`
  MODIFY `MaCongViec` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `nguoixinviec`
--
ALTER TABLE `nguoixinviec`
  MODIFY `MaNguoiXinViec` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `MaUser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
