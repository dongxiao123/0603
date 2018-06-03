<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><title></title><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link rel='stylesheet' type="text/css" href="../Public/css/style.css" /><script type="text/javascript" src="../Public/js/jquery-1.7.2.min.js"></script><script type="text/javascript" src="../Public/js/common.js"></script><script type="text/javascript" src="../Public/js/jquery-yufu5.js"></script><script type="text/javascript">            $(function(){
                if($.browser.msie&&$.browser.version=="6.0"&&$("html")[0].scrollHeight>$("html").height())
                    $("html").css("overflowY","scroll");
            });
        </script><script language="JavaScript"><!--
        //指定当前组模块URL地址 
        var URL = '__URL__';
        var APP	 = '__APP__';
        var SELF='__SELF__';
        var PUBLIC='__PUBLIC__';
        var Public = '../Public/';
        //--></script><script type="text/javascript" src="../Public/js/iColorPicker.js"></script><script type="text/javascript" src="../Public/ueditor/editor_config.js"></script><script type="text/javascript" src="../Public/ueditor/editor_all.js"></script></head><body><div class="main"><div class="box_tit"><h2>APP模板设置</h2></div><form method='post' id="form1" action="<?php echo U('Appmodel/save');?>"><table cellpadding=3 cellspacing=3 ><tr><td class="tright" style="width: 80px;">选择模板：</td><td class="tleft"><div style="float: left; width: 250px; height: 427px; overflow: hidden;  position: relative; display: inline;"><img id="item" src="__ROOT__/<?php echo ($templateDir); echo ($user_config['DEFAULT_THEME']); ?>/img.png" width="210" height="380" style="position:absolute; top: 20px; left: 20px;" /></div><ul style="float: left; margin-left: 20px; list-style: none; width: 360px; padding-bottom: 20px; display: inline;"><?php if(is_array($templateList)): $i = 0; $__LIST__ = $templateList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li style="float: left; width: 98px; margin-right: 20px; margin-top: 20px; display: inline;"><div class="imgitem"><img name="itemradio" src="__ROOT__/<?php echo ($templateDir); echo ($key); ?>/img.png" width="88" height="160" style="cursor: pointer; display: block;" /></div><div class="tcenter"><input type="radio" name="DEFAULT_THEME" value="<?php echo ($key); ?>" <?php echo ($key==$user_config['DEFAULT_THEME'] ? 'checked="true"':''); ?>>&nbsp;&nbsp;<?php echo ($vo); ?></div></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></td></tr><tr><td colspan="2"><div class="tcenter cboth"><input type="submit" value="保  存" class="btn7"></div></td></tr></table></form></div><script type="text/javascript">$(document).ready(function(){
  $("input[name='DEFAULT_THEME']").click(function(){
        var vl= $("input[name='DEFAULT_THEME']:checked").val(); 
        $("#item").attr("src","__ROOT__/<?php echo ($templateDir); ?>"+vl+"/img.png");
  });
  $("img[name='itemradio']").click(function(){
        $(this).parent().next().children("input[name='DEFAULT_THEME']").attr("checked",true);
        var vl= $("input[name='DEFAULT_THEME']:checked").val(); 
        $("#item").attr("src","__ROOT__/<?php echo ($templateDir); ?>"+vl+"/img.png");
  });
});
</script></body></html>