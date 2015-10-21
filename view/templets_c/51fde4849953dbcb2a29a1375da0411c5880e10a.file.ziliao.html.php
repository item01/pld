<?php /* Smarty version Smarty-3.1.18, created on 2015-10-19 12:13:19
         compiled from "D:\boai\view\templets\home\index\ziliao.html" */ ?>
<?php /*%%SmartyHeaderCode:99315621af11d7a712-77204809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51fde4849953dbcb2a29a1375da0411c5880e10a' => 
    array (
      0 => 'D:\\boai\\view\\templets\\home\\index\\ziliao.html',
      1 => 1445227992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99315621af11d7a712-77204809',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5621af11dff437_31877414',
  'variables' => 
  array (
    'templets' => 0,
    'list' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5621af11dff437_31877414')) {function content_5621af11dff437_31877414($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common_head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link href="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/index/css/rencai.css" rel="stylesheet" type="text/css">
<?php echo $_smarty_tpl->getSubTemplate ("common_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>





<!--人才招聘-->
<div class="mainbox">
    <div class="main">
        <ul class="mainone">
            <li>您现在的位置:<a class="one" href="/index.php/home/index/index">首页</a>&nbsp;>&nbsp;<a class="two" href="/index.php/home/index/jiuyi/id/7/">就医指南</a>&nbsp;>&nbsp;<span>资料下载</span></li>
        </ul>
        <ul class="maintwo">
            <li class="left">
              <div><a href="/index.php/home/index/jiuyi/id/24/">就医流程</a></div>
              <div><a href="/index.php/home/index/yibao/id/25/">医保专区</a></div>
              <div class="current1"><a href="/index.php/home/index/ziliao/id/26/">资料下载</a></div>
            </li>
            <li class="right">
              <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['v'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['v']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['name'] = 'v';
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['list']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                    <dd><h2><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['file_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['file_name'];?>
</a></h2><span><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['c_time'];?>
</span></dd>
                </dl>
              <?php endfor; endif; ?><br>
              <?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
     
          </li>
        </ul>
    </div>
</div>

<!--footer-->
<?php echo $_smarty_tpl->getSubTemplate ("common_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
