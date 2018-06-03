<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxq_recommend`;");
E_C("CREATE TABLE `wxq_recommend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recommendname` varchar(20) NOT NULL,
  `intergral` int(11) NOT NULL,
  `listorder` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `create_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `wxq_recommend` values('1','品牌推荐','30','0','1','1372334417');");

require("../../inc/footer.php");
?>