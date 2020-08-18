/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50539
Source Host           : localhost:3306
Source Database       : astro

Target Server Type    : MYSQL
Target Server Version : 50539
File Encoding         : 65001

Date: 2017-01-31 11:39:11
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for about
-- ----------------------------
DROP TABLE IF EXISTS `about`;
CREATE TABLE `about` (
  `id_about` int(13) NOT NULL AUTO_INCREMENT,
  `about` text,
  `visi` text,
  `misi` text,
  PRIMARY KEY (`id_about`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of about
-- ----------------------------
INSERT INTO `about` VALUES ('8', '<b>Cloud Astro</b> merupakan sebuah perusahaan yang bergrak dalam bidang <b>Information Technology (IT)</b> khususnya dalam bidang pembuatan software. Berdiri sejak tahun 2009 dibawah naungan legalitas <b>CV.Utomo Sakti</b> membuat kami menjadi perusahaan yang cukup memiliki pengalaman dan mampu menjaga profesionalitas kerja dalam bidang jasa pembuatan software. <br><br>\r\nPada perkembangannya, untuk menjaga konsistensi profesionalisme kerja dalam melakukan pelayanan terbaik pada client dan partner, maka kami mencoba untuk lebih berani membuka diri dengan mengeluarkan beberapa produk-produk software yang mengedepankan sisi kreatif, inovatif dan sloutif.', 'Melakukan usaha dibidang Teknologi Informasi (TI) khususnya software, serta optimalisasi pemanfaatan sumber daya Cloud Astro untuk menghasilkan barang dan/atau jasa yang bermutu tinggi dan berdaya saing kuat untuk mendapatkan/mengejar keuntungan guna meningkatkan nilai Cloud Astro dengan menerapkan prinsip-prinsip inovasi dan kemajuan bersama.', 'Untuk mencapai maksud dan tujuan, Cloud Astro dapat melaksanakan kegiatan usaha utama sebagai berikut : <br>\r\na. Memproduksi produk software dengan brand internal perusahaan <br>\r\nb. Memproduksi produk software dengan brand eksternal perusahaan (Astro Partner)');

-- ----------------------------
-- Table structure for inbox
-- ----------------------------
DROP TABLE IF EXISTS `inbox`;
CREATE TABLE `inbox` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `pesan` varchar(500) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of inbox
-- ----------------------------
INSERT INTO `inbox` VALUES ('1', 'RERE', 'EMAIL', 'lololo', '2017-01-13');
INSERT INTO `inbox` VALUES ('8', 'jihan', 'yoyo@gmail.com', 'blabla', '2017-01-13');
INSERT INTO `inbox` VALUES ('13', 'reza', 'reza.toyou@yahoo.com', 'apapapapapapaa kamu bisa bernyanyi ', '2017-01-14');
INSERT INTO `inbox` VALUES ('43', 'jj', 'jjjjj@yahoo.com', 'jijijijijijijijijijijijjijijijijijijijijijijijijijijijijijijijijijijijijij', '2017-01-14');
INSERT INTO `inbox` VALUES ('45', 'wwwww', 'wwww@yahoo.com', 'pollll', '2017-01-14');
INSERT INTO `inbox` VALUES ('46', 'jihan', 'http@yahoo.com', 'nahija nahija nahija  nahija nahija nahija nahija nahija nahija nahiija', '2017-01-14');
INSERT INTO `inbox` VALUES ('47', 'anam', 'NOOB@COM', 'ANJIRRRRR', '2017-01-16');

-- ----------------------------
-- Table structure for produk
-- ----------------------------
DROP TABLE IF EXISTS `produk`;
CREATE TABLE `produk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) DEFAULT NULL,
  `project` varchar(35) DEFAULT NULL,
  `keterangan` text,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of produk
-- ----------------------------
INSERT INTO `produk` VALUES ('29', 'F', 'F', 'F', '170116080705.jpg');
INSERT INTO `produk` VALUES ('30', 'H', 'H', 'H', '170116080757.png');
INSERT INTO `produk` VALUES ('31', 'f', 'f', 'fffff', '170116082524.gif');

-- ----------------------------
-- Table structure for team
-- ----------------------------
DROP TABLE IF EXISTS `team`;
CREATE TABLE `team` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of team
-- ----------------------------
INSERT INTO `team` VALUES ('1', 'Wike Dwi Utomo', ' Chief Executive Officer\r\n', '0');
INSERT INTO `team` VALUES ('2', 'Nurdin Wijaya S.', 'Chief Information Officer\r\n', '0');
INSERT INTO `team` VALUES ('3', 'Yudhita Valen P.', 'Business Analys', '0');
INSERT INTO `team` VALUES ('4', 'Arda Siri AR.', 'Chief Operation Office', '0');
INSERT INTO `team` VALUES ('5', 'Irvan Charis', 'Chief Technology Officer', '0');
