/*
Navicat MySQL Data Transfer

Source Server         : sys
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : shop

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-12-07 08:57:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for role_power
-- ----------------------------
DROP TABLE IF EXISTS `role_power`;
CREATE TABLE `role_power` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `power_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of role_power
-- ----------------------------
INSERT INTO `role_power` VALUES ('1', '1', '1');
INSERT INTO `role_power` VALUES ('2', '1', '2');
INSERT INTO `role_power` VALUES ('3', '1', '3');
INSERT INTO `role_power` VALUES ('4', '1', '4');
INSERT INTO `role_power` VALUES ('5', '1', '5');
INSERT INTO `role_power` VALUES ('6', '1', '6');
INSERT INTO `role_power` VALUES ('7', '2', '2');
INSERT INTO `role_power` VALUES ('8', '1', '7');
INSERT INTO `role_power` VALUES ('9', '1', '8');
INSERT INTO `role_power` VALUES ('10', '1', '9');
INSERT INTO `role_power` VALUES ('11', '1', '10');
INSERT INTO `role_power` VALUES ('12', '1', '11');
