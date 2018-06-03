<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxq_tuijian`;");
E_C("CREATE TABLE `wxq_tuijian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wxid` int(11) DEFAULT NULL,
  `pubaccount` varchar(50) DEFAULT NULL,
  `memberid` int(11) DEFAULT NULL,
  `membername` varchar(50) DEFAULT NULL,
  `recommendid` int(11) DEFAULT NULL,
  `timelimit` tinyint(4) DEFAULT NULL,
  `starttime` int(11) DEFAULT NULL,
  `endtime` int(11) DEFAULT NULL,
  `intergral` int(11) DEFAULT '0',
  `intergralnum` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=253 DEFAULT CHARSET=utf8");
E_D("replace into `wxq_tuijian` values('229','5012','红包群',NULL,NULL,'1','0','0','0','0',NULL,'1','1423316906');");
E_D("replace into `wxq_tuijian` values('230','5006','99面膜网',NULL,NULL,'1','0','0','0','0',NULL,'1','1423316958');");
E_D("replace into `wxq_tuijian` values('227','4943','幽兰范儿',NULL,NULL,'1','0','0','0','0',NULL,'1','1422455365');");
E_D("replace into `wxq_tuijian` values('228','5003','莎丽汉森新年套盒',NULL,NULL,'1','0','0','0','0',NULL,'1','1423193234');");
E_D("replace into `wxq_tuijian` values('213','4968','微商互推平台',NULL,NULL,'1','0','0','0','0',NULL,'1','1421399079');");
E_D("replace into `wxq_tuijian` values('214','4974','第一微商',NULL,NULL,'1','0','0','0','0',NULL,'1','1421399105');");
E_D("replace into `wxq_tuijian` values('215','4960','微商交流群',NULL,NULL,'1','0','0','0','0',NULL,'1','1421399127');");
E_D("replace into `wxq_tuijian` values('216','4957','微商运营秘籍',NULL,NULL,'1','0','0','0','0',NULL,'1','1421399160');");
E_D("replace into `wxq_tuijian` values('217','4975','思埠总代',NULL,NULL,'1','0','0','0','0',NULL,'1','1421399183');");
E_D("replace into `wxq_tuijian` values('231','5009','梵洁诗EE霜',NULL,NULL,'1','0','0','0','0',NULL,'1','1423317004');");
E_D("replace into `wxq_tuijian` values('232','5020','木子',NULL,NULL,'1','0','0','0','0',NULL,'1','1423465339');");
E_D("replace into `wxq_tuijian` values('226','4980','木子 - 微商代理',NULL,NULL,'1','0','0','0','0',NULL,'1','1422436127');");
E_D("replace into `wxq_tuijian` values('221','4992','Alan',NULL,NULL,'1','0','0','0','0',NULL,'1','1422434016');");
E_D("replace into `wxq_tuijian` values('222','4990','蓝蓓丽新品系列品牌招商',NULL,NULL,'1','0','0','0','0',NULL,'1','1422434026');");
E_D("replace into `wxq_tuijian` values('223','4988','阐幽护肤品化妆品，美衣美鞋',NULL,NULL,'1','0','0','0','0',NULL,'1','1422434035');");
E_D("replace into `wxq_tuijian` values('224','4971','美丽联盟',NULL,NULL,'1','0','0','0','0',NULL,'1','1422434071');");
E_D("replace into `wxq_tuijian` values('225','4948','诚招微商',NULL,NULL,'1','0','0','0','0',NULL,'1','1422434185');");
E_D("replace into `wxq_tuijian` values('233','5023','面膜',NULL,NULL,'1','0','0','0','0',NULL,'1','1423465460');");
E_D("replace into `wxq_tuijian` values('234','5026','爱大帅',NULL,NULL,'1','0','0','0','0',NULL,'1','1423553177');");
E_D("replace into `wxq_tuijian` values('235','5032','A小贝贝',NULL,NULL,'1','0','0','0','0',NULL,'1','1425366721');");
E_D("replace into `wxq_tuijian` values('236','5039','闺蜜美妆',NULL,NULL,'1','0','0','0','0',NULL,'1','1426728247');");
E_D("replace into `wxq_tuijian` values('237','5041','美至闺蜜~夏天',NULL,NULL,'1','0','0','0','0',NULL,'1','1426744009');");
E_D("replace into `wxq_tuijian` values('244','5187','',NULL,NULL,'1','0','0','0','0',NULL,'1','1435665316');");
E_D("replace into `wxq_tuijian` values('239','5064','千百绘手绘蕶',NULL,NULL,'4','0','0','0','0',NULL,'1','1428754948');");
E_D("replace into `wxq_tuijian` values('245','5188','木子微商',NULL,NULL,'1','0','0','0','0',NULL,'1','1435675544');");
E_D("replace into `wxq_tuijian` values('241','5020','木子',NULL,NULL,'1','1','1428681600','1455033600','0','30','0','1428755191');");
E_D("replace into `wxq_tuijian` values('246','5245','一膜两样面膜总代',NULL,NULL,'1','0','0','0','0',NULL,'1','1436923092');");
E_D("replace into `wxq_tuijian` values('247','5296','静',NULL,NULL,'3','0','0','0','0',NULL,'1','1438923307');");
E_D("replace into `wxq_tuijian` values('248','5283','木子',NULL,NULL,'1','0','0','0','0',NULL,'1','1438923340');");
E_D("replace into `wxq_tuijian` values('249','5296','静',NULL,NULL,'1','0','0','0','0',NULL,'0','1438923619');");
E_D("replace into `wxq_tuijian` values('250','5297','a 百城诚信科技',NULL,NULL,'1','0','0','0','0',NULL,'0','1438929238');");
E_D("replace into `wxq_tuijian` values('251','5304','轰 轰',NULL,NULL,'1','0','0','0','0',NULL,'0','1438994912');");
E_D("replace into `wxq_tuijian` values('252','5377','莎丽汉森水光针',NULL,NULL,'1','0','0','0','0',NULL,'1','1440580966');");

require("../../inc/footer.php");
?>