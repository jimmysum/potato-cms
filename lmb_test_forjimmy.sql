/*
Navicat MySQL Data Transfer

Source Server         : 67
Source Server Version : 50531
Source Host           : 192.168.1.67:3306
Source Database       : lmb_test_forjimmy

Target Server Type    : MYSQL
Target Server Version : 50531
File Encoding         : 65001

Date: 2015-11-04 20:15:56
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ci_access
-- ----------------------------
DROP TABLE IF EXISTS `ci_access`;
CREATE TABLE `ci_access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  KEY `groupId` (`role_id`) USING BTREE,
  KEY `nodeId` (`node_id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_access
-- ----------------------------
INSERT INTO `ci_access` VALUES ('1', '64');
INSERT INTO `ci_access` VALUES ('1', '63');
INSERT INTO `ci_access` VALUES ('1', '62');
INSERT INTO `ci_access` VALUES ('1', '61');
INSERT INTO `ci_access` VALUES ('1', '60');
INSERT INTO `ci_access` VALUES ('1', '58');
INSERT INTO `ci_access` VALUES ('1', '57');
INSERT INTO `ci_access` VALUES ('1', '54');
INSERT INTO `ci_access` VALUES ('1', '87');
INSERT INTO `ci_access` VALUES ('1', '88');
INSERT INTO `ci_access` VALUES ('1', '89');
INSERT INTO `ci_access` VALUES ('1', '86');
INSERT INTO `ci_access` VALUES ('1', '85');
INSERT INTO `ci_access` VALUES ('1', '84');
INSERT INTO `ci_access` VALUES ('1', '83');
INSERT INTO `ci_access` VALUES ('1', '82');
INSERT INTO `ci_access` VALUES ('1', '73');
INSERT INTO `ci_access` VALUES ('1', '72');
INSERT INTO `ci_access` VALUES ('1', '71');
INSERT INTO `ci_access` VALUES ('1', '70');
INSERT INTO `ci_access` VALUES ('1', '69');
INSERT INTO `ci_access` VALUES ('1', '68');
INSERT INTO `ci_access` VALUES ('1', '30');
INSERT INTO `ci_access` VALUES ('1', '29');
INSERT INTO `ci_access` VALUES ('1', '28');
INSERT INTO `ci_access` VALUES ('1', '27');
INSERT INTO `ci_access` VALUES ('1', '26');
INSERT INTO `ci_access` VALUES ('1', '25');
INSERT INTO `ci_access` VALUES ('1', '24');
INSERT INTO `ci_access` VALUES ('1', '23');
INSERT INTO `ci_access` VALUES ('1', '22');
INSERT INTO `ci_access` VALUES ('1', '21');
INSERT INTO `ci_access` VALUES ('1', '20');
INSERT INTO `ci_access` VALUES ('1', '17');
INSERT INTO `ci_access` VALUES ('1', '16');
INSERT INTO `ci_access` VALUES ('1', '15');
INSERT INTO `ci_access` VALUES ('1', '14');
INSERT INTO `ci_access` VALUES ('1', '13');
INSERT INTO `ci_access` VALUES ('1', '18');
INSERT INTO `ci_access` VALUES ('1', '12');
INSERT INTO `ci_access` VALUES ('1', '11');
INSERT INTO `ci_access` VALUES ('1', '10');
INSERT INTO `ci_access` VALUES ('1', '9');
INSERT INTO `ci_access` VALUES ('1', '8');
INSERT INTO `ci_access` VALUES ('1', '7');
INSERT INTO `ci_access` VALUES ('1', '5');
INSERT INTO `ci_access` VALUES ('1', '4');
INSERT INTO `ci_access` VALUES ('2', '67');
INSERT INTO `ci_access` VALUES ('2', '66');
INSERT INTO `ci_access` VALUES ('2', '65');
INSERT INTO `ci_access` VALUES ('2', '64');
INSERT INTO `ci_access` VALUES ('2', '63');
INSERT INTO `ci_access` VALUES ('2', '62');
INSERT INTO `ci_access` VALUES ('2', '61');
INSERT INTO `ci_access` VALUES ('2', '60');
INSERT INTO `ci_access` VALUES ('2', '58');
INSERT INTO `ci_access` VALUES ('2', '57');
INSERT INTO `ci_access` VALUES ('2', '54');
INSERT INTO `ci_access` VALUES ('2', '73');
INSERT INTO `ci_access` VALUES ('2', '72');
INSERT INTO `ci_access` VALUES ('2', '71');
INSERT INTO `ci_access` VALUES ('2', '70');
INSERT INTO `ci_access` VALUES ('2', '69');
INSERT INTO `ci_access` VALUES ('2', '68');
INSERT INTO `ci_access` VALUES ('2', '30');
INSERT INTO `ci_access` VALUES ('2', '29');
INSERT INTO `ci_access` VALUES ('2', '28');
INSERT INTO `ci_access` VALUES ('2', '27');
INSERT INTO `ci_access` VALUES ('2', '26');
INSERT INTO `ci_access` VALUES ('2', '25');
INSERT INTO `ci_access` VALUES ('2', '24');
INSERT INTO `ci_access` VALUES ('2', '23');
INSERT INTO `ci_access` VALUES ('2', '22');
INSERT INTO `ci_access` VALUES ('2', '21');
INSERT INTO `ci_access` VALUES ('2', '20');
INSERT INTO `ci_access` VALUES ('2', '53');
INSERT INTO `ci_access` VALUES ('2', '52');
INSERT INTO `ci_access` VALUES ('1', '3');
INSERT INTO `ci_access` VALUES ('1', '2');
INSERT INTO `ci_access` VALUES ('1', '1');
INSERT INTO `ci_access` VALUES ('1', '53');
INSERT INTO `ci_access` VALUES ('1', '52');
INSERT INTO `ci_access` VALUES ('1', '51');
INSERT INTO `ci_access` VALUES ('1', '50');
INSERT INTO `ci_access` VALUES ('1', '49');
INSERT INTO `ci_access` VALUES ('1', '45');
INSERT INTO `ci_access` VALUES ('1', '44');
INSERT INTO `ci_access` VALUES ('1', '43');
INSERT INTO `ci_access` VALUES ('1', '42');
INSERT INTO `ci_access` VALUES ('1', '48');
INSERT INTO `ci_access` VALUES ('1', '47');
INSERT INTO `ci_access` VALUES ('1', '46');
INSERT INTO `ci_access` VALUES ('1', '40');
INSERT INTO `ci_access` VALUES ('1', '39');
INSERT INTO `ci_access` VALUES ('1', '38');
INSERT INTO `ci_access` VALUES ('1', '37');
INSERT INTO `ci_access` VALUES ('1', '36');
INSERT INTO `ci_access` VALUES ('1', '35');
INSERT INTO `ci_access` VALUES ('1', '34');
INSERT INTO `ci_access` VALUES ('1', '33');
INSERT INTO `ci_access` VALUES ('2', '51');
INSERT INTO `ci_access` VALUES ('2', '50');
INSERT INTO `ci_access` VALUES ('2', '49');
INSERT INTO `ci_access` VALUES ('2', '45');
INSERT INTO `ci_access` VALUES ('2', '44');
INSERT INTO `ci_access` VALUES ('2', '43');
INSERT INTO `ci_access` VALUES ('2', '42');
INSERT INTO `ci_access` VALUES ('2', '48');
INSERT INTO `ci_access` VALUES ('2', '47');
INSERT INTO `ci_access` VALUES ('2', '46');
INSERT INTO `ci_access` VALUES ('2', '40');
INSERT INTO `ci_access` VALUES ('2', '39');
INSERT INTO `ci_access` VALUES ('2', '38');
INSERT INTO `ci_access` VALUES ('2', '37');
INSERT INTO `ci_access` VALUES ('2', '36');
INSERT INTO `ci_access` VALUES ('2', '35');
INSERT INTO `ci_access` VALUES ('2', '34');
INSERT INTO `ci_access` VALUES ('2', '33');
INSERT INTO `ci_access` VALUES ('2', '32');
INSERT INTO `ci_access` VALUES ('2', '31');
INSERT INTO `ci_access` VALUES ('2', '19');
INSERT INTO `ci_access` VALUES ('7', '67');
INSERT INTO `ci_access` VALUES ('7', '66');
INSERT INTO `ci_access` VALUES ('7', '65');
INSERT INTO `ci_access` VALUES ('7', '64');
INSERT INTO `ci_access` VALUES ('7', '63');
INSERT INTO `ci_access` VALUES ('7', '62');
INSERT INTO `ci_access` VALUES ('7', '61');
INSERT INTO `ci_access` VALUES ('7', '54');
INSERT INTO `ci_access` VALUES ('7', '73');
INSERT INTO `ci_access` VALUES ('7', '72');
INSERT INTO `ci_access` VALUES ('7', '71');
INSERT INTO `ci_access` VALUES ('7', '70');
INSERT INTO `ci_access` VALUES ('7', '69');
INSERT INTO `ci_access` VALUES ('7', '68');
INSERT INTO `ci_access` VALUES ('7', '30');
INSERT INTO `ci_access` VALUES ('7', '29');
INSERT INTO `ci_access` VALUES ('7', '28');
INSERT INTO `ci_access` VALUES ('7', '27');
INSERT INTO `ci_access` VALUES ('7', '26');
INSERT INTO `ci_access` VALUES ('7', '25');
INSERT INTO `ci_access` VALUES ('7', '24');
INSERT INTO `ci_access` VALUES ('7', '23');
INSERT INTO `ci_access` VALUES ('7', '22');
INSERT INTO `ci_access` VALUES ('7', '21');
INSERT INTO `ci_access` VALUES ('7', '20');
INSERT INTO `ci_access` VALUES ('7', '17');
INSERT INTO `ci_access` VALUES ('7', '16');
INSERT INTO `ci_access` VALUES ('7', '15');
INSERT INTO `ci_access` VALUES ('7', '14');
INSERT INTO `ci_access` VALUES ('7', '13');
INSERT INTO `ci_access` VALUES ('7', '53');
INSERT INTO `ci_access` VALUES ('7', '52');
INSERT INTO `ci_access` VALUES ('7', '51');
INSERT INTO `ci_access` VALUES ('7', '50');
INSERT INTO `ci_access` VALUES ('7', '49');
INSERT INTO `ci_access` VALUES ('7', '45');
INSERT INTO `ci_access` VALUES ('7', '44');
INSERT INTO `ci_access` VALUES ('7', '43');
INSERT INTO `ci_access` VALUES ('7', '42');
INSERT INTO `ci_access` VALUES ('7', '48');
INSERT INTO `ci_access` VALUES ('7', '47');
INSERT INTO `ci_access` VALUES ('7', '46');
INSERT INTO `ci_access` VALUES ('7', '40');
INSERT INTO `ci_access` VALUES ('7', '39');
INSERT INTO `ci_access` VALUES ('7', '38');
INSERT INTO `ci_access` VALUES ('7', '37');
INSERT INTO `ci_access` VALUES ('7', '36');
INSERT INTO `ci_access` VALUES ('7', '35');
INSERT INTO `ci_access` VALUES ('7', '34');
INSERT INTO `ci_access` VALUES ('7', '33');
INSERT INTO `ci_access` VALUES ('7', '32');
INSERT INTO `ci_access` VALUES ('7', '31');
INSERT INTO `ci_access` VALUES ('7', '19');
INSERT INTO `ci_access` VALUES ('1', '32');
INSERT INTO `ci_access` VALUES ('1', '31');
INSERT INTO `ci_access` VALUES ('1', '19');
INSERT INTO `ci_access` VALUES ('1', '65');
INSERT INTO `ci_access` VALUES ('1', '55');
INSERT INTO `ci_access` VALUES ('1', '56');
INSERT INTO `ci_access` VALUES ('1', '66');
INSERT INTO `ci_access` VALUES ('1', '67');

-- ----------------------------
-- Table structure for ci_ad
-- ----------------------------
DROP TABLE IF EXISTS `ci_ad`;
CREATE TABLE `ci_ad` (
  `ad_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '广告id',
  `ad_name` varchar(255) NOT NULL,
  `ad_content` text,
  `status` int(2) NOT NULL DEFAULT '1' COMMENT '状态，1显示，0不显示',
  `cate_id` int(11) DEFAULT NULL COMMENT '广告位id',
  `sort` int(11) DEFAULT '50' COMMENT '排序',
  `time` int(11) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`ad_id`),
  KEY `ad_name` (`ad_name`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_ad
-- ----------------------------
INSERT INTO `ci_ad` VALUES ('1', 'banner', 'banner', '1', '1', '50', '1445655596');

-- ----------------------------
-- Table structure for ci_admin
-- ----------------------------
DROP TABLE IF EXISTS `ci_admin`;
CREATE TABLE `ci_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '后台管理用户',
  `username` varchar(30) NOT NULL,
  `password` char(32) NOT NULL,
  `nickname` varchar(32) DEFAULT NULL COMMENT '使用者名称',
  `logintime` int(11) DEFAULT NULL COMMENT '登录时间',
  `loginip` varchar(20) DEFAULT NULL COMMENT '登录ip',
  `sort` int(1) DEFAULT '50',
  `lock` tinyint(2) DEFAULT '1' COMMENT '锁定状态1锁定，0：未锁定',
  `time` int(11) DEFAULT NULL COMMENT '创建时间',
  `role_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_admin
-- ----------------------------
INSERT INTO `ci_admin` VALUES ('1', 'admin', 'e10adc3949ba59abbe56e057f20f883e', null, '1444376761', '10.0.2.2', '0', '1', '1437654152', '1');
INSERT INTO `ci_admin` VALUES ('3', 'test', 'e10adc3949ba59abbe56e057f20f883e', 'test', null, null, '0', '1', '1446464137', '2');

-- ----------------------------
-- Table structure for ci_adpos
-- ----------------------------
DROP TABLE IF EXISTS `ci_adpos`;
CREATE TABLE `ci_adpos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '广告位名称',
  `sort` int(11) DEFAULT '50' COMMENT '排序',
  `time` int(11) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_adpos
-- ----------------------------
INSERT INTO `ci_adpos` VALUES ('1', 'banner', '50', '1445655569');

-- ----------------------------
-- Table structure for ci_article
-- ----------------------------
DROP TABLE IF EXISTS `ci_article`;
CREATE TABLE `ci_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '分类id',
  `cate_id` int(11) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL COMMENT '文章标题',
  `desc` varchar(200) DEFAULT NULL COMMENT '描述',
  `content` longtext COMMENT '文章内容',
  `time` int(11) DEFAULT NULL COMMENT '创建时间',
  `comment` tinyint(2) DEFAULT '0' COMMENT '是否评论',
  `del` int(11) DEFAULT '0' COMMENT '0:正常；1：删除',
  `recommend` tinyint(2) DEFAULT '0' COMMENT '是否推荐',
  `top` tinyint(2) DEFAULT '0' COMMENT '是否置顶',
  `hot` tinyint(2) DEFAULT '0' COMMENT '热门',
  `audit` tinyint(2) DEFAULT '1' COMMENT '审核情况',
  `sort` int(11) DEFAULT '50',
  `userid` int(11) DEFAULT NULL COMMENT '用户id',
  `seo_title` varchar(100) DEFAULT NULL,
  `seo_keyword` varchar(200) DEFAULT NULL,
  `seo_desc` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_article
-- ----------------------------
INSERT INTO `ci_article` VALUES ('1', '2', '测试', '测试', 'desc', '1444376648', null, '0', '1', '1', '0', '1', '50', '1', null, null, null);
INSERT INTO `ci_article` VALUES ('2', '8', '测试测试', '测试测试', 'desc', '1444910961', null, '0', '0', '0', '0', '1', '50', '1', null, null, null);
INSERT INTO `ci_article` VALUES ('4', '3', 'php', 'php', '在荷兰，一般一岁以上孩子就开始喝鲜奶。在大家对国产鲜奶没有信心的情况下，以这款奶粉代替鲜奶是很好的选择，因为它可还原成香浓的全脂牛奶。加上荷兰产奶粉，您可以有信心，为家人挑选了一款每个人都可以幸福享用的日常饮品，同时也是馈赠亲友的佳品！购买需上传收货人清晰的身份证正反面图片！ 图片日期仅供参考，具体日期请以实物为准。 【特别提示】订单提交后，非商品质量问题，概不退换！敬请谅解！', '1444987951', '0', '0', '0', '0', '1', '1', '0', '1', '', '', ' ');
INSERT INTO `ci_article` VALUES ('5', '2', 'php', 'php', '在荷兰，一般一岁以上孩子就开始喝鲜奶。在大家对国产鲜奶没有信心的情况下，以这款奶粉代替鲜奶是很好的选择，因为它可还原成香浓的全脂牛奶。加上荷兰产奶粉，您可以有信心，为家人挑选了一款每个人都可以幸福享用的日常饮品，同时也是馈赠亲友的佳品！购买需上传收货人清晰的身份证正反面图片！ 图片日期仅供参考，具体日期请以实物为准。 【特别提示】订单提交后，非商品质量问题，概不退换！敬请谅解！', '1444988117', '0', '0', '0', '1', '0', '1', '0', '1', '', '', ' ');
INSERT INTO `ci_article` VALUES ('6', '2', 'okkk', 'okkk', '在荷兰，一般一岁以上孩子就开始喝鲜奶。在大家对国产鲜奶没有信心的情况下，以这款奶粉代替鲜奶是很好的选择，因为它可还原成香浓的全脂牛奶。加上荷兰产奶粉，您可以有信心，为家人挑选了一款每个人都可以幸福享用的日常饮品，同时也是馈赠亲友的佳品！购买需上传收货人清晰的身份证正反面图片！ 图片日期仅供参考，具体日期请以实物为准。 【特别提示】订单提交后，非商品质量问题，概不退换！敬请谅解！', '1444988400', '0', '0', '1', '0', '0', '1', '0', '1', 'dd', 'dd', ' dd');
INSERT INTO `ci_article` VALUES ('7', '9', 'fdfd', 'dfdf', '在荷兰，一般一岁以上孩子就开始喝鲜奶。在大家对国产鲜奶没有信心的情况下，以这款奶粉代替鲜奶是很好的选择，因为它可还原成香浓的全脂牛奶。加上荷兰产奶粉，您可以有信心，为家人挑选了一款每个人都可以幸福享用的日常饮品，同时也是馈赠亲友的佳品！购买需上传收货人清晰的身份证正反面图片！ 图片日期仅供参考，具体日期请以实物为准。 【特别提示】订单提交后，非商品质量问题，概不退换！敬请谅解！', '1444988554', '0', '0', '1', '1', '1', '1', '11', '1', '', '', ' ');
INSERT INTO `ci_article` VALUES ('8', '9', 'fdfddd', 'dfdf', '在荷兰，一般一岁以上孩子就开始喝鲜奶。在大家对国产鲜奶没有信心的情况下，以这款奶粉代替鲜奶是很好的选择，因为它可还原成香浓的全脂牛奶。加上荷兰产奶粉，您可以有信心，为家人挑选了一款每个人都可以幸福享用的日常饮品，同时也是馈赠亲友的佳品！购买需上传收货人清晰的身份证正反面图片！ 图片日期仅供参考，具体日期请以实物为准。 【特别提示】订单提交后，非商品质量问题，概不退换！敬请谅解！', '1444995624', '0', '1', '0', '0', '0', '1', '11', '1', '', '', '  ');
INSERT INTO `ci_article` VALUES ('9', '2', 'fdfddd', 'dfdf', '在荷兰，一般一岁以上孩子就开始喝鲜奶。在大家对国产鲜奶没有信心的情况下，以这款奶粉代替鲜奶是很好的选择，因为它可还原成香浓的全脂牛奶。加上荷兰产奶粉，您可以有信心，为家人挑选了一款每个人都可以幸福享用的日常饮品，同时也是馈赠亲友的佳品！购买需上传收货人清晰的身份证正反面图片！ 图片日期仅供参考，具体日期请以实物为准。 【特别提示】订单提交后，非商品质量问题，概不退换！敬请谅解！', '1444995639', '0', '0', '0', '0', '0', '1', '11', '1', '', '', '   ');
INSERT INTO `ci_article` VALUES ('10', '2', '松哥', '改单费', '到公司电饭锅手动改收到饭刚收到刚刚改是梵蒂冈的规范刚收到刚收到到分公司到公司到公司电饭锅', '1445236536', '0', '0', '1', '1', '1', '1', '20', '1', '个', '个', '个');

-- ----------------------------
-- Table structure for ci_cate
-- ----------------------------
DROP TABLE IF EXISTS `ci_cate`;
CREATE TABLE `ci_cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `pid` int(11) DEFAULT NULL,
  `cate` varchar(200) DEFAULT NULL COMMENT '分类名称',
  `status` tinyint(2) DEFAULT '1',
  `sort` int(11) DEFAULT '50',
  `time` int(11) DEFAULT NULL,
  `seo_title` varchar(100) DEFAULT NULL,
  `seo_keyword` varchar(200) DEFAULT NULL,
  `seo_desc` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_cate
-- ----------------------------
INSERT INTO `ci_cate` VALUES ('1', '0', '博客', '1', '50', '1444811999', '', '', ' ');
INSERT INTO `ci_cate` VALUES ('2', '1', 'PHP', '1', '50', '1444811726', '', '', ' ');
INSERT INTO `ci_cate` VALUES ('3', '1', 'MySQL', '1', '50', '1444812004', '', '', ' ');
INSERT INTO `ci_cate` VALUES ('4', '0', '个人介绍', '1', '50', '1444812009', '', '', ' ');
INSERT INTO `ci_cate` VALUES ('6', '1', '博客2', '1', '50', '1444726171', '', '', '');
INSERT INTO `ci_cate` VALUES ('7', '1', '博客1', '1', '0', '1444813804', '', '', ' ');
INSERT INTO `ci_cate` VALUES ('8', '1', '博客3', '1', '0', '1444813895', '', '', ' ');
INSERT INTO `ci_cate` VALUES ('9', '2', '11', '0', '50', '1444989667', 'fff', 'fff', '   fff');
INSERT INTO `ci_cate` VALUES ('10', '2', '好的', '1', '0', '1445657783', '', '', ' ');

-- ----------------------------
-- Table structure for ci_comments
-- ----------------------------
DROP TABLE IF EXISTS `ci_comments`;
CREATE TABLE `ci_comments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) DEFAULT NULL COMMENT '图片地址',
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '发表评论的用户id',
  `full_name` varchar(50) DEFAULT NULL COMMENT '评论者昵称',
  `email` varchar(255) DEFAULT NULL COMMENT '评论者邮箱',
  `createtime` int(11) NOT NULL COMMENT '添加时间',
  `content` text NOT NULL COMMENT '评论内容',
  `parentid` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '被回复的评论id',
  `aid` int(11) DEFAULT NULL COMMENT '评论内容id',
  PRIMARY KEY (`id`),
  KEY `comment_parent` (`parentid`) USING BTREE,
  KEY `createtime` (`createtime`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_comments
-- ----------------------------
INSERT INTO `ci_comments` VALUES ('1', '1', '1', '1', '1', '1', '1', '0', '1');

-- ----------------------------
-- Table structure for ci_links
-- ----------------------------
DROP TABLE IF EXISTS `ci_links`;
CREATE TABLE `ci_links` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL COMMENT '友情链接地址',
  `name` varchar(255) NOT NULL COMMENT '友情链接名称',
  `image` varchar(255) DEFAULT NULL COMMENT '友情链接图标',
  `desc` text NOT NULL COMMENT '友情链接描述',
  `status` int(2) NOT NULL DEFAULT '1' COMMENT '1:显示；0：不显示',
  `sort` int(10) NOT NULL DEFAULT '50' COMMENT '排序',
  `time` int(11) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`),
  KEY `link_visible` (`status`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_links
-- ----------------------------
INSERT INTO `ci_links` VALUES ('1', 'www.baidu.com', '订单', '/Uploads/link/20151024/20151024123742.png', '订单', '1', '50', '1445661462');
INSERT INTO `ci_links` VALUES ('2', 'www.baidu.com', '测试', null, '测试', '1', '0', '1445660544');
INSERT INTO `ci_links` VALUES ('3', 'www.baidu.com', '导航1', null, '', '1', '0', '1445660678');
INSERT INTO `ci_links` VALUES ('4', 'www.baidu.com', 'banner', null, 'dddd', '1', '50', '1445661110');
INSERT INTO `ci_links` VALUES ('5', 'www.baidu.com', 'PHP', null, 'dddd', '1', '50', '1445661099');
INSERT INTO `ci_links` VALUES ('7', 'www.baidu.com', '谔谔', '/public/upload/image/20151024/20151024135448_80459.png', '谔谔', '1', '50', '1445666191');

-- ----------------------------
-- Table structure for ci_nav
-- ----------------------------
DROP TABLE IF EXISTS `ci_nav`;
CREATE TABLE `ci_nav` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1' COMMENT '1:显示2：不显示',
  `sort` int(6) DEFAULT '50',
  `time` int(11) DEFAULT NULL COMMENT '创建时间',
  `name` varchar(255) DEFAULT NULL COMMENT '名称',
  `seo_title` varchar(100) DEFAULT NULL COMMENT 'seo标题',
  `seo_keyword` varchar(200) DEFAULT NULL COMMENT 'seo关键词',
  `seo_desc` text COMMENT 'seo描述',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_nav
-- ----------------------------
INSERT INTO `ci_nav` VALUES ('1', '0', '1', '50', '1444376812', '导航1', null, null, null);
INSERT INTO `ci_nav` VALUES ('2', '1', '0', '50', '1445656965', '导航11', null, null, null);
INSERT INTO `ci_nav` VALUES ('3', '1', '1', '50', '1445658634', '导航111', '订单', '订单', '订单');
INSERT INTO `ci_nav` VALUES ('4', '2', '1', '0', '1445658583', '好的', '', '', '  ');

-- ----------------------------
-- Table structure for ci_node
-- ----------------------------
DROP TABLE IF EXISTS `ci_node`;
CREATE TABLE `ci_node` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT COMMENT '权限ID',
  `name` varchar(20) NOT NULL COMMENT '权限ActionName',
  `title` varchar(50) NOT NULL COMMENT '权限RealName',
  `status` tinyint(2) NOT NULL DEFAULT '1' COMMENT '开启状态（0、关闭；1、开启）',
  `sort` smallint(6) unsigned DEFAULT NULL COMMENT '排列顺序',
  `pid` smallint(6) unsigned NOT NULL COMMENT '上级ID',
  `level` tinyint(1) unsigned NOT NULL COMMENT '层级（1、控制器；2、方法）',
  `type` tinyint(2) NOT NULL DEFAULT '1' COMMENT '是否设为菜单（0、不是菜单；1、设为菜单）',
  `icon` varchar(255) DEFAULT NULL COMMENT '菜单图标',
  `time` int(11) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`),
  KEY `level` (`level`) USING BTREE,
  KEY `pid` (`pid`) USING BTREE,
  KEY `status` (`status`) USING BTREE,
  KEY `name` (`name`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=91 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_node
-- ----------------------------
INSERT INTO `ci_node` VALUES ('1', 'Default', '权限管理', '1', '3', '0', '0', '1', 'list', '1439538993');
INSERT INTO `ci_node` VALUES ('2', 'Admin', '管理员管理', '1', '1', '1', '0', '1', '', '1439305985');
INSERT INTO `ci_node` VALUES ('3', 'index', '列表', '1', '1', '2', '0', '1', '', '1439391276');
INSERT INTO `ci_node` VALUES ('4', 'add', '增加', '1', '2', '2', '0', '1', '', '1439303862');
INSERT INTO `ci_node` VALUES ('5', 'edit', '修改', '1', '3', '2', '0', '1', '', '1439305927');
INSERT INTO `ci_node` VALUES ('7', 'del', '删除', '1', '4', '2', '0', '1', '', '1439305947');
INSERT INTO `ci_node` VALUES ('8', 'Role', '角色管理', '1', '2', '1', '0', '1', '', '1439305973');
INSERT INTO `ci_node` VALUES ('9', 'index', '列表', '1', '1', '8', '0', '1', '', '1439306007');
INSERT INTO `ci_node` VALUES ('10', 'add', '增加', '1', '2', '8', '0', '1', '', '1439306028');
INSERT INTO `ci_node` VALUES ('11', 'edit', '修改', '1', '3', '8', '0', '1', '', '1439306043');
INSERT INTO `ci_node` VALUES ('12', 'del', '删除', '1', '4', '8', '0', '1', '', '1439306061');
INSERT INTO `ci_node` VALUES ('13', 'Node', '节点管理', '1', '3', '1', '0', '1', '', '1439306091');
INSERT INTO `ci_node` VALUES ('14', 'index', '列表', '1', '1', '13', '0', '1', '', '1439306160');
INSERT INTO `ci_node` VALUES ('15', 'add', '增加', '1', '2', '13', '0', '1', '', '1439306128');
INSERT INTO `ci_node` VALUES ('16', 'edit', '修改', '1', '3', '13', '0', '1', '', '1439306150');
INSERT INTO `ci_node` VALUES ('17', 'del', '删除', '1', '4', '13', '0', '1', '', '1439306179');
INSERT INTO `ci_node` VALUES ('18', 'rbac', '分配权限', '1', '50', '8', '0', '1', '', '1439391534');
INSERT INTO `ci_node` VALUES ('19', 'Default', '内容管理', '1', '1', '0', '0', '1', 'tasks', '1439431735');
INSERT INTO `ci_node` VALUES ('20', 'Default', '广告管理', '1', '4', '0', '0', '1', 'comments', '1439539009');
INSERT INTO `ci_node` VALUES ('21', 'Ad', '广告管理', '1', '1', '20', '0', '1', '', '1439393125');
INSERT INTO `ci_node` VALUES ('22', 'index', '列表', '1', '1', '21', '0', '1', '', '1439393150');
INSERT INTO `ci_node` VALUES ('23', 'add', '增加', '1', '2', '21', '0', '1', '', '1439393166');
INSERT INTO `ci_node` VALUES ('24', 'edit', '修改', '1', '3', '21', '0', '1', '', '1439393184');
INSERT INTO `ci_node` VALUES ('25', 'del', '删除', '1', '4', '21', '0', '1', '', '1439393205');
INSERT INTO `ci_node` VALUES ('26', 'AdPos', '广告位', '1', '4', '20', '0', '1', 'comment-alt', '1439393264');
INSERT INTO `ci_node` VALUES ('27', 'index', '列表', '1', '1', '26', '0', '1', '', '1439393280');
INSERT INTO `ci_node` VALUES ('28', 'add', '增加', '1', '2', '26', '0', '1', '', '1439393295');
INSERT INTO `ci_node` VALUES ('29', 'edit', '修改', '1', '3', '26', '0', '1', '', '1439393430');
INSERT INTO `ci_node` VALUES ('30', 'del', '删除', '1', '4', '26', '0', '1', '', '1439393446');
INSERT INTO `ci_node` VALUES ('31', 'Cate', '分类管理', '1', '0', '19', '0', '1', '', '1439431054');
INSERT INTO `ci_node` VALUES ('32', 'index', '列表', '1', '1', '31', '0', '1', '', '1439393742');
INSERT INTO `ci_node` VALUES ('33', 'add', '增加', '1', '2', '31', '0', '1', '', '1439393757');
INSERT INTO `ci_node` VALUES ('34', 'edit', '修改', '1', '3', '31', '0', '1', '', '1439393778');
INSERT INTO `ci_node` VALUES ('35', 'del', '删除', '1', '4', '31', '0', '1', '', '1439393793');
INSERT INTO `ci_node` VALUES ('36', 'Article', '文章管理', '1', '1', '19', '0', '1', '', '1439431063');
INSERT INTO `ci_node` VALUES ('37', 'index', '列表', '1', '1', '36', '0', '1', '', '1439430168');
INSERT INTO `ci_node` VALUES ('38', 'add', '增加', '1', '2', '36', '0', '1', '', '1439430207');
INSERT INTO `ci_node` VALUES ('39', 'edit', '修改', '1', '3', '36', '0', '1', '', '1439430247');
INSERT INTO `ci_node` VALUES ('40', 'del', '删除', '1', '4', '36', '0', '1', '', '1439430321');
INSERT INTO `ci_node` VALUES ('42', 'Recycle', '回收站', '1', '50', '19', '0', '1', '', '1439430429');
INSERT INTO `ci_node` VALUES ('43', 'index', '列表', '1', '1', '42', '0', '1', '', '1439430449');
INSERT INTO `ci_node` VALUES ('44', 'restore', '恢复', '1', '2', '42', '0', '1', '', '1439430547');
INSERT INTO `ci_node` VALUES ('45', 'del', '清空', '1', '3', '42', '0', '1', '', '1439430581');
INSERT INTO `ci_node` VALUES ('46', 'Comment', '评论管理', '1', '2', '19', '0', '1', '', '1439431071');
INSERT INTO `ci_node` VALUES ('47', 'index', '列表', '1', '1', '46', '0', '1', '', '1439431110');
INSERT INTO `ci_node` VALUES ('48', 'del', '删除', '1', '2', '46', '0', '1', '', '1439431128');
INSERT INTO `ci_node` VALUES ('49', 'Default', '用户管理', '1', '2', '0', '0', '1', 'user', '1439431724');
INSERT INTO `ci_node` VALUES ('50', 'User', '用户管理', '1', '1', '49', '0', '1', '', '1439431474');
INSERT INTO `ci_node` VALUES ('51', 'index', '列表', '1', '1', '50', '0', '1', '', '1439431492');
INSERT INTO `ci_node` VALUES ('52', 'shield', '拉黑', '1', '2', '50', '0', '1', '', '1439431533');
INSERT INTO `ci_node` VALUES ('53', 'enable', '启用', '1', '3', '50', '0', '1', '', '1439431560');
INSERT INTO `ci_node` VALUES ('54', 'Default', '基本设置', '1', '10', '0', '0', '1', 'cogs', '1439431606');
INSERT INTO `ci_node` VALUES ('55', 'Setting', '网站设置', '1', '4', '54', '0', '1', '', '1439436673');
INSERT INTO `ci_node` VALUES ('56', 'index', '显示', '1', '1', '55', '0', '1', '', '1439436712');
INSERT INTO `ci_node` VALUES ('57', 'UserInfo', '个人信息', '1', '1', '54', '0', '1', '', '1439437111');
INSERT INTO `ci_node` VALUES ('58', 'index', '修改昵称', '1', '1', '57', '0', '1', '', '1439436858');
INSERT INTO `ci_node` VALUES ('60', 'pass', '修改密码', '1', '2', '57', '0', '1', '', '1439436887');
INSERT INTO `ci_node` VALUES ('61', 'Link', '友情链接', '1', '3', '54', '0', '1', '', '1439436922');
INSERT INTO `ci_node` VALUES ('62', 'index', '列表', '1', '1', '61', '0', '1', '', '1439436945');
INSERT INTO `ci_node` VALUES ('63', 'add', '增加', '1', '2', '61', '0', '1', '', '1439436971');
INSERT INTO `ci_node` VALUES ('64', 'edit', '修改', '1', '3', '61', '0', '1', '', '1439436996');
INSERT INTO `ci_node` VALUES ('65', 'del', '删除', '1', '4', '61', '0', '1', '', '1439437014');
INSERT INTO `ci_node` VALUES ('66', 'Cahe', '缓存管理', '1', '5', '54', '0', '1', '', '1439437059');
INSERT INTO `ci_node` VALUES ('67', 'index', '更新缓存', '1', '1', '66', '0', '1', '', '1439437092');
INSERT INTO `ci_node` VALUES ('68', 'Default', '导航管理', '1', '5', '0', '0', '1', 'group', '1439539027');
INSERT INTO `ci_node` VALUES ('69', 'Nav', '导航栏管理', '1', '1', '68', '0', '1', '', '1439441637');
INSERT INTO `ci_node` VALUES ('70', 'index', '列表', '1', '1', '69', '0', '1', '', '1439441658');
INSERT INTO `ci_node` VALUES ('71', 'add', '添加', '1', '2', '69', '0', '1', '', '1439442708');
INSERT INTO `ci_node` VALUES ('72', 'edit', '修改', '1', '3', '69', '0', '1', '', '1439442733');
INSERT INTO `ci_node` VALUES ('73', 'del', '删除', '1', '4', '69', '0', '1', '', '1439442758');
INSERT INTO `ci_node` VALUES ('84', 'index', '备份', '1', '1', '83', '0', '1', '', '1442465726');
INSERT INTO `ci_node` VALUES ('83', 'BackUp', '数据备份', '1', '1', '82', '0', '1', '', '1442465546');
INSERT INTO `ci_node` VALUES ('82', 'Default', '备份管理', '1', '6', '0', '0', '1', 'comments-alt', '1442465153');
INSERT INTO `ci_node` VALUES ('85', 'Restore', '数据恢复', '1', '2', '82', '0', '1', '', '1442480695');
INSERT INTO `ci_node` VALUES ('86', 'index', '列表', '1', '1', '85', '0', '1', '', '1442480800');
INSERT INTO `ci_node` VALUES ('87', 'del', '删除', '1', '4', '85', '0', '1', '', '1442480896');
INSERT INTO `ci_node` VALUES ('88', 'import', '恢复', '1', '3', '85', '0', '1', '', '1442480974');
INSERT INTO `ci_node` VALUES ('89', 'download', '下载', '1', '2', '85', '0', '1', '', '1442481069');

-- ----------------------------
-- Table structure for ci_role
-- ----------------------------
DROP TABLE IF EXISTS `ci_role`;
CREATE TABLE `ci_role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL COMMENT '角色名称',
  `status` tinyint(2) DEFAULT '1' COMMENT '是否开启0：关闭，1：开启',
  `remark` varchar(255) DEFAULT NULL COMMENT '角色描述',
  `time` int(11) DEFAULT NULL COMMENT '创建时间',
  `sort` int(11) DEFAULT '50' COMMENT '排序',
  PRIMARY KEY (`id`),
  KEY `status` (`status`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_role
-- ----------------------------
INSERT INTO `ci_role` VALUES ('2', 'Manger', '1', '管理员', '1436844915', '1');
INSERT INTO `ci_role` VALUES ('1', 'Super', '1', '超级管理员', '1436844915', '0');
INSERT INTO `ci_role` VALUES ('7', 'demo', '1', 'demo', '1446465364', '50');

-- ----------------------------
-- Table structure for ci_system
-- ----------------------------
DROP TABLE IF EXISTS `ci_system`;
CREATE TABLE `ci_system` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL COMMENT '网站名称',
  `title` varchar(100) DEFAULT NULL COMMENT '网站标题',
  `domain` varchar(200) DEFAULT NULL COMMENT '网站域名',
  `address` varchar(200) DEFAULT NULL COMMENT '公司地址',
  `phone` varchar(100) DEFAULT NULL COMMENT '公司电话',
  `qq` varchar(50) DEFAULT NULL COMMENT '公司QQ',
  `email` varchar(100) DEFAULT NULL COMMENT '公司email',
  `keyword` varchar(200) DEFAULT NULL COMMENT '网站关键字',
  `desc` varchar(200) DEFAULT NULL COMMENT '网站描述',
  `copyright` varchar(200) DEFAULT NULL COMMENT '底部版权',
  `content` text COMMENT '关于我们',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_system
-- ----------------------------
INSERT INTO `ci_system` VALUES ('1', '嘎嘎时代科技有限公司', '嘎嘎时代科技', 'www.haophper.com', '霍营11', '18600957490', '907274532', '907274532@qq.com', '嘎嘎时代', '嘎嘎时代嘎嘎时代嘎嘎时代嘎嘎时代嘎嘎时代嘎嘎时代嘎嘎时代嘎嘎时代嘎嘎时代嘎嘎时代', '嘎嘎时代', '<strong>这是关于我们</strong>');

-- ----------------------------
-- Table structure for ci_users
-- ----------------------------
DROP TABLE IF EXISTS `ci_users`;
CREATE TABLE `ci_users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_login` varchar(60) NOT NULL DEFAULT '' COMMENT '用户名',
  `user_pass` varchar(64) NOT NULL DEFAULT '' COMMENT '登录密码；ci_password加密',
  `user_nicename` varchar(50) NOT NULL DEFAULT '' COMMENT '用户美名',
  `user_email` varchar(100) NOT NULL DEFAULT '' COMMENT '登录邮箱',
  `user_url` varchar(100) NOT NULL DEFAULT '' COMMENT '用户个人网站',
  `avatar` varchar(255) DEFAULT NULL COMMENT '用户头像，相对于upload/avatar目录',
  `sex` smallint(1) DEFAULT '0' COMMENT '性别；0：保密，1：男；2：女',
  `birthday` int(11) DEFAULT NULL COMMENT '生日',
  `signature` varchar(255) DEFAULT NULL COMMENT '个性签名',
  `last_login_ip` varchar(16) NOT NULL COMMENT '最后登录ip',
  `user_activation_key` varchar(60) NOT NULL DEFAULT '' COMMENT '激活码',
  `user_status` int(11) NOT NULL DEFAULT '1' COMMENT '用户状态 0：禁用； 1：正常 ；2：未验证',
  `score` int(11) NOT NULL DEFAULT '0' COMMENT '用户积分',
  `last_login_time` int(11) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_login_key` (`user_login`) USING BTREE,
  KEY `user_nicename` (`user_nicename`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_users
-- ----------------------------
