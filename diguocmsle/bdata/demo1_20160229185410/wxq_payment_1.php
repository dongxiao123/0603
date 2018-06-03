<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxq_payment`;");
E_C("CREATE TABLE `wxq_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `memberid` int(11) NOT NULL,
  `membername` varchar(50) NOT NULL,
  `payno` varchar(50) NOT NULL,
  `businesstype` varchar(20) NOT NULL,
  `paytypeid` int(255) NOT NULL,
  `paytypename` varchar(20) NOT NULL,
  `discount` decimal(11,2) NOT NULL,
  `paymoney` decimal(11,2) NOT NULL,
  `type` int(11) NOT NULL,
  `payip` varchar(50) NOT NULL,
  `paybody` text,
  `status` tinyint(10) NOT NULL,
  `create_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>