<?php
/**
 * 砍价控制器
 */

/**
* 
*/
class kanjiaController extends Controller
{
	
	public $sid;
	function __construct()
	{	

		parent::__construct();
		$this->sid=$this->check_login();
		$this->assign('sid',$this->sid);		
	}
	public function index(){
		$this->display('index.html');
	}

/*红包参数设置*/

	public function product_set(){
		$sid=$this->sid;
		$arr=$this->M->get_all("SELECT * from `lx_kanjia_product` where `sid`='".$sid."'");	

		foreach ($arr as $key => &$e) {
			$e['kj_num']=$this->pre_k_num($e['id']);
			switch ($e['status']) {
				case 1:
					$e['status_r']='正常';
					break;
				case 2:
					$e['status_r']='已审核';
					break;	
				case 4:
					$e['status_r']='已到期';
					break;	
				case 3:
					$e['status_r']='未开始';
					break;										
				case -1:
					$e['status_r']='已禁用';
					break;								
				default:
					$e['status_r']='状态未知';
					break;
			}

			switch ($e['is_checked']) {
				case 0:
					$e['checked']='未审核';
					break;
				case 1:
					$e['checked']='已审核';
					break;	
				case -1:
					$e['checked']='审核不通过';
					break;								
				default:
					$e['checked']='已审核';
					break;
			}
		}
		unset($e);

		
		$this->assign('list',$arr);
		$this->display("kanjia_product_set.html");
	}


	public function kanjia_set(){

		$arr=$this->M->get_one("SELECT * from `lx_kanjia_config` where `id`=1");
	


		$this->assign('list',$arr);
	

		$this->display("kanjia_set.html");
	}

	public function kanjia_do_set(){

		$arr=$_POST;




		foreach ($arr as $key => $e) {
			$data[$key]=$e;
		}


		$this->M->update('lx_kanjia_config',$data,"`id`=1");

		
		$id=$this->M->affected_rows();
		message("修改成功",R('lx/kanjia/kanjia_set'));exit;
		
		
	}

	/*红包发放记录*/
public function record_list(){
	$sid=$this->sid;
	//$arr=$this->M->get_all("SELECT * from `lx_kanjia_product` where `sid`='".$sid."'");
	$arr=$this->M->get_all("SELECT * from `lx_kanjia_kj` where `p_id` in (SELECT `id` from `lx_kanjia_product` where `sid`='".$sid."') order by id desc");

$num=count($arr);



	foreach ($arr as $key => &$e) {
		$arr_f1=$this->get_userinfo($e['uid']);
		$arr_f2=$this->M->get_one("SELECT * from `lx_kanjia_product` where `id`='".$e['p_id']."'");
		$e['uname']=$arr_f1['nickname'];
		$e['pname']=$arr_f2['p_name'];
		$e['bid_price']=$arr_f2['bid_price'];
		$e['c_time']=date("Y-m-d H:i:s",$e['k_time']);
	}
	unset($e);

	$this->assign('list',$arr);
	$this->assign('num',$num);
	$this->display("kanjia_record.html");
}



public function kanjia_payer_record(){

	$sid=$this->sid;
	$arr=$this->M->get_all("SELECT * from `lx_payer_list` where `sid`='".$sid."'");
	$num=count($arr);
	$tal_money='';
	foreach ($arr as $key => &$e) {
		$arr_f1=$this->get_userinfo($e['uid']);
		
		$e['uname']=$arr_f1['nickname'];
		
		$e['money']=$e['money']*0.01;
		$e['c_time']=date("Y-m-d H:i:s",$e['c_time']);
		if ($e['money']>0) {
			# code...
			$tal_money=$tal_money+$e['money'];
		}
	}
	unset($e);
	$this->assign('list',$arr);
	$this->assign('num',$num);
	$this->assign('tal_money',$tal_money);
	$this->display("kanjia_payer_record.html");
}

public function help_record_list(){
	$sid=$this->sid;
	//$arr=$this->M->get_all("SELECT * from `lx_kanjia_product` where `sid`='".$sid."'");
	//$arr=$this->M->get_all("SELECT * from `lx_kanjia_kjf` where `game_id` in (SELECT `id` from `lx_kanjia_kj` where `id` in (SELECT `id` from `lx_kanjia_product` where `sid`='".$sid."')) order by id desc");
$arr=$this->M->get_all("SELECT `lx_kanjia_kjf`.status,`lx_kanjia_kjf`.id,`lx_kanjia_kjf`.uid,`lx_kanjia_kjf`.k_price,`lx_kanjia_kjf`.k_time,`lx_kanjia_kjf`.game_id from `lx_kanjia_kjf` inner join `lx_kanjia_kj` on `lx_kanjia_kjf`.game_id=`lx_kanjia_kj`.id where `lx_kanjia_kj`.p_id in (SELECT `id` from `lx_kanjia_product` where `sid`='".$sid."')");
$num=count($arr);



	foreach ($arr as $key => &$e) {
		$arr_f1=$this->get_userinfo($e['uid']);
		//$arr_f2=$this->M->get_one("SELECT * from `lx_kanjia_product` where `id`='".$e['p_id']."'");
		$e['uname']=$arr_f1['nickname'];
		//$e['pname']=$arr_f2['p_name'];
		//$e['bid_price']=$arr_f2['bid_price'];
		$e['c_time']=date("Y-m-d H:i:s",$e['k_time']);
	}
	unset($e);

	$this->assign('list',$arr);
	$this->assign('num',$num);
	$this->display("kanjia_help_record.html");
}


