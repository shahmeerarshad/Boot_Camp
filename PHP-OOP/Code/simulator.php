<?php
include_once "Api/user.php";
include_once "Api/tweet.php";
include_once "Api/dbhandle.php";
include_once "Api/profile.php";

$obj=new simulator();
Echo "================= Welcome To Twitter ====================\n";
Echo "================= Press 1 for SignIn ====================\n";
$handle =fopen("php://stdin","r");
$a =fgets($handle);
if($a==1)
{
	$obj->loginInfo();


}
class simulator
{

	public function __construct()
	{
		//  $this->setting();

		$twt= new tweet();
	}


	public function followUp($verify)
	{  
		$usr=new user;
		$twt=new tweet();
		$prf=new profile;

		echo "WELCOME TO YOUR ACCOUNT";
		echo  "\n+=======Press 1 To Show Fellow Tweeters===========\n";
		echo  "\n+=======Press 2 To Post a Tweet===================\n";
		Echo "\n+========Press 3 To View Your Tweets===============\n";
		echo "\n=========Press 4 to Edit your Profile==============\n";
		echo "\n=========Press 5 to View your Profile==============\n";
		$handle=fopen("php://stdin","r");
		$a =fgets($handle);
		if($a==1)
		{
			$usr->addfollowers();
		}
		elseif($a==2)
		{
			$twt->post_tweet($verify);
		}

		elseif($a==3)
		{
			$twt->getTweets($verify);
		}	

		elseif($a==4)
		{
			$prf->saveProfile($verify);

		}

		elseif($a==5)
		{
			$prf->showProfile($verify);
		}


	}
	public function loginInfo()
	{

		$usr=new user;
		$handle = fopen ("php://stdin","r");
		Echo "===========Enter Username================\n";
		$a =trim( fgets($handle));
		Echo "===========Enter Password===============\n";
		$b=trim(fgets($handle));
		$usr->myLogin($a,$b);
	}

}

?>
