/*
SQLyog Ultimate v11.24 (32 bit)
MySQL - 5.5.31-log : Database - lmb_test_forjimmy
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`lmb_test_forjimmy` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `ci_data`;

/*Table structure for table `ci_access` */

DROP TABLE IF EXISTS `ci_access`;

CREATE TABLE `ci_access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  KEY `groupId` (`role_id`) USING BTREE,
  KEY `nodeId` (`node_id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `ci_ad` */

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

/*Table structure for table `ci_admin` */

DROP TABLE IF EXISTS `ci_admin`;

CREATE TABLE `ci_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '后台管理用户',
  `username` varchar(30) NOT NULL,
  `password` char(32) NOT NULL,
  `logintime` int(11) DEFAULT NULL COMMENT '登录时间',
  `loginip` varchar(20) DEFAULT NULL COMMENT '登录ip',
  `sort` int(1) DEFAULT NULL,
  `lock` enum('锁定','开启') DEFAULT '开启' COMMENT '锁定状态1锁定，0：未锁定',
  `time` int(11) DEFAULT NULL COMMENT '创建时间',
  `role_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Table structure for table `ci_adpos` */

DROP TABLE IF EXISTS `ci_adpos`;

CREATE TABLE `ci_adpos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '广告位名称',
  `sort` int(11) DEFAULT '50' COMMENT '排序',
  `time` int(11) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Table structure for table `ci_article` */

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

/*Table structure for table `ci_cate` */

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

/*Table structure for table `ci_comments` */

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

/*Table structure for table `ci_links` */

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

/*Table structure for table `ci_nav` */

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

/*Table structure for table `ci_node` */

DROP TABLE IF EXISTS `ci_node`;

CREATE TABLE `ci_node` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT COMMENT '权限ID',
  `name` varchar(20) NOT NULL COMMENT '权限ActionName',
  `title` varchar(50) NOT NULL COMMENT '权限RealName',
  `status` enum('关闭','开启') NOT NULL DEFAULT '开启' COMMENT '开启状态（0、关闭；1、开启）',
  `sort` smallint(6) unsigned DEFAULT NULL COMMENT '排列顺序',
  `pid` smallint(6) unsigned NOT NULL COMMENT '上级ID',
  `level` tinyint(1) unsigned NOT NULL COMMENT '层级（1、控制器；2、方法）',
  `type` enum('否','是') NOT NULL DEFAULT '是' COMMENT '是否设为菜单（0、不是菜单；1、设为菜单）',
  `icon` varchar(255) DEFAULT NULL COMMENT '菜单图标',
  `time` int(11) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`),
  KEY `level` (`level`) USING BTREE,
  KEY `pid` (`pid`) USING BTREE,
  KEY `status` (`status`) USING BTREE,
  KEY `name` (`name`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=90 DEFAULT CHARSET=utf8;

/*Table structure for table `ci_role` */

DROP TABLE IF EXISTS `ci_role`;

CREATE TABLE `ci_role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL COMMENT '角色名称',
  `status` enum('关闭','开启') DEFAULT '开启' COMMENT '是否开启0：关闭，1：开启',
  `remark` varchar(255) DEFAULT NULL COMMENT '角色描述',
  `time` int(11) DEFAULT NULL COMMENT '创建时间',
  `sort` int(11) DEFAULT '50' COMMENT '排序',
  PRIMARY KEY (`id`),
  KEY `status` (`status`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Table structure for table `ci_system` */

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

/*Table structure for table `ci_users` */

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

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
