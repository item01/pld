--
-- MySQL database dump
-- Created by DbManage class, Power By yanue. 
-- http://yanue.net 
--
-- 主机: 127.0.0.1
-- 生成日期: 2015 年  10 月 11 日 12:00
-- MySQL版本: 5.5.40
-- PHP 版本: 5.6.1

--
-- 数据库: `lx_pd`
--

-- -------------------------------------------------------

--
-- 表的结构lx_admin
--

DROP TABLE IF EXISTS `lx_admin`;
CREATE TABLE `lx_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(55) DEFAULT NULL,
  `pwd` varchar(100) DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL,
  `grade` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 lx_admin
--

INSERT INTO `lx_admin` VALUES('1','admin','admin','1','100');
INSERT INTO `lx_admin` VALUES('2','wxy','112233','1','1');
--
-- 表的结构lx_article
--

DROP TABLE IF EXISTS `lx_article`;
CREATE TABLE `lx_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `t1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `t2` text COLLATE utf8_unicode_ci,
  `t3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `t4` int(11) DEFAULT NULL,
  `t5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `c_time` int(11) DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL,
  `tid` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 lx_article
--

INSERT INTO `lx_article` VALUES('4','2015�\�4�\�23日，由首都博物馆和日内瓦艺术与历史博物馆共同主办的”日内瓦：——时光之芯“展览在首都博物馆拉开帷幕.','&lt;p&gt;年。同时也是子开关以来首次举行的展览。此次展览正值中瑞建�\�65周年。同时也是子开关以来首次举行的展览�\�				&lt;/p&gt;&lt;p&gt;此次展览正值中瑞建�\�65周年。同时也是子开关以来首次举行的展览。此次展览正值中瑞建�\�65周年。同时也是子开关以来首次举行的展览。此次展览正值中瑞建�\�65周年�\�&lt;/p&gt;&lt;p&gt;\r\n				&lt;/p&gt;&lt;p&gt;展览�\�2015.4.28开�\�&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;','/uploads/avatar/2015101102425556195c2fc5a62.jpg','1444502520','这是首都博物馆自开馆以来首次举办瑞士钟表主题的展览','1444502583','1','');
INSERT INTO `lx_article` VALUES('5','这是首都博物馆自开馆以来首次举办瑞士钟表主题的展览','&lt;p&gt;此次展览正值中瑞建�\�65周年。同时也是子开关以来首次举行的展览。此次展览正值中瑞建�\�65周年。同时也是子开关以来首次举行的展览。此次展览正值中瑞建�\�65周年。同时也是子开关以来首次举行的展览�\�&lt;/p&gt;&lt;p&gt;\r\n				&lt;/p&gt;&lt;p&gt;此次展览正值中瑞建�\�65周年。同时也是子开关以来首次举行的展览。此次展览正值中瑞建�\�65周年。同时也是子开关以来首次举行的展览。此次展览正值中瑞建�\�65周年�\�&lt;/p&gt;&lt;p&gt;\r\n				&lt;/p&gt;&lt;p&gt;展览�\�2015.4.28开�\�&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;','/uploads/avatar/2015101102432456195c4cab6c4.jpg','1444502580','次展览正值中瑞建�\�65周年。同时也是子开关以来首次举行的展览。此次展览正值中瑞建�\�65周年。同时也是子开关以来首次举行的展览。此次展览正值中瑞建�\�65周年�\�','1444502610','1','');
--
-- 表的结构lx_category
--

DROP TABLE IF EXISTS `lx_category`;
CREATE TABLE `lx_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) DEFAULT '0',
  `cate_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cate_order` int(11) DEFAULT '0',
  `cate_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `c_time` int(11) DEFAULT '0',
  `status` tinyint(3) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 lx_category
--

INSERT INTO `lx_category` VALUES('1','152','1','1','1','1441901610','1');
INSERT INTO `lx_category` VALUES('6','0','4','','','1441904817','1');
INSERT INTO `lx_category` VALUES('7','0','3','','','1441943665','1');
INSERT INTO `lx_category` VALUES('9','1','fghfgh','1','e2r','1443865085','1');
INSERT INTO `lx_category` VALUES('10','1','fghfg','1','1','1443865093','1');
INSERT INTO `lx_category` VALUES('11','9','121','21','1','1443865120','1');
--
-- 表的结构lx_cc
--

DROP TABLE IF EXISTS `lx_cc`;
CREATE TABLE `lx_cc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cc1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cc2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cc3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `c_time` int(11) DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL,
  `tid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 lx_cc
--

INSERT INTO `lx_cc` VALUES('1','/uploads/avatar/2015101102440856195c78c15b8.jpg','','','1444502649','1','5');
INSERT INTO `lx_cc` VALUES('2','/uploads/avatar/2015101102440856195c78c15b8.jpg','','','1444502669','1','5');
INSERT INTO `lx_cc` VALUES('3','/uploads/avatar/2015101102443556195c93f0166.jpg','','','1444502676','1','5');
INSERT INTO `lx_cc` VALUES('4','/uploads/avatar/2015101102444456195c9ce3738.jpg','','','1444502686','1','5');
--
-- 表的结构lx_change
--

DROP TABLE IF EXISTS `lx_change`;
CREATE TABLE `lx_change` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `e1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `e2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `e3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `e4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `e5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `e6` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `e7` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `e8` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `e9` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `e10` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `e11` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `e12` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `e13` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `e14` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `e15` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `e16` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `e17` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `e18` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `e19` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `e20` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `c_time` int(11) DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL,
  `e21` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `e22` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 lx_change
--

INSERT INTO `lx_change` VALUES('1','1年超长换新期','精湛的工艺，优越的品质，是我们永远的承诺','九米客换新服务项�\�','    1、带身断裂免费换新品\r\n    2、带身掉牙免费换新品\r\n    3、带身断线免费换新品\r\n    4、扣头掉色免费换新品\r\n    5、扣面磨花免费换新品\r\n    6、油边裂纹免费换新品\r\n','9�\�/�\�','365天保�\�','天天新腰�\�','和朋友分享图片一失手手机掉进火锅里？在窗台打电话不留神手机坠落楼下？新买的手机新鲜劲还没过就已经遭遇意外损害无法使用，维修费太贵不划算，扔了更觉得可惜。小米手机意外保障服务，为您提供原厂保修范围外的意外损坏保修，在一年有效期内，由于意外坠落、挤压、碰撞或进液导致手机受损且又无法正常使用，都可以获得免费维修服务�\�','随腰带一起购�\�','即可获得365天免费换新服�\�','只需在购买腰带时一并选择换新保障服务，就可享受为�\�1年的免费换新特权，当绑定服务的腰带在有效期内遇到严重损坏时，只需拨打7x12小时�\�8:00-20:00）服务热线：400-600-9799，客服人员核实相关信息后，即可为你免费更换新腰带�\�','免费换新服务范围','换新范围','符合以下情况的腰带损�\�:','1.带身断裂免费换新�\�\r\n1.带身断裂免费换新�\�\r\n1.带身断裂免费换新�\�\r\n1.带身断裂免费换新�\�\r\n1.带身断裂免费换新�\�\r\n1.带身断裂免费换新�\�\r\n1.带身断裂免费换新�\�','同时满足以下条件:','1.带身断裂免费换新�\�\r\n1.带身断裂免费换新�\�','换新范围','符合以下情况的腰带损�\�:','1.带身断裂免费换新�\�\r\n1.带身断裂免费换新�\�\r\n1.带身断裂免费换新�\�\r\n1.带身断裂免费换新�\�\r\n1.带身断裂免费换新�\�\r\n1.带身断裂免费换新�\�\r\n1.带身断裂免费换新�\�','','','同时满足以下条件:','1.带身断裂免费换新�\�\r\n1.带身断裂免费换新�\�');
--
-- 表的结构lx_fields_set
--

DROP TABLE IF EXISTS `lx_fields_set`;
CREATE TABLE `lx_fields_set` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `field_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_show` tinyint(3) DEFAULT NULL,
  `remark` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` tinyint(3) DEFAULT NULL,
  `is_edit` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=209 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 lx_fields_set
--

INSERT INTO `lx_fields_set` VALUES('1','cate_pid','0','上级ID','1','0');
INSERT INTO `lx_fields_set` VALUES('121','cate_name','1','栏目名称','1','1');
INSERT INTO `lx_fields_set` VALUES('122','cate_link','1','栏目链接','1','1');
INSERT INTO `lx_fields_set` VALUES('123','cate_order','1','顺序','1','1');
INSERT INTO `lx_fields_set` VALUES('124','a1','1','文字1','1','1');
INSERT INTO `lx_fields_set` VALUES('125','a2','1','英文','1','1');
INSERT INTO `lx_fields_set` VALUES('126','a3','1','文字2','1','1');
INSERT INTO `lx_fields_set` VALUES('127','a4','1','价格','1','1');
INSERT INTO `lx_fields_set` VALUES('128','a5','1','文字3','1','1');
INSERT INTO `lx_fields_set` VALUES('129','a6','1','背景�\�','4','1');
INSERT INTO `lx_fields_set` VALUES('130','b1','1','文字1','2','1');
INSERT INTO `lx_fields_set` VALUES('131','b2','1','文字2','2','1');
INSERT INTO `lx_fields_set` VALUES('166','d7','1','包装清单2','2','1');
INSERT INTO `lx_fields_set` VALUES('167','e1','1','文字1','1','1');
INSERT INTO `lx_fields_set` VALUES('168','e2','1','文字2','1','1');
INSERT INTO `lx_fields_set` VALUES('169','e3','1','文字3','1','1');
INSERT INTO `lx_fields_set` VALUES('170','e4','1','文字4','2','1');
INSERT INTO `lx_fields_set` VALUES('171','e5','1','价格','1','1');
INSERT INTO `lx_fields_set` VALUES('172','e6','1','文字5','1','1');
INSERT INTO `lx_fields_set` VALUES('173','e7','1','文字7','1','1');
INSERT INTO `lx_fields_set` VALUES('174','e8','1','文字8','2','1');
INSERT INTO `lx_fields_set` VALUES('175','e9','1','文字9','1','1');
INSERT INTO `lx_fields_set` VALUES('176','e10','1','文字10','1','1');
INSERT INTO `lx_fields_set` VALUES('177','e11','1','文字11','1','1');
INSERT INTO `lx_fields_set` VALUES('178','e12','1','文字12','1','1');
INSERT INTO `lx_fields_set` VALUES('179','e13','1','文字13','1','1');
INSERT INTO `lx_fields_set` VALUES('180','e14','1','文字14','2','1');
INSERT INTO `lx_fields_set` VALUES('181','e15','1','文字15','2','1');
INSERT INTO `lx_fields_set` VALUES('165','d6','1','包装清单1','2','1');
INSERT INTO `lx_fields_set` VALUES('159','c1','1','图集列表图片','4','1');
INSERT INTO `lx_fields_set` VALUES('160','d1','1','外观尺寸','4','1');
INSERT INTO `lx_fields_set` VALUES('161','d2','1','带身参数','4','1');
INSERT INTO `lx_fields_set` VALUES('162','d3','1','扣头参数','4','1');
INSERT INTO `lx_fields_set` VALUES('163','d4','1','其它详情1','2','1');
INSERT INTO `lx_fields_set` VALUES('164','d5','1','其它详情2','2','1');
INSERT INTO `lx_fields_set` VALUES('182','e16','1','文字16','1','1');
INSERT INTO `lx_fields_set` VALUES('183','e17','1','文字17','2','1');
INSERT INTO `lx_fields_set` VALUES('184','e18','1','文字18','1','1');
INSERT INTO `lx_fields_set` VALUES('185','e19','1','文字19','1','1');
INSERT INTO `lx_fields_set` VALUES('186','e20','1','文字20','2','1');
INSERT INTO `lx_fields_set` VALUES('187','f1','1','问题','1','1');
INSERT INTO `lx_fields_set` VALUES('188','f2','1','回答','2','1');
INSERT INTO `lx_fields_set` VALUES('189','g1','1','分类�\�','1','1');
INSERT INTO `lx_fields_set` VALUES('190','h1','1','标题','1','1');
INSERT INTO `lx_fields_set` VALUES('191','h2','1','内容','3','1');
INSERT INTO `lx_fields_set` VALUES('192','t1','1','标题','1','1');
INSERT INTO `lx_fields_set` VALUES('193','t2','1','内容','3','1');
INSERT INTO `lx_fields_set` VALUES('194','t3','0','顶部图片','4','1');
INSERT INTO `lx_fields_set` VALUES('195','t4','1','时间','8','1');
INSERT INTO `lx_fields_set` VALUES('196','t5','1','摘要','1','1');
INSERT INTO `lx_fields_set` VALUES('197','cc1','1','图片','4','1');
INSERT INTO `lx_fields_set` VALUES('198','e21','1','文字21','2','1');
INSERT INTO `lx_fields_set` VALUES('199','e22','1','文字22','2','1');
INSERT INTO `lx_fields_set` VALUES('200','s1','1','网站标题','1','1');
INSERT INTO `lx_fields_set` VALUES('201','s2','1','网站关键�\�','1','1');
INSERT INTO `lx_fields_set` VALUES('202','s3','1','网站描述','1','1');
INSERT INTO `lx_fields_set` VALUES('203','s4','1','网站loho','4','1');
INSERT INTO `lx_fields_set` VALUES('204','s5','1','底部版权信息','1','1');
INSERT INTO `lx_fields_set` VALUES('205','s6','1','立即购买链接','1','1');
INSERT INTO `lx_fields_set` VALUES('206','z1','1','职位','1','1');
INSERT INTO `lx_fields_set` VALUES('207','zt1','1','标题','1','1');
INSERT INTO `lx_fields_set` VALUES('208','zt2','1','内容','3','1');
--
-- 表的结构lx_g
--

DROP TABLE IF EXISTS `lx_g`;
CREATE TABLE `lx_g` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `g1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `c_time` int(11) DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL,
  `tid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 lx_g
--

INSERT INTO `lx_g` VALUES('1','  承诺与获取权�\�','1444501948','1','1');
INSERT INTO `lx_g` VALUES('2','精心呵护您的腰带','1444502099','1','1');
INSERT INTO `lx_g` VALUES('3','  企业价值观','1444502211','1','2');
INSERT INTO `lx_g` VALUES('4','道德责任','1444502265','1','2');
--
-- 表的结构lx_h
--

DROP TABLE IF EXISTS `lx_h`;
CREATE TABLE `lx_h` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `h1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `h2` text COLLATE utf8_unicode_ci,
  `c_time` int(11) DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL,
  `tid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 lx_h
--

INSERT INTO `lx_h` VALUES('1','我们的承�\�','&lt;p&gt;&lt;img alt=&quot;nine.jpg&quot; src=&quot;/ueditor/php/upload/image/20151011/1444502048219591.jpg&quot; title=&quot;1444502048219591.jpg&quot;/&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;九米客从诞生之日起坚持以世界眼光选择艺术元素，并以“匠人精神、文化传承”为企业宗旨，不断探索与发现，续写新的传奇�\�&lt;/p&gt;&lt;p&gt;\r\n				&lt;/p&gt;&lt;p&gt;九米客在全球范围内只挑选最具竞争优势的核心供应商，并通过在其内部进行技术考核，层层筛选，最终确定符合高标准的工艺技师才能参与产品的设计与生产�\�&lt;/p&gt;&lt;p&gt;\r\n				&lt;/p&gt;&lt;p&gt;因此，所有九米客腰带，从生产之日起，严格遵守每条腰带的工艺美学和技术标准，我们希望每一条腰带都是经典的艺术品，永久值得流传与收藏�\�&lt;/p&gt;&lt;p&gt;\r\n				&lt;strong&gt;&lt;img src=&quot;http://localhost/public/ueditor/themes/default/images/spacer.gif&quot; word_img=&quot;file:///D:/%E6%88%91%E7%9A%84%E6%96%87%E6%A1%A3/QQEIM%20Files/2850398516/FileRecv/jiumi/images/top_st.png&quot; style=&quot;background:url(http://localhost/public/ueditor/lang/zh-cn/images/localimage.png) no-repeat center center;border:1px solid #ddd&quot;/&gt;九米客制造的所有腰带均可享�\�1年换新保�\�&lt;br/&gt;和终身免费修复的服务&lt;img src=&quot;http://localhost/public/ueditor/themes/default/images/spacer.gif&quot; word_img=&quot;file:///D:/%E6%88%91%E7%9A%84%E6%96%87%E6%A1%A3/QQEIM%20Files/2850398516/FileRecv/jiumi/images/bottom_st.png&quot; style=&quot;background:url(http://localhost/public/ueditor/lang/zh-cn/images/localimage.png) no-repeat center center;border:1px solid #ddd&quot;/&gt;&lt;/strong&gt;\r\n			&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;','1444502049','1','1');
INSERT INTO `lx_h` VALUES('2','正品防伪查询','&lt;p&gt;&lt;a&gt;正品防伪查询&lt;/a&gt;阿斯顿撒�\�&lt;/p&gt;','1444502085','1','1');
INSERT INTO `lx_h` VALUES('3','精心呵护您的腰带','&lt;p&gt;内容&lt;br/&gt;&lt;/p&gt;','1444502117','1','2');
INSERT INTO `lx_h` VALUES('4','扣头保养常识','&lt;p&gt;内容&lt;br/&gt;&lt;/p&gt;','1444502128','1','2');
INSERT INTO `lx_h` VALUES('5','我们的价值观','&lt;p&gt;\r\n				&lt;/p&gt;&lt;h3&gt;我们为什么要做腰�\�&lt;/h3&gt;&lt;p&gt;\r\n				&lt;img src=&quot;http://localhost/public/ueditor/themes/default/images/spacer.gif&quot; word_img=&quot;file:///D:/%E6%88%91%E7%9A%84%E6%96%87%E6%A1%A3/QQEIM%20Files/2850398516/FileRecv/jiumi/images/ten.jpg&quot; style=&quot;background:url(http://localhost/public/ueditor/lang/zh-cn/images/localimage.png) no-repeat center center;border:1px solid #ddd&quot;/&gt;\r\n				&lt;/p&gt;&lt;p&gt;2014�\�9�\�5日，办公室里的小赵在和同事阿光正在网上挑选一条中意的腰带，谈论腰带的质量，带身很容易断裂，扣头很容易磨花�\�2014\r\n�\�9�\�8日，同事小刘也发生同样的事情�\�3个曾在互联网公司待的同事，找到了老大，能不能我们自己做一条腰带，来解决这些问题。老大是腰带狂，每年要�\�4\r\n条腰带，而且不同的腰带搭配不同的服装。于是一拍即合，可以干�\�&lt;/p&gt;&lt;p&gt;\r\n			&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;','1444502238','1','3');
INSERT INTO `lx_h` VALUES('6','免费换新凭证','&lt;p&gt;内容&lt;br/&gt;&lt;/p&gt;','1444502254','1','3');
INSERT INTO `lx_h` VALUES('7','道德责任','&lt;p&gt;道德责任道德责任道德责任&lt;/p&gt;','1444502281','1','4');
--
-- 表的结构lx_img
--

DROP TABLE IF EXISTS `lx_img`;
CREATE TABLE `lx_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `c_time` int(11) DEFAULT NULL,
  `u_time` int(11) DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL,
  `remark2` text COLLATE utf8_unicode_ci,
  `img_type` int(3) DEFAULT NULL,
  `tid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 lx_img
--

INSERT INTO `lx_img` VALUES('16','/uploads/avatar/2015092104025355ff10ed680d7.jpg','','1441905122','','1','位于','1','');
INSERT INTO `lx_img` VALUES('27','/uploads/avatar/2015092115521555ffb72f06378.jpg','','1442821820','','1','','9','');
INSERT INTO `lx_img` VALUES('17','/uploads/avatar/2015092313475256023d08f3afa.jpg','http://www.mvword.com/index.php/home/index/item_detail/id/8','1441905138','','1','最新上�\�','1','');
INSERT INTO `lx_img` VALUES('18','/uploads/avatar/2015091101140055f1ba58cf2f8.jpg','/index.php/wxy/admin/add/table/img/img_type/1','1441905247','','1','http://localhost/index.php/wxy/admin/add/table/img/img_type/1','2','');
INSERT INTO `lx_img` VALUES('19','/uploads/avatar/2015091101143555f1ba7b3dfd2.png','D:\\我的文档\\QQEIM Files\\2850398516\\FileRecv\\项目13�\�-众筹�\�(1)\\项目13�\�-众筹�\�','1441905280','','1','12','2','');
INSERT INTO `lx_img` VALUES('20','/uploads/avatar/2015092301172356018d238b961.jpg','212','1441905390','','1','121','3','');
INSERT INTO `lx_img` VALUES('21','/uploads/avatar/2015092115431555ffb513ca321.jpg','','1441905522','','1','','4','');
INSERT INTO `lx_img` VALUES('22','/uploads/avatar/2015092115471355ffb601aedba.jpg','','1441905531','','1','','5','');
INSERT INTO `lx_img` VALUES('23','/uploads/avatar/2015092411183956036b8f4d0da.png','','1442769357','','1','','6','');
INSERT INTO `lx_img` VALUES('24','/uploads/avatar/2015092101171155feea178f0d1.jpg','','1442769432','','1','','7','');
INSERT INTO `lx_img` VALUES('25','/uploads/avatar/2015092101172555feea258e930.jpg','','1442769446','','1','','8','');
INSERT INTO `lx_img` VALUES('26','/uploads/avatar/2015092104021355ff10c5702f1.jpg','','1442779335','','1','1212','1','');
--
-- 表的结构lx_index
--

DROP TABLE IF EXISTS `lx_index`;
CREATE TABLE `lx_index` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `a1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `a2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `a3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `a4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `a5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `a6` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `a7` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `c_time` int(11) DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 lx_index
--

INSERT INTO `lx_index` VALUES('1','16年专注腰带的研发与生�\�','16 YEARS TO FOCUS ON THE DEVELOPMENT AND PRODUCTION OF BELT','100余位设计师不断探索的倾力之作 1000万亚洲男性形体数据库长期研究成果 ','自动�\�:139�\�','16年专注腰带研发与生产','/uploads/avatar/201510110200585619525a5cfbb.jpg','','','');
INSERT INTO `lx_index` VALUES('2','一条好腰带的诞生之�\�','THE BIRTH OF A GOOD BELT','累计经历346天，发放875条测�\� 腰带修正7个部�\� 更换11个供应商 不断探索的艺术结�\� 只为一条好腰带2','自动�\�:139�\�','九米�\�*商客Z1�\�139�\�','/uploads/avatar/20151011020154561952921443f.jpg','','','');
--
-- 表的结构lx_job
--

DROP TABLE IF EXISTS `lx_job`;
CREATE TABLE `lx_job` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `z1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `c_time` int(11) DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 lx_job
--

INSERT INTO `lx_job` VALUES('1','销�\�','1444507724','1');
INSERT INTO `lx_job` VALUES('2','主管','1444507730','1');
INSERT INTO `lx_job` VALUES('3','总经�\�','1444507738','1');
--
-- 表的结构lx_join_list
--

DROP TABLE IF EXISTS `lx_join_list`;
CREATE TABLE `lx_join_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `education` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `school` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `major` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `c_time` int(11) DEFAULT NULL,
  `u_time` int(11) DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 lx_join_list
--

INSERT INTO `lx_join_list` VALUES('3','销�\�','阿萨�\�','12121','2121','�\�','121','21','21','1444509005','1444509005','1');
INSERT INTO `lx_join_list` VALUES('4','销�\�','阿萨�\�','12121','2121','�\�','121','21','21','1444509007','1444509007','1');
INSERT INTO `lx_join_list` VALUES('5','总经�\�','45','45','45','本科','45','4','545','1444533675','1444533675','1');
--
-- 表的结构lx_parameter
--

DROP TABLE IF EXISTS `lx_parameter`;
CREATE TABLE `lx_parameter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `d1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `d2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `d3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `d4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `d5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `d6` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `d7` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `c_time` int(11) DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 lx_parameter
--

INSERT INTO `lx_parameter` VALUES('1','/uploads/avatar/201510110221475619573bc5a62.png','/uploads/avatar/201510110221505619573ee2bc6.png','/uploads/avatar/20151011022153561957418b3c8.png','\r\n\r\n    款式：自动扣腰带\r\n    货号：ABT909\r\n    产地：中�\�\r\n    总重量：210�\�\r\n    风格：商务休�\�','带身材质：优质黄牛皮\r\n带身工艺：双线边\r\n扣头材质：合�\�\r\n扣头造型：长方形\r\n扣头款式：自动扣','    款式：自动扣腰带\r\n    货号：ABT909\r\n    产地：中�\�\r\n    总重量：210�\�\r\n    风格：商务休�\�','带身材质：优质黄牛皮\r\n带身工艺：双线边\r\n扣头材质：合�\�\r\n扣头造型：长方形\r\n扣头款式：自动扣','','');
--
-- 表的结构lx_question
--

