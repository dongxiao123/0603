<?php if (!defined('THINK_PATH')) exit();?><html><head><meta http-equiv="content-type" content="text/html; charset=UTF-8"><meta charset="UTF-8"><meta name="viewport"
	content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui"><meta name="apple-mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-status-bar-style" content="black"><meta name="format-detection" content="telephone=no, email=no"><link type="text/css" rel="stylesheet"
	href="../mobile_file/css/style.css"><script src="../mobile_file/img/v.htm" charset="utf-8"></script><script>window.jQuery || document.write('<script src="template/wap/../mobile_file/js/jquery-2.0.3.min.js"><\/script>')</script><script src="../mobile_file/js/jquery-2.js"></script><script type="text/javascript" src="../mobile_file/js/hammer.js"></script><script type="text/javascript" src="../mobile_file/js/common.js"></script><script src="../mobile_file/js/jquery.js" type="text/javascript"></script><script>
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
    </script><title><?php echo ($weixin['title']); ?> - QQ群大全 - wx131.com</title><meta name="keywords" content="进群加群主，广告随便发"><meta name="description" content="进群加群主，广告随便发"><script src="../mobile_file/img/share.js"></script><link href="../mobile_file/img/share_style0_32.css" rel="stylesheet"></head><body><header class="fixed-top head"><div class="fixed"><div class="headlf fl"><a href="index.php"><img
	src="../mobile_file/img/logo.png"></a></div><div class="headrg fr"><a href="index.php?m=Index&a=search"><img
	src="../mobile_file/img/search.png"></a><a class="headpub"
	href="javascript:;"><img src="../mobile_file/img/peo.png"></a></div></div><div style="-moz-user-select: none;" class="menu-fn menu hide-me" id="more-fn">
    ﻿<table class="menu_nav" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td><a class="menu_box" href="index.php?m=Index&a=weixinqun&id=44"><img
                src="../mobile_file/img/wxq.png">微信群</a></td><td><a class="menu_box" href="index.php?m=Index&a=weixinqun&id=47"><img
                src="../mobile_file/img/gzh.png">公众号</a></td><td><a class="menu_box" href="index.php?m=Index&a=weixinqun&id=48"><img
                src="../mobile_file/img/grwx.png">个人微信</a></td></tr><tr><td><a class="menu_box" href="index.php?m=Index&a=huoyuan"><img
                src="../mobile_file/img/huoy.png">微商货源</a></td><!-- <td><a class="menu_box" href="index.php?m=Index&a=weixinqun"><img
            src="../mobile_file/img/jiam.png">互动接龙</a></td><td><a class="menu_box" href="index.php?m=Index&a=weixinqun"><img
            src="../mobile_file/img/yinx.png">QQ圈</a></td> --><td><a class="menu_box" href="index.php?m=Index&a=weixin_add"><img
                src="../mobile_file/img/fabu.png">二维码发布</a></td><td><a class="menu_box" href="index.php?&m=user&a=user_login"><img
                src="../mobile_file/img/denglu.png">登录/注册</a></td></tr></tbody></table></div></header><div class="wrap-page"><div class="conet_all"><div class="title"><?php echo ($daohang); ?></div><div class="cennr"><div class="cenImg fl"><img src="<?php echo ($weixin['qrcode']); ?>"><div class="tool diagBtn"><div class="mt10"></div></div><a href="<?php echo U('article/show',array('id'=>102));?>"
	style="margin-top: 10px; margin-bottom: 10px; font-size: 14px; display: inline-block"><font
	style="color: green;">无需扫描,快速加群！点击&gt;&gt;</font></a><br><?php if($shang != ''): ?><a rel="prev" class="pr_x" href="index.php?m=Index&a=archives&id=<?php echo ($shang['id']); ?>"><img src="../mobile_file/img/pre.png" alt="<?php echo ($shang['title']); ?>"></a><?php endif; if($xia != ''): ?><a rel="next" class="pr_x" href="index.php?m=Index&a=archives&id=<?php echo ($xia['id']); ?>"><img src="../mobile_file/img/next.png" alt="<?php echo ($xia['title']); ?>"></a><?php endif; ?></div><div class="cenWord fr"><p>QQ名：<?php echo ($weixin['title']); ?></p><p>QQ号：<?php echo ($weixin['wxaccount']); ?></p><p>地区：<?php echo ($province); if($province != '' AND $city != ''): ?>/<?php endif; echo ($city); ?></p><p>发布时间：<?php echo ($weixin['create_time']); ?></p><p>简介：<?php if($weixin["content"] != ''): echo ($weixin['content']); else: ?>无<?php endif; ?></p><p><img src="<?php echo ($weixin['img1']); ?>"></p><p><img src="<?php echo ($weixin['img2']); ?>"></p><p><img src="<?php echo ($weixin['img3']); ?>"></p><p><img src="<?php echo ($weixin['img4']); ?>"></p><p><img src="<?php echo ($weixin['img5']); ?>"></p></div><div class="clr"></div></div></div></div><div class="diagBox" style="height: 1000px;"><div style="border-bottom: 1px solid #b9b9b9;" class="code-title"><div class="headlf fl">二维码美化</div><div class="headrg fr"><a href="#"><img class="close_x"
	src="../mobile_file/img/close_03.jpg"></a></div></div><div class="menu-fn menu hide-me" id="more-fn"
	style="-webkit-user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); touch-action: none;"></div><div class="wrap-page" style="height: 1000px;"><div class="conet_all"><div class="cennr"><div class="cenImg fl cenImg_exm"><iframe id="qrcode_frame"
	name="qrcode_frame" src="../mobile_file/img/Instead_002.jpg"
	scrolling="no"></iframe><img id="show_qrcode" style="display: none"><div class="Choice"
	style="clear: both; overflow: hidden; height: 130px;"><ul class="mblist"><li><img class="imglist_li" src="../mobile_file/img/10.png"></li><li><img class="imglist_li" src="../mobile_file/img/6.png"></li><li><img class="imglist_li" src="../mobile_file/img/7.png"></li><li><img class="imglist_li" src="../mobile_file/img/8.png"></li><li><img class="imglist_li" src="../mobile_file/img/9.png"></li><li><img class="imglist_li" src="../mobile_file/img/1.png"></li><li><img class="imglist_li" src="../mobile_file/img/2.png"></li><li><img class="imglist_li" src="../mobile_file/img/3.png"></li><li><img class="imglist_li" src="../mobile_file/img/4.png"></li><li><img class="imglist_li" src="../mobile_file/img/5.png"></li></ul></div><p
	style="text-align: center; margin-top: 26px; margin-left: 30px; display: block; width: 290px;"></p><p></p></div><div class="clr"></div></div></div></div></div><footer class="fixed-bottom foot"><div class="foot_return"><span><?php
 if($_SESSION['user']){ echo '<a class="home" href="index.php">首页</a>'; echo '<a class="home" href="' . U('User/index') . '">个人中心</a>'; echo '<a class="srh" href="' . U('User/login_out') . '">退出</a>'; }else{ echo '<a class="home" href="index.php">首页</a>'; echo '<a class="home" href="' . U('User/user_login') . '">登录</a>'; echo '<a class="srh" href="' . U('User/user_reg') . '">注册</a>'; } ?></span></div><div class="foot_txt">
	﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.weixinsaoyisao.com/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.weixinsaoyisao.com/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>微分享若发现您的权利被侵害，请联系443238357qq ，我们尽快处理Copyright © 2015-2016  <a href="http://www.weixinsaoyisao.com"> 微分享 版权所有.冀ICP备16011679号<script type="text/javascript">
    /*20:3 创建于 2016/7/3*/
    var cpro_id = "u2693051";
</script><script type="text/javascript" src="http://cpro.baidustatic.com/cpro/ui/cm.js"></script></a><body></body></html><script type="text/javascript">
    /*自适应 创建于 2016/7/1*/
    var cpro_id = "u2691634";
</script><script type="text/javascript" src="http://cpro.baidustatic.com/cpro/ui/mi.js"></script></div></footer><iframe style="display: none; width: 1px; height: 1px;"
	src="../mobile_file/img/mp-cdn.htm"></iframe><script>$(document).ready(function(){
    $(".btimg").lazyload();
})</script><script>
function praise(id,tid,ztype){
    var urls="/user-praise.html";
    var zid="#znum"+id;
    var cid="#cnum"+id;
    var znum=parseInt($(zid).attr('znum'));
    var cnum=parseInt($(cid).attr('cnum'));
    $.ajax({type: "post",dataType: "json",url: urls,data: "json=1&id="+id+"&cid="+tid+"&ztype="+ztype,success: function(result){if(result.type){if(ztype==1){znum=znum+1;$(zid).attr('znum',znum);$(zid).html(znum);}else{cnum=cnum-1;$(cid).attr('cnum',cnum);$(cid).html(cnum);}alert(result.msg);}else{alert(result.msg);}}});
}
</script></body></html>