--
-- MySQL database dump
-- Created by DbManage class, Power By yanue. 
-- http://yanue.net 
--
-- 主机: 127.0.0.1
-- 生成日期: 2015 年  09 月 11 日 16:30
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
INSERT INTO `lx_item` VALUES('2','x项目02','说明','http://localhost/uploads/avatar/2015091100393955f1b24b29020.jpg','&lt;p&gt;0000&lt;img alt=&quot;mojo.jpeg&quot; src=&quot;/ueditor/php/upload/image/20150911/1441903190864594.jpeg&quot; title=&quot;1441903190864594.jpeg&quot;/&gt;&lt;img alt=&quot;672x400b.jpg&quot; src=&quot;/ueditor/php/upload/image/20150911/1441903195514100.jpg&quot; title=&quot;1441903195514100.jpg&quot;/&gt;&lt;/p&gt;','100.00','1443628800','1480003200','0','1441903218','0','1','2');
INSERT INTO `lx_item` VALUES('3','x项目02','说明','http://localhost/uploads/avatar/2015091100393955f1b24b29020.jpg','&lt;p&gt;0000&lt;img alt=&quot;mojo.jpeg&quot; src=&quot;/ueditor/php/upload/image/20150911/1441903190864594.jpeg&quot; title=&quot;1441903190864594.jpeg&quot;/&gt;&lt;img alt=&quot;672x400b.jpg&quot; src=&quot;/ueditor/php/upload/image/20150911/1441903195514100.jpg&quot; title=&quot;1441903195514100.jpg&quot;/&gt;&lt;/p&gt;','100.00','1443628800','1480003200','0','1441903228','0','1','2');
INSERT INTO `lx_item` VALUES('5','1','1','1','1','1.00','1','1','1','1','0','1','2');
INSERT INTO `lx_item` VALUES('6','fldgf ','ksfdlksd','http://localhost/uploads/avatar/2015091100511755f1b505eb51b.jpg','&lt;p&gt;dfmgdjfgk&lt;br/&gt;&lt;/p&gt;','1000.00','1449849600','1450368000','0','1441903904','0','1','2');
--
-- 表的结构lx_prize
--

DROP TABLE IF EXISTS `lx_prize`;
CREATE TABLE `lx_prize` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pz_t1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pz_t2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pz_t3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pz_t4` double(2,0) DEFAULT NULL,
  `pz_t5` int(11) DEFAULT NULL COMMENT '水电费环境',
  `pz_t6` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pz_t7` text COLLATE utf8_unicode_ci,
  `c_time` int(11) DEFAULT NULL,
  `u_time` int(11) DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL,
  `tid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 lx_prize
--

INSERT INTO `lx_prize` VALUES('1','奖品01','无','天后','99','100','http://localhost/uploads/avatar/2015091101281755f1bdb181b32.png','&lt;p&gt;哈哈哈哈&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;','1441906103','','1','1');
INSERT INTO `lx_prize` VALUES('2','将品牌01','无','50天后','99','10','http://localhost/uploads/avatar/2015091101294855f1be0c58ee1.png','&lt;p&gt;哈哈哈哈&lt;br/&gt;&lt;/p&gt;','1441906192','','1','1');
--
-- 表的结构lx_progress
--

DROP TABLE IF EXISTS `lx_progress`;
CREATE TABLE `lx_progress` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) DEFAULT NULL,
  `pr_t1` int(11) DEFAULT NULL,
  `pr_t2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pr_t3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `c_time` int(11) DEFAULT NULL,
  `u_time` int(11) DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 lx_progress
--

INSERT INTO `lx_progress` VALUES('1','1','1449763200','标题','内容','1441906030','','1');
INSERT INTO `lx_progress` VALUES('2','1','1437667200','进展2','内容2','1441906053','','1');
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
  `reply_uid` int(11) DEFAULT NULL,
  `re_reply_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 lx_reply
--

INSERT INTO `lx_reply` VALUES('1','1','1','0','我发起的项目：《艾呼吸鼻腔护理》，你的支持就是希望就是离梦想更近一步的动力，梦想看似遥不可及，却是提供动力的无限源泉。','http://localhost/uploads/avatar/2015091101184155f1bb716f1a6.jpg','1','1','1','','');
INSERT INTO `lx_reply` VALUES('2','1','1','1','55sds','1','1','1','1','','');
INSERT INTO `lx_reply` VALUES('3','2','1','2','1','1','1','1','1','','');
INSERT INTO `lx_reply` VALUES('4','1','1','0','gdfgdf我发起的项目：《艾呼吸鼻腔护理》，你的支持就是希望就是离梦想更近一步的动力，梦想看似遥不可及，却是提供动力的无限源泉。','','1441909031','1441909031','1','','');
INSERT INTO `lx_reply` VALUES('5','1','1','0','gdfgdf我发起的项目：《艾呼吸鼻腔护理》，你的支持就是希望就是离梦想更近一步的动力，梦想看似遥不可及，却是提','','1441909039','1441909039','1','','');
INSERT INTO `lx_reply` VALUES('6','2','1','1','1254','1','1','1','1','1','');
INSERT INTO `lx_reply` VALUES('7','1','1','3','fghfgh','','1441912050','1441912050','1','','0');
INSERT INTO `lx_reply` VALUES('8','1','1','2','jhkjlret','','1441912055','1441912055','1','','3');
INSERT INTO `lx_reply` VALUES('9','1','1','5','fghjfghfg','','1441912179','1441912179','1','','0');
INSERT INTO `lx_reply` VALUES('10','1','1','1','hjghjrtyertert','','1441912184','1441912184','1','','6');
INSERT INTO `lx_reply` VALUES('11','1','1','4','水电费包括','','1441912202','1441912202','1','','0');
INSERT INTO `lx_reply` VALUES('12','1','1','4','共和国','','1441912341','1441912341','1','','11');
INSERT INTO `lx_reply` VALUES('13','1','1','0','jgkljkjhf开工饭后果','','1441912360','1441912360','1','','');
INSERT INTO `lx_reply` VALUES('14','1','1','13','55555555555555555555555555','','1441912373','1441912373','1','','0');
--
-- 表的结构lx_session
--

DROP TABLE IF EXISTS `lx_session`;
CREATE TABLE `lx_session` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session_id` varchar(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `data` varchar(100) NOT NULL,
  `last_time` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `session_id` (`session_id`)
) ENGINE=InnoDB AUTO_INCREMENT=107285 DEFAULT CHARSET=utf8;

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
INSERT INTO `lx_session` VALUES('107283','31l8n5i2dkqbgqe34jbcudodo5','-1','','1441960239');
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
