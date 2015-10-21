<?php
/**
 * 管理中心
 */

/**
* 
*/
class userController extends Controller
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
	public function user_list(){

		$arr=$this->M->get_all("SELECT * from `lx_user` order by `id` desc");
		
		foreach ($arr as $key => &$e) {
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

		$this->assign('list',$arr);
		

		$this->display("user_list.html");
	}

	public function base_do_set(){

		$arr=$_POST;
		foreach ($arr as $key => $e) {
			$data[$key]=$e;
		}

		$this->M->update('lx_bigwheel_set',$data,"`id`=1");
		
		$id=$this->M->affected_rows();
		message("修改成功",R('lx/admin/index'));exit;
		
		
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


}







 
