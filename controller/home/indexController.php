
<?php
/**
 * index控制器
 * 
 * 
 */
class indexController extends Controller{

	//共有部分
	public function __construct(){

		parent::__construct();
		error_reporting(0);
		$date['date']=date('Y年m月d日');
		$date['week']=week();
		$this->assign('date',$date);
		$this->assign('key',"");
		


		$this->common_header();


	}

	/*业务逻辑部分*/

	//QQ设置
	public function get_qq(){
		$arr=$this->M->get_all("SELECT * from `lx_qq` order by `c_time` DESC limit 4");
		$this->assign('qq',$arr);
	}

	//导航列表
	public function common_header(){

		$arr=$this->M->get_all("SELECT * from `lx_nav` where  `tid`=0 order by `sort` DESC");
		foreach($arr as $key=>&$v){
			$v['children']=$this->M->get_all("SELECT * from `lx_nav` where  `tid`='".$v['id']."'");
			if(count($v['children'])==0){
				$v['children']="";
			}
		}

		unset($v);
		$this->assign("nav_list",$arr);
	}
	
	//首页图片
	public function get_images(){
		//	$arr=$this->M->get_all("SELECT * from `lx_images`");
		$arr=$this->G('images');
		$this->assign("images_list",$arr);
		return $arr; 
	}

	public function G($table,$condition='1=1',$order='`id` asc',$limit=""){
		if ($limit!="") {
			$limit=" limit $limit";
		}else{
			$limit="";
		}
		$arr=$this->M->get_all("SELECT * from `lx_$table` where $condition order by $order $limit");
		return $arr;
	}

	//首页视频
	public function get_video(){
		$arr=$this->M->get_all("SELECT * from `lx_video` limit 5");
		foreach ($arr as $key => &$v) {
			$v['c_time']=date('Y-m-d',$v['c_time']);
		}
		$this->assign("video_list",$arr);
		return $arr; 
	}

