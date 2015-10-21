<?php
/**
 * 管理中心
 */

/**
* 
*/
class bigwheelController extends Controller
{
	
	public $sid;
	function __construct()
	{	

		parent::__construct();
		header('Content-Type: text/html; charset=utf-8');		
		$this->sid=$this->check_login();
	}

	public function index(){
		$this->display('index.html');
	}

/*参数设置*/
	public function bigwheel_set(){
		$sid=$this->sid;
		$arr=$this->M->get_all("SELECT * from `lx_bigwheel_prize` where `sid`='".$sid."'");
		$arr2=$this->M->get_one("SELECT * from `lx_bigwheel_set` where `sid`='".$sid."'");
		//$arr3=$this->M->get_all("SELECT * from `lx_ticket_list` where `sid`='".$sid."'");
		foreach ($arr as $key => &$e) {
			switch ($e['status']) {
				case 1:
					$e['status_r']='正常';
					break;
				case -1:
					$e['status_r']='禁用';
					break;				
				default:
					$e['status_r']='正常';
					break;
			}
			$e['ticket']=$this->M->get_one("SELECT * from `lx_ticket_list` where `id`='".$e['pid']."'");
			
		}
		unset($e);

		$this->assign('list',$arr);
		$this->assign('list2',$arr2);

		$this->display("bigwheel_set.html");
	}

	public function bigwheel_do_set(){
		
		$arr=$_POST;
		foreach ($arr as $key => $e) {
			$data[$key]=$e;
		}
		$data['sid']=$sid=$this->sid;


		$pp=$this->M->get_one("SELECT * from `lx_bigwheel_set` where `sid`='".$sid."'");
		if ($pp) {
			# code...
			$this->M->update('lx_bigwheel_set',$data,"`sid`='".$sid."'");
		}else{
			$this->M->insert('lx_bigwheel_set',$data);
		}
		
		$id=$this->M->affected_rows();
		message("修改成功",R('lx/admin/index'));exit;
		
		
	}

	/*记录*/
	public function bigwheel_record(){
		$sid=$this->sid;
		$arr=$this->M->get_all("SELECT * from `lx_bigwheel_record` where `sid`='".$sid."' order by `id` desc");
		$num_t=count($arr);
		$n=0;
		foreach ($arr as $key => &$e) {
			$e['c_time']=date('Y-m-d H:i:s',$e['c_time']);
			
			$arr2=$this->M->get_one("SELECT * from `lx_user` where `id`='".$e['uid']."'");

			$arr22=$this->M->get_one("SELECT * from `lx_bigwheel_prize` where `id`='".$e['prize_id']."'");
			$arr23=$this->M->get_one("SELECT * from `lx_ticket_list` where `id`='".$arr22['pid']."'");
			if ($arr22['prizetype']==3) {
				$n++;
			}

			$e['pname']=$arr23['name']?$arr23['name']:"谢谢参与";
		

			$e['uname']=$arr2['nickname'];
			switch ($e['status']) {
				case 1:
					$e['status']='未兑换';

					break;
				case 2:
					$e['status']='已兑换';
					break;
				case -1:
					$e['status']='已失效';
					break;									
				default:
					$e['status']='发放失败';
					break;
			}
		}
		unset($e);
		$num_z=$num_t-$n;
		$this->assign("list",$arr);
		$this->assign("num_z",$num_z);
		$this->assign("num_t",$num_t);


		$this->display('bigwheel_record.html');
	}

	public function bigwheel_fans(){
		$sid=$this->sid;
		$arr=$this->M->get_all("SELECT * from `lx_bigwheel_fans` where `sid`='".$sid."' order by `id` desc");
		$num=count($arr);
		foreach ($arr as $key => &$e) {
			$arr3=$this->M->get_one("SELECT * from `lx_user` where `id`='".$e['uid']."'");
			$e['uname']=$arr3['nickname'];			
			$e['headimgurl']=$arr3['headimgurl'];	
		
		}
		unset($e);
		$this->assign("list",$arr);
		$this->assign("num",$num);
		$this->display('bigwheel_fans.html');
	}

