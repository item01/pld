<?php /* Smarty version Smarty-3.1.18, created on 2015-10-20 09:22:46
         compiled from "D:\phpStudy\boai\view\templets\home\index\lianxi.html" */ ?>
<?php /*%%SmartyHeaderCode:32109562588698aff74-45875292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38343b060b6294598db9afabd6b3aa0bbdb03e7d' => 
    array (
      0 => 'D:\\phpStudy\\boai\\view\\templets\\home\\index\\lianxi.html',
      1 => 1445304158,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32109562588698aff74-45875292',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56258869931ab3_23377021',
  'variables' => 
  array (
    'templets' => 0,
    'lianxi_list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56258869931ab3_23377021')) {function content_56258869931ab3_23377021($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common_head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link href="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/index/css/lianxi.css" rel="stylesheet" type="text/css">
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
        	<li>您现在的位置:<a class="one" href="/index.php/home/index/index">首页</a>&nbsp;>&nbsp;<a class="two" href="/index.php/home/index/lianxi/id/29/tid/9">联系我们</a>&nbsp;>&nbsp;<span id="w_sd">预约挂号</span></li>
        </ul>
        <ul class="maintwo">
        	<li class="left">
            	<div class="current1"><a href="/index.php/home/index/lianxi">预约挂号</a></div>
                <div><a href="/index.php/home/index/zaixianliuyan">在线留言</a></div>
                <div><a href="/index.php/home/index/lianxifangshi">联系方式</a></div>
            </li>
            <li class="right">
            <form id="form1">
            	<div class="ll">
                	<h3>预约挂号</h3>
                </div>
                
                <dl><dt>预约科室类型</dt><dd><select name="g_type" class="g_type">
                    <option value="无">无</option>
                    <option value="儿科">儿科</option>
                    <option value="牙科">牙科</option>
                </select></dd></dl>
                <dl><dt>预约科室</dt><dd><select name="ks" class="ks"><option value="无">无</option>
                    <option value="儿科">儿科</option>
                    <option value="牙科">牙科</option>
                </select></dd></dl>
                <dl><dt>就诊时间</dt><dd><input type="text" name="g_time" class="g_time"></dd></dl>
                <dl><dt>患者姓名</dt><dd><input type="text" name="g_name" class="g_name"></dd></dl>
                <dl><dt>联系电话</dt><dd><input type="text" name="g_tel" class="g_tel"></dd></dl>
                <dl><dt>备注留言</dt><dd><textarea></textarea></dd></dl>
                <input type="reset" id="dffv" style="display:none">
                <button id="w_sb" type="button">提交</button>
                <div class="zhu">
                	<?php echo $_smarty_tpl->tpl_vars['lianxi_list']->value[0]['la_content'];?>

                </div>
            </form>
            </li>
        </ul>
    </div>
</div>
<script type="text/javascript">
    $(function(){
        $("#w_sb").click(function(){
            var g_type=$('input[name="g_type"]').val();
            var ks=$('input[name="ks"]').val();
            var g_time=$('input[name="g_time"]').val();
            var g_name=$('input[name="g_name"]').val();
            var g_tel=$('input[name="g_tel"]').val();
            if (g_time=="") {alert("预约时间不能为空");return false};
            if (g_name=="") {alert("姓名不能为空");return false};
            if (g_tel=="") {alert("联系电话不能为空");return false};
            var data=$("#form1").serialize();
            $.post("/index.php/home/index/add_lianxi/",data,function(sb){
                    if (sb>0) {alert("提交成功");
                    $("#dffv").click();
                }
                    else{ 
                        alert("失败");alert(sb);
                    }
            })
        })
    })
    </script>
<!--footer-->
<?php echo $_smarty_tpl->getSubTemplate ("common_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</body>
<script type="text/javascript">
    //�����ͳ�ʼ����ͼ������
    function initMap(){
        createMap();//������ͼ
        setMapEvent();//���õ�ͼ�¼�
        addMapControl();//���ͼ��ӿؼ�
        addMarker();//���ͼ�����marker
    }
    
    //������ͼ������
    function createMap(){
        var map = new BMap.Map("dituContent");//�ڰٶȵ�ͼ�����д���һ����ͼ
        var point = new BMap.Point(106.926641,27.712113);//����һ�����ĵ�����
        map.centerAndZoom(point,17);//�趨��ͼ�����ĵ�����겢����ͼ��ʾ�ڵ�ͼ������
        window.map = map;//��map�����洢��ȫ��
    }
    
    //��ͼ�¼����ú�����
    function setMapEvent(){
        map.enableDragging();//���õ�ͼ��ק�¼���Ĭ������(�ɲ�д)
        map.enableScrollWheelZoom();//���õ�ͼ���ַŴ���С
        map.enableDoubleClickZoom();//�������˫���Ŵ�Ĭ������(�ɲ�д)
        map.enableKeyboard();//���ü����������Ҽ��ƶ���ͼ
    }
    
    //��ͼ�ؼ���Ӻ�����
    function addMapControl(){
        //���ͼ��������ſؼ�
	var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
	map.addControl(ctrl_nav);
        //���ͼ���������ͼ�ؼ�
	var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
	map.addControl(ctrl_ove);
        //���ͼ����ӱ����߿ؼ�
	var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
	map.addControl(ctrl_sca);
    }
    
    //��ע������
    var markerArr = [{title:"遵义市博爱医院",content:"乘车路线：15路、30路",point:"106.926928|27.712225",isOpen:1,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
		 ];
    //����marker
    function addMarker(){
        for(var i=0;i<markerArr.length;i++){
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0,p1);
			var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point,{icon:iconImg});
			var iw = createInfoWindow(i);
			var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
			marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                        borderColor:"#808080",
                        color:"#333",
                        cursor:"pointer"
            });
			
			(function(){
				var index = i;
				var _iw = createInfoWindow(i);
				var _marker = marker;
				_marker.addEventListener("click",function(){
				    this.openInfoWindow(_iw);
			    });
			    _iw.addEventListener("open",function(){
				    _marker.getLabel().hide();
			    })
			    _iw.addEventListener("close",function(){
				    _marker.getLabel().show();
			    })
				label.addEventListener("click",function(){
				    _marker.openInfoWindow(_iw);
			    })
				if(!!json.isOpen){
					label.hide();
					_marker.openInfoWindow(_iw);
				}
			})()
        }
    }
    //����InfoWindow
    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
    //����һ��Icon
    function createIcon(json){
        var icon = new BMap.Icon("http://app.baidu.com/map/<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/index/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }
    
    initMap();//�����ͳ�ʼ����ͼ
</script>
</html>


</body>

</html>
<?php }} ?>
