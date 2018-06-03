<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxq_download`;");
E_C("CREATE TABLE `wxq_download` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catid` int(11) DEFAULT NULL,
  `sitetitle` varchar(255) DEFAULT NULL,
  `keywords` varchar(80) DEFAULT NULL,
  `description` text,
  `title` varchar(255) DEFAULT NULL,
  `thumb` text,
  `size` varchar(50) DEFAULT NULL,
  `version` varchar(50) DEFAULT NULL,
  `paymenttype` tinyint(1) DEFAULT NULL,
  `content` text,
  `listorder` int(11) DEFAULT NULL,
  `hits` int(11) DEFAULT '0',
  `status` tinyint(1) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `file1` varchar(255) DEFAULT NULL,
  `file2` varchar(255) DEFAULT NULL,
  `file3` varchar(255) DEFAULT NULL,
  `file4` varchar(255) DEFAULT NULL,
  `file5` varchar(255) DEFAULT NULL,
  `file_url1` varchar(255) DEFAULT NULL,
  `file_url2` varchar(255) DEFAULT NULL,
  `file_url3` varchar(255) DEFAULT NULL,
  `file_url4` varchar(255) DEFAULT NULL,
  `file_url5` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>