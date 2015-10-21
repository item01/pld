<?php
/**
 * 基础公用函数
 */

function p($arr){
    echo '<pre>'.print_r($arr,true).'</pre>';
}

//验证码
function check_ycode($code=""){
    if ($code!=$_SESSION['code']) {
           
            return false;
            
        }else{
            return true;
        }

}

/*去除内容中的HTML,css,js部分*/
function ClearHtml($string, $sublen)    
{
   $string = strip_tags($string);
   $string = preg_replace ('/\n/is', '', $string);
   $string = preg_replace ('/ |　/is', '', $string);
   $string = preg_replace ('/&nbsp;/is', '', $string);
   
   preg_match_all("/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/", $string, $t_string);   
   if(count($t_string[0]) - 0 > $sublen) $string = join('', array_slice($t_string[0], 0, $sublen))."…";   
   else $string = join('', array_slice($t_string[0], 0, $sublen));
   
   return $string;
}


function week(){
    $weekarray=array("日","一","二","三","四","五","六"); 
    return "星期".$weekarray[date("w")];
}

/*
 *从数组中找出有图片的项组成新数组返回
 *$dateNews为数据库中取出的数组
 *$len为新数组长度
 */
function match_img($dataNews,$len=5){
    $pattern = "/<img.+src=\"?(.+\.(jpg|gif|jpeg|png))\"?.+>/";
    $arr=array();
    $i=0;
    foreach($dataNews as $v){
        $content=html_entity_decode($v['content']); 
        if(preg_match($pattern,$content,$match) && $i<$len){
            $arr[$i]=$v;
            $i++;
        }
              
    }
    return $arr;
}
/*
 *从数组中找出有图片的项选出每一项中的最后一张图片的地址组成新数组返回
 *$dateNews为数据库中取出的数组
 *$len为新数组长度
 */
function match_imgAddr($dataNews,$len=5){
    $pattern = "/<img.+src=\"?(.+\.(jpg|gif|jpeg|png))\"?.+>/";
    $arr=array();
    $i=0;
    foreach($dataNews as $v){
        $content=html_entity_decode($v['content']); 
        if(preg_match($pattern,$content,$match) && $i<$len){
            $arr[$i]=$match[1];
            $i++;
        }
              
    }
    return $arr;
}



//返回需要跳转的地址
function U($url,$params=""){

//$url=explode('/', $url);
	$host='http://'.$_SERVER['HTTP_HOST'];
	$vars="";
    if ($params!="") {
    	foreach ($params as $key => $value) {
    		$vars.="/".$key."/".$value;
    	}
    }
	return $url=$host."/index.php/".$url.$vars;

}
//跳转的页面
function R($url,$params=""){

//$url=explode('/', $url);
    $host='http://'.$_SERVER['HTTP_HOST'];
    $vars="";
    if ($params!="") {
        foreach ($params as $key => $value) {
            $vars.="/".$key."/".$value;
        }
    }

    $url=$host."/index.php/".$url.$vars;

    $str= "<script>location.href='".$url."';</script>";
    echo $str;exit;
}

//弹窗提示信息
function message($str='',$url=''){
	header("Content-type: text/html; charset=utf-8");
	if ($url==1) {
	$js="<script>alert('".$str."');history.go(-1);</script>";
	}elseif($url!=''){
	$js="<script>alert('".$str."');location.href='".$url."';</script>";
	}else{
	$js="<script>alert('".$str."');</script>";
	}
	echo $js;exit;

	
}

//当前网址 
function current_url(){
    $str='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    return $str;
}



//

function reload(){
    echo "<script>location.reload();</script>";
}
function history($t=-1){
    echo "<script>history.go(".$t.");</script>";
}

    function random($length = 6 , $numeric = 0) {
        PHP_VERSION < '4.2.0' && mt_srand((double)microtime() * 1000000);
        if($numeric) {
            $hash = sprintf('%0'.$length.'d', mt_rand(0, pow(10, $length) - 1));
        } else {
            $hash = '';
            $chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ0123456789abcdefghjkmnpqrstuvwxyz';
            $max = strlen($chars) - 1;
            for($i = 0; $i < $length; $i++) {
                $hash .= $chars[mt_rand(0, $max)];
            }
        }
        return $hash;
    }
