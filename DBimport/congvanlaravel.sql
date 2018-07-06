-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 06, 2018 lúc 01:04 PM
-- Phiên bản máy phục vụ: 10.1.29-MariaDB
-- Phiên bản PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `congvanlaravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `congvan`
--

CREATE TABLE `congvan` (
  `id` int(10) NOT NULL,
  `sohieu` varchar(15) NOT NULL,
  `ngaylap` datetime DEFAULT NULL,
  `ngayky` datetime DEFAULT NULL,
  `ngayhieuluc` datetime DEFAULT NULL,
  `ngaychuyen` datetime DEFAULT NULL,
  `trichyeunoidung` varchar(100) NOT NULL,
  `nguoiky` varchar(30) DEFAULT NULL,
  `tentaptindinhkem` varchar(34) NOT NULL,
  `conhieuluc` int(1) DEFAULT NULL,
  `idcoquanbanhanh` int(1) NOT NULL,
  `idhinhthucvanban` int(2) NOT NULL,
  `idlinhvuc` int(1) NOT NULL,
  `idloaivanban` int(1) NOT NULL,
  `TenKhongDau` varchar(130) NOT NULL,
  `idloaihinhcongvan` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `congvan`
--

INSERT INTO `congvan` (`id`, `sohieu`, `ngaylap`, `ngayky`, `ngayhieuluc`, `ngaychuyen`, `trichyeunoidung`, `nguoiky`, `tentaptindinhkem`, `conhieuluc`, `idcoquanbanhanh`, `idhinhthucvanban`, `idlinhvuc`, `idloaivanban`, `TenKhongDau`, `idloaihinhcongvan`) VALUES
(6, '2192/SYT-TCCB', NULL, NULL, NULL, '2018-07-01 00:00:00', 'Đăng ký nhu cầu xét tuyển viên chức ngành y tế', NULL, 'RIw_2192 syt tccb.pdf', 1, 1, 14, 1, 1, 'dang-ky-nhu-cau-xet-tuyen-vien-chuc-nganh-y-te', 3),
(7, '2193/TB-SYT', NULL, NULL, NULL, '2018-07-02 00:00:00', 'Thông báo khai giảng lớp quản lý bệnh viện', NULL, 'AQr_2193 tb syt.pdf', 1, 3, 14, 1, 1, 'thong-bao-khai-giang-lop-quan-ly-benh-vien', 4),
(8, '2231/SYT-TCCB', NULL, NULL, NULL, NULL, 'Đăng ký tham gia các lớp sau đại học', NULL, 'Nsh_2231 SYT TCCB.pdf', 1, 1, 1, 1, 1, 'dang-ky-tham-gia-cac-lop-sau-dai-hoc', 2),
(9, '171/GM-SYT', NULL, '2018-07-03 00:00:00', NULL, NULL, 'Tham dự hội nghị công tác tổ chức cán bộ năm 2017', NULL, 'zPs_171 gm syt.pdf', 1, 4, 3, 1, 1, 'tham-du-hoi-nghi-cong-tac-to-chuc-can-bo-nam-2017', 2),
(10, '2253/TB-SYT', NULL, '2018-07-04 00:00:00', NULL, NULL, 'Lịch xét thi đua khen thưởng năm 2017', NULL, '6Qt_2253 tb syt.pdf', 1, 4, 1, 1, 1, 'lich-xet-thi-dua-khen-thuong-nam-2017', 2),
(11, '2242/SYT-NVY', NULL, '2018-07-04 00:00:00', NULL, NULL, 'Báo cáo công tác chăm sóc sức khỏe người cao tuổi', NULL, 'dQP_2242 syt nvy.pdf', 1, 4, 3, 1, 1, 'bao-cao-cong-tac-cham-soc-suc-khoe-nguoi-cao-tuoi', 2),
(12, '2264/SYT-NVY', NULL, '2018-06-05 00:00:00', NULL, NULL, 'Thực hiện báo cáo hoạt động năm 2017', NULL, 'SQo_2264 syt nvy.pdf', 1, 4, 1, 1, 1, 'thuc-hien-bao-cao-hoat-dong-nam-2017', 2),
(13, '2268/BC-SYT', NULL, '2018-06-13 00:00:00', NULL, NULL, 'Báo cáo tình hình công tác y tế tháng 12 năm 2017', NULL, 'KOZ_2268 bc syt.pdf', 1, 4, 1, 1, 1, 'bao-cao-tinh-hinh-cong-tac-y-te-thang-12-nam-2017', 2),
(14, '2276/TB-SYT', NULL, '2018-06-22 00:00:00', NULL, NULL, 'Hạn nhận hồ sơ thi đua khen thưởng 2017', NULL, 'zmQ_2276 TB SYT.pdf', 1, 4, 14, 1, 1, 'han-nhan-ho-so-thi-dua-khen-thuong-2017', 2),
(15, '2275/SYT-NVY', NULL, '2018-05-24 00:00:00', NULL, NULL, 'V/v báo cáo nhanh số liệu người khuyết tật 2017', NULL, '9uV_2275 SYT NVY.pdf', 1, 4, 3, 1, 1, 'v-v-bao-cao-nhanh-so-lieu-nguoi-khuyet-tat-2017', 2),
(16, '2287/BC-SYT', NULL, '2018-04-27 00:00:00', NULL, NULL, 'Báo cáo kết quả công tác Tổ chức cán bộ năm 2017', NULL, 'fTo_2287 bc syt.pdf', 1, 4, 1, 1, 1, 'bao-cao-ket-qua-cong-tac-to-chuc-can-bo-nam-2017', 2),
(17, '179/GM-SYT', NULL, '2018-03-21 00:00:00', NULL, NULL, 'Mời tập huấn quản lý Bệnh lao', NULL, 'kwa_179 gm syt.pdf', 1, 4, 6, 1, 1, 'moi-tap-huan-quan-ly-benh-lao', 2),
(18, '513/SYT-NVD', NULL, '2018-04-18 00:00:00', NULL, NULL, 'Hướng dẫn xây dựng danh mục thuốc tại trạm y tế', 'Nguyễn Trúc Giang', 'oMp_05 syt nvy.pdf', 1, 4, 1, 1, 1, 'huong-dan-xay-dung-danh-muc-thuoc-tai-tram-y-te', 2),
(19, '2062/SYT-NVY', NULL, '2018-03-08 00:00:00', NULL, NULL, 'Chủ động chuyển khai công tác ứng phó với áp thấp nhiệt đới', 'Nguyễn Trúc Giang', '4sv_01 syt nvd.pdf', 1, 4, 1, 1, 1, 'chu-dong-chuyen-khai-cong-tac-ung-pho-voi-ap-thap-nhiet-doi', 2),
(20, '2014/SYT-NVY', NULL, '2018-04-25 00:00:00', NULL, NULL, 'Triển khai bổ sung VITAMIN A đợt 2', 'Nguyễn Văn Hải', 'D04_02 dl btc.pdf', 1, 4, 1, 1, 1, 'trien-khai-bo-sung-vitamin-a-dot-2', 2),
(21, '577/SYT-NVY', NULL, '2018-03-20 00:00:00', NULL, NULL, 'Thực hiện quyết định số 2673/QĐ-BYT', 'Nguyễn Văn Hải', 'Xr7_02 gm syt.pdf', 1, 4, 1, 1, 1, 'thuc-hien-quyet-dinh-so-2673-qd-byt', 2),
(22, '619/SYT-NVY', NULL, '2018-03-20 00:00:00', NULL, NULL, 'Đánh giá chương trình quản lý sử dụng kháng sinh ban đầu  tại Bệnh viện', 'Nguyễn Trúc Giang', 'MbF_10  gm syt.pdf', 1, 4, 1, 1, 1, 'danh-gia-chuong-trinh-quan-ly-su-dung-khang-sinh-ban-dau-tai-benh-vien', 2),
(23, '147/GM-SYT', NULL, '2018-04-17 00:00:00', NULL, NULL, 'Họp kiểm tra, giám sát công tác y tế hoa hậu thế giới', 'Nguyễn Trúc Giang', 'P7f_11 gm syt.pdf', 1, 4, 1, 1, 1, 'hop-kiem-tra-giam-sat-cong-tac-y-te-hoa-hau-the-gioi', 2),
(24, '2047/KH-SYT', NULL, '2018-04-15 00:00:00', NULL, NULL, 'Cung cấp số liệu báo cáo bảo vệ môi trường năm 2017', 'Nguyễn Văn Hải', 'wvp_11 gm syt.pdf', 1, 4, 1, 1, 1, 'cung-cap-so-lieu-bao-cao-bao-ve-moi-truong-nam-2017', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coquanbanhanh`
--