	//首页视图
	public function index(){
		$this->display("index.html");
	}
	//俱乐部
	public function daoru01(){
		$this->display("daoru01.html");
	}
	//服务方式
	public function julebu(){
		$this->display("julebu.html");
	}
	//星空珠宝
		public function daoru02(){
			$this->display("daoru02.html");
		}
	//处女座
	public function chunvzuo(){
		$this->display("chunvzuo.html");
	}
	//星座详情
	public function xingzuo(){
		$this->display("xingzuo.html");
	}
	//珠宝世界
		public function daoru03(){
			$this->display("daoru03.html");
		}
	//项链
	public function zhubao(){
		$this->display("zhubao.html");
	}
	//珠宝详情
	public function zhubao_xq(){
		$this->display("zhubao_xq.html");
	}
	//珠宝search
	public function zhubao_search(){
		$this->display("zhubao_search.html");
	}
	//高级定制
	public function daoru04(){
		$this->display("daoru04.html");
	}
	//定制
	public function dingzhi(){
		$this->display("dingzhi.html");
	}
	//定制分类
	public function dingzhi_fenlei(){
		$this->display("dingzhi_fenlei.html");
	}
	//定制详情
	public function dingzhi_fenlei_xq(){
		$this->display("dingzhi_fenlei_xq.html");
	}
	//定制预约
	public function dingzhi_fenlei_xq_yuyue(){
		$this->display("dingzhi_fenlei_xq_yuyue.html");
	}
	//定制浏览
	public function dingzhi_liulan(){
		$this->display("dingzhi_liulan.html");
	}
	//经典珠宝
	public function daoru05(){
		$this->display("daoru05.html");
	}
	//经典1
	public function jingdian(){
		$this->display("jingdian.html");
	}
	//经典分类
	public function jingdian_fenlei(){
		$this->display("jingdian_fenlei.html");
	}
	//经典分类详情
	public function jingdian_fenlei_xq(){
		$this->display("jingdian_fenlei_xq.html");
	}
	//经典浏览
	public function jingdian_liulan(){
		$this->display("jingdian_liulan.html");
	}
	//proty之星
	public function daoru06(){
		$this->display("daoru06.html");
	}
	//proty星
	public function proty_about(){
		$this->display("proty_about.html");
	}
	//proty关于
	public function proty_xing(){
		$this->display("proty_xing.html");
	}
	//proty详情
	public function proty_jia_xq(){
		$this->display("proty_jia_xq.html");
	}
	//proty晒图
	public function proty_shaitu(){
		$this->display("proty_shaitu.html");
	}
	//proty晒图search
	public function proty_shaitu_search(){
		$this->display("proty_shaitu_search.html");
	}
	//proty家
	public function proty_jia(){
		$this->display("proty_jia.html");
	}
	//品牌故事
	public function daoru07(){
		$this->display("daoru07.html");
	}
	//品牌故事1
	public function pinpai(){
		$this->display("pinpai.html");
	}
	//网络精品
	public function daoru08(){
		$this->display("daoru08.html");
	}
	//关于proty
	public function gr_about(){
		$this->display("gr_about.html");
	}
	//最新资讯
	public function gr_zixun(){
		$this->display("gr_zixun.html");
	}
	//店铺
	public function gr_dianpu(){
		$this->display("gr_dianpu.html");
	}
	//法律条款
	public function gr_fltiaokuan(){
		$this->display("gr_fltiaokuan.html");
	}
	//常见问题
	public function gr_wenti(){
		$this->display("gr_wenti.html");
	}
	//联系我们
	public function gr_contact(){
		$this->display("gr_contact.html");
	}
	//登录
	public function gr_denglu(){
		$this->display("gr_denglu.html");
	}
	//条款
	public function gr_tiaokuan(){
		$this->display("gr_tiaokuan.html");
	}
	//注册
	public function gr_zhuce(){
		$this->display("gr_zhuce.html");
	}
	//注册详情
	public function gr_zixun_xq(){
		$this->display("gr_zixun_xq.html");
	}
	//付款
	public function fukuan(){
		$this->display("fukuan.html");
	}
	//付款完成
	public function fukuan_wancheng(){
		$this->display("fukuan_wancheng.html");
	}
	//积分兑换1
	public function jifen_duihuan01(){
		$this->display("jifen_duihuan01.html");
	}
	//积分兑换2
	public function jifen_duihuan02(){
		$this->display("jifen_duihuan02.html");
	}
	//积分兑换3
	public function jifen_GZ(){
		$this->display("jifen_GZ.html");
	}
	//愿望清单
	public function yuanwang(){
		$this->display("yuanwang.html");
	}
	//愿望确认
	public function yuanwang_queren(){
		$this->display("yuanwang_queren.html");
	}


	//视频专区页面
	public function video($id="",$tid="",$page=1){
		//分页
		$page=trim($page);
		$row=$this->M->get_one("SELECT count(*) as a from `lx_video` where 1=1 and `status`=1");
		$page2=Page($page,$row['a'],20);	 
		$select_from=$page2['select_from'];
		$select_limit=$page2['select_limit'];
		//查询所有结果
		$arr=$this->M->get_all("SELECT * from `lx_video` where `status`=1 limit $select_from,$select_limit ");
		foreach($arr as $key=>$v){
			$arr[$key]['c_time']=date('Y-m-d',$arr[$key]["c_time"]);
		}
		$type_list=$this->M->get_all("SELECT * FROM `lx_nav` where `tid`='".$tid."'");
		$this->assign("pagenav",$page2["pagenav"]);
		$this->assign("list",$arr);
		$this->assign("id",$id);
		$this->assign("type_list",$type_list);
		$this->display("video.html");
	}

	//新闻列表页面
	public function news($id="",$tid=""){
		$this->get_type_list($tid);
		$this->assign("id",$id);
		$this->get_news($id);
		$this->assign("tid",$tid);
		$this->display("news.html");
	}

	//新闻详情页面
	public function news_xq($id="",$tid=7){

		$this->get_type_list($tid);
		$this->assign("id",$id);
		$this->get_newsxq($id);
		$this->assign("tid",$tid);
		$this->display("news_xq.html");
	}

