<?php
/**
 * URL处理类
 * @copyright   Copyright(c) 2011
 * @author      yuansir <yuansir@live.cn/yuansir-web.com>
 * @version     1.0
 */
final class Route{
        public $url_query;
        public $url_type;
        public $route_url = array();


        public function __construct() {
                $this->url_query = parse_url($_SERVER['REQUEST_URI']);      
        }
        
        /**
         * 设置URL类型
         * @access      public
         */
        public function setUrlType($url_type = 2){
                if($url_type > 0 && $url_type <3){
                        $this->url_type = $url_type;
                }else{
                        trigger_error("指定的URL模式不存在！");
                }
        }

        /**
         * 获取数组形式的URL  
         * @access      public
         */
        public function getUrlArray(){
          //echo $this->url_type;
                $this->makeUrl();
                return $this->route_url;
        }
        /**
         * @access      public
         */
        public function makeUrl(){
                switch ($this->url_type){
                        case 1:
                                $this->querytToArray();
                                break;
                        case 2:
                                $this->pathinfoToArray();
                                break;
                }
        }
        /**
         * 将query形式的URL转化成数组
         * @access      public
         */
        public function querytToArray(){
          //echo $this->url_query['query'];
                $arr = !empty ($this->url_query['query']) ?explode('&', $this->url_query['query']) :array();
                $array = $tmp = array();

                if (count($arr) > 0) {
                        foreach ($arr as $item) {
                                $tmp = explode('=', $item);
                                $array[$tmp[0]] = $tmp[1];
                        }
                        //var_dump($array);
                        if (isset($array['app'])) {
                                $this->route_url['app'] = $array['app'];
                                unset($array['app']);
                        } 
                        if (isset($array['controller'])) {
                                $this->route_url['controller'] = $array['controller'];
                                unset($array['controller']);
                        } 
                        if (isset($array['action'])) {
                                $this->route_url['action'] = $array['action'];
                                unset($array['action']);
                        }
                        if(count($array) > 0){
                                $this->route_url['params'] = $array;
                        }
                }else{
                        $this->route_url = array();
                }   
        }
        /**
         * 将PATH_INFO的URL形式转化为数组
         * @access      public
         */
        public function pathinfoToArray(){
            //echo $_SERVER['PATH_INFO'];
            if( !isset( $_SERVER['PATH_INFO'] ) ){
                $pathinfo = 'default';
            }else{
                $pathinfo =  explode('/', $_SERVER['PATH_INFO']);
            }

            if( is_array($pathinfo) && !empty($pathinfo) ){
               unset($pathinfo[0]);
               $this->route_url['app']=isset($pathinfo[1])?$pathinfo[1]:'';
               unset($pathinfo[1]);
               $this->route_url['controller']=isset($pathinfo[2])?$pathinfo[2]:'';
               unset($pathinfo[2]);
               $this->route_url['action']=isset($pathinfo[3])?$pathinfo[3]:'';
               unset($pathinfo[3]);

               $params="";
               
               for ($i=4; $i <(count($pathinfo)+4); $i++) { 
                 $pathinfo[$i+1]=isset($pathinfo[$i+1])?$pathinfo[$i+1]:"";
                 $params[$pathinfo[$i]]=$pathinfo[$i+1];
                 $i=$i+1;
               }
               

               $this->route_url['params']=isset($params)?$params:'';


            }else{
                 $this->route_url = array();
            }

            

        }
}


