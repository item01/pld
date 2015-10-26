
<?php
/**
 * index控制器
 * 
 * 
 */
class abcController extends Controller{

	
	public function __construct(){

		parent::__construct();
		error_reporting(E_ALL);



		 $this->assign("p",0);
  
	}



public function index(){
	echo "123";
	$this->display("index.html");
}





}