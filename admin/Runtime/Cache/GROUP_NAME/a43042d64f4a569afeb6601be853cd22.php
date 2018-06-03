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
        //--></script><script type="text/javascript" src="../Public/js/iColorPicker.js"></script><script type="text/javascript" src="../Public/ueditor/editor_config.js"></script><script type="text/javascript" src="../Public/ueditor/editor_all.js"></script></head><body><div class="main"><div class="box_tit"><h2>修改密码</h2></div><div class="form_list"><form method='post' id="form1" name="form1" action="<?php echo U('Public/changePwd');?>"  enctype="multipart/form-data"><div class="form_list_top"><dl><dt> 旧密码：</dt><dd><input type="password" class="ipt4" name="oldpassword" /></dd></dl><dl><dt> 新密码：</dt><dd><input type="password" class="ipt4" name="password" /></dd></dl><dl><dt> 确认新密码：</dt><dd><input type="password" class="ipt4" name="repassword" /></dd></dl><dl><dt> 验证码：</dt><dd><input type="text" class="ipt2"  name="verify"><img src="<?php echo U('Public/verify');?>" border="0" alt="点击刷新验证码" id="verifyImg" style="cursor:pointer; margin-left: 10px;" align="absmiddle"></dd></dl></div><div class="form_b"><input type="submit" class="submit btn7" id="submit" value="提 交"></div></form></div></div><script type="text/javascript"><!--
    $(function(){
        $('#verifyImg').click(function(){
            //重载验证码
            $('#verifyImg').attr('src',"<?php echo U('Public/verify',array('t'=>time()));?>");
            
        });
    });
    //--></script></body></html>