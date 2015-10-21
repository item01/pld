<?php /* Smarty version Smarty-3.1.18, created on 2015-10-18 06:44:28
         compiled from "F:\wamp\www\boai\view\templets\home\index\common_header.html" */ ?>
<?php /*%%SmartyHeaderCode:3272956233fcc5a3284-09197763%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1591c190ac87e48c6a271ffaa85f43d5295110c' => 
    array (
      0 => 'F:\\wamp\\www\\boai\\view\\templets\\home\\index\\common_header.html',
      1 => 1445077540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3272956233fcc5a3284-09197763',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'templets' => 0,
    'jk_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56233fcc67b273_39749647',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56233fcc67b273_39749647')) {function content_56233fcc67b273_39749647($_smarty_tpl) {?><body>
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
	<div><img src="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/index/images/p1.jpg"></div>
</div>

<!--nav开始-->
<div class="navbox">
	<ul class="nav">
    	<li class="lianxi"><a href="/index.php/home/index/lianxi/id/29/tid/9">联系我们</a>
            <dl>
                <dd><a href="/index.php/home/index/lianxi/id/29/tid/9">预约挂号</a></dd>
                <dd><a href="/index.php/home/index/zaixianliuyan/id/30/tid/9">在线留言</a></dd>
                <dd><a href="/index.php/home/index/lianxifangshi/id/31/tid/9">联系方式</a></dd>
            </dl>
        </li>
        <li class="rencai"><a href="/index.php/home/index/rencai/id/27/">人才招聘</a>
        	<dl>
            	<dd><a href="/index.php/home/index/rencai/id/27/tid/8/">招聘信息</a></dd>
                <dd><a href="/index.php/home/index/yingpinzhiwei/id/28/">应聘职位</a></dd>
            </dl>
        </li>

        <li class="jiuyi"><a href="/index.php/home/index/jiuyi">就医指南</a>
        	<dl>
            	<dd><a href="/index.php/home/index/jiuyi/id/24/">就医流程</a></dd>
                 <dd><a href="/index.php/home/index/yibao/id/25/tid/7/">医保专区</a></dd>
                 <dd><a href="/index.php/home/index/ziliao">资料下载</a></dd>
            </dl>
        </li>
        <li class="jiangkang"><a href="/index.php/home/index/tesezhenliao">健康天地</a>
        	<dl>
            	<dd><a href="/index.php/home/index/tesezhenliao">特色诊疗</a></dd>
            	<dd><a href="/index.php/home/index/hulitiandi">护理天地</a></dd>
                <dd><a href="/index.php/home/index/jiankangchangshi">健康常识</a></dd>
            </dl>
        </li>
        <li><a href="/index.php/home/index/mingyi">名医荟萃</a></li>
        <!-- <li class="keshi"><a href="/index.php/home/index/keshi">科室导航</a>
        	<dl>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['v'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['v']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['name'] = 'v';
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['jk_list']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
            	<dd><a href="/index.php/home/index/keshi/id/<?php echo $_smarty_tpl->tpl_vars['jk_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['jk_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['n_name'];?>
</a></dd>
            <?php endfor; endif; ?>
            </dl>
        </li> -->
        
         <li class="keshi"><a href="/index.php/home/index/keshi/id/18/tid/4">科室导航</a>
            <dl>
                <dd><a href="/index.php/home/index/keshi/id/18/tid/4">临床科室</a></dd>
                <dd><a href="/index.php/home/index/keshi/id/19/tid/4">医技科室</a></dd>
                <dd><a href="/index.php/home/index/keshi/id/20/tid/4">职能部门</a></dd>
            </dl>
        </li> 
        <li class="news"><a href="/index.php/home/index/news/id/8/tid/7/">新闻动态</a>
            <dl>
                <dd><a href="/index.php/home/index/news/id/8/tid/7/">医院新闻</a></dd>
                <dd><a href="/index.php/home/index/news/id/9/tid/7/">患者心声</a></dd>
                <dd><a href="/index.php/home/index/news/id/10/tid/7/">媒体关注</a></dd>
            </dl>
        </li>
        <li class="about"><a href="/index.php/home/index/about/id/2/tid/1">关于博爱</a>
            <dl>
                <dd><a href="/index.php/home/index/about/id/2/tid/1">医院简介</a></dd>
                <dd><a href="/index.php/home/index/about/id/3/tid/1">医院愿景</a></dd>
                <dd><a href="/index.php/home/index/about/id/4/tid/1">院长致辞</a></dd>
                <dd><a href="/index.php/home/index/fengcai/id/5/tid/1">领导风采</a></dd>
                <dd><a href="/index.php/home/index/fengcai/id/6/tid/1">员工风采</a></dd>
            </dl>
        </li>
        <li class="current"><a href="/index.php/home/index/index">网站首页</a></li>
    </ul>
</div>

<!--搜索开始-->
<div class="searchbox">
	<ul class="search">
    	<li class="date"><b>今天是：</b>2015年9月24日 星期四</li>
        <li class="sinput">
        	<input name="keyword" placeholder="请输入关键词" type="text">
            <a href="/index.php/home/index/sousuojieguo/"></a>
        </li>
    </ul>
</div>

<!--广告位-->
<div class="guanggaobox">
	<div><img src="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/index/images/p2.jpg"></div>
</div>

<?php }} ?>
