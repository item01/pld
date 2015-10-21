<?php
/**
 * 管理中心
 */

/**
* 
*/
class adminController extends Controller
{
	public $sid;
	function __construct()
	{	

		parent::__construct();
		$this->sid=$this->check_login();
		$this->assign("sid",$this->sid);		
	}

	public function index(){

		$sid=$this->sid;
		$arr1=$this->M->get_one("SELECT count(`id`) as a from `lx_bigwheel_fans` where `sid`='".$sid."'");
		$arr2=$this->M->get_one("SELECT count(`id`) as a from `lx_kanjia_fans` where `sid`='".$sid."'");
		//$arr1=$this->M->get_one("SELECT count(`id`) from `lx_bigwheel_fans` where `sid`='".$sid."'");

		$this->assign("bigwheel_num",$arr1['a']);
		$this->assign("kanjia_num",$arr2['a']);
		$this->display('index.html');
	}

/*红包参数设置*/
	public function red_packet_set(){

		$arr=$this->M->get_one("SELECT * from `lx_packet_set` where `id`=1");
		$arr['s_time']=date("Y-m-d H:i:s",$arr['s_time']);
		$arr['end_time']=date("Y-m-d H:i:s",$arr['end_time']);
		$this->assign('list',$arr);

		$this->display("red_packet_set.html");
	}

	public function red_packet_do_set(){

		$arr=$_POST;
		foreach ($arr as $key => $e) {
			$data[$key]=$e;
		}
		$data['s_time']=strtotime($data['s_time']);
		$data['end_time']=strtotime($data['end_time']);

		$this->M->update('lx_packet_set',$data,"`id`=1");
		
		$id=$this->M->affected_rows();
		message("修改成功",R('lx/admin/index'));exit;
		
		
	}

	/*红包发放记录*/
	public function red_packet_list(){
		$arr=$this->M->get_all("SELECT * from `lx_packet` order by `id` desc");
		$w_total=$w_s_count=0;
		foreach ($arr as $key => &$e) {
			$e['c_time']=date('Y-m-d H:i:s',$e['c_time']);
			$e['money']=$e['money']*0.01;
			$arr2=$this->M->get_one("SELECT * from `lx_user` where `id`='".$e['uid']."'");
			$e['uname']=$arr2['nickname'];
			switch ($e['status']) {
				case 1:
					$e['status']='已发放';
					$w_total=$w_total+$e['money'];
					$w_s_count++;
					break;
				case 2:
					$e['status']='已领取';
					break;
				case -1:
					$e['status']='发放失败';
					break;									
				default:
					$e['status']='发放失败';
					break;
			}
		}
		unset($e);

		$this->assign("list",$arr);
		$this->assign("w_total",$w_total);
		$this->assign("w_s_count",$w_s_count);

		$this->display('red_packet_list.html');
	}







/*卡券管理*/
/**/
/**/
	
	public function ticket_manage(){

		$sid=$this->sid;
		$arr=$this->M->get_all("SELECT * from `lx_ticket_list` where `sid`='".$sid."' order by `id` desc");
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

	public function ticket_edit($id=''){

		$sid=$this->sid;

		$arr=$this->M->get_one("SELECT * from `lx_ticket_list` where `id`='".$id."' and `sid`='".$sid."'");
		$arr2=$this->M->get_all("SELECT * from `lx_ticket_type`");
		$arr['begin_time']=date("Y-m-d H:i:s",$arr['begin_time']);
		$arr['end_time']=date("Y-m-d H:i:s",$arr['end_time']);		
		$this->assign("type_list",$arr2);
		$this->assign("list2",$arr);

		$this->display("ticket_edit.html");
	}

	public function ticket_do_add(){
		$data['sid']=$this->sid;
		$arr=$_POST;
		foreach ($arr as $key => $e) {
			$data[$key]=$e;
		}
		$data['begin_time']=strtotime($data['begin_time']);
		$data['end_time']=strtotime($data['end_time']);
		$data['sid']=$this->sid;
		$data['status']=1;
		$this->M->insert('lx_ticket_list',$data);
		
		$id=$this->M->insert_id();
		if ($id>0) {
			echo 1;
		}else{
			echo -1;
		}
		
	}

	public function ticket_do_edit($id=''){
		$data['sid']=$this->sid;
		$arr=$_POST;
		foreach ($arr as $key => $e) {
			$data[$key]=$e;
		}
		$data['begin_time']=strtotime($data['begin_time']);
		$data['end_time']=strtotime($data['end_time']);
		$this->M->update('lx_ticket_list',$data,"`id`='".$id."'");
		
		$id=$this->M->affected_rows();

		echo 1;	
	}

	public function ticket_do_delete(){
		$id=$_POST['id'];
		$this->M->query("DELETE from `lx_ticket_list` where `id`='".$id."'");
		$p=$this->M->affected_rows();
		if ($p>0) {
			echo 1;
		}else{
			echo -1;
		}
		
	}

	public function ticket_do_enable(){
		$id=$_POST['id'];
		$sta=$_POST['sta'];
		$data['status']=($sta==1)?-1:1;
		$this->M->update('lx_ticket_list',$data,"`id`='".$id."'");
		$p=$this->M->affected_rows();
		if ($p>0) {
			echo 1;
		}else{
			echo -1;
		}
		
	}
	public function ticket_send_list(){
		$id=$_POST['id'];
		$sta=$_POST['sta'];
		$data['status']=($sta==1)?-1:1;
		$this->M->update('lx_ticket_list',$data,"`id`='".$id."'");
		$p=$this->M->affected_rows();
		if ($p>0) {
			echo 1;
		}else{
			echo -1;
		}
		
	}	






	public function check_login(){
		$uid='';

			if(!is_sh_login()){
				R('lx/lx/login');return false;
			}else{
			$uid=is_sh_login();	
			
			}	
		$arr=$this->M->get_one("SELECT `grade` from `lx_sh_list` where `id`='".$uid."'");
		if ($arr['grade']>=10) {
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