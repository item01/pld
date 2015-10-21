<?php
/**
 * 管理中心
 */

/**
* 
*/
class baseConfigController extends Controller
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
	public function base_set(){

		$arr=$this->M->get_all("SELECT * from `lx_bigwheel_prize`");
		$arr2=$this->M->get_one("SELECT * from `lx_bigwheel_set` where `id`=1");


		$this->assign('list',$arr);
		$this->assign('list2',$arr2);

		$this->display("base_set.html");
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





}







 
