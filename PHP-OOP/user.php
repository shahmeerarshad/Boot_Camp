<?php
include ("tweet.php");
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
  public function __construct($user_id,$full_name,$phone,$email,$username,$password)
  {
    $users=array();
    $users[0]=0;
  $this->user_id=$user_id;
   $this->full_name=$full_name;
   $this->phone=$phone;
   $this->email=$email;
   $this->username=$username;
   $this->password=$password;
//   $this->cons();

  }
  public static function cons()
  {
    $obj=new user(1,"shahmeer Arshad",03314489844,"shahmeer@gmail.com","sherry","123456");
    echo "$users[0]";
 echo "$obj->user_id\n"; 
 echo "$obj->full_name\n"; 
 echo "$obj->phone\n"; 
 echo "$obj->email\n"; 
 echo "$obj->username\n"; 
$obj=new user(1,"shahmeer Arshad",03314489844,"shahmeer@gmail.com","sherry","123456");
 echo "$obj->user_id\n"; 
 echo "$obj->full_name\n"; 
 echo "$obj->phone\n"; 
 echo "$obj->email\n"; 
 echo "$obj->username\n"; 
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
#   function my_login()
#  {
#
#    $handle = fopen ("php://stdin","r");
#    echo"Press 1 for Admin Login and 2 for simple Login\n";   
#    $a = fgets($handle);
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
#   fclose($handle); 
#  
#}
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
  function show()
  {
  
//    $obj=new user(1,"shahmeer Arshad",03314489844,"shahmeer@gmail.com","sherry","123456");
  }

}

$userr=user::cons();
?>
