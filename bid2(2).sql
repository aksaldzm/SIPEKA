-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2021 at 08:27 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bid2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_desa`
--

CREATE TABLE `tb_desa` (
  `id_d` int(11) NOT NULL,
  `id_desa` varchar(20) NOT NULL,
  `id_kecamatan` varchar(20) NOT NULL,
  `nama_desa` varchar(155) NOT NULL,
  `tipe` enum('Desa','Kelurahan') DEFAULT 'Desa'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_desa`
--

INSERT INTO `tb_desa` (`id_d`, `id_desa`, `id_kecamatan`, `nama_desa`, `tipe`) VALUES
(1, '3301010001', '3301010', 'Panulisan Barat', 'Desa'),
(2, '3301010002', '3301010', 'Panulisan', 'Desa'),
(3, '3301010003', '3301010', 'Panulisan Timur', 'Desa'),
(4, '3301010004', '3301010', 'Matenggeng', 'Desa'),
(5, '3301010005', '3301010', 'Ciwalen', 'Desa'),
(6, '3301010006', '3301010', 'Dayeuhluhur', 'Desa'),
(7, '3301010007', '3301010', 'Hanum', 'Desa'),
(8, '3301010008', '3301010', 'Datar', 'Desa'),
(9, '3301010009', '3301010', 'Bingkeng', 'Desa'),
(10, '3301010010', '3301010', 'Bolang', 'Desa'),
(11, '3301010011', '3301010', 'Kutaagung', 'Desa'),
(12, '3301010012', '3301010', 'Cijeruk', 'Desa'),
(13, '3301010013', '3301010', 'Cilumping', 'Desa'),
(14, '3301010014', '3301010', 'Sumpinghayu', 'Desa'),
(15, '3301020001', '3301020', 'Purwasari', 'Desa'),
(16, '3301020002', '3301020', 'Cilongkrang', 'Desa'),
(17, '3301020003', '3301020', 'Tarisi', 'Desa'),
(18, '3301020004', '3301020', 'Bantar', 'Desa'),
(19, '3301020005', '3301020', 'Sidamulya', 'Desa'),
(20, '3301020006', '3301020', 'Adimulya', 'Desa'),
(21, '3301020007', '3301020', 'Wanareja', 'Desa'),
(22, '3301020008', '3301020', 'Madura', 'Desa'),
(23, '3301020009', '3301020', 'Madusari', 'Desa'),
(24, '3301020010', '3301020', 'Tambaksari', 'Desa'),
(25, '3301020011', '3301020', 'Majingklak', 'Desa'),
(26, '3301020012', '3301020', 'Malabar', 'Desa'),
(27, '3301020013', '3301020', 'Limbangan', 'Desa'),
(28, '3301020014', '3301020', 'Cigintung', 'Desa'),
(29, '3301020015', '3301020', 'Palugon', 'Desa'),
(30, '3301020016', '3301020', 'Jambu', 'Desa'),
(31, '3301030001', '3301030', 'Pahonjean', 'Desa'),
(32, '3301030002', '3301030', 'Mulyadadi', 'Desa'),
(33, '3301030003', '3301030', 'Mulyasari', 'Desa'),
(34, '3301030004', '3301030', 'Padangsari', 'Desa'),
(35, '3301030005', '3301030', 'Cilopadang', 'Desa'),
(36, '3301030006', '3301030', 'Padangjaya', 'Desa'),
(37, '3301030007', '3301030', 'Sindangsari', 'Desa'),
(38, '3301030008', '3301030', 'Jenang', 'Desa'),
(39, '3301030009', '3301030', 'Salebu', 'Desa'),
(40, '3301030010', '3301030', 'Cibeunying', 'Desa'),
(41, '3301030011', '3301030', 'Sepatnunggal', 'Desa'),
(42, '3301030012', '3301030', 'Bener', 'Desa'),
(43, '3301030013', '3301030', 'Boja', 'Desa'),
(44, '3301030014', '3301030', 'Ujungbarang', 'Desa'),
(45, '3301030015', '3301030', 'Pengadegan', 'Desa'),
(46, '3301030016', '3301030', 'Sadabumi', 'Desa'),
(47, '3301030017', '3301030', 'Sadahayu', 'Desa'),
(48, '3301040001', '3301040', 'Karangreja', 'Desa'),
(49, '3301040002', '3301040', 'Cimanggu', 'Desa'),
(50, '3301040003', '3301040', 'Bantarpanjang', 'Desa'),
(51, '3301040004', '3301040', 'Panimbang', 'Desa'),
(52, '3301040005', '3301040', 'Mandala', 'Desa'),
(53, '3301040006', '3301040', 'Bantarmangu', 'Desa'),
(54, '3301040007', '3301040', 'Cilempuyang', 'Desa'),
(55, '3301040008', '3301040', 'Rejodadi', 'Desa'),
(56, '3301040009', '3301040', 'Negarajati', 'Desa'),
(57, '3301040010', '3301040', 'Cisalak', 'Desa'),
(58, '3301040011', '3301040', 'Cibalung', 'Desa'),
(59, '3301040012', '3301040', 'Karangsari', 'Desa'),
(60, '3301040013', '3301040', 'Kutabima', 'Desa'),
(61, '3301040014', '3301040', 'Pesahangan', 'Desa'),
(62, '3301040015', '3301040', 'Cijati', 'Desa'),
(63, '3301050001', '3301050', 'Cidadap', 'Desa'),
(64, '3301050002', '3301050', 'Pengawaren', 'Desa'),
(65, '3301050003', '3301050', 'Gunungtelu', 'Desa'),
(66, '3301050004', '3301050', 'Sindangbarang', 'Desa'),
(67, '3301050005', '3301050', 'Karangpucung', 'Desa'),
(68, '3301050006', '3301050', 'Tayemtimur', 'Desa'),
(69, '3301050007', '3301050', 'Tayem', 'Desa'),
(70, '3301050008', '3301050', 'Ciporos', 'Desa'),
(71, '3301050009', '3301050', 'Surusunda', 'Desa'),
(72, '3301050010', '3301050', 'Bengbulang', 'Desa'),
(73, '3301050011', '3301050', 'Sidamulya', 'Desa'),
(74, '3301050012', '3301050', 'Ciruyung', 'Desa'),
(75, '3301050013', '3301050', 'Pamulihan', 'Desa'),
(76, '3301050014', '3301050', 'Babakan', 'Desa'),
(77, '3301060001', '3301060', 'Serang', 'Desa'),
(78, '3301060002', '3301060', 'Mulyadadi', 'Desa'),
(79, '3301060003', '3301060', 'Cipari', 'Desa'),
(80, '3301060004', '3301060', 'Segaralangu', 'Desa'),
(81, '3301060005', '3301060', 'Karangreja', 'Desa'),
(82, '3301060006', '3301060', 'Kutasari', 'Desa'),
(83, '3301060007', '3301060', 'Pegadingan', 'Desa'),
(84, '3301060008', '3301060', 'Cisuru', 'Desa'),
(85, '3301060009', '3301060', 'Mekarsari', 'Desa'),
(86, '3301060010', '3301060', 'Sidasari', 'Desa'),
(87, '3301060011', '3301060', 'Caruy', 'Desa'),
(88, '3301070001', '3301070', 'Tegalsari', 'Desa'),
(89, '3301070002', '3301070', 'Margasari', 'Desa'),
(90, '3301070003', '3301070', 'Tinggarjaya', 'Desa'),
(91, '3301070004', '3301070', 'Gunungreja', 'Desa'),
(92, '3301070005', '3301070', 'Sidareja', 'Desa'),
(93, '3301070006', '3301070', 'Sidamulya', 'Desa'),
(94, '3301070007', '3301070', 'Sudagaran', 'Desa'),
(95, '3301070008', '3301070', 'Kunci', 'Desa'),
(96, '3301070009', '3301070', 'Karanggedang', 'Desa'),
(97, '3301070010', '3301070', 'Penyarang', 'Desa'),
(98, '3301080001', '3301080', 'Sidanegara', 'Desa'),
(99, '3301080002', '3301080', 'Tambakreja', 'Desa'),
(100, '3301080003', '3301080', 'Kaliwungu', 'Desa'),
(101, '3301080004', '3301080', 'Bumireja', 'Desa'),
(102, '3301080005', '3301080', 'Jatisari', 'Desa'),
(103, '3301080006', '3301080', 'Ciklapa', 'Desa'),
(104, '3301080007', '3301080', 'Bangunreja', 'Desa'),
(105, '3301080008', '3301080', 'Kedungreja', 'Desa'),
(106, '3301080009', '3301080', 'Tambaksari', 'Desa'),
(107, '3301080010', '3301080', 'Rejamulya', 'Desa'),
(108, '3301080011', '3301080', 'Bojongsari', 'Desa'),
(109, '3301090001', '3301090', 'Rawaapu', 'Desa'),
(110, '3301090002', '3301090', 'Sidamukti', 'Desa'),
(111, '3301090003', '3301090', 'Purwodadi', 'Desa'),
(112, '3301090004', '3301090', 'Cimrutu', 'Desa'),
(113, '3301090005', '3301090', 'Patimuan', 'Desa'),
(114, '3301090006', '3301090', 'Cinyawang', 'Desa'),
(115, '3301090007', '3301090', 'Bulupayung', 'Desa'),
(116, '3301100001', '3301100', 'Cisumur', 'Desa'),
(117, '3301100002', '3301100', 'Sidaurip', 'Desa'),
(118, '3301100003', '3301100', 'Gintungreja', 'Desa'),
(119, '3301100004', '3301100', 'Layansari', 'Desa'),
(120, '3301100005', '3301100', 'Gandrungmanis', 'Desa'),
(121, '3301100006', '3301100', 'Bulusari', 'Desa'),
(122, '3301100007', '3301100', 'Gandrungmangu', 'Desa'),
(123, '3301100008', '3301100', 'Wringinharjo', 'Desa'),
(124, '3301100009', '3301100', 'Karanganyar', 'Desa'),
(125, '3301100010', '3301100', 'Muktisari', 'Desa'),
(126, '3301100011', '3301100', 'Kertajaya', 'Desa'),
(127, '3301100012', '3301100', 'Cinangsi', 'Desa'),
(128, '3301100013', '3301100', 'Karanggintung', 'Desa'),
(129, '3301100014', '3301100', 'Rungkang', 'Desa'),
(130, '3301110001', '3301110', 'Bantarsari', 'Desa'),
(131, '3301110002', '3301110', 'Rawajaya', 'Desa'),
(132, '3301110003', '3301110', 'Binangun', 'Desa'),
(133, '3301110004', '3301110', 'Bulaksari', 'Desa'),
(134, '3301110005', '3301110', 'Kamulyan', 'Desa'),
(135, '3301110006', '3301110', 'Cikedondong', 'Desa'),
(136, '3301110007', '3301110', 'Kedungwadas', 'Desa'),
(137, '3301110008', '3301110', 'Citembong', 'Desa'),
(138, '3301120004', '3301120', 'Grugu', 'Desa'),
(139, '3301120005', '3301120', 'Bringkeng', 'Desa'),
(140, '3301120006', '3301120', 'Ujungmanik', 'Desa'),
(141, '3301120007', '3301120', 'Kubangkangkung', 'Desa'),
(142, '3301120008', '3301120', 'Bojong', 'Desa'),
(143, '3301120009', '3301120', 'Kawunganten', 'Desa'),
(144, '3301120010', '3301120', 'Kawunganten Lor', 'Desa'),
(145, '3301120011', '3301120', 'Sarwadadi', 'Desa'),
(146, '3301120012', '3301120', 'Kalijeruk', 'Desa'),
(147, '3301120013', '3301120', 'Mentasan', 'Desa'),
(148, '3301120015', '3301120', 'Sidaurip', 'Desa'),
(149, '3301120016', '3301120', 'Babakan', 'Desa'),
(150, '3301121001', '3301121', 'Ujunggagak', 'Desa'),
(151, '3301121002', '3301121', 'Klaces', 'Desa'),
(152, '3301121003', '3301121', 'Ujungalang', 'Desa'),
(153, '3301121004', '3301121', 'Panikel', 'Desa'),
(154, '3301130001', '3301130', 'Brebeg', 'Desa'),
(155, '3301130002', '3301130', 'Tritih Wetan', 'Desa'),
(156, '3301130003', '3301130', 'Tritih Lor', 'Desa'),
(157, '3301130004', '3301130', 'Sumingkir', 'Desa'),
(158, '3301130005', '3301130', 'Jeruklegi Wetan', 'Desa'),
(159, '3301130006', '3301130', 'Jeruklegi Kulon', 'Desa'),
(160, '3301130007', '3301130', 'Sawangan', 'Desa'),
(161, '3301130008', '3301130', 'Cilibang', 'Desa'),
(162, '3301130009', '3301130', 'Mandala', 'Desa'),
(163, '3301130010', '3301130', 'Karangkemiri', 'Desa'),
(164, '3301130011', '3301130', 'Jambusari', 'Desa'),
(165, '3301130012', '3301130', 'Prapagan', 'Desa'),
(166, '3301130013', '3301130', 'Citepus', 'Desa'),
(167, '3301140001', '3301140', 'Menganti', 'Desa'),
(168, '3301140002', '3301140', 'Karangkandri', 'Desa'),
(169, '3301140003', '3301140', 'Slarang', 'Desa'),
(170, '3301140004', '3301140', 'Kesugihan Kidul', 'Desa'),
(171, '3301140005', '3301140', 'Kesugihan', 'Desa'),
(172, '3301140006', '3301140', 'Kalisabuk', 'Desa'),
(173, '3301140007', '3301140', 'Kuripan Kidul', 'Desa'),
(174, '3301140008', '3301140', 'Kuripan', 'Desa'),
(175, '3301140009', '3301140', 'Jangrana', 'Desa'),
(176, '3301140010', '3301140', 'Planjan', 'Desa'),
(177, '3301140011', '3301140', 'Dondong', 'Desa'),
(178, '3301140012', '3301140', 'Ciwuni', 'Desa'),
(179, '3301140013', '3301140', 'Karangjengkol', 'Desa'),
(180, '3301140014', '3301140', 'Keleng', 'Desa'),
(181, '3301140015', '3301140', 'Pesanggrahan', 'Desa'),
(182, '3301140016', '3301140', 'Bulupayung', 'Desa'),
(183, '3301150001', '3301150', 'Gombolharjo', 'Desa'),
(184, '3301150002', '3301150', 'Wlahar', 'Desa'),
(185, '3301150003', '3301150', 'Bunton', 'Desa'),
(186, '3301150004', '3301150', 'Karanganyar', 'Desa'),
(187, '3301150005', '3301150', 'Karangbenda', 'Desa'),
(188, '3301150006', '3301150', 'Pedasong', 'Desa'),
(189, '3301150007', '3301150', 'Glempangpasir', 'Desa'),
(190, '3301150008', '3301150', 'Welahan Wetan', 'Desa'),
(191, '3301150009', '3301150', 'Adiraja', 'Desa'),
(192, '3301150010', '3301150', 'Adireja Wetan', 'Desa'),
(193, '3301150011', '3301150', 'Adireja Kulon', 'Desa'),
(194, '3301150012', '3301150', 'Adipala', 'Desa'),
(195, '3301150013', '3301150', 'Penggalang', 'Desa'),
(196, '3301150014', '3301150', 'Karangsari', 'Desa'),
(197, '3301150015', '3301150', 'Kalikudi', 'Desa'),
(198, '3301150016', '3301150', 'Doplang', 'Desa'),
(199, '3301160001', '3301160', 'Karangkemiri', 'Desa'),
(200, '3301160002', '3301160', 'Karangreja', 'Desa'),
(201, '3301160003', '3301160', 'Klapagada', 'Desa'),
(202, '3301160004', '3301160', 'Karangrena', 'Desa'),
(203, '3301160005', '3301160', 'Maos Kidul', 'Desa'),
(204, '3301160006', '3301160', 'Maos Lor', 'Desa'),
(205, '3301160007', '3301160', 'Kalijaran', 'Desa'),
(206, '3301160008', '3301160', 'Mernek', 'Desa'),
(207, '3301160009', '3301160', 'Penisihan', 'Desa'),
(208, '3301160010', '3301160', 'Glempang', 'Desa'),
(209, '3301170001', '3301170', 'Paketingan', 'Desa'),
(210, '3301170002', '3301170', 'Ketanggung', 'Desa'),
(211, '3301170003', '3301170', 'Nusajati', 'Desa'),
(212, '3301170004', '3301170', 'Paberasan', 'Desa'),
(213, '3301170005', '3301170', 'Karangjati', 'Desa'),
(214, '3301170006', '3301170', 'Sidasari', 'Desa'),
(215, '3301170007', '3301170', 'Karangasem', 'Desa'),
(216, '3301170008', '3301170', 'Sampang', 'Desa'),
(217, '3301170009', '3301170', 'Karangtengah', 'Desa'),
(218, '3301170010', '3301170', 'Brani', 'Desa'),
(219, '3301180001', '3301180', 'Sikampuh', 'Desa'),
(220, '3301180002', '3301180', 'Karangturi', 'Desa'),
(221, '3301180003', '3301180', 'Ayamalas', 'Desa'),
(222, '3301180004', '3301180', 'Karangmangu', 'Desa'),
(223, '3301180005', '3301180', 'Pucung Kidul', 'Desa'),
(224, '3301180006', '3301180', 'Mergawati', 'Desa'),
(225, '3301180007', '3301180', 'Pucung Lor', 'Desa'),
(226, '3301180008', '3301180', 'Bajing', 'Desa'),
(227, '3301180009', '3301180', 'Kroya', 'Desa'),
(228, '3301180010', '3301180', 'Pesanggrahan', 'Desa'),
(229, '3301180011', '3301180', 'Pekuncen', 'Desa'),
(230, '3301180012', '3301180', 'Bajing Kulon', 'Desa'),
(231, '3301180013', '3301180', 'Kedawung', 'Desa'),
(232, '3301180014', '3301180', 'Mujur', 'Desa'),
(233, '3301180015', '3301180', 'Gentasari', 'Desa'),
(234, '3301180016', '3301180', 'Mujur Lor', 'Desa'),
(235, '3301180017', '3301180', 'Buntu', 'Desa'),
(236, '3301190001', '3301190', 'Widarapayung Kulon', 'Desa'),
(237, '3301190002', '3301190', 'Sidayu', 'Desa'),
(238, '3301190003', '3301190', 'Widarapayung Wetan', 'Desa'),
(239, '3301190004', '3301190', 'Sidaurip', 'Desa'),
(240, '3301190005', '3301190', 'Pagubugan Kulon', 'Desa'),
(241, '3301190006', '3301190', 'Pagubugan', 'Desa'),
(242, '3301190007', '3301190', 'Karangnangka', 'Desa'),
(243, '3301190008', '3301190', 'Kemojing', 'Desa'),
(244, '3301190009', '3301190', 'Pesawahan', 'Desa'),
(245, '3301190010', '3301190', 'Pasuruhan', 'Desa'),
(246, '3301190011', '3301190', 'Alangamba', 'Desa'),
(247, '3301190012', '3301190', 'Binangun', 'Desa'),
(248, '3301190013', '3301190', 'Bangkal', 'Desa'),
(249, '3301190014', '3301190', 'Jepara Wetan', 'Desa'),
(250, '3301190015', '3301190', 'Jepara Kulon', 'Desa'),
(251, '3301190016', '3301190', 'Kepudang', 'Desa'),
(252, '3301190017', '3301190', 'Jati', 'Desa'),
(253, '3301200001', '3301200', 'Karangtawang', 'Desa'),
(254, '3301200002', '3301200', 'Karangpakis', 'Desa'),
(255, '3301200003', '3301200', 'Banjarsari', 'Desa'),
(256, '3301200004', '3301200', 'Jetis', 'Desa'),
(257, '3301200005', '3301200', 'Banjareja', 'Desa'),
(258, '3301200006', '3301200', 'Kedungbenda', 'Desa'),
(259, '3301200007', '3301200', 'Klumprit', 'Desa'),
(260, '3301200008', '3301200', 'Karangsembung', 'Desa'),
(261, '3301200009', '3301200', 'Purwadadi', 'Desa'),
(262, '3301200010', '3301200', 'Nusawangkal', 'Desa'),
(263, '3301200011', '3301200', 'Karangputat', 'Desa'),
(264, '3301200012', '3301200', 'Banjarwaru', 'Desa'),
(265, '3301200013', '3301200', 'Danasri', 'Desa'),
(266, '3301200014', '3301200', 'Danasri Kidul', 'Desa'),
(267, '3301200015', '3301200', 'Nusawungu', 'Desa'),
(268, '3301200016', '3301200', 'Danasri Lor', 'Desa'),
(269, '3301200017', '3301200', 'Sikanco', 'Desa'),
(270, '3301710001', '3301710', 'Tambakreja', 'Kelurahan'),
(271, '3301710002', '3301710', 'Tegalrejo', 'Kelurahan'),
(272, '3301710003', '3301710', 'Sidakaya', 'Kelurahan'),
(273, '3301710004', '3301710', 'Cilacap', 'Kelurahan'),
(274, '3301710005', '3301710', 'Tegalkamulyan', 'Kelurahan'),
(275, '3301720001', '3301720', 'Kutawaru', 'Kelurahan'),
(276, '3301720002', '3301720', 'Lomanis', 'Kelurahan'),
(277, '3301720003', '3301720', 'Donan', 'Kelurahan'),
(278, '3301720004', '3301720', 'Sidanegara', 'Kelurahan'),
(279, '3301720005', '3301720', 'Gunungsimping', 'Kelurahan'),
(280, '3301730001', '3301730', 'Kebonmanis', 'Kelurahan'),
(281, '3301730002', '3301730', 'Gumilir', 'Kelurahan'),
(282, '3301730003', '3301730', 'Mertasinga', 'Kelurahan'),
(283, '3301730004', '3301730', 'Tritih Kulon', 'Kelurahan'),
(284, '3301730005', '3301730', 'Karangtalun', 'Kelurahan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kecamatan`
--

CREATE TABLE `tb_kecamatan` (
  `id_k` int(11) NOT NULL,
  `id_kecamatan` int(20) NOT NULL,
  `nama_kecamatan` varchar(155) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kecamatan`
--

INSERT INTO `tb_kecamatan` (`id_k`, `id_kecamatan`, `nama_kecamatan`) VALUES
(1, 3301010, 'Dayeuhluhur'),
(2, 3301020, 'Wanareja'),
(3, 3301030, 'Majenang'),
(4, 3301040, 'Cimanggu'),
(5, 3301050, 'Karangpucung'),
(6, 3301060, 'Cipari'),
(7, 3301070, 'Sidareja'),
(8, 3301080, 'Kedungreja'),
(9, 3301090, 'Patimuan'),
(10, 3301100, 'Gandrungmangu'),
(11, 3301110, 'Bantarsari'),
(12, 3301120, 'Kawunganten'),
(13, 3301121, 'Kampung Laut'),
(14, 3301130, 'Jeruklegi'),
(15, 3301140, 'Kesugihan'),
(16, 3301150, 'Adipala'),
(17, 3301160, 'Maos'),
(18, 3301170, 'Sampang'),
(19, 3301180, 'Kroya'),
(20, 3301190, 'Binangun'),
(21, 3301200, 'Nusawungu'),
(22, 3301710, 'Cilacap Selatan'),
(23, 3301720, 'Cilacap Tengah'),
(24, 3301730, 'Cilacap Utara');

-- --------------------------------------------------------

--
-- Table structure for table `tb_laporan`
--

CREATE TABLE `tb_laporan` (
  `id_laporan` varchar(250) NOT NULL,
  `id_user` int(11) NOT NULL,
  `kegiatan` varchar(250) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `kecamatan` varchar(250) NOT NULL,
  `desa` varchar(250) NOT NULL,
  `target` varchar(250) NOT NULL,
  `pelaksana` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_laporan`
--

INSERT INTO `tb_laporan` (`id_laporan`, `id_user`, `kegiatan`, `tahun`, `kecamatan`, `desa`, `target`, `pelaksana`) VALUES
('BD1-001', 1, 'Sosialisasi', '2021', '3301060', '3301060006', '5', '3'),
('BD1-002', 1, 'Sosialisasi bencana', '2022', '3301040', '3301040008', '4', '15'),
('BD2-001', 2, 'Dropping air bersih', '2021', '3301060', '3301060006', '5', '3'),
('BD3-001', 3, 'Relokasi', '0000', '3301120', '3301120013', '25', '4');

-- --------------------------------------------------------

--
-- Table structure for table `tb_level`
--

CREATE TABLE `tb_level` (
  `id_level` int(11) NOT NULL,
  `level` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_level`
--

INSERT INTO `tb_level` (`id_level`, `level`) VALUES
(1, 'Bidang 1'),
(2, 'Bidang 2'),
(3, 'Bidang 3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `level_id` int(11) NOT NULL,
  `kode` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `email`, `password`, `level_id`, `kode`) VALUES
(1, 'Bidang 1', 'bidang1@gmail.com', 'bidang1', 1, 'BD1'),
(2, 'Bidang 2', 'bidang2@gmail.com', 'bidang2', 2, 'BD2'),
(3, 'Bidang 3', 'bidang3@gmail.com', 'bidang3', 3, 'BD3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_desa`
--
ALTER TABLE `tb_desa`
  ADD PRIMARY KEY (`id_d`);

--
-- Indexes for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  ADD PRIMARY KEY (`id_k`);

--
-- Indexes for table `tb_laporan`
--
ALTER TABLE `tb_laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `tb_level`
--
ALTER TABLE `tb_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_desa`
--
ALTER TABLE `tb_desa`
  MODIFY `id_d` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=299;

--
-- AUTO_INCREMENT for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  MODIFY `id_k` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_level`
--
ALTER TABLE `tb_level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
