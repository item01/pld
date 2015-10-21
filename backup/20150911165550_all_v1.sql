--
-- MySQL database dump
-- Created by DbManage class, Power By yanue. 
-- http://yanue.net 
--
-- 主机: 127.0.0.1
-- 生成日期: 2015 年  09 月 11 日 16:55
-- MySQL版本: 5.5.40
-- PHP 版本: 5.3.29

--
-- 数据库: `lx_zc`
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
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 lx_fields_set
--

INSERT INTO `lx_fields_set` VALUES('1','p1','1','项目名称','2','1');
INSERT INTO `lx_fields_set` VALUES('35','p2','1','说明','2','1');
INSERT INTO `lx_fields_set` VALUES('36','p3','1','图片','4','1');
INSERT INTO `lx_fields_set` VALUES('37','p4','0','内容','3','1');
INSERT INTO `lx_fields_set` VALUES('38','p5','1','预计筹多少钱','1','1');
INSERT INTO `lx_fields_set` VALUES('39','p6','1','开始时间','8','1');
INSERT INTO `lx_fields_set` VALUES('40','p7','1','结束时间','8','1');
INSERT INTO `lx_fields_set` VALUES('41','p8','1','项目是否完成','1','0');
INSERT INTO `lx_fields_set` VALUES('42','id','1','id','1','0');
INSERT INTO `lx_fields_set` VALUES('43','c_time','1','创建时间','8','0');
INSERT INTO `lx_fields_set` VALUES('44','u_time','1','更新时间','1','0');
INSERT INTO `lx_fields_set` VALUES('45','status','1','状态','1','0');
INSERT INTO `lx_fields_set` VALUES('46','tid','1','所属分类','1','0');
INSERT INTO `lx_fields_set` VALUES('47','t1','1','项目名称','1','1');
INSERT INTO `lx_fields_set` VALUES('48','pr_t1','1','发布时间','8','1');
INSERT INTO `lx_fields_set` VALUES('49','pr_t2','1','标题','1','1');
INSERT INTO `lx_fields_set` VALUES('50','pr_t3','1','内容','2','1');
INSERT INTO `lx_fields_set` VALUES('51','pz_t1','1','奖品标题','2','1');
INSERT INTO `lx_fields_set` VALUES('52','pz_t2','1','运费','1','1');
INSERT INTO `lx_fields_set` VALUES('53','pz_t3','1','预计回报发送时间','1','1');
INSERT INTO `lx_fields_set` VALUES('54','pz_t4','1','金额','1','1');
INSERT INTO `lx_fields_set` VALUES('55','pz_t5','1','参与人数','1','1');
INSERT INTO `lx_fields_set` VALUES('56','pz_t6','1','图片','4','1');
INSERT INTO `lx_fields_set` VALUES('57','pz_t7','0','内容','3','1');
INSERT INTO `lx_fields_set` VALUES('58','img_url','1','图片','4','1');
INSERT INTO `lx_fields_set` VALUES('59','link','1','链接','1','1');
INSERT INTO `lx_fields_set` VALUES('60','remark2','1','说明','2','1');
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
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 lx_img
--

INSERT INTO `lx_img` VALUES('16','http://localhost/uploads/avatar/2015091101115455f1b9daf0537.jpg','http://localhost/index.php/wxy/admin/add/table/img/img_type/1','1441905122','','1','位于','1','');
INSERT INTO `lx_img` VALUES('17','http://localhost/uploads/avatar/2015091101121455f1b9ee95400.jpg','http://localhost/index.php/wxy/admin/add/table/img/img_type/1','1441905138','','1','3245','1','');
INSERT INTO `lx_img` VALUES('18','http://localhost/uploads/avatar/2015091101140055f1ba58cf2f8.jpg','http://localhost/index.php/wxy/admin/add/table/img/img_type/1','1441905247','','1','http://localhost/index.php/wxy/admin/add/table/img/img_type/1','2','');
INSERT INTO `lx_img` VALUES('19','http://localhost/uploads/avatar/2015091101143555f1ba7b3dfd2.png','D:\\我的文档\\QQEIM Files\\2850398516\\FileRecv\\项目13号-众筹网(1)\\项目13号-众筹网','1441905280','','1','12','2','');
INSERT INTO `lx_img` VALUES('20','http://localhost/uploads/avatar/2015091101162655f1baea5db2d.jpg','212','1441905390','','1','121','3','');
INSERT INTO `lx_img` VALUES('21','http://localhost/uploads/avatar/2015091101184155f1bb716f1a6.jpg','','1441905522','','1','','4','');
INSERT INTO `lx_img` VALUES('22','http://localhost/uploads/avatar/2015091101185155f1bb7b420ab.jpg','','1441905531','','1','','5','');
--
-- 表的结构lx_item
--

DROP TABLE IF EXISTS `lx_item`;
CREATE TABLE `lx_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `p2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `p3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `p4` text COLLATE utf8_unicode_ci,
  `p5` double(20,2) DEFAULT NULL,
  `p6` int(11) DEFAULT NULL,
  `p7` int(11) DEFAULT NULL,
  `p8` tinyint(3) DEFAULT '0',
  `c_time` int(11) DEFAULT NULL,
  `u_time` int(11) DEFAULT '0',
  `status` tinyint(3) DEFAULT NULL,
  `tid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 lx_item
