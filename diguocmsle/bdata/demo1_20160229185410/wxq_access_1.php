<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxq_access`;");
E_C("CREATE TABLE `wxq_access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL,
  `pid` smallint(6) NOT NULL,
  KEY `groupId` (`role_id`),
  KEY `nodeId` (`node_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `wxq_access` values('9','240','2','88');");
E_D("replace into `wxq_access` values('9','239','3','235');");
E_D("replace into `wxq_access` values('9','238','3','235');");
E_D("replace into `wxq_access` values('9','237','3','235');");
E_D("replace into `wxq_access` values('9','236','3','235');");
E_D("replace into `wxq_access` values('9','235','2','88');");
E_D("replace into `wxq_access` values('9','234','2','88');");
E_D("replace into `wxq_access` values('9','233','3','229');");
E_D("replace into `wxq_access` values('9','232','3','229');");
E_D("replace into `wxq_access` values('9','231','3','229');");
E_D("replace into `wxq_access` values('9','230','3','229');");
E_D("replace into `wxq_access` values('9','229','2','88');");
E_D("replace into `wxq_access` values('9','222','3','214');");
E_D("replace into `wxq_access` values('9','221','3','214');");
E_D("replace into `wxq_access` values('9','220','3','214');");
E_D("replace into `wxq_access` values('9','219','3','214');");
E_D("replace into `wxq_access` values('9','218','3','213');");
E_D("replace into `wxq_access` values('9','217','3','213');");
E_D("replace into `wxq_access` values('9','216','3','213');");
E_D("replace into `wxq_access` values('9','215','3','213');");
E_D("replace into `wxq_access` values('9','214','2','91');");
E_D("replace into `wxq_access` values('9','213','2','91');");
E_D("replace into `wxq_access` values('9','212','3','181');");
E_D("replace into `wxq_access` values('9','211','3','181');");
E_D("replace into `wxq_access` values('9','210','3','181');");
E_D("replace into `wxq_access` values('9','209','3','181');");
E_D("replace into `wxq_access` values('9','208','3','186');");
E_D("replace into `wxq_access` values('9','207','3','86');");
E_D("replace into `wxq_access` values('9','206','3','180');");
E_D("replace into `wxq_access` values('9','205','3','180');");
E_D("replace into `wxq_access` values('9','204','3','185');");
E_D("replace into `wxq_access` values('9','203','3','185');");
E_D("replace into `wxq_access` values('9','202','3','185');");
E_D("replace into `wxq_access` values('9','201','3','185');");
E_D("replace into `wxq_access` values('9','200','3','183');");
E_D("replace into `wxq_access` values('9','199','3','183');");
E_D("replace into `wxq_access` values('9','198','3','183');");
E_D("replace into `wxq_access` values('9','197','3','183');");
E_D("replace into `wxq_access` values('9','196','3','186');");
E_D("replace into `wxq_access` values('9','195','3','178');");
E_D("replace into `wxq_access` values('9','194','3','178');");
E_D("replace into `wxq_access` values('9','193','3','178');");
E_D("replace into `wxq_access` values('9','192','3','178');");
E_D("replace into `wxq_access` values('9','191','3','184');");
E_D("replace into `wxq_access` values('9','190','3','184');");
E_D("replace into `wxq_access` values('9','189','3','184');");
E_D("replace into `wxq_access` values('9','188','3','184');");
E_D("replace into `wxq_access` values('9','187','3','180');");
E_D("replace into `wxq_access` values('9','185','2','88');");
E_D("replace into `wxq_access` values('9','184','2','88');");
E_D("replace into `wxq_access` values('9','181','2','89');");
E_D("replace into `wxq_access` values('9','180','2','88');");
E_D("replace into `wxq_access` values('9','183','2','88');");
E_D("replace into `wxq_access` values('9','178','2','88');");
E_D("replace into `wxq_access` values('9','186','2','88');");
E_D("replace into `wxq_access` values('9','164','3','114');");
E_D("replace into `wxq_access` values('9','156','3','103');");
E_D("replace into `wxq_access` values('9','155','3','103');");
E_D("replace into `wxq_access` values('9','154','3','103');");
E_D("replace into `wxq_access` values('9','153','3','103');");
E_D("replace into `wxq_access` values('9','152','3','86');");
E_D("replace into `wxq_access` values('9','151','3','113');");
E_D("replace into `wxq_access` values('9','150','3','112');");
E_D("replace into `wxq_access` values('9','149','3','118');");
E_D("replace into `wxq_access` values('9','148','3','118');");
E_D("replace into `wxq_access` values('9','147','3','118');");
E_D("replace into `wxq_access` values('9','146','3','118');");
E_D("replace into `wxq_access` values('9','145','3','117');");
E_D("replace into `wxq_access` values('9','144','3','117');");
E_D("replace into `wxq_access` values('9','143','3','117');");
E_D("replace into `wxq_access` values('9','142','3','117');");
E_D("replace into `wxq_access` values('9','141','3','108');");
E_D("replace into `wxq_access` values('9','140','3','108');");
E_D("replace into `wxq_access` values('9','139','3','108');");
E_D("replace into `wxq_access` values('9','138','3','108');");
E_D("replace into `wxq_access` values('9','137','3','109');");
E_D("replace into `wxq_access` values('9','131','3','104');");
E_D("replace into `wxq_access` values('9','130','3','104');");
E_D("replace into `wxq_access` values('9','129','3','104');");
E_D("replace into `wxq_access` values('9','128','3','104');");
E_D("replace into `wxq_access` values('9','127','3','104');");
E_D("replace into `wxq_access` values('9','126','3','107');");
E_D("replace into `wxq_access` values('9','125','3','107');");
E_D("replace into `wxq_access` values('9','124','3','107');");
E_D("replace into `wxq_access` values('9','123','3','84');");
E_D("replace into `wxq_access` values('9','122','3','107');");
E_D("replace into `wxq_access` values('9','121','3','84');");
E_D("replace into `wxq_access` values('9','120','3','84');");
E_D("replace into `wxq_access` values('9','182','2','89');");
E_D("replace into `wxq_access` values('9','118','2','88');");
E_D("replace into `wxq_access` values('9','117','2','88');");
E_D("replace into `wxq_access` values('9','113','2','111');");
E_D("replace into `wxq_access` values('9','112','2','111');");
E_D("replace into `wxq_access` values('9','111','1','0');");
E_D("replace into `wxq_access` values('9','109','2','88');");
E_D("replace into `wxq_access` values('9','108','2','88');");
E_D("replace into `wxq_access` values('9','107','2','88');");
E_D("replace into `wxq_access` values('9','104','2','88');");
E_D("replace into `wxq_access` values('9','103','2','89');");
E_D("replace into `wxq_access` values('9','114','2','89');");
E_D("replace into `wxq_access` values('9','97','3','84');");
E_D("replace into `wxq_access` values('9','91','1','0');");
E_D("replace into `wxq_access` values('9','89','1','0');");
E_D("replace into `wxq_access` values('9','88','1','0');");
E_D("replace into `wxq_access` values('9','86','2','89');");
E_D("replace into `wxq_access` values('9','84','2','88');");
E_D("replace into `wxq_access` values('9','50','3','40');");
E_D("replace into `wxq_access` values('9','40','2','91');");

require("../../inc/footer.php");
?>