DROP TABLE IF EXISTS `lx_question`;
CREATE TABLE `lx_question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `f1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f2` text COLLATE utf8_unicode_ci,
  `c_time` int(11) DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 lx_question
--

INSERT INTO `lx_question` VALUES('1','什么情况下可以享受一年内免费换新服务�\�','当你购买腰带时加9元一起购买“九米客换新保障服务”即可。在日常使用过程中由于非人为因素发生的带身断裂、掉牙、断线、开裂，扣头掉色、扣面严重磨花而影响了基本使用功能，都可享受免费换新服务�\�','1444501755','1');
INSERT INTO `lx_question` VALUES('2','什么情况下可以享受一年内免费换新服务�\�','当你购买腰带时加9元一起购买“九米客换新保障服务”即可。在日常使用过程中由于非人为因素发生的带身断裂、掉牙、断线、开裂，扣头掉色、扣面严重磨花而影响了基本使用功能，都可享受免费换新服�\�','1444501767','1');
INSERT INTO `lx_question` VALUES('3','什么情况下可以享受一年内免费换新服务�\�','什么情况下可以享受一年内免费换新服务？什么情况下可以享受一年内免费换新服务？什么情况下可以享受一年内免费换新服务�\�','1444501777','1');
--
-- 表的结构lx_reply
--

DROP TABLE IF EXISTS `lx_reply`;
CREATE TABLE `lx_reply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `reply_id` int(11) NOT NULL DEFAULT '0',
  `content` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_urls` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `c_time` int(11) DEFAULT NULL,
  `u_time` int(11) DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL,
  `reply_uid` int(11) DEFAULT '0',
  `re_reply_id` int(11) DEFAULT NULL,
  `imgs` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 lx_reply
--

INSERT INTO `lx_reply` VALUES('1','1','1','0','我发起的项目：《艾呼吸鼻腔护理》，你的支持就是希望就是离梦想更近一步的动力，梦想看似遥不可及，却是提供动力的无限源泉�\�','/uploads/avatar/2015091101184155f1bb716f1a6.jpg','1','1','1','','','');
INSERT INTO `lx_reply` VALUES('2','1','1','1','55sds','1','1','1','1','','','');
INSERT INTO `lx_reply` VALUES('3','2','1','2','1','1','1','1','1','','','');
INSERT INTO `lx_reply` VALUES('4','1','1','0','gdfgdf我发起的项目：《艾呼吸鼻腔护理》，你的支持就是希望就是离梦想更近一步的动力，梦想看似遥不可及，却是提供动力的无限源泉�\�','','1441909031','1441909031','1','','','');
INSERT INTO `lx_reply` VALUES('5','1','1','0','gdfgdf我发起的项目：《艾呼吸鼻腔护理》，你的支持就是希望就是离梦想更近一步的动力，梦想看似遥不可及，却是�\�','','1441909039','1441909039','1','','','');
INSERT INTO `lx_reply` VALUES('6','2','1','1','1254','1','1','1','1','1','','');
INSERT INTO `lx_reply` VALUES('7','1','1','3','fghfgh','','1441912050','1441912050','1','','0','');
INSERT INTO `lx_reply` VALUES('8','1','1','2','jhkjlret','','1441912055','1441912055','1','','3','');
INSERT INTO `lx_reply` VALUES('9','1','1','5','fghjfghfg','','1441912179','1441912179','1','','0','');
INSERT INTO `lx_reply` VALUES('10','1','1','1','hjghjrtyertert','','1441912184','1441912184','1','','6','');
INSERT INTO `lx_reply` VALUES('11','1','1','4','水电费包�\�','','1441912202','1441912202','1','','0','');
INSERT INTO `lx_reply` VALUES('12','1','1','4','共和�\�','','1441912341','1441912341','1','','11','');
INSERT INTO `lx_reply` VALUES('13','1','1','0','jgkljkjhf开工饭后果','','1441912360','1441912360','1','','','');
INSERT INTO `lx_reply` VALUES('14','1','1','13','55555555555555555555555555','','1441912373','1441912373','1','','0','');
INSERT INTO `lx_reply` VALUES('15','1','1','0','1212','','1441984554','1441984554','1','','','');
INSERT INTO `lx_reply` VALUES('16','1','1','0','法国结果和结构化','','1441984570','1441984570','1','','','');
INSERT INTO `lx_reply` VALUES('17','1','1','0','法国结果和结构化','','1441984573','1441984573','1','','','');
INSERT INTO `lx_reply` VALUES('19','1','1','0','水电费水电费','','1442244184','1442244184','1','','','http://localhost/uploads/avatar/2015091423230355f6e6571b2e0.png、http://localhost/uploads/avatar/2015091423230255f6e656d4314.png、http://localhost/uploads/avatar/2015091423230255f6e65699109.jpg、http://localhost/uploads/avatar/2015091423230255f6e6566f1a6.jpg');
INSERT INTO `lx_reply` VALUES('20','1','1','0','水电费的个梵蒂冈','','1442246635','1442246635','1','','','http://localhost/uploads/avatar/2015091500034955f6efe516e36.png、http://localhost/uploads/avatar/2015091500034355f6efdf68e77.png�\�');
INSERT INTO `lx_reply` VALUES('22','1','1','0','的非官方大哥法规和规�\�','','1442247140','1442247140','1','','','http://localhost/uploads/avatar/2015091500121855f6f1e26a18a.png、http://localhost/uploads/avatar/2015091500121855f6f1e240227.png、http://localhost/uploads/avatar/2015091500121855f6f1e206ea0.jpg、http://localhost/uploads/avatar/2015091500121755f6f1e1d4e86.png');
INSERT INTO `lx_reply` VALUES('23','1','1','0','规划局规划局规划 ','','1442247279','1442247279','1','','','');
INSERT INTO `lx_reply` VALUES('24','1','1','0','规划局规划局规划 ','','1442247281','1442247281','1','','','');
INSERT INTO `lx_reply` VALUES('25','1','1','0','规划局规划局规划 ','','1442247283','1442247283','1','','','');
INSERT INTO `lx_reply` VALUES('26','1','1','0','将很快就�\�','','1442247337','1442247337','1','','','');
INSERT INTO `lx_reply` VALUES('27','1','1','26','丹甫股份','','1442247412','1442247412','1','','0','');
INSERT INTO `lx_reply` VALUES('44','0','2','0','1sd2f12ds','','1442774397','1442774397','1','','','');
INSERT INTO `lx_reply` VALUES('31','1','1','26','法国结婚就赶紧法规和地方�\�','','1442247436','1442247436','1','','27','');
INSERT INTO `lx_reply` VALUES('32','1','1','0','法规和规范化','','1442247448','1442247448','1','','','');
INSERT INTO `lx_reply` VALUES('33','1','1','0','法规和规范化法规和规�\�','','1442247451','1442247451','1','','','');
INSERT INTO `lx_reply` VALUES('34','1','1','0','法规和法规和','','1442247454','1442247454','1','','','');
INSERT INTO `lx_reply` VALUES('38','1','1','37','法规的法�\�','','1442248122','1442248122','1','0','0','');
INSERT INTO `lx_reply` VALUES('39','1','1','37','呵呵呵呵呵呵呵呵呵呵','','1442248128','1442248128','1','1','38','');
INSERT INTO `lx_reply` VALUES('45','1','6','0','sdfdsf','','1442779472','1442779472','1','','','');
INSERT INTO `lx_reply` VALUES('46','1','6','0','sdfdsfghjgj1111','','1442779480','1442779480','1','','','');
INSERT INTO `lx_reply` VALUES('47','1','2','0','地方GV多个','','1442806376','1442806376','1','','','');
INSERT INTO `lx_reply` VALUES('48','1','2','0','菜vb�\�','','1442806426','1442806426','1','','','');
INSERT INTO `lx_reply` VALUES('51','1','2','0','和健康就�\�','','1442807457','1442807457','1','0','','');
INSERT INTO `lx_reply` VALUES('53','1','2','51','法规和规范化','','1442807758','1442807758','1','1','52','');
INSERT INTO `lx_reply` VALUES('54','1','2','51','是大方的说法 ','','1442807797','1442807797','1','0','0','');
INSERT INTO `lx_reply` VALUES('55','1','2','51','法规和规范化','','1442807819','1442807819','1','1','52','');
INSERT INTO `lx_reply` VALUES('57','1','1','37','艰苦艰苦','','1442809784','1442809784','1','1','38','');
INSERT INTO `lx_reply` VALUES('58','1','1','36','建行卡号','','1442809797','1442809797','1','0','0','');
--
-- 表的结构lx_session
--

DROP TABLE IF EXISTS `lx_session`;
CREATE TABLE `lx_session` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session_id` varchar(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `data` text NOT NULL,
  `last_time` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `session_id` (`session_id`)
) ENGINE=InnoDB AUTO_INCREMENT=108320 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 lx_session
--

