<?php
/**
 * 砍价控制器
 */

/**
* 
*/
class orderController extends Controller
{
	
	public $sid;
	function __construct()
	{	

		parent::__construct();
		$this->sid=$this->check_login();
		$this->assign('sid',$this->sid);
		$_POST=str_safe($_POST);
		error_reporting(E_ALL);		
	}
	public function index(){
		$this->display('index.html');
	}

/*红包参数设置*/

	public function category_set(){
		$sid=$this->sid;
		$arr=$this->M->get_all("SELECT * from `lx_order_category` where `sid`='".$sid."'");	

		foreach ($arr as $key => &$e) {

			switch ($e['status']) {
				case 0:
					$e['w_status']='正常';
					break;
				case 1:
					$e['w_status']='正常';
					break;	
				case -1:
					$e['w_status']='已禁用';
					break;								
				default:
					$e['w_status']='正常';
					break;
			}
		}
		unset($e);

		
		$this->assign('list',$arr);
		$this->display("category_set.html");
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



	public function category_edit($id=''){



		$arr=$this->M->get_one("SELECT * from `lx_order_category` where `id`='".$id."'");

		$this->assign("list2",$arr);

		$this->display("category_edit.html");
	}


	public function category_do_add(){
		$data['sid']=$this->sid;
		$arr=$_POST;


		foreach ($arr as $key => $e) {
			$data[$key]=$e;
		}

		$data['c_time']=time();
		$data['status']=1;	
		$this->M->insert('lx_order_category',$data);
		$id=$this->M->insert_id();
	




		if ($id>0) {
			echo 1;
		}else{
			echo -1;
		}
		
	}

	public function category_do_edit($id=''){
		$sid=$this->sid;
		$arr=$_POST;
		foreach ($arr as $key => $e) {
			$data[$key]=$e;
		}
	


		$this->M->update('lx_order_category',$data,"`id`='".$id."'");
		
		$id=$this->M->affected_rows();

		echo 1;	
	}

	public function category_do_delete(){
		$id=$_POST['id'];
		$this->M->query("DELETE from `lx_order_category` where `id`='".$id."'");
		$p=$this->M->affected_rows();
		if ($p>0) {
			echo 1;
		}else{
			echo -1;
		}
		
	}

	public function category_do_enable(){
		$id=$_POST['id'];
		$sta=$_POST['sta'];
		$data['status']=($sta==1)?-1:1;
		$this->M->update('lx_order_category',$data,"`id`='".$id."'");
		$p=$this->M->affected_rows();
		if ($p>0) {
			echo 1;
		}else{
			echo -1;
		}
		
	}






	public function dish_list(){
		$sid=$this->sid;
		$arr=$this->M->get_all("SELECT * from `lx_order_dish` where `sid`='".$sid."'");	

		$this->get_category($sid);

		foreach ($arr as $key => &$e) {

			switch ($e['status']) {
				case 0:
					$e['w_status']='正常';
					break;
				case 1:
					$e['w_status']='正常';
					break;	
				case -1:
					$e['w_status']='已禁用';
					break;								
				default:
					$e['w_status']='正常';
					break;
			}

			switch ($e['is_over']) {
				case 0:
					$e['is_over_2']='正常出售';
					break;
				case 1:
					$e['is_over_2']='正常出售';
					break;	
				case -1:
					$e['is_over_2']='卖光了';
					break;								
				default:
					$e['is_over_2']='正常';
					break;
			}

		}
		unset($e);

		
		$this->assign('list',$arr);
		$this->display("dish_list.html");
	}


	public function dish_edit($id=''){

		$sid=$this->sid;
		$this->get_category($sid);
		$arr=$this->M->get_one("SELECT * from `lx_order_dish` where `id`='".$id."'");

		$this->assign("list2",$arr);

		$this->display("dish_edit.html");
	}


	public function dish_do_add(){
		$data['sid']=$this->sid;
		$arr=$_POST;


		foreach ($arr as $key => $e) {
			$data[$key]=$e;
		}

		$data['c_time']=time();
		$data['status']=1;	
		$data['is_over']=1;	
		$this->M->insert('lx_order_dish',$data);
		$id=$this->M->insert_id();
	
		if ($id>0) {
			echo 1;
		}else{
			echo -1;
		}
		
	}

	public function dish_do_edit($id=''){
		$sid=$this->sid;
		$arr=$_POST;
		foreach ($arr as $key => $e) {
			$data[$key]=$e;
		}
	
		$this->M->update('lx_order_dish',$data,"`id`='".$id."'");
		
		$id=$this->M->affected_rows();

		echo 1;	
	}

	public function dish_do_delete(){
		$id=$_POST['id'];
		$this->M->query("DELETE from `lx_order_dish` where `id`='".$id."'");
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
		$this->M->update('lx_order_dish',$data,"`id`='".$id."'");
		$p=$this->M->affected_rows();
		if ($p>0) {
			echo 1;
		}else{
			echo -1;
		}
		
	}

	public function dish_do_over(){
		$id=$_POST['id'];
		$sta=$_POST['sta'];
		$data['is_over']=($sta==1)?-1:1;
		$this->M->update('lx_order_dish',$data,"`id`='".$id."'");
		$p=$this->M->affected_rows();
		if ($p>0) {
			echo 1;
		}else{
			echo -1;
		}
		
	}

/////////////////////////

	public function table_list(){
		$sid=$this->sid;
		$arr=$this->M->get_all("SELECT * from `lx_order_table` where `sid`='".$sid."'");	

		

		foreach ($arr as $key => &$e) {

			switch ($e['status']) {
				case 0:
					$e['w_status']='正常';
					break;
				case 1:
					$e['w_status']='正常';
					break;	
				case -1:
					$e['w_status']='已禁用';
					break;								
				default:
					$e['w_status']='正常';
					break;
			}
		}
		unset($e);

		
		$this->assign('list',$arr);
		$this->display("table_list.html");
	}


	public function table_edit($id=''){

		$sid=$this->sid;
		$this->get_category($sid);
		$arr=$this->M->get_one("SELECT * from `lx_order_table` where `id`='".$id."'");

		$this->assign("list2",$arr);

		$this->display("table_edit.html");
	}


	public function table_do_add(){
		$data['sid']=$this->sid;
		$arr=$_POST;
		foreach ($arr as $key => $e) {
			$data[$key]=$e;
		}

		$data['c_time']=time();
		$data['status']=1;	
		$this->M->insert('lx_order_table',$data);
		$id=$this->M->insert_id();	
		if ($id>0) {
			echo 1;
		}else{
			echo -1;
		}
		
	}

	public function table_do_edit($id=''){
		$sid=$this->sid;
		$arr=$_POST;
		foreach ($arr as $key => $e) {
			$data[$key]=$e;
		}
	
		$this->M->update('lx_order_table',$data,"`id`='".$id."'");
		
		$id=$this->M->affected_rows();

		echo 1;	
	}

	public function table_do_delete(){
		$id=$_POST['id'];
		$this->M->query("DELETE from `lx_order_table` where `id`='".$id."'");
		$p=$this->M->affected_rows();
		if ($p>0) {
			echo 1;
		}else{
			echo -1;
		}
		
	}

	public function table_do_enable(){
		$id=$_POST['id'];
		$sta=$_POST['sta'];
		$data['status']=($sta==1)?-1:1;
		$this->M->update('lx_order_table',$data,"`id`='".$id."'");
		$p=$this->M->affected_rows();
		if ($p>0) {
			echo 1;
		}else{
			echo -1;
		}
		
	}




//////////////////////


	public function banner_list(){
		$sid=$this->sid;
		$arr=$this->M->get_all("SELECT * from `lx_order_banner` where `sid`='".$sid."'");	

		

		foreach ($arr as $key => &$e) {

			switch ($e['status']) {
				case 0:
					$e['w_status']='正常';
					break;
				case 1:
					$e['w_status']='正常';
					break;	
				case -1:
					$e['w_status']='已禁用';
					break;								
				default:
					$e['w_status']='正常';
					break;
			}
		}
		unset($e);

		
		$this->assign('list',$arr);
		$this->display("banner_list.html");
	}


	public function banner_edit($id=''){

		$sid=$this->sid;
		$this->get_category($sid);
		$arr=$this->M->get_one("SELECT * from `lx_order_banner` where `id`='".$id."'");

		$this->assign("list2",$arr);

		$this->display("banner_edit.html");
	}


	public function banner_do_add(){
		$data['sid']=$this->sid;
		$arr=$_POST;
		foreach ($arr as $key => $e) {
			$data[$key]=$e;
		}

		$data['c_time']=time();
		$data['status']=1;	
		$this->M->insert('lx_order_banner',$data);
		$id=$this->M->insert_id();	
		if ($id>0) {
			echo 1;
		}else{
			echo -1;
		}
		
	}

	public function banner_do_edit($id=''){
		$sid=$this->sid;
		$arr=$_POST;
		foreach ($arr as $key => $e) {
			$data[$key]=$e;
		}
	
		$this->M->update('lx_order_banner',$data,"`id`='".$id."'");
		
		$id=$this->M->affected_rows();

		echo 1;	
	}

	public function banner_do_delete(){
		$id=$_POST['id'];
		$this->M->query("DELETE from `lx_order_banner` where `id`='".$id."'");
		$p=$this->M->affected_rows();
		if ($p>0) {
			echo 1;
		}else{
			echo -1;
		}
		
	}

	public function banner_do_enable(){
		$id=$_POST['id'];
		$sta=$_POST['sta'];
		$data['status']=($sta==1)?-1:1;
		$this->M->update('lx_order_banner',$data,"`id`='".$id."'");
		$p=$this->M->affected_rows();
		if ($p>0) {
			echo 1;
		}else{
			echo -1;
		}
		
	}








//////////////////////







public function get_category($sid=""){
	$arr=$this->M->get_all("SELECT * from `lx_order_category` where `sid`='".$sid."'");
	$this->assign("c_list",$arr);
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




}







 
