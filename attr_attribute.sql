/*
Navicat MySQL Data Transfer

Source Server         : 本地连接
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : shop

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-12-07 08:48:46
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for attr_attribute
-- ----------------------------
DROP TABLE IF EXISTS `attr_attribute`;
CREATE TABLE `attr_attribute` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `attr_name` varchar(255) DEFAULT NULL,
  `attr_sel` varchar(255) DEFAULT NULL,
  `attr_write` varchar(255) DEFAULT NULL,
  `attr_vals` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of attr_attribute
-- ----------------------------
INSERT INTO `attr_attribute` VALUES ('1', '1', '1', '1', '水类');
INSERT INTO `attr_attribute` VALUES ('2', '2', '2', null, '电子类');
