<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxq_membergroup`;");
E_C("CREATE TABLE `wxq_membergroup` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `addwx` tinyint(4) DEFAULT NULL,
  `addwxverify` tinyint(4) DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `create_time` int(11) unsigned NOT NULL,
  `update_time` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8");
E_D("replace into `wxq_membergroup` values('9','高级会员','1',NULL,NULL,'','1358056215','0');");
E_D("replace into `wxq_membergroup` values('10','中级会员','1',NULL,NULL,'','1358057056','0');");
E_D("replace into `wxq_membergroup` values('11','初级会员','1',NULL,NULL,'','1358057227','0');");
E_D("replace into `wxq_membergroup` values('15','新手上路','1',NULL,NULL,'','1358060231','0');");
E_D("replace into `wxq_membergroup` values('33','VIP会员','1','1','1','VIP会员特权','1372154942','1405153923');");

require("../../inc/footer.php");
?>