<?php /* Smarty version Smarty-3.1.18, created on 2015-10-19 19:48:43
         compiled from "D:\phpStudy\boai\view\templets\home\index\common_foot.html" */ ?>
<?php /*%%SmartyHeaderCode:12101562490312aea53-54439430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ac002c0d6310f8266b8b1ed579374156e2dde0b' => 
    array (
      0 => 'D:\\phpStudy\\boai\\view\\templets\\home\\index\\common_foot.html',
      1 => 1445255297,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12101562490312aea53-54439430',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_562490312b6464_32533484',
  'variables' => 
  array (
    'lianxi_list' => 0,
    'templets' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562490312b6464_32533484')) {function content_562490312b6464_32533484($_smarty_tpl) {?>
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
        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1690704269&site=qq&menu=yes" style="left:145px;"></a>
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
                    <p>                              
                        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=1690704269&amp;site=qq&amp;menu=yes">
                          <img border="0" src="http://wpa.qq.com/pa?p=2:1690704269:41" alt="点击这里给我发消息" title="点击这里给我发消息">
                          <span>方雨</span>
                        </a>
                    </p>
                    <p>
                        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1690704269&site=qq&menu=yes">
                          <img border="0" src="http://wpa.qq.com/pa?p=2:1690704269:41" alt="点击这里给我发消息" title="点击这里给我发消息">
                          <span>方雨</span>
                        </a>
                    </p>
                    <p>
                        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1690704269&site=qq&menu=yes">
                          <img border="0" src="http://wpa.qq.com/pa?p=2:1690704269:41" alt="点击这里给我发消息" title="点击这里给我发消息">
                          <span>方雨</span>
                        </a>
                    </p>       
                    <p>                        
                        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1690704269&site=qq&menu=yes">
                          <img border="0" src="http://wpa.qq.com/pa?p=2:1690704269:41" alt="点击这里给我发消息" title="点击这里给我发消息">
                          <span>方雨</span>
                        </a>
                    </p>
                    
                                 
                </div>               
                <hr>
                <div class="phoneserver">
                    <h5>客户服务热线</h5>
                    <p style="text-align:center; color:#238dd2; font-weight:bold;">0851—28629968</p>
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