INSERT INTO `lx_session` VALUES('107238','j00rfno12d7r8gi3r1g7q3hr52','-1','','1439923207');
INSERT INTO `lx_session` VALUES('107239','0mocdikf1u2h7m7iivug800ui3','-1','','1439922577');
INSERT INTO `lx_session` VALUES('107240','c9s90od3cr8larjgi7e0vu7ki2','-1','','1440731777');
INSERT INTO `lx_session` VALUES('107241','skvcllkq5hrgs3jf94bpbrimt7','-1','uid|s:1:\"1\";','1441533407');
INSERT INTO `lx_session` VALUES('107242','e34eu7lvd375p35o07r3v1ldt2','-1','uid|s:1:\"1\";','1441566858');
INSERT INTO `lx_session` VALUES('107243','cfsvo4eca91rnsa6v6egrhh572','-1','','1441544433');
INSERT INTO `lx_session` VALUES('107244','iv4pn15cbbpejf3i6g138ecuj6','-1','','1441546943');
INSERT INTO `lx_session` VALUES('107245','of35hhr47d5d53ohp2qve7d1q5','-1','','1441551866');
INSERT INTO `lx_session` VALUES('107246','q2d9i8ft67pl1p7qfofvgteii5','-1','','1441552558');
INSERT INTO `lx_session` VALUES('107247','scci9964if5egg6g89v0m2q6k6','-1','','1441554791');
INSERT INTO `lx_session` VALUES('107248','2alv2468f1roaifm7383hk11l4','-1','','1441556461');
INSERT INTO `lx_session` VALUES('107249','girh8knu8hcle0423lil3vjvj0','-1','','1441558302');
INSERT INTO `lx_session` VALUES('107250','cot6s2s7mun0kc6li8oarha021','-1','','1441564196');
INSERT INTO `lx_session` VALUES('107251','qkd7pa7lkk6l687binivi45b04','-1','','1441566132');
INSERT INTO `lx_session` VALUES('107252','203gvtejvq2re24mrd9j1hshu6','-1','uid|s:1:\"1\";','1441567625');
INSERT INTO `lx_session` VALUES('107253','3fdgqnvdidbpmhtldgth8l3c65','-1','uid|s:1:\"1\";','1441625467');
INSERT INTO `lx_session` VALUES('107254','ore93kdajd6ood04rjo5n0gb72','-1','','1441617038');
INSERT INTO `lx_session` VALUES('107255','haq6sm36fqtcssdjj7g07qkgs3','-1','','1441618158');
INSERT INTO `lx_session` VALUES('107256','8hf8973ee3v30q2sqv94f9vf74','-1','','1441619907');
INSERT INTO `lx_session` VALUES('107257','lrah8naa3cu83flfd8j6uutuf0','-1','','1441630175');
INSERT INTO `lx_session` VALUES('107258','grfr3lur10ln2g4g3kqlrd2k44','-1','uid|s:1:\"1\";','1441640338');
INSERT INTO `lx_session` VALUES('107259','db97ruf7s213fm76vuvak88aa0','-1','','1441637150');
INSERT INTO `lx_session` VALUES('107260','40m0vr2pd5pi53biura9sh15j2','-1','','1441715240');
INSERT INTO `lx_session` VALUES('107261','3a8hok7sn7tgfhltotdfm0ad90','-1','uid|s:1:\"1\";','1441718174');
INSERT INTO `lx_session` VALUES('107262','l4ehdep5smf2e4tthnprjqdpv0','-1','uid|s:1:\"1\";','1441736469');
INSERT INTO `lx_session` VALUES('107263','i57no7oqav6otoq5pnc7flko77','-1','','1441721549');
INSERT INTO `lx_session` VALUES('107264','e3qabda2tukojnnvpipj261pd4','-1','uid|s:1:\"1\";','1441736254');
INSERT INTO `lx_session` VALUES('107265','l47het80n6p7ahh2oqdtqouah6','-1','','1441736448');
INSERT INTO `lx_session` VALUES('107266','h6to3nnat3bimpmle29qi42e86','-1','uid|s:1:\"1\";','1441786407');
INSERT INTO `lx_session` VALUES('107267','h83sejc6263vdlnl9vci5topa0','-1','','1441784458');
INSERT INTO `lx_session` VALUES('107268','8ojnt6crl4nqt011ukn8rkm182','-1','uid|s:1:\"1\";','1441815169');
INSERT INTO `lx_session` VALUES('107269','s90jf64ku2fcrk8to6lg1h2p60','-1','','1441790772');
INSERT INTO `lx_session` VALUES('107270','3cl1a815d4bvifqc2kiempr8f3','-1','','1441814412');
INSERT INTO `lx_session` VALUES('107271','rnpqeoh0pn06t60uhgebn7gji2','-1','','1441816401');
INSERT INTO `lx_session` VALUES('107272','tt0d8esl9qn20nvhlg7r2t1tm3','-1','','1441882736');
INSERT INTO `lx_session` VALUES('107273','4vh9cq0ba0t0jjf0dov358veb1','-1','uid|s:1:\"1\";','1441912375');
INSERT INTO `lx_session` VALUES('107274','n7uur320mlns9m27urib9h83o1','-1','','1441902923');
INSERT INTO `lx_session` VALUES('107275','m8cdpjkrpcihqcr5uagthq25d2','-1','','1441903179');
INSERT INTO `lx_session` VALUES('107276','28qqfm9srsvvqjtciec1f1v8u3','-1','','1441903877');
INSERT INTO `lx_session` VALUES('107277','6aiue3roufve364268na71r6u3','-1','','1441905134');
INSERT INTO `lx_session` VALUES('107278','mt9qh0dkkac97gb0qv7r86fgj1','-1','','1441905275');
INSERT INTO `lx_session` VALUES('107279','k1gbe9k0tpnbdmm893n4047217','-1','','1441905386');
INSERT INTO `lx_session` VALUES('107280','m5kt05i5br0voodoqbq0lpfqf7','-1','','1441905531');
INSERT INTO `lx_session` VALUES('107281','sqpnl08pmhvaqhkl69qprsjje0','-1','','1441906097');
INSERT INTO `lx_session` VALUES('107282','bjejjpt9ppjj6r2tojdo77uc95','-1','','1441906188');
INSERT INTO `lx_session` VALUES('107283','31l8n5i2dkqbgqe34jbcudodo5','-1','sms_code|s:4:\"AJAL\";uid|s:1:\"1\";code|s:4:\"dbf4\";','1441994823');
INSERT INTO `lx_session` VALUES('107284','ft3mqst8qls353b2ld7kg72192','-1','','1441941582');
INSERT INTO `lx_session` VALUES('107285','3ocg36946mdvfq3d8qcnu58h45','-1','','1441969892');
INSERT INTO `lx_session` VALUES('107286','vsvbrctv4blal40mcc810ri9k0','-1','','1441992504');
INSERT INTO `lx_session` VALUES('107287','p0l9dprv2bhkbutpi9ob2o4bv6','-1','code|s:4:\"a4ff\";','1441992331');
INSERT INTO `lx_session` VALUES('107288','bl8967jjqapebjsvb5q580erk0','-1','code|s:4:\"9472\";','1441992354');
INSERT INTO `lx_session` VALUES('107289','m55c7lurofbvv5sj8vtom154f5','-1','code|s:4:\"7d36\";uid|s:1:\"1\";','1442216249');
INSERT INTO `lx_session` VALUES('107290','2jfcui0m8loeqtva9g9e914707','-1','','1442216060');
INSERT INTO `lx_session` VALUES('107291','bkvrv43m1115urts27ui06vc36','-1','','1442216025');
INSERT INTO `lx_session` VALUES('107292','v0ifd8mksnflfs51dba16iitl2','-1','code|s:4:\"dd06\";uid|s:1:\"1\";','1442255708');
INSERT INTO `lx_session` VALUES('107293','f3d7prhgqf69rqribid3t9u443','-1','','1442247138');
INSERT INTO `lx_session` VALUES('107294','9te25v057lt8op426c5bmndnr6','-1','code|s:4:\"ebd4\";uid|s:1:\"1\";','1442307228');
INSERT INTO `lx_session` VALUES('107295','vhl4cdj9i3kp8mbvnjaac3sok4','-1','code|s:4:\"957e\";uid|s:1:\"1\";sms_code|s:4:\"O3TN\";','1442778804');
INSERT INTO `lx_session` VALUES('107296','dj1jd9dmfdm51dgmf899u3n8j5','-1','','1442727924');
INSERT INTO `lx_session` VALUES('107297','p6sno33i8qabqm93b31gb6vbe5','-1','','1442728868');
INSERT INTO `lx_session` VALUES('107298','olj2bslqfr4ve6seluo5lpadt1','-1','','1442735549');
INSERT INTO `lx_session` VALUES('107299','6a5l2v2gertfbrfk67vf359se6','-1','','1442771754');
INSERT INTO `lx_session` VALUES('107300','q0eg9nldi9afr69boeev1291d1','-1','','1442777126');
INSERT INTO `lx_session` VALUES('107301','8m7vgjf8jiqm3a3s0iulrefc17','-1','code|s:4:\"6f50\";uid|s:0:\"\";sms_code|s:4:\"O2D5\";','1442780655');
INSERT INTO `lx_session` VALUES('107302','4ks5bamhfi72ehsbc9un26lb80','-1','','1442779175');
INSERT INTO `lx_session` VALUES('107303','vubefmm73606obh5b6t8o23bq1','-1','','1442779312');
INSERT INTO `lx_session` VALUES('107304','2j6pq3fa29vp0md4fn509lijh5','-1','','1442779312');
INSERT INTO `lx_session` VALUES('107305','581dkr22afvj77u37jt77l74u5','-1','','1442779317');
INSERT INTO `lx_session` VALUES('107306','elk0osn1mjpq50ff513dhhi780','-1','','1442779317');
INSERT INTO `lx_session` VALUES('107307','o3jet2focorkssilsjulru0637','-1','','1442779317');
INSERT INTO `lx_session` VALUES('107308','u7rkth64iumd8s336u8m3kc4v3','-1','','1442779319');
INSERT INTO `lx_session` VALUES('107309','ga2skg2i5c5qkqkv6et7crulh1','-1','','1442779319');
INSERT INTO `lx_session` VALUES('107310','p99tgbfsia61j6c21jj1rdaa87','-1','','1442779322');
INSERT INTO `lx_session` VALUES('107311','1p6le1g6gbpdpp5lq64qf6mqc6','-1','','1442779322');
INSERT INTO `lx_session` VALUES('107312','76i8ouaaecllbnibuvkel03m81','-1','','1442779393');
INSERT INTO `lx_session` VALUES('107313','r1qn4e3jitjsqu1kqd34iddml4','-1','','1442779334');
INSERT INTO `lx_session` VALUES('107314','dbdgau20fbqtpr2ff0cgl5moe5','-1','','1442779340');
INSERT INTO `lx_session` VALUES('107315','iqk05mcf81bmbi4hgi12r6p0j7','-1','','1442779341');
INSERT INTO `lx_session` VALUES('107316','qe5od1i19uistg62hnfu5lh475','-1','','1442779342');
INSERT INTO `lx_session` VALUES('107317','3kauhr4jijbc4uhud8p9v93m81','-1','','1442779342');
INSERT INTO `lx_session` VALUES('107318','ief3pheqcgs1jmslljs51st1p2','-1','','1442779379');
INSERT INTO `lx_session` VALUES('107319','ell67fovhfj6rq9ufh77vf9vf7','-1','','1442779379');
INSERT INTO `lx_session` VALUES('107320','31nndchbhsr4iarjqr0gl0o4f2','-1','','1442779420');
INSERT INTO `lx_session` VALUES('107321','6kifcalnahrca5j62180fssn23','-1','','1442779420');
INSERT INTO `lx_session` VALUES('107322','r18usid3fej1b1ladtak0n1gn3','-1','','1442779433');
INSERT INTO `lx_session` VALUES('107323','hth6q4skg38ie6gqqv5uqqal43','-1','','1442779433');
INSERT INTO `lx_session` VALUES('107324','ejr9d578qup77hh7b6pudp8ka0','-1','','1442779470');
INSERT INTO `lx_session` VALUES('107325','1do7b06n9q0s190sr719pgpo80','-1','','1442779516');
INSERT INTO `lx_session` VALUES('107326','useovjbbmu2k1ilkg8kofeokt4','-1','','1442779517');
INSERT INTO `lx_session` VALUES('107327','9120u1958ab1m27v2ctuh59595','-1','','1442779519');
INSERT INTO `lx_session` VALUES('107328','bsb6hbrcttfaps4d684mlar3m6','-1','','1442779532');
INSERT INTO `lx_session` VALUES('107329','setdpltuv2eu94k890kjn9rld0','-1','','1442779536');
INSERT INTO `lx_session` VALUES('107330','v1cpkj13mrm0eqbg34n6gnq1g1','-1','','1442779547');
INSERT INTO `lx_session` VALUES('107331','hq0ba79jeoqfn557pgn8i06l82','-1','code|s:4:\"9bef\";','1442779548');
INSERT INTO `lx_session` VALUES('107332','3d63puhk408v9an688v9v42jr2','-1','','1442779630');
INSERT INTO `lx_session` VALUES('107333','8i2p2e41hdl8u4sc09c6pkt5s2','-1','','1442779654');
INSERT INTO `lx_session` VALUES('107334','9b0hg0sj31meidbk0i725u5ma6','-1','','1442779657');
INSERT INTO `lx_session` VALUES('107335','rj6i8rcbpfubfuu1qf96m89km7','-1','code|s:4:\"b572\";','1442779680');
INSERT INTO `lx_session` VALUES('107336','8pipp31f76qqmrsbts1g8v5mq1','-1','uid|s:0:\"\";sms_code|s:4:\"8C5E\";','1442810006');
INSERT INTO `lx_session` VALUES('107337','0pg966igai8un1iquje5b65mb3','-1','code|s:4:\"9170\";','1442779690');
INSERT INTO `lx_session` VALUES('107338','dunvj144j9j6u0vh9jteifldj7','-1','','1442779769');
INSERT INTO `lx_session` VALUES('107339','4q709a7gnv681q50uqb14tg9g4','-1','','1442779776');
INSERT INTO `lx_session` VALUES('107340','891cg15cssoc40jsvt52m64957','-1','','1442779857');
INSERT INTO `lx_session` VALUES('107341','i707diaf4ltspcfc6rk44li3j2','-1','','1442779979');
INSERT INTO `lx_session` VALUES('107342','9q21763p0u611322m8sjsmigt0','-1','','1442780167');
INSERT INTO `lx_session` VALUES('107343','4r7ntm2j2rfps993abi4knl036','-1','','1442780427');
INSERT INTO `lx_session` VALUES('107344','buhijjli276bl58543tnj2sqa4','-1','','1442780441');
INSERT INTO `lx_session` VALUES('107345','s5juckonkf7svd2vld2v4v3un3','-1','code|s:4:\"3054\";','1442780460');
INSERT INTO `lx_session` VALUES('107346','lf2q4gm435vtop7pa430eaqcp3','-1','','1442780464');
INSERT INTO `lx_session` VALUES('107347','d6jcga8tjb2v71uhkp0dgqrjl6','-1','code|s:4:\"844f\";','1442780469');
INSERT INTO `lx_session` VALUES('107348','sfrtcm7ifj2u7b70kphor4b5o2','-1','sms_code|s:4:\"84J3\";','1442780552');
INSERT INTO `lx_session` VALUES('107349','mkbmgf94ik1qqm90i8e02jf922','-1','code|s:4:\"5333\";','1442780685');
INSERT INTO `lx_session` VALUES('107350','9p0kpnpvn587hmr4sjrieg6856','-1','code|s:4:\"0ed8\";','1442780689');
INSERT INTO `lx_session` VALUES('107351','9410khahtragj8p11r1v8gift6','-1','code|s:4:\"810e\";','1442780705');
INSERT INTO `lx_session` VALUES('107352','9qbsl38svftim9rsr606jdoqn0','-1','code|s:4:\"b1de\";','1442780714');
INSERT INTO `lx_session` VALUES('107353','jlmsod11q4u8pafpunfdjaan31','-1','','1442780744');
INSERT INTO `lx_session` VALUES('107354','d70rp7o8c4ng23cmjiugeucjj1','-1','','1442780827');
INSERT INTO `lx_session` VALUES('107355','b3icrp98r3cfu6stppkcibf8d6','-1','','1442780903');
INSERT INTO `lx_session` VALUES('107356','3onod5cao5019das83cb4g96c7','-1','','1442798170');
INSERT INTO `lx_session` VALUES('107357','3nfion6061dadqbbdi5fq8s583','-1','code|s:4:\"7ef1\";','1442797710');
INSERT INTO `lx_session` VALUES('107358','27oj688ds6pkddnas0b755el15','-1','','1442797710');
INSERT INTO `lx_session` VALUES('107359','5q0v82jib3bf98l4a0tdj4r7e4','-1','','1442797710');
INSERT INTO `lx_session` VALUES('107360','6s11l1e1pu9opr8k2eqpdde6i6','-1','','1442797720');
INSERT INTO `lx_session` VALUES('107361','407o5v44lrh9qrua0jtcr72kr0','-1','','1442797720');
INSERT INTO `lx_session` VALUES('107362','610pd9kjncdgc5o6ght6ivunp5','-1','','1442797720');
INSERT INTO `lx_session` VALUES('107363','gdjo7iv389vgck4skcsfp80753','-1','','1442797729');
INSERT INTO `lx_session` VALUES('107364','401o94g2d0nua0hpjk6nkdmhp1','-1','','1442797729');
INSERT INTO `lx_session` VALUES('107365','jnpg8jo4scmmhkgrakovvc08p0','-1','','1442797730');
INSERT INTO `lx_session` VALUES('107366','e1nn8a4nvs00vefen0kc3oud50','-1','code|s:4:\"8b10\";uid|s:1:\"1\";admin_id|s:1:\"1\";','1443494229');
INSERT INTO `lx_session` VALUES('107367','prbfvqmkon0e5923kk1nlpsnq7','-1','code|s:4:\"f017\";','1442797962');
INSERT INTO `lx_session` VALUES('107368','1dn1cd9f94scka91u68bsuud10','-1','','1442797815');
INSERT INTO `lx_session` VALUES('107369','fm4e59uvdjemiqualulpe0o2f7','-1','','1442797815');
INSERT INTO `lx_session` VALUES('107370','lbbln8ge7qucc9sslhjcmj4u52','-1','code|s:4:\"c5f7\";','1442798036');
INSERT INTO `lx_session` VALUES('107371','ak1qubfgrk36u54kdqc272kf66','-1','code|s:4:\"d04f\";','1442798044');
INSERT INTO `lx_session` VALUES('107372','pdsfintkq06fbo0008v8676455','-1','code|s:4:\"e109\";','1442800168');
INSERT INTO `lx_session` VALUES('107373','bfg5g0v73aa3lonord6h0qbpn6','-1','code|s:4:\"1be6\";','1442800205');
INSERT INTO `lx_session` VALUES('107374','du30v8i4ilgfqdunjkna3pcf77','-1','code|s:4:\"b771\";','1442801744');
INSERT INTO `lx_session` VALUES('107375','o151c4afm2g2172c46gcu54oj7','-1','','1442798439');
INSERT INTO `lx_session` VALUES('107376','l31blbfjgv5b1jmragg45i2v22','-1','','1442798446');
INSERT INTO `lx_session` VALUES('107377','7j8n7f8vm1dsivrggm3irqrc22','-1','','1442798455');
INSERT INTO `lx_session` VALUES('107378','5jv5jkunfkdnjufpadb9u7fmc6','-1','code|s:4:\"17ea\";','1442798624');
INSERT INTO `lx_session` VALUES('107379','3le3gup511f0l3vh5f7pobf8r7','-1','code|s:4:\"d1b4\";','1442798629');
INSERT INTO `lx_session` VALUES('107380','oaguud700l574mv7dc74itoku6','-1','','1442799891');
INSERT INTO `lx_session` VALUES('107381','laq7tdbqq1ee8isolpvle3fkr2','-1','code|s:4:\"86c5\";','1442799868');
INSERT INTO `lx_session` VALUES('107382','c4592s1vikkhved5n1em6h45l2','-1','code|s:4:\"b6e3\";uid|s:1:\"1\";','1442820723');
INSERT INTO `lx_session` VALUES('107383','ctj1ujb7bfgsvrj33eumdsvkh6','-1','','1442805027');
INSERT INTO `lx_session` VALUES('107384','dfojjj05fj7jnltk02trhrk2q1','-1','','1442805027');
INSERT INTO `lx_session` VALUES('107385','4ftrfcv4qf423212q32catrs96','-1','','1442805028');
INSERT INTO `lx_session` VALUES('107386','e6g3q7b9jad36h9imfvk17k9d6','-1','uid|s:1:\"1\";','1442807656');
INSERT INTO `lx_session` VALUES('107387','hpv2nk3ao4ii4j04o4dicllgk0','-1','','1442805204');
INSERT INTO `lx_session` VALUES('107388','b39a90ii7ro089kuhsrrcdnpq1','-1','','1442805221');
INSERT INTO `lx_session` VALUES('107389','egncg9o04sbugft3t08ipeedd7','-1','uid|s:1:\"1\";','1442806127');
INSERT INTO `lx_session` VALUES('107390','8quj1a8746namklvt0bc5s0kq1','-1','','1442805942');
INSERT INTO `lx_session` VALUES('107391','foogor4kutk7a7hur0ag2cp7p3','-1','code|s:4:\"0827\";sms_code|s:4:\"G60Q\";uid|s:1:\"1\";','1442830721');
INSERT INTO `lx_session` VALUES('107392','cl14h2ljqfr4uf94ir2do93vt2','-1','','1442806081');
INSERT INTO `lx_session` VALUES('107393','e0ech0v6ed8b0tcujtk65mgor4','-1','','1442806096');
INSERT INTO `lx_session` VALUES('107394','75pp628b5nccq05amiu9ad1v10','-1','','1442806127');
INSERT INTO `lx_session` VALUES('107395','vhd66gbmcs9i4dmmtb7qgvue47','-1','uid|s:1:\"1\";','1442807825');
INSERT INTO `lx_session` VALUES('107396','gbulv5c84tgidrf3qnv0dhg081','-1','','1442806297');
INSERT INTO `lx_session` VALUES('107397','ufu4k0i1gpjk60tlkiog1mqfo6','-1','','1442806313');
INSERT INTO `lx_session` VALUES('107398','7kgsm149rglvlgoa2r5i39akg6','-1','','1442806376');
INSERT INTO `lx_session` VALUES('107399','n4fvav5d58d1ldian93eitsgb2','-1','','1442807031');
INSERT INTO `lx_session` VALUES('107400','brg9l9bds8k9gfrnm14unassq5','-1','','1442807099');
INSERT INTO `lx_session` VALUES('107401','r778v149ourdl7m9spj0991q63','-1','','1442807257');
INSERT INTO `lx_session` VALUES('107402','91vjje1p2l0mjd7adfg4ubha44','-1','','1442807428');
INSERT INTO `lx_session` VALUES('107403','j5ckmbsnm57ak8arscfnre1f63','-1','','1442807804');
INSERT INTO `lx_session` VALUES('107404','as4jnjo8i4j5r528aj6ia0s743','-1','','1442807818');
INSERT INTO `lx_session` VALUES('107405','fud9vcgh1gqrmtb5fre74h1pg7','-1','','1442807825');
INSERT INTO `lx_session` VALUES('107406','9h4ht1oi0ourjsf8jir5385ga7','-1','','1442807902');
INSERT INTO `lx_session` VALUES('107407','vj4599so2d59mio5usm097fs54','-1','','1442808068');
INSERT INTO `lx_session` VALUES('107408','8d0ikptum4oe8lr82ugguvd940','-1','','1442808076');
INSERT INTO `lx_session` VALUES('107409','s698s5m0mhm7v5n576kk62ooa7','-1','','1442808080');
INSERT INTO `lx_session` VALUES('107410','ot75jh7dpohk779ljko5siech2','-1','','1442808091');
INSERT INTO `lx_session` VALUES('107411','1vbclft9gt5vuvv9c7hm34lca1','-1','','1442808140');
INSERT INTO `lx_session` VALUES('107412','bqevhg97e51sd4taqsq7qent06','-1','','1442808143');
INSERT INTO `lx_session` VALUES('107413','hp251ca0b9uje1sgrbrg35np85','-1','','1442808176');
INSERT INTO `lx_session` VALUES('107414','5lvs0oqcbpt8e7tm6cbqeb4q91','-1','','1442808438');
INSERT INTO `lx_session` VALUES('107415','nq08imrudi04a6t0j3cs3n4jb6','-1','','1442808446');
INSERT INTO `lx_session` VALUES('107416','97kue9c0fsrghqja6kk19s6m65','-1','','1442808446');
INSERT INTO `lx_session` VALUES('107417','gkpvjph036b57ks82dec35cbc1','-1','','1442808527');
INSERT INTO `lx_session` VALUES('107418','vhuvsouvgunevg69kqui8rv9c2','-1','','1442808527');
INSERT INTO `lx_session` VALUES('107419','052v9ae5p56u2q8ikdt6c83d07','-1','','1442808565');
INSERT INTO `lx_session` VALUES('107420','nm2pmfcdfunuqog4ig38j6t5g7','-1','','1442808566');
INSERT INTO `lx_session` VALUES('107421','81cbovs3ubj744lglv9ldtcpa3','-1','','1442808572');
INSERT INTO `lx_session` VALUES('107422','0reljonbn8n6a7m2v6pusc32s5','-1','','1442808585');
INSERT INTO `lx_session` VALUES('107423','m1u0one8c79ae9m4uemcore9a5','-1','','1442808640');
INSERT INTO `lx_session` VALUES('107424','qdamkbk8uibnkm5gloflol3cg4','-1','','1442808649');
INSERT INTO `lx_session` VALUES('107425','f997neh3hdtp0kla3qnp215s56','-1','','1442808719');
INSERT INTO `lx_session` VALUES('107426','8f34t61r3sm4u9ib1bd7fd3qa2','-1','','1442808721');
INSERT INTO `lx_session` VALUES('107427','v5vopnvhbhrh6s6ha65ckaavh4','-1','','1442808866');
INSERT INTO `lx_session` VALUES('107428','d1aeaq0kbldj7j85fobp62glb2','-1','','1442808956');
INSERT INTO `lx_session` VALUES('107429','9e6lpkr0nq63c6bkbr8otr24m4','-1','','1442808994');
INSERT INTO `lx_session` VALUES('107430','u9n932md453cuo8v971ccju166','-1','','1442809018');
INSERT INTO `lx_session` VALUES('107431','tjq0uk8hn5vfkhqspnfkkvdii6','-1','','1442809032');
INSERT INTO `lx_session` VALUES('107432','aqb2k9cd88tpkhucrr7qo86ps6','-1','','1442809033');
INSERT INTO `lx_session` VALUES('107433','tb34dkrd3009gg162uo9vh38p3','-1','','1442809081');
INSERT INTO `lx_session` VALUES('107434','3q8rjjd518prkaieod4im2lh72','-1','','1442809097');
INSERT INTO `lx_session` VALUES('107435','rhofntemomon0o8s42su7ajno3','-1','','1442809109');
INSERT INTO `lx_session` VALUES('107436','sg7buge2sokv27sj3j2c5717p2','-1','','1442809170');
INSERT INTO `lx_session` VALUES('107437','i8j30kkep5k0cs5dfvmvpv7730','-1','','1442809183');
INSERT INTO `lx_session` VALUES('107438','k4iev3fl3gh1ocb8iog4c3dhr2','-1','','1442809300');
INSERT INTO `lx_session` VALUES('107439','3tavj299la7m49msa8cgvic6r6','-1','','1442809410');
INSERT INTO `lx_session` VALUES('107440','3f3ab0h3vqu8rnig1gh7m1av53','-1','','1442809626');
INSERT INTO `lx_session` VALUES('107441','vaf91gjhjnp9sv3i9g7r420uh0','-1','','1442809764');
INSERT INTO `lx_session` VALUES('107442','8g5f79r831ad66kofre81rlkm6','-1','','1442810323');
INSERT INTO `lx_session` VALUES('107443','31so9d1m1sboktqeipjnhk1597','-1','','1442816734');
INSERT INTO `lx_session` VALUES('107444','j0o3kbgl12rl2cbqvvedq3j8t2','-1','code|s:4:\"6b4d\";','1442817247');
INSERT INTO `lx_session` VALUES('107445','2uesshvhbpk0rug4l8t5hprd86','-1','code|s:4:\"8c54\";uid|s:1:\"1\";','1442828413');
INSERT INTO `lx_session` VALUES('107446','qf4omi6j1e68rmp94ip070drk7','-1','code|s:4:\"0515\";','1442817253');
INSERT INTO `lx_session` VALUES('107447','lrh7r993qovg9o05nfohq98pt7','-1','','1442817266');
INSERT INTO `lx_session` VALUES('107448','6r2rmlmu85vo99dei8u0mdbfm7','-1','','1442817461');
INSERT INTO `lx_session` VALUES('107449','toi8lmelvelae1n9q1oa88h666','-1','','1442817463');
INSERT INTO `lx_session` VALUES('107450','s7aru99g9ptduau5cvhj4g9sg3','-1','','1442817464');
INSERT INTO `lx_session` VALUES('107451','dk5jid697o80c8ssdrckk0o1h7','-1','','1442817466');
INSERT INTO `lx_session` VALUES('107452','8oosn4am9qgv0kbtjm3h260bj7','-1','','1442817467');
INSERT INTO `lx_session` VALUES('107453','odtf8i6fclmtkd19615se2b565','-1','','1442817511');
INSERT INTO `lx_session` VALUES('107454','cl643q8fp2b8jtm3lmkiucv6v6','-1','','1442817513');
INSERT INTO `lx_session` VALUES('107455','q14d9tn8p778t1fap1n7que192','-1','','1442821935');
INSERT INTO `lx_session` VALUES('107456','ak86iurl2crvu59cvf76nik0n4','-1','','1442817574');
INSERT INTO `lx_session` VALUES('107457','k0j91f2fd47u385gf38skt58s5','-1','','1442817601');
INSERT INTO `lx_session` VALUES('107458','v4138eg9j5v5go8783tj4nuud1','-1','','1442817606');
INSERT INTO `lx_session` VALUES('107459','fuivfv27lr2d5dsi6vre7j2d45','-1','','1442817673');
INSERT INTO `lx_session` VALUES('107460','s3u7u8rcgeup7usmk50v1955n7','-1','','1442818074');
INSERT INTO `lx_session` VALUES('107461','k258p4c170an5b689n9va8bbn6','-1','','1442818188');
INSERT INTO `lx_session` VALUES('107462','k7mui94j1g91166v8ag0i19t62','-1','','1442818223');
INSERT INTO `lx_session` VALUES('107463','fmvgjk1guqhnvd2p6p8pqufuj6','-1','','1442818232');
INSERT INTO `lx_session` VALUES('107464','0vfs8ne7qecqei0ahg8s6tcu87','-1','','1442818420');
INSERT INTO `lx_session` VALUES('107465','0a90fh1335otlm1v3lhjpfsss3','-1','','1442820474');
INSERT INTO `lx_session` VALUES('107466','tdaof9ps93k8e42t5dosv7ftl0','-1','','1442820978');
INSERT INTO `lx_session` VALUES('107467','90covu6u09u869erf4ch28gug6','-1','','1442820984');
INSERT INTO `lx_session` VALUES('107468','urv5hrab5ss12hre96t1er7hc5','-1','','1442820998');
INSERT INTO `lx_session` VALUES('107469','a3d93q51u1oc5b0nubglq0fje0','-1','','1442821362');
INSERT INTO `lx_session` VALUES('107470','2mp4592v42pjm3oi4uqc5htgr1','-1','','1442821362');
INSERT INTO `lx_session` VALUES('107471','p2roql5fk72ohprj7m3fnpblp3','-1','','1442821374');
INSERT INTO `lx_session` VALUES('107472','i6a79hqh3spenhs0oc0g2ieft4','-1','','1442821392');
INSERT INTO `lx_session` VALUES('107473','gqp4a8uhhgn87r1i4gbkchr0f0','-1','','1442821569');
INSERT INTO `lx_session` VALUES('107474','v5iikrg9ofj99q1o09nvefko25','-1','code|s:4:\"4950\";','1442821735');
INSERT INTO `lx_session` VALUES('107475','p6cpv6nd1t8qegn3r1ct5478g1','-1','','1442821806');
INSERT INTO `lx_session` VALUES('107476','jat7pag79970v7ilfd5sjc2g84','-1','','1442821812');
INSERT INTO `lx_session` VALUES('107477','e99hp8dip89p57bs4ags6veqe7','-1','','1442821814');
INSERT INTO `lx_session` VALUES('107478','7l2f9l3pmkuet74sl2m1t11p43','-1','','1442821815');
INSERT INTO `lx_session` VALUES('107479','6pvj820t5jcb4frp8gqu7gmgm7','-1','','1442821879');
INSERT INTO `lx_session` VALUES('107480','3q9gf81lvqt4t5obc78ag44af3','-1','','1442821912');
INSERT INTO `lx_session` VALUES('107481','u6845dt3arl4ag273lmml7f3m0','-1','','1442821926');
INSERT INTO `lx_session` VALUES('107482','hpq26kdan97574o7rgs55ejjq0','-1','','1442822109');
INSERT INTO `lx_session` VALUES('107483','nv71vt8n42l32j4rr8cumt2m26','-1','','1442822394');
INSERT INTO `lx_session` VALUES('107484','dviovrdjpnui1cgg7v1a64ud71','-1','','1442822438');
INSERT INTO `lx_session` VALUES('107485','m2560f49kja6c1ugs8gm6nefj5','-1','','1442822534');
INSERT INTO `lx_session` VALUES('107486','fg6u735050s2pvl0el5os9mvb6','-1','','1442822534');
INSERT INTO `lx_session` VALUES('107487','pvp84h0ltrl2c2ala7ckfive35','-1','code|s:4:\"87a3\";','1442822651');
INSERT INTO `lx_session` VALUES('107488','hcs3m60vhl8u5htu3m4r60ik01','-1','','1442822664');
INSERT INTO `lx_session` VALUES('107489','d3gr8e6pg5gsb8fjstl1ng3pp0','-1','','1442822724');
INSERT INTO `lx_session` VALUES('107490','9hm4a99ltqapcfrito21aebn67','-1','','1442822860');
INSERT INTO `lx_session` VALUES('107491','qap1fh4t0evuvbd8rslhl04kq5','-1','','1442822934');
INSERT INTO `lx_session` VALUES('107492','dlmgr9au68sg9a8g4dcsi9kr10','-1','code|s:4:\"f314\";','1442824527');
INSERT INTO `lx_session` VALUES('107493','dhlki15ij16pnndf268uhvdr30','-1','','1442826526');
INSERT INTO `lx_session` VALUES('107494','1l68vmc7tkfl63bt1dk9s7dgp6','-1','code|s:4:\"04d8\";','1442886184');
INSERT INTO `lx_session` VALUES('107495','1v3158spmi911n5l08krcjq6h0','-1','','1442826735');
INSERT INTO `lx_session` VALUES('107496','2gm9tn06hndo5r6slbh7rp9nn4','-1','','1442826908');
INSERT INTO `lx_session` VALUES('107497','31hfcdj0i1ivggmag5nli3s6u1','-1','','1442826931');
INSERT INTO `lx_session` VALUES('107498','rjdov4uh29r3gv7s0e58iuq0g5','-1','','1442828226');
INSERT INTO `lx_session` VALUES('107499','19nbd84la3hrnl8jnijlqvvb96','-1','','1442828670');
INSERT INTO `lx_session` VALUES('107500','sumf096pmrvjipekmiqshd4oj2','-1','','1442831028');
INSERT INTO `lx_session` VALUES('107501','u8oigsekbll5frkp2qofas0013','-1','code|s:4:\"8c3a\";','1442837851');
INSERT INTO `lx_session` VALUES('107502','26ailnbcie36e3bj8pa48q4r15','-1','code|s:4:\"0edb\";','1442841455');
INSERT INTO `lx_session` VALUES('107503','0uhskd3q1r8sb0d1g0d3rjt3d2','-1','','1442843426');
INSERT INTO `lx_session` VALUES('107504','0totj1ptf35bc50i92foskme22','-1','code|s:4:\"c5ec\";','1442843279');
INSERT INTO `lx_session` VALUES('107505','keuu426shjcpskf2gng8tr2cv1','-1','code|s:4:\"9d51\";','1442843606');
INSERT INTO `lx_session` VALUES('107506','elohs7mtouqt22v6934gvj83c4','-1','code|s:4:\"c4b7\";','1442849176');
INSERT INTO `lx_session` VALUES('107507','0fj8ec1alpbjdvm2r5leimkn54','-1','','1442847843');
INSERT INTO `lx_session` VALUES('107508','evig1bsochlfuf9b1b4p25v1h7','-1','','1442847844');
INSERT INTO `lx_session` VALUES('107509','tvh2ellb61dniigk03f885m3i4','-1','','1442859864');
INSERT INTO `lx_session` VALUES('107510','4mat083j6spejv0gi1601q6so1','-1','','1442863201');
INSERT INTO `lx_session` VALUES('107511','lt94d70igd1lu5hceo5ef99ck4','-1','code|s:4:\"35e9\";','1442873869');
INSERT INTO `lx_session` VALUES('107512','4jhkvgisft21rd6obohbt9uol7','-1','code|s:4:\"631c\";','1442873885');
INSERT INTO `lx_session` VALUES('107513','836nhe1hpu8s004b7kvcqio1c0','-1','code|s:4:\"d91f\";','1442873965');
INSERT INTO `lx_session` VALUES('107514','mrf719u3q7evd8bl9pjdg79fu3','-1','uid|s:1:\"1\";','1442887869');
INSERT INTO `lx_session` VALUES('107515','82bisto3supvcsbco3b50il9s6','-1','','1442887825');
INSERT INTO `lx_session` VALUES('107516','h617sf79vrqec3ptaklftu02v5','-1','code|s:4:\"b59f\";','1442888803');
INSERT INTO `lx_session` VALUES('107517','e9llreju93bg8bha3239mqpn93','-1','code|s:4:\"67f7\";sms_code|s:4:\"1RN2\";sms_phone|s:11:\"15514538565\";uid|s:1:\"1\";','1442916840');
INSERT INTO `lx_session` VALUES('107518','acb3tb2r9i5iq0ll620hp2ugl5','-1','code|s:4:\"a288\";','1442888986');
INSERT INTO `lx_session` VALUES('107519','fdnb4os13kjc09m91glc6936k1','-1','','1442889082');
INSERT INTO `lx_session` VALUES('107520','9limq8go52cj4s9k5tkb12sf53','-1','','1442889234');
INSERT INTO `lx_session` VALUES('107521','7qmvktthnaqm86p32acj5h7027','-1','code|s:4:\"948e\";','1442889236');
INSERT INTO `lx_session` VALUES('107522','uobulmu0f6758m1i1u7kbaquv0','-1','','1442892042');
INSERT INTO `lx_session` VALUES('107523','sldvlsaomspigukavk9rnc4sv2','-1','','1442894891');
INSERT INTO `lx_session` VALUES('107524','gespe2lrm6dgk1o222dgimteu4','-1','','1442896108');
INSERT INTO `lx_session` VALUES('107525','ira4m0bfld1ivfbtmaa8c05f26','-1','code|s:4:\"4473\";','1442896137');
INSERT INTO `lx_session` VALUES('107526','4ot02iohj88d7jj3ovncopaia4','-1','','1442896544');
INSERT INTO `lx_session` VALUES('107527','ekd3qgapgkcvo3sgnvjt450fj1','-1','code|s:4:\"ee9a\";','1442897113');
INSERT INTO `lx_session` VALUES('107528','nhkbsdol85ec1nj1rueiggik04','-1','code|s:4:\"248b\";','1442898611');
INSERT INTO `lx_session` VALUES('107529','s8ee9lencnl3pj6f67qdr33966','-1','','1442898171');
INSERT INTO `lx_session` VALUES('107530','qjflk24bdnbvhe79gr6cd4thn1','-1','','1442898205');
INSERT INTO `lx_session` VALUES('107531','pj3cob3gje59j5tk0b47rvrri4','-1','','1442898207');
INSERT INTO `lx_session` VALUES('107532','ldovu0arntjiqn681eva8vpf67','-1','','1442898319');
INSERT INTO `lx_session` VALUES('107533','8rnd4r2hpb6u5v6pnd6mj4n9l5','-1','','1442898455');
INSERT INTO `lx_session` VALUES('107534','175pjo40jkuboaqe4gc0pqjvr5','-1','','1442898490');
INSERT INTO `lx_session` VALUES('107535','k78rptqoveac1jk0v6ebs0e0u3','-1','','1442898497');
INSERT INTO `lx_session` VALUES('107536','6mugjf9dfg6nkqf2crf4s7uu42','-1','','1442898498');
INSERT INTO `lx_session` VALUES('107537','upijhtunar3oi7dnrib8lqsb77','-1','code|s:4:\"6c93\";','1442904194');
INSERT INTO `lx_session` VALUES('107538','7m41gul4496edt1qcqbmmmm423','-1','','1442904181');
INSERT INTO `lx_session` VALUES('107539','9jd4vhr9jdp7d0jbbtfc1l3lp7','-1','','1442904185');
INSERT INTO `lx_session` VALUES('107540','bphovcj9snuum8fe3rfpu9chv5','-1','','1442904566');
INSERT INTO `lx_session` VALUES('107541','89endo7cvmijh311cf7ekt25r2','-1','','1442905645');
INSERT INTO `lx_session` VALUES('107542','15od2th4l8ip235ecvujna77g5','-1','code|s:4:\"bfa9\";','1442905864');
INSERT INTO `lx_session` VALUES('107543','t4mcumc6gpctr1eap5ad1cpfc5','-1','','1442905670');
INSERT INTO `lx_session` VALUES('107544','3ekia7ukju8vppdi7tl9l43885','-1','','1442905789');
INSERT INTO `lx_session` VALUES('107545','n9dvrinljqsvd9svo04kfo48e1','-1','','1442905856');
INSERT INTO `lx_session` VALUES('107546','pjbl6796q3a2s33tdngn86pj56','-1','','1442906566');
INSERT INTO `lx_session` VALUES('107547','biq4hkedsnv2mk1p5o27fs3af2','-1','code|s:4:\"1665\";','1442906567');
INSERT INTO `lx_session` VALUES('107548','0qojqg13s04vb0uotndimsu853','-1','','1442908566');
INSERT INTO `lx_session` VALUES('107549','cscrvaqnjhjb076f2oqhqr29d2','-1','','1442908566');
INSERT INTO `lx_session` VALUES('107550','nrc6b82a0qi7c37ft1t6a9q2p2','-1','code|s:4:\"a54f\";','1442908569');
INSERT INTO `lx_session` VALUES('107551','01jmu8q6o15tnlhdjovsgmbdo5','-1','code|s:4:\"6ed2\";','1442908575');
INSERT INTO `lx_session` VALUES('107552','j975ridh8dlobbadn3f3f2van0','-1','','1442908700');
INSERT INTO `lx_session` VALUES('107553','23r5tqcst1nkf7n16pghgpluc5','-1','','1442908700');
INSERT INTO `lx_session` VALUES('107554','brsoshlot9mmeqejfhm28huhm2','-1','','1442908703');
INSERT INTO `lx_session` VALUES('107555','oqi5464ri0d8v7akimv35r7en4','-1','code|s:4:\"e345\";','1442910351');
INSERT INTO `lx_session` VALUES('107556','i9hd9pqgfcbt6f11mmhrc95su1','-1','','1442909845');
INSERT INTO `lx_session` VALUES('107557','slu08vcnpoqbqlgia9h72r28m6','-1','','1442910344');
INSERT INTO `lx_session` VALUES('107558','7c4d5suehvr1ip37ibicakegh4','-1','','1442910347');
INSERT INTO `lx_session` VALUES('107559','ua29j1ul7i75no3s17cnni8r80','-1','','1442910348');
INSERT INTO `lx_session` VALUES('107560','81k2qd8eljv203v1tarcthn895','-1','','1442910349');
INSERT INTO `lx_session` VALUES('107561','pb715gtf8c8tdog1mgh1ll4kf2','-1','','1442910351');
INSERT INTO `lx_session` VALUES('107562','rgeau4cpfors8h1stmbk977h71','-1','','1442913881');
INSERT INTO `lx_session` VALUES('107563','1t1hlsshf5s8cnorer5oh1v9s4','-1','','1442913883');
INSERT INTO `lx_session` VALUES('107564','mrnjd9cej46ihpn15m89n1t3j3','-1','','1442913887');
INSERT INTO `lx_session` VALUES('107565','ll14gliv9ah0o0ht126lq5vr45','-1','','1442913890');
INSERT INTO `lx_session` VALUES('107566','e4ui1c23td3rab7t39seda61m1','-1','','1442913893');
INSERT INTO `lx_session` VALUES('107567','3e0uprqsqskf095c5na8p85mg6','-1','','1442913925');
INSERT INTO `lx_session` VALUES('107568','6kdpfvggg7rde27aq8k7v3fme7','-1','','1442913927');
INSERT INTO `lx_session` VALUES('107569','r9lcgahc8ivldcc7o8v94s4ei2','-1','','1442913929');
INSERT INTO `lx_session` VALUES('107570','0bvp9ks5tesa3kdj6nfkokek41','-1','','1442913932');
INSERT INTO `lx_session` VALUES('107571','dmbpjqqo7nu486i2amhgn4st43','-1','','1442913935');
INSERT INTO `lx_session` VALUES('107572','5k208fkfrvc0ro4gh29tn0v8l5','-1','','1442913938');
INSERT INTO `lx_session` VALUES('107573','2b24fcdm8v62j4ed11vpb1at93','-1','','1442913941');
INSERT INTO `lx_session` VALUES('107574','efrm8irljd6kfa9q9c0be30rb1','-1','','1442913943');
INSERT INTO `lx_session` VALUES('107575','562q8v30bku3ssj2vkolhji817','-1','','1442913945');
INSERT INTO `lx_session` VALUES('107576','pc9vi8sai2vf0f3s6hsf8v8np1','-1','','1442913950');
INSERT INTO `lx_session` VALUES('107577','eis0sqmia9bcci49575ec3opl6','-1','','1442913953');
INSERT INTO `lx_session` VALUES('107578','ojk7cu4qfe6dig1s1ond4omr80','-1','','1442913957');
INSERT INTO `lx_session` VALUES('107579','651kjqfbkevei0k9310rq9j122','-1','','1442913960');
INSERT INTO `lx_session` VALUES('107580','kscm3ots0nbmpovhr3d0kq44f3','-1','','1442913964');
INSERT INTO `lx_session` VALUES('107581','fqhaet2il4rrlkd3d1h5ktb015','-1','','1442913967');
INSERT INTO `lx_session` VALUES('107582','tv1pk6lqo7i62hel8lh5uhhjj6','-1','','1442913971');
INSERT INTO `lx_session` VALUES('107583','j328f7nkod1lm2a0p9r3s821p2','-1','','1442913973');
INSERT INTO `lx_session` VALUES('107584','7oqsj1hf7g9eu51sf86ouvmrp6','-1','','1442913977');
INSERT INTO `lx_session` VALUES('107585','fpt4akbq6tvrajpt63cvjaqiq0','-1','','1442913980');
INSERT INTO `lx_session` VALUES('107586','8ateobds84p10qo2h3agj937o5','-1','','1442913982');
INSERT INTO `lx_session` VALUES('107587','tujun09t7d6tupjbkfs6ulbkg6','-1','code|s:4:\"868d\";','1442914999');
INSERT INTO `lx_session` VALUES('107588','knof7inen1r1qv4441rmo469i5','-1','code|s:4:\"c03a\";','1442915746');
INSERT INTO `lx_session` VALUES('107589','ns0b0abcgddtc8lgelcolbhgr5','-1','','1442916267');
INSERT INTO `lx_session` VALUES('107590','su68gucupm0k0se93s18og30r0','-1','','1442916809');
INSERT INTO `lx_session` VALUES('107591','2u8ifvactdaagm27lirtj68mv7','-1','','1442916811');
INSERT INTO `lx_session` VALUES('107592','nphg4qeebdm215k8aqhvriaf61','-1','code|s:4:\"5dcd\";sms_code|s:4:\"USN4\";sms_phone|s:11:\"15350006003\";','1442942308');
INSERT INTO `lx_session` VALUES('107593','sumsgfio8cm40qglmofoirplo7','-1','code|s:4:\"abd2\";','1442937901');
INSERT INTO `lx_session` VALUES('107594','n28bkmu522fddao2vb8gcme1q7','-1','uid|s:1:\"1\";','1442942298');
INSERT INTO `lx_session` VALUES('107595','b945b8e0jl3131rdmb8lspe401','-1','','1442934954');
INSERT INTO `lx_session` VALUES('107596','om38u5kpsro1n807tbhef0r1j2','-1','','1442934967');
INSERT INTO `lx_session` VALUES('107597','sl5ifsu4a9281gq3a5ci3uoiv0','-1','','1442934973');
INSERT INTO `lx_session` VALUES('107598','jumfum9s33is5kn90g0vn6fsj2','-1','','1442934986');
INSERT INTO `lx_session` VALUES('107599','ciuin2v55l7meveaotib999j85','-1','','1442934994');
INSERT INTO `lx_session` VALUES('107600','nm3veb75t9f4a2ibiptu7e6o03','-1','','1442935004');
INSERT INTO `lx_session` VALUES('107601','8vr6ho0tj8io4s7847i45hvkb4','-1','','1442935276');
INSERT INTO `lx_session` VALUES('107602','q47uje4si7rmb8cqcs53bkbl97','-1','','1442935429');
INSERT INTO `lx_session` VALUES('107603','49elp7v93epfr53ct18457a8v2','-1','','1442935860');
INSERT INTO `lx_session` VALUES('107604','0244uuhtt46esluqvb2gipa9q2','-1','','1442936098');
INSERT INTO `lx_session` VALUES('107605','tp57ar2np4ptndet9jni2n3l64','-1','','1442936223');
INSERT INTO `lx_session` VALUES('107606','l91sr5v4mnho8c3belodo6n0q6','-1','','1442936232');
INSERT INTO `lx_session` VALUES('107607','i0a75rkr06a5fe67sc8su6i7h5','-1','','1442936384');
INSERT INTO `lx_session` VALUES('107608','tu4qgr83s6tvv1j2j7erm5ak04','-1','','1442936426');
INSERT INTO `lx_session` VALUES('107609','ajga6ngv3itm72l5vtkeae8b03','-1','','1442936433');
INSERT INTO `lx_session` VALUES('107610','1qnbqjrslm4qij18on39lkj684','-1','','1442936439');
INSERT INTO `lx_session` VALUES('107611','214193t83i19p839kdphse3uj4','-1','','1442936651');
INSERT INTO `lx_session` VALUES('107612','i7t1992b9pul0ootmpanu29pf2','-1','','1442936655');
INSERT INTO `lx_session` VALUES('107613','15f60p7ultri1biuesfvu6crq5','-1','','1442936659');
INSERT INTO `lx_session` VALUES('107614','n56nvjkum4imrin2192oe0em32','-1','','1442936661');
INSERT INTO `lx_session` VALUES('107615','i7n1ommufnkiftclie7khdc0u4','-1','','1442936691');
INSERT INTO `lx_session` VALUES('107616','2uhor1p2jrbv6rnaeno1kknbq5','-1','','1442937007');
INSERT INTO `lx_session` VALUES('107617','i7v0ivmj464b2prbgeqjlpkuu5','-1','code|s:4:\"8896\";','1442937030');
INSERT INTO `lx_session` VALUES('107618','ad29v4kenmrgr06ucuocqf4da3','-1','code|s:4:\"ad53\";','1442937032');
INSERT INTO `lx_session` VALUES('107619','c4udoc5nsk5chqfcgesf2m5l67','-1','','1442937083');
INSERT INTO `lx_session` VALUES('107620','8oph6103c4oidkj6592v9ii507','-1','','1442937086');
INSERT INTO `lx_session` VALUES('107621','htovhrk12a4rqj6fca5i6f7i84','-1','','1442937301');
INSERT INTO `lx_session` VALUES('107622','sd1bc2vhpjuqgfhujtlfto07d3','-1','','1442937758');
INSERT INTO `lx_session` VALUES('107623','465iqtrv2m9jno3btmqpc5k9l0','-1','','1442937844');
INSERT INTO `lx_session` VALUES('107624','p9mdk3th2l5i48krv7e0clsbk3','-1','','1442938237');
INSERT INTO `lx_session` VALUES('107625','63opl6c763ulue1uorjp62rlu1','-1','','1442938885');
INSERT INTO `lx_session` VALUES('107626','grl7b1rs0feiltmrs8c5unep96','-1','code|s:4:\"7ddd\";','1442942388');
INSERT INTO `lx_session` VALUES('107627','e12m68cm7fsh2bij893cov3at3','-1','code|s:4:\"ba19\";','1442943384');
INSERT INTO `lx_session` VALUES('107628','hogvotafh444sck4gfrujbo6v2','-1','','1442945125');
INSERT INTO `lx_session` VALUES('107629','givdkbid49bosobnfun3ohjs60','-1','','1442945147');
INSERT INTO `lx_session` VALUES('107630','l2c7m303ohohto9tjddercrtm4','-1','','1442945191');
INSERT INTO `lx_session` VALUES('107631','o4vbr5hs5qpquk5jc6fh6n2c20','-1','','1442945269');
INSERT INTO `lx_session` VALUES('107632','gasdrqbrkgvpcv4qhrah47cn14','-1','','1442945295');
INSERT INTO `lx_session` VALUES('107633','4lpjp8pchc4l6b3uf3p1dpu5o6','-1','','1442950317');
INSERT INTO `lx_session` VALUES('107634','fenl0unpu44rgqd5ari7lttg23','-1','','1442959167');
INSERT INTO `lx_session` VALUES('107635','it5ibmfvprfkbcg81vo9h8aa37','-1','','1442959489');
INSERT INTO `lx_session` VALUES('107636','q39cuuhjajmn773jc7es0819r0','-1','','1442959877');
INSERT INTO `lx_session` VALUES('107637','91m1s18m0066jbuo41gtjhdvf6','-1','','1442962422');
INSERT INTO `lx_session` VALUES('107638','k611tq7uade8ifaunnmf9r8o67','-1','','1442962423');
INSERT INTO `lx_session` VALUES('107639','7olmogadeqj5qo4dcmnl9bb974','-1','','1442963236');
INSERT INTO `lx_session` VALUES('107640','9etdark23t77dvifk587lchhc2','-1','','1442963418');
INSERT INTO `lx_session` VALUES('107641','965d40empdc2e98rbsmmr33hp4','-1','','1442963427');
INSERT INTO `lx_session` VALUES('107642','du6de9ig9flggrrc7r6h92pvm7','-1','','1442967701');
INSERT INTO `lx_session` VALUES('107643','ji8bopmcp1ad9lm07e9rvs35i7','-1','','1442964862');
INSERT INTO `lx_session` VALUES('107644','ff7uscmt6ht2r9tamc0i8vs805','-1','code|s:4:\"4e75\";','1442964872');
INSERT INTO `lx_session` VALUES('107645','0aljgumsu3mc0el7i94v5btl23','-1','','1442965141');
INSERT INTO `lx_session` VALUES('107646','lduqvbgmft4avsgsq5oq1fct94','-1','','1442967679');
INSERT INTO `lx_session` VALUES('107647','mt9on2kcie8lub9shprou9c294','-1','','1442966704');
INSERT INTO `lx_session` VALUES('107648','bbm6rkdkjsc6e7dmbo2jj5a1i0','-1','','1442967701');
INSERT INTO `lx_session` VALUES('107649','7u4fotdn5u4pbcc476457qaom7','-1','','1442967712');
INSERT INTO `lx_session` VALUES('107650','cjj1ej5v9s27vmerrqpg5edcq6','-1','','1442968284');
INSERT INTO `lx_session` VALUES('107651','kgdmjqslhs0cos3nms165khh70','-1','code|s:4:\"fdb3\";','1442974415');
INSERT INTO `lx_session` VALUES('107652','6cpkghnpht6rl5n3ejstlb7q91','-1','code|s:4:\"bcea\";','1442974827');
INSERT INTO `lx_session` VALUES('107653','f0bakdgqnv4fv3rnagaes4jgs6','-1','','1442974837');
INSERT INTO `lx_session` VALUES('107654','d5lmsalmlfof096gr3tdtpubf7','-1','','1442974839');
INSERT INTO `lx_session` VALUES('107655','cn8f11bs2c83ru8v2giambmis3','-1','','1442974839');
INSERT INTO `lx_session` VALUES('107656','g78rnlc2vgl3m25srm048j1i16','-1','code|s:4:\"90ea\";','1442975231');
INSERT INTO `lx_session` VALUES('107657','k3hp5nrm6oeju1e4i31mqm3vl0','-1','code|s:4:\"4b45\";','1442975349');
INSERT INTO `lx_session` VALUES('107658','b6267kjbnq29jloki0r19dgsk2','-1','','1442975500');
INSERT INTO `lx_session` VALUES('107659','q5lc5rvvk15su11tegh2qp9597','-1','code|s:4:\"59c1\";','1442975500');
INSERT INTO `lx_session` VALUES('107660','m9qsdta12h4h8qnqg34mhhsah2','-1','code|s:4:\"bc29\";uid|s:1:\"1\";','1442999543');
INSERT INTO `lx_session` VALUES('107661','0i9nkjl9t4fuat0bts09lsate0','-1','code|s:4:\"c543\";','1442976292');
INSERT INTO `lx_session` VALUES('107662','vjouprpv9gb38q6vosi9ui2bh7','-1','','1442976301');
INSERT INTO `lx_session` VALUES('107663','e0apt63mpjuevviv2q87gnlhf5','-1','','1442976301');
INSERT INTO `lx_session` VALUES('107664','kafg455gnidil9vmncsh5og3m6','-1','','1442976899');
INSERT INTO `lx_session` VALUES('107665','nidihgia9ovq7t4ae23rnaulm5','-1','','1442976904');
INSERT INTO `lx_session` VALUES('107666','31ngpqfrcqorpcmlkguner76d1','-1','code|s:4:\"9f78\";','1442977259');
INSERT INTO `lx_session` VALUES('107667','pipt4jbpmqrl6ogbfbilv3aub1','-1','code|s:4:\"93f6\";','1443016226');
INSERT INTO `lx_session` VALUES('107668','n1vc0qp8gkilpj3htk1vbmlco3','-1','uid|s:1:\"1\";','1442987539');
INSERT INTO `lx_session` VALUES('107669','em7rj57es3avhveovm8kl27q90','-1','','1442981257');
INSERT INTO `lx_session` VALUES('107670','2ffi6t2bj5ja92kab7l9prtbv7','-1','','1442987230');
INSERT INTO `lx_session` VALUES('107671','7ccfh111kq6qh9sqo1brte5pk7','-1','','1442987409');
INSERT INTO `lx_session` VALUES('107672','k9saqrn86ns1fr63fenq411tg5','-1','','1442987409');
INSERT INTO `lx_session` VALUES('107673','cc9r1dst720roedg11u292irs0','-1','','1442987531');
INSERT INTO `lx_session` VALUES('107674','uebapms4v148vp0l3fusq829g1','-1','','1442987535');
INSERT INTO `lx_session` VALUES('107675','mltcl7ernatqf3mabbnsb3nud2','-1','','1442987539');
INSERT INTO `lx_session` VALUES('107676','h6riknrv4m8hk4k4levaengl17','-1','','1442987840');
INSERT INTO `lx_session` VALUES('107677','qblavou7gacl20ft1au3ie7ei2','-1','','1442988069');
INSERT INTO `lx_session` VALUES('107678','jkapa1earlbin9gia4nqgrt3a1','-1','','1442988218');
INSERT INTO `lx_session` VALUES('107679','viur03iaet4gng7485su13ff41','-1','','1442988229');
INSERT INTO `lx_session` VALUES('107680','qcql41oa87cld75gna2v4rquo0','-1','code|s:4:\"135e\";','1442993020');
INSERT INTO `lx_session` VALUES('107681','19v5rao8vh58kuput8n0kftba6','-1','code|s:4:\"843f\";','1442993460');
INSERT INTO `lx_session` VALUES('107682','g8oj1snfdnok316qqk9asit055','-1','','1442996572');
INSERT INTO `lx_session` VALUES('107683','3o9tt2g6c2jhbuftaol2d017a4','-1','code|s:4:\"2f79\";','1442997032');
INSERT INTO `lx_session` VALUES('107684','ibr8sqlgvlhbiejl4h7k5knhm5','-1','','1442998978');
INSERT INTO `lx_session` VALUES('107685','0l6bvffvhl3kmr4eni58vvii60','-1','','1442999510');
INSERT INTO `lx_session` VALUES('107686','intv448qrsaqaocc9isqj5d1p7','-1','','1442999524');
INSERT INTO `lx_session` VALUES('107687','8e3fht7g9r85ukuo63us8km647','-1','uid|s:1:\"1\";','1443008428');
INSERT INTO `lx_session` VALUES('107688','erf630gn971pe18tb0ba4us6m1','-1','','1443007780');
INSERT INTO `lx_session` VALUES('107689','evu2lt3ug94up8knbpa9ql5kn7','-1','','1443007861');
INSERT INTO `lx_session` VALUES('107690','9rjnf0bfg46kso1mu6cj96emd3','-1','','1443008162');
INSERT INTO `lx_session` VALUES('107691','o13q2vb6e18eecmk6e1gfd3tp5','-1','','1443008307');
INSERT INTO `lx_session` VALUES('107692','s3f8ulik6hul02hfl7qb0li0g4','-1','','1443008344');
INSERT INTO `lx_session` VALUES('107693','gp7cojbrpgh9v4kjbh46dop1t5','-1','','1443008401');
INSERT INTO `lx_session` VALUES('107694','q985b0rcidvnsjh6ptccoacf17','-1','','1443008420');
INSERT INTO `lx_session` VALUES('107695','8f24n4ahcgonbbou5k06eqfok0','-1','','1443008817');
INSERT INTO `lx_session` VALUES('107696','n4t8ltqasf6o52ckt9kl1lfql7','-1','','1443008890');
INSERT INTO `lx_session` VALUES('107697','fkoi852up54fr78u1q0a0vqcn1','-1','','1443010320');
INSERT INTO `lx_session` VALUES('107698','b4avhv77ith9qt3t75ate65be4','-1','','1443010526');
INSERT INTO `lx_session` VALUES('107699','8qoholibpa0bjs8ru25pv701l1','-1','','1443012059');
INSERT INTO `lx_session` VALUES('107700','m1brgi6l0h11sa910plr22f8a5','-1','uid|s:1:\"1\";','1443016223');
INSERT INTO `lx_session` VALUES('107701','3qlvpflqrb1aalieqi0k1l8jt0','-1','code|s:4:\"8cf6\";','1443016604');
INSERT INTO `lx_session` VALUES('107702','s2bnkc8eljf4bqn63vo3jauue3','-1','','1443020839');
INSERT INTO `lx_session` VALUES('107703','cutm089i7d84e7b7sd8qln7h23','-1','code|s:4:\"9cd6\";','1443020839');
INSERT INTO `lx_session` VALUES('107704','8psk7rlpsl9sl7o84psh308be3','-1','','1443020862');
INSERT INTO `lx_session` VALUES('107705','gr2e82ndr9g27qtapjbeso0po7','-1','code|s:4:\"fb3d\";','1443020864');
INSERT INTO `lx_session` VALUES('107706','plevvrmbaob6uuaojs9hr1vu33','-1','','1443024423');
INSERT INTO `lx_session` VALUES('107707','1jbkdu627nong54sposjgv13o2','-1','','1443024444');
INSERT INTO `lx_session` VALUES('107708','hcfgp50iuh8khgh3j7dg324jr4','-1','','1443024589');
INSERT INTO `lx_session` VALUES('107709','9c12jtfr3rs3d6eb0g40mh1dh3','-1','','1443037180');
INSERT INTO `lx_session` VALUES('107710','koj7qblsepec1ni6hduo2upss2','-1','','1443038031');
INSERT INTO `lx_session` VALUES('107711','mji92gg6bmj66dk2e51esvouo5','-1','code|s:4:\"15b8\";','1443038033');
INSERT INTO `lx_session` VALUES('107712','7lehs1m9662ngo3b6qfpeq8942','-1','code|s:4:\"7e0f\";','1443040957');
INSERT INTO `lx_session` VALUES('107713','igskt1fqvng35j7nd5b4lgagd3','-1','','1443047196');
INSERT INTO `lx_session` VALUES('107714','9bqjulsfbr7s7ht2ulp6a8jsn4','-1','','1443048833');
INSERT INTO `lx_session` VALUES('107715','5l0vv2slcmr8k9igb36okd7ek6','-1','','1443057517');
INSERT INTO `lx_session` VALUES('107716','cehjvvt6silbkfom8b7l60o5r7','-1','code|s:4:\"6060\";','1443064011');
INSERT INTO `lx_session` VALUES('107717','d622c1ten2rd36d522tv659c23','-1','code|s:4:\"c0bf\";sms_code|s:4:\"G2F6\";sms_phone|s:11:\"15350006003\";','1443064336');
INSERT INTO `lx_session` VALUES('107718','ghjuch69e2vncj73r1f26h8db4','-1','','1443064388');
INSERT INTO `lx_session` VALUES('107719','drprplhtlmmj3bftb9hnsfpnd2','-1','','1443064391');
INSERT INTO `lx_session` VALUES('107720','uqqef399mjr8cacochn11fppd6','-1','','1443064393');
INSERT INTO `lx_session` VALUES('107721','dhvhq5u46ajo6581cjcucc07o2','-1','code|s:4:\"db5c\";','1443064729');
INSERT INTO `lx_session` VALUES('107722','nt3kfmcfqgf4dfgb624cta0v83','-1','','1443064587');
INSERT INTO `lx_session` VALUES('107723','qr44rcloes9l08ldbetqo7kli6','-1','uid|s:1:\"1\";','1443064722');
INSERT INTO `lx_session` VALUES('107724','152fjp7ansdohb976m0hs3g5r0','-1','','1443064687');
INSERT INTO `lx_session` VALUES('107725','6e576v6jnijtee76thpoo3brg6','-1','code|s:4:\"3b3f\";','1443064813');
INSERT INTO `lx_session` VALUES('107726','4cdrhac2v9f0m47j3bq37c9t91','-1','','1443065487');
INSERT INTO `lx_session` VALUES('107727','9rvrvkc9q0qbnfrm5uhvofjc66','-1','code|s:4:\"fa2b\";','1443065837');
INSERT INTO `lx_session` VALUES('107728','rtb8fl0e6hiab6dcjph9mofmr7','-1','code|s:4:\"b294\";','1443069067');
INSERT INTO `lx_session` VALUES('107729','hlufbat2ggoh40mu5ur402oin2','-1','','1443069250');
INSERT INTO `lx_session` VALUES('107730','30972bciuff6p9i2busll80f34','-1','','1443074864');
INSERT INTO `lx_session` VALUES('107731','pvsve1pkllsp5p28tfe46vqvk1','-1','code|s:4:\"29f4\";','1443102287');
INSERT INTO `lx_session` VALUES('107732','pefp8262t5ncam7p0u3rpe26r6','-1','code|s:4:\"7243\";','1443115638');
INSERT INTO `lx_session` VALUES('107733','gh6q20pvakac5efv64ijt0tn67','-1','','1443112551');
INSERT INTO `lx_session` VALUES('107734','v14ihv2rk5u06oddj065m4h1e5','-1','','1443117874');
INSERT INTO `lx_session` VALUES('107735','ugc85ah1omm2eio8r79tkplrq4','-1','','1443117892');
INSERT INTO `lx_session` VALUES('107736','na51sd7psm0cc8edffju91bkt7','-1','','1443123070');
INSERT INTO `lx_session` VALUES('107737','8c6bglnii10dqlfrqnqm0k7ri3','-1','','1443129499');
INSERT INTO `lx_session` VALUES('107738','ihi67l1udsq04nv5r2kuf70sf5','-1','','1443135733');
INSERT INTO `lx_session` VALUES('107739','8eko8jr04jdk12lst2df6639m3','-1','','1443137229');
INSERT INTO `lx_session` VALUES('107740','s9jrjv76r7oht1e1m3p58mil63','-1','','1443143597');
INSERT INTO `lx_session` VALUES('107741','qcbes6mrgfgvm7h2pkjkcdqm25','-1','','1443143696');
INSERT INTO `lx_session` VALUES('107742','9o77iqt8s7tk88dpd211n5c474','-1','uid|s:1:\"1\";','1443147174');
INSERT INTO `lx_session` VALUES('107743','ch1rejh9oq9hdjp303ff1irj41','-1','','1443147132');
INSERT INTO `lx_session` VALUES('107744','up4161p7civ7gjfeo27uvd0dn1','-1','code|s:4:\"a709\";uid|s:1:\"1\";','1443155825');
INSERT INTO `lx_session` VALUES('107745','71ofbhfarh609o40b0ip7m3he0','-1','','1443147211');
INSERT INTO `lx_session` VALUES('107746','5k17ciqt757b4srsc3gstpj075','-1','code|s:4:\"7f95\";','1443147211');
INSERT INTO `lx_session` VALUES('107747','t1853jc8d47c7qfk9ujfg0i531','-1','code|s:4:\"ceb7\";','1443148570');
INSERT INTO `lx_session` VALUES('107748','a0jkh00ebaqflsrilucovd2gk1','-1','code|s:4:\"3db1\";','1443175641');
INSERT INTO `lx_session` VALUES('107749','hnlbbttmrrc4lcpn30n5g71p72','-1','','1443147795');
INSERT INTO `lx_session` VALUES('107750','tcil4lqojmq10e6j0kpp6o4lr0','-1','','1443147796');
INSERT INTO `lx_session` VALUES('107751','0ki6vfnca0a0t9b4daam37nrp6','-1','','1443147801');
INSERT INTO `lx_session` VALUES('107752','89q8m5npe2re45ef3kf3l9vtr5','-1','','1443147806');
INSERT INTO `lx_session` VALUES('107753','0o26683irj707r5n6gfgpisa25','-1','','1443147811');
INSERT INTO `lx_session` VALUES('107754','sr0t3jhl8265r30glt64ap9nf2','-1','','1443147816');
INSERT INTO `lx_session` VALUES('107755','hj25nnvloi9v69f86h0dvqsj94','-1','','1443147821');
INSERT INTO `lx_session` VALUES('107756','svrnks048o36e2dhk5lbb5u1e6','-1','','1443147826');
INSERT INTO `lx_session` VALUES('107757','ab47dm5sqn7e9k667a8han15q2','-1','','1443147831');
INSERT INTO `lx_session` VALUES('107758','fu858jjv0j2trv8p3dhkhnh8n4','-1','','1443147836');
INSERT INTO `lx_session` VALUES('107759','3553v506p0uctfsdpo9k48q4l4','-1','','1443147841');
INSERT INTO `lx_session` VALUES('107760','gnbhqu6rlkl07jk8e5hki2nbj6','-1','','1443147846');
INSERT INTO `lx_session` VALUES('107761','4ljnte5066mffcl9eu4s2g2eh4','-1','','1443147851');
INSERT INTO `lx_session` VALUES('107762','rvg8ft1kp1ogce8osssmcdh8p1','-1','','1443147856');
INSERT INTO `lx_session` VALUES('107763','s5tc9mv0itj6ub8u5sh8od5941','-1','','1443147861');
INSERT INTO `lx_session` VALUES('107764','mr5sa058dsgm46d9s1euqmp0p4','-1','','1443147866');
INSERT INTO `lx_session` VALUES('107765','6r0t9pt8mqemssgdlqmnj5ojt5','-1','','1443147871');
INSERT INTO `lx_session` VALUES('107766','s49tq7erqvd3ecavmb7av15vt2','-1','','1443147877');
INSERT INTO `lx_session` VALUES('107767','e1ed4li1uh9nddig5rn6546n15','-1','','1443147881');
INSERT INTO `lx_session` VALUES('107768','nusl4efkd8616h03hjk8a4ej51','-1','','1443147886');
INSERT INTO `lx_session` VALUES('107769','ms05hc399nbmp4b1k7n7fbm0s0','-1','','1443147891');
INSERT INTO `lx_session` VALUES('107770','qcm99t8cj4qd7ald5ffkpb7f21','-1','','1443147896');
INSERT INTO `lx_session` VALUES('107771','b24o345bndsn84g98mfgqmsjo6','-1','','1443147901');
INSERT INTO `lx_session` VALUES('107772','2u77eug24bejn2isu5dqjuj8n7','-1','','1443147923');
INSERT INTO `lx_session` VALUES('107773','kec8dio0v7hri4frj2pbilvol5','-1','','1443147934');
INSERT INTO `lx_session` VALUES('107774','gn0535k85v6qrftv5pibumf851','-1','code|s:4:\"f1f4\";','1443151194');
INSERT INTO `lx_session` VALUES('107775','fnji1ps4bc230vdn6roaofjmp1','-1','','1443153704');
INSERT INTO `lx_session` VALUES('107776','7diefaem4shr0n1ne893ipmph4','-1','','1443153721');
INSERT INTO `lx_session` VALUES('107777','6isihg7j3f0fnpfot1dch2fb07','-1','','1443153729');
INSERT INTO `lx_session` VALUES('107778','ts4u4trfq1i4u3rh31e9kkb917','-1','','1443153733');
INSERT INTO `lx_session` VALUES('107779','8aih1ojdi30qb79npg05rjap32','-1','','1443154858');
INSERT INTO `lx_session` VALUES('107780','qnmi7s9kbgjt10n5sjf35tqe44','-1','','1443153886');
INSERT INTO `lx_session` VALUES('107781','j0aadlpqq472064pdbacqbqon0','-1','','1443154074');
INSERT INTO `lx_session` VALUES('107782','8ejb01ou25quq3nnrr41p1nrl7','-1','','1443154381');
INSERT INTO `lx_session` VALUES('107783','jo0lu59094gdfq812k5tkfqkj5','-1','','1443154385');
INSERT INTO `lx_session` VALUES('107784','kgdrn1n74pedf7kcoaje4prkl5','-1','','1443154393');
INSERT INTO `lx_session` VALUES('107785','5ct2059fvo1stci2vcm15vmdl0','-1','','1443154400');
INSERT INTO `lx_session` VALUES('107786','io41tlia249nml1d7hmd46t4a1','-1','','1443154476');
INSERT INTO `lx_session` VALUES('107787','jdndrf9bb9umj8ppn09udhovg0','-1','','1443154547');
INSERT INTO `lx_session` VALUES('107788','jcsafbe5lfu7n770cbi52o1g07','-1','','1443154547');
INSERT INTO `lx_session` VALUES('107789','hcu1t91nilrsgo8kvaaq3bc974','-1','','1443154584');
INSERT INTO `lx_session` VALUES('107790','sh1dvps6e48oha9cfsfeg8ohq4','-1','','1443154641');
INSERT INTO `lx_session` VALUES('107791','edie3729uprk7devs737r4sag0','-1','','1443154710');
INSERT INTO `lx_session` VALUES('107792','2h54h4uim12a40ab08e28c24e6','-1','','1443154901');
INSERT INTO `lx_session` VALUES('107793','g8u8v397k6nnceuflh6pre0mt6','-1','','1443155128');
INSERT INTO `lx_session` VALUES('107794','8880r54l85plbcs0im0v9c6vf0','-1','','1443155135');
INSERT INTO `lx_session` VALUES('107795','g0qsnjffuaqvbkn0b27f2v10c0','-1','','1443155170');
INSERT INTO `lx_session` VALUES('107796','on71ivm7l336mt81vnlg4v4eq7','-1','','1443155170');
INSERT INTO `lx_session` VALUES('107797','74972klgccdmlgnn34d7mvsdm2','-1','','1443155180');
INSERT INTO `lx_session` VALUES('107798','79dpec9gqs702t685lfpc6eru4','-1','','1443155195');
INSERT INTO `lx_session` VALUES('107799','m3718jgqiphfi55pofp0rvd362','-1','','1443155197');
INSERT INTO `lx_session` VALUES('107800','8q0p32rcfo6cmebts1bfltcfd6','-1','','1443155207');
INSERT INTO `lx_session` VALUES('107801','3tsr5mujoumdn1bf27ulo6r8d2','-1','','1443155289');
INSERT INTO `lx_session` VALUES('107802','rj46hg4172ghfo3cah4ufbldh0','-1','','1443155305');
INSERT INTO `lx_session` VALUES('107803','mi7sjoh9t07k381o18gfcunae1','-1','','1443155307');
INSERT INTO `lx_session` VALUES('107804','49up1g571ai21uevk0k3f6eeg7','-1','','1443155308');
INSERT INTO `lx_session` VALUES('107805','hloq122ccsposcafvenk19jof3','-1','','1443155425');
INSERT INTO `lx_session` VALUES('107806','u93h9rb17uokr0quefmg3jlin3','-1','','1443155428');
INSERT INTO `lx_session` VALUES('107807','j7uq3vjkjtoauj3fi7eg4n8fj3','-1','','1443155531');
INSERT INTO `lx_session` VALUES('107808','944j85ne2sbvffq9vs2l3fjvq1','-1','','1443155562');
INSERT INTO `lx_session` VALUES('107809','d0dprj14edq8mdv0eernj42e56','-1','','1443155577');
INSERT INTO `lx_session` VALUES('107810','g7k1kiumv5s7kvo33409sj8fb7','-1','','1443155618');
INSERT INTO `lx_session` VALUES('107811','rt9mqbmdkcr8nmi45br2dtr3g6','-1','','1443155630');
INSERT INTO `lx_session` VALUES('107812','jr19sloq88tbs413844mfvnqo6','-1','','1443155633');
INSERT INTO `lx_session` VALUES('107813','3ipfjd0tejlv3rp7q8beqniu62','-1','','1443155709');
INSERT INTO `lx_session` VALUES('107814','hoc3h47jludjjf1oh91fl1fc31','-1','','1443155726');
INSERT INTO `lx_session` VALUES('107815','njjecsdb1abcoegs83vvj1utu3','-1','','1443155817');
INSERT INTO `lx_session` VALUES('107816','2dcnaogtlq2a8a10810at4a0e5','-1','','1443164257');
INSERT INTO `lx_session` VALUES('107817','gifqvk7iabrlttljlddt4j0kh6','-1','','1443166332');
INSERT INTO `lx_session` VALUES('107818','qku9jm6aju1tc1bv49rlu4p9k1','-1','','1443168332');
INSERT INTO `lx_session` VALUES('107819','06oborfdcaqktqd8jt1oo18ah5','-1','','1443170119');
INSERT INTO `lx_session` VALUES('107820','cs1dnco3jna61lt9elgjfuc8q2','-1','','1443170332');
INSERT INTO `lx_session` VALUES('107821','q3cuiqdmu1vejndivbjd00lvu1','-1','','1443170338');
INSERT INTO `lx_session` VALUES('107822','qe6jstsdbjgldh04th432hl1d5','-1','','1443172332');
INSERT INTO `lx_session` VALUES('107823','hbtl8pugctnduqerov9s3phm55','-1','uid|s:1:\"1\";','1443175860');
INSERT INTO `lx_session` VALUES('107824','j50e072i8p21j84q7ggn11r6e2','-1','','1443175715');
INSERT INTO `lx_session` VALUES('107825','ou33dq5vpcakn40dg8cdsrkk31','-1','','1443175774');
INSERT INTO `lx_session` VALUES('107826','qd6l65qhl5lu1so2urspd2vqv4','-1','code|s:4:\"b504\";','1443175820');
INSERT INTO `lx_session` VALUES('107827','b4prqbt092cnh0qc217vhbcr73','-1','','1443176689');
INSERT INTO `lx_session` VALUES('107828','vbdk6tun9mhl68e9ju8vv8tg35','-1','','1443176781');
INSERT INTO `lx_session` VALUES('107829','97cjfhqo7ml1rnodnlqg8n9jn4','-1','uid|s:1:\"1\";','1443180012');
INSERT INTO `lx_session` VALUES('107830','rb94lcf1q75as99td78kkkgo47','-1','','1443182041');
INSERT INTO `lx_session` VALUES('107831','guikvtgj54ulovqq8dfh7holj4','-1','','1443188555');
INSERT INTO `lx_session` VALUES('107832','lt13mvaknq4cgn53ggrpbl7ll3','-1','code|s:4:\"848a\";','1443188560');
INSERT INTO `lx_session` VALUES('107833','f9pif94dq7nmt8mfa3a7722gs5','-1','code|s:4:\"24c2\";uid|s:1:\"1\";','1443207045');
INSERT INTO `lx_session` VALUES('107834','8bv8t109jhcud3to3p49mfbl10','-1','code|s:4:\"68f6\";uid|s:0:\"\";','1443207560');
INSERT INTO `lx_session` VALUES('107835','t3h70qc63kj54peo6871g126j5','-1','','1443202872');
INSERT INTO `lx_session` VALUES('107836','cq067vmvnb90p2nking0f2len1','-1','','1443203049');
INSERT INTO `lx_session` VALUES('107837','7cnk9lbb2750lkqia01qc749q1','-1','','1443203135');
INSERT INTO `lx_session` VALUES('107838','1p3lbljqlsgk9ub3nmirh5cj24','-1','','1443203769');
INSERT INTO `lx_session` VALUES('107839','1pbmpa19tbg21ajb72dg58pr72','-1','','1443206724');
INSERT INTO `lx_session` VALUES('107840','gark634cddsb1rvds4ga21hnr5','-1','code|s:4:\"8566\";','1443206726');
INSERT INTO `lx_session` VALUES('107841','d8nfvk0jvnan9qoirr6f67ukt5','-1','','1443208669');
INSERT INTO `lx_session` VALUES('107842','kmkdivl5qqd190i7ovooov1ke7','-1','code|s:4:\"e7cd\";','1443208673');
INSERT INTO `lx_session` VALUES('107843','7rk6a9jjt32j70nulh8irabaq0','-1','','1443210413');
INSERT INTO `lx_session` VALUES('107844','b6pc6ffu5eqi3nn12j4j8kjk87','-1','','1443216654');
INSERT INTO `lx_session` VALUES('107845','5pf0gpa1b3ncg4tu16rvjq7464','-1','','1443219138');
INSERT INTO `lx_session` VALUES('107846','i7f4l2q8mam23p83p114ricgq5','-1','','1443223100');
INSERT INTO `lx_session` VALUES('107847','1g79uorgsgsmeo1f20559a2kr7','-1','code|s:4:\"3b2b\";','1443234125');
INSERT INTO `lx_session` VALUES('107848','jenqudvptfl6m3bb17fgsf1sr2','-1','code|s:4:\"15fb\";','1443248377');
INSERT INTO `lx_session` VALUES('107849','vk8prm188udbirg6n478hcgh83','-1','code|s:4:\"fedc\";','1443248897');
INSERT INTO `lx_session` VALUES('107850','kdsm0pqadsa3ooja14m69tu4p2','-1','uid|s:1:\"1\";','1443261781');
INSERT INTO `lx_session` VALUES('107851','7aubpifmtln8vv954o5bbg0o53','-1','','1443267007');
INSERT INTO `lx_session` VALUES('107852','d9q6en3nr6g822v1535nuk56f3','-1','code|s:4:\"a54d\";','1443267012');
INSERT INTO `lx_session` VALUES('107853','5c8upt5rnuto1300asjqorsd66','-1','','1443280909');
INSERT INTO `lx_session` VALUES('107854','qmagqfv1444app281oigpodo37','-1','','1443280909');
INSERT INTO `lx_session` VALUES('107855','l8p6qu0a1se435agoh668olov5','-1','uid|s:1:\"1\";','1443299474');
INSERT INTO `lx_session` VALUES('107856','49cj8oib894so34psctc8u43a2','-1','','1443296090');
INSERT INTO `lx_session` VALUES('107857','ofq5g9c7i9mcdh5gh502c11315','-1','uid|s:1:\"1\";','1443299311');
INSERT INTO `lx_session` VALUES('107858','c24dmiu8u9rodke0f96qs2nmc5','-1','','1443304944');
INSERT INTO `lx_session` VALUES('107859','rv3gr3fhfke0l94l4123a8qod3','-1','','1443304964');
INSERT INTO `lx_session` VALUES('107860','7vmf14ebmtnd0va8jcmmkunl93','-1','','1443306472');
INSERT INTO `lx_session` VALUES('107861','51b15sj7k7309dd8qsimf3fc91','-1','uid|s:1:\"1\";code|s:4:\"ae86\";','1443337252');
INSERT INTO `lx_session` VALUES('107862','sc1t0r0gao1osb79oospericn6','-1','','1443343075');
INSERT INTO `lx_session` VALUES('107863','5c1cpv4km1q9ph58pcq663n143','-1','uid|s:1:\"1\";code|s:4:\"0013\";admin_id|s:1:\"1\";','1443370319');
INSERT INTO `lx_session` VALUES('107864','bomgcrrrjcc7k4revurffj92l6','-1','code|s:4:\"e99d\";','1443370012');
INSERT INTO `lx_session` VALUES('107865','sgi1dp4l0p4did03gg24o5rj53','-1','code|s:4:\"cdff\";QC_userData|a:3:{s:5:\"state\";s:32:\"2854af25622db509de4c2c9e9eadffab\";s:12:\"access_token\";s:32:\"6D7D3A7D3A29632518407C8224887C9D\";s:6:\"openid\";s:32:\"E1A4797EB247685874F732308C4057C7\";}uid|s:0:\"\";','1443388468');
INSERT INTO `lx_session` VALUES('107866','60f5kleilbabhnsppi7mmrfi35','-1','code|s:4:\"761a\";token|a:4:{s:12:\"access_token\";s:32:\"2.00aEmfNGjJtKcD29d4c20b7206Bgjv\";s:9:\"remind_in\";s:6:\"163426\";s:10:\"expires_in\";i:163426;s:3:\"uid\";s:10:\"5698845604\";}uid|s:2:\"12\";QC_userData|a:3:{s:5:\"state\";s:32:\"dad9bafa63545c3b5f26657f3622b428\";s:12:\"access_token\";s:32:\"A5AB9F7B418A05E9A76E27EC7A24E654\";s:6:\"openid\";s:32:\"8D9D65106E6D6C67BBA02B71921A87E5\";}','1443390712');
INSERT INTO `lx_session` VALUES('107867','5umks6ap7hggpt5kmiavtsu833','-1','uid|s:1:\"1\";','1443374516');
INSERT INTO `lx_session` VALUES('107868','qhvtfksmbtj720q15qe8ml36d2','-1','','1443374345');
INSERT INTO `lx_session` VALUES('107869','f3a6s48q9r7japmgquvh8idjj6','-1','','1443374361');
INSERT INTO `lx_session` VALUES('107870','0qo5ppr6t98sl0r6fs6d4drd91','-1','uid|s:1:\"1\";code|s:4:\"a4d6\";','1443377781');
INSERT INTO `lx_session` VALUES('107871','ftchnphm6lfk19005ffdcf3n16','-1','uid|s:0:\"\";QC_userData|a:3:{s:5:\"state\";s:32:\"d30797bba6d61e279358f9d54313fafa\";s:12:\"access_token\";s:32:\"A5AB9F7B418A05E9A76E27EC7A24E654\";s:6:\"openid\";s:32:\"8D9D65106E6D6C67BBA02B71921A87E5\";}','1443390877');
INSERT INTO `lx_session` VALUES('107872','634embaoo7ksttrae2dk729pd2','-1','','1443378130');
INSERT INTO `lx_session` VALUES('107873','u7vrso7t4nbl1b532cvp6adi51','-1','','1443378131');
INSERT INTO `lx_session` VALUES('107874','siesulc38ent6cq7bpujkcrum0','-1','uid|s:1:\"1\";','1443378257');
INSERT INTO `lx_session` VALUES('107875','v90n0sliomoe10k2qr1651s6i0','-1','uid|s:1:\"1\";','1443378948');
INSERT INTO `lx_session` VALUES('107876','db424qb79dq3m82mbbcvlalfg3','-1','','1443379220');
INSERT INTO `lx_session` VALUES('107877','232r7kga0nmr4mrlidkgrpapk7','-1','','1443379250');
INSERT INTO `lx_session` VALUES('107878','ssflf2nh9cc31e4rumu0ppk0t7','-1','','1443380864');
INSERT INTO `lx_session` VALUES('107879','nc6csbp44b4shsb6frq7j3b815','-1','','1443380869');
INSERT INTO `lx_session` VALUES('107880','f13ek72st307ul1ema4j763m96','-1','','1443380934');
INSERT INTO `lx_session` VALUES('107881','313f8renotuvv4q8errkdl28r5','-1','','1443380944');
INSERT INTO `lx_session` VALUES('107882','a9gemrp6csfc9e69gi9f0l9tt0','-1','','1443382704');
INSERT INTO `lx_session` VALUES('107883','ad274211ic0hopispaqnskbds0','-1','','1443384011');
INSERT INTO `lx_session` VALUES('107884','lj75f8m7rvpbbchm59ts9cqhq3','-1','','1443384017');
INSERT INTO `lx_session` VALUES('107885','ufuv7id1ov06gh7rsfqgg58u20','-1','','1443385182');
INSERT INTO `lx_session` VALUES('107886','rduo6bj9hq02mev28p1mngmgh0','-1','','1443385184');
INSERT INTO `lx_session` VALUES('107887','43bg7cn9sqk3f4k91eaf5kar36','-1','','1443385303');
INSERT INTO `lx_session` VALUES('107888','ag5a89uknsin5lm922t5av8jt3','-1','','1443385305');
INSERT INTO `lx_session` VALUES('107889','4pdqvhfh95keosmgn54vd10ht2','-1','','1443385865');
INSERT INTO `lx_session` VALUES('107890','ur915945evdumi6t3qqv2ea8q5','-1','','1443385864');
INSERT INTO `lx_session` VALUES('107891','jha8o00vijdarimo7vl5e3osf2','-1','','1443385865');
INSERT INTO `lx_session` VALUES('107892','1p5uqjcdf2b2ehq1on298svls3','-1','','1443385865');
INSERT INTO `lx_session` VALUES('107893','6r89bv6lftecph8t8mb2nfbod3','-1','','1443386324');
INSERT INTO `lx_session` VALUES('107894','nqebc07eboh3niccjvfacfi4i0','-1','QC_userData|a:0:{}','1443386407');
INSERT INTO `lx_session` VALUES('107895','6j9gr19gtnfkg4b3kak91odsr1','-1','QC_userData|a:1:{s:5:\"state\";s:32:\"91250cc9f8df39c7b9e663ec94c2524b\";}','1443386403');
INSERT INTO `lx_session` VALUES('107896','hi7iuvqdkce91g451bntihlrn1','-1','QC_userData|a:0:{}','1443386448');
INSERT INTO `lx_session` VALUES('107897','bc7rac3dam2vq6vgr8pf4vr576','-1','','1443388560');
INSERT INTO `lx_session` VALUES('107898','lpihru08totp4s0m1pm15ongf6','-1','','1443388559');
INSERT INTO `lx_session` VALUES('107899','0h3bmko34mrhevqo7q9iud4ps1','-1','','1443388560');
INSERT INTO `lx_session` VALUES('107900','on4cj9qsb4n982gmrun5timki7','-1','','1443388560');
INSERT INTO `lx_session` VALUES('107901','4f7kjs1horsogghsf7f0kd9h71','-1','','1443390155');
INSERT INTO `lx_session` VALUES('107902','uc46dfpoapvc93i3is5f1q77n7','-1','','1443390194');
INSERT INTO `lx_session` VALUES('107903','6h64mjdp23ebng6j0b3g4u42j3','-1','','1443390245');
INSERT INTO `lx_session` VALUES('107904','9q5137orcgrtseenl7ahpjj5o1','-1','','1443390247');
INSERT INTO `lx_session` VALUES('107905','pnhtcas48eabriv8hb2oulprr4','-1','','1443390251');
INSERT INTO `lx_session` VALUES('107906','oc4u0pjpe5b12m11711gq7hku1','-1','','1443390343');
INSERT INTO `lx_session` VALUES('107907','p1miev1r5bc57ihimlo4m7m4u3','-1','','1443390345');
INSERT INTO `lx_session` VALUES('107908','lvf97peq6506j6s137vfqa1213','-1','','1443390807');
INSERT INTO `lx_session` VALUES('107909','vhlkmcmqufkurmh36q30qpq6o4','-1','','1443390870');
INSERT INTO `lx_session` VALUES('107910','kco8ckfop7a8f2mqc7tpdrqjj0','-1','','1443390877');
INSERT INTO `lx_session` VALUES('107911','8fv93i4dm7tncglsre50qtur93','-1','','1443390878');
INSERT INTO `lx_session` VALUES('107912','j4i30utqj89ksmd02pjs6biva4','-1','','1443390878');
INSERT INTO `lx_session` VALUES('107913','cru6lqernfr4skd8hjihnla7j1','-1','','1443390878');
INSERT INTO `lx_session` VALUES('107914','eoc0gs406s5oup1qlnf3uhhm03','-1','','1443391018');
INSERT INTO `lx_session` VALUES('107915','h64m18qihomttvqgq9bqr3jr20','-1','','1443391344');
INSERT INTO `lx_session` VALUES('107916','vpvteq7mg79d0hqcf2ps2j4qp4','-1','code|s:4:\"21d6\";','1443411478');
INSERT INTO `lx_session` VALUES('107917','od5i49kncf3tbd0f9764io1k04','-1','','1443413800');
INSERT INTO `lx_session` VALUES('107918','24bauf1h1h7leo46divi7l4nc7','-1','','1443413801');
INSERT INTO `lx_session` VALUES('107919','il3ibgh8pc77k69isg9il00l45','-1','','1443413825');
INSERT INTO `lx_session` VALUES('107920','9lg41jisdt587ckk0baiimo287','-1','','1443413836');
INSERT INTO `lx_session` VALUES('107921','2qn42ha3u2vdbu7gsg0gql0h21','-1','','1443413838');
INSERT INTO `lx_session` VALUES('107922','f0p8u3jon4tq9b0s886tma3234','-1','','1443413839');
INSERT INTO `lx_session` VALUES('107923','38lf1lrdg8qprjtuv6g72352a5','-1','','1443413841');
INSERT INTO `lx_session` VALUES('107924','475bmqhoqdtjnp1f634vtp85k7','-1','','1443413850');
INSERT INTO `lx_session` VALUES('107925','2bqnh3uobv44qkkbb4qjiu6eg0','-1','','1443413851');
INSERT INTO `lx_session` VALUES('107926','soj591t90tse16nnm7ja8n6hp1','-1','','1443413853');
INSERT INTO `lx_session` VALUES('107927','nqmm85vev73l8dvgsjpef546a2','-1','','1443413857');
INSERT INTO `lx_session` VALUES('107928','v6mgd5sgqhpql3m94vcsvmgsl2','-1','','1443413874');
INSERT INTO `lx_session` VALUES('107929','k4o58e88sj1ondm42qeqei7r13','-1','','1443413875');
INSERT INTO `lx_session` VALUES('107930','kab71lqdpmbp3gf21jcbsmtg24','-1','','1443413876');
INSERT INTO `lx_session` VALUES('107931','du388131o9q69rl5elod880ds0','-1','','1443413881');
INSERT INTO `lx_session` VALUES('107932','b3675kqr9o49qthoiqb7lq86r2','-1','','1443413901');
INSERT INTO `lx_session` VALUES('107933','3j7mbt8c7fovjbvn5oftdvn163','-1','','1443413903');
INSERT INTO `lx_session` VALUES('107934','6a32e2qcd1hdkcd06re0qql2n5','-1','','1443413904');
INSERT INTO `lx_session` VALUES('107935','1kkvnehen43gf5k2l3vr9rii27','-1','','1443413905');
INSERT INTO `lx_session` VALUES('107936','ijq9ac474lfsuvl4ub9pdkm600','-1','','1443413908');
INSERT INTO `lx_session` VALUES('107937','a1grlu7as5746cmgdc8s5qgkg3','-1','','1443413910');
INSERT INTO `lx_session` VALUES('107938','bqig7rt1asi7ojc4p0g9icami6','-1','','1443413911');
INSERT INTO `lx_session` VALUES('107939','cv70a9udvr4brd0cifnka5riu7','-1','','1443413912');
INSERT INTO `lx_session` VALUES('107940','l1oobehh7chi27fo1tca7mvm84','-1','','1443413925');
INSERT INTO `lx_session` VALUES('107941','akec57rpg2ilbd9f4l3dj44l82','-1','','1443413927');
INSERT INTO `lx_session` VALUES('107942','nfcpo17kf0d69emd7oouiu6883','-1','','1443413941');
INSERT INTO `lx_session` VALUES('107943','2q009uq1cmh8c557mrpdtmov11','-1','','1443413942');
INSERT INTO `lx_session` VALUES('107944','btn1fic9pla26d9tc5a4h8fjd3','-1','','1443413943');
INSERT INTO `lx_session` VALUES('107945','02m13alr3is6m9tfcnf5v4nav5','-1','','1443413952');
INSERT INTO `lx_session` VALUES('107946','mkefnv88cif80h5cf4p5lkf251','-1','','1443413954');
INSERT INTO `lx_session` VALUES('107947','h24fmgnk9ap8e87ju01pfje2e4','-1','','1443413956');
INSERT INTO `lx_session` VALUES('107948','3reca1b4a2u6i85m7942o07as7','-1','','1443413979');
INSERT INTO `lx_session` VALUES('107949','82khnqhusqhklb2e4bdfk71534','-1','','1443413986');
INSERT INTO `lx_session` VALUES('107950','49sc4itelmcvffcelgb59gov11','-1','','1443413988');
INSERT INTO `lx_session` VALUES('107951','tqdeup04aft30jsakhvrvm0su2','-1','','1443413995');
INSERT INTO `lx_session` VALUES('107952','mqu1p0fq7alkfe4am524lc3o42','-1','','1443414001');
INSERT INTO `lx_session` VALUES('107953','845u6bfc40itc59nc6o89c7ob1','-1','','1443414003');
INSERT INTO `lx_session` VALUES('107954','tcq4c8bai6ulpspb57umuf5bo7','-1','','1443414079');
INSERT INTO `lx_session` VALUES('107955','c4rqm560fkdf1jeunl9fmglfd1','-1','','1443414090');
INSERT INTO `lx_session` VALUES('107956','86c9nvgr1emjnuok9p8dvf96r7','-1','','1443414091');
INSERT INTO `lx_session` VALUES('107957','i359ah5913itb10hntf0b781c4','-1','','1443414093');
INSERT INTO `lx_session` VALUES('107958','ogna012c2j41ra5d0avu0mvq33','-1','','1443414095');
INSERT INTO `lx_session` VALUES('107959','sevhov055vd6nnask9vsam39b1','-1','','1443414097');
INSERT INTO `lx_session` VALUES('107960','j6itcaa2ch2r0dc4474r0tsmh7','-1','','1443414103');
INSERT INTO `lx_session` VALUES('107961','mjmee4j4qeqj19kmie50i69qa2','-1','','1443414107');
INSERT INTO `lx_session` VALUES('107962','jd0h8hmfu8i23l3auni44gc2r6','-1','','1443414109');
INSERT INTO `lx_session` VALUES('107963','vqdt32ac7glt8eo54m9vjbac15','-1','','1443414122');
INSERT INTO `lx_session` VALUES('107964','39pngcfsfnnbr7p6bp0mo63jh4','-1','','1443414128');
INSERT INTO `lx_session` VALUES('107965','el8mddg2vccku4md6ph1041243','-1','','1443414129');
INSERT INTO `lx_session` VALUES('107966','4bg35hi0dgbbr504cummbikkf4','-1','','1443414145');
INSERT INTO `lx_session` VALUES('107967','ritjqsrhrhuivg6s1dpqi8jf85','-1','','1443415121');
INSERT INTO `lx_session` VALUES('107968','bp7rb0sv8d7gftnher4srhku05','-1','','1443415121');
INSERT INTO `lx_session` VALUES('107969','r9blioeb7sif1e9ihvstqt4n32','-1','','1443415122');
INSERT INTO `lx_session` VALUES('107970','bkl48po3bhjemt3mf60qg7e9s7','-1','','1443415124');
INSERT INTO `lx_session` VALUES('107971','4gmgbc3d9juubhkg97c5ma6130','-1','','1443415125');
INSERT INTO `lx_session` VALUES('107972','urde25vnb7fiobrim4vjpf90t1','-1','','1443415125');
INSERT INTO `lx_session` VALUES('107973','vd76io9979lh9uqf6p1c2aa216','-1','','1443415126');
INSERT INTO `lx_session` VALUES('107974','n2jc67r2fhkhepdom9d3pdaaa3','-1','','1443415127');
INSERT INTO `lx_session` VALUES('107975','31big9iaik0vjncmosdaaun5i5','-1','','1443415129');
INSERT INTO `lx_session` VALUES('107976','1gpl7li17nf2fsq7d81v7ejv83','-1','','1443415129');
INSERT INTO `lx_session` VALUES('107977','7g195g6lr4vint1016ghifjis6','-1','','1443415130');
INSERT INTO `lx_session` VALUES('107978','oasrotkq6n7m15bp573tti1922','-1','','1443415132');
INSERT INTO `lx_session` VALUES('107979','qbg6k2kshaa36hja4knf3plva0','-1','','1443415133');
INSERT INTO `lx_session` VALUES('107980','s3qnh9cla47h2di6dqt1rgp0k6','-1','','1443415134');
INSERT INTO `lx_session` VALUES('107981','435fun8oqie66e6j5kfm1cnro4','-1','','1443415135');
INSERT INTO `lx_session` VALUES('107982','a511mtq4q1kpo1gens7k360v61','-1','','1443415136');
INSERT INTO `lx_session` VALUES('107983','d33haq2nhc7f654aggln07f0l2','-1','','1443415137');
INSERT INTO `lx_session` VALUES('107984','t4uuejrjhnag2drip0g9oh4kh7','-1','','1443415138');
INSERT INTO `lx_session` VALUES('107985','qqgnl81d1sbpuhnm5v9fd781t4','-1','','1443415139');
INSERT INTO `lx_session` VALUES('107986','nphsk801ufelng7u3g6upm7bi0','-1','','1443415140');
INSERT INTO `lx_session` VALUES('107987','ra0ceomq7cjjge24i2cd8hjru2','-1','','1443415142');
INSERT INTO `lx_session` VALUES('107988','occc4qr416lhukt33nh4509vt1','-1','','1443415142');
INSERT INTO `lx_session` VALUES('107989','3t0crsjscet4tibd086mrm5cu2','-1','','1443415144');
INSERT INTO `lx_session` VALUES('107990','ncrhflccjen8v0hhff6ukhq4g2','-1','','1443415145');
INSERT INTO `lx_session` VALUES('107991','f4er56upec52jmk94qlgqd0k26','-1','','1443415147');
INSERT INTO `lx_session` VALUES('107992','287921iphdemp3pt941v23o870','-1','','1443415148');
INSERT INTO `lx_session` VALUES('107993','lv67ckca7bfkvppvs9op25va00','-1','','1443415149');
INSERT INTO `lx_session` VALUES('107994','e34trdbkvrqr40je4n7ai5vge6','-1','','1443415149');
INSERT INTO `lx_session` VALUES('107995','ggoqmo092pbkvrgf1mr0tcue35','-1','','1443415151');
INSERT INTO `lx_session` VALUES('107996','pg7522g1bq9suo48hsktajbcp1','-1','','1443415152');
INSERT INTO `lx_session` VALUES('107997','gsp9bknbgvnkj7uje8cfcm0bv7','-1','','1443415152');
INSERT INTO `lx_session` VALUES('107998','lc8bt7ieed7efi78bn78im5dm3','-1','','1443415154');
INSERT INTO `lx_session` VALUES('107999','0hdbaqoadrp27eo6kjvfrna2k6','-1','','1443415155');
INSERT INTO `lx_session` VALUES('108000','qeio2relkpls2m5g3rrsvpo9g1','-1','','1443415156');
INSERT INTO `lx_session` VALUES('108001','a44k3843epuiddrg9vrrlcbom6','-1','','1443415156');
INSERT INTO `lx_session` VALUES('108002','nnqsa700fonj2h0uc5r9cf7fb6','-1','','1443415157');
INSERT INTO `lx_session` VALUES('108003','1alua50foqrtb7p30le5bv9bl1','-1','','1443415159');
INSERT INTO `lx_session` VALUES('108004','0qqvnn2621gvh33bb1t67na2k3','-1','','1443415160');
INSERT INTO `lx_session` VALUES('108005','drfk79icipflr8bnps9enktb52','-1','','1443415161');
INSERT INTO `lx_session` VALUES('108006','1jc27e1ic5dnsm0cp45vejetm0','-1','','1443415161');
INSERT INTO `lx_session` VALUES('108007','f23knvp5jr0hpj1b1krrjitdr0','-1','','1443415163');
INSERT INTO `lx_session` VALUES('108008','4gfi0f37c41vn0laj2048sone1','-1','','1443415164');
INSERT INTO `lx_session` VALUES('108009','1hojpaq5kao08g1cvns8v8ks02','-1','QC_userData|a:1:{s:5:\"state\";s:32:\"888e79333a945a56813d58655e51354a\";}uid|s:1:\"1\";','1443420991');
INSERT INTO `lx_session` VALUES('108010','0sh2em7di5uo5efsm9u3vpii42','-1','','1443418411');
INSERT INTO `lx_session` VALUES('108011','ap68egmlsp6iiccvq6n6aibp14','-1','','1443418415');
INSERT INTO `lx_session` VALUES('108012','f9s46v0h2qfcsjfqsccj1m0l66','-1','QC_userData|a:0:{}','1443418438');
INSERT INTO `lx_session` VALUES('108013','3t307spsu80c3n2pgei7pm4n47','-1','','1443418450');
INSERT INTO `lx_session` VALUES('108014','skuulbp4kl40tinrtcg3e5jn74','-1','','1443418452');
INSERT INTO `lx_session` VALUES('108015','noq3ln1ovbofo9j9d8p0c16lq1','-1','','1443418460');
INSERT INTO `lx_session` VALUES('108016','g5i0rv41hcnulvevoa6ubnuon4','-1','','1443418471');
INSERT INTO `lx_session` VALUES('108017','ppt2h9kestu89r52kohlad3ta3','-1','','1443419650');
INSERT INTO `lx_session` VALUES('108018','td3374nsr43c78famamd6jbqd6','-1','','1443420505');
INSERT INTO `lx_session` VALUES('108019','0djrdk83dg5oiuu69iq7bikhf5','-1','','1443420779');
INSERT INTO `lx_session` VALUES('108020','6dvum7ushv2f8ki4n3cjqrs224','-1','','1443420804');
INSERT INTO `lx_session` VALUES('108021','cthdgdtdql5thn3hv5b0moo155','-1','','1443420804');
INSERT INTO `lx_session` VALUES('108022','14kkb249evr3uq4qqkbrk0p775','-1','','1443420846');
INSERT INTO `lx_session` VALUES('108023','mv5m3i7i4h66p1fd2i6q9c0au0','-1','','1443420991');
INSERT INTO `lx_session` VALUES('108024','rr09gvvfvik9413013nr8f2eg7','-1','','1443420999');
INSERT INTO `lx_session` VALUES('108025','mtsrklu87ddf76lq4j7qj1kad4','-1','','1443421751');
INSERT INTO `lx_session` VALUES('108026','evag8nvtr3il4telsa47df3uu1','-1','','1443421866');
INSERT INTO `lx_session` VALUES('108027','7uaf42jpbu6gjrist9qqc3pcc4','-1','','1443428326');
INSERT INTO `lx_session` VALUES('108028','q7r85ujpkj91o0dese4g03mfh6','-1','','1443429949');
INSERT INTO `lx_session` VALUES('108029','5jpls82eehae5f92i3sflprj67','-1','','1443433491');
INSERT INTO `lx_session` VALUES('108030','j6ulg4ol573tv1lpjjg9t1g994','-1','code|s:4:\"1b68\";admin_id|s:1:\"1\";QC_userData|a:1:{s:5:\"state\";s:32:\"986cf6155f9c552961c3fee3213e8d26\";}uid|s:1:\"1\";','1443499322');
INSERT INTO `lx_session` VALUES('108031','4mn2cpsl5h4tfhmtsu5oplrbq3','-1','','1443437577');
INSERT INTO `lx_session` VALUES('108032','5u5hos32r9c9ist4o7ajkrjvq2','-1','','1443437593');
INSERT INTO `lx_session` VALUES('108033','usia5p1t7dksdi4qa22ofj4527','-1','','1443437596');
INSERT INTO `lx_session` VALUES('108034','ahpgmk7alk23vfmk5scpdu7277','-1','','1443437596');
INSERT INTO `lx_session` VALUES('108035','pqj9i00n22tihh35td9qjt23h2','-1','code|s:4:\"3eec\";sms_code|s:4:\"EDKL\";sms_phone|s:11:\"15350006003\";uid|i:13;admin_id|s:1:\"1\";','1443444352');
INSERT INTO `lx_session` VALUES('108036','gfnetd4ib4hoge5dcl6dkrcsr6','-1','','1443438979');
INSERT INTO `lx_session` VALUES('108037','hh3thcfbmf00eaq0ro6ehvsuc5','-1','','1443438988');
INSERT INTO `lx_session` VALUES('108038','8tcovei8tnj9tppcq1is7gblg2','-1','','1443438991');
INSERT INTO `lx_session` VALUES('108039','r7dbiptdj7b23rnpnj9brk8bu7','-1','','1443439093');
INSERT INTO `lx_session` VALUES('108040','f9690h58erbv8ghh1646btt8u7','-1','','1443439101');
INSERT INTO `lx_session` VALUES('108041','i1esrbhnt5u5m4sltq2of612a0','-1','','1443439103');
INSERT INTO `lx_session` VALUES('108042','ndma8oh099i0v5ms4v39nqkug6','-1','','1443439105');
INSERT INTO `lx_session` VALUES('108043','g3vnksb3l71glhpit9n5l7gbo4','-1','','1443439109');
INSERT INTO `lx_session` VALUES('108044','e7h45qad8lnol4g7m9m6n30d51','-1','','1443439111');
INSERT INTO `lx_session` VALUES('108045','fmshb6ite8q8p22c4ihcd2afj4','-1','','1443439119');
INSERT INTO `lx_session` VALUES('108046','5es5emf2kv364tpro9mgsg95f5','-1','','1443439170');
INSERT INTO `lx_session` VALUES('108047','agv67ee918v1ivlnqsh5a9fnh1','-1','','1443439189');
INSERT INTO `lx_session` VALUES('108048','jem19nastdaa3bl9krj1auctu2','-1','','1443439236');
INSERT INTO `lx_session` VALUES('108049','3ce8s0o1iut3aecvcd9sscp420','-1','code|s:4:\"5362\";uid|s:2:\"13\";sms_code|s:4:\"NV23\";sms_phone|s:11:\"15372994200\";','1443441876');
INSERT INTO `lx_session` VALUES('108050','osc35fskrdtmm23dkrhaj966r1','-1','','1443439240');
INSERT INTO `lx_session` VALUES('108051','2eombrohv8og0gvp02vljnsld2','-1','','1443439240');
INSERT INTO `lx_session` VALUES('108052','66a0f6g676l8o9eq81mn3jrnu4','-1','','1443439455');
INSERT INTO `lx_session` VALUES('108053','032ckdaukje47e0vhm1l0d5bj1','-1','','1443439622');
INSERT INTO `lx_session` VALUES('108054','7ji3e69i29ahajook36q542g21','-1','','1443440191');
INSERT INTO `lx_session` VALUES('108055','gqkbd0h7pn1vsrr8dda2gvtia6','-1','','1443440196');
INSERT INTO `lx_session` VALUES('108056','addeh732fed1dkst2a0rmaoml1','-1','uid|s:2:\"13\";','1443440354');
INSERT INTO `lx_session` VALUES('108057','u77fuff5pf8qf0ogrgou6arsg7','-1','','1443440305');
INSERT INTO `lx_session` VALUES('108058','3odc5b9f92ed4d5bk9m21puku5','-1','','1443440624');
INSERT INTO `lx_session` VALUES('108059','9f4te2i723dm33c5jrd4d0ai11','-1','','1443441673');
INSERT INTO `lx_session` VALUES('108060','jlob17bke8jlse1h8tn0m22gv7','-1','','1443441684');
INSERT INTO `lx_session` VALUES('108061','0mvpiju52a0bcf2eicjfi936d2','-1','','1443441687');
INSERT INTO `lx_session` VALUES('108062','vesc7nn4eemj5qqee125053eo2','-1','','1443441692');
INSERT INTO `lx_session` VALUES('108063','32j26t6gvqq0cllmj86ehfbav5','-1','','1443441790');
INSERT INTO `lx_session` VALUES('108064','17t1mb30hbk984nako95mpkqk2','-1','','1443441821');
INSERT INTO `lx_session` VALUES('108065','932bmiekus7udb957u5f57vlb7','-1','','1443441822');
INSERT INTO `lx_session` VALUES('108066','trgevcrro3iiesm3epcqm014d0','-1','','1443441822');
INSERT INTO `lx_session` VALUES('108067','suij19hcjhdn7b3ej5v1dfgfj6','-1','','1443441858');
INSERT INTO `lx_session` VALUES('108068','n830354dqm4cvlo9rv6ic9hkr5','-1','','1443441862');
INSERT INTO `lx_session` VALUES('108069','5obf982oj50at63a8q3ssheru0','-1','','1443441864');
INSERT INTO `lx_session` VALUES('108070','gsorraq9alk5e878fcrda63en0','-1','','1443442009');
INSERT INTO `lx_session` VALUES('108071','psd89uu1u7h9k181f6epvrh5k2','-1','','1443442303');
INSERT INTO `lx_session` VALUES('108072','mhnj8jn7dfmv7pqjpui0m3p1o3','-1','','1443442509');
INSERT INTO `lx_session` VALUES('108073','bln8ckgijjdn8agr9j97ve4b62','-1','','1443443630');
INSERT INTO `lx_session` VALUES('108074','e983r66f3qbssaas1j0njvenu6','-1','','1443447075');
INSERT INTO `lx_session` VALUES('108075','ds7rdu769dhqimhc6a37ib8sq2','-1','','1443449152');
INSERT INTO `lx_session` VALUES('108076','atnp7ovgdkj3185t6oehaukpf7','-1','','1443449204');
INSERT INTO `lx_session` VALUES('108077','hlqui19pndc0qu66svuk4tr4g2','-1','','1443449238');
INSERT INTO `lx_session` VALUES('108078','dhhsp3npjk65ntnro80gskp5p6','-1','','1443449330');
INSERT INTO `lx_session` VALUES('108079','sf5fcqb6ve5dj2vnf5n2mm1du4','-1','','1443459622');
INSERT INTO `lx_session` VALUES('108080','3of25acgg44rq56fuqusksshk0','-1','','1443469046');
INSERT INTO `lx_session` VALUES('108081','3n5f2fq1lqi0e40nocnmsokoq6','-1','','1443491549');
INSERT INTO `lx_session` VALUES('108082','k9ktpnerl8fadt0fcq34rchd52','-1','','1443491549');
INSERT INTO `lx_session` VALUES('108083','93qcqr72mdirrbvbs8ghtat0e4','-1','code|s:4:\"2526\";','1443491815');
INSERT INTO `lx_session` VALUES('108084','9btgrve3nllrd450ov4ceaq6f3','-1','code|s:4:\"d46a\";','1443492055');
INSERT INTO `lx_session` VALUES('108085','qo160f5l9d7j4n8ktdp8vtv7d3','-1','','1443494324');
INSERT INTO `lx_session` VALUES('108086','1d3oe4vo1gl7h9f7lccpeej2p4','-1','','1443494950');
INSERT INTO `lx_session` VALUES('108087','ql5dmkn499giage33mkidk5nb1','-1','','1443495669');
INSERT INTO `lx_session` VALUES('108088','ngc7dqoqgbe1sjv1marqrsb1o6','-1','','1443495669');
INSERT INTO `lx_session` VALUES('108089','j9iapeg577ste8hhsvdkom4bg2','-1','code|s:4:\"74ca\";','1443495946');
INSERT INTO `lx_session` VALUES('108090','fbiuuog3tbleos96c49ld4gtl0','-1','','1443496762');
INSERT INTO `lx_session` VALUES('108091','cbvrccb7954n2odhjvb08o4ug2','-1','admin_id|s:1:\"1\";','1443520966');
INSERT INTO `lx_session` VALUES('108092','4b3fb1lm0r99nr5qu36ng9p8d7','-1','','1443497152');
INSERT INTO `lx_session` VALUES('108093','4j5vboula57c8aqmqa9qf6fhq7','-1','QC_userData|a:3:{s:5:\"state\";s:32:\"88656b05471928ba4bc63e44a9a2358e\";s:12:\"access_token\";s:32:\"A5AB9F7B418A05E9A76E27EC7A24E654\";s:6:\"openid\";s:32:\"8D9D65106E6D6C67BBA02B71921A87E5\";}uid|s:2:\"12\";','1443499255');
INSERT INTO `lx_session` VALUES('108094','jehgbtmoqnrtlm8f9i8grt4j86','-1','','1443498286');
INSERT INTO `lx_session` VALUES('108095','jk5rds28vdn54fmmuk063i2a80','-1','QC_userData|a:1:{s:5:\"state\";s:32:\"276ef1bece41f14ed28b17ce7f798601\";}','1443499302');
INSERT INTO `lx_session` VALUES('108096','r5tcauli2nupbgk8b59tgs4el7','-1','QC_userData|a:0:{}','1443499305');
INSERT INTO `lx_session` VALUES('108097','6rklpb4bn570st75m31rpm4r71','-1','','1443499323');
INSERT INTO `lx_session` VALUES('108098','1scnb8g599b2mg6vfltinpooh5','-1','','1443505904');
INSERT INTO `lx_session` VALUES('108099','74an4ud4kruhl5s7mogje7r973','-1','','1443503260');
INSERT INTO `lx_session` VALUES('108100','2sudak69q95eknenqj4imumbs1','-1','','1443503260');
INSERT INTO `lx_session` VALUES('108101','tuov5f2ine9jvvm243dgr19f41','-1','','1443503346');
INSERT INTO `lx_session` VALUES('108102','loc68ttb75qamgpr0c0crjrrm2','-1','','1443503386');
INSERT INTO `lx_session` VALUES('108103','d85s47u7ja0n7753i2h8ct29r1','-1','','1443504895');
INSERT INTO `lx_session` VALUES('108104','epn6do9pibkd964680a65m4be3','-1','','1443505922');
INSERT INTO `lx_session` VALUES('108105','f5n1o7g5mq3ggenhpooo4n66l3','-1','code|s:4:\"fc44\";','1443505923');
INSERT INTO `lx_session` VALUES('108106','ra3f94c0i17j2tbhmcp00qgqr6','-1','','1443505982');
INSERT INTO `lx_session` VALUES('108107','tla7oklv2uhthc92sk1ea9p006','-1','code|s:4:\"9f6f\";','1443507120');
INSERT INTO `lx_session` VALUES('108108','sq09qtfsfv9qrg96cr39mf4sg5','-1','','1443512827');
INSERT INTO `lx_session` VALUES('108109','hu44m41lbk5g9h2b3sh9t5ntq0','-1','','1443518634');
INSERT INTO `lx_session` VALUES('108110','da5r6vgbem4enhet2c7uc0s8c4','-1','','1443518828');
INSERT INTO `lx_session` VALUES('108111','hhuuqq15rk5g5k4fhuf0182et1','-1','','1443518828');
INSERT INTO `lx_session` VALUES('108112','sqlosbpkhbgrrbkbljne5mkc07','-1','','1443518834');
INSERT INTO `lx_session` VALUES('108113','hlsdaikfmeffkbjoiqk6sgt932','-1','','1443519071');
INSERT INTO `lx_session` VALUES('108114','h4tp9e8l5spqeg7id7dkutvk83','-1','','1443519682');
INSERT INTO `lx_session` VALUES('108115','gdakl5bme4ib9f4spqet4rcrl1','-1','','1443521071');
INSERT INTO `lx_session` VALUES('108116','sed12dei8sjl8nf5r8rvv12d47','-1','','1443521595');
INSERT INTO `lx_session` VALUES('108117','2g3871dq19f4cfqjiijr9p75q6','-1','','1443521598');
INSERT INTO `lx_session` VALUES('108118','u7038qmms3gu5uk5f6h6cdqp82','-1','','1443521602');
INSERT INTO `lx_session` VALUES('108119','pekkh5eg1rvllog4mfoukbsdd4','-1','','1443521606');
INSERT INTO `lx_session` VALUES('108120','fb78mk17hdc60cuaragmiue6r1','-1','','1443521612');
INSERT INTO `lx_session` VALUES('108121','cpof08a8779hc4h1bp3oqgev57','-1','','1443523071');
INSERT INTO `lx_session` VALUES('108122','ov2ia2p26fhkts0trma543gcq4','-1','','1443525071');
INSERT INTO `lx_session` VALUES('108123','hl6feqjtghh4pjlljeuniacja2','-1','','1443527071');
INSERT INTO `lx_session` VALUES('108124','4frd2uq6g1abj1degmm3thsae5','-1','','1443527144');
INSERT INTO `lx_session` VALUES('108125','cd3hqu942s2teqtme3picip3d4','-1','','1443529071');
INSERT INTO `lx_session` VALUES('108126','t72iuk8mkgqt5p847a7ujvtn62','-1','','1443555425');
INSERT INTO `lx_session` VALUES('108127','hu9kbhjkrsnljj527tjvglr3i0','-1','','1443563611');
INSERT INTO `lx_session` VALUES('108128','0v1gumu9odnrt9o3i0q1jobld3','-1','','1443582815');
INSERT INTO `lx_session` VALUES('108129','1u0muqkjlbb22o4mjbp03rriq4','-1','','1443583033');
INSERT INTO `lx_session` VALUES('108130','1qqh1feq1t77u6r65kotfrgfd6','-1','','1443583033');
INSERT INTO `lx_session` VALUES('108131','1huggk3u9jol7c69jnbmqlbma6','-1','','1443583033');
INSERT INTO `lx_session` VALUES('108132','qscsium87tn679hmlt73uh72v4','-1','','1443587638');
INSERT INTO `lx_session` VALUES('108133','1rh0bqbh2djbfc91r2rnbb9nf7','-1','code|s:4:\"f4a8\";uid|s:0:\"\";','1443593923');
INSERT INTO `lx_session` VALUES('108134','cjep5k1suehpuckhu2ghrr2li2','-1','','1443587914');
INSERT INTO `lx_session` VALUES('108135','enk1pf3haic64dossjs556cpb1','-1','code|s:4:\"fc9f\";','1443587983');
INSERT INTO `lx_session` VALUES('108136','h74kma6ba98i3l6ckloaq06je7','-1','','1443588027');
INSERT INTO `lx_session` VALUES('108137','khrivp1j0u1dcmrcarlt3mioa4','-1','code|s:4:\"3895\";','1443588106');
INSERT INTO `lx_session` VALUES('108138','qe6d6dfvn4624sj5mjalrdqvv4','-1','code|s:4:\"b24a\";','1443588108');
INSERT INTO `lx_session` VALUES('108139','pk6fnkrqtd76t1h015gmiiein1','-1','code|s:4:\"cacd\";','1443588108');
INSERT INTO `lx_session` VALUES('108140','va260867416kmmftj0mpkdgn03','-1','code|s:4:\"8ffd\";','1443588108');
INSERT INTO `lx_session` VALUES('108141','3rtrerr2olgs8t8164jmeotc91','-1','QC_userData|a:1:{s:5:\"state\";s:32:\"1fe0b16d4c51fdf080e4c5ab6809ad28\";}','1443590027');
INSERT INTO `lx_session` VALUES('108142','hma938oda2v5s160pi5l8bs7e6','-1','','1443590133');
INSERT INTO `lx_session` VALUES('108143','pgqqlavv7qi5jci9hvm96ih4r6','-1','code|s:4:\"1ae9\";','1443590295');
INSERT INTO `lx_session` VALUES('108144','2n9gkdkkf50bve5sd0r4hdop94','-1','','1443590763');
INSERT INTO `lx_session` VALUES('108145','352ouhes0itbpp2qigaio61r31','-1','code|s:4:\"e629\";','1443590769');
INSERT INTO `lx_session` VALUES('108146','7gor4h7aggr5mhe7kg6rqb9ed7','-1','','1443590772');
INSERT INTO `lx_session` VALUES('108147','kuvru4o1duktqhdth00hc2o1k6','-1','','1443590774');
INSERT INTO `lx_session` VALUES('108148','23ib0en9u3uoi4b459lntpq873','-1','','1443590808');
INSERT INTO `lx_session` VALUES('108149','8bqqfgct2r6tc5jqcv5ofvfqr6','-1','','1443590814');
INSERT INTO `lx_session` VALUES('108150','7t6r13ddir91j3t4muvnjgtvv6','-1','code|s:4:\"c6a9\";','1443591010');
INSERT INTO `lx_session` VALUES('108151','vef74gaq3b3500hq0fd61ksq22','-1','','1443590936');
INSERT INTO `lx_session` VALUES('108152','o8cq4scor2gdnkvtjmvhjha0g5','-1','','1443591066');
INSERT INTO `lx_session` VALUES('108153','ldijgk4tisq9ispkv6bsfqqtf1','-1','','1443591850');
INSERT INTO `lx_session` VALUES('108154','9h2nr9vmce4v1dk91d9k5iss63','-1','','1443591966');
INSERT INTO `lx_session` VALUES('108155','m6p4748g9f42s0vrull828t9u7','-1','','1443591969');
INSERT INTO `lx_session` VALUES('108156','v2hlgdc3192htapbrs8ed4gmf3','-1','','1443592027');
INSERT INTO `lx_session` VALUES('108157','eclp7tqlbd0c9vl0rk54eoq776','-1','code|s:4:\"58bc\";','1443592142');
INSERT INTO `lx_session` VALUES('108158','08gmmdfppciqv7u9jcti4p1g77','-1','code|s:4:\"76ac\";','1443593056');
INSERT INTO `lx_session` VALUES('108159','d9596s22n6guv50g73earo9eq3','-1','','1443593222');
INSERT INTO `lx_session` VALUES('108160','v45ght61qno7m69krsvoi0lbm4','-1','','1443593277');
INSERT INTO `lx_session` VALUES('108161','qtja4nktunk69tth3ng0re72f4','-1','','1443593303');
INSERT INTO `lx_session` VALUES('108162','ibcftp6rbpls6l3olo9p8fch07','-1','','1443593307');
INSERT INTO `lx_session` VALUES('108163','p0b2nt4kv0kt9kmdfsjf24e2r2','-1','code|s:4:\"8a77\";','1443593310');
INSERT INTO `lx_session` VALUES('108164','28pu06uga55ivmvrpf3olsgea0','-1','code|s:4:\"983c\";','1443593311');
INSERT INTO `lx_session` VALUES('108165','harfcssefoba9hparromptrc47','-1','','1443593462');
INSERT INTO `lx_session` VALUES('108166','febbbtkm7rkhrm6ddid1p64tu1','-1','','1443593919');
INSERT INTO `lx_session` VALUES('108167','srsqamuc45jnnk3d0sirct6ge0','-1','code|s:4:\"19c8\";','1443594010');
INSERT INTO `lx_session` VALUES('108168','fqkkdfmn75sqa08ia4l1jhg0l5','-1','QC_userData|a:1:{s:5:\"state\";s:32:\"58b6e7fc5917b0ae67005595ab31d8fb\";}','1443594027');
INSERT INTO `lx_session` VALUES('108169','1dqp0vp6b6nu37uoqq3tjsvrq3','-1','','1443596028');
INSERT INTO `lx_session` VALUES('108170','a8j401vi0f939vgh1d1mul7fe2','-1','code|s:4:\"6469\";','1443598027');
INSERT INTO `lx_session` VALUES('108171','62lh54t9t2bij0r6ajd87me0j7','-1','QC_userData|a:1:{s:5:\"state\";s:32:\"e53b942f46063eba1d63f3ff10a2c1d4\";}','1443652101');
INSERT INTO `lx_session` VALUES('108172','f291v5em0pgl2hlc6tv2halse6','-1','','1443600439');
INSERT INTO `lx_session` VALUES('108173','shn74nmkb1frcih4odrk6ii5s5','-1','','1443600503');
INSERT INTO `lx_session` VALUES('108174','flo314n1fltslglud02u55ek36','-1','','1443608200');
INSERT INTO `lx_session` VALUES('108175','r8eg9oot16agtdml9r1j2123b3','-1','','1443608201');
INSERT INTO `lx_session` VALUES('108176','n1i9q172jv2jh19eie89llfss2','-1','','1443608202');
INSERT INTO `lx_session` VALUES('108177','5oekncdla8hsjhueo4fusuke81','-1','','1443608212');
INSERT INTO `lx_session` VALUES('108178','c8mup5jklocbgptesehp6s69e2','-1','','1443608213');
INSERT INTO `lx_session` VALUES('108179','qr8nlim9sui4grjjia3shk1ji5','-1','code|s:4:\"a233\";','1443619189');
INSERT INTO `lx_session` VALUES('108180','n2nff3ugcvigqhsmgav8u3u0g4','-1','','1443629243');
INSERT INTO `lx_session` VALUES('108181','odeh1ngmevh4vrrpqgo45a5907','-1','','1443629337');
INSERT INTO `lx_session` VALUES('108182','k37ka4s82sgt3jjdp9q7lf60f5','-1','code|s:4:\"5ae8\";','1443636788');
INSERT INTO `lx_session` VALUES('108183','75fv6md3692hnp9f4n0q3er0i1','-1','','1443641931');
INSERT INTO `lx_session` VALUES('108184','v8so0b96mmfcmjrmrrqmfvrfq2','-1','','1443650319');
INSERT INTO `lx_session` VALUES('108185','9e73t9tpmr8jce0e86k8jvgiv7','-1','','1443664291');
INSERT INTO `lx_session` VALUES('108186','3cvrcrobfvnovh6bfq87k1ji93','-1','','1443674902');
INSERT INTO `lx_session` VALUES('108187','l38mb12lnopblfm241bqa1g206','-1','','1443674902');
INSERT INTO `lx_session` VALUES('108188','g3lud16khi2ipbuhtlmar3b4k7','-1','','1443674902');
INSERT INTO `lx_session` VALUES('108189','ujleehn6pufqek122fs5vb0mh4','-1','code|s:4:\"1910\";','1443676652');
INSERT INTO `lx_session` VALUES('108190','pt4lq9pmdb6jb2ba750dvlbdn5','-1','code|s:4:\"485d\";sms_code|s:4:\"I7RU\";sms_phone|s:11:\"15350006003\";','1443676699');
INSERT INTO `lx_session` VALUES('108191','abmjnqt9ub1d2ihe99qp9e89o2','-1','admin_id|s:1:\"1\";','1443677227');
INSERT INTO `lx_session` VALUES('108192','tevif3mueucjut3hku0i5slpn7','-1','','1443677183');
INSERT INTO `lx_session` VALUES('108193','t4igfmuj3u4u4jps7vb2celrr7','-1','','1443677193');
INSERT INTO `lx_session` VALUES('108194','p3m3cbm32mh9mot2o7n5ib0vq2','-1','','1443677203');
INSERT INTO `lx_session` VALUES('108195','8ij6gfg0ubvm4vrmtlh27fl0t7','-1','','1443677218');
INSERT INTO `lx_session` VALUES('108196','9krmq8onagm2v688ol61h303r2','-1','','1443677221');
INSERT INTO `lx_session` VALUES('108197','l86lnfg7dg14jf4q0joobcsan0','-1','','1443677644');
INSERT INTO `lx_session` VALUES('108198','uf0jiab97oso7hg7ud244trm03','-1','','1443677762');
INSERT INTO `lx_session` VALUES('108199','dehi3il5acjkbtcgki4msrdd44','-1','','1443677766');
INSERT INTO `lx_session` VALUES('108200','2obgpuulrg1ea1p15sprv71481','-1','admin_id|s:1:\"1\";','1443678331');
INSERT INTO `lx_session` VALUES('108201','riieur802kgbd0u1akj3clslr6','-1','code|s:4:\"ce5f\";QC_userData|a:1:{s:5:\"state\";s:32:\"1a18eeaaecdd03e0207eb989da8b69ae\";}','1443680188');
INSERT INTO `lx_session` VALUES('108202','bl033d9tnnehebrcdm2534rp94','-1','code|s:4:\"d80b\";','1443680016');
INSERT INTO `lx_session` VALUES('108203','mj04fikma8klrnksis4d148rj7','-1','code|s:4:\"ee44\";','1443680020');
INSERT INTO `lx_session` VALUES('108204','ultocmcj04crt87udpnbkieh55','-1','code|s:4:\"e4e5\";','1443680151');
INSERT INTO `lx_session` VALUES('108205','sjkev68avfadv382nqkhfh2nc3','-1','code|s:4:\"39d3\";','1443680183');
INSERT INTO `lx_session` VALUES('108206','dc97ple1vv0j5nrc3mgktchks2','-1','code|s:4:\"d631\";','1443680188');
INSERT INTO `lx_session` VALUES('108207','b7jh4uj1g7q9bdda795b1aq2d2','-1','','1443686732');
INSERT INTO `lx_session` VALUES('108208','kg1fi4gdha4uo4fid2tr5o2md4','-1','','1443686762');
INSERT INTO `lx_session` VALUES('108209','1atqh8cg0eqe5lhi4qgv869bi6','-1','','1443699864');
INSERT INTO `lx_session` VALUES('108210','kko3ou8t4hf0jn6slhg3knssl5','-1','','1443699867');
INSERT INTO `lx_session` VALUES('108211','r1n2h2honc3m4bpnjenofqsfj6','-1','','1443699868');
INSERT INTO `lx_session` VALUES('108212','en45u13q8ldgsdpifnj3579806','-1','','1443699871');
INSERT INTO `lx_session` VALUES('108213','1u016op456bp132p3mc79ct027','-1','','1443699874');
INSERT INTO `lx_session` VALUES('108214','os3o579boa52uglhjprc2pl480','-1','code|s:4:\"8402\";','1443711103');
INSERT INTO `lx_session` VALUES('108215','gd4a99mkdoog18f43cq9chsh44','-1','','1443713761');
INSERT INTO `lx_session` VALUES('108216','m323vnbeveats75sig6qlk23g6','-1','','1443715761');
INSERT INTO `lx_session` VALUES('108217','bsjhf0j48jh9ph1oohgr107td5','-1','code|s:4:\"59d9\";','1443715769');
INSERT INTO `lx_session` VALUES('108218','2fb3u1ma9fekov4fsbfqbrlh37','-1','','1443723429');
INSERT INTO `lx_session` VALUES('108219','rpo4f3sucnf20hrn836dsh5sp5','-1','','1443727944');
INSERT INTO `lx_session` VALUES('108220','bfvgpmqlel50r06h4aapvkd8f2','-1','','1443737880');
INSERT INTO `lx_session` VALUES('108221','s1av9md1vggltmhfhbjftjfh22','-1','','1443752109');
INSERT INTO `lx_session` VALUES('108222','kva60g9akkqpgpuh9g5vjmcdo1','-1','admin_id|s:1:\"1\";','1443779104');
INSERT INTO `lx_session` VALUES('108223','u9he9d5u7u9blj0fa9dn199sr4','-1','','1443766238');
INSERT INTO `lx_session` VALUES('108224','a3b4c5m2pi7dk1id7ask0spgk4','-1','','1443766799');
INSERT INTO `lx_session` VALUES('108225','h24p0v2gpirb70m394rs5ba743','-1','','1443767035');
INSERT INTO `lx_session` VALUES('108226','te9l24nsnc1ob54cr60noaf8k4','-1','','1443767138');
INSERT INTO `lx_session` VALUES('108227','3tt8t85foq31q0p8f5mui2al75','-1','','1443767593');
INSERT INTO `lx_session` VALUES('108228','pj2k583m78avahn6u87bh7g7k1','-1','','1443767597');
INSERT INTO `lx_session` VALUES('108229','h6aja2ha1coo8t1k5lkbddcdq6','-1','','1443767599');
INSERT INTO `lx_session` VALUES('108230','rmoc0pnqc79qrb9hko9dsj3la5','-1','','1443771459');
INSERT INTO `lx_session` VALUES('108231','9mitrkvt7idhq5ubhalh65vhv3','-1','','1443768059');
INSERT INTO `lx_session` VALUES('108232','g2h7p3gjapbakjmbj1om8c0fs5','-1','','1443768122');
INSERT INTO `lx_session` VALUES('108233','4l4fq28vhqh6ur27dbe598ne26','-1','','1443770759');
INSERT INTO `lx_session` VALUES('108234','0hq1krt1nnrvg23d3s08nbp191','-1','','1443771431');
INSERT INTO `lx_session` VALUES('108235','k8ue16e5njkbat735j49koiu83','-1','','1443771976');
INSERT INTO `lx_session` VALUES('108236','6nc04f32hqrju43hoj16a2p3a0','-1','','1443772869');
INSERT INTO `lx_session` VALUES('108237','ib3g753a1p9qhftlbomu3brh31','-1','','1443772871');
INSERT INTO `lx_session` VALUES('108238','bngbc3h5kh5tkovu2r8aj99b01','-1','','1443773348');
INSERT INTO `lx_session` VALUES('108239','ds2i4olgqc8nc6s1mb42gi1hb2','-1','','1443773362');
INSERT INTO `lx_session` VALUES('108240','up2fa0jlmckua8kp288amcq7b6','-1','','1443776055');
INSERT INTO `lx_session` VALUES('108241','reec6v1lts8rl9912nc218uq83','-1','','1443776058');
INSERT INTO `lx_session` VALUES('108242','gt8m533o6r0h1ogamqaojol660','-1','','1443776465');
INSERT INTO `lx_session` VALUES('108243','22i1fhior4gdfa5mjr4rc6r4g3','-1','','1443776560');
INSERT INTO `lx_session` VALUES('108244','uasaishjcjfec7dufl4qe0noq3','-1','','1443776897');
INSERT INTO `lx_session` VALUES('108245','7v6v2agsf1ldcv6j6v64v97p47','-1','','1443776900');
INSERT INTO `lx_session` VALUES('108246','ekbqh05vdpjne9br31p0f5kdh6','-1','','1443777332');
INSERT INTO `lx_session` VALUES('108247','c4omkat9i5p2u3pqucqt5v4it2','-1','','1443777402');
INSERT INTO `lx_session` VALUES('108248','is8vch44o7op2m312srf4q4mo6','-1','','1443777574');
INSERT INTO `lx_session` VALUES('108249','1b2h9p4jfn7t0sut2rnjrkeuv3','-1','','1443777650');
INSERT INTO `lx_session` VALUES('108250','msl80oru9lapgtiustl05he432','-1','','1443777659');
INSERT INTO `lx_session` VALUES('108251','94cjms1i00n0hor4b58cecqpl7','-1','','1443777751');
INSERT INTO `lx_session` VALUES('108252','9nvs4p78031l4gjmapf118tal1','-1','','1443777752');
INSERT INTO `lx_session` VALUES('108253','h4s46lps7fimb74grn073q12u6','-1','','1443778113');
INSERT INTO `lx_session` VALUES('108254','a0b59k1avecdr40joh49jsgn70','-1','','1443778119');
INSERT INTO `lx_session` VALUES('108255','senvvg7umer3br47j21o9ar047','-1','','1443778170');
INSERT INTO `lx_session` VALUES('108256','r9kkichb54fvij80idsi3t9dn3','-1','','1443779104');
INSERT INTO `lx_session` VALUES('108257','da9sauu1acbh2383nts3ha99c6','-1','','1443779557');
INSERT INTO `lx_session` VALUES('108258','lt2pllgs1vl2a72jmd6ep3qka4','-1','','1443786215');
INSERT INTO `lx_session` VALUES('108259','s9iupq40nk18s26v2mkg1762f4','-1','','1443786217');
INSERT INTO `lx_session` VALUES('108260','77gu5jqkke2co0dqtac9p0dcu7','-1','','1443786778');
INSERT INTO `lx_session` VALUES('108261','h87ltfnsmqf84sh972kp4jp2o6','-1','','1443786779');
INSERT INTO `lx_session` VALUES('108262','lkjrsv7sjnkvr3va315c3fvip2','-1','','1443786779');
INSERT INTO `lx_session` VALUES('108263','u17fduj39fj64ml2acr47ku9r3','-1','QC_userData|a:1:{s:5:\"state\";s:32:\"5c4f9057ad9504610a2c6d2822d66ff0\";}','1443786781');
INSERT INTO `lx_session` VALUES('108264','7nhagi8lbv1b9dvtoidc80g454','-1','','1443786781');
INSERT INTO `lx_session` VALUES('108265','ensgfp9375r6ktmufva19ce667','-1','','1443788215');
INSERT INTO `lx_session` VALUES('108266','6epqjvotcffl86df1k7qaecqk5','-1','','1443790214');
INSERT INTO `lx_session` VALUES('108267','uqbcinqji2q240i0fkne53el33','-1','code|s:4:\"8ae6\";','1443790217');
INSERT INTO `lx_session` VALUES('108268','b1dfpoapus4ejl3v2upif35f34','-1','','1443804365');
INSERT INTO `lx_session` VALUES('108269','ob4i6lrgal7aakj2ea9ppuh877','-1','code|s:4:\"dca1\";','1443804375');
INSERT INTO `lx_session` VALUES('108270','7ve4n7fr7qau68n9guofuia5d4','-1','code|s:4:\"c52f\";','1443804375');
INSERT INTO `lx_session` VALUES('108271','0p66n80cinu0mdep0iqpc0fml4','-1','','1443806365');
INSERT INTO `lx_session` VALUES('108272','bifvvg0lur6vplpd29n9q03gm3','-1','code|s:4:\"90c5\";','1443806370');
INSERT INTO `lx_session` VALUES('108273','gnph2d4q0poo68n21dd57a0gs6','-1','','1443812177');
INSERT INTO `lx_session` VALUES('108274','kgl56rgbdfijl3ov5eiq11amj5','-1','','1443814574');
INSERT INTO `lx_session` VALUES('108275','r1kckvvi13t6oc7rghd8pkhbg4','-1','','1443825611');
INSERT INTO `lx_session` VALUES('108276','hfjiqsu6tnjij479d3gmmota50','-1','admin_id|s:1:\"1\";QC_userData|a:1:{s:5:\"state\";s:32:\"78bcd24bae691216352cc65fe1bbfb54\";}uid|s:0:\"\";code|s:4:\"aeb3\";','1443848677');
INSERT INTO `lx_session` VALUES('108277','p3knotqe3ss6fo0ahjvasd8ll5','-1','','1443843315');
INSERT INTO `lx_session` VALUES('108278','ibk5euqblnm9c4m7tk4fqo5oj4','-1','','1443843779');
INSERT INTO `lx_session` VALUES('108279','mcn69gro7b236n9e7kf36c4ur6','-1','','1443846185');
INSERT INTO `lx_session` VALUES('108280','g25qa06sm2fv3tk7vkd13kaih6','-1','','1443846530');
INSERT INTO `lx_session` VALUES('108281','jco7hkkj5rmk741hqnmnr6gl91','-1','','1443846530');
INSERT INTO `lx_session` VALUES('108282','fetou9ndgda1b27ofk7frkbul2','-1','','1443847090');
INSERT INTO `lx_session` VALUES('108283','u3i5cmo89n74em7npalmgmtq72','-1','','1443847094');
INSERT INTO `lx_session` VALUES('108284','3qpc6brvn93dc2p5t100vamhp0','-1','','1443847139');
INSERT INTO `lx_session` VALUES('108285','6loa5mtqtimhheu4a2jttm76h7','-1','','1443847246');
INSERT INTO `lx_session` VALUES('108286','tpoktb3849ujg4i47507f4gp17','-1','','1443847255');
INSERT INTO `lx_session` VALUES('108287','agcpcfq3pitm7ephbo5m8dna86','-1','','1443847258');
INSERT INTO `lx_session` VALUES('108288','g909l09nnrp8cobuoiu84q5ta6','-1','','1443847280');
INSERT INTO `lx_session` VALUES('108289','h0jhhk32ttfqpk0d0kf8i41vf6','-1','','1443847298');
INSERT INTO `lx_session` VALUES('108290','u84uppiakurnng93e4j0110107','-1','','1443847566');
INSERT INTO `lx_session` VALUES('108291','s4faoe9mtaq5hgngco7pk8n1i2','-1','','1443847566');
INSERT INTO `lx_session` VALUES('108292','5evd0tqjh4ncutt9hiocfeo4j3','-1','','1443847573');
INSERT INTO `lx_session` VALUES('108293','pbuonm13se5u1c1gfd602uqmd0','-1','','1443847731');
INSERT INTO `lx_session` VALUES('108294','8a2hjblnqimvn7001auminril2','-1','','1443847736');
INSERT INTO `lx_session` VALUES('108295','t9eeqmar7g844bu1pb09ss0lk3','-1','','1443848290');
INSERT INTO `lx_session` VALUES('108296','u8se38rdflsqllcufnaemj0774','-1','QC_userData|a:1:{s:5:\"state\";s:32:\"d216d9e40f41c978996a0cb0f05ec12f\";}','1443848299');
INSERT INTO `lx_session` VALUES('108297','5p5af32dcccqb0u2kep9f6t216','-1','QC_userData|a:0:{}token|a:4:{s:12:\"access_token\";s:32:\"2.00aEmfNGjJtKcD1d6eb3712fpyiO3C\";s:9:\"remind_in\";s:6:\"136641\";s:10:\"expires_in\";i:136641;s:3:\"uid\";s:10:\"5698845604\";}uid|s:0:\"\";code|s:4:\"ebfb\";','1443848833');
INSERT INTO `lx_session` VALUES('108298','qar7ino787mv1s89sbp50r9i81','-1','','1443848404');
INSERT INTO `lx_session` VALUES('108299','6g04uvl6g3p6it8r25lfbs0m22','-1','','1443848497');
INSERT INTO `lx_session` VALUES('108300','luuitb9isc4og5popmpucls8s3','-1','','1443848521');
INSERT INTO `lx_session` VALUES('108301','390fmmuf2g56kq9irq0e2d9le1','-1','','1443848522');
INSERT INTO `lx_session` VALUES('108302','35cr0cpamnk7a0ebj76akecra0','-1','code|s:4:\"2688\";','1443848530');
INSERT INTO `lx_session` VALUES('108303','ans62u5p36ksufua8q8n3ddjq6','-1','','1443848558');
INSERT INTO `lx_session` VALUES('108304','mc0up6nkl3vegp1ns2mlva80b1','-1','','1443848559');
INSERT INTO `lx_session` VALUES('108305','32jkd709eb2k2ifq21o07fmaf0','-1','code|s:4:\"948b\";','1443848559');
INSERT INTO `lx_session` VALUES('108306','5av6cikhufrmvos7kscl7okav1','-1','','1443848564');
INSERT INTO `lx_session` VALUES('108307','92o0ln9ie893ltoleh413gb3c0','-1','','1443848604');
INSERT INTO `lx_session` VALUES('108308','53fidc1rk3ijhtt3er47lc0rt3','-1','','1443848957');
INSERT INTO `lx_session` VALUES('108309','sqo12r96gok9ami4f4e0v92tv3','-1','','1443849074');
INSERT INTO `lx_session` VALUES('108310','akpgbj1o3mid04vt3aofqlcti5','-1','','1443849213');
INSERT INTO `lx_session` VALUES('108311','6tndr3k73ngv9ojquser68i3j2','-1','admin_id|s:1:\"1\";','1443867103');
INSERT INTO `lx_session` VALUES('108312','656rpv6c1pm6iefnck2ki58jm5','-1','admin_id|s:1:\"1\";','1444510310');
INSERT INTO `lx_session` VALUES('108313','vnonc0q4vf0hnla50p1omq2os3','-1','','1444500114');
INSERT INTO `lx_session` VALUES('108314','uos1bu9kdkkc8rjrndnrbdsri5','-1','','1444500996');
INSERT INTO `lx_session` VALUES('108315','rljhb8odduurso3a1g1r6hkk42','-1','','1444501212');
INSERT INTO `lx_session` VALUES('108316','roqv37d6gmt3d5748edsvdduq4','-1','','1444501313');
INSERT INTO `lx_session` VALUES('108317','asto9h97scik0q6edcd6feoem4','-1','','1444502684');
INSERT INTO `lx_session` VALUES('108318','65tbjnvpvgd7hgp6kp757l07j0','-1','','1444503662');
INSERT INTO `lx_session` VALUES('108319','apv5l6qftf8jd3deaf005hm2m2','-1','admin_id|s:1:\"1\";','1444532092');
--
-- 表的结构lx_set
--

