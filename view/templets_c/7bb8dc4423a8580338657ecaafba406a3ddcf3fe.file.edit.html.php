<?php /* Smarty version Smarty-3.1.18, created on 2015-10-20 11:05:26
         compiled from "D:\boai\view\templets\wxy\admin\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:29443561f6a22806324-79488512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bb8dc4423a8580338657ecaafba406a3ddcf3fe' => 
    array (
      0 => 'D:\\boai\\view\\templets\\wxy\\admin\\edit.html',
      1 => 1445236358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29443561f6a22806324-79488512',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_561f6a22913be8_47303729',
  'variables' => 
  array (
    'list' => 0,
    'id' => 0,
    'url' => 0,
    'table' => 0,
    'sw' => 0,
    'k' => 0,
    'templets' => 0,
    'y' => 0,
    't' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561f6a22913be8_47303729')) {function content_561f6a22913be8_47303729($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common_head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
<body>
<div id="wrapper">
     <!-- Navigation -->
        <?php echo $_smarty_tpl->getSubTemplate ("common_left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div id="page-wrapper">
        <div class="graphs">
	     <div class="xs">
  	       <h3>Forms</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" id="form2">

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
								<div class="form-group">
									<label for="mediuminput" class="col-sm-2 control-label"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']][1];?>
</label>
									<div class="col-sm-8">
										<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']][0];?>

									</div>
								</div>
					<?php endfor; endif; ?>



 <div id="dtBox" ></div>


							</form>
						</div>
					</div>
  
      <div class="panel-footer">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<button class="btn-success btn" id="sub_form2">提交</button>
				<button class="btn-default btn" onclick="history.go(-1)">取消</button>
			</div>
		</div>
	 </div>
    </form>
  </div>
  </div>
  </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->







	<script type="text/javascript">
			$(function(){
				$('#sub_form2').click(function(){
					var data=$("#form2").serialize();
					var id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
";
					$.post("<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index.php/wxy/admin/do_edit/table/<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
/id/"+id,data,function(data){
						
						if (data==1) {
							alert("修改成功");
              <?php if ($_smarty_tpl->tpl_vars['sw']->value==1) {?>
							location.reload();
              <?php } else { ?>
              history.go(-1);
              <?php }?>
						//location.href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index.php/wxy/admin/w_list/table/<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
";
					}else{alert('失败');};
					})
				})

			})

		</script>

<?php if ($_smarty_tpl->tpl_vars['k']->value>0) {?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/public/uploadify/jquery.uploadify.min.js"></script>

<script type="text/javascript">
$(function(){
var  k=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
;



$('#file_upload0').uploadify({

        //'debug' : true,
         'buttonText':'上传',
        // 'width':'130',
        // 'height':'40',
        // 'buttonImage':'<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/images/sc_03_06.jpg',
        'queueID'  : 'some_file_queue',//取消上传进度显示
        'swf'      : "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/public/uploadify/uploadify.swf",
        'uploader' : "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index.php/home/index/upload_img",
        'onFallback':function(){
            alert("您未安装FLASH控件，无法上传图片！请安装FLASH控件后再试。");
        },
        "onUploadSuccess":function(file, data, response){
            if (data!=-1) {
              

               $('#img0').attr('src',"/uploads/avatar/"+data);
              $('#img_url0').val("/uploads/avatar/"+data);           
              // $.post("<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index.php/home/index/do_save_avatar",{str:data},function(){
              //   alert('修改成功');
              // });

            }else{
              alert('上传失败，请重新上传');alert(data);
            }
        }
        // Put your options here
    });	

$('#file_upload1').uploadify({

        //'debug' : true,
         'buttonText':'上传',
        // 'width':'130',
        // 'height':'40',
        // 'buttonImage':'<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/images/sc_03_06.jpg',
        'queueID'  : 'some_file_queue',//取消上传进度显示
        'swf'      : "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/public/uploadify/uploadify.swf",
        'uploader' : "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index.php/home/index/upload_img",
        'onFallback':function(){
            alert("您未安装FLASH控件，无法上传图片！请安装FLASH控件后再试。");
        },
        "onUploadSuccess":function(file, data, response){
            if (data!=-1) {
              

               $('#img1').attr('src',"/uploads/avatar/"+data);
              $('#img_url1').val("/uploads/avatar/"+data);           
              // $.post("<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index.php/home/index/do_save_avatar",{str:data},function(){
              //   alert('修改成功');
              // });

            }else{
              alert('上传失败，请重新上传');
            }
        }
        // Put your options here
    });

$('#file_upload2').uploadify({

        //'debug' : true,
         'buttonText':'上传',
        // 'width':'130',
        // 'height':'40',
        // 'buttonImage':'<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/images/sc_03_06.jpg',
        'queueID'  : 'some_file_queue',//取消上传进度显示
        'swf'      : "/public/uploadify/uploadify.swf",
        'uploader' : "/index.php/home/index/upload_img",
        'onFallback':function(){
            alert("您未安装FLASH控件，无法上传图片！请安装FLASH控件后再试。");
        },
        "onUploadSuccess":function(file, data, response){
            if (data!=-1) {
              

              $('#img2').attr('src',"/uploads/avatar/"+data);
              $('#img_url2').val("/uploads/avatar/"+data);           

            }else{
              alert('上传失败，请重新上传');
            }
        }
        // Put your options here
    });
})



</script>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['y']->value==1) {?>
<script type="text/javascript" charset="utf-8" src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/public/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/public/ueditor/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/public/ueditor/lang/zh-cn/zh-cn.js"></script>


<script type="text/javascript">
  $(function(){
	var ue2 = UE.getEditor('remark2');
    ue2.ready(function() {
      var w_t=$('#w_re').val();
      //var w_t="";
        ue2.setContent(w_t);
    });
  })
</script>


<?php }?>
















<?php if ($_smarty_tpl->tpl_vars['t']->value==1) {?>


<!-- Metis Menu Plugin JavaScript -->

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/css/DateTimePicker.css">
<script src="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/js/DateTimePicker.js"></script>

<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="../src/DateTimePicker-ltie9.css" />
	<script type="text/javascript" src="../src/DateTimePicker-ltie9.js"></script>
<![endif]-->

	<script type="text/javascript">
		      $(document).ready(function()
      {
        $("#dtBox").DateTimePicker();
      });
			
		
		</script>



<?php }?>

<!-- Nav CSS -->
<link href="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/js/metisMenu.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/js/custom.js"></script>













</body>
</html>
<?php }} ?>
