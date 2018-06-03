<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxq_advert`;");
E_C("CREATE TABLE `wxq_advert` (
  `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `adname` varchar(50) NOT NULL,
  `adtag` varchar(50) NOT NULL,
  `timelimit` tinyint(4) DEFAULT NULL,
  `starttime` int(11) NOT NULL,
  `endtime` int(11) NOT NULL,
  `adcontent` text,
  `adpastcontent` text,
  `status` tinyint(1) NOT NULL,
  `create_time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `siteid` (`endtime`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8");
E_D("replace into `wxq_advert` values('9','莎丽汉森水光针全国招代理','listrightside','0','0','0','http://www.75820.com/m/index.php?m=Index&a=archives&id=5377','<a href=\"http://www.yufu5.com\" target=\"_blank\"><img src=\"/Uploads/2013/05/23/ad260x120.jpg\"></a>','1','1440749337');");
E_D("replace into `wxq_advert` values('10','首页flash','flashad01','1','1434423120','1435632720','<script type=\"text/javascript\"> \r\n                                                \r\n                                                \$(document).ready(function(){\r\n                                                jQuery.yufu.loadFlashSwf({\r\n                                                   swfUrl : \"/admin/Tpl/Public/images/ad260x405.swf\",\r\n                                                   clientId : \"FlashAd01\",\r\n                                                   width : \"260\",\r\n                                                   height : \"405\"\r\n                                                });});\r\n                                                </script>','<script type=\"text/javascript\"> \r\n                                                \r\n                                                \$(document).ready(function(){\r\n                                                jQuery.yufu.loadFlashSwf({\r\n                                                   swfUrl : \"/admin/Tpl/Public/images/ad260x405.swf\",\r\n                                                   clientId : \"FlashAd01\",\r\n                                                   width : \"260\",\r\n                                                   height : \"405\"\r\n                                                });});\r\n                                                </script>','1','1440265310');");
E_D("replace into `wxq_advert` values('11','梵洁诗EE霜找代理','detailright','0','0','0','http://www.75820.com/m/index.php?m=Index&a=archives&id=5009','','1','1435719638');");
E_D("replace into `wxq_advert` values('12','马油皂总代','remenad','0','1426042560','1458874560','http://www.75820.com/m/index.php?m=Index&a=archives&id=5020','','1','1435719751');");
E_D("replace into `wxq_advert` values('13','木子微商','muzi','0','0','0','http://www.75820.com/m/index.php?m=Index&a=archives&id=5009','','1','1435719808');");
E_D("replace into `wxq_advert` values('14','微信批发香烟招代理一手货源一件代发','55s','0','0','0','http://www.75820.com/m/index.php?m=Index&a=archives&id=5091','','1','1435719775');");
E_D("replace into `wxq_advert` values('15','微商课程，教你怎么做好微商赚大米','weishang','0','0','0','','','1','1435719103');");

require("../../inc/footer.php");
?>