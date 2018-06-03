<?php if (!defined('THINK_PATH')) exit();?>﻿<html><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui"><meta name="apple-mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-status-bar-style" content="black"><meta name="format-detection" content="telephone=no, email=no"><link type="text/css" rel="stylesheet" href="/mobile_file/css/style.css"><script>window.jQuery || document.write('<script src="template/wap/../mobile_file/js/jquery-2.0.3.min.js"><\/script>')</script><script src="../mobile_file/js/jquery-2.js"></script><script type="text/javascript" src="../mobile_file/js/hammer.js"></script><script type="text/javascript" src="../mobile_file/js/common.js"></script><script src="../mobile_file/js/jquery.js" type="text/javascript"></script><script>
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
    </script><title><?php echo ($data["title"]); ?></title><meta name="keywords" content="<?php echo ($data["keywords"]); ?>"><meta name="description" content="<?php echo ($data["description"]); ?>"></head><body><header class="fixed-top head"><div class="fixed"><div class="headlf fl"><a href="index.php"><img
                src="../mobile_file/img/logo.png"></a></div><div class="headrg fr"><a
                href="index.php?m=Index&a=search"><img
                src="../mobile_file/img/search.png"></a><a class="headpub"
                                                           href="javascript:;"><img src="../mobile_file/img/fenl.png"></a></div></div><div style="-moz-user-select: none;" class="menu-fn menu hide-me" id="more-fn">
        ﻿<table class="menu_nav" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td><a class="menu_box" href="index.php?m=Index&a=weixinqun&id=44"><img
                src="../mobile_file/img/wxq.png">微信群</a></td><td><a class="menu_box" href="index.php?m=Index&a=weixinqun&id=47"><img
                src="../mobile_file/img/gzh.png">公众号</a></td><td><a class="menu_box" href="index.php?m=Index&a=weixinqun&id=48"><img
                src="../mobile_file/img/grwx.png">个人微信</a></td></tr><tr><td><a class="menu_box" href="index.php?m=Index&a=huoyuan"><img
                src="../mobile_file/img/huoy.png">微商货源</a></td><!-- <td><a class="menu_box" href="index.php?m=Index&a=weixinqun"><img
            src="../mobile_file/img/jiam.png">互动接龙</a></td><td><a class="menu_box" href="index.php?m=Index&a=weixinqun"><img
            src="../mobile_file/img/yinx.png">QQ圈</a></td> --><td><a class="menu_box" href="index.php?m=Index&a=weixin_add"><img
                src="../mobile_file/img/fabu.png">二维码发布</a></td><td><a class="menu_box" href="index.php?&m=user&a=user_login"><img
                src="../mobile_file/img/denglu.png">登录/注册</a></td></tr></tbody></table></div></header><div class="wrap-page"><div class="conet_all"><div class="title"><a href="/m/">首页</a> &gt; <a href="/m/index.php?m=Article&a=index&id=142">微信营销</a> &gt; <?php echo ($data["title"]); ?></div><div class="imp"><?php echo ($data["title"]); ?></div><div class="fu_title">作者：微信群    文章来源：<a href="/m/">QQ群</a> 更新时间：<?php echo (date('Y/m/d',$data["create_time"])); ?></div><strong>摘要 <?php echo ($data["description"]); ?></strong><div class="cennr"><div><?php echo ($data["content"]); ?></div><div class="shang"><p>上一篇：<a rel="prev" href="/m/index.php?m=article&a=show&id=<?php echo ($prevdata["id"]); ?>"><?php echo ($prevdata["title"]); ?></a></p><p>下一篇：<a rel="next" href="/m/index.php?m=article&a=show&id=<?php echo ($nextdata["id"]); ?>"><?php echo ($nextdata["title"]); ?></a></p></div></div></div></div><footer class="fixed-bottom foot"><div class="foot_return"><span><a class="srh" href="index.php?m=User&a=user_reg">注册</a></span></div><div class="foot_txt">
	﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.weixinsaoyisao.com/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.weixinsaoyisao.com/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>微分享若发现您的权利被侵害，请联系443238357qq ，我们尽快处理Copyright © 2015-2016  <a href="http://www.weixinsaoyisao.com"> 微分享 版权所有.冀ICP备16011679号<script type="text/javascript">
    /*20:3 创建于 2016/7/3*/
    var cpro_id = "u2693051";
</script><script type="text/javascript" src="http://cpro.baidustatic.com/cpro/ui/cm.js"></script></a><body></body></html><script type="text/javascript">
    /*自适应 创建于 2016/7/1*/
    var cpro_id = "u2691634";
</script><script type="text/javascript" src="http://cpro.baidustatic.com/cpro/ui/mi.js"></script></div></footer><script>$(document).ready(function(){
    $(".btimg").lazyload();
})</script></body></html>