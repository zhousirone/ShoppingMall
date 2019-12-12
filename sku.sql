/*
Navicat MySQL Data Transfer

Source Server         : 本地连接
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : shop

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-12-09 14:17:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for sku
-- ----------------------------
DROP TABLE IF EXISTS `sku`;
CREATE TABLE `sku` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `price` char(50) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sku
-- ----------------------------
INSERT INTO `sku` VALUES ('1', '1k', '黑色', 'l', null);
INSERT INTO `sku` VALUES ('2', '2k', '红色', 'xl', null);
INSERT INTO `sku` VALUES ('3', '3k', '蓝色', 'xxl', null);
INSERT INTO `sku` VALUES ('4', '4k', '绿色', 'xxxl', null);
INSERT INTO `sku` VALUES ('5', '1w', '橘红色', 'xxxxl', null);
INSERT INTO `sku` VALUES ('6', '2w', '白色', 'xxxxxl', null);
