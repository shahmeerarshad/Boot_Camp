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
			$obj->wrongLogin(); 
		


    }
  }

	function addFollowers($verify)
	{	$obj=new simulator;
		$dbh1=new dbHandler;  
    $obj->returnUsersF($verify); 
  $follow= $obj->getFollowersInfo(); 
		$following=array();
    array_push($following,$follow);
    $obj->afterFollowing($following,$verify,$follow);

	}
	function getFollowers($following,$verify)
  {
    return $following;

  }
} 

?>
