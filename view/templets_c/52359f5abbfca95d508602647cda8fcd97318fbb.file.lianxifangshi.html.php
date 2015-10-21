<?php /* Smarty version Smarty-3.1.18, created on 2015-10-20 09:23:44
         compiled from "D:\phpStudy\boai\view\templets\home\index\lianxifangshi.html" */ ?>
<?php /*%%SmartyHeaderCode:19874562588710b34a4-70576171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52359f5abbfca95d508602647cda8fcd97318fbb' => 
    array (
      0 => 'D:\\phpStudy\\boai\\view\\templets\\home\\index\\lianxifangshi.html',
      1 => 1445304221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19874562588710b34a4-70576171',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56258871116799_46228790',
  'variables' => 
  array (
    'templets' => 0,
    'lianxifangshi_list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56258871116799_46228790')) {function content_56258871116799_46228790($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common_head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<link href="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/index/css/lianxifangshi.css" rel="stylesheet" type="text/css">
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
        	<li>您现在的位置:<a class="one" href="/index.php/home/index/index">首页</a>&nbsp;>&nbsp;<a class="two" href="/index.php/home/index/lianxi/id/29/tid/9">联系我们</a>&nbsp;>&nbsp;<span id="w_sd">联系方式</span></li>
        </ul>
        <ul class="maintwo">
        	<li class="left">
            	<div><a href="/index.php/home/index/lianxi">预约挂号</a></div>
                <div><a href="/index.php/home/index/zaixianliuyan">在线留言</a></div>
                <div class="current1"><a href="/index.php/home/index/lianxifangshi">联系方式</a></div>
            </li>
            <li class="right">
            	<div class="ll">
                	<h3>联系我们</h3>
                </div>
                <div class="zz">
                	<?php echo $_smarty_tpl->tpl_vars['lianxifangshi_list']->value['connect'];?>

                    <img src="<?php echo $_smarty_tpl->tpl_vars['lianxifangshi_list']->value['c_pic'];?>
">
                </div>
            </li>
        </ul>
    </div>
</div>

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
        var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }
    
    initMap();//�����ͳ�ʼ����ͼ
</script>
</html>


</body>

</html>
<?php }} ?>