	//院务公开页面
	public function yw_xq($id=""){		
		$this->M->query("UPDATE `lx_article` set `click`=`click`+1 where `id`='".$id."'");	
		$news_xq=$this->M->get_one("SELECT * FROM `lx_article` where `id`='".$id."'");
		$news_xq['content']=htmlspecialchars_decode($news_xq['content']);
		$news_xq['s_time']=date('Y-m-d',$news_xq['s_time']);
		$prev=$this->M->get_one("SELECT `id`,`a_title` FROM `lx_article` where `id` < '".$id."' and `tid`=42 order by `id` desc limit 1");
		$next=$this->M->get_one("SELECT `id`,`a_title` FROM `lx_article` where `id` > '".$id."' and `tid`=42 order by `id` asc limit 1");
		$this->assign('news_xq',$news_xq);
		$this->assign('prev',$prev);
		$this->assign('next',$next);
		$this->display("yw_xq.html");
	}

	//就医流程视图
	public function jiuyi(){
 		$arr=$this->M->get_one("SELECT * from `lx_jylc` order by `id` desc ");
 		$arr['j_content']=htmlspecialchars_decode($arr['j_content']);
 		$this->assign('list',$arr);
		$this->display("jiuyi.html");
	}


	//科室导航页面
	public function keshi($id="",$tid=""){
		$this->get_type_list($tid);
		//$lanmu=$this->get_lanmu($tid);
		$keshi=$this->get_keshi($id);
		$keshixq=array();
		foreach($keshi as $v){
			$keshixq[]=$this->M->get_all("SELECT * FROM `lx_keshi` where `status`=1 and  `tid`='".$v['id']."'");
		}
		$this->assign('keshixq',$keshixq);
		$this->assign("id",$id);
		$this->assign('tid',$tid);
		$this->display("keshi.html");
	}

	//科室详情
	public function keshixq($id="",$tid="",$ttid=""){
		$this->get_type_list($ttid);
		$this->get_keshixq($id);
		$this->assign("id",$id);
		$this->assign('tid',$tid);
		//var_dump($id);
		$this->display("keshixq.html");
	}

	//联系我们页面
	public function lianxi(){
		$this->get_lianxi();
		$this->get_ktype();
		$this->get_yyks();
		$this->display("lianxi.html");
	}

	public function deal(){
	  if (!empty($_GET['id'])&&($_GET['bs']=="kst_name")){
	  $arr=$this->M->get_all("SELECT * from `lx_ktype` where `g_type` = '{$_GET['id']}' order by `id` desc");
	  echo json_encode($arr);
	  }

	}

	public function get_ktype(){
		$arr=$this->M->get_all("SELECT * from `lx_ktype` ");
		$this->assign("ktype_list",$arr);
		return $arr; 
		//var_dump($arr);
	}
	public function get_yyks(){
		$arr=$this->M->get_all("SELECT * from `lx_yyks` ");
		$this->assign("yyks_list",$arr);
		//var_dump($arr);
		return $arr; 
	}

	//挂号信息入库
	public function add_lianxi(){
		$data=$_POST;
		$data['c_time']=time();
  		$data['status']=1;
		$this->M->insert("lx_guahao",$data);
		echo $this->M->insert_id();
		
	}

	//在线留言页面
	public function zaixianliuyan(){
		//$this->get_text(2);
		//$this->assign("p",2);
		$this->display("zaixianliuyan.html");
	}

	//留言信息入库
	public function add_zaixianliuyan(){
		//$this->get_news();
		$data=$_POST;
		$this->M->insert("lx_zai_liuyan",$data);
		echo $this->M->insert_id();
		
	}

	//联系方式页面
	public function lianxifangshi(){
		$this->get_lianxifangshi();
		//$this->assign("p",2);
		$this->display("lianxifangshi.html");
	}

	//名医荟萃页面
	public function mingyi(){
		$mingyi=$this->M->get_all("SELECT `id`,`d_name`,`d_pic` FROM `lx_doctor`");
		$this->assign('mingyi',$mingyi);
		$this->display("mingyi.html");
	}

