<?php
/**
* 
*/
class indexModel extends Model
{
	

	   function test(){
                echo "this is test homeModel111";
        }
        
        function testResult(){
                $this->db->insert('user',array('id'=>1,'name'=>'asdsad'));
        }
}