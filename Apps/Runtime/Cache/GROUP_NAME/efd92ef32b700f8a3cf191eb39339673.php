<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0025)http://www.91jiaqun.com/ -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta property="qc:admins" content="71602102676750206375" />
<meta http-equiv="Cache-Control" content="no-siteapp">
<title><?php echo ($title); ?> - <?php echo ($sitename); ?></title>
<meta name="keywords" content="<?php echo ($keywords); ?>"><meta name="description" content="<?php echo ($description); ?>">
<link href="__PUBLIC__/css/base.css" rel="stylesheet" type="text/css">
<link href="__PUBLIC__/css/nav.css" rel="stylesheet" type="text/css">
<link href="__PUBLIC__/css/columns.css" rel="stylesheet" type="text/css">
<link href="../Public/css/zzsc.css" rel="stylesheet" type="text/css" />
<script charset="utf-8" src="__PUBLIC__/js/v.js"></script><script src="__PUBLIC__/js/jquery.min.js" type="text/javascript"></script>
<script src="__PUBLIC__/js/jquery.easing.1.3.js" type="text/javascript"></script>
<script type="text/javascript" src="../Public/js/jquery.form.js"></script>
<script type="text/javascript" src="../Public/js/formValidator-4.0.1.min.js"></script>
<script type="text/javascript" src="../Public/js/formValidatorRegex.js"></script>
<script type="text/javascript" src="../Public/js/qqk.js"></script>
<script src="../Public/js/jquery.plugin.min.js" type="text/javascript"></script>
<!--两侧广告<script language=JavaScript src="../Public/js/ad.js" type=text/javascript></script>-->

<script src="../Public/js/zzsc.js"></script>
<script type="text/javascript">var mobileAgent = new Array("iphone", "ipod", "ipad", "android", "mobile", "blackberry", "webos", "incognito", "webmate", "bada", "nokia", "lg", "ucweb", "skyfire");
var browser = navigator.userAgent.toLowerCase(); 
var isMobile = false; 
for (var i=0; i<mobileAgent.length; i++){ if (browser.indexOf(mobileAgent[i])!=-1){ isMobile = true; 
//alert(mobileAgent[i]); 
location.href = '/m/';
break; } } 
</script>

</head><body>

<?php $other=$_result=M('Other')->where('status=1 and settag="bdshare"')->find(); echo $other['setvalue'];?>
<!--定义变量-->
<?php $nopicpath = '../Public/theme/nopic.gif'; ?>
<!-- 头部 START --><div class="header-search">
	<div class="wrap w1000">
    	<div class="area">
        <form action="<?php echo U('Weixin/search',array('id'=>126));?>" name="topsearch" method="get" target="_blank">
        	<span class="input-icon"></span><input type="text" class="input" name="search" placeholder="请输入微信群关键字、名称">
            <input type="submit" value="搜索" class="input-btn"> <input type="button" class="release-btn" value="发布二维码" onclick="<?php echo U('Member/add');?>">
         </form>
        </div>
    </div>
</div>
<div class="wx-nav">
  <div class="max-width" style="max-width:1000px; position: relative;"> <a href="/" hidefocus="true" class="logo" style="width: 205px; overflow: visible; margin-top:-5px;margin-right: 2px;background:url(__ROOT__/Uploads<?php $set=$_result=M('Set')->getField('logo',1); echo $set;?>) 
    no-repeat;"></a> 
    <ul class="nav-pills" style="margin-left: 200px;">
      <li class="dropdown"><a class="active" id="nav_post" href="/">首页</a></li>
      <li class="split-line"></li>
      <li class="dropdown"><a id="nav_event" href="<?php echo U('weixin/index',array('id'=>44));?>">QQ群</a></li>
	  <li class="split-line"></li>
      <li class="dropdown"><a id="nav_event" href="<?php echo U('weixin/index',array('id'=>47));?>">公众号</a></li>
     <li class="split-line"></li>
      <li class="dropdown"><a id="nav_event" href="<?php echo U('weixin/order',array('id'=>89));?>">排行榜</a></li>
      <li class="split-line"></li>
      <li class="dropdown"><a id="nav_event" href="<?php echo U('weixin/huoyuan',array('id'=>1));?>">微商货源</a></li> 
      <li class="split-line"></li>
      <li class="dropdown"><a id="nav_event" href="<?php echo U('Article/index',array('id'=>142));?>">微信营销</a></li>
	  <li class="split-line"></li>
      <li class="dropdown"><a id="nav_event" href="<?php echo U('Article/index',array('id'=>55));?>">微信资讯</a></li>
      <!--<li class="dropdown"><a id="nav_event" href="<?php echo U('Article/index',array('id'=>158));?>">招商加盟</a></li>-->
    </ul>
    <!-- 导航右侧 begin -->
    <div class="right"> 
      <ul id="logout_title">
        <?php if(session('id') < 1 ){ ?> 
        <li style="margin-left: 20px;"><a href="<?php echo U('Member/register');?>" hidefocus="true">注册</a></li>
        <li><a href="<?php echo U('Member/login');?>" id="loginbox" target="_blank" hidefocus="true">登录</a></li>
        <?php }else{ ?> 
        <li style="margin-left: 20px;"><a href="<?php echo U('Member/logout');?>" hidefocus="true">退出</a></li>
        <li><a href="<?php echo U('Member/index');?>"  target="_blank" hidefocus="true">个人中心</a></li>
        <?php } ?> 
      </ul>
    </div>
    <!-- 导航右侧 end -->
  </div>
