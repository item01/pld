<?php
/**
 * 核心控制类
 */
class wxController{
	public $templets=null;
	public $M=null;
	public function __construct(){
		$this->templets= Application::$templets;
		$this->M=new Model;
		$this->wx=$this->load('WxApi',false);
		//error_reporting(0);
	}
	/**
	 * 实例化模型
	 */

	final protected function M($table){
		return new Model($table);
	}

	final protected function model($model){
		if (empty($model)) {
			trigger_error('不能实例化模型');
		}
		$model_name=$model.'Model';
		return new $model_name;
	}
	/**
	 * 加载类库
	 */
	final protected function load($lib,$auto=TRUE){
		if (empty($lib)) {
			trigger_error('加载类库名不能为空');
		}elseif ($auto===TRUE) {
			return Application::$_lib[$lib];
		}elseif ($auto===False) {
			return Application::newLib($lib);
		}		
	}
	/**
	 * 加载系统配置
	 */
	final protected function config($config){
		return Application::$_config[$config];
	}
	// /**
	//  * 加载模板文件
	//  */
	// final protected function showTemplate($path,$data=array()){
	// 	$template=$this->load('template');
 //                $template->init($path,$data);
 //                $template->outPut();		
	// }
	final protected function assign($t,$tt){

		return $this->templets->assign($t,$tt); 
	}

	final protected function display($t){

		return $this->templets->display($t); 
	}

	final protected function Page($page,$rows,$page_size){
	    $pagenav="";
	    $page_count = ceil($rows/$page_size);
	    if($page >= $page_count) $page = $page_count;
	    if($page <= 1 || $page =='') $page = 1;
	    $select_limit = $page_size;
	    $w_url="http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

	    $select_from = ($page - 1) * $page_size;
	    $pre_page = ($page == 1)? 1 : $page - 1;
	    $next_page= ($page == $page_count)? $page_count : $page + 1 ;
	    $pagenav .= "第 ".$page."/".$page_count." 页 共 ".$rows." 条记录 ";
	    $pagenav .= "<a href='".$w_url."/page/1'>首页</a> ";
	    $pagenav .= "<a href='".$w_url."/page/".$pre_page."'>前一页</a> ";
	    $pagenav .= "<a href='".$w_url."/page/".$next_page."'>后一页</a> ";
	    $pagenav .= "<a href='".$w_url."/page/".$page_count."'>末页</a>";
	    $pagenav.="跳到<select name='topage' size='1' onchange='window.location=\"".$w_url."/page/\"+this.value'>\n";
	    for($i=1;$i<=$page_count;$i++){
	    if($i==$page) $pagenav.="<option value='$i' selected>$i</option>\n";
	    else $pagenav.="<option value='$i'>$i</option>\n";
	    }
	    $pagenav.="</select>";
		$page2=array();
		$page2['page']=$page;
	    $page2['select_from']=$select_from;
	    $page2['select_limit']=$select_limit;
	    $page2['pagenav']=$pagenav;

	    return $page2;
	}
//生产二维码
	public function get_qr($url=""){

		require_once APP_LIB_PATH."/phpqrcode.php";  
        $errorCorrectionLevel = "L";  
        $matrixPointSize = "6";  
        
        return QRcode::png($url, false, $errorCorrectionLevel, $matrixPointSize,3);            
	}


public function get_signPackage(){
	$signPackage=$this->wx->wxJsapiPackage();
	$this->assign('signPackage',$signPackage);
}
/*分享配置参数结束*/

//增加粉丝
public function add_fans(){
	$uid=$this->get_uid();

	$arr7=$this->M->get_one("SELECT `id` from `lx_kanjia_fans` where `uid`='".$uid."'");
	if (!$arr7) {
		$data2['uid']=$uid;
		$data2['c_time']=time();
		$data2['status']=1;
		$data2['rank']=0;

		$this->M->insert('lx_kanjia_fans',$data2);
	}else{

	}	
}
/*增加粉丝结束*/

//根据概率随机获取小礼品
public function get_prize(){
	
	$arr=$this->M->get_all("SELECT * from `lx_kanjia_gift` where `status`=1");
	$nn=count($arr);
	for ($i=0; $i <$nn ; $i++) { 
		$prize_arr[$i]=array('id'=>($i+1),'prize'=>$arr[$i]['id'],'v'=>$arr[$i]['pro']);
	}	
	$prize=get_prize($prize_arr);
	$prize_id=$prize['yes'];
	
	for ($i=0; $i <$nn ; $i++) { 
		if ($arr[$i]['id']==$prize_id) {
				$aid=$i;
		}	
	}	

	return $arr[$aid];	
}



//获取二维码
	public function get_erweima($id=""){
		$url=URL.'index.php/home/kanjia/checked/id/'.$id;
		$this->get_qr($url);
	}
//





