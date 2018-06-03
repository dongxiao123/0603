<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxq_user`;");
E_C("CREATE TABLE `wxq_user` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `account` varchar(64) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `password` char(32) NOT NULL,
  `last_login_time` int(11) unsigned DEFAULT '0',
  `last_login_ip` varchar(40) DEFAULT NULL,
  `login_count` mediumint(8) unsigned DEFAULT '0',
  `error_count` mediumint(8) DEFAULT '0',
  `error_login_time` int(11) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `remark` varchar(255) NOT NULL,
  `create_time` int(11) unsigned NOT NULL,
  `update_time` int(11) unsigned NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `role_id` mediumint(9) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `account` (`account`)
) ENGINE=MyISAM AUTO_INCREMENT=117 DEFAULT CHARSET=utf8");
E_D("replace into `wxq_user` values('1','admin','超级管理员','7fef6171469e80d32c0559f88b377245','1456588846','117.34.154.3','359','0','1456588825','','','1403882677','1408583500','1','0');");
E_D("replace into `wxq_user` values('8','t75820','75820','7f49d4a4a050e758f34b3af49b9d3bac','1440162520','218.203.10.58','78','0','1439573187','37358167@qq.com','','1422947216','0','1','9');");
E_D("replace into `wxq_user` values('9','89770860','89770860','48fbdeb8434dee2613190425a4b0553d','0',NULL,'0','0',NULL,'29d9fef28b96d614302617237c366f2d','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('10','hunter','hunter','0659c7992e268962384eb17fafe88364','0',NULL,'0','0',NULL,'a2fc94c880c5522f18d5653b8311056b','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('11','zcash888','zcash888','25f9e794323b453885f5181f1b624d0b','0',NULL,'0','0',NULL,'dcf063fd517d7cbfd3a49a4c016d5a6a','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('12','j370668827','许仙','d2dc867d5f6709194663ef50a076e678','0',NULL,'0','0',NULL,'f72e4fde302cef42fdcdde44137c1cee','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('13','one3355','one3355','25f9e794323b453885f5181f1b624d0b','0',NULL,'0','0',NULL,'668625b43c1af49218f82e08061942d1','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('14','szwwl','szwwl','48fbdeb8434dee2613190425a4b0553d','0',NULL,'0','0',NULL,'c56a3c560befa238e6c150291ae06295','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('15','123456','123456','e10adc3949ba59abbe56e057f20f883e','0',NULL,'0','0',NULL,'a3ac067040addd09621daa00ff22bb71','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('16','2266181','哈哈哈','ad07d639c71f14480201ab99f642353d','0',NULL,'0','0',NULL,'0d2b140d0855a274c72baf1cc10cc6bc','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('17','somehow2','fhv','e10adc3949ba59abbe56e057f20f883e','0',NULL,'0','0',NULL,'a18b76d23a5d7c54777177a72c856436','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('18','shujie','kibb','ff488831f2f7a34be6eec267096f592e','0',NULL,'0','0',NULL,'2aaaf761b9190d730bd1754509b044d6','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('24','好好','好好','e10adc3949ba59abbe56e057f20f883e','0',NULL,'0','0',NULL,'018e8b4d423876b1798328b4973f35ef','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('19','qwe198872','king','ff488831f2f7a34be6eec267096f592e','0',NULL,'0','0',NULL,'f0bb3998ecaeb173eb14c2522672d204','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('20','9784402','9784402','02e7ae9f7818906fca820de49b5ea699','0',NULL,'0','0',NULL,'02e7ae9f7818906fca820de49b5ea699','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('21','xiaoye888','小叶','39db7265dc8aea89c91da0c68e6585de','0',NULL,'0','0',NULL,'0fd6ca57fbaf4be012cfe9d1b8544f85','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('22','147258','147258','4607e782c4d86fd5364d7e4508bb10d9','0',NULL,'0','0',NULL,'4607e782c4d86fd5364d7e4508bb10d9','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('23','alalal','lao','aa7a1f08d5fa4e38679d10d99ac1dca2','0',NULL,'0','0',NULL,'5860b4e84f2c68346a8ee31126b3da97','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('25','lixiang','lixiang','07f27721c1ee0d1ee699225f779ae96f','0',NULL,'0','0',NULL,'2abf69f22cb1b3ad76283f49b744da32','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('26','qweqwe','qwe','46f94c8de14fb36680850768ff1b7f2a','0',NULL,'0','0',NULL,'788453dcf8b2d9acdc2de08882d4f890','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('27','hhh','好好','202cb962ac59075b964b07152d234b70','0',NULL,'0','0',NULL,'018e8b4d423876b1798328b4973f35ef','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('28','2077064600','胡倩','d09c7cdac4751704e712993c2e8e21db','0',NULL,'0','0',NULL,'c3700e6b8cd34372696944499f7ca36d','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('29','995309345','高粱','e2b5aed7d4b29e994237ca6c2e1d0ac8','0',NULL,'0','0',NULL,'30f8402cf779838a4ac239974a88c2bf','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('30','YYRong1999','玉蓉','269f33b791693f86bb60d856c9806929','0',NULL,'0','0',NULL,'2dda568581d310802085ee885ccc553d','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('36','4645','4646','25f9e794323b453885f5181f1b624d0b','0',NULL,'0','0',NULL,'99ae2c4b066b5fe6d9bb6d50a7a4dcdd','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('31','601767442','李丹','275a5bf4b068a990cf4fca323cffe6d0','0',NULL,'0','0',NULL,'3df0fff6d46866cc78c75fedd4801ede','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('32','326719636','明宝','f5d8302fd25593921890667d81ce75db','0',NULL,'0','0',NULL,'456bcff0bbfa9701fb202cdb33297051','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('33','1406600763','小脚丫','3fea4a2f9fc149c7ab8d5a2a6875f0dc','0',NULL,'0','0',NULL,'4f97b6df93886a1339b7620863193b0f','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('34','WDMLYF_CXY','远声','82c413124e78a2f5583d9d6fbd124c1d','0',NULL,'0','0',NULL,'0d9829c1a2ad74c8160218e58b59d26b','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('35','1021714882','55','e10adc3949ba59abbe56e057f20f883e','0',NULL,'0','0',NULL,'ba6932d7b33827757f715fcede9a4857','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('37','1944326166','雨墨','d2f1fe77886f166f4b7b0db9370f03e6','0',NULL,'0','0',NULL,'faaec37c7018ad92f820699a4b129481','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('38','yiran_6866','依然','e5ac6204b8d87453bcb43d6df00bbf35','0',NULL,'0','0',NULL,'02a25f74dafb0d2308bc895ac7ac7a80','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('39','0890030512','琼','e52593b8b0648c9c312e1020e5d468b6','0',NULL,'0','0',NULL,'a41dd2782591f06b7f022ed5e2fbe1dc','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('40','497461539','任性','fa2523fb47821df302c44161c4f81bfa','0',NULL,'0','0',NULL,'00a771a5e35bbdd9c53e625cc0004819','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('41','1065229141','小美','41ccfc17476419182f318d60bceba260','0',NULL,'0','0',NULL,'42f213cb6041b433cc186b9221c4e1f2','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('42','040523','辣妈交流','125229d6dffb963e283ee2e34f8d6a85','0',NULL,'0','0',NULL,'c3517c9eb7fa431477e048983b47f5f8','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('43','kakboy','卡卡','2357e6edc724175bb250329b44f38b35','0',NULL,'0','0',NULL,'ce3a13a298de8de41f9d07747814c9a9','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('44','kak','kkkk','ed2b1f468c5f915f3f1cf75d7068baae','0',NULL,'0','0',NULL,'ce3a13a298de8de41f9d07747814c9a9','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('45','w675193324','邂逅美丽','0daee25bc27a371876bfc98e92ace6d0','0',NULL,'0','0',NULL,'f39e79b54d4024d492c651aa6eda1cab','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('46','97252566','9元打码赚钱','66bef3421f51c5f1cf217501edd514d7','0',NULL,'0','0',NULL,'00e4b3d9ab727bed266abd1879a51dfc','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('47','1112223','44','25f9e794323b453885f5181f1b624d0b','0',NULL,'0','0',NULL,'95cc1d44d73841d04d56bd3858a11643','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('48','one123','985','25f9e794323b453885f5181f1b624d0b','0',NULL,'0','0',NULL,'25f9e794323b453885f5181f1b624d0b','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('49','www123','111','1bbd886460827015e5d605ed44252251','0',NULL,'0','0',NULL,'aea2d0f2148d45c34c631f883b01875d','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('50','13998282784','11','827ccb0eea8a706c4c34a16891f84e7b','0',NULL,'0','0',NULL,'f59a0077adc204f1402e227e629e61e4','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('51','hajiahui8','哈驾汇','e07b09f31aece61cdeb34c8f60b31c72','0',NULL,'0','0',NULL,'d43253d0620702b76c804d321b3feb39','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('52','www103404005u','丽丽','40331cc1cd7f8e53d5145baa90d50cbf','0',NULL,'0','0',NULL,'f3f0d650f633a9156955678144305edc','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('53','H01177','清雅','8724ad7be087ab6fc796a460e45b1a2c','0',NULL,'0','0',NULL,'d4e3c6419376794bab4a7fd8e9c1c0ae','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('54','15167788709','微信红包群','58cf703f664397ec4f0ac359b84b565c','0',NULL,'0','0',NULL,'1b6233e6804b67dc21ced915b446ce3c','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('55','13998282788','12345','827ccb0eea8a706c4c34a16891f84e7b','0',NULL,'0','0',NULL,'9806b902e654c2ddd3b611099436037a','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('56','123693','123693','e11f33debef2ec264972f2def69a7dd2','0',NULL,'0','0',NULL,'e11f33debef2ec264972f2def69a7dd2','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('57','testtt','在u','e10adc3949ba59abbe56e057f20f883e','0',NULL,'0','0',NULL,'6537e99af2c2223642df9f70a0b5afca','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('58','facebook','facebook','e10adc3949ba59abbe56e057f20f883e','0',NULL,'0','0',NULL,'ab2d113d71d8767274dae5d59cec7473','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('59','13998282785','阿里','827ccb0eea8a706c4c34a16891f84e7b','0',NULL,'0','0',NULL,'b709b47e4b9bdbfb1f5d5e83027277f0','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('64','552fg','gvjjjb','044edb792bb4a648f77a0ed00e87c8d5','0',NULL,'0','0',NULL,'8e763b08dc51c4be63c1230765a92ffc','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('60','123456666','123456666','355e02d13bce12b4090b5117d6d4852f','0',NULL,'0','0',NULL,'e10adc3949ba59abbe56e057f20f883e','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('61','18222904140','龙哥','c8837b23ff8aaa8a2dde915473ce0991','0',NULL,'0','0',NULL,'c88ea3f5920ec8762e49a19f3949167f','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('62','曹力','clrazr','a9af94ba00b62673ef8ea9ccbba9c745','0',NULL,'0','0',NULL,'75efefcf636e6498bc643a8f8729efb9','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('63','ceshiren','ceshiren','b63dc794b3e660e23eb131eca4526170','0',NULL,'0','0',NULL,'c4ca4238a0b923820dcc509a6f75849b','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('65','wxall','wxall','e10adc3949ba59abbe56e057f20f883e','0',NULL,'0','0',NULL,'5b13a727cbc7ed58e9e47c135b9db2b4','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('66','beancoat','fhhjj','e10adc3949ba59abbe56e057f20f883e','0',NULL,'0','0',NULL,'83183028ca030bc69bf516145867c402','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('67','55667788','在意自己一','25f9e794323b453885f5181f1b624d0b','0',NULL,'0','0',NULL,'7074ddc3e006810688241196414e49e2','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('68','479290599','明年','e10adc3949ba59abbe56e057f20f883e','0',NULL,'0','0',NULL,'704bc21ebe8ff5ec96e9528c237d8619','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('69','junyan','Junyan','6041a80ffbaf2b6ecb6981c150c8da93','0',NULL,'0','0',NULL,'6c456501976d802bdcad522dbd4bbd0e','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('71','www1034040057','丽丽','40331cc1cd7f8e53d5145baa90d50cbf','0',NULL,'0','0',NULL,'f3f0d650f633a9156955678144305edc','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('70','yyyy','pppp','e882b72bccfc2ad578c27b0d9b472a14','0',NULL,'0','0',NULL,'58e7347228831ef16d9e00d40d60631f','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('72','15989807595','叫我唐老鸭','f2e9d8083219cbec20f0003125ba188d','0',NULL,'0','0',NULL,'1916400aaa7a30bd9b2c29d2e4c7f16b','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('73','990352085','龙腾国际','a27d750749078b41a526b38060742882','0',NULL,'0','0',NULL,'1d78334c4c68380206a346d3b1facc4e','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('74','huo888666888','人脉哥','25f9e794323b453885f5181f1b624d0b','0',NULL,'0','0',NULL,'c22cb4d0db0cad5aeb6ddf4d883ae9bb','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('75','15252010243','移动电商','aec316f5164a89c507cf025882ff804a','0',NULL,'0','0',NULL,'cad482cac22f69aa349418e45f068f64','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('76','q0123753','钢镚','1adc37b5dc391ef1e33085ca378b63c8','0',NULL,'0','0',NULL,'d88baf2b0b21d26b0c1c28e7d422762e','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('77','shijiayong','百分百营销软件','320778879e7fac33cb04fb29c1d090cf','0',NULL,'0','0',NULL,'d860fe4564a90fe6b3b5a6e2bb6aad21','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('78','wwj123','wwj123','3e2a43b657a47e63fe1808e10943c00c','0',NULL,'0','0',NULL,'e10adc3949ba59abbe56e057f20f883e','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('79','123456789','123456789','25f9e794323b453885f5181f1b624d0b','0',NULL,'0','0',NULL,'25f9e794323b453885f5181f1b624d0b','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('80','2345678','wwj123','e10adc3949ba59abbe56e057f20f883e','0',NULL,'0','0',NULL,'b3275960d68fda9d831facc0426c3bbc','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('81','168898','wwj234','1af4c23ad5235166016e3add1e696974','0',NULL,'0','0',NULL,'3e2a43b657a47e63fe1808e10943c00c','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('82','111222','111222','00b7691d86d96aebd21dd9e138f90840','0',NULL,'0','0',NULL,'00b7691d86d96aebd21dd9e138f90840','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('83','wwj456','wwj567','3e2a43b657a47e63fe1808e10943c00c','0',NULL,'0','0',NULL,'abaceabc3b49e3ddec9bae35e08ace09','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('84','456123','wwj456','e10adc3949ba59abbe56e057f20f883e','0',NULL,'0','0',NULL,'d964173dc44da83eeafa3aebbee9a1a0','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('85','wwj987','wwj125','3e2a43b657a47e63fe1808e10943c00c','0',NULL,'0','0',NULL,'3a2fc905c5fe82ea794acac21cca28f8','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('86','wwj126','wwj127','3e2a43b657a47e63fe1808e10943c00c','0',NULL,'0','0',NULL,'61f4c6e7fe290a01db8827141c2d035e','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('87','987654','987654','3e2a43b657a47e63fe1808e10943c00c','0',NULL,'0','0',NULL,'acc4cfc0773695795955f187d86342c3','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('88','lln-20','miss Lou','4a97aeddac3fa75e5da8916fc1c2276f','0',NULL,'0','0',NULL,'c376e63eead5a95f826790843deb0dbf','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('89','520zwy','小鱼','2ff7efdc1e221650926584ef97f35e0e','0',NULL,'0','0',NULL,'ab69de4b242b1b50ad4997e60c0bdbe3','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('90','416862192','mais卫生巾总代','a83d2173fb4e03c6c7210f29fa003247','0',NULL,'0','0',NULL,'148264a7d3d0246783975bd6badaa475','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('91','1010957167','猜不透','4ef337e757f870ecdba56b5282478ba9','0',NULL,'0','0',NULL,'04c042a5c60c50e679fe69930572f5a2','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('92','13413091497','沫沫','e2a7bccd3a90789417a9b845eed6bed6','0',NULL,'0','0',NULL,'f2216e0c54d260beddf2d91249c1a2e3','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('93','Zwy__love','张小鱼','2ff7efdc1e221650926584ef97f35e0e','0',NULL,'0','0',NULL,'ab69de4b242b1b50ad4997e60c0bdbe3','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('94','daming123','daming321','4c6d6759e5099d62f2ca31adea3921d9','0',NULL,'0','0',NULL,'4b4c729ac8359763a64498b17128ec69','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('95','tianmm','daming555','4c6d6759e5099d62f2ca31adea3921d9','0',NULL,'0','0',NULL,'e9a1ba4cc9f19d74bb2e608882fa8d94','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('96','zk2001boy','admin','827ccb0eea8a706c4c34a16891f84e7b','0',NULL,'0','0',NULL,'d5eb94de3d4dba43e72664858721155c','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('97','yhq19921004yhq','小村姑','d34a840d9b4f4bec9945cc4ae94ea945','0',NULL,'0','0',NULL,'934b10f760df0e1a55141aad8ee4d60c','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('98','18367994424','小村姑™文丽君','d34a840d9b4f4bec9945cc4ae94ea945','0',NULL,'0','0',NULL,'934b10f760df0e1a55141aad8ee4d60c','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('99','weishang','shujie','ff488831f2f7a34be6eec267096f592e','0',NULL,'0','0',NULL,'99afe7b971a71074499986ff57380790','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('100','liuxia','shujie','ff488831f2f7a34be6eec267096f592e','0',NULL,'0','0',NULL,'76c00cef3339c9c9227bd9d56ea78dc9','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('101','107729943','男人的天空','25f9e794323b453885f5181f1b624d0b','0',NULL,'0','0',NULL,'f8761de11280bdbd3e5b194cb94fbb3c','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('102','1997827','吃盐要加齐啊','50c9ce8ec5c0168f4091cf83a3a47671','0',NULL,'0','0',NULL,'bcf15fe5c155bf3a66423f8a2b727ef9','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('103','touzi','king','ff488831f2f7a34be6eec267096f592e','0',NULL,'0','0',NULL,'215dd8c0407d1489dcf78e022341b95a','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('104','1903293482','孔雀','f21a5f1a8acba1324644bbaf8309aaf4','0',NULL,'0','0',NULL,'0d96608754cde7bd869df7aa96ba1d98','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('105','king','shujie','ff488831f2f7a34be6eec267096f592e','0',NULL,'0','0',NULL,'eb68b8c386ddab3762b42caed01a58f0','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('106','woniu','woniu','ff488831f2f7a34be6eec267096f592e','0',NULL,'0','0',NULL,'579150d63e52d39d1ed1df898209bbee','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('107','dage','king','ff488831f2f7a34be6eec267096f592e','0',NULL,'0','0',NULL,'c69f01c3565f5dfd7f719f39d6374e68','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('108','dage1','shujie','ff488831f2f7a34be6eec267096f592e','0',NULL,'0','0',NULL,'d257573de7dcf1110033225f5eb51a73','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('109','19770528','wwjwwj','3e2a43b657a47e63fe1808e10943c00c','0',NULL,'0','0',NULL,'62f5383a7db4195ee414a70d157555b1','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('110','506189208','燕子','5789037c1e39fbfcef90964ba4caf262','0',NULL,'0','0',NULL,'cdb0ab5d31448ba9e7bbbef1c5c389b4','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('111','405328541','晓小晞','e8033eee83420e13eead2df094c39c25','0',NULL,'0','0',NULL,'76da8b553c297bd3146c19dfa8d80286','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('112','a9988','a9988','ff488831f2f7a34be6eec267096f592e','0',NULL,'0','0',NULL,'90306a0237c000d33f4dbd3f8f41ba7c','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('113','1399825428','莹莹','f7d001bb026fcb4d18635b7f97f56097','0',NULL,'0','0',NULL,'c7fd72be1f2dab4319e5fecec8142606','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('114','EPKAD','214','e10adc3949ba59abbe56e057f20f883e','0',NULL,'0','0',NULL,'fc666122a785251c3373d68166c4c8e2','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('115','MMM13661004129','三妹','1e0dc1807a7fabebbd24301d6171990b','0',NULL,'0','0',NULL,'a760ed961b1cb6d34798a5d88a7a19df','','0','0',NULL,NULL);");
E_D("replace into `wxq_user` values('116','zcash8888','zcash8888','25f9e794323b453885f5181f1b624d0b','0',NULL,'0','0',NULL,'058bfa01160e1f55238347c9a5388f9a','','0','0',NULL,NULL);");

require("../../inc/footer.php");
?>