	//名医详情页面
	public function mingyi_xq($id){	
		$mingyi_xq=$this->M->get_all("SELECT * FROM `lx_doctor` where `id`='".$id."'");
		$mingyi_xq[0]['jieshao']=htmlspecialchars_decode($mingyi_xq[0]['jieshao']);
		$this->assign('mingyi_xq',$mingyi_xq);
		$this->display("mingyi_xq.html");
	}

	
	//搜索结果页面search
	public function sousuojieguo($key="",$page=1){
		$page=trim($page);
		$row=$this->M->get_one("SELECT count(*) as a from `lx_article` where `a_title` LIKE '%".$key."%'");
		$page2=Page($page,$row['a'],10);	 
		$select_from=$page2['select_from'];
		$select_limit=$page2['select_limit'];
		//查询所有结果
		$arr=$this->M->get_all("SELECT * from `lx_article` where `a_title` LIKE '%".$key."%' limit $select_from,$select_limit ");
		foreach($arr as $k=>&$v){

			$v['content']=htmlspecialchars_decode($v['content']);
			$v['content']=ClearHtml($arr[$k]['content'],100);
			$v['s_time']=date('Y-m-d',$arr[$k]['s_time']);
			$v['a_title']=str_replace($key, '<i style="color:red">'.$key.'</i>', $v['a_title']);
		}
		unset($v);

		$this->assign("article",$arr);
		$this->assign('pagenav',$page2['pagenav']);
		$this->assign('key',$key);
		$this->display("sousuojieguo.html");
	}

	//搜索结果详情
	public function article_xq($id="",$key=""){
		$this->M->query("UPDATE `lx_article` set `click`=`click`+1 where `id`='".$id."'");	
		$news_xq=$this->M->get_one("SELECT * FROM `lx_article` where `id`='".$id."'");
		$news_xq['content']=htmlspecialchars_decode($news_xq['content']);
		$prev=$this->M->get_one("SELECT `id`,`a_title` FROM `lx_article` where `id` < '".$id."' and `a_title` LIKE '%".$key."%' order by `id` desc limit 1");
		$next=$this->M->get_one("SELECT `id`,`a_title` FROM `lx_article` where `id` > '".$id."' and `a_title` LIKE '%".$key."%' order by `id` asc limit 1");
		//var_dump($id);var_dump($prev);
		//var_dump($next);die;
		$this->assign('news_xq',$news_xq);
		$this->assign('prev',$prev);
		$this->assign('next',$next);
		$this->display("article_xq.html");
	}

	//特色诊疗页面
	public function tesezhenliao(){
		$tszl=$this->M->get_all("SELECT `id`,`t_title`,`t_pic` FROM `lx_tszl` where `status`=1");
		$this->assign('tszl',$tszl);
		$this->display("tesezhenliao.html");
	}

	//特色诊疗详情页面
	public function tese_xq($id){
		$tszl_xq=$this->M->get_one("SELECT * FROM `lx_tszl` where `status`=1 and `id`='".$id."'");
		$tszl_xq['t_content']=htmlspecialchars_decode($tszl_xq['t_content']);
		$this->assign('tszl_xq',$tszl_xq);
		$this->display("tese_xq.html");
	}

	//健康常识页面
	public function jkcs($id="",$tid="",$page=1){
		$page=trim($page);
		$row=$this->M->get_one("SELECT count(*) as a from `lx_article` where `tid` = '".$id."'");
		$page2=Page($page,$row['a'],10);	 
		$select_from=$page2['select_from'];
		$select_limit=$page2['select_limit'];
		//查询所有结果
		$news=$this->M->get_all("SELECT * from `lx_article` where `tid` = '".$id."' limit $select_from,$select_limit ");
		
		foreach($news as $key=>$v){
			$news[$key]['content']=htmlspecialchars_decode($v['content']);
			
			$news[$key]['content']=ClearHtml($news[$key]['content'],100);
			$news[$key]['s_time']=date('Y-m-d',$news[$key]['s_time']);
		}
		$this->assign('tid',$id);
		$this->assign('news',$news);
		$this->assign('pagenav',$page2['pagenav']);
		$this->display("jkcs.html");
	}

