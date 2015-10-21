<?php
/**
* 
*/
class indexModel extends Model
{
	

	   function test(){
                echo "this is test homeModel111";exit();
        }
        
        function testResult(){
               $this->db->insert('user',array('name'=>'asdsad','age'=>time()));
              
        }
}