	public function fans_do_enable(){
		$id=$_POST['id'];
		$sta=$_POST['sta'];
		$data['rank']=($sta==1)?0:1;
		$this->M->update('lx_bigwheel_fans',$data,"`id`='".$id."'");
		$p=$this->M->affected_rows();
		if ($p>0) {
			echo 1;
		}else{
			echo -1;
		}
		
	}







/*卡券管理*/
/**/
/**/
	


	public function prize_edit($id=''){
		$sid=$this->sid;
		$arr=$this->M->get_one("SELECT * from `lx_bigwheel_prize` where `id`='".$id."'");	
		if ($arr['prizetype']==1) {
			$arr3=$this->M->get_all("SELECT * from `lx_ticket_list` where `sid`='".$sid."'");

		}	
		$arr['start_time']=date('Y-m-d H:i:s',$arr['start_time']);
		$arr['end_time']=date('Y-m-d H:i:s',$arr['end_time']);
		$this->assign("list3",$arr3);	
		$this->assign("list2",$arr);
		$this->display("bigwheel_prize_edit.html");

	}

	public function prize_do_add(){
		$data['sid']=$this->sid;
		$arr=$_POST;
		foreach ($arr as $key => $e) {
			$data[$key]=$e;
		}
		$data['start_time']=strtotime($data['start_time']);
		$data['end_time']=strtotime($data['end_time']);
		$data['status']=1;
		$this->M->insert('lx_bigwheel_prize',$data);
		
		$id=$this->M->insert_id();
		if ($id>0) {
			echo 1;
		}else{
			echo -1;
		}
		
	}

	public function prize_do_edit($id=''){
		$data['sid']=$this->sid;
		$arr=$_POST;
		foreach ($arr as $key => $e) {
			$data[$key]=$e;
		}
		$data['start_time']=strtotime($data['start_time']);
		$data['end_time']=strtotime($data['end_time']);
		$this->M->update('lx_bigwheel_prize',$data,"`id`='".$id."'");
		
		$id=$this->M->affected_rows();

		echo 1;	
	}

	public function prize_do_delete(){
		$id=$_POST['id'];
		$this->M->query("DELETE from `lx_bigwheel_prize` where `id`='".$id."'");
		$p=$this->M->affected_rows();
		if ($p>0) {
			echo 1;
		}else{
			echo -1;
		}
		
	}

	public function prize_do_enable(){
		$id=$_POST['id'];
		$sta=$_POST['sta'];
		$data['status']=($sta==1)?-1:1;
		$this->M->update('lx_bigwheel_prize',$data,"`id`='".$id."'");
		$p=$this->M->affected_rows();
		if ($p>0) {
			echo 1;
		}else{
			echo -1;
		}
		
	}

public function prize_do_set(){
		$arr=$_POST;
		foreach ($arr as $key => $e) {
			$data[$key]=$e;
		}
		$data['sid']=$sid=$this->sid;


		$pp=$this->M->get_one("SELECT * from `lx_bigwheel_set` where `sid`='".$sid."'");
		if ($pp) {
			# code...
			$this->M->update('lx_bigwheel_set',$data,"`sid`='".$sid."'");
		}else{
			$this->M->insert('lx_bigwheel_set',$data);
		}

		// $this->M->update('lx_bigwheel_set',$data,"`sid`='".$sid."'");
		// $p=$this->M->affected_rows();
		// if ($p>0) {
		// 	echo 1;
		// }else{
		// 	echo -1;
		// }	
		echo 1;	
		

}

public function get_prize($type_id=''){
	$sid=$this->sid;
	switch ($type_id) {
		case 1:
			$arr=$this->M->get_all("SELECT * from `lx_ticket_list` where `sid`='".$sid."'");
			break;
		case 2:
			$arr=$this->M->get_all("SELECT * from `lx_packet_list` where `sid`='".$sid."'");
			break;		
		case 3:
			$arr[0]['name']='谢谢参与';
			$arr[0]['id']=-1;
			break;				
		default:
			# code...
			break;
	}

	$str='';
	  
	foreach ($arr as $key => $e) {
		$str=$str."<option value='".$e['id']."'>".$e['name']."</option>";
	}
	echo $str;

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







 
