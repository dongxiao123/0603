<?php if (!defined('THINK_PATH')) exit();?>﻿<html><head><meta http-equiv="content-type" content="text/html; charset=UTF-8"><meta charset="UTF-8"><meta name="viewport"
	content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui"><meta name="apple-mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-status-bar-style" content="black"><meta name="format-detection" content="telephone=no, email=no"><link type="text/css" rel="stylesheet"
	href="../mobile_file/css/style.css"><script>window.jQuery || document.write('<script src="template/wap/../mobile_file/js/jquery-2.0.3.min.js"><\/script>')</script><script src="../mobile_file/js/jquery-2.js"></script><script type="text/javascript" src="../mobile_file/js/hammer.js"></script><script type="text/javascript" src="../mobile_file/js/common.js"></script><script src="../mobile_file/js/jquery.js" type="text/javascript"></script><script>
          $(document).ready(function(){
			  $(".tab").each(function(i) {
				  $(this).click(function(){
					  $(".tab").removeClass("cur");
					  $(this).addClass("cur");
					  $("#cont .pubcon").hide();
					  $("#cont .pubcon").eq(i).show();
					  });
            });
	})
    </script><title>微信群,微信群大全,精品微信群二维码 - 微信群</title><meta name="keywords" content="微信群,微信群大全,精品微信群二维码,群,微信群二维码,微信群大全"><meta name="description" content="微信群平台汇聚全国各地区各类型的微信群二维码，供大家拓展粉丝等需求。"></head><body><header class="fixed-top head"><div class="fixed"><div class="headlf fl"><a href="index.php"><img
	src="../mobile_file/img/logo.png"></a></div><div class="headrg fr"><a
	href="index.php?m=Index&a=search"><img
	src="../mobile_file/img/search.png"></a><a class="headpub"
	href="javascript:;"><img src="../mobile_file/img/fenl.png"></a></div></div><div style="-moz-user-select: none;" class="menu-fn menu hide-me"
	id="more-fn">
    ﻿<table class="menu_nav" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td><a class="menu_box" href="index.php?m=Index&a=weixinqun&id=44"><img
                src="../mobile_file/img/wxq.png">微信群</a></td><td><a class="menu_box" href="index.php?m=Index&a=weixinqun&id=47"><img
                src="../mobile_file/img/gzh.png">公众号</a></td><td><a class="menu_box" href="index.php?m=Index&a=weixinqun&id=48"><img
                src="../mobile_file/img/grwx.png">个人微信</a></td></tr><tr><td><a class="menu_box" href="index.php?m=Index&a=huoyuan"><img
                src="../mobile_file/img/huoy.png">微商货源</a></td><!-- <td><a class="menu_box" href="index.php?m=Index&a=weixinqun"><img
            src="../mobile_file/img/jiam.png">互动接龙</a></td><td><a class="menu_box" href="index.php?m=Index&a=weixinqun"><img
            src="../mobile_file/img/yinx.png">QQ圈</a></td> --><td><a class="menu_box" href="index.php?m=Index&a=weixin_add"><img
                src="../mobile_file/img/fabu.png">二维码发布</a></td><td><a class="menu_box" href="index.php?&m=user&a=user_login"><img
                src="../mobile_file/img/denglu.png">登录/注册</a></td></tr></tbody></table></div></header><div class="wrap-page"><div class="con_nav"><ul><li><select name="Source"
		onChange="window.location.href=this.options[selectedIndex].value"><option value="index.php?m=Index&a=weixinqun<?php echo "&id=" . $_GET['id'];if($_GET['tid'])echo "&tid=".$_GET['tid'];if($_GET['time'])echo "&time=".$_GET['time'];?>" selected="selected">地区不限</option><?php if(is_array($areas)): $i = 0; $__LIST__ = $areas;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$area): $mod = ($i % 2 );++$i;?><option value="index.php?m=Index&a=weixinqun&aid=<?php echo ($area['id']); echo "&id=" . $_GET['id'];if($_GET['tid'])echo "&tid=".$_GET['tid'];if($_GET['time'])echo "&time=".$_GET['time'];?>" <?php echo ($area['css']); ?>><?php echo ($area['area_name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select><div class="xiala"></div></li><li><select name="Source" onChange="window.location.href=this.options[selectedIndex].value"><option value="index.php?m=Index&a=weixinqun<?php echo "&id=" . $_GET['id'];if($_GET['aid'])echo "&aid=".$_GET['aid'];if($_GET['time'])echo "&time=".$_GET['time'];?>">类型不限</option><?php if(is_array($type_list)): $i = 0; $__LIST__ = $type_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tl): $mod = ($i % 2 );++$i;?><option value="index.php?m=Index&a=weixinqun&tid=<?php echo ($tl['id']); echo "&id=" . $_GET['id'];if($_GET['aid'])echo "&aid=".$_GET['aid'];if($_GET['time'])echo "&time=".$_GET['time'];?>" <?php echo ($tl['css']); ?>><?php echo ($tl['catname']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select><div class="xiala"></div></li><li style="border-right: none;"><select name="Source"
		onChange="window.location.href=this.options[selectedIndex].value"><option value="index.php?m=Index&a=weixinqun<?php echo "&id=" . $_GET['id'];if($_GET['aid'])echo "&aid=".$_GET['aid'];if($_GET['tid'])echo "&tid=".$_GET['tid'];?>" selected="selected">时间不限</option><?php if(is_array($time)): $i = 0; $__LIST__ = $time;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$time): $mod = ($i % 2 );++$i;?><option value="index.php?m=Index&a=weixinqun&time=<?php echo ($time['id']); echo "&id=" . $_GET['id'];if($_GET['aid'])echo "&aid=".$_GET['aid'];if($_GET['tid'])echo "&tid=".$_GET['tid'];?>" <?php echo ($time['css']); ?>><?php echo ($time['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select><div class="xiala"></div></li><div class="clr"></div></ul></div><div class="guangao"><ul><?php if(is_array($advert)): $i = 0; $__LIST__ = $advert;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$adv): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($adv['adcontent']); ?>" title="<?php echo ($adv['adname']); ?>"><?php echo ($adv['adname']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?><div class="clr"></div></ul></div><div class="dq_cont"><ul><?php if(is_array($today_qun)): $i = 0; $__LIST__ = $today_qun;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tq): $mod = ($i % 2 );++$i;?><li><a href="index.php?m=Index&a=archives&id=<?php echo ($tq['id']); ?>"><img class="btimg" src="<?php echo ($tq['logo']); ?>" alt="<?php echo ($tq['title']); ?>" title="<?php echo ($tq['title']); ?>"><br><span><?php echo ($tq['qiangwei_time']); ?></span><p><?php echo ($tq['title']); ?></p></a></li><?php endforeach; endif; else: echo "" ;endif; ?><div class="clr"></div></ul><div class="fenye"><?php echo $page;?><!-- <a href="">首页</a><a href="">上一页</a>
         1/2380 
         <a href="">下一页</a><a href="">末页</a> --></div></div><div class="clr"></div></div><footer class="fixed-bottom foot"><div class="foot_return"><span><?php
 if($_SESSION['user']){ echo '<a class="home" href="' . U('User/index') . '">个人中心</a>'; echo '<a class="srh" href="' . U('User/login_out') . '">退出</a>'; }else{ echo '<a class="home" href="' . U('User/user_login') . '">登录</a>'; echo '<a class="srh" href="' . U('User/user_reg') . '">注册</a>'; } ?></span></div><div class="foot_txt">微分享若发现您的权利被侵害，请联系443238357qq ，我们尽快处理Copyright © 2015-2016  <a href="http://www.weixinsaoyisao.com"> 微分享 版权所有.冀ICP备16011679号<script type="text/javascript">
    /*20:3 创建于 2016/7/3*/
    var cpro_id = "u2693051";
</script><script type="text/javascript">
    /*自适应 创建于 2016/7/1*/
    var cpro_id = "u2691634";
</script><script type="text/javascript" src="http://cpro.baidustatic.com/cpro/ui/mi.js"></script><script type="text/javascript" src="http://cpro.baidustatic.com/cpro/ui/cm.js"></script></a></div><div style="display: none;"><script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fe631b3a1fedd3e3a3970479d2e0d0da6' type='text/javascript'%3E%3C/script%3E"));
</script><script src="../mobile_file/js/h.js" type="text/javascript"></script><a
	href="http://tongji.baidu.com/hm-web/welcome/ico?s=e631b3a1fedd3e3a3970479d2e0d0da6"
	target="_blank">网站统计</a></div></footer><iframe style="display: none; width: 1px; height: 1px;"
	src="../mobile_file/img/mp-cdn.htm"></iframe><script>$(document).ready(function(){
    $(".btimg").lazyload();
})</script></body><style>
	.fy{
		width:100%;
		height:50px;
	}
</style></html>