	public function fans(){
		$sid=$this->sid;
		$arr=$this->M->get_all("SELECT DISTINCT * from `lx_kanjia_fans` where `sid`='".$sid."' order by `id` desc");
		$num=count($arr);
		foreach ($arr as $key => &$e) {
			$arr3=$this->M->get_one("SELECT * from `lx_user` where `id`='".$e['uid']."'");
			$e['uname']=$arr3['nickname'];			
			$e['headimgurl']=$arr3['headimgurl'];	
		
		}
		unset($e);
		$this->assign("list",$arr);
		$this->assign("num",$num);
		$this->display('kanjia_fans.html');
	}
//获取平均需要多少人才可以砍到最低价
public function pre_k_num($id=""){
	error_reporting(0);
	$arr=$this->M->get_one("SELECT * from `lx_kanjia_range` where `pid`='".$id."'");


	$n1=($arr['p1']-$arr['p2'])/(($arr['c12']+$arr['c11'])*0.01/2);
	$n2=($arr['p2']-$arr['p3'])/(($arr['c22']+$arr['c21'])*0.01/2);
	$n3=($arr['p3']-$arr['p4'])/(($arr['c32']+$arr['c31'])*0.01/2);
	$n4=($arr['p4']-$arr['p5'])/(($arr['c42']+$arr['c41'])*0.01/2);
	$n5=($arr['p5']-$arr['p6'])/(($arr['c52']+$arr['c51'])*0.01/2);
	$nn=$n1+$n2+$n3+$n4+$n5;

	$n11=($arr['p1']-$arr['p2'])/(($arr['c12']+$arr['c12'])*0.01/2);
	$n22=($arr['p2']-$arr['p3'])/(($arr['c22']+$arr['c22'])*0.01/2);
	$n33=($arr['p3']-$arr['p4'])/(($arr['c32']+$arr['c32'])*0.01/2);
	$n44=($arr['p4']-$arr['p5'])/(($arr['c42']+$arr['c42'])*0.01/2);
	$n55=($arr['p5']-$arr['p6'])/(($arr['c52']+$arr['c52'])*0.01/2);

	$nnn=$n11+$n22+$n33+$n44+$n55;
	//echo $nnn,"<br>",$nn;
	$res['low']=intval($nnn);
	$res['avg']=$nn;
	return $res;

}





/*卡券管理*/
/**/
/**/
	
