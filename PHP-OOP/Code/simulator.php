<?php
include_once "Api/user.php";
include_once "Api/tweet.php";
include_once "Api/dbhandle.php";
include_once "Api/profile.php";
include_once "Api/list.php";
include_once "Api/message.php";
include_once"Api/admin.php";
$obj=new simulator();
$obj->welcome();
class simulator
{

	public function __construct()
	{
		//  $this->setting();

		$twt= new tweet();
  }
  public function wrongLogin()
  {
    Echo "Please Re-Enter Your Credentials\n";
           $this->loginInfo();

  }
  function tweetInput($verify)
  {
    $pic=new photo;
    $twt=new tweet;
    $dbh=new dbHandler;
    $handle =fopen("php://stdin","r");
    echo "Write your Tweet\n ";
    $tweet= fgets($handle);
    $text= " Tweet: " . $tweet;
    echo "Write Location";
    $loc=fgets($handle);
    $location= "Location: " . $loc;
    echo "Enter Photo\n";
    $this->pic_array=$pic->returnPhoto($verify);
    $size=count($this->pic_array);
    for($x=0;$x<=$size-1;$x++)
    {
      echo $x ." " .  $this->pic_array[$x] . "\n";
    }
    $pho=fgets($handle);
    $photo= "Picture: " . $this->pic_array[1];

$twt->post_tweet($verify,$text,$location,$photo);



  }
  public function getFollowersInfo()
  {   $dbh=new dbHandler;
      $handle=fopen("php://stdin","r");
      Echo "========Press the ID Number of the User to Start Following it===========\n";
      $b =fgets($handle);
      return $dbh->returnUser($b);

  }
  public function afterFollowing($following,$verify,$follow)
  {
    $usr=new user;
    $handle=fopen("php://stdin","r");
    Echo "You started Following"."\t" . "$follow" . "\n";
    echo "Press 1 to List the people your are following";
    $c=fgets($handle);
    if ($c==1)
    {
      var_dump($following); 
     $this-> followUp($verify);


    }

  }
    function showTweets($twts)
    {
      echo $twts;
    }

  public function welcome()
  {

Echo "================= Welcome To Twitter ====================\n";
Echo "================= Press 1 for SignIn  ====================\n";
Echo "================= Press 2 for SignIn as Admin  ====================\n";
Echo "================= Press 3 for SignUp  ====================\n";
$handle =fopen("php://stdin","r");
$a =fgets($handle);
if($a==1)
{
	$this->loginInfo();


}
elseif($a==2)
{
$this->adminLoginInfo();
}
elseif($a==3)
{
  $this->signUp();
}
  }
  public function signUp()
  {
    $db=new dbHandler;
    $db->addUser("4","dani@gmail.com","daniking","12345");
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
		echo "\n=========Press 7 to Send a Message==================\n";
		echo "\n=========Press 8 to View Messages==================\n";
		echo "\n=========Press L to Logout ========================\n";
		$handle=fopen("php://stdin","r");
		$a =trim(fgets($handle));
		if($a==1)
		{
			$usr->addfollowers($verify);
		}
		elseif($a==2)
		{
			$this->tweetInput($verify);
		}

		elseif($a==3)
		{
			$twt->getTweetsAdmin($verify);
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
		elseif($a==7)
		{
			$msg=new message;
			$msg->sendMessage($verify);

		}
		elseif($a==8)
		{
			$msg=new message;
			$msg->readMessage($verify);
    }
    elseif($a=="L")
    {
    $output = shell_exec('clear');
    echo $output;
$this->welcome();
    }
    else
    {
      Echo "\n Wrong Input \n";
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
 public function returnUsersF($verify)
  {
    $dbh=new dbHandler;
    $users=$dbh->allUsers();
    foreach($users as $value)
    {
      if($value["username"]!=trim($verify)){
        echo $value["id"] . "\t" . $value["username"]."\n";
      }
    }
  }
 public function returnUsers()
  {
    $dbh=new dbHandler;
    $users=$dbh->allUsers();
    foreach($users as $value)
    {
        echo $value["id"] . "\t" . $value["username"]."\n";
    }
  }
	public function adminLoginInfo()
	{

		$adm=new admin;
		$handle = fopen ("php://stdin","r");
		Echo "===========Enter Username================\n";
		$a =trim( fgets($handle));
		Echo "===========Enter Password===============\n";
		$b=trim(fgets($handle));
		$adm->AdminLogin($a,$b);
	}
	public function afterAdminLogin($verify)
{
		$db=new dbHandler;
		$db->allUsers();
		echo"Enter the User name to see all tweets\n";
		$twt=new tweet();
		$handle=fopen("php://stdin","r");
		$user=fgets($handle);
		$twt->gettweetsAdmin(trim($user));

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
  function saveAll($class_obj)
  {

  }
}
?>
