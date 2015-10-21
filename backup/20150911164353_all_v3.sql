INSERT INTO `lx_session` VALUES('107276','28qqfm9srsvvqjtciec1f1v8u3','-1','','1441903877');
INSERT INTO `lx_session` VALUES('107277','6aiue3roufve364268na71r6u3','-1','','1441905134');
INSERT INTO `lx_session` VALUES('107278','mt9qh0dkkac97gb0qv7r86fgj1','-1','','1441905275');
INSERT INTO `lx_session` VALUES('107279','k1gbe9k0tpnbdmm893n4047217','-1','','1441905386');
INSERT INTO `lx_session` VALUES('107280','m5kt05i5br0voodoqbq0lpfqf7','-1','','1441905531');
INSERT INTO `lx_session` VALUES('107281','sqpnl08pmhvaqhkl69qprsjje0','-1','','1441906097');
INSERT INTO `lx_session` VALUES('107282','bjejjpt9ppjj6r2tojdo77uc95','-1','','1441906188');
INSERT INTO `lx_session` VALUES('107283','31l8n5i2dkqbgqe34jbcudodo5','-1','','1441961001');
INSERT INTO `lx_session` VALUES('107284','ft3mqst8qls353b2ld7kg72192','-1','','1441941582');
--
-- 表的结构lx_set
--

DROP TABLE IF EXISTS `lx_set`;
CREATE TABLE `lx_set` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `t1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `t2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `t3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `t4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `t5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `t6` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `t7` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `t8` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `t9` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `t10` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `t11` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `t12` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `c_time` int(11) DEFAULT NULL,
  `u_time` int(11) DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL,
  `t13` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `t14` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `t15` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `t16` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `t17` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 lx_set
--

INSERT INTO `lx_set` VALUES('1','河南亿咖实业','河南亿咖实业','1045425@163.com','66666','河南亿咖实业','河南亿咖实业','116.397473','39.909375','6666','http://localhost/uploads/avatar/2015090912504355efbaa3deaed.jpg','Copyright 2009 by Creditsort Corp.All Right Reserved. 版权所有','http://localhost/uploads/avatar/2015090912494455efba68ba717.png','1','1','1','河南亿咖实业','河南亿咖实业','河南亿咖实业','','服务时间段：24小时服务');
--
-- 表的结构lx_type
--

DROP TABLE IF EXISTS `lx_type`;
CREATE TABLE `lx_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `t1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `c_time` int(11) DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 lx_type
--

INSERT INTO `lx_type` VALUES('1','152','1441901610','1');
INSERT INTO `lx_type` VALUES('2','科技','1441901685','1');
INSERT INTO `lx_type` VALUES('3','111354','1441901723','1');
INSERT INTO `lx_type` VALUES('4','项目05','1441904797','1');
INSERT INTO `lx_type` VALUES('5','项目06','1441904806','1');
INSERT INTO `lx_type` VALUES('6','项目07','1441904817','1');
INSERT INTO `lx_type` VALUES('7','','1441943665','1');
--
-- 表的结构lx_user
--

DROP TABLE IF EXISTS `lx_user`;
CREATE TABLE `lx_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sex` tinyint(3) DEFAULT NULL,
  `province` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `qq` int(11) DEFAULT NULL,
  `weixin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `brief` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `c_time` int(11) DEFAULT NULL,
  `u_time` int(11) DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 lx_user
--

INSERT INTO `lx_user` VALUES('1','1212','1212','','','','','','112233','','','112233','','','1441897987','1441897987','1');
INSERT INTO `lx_user` VALUES('2','5555','1212','','','','','','13232','','','112233','','','1441898143','1441898143','1');
--
-- 表的结构lx_wxy_nav
--

DROP TABLE IF EXISTS `lx_wxy_nav`;
CREATE TABLE `lx_wxy_nav` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 lx_wxy_nav
--

INSERT INTO `lx_wxy_nav` VALUES('1','首页轮播图');
INSERT INTO `lx_wxy_nav` VALUES('2','首页置顶图');
INSERT INTO `lx_wxy_nav` VALUES('3','产品列表');
