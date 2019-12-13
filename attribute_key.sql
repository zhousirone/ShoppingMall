/*
Navicat MySQL Data Transfer

Source Server         : 本地连接
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : shop

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-12-13 19:30:50
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for attribute_key
-- ----------------------------
DROP TABLE IF EXISTS `attribute_key`;
CREATE TABLE `attribute_key` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `class_id` int(11) DEFAULT NULL,
  `attribute_name` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=218 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of attribute_key
-- ----------------------------
INSERT INTO `attribute_key` VALUES ('1', '0', '医药保健', null);
INSERT INTO `attribute_key` VALUES ('2', '0', '家用电器', null);
INSERT INTO `attribute_key` VALUES ('3', '0', '电脑/办公', null);
INSERT INTO `attribute_key` VALUES ('4', '0', '男装/女装/童装/内衣', null);
INSERT INTO `attribute_key` VALUES ('5', '0', '美妆个护', null);
INSERT INTO `attribute_key` VALUES ('6', '0', '家居/家具/家装/厨具', null);
INSERT INTO `attribute_key` VALUES ('7', '0', '女装/女鞋/包', null);
INSERT INTO `attribute_key` VALUES ('8', '1', '中西药品', null);
INSERT INTO `attribute_key` VALUES ('9', '1', '营养健康', null);
INSERT INTO `attribute_key` VALUES ('10', '1', '营养成分', null);
INSERT INTO `attribute_key` VALUES ('11', '1', '滋补养生', null);
INSERT INTO `attribute_key` VALUES ('12', '1', '保健器械', null);
INSERT INTO `attribute_key` VALUES ('13', '2', '电视', null);
INSERT INTO `attribute_key` VALUES ('14', '2', '空调', null);
INSERT INTO `attribute_key` VALUES ('15', '2', '洗衣机', null);
INSERT INTO `attribute_key` VALUES ('16', '2', '冰箱', null);
INSERT INTO `attribute_key` VALUES ('17', '3', '电脑配件', null);
INSERT INTO `attribute_key` VALUES ('18', '3', '游戏设备', null);
INSERT INTO `attribute_key` VALUES ('19', '3', '外设产品', null);
INSERT INTO `attribute_key` VALUES ('20', '8', '皮肤用药', null);
INSERT INTO `attribute_key` VALUES ('21', '8', '肠胃消化', null);
INSERT INTO `attribute_key` VALUES ('22', '8', '风湿骨外伤', null);
INSERT INTO `attribute_key` VALUES ('23', '8', '维生素/钙', null);
INSERT INTO `attribute_key` VALUES ('24', '8', '男科/泌尿', null);
INSERT INTO `attribute_key` VALUES ('25', '8', '妇科用药', null);
INSERT INTO `attribute_key` VALUES ('26', '8', '儿科用药', null);
INSERT INTO `attribute_key` VALUES ('27', '8', '心脑血管', null);
INSERT INTO `attribute_key` VALUES ('28', '8', '避孕药', null);
INSERT INTO `attribute_key` VALUES ('29', '8', '肝胆用药', null);
INSERT INTO `attribute_key` VALUES ('30', '8', '中风/心绞痛', null);
INSERT INTO `attribute_key` VALUES ('31', '8', '糖尿病', null);
INSERT INTO `attribute_key` VALUES ('78', '13', '超薄电视', null);
INSERT INTO `attribute_key` VALUES ('91', '17', '显示器', null);
INSERT INTO `attribute_key` VALUES ('77', '13', '曲面电视', null);
INSERT INTO `attribute_key` VALUES ('32', '9', '调节免疫', null);
INSERT INTO `attribute_key` VALUES ('33', '9', '调节三高', null);
INSERT INTO `attribute_key` VALUES ('34', '9', '缓解疲劳', null);
INSERT INTO `attribute_key` VALUES ('35', '9', '美体塑身', null);
INSERT INTO `attribute_key` VALUES ('36', '9', '美容养颜', null);
INSERT INTO `attribute_key` VALUES ('37', '9', '肝肾养护', null);
INSERT INTO `attribute_key` VALUES ('38', '9', '肠胃养护', null);
INSERT INTO `attribute_key` VALUES ('39', '9', '明目益智', null);
INSERT INTO `attribute_key` VALUES ('40', '9', '骨骼健康', null);
INSERT INTO `attribute_key` VALUES ('41', '9', '改善睡眠', null);
INSERT INTO `attribute_key` VALUES ('42', '10', '维生素/矿物质', null);
INSERT INTO `attribute_key` VALUES ('43', '10', '蛋白质', null);
INSERT INTO `attribute_key` VALUES ('44', '10', '鱼油/磷脂', null);
INSERT INTO `attribute_key` VALUES ('45', '10', '螺旋藻', null);
INSERT INTO `attribute_key` VALUES ('46', '10', '番茄红素', null);
INSERT INTO `attribute_key` VALUES ('47', '10', '叶酸', null);
INSERT INTO `attribute_key` VALUES ('48', '10', '葡萄籽', null);
INSERT INTO `attribute_key` VALUES ('49', '10', '左旋肉碱', null);
INSERT INTO `attribute_key` VALUES ('50', '10', '辅酶Q10', null);
INSERT INTO `attribute_key` VALUES ('51', '10', '益生菌', null);
INSERT INTO `attribute_key` VALUES ('52', '10', '玛咖', null);
INSERT INTO `attribute_key` VALUES ('53', '10', '膳食纤维', null);
INSERT INTO `attribute_key` VALUES ('54', '10', '牛初乳', null);
INSERT INTO `attribute_key` VALUES ('55', '10', '胶原蛋白', null);
INSERT INTO `attribute_key` VALUES ('56', '10', '大豆异黄酮', null);
INSERT INTO `attribute_key` VALUES ('57', '10', '芦荟提取', null);
INSERT INTO `attribute_key` VALUES ('58', '10', '酵素', null);
INSERT INTO `attribute_key` VALUES ('59', '11', '阿胶', null);
INSERT INTO `attribute_key` VALUES ('60', '11', '蜂蜜/蜂产品', null);
INSERT INTO `attribute_key` VALUES ('61', '11', '枸杞', null);
INSERT INTO `attribute_key` VALUES ('62', '11', '燕窝', null);
INSERT INTO `attribute_key` VALUES ('63', '11', '冬虫夏草', null);
INSERT INTO `attribute_key` VALUES ('64', '11', '人参/西洋参', null);
INSERT INTO `attribute_key` VALUES ('65', '11', '三七', null);
INSERT INTO `attribute_key` VALUES ('66', '11', '鹿茸', null);
INSERT INTO `attribute_key` VALUES ('67', '11', '雪蛤', null);
INSERT INTO `attribute_key` VALUES ('68', '11', '青钱柳', null);
INSERT INTO `attribute_key` VALUES ('69', '11', '灵芝/孢子粉', null);
INSERT INTO `attribute_key` VALUES ('70', '11', '当归', null);
INSERT INTO `attribute_key` VALUES ('71', '11', '养生茶饮', null);
INSERT INTO `attribute_key` VALUES ('72', '11', '药食同源', null);
INSERT INTO `attribute_key` VALUES ('73', '12', '血压计', null);
INSERT INTO `attribute_key` VALUES ('74', '12', '血糖仪', null);
INSERT INTO `attribute_key` VALUES ('75', '12', '血氧仪', null);
INSERT INTO `attribute_key` VALUES ('76', '12', '体温计', null);
INSERT INTO `attribute_key` VALUES ('79', '13', 'HDR电视', null);
INSERT INTO `attribute_key` VALUES ('80', '14', '壁挂式空调', null);
INSERT INTO `attribute_key` VALUES ('81', '14', '柜式空调', null);
INSERT INTO `attribute_key` VALUES ('82', '14', '中央空调', null);
INSERT INTO `attribute_key` VALUES ('83', '15', '滚筒洗衣机', null);
INSERT INTO `attribute_key` VALUES ('84', '15', '洗烘一体机', null);
INSERT INTO `attribute_key` VALUES ('85', '15', '迷你洗衣机', null);
INSERT INTO `attribute_key` VALUES ('86', '16', '多门', null);
INSERT INTO `attribute_key` VALUES ('87', '16', '对开门', null);
INSERT INTO `attribute_key` VALUES ('88', '16', '三门', null);
INSERT INTO `attribute_key` VALUES ('89', '16', '双门', null);
INSERT INTO `attribute_key` VALUES ('90', '16', '酒柜', null);
INSERT INTO `attribute_key` VALUES ('92', '17', 'CPU', null);
INSERT INTO `attribute_key` VALUES ('93', '17', '显卡', null);
INSERT INTO `attribute_key` VALUES ('94', '17', '电源', null);
INSERT INTO `attribute_key` VALUES ('95', '17', 'SSD固态硬盘', null);
INSERT INTO `attribute_key` VALUES ('96', '18', '游戏耳机', null);
INSERT INTO `attribute_key` VALUES ('97', '18', '手柄/方向盘', null);
INSERT INTO `attribute_key` VALUES ('98', '18', '游戏软件', null);
INSERT INTO `attribute_key` VALUES ('99', '18', '游戏周边', null);
INSERT INTO `attribute_key` VALUES ('100', '19', '鼠标', null);
INSERT INTO `attribute_key` VALUES ('101', '19', '网络仪表仪器', null);
INSERT INTO `attribute_key` VALUES ('102', '19', '线缆', null);
INSERT INTO `attribute_key` VALUES ('103', '19', '电脑清洁', null);
INSERT INTO `attribute_key` VALUES ('104', '4', '男装', null);
INSERT INTO `attribute_key` VALUES ('105', '4', '女装', null);
INSERT INTO `attribute_key` VALUES ('106', '4', '内衣', null);
INSERT INTO `attribute_key` VALUES ('107', '105', '2019新品', null);
INSERT INTO `attribute_key` VALUES ('108', '105', '商场同款', null);
INSERT INTO `attribute_key` VALUES ('109', '105', '连衣裙', null);
INSERT INTO `attribute_key` VALUES ('110', '105', '羽绒服', null);
INSERT INTO `attribute_key` VALUES ('111', '104', '商场同款', null);
INSERT INTO `attribute_key` VALUES ('112', '104', '当季热卖', null);
INSERT INTO `attribute_key` VALUES ('113', '104', '休闲裤', null);
INSERT INTO `attribute_key` VALUES ('114', '104', '短裤', null);
INSERT INTO `attribute_key` VALUES ('115', '106', '文胸', null);
INSERT INTO `attribute_key` VALUES ('116', '106', '情侣睡衣', null);
INSERT INTO `attribute_key` VALUES ('117', '106', '吊带/背心', null);
INSERT INTO `attribute_key` VALUES ('118', '106', '美腿袜', null);
INSERT INTO `attribute_key` VALUES ('119', '106', '内衣配件', null);
INSERT INTO `attribute_key` VALUES ('120', '5', '面部护肤', null);
INSERT INTO `attribute_key` VALUES ('121', '5', '洗发护发', null);
INSERT INTO `attribute_key` VALUES ('122', '5', '身体护理', null);
INSERT INTO `attribute_key` VALUES ('123', '5', '清洁用品', null);
INSERT INTO `attribute_key` VALUES ('124', '120', '卸妆', null);
INSERT INTO `attribute_key` VALUES ('125', '120', '洁面', null);
INSERT INTO `attribute_key` VALUES ('126', '120', '爽肤水', null);
INSERT INTO `attribute_key` VALUES ('127', '120', '乳液面霜', null);
INSERT INTO `attribute_key` VALUES ('128', '120', '面膜', null);
INSERT INTO `attribute_key` VALUES ('129', '121', '护发', null);
INSERT INTO `attribute_key` VALUES ('130', '121', '染发', null);
INSERT INTO `attribute_key` VALUES ('131', '121', '假发', null);
INSERT INTO `attribute_key` VALUES ('132', '122', '沐浴', null);
INSERT INTO `attribute_key` VALUES ('133', '122', '润肤', null);
INSERT INTO `attribute_key` VALUES ('134', '122', '精油', null);
INSERT INTO `attribute_key` VALUES ('135', '122', '颈部', null);
INSERT INTO `attribute_key` VALUES ('136', '123', '衣物清洁', null);
INSERT INTO `attribute_key` VALUES ('137', '123', '清洁工具', null);
INSERT INTO `attribute_key` VALUES ('138', '123', '一次性用品', null);
INSERT INTO `attribute_key` VALUES ('139', '6', '灯具', null);
INSERT INTO `attribute_key` VALUES ('140', '6', '家具', null);
INSERT INTO `attribute_key` VALUES ('141', '6', '家装软饰', null);
INSERT INTO `attribute_key` VALUES ('142', '6', '厨具', null);
INSERT INTO `attribute_key` VALUES ('143', '139', '吸顶灯', null);
INSERT INTO `attribute_key` VALUES ('144', '139', '吊灯', null);
INSERT INTO `attribute_key` VALUES ('145', '139', '筒灯射灯', null);
INSERT INTO `attribute_key` VALUES ('146', '139', '装饰灯', null);
INSERT INTO `attribute_key` VALUES ('147', '140', '卧室家具', null);
INSERT INTO `attribute_key` VALUES ('148', '140', '客厅家具', null);
INSERT INTO `attribute_key` VALUES ('149', '140', '儿童家具', null);
INSERT INTO `attribute_key` VALUES ('150', '141', '装饰字画', null);
INSERT INTO `attribute_key` VALUES ('151', '141', '装饰摆件', null);
INSERT INTO `attribute_key` VALUES ('152', '141', '香薰蜡烛', null);
INSERT INTO `attribute_key` VALUES ('153', '141', '创意家居', null);
INSERT INTO `attribute_key` VALUES ('154', '141', '节庆饰品', null);
INSERT INTO `attribute_key` VALUES ('155', '142', '锅具套装', null);
INSERT INTO `attribute_key` VALUES ('156', '142', '保温杯', null);
INSERT INTO `attribute_key` VALUES ('157', '142', '刀剪菜板', null);
INSERT INTO `attribute_key` VALUES ('158', '142', '厨房配件', null);
INSERT INTO `attribute_key` VALUES ('159', '142', '水具酒具', null);
INSERT INTO `attribute_key` VALUES ('160', '7', '时尚女鞋', null);
INSERT INTO `attribute_key` VALUES ('161', '7', '潮流女包', null);
INSERT INTO `attribute_key` VALUES ('162', '7', '精品男包', null);
INSERT INTO `attribute_key` VALUES ('163', '7', '功能鞋包', null);
INSERT INTO `attribute_key` VALUES ('164', '7', '精品大牌', null);
INSERT INTO `attribute_key` VALUES ('165', '160', '钟表', null);
INSERT INTO `attribute_key` VALUES ('166', '160', '单鞋', null);
INSERT INTO `attribute_key` VALUES ('167', '160', '休闲鞋', null);
INSERT INTO `attribute_key` VALUES ('168', '160', '马丁靴', null);
INSERT INTO `attribute_key` VALUES ('169', '160', '雪地靴', null);
INSERT INTO `attribute_key` VALUES ('170', '160', '内增高', null);
INSERT INTO `attribute_key` VALUES ('171', '161', '单肩包', null);
INSERT INTO `attribute_key` VALUES ('172', '161', '手提包', null);
INSERT INTO `attribute_key` VALUES ('173', '161', '斜挎包', null);
INSERT INTO `attribute_key` VALUES ('174', '162', '男士钱包', null);
INSERT INTO `attribute_key` VALUES ('175', '162', '双肩包', null);
INSERT INTO `attribute_key` VALUES ('176', '162', '商务公文包', null);
INSERT INTO `attribute_key` VALUES ('177', '163', '拉杆箱', null);
INSERT INTO `attribute_key` VALUES ('178', '163', '拉杆包', null);
INSERT INTO `attribute_key` VALUES ('179', '163', '休闲运动包', null);
INSERT INTO `attribute_key` VALUES ('180', '164', '普拉达', null);
INSERT INTO `attribute_key` VALUES ('181', '164', '阿玛尼', null);
INSERT INTO `attribute_key` VALUES ('182', '164', '雷朋', null);
INSERT INTO `attribute_key` VALUES ('183', '0', '汽车/汽车用品', null);
INSERT INTO `attribute_key` VALUES ('184', '183', '汽车车型', null);
INSERT INTO `attribute_key` VALUES ('185', '183', '汽车价格', null);
INSERT INTO `attribute_key` VALUES ('186', '183', '汽车品牌', null);
INSERT INTO `attribute_key` VALUES ('187', '183', '汽车装饰', null);
INSERT INTO `attribute_key` VALUES ('188', '184', '中型车', null);
INSERT INTO `attribute_key` VALUES ('189', '184', '紧凑型车', null);
INSERT INTO `attribute_key` VALUES ('190', '184', '豪华车', null);
INSERT INTO `attribute_key` VALUES ('191', '184', '跑车', null);
INSERT INTO `attribute_key` VALUES ('192', '185', '5万以下', null);
INSERT INTO `attribute_key` VALUES ('193', '185', '15-25万', null);
INSERT INTO `attribute_key` VALUES ('194', '185', '40万以上', null);
INSERT INTO `attribute_key` VALUES ('195', '186', '宝马', null);
INSERT INTO `attribute_key` VALUES ('196', '186', '一汽-大众', null);
INSERT INTO `attribute_key` VALUES ('197', '186', '上汽大众', null);
INSERT INTO `attribute_key` VALUES ('198', '186', '五菱宝骏', null);
INSERT INTO `attribute_key` VALUES ('199', '187', '座垫座套', null);
INSERT INTO `attribute_key` VALUES ('200', '187', '头枕腰靠', null);
INSERT INTO `attribute_key` VALUES ('201', '187', '方向盘套', null);
INSERT INTO `attribute_key` VALUES ('202', '187', '车衣', null);
INSERT INTO `attribute_key` VALUES ('203', '0', '礼品鲜花/农资绿植', null);
INSERT INTO `attribute_key` VALUES ('204', '203', '火机烟具', null);
INSERT INTO `attribute_key` VALUES ('205', '203', '礼品', null);
INSERT INTO `attribute_key` VALUES ('206', '203', '种子', null);
INSERT INTO `attribute_key` VALUES ('207', '203', '农药', null);
INSERT INTO `attribute_key` VALUES ('208', '204', '电子烟', null);
INSERT INTO `attribute_key` VALUES ('209', '204', '烟油', null);
INSERT INTO `attribute_key` VALUES ('210', '205', '电子礼品', null);
INSERT INTO `attribute_key` VALUES ('211', '205', '工艺礼品', null);
INSERT INTO `attribute_key` VALUES ('212', '206', '瓜果类', null);
INSERT INTO `attribute_key` VALUES ('213', '206', '大田作物类', null);
INSERT INTO `attribute_key` VALUES ('214', '207', '杀菌剂', null);
INSERT INTO `attribute_key` VALUES ('215', '207', '除草剂', null);
INSERT INTO `attribute_key` VALUES ('216', '207', '植物生长调节剂', null);
INSERT INTO `attribute_key` VALUES ('217', '0', '测试', null);
