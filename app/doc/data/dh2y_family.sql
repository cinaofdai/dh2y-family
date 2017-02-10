/*
Navicat MySQL Data Transfer

Source Server         : MyPC
Source Server Version : 50523
Source Host           : localhost:3306
Source Database       : dh2y_family

Target Server Type    : MYSQL
Target Server Version : 50523
File Encoding         : 65001

Date: 2017-02-10 16:48:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `menber`
-- ----------------------------
DROP TABLE IF EXISTS `menber`;
CREATE TABLE `menber` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL COMMENT '家族id',
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1.在世,0.已故',
  `addtime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='成员表';

-- ----------------------------
-- Records of menber
-- ----------------------------

-- ----------------------------
-- Table structure for `menber_info`
-- ----------------------------
DROP TABLE IF EXISTS `menber_info`;
CREATE TABLE `menber_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `birthday` int(11) DEFAULT NULL COMMENT '阳历生日',
  `lunar_birthday` int(11) DEFAULT NULL COMMENT '农历生日',
  `sex` tinyint(4) NOT NULL COMMENT '1:男，0：女',
  `name` varchar(30) NOT NULL,
  `hometown` varchar(200) DEFAULT NULL COMMENT ' 籍贯',
  `residence` varchar(200) DEFAULT NULL COMMENT '目前居住地',
  `contact_way` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0:没有,1:phone,2:qq,3:email',
  `phone` varchar(12) DEFAULT NULL,
  `qq` varchar(14) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `introduce` text COMMENT '生平简介',
  `updatetime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='成员信息表';

-- ----------------------------
-- Records of menber_info
-- ----------------------------

-- ----------------------------
-- Table structure for `menber_relation`
-- ----------------------------
DROP TABLE IF EXISTS `menber_relation`;
CREATE TABLE `menber_relation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL COMMENT '父亲节点',
  `sex` tinyint(4) NOT NULL COMMENT '1:男,0:女',
  `mid` int(11) DEFAULT NULL,
  `sid` int(11) NOT NULL COMMENT '家族',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='家族成员关系表';

-- ----------------------------
-- Records of menber_relation
-- ----------------------------

-- ----------------------------
-- Table structure for `shaikh`
-- ----------------------------
DROP TABLE IF EXISTS `shaikh`;
CREATE TABLE `shaikh` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT '用户id',
  `sucode` char(10) NOT NULL COMMENT '家族码',
  `insignia` varchar(200) DEFAULT NULL COMMENT '家族徽章',
  `familynames` varchar(30) NOT NULL COMMENT '家族名称',
  `shaikhname` varchar(30) NOT NULL COMMENT '族长账户',
  `password` varchar(40) NOT NULL,
  `addtime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='家族表';

-- ----------------------------
-- Records of shaikh
-- ----------------------------