--

INSERT INTO `lx_item` VALUES('1','复旦“携手执笔，上色未来”靡滩乡留守儿童支教','邀请朋友支持可以获得奖励哦！','http://localhost/uploads/avatar/2015091100352355f1b14b02255.jpg','&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;	&lt;/p&gt;&lt;h2 style=&quot;margin-top:0&quot;&gt;我们是谁&lt;/h2&gt;&lt;p&gt;我们是复旦大学信息科学与工程学院的一只支教队伍。&lt;br/&gt;本次活动共有11名成员参与，他们都来自复旦大学信息学院14技术科学试验班联合党支部，其中有10名本科生，一名带队研究生。本科生中有一人（王子奇 \r\n男）是我们第一次寒假湖北大悟县大悟一中支教的组织者及主干力量，有丰富的支教经验和超强的组织能力。本科生中的梁馨月、黄宇腾、张博都是14技术科学试\r\n验班联合党支部的骨干力量，有较强的组织和领导能力。&lt;br/&gt;研究生林华是本次支教队伍的领队及指导，他是14技术科学试验班联合党支部的党支部书记，2012年曾组织参与青海省玛沁县民族第二中学支教活动，担任一\r\n个班级的代理班主任及教学项目负责人，2014-2015学年上海杨浦区反暴力家暴中心“大桥街道爱心课堂活动&amp;quot;负责人，共计组织207人次参与到一年的\r\n爱心活动中来。&lt;br/&gt;我们第一次的湖北大悟县大悟一中支教活动的其他成员向本次支教活动的成员传授了他们的支教经验。&lt;br/&gt;我们的支教活动旨在拓宽当地孩子的视野，培养他们对科学的兴趣，帮助他们树立正确的人生观、价值观，鼓励他们“走出去”，为社会做出自己的贡献。&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://localhost/public/ueditor/themes/default/images/spacer.gif&quot; word_img=&quot;file:///D:/%E6%88%91%E7%9A%84%E6%96%87%E6%A1%A3/QQEIM%20Files/2850398516/FileRecv/%E9%A1%B9%E7%9B%AE13%E5%8F%B7-%E4%BC%97%E7%AD%B9%E7%BD%91%281%29/%E9%A1%B9%E7%9B%AE13%E5%8F%B7-%E4%BC%97%E7%AD%B9%E7%BD%91/images/fudan.jpg&quot; style=&quot;background:url(http://localhost/public/ueditor/lang/zh-cn/images/localimage.png) no-repeat center center;border:1px solid #ddd&quot;/&gt;&lt;/p&gt;&lt;p&gt;上图为上次湖北大悟县支教活动，图中王子奇在做报告讲座。&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://localhost/public/ueditor/themes/default/images/spacer.gif&quot; word_img=&quot;file:///D:/%E6%88%91%E7%9A%84%E6%96%87%E6%A1%A3/QQEIM%20Files/2850398516/FileRecv/%E9%A1%B9%E7%9B%AE13%E5%8F%B7-%E4%BC%97%E7%AD%B9%E7%BD%91%281%29/%E9%A1%B9%E7%9B%AE13%E5%8F%B7-%E4%BC%97%E7%AD%B9%E7%BD%91/images/fudandaxue.jpg&quot; style=&quot;background:url(http://localhost/public/ueditor/lang/zh-cn/images/localimage.png) no-repeat center center;border:1px solid #ddd&quot;/&gt;&lt;/p&gt;&lt;p&gt;上图为上次湖北大悟县支教活动，图中王子奇在做报告讲座。&lt;/p&gt;&lt;h2&gt;教育资源的匮乏&lt;/h2&gt;&lt;p&gt;支教学校所在地糜滩乡位于县域南部，教育事业相对落后，学校师资力量缺乏，教学设备较少，当地留守儿童较多。受困\r\n于恶劣的生活环境和教育环境，很多孩子只能像上一辈一样在农村生活。艰苦的工作环境、很差的待遇，更让许多优秀教师望而却步；当地很多家长又因家庭条件限\r\n制和观念落后，导致孩子很难有机会接受到高中或以上程度的教育，很多孩子也许一辈子都无法开眼看世界。&lt;/p&gt;&lt;h2&gt;项目意义&lt;/h2&gt;&lt;p&gt;①时代背景\r\n作为当代大学生，作为青年一代，我们有责任有义务响应国家政策，继承与发扬往年“西部支教”“追逐中国梦想，实现强国之梦”活动的光荣传统，支持西部教育\r\n事业建设发展，发扬当代大学生挑战艰难困苦、不断奋勇拼搏的精神，进一步了解社会发展状况，在实践中不断地提升自身的思想意识，掌握一定的社会服务技能和\r\n社会实践经验，以更好地为国家做出贡献。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;','1000000.00','1414801980','1451608416','0','1441902998','0','1','2');
