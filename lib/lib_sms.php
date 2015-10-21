<?php
/**
* 短信验证码
*/
class Sms 
{
	
	function __construct()
	{
		header("Content-type:text/html; charset=UTF-8");
	}



	function Post($curlPost,$url){
			$curl = curl_init();
			curl_setopt($curl, CURLOPT_URL, $url);
			curl_setopt($curl, CURLOPT_HEADER, false);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_NOBODY, true);
			curl_setopt($curl, CURLOPT_POST, true);
			curl_setopt($curl, CURLOPT_POSTFIELDS, $curlPost);
			$return_str = curl_exec($curl);
			curl_close($curl);
			return $return_str;
	}
	function xml_to_array($xml){
		$reg = "/<(\w+)[^>]*>([\\x00-\\xFF]*)<\\/\\1>/";
		if(preg_match_all($reg, $xml, $matches)){
			$count = count($matches[0]);
			for($i = 0; $i < $count; $i++){
			$subxml= $matches[2][$i];
			$key = $matches[1][$i];
				if(preg_match( $reg, $subxml )){
					$arr[$key] = $this->xml_to_array( $subxml );
				}else{
					$arr[$key] = $subxml;
				}
			}
		}
		return $arr;
	}
	function random($length = 6 , $numeric = 0) {
		PHP_VERSION < '4.2.0' && mt_srand((double)microtime() * 1000000);
		if($numeric) {
			$hash = sprintf('%0'.$length.'d', mt_rand(0, pow(10, $length) - 1));
		} else {
			$hash = '';
			$chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789abcdefghjkmnpqrstuvwxyz';
			$max = strlen($chars) - 1;
			for($i = 0; $i < $length; $i++) {
				$hash .= $chars[mt_rand(0, $max)];
			}
		}
		return $hash;
	}

	function send($phone="",$p=1){
		$target = "http://106.ihuyi.cn/webservice/sms.php?method=Submit";


		$mobile = $phone;
		
		
		$mobile_code = $this->random(4,1);
		if(empty($mobile)){
			exit('手机号码不能为空');
		}

		// if(empty($_SESSION['send_code']) or $send_code!=$_SESSION['send_code']){
		// 	//防用户恶意请求    
		// 	exit('请求超时，请刷新页面后重试');
		// }

		$post_data = "account=cf_lingxiu&password=123456&mobile=".$mobile."&content=".rawurlencode("您的验证码是：".$mobile_code."。请不要把验证码泄露给其他人。");
		//密码可以使用明文密码或使用32位MD5加密
		$status=-1;
		$gets =  $this->xml_to_array($this->Post($post_data, $target));
		if($gets['SubmitResult']['code']==2){
			$_SESSION['mobile'] = $mobile;
			switch ($p) {
				case 1:
					$_SESSION['mobile_code'] = $mobile_code;
					break;
				case 2:
					$_SESSION['email_code'] = $mobile_code;
					break;
				case 3:
					$_SESSION['tx_code'] = $mobile_code;
					break;
				default:
					# code...
					break;
			}
			
			$status=1;
		}
		return $status;		
	}

}