	//健康常识详情页面
	public function jkcs_xq($id="",$tid=""){		
		$this->M->query("UPDATE `lx_article` set `click`=`click`+1 where `id`='".$id."'");	
		$news_xq=$this->M->get_one("SELECT * FROM `lx_article` where `id`='".$id."'");
		$news_xq['content']=htmlspecialchars_decode($news_xq['content']);
		$news_xq['s_time']=date('Y-m-d',$news_xq['s_time']);
		$prev=$this->M->get_one("SELECT `id`,`a_title` FROM `lx_article` where `id` < '".$id."' and `tid`='".$tid."' order by `id` desc limit 1");
		$next=$this->M->get_one("SELECT `id`,`a_title` FROM `lx_article` where `id` > '".$id."' and `tid`='".$tid."' order by `id` asc limit 1");
		$this->assign('news_xq',$news_xq);
		$this->assign('prev',$prev);
		$this->assign('next',$next);
		$this->assign('tid',$tid);
		$this->display("jkcs_xq.html");
	}

	//应聘职位页面
	public function yingpinzhiwei(){
		
		$this->display("yingpinzhiwei.html");
	}

	//护理天地页面
	public function hulitiandi($id="",$tid="",$page=1){
		//$nav=$this->M->get_all("SELECT `id`,`n_name` FROM `lx_nav` where `status`=1 and `tid`='".$tid."'");
		$page=trim($page);
		$row=$this->M->get_one("SELECT count(*) as a from `lx_article` where `tid` = '".$id."'");
		$page2=Page($page,$row['a'],10);	 
		$select_from=$page2['select_from'];
		$select_limit=$page2['select_limit'];
		//查询所有结果
		$news=$this->M->get_all("SELECT * from `lx_article` where `tid` = '".$id."' limit $select_from,$select_limit ");
		foreach($news as $key=>$v){
			$news[$key]['content']=htmlspecialchars_decode($v['content']);
			
			$news[$key]['content']=ClearHtml($news[$key]['content'],100);
			$news[$key]['s_time']=date('Y-m-d',$news[$key]['s_time']);
		}
		//$this->assign('nav',$nav);
		$this->assign('tid',$id);
		$this->assign('news',$news);
		$this->assign('pagenav',$page2['pagenav']);
		$this->display("hulitiandi.html");
	}

	//护理天地详情页面
	public function hltd_xq($id="",$tid=""){
		$this->M->query("UPDATE `lx_article` set `click`=`click`+1 where `id`='".$id."'");	
		$news_xq=$this->M->get_one("SELECT * FROM `lx_article` where `id`='".$id."'");
		$news_xq['content']=htmlspecialchars_decode($news_xq['content']);
		$prev=$this->M->get_one("SELECT `id`,`a_title` FROM `lx_article` where `id` < '".$id."' and `tid`='".$tid."' order by `id` desc limit 1");
		$next=$this->M->get_one("SELECT `id`,`a_title` FROM `lx_article` where `id` > '".$id."' and `tid`='".$tid."' order by `id` asc limit 1");
		//var_dump($id);var_dump($prev);
		//var_dump($next);die;
		$this->assign('news_xq',$news_xq);
		$this->assign('prev',$prev);
		$this->assign('next',$next);
		$this->assign('tid',$tid);
		$this->display("hltd_xq.html");
	}
	

	//医保专区页面
	public function yibao($id="",$page=1){
		//分页
		$page=trim($page);
		$row=$this->M->get_one("SELECT count(*) as a from `lx_article` where `tid` = '".$id."' ");
		$page2=Page($page,$row['a'],20);	 
		$select_from=$page2['select_from'];
		$select_limit=$page2['select_limit'];
		//查询所有结果
		$arr2=$this->M->get_all("SELECT * from `lx_article` where `tid` = '".$id."' limit $select_from,$select_limit ");
		foreach($arr2 as $key=>$v){
			$arr2[$key]['s_time']=date('Y-m-d',$arr2[$key]['s_time']);

		}
		$this->assign('pagenav',$page2['pagenav']);
		$this->assign("list",$arr2);
		$this->assign('tid',$id);
		$this->display("yibao.html");
	}

