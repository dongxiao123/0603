<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxq_model`;");
E_C("CREATE TABLE `wxq_model` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) DEFAULT NULL,
  `table` varchar(80) DEFAULT NULL,
  `listrows` int(11) DEFAULT NULL,
  `header` varchar(80) DEFAULT NULL,
  `prev` varchar(80) DEFAULT NULL,
  `next` varchar(80) DEFAULT NULL,
  `first` varchar(80) DEFAULT NULL,
  `last` varchar(80) DEFAULT NULL,
  `theme` text,
  `listorder` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `wxq_model` values('1','文章模型','Article','12','条数据','上一页','下一页','首页','末页','%first%&nbsp;%upPage%&nbsp;%linkPage%&nbsp;%downPage%&nbsp;%end%&nbsp;共%totalRow%%header%&nbsp;%nowPage%/%totalPage%页','1','1');");
E_D("replace into `wxq_model` values('2','产品模型','Product','12','条数据','上一页','下一页','首页','末页','%first%&nbsp;%upPage%&nbsp;%linkPage%&nbsp;%downPage%&nbsp;%end%&nbsp;共%totalRow%%header%&nbsp;%nowPage%/%totalPage%页','3','1');");
E_D("replace into `wxq_model` values('3','下载模型','Download','10','条数据','上一页','下一页','首页','末页','%first%&nbsp;%upPage%&nbsp;%linkPage%&nbsp;%downPage%&nbsp;%end%&nbsp;共%totalRow%%header%&nbsp;%nowPage%/%totalPage%页','4','1');");
E_D("replace into `wxq_model` values('4','图片模型','Photo','12','条数据','上一页','下一页','首页','末页','%first%&nbsp;%upPage%&nbsp;%linkPage%&nbsp;%downPage%&nbsp;%end%&nbsp;共%totalRow%%header%&nbsp;%nowPage%/%totalPage%页','5','1');");
E_D("replace into `wxq_model` values('5','单页模型','Content','10','条数据','上一页','下一页','首页','末页','%first%&nbsp;%upPage%&nbsp;%linkPage%&nbsp;%downPage%&nbsp;%end%&nbsp;共%totalRow%%header%&nbsp;%nowPage%/%totalPage%页','2','1');");
E_D("replace into `wxq_model` values('7','微信模型','Weixin','18','条数据','上一页','下一页','首页','末页','%first%&nbsp;%upPage%&nbsp;%linkPage%&nbsp;%downPage%&nbsp;%end%&nbsp;共%totalRow%%header%&nbsp;%nowPage%/%totalPage%页','0','1');");
E_D("replace into `wxq_model` values('8','促销模型','Promotion','12','条数据','上一页','下一页','首页','末页','%first%&nbsp;%upPage%&nbsp;%linkPage%&nbsp;%downPage%&nbsp;%end%&nbsp;共%totalRow%%header%&nbsp;%nowPage%/%totalPage%页','1','1');");

require("../../inc/footer.php");
?>