<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxq_other`;");
E_C("CREATE TABLE `wxq_other` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `setname` varchar(80) DEFAULT NULL,
  `settag` varchar(80) DEFAULT NULL,
  `setvalue` text,
  `setexplain` text,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8");
E_D("replace into `wxq_other` values('1','CNZZ流量统计','cnzzstatistics','<script>\r\nvar _hmt = _hmt || [];\r\n(function() {\r\n  var hm = document.createElement(\"script\");\r\n  hm.src = \"//hm.baidu.com/hm.js?765566d7acf29d2a4624d6f29a3c3dd3\";\r\n  var s = document.getElementsByTagName(\"script\")[0]; \r\n  s.parentNode.insertBefore(hm, s);\r\n})();\r\n</script>','','1');");
E_D("replace into `wxq_other` values('3','51啦流量统计','lastatistics','','每天有多少人访问您的网站? 现在有谁正在您的网站上? 他们做了什么?在这里一目了然。http://www.51.la/','1');");
E_D("replace into `wxq_other` values('17','多说评论','duoshuo','<!-- Duoshuo Comment BEGIN -->\r\n<div class=\"ds-thread\" data-thread-key=\"{\$data.id}\" data-title=\"{\$data.title}\"></div>\r\n<script type=\"text/javascript\">\r\nvar duoshuoQuery = {short_name:\"ppaipai\"};\r\n	(function() {\r\n		var ds = document.createElement(''script'');\r\n		ds.type = ''text/javascript'';ds.async = true;\r\n		ds.src = ''http://static.duoshuo.com/embed.js'';\r\n		ds.charset = ''UTF-8'';\r\n		(document.getElementsByTagName(''head'')[0] \r\n		|| document.getElementsByTagName(''body'')[0]).appendChild(ds);\r\n	})();\r\n	</script>\r\n<!-- Duoshuo Comment END -->','让评论更活跃、互动性更强的评论系统，永久免费且容易安装\r\n用微博、QQ、人人、豆瓣等帐号轻松评论和分享\r\n智能识别垃圾评论、稳步提升网站流量\r\nhttp://duoshuo.com/','1');");
E_D("replace into `wxq_other` values('4','365webcall在线客服','services',NULL,'他们从何而来? 搜索引擎为您带来多少点击? 访问者搜索的关键词是什么?','1');");
E_D("replace into `wxq_other` values('5','加为收藏','collect','<a href=\"javascript:window.external.AddFavorite(''http://www.weixindak.com'',''微信群站'')\"><img src=\"www.weixindak.com/Apps/Tpl/default/Public/images/jrsc.jpg\"></a>','','1');");
E_D("replace into `wxq_other` values('6','设为首页','homepage','<a href=\" \" onclick=\"this.style.behavior=''url(#default#homepage)'';this.setHomePage(''http://www.weixindak.com);\"><img src=\"www.weixindak.com/Apps/Tpl/default/Public/images/swsy.jpg\" /></a>','','1');");
E_D("replace into `wxq_other` values('9','页脚','footer','<div align=\"center\">75820微商网（7商网）为用户免费分享产生，若发现您的权利被侵害，请联系373584167@qq.com ，我们尽快处理 <br>\r\n  Copyright © 2015 www.75820.com 75820微商网（7商网） 版权所有.\r\n</div>','','1');");
E_D("replace into `wxq_other` values('16','微信审核原则','shenheyz','<p>\r\n含有以下任何内容的，不予审核通过：<br>\r\n1、反对宪法所确定的基本原则的；<br>\r\n2、危害国家安全，泄露国家秘密，颠覆国家政权，破坏国家统一的；<br>\r\n3、破坏国家宗教政策，宣扬邪教和封建迷信的；<br>\r\n4、散布谣言，扰乱社会秩序，破坏社会稳定的；<br>\r\n5、散布淫秽、色情、赌博、暴力、凶杀、恐怖或者教唆犯罪的；<br>\r\n6、侮辱或者诽谤他人，侵害他人合法权益的；<br>\r\n7、含有法律、行政法规禁止的其他内容的信息<br>\r\n</p>','','1');");
E_D("replace into `wxq_other` values('11','百度分享','bdshare','<!-- Baidu Button BEGIN -->\r\n<script type=\"text/javascript\" id=\"bdshare_js\" data=\"type=slide&amp;img=2&amp;pos=left&amp;uid=6598355\" ></script>\r\n<script type=\"text/javascript\" id=\"bdshell_js\"></script>\r\n<script type=\"text/javascript\">\r\ndocument.getElementById(\"bdshell_js\").src = \"http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=\" + Math.ceil(new Date()/3600000);\r\n</script>\r\n<!-- Baidu Button END -->','','0');");
E_D("replace into `wxq_other` values('15','qq群','qqqun','QQ群：322749653(可加) 322751062(可加) 291832593(可加)','','1');");
E_D("replace into `wxq_other` values('18','推荐说明','tjsm','推荐方式消费积分说明：\r\n1、热门推荐，1天消费30积分\r\n2、推荐到首页分类，1天消费20积分\r\n3、推荐到列表页分类，1天消费10积分\r\n','自助推荐功能，推荐说明。','1');");
E_D("replace into `wxq_other` values('19','咨询热线','zxrx','136-0323-0609','','1');");
E_D("replace into `wxq_other` values('20','客服咨询','kfzx','          <p><span>蒙蒙</span>\r\n            <a href=\"http://wpa.qq.com/msgrd?v=3&uin=373584167&site=s.weixinqun.com&menu=yes\" target=\"_blank\" rel=\"nofollow\">\r\n              <img border=\"0\" src=\"http://wpa.qq.com/pa?p=2:240609386:41\" alt=\"给我留言\">\r\n            </a>\r\n          </p>\r\n          <p><span>文文</span>\r\n            <a href=\"http://wpa.qq.com/msgrd?v=3&uin=373584167&site=s.weixinqun.com&menu=yes\" target=\"_blank\" rel=\"nofollow\">\r\n              <img border=\"0\" src=\"http://wpa.qq.com/pa?p=2:240609386:41\" alt=\"给我留言\">\r\n            </a>\r\n          </p>\r\n          <p><span>宇宇</span>\r\n            <a href=\"http://wpa.qq.com/msgrd?v=3&uin=2625407466&site=s.weixinqun.com&menu=yes\" target=\"_blank\" rel=\"nofollow\">\r\n              <img border=\"0\" src=\"http://wpa.qq.com/pa?p=2:240609386:41\" alt=\"给我留言\">\r\n            </a>\r\n          </p>\r\n          <p><span>松松</span>\r\n            <a href=\"http://wpa.qq.com/msgrd?v=3&uin=373584167&site=s.weixinqun.com&menu=yes\" target=\"_blank\" rel=\"nofollow\">\r\n              <img border=\"0\" src=\"http://wpa.qq.com/pa?p=2:240609386:41\" alt=\"给我留言\">\r\n            </a>\r\n          </p>\r\n          <p><span>程程</span>\r\n            <a href=\"http://wpa.qq.com/msgrd?v=3&uin=373584167&site=s.weixinqun.com&menu=yes\" target=\"_blank\" rel=\"nofollow\">\r\n              <img border=\"0\" src=\"http://wpa.qq.com/pa?p=2:240609386:41\" alt=\"给我留言\">\r\n            </a>\r\n          </p>\r\n','','1');");
E_D("replace into `wxq_other` values('21','广告咨询','ggzx','          <p><span>小微</span>\r\n            <a href=\"http://wpa.qq.com/msgrd?v=3&uin=373584167&site=s.weixinqun.com&menu=yes\" target=\"_blank\" rel=\"nofollow\">\r\n              <img border=\"0\" src=\"http://wpa.qq.com/pa?p=2:373584167:41\" alt=\"给我留言\">\r\n            </a>\r\n          </p>\r\n          <p><span>玟玟</span>\r\n            <a href=\"http://wpa.qq.com/msgrd?v=3&uin=373584167&site=s.weixinqun.com&menu=yes\" target=\"_blank\" rel=\"nofollow\">\r\n              <img border=\"0\" src=\"http://wpa.qq.com/pa?p=2:373584167:41\" alt=\"给我留言\">\r\n            </a>\r\n          </p>\r\n','','1');");
E_D("replace into `wxq_other` values('22','货源群','hyq','http://shang.qq.com/wpa/qunwpa?idkey=65ee37be0c031cb15883794375e3660aac86804ff397a36eeef33f954173b600','','1');");
E_D("replace into `wxq_other` values('23','AAA微商交流','aaawsjl','http://wpa.qq.com/msgrd?v=3&uin=373584167&site=qq&menu=yes','','1');");
E_D("replace into `wxq_other` values('24','微商交流合作','wsjlhz','http://wpa.qq.com/msgrd?v=3&uin=373584167&site=qq&menu=yes','','1');");

require("../../inc/footer.php");
?>