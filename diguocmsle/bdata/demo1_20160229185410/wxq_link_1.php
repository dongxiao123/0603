<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxq_link`;");
E_C("CREATE TABLE `wxq_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `linktype` tinyint(1) NOT NULL,
  `type` int(11) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `url` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `listorder` smallint(5) NOT NULL,
  `create_time` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8");
E_D("replace into `wxq_link` values('1','0','0','7商网','http://www.75820.com/','','0','1428336095');");
E_D("replace into `wxq_link` values('2','0','0','99面膜网','http://www.99mianmo.cn/','','17','1428336127');");
E_D("replace into `wxq_link` values('30','0','0','微信群大全','http://www.wxq5.com','','0','1432805870');");
E_D("replace into `wxq_link` values('31','0','0','各地特产','http://www.kstcw.com/','','0','1436857985');");
E_D("replace into `wxq_link` values('33','0','0','微电商','http://www.reakia.com','','0','1436858138');");
E_D("replace into `wxq_link` values('34','0','0','微商代理','http://www.113dh.com/','','0','1437035882');");

require("../../inc/footer.php");
?>