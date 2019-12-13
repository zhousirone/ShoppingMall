/*
Navicat MySQL Data Transfer

Source Server         : sys
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : shop

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-12-13 13:48:00
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
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of power_menu
-- ----------------------------
INSERT INTO `power_menu` VALUES ('1', '1', '1');
INSERT INTO `power_menu` VALUES ('2', '1', '2');
INSERT INTO `power_menu` VALUES ('3', '2', '3');
INSERT INTO `power_menu` VALUES ('4', '2', '4');
INSERT INTO `power_menu` VALUES ('5', '3', '5');
INSERT INTO `power_menu` VALUES ('6', '3', '6');
INSERT INTO `power_menu` VALUES ('7', '3', '7');
INSERT INTO `power_menu` VALUES ('8', '4', '8');
INSERT INTO `power_menu` VALUES ('9', '4', '9');
INSERT INTO `power_menu` VALUES ('10', '5', '10');
INSERT INTO `power_menu` VALUES ('11', '5', '11');
INSERT INTO `power_menu` VALUES ('12', '5', '12');
INSERT INTO `power_menu` VALUES ('13', '5', '13');
INSERT INTO `power_menu` VALUES ('14', '6', '14');
INSERT INTO `power_menu` VALUES ('15', '6', '15');
INSERT INTO `power_menu` VALUES ('16', '7', '16');
INSERT INTO `power_menu` VALUES ('17', '7', '17');
INSERT INTO `power_menu` VALUES ('18', '8', '18');
INSERT INTO `power_menu` VALUES ('19', '8', '19');
INSERT INTO `power_menu` VALUES ('20', '9', '20');
INSERT INTO `power_menu` VALUES ('21', '9', '21');
INSERT INTO `power_menu` VALUES ('22', '10', '22');
INSERT INTO `power_menu` VALUES ('23', '10', '23');
INSERT INTO `power_menu` VALUES ('24', '11', '24');
INSERT INTO `power_menu` VALUES ('25', '11', '25');
INSERT INTO `power_menu` VALUES ('26', '11', '26');
INSERT INTO `power_menu` VALUES ('27', '11', '27');