	public function yaohui_manage(){


		$arr=$this->M->get_all("SELECT * from `lx_ticket_list` order by `id` desc");
		foreach ($arr as $key => &$e) {
			$arr_f=$this->M->get_one("SELECT * from `lx_ticket_type` where `id`='".$e['card_type']."'");
			$e['type_name']=$arr_f['name'];
			switch ($e['status']) {
				case 1:
					$e['status_t']='正常';
					break;
				case -1:
					$e['status_t']='已禁用';
					break;				
				default:
					$e['status_t']='已禁用';
					break;
			}
		}
		unset($e);


		$arr2=$this->M->get_all("SELECT * from `lx_ticket_type`");

		$this->assign("type_list",$arr2);
		$this->assign("list",$arr);
		$this->display("ticket_manage.html");
	}

	public function kanjia_edit($id=''){



		$arr=$this->M->get_one("SELECT * from `lx_kanjia_product` where `id`='".$id."'");
		$arr['start_time']=date("Y-m-d H:i:s",$arr['start_time']);
		$arr['end_time']=date("Y-m-d H:i:s",$arr['end_time']);	

		$this->assign("list2",$arr);

		$this->display("kanjia_edit.html");
	}
	public function kanjia_range($id=''){
		 $arr=$this->M->get_one("SELECT * from `lx_kanjia_range` where `pid`='".$id."'");		 
		 $this->assign("list",$arr);
		$this->display("kanjia_range.html");
	}
	public function kanjia_do_range($id=''){
		
		$arr=$_POST;
		foreach ($arr as $key => $e) {
			$data[$key]=$e;
		}

		$this->M->update('lx_kanjia_range',$data,"`id`='".$id."'");
		
		$id=$this->M->affected_rows();

		echo 1;	
	}

	public function kanjia_do_add(){
		$data['sid']=$this->sid;
		$arr=$_POST;
		$img_url=$arr['img_url'];
		unset($arr['img_url']);
		$arr2=explode('、',$img_url);

		foreach ($arr as $key => $e) {
			$data[$key]=$e;
		}

		$data['start_time']=strtotime($data['start_time']);
		$data['end_time']=strtotime($data['end_time']);
		$data['status']=1;
		$data['is_show']=-1;
		$this->M->insert('lx_kanjia_product',$data);
		$id=$this->M->insert_id();
		$map['pid']=$id;
		$this->M->insert('lx_kanjia_range',$map);		

		for ($i=0; $i <(count($arr2)-1) ; $i++) { 
			$data2['p_id']=$id;
			$data2['img_url']=$arr2[$i];
			$data2['status']=1;
			$this->M->insert("lx_kanjia_img",$data2);
		}


		if ($id>0) {
			echo 1;
		}else{
			echo -1;
		}
		
	}

	public function kanjia_do_edit($id=''){
		$sid=$this->sid;
		$arr=$_POST;
		foreach ($arr as $key => $e) {
			$data[$key]=$e;
		}
		$data['start_time']=strtotime($data['start_time']);
		$data['end_time']=strtotime($data['end_time']);

		$this->M->update('lx_kanjia_product',$data,"`id`='".$id."'");
		
		$id=$this->M->affected_rows();

		echo 1;	
	}

	public function kanjia_do_delete(){
		$id=$_POST['id'];
		$this->M->query("DELETE from `lx_kanjia_product` where `id`='".$id."'");
		$p=$this->M->affected_rows();
		if ($p>0) {
			echo 1;
		}else{
			echo -1;
		}
		
	}

	public function kanjia_do_enable(){
		$id=$_POST['id'];
		$sta=$_POST['sta'];
		$data['status']=($sta==1)?-1:1;
		$this->M->update('lx_kanjia_product',$data,"`id`='".$id."'");
		$p=$this->M->affected_rows();
		if ($p>0) {
			echo 1;
		}else{
			echo -1;
		}
		
	}

public function yaohui_do_set(){
		$arr=$_POST;
		foreach ($arr as $key => $e) {
			$data[$key]=$e;
		}

		$this->M->update('lx_bigwheel_set',$data,"`id`=1");
		$p=$this->M->affected_rows();
		if ($p>0) {
			echo 1;
		}else{
			echo -1;
		}		
		

}







