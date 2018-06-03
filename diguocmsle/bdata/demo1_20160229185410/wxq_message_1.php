<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxq_message`;");
E_C("CREATE TABLE `wxq_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `qq` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `sex` tinyint(1) DEFAULT NULL,
  `content` text,
  `reply` text,
  `ip` varchar(30) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8");
E_D("replace into `wxq_message` values('17','物流212','ewrwer23','weqwe234','werwer321','0','werwerwer3424ertert',NULL,'14.109.164.94','0','1405312179');");

require("../../inc/footer.php");
?>