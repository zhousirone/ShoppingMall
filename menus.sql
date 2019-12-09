/*
Navicat MySQL Data Transfer

Source Server         : sys
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : shop

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-12-07 08:57:00
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for menus
-- ----------------------------
DROP TABLE IF EXISTS `menus`;
CREATE TABLE `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menuname` varchar(100) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menus
-- ----------------------------
INSERT INTO `menus` VALUES ('1', '管理员管理', null, '0');
INSERT INTO `menus` VALUES ('2', '管理员添加', 'addAdmin', '1');
INSERT INTO `menus` VALUES ('3', '管理员列表', 'listAdmin', '1');
INSERT INTO `menus` VALUES ('4', '管理员角色管理', null, '0');
INSERT INTO `menus` VALUES ('5', '管理员角色添加', 'addRole', '4');
INSERT INTO `menus` VALUES ('6', '管理员角色列表', 'role.index', '4');
INSERT INTO `menus` VALUES ('7', '仓库添加', 'xx', null);
INSERT INTO `menus` VALUES ('8', '仓库列表', 'xx', null);
INSERT INTO `menus` VALUES ('9', '商品评论审核', 'xx', null);
INSERT INTO `menus` VALUES ('10', '评论回复', 'xx', null);
INSERT INTO `menus` VALUES ('11', '用户意见反馈列表', 'x', null);
INSERT INTO `menus` VALUES ('12', '用户意见回复', 'x', null);
INSERT INTO `menus` VALUES ('13', '属性添加', 'x', null);
INSERT INTO `menus` VALUES ('14', '属性列表', 'x', null);
INSERT INTO `menus` VALUES ('15', '商品添加', 'x', null);
INSERT INTO `menus` VALUES ('16', '商品列表', 'x', null);
INSERT INTO `menus` VALUES ('17', '订单列表', 'x', null);
INSERT INTO `menus` VALUES ('18', '订单状态管理', 'x', null);
INSERT INTO `menus` VALUES ('19', '品牌添加', 'x', null);
INSERT INTO `menus` VALUES ('20', '品牌列表', 'x', null);
INSERT INTO `menus` VALUES ('21', '分类添加', 'x', null);
INSERT INTO `menus` VALUES ('22', '分类列表', 'x', null);
