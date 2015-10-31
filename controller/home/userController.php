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
        $this->get_anquan();

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
       //$this->assign ( "p", a );
        $this->display("vip_jifen.html");
    }
    public function vip_shaidan(){

        $this->display("vip_shaidan.html");
    }
    public function vip_yuyue(){
        $this->display("vip_yuyue.html");
    }
    public function vip_GRziliao(){
        $this->get_ziliao();
        $this->get_nav();
        $this->get_nav_son();
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
        $this->get_dizhi();
        $this->display("vip_dizhi.html");
    }
    public function vip_guanzhu(){
        $this->display("vip_guanzhu.html");
    }
    public function vip_toupiao(){
    $this->display("vip_toupiao.html");
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
    public function vip_shouji_yanzheng01(){
        $this->display("vip_shouji_yanzheng01.html");
    }
    public function vip_shouji_yanzheng02(){
        $this->display("vip_shouji_yanzheng02.html");
    }

    public function vip_youxiang_yanzheng01(){
        $this->display("vip_youxiang_yanzheng01.html");
    }

    public function vip_youxiang_yanzheng03($email="",$salt=""){
        $this->get_email($email,$salt);
        $this->display("vip_youxiang_yanzheng03.html");
    }
    public function vip_anquan_xiugai_CG(){
        $this->display("vip_anquan_xiugai_CG.html");
    }





    public function send_email(){

        $to=$_POST['email'];
        $smtp=$this->load("smtp",false);

        $smtp->smtp("smtp.163.com",25,true,"wxyxxxxx15@163.com","wxy112233");
        $nums = "";
        for($i=0;$i<20;$i++){
            $nums.=dechex(mt_rand(0,15));
        }
        $this->M->query("UPDATE `lx_user` SET `salt`= '".$nums."' WHERE `id`=3 ");

        $content="<a href='http://localhost/home/user/vip_youxiang_yanzheng03/email/$to/salt/$nums'>sdasd</a><h1>5412</h1>";

        $title='您好~ ';
        $aa=$smtp->sendmail($to,"wxyxxxxx15@163.com",$title,$content,"HTML");

        unset($smtp);
        $this->assign("email",$to);
        $this->display("vip_youxiang_yanzheng02.html");


    }

        public function get_email($email="",$salt=""){
            $arr = $this->M->get_one("select `salt` from `lx_user` WHERE `id`=3");
            foreach($arr as $k=>$v){
                $arr=$v;
            }
            //echo$salt;
            if($arr==$salt){
             $this->M->query("UPDATE `lx_user` SET `email`='".$email."' WHERE `id`=3 ");
              //  echo$salt;
         }else{
            // echo$salt;
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
    public function get_dizhi(){
        $arr = $this->M->get_all("select * from `lx_addr` where `uid`=3");
        $this->assign("list",$arr);
    }
     public function addrdelete($id=""){
         //var_dump($id);die;
         $arr=$this->M->delete('lx_addr',"`id`='".$id."'");
         echo 4;
     }

    public function get_nav(){
    $arr=$this->M->get_all("select * from `lx_othernav`");
    $this->assign("list",$arr);
    }
    public function get_anquan(){
        $a=$this->M->get_one("select `mobile` from `lx_user` WHERE `id`=3");
        $b=$this->M->get_one("select `email` from `lx_user` WHERE `id`=3");
        foreach($a as $k=>$v){
            $a=$v;
        }
        foreach($b as $k=>$v){
            $b=$v;
        }
        $this->assign("a",$a);
        $this->assign("b",$b);
        //var_dump($b);

    }
    public function get_nav_son(){
        $arr=$this->M->get_all("select * from `lx_otherinfo` WHERE `tid`=1");
        $this->assign("list1",$arr);
        $arr=$this->M->get_all("select * from `lx_otherinfo` WHERE `tid`=2");
        $this->assign("list2",$arr);
        $arr=$this->M->get_all("select * from `lx_otherinfo` WHERE `tid`=3");
        $this->assign("list3",$arr);
        $arr=$this->M->get_all("select * from `lx_otherinfo` WHERE `tid`=4");
        $this->assign("list4",$arr);
        $arr=$this->M->get_all("select * from `lx_otherinfo` WHERE `tid`=5");
        $this->assign("list5",$arr);
    }

    public function get_ziliao(){
        $arr=$this->M->get_one("select * from `lx_user` WHERE `id`=3");
        $arr['receive']=explode(',',$arr['receive']);
        $arr['jewel']=explode(',',$arr['jewel']);
        $arr['interest']=explode(',',$arr['interest']);
        $this->assign("ziliao",$arr);
        /*P( $arr['receive']);
       echo $arr['receive'];*/
    }






    public function addrstatus($id=""){
        $this->M->query("UPDATE `lx_addr` SET `addrstatus`=0 WHERE `addrstatus`=1 ");
        $arr=$this->M->query("UPDATE `lx_addr` SET `addrstatus`=1 WHERE `id`=$id ");
        if($arr){
            R("home/user/vip_dizhi");
        }
    }


    public function addralter($id=""){
        $this->assign("id",$id);
        $this->display("vip_dizhixiugai.html");
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
        if($data['backtype'=='返修']){
            $data['backstatus']=1;
        }else{
            $data['backstatus']=3;
        }

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
    public function dealaddralter($id=""){
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

            $arr=$this->M->update('lx_addr',$data,"`id`='".$id."'");

            if($arr){R("home/user/vip_dizhi");}
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
            $arr=$this->M->update('lx_addr',$data,"`id`='".$id."'");
            if($arr){R("home/user/vip_dizhi");}
        }
        //$arr=$this->M->update('lx_addr',$data,"`id`='".$id."'");
        }

    /**
     *
     */
    public function deal_grziliao(){

            $data['u_name']=$_POST['u_name'];
            $data['biryear']=$_POST['biryear'];
            $data['t_name']=$_POST['t_name'];
            $data['birmonth']=$_POST['birmonth'];
            $data['birday']=$_POST['birday'];
            $data['marriage']=$_POST['marriage'];
            $data['addr']=$_POST['addr'];
            $data['province']=$_POST['province'];
            $data['city']=$_POST['city'];
            $data['county']=$_POST['county'];
            $data['jewel']=$_POST['jewel'];
            $data['interest']=$_POST['interest'];
            $data['profession']=$_POST['profession'];
            $data['income']=$_POST['income'];
            $data['wedding']=$_POST['wedding'];
            $data['wedmonth']=$_POST['wedmonth'];
            $data['wedday']=$_POST['wedday'];
            $data['spouse']=$_POST['spouse'];
            $data['spmonth']=$_POST['spmonth'];
            $data['spday']=$_POST['spday'];
            $data['receive']='';
            foreach($_POST['receive'] as $k=>$v){
                $data['receive'].=$v.",";
            }
            $data['jewel']='';
           foreach($_POST['jewel'] as $k=>$v){
               $data['jewel'].=$v.",";
              }
             $data['interest']='';
           foreach($_POST['interest'] as $k=>$v){
              $data['interest'].=$v.",";
              }
            $arruser=$this->M->get_one("select `biryear` from `lx_user` WHERE `id`=3");
              if($arruser){
                  $arr=$this->M->update('lx_user',$data,"`id`=3");
                  if($arr){R("home/user/vip_GRziliao");}
              }else{
                  $arr=$this->M->insert('lx_user',$data,"`id`=3");
                  if($arr){R("home/user/vip_GRziliao");}
              }
        }





}