/*
Navicat MySQL Data Transfer

Source Server         : 本地连接
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : shop

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-12-07 08:49:53
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for t_a
-- ----------------------------
DROP TABLE IF EXISTS `t_a`;
CREATE TABLE `t_a` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type_id` int(10) DEFAULT NULL,
  `attr_id` int(11) DEFAULT NULL,
  `class_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_a
-- ----------------------------
INSERT INTO `t_a` VALUES ('1', '1', '1', '1');
