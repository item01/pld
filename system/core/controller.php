<?php
/**
 * 核心控制类
 */
class Controller{
	public $templets=null;
	public $M=null;
	public $wx=null;
	public function __construct(){
		error_reporting(0);
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
	//同一包中的类可以被访问
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
 		$n1=strstr($w_url,"/page/");
	    $w_url=str_replace($n1, "", $w_url);
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
		if ($uid=='') {
			$uid=$this->get_uid();
		}
		$arr=$this->M->get_one("SELECT * from `lx_user` where `id`='".$uid."'");
		$this->assign("user_info",$arr);
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
				 //$privilege=$arr2['privilege'];
				 $privilege=0;
				 $unionid=$arr2['unionid'];
				 $c_time=time();
				 $u_time=time();
				 $status=0;
				 
				 $arr5=$this->M->get_one("SELECT * from `lx_user` where `unionid`='".$unionid."'");
				 //var_dump($openid);
				 if (!$arr5) {
				 	if ($nickname=='') {
				 		$nickname='用户名未知';
				 	}
				 	$this->M->query("INSERT INTO `lx_user` (`openid`,`nickname`,`sex`,`province`,`city`,`country`,`headimgurl`,`privilege`,`unionid`,`c_time`,`u_time`,`status`)values('$openid','$nickname','$sex','$province','$city','$country','$headimgurl','$privilege','$unionid','$c_time','$u_time','$status')");		
				 	$uid=$this->M->insert_id(); 

					$map['uid']=$uid;
	                $map['credit']=0;
	                $map['status']=1;
	                $map['c_time']=$map['u_time']=$u_time;
	                $this->M->insert("lx_member",$map);
				 }else{
				 	$uid=$arr5['id'];
				 	if ($arr5['openid']=='') {
				 		$w_data['openid']=$openid;
				 		$this->M->update("lx_user",$w_data,"`id`='".$uid."'");
				 	}
				 	
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

	//文件上传
	public function WebUploader(){

		$WebUploader=$this->load('WebUploader',false);
		$data=$WebUploader->upload_imgs();	
		echo $data;
 	}

	//获取用户关注列表
    public function get_subscribe($uid=""){
        $arr=$this->M->get_one("SELECT `subscribe` from `lx_subscribe` where `uid`='".$uid."' order by `id` desc");        
        return $arr['subscribe'];
    }



 	public function add_credit($uid="",$cid="",$count=""){
 		error_reporting(0);

 		$arr5=$this->M->get_one("SELECT `id` from `lx_member` where `uid`='".$uid."'");
 		if (!$arr5) {
                $map['uid']=$uid;
                $map['credit']=0;
                $map['status']=1;
                $map['c_time']=$map['u_time']=time();
                $this->M->insert("lx_member",$map);
 		}

		$data['uid']=$uid;
		$data['cid']=$cid;
		
		$data['c_time']=$data['u_time']=time();
		$data['status']=1;
		$time=strtotime(date("Y-m-d 00:00",$data['c_time']));

		$arr2=$this->M->get_one("SELECT `n1`,`cycle`,`c1` from `lx_credit_type` where `id`='".$cid."' and `status`=1");
		if ($arr2) {
			if ($cid==6) {
				$arr3=$this->M->get_one("SELECT `id` from `lx_credit_record` where `uid`='".$uid."' and `cid`='".$cid."'");
				if ($arr3) {
					return;
				}
			}
			if ($arr2['cycle']==1) {
				$arr4=$this->M->get_one("SELECT count(`id`) as a from `lx_credit_record` where `uid`='".$uid."' and `cid`='".$cid."' and `c_time`>$time");
				// var_dump($arr4);
				if ($arr4['a']>$arr2['c1']) {
					return;
				}
			}
			if ($count>0) {
				$data['count']=$n1=$count;
			}else{

				$data['count']=$n1=$arr2['n1'];
			}
			$this->M->insert("lx_credit_record",$data);
			$id=$this->M->insert_id();
			if ($id>0) {
				$this->M->query("UPDATE `lx_member` set `credit`=(`credit`+$n1) where `uid`='".$uid."'");
			}
			return $data['count'];
			
		}else{
			
		}
	}


 	public function reduce_credit($uid="",$cid="",$count=""){
 		error_reporting(0);



		$data['uid']=$uid;
		$data['cid']=$cid;
		
		$data['c_time']=$data['u_time']=time();
		$data['status']=1;	
			$data['count']=$n1=$count;
			$this->M->insert("lx_credit_record",$data);
			$id=$this->M->insert_id();
			if ($id>0) {
				$this->M->query("UPDATE `lx_member` set `credit`=(`credit`-$n1) where `uid`='".$uid."'");
			}
			
	}
// 	public function upload_img(){



// 	$upload=$this->load('uploads',false);
// 	$data=$upload->upload_imgs();	

// 	echo $data;

// }


// public function str_safe($array=""){
//  while(list($key,$var) = each($array)) {
//   if ($key != argc && $key != argv && (strtoupper($key) != $key ||'' .intval($key) == "$key")) {
//    if (is_string($var)) {

//      $array[$key] = htmlspecialchars(addslashes($var));
//    }
//    if (is_array($var))  {
//     $array[$key] = str_safe($var);
//    }
//   }
//  }
//  return $array;     
// }
public function str_rep($str=''){
		$str = str_replace("\n","<br>",$str);
		$str = str_replace(chr(32),"&nbsp;",$str);
		return $str;
}


public function check_login(){
		$uid='';

			if(!is_login()){
				R('home/reg/login');return false;
			}else{				
				$uid=is_login();				
			}	

}

//获取图片验证码

public function get_yz_code($num=""){
	get_code();

}

/**/

/*短信发送*/

	public function send_sms($to="13253631415",$datas=array('9292585','122','45'),$tempId=1){

		//主帐号
		$accountSid= 'aaf98f894fd44d15014fd99069280647';

		//主帐号Token
		$accountToken= '9b67b5e91a7f4729a9dcd83239ea663b';

		//应用Id
		$appId='8a48b5514fd49643014fd99323250e3f';

		//请求地址，格式如下，不需要写https://
		$serverIP='sandboxapp.cloopen.com';

		//请求端口 
		$serverPort='8883';

		//REST版本号
		$softVersion='2013-12-26';

		require_once(APP_LIB_PATH."/CCPRestSDK.php");
	     $rest = new REST($serverIP,$serverPort,$softVersion);
	     $rest->setAccount($accountSid,$accountToken);
	     $rest->setAppId($appId);	

 //echo "Sending TemplateSMS to $to <br/>";
     $result = $rest->sendTemplateSMS($to,$datas,$tempId);
     if($result == NULL ) {
         echo "result error!";
         break;
     }
     if($result->statusCode!=0) {
         echo "error code :" . $result->statusCode . "<br>";
         echo "error msg :" . $result->statusMsg . "<br>";
         //TODO 添加错误处理逻辑
     }else{
         // echo "Sendind TemplateSMS success!<br/>";
         // // 获取返回信息
         // $smsmessage = $result->TemplateSMS;
         // echo "dateCreated:".$smsmessage->dateCreated."<br/>";
         // echo "smsMessageSid:".$smsmessage->smsMessageSid."<br/>";


         //TODO 添加成功处理逻辑
     	$_SESSION['sms_code']=$datas[0];
     	$_SESSION['sms_phone']=$to;
     	echo 1;
     }



	}



public function QQ_login(){
	require_once(ROOT_PATH."/public/Connect2.1/API/qqConnectAPI.php");
	$qc = new QC();	
	$qc->qq_login();

}

public function QQ_callback(){
	error_reporting(0);
		 require_once(ROOT_PATH."/public/Connect2.1/API/qqConnectAPI.php");
		 $qc = new QC();
		 $qc->qq_callback();	
		 $ss=$qc->get_openid();
		 $arr=$this->M->get_one("SELECT * from `lx_user` where `qq_openid`='".$ss."'");
		 if ($arr) {
		 	$_SESSION['uid']=$arr['id'];
		 }else{
		 	$data['qq_openid']=$ss;
		 	$data['c_time']=$data['u_time']=time();
		 	//$data['c_time']=time();
		 	$this->M->insert("lx_user",$data);
		 	$_SESSION['uid']=$this->M->insert_id();
		 }
		 //var_dump($_SESSION['uid']);exit;
		 R("home/index/index");
		// var_dump($ss);
}

public function weibo_login(){
	include_once( ROOT_PATH.'/public/weibo/config.php' );
	include_once( ROOT_PATH.'/public/weibo/saetv2.ex.class.php' );

	$o = new SaeTOAuthV2( WB_AKEY , WB_SKEY );

	$code_url = $o->getAuthorizeURL( WB_CALLBACK_URL );
	echo "<script>location.href='".$code_url."'</script>";
}

public function weibo_callback(){
	include_once( ROOT_PATH.'/public/weibo/config.php' );
	include_once( ROOT_PATH.'/public/weibo/saetv2.ex.class.php' );

	$o = new SaeTOAuthV2( WB_AKEY , WB_SKEY );

	if (isset($_REQUEST['code'])) {
		$keys = array();
		$keys['code'] = $_REQUEST['code'];
		$keys['redirect_uri'] = WB_CALLBACK_URL;
		try {
			$token = $o->getAccessToken( 'code', $keys ) ;
		} catch (OAuthException $e) {
		}
	}

	if ($token) {
		$_SESSION['token'] = $token;
		setcookie( 'weibojs_'.$o->client_id, http_build_query($token) );
		$weibo_openid=$token['uid'];

		 $arr=$this->M->get_one("SELECT * from `lx_user` where `weibo_openid`='".$weibo_openid."'");
		 if ($arr) {
		 	$_SESSION['uid']=$arr['id'];
		 }else{
		 	$data['weibo_openid']=$weibo_openid;
		 	$data['c_time']=$data['u_time']=time();
		 	//$data['c_time']=time();
		 	$this->M->insert("lx_user",$data);
		 	$_SESSION['uid']=$this->M->insert_id();
		 }
		 //var_dump($_SESSION['uid']);exit;
		 R("home/index/index");

	} else {
		echo "授权失败。";
	}
}














// public function get_userinfo($uid=""){
// 	$arr=$this->M->get_one("SELECT * from `lx_user` where `uid`='".$uid."'");
// 	$this->assign("user_info",$arr);
// }

}

