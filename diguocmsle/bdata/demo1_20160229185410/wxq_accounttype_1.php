<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxq_accounttype`;");
E_C("CREATE TABLE `wxq_accounttype` (
  `typeid` int(11) NOT NULL AUTO_INCREMENT,
  `typename` varchar(20) NOT NULL,
  `listorder` int(11) NOT NULL,
  PRIMARY KEY (`typeid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `wxq_accounttype` values('1','微信公众帐号','0');");
E_D("replace into `wxq_accounttype` values('2','飞信公众帐号','0');");
E_D("replace into `wxq_accounttype` values('3','旺信公众帐号','0');");

require("../../inc/footer.php");
?>