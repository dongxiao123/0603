<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxq_search`;");
E_C("CREATE TABLE `wxq_search` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `search` varchar(20) NOT NULL,
  `hits` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8");
E_D("replace into `wxq_search` values('2','百雀羚','105','1','1428405869');");
E_D("replace into `wxq_search` values('52','植美村','2','1','1428405839');");
E_D("replace into `wxq_search` values('51','莎丽汉森','2','1','1428405902');");
E_D("replace into `wxq_search` values('50','复古女孩','1','1','1428405917');");
E_D("replace into `wxq_search` values('49','vlv面膜','1','1','1428405966');");
E_D("replace into `wxq_search` values('48','金稻','2','1','1428405889');");
E_D("replace into `wxq_search` values('13','微营销','1666','1','1428406206');");
E_D("replace into `wxq_search` values('14','蓝蓓丽','3108','1','1421757526');");
E_D("replace into `wxq_search` values('47','梵洁诗EE霜','3','1','1428405983');");
E_D("replace into `wxq_search` values('46','微信红包','2','1','1428406038');");
E_D("replace into `wxq_search` values('45','韩束','2083','1','1421757511');");
E_D("replace into `wxq_search` values('44','阐幽','1','1','1428406064');");
E_D("replace into `wxq_search` values('43','微商','2','1','1428406157');");
E_D("replace into `wxq_search` values('42','代理','2','1','1428406235');");
E_D("replace into `wxq_search` values('53','中华神皂','1','1','1428405821');");
E_D("replace into `wxq_search` values('54','黛莱美','2','1','1423144318');");
E_D("replace into `wxq_search` values('55','美容','1','1','1418091087');");
E_D("replace into `wxq_search` values('56','一手货源','0','1','1428406266');");

require("../../inc/footer.php");
?>