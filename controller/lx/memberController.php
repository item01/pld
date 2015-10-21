<?php
/**
 * 会员中心
 */

/**
* 
*/
class memberController extends Controller
{
	public $sid;
	function __construct()
	{	

		parent::__construct();
		$this->sid=$this->check_login();
		



	}
	public function index(){
		$this->display('index.html');
	}




/*会员卡设置*/
/**/
/**/
	
	public function card_list(){

		$sid=$this->sid;
		$arr=$this->M->get_all("SELECT * from `lx_member_card` where `sid`='".$sid."' order by `id` desc");
		foreach ($arr as $key => &$e) {
			$arr_f=$this->M->get_one("SELECT * from `lx_member_card_type` where `id`='".$e['card_type']."'");
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


		$arr2=$this->M->get_all("SELECT * from `lx_member_card_type` where `sid`='".$sid."' and `status`=1");

		$this->assign("type_list",$arr2);
		$this->assign("list",$arr);
		$this->display("card_list.html");
	}

	public function card_edit($id=''){

		$sid=$this->sid;

		$arr=$this->M->get_one("SELECT * from `lx_member_card` where `id`='".$id."' and `sid`='".$sid."'");
		$arr2=$this->M->get_all("SELECT * from `lx_member_card_type` where `sid`='".$sid."' and `status`=1");
		$this->assign("type_list",$arr2);
		$this->assign("list2",$arr);

		$this->display("card_edit.html");
	}

	public function card_do_add(){

		$arr=$_POST;
		foreach ($arr as $key => $e) {
			$data[$key]=$e;
		}
		$data['sid']=$this->sid;
		$data['status']=1;
		$this->M->insert('lx_member_card',$data);
		
		$id=$this->M->insert_id();
		if ($id>0) {
			echo 1;
		}else{
			echo -1;
		}
		
	}

	public function card_do_edit($id=''){

		$arr=$_POST;
		foreach ($arr as $key => $e) {
			$data[$key]=$e;
		}

		$this->M->update('lx_member_card',$data,"`id`='".$id."'");
		
		$id=$this->M->affected_rows();

		echo 1;	
	}

	public function card_do_delete(){
		$id=$_POST['id'];
		$this->M->query("DELETE from `lx_member_card` where `id`='".$id."'");
		$p=$this->M->affected_rows();
		if ($p>0) {
			echo 1;
		}else{
			echo -1;
		}
		
	}

	public function card_do_enable(){
		$id=$_POST['id'];
		$sta=$_POST['sta'];
		$data['status']=($sta==1)?-1:1;
		$this->M->update('lx_member_card',$data,"`id`='".$id."'");
		$p=$this->M->affected_rows();
		if ($p>0) {
			echo 1;
		}else{
			echo -1;
		}
		
	}

/*会员列表*/
public function member_list(){
		$sid=$this->sid;
		$arr=$this->M->get_all("SELECT * from `lx_member_list` where `sid`='".$sid."' order by `id` desc");
		foreach ($arr as $key => &$e) {
			$arr2=$this->M->get_one("SELECT * from `lx_member_card` where `id`='".$e['card_id']."'");
			$e['card']=$arr2;
			$arr3=$this->M->get_one("SELECT * from `lx_user` where `id`='".$e['uid']."'");
			$e['user_info']=$arr3;			
						
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
			$e['c_time']=date("Y-m-d H:i:s",$e['c_time']);
		}
		unset($e);
		$this->assign("list",$arr);
		$this->display("member_list.html");
}

public function use_record($id=""){
	$sid=$this->sid;
	$arr=$this->M->get_all("SELECT * from `lx_member_card_record` where `mid`='".$id."' order by `id` desc");
	foreach ($arr as $key => &$e) {
		$e['c_time']=date("Y-m-d H:i:s",$e['c_time']);
	}
	unset($e);
	$this->assign('list',$arr);
	$this->display("use_record.html");
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