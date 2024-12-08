/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : laravel_blog2

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2024-12-07 01:41:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admins`
-- ----------------------------
DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admins
-- ----------------------------
INSERT INTO `admins` VALUES ('1', 'admin', 'admin@a.com', '$2y$10$Xi7J30LtTaqdQ0L5e70W/eo99jd3p241RkIIMBxo0ZhSHfp2XSiF2', '2024-12-07 01:07:55', '2024-12-06 17:07:55');
INSERT INTO `admins` VALUES ('2', '99', '99@qq.com', '$2y$10$dp/RyDptLcI5GKQpm5pICuB.FmHcltb0Vwi/KXAXyN.p03AbQMMee', '2024-12-06 13:32:50', '2024-12-06 13:32:50');
INSERT INTO `admins` VALUES ('4', '66', '66@qq.com', '$2y$10$/1ms6ZN/lXVopJXTSr0uJuUPkCDZ5wTEYSttcq4lE32hP9Zu6eQsm', '2024-12-06 17:08:06', '2024-12-06 17:08:06');
INSERT INTO `admins` VALUES ('5', '770', '77@qq.com', '$2y$10$6aHWcSTg6Dpr5pGysxHKCOhsXMBz8e4T6gG3QM.luWJqatHB2WOdy', '2024-12-07 01:13:14', '2024-12-06 17:13:14');
INSERT INTO `admins` VALUES ('6', '889', '889@qq.com', '$2y$10$5S4S8kawt.ahXQrs3FZ8JO45MMXrppHc0bYS7/9nk4jTpeJY7sk4C', '2024-12-06 17:29:18', '2024-12-06 17:29:18');

-- ----------------------------
-- Table structure for `books`
-- ----------------------------
DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `content` text,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of books
-- ----------------------------
INSERT INTO `books` VALUES ('1', 'book1', 'images/1.jpg', '123456', '2024-12-07 01:26:22', null);
INSERT INTO `books` VALUES ('2', 'book2', 'images/2.jpg', '2', '2024-12-07 01:26:18', null);
INSERT INTO `books` VALUES ('3', 'book3', 'images/3.jpg', '3', '2024-12-07 01:26:16', null);
INSERT INTO `books` VALUES ('4', 'book4', 'images/4.jpg', '4', '2024-12-07 01:26:14', null);
INSERT INTO `books` VALUES ('8', '88888888', 'images/k1bBCNWv7U68x2bILkK4e48YshDIgIify5PEI5So.jpg', '888888888888', '2024-12-07 01:26:12', '2024-12-06 17:18:39');
INSERT INTO `books` VALUES ('9', 'six', 'images/5jJKN1OyZ0B3RacDlwqMTz8kx8qrk99jFIuYqkGW.jpg', 'sixxxxxx', '2024-12-07 01:27:55', '2024-12-06 17:27:55');
INSERT INTO `books` VALUES ('10', 'uuuuu', 'images/AFnAoTgTyKeYepQ7pEPQxU5OH3Zrxru53qjEjsIz.jpg', 'iiiiiiooo', '2024-12-06 17:31:33', '2024-12-06 17:31:33');

-- ----------------------------
-- Table structure for `comments`
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `content` text,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comments
-- ----------------------------
INSERT INTO `comments` VALUES ('6', '5', '1', '66666666', '2024-12-06 16:52:49', '2024-12-06 16:52:49');
INSERT INTO `comments` VALUES ('10', '5', '1', '00000000', '2024-12-06 17:07:26', '2024-12-06 17:07:26');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('5', '123', '123@qq.com', '$2y$10$.lzjjbM7LNpCSoPMFaG4h.wM35ZXnibDCBqSXhLDo1BI5PWxmgF.i', '2024-12-05 16:22:39', '2024-12-05 16:22:39');
INSERT INTO `users` VALUES ('6', '456', '456@qq.com', '$2y$10$fErDhywRBvN5sFCjpnSK.e38Py5TsZ6JwSaTPaXf5OHjvguXY0GCq', '2024-12-05 16:23:31', '2024-12-05 16:23:31');
INSERT INTO `users` VALUES ('8', '555', '555@qq.com', '$2y$10$LDYtULe161QWv6O49WpdHOCSQtZP8E/ngi42Voik6Vi8vj7RYvqE.', '2024-12-06 17:09:53', '2024-12-06 17:09:53');
INSERT INTO `users` VALUES ('9', '001', '001@qq.com', '$2y$10$onQ.51UXWW2vodKHT6o8ZeIAXcZDOPu.sySfXu8pCU561A99FyS.O', '2024-12-06 17:13:36', '2024-12-06 17:13:36');
