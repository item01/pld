<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/10/26 0026
 * Time: ���� 9:13
 */
class userController extends Controller{

    public function __construct() {
        parent::__construct();
        error_reporting(0);
       // $this->get_help ();
        // $this->QQ_callback();
       // $this->get_set ();

       // $this->assign ( "p", 0 );
    }

    public function index(){
        $this->display("vip.html");
    }
    public function vip_dingdan(){
        $this->display("vip_dingdan.html");
    }
    public function vip_shoucang(){
        $this->display("vip_shoucang.html");
    }
    public function vip_jifen(){
        //$this->assign ( "p", 0 );
        $this->display("vip_jifen.html");
    }
    public function vip_shaidan(){

        $this->display("vip_shaidan.html");
    }
    public function vip_yuyue(){
        $this->display("vip_yuyue.html");
    }
    public function vip_GRziliao(){
        $this->display("vip_GRziliao.html");
    }
    public function vip_anquan(){
        $this->display("vip_anquan.html");
    }
    public function vip_anquan_xiugai_mima(){
        $this->display("vip_anquan_xiugai_mima.html");
    }
    public function vip_ziliao(){
        $this->display("vip_ziliao.html");
    }
    public function vip_dizhi(){
        $this->display("vip_dizhi.html");
    }
    public function vip_guanzhu(){
        $this->display("vip_guanzhu.html");
    }
    public function vip_toupiao(){
    $this->display("vip_toupiao.html");
    }
    public function tuikaun(){
        $this->display("tuikuan.html");
    }
    public function vip_fanxiu(){
        $this->display("vip_fanxiu.html");
    }
    public function vip_tousu(){
        $this->display("vip_tousu.html");
    }
    public function vip_tuikuan(){
        $this->display("vip_tuikuan.html");
    }








}