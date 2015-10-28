
<?php
/**
 * index控制器
 * 
 * 
 */
class indexController extends Controller
{

	//共有部分
	public function __construct(){

		parent::__construct();
		error_reporting(E_ALL);

		$this->common_header();


	}

	/*业务逻辑部分*/


	//导航列表
	public function common_header(){

		$arr=$this->M->get_all("SELECT * from `lx_nav` where `tid`=0 order by `sort`");
		foreach($arr as $key=>&$v){
			$v['children']=$this->M->get_all("SELECT * from `lx_nav` where `tid`='".$v['id']."' order by `sort`");
			if(count($v['children'])==0){
				$v['children']="";
			}
		}
		unset($v);
		//p($arr);die;
		$this->assign("nav_list",$arr);
	}


	//首页视频
	public function get_video()
	{
		$arr = $this->M->get_all("SELECT * from `lx_video` limit 5");
		foreach ($arr as $key => &$v) {
			$v['c_time'] = date('Y-m-d', $v['c_time']);
		}
		$this->assign("video_list", $arr);
		return $arr;
	}

	//首页视图
	public function index()
	{
		$this->get_type_list();
		$this->display("index.html");
	}
	//俱乐部11
	public function daoru()
	{
		$arr=$this->M->get_one("SELECT * FROM `lx_stairpage` where `tid`='".$tid."' and `status`=1 order by `id` desc");
		$this->assign('daoru',$arr);
		$this->display('daoru.html');
	}
	//俱乐部
	public function daoru01()
	{
		$this->display("daoru01.html");
	}

	//服务方式
	public function julebu()
	{
		$this->display("julebu.html");
	}

	//星空珠宝
	public function daoru02()
	{
		$this->display("daoru02.html");
	}

	//处女座
	public function chunvzuo()
	{
		$this->display("chunvzuo.html");
	}

	//星座详情
	public function xingzuo()
	{
		$this->display("xingzuo.html");
	}

	//珠宝世界
	public function daoru03()
	{
		$this->display("daoru03.html");
	}

	//项链
	public function zhubao()
	{
		$this->display("zhubao.html");
	}

	//珠宝详情
	public function zhubao_xq()
	{
		$this->display("zhubao_xq.html");
	}

	//珠宝search
	public function zhubao_search()
	{
		$this->display("zhubao_search.html");
	}

	//高级定制
	public function daoru04()
	{
		$this->display("daoru04.html");
	}

	//定制
	public function dingzhi()
	{
		$this->display("dingzhi.html");
	}

	//定制分类
	public function dingzhi_fenlei()
	{
		$this->display("dingzhi_fenlei.html");
	}

	//定制详情
	public function dingzhi_fenlei_xq()
	{
		$this->display("dingzhi_fenlei_xq.html");
	}

	//定制预约
	public function dingzhi_fenlei_xq_yuyue()
	{
		$this->display("dingzhi_fenlei_xq_yuyue.html");
	}

	//定制浏览
	public function dingzhi_liulan()
	{
		$this->display("dingzhi_liulan.html");
	}

	//经典珠宝
	public function daoru05()
	{
		$this->display("daoru05.html");
	}

	//经典1
	public function jingdian()
	{
		$this->display("jingdian.html");
	}

	//经典分类
	public function jingdian_fenlei()
	{
		$this->display("jingdian_fenlei.html");
	}

	//经典分类详情
	public function jingdian_fenlei_xq()
	{
		$this->display("jingdian_fenlei_xq.html");
	}

	//经典浏览
	public function jingdian_liulan($id="",$tid="")
	{
		$this->get_jingdian_liulan($id,$tid);
		$this->display("jingdian_liulan.html");
	}

	//proty之星
	public function daoru06()
	{
		$this->display("daoru06.html");
	}

	//proty星
	public function proty_about()
	{
		$this->get_proty_about();
		$this->display("proty_about.html");
	}

	//proty关于
	public function proty_xing()
	{
		$this->get_proty_xing();
		$this->display("proty_xing.html");
	}

	//proty详情
	public function proty_jia_xq()
	{
		$this->display("proty_jia_xq.html");
	}

	//proty晒图
	public function proty_shaitu()
	{
		$this->display("proty_shaitu.html");
	}

	//proty晒图search
	public function proty_shaitu_search()
	{
		$this->display("proty_shaitu_search.html");
	}

	//proty家
	public function proty_jia()
	{
		$this->display("proty_jia.html");
	}

	//品牌故事
	public function daoru07()
	{
		$this->display("daoru07.html");
	}

	//品牌故事1
	public function pinpai($tid = "")
	{
		$arr=$this->get_type_list($tid);
		$this->get_pinpai($arr);

		$this->display("pinpai.html");
	}

