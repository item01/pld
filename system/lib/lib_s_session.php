<?php  
class s_session {  
       
private $db=null; 

 public function __construct(){
 	$this->db_con();
	session_set_save_handler(   
	array(&$this,"sess_open"), 
	array(&$this,"sess_close"),
	array(&$this,"sess_read"),  
	array(&$this,"sess_write"),
	array(&$this,"sess_destroy"),
	array(&$this,"sess_gc")
	);
	session_start();
	
 }

public function db_con(){
		$this->db=Application::$_lib['db'];
		$config_db=Application::$_config['db'];
		$this->db->init(
                        $config_db['db_host'],
                        $config_db['db_user'],
                        $config_db['db_password'],
                        $config_db['db_database'],
                        $config_db['db_conn'],
                        $config_db['db_charset']);

		//$this->db=$this->db-;

	
}
  
public function sess_open($save_path, $session_name) {   
//echo 'open';
    return true;   
}   
  
public function sess_close() { 
//global $SESS_LIFE;
//$this->db->close(); 
return $this->sess_gc();   
}   
  
public function sess_read($key) {

 // echo 'read';
    
    $sql  =   "select * from  lx_session where session_id='".$key."'";   
    $result=$this->db->query($sql);
    $result=$result->fetch_array();
    if ($result) {
       return $result['data'];
    }else{
        return "";
    }
}   
  
public function sess_write($key, $val) {     
  $this->db_con();
	$last_time=time();
    $uid = isset($_SESSION['uid']) ? $_SESSION['uid'] : -1; 
    $sql  =   "SELECT * from lx_session where `session_id`='".$key."'";
    $result=$this->db->query($sql);
    $result=$result->fetch_array();
    // if (!$result) {
    // 	$sql  =   "INSERT into lx_session(session_id,data,uid,last_time) values ('$key','$val','$uid','$last_time')";
    //     $result=$this->db->query($sql);
    //     exit();
    // }
   

    if ($result) {        
        $sql  =   "UPDATE lx_session SET data='".$val."',last_time=$last_time WHERE session_id='".$key."'";
        $results=$this->db->query($sql);        
    }else{
        $sql  =   "INSERT into lx_session(session_id,data,uid,last_time) values ('$key','$val','$uid','$last_time')";
        $result=$this->db->query($sql);
        // $sql  =   "UPDATE member SET is_online=1,login_time=$last_time WHERE id=$uid";
        // $this->db->query($sql);

    }

       return $result;
}   
  
public function sess_destroy($key) { 
      
  $this->db_con();
  $last_time=time();
  $uid = isset($_SESSION['uid']) ? $_SESSION['uid'] : -1; 

  // $sql="INSERT INTO `history_login` (`uid`,`login_time`,`status`)VALUES('$uid','$last_time','-1')";
  // $this->db->query($sql);

  $sql =   "DELETE from lx_session where session_id='".$key."'";
  $result=$this->db->query($sql);
  if ($uid==-1) {
     exit();
  }
  //有漏洞
  // $sql  =   "UPDATE member SET is_online=0,loginout_time=$last_time WHERE id=$uid";
  // $this->db->query($sql);
  return $result;
}   
  
public function sess_gc($maxlifetime="") {
    // $maxlifetime = ini_get("session.gc_maxlifetime");   
    // $max_time=time()-$maxlifetime;
    // //echo $max_time;
    // $mysqli=db_con();
    // $last_time=time();
    // $sql  =   "UPDATE member SET is_online=0,loginout_time=$last_time WHERE id in (SELECT `uid` from `lx_session` where last_time<$max_time)";
    // $this->db->query($sql);
    // $sql="SELECT `uid` from `lx_session` where last_time<$max_time";
    // $query=$this->db->query($sql);
    // $list=$query->fetch_all();
    // if($list){
    //   foreach ($list as $key => $e) {

    //     $tid=$e[0];
    //       $sql="INSERT INTO `history_login` (`uid`,`login_time`,`status`)VALUES('$tid','$last_time','-1')";
    //       $this->db->query($sql);
    //   }
    // }
    
    // $sql =   "DELETE from lx_session where last_time<$max_time";
    // $result=$this->db->query($sql);
    // $this->db->close(); 
    return true;
}   

   

  
 //echo ini_get("session.gc_maxlifetime") ;exit();
//$_SESSION['ss']='adas';

//exit();
//session_id();


}  