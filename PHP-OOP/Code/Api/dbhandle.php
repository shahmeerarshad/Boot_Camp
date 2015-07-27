<?php
include_once("simulator.php");
class dbHandler
{
	var $users;
	var $admin;
	public function __construct()
	{

		$sim=new simulator;

		$this->admin=array
			(
			 1=>array(
				  "username"=>"admin",
				 "password"=>"12345")
			);

		$this->users= array
			(
			 "1"=> array
			 (
			  "id"=>1,
			  "email"=>"shahmeer@gmail.com",
			  "username"=>"shy",
			  "password"=>"12345"
			 ),

			 "2"=> array
			 (
			  "id"=>2,
			  "email"=>"hassan@gmail.com",
			  "username"=>"sherry",
			  "password"=>"12345"
			 ),

			 "3"=> array
			 (
			  "id"=>3,
			  "email"=>"salman@gmail.com",
			  "username"=>"salman",
			  "password"=>"12345"
			 )
			

			 );
  }
  function addUser()
  { 
    $sim=new simulator;
    $handle=fopen("php://stdin","r");
    echo "Enter Email\n";
    $email=fgets($handle);
    echo "Enter Username";
    $username=fgets($handle);
    echo "Enter Password";
    $password=fgets($handle);
    $id=sizeof($this->users)+1;
    $newUser= array
      (
        "id"=>$id,
        "email"=>$email,
        "username"=>$username,
        "password"=>$password
      );
    array_push($this->users,$newUser);
    $sim->followUp($username);
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
	function allUsersF($verify)

	{
		echo"###############################################################\n";

		foreach($this->users as $values)
    {
      if($values["username"]!= trim($verify)){
			echo $values["id"] ." ". $values["username"] . "\n";
      }
		}
  }
  function sendTweets($verify,$text,$location,$photo)
  {
               $myfile = fopen("$verify", "a") or die("Unable to open file!");
               fwrite($myfile,"\n" . $text . $location . $photo . "\n" );
               Echo "Tweet Posted";

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

	function checkAdmin($username,$password)
	{
		foreach($this->admin as $value)
		{	
			if(trim($value["username"])==trim($username) && trim( $value["password"])==trim($password))
			{
				return $value["username"];

			} 
		}

	}

}


?>