	//网络精品
	public function daoru08()
	{
		$this->display("daoru08.html");
	}

	//关于proty
	public function gr_about($tid="")
	{
		$this->get_about($tid);
		$this->display("gr_about.html");
	}

	//最新资讯
	public function gr_zixun($tid="")
	{
		$this->get_zixun($tid);
		$this->assign("id",$id);
		$this->display("gr_zixun.html");
	}
	//注册详情
	public function gr_zixun_xq($id="")
	{
		$this->get_zixun_xq($id);
		$this->assign("id",$id);
		$this->display("gr_zixun_xq.html");
	}
	//店铺
	public function gr_dianpu($tid="")
	{
		$this->get_dianpu($tid);
		$this->display("gr_dianpu.html");
	}

	//法律条款
	public function gr_fltiaokuan($tid="")
	{
		$this->get_fltiaokuan($tid);
		$this->display("gr_fltiaokuan.html");
	}

	//常见问题
	public function gr_wenti($tid="")
	{
		$this->get_wenti($tid);
		$this->display("gr_wenti.html");
	}

	//联系我们
	public function gr_contact($tid="")
	{
		$this->get_contact($tid);
		$this->display("gr_contact.html");
	}

	//登录
	public function gr_denglu()
	{
		$this->display("gr_denglu.html");
	}

	//条款
	public function gr_tiaokuan()
	{
		$this->display("gr_tiaokuan.html");
	}

	//注册
	public function gr_zhuce()
	{
		$this->display("gr_zhuce.html");
	}

	//付款
	public function fukuan()
	{
		$this->display("fukuan.html");
	}

	//付款完成
	public function fukuan_wancheng()
	{
		$this->display("fukuan_wancheng.html");
	}

	//积分兑换1
	public function jifen_duihuan01()
	{
		$this->display("jifen_duihuan01.html");
	}

	//积分兑换2
	public function jifen_duihuan02()
	{
		$this->display("jifen_duihuan02.html");
	}

	//积分兑换3
	public function jifen_GZ()
	{
		$this->display("jifen_GZ.html");
	}

	//愿望清单
	public function yuanwang()
	{
		$this->display("yuanwang.html");
	}

	//愿望确认
	public function yuanwang_queren()
	{
		$this->display("yuanwang_queren.html");
	}
	//用户登录
	public function vip()
	{
		$this->display("vip.html");
	}
	public function get_about($tid="")
	{
		$arr=$this->M->get_all("SELECT * FROM `lx_about` where `tid`='".$tid."'");
		foreach($arr as $k=>&$v) {
			$v['ab_content'] = html_entity_decode($v['ab_content']);
		}
		//var_dump($arr);
		$this->assign("about_list",$arr);
		return $arr;
	}
	public function get_zixun($tid="")
	{
		$arr=$this->M->get_all("SELECT * FROM `lx_latest` where `tid`='".$tid."'");
		foreach($arr as $k=>&$v){
			$v['c_time'] = date('m.d.Y',$v['c_time']);
		}
		//var_dump($arr);
		$this->assign("latest_list",$arr);
		return $arr;
	}
	//最新资讯详情
	public function get_zixun_xq($id="")
	{
		$arr=$this->M->get_all("SELECT * FROM `lx_latest` where `id`='".$id."'");
		foreach($arr as $k=>&$v){
			$v['la_title'] = html_entity_decode($v['la_title']);
			$v['la_content'] = html_entity_decode($v['la_content']);
			$v['s_time'] = date('Y-m-d,H:i:s',$v['s_time']);
		}
		//var_dump($arr);
		$this->assign("zixunxq_list",$arr);
		return $arr;
	}
	//店铺地址
	public function get_dianpu($tid="")
	{
		$arr=$this->M->get_all("SELECT * FROM `lx_shopaddr` where `tid`='".$tid."'");
		foreach($arr as $k=>&$v){
			$v[sh_addr]=html_entity_decode($v['sh_addr']);
		}
		//var_dump($arr);
		$this->assign("dianpu_list",$arr);
		return $arr;
	}
	//法律条款
	public function get_fltiaokuan($tid="")
	{
		$arr=$this->M->get_one("SELECT * FROM `lx_about` where `tid`='".$tid."'");
		$arr[ab_content]=html_entity_decode($arr['ab_content']);
		//var_dump($arr);
		$this->assign("fltiaokuan_list",$arr);
		return $arr;
	}
	//常见问题
	public function get_wenti($tid="")
	{
		$arr=$this->M->get_all("SELECT * FROM `lx_problem` where `tid`='".$tid."'");
		$title=$this->M->get_one("SELECT `pr_title` FROM `lx_problem` where `tid`='".$tid."' and `pr_title`!=''");
		foreach($arr as $k=>&$v) {
			$v['answer'] = html_entity_decode($v['answer']);
		}
		//var_dump($arr);
		$this->assign(array(
			"wenti_list"=>$arr,
			'title'=>$title));
		return $arr;
	}
	//联系我们
	public function get_contact($tid="")
	{
		$arr=$this->M->get_all("SELECT * FROM `lx_about` where `tid`='".$tid."'");
		foreach($arr as $k=>&$v) {
			$v['ab_content'] = html_entity_decode($v['ab_content']);
		}
		//var_dump($arr);
		$this->assign("contact_list",$arr);
		return $arr;
	}
	public function get_pinpai($arr)
	{
		$arr1=array();
		foreach($arr as $k=>&$v){
			$arr1[]=$this->M->get_one("SELECT * FROM `lx_brand` where `tid`='".$v['id']."' order by `id` desc");
		}
		$this->assign("pinpai_list",$arr1);
		//var_dump($arr1);DIE;
		return $arr1;
	}

