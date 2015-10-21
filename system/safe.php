<?php

//if (!get_magic_quotes_gpc()) {
    !empty($_POST)     && Add_S($_POST);
    !empty($_GET)     && Add_S($_GET);
    !empty($_COOKIE) && Add_S($_COOKIE);
//    !empty($_SESSION) && Add_S($_SESSION);
//}
!empty($_FILES) && Add_S($_FILES);

function Add_S(&$array){
    if (is_array($array)) {
        foreach ($array as $key => $value) {
            if (!is_array($value)) {
				$value= 		@addslashes($value);
                $array[$key] =  @htmlspecialchars($value,ENT_QUOTES);
            } else {
                Add_S($array[$key]);
            }
        }
    }
}
$str1="script|logout|%20|or | and |select|update|from|where|order| by|*|delete|'|insert|into|values|create|table|database|load_file|out_file|union";
$arr=explode("|",$str1); 
$arr[]='"';
foreach ($_REQUEST as $key=>$value){
	for($i=0;$i<sizeof($arr);$i++){
		if($_REQUEST[$key] && !is_array($_REQUEST[$key])){
			if (substr_count(strtolower($_REQUEST[$key]),$arr[$i])>0){
				die("别没事找事~");
			echo "<script>parent.location.href='./close.php';</script>";
	            exit; 
			}
		}
	} 
}