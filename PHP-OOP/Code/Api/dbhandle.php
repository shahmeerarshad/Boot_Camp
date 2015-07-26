<?php
include_once("simulator.php");
class dbHandler
{
	var $users;
	public function __construct()
	{

		$sim=new simulator;
		$this->users= array
			(
			 "1"=> array
			 (
			  "id"=>1,
			  "name"=>"Shahmeer Arshad",
			  "email"=>"shahmeer@gmail.com",
			  "username"=>"shy",
			  "password"=>"12345"
			 ),

			 "2"=> array
			 (
			  "id"=>2,
			  "name"=>"Hassan Nawaz",
			  "email"=>"hassan@gmail.com",
			  "username"=>"sherry",
			  "password"=>"12345"
			 ),

			 "3"=> array
			 (
			  "id"=>3,
			  "name"=>"Salman Zafar",
			  "email"=>"salman@gmail.com",
			  "username"=>"salman",
			  "password"=>"12345"
			 )


			 );
	}

	function returnUser($x)
	{

		foreach($this->users as $values)
		{
			if($values["id"]==$x)
			{
				return $values["username"];
			}
		}
	}
	function allUsers()

	{
		echo"###############################################################\n";

		foreach($this->users as $values)
		{
			echo $values["id"] ." ". $values["username"] . "\n";

		}
	}
	function checkUser($username,$password)
	{
		
			foreach($this->users as $value)
		{	
			if(trim($value["username"])==trim($username) && trim( $value["password"])==trim($password))
			{
				return $value["username"];

			} 
		}
return 0;
	}

}


?>
