<?php /* Smarty version Smarty-3.1.18, created on 2015-10-20 09:15:22
         compiled from "D:\phpStudy\boai\view\templets\home\index\news_xq.html" */ ?>
<?php /*%%SmartyHeaderCode:296765624b9300b34a2-48975238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4277d832d8e7ed7931eb3fab7aed522fe89010ac' => 
    array (
      0 => 'D:\\phpStudy\\boai\\view\\templets\\home\\index\\news_xq.html',
      1 => 1445303709,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '296765624b9300b34a2-48975238',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5624b93018cba7_69298759',
  'variables' => 
  array (
    'templets' => 0,
    'type_list' => 0,
    'newsxq_list' => 0,
    'prev' => 0,
    'tid' => 0,
    'next' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5624b93018cba7_69298759')) {function content_5624b93018cba7_69298759($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common_head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link href="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/index/css/news-xiangqing.css" rel="stylesheet" type="text/css">
<?php echo $_smarty_tpl->getSubTemplate ("common_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>





<script type="text/javascript">
$(function(){
     var na=$(".current1").children().html();
     $("#w_sd").html(na);
})
</script>

<!--��������-->
<div class="mainbox">
    <div class="main">
        <ul class="mainone">
            <li>您现在的位置:<a class="one" href="/index.php/home/index/index">首页</a>&nbsp;>&nbsp;<a class="two" href="/index.php/home/index/news/id/15/tid/3">新闻动态</a>&nbsp;>&nbsp;<span id="w_sd">医院新闻</span></li>
        </ul>
        <ul class="maintwo">
        	<li class="left">
            	 <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['v'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['v']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['name'] = 'v';
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['type_list']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                <div <?php if ($_smarty_tpl->tpl_vars['newsxq_list']->value['tid']==$_smarty_tpl->tpl_vars['type_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['id']) {?> class="current1"<?php }?>><a href="/index.php/home/index/news/id/<?php echo $_smarty_tpl->tpl_vars['type_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['id'];?>
/tid/<?php echo $_smarty_tpl->tpl_vars['type_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['tid'];?>
"><?php echo $_smarty_tpl->tpl_vars['type_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['n_name'];?>
</a></div>
                <?php endfor; endif; ?>
            </li>
            <li class="right">
           	 	<h2><?php echo $_smarty_tpl->tpl_vars['newsxq_list']->value['a_title'];?>
</h2>
                <div>来源：<?php echo $_smarty_tpl->tpl_vars['newsxq_list']->value['source'];?>
<span>发布时间：<?php echo $_smarty_tpl->tpl_vars['newsxq_list']->value['c_time'];?>
</span><b>点击：<?php echo $_smarty_tpl->tpl_vars['newsxq_list']->value['click'];?>
</b></div>
                <p><?php echo $_smarty_tpl->tpl_vars['newsxq_list']->value['content'];?>
</p>             
			      <!-- <a class="shang" href="">上一篇：暂无上一篇</a>
            <a class="xia" href="">下一篇：智能家居——舒适环境的缔造者</a> -->
            <?php if ($_smarty_tpl->tpl_vars['prev']->value['id']!='') {?>

                <a class="shang" href="/index.php/home/index/news_xq/id/<?php echo $_smarty_tpl->tpl_vars['prev']->value['id'];?>
/tid/<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
/"><b>上一篇：<?php echo $_smarty_tpl->tpl_vars['prev']->value['a_title'];?>
</b></a>
            <?php } else { ?>
                <a class="shang" href="javascript:void(0)"><b>上一篇：暂无上一篇</b></a> 
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['next']->value['id']!='') {?>
                <a class="xia" href="/index.php/home/index/news_xq/id/<?php echo $_smarty_tpl->tpl_vars['next']->value['id'];?>
/tid/<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
"><b>下一篇：<?php echo $_smarty_tpl->tpl_vars['next']->value['a_title'];?>
</b></a>
            <?php } else { ?>
                <a class="xia" href="javascript:void(0)"><b>下一篇：暂无下一篇</b></a>
            <?php }?>
          </li>
        </ul>
    </div>
</div>

<!--footer-->
<?php echo $_smarty_tpl->getSubTemplate ("common_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