</div>

<!-- 头部 END -->
<a href="#0" class="cd-top">Top</a>

<div class="popDoc" style="width:450px;height:350px;margin:-175px 0 0 -225px;">
  <div class="popDocTitle"><a href="javascript:void(0)" class="fRight" onclick="$(&#39;.popDoc&#39;).hide();"><img src="__PUBLIC__/images/dClose.png" width="16" height="16" alt="关闭"></a>登录微信群</div>
    <div class="loginPop">
      <div class="loginTable">
          <form id="loginform" name="login" method="post" action="<?php echo U('Member/checkLogin');?>" onsubmit="return validate_form(this)">
              <table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tbody><tr>
                    <th scope="row">用户名/邮箱:</th>
                    <td><input type="text" value="" class="newTxt w250" name="account" id="username"></td>
                    </tr>
                    <tr>
                    <th scope="row">&nbsp;</th>
                    <td><span>&nbsp;</span></td>
                    </tr>
                    <tr>
                    <th scope="row">密　码:</th>
                    <td><input type="password" value="" class="newTxt w250" name="password" id="password"></td>
                  </tr>
                    <tr>
                    <th scope="row">验证码:</th>
                    <td><input type="text" id="verify" name="verify" placeholder="验证码" class="yzm"/>
          
          <img id="verifyImg" src="<?php echo U('Member/verify');?>" onClick="fleshVerify()" border="0" alt="点击刷新验证码" style="cursor:pointer; margin-top:10px; width:95px;" align="absmiddle"></td>
                    </tr>
                    <tr>
                    <th scope="row">&nbsp;</th>
                    <td>
                    <div class="vm pt20"><input name="Tourl" id="Tourl" type="hidden" value=""><input name="action" type="hidden" value="login"><input value="登 录" type="submit" class="yellowBtn">
                    &nbsp;&nbsp;&nbsp;
                    <!-- <a href="http://www.91jiaqun.com/user-ForgotPassword.html" target="_blank">忘记密码</a>  -->
                    <span class="caaa">|</span> 
                    <a href="<?php echo U('Member/login');?>" target="_blank">注册</a></div></td>
                    </tr>
                </tbody></table>
            </form>
        </div>
    </div>
