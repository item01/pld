
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


	}

	/*业务逻辑部分*/


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

	//首页
	public function index(){

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







	


/*数据部分*/

	
	public function get_set(){
		$arr=$this->M->get_one("SELECT * from `lx_set` where `id`=1");
		//$arr['t12']=explode('+', $arr['t12']);
		$this->assign("set_list",$arr);
		return $arr;
	}



	//获取子级导航
	public function get_type_list($tid=""){
		 $arr=$this->M->get_all("SELECT * from `lx_nav` where `tid`= '".$tid."' ");
		 //var_dump($arr);
		 $this->assign("type_list",$arr);
	}


	
}