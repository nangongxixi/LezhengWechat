/*
Navicat MySQL Data Transfer

Source Server         : lezheng_inline
Source Server Version : 50547
Source Host           : 112.74.194.118:3306
Source Database       : boos_dev

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2017-08-01 11:41:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `boos_dingyuehao`
-- ----------------------------
DROP TABLE IF EXISTS `boos_dingyuehao`;
CREATE TABLE `boos_dingyuehao` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `name` varchar(50) NOT NULL COMMENT '名称',
  `num` int(11) NOT NULL DEFAULT '0' COMMENT '数量',
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of boos_dingyuehao
-- ----------------------------
INSERT INTO `boos_dingyuehao` VALUES ('1', 'A01', '0', '0');
INSERT INTO `boos_dingyuehao` VALUES ('2', 'A02', '0', '0');
INSERT INTO `boos_dingyuehao` VALUES ('3', 'A03', '0', '0');
INSERT INTO `boos_dingyuehao` VALUES ('4', 'A04', '0', '0');
INSERT INTO `boos_dingyuehao` VALUES ('5', 'A05', '0', '0');
INSERT INTO `boos_dingyuehao` VALUES ('6', 'A06', '0', '0');
INSERT INTO `boos_dingyuehao` VALUES ('7', 'A07', '0', '0');
INSERT INTO `boos_dingyuehao` VALUES ('8', 'A08', '0', '0');
INSERT INTO `boos_dingyuehao` VALUES ('9', 'A09', '0', '0');
INSERT INTO `boos_dingyuehao` VALUES ('10', 'A10', '0', '0');
INSERT INTO `boos_dingyuehao` VALUES ('11', 'A11', '0', '0');
INSERT INTO `boos_dingyuehao` VALUES ('12', 'A12', '0', '0');
INSERT INTO `boos_dingyuehao` VALUES ('13', 'A13', '0', '0');
INSERT INTO `boos_dingyuehao` VALUES ('14', 'A14', '0', '0');
INSERT INTO `boos_dingyuehao` VALUES ('15', 'A15', '0', '0');
INSERT INTO `boos_dingyuehao` VALUES ('16', 'A16', '0', '0');
INSERT INTO `boos_dingyuehao` VALUES ('17', 'A17', '0', '0');
INSERT INTO `boos_dingyuehao` VALUES ('18', 'A18', '0', '0');
INSERT INTO `boos_dingyuehao` VALUES ('19', 'A19', '0', '0');
INSERT INTO `boos_dingyuehao` VALUES ('20', 'A20', '0', '0');
INSERT INTO `boos_dingyuehao` VALUES ('21', 'B01', '0', '1');
INSERT INTO `boos_dingyuehao` VALUES ('22', 'B02', '0', '1');
INSERT INTO `boos_dingyuehao` VALUES ('23', 'B03', '0', '1');
INSERT INTO `boos_dingyuehao` VALUES ('24', 'B04', '0', '1');
INSERT INTO `boos_dingyuehao` VALUES ('25', 'B05', '0', '1');
INSERT INTO `boos_dingyuehao` VALUES ('26', 'B06', '0', '1');
INSERT INTO `boos_dingyuehao` VALUES ('27', 'B07', '0', '1');
INSERT INTO `boos_dingyuehao` VALUES ('28', 'B08', '0', '1');
INSERT INTO `boos_dingyuehao` VALUES ('29', 'B09', '0', '1');
INSERT INTO `boos_dingyuehao` VALUES ('30', 'B10', '0', '1');
INSERT INTO `boos_dingyuehao` VALUES ('31', 'B11', '0', '1');
INSERT INTO `boos_dingyuehao` VALUES ('32', 'B12', '0', '1');
INSERT INTO `boos_dingyuehao` VALUES ('33', 'B13', '0', '1');
INSERT INTO `boos_dingyuehao` VALUES ('34', 'B14', '0', '1');
INSERT INTO `boos_dingyuehao` VALUES ('35', 'B15', '0', '1');
INSERT INTO `boos_dingyuehao` VALUES ('36', 'B16', '0', '1');
INSERT INTO `boos_dingyuehao` VALUES ('37', 'B17', '0', '1');
INSERT INTO `boos_dingyuehao` VALUES ('38', 'B18', '0', '1');
INSERT INTO `boos_dingyuehao` VALUES ('39', 'B19', '0', '1');
INSERT INTO `boos_dingyuehao` VALUES ('40', 'B20', '0', '1');