	public function gift_set(){
		$sid=$this->sid;
		$arr=$this->M->get_all("SELECT * from `lx_kanjia_gift` where `sid`='".$sid."'");	
		$this->assign('list',$arr);
		$this->display("gift_set.html");
	}

	public function gift_do_add(){
		$data['sid']=$this->sid;
		$arr=$_POST;

		foreach ($arr as $key => $e) {
			$data[$key]=$e;
		}
		$data['begin_time']=strtotime($data['begin_time']);
		$data['end_time']=strtotime($data['end_time']);

		$data['status']=1;
		if ($data['name']=="谢谢参与") {
			$data['type']=-1;
		}		
		$this->M->insert('lx_kanjia_gift',$data);		
		$id=$this->M->insert_id();



		if ($id>0) {
			echo 1;
		}else{
			echo -1;
		}
		
	}

	public function gift_edit($id=''){



		$arr=$this->M->get_one("SELECT * from `lx_kanjia_gift` where `id`='".$id."'");
		
		$arr['begin_time']=date("Y-m-d H:i:s",$arr['begin_time']);
		$arr['end_time']=date("Y-m-d H:i:s",$arr['end_time']);

		$this->assign("list2",$arr);

		$this->display("gift_edit.html");
	}


	public function gift_do_edit($id=''){

		$arr=$_POST;
		foreach ($arr as $key => $e) {
			$data[$key]=$e;
		}
		$data['begin_time']=strtotime($data['begin_time']);
		$data['end_time']=strtotime($data['end_time']);
		$this->M->update('lx_kanjia_gift',$data,"`id`='".$id."'");
		
		$id=$this->M->affected_rows();

		echo 1;	
	}

	public function gift_do_delete(){
		$id=$_POST['id'];
		$this->M->query("DELETE from `lx_kanjia_gift` where `id`='".$id."'");
		$p=$this->M->affected_rows();
		if ($p>0) {
			echo 1;
		}else{
			echo -1;
		}
		
	}

	public function gift_do_enable(){
		$id=$_POST['id'];
		$sta=$_POST['sta'];
		$data['status']=($sta==1)?-1:1;
		$this->M->update('lx_kanjia_gift',$data,"`id`='".$id."'");
		$p=$this->M->affected_rows();
		if ($p>0) {
			echo 1;
		}else{
			echo -1;
		}
		
	}



/*
菜品设置
*/
public function dish_set(){
		$sid=$this->sid;
		$arr=$this->M->get_all("SELECT * from `lx_dish_list` where `sid`='".$sid."'");	
		$this->assign('list',$arr);
		$this->display("dish_set.html");

}

	public function dish_do_add(){
		$data['sid']=$this->sid;
		$arr=$_POST;

		foreach ($arr as $key => $e) {
			$data[$key]=$e;
		}


		$data['status']=1;
		$data['c_time']=time();
		
		$this->M->insert('lx_dish_list',$data);		
		$id=$this->M->insert_id();



		if ($id>0) {
			echo 1;
		}else{
			echo -1;
		}
		
	}

	public function dish_edit($id=''){



		$arr=$this->M->get_one("SELECT * from `lx_dish_list` where `id`='".$id."'");
		

		$this->assign("list2",$arr);

		$this->display("dish_edit.html");
	}


	public function dish_do_edit($id=''){

		$arr=$_POST;
		foreach ($arr as $key => $e) {
			$data[$key]=$e;
		}

		$this->M->update('lx_dish_list',$data,"`id`='".$id."'");
		
		$id=$this->M->affected_rows();

		echo 1;	
	}

	public function dish_do_delete(){
		$id=$_POST['id'];
		$this->M->query("DELETE from `lx_dish_list` where `id`='".$id."'");
		$p=$this->M->affected_rows();
		if ($p>0) {
			echo 1;
		}else{
			echo -1;
		}
		
	}

