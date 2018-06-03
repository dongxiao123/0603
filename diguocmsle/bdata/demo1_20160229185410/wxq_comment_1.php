<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxq_comment`;");
E_C("CREATE TABLE `wxq_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `modelname` varchar(50) DEFAULT NULL,
  `objectid` int(11) NOT NULL,
  `memberid` int(11) DEFAULT NULL,
  `membername` varchar(50) DEFAULT NULL,
  `content` text,
  `ip` varchar(50) DEFAULT NULL,
  `reply` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `create_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8");
E_D("replace into `wxq_comment` values('1','0','120','Weixin','186','2','shiyue','这个微信很牛B啊。。。哈哈','112.117.215.153','0','1','1404624948');");
E_D("replace into `wxq_comment` values('2','0','66','Weixin','54','1','tong850066186','ceshiyixia ','127.0.0.1','0','1','1418297710');");
E_D("replace into `wxq_comment` values('3','2','66','Weixin','54','13','tong850066186','sdf ','127.0.0.1','1','1','1418298138');");
E_D("replace into `wxq_comment` values('4','3','66','Weixin','54','13','tong850066186','sdaf','127.0.0.1','1','1','1418298884');");
E_D("replace into `wxq_comment` values('5','0','160','Weixin','4923','18','ying','52454gfytg 胡换个','113.13.105.65','0','1','1420855523');");
E_D("replace into `wxq_comment` values('6','0','228','Weixin','4926','23','test16937','这是一条十五字评论，算上这几个字。','222.129.238.26','0','1','1420876882');");
E_D("replace into `wxq_comment` values('7','0','192','Weixin','5032','59','yezhi','看看呢！！','101.204.149.219','0','1','1426668967');");
E_D("replace into `wxq_comment` values('8','0','192','Weixin','5032','59','yezhi','不错的哦！','101.204.149.219','0','1','1426669744');");
E_D("replace into `wxq_comment` values('9','0','56','Weixin','5010','74','zz107729943','还行','1.62.254.157','0','1','1427439430');");
E_D("replace into `wxq_comment` values('10','0','193','Weixin','5072','110','panbing75','好好好','60.188.145.179','0','1','1429607756');");
E_D("replace into `wxq_comment` values('11','0','63','Weixin','5087','145','Ys1126032218',' 香烟招代理，各种外烟批发微信Ys1126032218，一手货源，一条起发，凭借着质量第一诚信第一的经营方式专业管理团队微信赚钱微信卖什么最赚钱告诉你目前的趋势就是 微信一手外烟出口香烟。一手货源绝对保真各种外烟出口香烟图片介绍齐全价格合理月薪6位数分分钟不解释，白皮烟外烟批发一手货源诚招代理代购微信代理，更多品种价格请加qq705426239 正品外烟批发微信：Ys1126032218， 一手货源 价格最低 质量保障 寻长期合作伙伴，欢迎广大朋友前来咨询了解，原装正品，质量有保证，让你买的放心','113.249.167.183','0','1','1431734137');");
E_D("replace into `wxq_comment` values('12','0','63','Weixin','5087','25','one335','微信香烟代理\r\n各种香烟批发代理\r\n香烟一手货源 一条代发\r\n微信外烟批发代理微信one335','120.6.179.103','0','1','1432805028');");
E_D("replace into `wxq_comment` values('13','0','192','Weixin','5031','218','331255678','11','175.0.76.200','0','1','1436710510');");
E_D("replace into `wxq_comment` values('14','0','63','Weixin','5250','237','yodaos','有点意思！！','106.226.101.18','0','1','1437918131');");
E_D("replace into `wxq_comment` values('15','0','56','Weixin','5268','244','CoreYang','欢迎大家加入。选择芯漾是我经过自己使用，做实验，做检测之后选择的芯漾。芯漾已经3年了，依旧那么火。','221.3.134.123','0','1','1438330414');");
E_D("replace into `wxq_comment` values('16','0','63','Weixin','5250','248','one3356','不错 支持','120.6.158.204','0','1','1438571661');");
E_D("replace into `wxq_comment` values('17','0','56','Weixin','5273','259','wwweee','1111','111.20.241.253','0','1','1438846358');");

require("../../inc/footer.php");
?>