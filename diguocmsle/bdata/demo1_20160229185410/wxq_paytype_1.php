<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxq_paytype`;");
E_C("CREATE TABLE `wxq_paytype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `payname` varchar(20) NOT NULL,
  `pay_account` varchar(255) NOT NULL,
  `pay_key` varchar(255) NOT NULL,
  `pay_parter` varchar(255) NOT NULL,
  `listorder` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `wxq_paytype` values('1','支付宝','是','是','是','0','1','1371533189','1371533189');");

require("../../inc/footer.php");
?>