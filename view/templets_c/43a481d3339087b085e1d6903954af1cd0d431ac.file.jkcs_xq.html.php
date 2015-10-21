<?php /* Smarty version Smarty-3.1.18, created on 2015-10-19 09:05:38
         compiled from "D:\boai\view\templets\home\index\jkcs_xq.html" */ ?>
<?php /*%%SmartyHeaderCode:247055624416adc7df4-35004890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43a481d3339087b085e1d6903954af1cd0d431ac' => 
    array (
      0 => 'D:\\boai\\view\\templets\\home\\index\\jkcs_xq.html',
      1 => 1445216735,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '247055624416adc7df4-35004890',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5624416ae87496_95745848',
  'variables' => 
  array (
    'templets' => 0,
    'news_xq' => 0,
    'prev' => 0,
    'tid' => 0,
    'next' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5624416ae87496_95745848')) {function content_5624416ae87496_95745848($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common_head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link href="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/index/css/news-xiangqing.css" rel="stylesheet" type="text/css">
<?php echo $_smarty_tpl->getSubTemplate ("common_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>





<!--��������-->
<div class="mainbox">
	<div class="main">
    	<ul class="mainone">
        	<li>您现在的位置:<a class="one" href="/index.php/home/index/index">首页</a>&nbsp;>&nbsp;<a class="two" href="/index.php/home/index/tesezhenliao/id/21/tid/6">健康天地</a>&nbsp;>&nbsp;<span>健康常识</span></li>
        </ul>
        <ul class="maintwo">
        	<li class="left">
          	<div><a href="/index.php/home/index/tesezhenliao/id/21/tid/6">特色诊疗</a></div>
            <div><a href="/index.php/home/index/hulitiandi/id/22/tid/6">护理天地</a></div>
            <div class="current1"><a href="/index.php/home/index/jkcs/id/23/tid/6">健康常识</a></div>
          </li>
          <li class="right">
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
            <a class="shang" href="/index.php/home/index/jkcs_xq/id/<?php echo $_smarty_tpl->tpl_vars['prev']->value['id'];?>
/tid/<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
">上一篇：<?php echo $_smarty_tpl->tpl_vars['prev']->value['a_title'];?>
</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['next']->value['id']=='') {?>
            <a class="xia" href="javascript:void(0)">下一篇：暂无下一篇</a>
            <?php } else { ?>
            <a class="xia" href="/index.php/home/index/jkcs_xq/id/<?php echo $_smarty_tpl->tpl_vars['next']->value['id'];?>
/tid/<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
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
