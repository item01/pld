<?php /* Smarty version Smarty-3.1.18, created on 2015-10-20 12:12:43
         compiled from "D:\boai\view\templets\home\index\common_header.html" */ ?>
<?php /*%%SmartyHeaderCode:26192561f695c68c8f2-10181395%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f311e73513b32e08f8437ac0d0d613ab49ca6bfa' => 
    array (
      0 => 'D:\\boai\\view\\templets\\home\\index\\common_header.html',
      1 => 1445313370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26192561f695c68c8f2-10181395',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_561f695c6a7e75_89272491',
  'variables' => 
  array (
    'templets' => 0,
    'images_list' => 0,
    'nav_list' => 0,
    'date' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561f695c6a7e75_89272491')) {function content_561f695c6a7e75_89272491($_smarty_tpl) {?><body>
<div id="weather">
	<img class="cloud" src="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/index/images/cloud.png" width="300">
</div>
<div id="weather1">
	<img class="cloud" src="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/index/images/cloud.png" width="300">
</div>

<!--TOP开始-->

<div class="topbox">
	<div><img src="<?php echo $_smarty_tpl->tpl_vars['images_list']->value[0]['i_pic'];?>
"></div>
</div>

<!--nav开始-->
<div class="navbox">
	<ul class="nav">
    
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['v'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['v']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['name'] = 'v';
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['nav_list']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
            <?php if ($_smarty_tpl->tpl_vars['nav_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['children']=='') {?>
                <li class="lianxi"><a href="/index.php/home/index/<?php echo $_smarty_tpl->tpl_vars['nav_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['n_link'];?>
/id/<?php echo $_smarty_tpl->tpl_vars['nav_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['id'];?>
/tid/<?php echo $_smarty_tpl->tpl_vars['nav_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['tid'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['n_name'];?>
</a>
            <?php } else { ?>
                <li class="lianxi"><a href="/index.php/home/index/<?php echo $_smarty_tpl->tpl_vars['nav_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['n_link'];?>
/id/<?php echo $_smarty_tpl->tpl_vars['nav_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['children'][0]['id'];?>
/tid/<?php echo $_smarty_tpl->tpl_vars['nav_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['children'][0]['tid'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['n_name'];?>
</a>
            <?php }?>
            <dl>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['e'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['e']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['name'] = 'e';
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['nav_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['children']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total']);
?>
                    <dd><a href="/index.php/home/index/<?php echo $_smarty_tpl->tpl_vars['nav_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['children'][$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]['n_link'];?>
/id/<?php echo $_smarty_tpl->tpl_vars['nav_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['children'][$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]['id'];?>
/tid/<?php echo $_smarty_tpl->tpl_vars['nav_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['children'][$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]['tid'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['children'][$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]['n_name'];?>
</a></dd>
                <?php endfor; endif; ?>
            </dl>
        <?php endfor; endif; ?>
    	
    </ul>
</div>

<!--搜索开始-->
<div class="searchbox">
	<ul class="search">
    	<li class="date"><b>今天是：</b><?php echo $_smarty_tpl->tpl_vars['date']->value['date'];?>
 <?php echo $_smarty_tpl->tpl_vars['date']->value['week'];?>
</li>
        <li class="sinput">
            <input placeholder="<?php if ($_smarty_tpl->tpl_vars['key']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
<?php } else { ?>请输入关键词<?php }?>" type="text" name="key" value="">
            <a href="/index.php/home/index/sousuojieguo" name="search"></a>           
        </li>
    </ul>
</div>

<!--广告位-->
<div class="guanggaobox">
	<div><img src="<?php echo $_smarty_tpl->tpl_vars['images_list']->value[1]['i_pic'];?>
"></div>
</div>

<script type="text/javascript">
$("a[name='search']").click(function(){
    var key=$("input[name='key']").val();
    if(key){
        $("a[name='search']").attr('href','/index.php/home/index/sousuojieguo/'+'key/'+key);
    }
});
</script>
<?php }} ?>