	public function get_userinfo($uid=''){
		$arr=$this->M->get_one("SELECT * from `lx_user` where `id`='".$uid."'");
		return $arr;
	}

	public function get_uid(){

		$uid=isset($_SESSION['uid'])?$_SESSION['uid']:'';
		if ($uid=='') {
			$arr=$this->get_user();
			$uid=$arr['id'];
		}	
		return $uid;
	}

	public function get_user(){

			$str=$_SERVER['REQUEST_URI'];
			$int=substr_count($str,'code=');

			if(!isset($_SESSION['uid'])){

				if ($int==0) {
				 $redirectUrl=current_url();//重定向网页
				 $url=$this->wx->wxOauthUserinfo($redirectUrl);
				 $this->wx->wxHeader($url);	
				 exit;		
				}

				$b=strpos($str,'code=');
				$c=strpos($str,'&state');
				$code=substr($str,$b+5,32);
					

				 $arr=$this->wx->wxOauthAccessToken($code);

				 $openid=$arr['openid'];
				 $access_token=$arr['access_token'];
				 $arr2=$this->wx->wxOauthUser($access_token,$openid);

				 $nickname=$arr2['nickname'];
				 $sex=$arr2['sex'];
				 $province=$arr2['province'];
				 $city=$arr2['city'];
				 $country=$arr2['country'];
				 $headimgurl=$arr2['headimgurl'];
				 $privilege=$arr2['privilege'];
				 $unionid=$arr2['unionid'];
				 $c_time=time();
				 $u_time=time();
				 $status=0;
				 
				 $arr5=$this->M->get_one("SELECT * from `lx_user` where `openid`='".$openid."'");
				 if (!$arr5) {
				 	if ($nickname=='') {
				 		$nickname='用户名未知';
				 	}
				 $this->M->query("INSERT INTO `lx_user` (`openid`,`nickname`,`sex`,`province`,`city`,`country`,`headimgurl`,`privilege`,`unionid`,`c_time`,`u_time`,`status`)values('$openid','$nickname','$sex','$province','$city','$country','$headimgurl','$privilege','$unionid','$c_time','$u_time','$status')");		
				 $uid=$this->M->insert_id(); 	
				 }else{
				 	$uid=$arr5['id'];
				 	
				 }

				 $_SESSION['uid']=$uid;

				}

				$uid=$_SESSION['uid'];
				$arr6=$this->M->get_one("SELECT * from `lx_user` where `id`='".$uid."'");

				 return $arr6;

				 
	}

		

	public function getAllUser(){
			//获取用户列表
			set_time_limit(0);
			$arr=$this->wx->wxGetAllUser();
			for ($i=0; $i <70 ; $i++) { 
				$arr2[$i]=$this->wx->wxGetUser($arr['data']['openid'][$i]);
			}
			var_dump($arr2);
	//获取用户列表结束		
	}

	public function upload_img(){
		$upload=$this->load('uploads',false);
		$data=$upload->upload_imgs();	
		echo $data;
	}	


}

