<?php
include_once ("dbhandle.php");
include_once ("tweet.php");
include_once ("simulator.php");
class user
{
	var $users;
	var $obj;
	var $user_id;
	var $full_name;
	var $phone;
	var $email;
	var $username;
	var $followers;
	var $following;
	var $password;
	var $a;
	var $b;
	var $tw;
	var $ver_accnt;
	var $time_zone;
	var $global;
	public function __construct()
	{
	}
	function returnId($id)
	{
		return $id;
	}
	function myLogin($a,$b)
	{
		$obj=new simulator;
		$ojb = new dbHandler;
		$verify= $ojb->checkUser($a,$b);
		if($verify)
		{
			$obj->followUp($verify);

		}
		else 
		{
			Echo "Please Re-Enter Your Credentials\n";
			$obj->loginInfo(); 
		}


	}

	function addFollowers()
	{	$obj=new simulator;
		$dbh1=new dbHandler;  
		$handle = fopen ("php://stdin","r");
		$dbh1->allUsers();  
		Echo "========Press the ID Number of the User to Start Following it===========\n";
		$b =fgets($handle);
		$following=array();
		$follow= $dbh1->returnUser($b);
		array_push($following,$follow);
		Echo "You started Following" . "$follow" . "\n";
		echo "Press 1 to List the people your are following";
		$c=fgets($handle);
		if ($c==1)
		{
			$this->getFollowers($following);

		}

	}
	function getFollowers($follow)
	{
		$x=count($follow);
		for($i=0;$i<$x;$i++)
		{
			echo $follow[$i] . "\n";
		}
	}
}
?>
