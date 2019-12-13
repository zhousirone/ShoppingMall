/*
Navicat MySQL Data Transfer

Source Server         : 本地连接
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : shop

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-12-13 19:33:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `name` varchar(50) CHARACTER SET utf8 DEFAULT NULL COMMENT '用户名',
  `pwd` varchar(50) CHARACTER SET utf8 DEFAULT NULL COMMENT '密码',
  `email` varchar(150) CHARACTER SET utf8 DEFAULT NULL COMMENT '邮箱',
  `nickname` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `headimg` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `birthdate` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `logintime` datetime DEFAULT NULL,
  `gender` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '1', '1', null, null, null, null, null, null);
INSERT INTO `users` VALUES ('2', null, '2', '3', '哈哈', null, null, null, '0');
INSERT INTO `users` VALUES ('3', '2', '2', '1295604821@qq.com', 'ff', null, null, null, '0');
INSERT INTO `users` VALUES ('4', '2', '2', '1295604821@qq.com', 'ff', null, null, null, '0');
INSERT INTO `users` VALUES ('5', '3', '2', '1295604821@qq.com', '看看', '', null, null, '0');
INSERT INTO `users` VALUES ('6', '1', '2', '1295604821@qq.com', '解决', '', null, null, '0');
INSERT INTO `users` VALUES ('7', null, null, null, null, null, null, null, '0');
INSERT INTO `users` VALUES ('8', '1', '1', '1295604821@qq.com', '1', '', '2020-02-04T01:01', null, '0');
INSERT INTO `users` VALUES ('9', null, null, null, null, null, null, null, '0');
INSERT INTO `users` VALUES ('10', '1', '1', '1295604821@qq.com', '1', '', '0002-02-02T02:02', null, '0');
INSERT INTO `users` VALUES ('11', '1', '1', '1295604821@qq.com', '1', '', '0002-02-02T02:02', null, '0');
INSERT INTO `users` VALUES ('12', '1', '123456', '1295604821@qq.com', '1', '', null, null, '0');
INSERT INTO `users` VALUES ('13', null, null, null, null, null, null, null, '0');
INSERT INTO `users` VALUES ('14', null, null, null, null, null, null, null, '0');
INSERT INTO `users` VALUES ('15', null, null, null, null, null, null, null, '0');
INSERT INTO `users` VALUES ('16', '1', '123456', '1295604821@qq.com', '1', '', '0001-01-01T01:01', null, '0');
INSERT INTO `users` VALUES ('17', '1', '123456', '1295604821@qq.com', '1', '', '0001-01-01T01:01', null, '0');
INSERT INTO `users` VALUES ('18', '1', '123456', '1295604821@qq.com', '1', '', '0001-01-01T01:01', null, '0');
INSERT INTO `users` VALUES ('19', '1', '123456', '1295604821@qq.com', '1', '', '0001-01-01T01:01', null, '0');
INSERT INTO `users` VALUES ('20', '3', '1', '1295604821@qq.com', null, null, null, null, '0');
INSERT INTO `users` VALUES ('21', '1', '123456', '1', '哈哈', 'C:\\fakepath\\1.jpg', '0003-03-03T03:03', null, '0');
