<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxq_product`;");
E_C("CREATE TABLE `wxq_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catid` int(11) DEFAULT NULL,
  `sitetitle` varchar(255) DEFAULT NULL,
  `keywords` varchar(80) DEFAULT NULL,
  `description` text,
  `title` varchar(80) DEFAULT NULL,
  `thumb` text,
  `price` float(13,2) DEFAULT NULL,
  `content` text,
  `listorder` int(11) DEFAULT '0',
  `hits` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>