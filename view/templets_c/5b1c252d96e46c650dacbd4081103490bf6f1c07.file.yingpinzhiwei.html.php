<?php /* Smarty version Smarty-3.1.18, created on 2015-10-19 08:37:32
         compiled from "D:\boai\view\templets\home\index\yingpinzhiwei.html" */ ?>
<?php /*%%SmartyHeaderCode:22188561f6d3b3f44d6-69273411%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b1c252d96e46c650dacbd4081103490bf6f1c07' => 
    array (
      0 => 'D:\\boai\\view\\templets\\home\\index\\yingpinzhiwei.html',
      1 => 1445063124,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22188561f6d3b3f44d6-69273411',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_561f6d3b4520f1_82980610',
  'variables' => 
  array (
    'templets' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561f6d3b4520f1_82980610')) {function content_561f6d3b4520f1_82980610($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common_head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link href="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/index/css/yingpinzhiwei.css" rel="stylesheet" type="text/css">
<?php echo $_smarty_tpl->getSubTemplate ("common_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>






<!--应聘职位主页-->
<div class="mainbox">
	<div class="main">
    	<ul class="mainone">
        	<li>您现在的位置:<a class="one" href="/index.php/home/index/index">首页</a>&nbsp;>&nbsp;<a class="two" href="/index.php/home/index/rencai">人才招聘</a>&nbsp;>&nbsp;<span>应聘职位</span></li>
        </ul>
        <ul class="maintwo">
        	<li class="left">
            	<div><a href="/index.php/home/index/rencai/id/27/">招聘信息</a></div>
                <div class="current1"><a href="/index.php/home/index/yingpinzhiwei">应聘职位</a></div>
            </li>
            <li class="right">
            	<h3>临床科室</h3>
                <form name="form1" id="form1">
                    <div class="abox">
                	    <div class="aleft">
                        	<dl><dt>姓名：</dt><dd><input type="text" name="p_name"></dd><span>*</span></dl>
                            <dl><dt>年龄：</dt><dd><input type="text" name="p_age"></dd><span>*</span></dl>
                            <dl><dt>毕业院校：</dt><dd class="yi"><input type="text" name="p_school"></dd><span>*</span></dl>
                            <dl><dt>毕业时间：</dt><dd class="yi"><input type="text" name="b_time"></dd><span>*</span></dl>
                            <dl><dt>户口所在地：</dt><dd class="yi"><input type="text" name="h_addr"></dd><span>*</span></dl>
                            <dl><dt>联系地址：</dt><dd class="yi"><input type="text" name="l_addr"></dd><span>*</span></dl>
                            <dl><dt>QQ号码：</dt><dd class="yi"><input type="text" name="qq"></dd><span>*</span></dl>
                            <dl class="yanx"><dt>验证码：</dt><dd class="yan"><input type="text" name="code"></dd><img style="width:100px;height:22px" onclick="javascript:this.src='/index.php/home/reg/get_yz_code/num/'+Math.random()" src="/index.php/home/reg/get_yz_code" alt="">
&nbsp;请输入图片中的字符</dl>
                        </div>
                        <div class="aright">
                    	   <dl class="xingbie"><dt>性别：</dt><dd><form><label><input name="sex" type="radio" value="男" checked="checked">&nbsp;男</label>&nbsp;&nbsp;<label><input name="sex" type="radio" value="女">&nbsp;女</label></form>&nbsp;</dd><span>*</span></dl>
                            <dl class="minzu"><dt>民族：</dt><dd><input type="text" name="mz"></dd><span>*</span></dl>
                            <dl><dt>所学专业：</dt><dd class="yi"><input type="text" name="zy"></dd><span>*</span></dl>
                            <dl><dt>最高学历：</dt><dd class="ben"><select name="xl"><option>本科</option><option>专科</option></select></dd><span>*</span></dl>
                            <dl><dt>目前所在地：</dt><dd class="yi"><input type="text" name="m_addr"></dd><span>*</span></dl>
                            <dl><dt>手机号码：</dt><dd class="yi"><input type="text" name="p_tel"></dd><span>*</span></dl>
                            <dl><dt>Email：</dt><dd class="yi"><input type="text" name="p_email"></dd><span>*</span></dl>
                        </div>
                    </div>
                    <button>提交确认</button>
                </form>
            </li>
        </ul>
    </div>
</div>
<script type="text/javascript">
    $(function(){
        $("button").click(function(){
            var name=$('input[name="p_name"]').val();
            var age=$('input[name="p_age"]').val();
            var school=$('input[name="p_school"]').val();
            var btime=$('input[name="b_time"]').val();
            var huji=$('input[name="h_addr"]').val();
            var addr=$('input[name="l_addr"]').val();
            var QQ=$('input[name="qq"]').val();
            var sex=$('input[name="sex"]').val();
            var minzu=$('input[name="mz"]').val();
            var zhuanye=$('input[name="zy"]').val();
            var xueli=$('input[name="xl"]').val();
            var maddr=$('input[name="m_addr"]').val();
            var phone=$('input[name="p_tel"]').val();
            var email=$('input[name="p_email"]').val();
            var code=$('input[name="code"]').val();
            if (name=="") {alert("姓名不能为空");return false};
            if (age=="") {alert("年龄不能为空");return false};
            if (school=="") {alert("毕业学校不能为空");return false};
            if (btime=="") {alert("毕业时间不能为空");return false};
            if (huji=="") {alert("户口所在地不能为空");return false};
            if (addr=="") {alert("联系地址不能为空");return false};
            if (QQ=="") {alert("QQ号码不能为空");return false};
            if (minzu=="") {alert("民族不能为空");return false};
            if (zhuanye=="") {alert("所学专业不能为空");return false};
            if (xueli=="") {alert("最高学历不能为空");return false};
            if (maddr=="") {alert("目前所在地不能为空");return false};
            if (phone=="") {alert("手机号码不能为空");return false};

            if (!phone.match(/^(((1[0-9][0-9]{1})|159|153)+\d{8})$/)) {
               alert("手机号码格式不正确！");
               $('select[name="p_tel"]').focus();
               return false;
            }  

            if (email=="") {alert("邮箱不能为空");return false};

                if (!email.match(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/)) { 
                alert("邮箱格式不正确"); 
                //$("#confirmMsg").html("<font color='red'>邮箱格式不正确！请重新输入！</font>"); 
                $(".email").focus(); 
                return false; 
            } 

            var data=$("#form1").serialize();
            $.post("/index.php/home/index/do_pin/",data,function(sb){
                    if (sb==-4) {alert("验证码错误");}
                    if (sb>0) {alert("提交成功");}
                    else{
                        alert("失败");
                        alert(sb);
                    }
            })
        })
    })
    </script>
<!--footer-->
<?php echo $_smarty_tpl->getSubTemplate ("common_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
