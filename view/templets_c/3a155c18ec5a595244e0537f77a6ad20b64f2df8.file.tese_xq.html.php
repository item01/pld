<?php /* Smarty version Smarty-3.1.18, created on 2015-10-19 09:10:10
         compiled from "D:\boai\view\templets\home\index\tese_xq.html" */ ?>
<?php /*%%SmartyHeaderCode:1101256235659d390f2-01270353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a155c18ec5a595244e0537f77a6ad20b64f2df8' => 
    array (
      0 => 'D:\\boai\\view\\templets\\home\\index\\tese_xq.html',
      1 => 1445217008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1101256235659d390f2-01270353',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56235659dc1c94_39971330',
  'variables' => 
  array (
    'templets' => 0,
    'tszl_xq' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56235659dc1c94_39971330')) {function content_56235659dc1c94_39971330($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common_head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link href="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/index/css/tese-xiangqing.css" rel="stylesheet" type="text/css">
<?php echo $_smarty_tpl->getSubTemplate ("common_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script>
$(function(){
	
	$('.right').kkPages({
		
		PagesClass:'dl', //需要分页的元素
		PagesMth:9, //每页显示个数		
		PagesNavMth:3 //显示导航个数
		});
});
</script>


<!--��������-->
<div class="mainbox">
	<div class="main">
    	<ul class="mainone">
        	<li>您现在的位置:<a class="one" href="/index.php/home/index/index">首页</a>&nbsp;>&nbsp;<a class="two" href="/index.php/home/index/tesezhenliao/id/21/tid/6">健康天地</a>&nbsp;>&nbsp;<span>特色诊疗</span></li>
        </ul>
        <ul class="maintwo">
        	<li class="left">
            	<div class="current1"><a href="/index.php/home/index/tesezhenliao/id/21/tid/6">特色诊疗</a></div>
                <div><a href="/index.php/home/index/hulitiandi/id/22/tid/6">护理天地</a></div>
                <div><a href="/index.php/home/index/jkcs/id/23/tid/6">健康常识</a></div>
            </li>
            <li class="right">
            	<div>
                    <h3 align="center"><?php echo $_smarty_tpl->tpl_vars['tszl_xq']->value['t_title'];?>
</h3>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['tszl_xq']->value['t_pic'];?>
" width="600" min-height="200">
                    <div><?php echo $_smarty_tpl->tpl_vars['tszl_xq']->value['t_content'];?>
</div>
                </div>
            </li>
        </ul>
    </div>
</div>

<!--footer-->
<?php echo $_smarty_tpl->getSubTemplate ("common_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