	public function get_type_list($tid = "")
	{
		$arr = $this->M->get_all("SELECT `id` from `lx_nav` where `tid`='".$tid."'");
			//$arr['navname'] = html_entity_decode($arr['navname']);
		$this->assign("type_list",$arr);
		//var_dump($arr);
		return $arr;
	}
	//注册
	public function add_user()
	{
		$data=$_POST;
		//var_dump($data);
		$code=check_ycode($data['code']);

		if(!$code){
			echo -4;//echo '验证码不正确';

			exit;
		}
		$data1=array();
		foreach($data as $key=>$v){
			if($key!='code'){
				$data1[$key]=$v;
			}
		}
		unset($data1['sPassword']);
		unset($data1['p_code']);
		unset($data1['code']);
		$this->M->insert("lx_user",$data1);
		echo $this->M->insert_id();

	}
	/*登录*/
	public function denglu(){
		//$data=$_post;
			if(IS_POST){
				$userModel=D('User');
				if($userModel->create()){
					$rst=$userModel->login();
					if($rst===TRUE){
						$this->redirect('/home/index/gr_denglu');
						exit;
					}elseif($rst==-1){
						echo "<script>alert('密码错误！');history.go(-1);</script>";

					}elseif($rst==-2){
						echo "<script>alert('您没有管理权限！');history.go(-1);</script>";

					}elseif($rst==-3){
						echo "<script>alert('用户不存在！');history.go(-1);</script>";

					}
				}else
					$this->error($userModel->getError());

			}
			$this->display();
		}
	//退出登录
	public function logout(){
		$model=D('User');
		$model->logout();
		$this->redirect('/home/index/gr_denglu');
		exit;
	}
	//异步验证登陆账号是否存在
	public function checkAccount(){
		if(!IS_POST){
			$this->error('页面不存在！');
		}
		$name=$_POST['u_name'];
		if(M('Admin')->where(array('name'=>$name))->getField('id')){
			return false;

		}else{
			echo 'true';

		}
	}
	//proty_xing
	public function get_proty_xing(){
		$arr = $this->M->get_one("select * from `lx_star`");
		$arr['st_content']=html_entity_decode($arr['st_content']);
		$arr['st_content1']=html_entity_decode($arr['st_content1']);
		//var_dump($arr);
		$this->assign("xing_list",$arr);
		return $arr;
	}
	//proty_about
	public function get_proty_about(){
		$arr = $this->M->get_all("select * from `lx_aboutsky` order by `skytype`");
		foreach($arr as $k=>&$v){
			$v['as_content']=html_entity_decode($v['as_content']);
		}
		//var_dump($arr);
		$this->assign("aboutsky_list",$arr);
		$dq=$arr[0]['id'];
		$this->assign('dq',$dq);
		return $arr;
	}
	//经典浏览
	public function get_jingdian_liulan($id="",$tid=""){
		$arr = $this->M->get_all("select * from `lx_series` where `id`='".$id."'");
		$this->assign("series_list",$arr);
		return $arr;
	}
	//经典
	public function get_jingdian($id=""){
		$arr = $this->M->get_all("select * from `lx_series` where `id`='".$id."'");
		$this->assign("series_list",$arr);
		return $arr;
	}
	public function get_set()
	{
		$arr = $this->M->get_one("SELECT * from `lx_set` where `id`=1");
		//$arr['t12']=explode('+', $arr['t12']);
		$this->assign("set_list", $arr);
		return $arr;
	}


}