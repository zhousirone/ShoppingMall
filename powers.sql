/*
Navicat MySQL Data Transfer

Source Server         : sys
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : shop

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-12-07 08:57:22
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for powers
-- ----------------------------
DROP TABLE IF EXISTS `powers`;
CREATE TABLE `powers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `powername` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of powers
-- ----------------------------
INSERT INTO `powers` VALUES ('1', '管理员管理');
INSERT INTO `powers` VALUES ('2', '管理员角色管理');
INSERT INTO `powers` VALUES ('3', '活动管理');
INSERT INTO `powers` VALUES ('4', '仓库管理');
INSERT INTO `powers` VALUES ('5', '客服中心');
INSERT INTO `powers` VALUES ('6', '商品属性管理');
INSERT INTO `powers` VALUES ('7', '商品管理');
INSERT INTO `powers` VALUES ('8', '订单管理');
INSERT INTO `powers` VALUES ('9', '品牌管理');
INSERT INTO `powers` VALUES ('10', '商品分类管理');
INSERT INTO `powers` VALUES ('11', '菜单列表');
