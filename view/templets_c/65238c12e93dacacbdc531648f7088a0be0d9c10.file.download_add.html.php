<?php /* Smarty version Smarty-3.1.18, created on 2015-10-19 11:03:06
         compiled from "D:\boai\view\templets\wxy\admin\download_add.html" */ ?>
<?php /*%%SmartyHeaderCode:23986562453723803b1-00567013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65238c12e93dacacbdc531648f7088a0be0d9c10' => 
    array (
      0 => 'D:\\boai\\view\\templets\\wxy\\admin\\download_add.html',
      1 => 1445223782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23986562453723803b1-00567013',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_562453723e9b56_62572649',
  'variables' => 
  array (
    'url' => 0,
    'templets' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562453723e9b56_62572649')) {function content_562453723e9b56_62572649($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common_head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
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
							<div class="form-horizontal" id="form2">

					
								<div class="form-group">
									<label for="mediuminput" class="col-sm-2 control-label">文件上传</label>
									<div class="col-sm-8">
  	                  <div id="uploader" class="wu-example">
                        <!--用来存放文件信息-->
                        <div id="thelist" class="uploader-list"></div>
                        <div class="btns">
                            <div id="picker">选择文件</div>
                            <button id="ctlBtn" class="btn btn-default">开始上传<tton>
                        </div>
                    </div>  
                    <div id="w_upload_list">
									</div>
								</div>
				


 <div id="dtBox" ></div>


						
						</div>
					</div>
  
      <div class="panel-footer">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<button class="btn-success btn" id="sub_form2">提交</button>
				<button class="btn-default btn">Cancel</button>
			</div>
		</div>
	 </div>
    </div>
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
					
					$.post("<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index.php/wxy/admin/do_add/table/ziliao",data,function(data){
						
						if (data==1) {
							alert("成功");
							history.go(-1);
							//location.href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index.php/wxy/admin/activity";
						}else{alert('失败');};
					})
				})

			})

		</script>





<!--引入CSS-->
<link rel="stylesheet" type="text/css" href="/public/webuploader/webuploader.css">

<!--引入JS-->
<script type="text/javascript" src="/public/webuploader/webuploader.js"></script>

<!--SWF在初始化的时候指定，在后面将展示-->
<script type="text/javascript">
$(function(){

        $list = $('#thelist'),
        $btn = $('#ctlBtn'),
        state = 'pending',
        uploader;

    uploader = WebUploader.create({

        // 不压缩image
        resize: false,

        // swf文件路径
        swf: '/public/webuploader/Uploader.swf',

        // 文件接收服务端。
        server: '/index.php/home/index/WebUploader',

        // 选择文件的按钮。可选。
        // 内部根据当前运行是创建，可能是input元素，也可能是flash.
        pick: '#picker'
    });

    // 当有文件添加进来的时候
    uploader.on( 'fileQueued', function( file ) {
        $list.append( '<div id="' + file.id + '" class="item">' +
            '<h4 class="info">' + file.name + '</h4>' +
            '<p class="state">等待上传...</p>' +
        '</div>' );
    });

    // 文件上传过程中创建进度条实时显示。
    uploader.on( 'uploadProgress', function( file, percentage ) {
        var $li = $( '#'+file.id ),
            $percent = $li.find('.progress .progress-bar');

        // 避免重复创建
        if ( !$percent.length ) {
            $percent = $('<div class="progress progress-striped active">' +
              '<div class="progress-bar" role="progressbar" style="width: 0%">' +
              '</div>' +
            '</div>').appendTo( $li ).find('.progress-bar');
        }

        $li.find('p.state').text('上传中');

        $percent.css( 'width', percentage * 100 + '%' );
    });

    uploader.on( 'uploadSuccess', function( file,reason ) {
        $( '#'+file.id ).find('p.state').text('已上传');
        if (!reason.result) {alert("不能上传该格式的文件");return false;};
        
        //console.log(file);
        $.post("/index.php/wxy/admin/save_file/",{file_link:reason.result,file_name:file.name,file_size:file.size},function(data){

          var str='<input type="hidden" value="'+data+'" aname="file.name" asize="file.size">';
          $("#w_upload_list").append(str);
        })
        
    });

    uploader.on( 'uploadError', function( file ) {
        $( '#'+file.id ).find('p.state').text('上传出错');
    });

    uploader.on( 'uploadComplete', function( file ) {
        $( '#'+file.id ).find('.progress').fadeOut();
    });

    uploader.on( 'all', function( type ) {
        if ( type === 'startUpload' ) {
            state = 'uploading';
        } else if ( type === 'stopUpload' ) {
            state = 'paused';
        } else if ( type === 'uploadFinished' ) {
            state = 'done';
        }

        if ( state === 'uploading' ) {
            $btn.text('暂停上传');
        } else {
            $btn.text('开始上传');
        }
    });

    $btn.on( 'click', function() {
        if ( state === 'uploading' ) {
            uploader.stop();
        } else {
            uploader.upload();
        }
    });

})
</script>







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
