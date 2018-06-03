<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxq_set`;");
E_C("CREATE TABLE `wxq_set` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `errorcount` int(11) DEFAULT NULL,
  `errorinterval` int(11) DEFAULT NULL,
  `messageinterval` int(11) DEFAULT '0',
  `verifykey` varchar(255) DEFAULT NULL,
  `verifyurl` varchar(500) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `qrcode` varchar(500) DEFAULT NULL,
  `comment` tinyint(4) DEFAULT NULL,
  `welcomeinfo` text,
  `defaultreply` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8");
E_D("replace into `wxq_set` values('21','5','300','60',NULL,NULL,'/2015/07/23/55b0329b4ab65.png','/2015/01/16/54b9140683202.jpg','0','','');");

require("../../inc/footer.php");
?>