CREATE TABLE `coquanbanhanh` (
  `id` int(1) NOT NULL,
  `name` varchar(30) NOT NULL,
  `TenKhongDau` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `coquanbanhanh`
--

INSERT INTO `coquanbanhanh` (`id`, `name`, `TenKhongDau`) VALUES
(1, 'Quốc hội', 'quoc-hoi'),
(2, 'Chính phủ', 'chinh-phu'),
(3, 'UBND Tỉnh', 'ubnd-tinh'),
(4, 'Sở y tế', 'so-y-te');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhthucvanban`
--

CREATE TABLE `hinhthucvanban` (
  `id` int(2) NOT NULL,
  `name` varchar(20) NOT NULL,
  `TenKhongDau` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hinhthucvanban`
--

INSERT INTO `hinhthucvanban` (`id`, `name`, `TenKhongDau`) VALUES
(1, 'Báo cáo', 'bao-cao'),
(2, 'Công điện', 'cong-dien'),
(3, 'Công văn điều hành', 'cong-van-dieu-hanh'),
(4, 'Chỉ thị', 'chi-thi'),
(5, 'Điều lệ', 'dieu-le'),
(6, 'Giấy mời', 'giay-moi'),
(7, 'Kế hoạch', 'ke-hoach'),
(8, 'Luật', 'luat'),
(9, 'Nghị định', 'nghi-dinh'),
(10, 'Nghị quyết', 'nghi-quyet'),
(11, 'Pháp lệnh', 'phap-lenh'),
(12, 'Quyết định', 'quyet-dinh'),
(13, 'Tài liệu', 'tai-lieu'),
(14, 'Thông báo', 'thong-bao'),
(15, 'Thông tư', 'thong-tu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `linhvuc`
--

CREATE TABLE `linhvuc` (
  `id` int(1) NOT NULL,
  `name` varchar(20) NOT NULL,
  `TenKhongDau` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `linhvuc`
--

INSERT INTO `linhvuc` (`id`, `name`, `TenKhongDau`) VALUES
(1, 'Y tế', 'y-te'),
(2, 'Lĩnh vực khác', 'linh-vuc-khac');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaihinhcongvan`
--

CREATE TABLE `loaihinhcongvan` (
  `id` int(1) NOT NULL,
  `name` varchar(20) NOT NULL,
  `TenKhongDau` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loaihinhcongvan`
--

INSERT INTO `loaihinhcongvan` (`id`, `name`, `TenKhongDau`) VALUES
(2, 'Công văn nội bộ', 'cong-van-noi-bo'),
(3, 'Công văn đến', 'cong-van-den'),
(4, 'Công văn đi', 'cong-van-di');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaivanban`
--

CREATE TABLE `loaivanban` (
  `id` int(1) NOT NULL,
  `name` varchar(30) NOT NULL,
  `TenKhongDau` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loaivanban`
--

INSERT INTO `loaivanban` (`id`, `name`, `TenKhongDau`) VALUES
(1, 'Văn bản chỉ đạo điều hành', 'van-ban-chi-dao-dieu-hanh'),
(2, 'Văn bản quy phạm pháp luật', 'van-ban-quy-pham-phap-luat');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `hinhanh` varchar(34) NOT NULL,
  `link` varchar(253) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `name`, `hinhanh`, `link`) VALUES
(1, 'banner1', 'Esk_logo2.png', 'https://soyte.kiengiang.gov.vn'),
(3, 'banner2', 'jfw_logo.png', 'http://quanlycongvan.tk');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(1) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(254) NOT NULL,
  `level` int(1) NOT NULL DEFAULT '0',
  `password` varchar(70) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `level`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Minh Hoàng', 'hoang1501106004@vnkgu.edu.vn', 2, '$2y$10$lka3uc9LBw8p3Jg9kQY2/egg2FkEzgD4IOUwbYj/vRg.eE3BxMwuK', 'OFDOQwNKO49U4NzmAByVjIb6IiXTJxqoaSAFTGS8Z0Blwz2nKZ2BoagkmCpp', '2018-07-06 10:43:24', '0000-00-00 00:00:00'),
(2, 'Nghĩa Phạm', 'nghiapham@dev.com', 2, '$2y$10$v.HuYtmbRQ75U2kJjTauW.8/m3s0Jhu/FGkDDqBosXR/xKSy276dC', NULL, '2018-07-05 14:29:27', '2018-07-05 14:29:27'),
(3, 'Thuận Quang', 'thuanquang@email.com', 0, '$2y$10$S.6l0/C/MfL7WhV6OZmyPefTRxp8pA6dMEfhMh5QhIh3zSb7/ah.S', NULL, '2018-07-04 07:37:56', '2018-07-04 07:37:56'),
(4, 'Tấn Lực', 'tanluc@gmail.com', 0, '$2y$10$t3OhuDgUxyfZC5RhKnNCYeICeOGQN9zgEUuR5.TtCee20hjZpXod6', NULL, '2018-07-04 07:38:30', '2018-07-04 07:38:30'),
(5, 'Đăng Khoa', 'dangkhoa@gmail.com', 0, '$2y$10$JZP3cbsicSPpZebLs0UrZeeusqOFhK7ihsMT.jZNFumQzhWQOr43G', NULL, '2018-07-04 07:38:57', '2018-07-04 07:38:57'),
(6, 'Nhựt Duy', 'nhutduy@dev.co', 0, '$2y$10$bpcUadWc0UnaSklqNA9UmOF6wNGtu/olrnSKvXaLL5LL4FUiDRjF2', NULL, '2018-07-04 07:39:26', '2018-07-04 07:39:26'),
(7, 'Duy Khang', 'duykhang@dev.com', 0, '$2y$10$dgENphNQeJrE6AAEYm5L8e6knNMwFg.iYa2Fe3aCAbpPWTsCb46QS', NULL, '2018-07-04 07:39:49', '2018-07-04 07:39:49'),
(8, 'Thành Tín', 'thanhtin@tin.com.vn', 0, '$2y$10$FvDNvkWJYtu.vdCEHhK0cOMAt6Y.ACs8n5yWT60j5LU2a6hAp4AoK', NULL, '2018-07-04 07:40:15', '2018-07-04 07:40:15'),
(9, 'Anh Tân', 'anhtan@tin.com.vn', 0, '$2y$10$gxiSBLBCdzfWgxLuNq9s0OyYTJkg/g953mB1jA9jxbdKIsVP48v3G', NULL, '2018-07-04 07:40:31', '2018-07-04 07:40:31'),
(10, 'Rô Nguyễn', 'nguyenro@soyte.comvn', 0, '$2y$10$TJMls5gLwGihc3VjwqXd7eEUjdMTPM/rXRlyTjSLDTDi18x..l02S', NULL, '2018-07-04 07:41:17', '2018-07-04 07:41:17'),
(11, 'Ngọc Tố', 'tongoc@yahoo.com.vn', 0, '$2y$10$cXAormecwvFcFClN9JFrKupLCwPM2DiqQzWMjO2eZuc61vKpoR1la', NULL, '2018-07-04 07:41:46', '2018-07-04 07:41:46'),
(12, 'Diễm Hồng', 'nguyenthihongdiem@facebook.com', 0, '$2y$10$.wxhr.GnocThejamMYOLS.XjMVIgojejI9OYXNaCjVKVsomhROGLa', NULL, '2018-07-04 07:42:24', '2018-07-04 07:42:24'),
(13, 'Thành Đạt', 'datthanhnguyen@vnkgu.edu.vn', 0, '$2y$10$Slx0bCGC8.5kC/gBj6Wal.yx2l/kvN58fQ1Bq4eyzzv6IIeStOCV.', NULL, '2018-07-04 07:42:49', '2018-07-04 07:42:49'),
(14, 'Nguyễn Văn Rạng', 'nvrang@vnkgu.edu.vn', 1, '$2y$10$DLJq0KWovWuuIKJDJGiIOuDAtDu83A/vWIgGPvhgNMflPaPJfrey6', NULL, '2018-07-05 12:12:00', '2018-07-04 07:45:44'),
(15, 'Nguyễn Bá Quang Lâm', 'nbqlam@vnkgu.edu.vn', 1, '$2y$10$FOCpG0Nz/4IW5MA2YEAyhuJPEbtCAv3I1kpyrOyYiOrAym6pb4RIu', NULL, '2018-07-05 12:11:52', '2018-07-04 07:46:23'),
(16, 'Đào Thị Phấn', 'dtphan@vnkgu.edu.vn', 1, '$2y$10$2L7rswPsPTEBAUKsjV/jHOIU85rPt.Sc6w65OAOzOsQEoM3t0u/hW', NULL, '2018-07-05 12:11:49', '2018-07-04 07:46:52'),
(17, 'Nguyễn Minh Đức', 'nmduc@vnkgu.edu.vn', 1, '$2y$10$88h557GlR0whSjmnXTY6OO09MdXtN2LOgIJ1UCKpW3f3HashLJ.xe', NULL, '2018-07-05 12:11:46', '2018-07-04 07:47:25'),
(18, 'Nhàn Thanh Nhã', 'ntnha@vnkgu.edu.vn', 1, '$2y$10$A9hehijyID/7wVpx1vZLDOT..NgCWD15agcJ3zJWt370tY9Mt0KVm', NULL, '2018-07-05 12:11:43', '2018-07-04 07:48:10'),
(19, 'Nguyễn Minh Trí', 'nmtri@vnkgu.edu.vn', 1, '$2y$10$jI3qu.i6WvbvWdB5ibW0qOhmdnh2X28Es7yK6vEFdeckgwMMtFDgi', NULL, '2018-07-05 12:11:39', '2018-07-04 07:48:32'),
(20, 'Huy', 'huy@email.com', 1, '$2y$10$E4hWChek.XdGEAOtcKjxg.1pxiSJZWwgwhnFJhep7jlwY0e74iseS', 'zl2Ft57JpqWqArm6fwZgnfHLVwGG6gfIrnKJJjktKiOXU6IWRvSunHAALgB5', '2018-07-05 12:19:06', '2018-07-05 11:47:19'),
(23, 'User Admin', 'admin@quanlycongvan.com', 1, '$2y$10$faLoniZ8.6Od6DNAAzMzkuaGcFCpakH1oq8q/g/mGXoFLLHV6cdnq', 'pcHRKENcz3FcNUPVwCY5GwNvQSmEgQEXFYXICQMvQLOzsK6fSwMOxJCILxNi', '2018-07-06 10:44:07', '2018-07-06 02:45:52'),
(24, 'User SuperAdmin', 'superadmin@quanlycongvan.com', 2, '$2y$10$qtxkIm68RfjmIhulLgnAx.pq11Dzk8agVCqEDPyRsQHQBdyDP7NKa', 'AN9IkvSe0oXjJOX6Vd0OQpd43e1QpdNpdilzNLdTOKaBPvymqynkt7OumiYM', '2018-07-06 06:44:18', '2018-07-06 02:46:31'),
(25, 'User Nhân viên', 'nhanvien@quanlycongvan.com', 0, '$2y$10$8CwTglAisd46SAT2Pu9iTuZ71AHcl0//t55tDs6PodFAio/.1MnEK', 'xESMSwcbni1SqrqXkyR5SmfuxyJtF19twcms2TYhEqV9CvR4isJXiQgM3Ro0', '2018-07-06 08:06:15', '2018-07-06 02:47:02');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `congvan`
--
ALTER TABLE `congvan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Congvan_fk0` (`idcoquanbanhanh`),
  ADD KEY `Congvan_fk1` (`idhinhthucvanban`),
  ADD KEY `Congvan_fk2` (`idlinhvuc`),
  ADD KEY `Congvan_fk3` (`idloaivanban`),
  ADD KEY `TenKhongDau` (`TenKhongDau`),
  ADD KEY `idloaihinhcongvan` (`idloaihinhcongvan`);

--
-- Chỉ mục cho bảng `coquanbanhanh`
--
ALTER TABLE `coquanbanhanh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hinhthucvanban`
--
ALTER TABLE `hinhthucvanban`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `linhvuc`
--
ALTER TABLE `linhvuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaihinhcongvan`
--
ALTER TABLE `loaihinhcongvan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `loaivanban`
--
ALTER TABLE `loaivanban`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `congvan`
--
ALTER TABLE `congvan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `coquanbanhanh`
--
ALTER TABLE `coquanbanhanh`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `hinhthucvanban`
--
ALTER TABLE `hinhthucvanban`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `linhvuc`
--
ALTER TABLE `linhvuc`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `loaihinhcongvan`
--
ALTER TABLE `loaihinhcongvan`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `loaivanban`
--
ALTER TABLE `loaivanban`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `congvan`
--
ALTER TABLE `congvan`
  ADD CONSTRAINT `Congvan_fk0` FOREIGN KEY (`idcoquanbanhanh`) REFERENCES `coquanbanhanh` (`id`),
  ADD CONSTRAINT `Congvan_fk1` FOREIGN KEY (`idhinhthucvanban`) REFERENCES `hinhthucvanban` (`id`),
  ADD CONSTRAINT `Congvan_fk2` FOREIGN KEY (`idlinhvuc`) REFERENCES `linhvuc` (`id`),
  ADD CONSTRAINT `Congvan_fk3` FOREIGN KEY (`idloaivanban`) REFERENCES `loaivanban` (`id`),
  ADD CONSTRAINT `congvan_ibfk_1` FOREIGN KEY (`idloaihinhcongvan`) REFERENCES `loaihinhcongvan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
