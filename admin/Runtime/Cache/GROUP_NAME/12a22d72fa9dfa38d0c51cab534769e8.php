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
        //--></script><script type="text/javascript" src="../Public/js/iColorPicker.js"></script><script type="text/javascript" src="../Public/ueditor/editor_config.js"></script><script type="text/javascript" src="../Public/ueditor/editor_all.js"></script></head><body><div class="main"><div class="box_tit"><h2>任务联盟</h2></div><div class="form_list"><div style="background: #FFFCED;border: 1px solid #FFBE7A; padding: 10px; width: 700px;margin-left: 10px;margin-top: 10px;"><strong>1.</strong>如何获取标识码？在鱼福任务联盟官网，注册会员帐号，会员中心，获取标识码。领取任务并结算劳酬。<a href="http://www.yufu5.com" target="_blank">鱼福官网</a><br><strong>2.</strong>如果开启自动审核，鱼福任务联盟给本网站提交的公众账号将会自动通过审核。<br><strong>3.</strong>如果开启任务提交，站长在鱼福任务联盟领取的任务才能提交。<br><strong>4.</strong>开启任务提交，任务接口地址地址必填。<br></div><form method='post' id="form1" name="form1" action="<?php echo U('Yufuunion/save');?>"><div class="form_list_top"><dl><dt style="width: 110px;"> 标识码：</dt><dd><input type="text" class="ipt6" name="YUFUMARK" value="<?php echo ($user_config["YUFUMARK"]); ?>"><span style="color: #777;">&nbsp;请到任务联盟网站获取标识码</span></dd></dl><dl><dt style="width: 110px;"> 是否自动审核：</dt><dd><input type="radio" name="ISAUTOVERIFY" value="1" <?php if(($user_config["ISAUTOVERIFY"]) == "1"): ?>checked="checked"<?php endif; ?> />&nbsp;开启&nbsp;&nbsp;<input type="radio" name="ISAUTOVERIFY" value="0" <?php if(($user_config["ISAUTOVERIFY"]) == "0"): ?>checked="checked"<?php endif; ?> />&nbsp;关闭&nbsp;
                <span style="color: #777;">&nbsp;开启后，鱼福任务联盟给本网站提交的公众账号将会自动通过审核</span></dd></dl><dl><dt style="width: 110px;"> 是否任务提交：</dt><dd><input type="hidden" name="remember"><input type="radio" name="ISTASK" value="1" <?php if(($user_config["ISTASK"]) == "1"): ?>checked="checked"<?php endif; ?> />&nbsp;开启&nbsp;&nbsp;<input type="radio" name="ISTASK" value="0" <?php if(($user_config["ISTASK"]) == "0"): ?>checked="checked"<?php endif; ?> />&nbsp;关闭&nbsp;
                <span style="color: #777;">&nbsp;开启后，将可以使用【起始页】【推荐帐号】任务提交功能</span></dd></dl><dl><dt style="width: 110px;"> 任务接口地址：</dt><dd><input type="text" class="ipt8" name="TASKURL" value="<?php echo ($user_config["TASKURL"]); ?>" <?php if(($user_config['ISTASK']) == "0"): ?>style="background:#EBEBE4;" disabled="disabled"<?php endif; ?>><span style="color: #777;">&nbsp;请到任务联盟网站获取任务接口地址</span></dd></dl></div><div class="form_b"><input type="submit" class="submit btn7" id="submit" value="提 交"></div><div style="border: 1px dashed #FFBE7A; width: 700px;"></div></form></div></div><script type="text/javascript">    $(function(){

        if($('input[name=remember]').val()==='1'){
            $('input[name=TASKURL]').css('background','');
            $('input[name=TASKURL]').removeAttr('disabled');
        }
        if($('input[name=remember]').val()==='0'){
            $('input[name=TASKURL]').css('background','#EBEBE4');
            $('input[name=TASKURL]').attr('disabled','disabled');
        }
        
        $('input[name=ISTASK]').click(function(){

            if($(this).val()==="1"){
                $('input[name=TASKURL]').css('background','');
                $('input[name=TASKURL]').removeAttr('disabled');
                $('input[name=remember]').val('1');

            }
            if($(this).val()==="0"){
                $('input[name=TASKURL]').css('background','#EBEBE4');
                $('input[name=TASKURL]').attr('disabled','disabled');
                $('input[name=remember]').val('0');
            }
        });
        
        
        
    });
    
</script></body></html>