DROP TABLE IF EXISTS `lx_set`;
CREATE TABLE `lx_set` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `s1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `s2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `s3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `s4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `s5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `s6` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `s7` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `s8` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `s9` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `s10` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `c_time` int(11) DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL,
  `s11` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `s12` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `s13` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `s14` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `s15` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 lx_set
--

INSERT INTO `lx_set` VALUES('1','九米�\�','1','2','/uploads/avatar/201510110301025619606edb1b4.png','九米客版权所�\�2015 （豫ICP�\�14000785�\�-2�\�','http://www.baidu.com','021-57687913','先生','1041439987@qq.com',' © 2015 上海拳重投资有限公司  mvword.com 版权所�\� 移动�\�','1','1','泸ICP�\�15042109','指动世界','1002','2121','zhongchou888');
--
-- 表的结构lx_text
--

DROP TABLE IF EXISTS `lx_text`;
CREATE TABLE `lx_text` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `b1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `b2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `c_time` int(11) DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL,
  `tid` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 lx_text
--

INSERT INTO `lx_text` VALUES('1','采用中国境内\r\n最好的牛皮原产�\� 皮质优良','中国牛皮最佳原产地-南阳黄牛�\�1000头牛里只�\�83%是九米客的核心原材料�\� 历经16道工序，42道工艺完美打造一条好腰带�\�','1444500227','1','1');
INSERT INTO `lx_text` VALUES('2','“耙式”尾夹我们仅仅比传统尾夹倾斜�\�5°而已','“耙式”尾夹的发明者与创新者，我们只不过是在原来的基础上倾斜�\�5度，从而与带身之间的拉力提�\�27%，拉力更牢固，这个伟大的改变，让我们从不担心扣头与带身的脱节�\�','1444500250','1','1');
INSERT INTO `lx_text` VALUES('3','马牙采用进口PPE一次性注塑而成，强度提�\�17%','马牙是自动扣腰带的松紧开关，松紧自如精准到位，历�\�8次迭代升级，经过百万用户挑剔验证，目前更新至进口PPE材质，柔软适中，冬天不硬夏天不软，可能是这个世界最好用的自动扣腰带�\�','1444500269','1','1');
INSERT INTO `lx_text` VALUES('4','吸铁盖本来就在那里，我们只是去掉了多余的0.3�\�','历经5个月，累计发�\�875条腰带，不断测试吸铁石的吸力，从7.8克到8.9克再�\�7.1克，14次的不断打磨与修正，最终定格于7.1克，如此执着，只为解决松紧轻盈张弛有度，吸力更快更持久�\�','1444500289','1','1');
INSERT INTO `lx_text` VALUES('5','纯手工意大利油边制作工艺，零�\�30度冻不怕！','采用全新无尘CLEAN高温粘合技术，�\�6层进口硅胶膜材融合，形成一层仅0.3mm薄的保护油，牢固性和粘合性比传统带身提高33%，更是在零下30度的严寒冬季，油边也不会炸裂�\�','1444500304','1','1');
INSERT INTO `lx_text` VALUES('6','扣头48小时7层深度电镀德国工艺，经久不褪色','我们每一天都在使用扣头，电镀层厚度决定了扣头的耐磨和防刮花度，为了保证扣头的使用寿命，经过3个月的实验，测试�\�3种电镀方式，更换了4家供应商，最终采用德国电镀工艺调试出如同婴儿肌肤般的手感，不仅闪亮如镜，而且耐磨耐用�\�','1444500320','1','1');
INSERT INTO `lx_text` VALUES('7','进口高强度合金扣头，独家钻石切割工艺，工艺超群！','澳洲3#航空业环保高强度合金，历�\�18道生产工序，26道精密工序，【开模具-精密压铸-反复试模-多次打板-细刮批锋-攻牙-窝铜�\�-CNC钻孔-打沙-磨光-上牙-喷砂磨光-深度电镀-喷叻�\�-装配-激光雷�\�-贴片-PVD封油】，27天精心打造一支奢侈品扣头�\�','1444500335','1','1');
INSERT INTO `lx_text` VALUES('8',' 继续了解带身','1000万亚洲男性形体数据库长期研究结果','1444500367','1','1');
INSERT INTO `lx_text` VALUES('9','一张牛皮的艺术之旅','九米客带身在中国境内原产地只选取生长2年半左右的南阳黄牛皮做为皮质，选取身长2.7米以上的整张牛皮切割，采用腰部最坚实的皮层，比普通材质寿命至少延�\�3年以','1444500425','1','2');
INSERT INTO `lx_text` VALUES('10','100%真皮皮质，纹理和毛孔清晰可见�\� 绝佳手感','牛皮纹路自然清晰，毛孔细腻不规则，就像是人的表皮层一样呈现不规则状态，毛孔清晰可见。皮层柔软有光泽，最紧密的真皮纤维柔软如沙的质感�\�','1444500441','1','2');
INSERT INTO `lx_text` VALUES('11','第一家加入防变形定型加固材料，带身厚实不易变�\�','行业中独家采用世界上最先进的VARI热处理工�\� ，在带身中加�\�8%的防变形定型剂，从而是厚度达到�\�3.3mm，这一厚度在不影响使用美观的同时，防变形能力提升了60%，让带身始终笔直如新�\�','1444500456','1','2');
INSERT INTO `lx_text` VALUES('12','油边工艺，采用奢侈品技术， 独家保密工艺增强保护�\�','11道工序，3次循环，耗时36个小时，经过刨边-烫边-修边-初油-磨边-烫边-修平-油边-打砂�\�-油边-擦亮，方能油出一条饱满厚实光亮的带身�\�','1444500475','1','2');
INSERT INTO `lx_text` VALUES('13','进口富士克双线边线，不断不脱�\�','62根聚酯纤维细线条勾勒一张真皮皮带的腰线，比普通线�\�14根，采用进口线双线边，每一厘米3针交叉双针车缝线，比单线边牢固性提�\�1.3倍，不断线不脱毛不起球，选用牛津油蜡专用线打造平整的奢华，做工讲究，让带身更有一种生命的时尚力�\�','1444500492','1','2');
INSERT INTO `lx_text` VALUES('14','49马力超强带身的抗拉扯承载能力','带身的抗拉扯能力是其核心价值的提现，而牛皮纤维的厚度决定了拉力强度，足够厚的牛皮，紧密的牛皮纤维，成就了超强抗拉扯能力，柔弱滑腻延展性极佳，耐用不易断，抗拉扯能力是普通牛皮的2倍以上�\�','1444500506','1','2');
INSERT INTO `lx_text` VALUES('15','进口PPE环保耐磨卡槽，和气候完美匹配，春夏秋冬从不卡扣','带身的耐磨卡槽采用进口的PPE环保材料�\�38排双牙齿一次性注塑而成，不断裂不掉牙。春夏秋冬依然松弛有度，强度高韧性强，做工细腻，结实耐用，毫厘之间轻松调节，设计双齿卡槽，耐磨防腐蚀，经久耐用�\�','1444500519','1','2');
INSERT INTO `lx_text` VALUES('16','最先进的冷压尾标印记工艺，彰显男人格调','尾标是画龙点睛之笔，英文LOGO采用冷压工艺，打造出立体的九米客品牌，品质风范在皮带末梢同样得到体现，细腻立体的品牌标志与扣头遥相呼应，始终坚持对品质的信仰�\�','1444500532','1','2');
INSERT INTO `lx_text` VALUES('17',' 继续了解扣头','1000万亚洲男性形体数据库长期研究结果','1444500571','1','2');
INSERT INTO `lx_text` VALUES('18','当看到九米客的腰带扣头才知道艺术存在的真正价�\�','扣头的艺术本来就在那里，更是一件艺术品。为设计好一件艺术品扣头，花纹更换了4种，保护膜测试了6款，从设计初稿到定稿，历�\�72天。精心打磨的合金边框、设计感十足的现代感觉，简约而不简单的黑金绝妙搭配，最终呈现出一款艺术品扣头�\�','1444500621','1','3');
INSERT INTO `lx_text` VALUES('19',' 澳洲EZDA�\�#高强度环保合金演变扣头的艺术之作','澳大利亚3#合金采用澳洲原锌材独家配方严格冶炼而成，含铅低�\�27ppm，每批次均通过检测，符合国际环保标准。该材质优点密度高强度大，耐磨防腐蚀，持久使用不易变型断裂，堪比碳钢密度，只有航天、医用等高标注行业采用此材料，设计师融合工程与艺术，追求极致的精密与品质，赋予一块高强度医用环保合金以生命。历�\�18道生产工艺，26道精密工序的规划与设计、精密加工与生产，让它逐渐焕发出生机，足足27天的精琢细雕打造成一支奢侈品腰带扣头�\�','1444500634','1','3');
INSERT INTO `lx_text` VALUES('20','人体工程学弧形设计，和人体腰线遥呼相应�\�','我们和亚洲人体工程学深度合作，在1000万男性形体数据库里长期研究，根据男性腰线的结构，最终设计了表面�\�7度后9度的倾斜弧形原理，更有利于在坐立和行走之间依然和带身保持完美结合�\�','1444500649','1','3');
INSERT INTO `lx_text` VALUES('21','玫瑰金与雅黑的结合，流行中的经典之作','当玫瑰金logo遇上雅黑水波纹，简约而不简单，金色从古到今都是富贵的象征，而水是生命之源，滋润万物，有水源的相伴就能让生命生生不息。立体LOGO采用世界上先进的激光浮雕工艺，镶嵌在独家研发的防伪抽象水波纹胶片之上，从设计富贵纹到龙纹、祥云纹，最终选择了生命之源的水波纹，4次改版，历经37天不断的开发、设计、更换，才打磨出了扣头的经典之作�\�','1444500661','1','3');
INSERT INTO `lx_text` VALUES('22',' 100%纯手工打磨处理，360度光滑细腻手�\�','托架卡槽边缘是皮带进出的关键部位，粗糙的打磨往往会刮花带身的表面，从而严重缩短了腰带的使用寿命，九米客严格挑�\�6年以上工龄的打磨抛光技师，纯手工打磨技术处理，采用精细的抛光技术，历经7道工序过程，最终打造出边缘柔顺圆滑，手感细腻，四面耀眼的光芒�\�','1444500676','1','3');
INSERT INTO `lx_text` VALUES('23','表面特有PMMA有机镭射玻璃板材，为logo保驾护航','业内独家采用有机玻璃板材，通过热合技术在表面覆上一层仅�\�0.2mm厚的镭射玻璃胶片，其密度为：20kg/dm3，媲美钢化玻璃，超强耐磨更不易刮花，宛如磬石的硬度即使在外力的冲击下也毫发无损�\�','1444500689','1','3');
INSERT INTO `lx_text` VALUES('24','德国顶级电镀工艺比普通扣头耐磨度和防刮花提�\�36%�\�','采用德国电镀公司工艺�\�3次底�\�--中涂--面涂28小时7层深度纳米电镀，独有的防指纹保护膜技术，经喷涂电镀后钢化处理，具有防掉色、抗过敏、耐磨、抗氧化、耐腐蚀功效，比普通电镀工艺寿命至少延长600天，支持欧美出口环保验证�\�','1444500703','1','3');
INSERT INTO `lx_text` VALUES('25',' 查看皮带图集','1000万亚洲男性形体数据库长期研究结果','1444500729','1','3');
--
-- 表的结构lx_tuji
--

DROP TABLE IF EXISTS `lx_tuji`;
CREATE TABLE `lx_tuji` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `c1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `c2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `c_time` int(11) DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 lx_tuji
--

INSERT INTO `lx_tuji` VALUES('1','/uploads/avatar/20151011021617561955f103d09.jpg','','1444500977','1');
INSERT INTO `lx_tuji` VALUES('2','/uploads/avatar/20151011021627561955fbdd7da.jpg','','1444500988','1');
INSERT INTO `lx_tuji` VALUES('3','/uploads/avatar/20151011021636561956042e7dd.jpg','','1444500996','1');
INSERT INTO `lx_tuji` VALUES('4','/uploads/avatar/20151011021937561956b990f56.jpg','','1444501178','1');
INSERT INTO `lx_tuji` VALUES('5','/uploads/avatar/20151011021945561956c16c00e.jpg','','1444501186','1');
--
-- 表的结构lx_tuji2
--

DROP TABLE IF EXISTS `lx_tuji2`;
CREATE TABLE `lx_tuji2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cc1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cc2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cc3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `c_time` int(11) DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL,
  `tid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 lx_tuji2
--

INSERT INTO `lx_tuji2` VALUES('1','/uploads/avatar/201510110219115619569f96342.jpg','','','1444501152','1','3');
INSERT INTO `lx_tuji2` VALUES('2','/uploads/avatar/20151011021919561956a79fbd8.jpg','','','1444501160','1','3');
INSERT INTO `lx_tuji2` VALUES('3','/uploads/avatar/20151011021956561956cc69db9.jpg','','','1444501197','1','1');
INSERT INTO `lx_tuji2` VALUES('4','/uploads/avatar/20151011022003561956d39a04b.jpg','','','1444501204','1','1');
INSERT INTO `lx_tuji2` VALUES('5','/uploads/avatar/20151011022012561956dc510ff.jpg','','','1444501212','1','1');
--
-- 表的结构lx_u
--

DROP TABLE IF EXISTS `lx_u`;
CREATE TABLE `lx_u` (
  `id` int(11) DEFAULT NULL,
  `u1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `u2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tid` int(11) DEFAULT NULL,
  `c_time` int(11) DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 lx_u
