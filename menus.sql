/*
Navicat MySQL Data Transfer

Source Server         : sys
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : shop

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-12-13 13:47:46
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
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menus
-- ----------------------------
INSERT INTO `menus` VALUES ('1', '管理员添加', 'addAdmin', '1');
INSERT INTO `menus` VALUES ('2', '管理员列表', 'listAdmin', '1');
INSERT INTO `menus` VALUES ('3', '管理员角色添加', 'addRole', '2');
INSERT INTO `menus` VALUES ('4', '管理员角色列表', 'listRole', '2');
INSERT INTO `menus` VALUES ('5', '满减活动', null, '3');
INSERT INTO `menus` VALUES ('6', '赠送优惠券', null, '3');
INSERT INTO `menus` VALUES ('7', '满几送几', null, '3');
INSERT INTO `menus` VALUES ('8', '仓库添加', 'showAdd', '4');
INSERT INTO `menus` VALUES ('9', '仓库列表', 'warehouseShow', '4');
INSERT INTO `menus` VALUES ('10', '商品评论审核', null, '5');
INSERT INTO `menus` VALUES ('11', '评论回复', null, '5');
INSERT INTO `menus` VALUES ('12', '用户意见反馈', null, '5');
INSERT INTO `menus` VALUES ('13', '用户意见回复', null, '5');
INSERT INTO `menus` VALUES ('14', '属性添加', 'attr_add', '6');
INSERT INTO `menus` VALUES ('15', '属性列表', 'goods_list', '6');
INSERT INTO `menus` VALUES ('16', '商品添加', 'attribute_class', '7');
INSERT INTO `menus` VALUES ('17', '商品列表', 'goods_list', '7');
INSERT INTO `menus` VALUES ('18', '订单列表', null, '8');
INSERT INTO `menus` VALUES ('19', '订单状态管理', null, '8');
INSERT INTO `menus` VALUES ('20', '品牌添加', null, '9');
INSERT INTO `menus` VALUES ('21', '品牌列表', null, '9');
INSERT INTO `menus` VALUES ('22', '分类添加', 'class', '10');
INSERT INTO `menus` VALUES ('23', '分类列表', 'class_display', '10');
INSERT INTO `menus` VALUES ('24', '添加菜单', 'addMenu', '11');
INSERT INTO `menus` VALUES ('25', '菜单列表', 'listMenu', '11');
INSERT INTO `menus` VALUES ('26', '添加权限', 'addPower', '11');
INSERT INTO `menus` VALUES ('27', '权限列表', 'listPower', '11');
