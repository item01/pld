<?php /* Smarty version Smarty-3.1.18, created on 2015-10-20 09:22:03
         compiled from "D:\phpStudy\boai\view\templets\home\index\rencai_xq.html" */ ?>
<?php /*%%SmartyHeaderCode:39265624d8debc96c1-93787451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c079e1ddaed948f0b3ab93464f91f3095ed0f2d0' => 
    array (
      0 => 'D:\\phpStudy\\boai\\view\\templets\\home\\index\\rencai_xq.html',
      1 => 1445304080,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39265624d8debc96c1-93787451',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5624d8dec7cb73_70281123',
  'variables' => 
  array (
    'templets' => 0,
    'list' => 0,
    'prev' => 0,
    'tid' => 0,
    'next' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5624d8dec7cb73_70281123')) {function content_5624d8dec7cb73_70281123($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common_head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link href="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/index/css/news-xiangqing.css" rel="stylesheet" type="text/css">
<?php echo $_smarty_tpl->getSubTemplate ("common_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>





<!--招聘信息详情-->
<div class="mainbox">
	<div class="main">
    	<ul class="mainone">
        	<li>您现在的位置:<a class="one" href="/index.php/home/index/index">首页</a>&nbsp;>&nbsp;<a class="two" href="/index.php/home/index/rencai/id/27/tid/8">人才招聘</a>&nbsp;>&nbsp;<span>招聘信息</span></li>
        </ul>
        <ul class="maintwo">
        	<li class="left">
            	<div class="current1"><a href="/index.php/home/index/rencai/id/27/">招聘信息</a></div>
              <div><a href="/index.php/home/index/yingpinzhiwei/id/28/">应聘职位</a></div>
            </li>
            <li class="right">
           	 	<h2><?php echo $_smarty_tpl->tpl_vars['list']->value['a_title'];?>
</h2>
                <div>来源：<?php echo $_smarty_tpl->tpl_vars['list']->value['source'];?>
<span>发布时间：<?php echo $_smarty_tpl->tpl_vars['list']->value['s_time'];?>
</span><b>点击：<?php echo $_smarty_tpl->tpl_vars['list']->value['click'];?>
</b></div>
                <p><?php echo $_smarty_tpl->tpl_vars['list']->value['content'];?>
</p>
              <?php if ($_smarty_tpl->tpl_vars['prev']->value['id']!='') {?>   
			          <a class="shang" href="/index.php/home/index/rencai_xq/id/<?php echo $_smarty_tpl->tpl_vars['prev']->value['id'];?>
/tid/<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
">上一篇：<?php echo $_smarty_tpl->tpl_vars['prev']->value['a_title'];?>
</a>
              <?php } else { ?>
                <a class="shang" href="javascript:void(0)">上一篇：暂无上一篇</a>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['next']->value['id']!='') {?>
                <a class="xia" href="/index.php/home/index/rencai_xq/id/<?php echo $_smarty_tpl->tpl_vars['next']->value['id'];?>
/tid/<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
">下一篇：<?php echo $_smarty_tpl->tpl_vars['next']->value['a_title'];?>
</a>
              <?php } else { ?>
                <a class="xia" href="javascript:void(0)">下一篇：暂无下一篇</a>
              <?php }?>
          </li>
        </ul>
    </div>
</div>

<!--footer-->
<?php echo $_smarty_tpl->getSubTemplate ("common_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
