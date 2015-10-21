<?php /* Smarty version Smarty-3.1.18, created on 2015-10-20 10:57:47
         compiled from "D:\boai\view\templets\home\index\zaixianliuyan.html" */ ?>
<?php /*%%SmartyHeaderCode:1801056205ea8d3aea1-33659309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '520cdd1e750860fbc86af6a22c8f9b1ed9b0a145' => 
    array (
      0 => 'D:\\boai\\view\\templets\\home\\index\\zaixianliuyan.html',
      1 => 1445304188,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1801056205ea8d3aea1-33659309',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56205ea8d98ac1_16951564',
  'variables' => 
  array (
    'templets' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56205ea8d98ac1_16951564')) {function content_56205ea8d98ac1_16951564($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common_head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link href="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/index/css/zaixianliuyan.css" rel="stylesheet" type="text/css">
<?php echo $_smarty_tpl->getSubTemplate ("common_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script type="text/javascript">
$(function(){
     var na=$(".current1").children().html();
     $("#w_sd").html(na);
})
</script>
<!--在线留言--> 
<div class="mainbox">
	<div class="main">
    	<ul class="mainone">
        	<li>您现在的位置:<a class="one" href="/index.php/home/index/index">首页</a>&nbsp;>&nbsp;<a class="two" href="/index.php/home/index/lianxi/id/29/tid/9">联系我们</a>&nbsp;>&nbsp;<span id="w_sd">在线留言</span></li>
        </ul>
        <ul class="maintwo">
        	<li class="left">
            	<div><a href="/index.php/home/index/lianxi">预约挂号</a></div>
                <div class="current1"><a href="/index.php/home/index/zaixianliuyan">在线留言</a></div>
                <div><a href="/index.php/home/index/lianxifangshi">联系方式</a></div>
            </li>
            <li class="right">
                <form id="form1">
            	<div class="ll">
                	<h3>在线留言</h3>
                </div>
                <dl><dt>预约科室类型</dt><dd><input type="text" name="y_name" class="y_name"></dd></dl>
                <dl><dt>姓名</dt><dd><input type="text" name="f_name" class="f_name"></dd></dl>
                <dl><dt>联系电话</dt><dd><input type="text" name="y_tel" class="y_tel"></dd></dl>
                <dl><dt>留言内容</dt><dd><textarea name="y_content"></textarea></dd></dl>
                <input type="reset" id="dffv" style="display:none">
                <button id="w_vv" type="button">提交</button>
                </form>
            </li>
        </ul>
    </div>
</div>
<script type="text/javascript">
    $(function(){
        $("#w_vv").click(function(){
            var y_name=$('input[name="y_name"]').val();
            var f_name=$('input[name="f_name"]').val();
            var y_tel=$('input[name="y_tel"]').val();
            if (y_name=="") {alert("预约科室类型不能为空");return false};
            if (f_name=="") {alert("患者姓名不能为空");return false};
            if (y_tel=="") {alert("联系方式不能为空");return false};
            var data=$("#form1").serialize();
            $.post("/index.php/home/index/add_zaixianliuyan/",data,function(sb){
                    if (sb>0) {alert("提交成功");
                 $("#dffv").click();}
                    else{
                        alert("失败");alert(sb);
                    }
            })
        })
    })
    </script>
<!--footer-->
<?php echo $_smarty_tpl->getSubTemplate ("common_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>

</html>
<?php }} ?>
