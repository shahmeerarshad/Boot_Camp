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
  public function __construct()
  {
  }
# function startup()
# {
#   echo"Not a member?\n Press 1 for singup\n";
#   Echo"Else press 2 for signin\n"; 
#   $handle =fopen("php://stdin","r");
#   $a =fgets($handle);
#   if($a==1)
#   {
#  $this-> signup();
#   }
#   else if ($a==2)
#   {
#     echo "loging in...";
#     $this->my_login();
#   }
# 
# }
   function my_login()
  {
    $ojb = new dbHandler;
    $handle = fopen ("php://stdin","r");
    Echo "===========Enter Username================\n";
    $a =trim( fgets($handle));
    Echo "===========Enter Password===============\n";
    $b=trim(fgets($handle));
    $verify= $ojb->checkUser($a,$b);
    if($verify)
    {
      echo "WELCOME TO YOUR ACCOUNT" . "  " . "$a";
      $this->afterLogin();

    }
    else 
    {
      Echo "Please Re-Enter Your Credentials\n";
        $this->my_login();
    }

#    if ($a==1)
#    {
#      Echo"Enter Admin Username\n";
#      $admin_username=fgets($handle);
#      print($admin_username);
#//      echo"Enter Password\n";
#//      $admin_password=fgets($handle);
#//      print($admin_password);
#
#      if(trim($admin_username)=='saad')
#      {
#      echo "====== Welcome Admin ======";
#      }
#      else
#      {
#        echo "invalid username\n";
#        echo "Press 1 to write a tweet\n";
#        $tt=fgets($handle);
#        if ($tt==1)
#        {
#        $tw->post_tweet();
#        }
#
#   }
#   }
   fclose($handle); 
  
  }
  
  public function afterLogin()
  {
    $dbh = new dbHandler;
    $twt = new tweet;
    $handle = fopen ("php://stdin","r");
    Echo "\n+=======Press 1 To Show Fellow Tweeters===========\n";
    Echo "\n+=======Press 2 To post a Tweet===========\n";
    Echo "\n+=======Press 1 To post a Show Fellow Tweeters===========\n";
    $a =fgets($handle);
    if($a==1)
    {
    $this->addFollowers();
    }
    elseif($a==2)
    {
      $twt->post_tweet();
    }

  }
  function addFollowers()
  {
  $dbh1=new dbHandler;  
  $handle = fopen ("php://stdin","r");
  $dbh1->allUsers();  
  Echo "========Press the ID Number of the User to Start Following it===========\n";
  $b =fgets($handle);
  $following=array();
  $follow= $dbh1->returnUser($b);
  array_push($following,$follow);
  Echo "You started Following" . "$follow";

  }
#function signup()
#{
# $handle=fopen("php://stdin","r");
# Echo "Enter Full Name";
#$name = fgets($handle);
#$myfile = fopen("$name.txt", "a") or die("Unable to open file!");
#
#fwrite($myfile, $name);
#
#Echo "Enter Email";
#$email=fgets($handle);
#fwrite($myfile,$email);
#
#
# Echo "Password";
#$pass=fgets($handle);
#fwrite($myfile,$pass);
#fclose($myfile);
#}

}
$bj = new user();
?>
