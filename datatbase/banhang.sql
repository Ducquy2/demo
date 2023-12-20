/*
MySQL Backup
Source Server Version: 5.6.25
Source Database: banhang1
Date: 8/9/2016 12:47:07
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
--  Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tenadmin` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachiadmin` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sdtadmin` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for `camquyen`
-- ----------------------------
DROP TABLE IF EXISTS `camquyen`;
CREATE TABLE `camquyen` (
  `quyen_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `camquyen` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`quyen_id`),
  KEY `FK_relationship_13` (`username`),
  CONSTRAINT `FK_relationship_13` FOREIGN KEY (`username`) REFERENCES `admin` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for `cthoadon`
-- ----------------------------
DROP TABLE IF EXISTS `cthoadon`;
CREATE TABLE `cthoadon` (
  `cthoadon_id` int(11) NOT NULL AUTO_INCREMENT,
  `hoadon_id` int(11) DEFAULT NULL,
  `mathang_id` int(11) DEFAULT NULL,
  `soluongban` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dongiaban` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thanhtienban` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`cthoadon_id`),
  KEY `FK_relationship_8` (`mathang_id`),
  KEY `FK_relationship_9` (`hoadon_id`),
  CONSTRAINT `FK_relationship_8` FOREIGN KEY (`mathang_id`) REFERENCES `mathang` (`mathang_id`),
  CONSTRAINT `FK_relationship_9` FOREIGN KEY (`hoadon_id`) REFERENCES `hoadon` (`hoadon_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for `hoadon`
-- ----------------------------
DROP TABLE IF EXISTS `hoadon`;
CREATE TABLE `hoadon` (
  `hoadon_id` int(11) NOT NULL AUTO_INCREMENT,
  `khachhang_id` int(11) DEFAULT NULL,
  `ngaylaphd` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trangthaihd` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`hoadon_id`),
  KEY `FK_relationship_10` (`khachhang_id`),
  CONSTRAINT `FK_relationship_10` FOREIGN KEY (`khachhang_id`) REFERENCES `khachhang` (`khachhang_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for `khachhang`
-- ----------------------------
DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE `khachhang` (
  `khachhang_id` int(11) NOT NULL AUTO_INCREMENT,
  `pass` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenkh` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sdtkh` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emailkh` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachikh` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`khachhang_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for `loaihang`
-- ----------------------------
DROP TABLE IF EXISTS `loaihang`;
CREATE TABLE `loaihang` (
  `loaihang_id` int(11) NOT NULL AUTO_INCREMENT,
  `tenloaihang` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trangthai` tinyint(10) DEFAULT NULL,
  `slug1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`loaihang_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for `mathang`
-- ----------------------------
DROP TABLE IF EXISTS `mathang`;
CREATE TABLE `mathang` (
  `mathang_id` int(11) NOT NULL AUTO_INCREMENT,
  `loaihang_id` int(11) DEFAULT NULL,
  `tenmh` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `giamh` int(50) DEFAULT NULL,
  `slug` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mota` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hinh` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hangsx` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `xuatxu` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `path` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`mathang_id`),
  KEY `FK_relationship_1` (`loaihang_id`),
  CONSTRAINT `FK_relationship_1` FOREIGN KEY (`loaihang_id`) REFERENCES `loaihang` (`loaihang_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for `tintuc`
-- ----------------------------
DROP TABLE IF EXISTS `tintuc`;
CREATE TABLE `tintuc` (
  `tintuc_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tieude` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hinhanhtin` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tomtat` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidung` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`tintuc_id`),
  KEY `FK_relationship_12` (`username`),
  CONSTRAINT `FK_relationship_12` FOREIGN KEY (`username`) REFERENCES `admin` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for `tonkho`
-- ----------------------------
DROP TABLE IF EXISTS `tonkho`;
CREATE TABLE `tonkho` (
  `tonkho_id` int(11) NOT NULL AUTO_INCREMENT,
  `mathang_id` int(11) DEFAULT NULL,
  `soluongton` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `donggiabq` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghichu` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`tonkho_id`),
  KEY `FK_relationship_2` (`mathang_id`),
  CONSTRAINT `FK_relationship_2` FOREIGN KEY (`mathang_id`) REFERENCES `mathang` (`mathang_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records 
-- ----------------------------
INSERT INTO `admin` VALUES ('1',NULL,NULL,NULL,'123');
INSERT INTO `hoadon` VALUES ('2','1',NULL,NULL);
INSERT INTO `khachhang` VALUES ('1','123      ','vu','123','vu.nguyen8182Agmail.com','aaaaaaaaaaaaa');
INSERT INTO `loaihang` VALUES ('1','Điện Thoại','0',NULL), ('2','Đồng Hồ           ',NULL,NULL), ('3','Laptop ',NULL,NULL), ('4','Máy Tính Bảng             ',NULL,NULL), ('6','                                     xe máy  ',NULL,'xe-máy');
INSERT INTO `mathang` VALUES ('5','3','Acer                                              ','15000000','Acer','                             \r\n        \r\n         ','hinh_2.png',NULL,NULL,'C:/xampp/htdocs/webgiaodien/uploads/hinh_2.png'), ('6','3','Dell                                              ','10000000','Dell','                             \r\n        \r\n         ','hinh_11.png',NULL,NULL,'C:/xampp/htdocs/webgiaodien/uploads/hinh_11.png'), ('7','3','Asus                                              ','11000000','Asus','                             \r\n        \r\n         ','hinh_3.png',NULL,NULL,'C:/xampp/htdocs/webgiaodien/uploads/hinh_3.png'), ('8','3','                                        HP Pavilio','13000000','HP-Pavilion-11-S001TU','                                                  ','lap.png',NULL,NULL,'C:/xampp/htdocs/webgiaodien/uploads/lap.png'), ('9','3','ASUS X403SA                                       ','6900000','ASUS-X403SA','                \r\n        \r\n        ','hinh_12.png',NULL,NULL,'C:/xampp/htdocs/webgiaodien/uploads/hinh_12.png'), ('11','1','HTC 10                                            ','15000000','HTC-10','                \r\n        \r\n        ','hinh_9.png',NULL,NULL,'C:/xampp/htdocs/webgiaodien/uploads/hinh_9.png'), ('12','1','                                           I Phone','20000000','I-Phone-6s','                                          \r\n      ','hinh_3.jpg',NULL,NULL,'C:/xampp/htdocs/webgiaodien/uploads/hinh_3.jpg'), ('13','1','                                        Samsung Ga','18490000','Samsung-Galaxy-S7-Edge','                             \r\n        \r\n         ','hinh_5.jpg',NULL,NULL,'C:/xampp/htdocs/webgiaodien/uploads/hinh_5.jpg'), ('15','4','                                        ipad air  ','12000000','ipad-air','                             \r\n        \r\n         ','hinh_2.jpg',NULL,NULL,'C:/xampp/htdocs/webgiaodien/uploads/hinh_2.jpg'), ('16','4','                                        Ipad 4    ','13000000','Ipad-4','                                                  ','ipad4.jpg',NULL,NULL,'C:/xampp/htdocs/webgiaodien/uploads/ipad4.jpg');
