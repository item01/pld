<?php
/**
 * 管理中心
 */

/**
* 
*/
class yaohuiController extends Controller
{
	
	function __construct()
	{	

		parent::__construct();
		$this->check_login();

	}
	public function index(){
		$this->display('index.html');
	}

/*红包参数设置*/
	public function yaohui_set(){

		$arr=$this->M->get_all("SELECT * from `lx_yaohui_product`");
	


		$this->assign('list',$arr);
	

		$this->display("yaohui_set.html");
	}

	public function ryaohui_do_set(){

		$arr=$_POST;
		foreach ($arr as $key => $e) {
			$data[$key]=$e;
		}

		$this->M->update('lx_packet_set',$data,"`id`=1");
		
		$id=$this->M->affected_rows();
		message("修改成功",R('lx/admin/index'));exit;
		
		
	}

	/*红包发放记录*/
public function record_list(){
	$arr=$this->M->get_all("SELECT * from `lx_yaohui_record` order by id desc");

	foreach ($arr as $key => &$e) {
		$arr_f1=$this->get_userinfo($e['uid']);
		$arr_f2=$this->M->get_one("SELECT * from `lx_yaohui_product` where `id`='".$e['p_id']."'");
		$e['uname']=$arr_f1['nickname'];
		$e['pname']=$arr_f2['product_name'];
		$e['c_time']=date("Y-m-d H:i:s",$e['c_time']);
	}
	unset($e);

	$this->assign('list',$arr);
	$this->display("yaohui_record_list.html");
}


	public function yaohui_fans(){
		$arr=$this->M->get_all("SELECT DISTINCT `uid` from `lx_yaohui_record` order by `id` desc");

		foreach ($arr as $key => &$e) {
			$arr_f1=$this->get_userinfo($e['uid']);
			
			$e['uname']=$arr_f1['nickname'];
			$e['id']=$arr_f1['id'];
			$e['status']=$arr_f1['status'];
			$e['openid']=$arr_f1['openid'];
			$e['province']=$arr_f1['province'];
			$e['city']=$arr_f1['city'];
			$e['country']=$arr_f1['country'];
			$e['sex']=$arr_f1['sex'];
			switch ($e['sex']) {
				case 1:
					$e['sex']='男';
					break;
				case 2:
					$e['sex']='女';
					break;				
				default:
					$e['sex']='未知';
					break;
			}
			
			
		}
		unset($e);		

		$this->assign("list",$arr);
		$this->display('yaohui_fans.html');
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

	public function yaohui_edit($id=''){



		$arr=$this->M->get_one("SELECT * from `lx_yaohui_product` where `id`='".$id."'");
		

		$this->assign("list2",$arr);

		$this->display("yaohui_edit.html");
	}

	public function yaohui_do_add(){

		$arr=$_POST;
		foreach ($arr as $key => $e) {
			$data[$key]=$e;
		}
		$data['status']=1;
		$this->M->insert('lx_yaohui_product',$data);
		
		$id=$this->M->insert_id();
		if ($id>0) {
			echo 1;
		}else{
			echo -1;
		}
		
	}

	public function yaohui_do_edit($id=''){

		$arr=$_POST;
		foreach ($arr as $key => $e) {
			$data[$key]=$e;
		}

		$this->M->update('lx_yaohui_product',$data,"`id`='".$id."'");
		
		$id=$this->M->affected_rows();

		echo 1;	
	}

	public function yaohui_do_delete(){
		$id=$_POST['id'];
		$this->M->query("DELETE from `lx_yaohui_product` where `id`='".$id."'");
		$p=$this->M->affected_rows();
		if ($p>0) {
			echo 1;
		}else{
			echo -1;
		}
		
	}

	public function yaohui_do_enable(){
		$id=$_POST['id'];
		$sta=$_POST['sta'];
		$data['status']=($sta==1)?-1:1;
		$this->M->update('lx_yaohui_product',$data,"`id`='".$id."'");
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





public function get_userinfo($uid=''){
	$arr=$this->M->get_one("SELECT * from `lx_user` where `id`='".$uid."'");
	return $arr;
}



	public function check_login(){
		$uid='';
			if(!is_login()){
				R('lx/lx/login');return false;
			}else{
			$uid=is_login();	
			
			}	
		$arr=$this->M->get_one("SELECT `grade` from `lx_admin` where `id`='".$uid."'");
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







 
