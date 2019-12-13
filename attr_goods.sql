/*
Navicat MySQL Data Transfer

Source Server         : 本地连接
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : shop

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-12-13 19:30:33
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for attr_goods
-- ----------------------------
DROP TABLE IF EXISTS `attr_goods`;
CREATE TABLE `attr_goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `pid` int(10) DEFAULT NULL,
  `cid` int(10) DEFAULT NULL,
  `brand_id` int(10) DEFAULT NULL,
  `sku` text,
  `class_id` int(11) DEFAULT NULL,
  `depict` varchar(255) DEFAULT NULL,
  `shou` varchar(255) DEFAULT NULL,
  `hua` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `shang` varchar(255) DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `worehouse` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of attr_goods
-- ----------------------------
INSERT INTO `attr_goods` VALUES ('59', '哇哈哈哈', null, '1', null, null, null, null, null, null, null, null, null, null, '南京仓库');
INSERT INTO `attr_goods` VALUES ('3', '化妆品', '0', null, '1', null, null, null, null, null, null, null, null, null, '河北仓库');
INSERT INTO `attr_goods` VALUES ('10', '所属', null, null, '2', null, null, null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('5', '是', '2', null, '2', null, null, null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('6', '解决', '3', null, '3', null, null, null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('8', null, null, null, '3', null, null, null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('9', '哈哈', null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('11', '很好听', '2', null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('12', '很好听', '2', null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('13', '很好听', '2', null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('14', '对对', '1', null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('15', '可乐', '1', null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('16', '嘻哈', null, '2', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('17', '雪碧', null, '1', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('18', '雪碧', null, '1', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('19', '奶', null, '1', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('20', '奶', null, '1', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('21', '奶', null, '1', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('22', '奶', null, '1', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('58', '冲电头', null, '3', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('25', '电脑', null, '3', null, null, null, null, null, null, null, null, null, null, '北京仓库');
INSERT INTO `attr_goods` VALUES ('26', '电脑', null, '3', null, null, null, null, null, null, null, null, null, null, '上海仓库');
INSERT INTO `attr_goods` VALUES ('27', '电脑', null, '3', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('28', '东鹏', null, '1', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('29', '东鹏', null, '1', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('30', '东鹏', null, '1', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('31', '奶茶', null, '1', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('32', '试试', null, '2', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('33', '烤鱼', null, '4', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('34', '哇哈哈', null, '1', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('35', '咔嚓裤子', null, '2', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('36', '豆浆', null, '1', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('37', '豆浆', null, '1', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('38', 'ss', null, '1', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('39', '哈哈', null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('40', '哇哈哈', null, '1', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('41', '哇哈哈', null, '1', null, null, '2', null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('42', '哈伦裤子', null, null, null, null, '2', null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('43', '哈哈裤子', null, null, null, null, '2', null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('44', '哇哈哈', null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('45', '哇哈哈', null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('46', '哇哈哈', null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('47', '哇哈哈', null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('48', '哇哈哈', null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('49', '测试1', null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('57', 'iphone', null, '3', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('56', null, null, null, null, '{\"name\":\"\\u8bd5\\u8bd5\",\"id\":[\"\\u9ed1\\u8272\",\"l\",\"1k\"]}', null, null, null, null, null, null, null, null, null);
INSERT INTO `attr_goods` VALUES ('60', '充电宝', null, '3', null, null, null, null, null, null, null, null, null, null, null);
