<?php  
class db {  
    protected $mysqli;                          //mysqli实例对象  
    public $sql;                                //sql语句  
    protected $rs;                              //结果集  
    protected $query_num    = 0;                //执行次数  
    protected $fetch_mode   = MYSQLI_ASSOC;     //获取模式   
    protected $table;
    private $handle;
  
    //构造函数：主要用来返回一个mysqli对象  
   //  public function  __construct() { 
   //  	$this->time = $this->microtime_float(); 
   //      $this->mysqli    = new mysqli("localhost","root","root","lx_xyd");  
   //      if(mysqli_connect_errno()) {  
   //          $this->mysqli    = false;  
   //          echo '<h2>'.mysqli_connect_error().'</h2>';  
   //          die();  
   //      } else {  
   //          $this->mysqli->set_charset("utf8");  
   //      }  

			// $handle = fopen(LOG_PATH."dblog.txt", "a+");
			// $this->handle=$handle;

		
   //  } 
        public function  init($db_host, $db_user, $db_pwd, $db_database, $conn, $coding) { 
	    	$this->time = $this->microtime_float(); 
	        $this->mysqli    = new mysqli($db_host,$db_user,$db_pwd,$db_database);  
	        if(mysqli_connect_errno()) {  
	            $this->mysqli    = false;  
	            echo '<h2>'.mysqli_connect_error().'</h2>';  
	            die();  
	        } else {  
	            $this->mysqli->set_charset($coding);  
	        }  

				$handle = fopen(LOG_PATH."dblog.txt", "a+");
				$this->handle=$handle;

		
    } 
  

	//查询 
	public function query($sql) {
		$this->write_log("查询 ".$sql);
		$this->rs=$query = $this->mysqli->query($sql);
		if(!$query) $this->halt('Query Error: ' . $sql);
		return $query;
	}
	
	//获取一条记录（MYSQL_ASSOC，MYSQL_NUM，MYSQL_BOTH）				
	public function get_one($sql,$result_type = MYSQL_ASSOC) {
		$query = $this->query($sql);
		$rt = $query->fetch_array($result_type);
		$this->write_log("获取一条记录 ".$sql);
		return $rt;
	}

	//获取全部记录
	public function get_all($sql,$result_type = MYSQL_ASSOC) {
		$query = $this->query($sql);
		$rt=$query->fetch_all($result_type);
		$this->write_log("获取全部记录 ".$sql);
		return $rt;
	}
	
	//插入
	public function insert($table,$dataArray) {
		$field = "";
		$value = "";
		if( !is_array($dataArray) || count($dataArray)<=0) {
			$this->halt('没有要插入的数据');
			return false;
		}
		while(list($key,$val)=each($dataArray)) {
			$field .="$key,";
			$value .="'$val',";

		}
		$field = substr( $field,0,-1);
		$value = substr( $value,0,-1);
		
		$sql = "insert into $table($field) values($value)";
		$this->write_log("插入 ".$sql);
		//if(!$this->query($sql)) return false;//
		return true;
	}

	//更新
	public function update($table,$dataArray,$condition="") {
		if( !is_array($dataArray) || count($dataArray)<=0) {
			$this->halt('没有要更新的数据');
			return false;
		}
		$value = "";
		while( list($key,$val) = each($dataArray))
		$value .= "$key = '$val',";
		$value .= substr( $value,0,-1);
		$sql = "update $table set $value where 1=1 and $condition";
		$this->write_log("更新 ".$sql);
		if(!$this->query($sql)) return false;
		return true;
	}

	//删除
	public function delete( $table,$condition="") {
		if( empty($condition) ) {
			$this->halt('没有设置删除的条件');
			return false;
		}
		$sql = "delete from $table where 1=1 and $condition";
		$this->write_log("删除 ".$sql);
		if(!$this->query($sql)) return false;
		return true;
	}

	//返回结果集
	public function fetch_array($query, $result_type = MYSQL_ASSOC){
		$this->write_log("返回结果集");
		return $this->fetch_array($query, $result_type);
	}

	//获取记录条数
	// public function num_rows($results) {
	// 	if(!is_bool($results)) {
	// 		$num = $this->rs->num_rows;
	// 		$this->write_log("获取的记录条数为".$num);
	// 		return $num;
	// 	} else {
	// 		return 0;
	// 	}
	// }

		//获取记录条数
	public function num_rows() {
	
			$num = $this->mysqli->affected_rows;
			$this->write_log("获取的记录条数为".$num);
			return $num;

	}

	// 释放结果集
	// public function free_result() {
	// 	$void = func_get_args();
	// 	foreach($void as $query) {
	// 		if(is_resource($query) && get_resource_type($query) === 'mysql result') {
	// 			return mysql_free_result($query);
	// 		}
	// 	}
	// 	$this->write_log("释放结果集");
	// }

	//获取最后插入的id
	public function insert_id() {
		$id = $this->mysqli->insert_id;
		$this->write_log("最后插入的id为".$id);
		return $id;
	}

	//关闭数据库连接
	protected function close() {
		$this->write_log("已关闭数据库连接");
		return @$this->mysqli->close();
	}

	//错误提示
	private function halt($msg='') {
		$msg .= "\r\n".$this->mysqli->error;
		$this->write_log($msg);
		die($msg);
	}

	//析构函数
	// public function __destruct() {
	// 	//$this->free_result();
	// 	$use_time = ($this-> microtime_float())-($this->time);
	// 	$this->write_log("完成整个查询任务,所用时间为".$use_time);
	// 	//if($this->is_log){
	// 		fclose($this->handle);
	// 	//}
	// }
	
	//写入日志文件
	public function write_log($msg=''){
		//if($this->is_log){
			$text = date("Y-m-d H:i:s")." ".$msg."\r\n";
			//fwrite($this->handle,$text);
		//}
	}
	
	//获取毫秒数
	public function microtime_float() {
		list($usec, $sec) = explode(" ", microtime());
		return ((float)$usec + (float)$sec);
	}

  
   
}  