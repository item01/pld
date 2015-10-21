<?php /* Smarty version Smarty-3.1.18, created on 2015-10-19 12:17:38
         compiled from "D:\boai\view\templets\home\index\article_xq.html" */ ?>
<?php /*%%SmartyHeaderCode:2938056246ee2c21f75-10068636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07e6924babb6069b49b5c2a306af15bff59df9c7' => 
    array (
      0 => 'D:\\boai\\view\\templets\\home\\index\\article_xq.html',
      1 => 1445072902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2938056246ee2c21f75-10068636',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'templets' => 0,
    'news_xq' => 0,
    'prev' => 0,
    'next' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56246ee2ce0974_58008218',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56246ee2ce0974_58008218')) {function content_56246ee2ce0974_58008218($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common_head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link href="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/index/css/news-xiangqing.css" rel="stylesheet" type="text/css">
<?php echo $_smarty_tpl->getSubTemplate ("common_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<!--��������-->
<div class="mainbox">
	<div class="main">
    	<ul class="mainone">
        	<li>您现在的位置:&nbsp;&nbsp;<a class="one" href="/index.php/home/index/index">首页</a>&nbsp;>&nbsp;<span>搜索</span></li>
        </ul>
        <ul class="maintwo">
          <li class="right1">
         	 	<h2><?php echo $_smarty_tpl->tpl_vars['news_xq']->value['a_title'];?>
</h2>
            <div>来源：<?php echo $_smarty_tpl->tpl_vars['news_xq']->value['source'];?>
<span>发布时间：<?php echo $_smarty_tpl->tpl_vars['news_xq']->value['s_time'];?>
</span><b>点击：<?php echo $_smarty_tpl->tpl_vars['news_xq']->value['click'];?>
</b></div>
            <?php echo $_smarty_tpl->tpl_vars['news_xq']->value['content'];?>

            <?php if ($_smarty_tpl->tpl_vars['prev']->value['id']=='') {?>
  	        <a class="shang" href="javascript:void(0)">上一篇：暂无上一篇</a>
            <?php } else { ?>
            <a class="shang" href="/index.php/home/index/article_xq/id/<?php echo $_smarty_tpl->tpl_vars['prev']->value['id'];?>
">上一篇：<?php echo $_smarty_tpl->tpl_vars['prev']->value['a_title'];?>
</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['next']->value['id']=='') {?>
            <a class="xia" href="javascript:void(0)">下一篇：暂无下一篇</a>
            <?php } else { ?>
            <a class="xia" href="/index.php/home/index/article_xq/id/<?php echo $_smarty_tpl->tpl_vars['next']->value['id'];?>
">下一篇：<?php echo $_smarty_tpl->tpl_vars['next']->value['a_title'];?>
</a>
            <?php }?>
          </li>
        </ul>
    </div>
</div>

<!--footer-->
<?php echo $_smarty_tpl->getSubTemplate ("common_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