--

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
  `phone` bigint(13) DEFAULT NULL,
  `qq` int(11) DEFAULT NULL,
  `weixin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `brief` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `c_time` int(11) DEFAULT NULL,
  `u_time` int(11) DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL,
  `money` double(11,2) DEFAULT '0.00',
  `out_money` double(11,2) DEFAULT '0.00',
  `qq_openid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `weibo_openid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 lx_user
--

INSERT INTO `lx_user` VALUES('1','小心12122','1212','105451@163.com','2','','','�\�','112233','1048222222','wxunk1212','112233','http://4.huiyaoba.com/uploads/avatar/2015092112292455ff87a486a2c.png','212','1441897987','1443378876','1','268.00','232.00','','');
INSERT INTO `lx_user` VALUES('2','5555','1212','','2','','','','13232','','','112233','','sdf ','1441898143','1441898143','1','2000.00','0.00','','');
INSERT INTO `lx_user` VALUES('3','45ss','','1048275@163.com','1','辽宁�\�','丹东�\�','sdfsfd','111111','12121212','54sdd','111111','','','1442760281','1442761576','1','0.00','0.00','','');
INSERT INTO `lx_user` VALUES('5','','','','','','','','13253631415','','','112233','','','1442775341','1442775341','1','0.00','0.00','','');
INSERT INTO `lx_user` VALUES('6','','','','','','','','173747','','','ue ue u','','','1442779799','1442779799','1','0.00','0.00','','');
INSERT INTO `lx_user` VALUES('8','','','','','','','','15514538564','','','123456','http://4.huiyaoba.com/uploads/avatar/201509221120425600c90aca716.jpg','','1442891995','1442891995','1','0.00','0.00','','');
INSERT INTO `lx_user` VALUES('10','xiao xin','','105412@163.com','0','天津�\�','市辖�\�','sad','','102212','1a2sd12','','','','1443385383','1443385563','','0.00','0.00','E1A4797EB247685874F732308C4057C7','');
INSERT INTO `lx_user` VALUES('11','1521','','12121@163.com','0','山西�\�','太原�\�','十大','','12451212','1asd12','','','','1443389750','1443389768','','0.00','0.00','','5698845604');
INSERT INTO `lx_user` VALUES('12','12','','a121','0','河北�\�','石家庄市','121','','21','212','','','','1443390508','1443390710','','0.00','0.00','8D9D65106E6D6C67BBA02B71921A87E5','');
INSERT INTO `lx_user` VALUES('13','','','','','','','','15350006003','','','123456','','','1443439087','1443439087','1','0.00','0.00','','');
INSERT INTO `lx_user` VALUES('14','','','','','','','','15372994200','','','123456','','','1443441504','1443441504','1','0.00','0.00','','');
--
-- 表的结构lx_view
--

DROP TABLE IF EXISTS `lx_view`;
CREATE TABLE `lx_view` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `tid` int(11) DEFAULT NULL,
  `c_time` int(11) DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL,
  `vid` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 lx_view
--

INSERT INTO `lx_view` VALUES('4','1','6','1442725637','1','1');
INSERT INTO `lx_view` VALUES('5','1','2','1442736605','1','1');
INSERT INTO `lx_view` VALUES('6','1','1','1442757058','1','1');
INSERT INTO `lx_view` VALUES('7','1','12','1443155577','1','1');
INSERT INTO `lx_view` VALUES('8','1','13','1443378919','1','1');
--
-- 表的结构lx_view_type
--

DROP TABLE IF EXISTS `lx_view_type`;
CREATE TABLE `lx_view_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `v_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `c_time` int(11) DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 lx_view_type
--

INSERT INTO `lx_view_type` VALUES('1','浏览�\�','1','1');
INSERT INTO `lx_view_type` VALUES('2','收藏�\�','1','1');
--
-- 表的结构lx_zt
--

DROP TABLE IF EXISTS `lx_zt`;
CREATE TABLE `lx_zt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zt1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zt2` text COLLATE utf8_unicode_ci,
  `c_time` int(11) DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 lx_zt
--

INSERT INTO `lx_zt` VALUES('3','sdfsdf','&lt;p&gt;asddsfsadasdasd&lt;/p&gt;','1444535747','1');