function random2($length = 6 , $numeric = 0) {
        PHP_VERSION < '4.2.0' && mt_srand((double)microtime() * 1000000);
        if($numeric) {
            $hash = sprintf('%0'.$length.'d', mt_rand(0, pow(10, $length) - 1));
        } else {
            $hash = '';
            $chars = '123456789abcdefghjkmnpqrstuvwxyz';
            $max = strlen($chars) - 1;
            for($i = 0; $i < $length; $i++) {
                $hash .= $chars[mt_rand(0, $max)];
            }
        }
        return $hash;
    }


    function is_login(){
        $uid=isset($_SESSION['uid'])?$_SESSION['uid']:0;
        
        
        if ($uid==0) {
            return false;
        }else{
            return $uid;
        }       
    } 

    function is_sh_login(){
        $uid=isset($_SESSION['sid'])?$_SESSION['sid']:0;
        
        if ($uid==0) {
            return false;
        }else{
            return $uid;
        }       
    } 

    function is_admin_login(){
        $uid=isset($_SESSION['admin_id'])?$_SESSION['admin_id']:0;
        
        if ($uid==0) {
            return false;
        }else{
            return $uid;
        }       
    }

    function get_userinfo($uid=""){
        if (!$uid) {

            $uid=isset($_SESSION['uid'])?$_SESSION['uid']:'';
            if ($uid<1) {
               return false; 
            }
          
        }
        $M=new Model;
        return  $M->get_one("SELECT * from `lx_member` where `id`='".$uid."'"); 
    }


//格式化时间戳
function d($time){
	return date("Y-m-d H:i:s",strtotime($time));
}

//上午，下午，晚上
function friend_time(){
    $t=date('H');
    if ($t<12&&$t>=7) {
       $str="上午好";
   }elseif ($t>=12&&$t<=14) {
       $str="中午好";
   }elseif ($t>14&&$t<17) {
       $str="下午好";
   }elseif ($t>=17&&$t<24) {
      $str="晚上好";
   }elseif ($t>=0&&$t<7) {
      $str="深夜了,请早点休息";
   }else{
    $str="您好";
   }
   return $str;
}

//隐藏手机号码中间部分
function hid_phone($phone){
    return substr($phone,0,3)."****".substr($phone,7,4);
}

function hid_bank($account){
    return substr($account,0,4)."***********".substr($account,15,4);
}


function my_nl2br($s) {     
    return   str_replace("n",'<br>',str_replace("r",'<br>',str_replace("rn",'<br>',$s)));   
  }
// function string_s($date){

// 	$s1= intval(substr($date,9))+1;
// 	if ($s1>100) {
// 		$s1="1".$s1;
// 	}

// 	$s2= substr($date,0,9);


// 	$ss=$s2.$s1;
// 	return $ss;
	
// }


//加密
function encrypt($data, $key='wxy')
{
 $key = md5($key);
    $x  = 0;
    $len = strlen($data);
    $l  = strlen($key);
    for ($i = 0; $i < $len; $i++)
    {
        if ($x == $l) 
        {
         $x = 0;
        }
        $char .= $key{$x};
        $x++;
    }
    for ($i = 0; $i < $len; $i++)
    {
        $str .= chr(ord($data{$i}) + (ord($char{$i})) % 256);
    }
    return base64_encode($str);
}

//解密
function decrypt($data, $key='wxy')
{
 $key = md5($key);
    $x = 0;
    $data = base64_decode($data);
    $len = strlen($data);
    $l = strlen($key);
    for ($i = 0; $i < $len; $i++)
    {
        if ($x == $l) 
        {
         $x = 0;
        }
        $char .= substr($key, $x, 1);
        $x++;
    }
    for ($i = 0; $i < $len; $i++)
    {
        if (ord(substr($data, $i, 1)) < ord(substr($char, $i, 1)))
        {
            $str .= chr((ord(substr($data, $i, 1)) + 256) - ord(substr($char, $i, 1)));
        }
        else
        {
            $str .= chr(ord(substr($data, $i, 1)) - ord(substr($char, $i, 1)));
        }
    }
    return $str;
}



