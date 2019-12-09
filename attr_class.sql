/*
Navicat MySQL Data Transfer

Source Server         : 本地连接
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : shop

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-12-09 14:17:36
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for attr_class
-- ----------------------------
DROP TABLE IF EXISTS `attr_class`;
CREATE TABLE `attr_class` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cid` int(10) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `blande_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of attr_class
-- ----------------------------
INSERT INTO `attr_class` VALUES ('1', '0', '水', '唯品会');
INSERT INTO `attr_class` VALUES ('2', '0', '衣服', '天猫');
INSERT INTO `attr_class` VALUES ('3', '0', '电器', '淘宝');
INSERT INTO `attr_class` VALUES ('4', '0', '捞鱼', '京东');