	//医保专区详情页面
	public function yibao_xq($id="",$tid=""){
		$this->M->query("UPDATE `lx_article` set `click`=`click`+1 where `id`='".$id."'");
		$arr=$this->M->get_one("SELECT * from `lx_article` where `id` = '".$id."'");
		$arr["content"]=htmlspecialchars_decode($arr["content"]);
		$arr["s_time"]=date('Y-m-d',$arr["s_time"]);

		//上一篇
		$prev=$this->M->get_one("SELECT * from `lx_article` where `id` < '".$id."' and `tid`='".$tid."' order by `id` desc limit 1");
		//下一篇
		$next=$this->M->get_one("SELECT * from `lx_article` where `id` > '".$id."' and `tid`='".$tid."' order by `id` desc limit 1");

		$this->assign('prev',$prev);
		$this->assign('next',$next);
		$this->assign('tid',$tid);
		$this->assign("list",$arr);
		$this->display("yibao_xq.html");
	}

	//资料下载页面
	public function ziliao($page=1){
		//分页
		$page=trim($page);
		$row=$this->M->get_one("SELECT count(*) as a from `lx_file`");
		$page2=Page($page,$row['a'],20);	 
		$select_from=$page2['select_from'];
		$select_limit=$page2['select_limit'];
		//查询所有结果
		$arr=$this->M->get_all("SELECT * from `lx_file` limit $select_from,$select_limit ");
		foreach($arr as $key=>$v){
			$arr[$key]['c_time']=date('Y-m-d',$arr[$key]["c_time"]);
		}
		$this->assign("pagenav",$page2["pagenav"]);
		$this->assign("list",$arr);
		$this->display("ziliao.html");
	}

	//人才招聘页面
	public function rencai($id="",$page=1){
		//分页
		$page=trim($page);
		$row=$this->M->get_one("SELECT count(*) as a from `lx_article` where `tid` = '".$id."' ");
		$page2=Page($page,$row['a'],20);	 
		$select_from=$page2['select_from'];
		$select_limit=$page2['select_limit'];
		//查询所有结果
		$arr2=$this->M->get_all("SELECT * from `lx_article` where `tid` = '".$id."' limit $select_from,$select_limit ");
		foreach($arr2 as $key=>$v){
			$arr2[$key]['s_time']=date('Y-m-d',$arr2[$key]['s_time']);

		}
		$this->assign('pagenav',$page2['pagenav']);
		$this->assign("list",$arr2);
		$this->assign('tid',$id);
		$this->display("rencai.html");
	}
	
	//人才招聘详情页面
	public function rencai_xq($id="",$tid=""){
		$this->M->query("UPDATE `lx_article` set `click`=`click`+1 where `id`='".$id."'");
		$arr=$this->M->get_one("SELECT * from `lx_article` where `id` = '".$id."'");
		$arr["content"]=htmlspecialchars_decode($arr["content"]);
		$arr["s_time"]=date('Y-m-d',$arr["s_time"]);

		//上一篇
		$prev=$this->M->get_one("SELECT * from `lx_article` where `id` < '".$id."' and `tid`='".$tid."' order by `id` desc limit 1");
		//下一篇
		$next=$this->M->get_one("SELECT * from `lx_article` where `id` > '".$id."' and `tid`='".$tid."' order by `id` desc limit 1");

		$this->assign('prev',$prev);
		$this->assign('next',$next);
		$this->assign("list",$arr);
		$this->assign('tid',$tid);
		$this->display("rencai_xq.html");
	}

	//招聘职位表单处理
	public function do_pin(){
		$data=$_POST;
		$code=check_ycode($data['code']);

		if(!$code){
			echo -4;//echo '验证码不正确';
			
			exit;
		}
		$data['c_time']=time();
		$data['status']=1;
		$data1=array();
		foreach($data as $key=>$v){
			if($key!='code'){
				$data1[$key]=$v;
			}
		}
		$this->M->insert("lx_pin",$data1);
		echo $this->M->insert_id();
	}



/*数据部分*/

	
	public function get_set(){
		$arr=$this->M->get_one("SELECT * from `lx_set` where `id`=1");
		//$arr['t12']=explode('+', $arr['t12']);
		$this->assign("set_list",$arr);
		return $arr;
	}