//分页函数
function Page($page,$rows,$page_size){
        $pagenav="";
        $page_count = ceil($rows/$page_size);
        if($page >= $page_count) $page = $page_count;
        if($page <= 1 || $page =='') $page = 1;
        $select_limit = $page_size;
        $w_url="http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
        $n1=strstr($w_url,"/page/");
        $w_url=str_replace($n1, "", $w_url);
        $select_from = ($page - 1) * $page_size;
        $pre_page = ($page == 1)? 1 : $page - 1;
        $next_page= ($page == $page_count)? $page_count : $page + 1 ;
        $pagenav .= "第 ".$page."/".$page_count." 页 共 ".$rows." 条记录 ";
        $pagenav .= "<a href='".$w_url."/page/1'>首页</a> ";
        $pagenav .= "<a href='".$w_url."/page/".$pre_page."'>前一页</a> ";
        $pagenav .= "<a href='".$w_url."/page/".$next_page."'>后一页</a> ";
        $pagenav .= "<a href='".$w_url."/page/".$page_count."'>末页</a>";
        $pagenav.="跳到<select name='topage' size='1' onchange='window.location=\"".$w_url."/page/\"+this.value'>\n";
        for($i=1;$i<=$page_count;$i++){
        if($i==$page) $pagenav.="<option value='$i' selected>$i</option>\n";
        else $pagenav.="<option value='$i'>$i</option>\n";
        }
        $pagenav.="</select>";
        $page2=array();
        $page2['page']=$page;
        $page2['select_from']=$select_from;
        $page2['select_limit']=$select_limit;
        $page2['pagenav']=$pagenav;

        return $page2;
    }

// function pwd($str='',$str='wxy'){
  
//   return md5($str);
// }


//生成盐
function salt($a){
    $salt=md5($a.random(10));
    return $salt;
}
//加密密码
function pwd($a,$salt) {
       //定义一个salt值，程序员规定下来的随机字符串
       
    $b=$a.$salt;  //把密码和salt连接
    $b=md5($b);  //执行MD5散列
    return $b;  //返回散列    
}

//
//<?php
/* 
Utf-8、gb2312都支持的汉字截取函数 
cut_str(字符串, 截取长度, 开始长度, 编码); 
编码默认为 utf-8 
开始长度默认为 0 
*/ 

function cut_str($string, $sublen, $start = 0, $code = 'UTF-8') 
{ 
    if($code == 'UTF-8') 
    { 
        $pa = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/"; 
        preg_match_all($pa, $string, $t_string); 

        if(count($t_string[0]) - $start > $sublen) return join('', array_slice($t_string[0], $start, $sublen))."..."; 
        return join('', array_slice($t_string[0], $start, $sublen)); 
    } 
    else 
    { 
        $start = $start*2; 
        $sublen = $sublen*2; 
        $strlen = strlen($string); 
        $tmpstr = ''; 

        for($i=0; $i< $strlen; $i++) 
        { 
            if($i>=$start && $i< ($start+$sublen)) 
            { 
                if(ord(substr($string, $i, 1))>129) 
                { 
                    $tmpstr.= substr($string, $i, 2); 
                } 
                else 
                { 
                    $tmpstr.= substr($string, $i, 1); 
                } 
            } 
            if(ord(substr($string, $i, 1))>129) $i++; 
        } 
        if(strlen($tmpstr)< $strlen ) $tmpstr.= "..."; 
        return $tmpstr; 
    } 
} 

function format_date($time){
    $t=time()-$time;
    $f=array(
    '31536000'=>'年',
    '2592000'=>'个月',
    '604800'=>'星期',
    '86400'=>'天',
    '3600'=>'小时',
    '60'=>'分钟',
    '1'=>'秒'
    );
    foreach ($f as $k=>$v) {
        if (0 !=$c=floor($t/(int)$k)) {
            return $c.$v.'前';
        }
    }
}


