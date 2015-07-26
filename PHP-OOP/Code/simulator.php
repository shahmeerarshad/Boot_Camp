<?php
include_once "Api/user.php";
include_once "Api/tweet.php";
include_once "Api/dbhandle.php";
include_once "Api/profile.php";
include_once "Api/list.php";

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
		$lst=new tweetList;

		echo "WELCOME TO YOUR ACCOUNT";
		echo  "\n+=======Press 1 To Show Fellow Tweeters===========\n";
		echo  "\n+=======Press 2 To Post a Tweet===================\n";
		Echo "\n+========Press 3 To View Your Tweets===============\n";
		echo "\n=========Press 4 to Edit your Profile==============\n";
		echo "\n=========Press 5 to View your Profile==============\n";
		echo "\n=========Press 6 to Create a list==================\n";
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
		elseif($a==6)
		{	$handle=fopen("php://stdin","r");
			
			echo"Enther the Name of the list: \n";
			$list_name=fgets($handle);
			$lst->saveList($verify,$list_name);
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
function afterList($list_name,$verify)
{
$handle=fopen("php://stdin","r");
$lst=new tweetList;
echo"Press 1 to add more People into list\n";
echo"Press 2 to delete from list\n";
Echo"Press 3 for Main Menu";
$input=fgets($handle);
if( $input==1)
{
$lst->addToList($list_name,$verify);

}
elseif($input==2)
{
$lst->removeFromList($list_name,$verify);
}
elseif($input==2)
{
$this->followUp($verify);
}
}
}

?>
