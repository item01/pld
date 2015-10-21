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
