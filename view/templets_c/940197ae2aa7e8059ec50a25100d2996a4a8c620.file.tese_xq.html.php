<?php /* Smarty version Smarty-3.1.18, created on 2015-10-20 09:19:59
         compiled from "D:\phpStudy\boai\view\templets\home\index\tese_xq.html" */ ?>
<?php /*%%SmartyHeaderCode:8389562596bfbef924-49429632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '940197ae2aa7e8059ec50a25100d2996a4a8c620' => 
    array (
      0 => 'D:\\phpStudy\\boai\\view\\templets\\home\\index\\tese_xq.html',
      1 => 1445236359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8389562596bfbef924-49429632',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'templets' => 0,
    'tszl_xq' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_562596bfc5e327_15442006',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562596bfc5e327_15442006')) {function content_562596bfc5e327_15442006($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common_head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
