<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxq_promotion`;");
E_C("CREATE TABLE `wxq_promotion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catid` int(11) NOT NULL,
  `memberid` int(11) DEFAULT NULL,
  `membername` varchar(50) DEFAULT NULL,
  `pubaccountid` int(11) NOT NULL,
  `sitetitle` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` text,
  `title` varchar(80) NOT NULL,
  `thumb` text,
  `content` text,
  `iscomment` tinyint(1) NOT NULL,
  `ip` varchar(20) DEFAULT NULL,
  `intergral` int(11) NOT NULL,
  `hits` int(11) NOT NULL,
  `listorder` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL,
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `wxq_promotion` values('1','131','2','shiyue','4771','哈尔滨小麦王啤酒免费喝','','','哈尔滨小麦王啤酒免费喝','/2014/06/29/53afcdf153ec6.jpg','<p>永乐火锅兴茂店，<span style=\"color:#ff0000\">酸汤鱼店两店联动</span>，惠动全城。</p><p>即日起在永乐火锅兴茂店就餐，享受茶楼券免费赠送，凭赠送券可在茶楼消费或您可选择在就餐时我们免费为您赠送哈尔滨小麦王啤酒（5瓶）。</p><p>即日起您中午在永乐酸汤鱼馆消费，菜品7折优惠（特价菜除外），亲您还在等什么，赶快行动起来吧。</p>','1','112.117.215.153','10','17','0','1','1404030449','1404030620');");

require("../../inc/footer.php");
?>