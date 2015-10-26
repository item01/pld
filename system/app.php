<?php
header('Content-Type:text/html;charset=utf-8;');
/**
 * 应用驱动类
 * @copyright   Copyright(c) 2015
 * @author      wxy <wxyxxxxx@163.com>
 * @version     1.0
 */

$url='http://'.$_SERVER['HTTP_HOST'];

define('SYSTEM_PATH', dirname(__FILE__));
define('ROOT_PATH',  substr(SYSTEM_PATH, 0,-7));
define('SYS_LIB_PATH', SYSTEM_PATH.'/lib');
define('APP_LIB_PATH', ROOT_PATH.'/lib');
define('SYS_CORE_PATH', SYSTEM_PATH.'/core');
define('CONTROLLER_PATH', ROOT_PATH.'/controller');
define('MODEL_PATH', ROOT_PATH.'/model');
define('VIEW_PATH', ROOT_PATH.'/view');
define('LOG_PATH', ROOT_PATH.'/error/');
define('TEMPLETS',$url.'/view/templets');
define('SYS_COMMON_PATH', SYSTEM_PATH.'/common');
define('URL', $url);

final class Application {
	public static $_lib=null;
	public static $templets=null;
	public static $_config=null;

	public static function init(){
		self::setAutoLibs();
		require SYS_CORE_PATH."/model.php";
		require SYS_CORE_PATH."/controller.php";
		//require SYS_CORE_PATH."/wxcontroller.php";
		require (SYSTEM_PATH.'/Smarty/Smarty.class.php');
		require SYS_COMMON_PATH."/function.php";
		$smarty = new Smarty();
		$smarty -> template_dir = ROOT_PATH.self::$_config['smarty']['template_dir']; //模板存放目录 
		$smarty -> compile_dir = ROOT_PATH.self::$_config['smarty']['compile_dir']; //编译目录 
		$smarty -> left_delimiter = self::$_config['smarty']['left_delimiter']; //左定界符 
		$smarty -> right_delimiter = self::$_config['smarty']['right_delimiter']; //右定界符 

		self::$templets=$smarty;			
		self::$templets->assign('root',ROOT_PATH);//模板目录
		self::$templets->assign('url',URL);//模板目录

	}
	/**
	 *创建应用 
	 */
	public static function run($cg){

		self::$_config=$cg['sys'];
		self::init();
		self::autoload();		
		self::$_lib['route']->setUrlType(self::$_config['route']['url_type']);		
		$url_array=self::$_lib['route']->getUrlArray();
		self::routeToCm($url_array);

	
	}
	/**
	 * 自动加载类
	 * 
	 */
	public static function autoload(){
		foreach (self::$_lib as $key => $value) {
			require ($value);
			$lib=ucfirst($key);
			self::$_lib[$key]=new $lib;
		}
	} 

	/**
	 * 加载类库
	 */
	public static function newLib($class_name){
		$app_lib=$sys_lib="";
		$app_lib=APP_LIB_PATH.'/'.self::$_config['lib']['prefix'].'_'.$class_name.'.php';
		$sys_lib = SYS_LIB_PATH.'/lib_'.$class_name.'.php';
		if (file_exists($app_lib)) {
			require ($app_lib);
			$class_name=ucfirst($class_name);
			return new $class_name;
		}else if (file_exists($sys_lib)) {
			require ($sys_lib);
			return self::$_lib['$class_name']=new $class_name;
		}else{
			trigger_error('加载 '.$class_name.' 类库不存在');
		}

	}
	/**
	 * 自动加载类库
	 */
	public static function setAutoLibs(){
		self::$_lib=array(
			'route'		=>		SYS_LIB_PATH.'/lib_route.php',
			'db' 	=>		SYS_LIB_PATH.'/lib_db.php',
			's_session'=>SYS_LIB_PATH.'/lib_s_session.php'
			

		);
	}

	/**
	 * 根据URL分发到Controller和Model
	 */
	public static function routeToCm($url_array= array()){
//var_dump($url_array);
		$app="";
		$controller='';
		$action='';
		$model='';
		$params='';
// echo $app;exit;
		//$app=isset($url_array['app'])?$url_array['app']:'';
		if (isset($url_array['app'])) {
			$app=$url_array['app'];

		}else{
			$app=self::$_config['route']['default_app'];
		}


		if (isset($url_array['controller'])) {
			$controller=$model=$url_array['controller'];
			
		}else{
			$controller=$model=self::$_config['route']['default_controller'];
		}
		global $sm;
		$sm=isMobile();
		if (isset($_GET['ismb'])&&$_GET['ismb']==1) {
			$sm=1;
		}
		$sm=0;
		
		if ($sm) {
			self::$_config['smarty']['template_dir'].='/mobile_'.$app.'/'.$controller;
			self::$templets->assign('templets',TEMPLETS.'/mobile_'.$app);//模板目录
		}else{

			self::$_config['smarty']['template_dir'].='/'.$app.'/'.$controller;
			self::$templets->assign('templets',TEMPLETS.'/'.$app);//模板目录
		}
		self::$templets-> template_dir = ROOT_PATH.self::$_config['smarty']['template_dir'];
		
		
		
		//$controller=isset($url_array['controller'])?$url_array['controller']:'';		

		if ($app) {
			$controller_file=CONTROLLER_PATH.'/'.$app.'/'.$controller.'Controller.php';
			$model_file=MODEL_PATH.'/'.$app.'/'.$model.'Model.php';

		}else{
			$controller_file=CONTROLLER_PATH.'/'.$controller.'Controller.php';
			$model_file=MODEL_PATH.'/'.$app.'/'.$model.'Model.php';
		}
		
		$action=isset($url_array['action'])?$url_array['action']:self::$_config['route']['default_action'];
		$params=isset($url_array['params'])?$url_array['params']:'';
		if (file_exists($controller_file)) {
			if (file_exists($model_file)) {
				require $model_file;
				//$model=$model.'Model';
				 //$M=new $model;

			}
			require $controller_file;

			$controller=$controller.'Controller';
			$controller=new $controller;
			if ($action) {
				if (method_exists($controller,$action)) {


//参数绑定开始

		$ref = new ReflectionMethod($controller,$action);//获取方法反射
		$p_params=$ref->getParameters();//获取方法参数
		if($p_params){
          foreach ($p_params as $param){
             $name = $param->getName();
             if (isset($params[$name])) {
 				$args[] =   $params[$name];
                
              }elseif ($param->isDefaultValueAvailable()) {
              	$args[]=$param->getDefaultValue();
              }else{
              	die('参数-- 【'.$name.'】 --错误或未定义');
              }
             
            }
          }else{
          	$args=array();
          }
         
          $ref->invokeArgs($controller,$args);//执行方法
//结束


					//isset($params)?$controller->$action($params):$controller->$action;

				}else{
					die('控制器方法不存在');
				}
			}else{
				die('控制器方法不存在');
			}
		}else{
			die('控制器不存在');
		}

	}
}