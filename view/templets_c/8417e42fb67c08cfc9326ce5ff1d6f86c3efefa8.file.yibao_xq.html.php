<?php /* Smarty version Smarty-3.1.18, created on 2015-10-20 09:19:50
         compiled from "D:\phpStudy\boai\view\templets\home\index\yibao_xq.html" */ ?>
<?php /*%%SmartyHeaderCode:2351562596b67b8031-15568144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8417e42fb67c08cfc9326ce5ff1d6f86c3efefa8' => 
    array (
      0 => 'D:\\phpStudy\\boai\\view\\templets\\home\\index\\yibao_xq.html',
      1 => 1445236359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2351562596b67b8031-15568144',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'templets' => 0,
    'list' => 0,
    'prev' => 0,
    'tid' => 0,
    'next' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_562596b686f1e3_77524556',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562596b686f1e3_77524556')) {function content_562596b686f1e3_77524556($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common_head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link href="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/index/css/news-xiangqing.css" rel="stylesheet" type="text/css">
<?php echo $_smarty_tpl->getSubTemplate ("common_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<!--医保详情-->
<div class="mainbox">
  <div class="main">
      <ul class="mainone">
          <li>您现在的位置:<a class="one" href="/index.php/home/index/index">首页</a>&nbsp;>&nbsp;<a class="two" href="/index.php/home/index/jiuyi/id/7/">就医指南</a>&nbsp;>&nbsp;<span>医保专区</span></li>
        </ul>
        <ul class="maintwo">
          <li class="left">
              <div><a href="/index.php/home/index/jiuyi/id/24/">就医指南</a></div>
              <div class="current1"><a href="/index.php/home/index/yibao/id/25/">医保专区</a></div>
              <div><a href="/index.php/home/index/ziliao/id/26/">资料下载</a></div>
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
                <a class="shang" href="/index.php/home/index/yibao_xq/id/<?php echo $_smarty_tpl->tpl_vars['prev']->value['id'];?>
/tid/<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
">上一篇：<?php echo $_smarty_tpl->tpl_vars['prev']->value['a_title'];?>
</a>
              <?php } else { ?>
                <a class="shang" href="javascript:void(0)">上一篇：暂无上一篇</a>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['next']->value['id']!='') {?>
                <a class="xia" href="/index.php/home/index/yibao_xq/id/<?php echo $_smarty_tpl->tpl_vars['next']->value['id'];?>
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
