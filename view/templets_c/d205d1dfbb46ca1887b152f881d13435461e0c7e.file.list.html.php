<?php /* Smarty version Smarty-3.1.18, created on 2015-10-19 14:41:15
         compiled from "D:\phpStudy\boai\view\templets\wxy\admin\list.html" */ ?>
<?php /*%%SmartyHeaderCode:119025624908b9a04b3-69271195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd205d1dfbb46ca1887b152f881d13435461e0c7e' => 
    array (
      0 => 'D:\\phpStudy\\boai\\view\\templets\\wxy\\admin\\list.html',
      1 => 1445236358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119025624908b9a04b3-69271195',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sp' => 0,
    'img_type' => 0,
    'url' => 0,
    'table' => 0,
    'tid' => 0,
    'fields' => 0,
    'list' => 0,
    'table2' => 0,
    'pagenav' => 0,
    'templets' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5624908bbd10e3_22653092',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5624908bbd10e3_22653092')) {function content_5624908bbd10e3_22653092($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("common_head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
<div id="wrapper">
     <!-- Navigation -->
<?php echo $_smarty_tpl->getSubTemplate ("common_left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div id="page-wrapper">
        <div class="col-md-12 graphs">
     <div class="xs">
      <h3>列表</h3>
      <div class="row">
<!--         <select class="col-md-2"><option>--请选择--</option></select>
        <input type="text" class="search col-md-3" placeholder="输入查询的商品名" name="查询">
        <input type="submit" value="查询" class="chx">  -->

      <?php if ($_smarty_tpl->tpl_vars['sp']->value==1) {?>
        <?php if ($_smarty_tpl->tpl_vars['img_type']->value!='') {?>
          <a class="add" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index.php/wxy/admin/add/table/<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
/img_type/<?php echo $_smarty_tpl->tpl_vars['img_type']->value;?>
">新增</a>
        <?php } elseif ($_smarty_tpl->tpl_vars['tid']->value!='') {?>
          <a class="add" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index.php/wxy/admin/add/table/<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
/tid/<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
">新增</a>  
        <?php } else { ?> 
          <a class="add" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index.php/wxy/admin/add/table/<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
/">新增</a> 
        <?php }?>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['table']->value=="file") {?>
        <a class="add" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index.php/wxy/admin/download_add/table/<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
">上传</a>
      <?php }?>

        
      </div>
    
    <script type="text/javascript">
    $(function(){

      $(".w_col").children().each(function(){
        var p=$(this);
        var n=p.index()+1;
        var m=n%5;
        //alert(m);
        if (m==1) {p.addClass("active")};
        if (m==2) {};
        if (m==3) {p.addClass("success")};
        if (m==4) {};
        if (m==0) {p.addClass("info")};
        //alert(m);
      })
    })
    </script>  
    <div class="bs-example4 w_tb" data-example-id="contextual-table">
    <table class="table ">
      <thead >
        <tr>
          <th>选中</th>
          <?php echo $_smarty_tpl->tpl_vars['fields']->value;?>
 
          <th>操作</th>
        </tr>
      </thead>
      <tbody class="w_col">
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
          <tr class="w_tr">
            <th class="hidden-xs" aid="<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']][1];?>
"><input type="checkbox" class="checkbox"></th>            
          <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['m'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['m']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['name'] = 'm';
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']][0]) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['m']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['m']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['m']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['m']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['m']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['m']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['m']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['m']['total']);
?>
            <?php if ($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']][0][$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']][1]==4) {?>
              <td><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']][0][$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']][0];?>
" style="width:120px;height:60px;"></td>
       
            <?php } else { ?>
              <td><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']][0][$_smarty_tpl->getVariable('smarty')->value['section']['m']['index']][0];?>
</td>
            <?php }?>
          <?php endfor; endif; ?>
            <td class="">

            <?php if ($_smarty_tpl->tpl_vars['sp']->value==1) {?>
              <a style="" href="javascript:void(0)" class="w_del" aid="<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']][1];?>
">删除</a>
              <?php if ($_smarty_tpl->tpl_vars['table']->value=='item999') {?>
                <a href="javascript:void(0)" data-toggle="modal" 
   data-target="#myModal" class="w_enable" aid="<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']][1];?>
">&nbsp;&nbsp;|&nbsp;&nbsp;<span class="w_decor">状态</span></a>
              <?php }?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['table']->value!="guahao"&&$_smarty_tpl->tpl_vars['table']->value!="pin"&&$_smarty_tpl->tpl_vars['table']->value!="zai_liuyan"&&$_smarty_tpl->tpl_vars['table']->value!="file") {?>
              <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index.php/wxy/admin/edit//table/<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
/id/<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']][1];?>
">&nbsp;&nbsp;|&nbsp;&nbsp;<span class="w_decor">编辑</span></a>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['table2']->value!='') {?>
              <?php if ($_smarty_tpl->tpl_vars['table2']->value=='item') {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index.php/wxy/admin/item_list/tid/<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']][1];?>
" class="w_e" aid="<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']][1];?>
">&nbsp;&nbsp;|&nbsp;&nbsp;<span class="w_decor">查看项目列表</span></a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index.php/wxy/admin/add/table/item/tid/<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']][1];?>
" class="w_e" aid="<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']][1];?>
">&nbsp;&nbsp;|&nbsp;&nbsp;<span class="w_decor">新增项目</span></a>
              <?php } elseif ($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']][1]==3||$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']][1]==4) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index.php/wxy/admin/w_list/table/<?php echo $_smarty_tpl->tpl_vars['table2']->value;?>
/tid/<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']][1];?>
/sp/1" class="w_e" aid="<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']][1];?>
">&nbsp;&nbsp;|&nbsp;&nbsp;<span class="w_decor">查看</span></a>
              <?php } else { ?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index.php/wxy/admin/w_list/table/<?php echo $_smarty_tpl->tpl_vars['table2']->value;?>
/tid/<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']][1];?>
" class="w_e" aid="<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']][1];?>
">&nbsp;&nbsp;|&nbsp;&nbsp;<span class="w_decor">查看</span></a>
              <?php }?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['table']->value=="guahao"||$_smarty_tpl->tpl_vars['table']->value=="pin"||$_smarty_tpl->tpl_vars['table']->value=="zai_liuyan"||$_smarty_tpl->tpl_vars['table']->value=="file") {?>
              <a style="" href="javascript:void(0)" class="w_del" aid="<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']][1];?>
">删除</a>
            <?php }?>
     


            </td>
        </tr>
<?php endfor; endif; ?>
      </tbody>

    </table>

<?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>




















<script type="text/javascript">
$(function(){
  $(".del_all").click(function(){
      var ids="";
      
      $(".hidden-xs").each(function(){
          var p=$(this);
          if (p.children().is(":checked")) {
            ids+=p.attr('aid')+',';
          }


      })

          if (ids=="") {alert("您什么都没有选择呢");return false};
          var r=confirm("确认删除吗");
          if (r==true){
          }else{
            return false;
          }           
          $.get("/index.php/wxy/admin/do_delete/table/<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
/ids/"+ids,function(data){
            if (data>0) {alert("删除成功");location.reload()}else{
              alert("失败");alert(data);
            }
          })

     
  })


  $(".w_del").click(function(){
    var r=confirm("确认删除吗");
    if (r==true){
    }else{
      return false;
    } 
    var p=$(this);
    var id=$(this).attr("aid");
    $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index.php/wxy/admin/do_delete/table/<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
/',{id:id},function(data){
      if (data==1) {
      alert("删除成功")     
      p.parent().parent().remove();return false;
      };
    });
  })

  var n=1;
  $(".qx").click(function(){
    
    if(n==1){

      $(".checkbox").prop("checked",true);
      n=0;
    }else{

      $(".checkbox").attr("checked",false);
      $(".checkbox").removeAttr("checked");
      n=1;
    }
  })

})

</script>









      <div id="w_ss"></div>
        <?php if ($_smarty_tpl->tpl_vars['sp']->value==1||$_smarty_tpl->tpl_vars['table']->value=="pin"||$_smarty_tpl->tpl_vars['table']->value=="guahao"||$_smarty_tpl->tpl_vars['table']->value=="zai_liuyan"||$_smarty_tpl->tpl_vars['table']->value=="file") {?>
        <div class="btn btn-default  qx">全选</div>
          <div class="del btn btn-success btn-warng1 del_all">删除</div>
        <?php }?>
      </div>
   </div>
  </div>
      <!-- /#page-wrapper -->
</div>




<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" 
               data-dismiss="modal" aria-hidden="true">
                  &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">
              状态 
            </h4>
         </div>
         <div class="modal-body">
          <label><input type="checkbox" name="p10"> 首页精选</label>
          <label><input type="radio" name="zhta"> 状态 2</label>
          <label><input type="radio" name="zhta"> 状态 3</label>
          <label><input type="radio" name="zhta"> 状态 4</label>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" 
               data-dismiss="modal">关闭
            </button>
            <button type="button" class="btn btn-primary">
               提交更改
            </button>
         </div>
      </div><!-- /.modal-content -->
</div>












    <!-- /#wrapper -->
<!-- Nav CSS -->
<link href="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/js/metisMenu.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/js/custom.js"></script>

<script src="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/js/jquery.kkPages.js"></script>
<script type="text/javascript">
  $('.w_tb').kkPages({ 
   PagesClass:'.w_tr', //需要分页的元素
   PagesMth:20, //每页显示个数 
   PagesNavMth:5 //显示导航个数
});
</script>

<script type="text/javascript">

</script>
</body>
</html>
<?php }} ?>
