<?php if (!defined('THINK_PATH')) exit();?>﻿<html><head><meta http-equiv="content-type" content="text/html; charset=UTF-8"><meta charset="UTF-8"><meta name="viewport"
	content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui"><meta name="apple-mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-status-bar-style" content="black"><meta name="format-detection" content="telephone=no, email=no"><link type="text/css" rel="stylesheet"
	href="../mobile_file/css/style.css"><script src="../mobile_file/img/v.htm" charset="utf-8"></script><script>window.jQuery || document.write('<script src="template/wap/../mobile_file/js/jquery-2.0.3.min.js"><\/script>')</script><script src="../mobile_file/js/jquery-2.js"></script><script type="text/javascript" src="../mobile_file/js/hammer.js"></script><script type="text/javascript" src="../mobile_file/js/common.js"></script><script src="../mobile_file/js/jquery.js" type="text/javascript"></script><script>          $(document).ready(function(){
			  $(".tab").each(function(i) {
				  $(this).click(function(){
					  $(".tab").removeClass("cur");
					  $(this).addClass("cur");
					  $("#cont .pubcon").hide();
					  $("#cont .pubcon").eq(i).show();
					  });
            });
	})
    </script>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.weixinsaoyisao.com/TR/html4/loose.dtd"><html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>QQ群|微商货源|QQ红包群|QQ群导航大全|微信群二维码发布与分享 - <?php echo ($sitename); ?></title><meta name="keywords"
	content="微信群|微信群分享|QQ群导航|QQ群大全|微信红包|微信红包群|红包群|微信个人号|微信公众号|微信群导航|微信群二维码|微信群推荐|QQ群聊|QQ加群|微商货源|微信营销|微信推广|微信群人数上限|微信群怎么建|微信群怎么找"><meta name="description"
	content="最具人气的微信群导航,为大家提供各地区各兴趣的微信群二维码图片,大家可以根据需要找到自己感兴趣的微信群,我们的目标是做最好的微信群聊推荐网站。查看群二维码，提交群信息，让大家快速找到自己喜爱的群。"></head><body></body></html></head><body><header class="fixed-top head"><div class="fixed"><div class="headlf fl"><a href="index.php"><img class="logo-m"
	src="../mobile_file/img/logo-m.png"></a></div><div class="headrg fr"><a href="index.php?m=Index&a=search"><img
	src="../mobile_file/img/search.png"></a><a class="headpub"
	href="javascript:;"><img src="../mobile_file/img/peo.png"></a></div></div><div style="-moz-user-select: none;" class="more-fn hide-me"
	id="more-fn"><table class="login" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td><a class="home" href="index.php?m=User&a=user_login">登录</a></td><td><a class="srh" href="index.php?m=User&a=user_reg">注册</a></td></tr></tbody></table></div></header><div class="wrap-page"><div class="menu">    ﻿<table class="menu_nav" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td><a class="menu_box" href="index.php?m=Index&a=weixinqun&id=44"><img
                src="../mobile_file/img/wxq.png">微信群</a></td><td><a class="menu_box" href="index.php?m=Index&a=weixinqun&id=47"><img
                src="../mobile_file/img/gzh.png">公众号</a></td><td><a class="menu_box" href="index.php?m=Index&a=weixinqun&id=48"><img
                src="../mobile_file/img/grwx.png">个人微信</a></td></tr><tr><td><a class="menu_box" href="index.php?m=Index&a=huoyuan"><img
                src="../mobile_file/img/huoy.png">微商货源</a></td><!-- <td><a class="menu_box" href="index.php?m=Index&a=weixinqun"><img
            src="../mobile_file/img/jiam.png">互动接龙</a></td><td><a class="menu_box" href="index.php?m=Index&a=weixinqun"><img
            src="../mobile_file/img/yinx.png">QQ圈</a></td> --><td><a class="menu_box" href="index.php?m=Index&a=weixin_add"><img
                src="../mobile_file/img/fabu.png">二维码发布</a></td><td><a class="menu_box" href="index.php?&m=user&a=user_login"><img
                src="../mobile_file/img/denglu.png">登录/注册</a></td></tr></tbody></table></div><div class="guangao"><ul><?php if(is_array($advert)): $i = 0; $__LIST__ = $advert;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$adv): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($adv['adcontent']); ?>" title="<?php echo ($adv['adname']); ?>"><?php echo ($adv['adname']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?><div class="clr"></div></ul></div><div class="nav"><ul><li class="tab cur">微信群</li><li class="tab">公众号</li><li class="tab">个人微信</li><li class="tab">微商货源</li><div class="clr"></div></ul><div class="nav_tj"><img src="../mobile_file/img/tui.png"></div></div><div id="cont"><div class="pubcon content"><ul><?php if(is_array($today_qun)): $i = 0; $__LIST__ = $today_qun;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tq): $mod = ($i % 2 );++$i;?><li><a href="index.php?m=Index&a=archives&id=<?php echo ($tq['id']); ?>"><img class="btimg" src="<?php echo ($tq['logo']); ?>" alt="<?php echo ($tq['title']); ?>" title="<?php echo ($tq['title']); ?>"><br><span><?php echo ($tq['qiangwei_time']); ?></span><p><?php echo ($tq['title']); ?></p></a></li><?php endforeach; endif; else: echo "" ;endif; ?><div class="clr"></div></ul><div class="con_more"><a href="/m/index.php?m=Index&a=weixinqun&id=44">点击查看更多&gt;&gt;</a></div></div><div class="pubcon content" style="display: none;"><ul><?php if(is_array($today_hao)): $i = 0; $__LIST__ = $today_hao;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$th): $mod = ($i % 2 );++$i;?><li><a href="index.php?m=Index&a=archives&id=<?php echo ($th['id']); ?>"><img class="btimg" src="<?php echo ($th['logo']); ?>" alt="<?php echo ($th['title']); ?>" title="<?php echo ($th['title']); ?>"><br><span><?php echo ($th['qiangwei_time']); ?></span><p><?php echo ($th['title']); ?></p></a></li><?php endforeach; endif; else: echo "" ;endif; ?><div class="clr"></div></ul><div class="con_more"><a href="/m/index.php?m=Index&a=weixinqun&id=47">点击查看更多&gt;&gt;</a></div></div><div class="pubcon content" style="display: none;"><ul><?php if(is_array($today_person)): $i = 0; $__LIST__ = $today_person;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tp): $mod = ($i % 2 );++$i;?><li><a href="index.php?m=Index&a=archives&id=<?php echo ($tp['id']); ?>"><img class="btimg" src="<?php echo ($tp['logo']); ?>" alt="<?php echo ($tp['title']); ?>" title="<?php echo ($tp['title']); ?>"><br><span><?php echo ($tp['qiangwei_time']); ?></span><p><?php echo ($tp['title']); ?></p></a></li><?php endforeach; endif; else: echo "" ;endif; ?><div class="clr"></div></ul><div class="con_more"><a href="/m/index.php?m=Index&a=weixinqun&id=48">点击查看更多&gt;&gt;</a></div></div><div class="pubcon hy_cont" style="display: none"><ul><?php if(is_array($weixin_huoyuan)): $i = 0; $__LIST__ = $weixin_huoyuan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$wh): $mod = ($i % 2 );++$i;?><li><a href="index.php?m=Index&a=archives&id=<?php echo ($wh['id']); ?>"><img class="btimg" src="<?php echo ($wh['logo']); ?>" alt="<?php echo ($wh['title']); ?>" title="<?php echo ($wh['title']); ?>"><br><span><?php echo ($wh['qiangwei_time']); ?></span><p><?php echo ($wh['title']); ?></p></a></li><?php endforeach; endif; else: echo "" ;endif; ?><div class="clr"></div></ul><div class="con_more"><a href="/m/index.php?m=Index&a=huoyuan">点击查看更多&gt;&gt;</a></div></div></div><div class="clr"></div></div><footer class="fixed-bottom foot"><div class="foot_return"><span><?php
 if($_SESSION['user']){ echo '<a class="home" href="index.php">首页</a>'; echo '<a class="home" href="' . U('User/index') . '">个人中心</a>'; echo '<a class="srh" href="' . U('User/login_out') . '">退出</a>'; }else{ echo '<a class="home" href="index.php">首页</a>'; echo '<a class="home" href="' . U('User/user_login') . '">登录</a>'; echo '<a class="srh" href="' . U('User/user_reg') . '">注册</a>'; } ?></span></div><div class="foot_txt">	﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.weixinsaoyisao.com/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.weixinsaoyisao.com/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>微分享若发现您的权利被侵害，请联系443238357qq ，我们尽快处理Copyright © 2015-2016  <a href="http://www.weixinsaoyisao.com"> 微分享 版权所有.冀ICP备16011679号<script type="text/javascript">    /*20:3 创建于 2016/7/3*/
    var cpro_id = "u2693051";
</script><script type="text/javascript" src="http://cpro.baidustatic.com/cpro/ui/cm.js"></script></a><body></body></html><script type="text/javascript">    /*自适应 创建于 2016/7/1*/
    var cpro_id = "u2691634";
</script><script type="text/javascript" src="http://cpro.baidustatic.com/cpro/ui/mi.js"></script></div></footer><iframe style="display: none; width: 1px; height: 1px;"
	src="../mobile_file/img/mp-cdn.htm"></iframe><script>$(document).ready(function(){
    $(".btimg").lazyload();
})</script></body></html>