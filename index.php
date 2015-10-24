<?php 
//入口文件
error_reporting(E_ALL);
ini_set("display_errors","On");


header('Content-Type:text/html;charset=utf-8;');
function is_weixin2(){ 
        if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false ) { 
                        return true; 
        }        
        return false; 
}
// if(!is_weixin2()){
// 	exit("请用手机微信浏览器打开");
// }
require dirname(__FILE__).'/system/app.php';
require dirname(__FILE__).'/config/config.php';
//require dirname(__FILE__).'/system/safe.php';

4214redgdf
gedrggdewdget 54326
2121
htyjtjsfsgdvbdf


Application::run($CG);
