<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxq_photo`;");
E_C("CREATE TABLE `wxq_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catid` int(11) DEFAULT NULL,
  `sitetitle` varchar(255) DEFAULT NULL,
  `keywords` varchar(80) DEFAULT NULL,
  `description` text,
  `title` varchar(255) DEFAULT NULL,
  `thumb` text,
  `content` text,
  `listorder` int(11) DEFAULT NULL,
  `hits` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo_url1` varchar(255) DEFAULT NULL,
  `photo_url2` varchar(255) DEFAULT NULL,
  `photo_url3` varchar(255) DEFAULT NULL,
  `photo_url4` varchar(255) DEFAULT NULL,
  `photo_url5` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>