/*
Navicat MySQL Data Transfer

Source Server         : sys
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : shop

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-12-07 08:57:12
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for power_menu
-- ----------------------------
DROP TABLE IF EXISTS `power_menu`;
CREATE TABLE `power_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `power_id` int(11) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of power_menu
-- ----------------------------
INSERT INTO `power_menu` VALUES ('1', '1', '2');
INSERT INTO `power_menu` VALUES ('2', '1', '3');
INSERT INTO `power_menu` VALUES ('3', '2', '5');
INSERT INTO `power_menu` VALUES ('4', '2', '6');
INSERT INTO `power_menu` VALUES ('5', '4', '7');
INSERT INTO `power_menu` VALUES ('6', '4', '8');
INSERT INTO `power_menu` VALUES ('7', '5', '9');
INSERT INTO `power_menu` VALUES ('8', '5', '10');
INSERT INTO `power_menu` VALUES ('9', '5', '11');
INSERT INTO `power_menu` VALUES ('10', '5', '12');
INSERT INTO `power_menu` VALUES ('11', '6', '13');
INSERT INTO `power_menu` VALUES ('12', '6', '14');
INSERT INTO `power_menu` VALUES ('13', '7', '15');
INSERT INTO `power_menu` VALUES ('14', '7', '16');
INSERT INTO `power_menu` VALUES ('15', '8', '17');
INSERT INTO `power_menu` VALUES ('16', '8', '18');
INSERT INTO `power_menu` VALUES ('17', '9', '19');
INSERT INTO `power_menu` VALUES ('18', '9', '20');
INSERT INTO `power_menu` VALUES ('19', '10', '21');
INSERT INTO `power_menu` VALUES ('20', '10', '22');
