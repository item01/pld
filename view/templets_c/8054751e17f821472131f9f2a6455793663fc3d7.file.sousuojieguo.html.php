<?php /* Smarty version Smarty-3.1.18, created on 2015-10-20 08:29:22
         compiled from "D:\phpStudy\boai\view\templets\home\index\sousuojieguo.html" */ ?>
<?php /*%%SmartyHeaderCode:670756258ae2c474f4-18642088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8054751e17f821472131f9f2a6455793663fc3d7' => 
    array (
      0 => 'D:\\phpStudy\\boai\\view\\templets\\home\\index\\sousuojieguo.html',
      1 => 1445236359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '670756258ae2c474f4-18642088',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'templets' => 0,
    'key' => 0,
    'article' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56258ae2ceb571_38959189',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56258ae2ceb571_38959189')) {function content_56258ae2ceb571_38959189($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common_head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link href="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/index/css/sousuojieguo.css" rel="stylesheet" type="text/css">
<link href="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/index/css/Css.css" rel="stylesheet" type="text/css">
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
        	<li>您现在的位置:&nbsp;&nbsp;<a class="one" href="/index.php/home/index/index">首页</a>&nbsp;>&nbsp;<span>搜索</span></li>
        </ul>
        <ul class="maintwo">
        	
            <li class="right">
                <?php if ($_smarty_tpl->tpl_vars['key']->value!='') {?>
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['v'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['v']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['name'] = 'v';
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['article']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['total']);
?>
                   	    <dl>
                        	<dd><h2><a href="/index.php/home/index/article_xq/id/<?php echo $_smarty_tpl->tpl_vars['article']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['id'];?>
/key/<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['a_title'];?>
</a></h2><span><?php echo $_smarty_tpl->tpl_vars['article']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['s_time'];?>
</span></dd>
                            <dt><?php echo $_smarty_tpl->tpl_vars['article']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['content'];?>
</dt>
                        </dl>
                    <?php endfor; endif; ?>
                    <br>
                    <?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>

                <?php }?>
          </li>
        </ul>
    </div>
</div>

<!--footer-->
<?php echo $_smarty_tpl->getSubTemplate ("common_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