function get_user_browser()
{
    if (empty($_SERVER['HTTP_USER_AGENT']))
    {
    return '';
    }
    $agent       = $_SERVER['HTTP_USER_AGENT'];
    $browser     = '';
    $browser_ver = '';
    if (preg_match('/MSIE\s([^\s|;]+)/i', $agent, $regs))
    {
    $browser     = 'Internet Explorer';
    $browser_ver = $regs[1];
    }
    elseif (preg_match('/FireFox\/([^\s]+)/i', $agent, $regs))
    {
    $browser     = 'FireFox';
    $browser_ver = $regs[1];
    }
    elseif (preg_match('/Maxthon/i', $agent, $regs))
    {
    $browser     = '(Internet Explorer ' .$browser_ver. ') Maxthon';
    $browser_ver = '';
    }
    elseif (preg_match('/Opera[\s|\/]([^\s]+)/i', $agent, $regs))
    {
    $browser     = 'Opera';
    $browser_ver = $regs[1];
    }
    elseif (preg_match('/OmniWeb\/(v*)([^\s|;]+)/i', $agent, $regs))
    {
    $browser     = 'OmniWeb';
    $browser_ver = $regs[2];
    }
    elseif (preg_match('/Netscape([\d]*)\/([^\s]+)/i', $agent, $regs))
    {
    $browser     = 'Netscape';
    $browser_ver = $regs[2];
    }
    elseif (preg_match('/safari\/([^\s]+)/i', $agent, $regs))
    {
    $browser     = 'Safari';
    $browser_ver = $regs[1];
    }
    elseif (preg_match('/NetCaptor\s([^\s|;]+)/i', $agent, $regs))
    {
    $browser     = '(Internet Explorer ' .$browser_ver. ') NetCaptor';
    $browser_ver = $regs[1];
    }
    elseif (preg_match('/Lynx\/([^\s]+)/i', $agent, $regs))
    {
    $browser     = 'Lynx';
    $browser_ver = $regs[1];
    }
    if (!empty($browser))
    {
    return addslashes($browser . ' ' . $browser_ver);
    }
    else
    {
    return 'Unknow browser';
    }
}

// //获取电脑的CPU信息
// function OnlyU(){
//         $a = '';
//         $b = array();
//         if(function_exists('exec')){
//                 if(mailto:!@exec( /all",$b)){
//                         return false;
//                 }
//         }elseif(function_exists('system')){
//                 ob_start();
//                 if(mailto:!@system( /all")){
//                         return false;
//                 }else{
//                 }
//                 $b = ob_get_contents();
//                 ob_end_clean();
//                 $b = explode("\n",$b);//print_r($b);
//                 array_pop($b);
//         }else{
//                 return false;
//         }
 
//         $all = sizeof($b);
//         for($i = 0; $i < $all; $i++){
//                 if(strpos($b[$i],"Description") !== false){
//                         if(strpos($b[$i+1],"Physical Address") !== false){
//                                 $c = explode(":",$b[$i+1]);
//                                 $a = trim($c[1]);
//                                 break;
//                         }
//                 }
//         } // End for
//         return empty($a)?false:$a;
// } // End function OnlyU

//获取网卡的MAC的地址

function getMAC() {
 @exec("ipconfig /all",$array); 
 for($Tmpa;$Tmpa<count($array);$Tmpa++){ 
  if(eregi("Physical",$array[$Tmpa])){ 
   $mac=explode(":",$array[$Tmpa]); 
   return $mac[1]; 
  } 
 } 
}

// 生成guid字符串
function guid($separated = true) {
    if (function_exists ( 'com_create_guid' )) {
        $charid = substr ( strtolower ( com_create_guid () ), 1, - 1 );
        if (! $separated)
            return str_replace ( '-', '', $charid );
        else
            return $charid;
    } else {
        // 生成一个随机的md5串, 然后通过分割来 获得guid
        mt_srand ( ( double ) microtime () * 10000 );
        $charid = md5 ( uniqid ( rand (), true ) );
    }
    
    if (! $separated) {
        return $charid;
    }
    $hyphen = chr ( 45 );
    $uuid = substr ( $charid, 0, 8 ) . $hyphen . substr ( $charid, 8, 4 ) . $hyphen . substr ( $charid, 12, 4 ) . $hyphen . substr ( $charid, 16, 4 ) . $hyphen . substr ( $charid, 20, 12 );
    return $uuid;
}


