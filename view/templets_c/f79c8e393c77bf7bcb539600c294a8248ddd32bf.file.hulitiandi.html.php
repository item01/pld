<?php /* Smarty version Smarty-3.1.18, created on 2015-10-21 10:55:05
         compiled from "D:\boai\view\templets\home\index\hulitiandi.html" */ ?>
<?php /*%%SmartyHeaderCode:278935624401fe68c81-36794918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f79c8e393c77bf7bcb539600c294a8248ddd32bf' => 
    array (
      0 => 'D:\\boai\\view\\templets\\home\\index\\hulitiandi.html',
      1 => 1445313456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '278935624401fe68c81-36794918',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5624401ff08f26_76937516',
  'variables' => 
  array (
    'templets' => 0,
    'news' => 0,
    'tid' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5624401ff08f26_76937516')) {function content_5624401ff08f26_76937516($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common_head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link href="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/index/css/news.css" rel="stylesheet" type="text/css">
<link href="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/index/css/Css.css" rel="stylesheet" type="text/css">
<?php echo $_smarty_tpl->getSubTemplate ("common_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!--��������-->
<div class="mainbox">
    <div class="main">
        <ul class="mainone">
            <li>您现在的位置:<a class="one" href="/index.php/home/index/index">首页</a>&nbsp;>&nbsp;<a class="two" href="/index.php/home/index/tesezhenliao/id/21/tid/6">健康天地</a>&nbsp;>&nbsp;<span>护理天地</span></li>
        </ul>
        <ul class="maintwo">
            <li class="left">
                <div><a href="/index.php/home/index/tesezhenliao/id/21/tid/6">特色诊疗</a></div>
                <div class="current1"><a href="/index.php/home/index/hulitiandi/id/22/tid/6">护理天地</a></div>
                <div><a href="/index.php/home/index/jkcs/id/23/tid/6">健康常识</a></div>
            </li>
            <li class="right">
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['v'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['v']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['name'] = 'v';
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['news']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                    <dd><h2><a href="/index.php/home/index/hltd_xq/id/<?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['id'];?>
/tid/<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['a_title'];?>
</a></h2><span><?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['s_time'];?>
</span></dd>
                    <dt><?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['content'];?>
</dt>
                </dl>
                <?php endfor; endif; ?>
                <br>
                <?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>

          </li>
        </ul>
    </div>
</div>

<!--footer-->
<?php echo $_smarty_tpl->getSubTemplate ("common_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