	public function dish_do_enable(){
		$id=$_POST['id'];
		$sta=$_POST['sta'];
		$data['status']=($sta==1)?-1:1;
		$this->M->update('lx_dish_list',$data,"`id`='".$id."'");
		$p=$this->M->affected_rows();
		if ($p>0) {
			echo 1;
		}else{
			echo -1;
		}
		
	}

public function payer_set(){
	$sid=$this->sid;	
	$arr=$this->M->get_one("SELECT * from `lx_payer` where `sid`='".$sid."'");
	$this->assign("list",$arr);
	$this->display("payer_set.html");
}

public function payer_do_set(){
		$data['sid']=$sid=$this->sid;
		$arr=$_POST;

		foreach ($arr as $key => $e) {
			$data[$key]=$e;
		}
		$arr2=$this->M->get_one("SELECT `id` from `lx_payer` where `sid`='".$sid."'");
		if ($arr2) {
			# code...
			$this->M->update('lx_payer',$data,"`id`=1");
		}else{
			$data['c_time']=time();
			$data['status']=1;
			$data['spbill_create_ip']='120.25.229.0';
			$this->M->insert('lx_payer',$data);
		}

		
		$id=$this->M->affected_rows();
		message("修改成功",R('lx/kanjia/payer_set'));exit;
		
		
	}
public function kanjia_payer_set(){
	$sid=$this->sid;	
	$arr=$this->M->get_one("SELECT * from `lx_kanjia_payer` where `sid`='".$sid."'");
	$arr2=$this->M->get_one("SELECT sum(`money`) as a from `lx_payer_list` where `sid`='".$sid."'");
	$s_money=$arr['total_money']-$arr2['a'];

	$this->assign("list",$arr);
	$this->assign("s_money",$s_money);
	$this->display("kanjia_payer_set.html");
}
public function kanjia_payer_do_set(){
		$data['sid']=$sid=$this->sid;
		$arr=$_POST;

		foreach ($arr as $key => $e) {
			$data[$key]=$e;
		}
		$arr2=$this->M->get_one("SELECT `id` from `lx_kanjia_payer` where `sid`='".$sid."'");
		if ($arr2) {
			# code...
			$this->M->update('lx_kanjia_payer',$data,"`sid`='".$sid."'");
		}else{
			$data['c_time']=time();
			$data['status']=1;
			$data['spbill_create_ip']='120.25.229.0';
			$this->M->insert('lx_kanjia_payer',$data);
		}

		
		$id=$this->M->affected_rows();
		message("修改成功",R('lx/kanjia/kanjia_payer_set'));exit;
		
		
	}






public function get_userinfo($uid=''){
	$arr=$this->M->get_one("SELECT * from `lx_user` where `id`='".$uid."'");
	return $arr;
}



	public function check_login(){
			$uid='';
			if(!is_sh_login()){
				R('lx/lx/login');return false;
			}else{
			$uid=is_sh_login();	
			
			}	
		$arr=$this->M->get_one("SELECT `grade` from `lx_sh_list` where `id`='".$uid."'");
		if ($arr['grade']==10) {
			return $uid;
		}else{
			R('lx/lx/login');return false;
		}

	}


	public function out(){
		session_destroy();
		R('lx/lx/login');exit;

	}


//随机抽奖
public function ra2(){
	for ($i=0; $i <100 ; $i++) { 
		$this->ra();
		echo '<br>';
	}
}

public function ra(){

	$prize_arr = array( 
	    '0' => array('id'=>1,'prize'=>'平板电脑','v'=>1), 
	    '1' => array('id'=>2,'prize'=>'数码相机','v'=>5), 
	    '2' => array('id'=>3,'prize'=>'音箱设备','v'=>10), 
	    '3' => array('id'=>4,'prize'=>'4G优盘','v'=>12), 
	    '4' => array('id'=>5,'prize'=>'10Q币','v'=>22), 
	    '5' => array('id'=>6,'prize'=>'下次没准就能中哦','v'=>50), 
	); 
	 
	print_r(get_prize($prize_arr));


}
//随机抽奖结束



}







 
