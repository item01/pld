<?php /* Smarty version Smarty-3.1.18, created on 2015-10-20 19:25:30
         compiled from "D:\boai\view\templets\home\index\common_foot.html" */ ?>
<?php /*%%SmartyHeaderCode:8265561f695c6b39f7-40091433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa4356dfc3e6483766045d9a934423697c1fa653' => 
    array (
      0 => 'D:\\boai\\view\\templets\\home\\index\\common_foot.html',
      1 => 1445340320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8265561f695c6b39f7-40091433',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_561f695c6bb6f1_01985293',
  'variables' => 
  array (
    'lianxi_list' => 0,
    'qq' => 0,
    'templets' => 0,
    'set_list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561f695c6bb6f1_01985293')) {function content_561f695c6bb6f1_01985293($_smarty_tpl) {?>
<!--footer-->
<div class="footerbox">
<div class="line"></div>
<div class="dizhi">
    <?php echo $_smarty_tpl->tpl_vars['lianxi_list']->value[1]['la_content'];?>

    <p><a href="www.cccuu.com">技术支持：灵秀网络科技</a></p>
</div>
</div>


<!--客服-->
<div class="lanrenzhijia_m">
    <ul>
        <a href="javascript:;" class="close"></a>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['v'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['v']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['name'] = 'v';
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['qq']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $_smarty_tpl->tpl_vars['qq']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['QQ'];?>
&site=qq&menu=yes" style="left:145px;"></a>
        <?php endfor; endif; ?>
        <a class="shao" style="left:235px;"></a>
    </ul>
</div>
<style>
.lanrenzhijia_m{ width:315px; height:145px; background:url(<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/index/images/invite_bg.png) no-repeat; position:fixed; left:50%; top:50%; margin:-72px 0 0 -157px; display:none;}
.lanrenzhijia_m ul .close{ width:25px; height:25px; display:block; position:absolute; right:0; top:0;}
.lanrenzhijia_m ul{width:315px; height:145px; position:relative;}
.lanrenzhijia_m ul a{ display:block; width:70px; height:22px; position:absolute; top:104px;}
</style>

<script>
$(function(){
    $('.lanrenzhijia_m').delay(2000).slideDown();
    $('.lanrenzhijia_m .close,.shao').click(function(){
        $('.lanrenzhijia_m').slideUp();
    });
});
</script>

<div class="fixed_box" id="fixedBox">
    <div class="content_box">
        <div class="content_inner">
            <div class="close_btn"><a title="关闭"><span>关闭</span></a></div>
            <div class="content_title"><span>客服中心</span></div>
            <div class="content_list">              
                <div class="qqserver">
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['v'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['v']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['name'] = 'v';
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['qq']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                        <p> 
                            <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $_smarty_tpl->tpl_vars['qq']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['QQ'];?>
&amp;site=qq&amp;menu=yes">
                            <img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo $_smarty_tpl->tpl_vars['qq']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['QQ'];?>
:41" alt="点击这里给我发消息" title="点击这里给我发消息">
                            <span><?php echo $_smarty_tpl->tpl_vars['qq']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['q_name'];?>
</span>
                            </a>
                        </p>
                    <?php endfor; endif; ?>
                                 
                </div>               
                <hr>
                <div class="phoneserver">
                    <h5>客户服务热线</h5>
                    <p style="text-align:center; color:#238dd2; font-weight:bold;"><?php echo $_smarty_tpl->tpl_vars['set_list']->value['s7'];?>
</p>
                </div>
                <hr>
                <div class="msgserver">
                    <p><a href="/index.php/home/index/zaixianliuyan">给我们留言</a></p>
                </div>
            </div>
            <div class="content_bottom"></div>
        </div>
    </div>
    <div class="show_btn"><span>展开客服</span></div>
</div>
</body>
</html><?php }} ?>
