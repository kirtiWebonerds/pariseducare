<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once "base.php";

class User extends Base{

	public $primary = "id"; 

	public function getAttributes()
	{

		return  ['name','email','password','contact','address','gender','site_name','created_by','updated_by','cretaed_on']; 		
	}


	public function tableName()
	{
		return "users"; 
	}
}
?>
