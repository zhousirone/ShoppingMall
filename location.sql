/*
Navicat MySQL Data Transfer

Source Server         : 1609A
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : shop

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-12-26 13:38:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for location
-- ----------------------------
DROP TABLE IF EXISTS `location`;
CREATE TABLE `location` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `detailed` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of location
-- ----------------------------
INSERT INTO `location` VALUES ('9', '1', '小李', '13131166883', '北京 海淀', '滨河', '2019-12-26 01:42:18', '2019-12-26 01:42:18');
INSERT INTO `location` VALUES ('8', '1', '小名', '13131166883', '北京 海淀 上地街道', '八维', '2019-12-25 19:11:51', '2019-12-25 19:11:56');
INSERT INTO `location` VALUES ('2', '1', '小树', '13131166883', '北京 海淀 上地街道', '八维', '2019-12-25 19:11:51', '2019-12-26 02:01:19');
INSERT INTO `location` VALUES ('6', '1', '小名', '13131166883', '北京 海淀 上地街道', '八维', '2019-12-25 19:11:51', '2019-12-25 19:11:56');