</div>
<link href="__PUBLIC__/css/main.css" rel="stylesheet" type="text/css">
<style type="text/css">
#kinMaxShow{visibility:hidden;width:700px; height:300px; overflow:hidden;}
.STYLE1 {color: #FF0000}
</style>
<script src="../Public/js/jquery.kinMaxShow-1.1.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
$(function(){
  $("#kinMaxShow").kinMaxShow({height:300,width:700});
});

</script>
<!-- 广告区域 -->

<!-- 焦点图 START -->
<div class="slide mt20 clear">
  <div class="wrap w1000">
    <div class="show">
      <div id="kinMaxShow">
        <?php $_result=M('Slide')->where('status=1')->field('id,title,url,img')->order('listorder desc')->limit(5)->select();foreach($_result as $key=>$slide):?><div>
            <a href="<?php echo ($slide["url"]); ?>" target="_blank"><img src="Uploads<?php echo ($slide["img"]); ?>" alt="<?php echo ($slide["title"]); ?>" width="700" height="300" /></a>          </div><?php endforeach;?>
      </div>
    </div>
    <div class="new border">
      <div class="titleBg"> <span class="title fLeft"><a href="<?php echo U('Article/show',array('id'=>46));?>">今日推荐</a></span>
      <span class="fRight more"><a href="<?php echo U('Article/show',array('id'=>46));?>">更多&gt;</a></span>
      </div>
      <ul class="new-content">
         <?php if(is_array($tjlist)): $i = 0; $__LIST__ = array_slice($tjlist,0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tuijian): $mod = ($i % 2 );++$i;?><li><i></i>&nbsp;&nbsp;
            <a href="<?php echo U('Weixin/show',array('id'=>$tuijian['id']));?>" title="<?php echo ($tuijian["pubaccount"]); ?>"><?php echo (msubstr($tuijian["pubaccount"],0,10)); ?></a>
            <span class="newBtn"></span>
          </li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
      <div class="release fLeft"> <span><img src="../Public/images/slogo.png" alt="微信群"></span>
        <input
        class="relBtn loginbox" href="<?php echo U('Member/add');?>" title="发布我的微信群" type="button">
      </div>
    </div>
  </div>
</div>
<!-- 焦点图 END --> 
<!-- 微信群-热搜-推广 START -->
<div class="brand mt20 clear">
  <div class="wrap w1000">
    <div class="brand-content fLeft border">
      
        <div class="titleBg" id="tab1"><span class="title fLeft" style="color: #42d83b;"><a href="javascript:void(0)">QQ群</a></span><span class="title fLeft" style="border-bottom:1px solid #dbdee1;border-top:2px solid #fafafa;"><a href="javascript:void(0)">QQ公众号</a></span><span class="title fLeft" style="border-bottom:1px solid #dbdee1;border-top:2px solid #fafafa;"><a href="javascript:void(0)">QQ</a></span><div class="fRight more" style="display: block;"><a href="<?php echo U('Weixin/index',array('id'=>44));?>">更多&gt;</a></div><div class="fRight more" style="display: none;"><a href="<?php echo U('Weixin/index',array('id'=>47));?>">更多&gt;</a></div><div class="fRight more" style="display: none;"><a href="<?php echo U('Weixin/index',array('id'=>48));?>">更多&gt;</a></div></div>
        <div id="box2">          
            <ul class="boxtwo" style="display: block;">
            	<?php if(is_array($today_qun)): $i = 0; $__LIST__ = $today_qun;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                <div class="qitem">
                  <img src="Uploads<?php echo ($vo['logo2']?$vo['logo2']:$vo['logo']); ?>" width="130" height="130">
                  <span class="caption">
                   <div style="background-image: url(Uploads<?php echo ($vo['qrcode']?$vo['qrcode']:$vo['logo']); ?>); background-size:130px 130px; width:130px;height:130px;" title="<?php echo ($vo["title"]); ?>"></div>
                  </span>
                  <div style="background-image: url(Uploads<?php echo ($vo['logo2']?$vo['logo2']:$vo['logo']); ?>);width:130px;height:130px;">
                  <a href="<?php echo U('Weixin/show',array('id'=>$vo['id']));?>"></a>
                </div>
                <div class="topLeft" style="top: 0px; left: 0px; width: 65px; height: 25px; background-image: url(Uploads<?php echo ($vo['logo2']?$vo['logo2']:$vo['logo']); ?>);"></div>
                <div class="topRight" style="top: 0px; left: 65px; width: 65px; height: 25px; background-image: url(Uploads<?php echo ($vo['logo2']?$vo['logo2']:$vo['logo']); ?>);"></div>
                <div class="bottomLeft" style="bottom: 0px; left: 0px; width: 65px; height: 25px; background-image: url(Uploads<?php echo ($vo['logo2']?$vo['logo2']:$vo['logo']); ?>);"></div>
                <div class="bottomRight" style="bottom: 0px; left: 65px; width: 65px; height: 25px; background-image: url(Uploads<?php echo ($vo['logo2']?$vo['logo2']:$vo['logo']); ?>);"></div>
              </div>
          <p style="float:left;text-align:left"><i></i><a href="<?php echo U('Weixin/show',array('id'=>$vo['id']));?>" class=""  style="width:80px;overflow:hidden;float:left;margin-left:40px;height:22px" title="<?php echo ($vo["title"]); ?>"  title="<?php echo ($vo["title"]); ?>"><?php echo (msubstr($vo["title"],0,6)); ?></a></p>
              </li><?php endforeach; endif; else: echo "" ;endif; ?>

         
            </ul>
            <ul class="boxtwo" style="display: none;">
            	<?php if(is_array($today_hao)): $i = 0; $__LIST__ = $today_hao;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                <div class="qitem">
                  <img src="Uploads<?php echo ($vo['logo2']?$vo['logo2']:$vo['logo']); ?>" width="130" height="130">
                  <span class="caption">
                      <div style="background-image: url(Uploads<?php echo ($vo['qrcode']?$vo['qrcode']:$vo['logo']); ?>); background-size:130px 130px; width:130px;height:130px;" title="<?php echo ($vo["title"]); ?>"></div>
                  </span>
                 <div style="background-image: url(Uploads<?php echo ($vo['logo2']?$vo['logo2']:$vo['logo']); ?>);width:130px;height:130px;">
                  <a href="<?php echo U('Weixin/show',array('id'=>$vo['id']));?>"></a>
                </div>
                <div class="topLeft" style="top: 0px; left: 0px; width: 65px; height: 25px; background-image: url(Uploads<?php echo ($vo['logo2']?$vo['logo2']:$vo['logo']); ?>);"></div>
                <div class="topRight" style="top: 0px; left: 65px; width: 65px; height: 25px; background-image: url(Uploads<?php echo ($vo['logo2']?$vo['logo2']:$vo['logo']); ?>);"></div>
                <div class="bottomLeft" style="bottom: 0px; left: 0px; width: 65px; height: 25px; background-image: url(Uploads<?php echo ($vo['logo2']?$vo['logo2']:$vo['logo']); ?>);"></div>
                <div class="bottomRight" style="bottom: 0px; left: 65px; width: 65px; height: 25px; background-image: url(Uploads<?php echo ($vo['logo2']?$vo['logo2']:$vo['logo']); ?>);"></div>
              </div>
          <p style="float:left;text-align:left"><i></i><a href="<?php echo U('Weixin/show',array('id'=>$vo['id']));?>" class=""  style="width:80px;overflow:hidden;float:left;margin-left:40px;height:22px" title="<?php echo ($vo["title"]); ?>"  title="<?php echo ($vo["title"]); ?>"><?php echo (msubstr($vo["title"],0,6)); ?></a></p></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <ul class="boxtwo" style="display: none;">
            	<?php if(is_array($today_person)): $i = 0; $__LIST__ = $today_person;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                <div class="qitem">
                  <img id="zi4274" src="/Uploads<?php echo ($vo['logo2']?$vo['logo2']:$vo['logo']); ?>" width="130" height="130" alt="<?php echo ($vo["title"]); ?>">
                  <span class="caption">
                      <div style="background-image: url(Uploads<?php echo ($vo['qrcode']?$vo['qrcode']:$vo['logo']); ?>); background-size:130px 130px; width:130px;height:130px;" title="<?php echo ($vo["title"]); ?>"></div>
                  </span>
                  <div style="background-image: url(Uploads<?php echo ($vo['logo2']?$vo['logo2']:$vo['logo']); ?>);">
                  <a href="<?php echo U('Weixin/show',array('id'=>$vo['id']));?>"></a>
                </div>
                <div class="topLeft" style="top: 0px; left: 0px; width: 65px; height: 25px; background-image: url(Uploads<?php echo ($vo['logo2']?$vo['logo2']:$vo['logo']); ?>);"></div>
                <div class="topRight" style="top: 0px; left: 65px; width: 65px; height: 25px; background-image: url(Uploads<?php echo ($vo['logo2']?$vo['logo2']:$vo['logo']); ?>);"></div>
                <div class="bottomLeft" style="bottom: 0px; left: 0px; width: 65px; height: 25px; background-image: url(Uploads<?php echo ($vo['logo2']?$vo['logo2']:$vo['logo']); ?>);"></div>
                <div class="bottomRight" style="bottom: 0px; left: 65px; width: 65px; height: 25px; background-image: url(Uploads<?php echo ($vo['logo2']?$vo['logo2']:$vo['logo']); ?>);"></div>
              </div>
          <p style="float:left;text-align:left"><i></i><a href="<?php echo U('Weixin/show',array('id'=>$vo['id']));?>" class=""  style="width:80px;overflow:hidden;float:left;margin-left:40px;height:22px" title="<?php echo ($vo["title"]); ?>"  title="<?php echo ($vo["title"]); ?>"><?php echo (msubstr($vo["title"],0,6)); ?></a></p></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
       </div>
        </div>  
           
<!-- 抢位 END -->
<script language="javascript">
$(function(){
	updateEndTime();
});

//倒计时函数
function updateEndTime()
{
	var date = new Date();
	var time = date.getTime();
	$(".settime").each(function(i){
	var endDate =this.getAttribute("endTime");
	var endDate1 = eval('new Date(' + endDate.replace(/\d+(?=-[^-]+$)/, function (a) { return parseInt(a, 10) - 1; }).match(/\d+/g) + ')');
	var endTime = endDate1.getTime();
	//var endTime = endDate.getTime();
	var lag = (endTime - time - 23*60*60*1000) / 1000;
	if(lag > 0)
	{
	var second = Math.floor(lag % 60); 
	var minite = Math.floor((lag / 60) % 60);
	var hour = Math.floor((lag / 3600) % 24);
	var day = Math.floor((lag / 3600) / 24);
	$(this).find('.time').html("到时抢位<br/>还剩"+hour+"小时"+minite+"分"+second+"秒");
	}
	else{
	   var zid=$(this).find('.sitename').attr('zid');
       //var zurl=$("#zu"+zid).attr('href');
       //var zt="空位待抢";
       //var zi="http://www.91jiaqun.com/404/qw.jpg";
       //$("#zw"+zid).attr('href',zurl);
       //$("#zion"+zid).attr('src',zi);
       //$(this).find('.sitename').attr('href',zurl);
      // $(this).find('.sitename').html(zt);
      $(this).find('span:first').addClass('sofa_y');
      $(this).find('.time').html("<em style='float:left;padding:10px 0 0 20px;font-weight:bold;font-size:16px;'>立即抢位</em>");
	}
	
});
setTimeout("updateEndTime()",1000);
}

$('.settime > .icon').each(function() {
    $(this).mouseover(
		function(){
			$(this).siblings('.time').show();
			}
	)
	$(this).mouseout(
		function(){
			$(this).siblings('.time').hide();
			}
	)
});
</script>

<div class="wrap w1000 clear">
	<div class="gg_box" style="padding-top: 10px;">
        
    	<div class="gg_con border">
       <h4><span class="h_bg STYLE1"><strong><a>品牌推荐</a></strong></span><span class="h_btn"><a href="../article-show-id-100.html" target="_blank">我要上推荐</a></span></h4>
             <div class="ul_con">
        	
            <ul class="boxtwo" style="display: block;">
            	<?php if(is_array($tjlist)): $i = 0; $__LIST__ = array_slice($tjlist,0,40,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                <div class="qitem">
       
		
					  <span class="caption">
                 <div class="con_img"><div style="background-image: url(Uploads<?php echo ($vo['qrcode']?$vo['qrcode']:$vo['logo']); ?>); background-size:130px 130px;width:130px;height:130px;" title="<?php echo ($vo["title"]); ?>">
                </div>      </div>        
                  </span>
           <div class="con_txt">
                <a href="<?php echo U('Weixin/show',array('id'=>$vo['id']));?>" title="<?php echo ($vo["pubaccount"]); ?>"><?php echo (msubstr($vo["pubaccount"],0,10)); ?></a>                 </div>   
              </div>
          <p align="center" ><i></i><a href="<?php echo U('Weixin/show',array('id'=>$vo['id']));?>" class=""   title="<?php echo ($vo["pubaccount"]); ?>"  title="<?php echo ($vo["title"]); ?>"><?php echo (msubstr($vo["title"],0,100)); ?></a></p></li><?php endforeach; endif; else: echo "" ;endif; ?>
         
            </ul>
         
        </div>
</div>
<!-- 品牌推荐 -->
            
       </div>     
    </div></div>


<!-- 微信货源 START -->

<div class="goods mt20 clear">
	<div class="wrap w1000">

    	<div class="goods-content border fLeft">
    		<div class="titleBg"><span class="title fLeft"><a href="<?php echo U('weixin/index',array('id'=>1));?>" target="_blank">微商货源</a></span><span class="fRight more"><a href="<?php echo U('weixin/index',array('id'=>1));?>">更多</a></span></div> 
            <ul>
				<?php if(is_array($weixin_huoyuan)): $i = 0; $__LIST__ = $weixin_huoyuan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
					<p>
						<a href="<?php echo U('weixin/huoyuanshow',array('id'=>$vo['id']));?>" title="<?php echo ($vo["title"]); ?>">
						<img src="Uploads<?php echo ($vo["logo"]); ?>" width="215" height="180" alt="<?php echo ($vo["title"]); ?>"></a>
							
							
					</p>
					<p>
						<a href="<?php echo U('weixin/huoyuanshow',array('id'=>$vo['id']));?>" style="width:205px;overflow:hidden" title="<?php echo ($vo["title"]); ?>"  ><?php echo (msubstr($vo["title"],0,8)); ?></a>
					</p>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>        
    </div>
</div>
<!-- 微信货源 END -->

<!-- 微信营销 sTART -->

        <div class="market mt20 clear">
	<div class="wrap w1000 clear">
    	<div class="market-content clear">
        	<div class="market-col1 border fLeft mr20">
            	<div class="titleBg">
                    <span class="title fLeft"><a href="<?php echo U('Article/index',array('id'=>142));?>" target="_blank">微信营销</a></span>
                    <span class="fRight more"><a href="<?php echo U('Article/index',array('id'=>142));?>">更多</a></span></div>
                <!--<div class="photo">-->
                    <!---->
                <!--</div>-->
                <ul>
                    <?php if(is_array($weixinyingxiao)): $i = 0; $__LIST__ = $weixinyingxiao;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                            <div class="new-box clearfix">
                                <div class="img-box">
                                    <img src="Uploads<?php echo ($vo['logo2']?$vo['logo2']:$vo['logo']); ?>" width="100" height="100">
                                </div>
                                <div class="new-t1">
                                    <i class="square"></i>
                                    <a href="<?php echo U('Article/show',array('id'=>$vo['id']));?>" title="<?php echo ($vo["title"]); ?>"><?php echo (msubstr($vo["title"],0,20)); ?></a>
                                </div>
                                <div class="new-t2">近日，37岁的香港女星阿娇香港女星阿娇香港女星阿娇香港女星阿娇香港女星阿娇香港女星阿娇香港女星阿娇</div>
                                <div class="new-t3">
                                    <div class="new-time">发布时间：2018-06-06<p class="new-see">2525</p></div>
                                    <span class="new-share">分享</span>
                                </div>
                            </div>

                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            
            <div class="market-col1 border fLeft mr20">
            	<div class="titleBg"><span class="title fLeft"><a href="<?php echo U('Article/index',array('id'=>55));?>" target="_blank">微信资讯</a></span><span class="fRight more"><a href="<?php echo U('Article/index',array('id'=>55));?>">更多</a></span></div>
                <!--<div class="photo">-->
                    <!---->
                <!--</div>-->
                <ul>
					 <?php if(is_array($weixinzixun)): $i = 0; $__LIST__ = $weixinzixun;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                        <div class="new-box clearfix">
                            <div class="img-box">
                                <img src="Uploads<?php echo ($vo['logo2']?$vo['logo2']:$vo['logo']); ?>" width="100" height="100">
                            </div>
                            <div class="new-t1">
                                <i class="square"></i><a href="<?php echo U('Article/show',array('id'=>$vo['id']));?>" title="<?php echo ($vo["title"]); ?>"><?php echo (msubstr($vo["title"],0,20)); ?></a>
                            </div>
                            <div class="new-t2">近日，37岁的香港女星阿娇香港女星阿娇香港女星阿娇香港女星阿娇香港女星阿娇香港女星阿娇香港女星阿娇</div>
                            <div class="new-t3">
                                <div class="new-time">发布时间：2018-06-06<p class="new-see">2525</p></div>
                                <span class="new-share">分享</span>
                            </div>
                        </div>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
					
                </ul>
            </div>
            
	
            <div class="market-col2 border fRight">
            	<div class="titleBg"><span class="title fLeft"><a href="<?php echo U('Article/index',array('id'=>150));?>" target="_blank">搞笑视频</a></span><span class="fRight more"><a href="<?php echo U('Article/index',array('id'=>150));?>">更多</a></span></div>
                <div class="photo">
                    <?php if(is_array($weixinxuetang)): $i = 0; $__LIST__ = $weixinxuetang;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="box-line">
                            <div class="new-box clearfix">
                                <div class="img-box">
                                    <img src="Uploads<?php echo ($vo['logo2']?$vo['logo2']:$vo['logo']); ?>" width="100" height="100">
                                </div>
                                <div class="new-t1">
                                    <p><i class="square"></i><a href="<?php echo U('Article/show',array('id'=>$vo['id']));?>" title="<?php echo ($vo["title"]); ?>"><?php echo (msubstr($vo["title"],0,15)); ?></a></p>
                                </div>
                                <div class="new-t2">近日，37岁的香港女星阿娇香港女星阿娇香港女星阿娇香港女星阿娇香港女星阿娇香港女星阿娇香港女星阿娇</div>
                                <div class="new-t3">
                                    <div class="new-time">2018-06-06<p class="new-see">2525</p></div>
                                    <span class="new-share">分享</span>
                                </div>
                            </div>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
  
        </div>
    </div>
</div>
<div style = "background:#fff;height:60px;width:1000px;margin:0 auto;margin-top:20px;">
    <ul style = "padding-left:20px;padding-top:20px;">
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li style = "float:left;margin-right:20px;">
       <a href="<?php echo ($vo["url"]); ?>" ><?php echo ($vo["name"]); ?></a>      </li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</div>
<!-- 微信营销 END -->
<!-- 底部 START -->
   
		<!-- 底部导航 START -->
<div class="footer mt20">
	<div class="wrap w1000">
    	<div class="f-content">
            <div class="f-code fLeft">
                <span><img src="/Uploads/remoteImage/footer_logo.jpg"></span>
                <span><p><strong>扫描二维码</strong></p><p>手机客户端更便捷<br>关注我们，快速了解商家信息，商家活动</p></span>
            </div>
            <div class="f-info fRight">
                <ul>				
				    <li>
					<p><strong>关于</strong></p>
					<!--151  关于-->
			<?php $_result=M('Article')->where('status=1 and catid in (151)')->field('id,title')->order('create_time desc')->limit(5)->select();foreach($_result as $key=>$article):?><p><a href="<?php echo U('Article/show',array('id'=>$article['id']));?>" title="<?php echo ($article['title']); ?>" target='_blank'><?php echo ($article['title']); ?></a></p><?php endforeach;?>
					</li>
					<!--152  合作-->
                    <li><p><strong>合作</strong></p>
					<?php $_result=M('Article')->where('status=1 and catid in (152)')->field('id,title')->order('create_time desc')->limit(5)->select();foreach($_result as $key=>$article):?><p><a href="<?php echo U('Article/show',array('id'=>$article['id']));?>" title="<?php echo ($article['title']); ?>" target='_blank'><?php echo ($article['title']); ?></a></p><?php endforeach;?>
					</li>
                   <!--153  声明-->
				    <li><p><strong>声明</strong></p>
					<?php $_result=M('Article')->where('status=1 and catid in (153)')->field('id,title')->order('create_time desc')->limit(5)->select();foreach($_result as $key=>$article):?><p><a href="<?php echo U('Article/show',array('id'=>$article['id']));?>" title="<?php echo ($article['title']); ?>" target='_blank'><?php echo ($article['title']); ?></a></p><?php endforeach;?>
					</li>
					<!--154  帮助-->
                    <li><p><strong>帮助</strong></p>
					<?php $_result=M('Article')->where('status=1 and catid in (154)')->field('id,title')->order('create_time desc')->limit(5)->select();foreach($_result as $key=>$article):?><p><a href="<?php echo U('Article/show',array('id'=>$article['id']));?>" title="<?php echo ($article['title']); ?>" target='_blank'><?php echo ($article['title']); ?></a></p><?php endforeach;?>
					</li>
					<!--155  更多-->
                    <li><p><strong>更多</strong></p>
					<?php $_result=M('Article')->where('status=1 and catid in (155)')->field('id,title')->order('create_time desc')->limit(5)->select();foreach($_result as $key=>$article):?><p><a href="<?php echo U('Article/show',array('id'=>$article['id']));?>" title="<?php echo ($article['title']); ?>" target='_blank'><?php echo ($article['title']); ?></a></p><?php endforeach;?>
					</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- 底部导航 END -->
		
	  <?php $other=$_result=M('Other')->where('status=1 and settag="footer"')->find(); echo $other['setvalue'];?></p>
	  <div align="center">
	  	<?php $other=$_result=M('Other')->where('status=1 and settag="cnzzstatistics"')->find(); echo $other['setvalue'];?>
	  	<?php $other=$_result=M('Other')->where('status=1 and settag="lastatistics"')->find(); echo $other['setvalue'];?>
		<?php $other=$_result=M('Other')->where('status=1 and settag="baidustatistics"')->find(); echo $other['setvalue'];?>
      </div>
	  	
	   	
	   	
		
   <div class="help_box" style=""> 
	<a href="javascript:;" class="float_qq" data-show="1"></a> 
	<a class="free_go" href="http://s.91jiaqun.com/" title="加盟分销" target="_blank">加盟分销</a> 
	<a class="zixun" href="javascript:;" id="help_qq1">客服咨询</a> 
	<a class="join" href="javascript:;" id="help_qq2">广告合作</a> 
	<!--客服电话-->
	<b class="tels">咨询热线<br>  <?php $other=$_result=M('Other')->where('status=1 and settag="zxrx"')->find(); echo $other['setvalue'];?></b>
  <div><img src="/Uploads/remoteImage/footer_logo.jpg"></div>
  <p class="tc" align="center">微分享</p>
  <div class="qq_list" id="qq_list1" style="display: none;" data-show="1"> <a href="javascript:;" class="close_qq" id="close_qq1"></a>
    <h4>客服咨询</h4>	
    <div class="area_qq">
      <!--客服咨询-->
	 	<?php $other=$_result=M('Other')->where('status=1 and settag="kfzx"')->find(); echo $other['setvalue'];?>
    </div>
	
  </div>
  <div class="qq_list join_bg" id="qq_list2" style="display: none;"> <a href="javascript:;" class="close_qq" id="close_qq2"></a>
    <h4>广告咨询</h4>
    <div class="area_qq">
	<!--广告合作-->
		<?php $other=$_result=M('Other')->where('status=1 and settag="ggzx"')->find(); echo $other['setvalue'];?>
    </div>
  </div>
</div>
<script>
  $(function(){
    $(".float_qq").click(function(){
      if($(this).attr("data-show") == 1)
      {
        $(this).attr("data-show",0);
        $(this).addClass("active");
        $(".help_box").animate({"right":"-140px"});
      }else{
        $(this).attr("data-show",1);
        $(this).removeClass("active");
        $(".help_box").animate({"right":"0"});
      }
      
      });
    $("#help_qq1").click(function(){
      $("#qq_list2").hide();
      if($("#qq_list1").is(":hidden"))
      {
        $("#qq_list1").slideDown();
      }else{
        $("#qq_list1").slideUp();
      }
      });
    $("#close_qq1").click(function(){
      $("#qq_list1").slideUp();     
      }); 
    $("#help_qq2").click(function(){
      $("#qq_list1").hide();
      if($("#qq_list2").is(":hidden"))
      {
        $("#qq_list2").slideDown();
      }else{
        $("#qq_list2").slideUp();
      }
      });
    $("#close_qq2").click(function(){
      $("#qq_list2").slideUp();     
      }); 
    });
</script>



<!-- 弹出登陆 -->

<script>
    $("#loginbox").click(function(){
        $("#Tourl").val('');
        $(".popDoc").show();
        return false;
    });
    $("#loginbox2").click(function(){
        $(".popDoc").show();
        return false;
    });
    $(".loginbox").click(function(){
	<?php if(session('id') < 1 ){ ?>
        var tourl=$(this).attr('href');
        $("#Tourl").val(tourl);
        $(".popDoc").show();
        return false;
	<?php }else{ ?>
	location.href="/member-add.html";
	<?php } ?>    });
    $(".release-btn").click(function(){
	<?php if(session('id') < 1 ){ ?>
        var tourl=$(this).attr('href');
        $("#Tourl").val(tourl);
        $(".popDoc").show();
        return false;
	<?php }else{ ?>
	location.href="/member-add.html";
	<?php } ?>
    });
    function validate_form(thisform)
    {
        var urls="/user-login.html";
        var username=thisform.username.value;
        var userpass=thisform.userpass.value;
        var Tourl=thisform.Tourl.value;
        var tmpmsg='';
        if(username==''){tmpmsg+="请输入用户名!n"}
        if(userpass==''){tmpmsg+="请输入密码!n"}
        if(Tourl!=''){
           $.ajax({
            type: "post",
            dataType: "json",
            url: urls,
            data: "json=1&username="+username+"&userpass="+userpass+"&action=login",
            success: function(result){

                if(result.status){
                    location.href = Tourl;
                    //alert(result.msg);
                }else{
                    alert(result.msg);
                }
                
                }
            });
           
           
           return false;
        }
        if(tmpmsg!=''){
            alert(tmpmsg);
            return false;
        }
    }
</script><!-- 底部 END -->
<script type="text/javascript">
  $('#navmenu_company,#navmenu_personal').mouseover(function(event){
    $('#navmenu_company,#navmenu_personal').removeClass('active');
    $(this).toggleClass('active');
    event.stopPropagation();
    });
  $('#navmenu_company,#navmenu_personal').mouseout(function(event){
    $('#navmenu_company,#navmenu_personal').removeClass('active');
    event.stopPropagation();
    });
</script>

<script src="__PUBLIC__/js/keffect.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function () {
  $('#tab span').bind('mouseover',function(){
    var index = $(this).index();
    var mores = $('#tab > div');
    var divs = $('#box > .boxone ');
    $(this).parent().children("span").attr("style", "border-bottom:1px solid #dbdee1;border-top:2px solid #fafafa;");
    $(this).attr("style", "color: #42d83b;");
    divs.hide();
    mores.hide();
    divs.eq(index).show();
    mores.eq(index).show();
  })
})
</script>
<script type="text/javascript">
$(document).ready(function () {
  $('#tab1 span').bind('mouseover',function(){
    var index = $(this).index();
    var mores = $('#tab1 > div');
    var divs = $('#box2 > .boxtwo ');
    $(this).parent().children("span").attr("style", "border-bottom:1px solid #dbdee1;border-top:2px solid #fafafa;");
    $(this).attr("style", "color: #42d83b;");
    divs.hide();
    mores.hide();
    divs.eq(index).show();
    mores.eq(index).show();
  })
})
</script>
<script type="text/javascript">
$(document).ready(function () {
  $('#tab2 span').bind('mouseover',function(){
    var index = $(this).index();
    var divs = $('#box3 > .boxtwo ');
    $(this).parent().children("span").attr("style", "border-bottom:1px solid #dbdee1;border-top:2px solid #fafafa;");
    $(this).attr("style", "color: #42d83b;");
    divs.hide();
    divs.eq(index).show();
  })
})
</script>



</body></html>