/*获取中奖*/
/*
 * 奖项数组
 * 是一个二维数组，记录了所有本次抽奖的奖项信息，
 * 其中id表示中奖等级，prize表示奖品，v表示中奖概率。
 * 注意其中的v必须为整数，你可以将对应的 奖项的v设置成0，即意味着该奖项抽中的几率是0，
 * 数组中v的总和（基数），基数越大越能体现概率的准确性。
 * 本例中v的总和为100，那么平板电脑对应的 中奖概率就是1%，
 * 如果v的总和是10000，那中奖概率就是万分之一了。
 * 
 */
/*
 * 每次前端页面的请求，PHP循环奖项设置数组，
 * 通过概率计算函数get_rand获取抽中的奖项id。
 * 将中奖奖品保存在数组$res['yes']中，
 * 而剩下的未中奖的信息保存在$res['no']中，
 * 最后输出json个数数据给前端页面。
 */
function get_prize($prize_arr=''){

    foreach ($prize_arr as $key => $val) { 
        $arr[$val['id']] = $val['v']; 
    } 
    $rid = get_rand($arr); //根据概率获取奖项id 
     
    $res['yes'] = $prize_arr[$rid-1]['prize']; //中奖项 
    unset($prize_arr[$rid-1]); //将中奖项从数组中剔除，剩下未中奖项 
    shuffle($prize_arr); //打乱数组顺序 
    for($i=0;$i<count($prize_arr);$i++){ 
        $pr[] = $prize_arr[$i]['prize']; 
    } 
    $res['no'] = $pr; 
    return $res;

}


/*
 * 经典的概率算法，
 * $proArr是一个预先设置的数组，
 * 假设数组为：array(100,200,300，400)，
 * 开始是从1,1000 这个概率范围内筛选第一个数是否在他的出现概率范围之内， 
 * 如果不在，则将概率空间，也就是k的值减去刚刚的那个数字的概率空间，
 * 在本例当中就是减去100，也就是说第二个数是在1，900这个范围内筛选的。
 * 这样 筛选到最终，总会有一个数满足要求。
 * 就相当于去一个箱子里摸东西，
 * 第一个不是，第二个不是，第三个还不是，那最后一个一定是。
 * 这个算法简单，而且效率非常 高，
 * 关键是这个算法已在我们以前的项目中有应用，尤其是大数据量的项目中效率非常棒。
 */
function get_rand($proArr) { 
    $result = '';  
    //概率数组的总概率精度 
    $proSum = array_sum($proArr);  
    //概率数组循环 
    foreach ($proArr as $key => $proCur) { 
        $randNum = mt_rand(1, $proSum); 
        if ($randNum <= $proCur) { 
            $result = $key; 
            break; 
        } else { 
            $proSum -= $proCur; 
        }       
    } 
    unset ($proArr);  
    return $result; 
} 


//数组排序
 function array_sort($arr,$keys,$type='desc'){
                $keysvalue= $new_array= array();
                foreach($arr as $k=>$v){
                $keysvalue[$k] = $v[$keys];
                }
                if($type== 'asc'){
                asort($keysvalue);
                }else{
                arsort($keysvalue);
                }
                reset($keysvalue);
                foreach($keysvalue as$k=>$v){
                $new_array[$k] = $arr[$k];
                }
                return$new_array;
            
}
//多维数组排序按照某个SORT_ASC//可选。规定排列顺序。可能的值是 SORT_ASC 和 SORT_DESC。
function multi_array_sort($multi_array="",$sort_key="",$sort=SORT_DESC){ 
    error_reporting(0);
    if(is_array($multi_array)){ 
        foreach ($multi_array as $row_array){ 
            if(is_array($row_array)){ 
                $key_array[] = $row_array[$sort_key]; 
            }else{ 
                return false; 
            } 
        } 
    }else{ 
        return false; 
    } 

    array_multisort($key_array,$sort,$multi_array); 
    return $multi_array; 
} 



function GetIP() {
    if ($_SERVER["HTTP_X_FORWARDED_FOR"])
        $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
    else if ($_SERVER["HTTP_CLIENT_IP"])
        $ip = $_SERVER["HTTP_CLIENT_IP"];
    else if ($_SERVER["REMOTE_ADDR"])
        $ip = $_SERVER["REMOTE_ADDR"];
    else if (getenv("HTTP_X_FORWARDED_FOR"))
        $ip = getenv("HTTP_X_FORWARDED_FOR");
    else if (getenv("HTTP_CLIENT_IP"))
        $ip = getenv("HTTP_CLIENT_IP");
    else if (getenv("REMOTE_ADDR"))
        $ip = getenv("REMOTE_ADDR");
    else
        $ip = "Unknown";
    return $ip;
}


