<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxq_node`;");
E_C("CREATE TABLE `wxq_node` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `remark` varchar(255) DEFAULT NULL,
  `sort` smallint(6) unsigned DEFAULT NULL,
  `pid` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) unsigned NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `level` (`level`),
  KEY `pid` (`pid`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=241 DEFAULT CHARSET=utf8");
E_D("replace into `wxq_node` values('40','Index','我的信息','1',NULL,'1','91','2','0');");
E_D("replace into `wxq_node` values('7','User','管理员管理','1','','7','89','2','0');");
E_D("replace into `wxq_node` values('6','Role','权限组管理','1','','9','89','2','0');");
E_D("replace into `wxq_node` values('2','Node','菜单管理','1','','12','89','2','0');");
E_D("replace into `wxq_node` values('92','index','列表','1',NULL,NULL,'7','3','0');");
E_D("replace into `wxq_node` values('50','index','系统信息','1',NULL,'0','40','3','0');");
E_D("replace into `wxq_node` values('84','Link','友情链接','1','','2','88','2','0');");
E_D("replace into `wxq_node` values('86','Set','站点设置','1',NULL,'0','89','2','0');");
E_D("replace into `wxq_node` values('88','Model','模块管理','1',NULL,'2','0','1','0');");
E_D("replace into `wxq_node` values('89','System','系统管理','1',NULL,'4','0','1','0');");
E_D("replace into `wxq_node` values('91','Home','起始页','0','','1','0','1','0');");
E_D("replace into `wxq_node` values('97','add','添加','1',NULL,'0','84','3','0');");
E_D("replace into `wxq_node` values('172','back','备份','1','','0','105','3','0');");
E_D("replace into `wxq_node` values('171','index','显示','1','','0','105','3','0');");
E_D("replace into `wxq_node` values('114','Pageset','分页设置','1','','10','89','2','0');");
E_D("replace into `wxq_node` values('103','Category','栏目管理','1','','5','89','2','0');");
E_D("replace into `wxq_node` values('104','Message','留言管理','1','','4','88','2','0');");
E_D("replace into `wxq_node` values('105','Databack','数据备份','1','','13','89','2','0');");
E_D("replace into `wxq_node` values('107','Announce','公告管理','1','','3','88','2','0');");
E_D("replace into `wxq_node` values('108','Other','扩展功能','0','','9','88','2','0');");
E_D("replace into `wxq_node` values('109','Sitemap','sitemap','1','','9','88','2','0');");
E_D("replace into `wxq_node` values('106','Datarecover','数据恢复','1','','15','89','2','0');");
E_D("replace into `wxq_node` values('111','App','手机APP','1','','3','0','1','0');");
E_D("replace into `wxq_node` values('112','Appmodel','APP模板设置','1','','0','111','2','0');");
E_D("replace into `wxq_node` values('113','Appcreate','APP生成下载','1','','1','111','2','0');");
E_D("replace into `wxq_node` values('116','Annex','附件管理','1','','10','89','2','0');");
E_D("replace into `wxq_node` values('117','Member','会员管理','1','','11','88','2','0');");
E_D("replace into `wxq_node` values('118','Membergroup','会员组管理','1','','13','88','2','0');");
E_D("replace into `wxq_node` values('182','Clearcache','清除缓存','1',NULL,'25','89','2','0');");
E_D("replace into `wxq_node` values('120','index','查看','1',NULL,'0','84','3','0');");
E_D("replace into `wxq_node` values('121','edit','修改','1',NULL,'0','84','3','0');");
E_D("replace into `wxq_node` values('122','add','添加','1',NULL,'0','107','3','0');");
E_D("replace into `wxq_node` values('123','foreverdelete','删除','1',NULL,'0','84','3','0');");
E_D("replace into `wxq_node` values('124','index','查看','1',NULL,'0','107','3','0');");
E_D("replace into `wxq_node` values('125','edit','修改','1',NULL,'0','107','3','0');");
E_D("replace into `wxq_node` values('126','foreverdelete','删除','1',NULL,'0','107','3','0');");
E_D("replace into `wxq_node` values('127','add','添加','1',NULL,'0','104','3','0');");
E_D("replace into `wxq_node` values('128','foreverdelete','删除','1',NULL,'0','104','3','0');");
E_D("replace into `wxq_node` values('129','edit','回复','1',NULL,'0','104','3','0');");
E_D("replace into `wxq_node` values('130','checkPass','批准','1',NULL,'0','104','3','0');");
E_D("replace into `wxq_node` values('131','index','列表','1',NULL,'0','104','3','0');");
E_D("replace into `wxq_node` values('132','index','列表','1',NULL,'0','119','3','0');");
E_D("replace into `wxq_node` values('133','checkPass','发货','1',NULL,'0','119','3','0');");
E_D("replace into `wxq_node` values('134','over','已收到货','1',NULL,'0','119','3','0');");
E_D("replace into `wxq_node` values('135','forbid','退货','1',NULL,'0','119','3','0');");
E_D("replace into `wxq_node` values('136','edit','查看订单详细','1',NULL,'0','119','3','0');");
E_D("replace into `wxq_node` values('137','index','生成','1',NULL,'0','109','3','0');");
E_D("replace into `wxq_node` values('138','add','添加','1',NULL,'0','108','3','0');");
E_D("replace into `wxq_node` values('139','index','列表','1',NULL,'0','108','3','0');");
E_D("replace into `wxq_node` values('140','edit','修改','1',NULL,'0','108','3','0');");
E_D("replace into `wxq_node` values('141','foreverdelete','删除','1',NULL,'0','108','3','0');");
E_D("replace into `wxq_node` values('142','add','添加','1',NULL,'0','117','3','0');");
E_D("replace into `wxq_node` values('143','index','列表','1',NULL,'0','117','3','0');");
E_D("replace into `wxq_node` values('144','edit','修改','1',NULL,'0','117','3','0');");
E_D("replace into `wxq_node` values('145','foreverdelete','删除','1',NULL,'0','117','3','0');");
E_D("replace into `wxq_node` values('146','add','添加','1',NULL,'0','118','3','0');");
E_D("replace into `wxq_node` values('147','index','列表','1',NULL,'0','118','3','0');");
E_D("replace into `wxq_node` values('148','edit','修改','1',NULL,'0','118','3','0');");
E_D("replace into `wxq_node` values('149','foreverdelete','删除','1',NULL,'0','118','3','0');");
E_D("replace into `wxq_node` values('150','index','选择模板','1',NULL,'0','112','3','0');");
E_D("replace into `wxq_node` values('151','index','app生成','1',NULL,'0','113','3','0');");
E_D("replace into `wxq_node` values('152','index','查看','1',NULL,'0','86','3','0');");
E_D("replace into `wxq_node` values('153','add','添加','1',NULL,'0','103','3','0');");
E_D("replace into `wxq_node` values('154','index','列表','1',NULL,'0','103','3','0');");
E_D("replace into `wxq_node` values('155','edit','修改','1',NULL,'0','103','3','0');");
E_D("replace into `wxq_node` values('156','foreverdelete','删除','1',NULL,'0','103','3','0');");
E_D("replace into `wxq_node` values('157','add','添加','1',NULL,'0','7','3','0');");
E_D("replace into `wxq_node` values('158','edit','修改','1',NULL,'0','7','3','0');");
E_D("replace into `wxq_node` values('159','foreverdelete','删除','1',NULL,'0','7','3','0');");
E_D("replace into `wxq_node` values('160','index','列表','1',NULL,'0','6','3','0');");
E_D("replace into `wxq_node` values('161','add','添加','1',NULL,'0','6','3','0');");
E_D("replace into `wxq_node` values('162','edit','修改','1',NULL,'0','6','3','0');");
E_D("replace into `wxq_node` values('163','foreverdelete','删除','1',NULL,'0','6','3','0');");
E_D("replace into `wxq_node` values('164','index','修改','1',NULL,'0','114','3','0');");
E_D("replace into `wxq_node` values('165','role','授权','1',NULL,'0','6','3','0');");
E_D("replace into `wxq_node` values('166','index','设置','1',NULL,'0','116','3','0');");
E_D("replace into `wxq_node` values('167','index','列表','1',NULL,'0','2','3','0');");
E_D("replace into `wxq_node` values('168','add','添加','1',NULL,'0','2','3','0');");
E_D("replace into `wxq_node` values('169','edit','修改','1',NULL,'0','2','3','0');");
E_D("replace into `wxq_node` values('170','foreverdelete','删除','1',NULL,'0','2','3','0');");
E_D("replace into `wxq_node` values('173','index','查看','1',NULL,'0','106','3','0');");
E_D("replace into `wxq_node` values('174','recover','恢复','1',NULL,'0','106','3','0');");
E_D("replace into `wxq_node` values('175','deletebak','删除','1',NULL,'0','106','3','0');");
E_D("replace into `wxq_node` values('176','downloadBak','下载','1',NULL,'0','106','3','0');");
E_D("replace into `wxq_node` values('186','Wxapi','微信接口','1','','4','88','2','0');");
E_D("replace into `wxq_node` values('178','Chain','内链优化','1','','8','88','2','0');");
E_D("replace into `wxq_node` values('183','Areas','地区联动菜单','1',NULL,'20','88','2','0');");
E_D("replace into `wxq_node` values('180','Comment','评论管理','1','','2','88','2','0');");
E_D("replace into `wxq_node` values('181','Badword','敏感词管理','1',NULL,'11','89','2','0');");
E_D("replace into `wxq_node` values('184','Advert','广告管理','1',NULL,'3','88','2','0');");
E_D("replace into `wxq_node` values('185','Search','站内搜索词','1',NULL,'30','88','2','0');");
E_D("replace into `wxq_node` values('187','index','查看','1',NULL,'0','180','3','0');");
E_D("replace into `wxq_node` values('188','index','查看','1',NULL,'0','184','3','0');");
E_D("replace into `wxq_node` values('189','add','添加','1',NULL,'0','184','3','0');");
E_D("replace into `wxq_node` values('190','foreverdelete','删除','1',NULL,'0','184','3','0');");
E_D("replace into `wxq_node` values('191','edit','修改','1',NULL,'0','184','3','0');");
E_D("replace into `wxq_node` values('192','index','查看','1',NULL,'0','178','3','0');");
E_D("replace into `wxq_node` values('193','add','添加','1',NULL,'0','178','3','0');");
E_D("replace into `wxq_node` values('194','foreverdelete','删除','1',NULL,'0','178','3','0');");
E_D("replace into `wxq_node` values('195','edit','修改','1',NULL,'0','178','3','0');");
E_D("replace into `wxq_node` values('196','index','查看','1',NULL,'0','186','3','0');");
E_D("replace into `wxq_node` values('197','index','查看','1',NULL,'0','183','3','0');");
E_D("replace into `wxq_node` values('198','add','添加','1',NULL,'0','183','3','0');");
E_D("replace into `wxq_node` values('199','foreverdelete','删除','1',NULL,'0','183','3','0');");
E_D("replace into `wxq_node` values('200','edit','修改','1',NULL,'0','183','3','0');");
E_D("replace into `wxq_node` values('201','index','查看','1',NULL,'0','185','3','0');");
E_D("replace into `wxq_node` values('202','add','添加','1',NULL,'0','185','3','0');");
E_D("replace into `wxq_node` values('203','foreverdelete','删除','1',NULL,'0','185','3','0');");
E_D("replace into `wxq_node` values('204','edit','修改','1',NULL,'0','185','3','0');");
E_D("replace into `wxq_node` values('205','checkPass','审核','1',NULL,'0','180','3','0');");
E_D("replace into `wxq_node` values('206','forbid','忽略','1',NULL,'0','180','3','0');");
E_D("replace into `wxq_node` values('207','save','修改','1',NULL,'0','86','3','0');");
E_D("replace into `wxq_node` values('208','save','修改','1',NULL,'0','186','3','0');");
E_D("replace into `wxq_node` values('209','index','查看','1',NULL,'0','181','3','0');");
E_D("replace into `wxq_node` values('210','add','添加','1',NULL,'0','181','3','0');");
E_D("replace into `wxq_node` values('211','foreverdelete','删除','1',NULL,'0','181','3','0');");
E_D("replace into `wxq_node` values('212','edit','修改','1',NULL,'0','181','3','0');");
E_D("replace into `wxq_node` values('213','Weixin','微信内容','1','','2','91','2','0');");
E_D("replace into `wxq_node` values('214','Article','文章内容','1','','3','91','2','0');");
E_D("replace into `wxq_node` values('215','index','查看','1','','0','213','3','0');");
E_D("replace into `wxq_node` values('216','add','添加','1','','0','213','3','0');");
E_D("replace into `wxq_node` values('217','edit','修改','1','','0','213','3','0');");
E_D("replace into `wxq_node` values('218','foreverdelete','删除','1','','0','213','3','0');");
E_D("replace into `wxq_node` values('219','index','查看','1','','0','214','3','0');");
E_D("replace into `wxq_node` values('220','add','添加','1','','0','214','3','0');");
E_D("replace into `wxq_node` values('221','edit','修改','1','','0','214','3','0');");
E_D("replace into `wxq_node` values('222','foreverdelete','删除','1','','0','214','3','0');");
E_D("replace into `wxq_node` values('229','Recommend','推荐位置设置','1','','1','88','2','0');");
E_D("replace into `wxq_node` values('230','index','查看','1','','0','229','3','0');");
E_D("replace into `wxq_node` values('231','add','添加','1','','0','229','3','0');");
E_D("replace into `wxq_node` values('232','edit','修改','1','','0','229','3','0');");
E_D("replace into `wxq_node` values('233','foreverdelete','删除','1','','0','229','3','0');");
E_D("replace into `wxq_node` values('234','Payment','充值管理','1','','0','88','2','0');");
E_D("replace into `wxq_node` values('235','Slide','幻灯片管理','1','','3','88','2','0');");
E_D("replace into `wxq_node` values('236','index','查看','1','','0','235','3','0');");
E_D("replace into `wxq_node` values('237','add','添加','1','','0','235','3','0');");
E_D("replace into `wxq_node` values('238','edit','修改','1','','0','235','3','0');");
E_D("replace into `wxq_node` values('239','foreverdelete','删除','1','','0','235','3','0');");
E_D("replace into `wxq_node` values('240','Yufuunion','任务联盟','1','','5','88','2','0');");

require("../../inc/footer.php");
?>