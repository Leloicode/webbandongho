-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 13, 2022 lúc 05:58 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doanwebchinhthuc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `IDHD` int(50) NOT NULL,
  `NAMEUSER` varchar(200) NOT NULL,
  `HOTEN` varchar(225) NOT NULL,
  `PHONE` varchar(50) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `DIACHI` varchar(200) NOT NULL,
  `GHICHU` varchar(225) NOT NULL,
  `THOIGIAN` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `TENSP` varchar(100) NOT NULL,
  `AVATARSANPHAM` varchar(100) NOT NULL,
  `GIA` double(5,3) NOT NULL,
  `SOLUONG` int(11) NOT NULL,
  `TINHTRANG` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`IDHD`, `NAMEUSER`, `HOTEN`, `PHONE`, `EMAIL`, `DIACHI`, `GHICHU`, `THOIGIAN`, `TENSP`, `AVATARSANPHAM`, `GIA`, `SOLUONG`, `TINHTRANG`) VALUES
(190, 'banhbao', 'Lê Lợi', '0357805837', 'leloi2002nvt@gmail.com', '99 Tô hiến thành , Mỹ An , Quận Ngũ Hành Sơn , Đà Nẵng ', '', '2022-02-13 04:52:52.600059', 'Citizen BE9174-55A Nam Quartz', 'citizen5.jpg', 2.359, 1, 'ĐANG VẬN CHUYỂN');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `ID` int(20) NOT NULL,
  `MASP` varchar(20) NOT NULL,
  `TAIKHOAN` varchar(50) NOT NULL,
  `TENSP` varchar(200) NOT NULL,
  `SOLUONG` int(10) NOT NULL,
  `TINHTRANG` varchar(20) NOT NULL,
  `AVATAR` varchar(100) NOT NULL,
  `GIA` double(5,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`ID`, `MASP`, `TAIKHOAN`, `TENSP`, `SOLUONG`, `TINHTRANG`, `AVATAR`, `GIA`) VALUES
(1, '1', 'tuongtu12345', 'Casio AE-1200WHD-1AVDF Nam Quartz', 1, 'giohang', 'SP01.jpg', 1.308),
(2, '8', 'tuongtu12345', 'Citizen BE9180-52E Nam Quartz', 1, 'giohang', 'citizen1.jpg', 2.356),
(3, '9', 'tuongtu12345', 'Citizen BI5074-56A Nam Quartz', 1, 'giohang', 'citizen2.jpg', 2.352);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MASP` int(11) NOT NULL,
  `TENSP` varchar(225) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `GIA` double(5,3) NOT NULL,
  `DANHGIA` varchar(10) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `GIOITINH` varchar(5) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `LOAIDAY` varchar(20) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `LOAIMAY` varchar(20) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `SIZEMATSO` varchar(20) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `HANG` varchar(30) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `THUONGHIEU` varchar(50) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `AVATARCHINH` varchar(100) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `MOTA` varchar(225) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `MAUSAC` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MASP`, `TENSP`, `GIA`, `DANHGIA`, `GIOITINH`, `LOAIDAY`, `LOAIMAY`, `SIZEMATSO`, `HANG`, `THUONGHIEU`, `AVATARCHINH`, `MOTA`, `MAUSAC`) VALUES