function is_weixin(){ 
        if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false ) { 
                        return true; 
        }        
        return false; 
}




//换掉空格、换行符
 function replace_html($str=""){
        $str = str_replace("\n","<br>",$str);
    $str = str_replace(chr(32),"&nbsp;",$str);
    return $str;
}





function w_guid() {
    $charid = strtoupper(md5(uniqid(mt_rand(), true)));
    $uuid =
    substr($charid, 0, 8).
    substr($charid, 8, 4).
    substr($charid,12, 4).
    substr($charid,16, 4).
    substr($charid,20,12);
    return $uuid;
}


     function getRandOnlyId() {
        //新时间截定义,基于世界未日2012-12-21的时间戳。
        $endtime=1356019200;//2012-12-21时间戳
        $curtime=time();//当前时间戳
        $newtime=$curtime-$endtime;//新时间戳
        $rand=rand(0,99);//两位随机
        $all=$rand.$newtime;
        $onlyid=base_convert($all,10,36);//把10进制转为36进制的唯一ID
        return $onlyid;
    }


function order_number(){
    $order_number ='HY'. date('Ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);

    return $order_number;
}


//字符串安全输入函数

function str_safe($array=""){
    //有错误时候导致页面不刷新、、警告也是
    //error_reporting(0);
 while(list($key,$var) = each($array)) {
  if ($key != 'argc' && $key != 'argv' && (strtoupper($key) != $key ||'' .intval($key) == "$key")) {
   if (is_string($var)) {
     //$array[$key] = stripslashes($var);
     //$array[$key] = lib_replace_end_tag($var);
     //$array[$key] = addslashes($var);
     //$array[$key] = addslashes($var);
     $array[$key] = htmlspecialchars(addslashes($var));
    //$array[$key] = strip_tags($var);
   }
   if (is_array($var))  {
    $array[$key] = str_safe($var);
   }
  }
 }
 return $array;     
}



function get_month_first($month=1){
        //获取本月第一天/最后一天的时间戳
        $year = date("Y");
        $month = $month;
        $allday = date("t");
        $start_time = strtotime($year."-".$month."-1");
        //$end_time = strtotime($year."-".$month."-".$allday);   
        return $start_time; 
}


    function make_coupon_card($n=8) {    
        $code = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';    
        $rand = $code[rand(0,25)]    
            .strtoupper(dechex(date('m')))    
            .date('d').substr(time(),-5)    
            .substr(microtime(),2,5)
            
            .sprintf('%02d',rand(0,99));    
        for(    
            $a = md5( $rand, true ),    
            $s = '0123456789ABCDEFGHIJKLMNOPQRSTUV',    
            $d = '',    
            $f = 0;    
            $f < $n;    
            $g = ord( $a[ $f ] ),    
            $d .= $s[ ( $g ^ ord( $a[ $f + 8 ] ) ) - $g & 0x1F ],    
            $f++    
        );    
        return $d;    
    }    







    /**
 * Goofy 2011-11-30
 * getDir()去文件夹列表，getFile()去对应文件夹下面的文件列表,二者的区别在于判断有没有“.”后缀的文件，其他都一样
 */
 
//获取文件目录列表,该方法返回数组
function getDir($dir) {
    $dirArray[]=NULL;
    if (false != ($handle = opendir ( $dir ))) {
        $i=0;
        while ( false !== ($file = readdir ( $handle )) ) {
            //去掉"“.”、“..”以及带“.xxx”后缀的文件
            if ($file != "." && $file != ".."&&!strpos($file,".")) {
                $dirArray[$i]=$file;
                $i++;
            }
        }
        //关闭句柄
        closedir ( $handle );
    }
    return $dirArray;
}
 
//获取文件列表
function getFile($dir) {
    $fileArray[]=NULL;
    if (false != ($handle = opendir ( $dir ))) {
        $i=0;
        while ( false !== ($file = readdir ( $handle )) ) {
            //去掉"“.”、“..”以及带“.xxx”后缀的文件
            if ($file != "." && $file != ".."&&strpos($file,".")) {
                $fileArray[$i]=$file;
                if($i==100){
                    break;
                }
                $i++;
            }
        }
        //关闭句柄
        closedir ( $handle );
    }
    return $fileArray;
}
 
//调用方法getDir("./dir")……可以是绝对路径也可以是相对路径

function deldir($dir) {
  //先删除目录下的文件：
  $dh=opendir($dir);
  while ($file=readdir($dh)) {
    if($file!="." && $file!="..") {
      $fullpath=$dir."/".$file;
      if(!is_dir($fullpath)) {
          unlink($fullpath);
      } else {
          deldir($fullpath);
      }
    }
  }
 
  closedir($dh);
  //删除当前文件夹：
  if(rmdir($dir)) {
    return true;
  } else {
    return false;
  }
}  


//验证码

    function get_code(){
        $_SESSION['code']='';
//将验证码保存到session里，供全局使用
        //将验证码保存到session里，供全局使用
        $nums = "";
        for($i=0;$i<4;$i++){
        //产生随机数并转换成十六进制
        $nums.=dechex(mt_rand(0,15));
        }
        //将验证码写入cookie
        
        $_SESSION['code']=$nums;
        //设置验证码长和宽
        $_width = 60;
        $_height = 20;
        //创建一张图片
        $_img = imagecreatetruecolor($_width,$_height);
        //创建一个白色
        $_white = imagecolorallocate($_img,220,250,250);
        //填充背景
        imagefill($_img,0,0,$_white);
        //随机画6条线条
        for($i=0;$i<6;$i++){
        $_rnd_color = imagecolorallocate($_img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
        imageline($_img,mt_rand(0,$_width),mt_rand(0,$_width),mt_rand(0,$_width),mt_rand(0,$_width),$_rnd_color);
        }
        //随机画出雪花
        for($i=0;$i<60;$i++){
        imagestring($_img,1,mt_rand(1,$_width),mt_rand(1,$_height),"*",imagecolorallocate($_img,mt_rand(200,255),mt_rand(200,255),mt_rand(200,255)));
        }
        //输出验证码
        for($i=0;$i<strlen($_SESSION['code']);$i++){
        imagestring($_img,mt_rand(6,10),$i*$_width/4+mt_rand(1,10),mt_rand(1,$_height/2),$_SESSION['code'][$i],imagecolorallocate($_img,mt_rand(0,100),mt_rand(0,150),mt_rand(0,200)));
        }
        //输出和销毁
        
        header("Content-Type:image/png");
        imagepng($_img);
        imagedestroy($_img);        
    }  




function isMobile()
{ 
    // 如果有HTTP_X_WAP_PROFILE则一定是移动设备
    if (isset ($_SERVER['HTTP_X_WAP_PROFILE']))
    {
        return true;
    } 
    // 如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
    if (isset ($_SERVER['HTTP_VIA']))
    { 
        // 找不到为flase,否则为true
        return stristr($_SERVER['HTTP_VIA'], "wap") ? true : false;
    } 
    // 脑残法，判断手机发送的客户端标志,兼容性有待提高
    if (isset ($_SERVER['HTTP_USER_AGENT']))
    {
        $clientkeywords = array ('nokia',
            'sony',
            'ericsson',
            'mot',
            'samsung',
            'htc',
            'sgh',
            'lg',
            'sharp',
            'sie-',
            'philips',
            'panasonic',
            'alcatel',
            'lenovo',
            'iphone',
            'ipod',
            'blackberry',
            'meizu',
            'android',
            'netfront',
            'symbian',
            'ucweb',
            'windowsce',
            'palm',
            'operamini',
            'operamobi',
            'openwave',
            'nexusone',
            'cldc',
            'midp',
            'wap',
            'mobile'
            ); 
        // 从HTTP_USER_AGENT中查找手机浏览器的关键字
        if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT'])))
        {
            return true;
        } 
    } 
    // 协议法，因为有可能不准确，放到最后判断
    if (isset ($_SERVER['HTTP_ACCEPT']))
    { 
        // 如果只支持wml并且不支持html那一定是移动设备
        // 如果支持wml和html但是wml在html之前则是移动设备
        if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html'))))
        {
            return true;
        } 
    } 
    return false;
} 