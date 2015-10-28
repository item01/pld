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
        error_reporting(E_ALL);
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
        $this->assign ( "p", a );
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
        $this->get_fanxiu();
        $this->display("vip_fanxiu.html");
    }

    public function vip_tousu(){
        $this->display("vip_tousu.html");
    }
    public function vip_tuikuan(){
        $this->get_tuikuan();
        $this->display("vip_tuikuan.html");
    }
    public function vip_dizhi_tianjia(){
        $this->display("vip_dizhi_tianjia.html");
    }


    public function tousu()
    {
        $data = $_POST;
        $data['c_time'] = time();
        $data['uid'] = 3;
        $data['status'] = 1;
        $arr = $this->M->insert('lx_suggest', $data);
        if ($arr) {
            R("home/user/index");
        }
    }
    public function backchange(){
        $data = $_POST;
        $data['c_time']=time();
        $data['uid']=3;
        $data['status']=1;
        $data['backstatus']=1;
        $arr=$this->M->insert('lx_backchange',$data);
        if($arr){
            R("home/user/index");
        }
    }
    public function refund(){
        $data = $_POST;
        $data['c_time']=time();
        $data['uid']=3;
        $data['status']=1;
        $data['dealstatus']=0;
        $arr=$this->M->insert('lx_refund',$data);
        if($arr){
            R("home/user/index");
        }
    }
    public function addr(){
       // $data = $_POST;

        if($_POST['addrstatus']==1) {
            $data['uid'] = 3;
            $data['us'] = $_POST['province'] . $_POST['city'] . $_POST['county'];
            $data['address'] = $_POST['address'];
            $data['consignee'] = $_POST['consignee'];
            $data['zipcode'] = $_POST['zipcode'];
            $data['phone'] = $_POST['phone'];
            $data['addrstatus'] = 1;
            $this->M->query("UPDATE `lx_addr` SET `addrstatus`=0 WHERE `addrstatus`=1 ");
            $data['status'] = 1;
            $data['c_time'] = time();

            $arr = $this->M->insert('lx_addr', $data);
            if($arr){R("home/user/index");}
        }else{
            $data['uid'] = 3;
            $data['us'] = $_POST['province'] . $_POST['city'] . $_POST['county'];
            $data['address'] = $_POST['address'];
            $data['consignee'] = $_POST['consignee'];
            $data['zipcode'] = $_POST['zipcode'];
            $data['phone'] = $_POST['phone'];
            $data['addrstatus'] = 0;
            $data['status'] = 1;
            $data['c_time'] = time();
            $arr = $this->M->insert('lx_addr', $data);
            if($arr){R("home/user/index");}
    }
    }

    public function get_fanxiu(){

        $arr = $this->M->get_all ( "SELECT * from `lx_backchange` where `uid`=3" );
        $this->assign ( "list", $arr );

    }
    public function get_tuikuan(){

        $arr = $this->M->get_all ( "SELECT * from `lx_refund` where `uid`=3" );
        $this->assign ( "list", $arr );

    }







}