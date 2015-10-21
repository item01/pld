<?php /* Smarty version Smarty-3.1.18, created on 2015-10-20 09:19:08
         compiled from "D:\phpStudy\boai\view\templets\home\index\mingyi_xq.html" */ ?>
<?php /*%%SmartyHeaderCode:185585624cff5a168c2-74513106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '082b9402ba3eeed91a597469f20fb01b69c843b2' => 
    array (
      0 => 'D:\\phpStudy\\boai\\view\\templets\\home\\index\\mingyi_xq.html',
      1 => 1445303946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185585624cff5a168c2-74513106',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5624cff5adcea8_23689349',
  'variables' => 
  array (
    'templets' => 0,
    'mingyi_xq' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5624cff5adcea8_23689349')) {function content_5624cff5adcea8_23689349($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common_head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link href="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/index/css/mingyi-xiangqing.css" rel="stylesheet" type="text/css">
<?php echo $_smarty_tpl->getSubTemplate ("common_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<!--��������-->
<div class="mainbox">
	<div class="main">
    	<ul class="mainone">
        	<li>您现在的位置:<a class="one" href="/index.php/home/index/index">首页</a>&nbsp;>&nbsp;<span>名医荟萃</span></li>
        </ul>
        <ul class="maintwo">
        	<li class="left">
            	<div class="current1"><a href="/index.php/home/index/mingyi">名医荟萃</a></div>
            </li>
            <li class="right">
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['v'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['v']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['name'] = 'v';
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['mingyi_xq']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
            	<h2><?php echo $_smarty_tpl->tpl_vars['mingyi_xq']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['d_name'];?>
</h2>
                <p>作者：<?php echo $_smarty_tpl->tpl_vars['mingyi_xq']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['d_author'];?>
</p>
                <div class="right_main">
                    <table class="right_tab" cellpadding="0" cellspacing="0">
                        <tr>
                            <td rowspan="7" class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['mingyi_xq']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['d_pic'];?>
"></td>
                            <td>专家姓名</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['mingyi_xq']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['d_name'];?>
</td>
                        </tr>
                        <tr>
                            <td>所属科室</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['mingyi_xq']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['keshi'];?>
</td>
                        </tr>
                        <tr>
                            <td>职务职称</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['mingyi_xq']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['work'];?>
</td>
                        </tr>
                        <tr>
                            <td>业务专长</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['mingyi_xq']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['spe'];?>
</td>
                        </tr>
                        <tr>
                            <td>出诊时间</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['mingyi_xq']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['call_time'];?>
</td>
                        </tr>
                        <tr>
                            <td>联系方式</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['mingyi_xq']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['d_tel'];?>
</td>
                        </tr>
                        <tr>
                            <td>其他说明</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['mingyi_xq']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['other'];?>
</td>
                        </tr>
                    
                        <tr>
                            <td colspan="3">
                                <div class="content">
                                    <?php echo $_smarty_tpl->tpl_vars['mingyi_xq']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['jieshao'];?>

                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <?php endfor; endif; ?>
            </li>
        </ul>
    </div>
</div>

<!--footer-->
<?php echo $_smarty_tpl->getSubTemplate ("common_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