(1, 'Casio AE-1200WHD-1AVDF Nam Quartz', 1.308, '5 sao', 'nam', 'Dây da', 'Pin (Quatz)', '35 (mm)', 'casio', 'Nhật bản', 'SP01.jpg', 'Tất cả đồng hồ Casio có số hiệu MTP đều dành cho nam, ký tự MTP chính là viết tắt của “Men’s Timepiece” (nghĩa là đồng hồ dành cho nam giới). Nằm trong dòng Casio Dress, đồng hồ Casio MTP được thiết kế để nhấn mạnh tính thanh', 'Đen'),
(2, 'Casio MTP-1374D-1AVDF Nam Quartz', 1.999, '5 sao', 'NAM', 'Dây thép', 'Pin (Quatz)', '36 (mm)', 'casio', 'Nhật bản', 'SP02.jpg', '', 'Đen bạc'),
(3, 'Casio Edifice EFR-560D-7AVUDF Nam Quartz', 2.356, '5 sao', 'nam', 'Dây thép', 'pin (Aquaz)', '35(mm)', 'Casio', 'Pháp', '3.jpg', 'Casio đã cho ra các sản phẩm đồng hồ mới hiện đại, các mô hình của họ ngày càng thú vị, tinh vi hơn, chứng minh sức mạnh và tầm quan trọng của thương hiệu. Một trong số đó đặc biệt phải nhắc đến chiếc đồng hồ Casio EFR-560D-7', 'Trắng bạc'),
(5, 'Casio MTP-V300G-7AUDF Nam Quartz', 2.121, '4 sao', 'nam', 'Dây thép', 'pin (Aquatz)', '38(mm)', 'Casio', 'Nhật bản', '4.jpg', 'Vì là chiếc đồng hồ được làm  từ chất liệu kim loại toàn bộ từ thân vỏ cho tới dây đeo nên MTP-V300G-7AUDF  nên bạn sẽ cảm thấy cảm giác đầm tay và chắc chắn khi đeo. Với kích thước mặt số là 38 mm sẽ tương đối vừa vặn với nh', 'Trắng vàng'),
(6, 'Casio AE-1000W-2AVDF Nam Quartz', 0.999, '4 sao', 'nam', 'Cao su', 'pin (Aquatz)', '35(mm)', 'Casio', 'Pháp', '6.jpg', 'Casio là thương hiệu đồng hồ của Nhật Bản được người dùng ưa chuộng nhất tại Việt Nam. Với quá trình phát triển lâu dài thì Casio đã tạo ra đa dạng các mẫu sản phẩm đồng hồ dành cho mọi lứa tuổi. Ở Việt Nam thì từ người già đ', 'Tím'),
(7, 'Casio Edifice EFR-526D-7AVUDF Nam Quartz', 2.518, '5 sao', 'nam', 'Dây thép', 'pin (Aquatz)', '35(mm)', 'Casio', 'Nhật bản', '7.jpg', 'Edifice là dòng đồng hồ Chronograph đa chức năng của thương hiệu Casio. Đa số các thiết kế của thương hiệu đều được lấy cảm hứng từ 5 động cơ xe công thức 1. Tại thời điểm thương hiệu ra đời, đồng hồ đeo tay nằm ở 2 sự lựa ch', 'Trắng bạc'),
(8, 'Citizen BE9180-52E Nam Quartz', 2.356, '5 sao', 'nam', 'Dây thép', 'pin (Aquatz)', '38(mm)', 'citizen', 'Nhật bản', 'citizen1.jpg', '', 'Đen bạc'),
(9, 'Citizen BI5074-56A Nam Quartz', 2.352, '5 sao', 'nam', 'Dây thép', 'pin (Aquatz)', '38(mm)', 'citizen', 'Pháp', 'citizen2.jpg', '', 'Vàng nhạt'),
(10, 'Citizen BI5000-87L Nam Quartz', 3.258, '5 sao', 'nam', 'Dây thép', 'pin (Aquatz)', '38(mm)', 'citizen', 'Nhật bản', 'citizen3.jpg', '', 'Tím bạc '),
(11, 'Citizen BE9170-05L Nam Quartz', 3.199, '5 sao', 'nam', 'Dây da', 'pin (Aquatz)', '35(mm)', 'citizen', 'Nhật bản', 'citizen4.jpg', '', 'Tím'),
(12, 'Citizen BE9174-55A Nam Quartz', 2.359, '5 sao', 'nam', 'Dây thép', 'pin (Aquatz)', '38(mm)', 'citizen', 'Pháp', 'citizen5.jpg', '', 'Trắng vàng'),
(13, 'Seiko 5 Sports SRPD67K1 Nam Cơ Tự Động', 3.198, '5 sao', 'nam', 'Dây thép', 'pin (Aquatz)', '38(mm)', 'seiko', 'Nhật bản', 'citizen6.jpg', '', 'Bạc'),
(14, 'Seiko 5 Sports SRPD59K1 Nam Cơ Tự', 2.354, '5 sao', 'nam', 'Dây thép', 'Cơ Tự động (Automa', '38(mm)', 'seiko', 'Pháp', 'citizen7.jpg', '', 'Cam'),
(15, 'Seiko SRPE77K1S Nam Cơ Tự Động', 3.194, '5 sao', 'nam', 'Dây thép', 'Cơ Tự động (Automa', '38(mm)', 'seiko', 'Nhật bản', 'citizen8.jpg', '', 'Bạc'),
(16, 'Citizen NH8316-06A Nam Cơ Tự Động', 2.353, '5 sao', 'nam', 'Dây thép', 'Cơ Tự động (Automa', '35(mm)', 'citizen', 'Nhật bản', 'citizen9.jpg', '', 'Bạc'),
(17, 'Citizen NP1020-82A Nam Cơ Tự Động', 2.357, '5 sao', 'nam', 'Dây thép', 'Cơ Tự động (Automa', '35(mm)', 'citizen', 'Nhật bản', 'citizen10.jpg', '', 'Trắng bạc'),
(18, 'Citizen AK5000-03A Nam Quartz', 2.358, '5 sao', 'nam', 'Dây thép', 'pin (Aquatz)', '38(mm)', 'citizen', 'Nhật bản', 'citizen11.jpg', '', 'Tím'),
(19, 'Seiko SRPE65K1S Nam Cơ Tự Động', 3.199, '5 sao', 'nam', 'Dây vãi(nato)', 'Cơ Tự động (Automa', '38(mm)', 'seiko', 'Nhật bản', 'seiki5.jpg', '', 'Xám'),
(20, 'Seiko 5 SNZG11K1 Nam Cơ Tự Động', 3.194, '5 sao', 'nam', 'Dây da', 'Cơ Tự động (Automa', '38(mm)', 'seiko', 'Nhật bản', 'seiko1.jpg', '', 'Tím'),
(21, 'Seiko 5 Sports SRPD81K1 Nam Cơ Tự Động', 3.108, '5 sao', 'nam', 'Dây vãi(nato)', 'pin (Aquatz)', '38(mm)', 'seiko', 'Pháp', 'seiko2.jpg', '', 'Tím đen'),
(22, 'Seiko 5 Sports SRPD76K1 Nam Cơ Tự Động', 2.355, '5 sao', 'nam', 'Dây da', 'Cơ Tự động (Automa', '35(mm)', 'seiko', 'Nhật bản', 'seiko3.jpg', '', 'vàng đen'),
(23, 'Seiko SRPE29K1S Nam Cơ Tự Động', 2.353, '4 sao', 'nam', 'Dây Cao Su (Nhựa)', 'Cơ Tự động (Automa', '38(mm)', 'seiko', 'Nhật bản', 'seiko6.jpg', '', 'Nâu'),
(24, 'Seiko SRPE27K1S Nam Cơ Tự Động', 3.421, '5 sao', 'nam', 'Dây thép', 'Cơ Tự động (Automa', '38(mm)', 'seiko', 'Nhật bản', 'seiko7.jpg', '', 'Xanh bạc'),
(25, 'Seiko SUR263P1 Nam Quartz', 3.198, '5 sao', 'nam', 'Dây thép', 'pin (Aquatz)', '38(mm)', 'seiko', 'Nhật bản', 'seiko8.jpg', '', 'Bạc'),
(26, 'Casio MTP-1374L-7AVDF Nam Quartz', 3.486, '5 sao', 'nam', 'Dây da', 'pin (Aquatz)', '35(mm)', 'Casio', 'Nhật bản', 'SP15.jpg', '', 'Đen bạc'),
(27, 'Citizen BE9187-53E Nam Quartz', 3.256, '5 sao', 'nam', 'Dây thép', 'pin (Aquatz)', '38(mm)', 'citizen', 'Nhật bản', 'citizen12.jpg', '', 'Đen'),
(28, 'Citizen AT0980-63E Nam Eco-Drive', 3.199, '5 sao', 'nam', 'Dây thép', 'Eco-Drive (Năng lượn', '38(mm)', 'citizen', 'Nhật bản', 'citizen13.jpg', '', 'Trắng'),
(29, 'Seiko SPL049P1 Nam Quartz', 2.354, '5 sao', 'nam', 'Dây thép', 'pin (Aquatz)', '38(mm)', 'seiko', 'Nhật bản', 'seiko9.jpg', '', 'Trắng'),
(30, 'Casio G-SHOCK GA-1000-1BDR Nam Quartz', 3.000, '5 sao', 'nam', 'Cao su', 'pin (Aquatz)', '38(mm)', 'Casio', 'Nhật bản', '8.jpg', '', 'Đen'),
(31, 'Casio G-SHOCK GA-900A-1A9DR Nam Quartz', 2.358, '5 sao', 'nam', 'Dây Cao Su (Nhựa)', 'pin (Aquatz)', '38(mm)', 'Casio', 'Nhật bản', '9.jpg', '', 'Trắng'),
(32, 'Casio MTP-VD300L-2EUDF Nam Quartz', 1.154, '4 sao', 'nam', 'Dây da', 'pin (Aquatz)', '38(mm)', 'Casio', 'Nhật bản', '10.jpg', '', 'Đen'),
(33, 'Casio MTP-VT01GL-1B2UDF Nam Quartz', 4.153, '4 sao', 'nam', 'Dây da', 'pin (Aquatz)', '35(mm)', 'Casio', 'Nhật bản', '11.jpg', '', 'Tím'),
(34, 'Casio Edifice EF-558SG-1AVUDF Nam', 3.156, '5 sao', 'nam', 'Dây thép', 'pin (Aquatz)', '35(mm)', 'Casio', 'Nhật bản', '12.jpg', 'Chiếc đồng hồ Casio EDIFICE EF-558SG-1AVUDF ngày này có lẽ không còn quá xa lạ với các bạn trẻ ngày nay. Đây có thể nói là cơn sốt trong thị trường đồng hồ thời gian gần đây. Vậy tại sao sản phẩm đồng hồ này lại hot đến thế? ', 'Vàng'),
(35, 'Casio MTP-1303SG-7AVDF Nam Quartz', 3.199, '5 sao', 'nam', 'Dây thép', 'pin (Aquatz)', '35(mm)', 'Casio', 'Nhật bản', '13.jpg', '', 'Bạc'),
(36, 'Casio MTP-VT01D-7BUDF Nam Quartz', 2.353, '4 sao', 'nam', 'Dây thép', 'pin (Aquatz)', '38(mm)', 'Casio', 'Nhật bản', '14.jpg', '', 'Trắng'),
(37, 'Casio MTP-VT05GL-1B2UDF Nam Quartz', 2.358, '5 sao', 'nam', 'Dây da', 'pin (Aquatz)', '38(mm)', 'Casio', 'Nhật bản', '15.jpg', '', 'Đen');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `IDUSER` int(20) NOT NULL,
  `TAIKHOAN` varchar(20) NOT NULL,
  `SDT` int(20) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `DIACHI` varchar(225) NOT NULL,
  `AVATAR` varchar(50) NOT NULL,
  `GMAIL` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`IDUSER`, `TAIKHOAN`, `SDT`, `PASSWORD`, `DIACHI`, `AVATAR`, `GMAIL`) VALUES
(7, 'tuongtu12345', 123456789, 'tuongtu1', 'son tra ,da nang', 'hangseiko.png', 'leloi2002nvt@mail.com'),
(8, 'tuongtu12', 123456789, 'tuongtu', '', '', ''),
(9, 'leloi', 357805837, '123123', 'mỹ an,da nang', 'avatar che mắt n.jpg', 'leloi2002nvt@mail.com'),
(10, 'tuongtu', 154783212, 'tuongtu', '', 'TUONGTU.png', ''),
(11, 'loi2002', 125632785, '123123', '', 'fu ho Lê Lợu_n.png', ''),
(12, 'banhbao', 258451132, '123123', 'quảng nam', 'hài trần đức bojpg.jpg', 'banhbao2002wac@gmail.com'),
(13, 'banhbao123', 357805837, 'banhbao', '', 'anh dai dien fb.jpg', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`IDHD`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MASP`),
  ADD UNIQUE KEY `MASP` (`MASP`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IDUSER`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `IDHD` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MASP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `IDUSER` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
