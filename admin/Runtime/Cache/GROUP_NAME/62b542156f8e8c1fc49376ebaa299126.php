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
        //--></script><script type="text/javascript" src="../Public/js/iColorPicker.js"></script><script type="text/javascript" src="../Public/ueditor/editor_config.js"></script><script type="text/javascript" src="../Public/ueditor/editor_all.js"></script></head><body><div class="main"><div class="box_tit"><h2>修改资料</h2></div><div class="form_list"><form method='post' id="form1" name="form1" action="<?php echo U('Public/change');?>"  enctype="multipart/form-data"><div class="form_list_top"><dl><dt> 真实姓名：</dt><dd><input type="text" class="ipt3" name="nickname" value="<?php echo ($vo["nickname"]); ?>" /></dd></dl><dl><dt> Email：</dt><dd><input type="text" class="ipt6" name="email" value="<?php echo ($vo["email"]); ?>" /></dd></dl><dl><dt> 备  注：</dt><dd><textarea class="large bLeft"  name="remark" rows="5" cols="57"><?php echo ($vo["remark"]); ?></textarea></dd></dl></div><div class="form_b"><input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>"><input type="submit" class="submit btn7" id="submit" value="提 交"></div></form></div></div></body></html>