	//新闻界面
	public function get_news($id="",$page=1){
		//分页
		$page=trim($page);
		$row=$this->M->get_one("SELECT count(*) as a from `lx_article` where `tid` = '".$id."' ");
		$page2=Page($page,$row['a'],20);	 
		$select_from=$page2['select_from'];
		$select_limit=$page2['select_limit'];
		$arr=$this->M->get_all("SELECT * from `lx_article` where `tid` = '".$id."' limit $select_from,$select_limit ");
		foreach ($arr as $key => &$e) {
			$e['content']=htmlspecialchars_decode($e['content']);  //把内容转化成html格式
			$e['content']=strip_tags($e['content']);  //把html中的标签去掉
			$e['content']=ClearHtml($e['content'],100);	
			$e['c_time']=date("Y年m月",$e['c_time']);
		}
		
		//var_dump($arr);
		$this->assign("pagenav",$page2["pagenav"]);
		$this->assign("id",$id);
		$this->assign("news_list",$arr);
	}

	//新闻详情页面
	public function get_newsxq($id=""){
		$this->M->query("UPDATE `lx_article` set `click`=`click`+1 where `id`='".$id."'");
		$arr=$this->M->get_one("SELECT * from `lx_article` where `id` = '".$id."'");
	 	
		$arr['content']=htmlspecialchars_decode($arr['content']);  //把内容转化成html格式			
		$arr['c_time']=date("Y年m月",$arr['c_time']);
		 
		$prev=$this->M->get_one("SELECT `a_title`,`id` from `lx_article` where `status`=1 and `id`<'".$id."' and `tid`='".$arr['tid']."' order by `id` desc limit 1");
		$next=$this->M->get_one("SELECT `a_title`,`id` from `lx_article` where `status`=1 and `id`>'".$id."' and `tid`='".$arr['tid']."' order by `id` asc limit 1");
		$this->assign('prev',$prev);
		$this->assign('next',$next);
		$this->assign("id",$id);
		$this->assign("newsxq_list",$arr);
	}

	//联系方式关联页面
	public function get_lianxifangshi(){
		$arr=$this->M->get_one("SELECT * from `lx_connect` where `id`=1");
		$arr['connect']=htmlspecialchars_decode($arr['connect']);
		$this->assign("lianxifangshi_list",$arr);
		return $arr;
		var_dump($arr);
	}

	//科室详情关联页面
	public function get_keshixq($id=""){
		$arr=$this->M->get_one("SELECT * from `lx_keshi` where `id`='".$id."'");
		$arr['k_content']=htmlspecialchars_decode($arr['k_content']);
		//var_dump($arr);
		$this->assign("keshixq",$arr);
	}

	//联系我们关联页面
	public function get_lianxi(){
		$arr=$this->M->get_all("SELECT * from `lx_label` ");
		foreach($arr as $key=>&$v){
			$v['la_content']=htmlspecialchars_decode($v['la_content']);
		}
		unset($v);
		$this->assign("lianxi_list",$arr);
		return $arr;   
	}

	//获取子级导航
	public function get_type_list($tid=""){
		 $arr=$this->M->get_all("SELECT * from `lx_nav` where `tid`= '".$tid."' ");
		 //var_dump($arr);
		 $this->assign("type_list",$arr);
	}

	//科室关联页面
	public function get_keshi($id=""){
		$arr=$this->M->get_all("SELECT * from `lx_nav` where `tid`='".$id."'");
		$this->assign("keshi_list",$arr);
		return $arr; 
	}

	//关于博爱关联页面
	public function get_about($id=""){

		 $arr=$this->M->get_one("SELECT * from `lx_about` where `tid` = '".$id."'");
		 $arr['b_content']=htmlspecialchars_decode($arr['b_content']);  //把内容转化成html格式
		
		//var_dump($arr);
		$this->assign("ab_list",$arr);
	}
	
}