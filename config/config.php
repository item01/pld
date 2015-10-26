<?php 
/**
 * 系统配置文件
 * @copyright   Copyright(c) 2015
 * @author      wxy <wxyxxxxx@163.com>
 * @version     1.0
 */
//数据库配置
$CG['sys']['db']=array(
	'db_host'=>'127.0.0.1',
	'db_user'=>'root',
	'db_password'=>'root',
	'db_database'=>'lx_proty',
	'db_table_prefix'=>'lx_',
	'db_charset'=>'utf8',
    'db_conn'=>'',             //数据库连接标识; pconn 为长久链接，默认为即时链接
	);
$CG['sys']['route'] = array(
	'default_app'					 =>		'home',
    'default_controller'             =>      'index',  //系统默认控制器
    'default_action'                 =>      'index',  //系统默认控制器
    'url_type'                       =>      2          /*定义URL的形式 1 为普通模式    index.php?c=controller&a=action&id=2
                                                         *              2 为PATHINFO   index.php/controller/action/id/2(暂时不实现)                                                                       */                                                                           
);

//smarty 引擎配置
$CG['sys']['smarty']=array(
	'template_dir'            =>"/view/templets", 
	'compile_dir'=>'/view/templets_c', 
	'left_delimiter'=>'<{',
	'right_delimiter'=>'}>',
	);
$CG['sys']['lib']=array(
	'prefix'=>'lib'
	);

 	ini_set("session.save_handler", "user");
	ini_set("session.gc_maxlifetime", "600");
	ini_set("session.gc_probability ", "1000");
	ini_set("session.gc_divisor  ", "1000");