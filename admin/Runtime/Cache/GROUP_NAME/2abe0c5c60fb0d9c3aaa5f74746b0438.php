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
        //--></script><script type="text/javascript" src="../Public/js/iColorPicker.js"></script><script type="text/javascript" src="../Public/ueditor/editor_config.js"></script><script type="text/javascript" src="../Public/ueditor/editor_all.js"></script></head><body><div class="main"><div class="box_tit"><h2>搜索词列表</h2></div><div class="operate"><div class="fLeft"><input type="button" onclick="add()" class="submit btn5" value="添加搜索词"></div><div class="fLeft"><input type="button" onclick="foreverdel()" class="submit btn5" value="删除选中"></div><div class="fLeft"><form method="post" action="<?php echo U('Search/index');?>"><input type="text" name="name" title="搜索词" class="iptt6"><input type="submit" class="submit btn5" value="查  询"></form></div></div><div class="list"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tbody><tr class="nbg"><th><input type="checkbox" id="check"></th><th>编号</th><th>关键词</th><th>搜索量</th><th>状态</th><th>操作</th></tr><?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr><td><input type="checkbox" name="key" value="<?php echo ($vo["id"]); ?>"></td><td><?php echo ($vo["id"]); ?></td><td><?php echo ($vo["search"]); ?></td><td><?php echo ($vo["hits"]); ?></td><td><?php if(($vo["status"]) == "1"): ?>显示<?php else: ?>不显示<?php endif; ?></td><td><a href="<?php echo U('Search/edit',array('id'=>$vo['id']));?>">修改</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo U('Search/foreverdel',array('id'=>$vo['id']));?>" onclick="foreverdel(<?php echo ($vo['id']); ?>); return false;">删除</a></td></tr><?php endforeach; endif; else: echo "" ;endif; ?></tbody></table><div class="th" style="clear: both;"><?php echo ($page); ?></div></div></div></body></html>