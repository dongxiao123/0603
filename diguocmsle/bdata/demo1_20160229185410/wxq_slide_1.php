<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxq_slide`;");
E_C("CREATE TABLE `wxq_slide` (
  `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `img` varchar(500) DEFAULT NULL,
  `url` varchar(500) DEFAULT NULL,
  `listorder` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8");
E_D("replace into `wxq_slide` values('12','广告位','/2015/01/16/54b8d33f37d77.jpg','#','4','1');");
E_D("replace into `wxq_slide` values('13','广告位1','/2015/01/16/54b8d367d8aa1.jpg','#','1','1');");
E_D("replace into `wxq_slide` values('14','广告位2','/2013/07/15/51e3899ae023e.jpg','#','2','0');");
E_D("replace into `wxq_slide` values('15','广告位3','/2013/07/15/51e389a1d0da7.jpg','#','3','0');");
E_D("replace into `wxq_slide` values('16','广告位4','/2013/07/15/51e38986f337e.jpg','#','0','0');");

require("../../inc/footer.php");
?>