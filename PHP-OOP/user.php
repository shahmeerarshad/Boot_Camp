<?php
class user
{
 var  $user_id;
 var $full_name;
 var $phone;
 var $email;
 var $username;
 var $followers;
 var $following;
 var $password;
 var $a;
 var $b;
  public function __construct()
  {

    $followers=array();
    $following=array();
    $user_id=1;
    $full_name="shahmeer arshad";
    $phone=0331123457;
    $username="admin";
    $this->startup();
    $password="tele0900";  
  }
 function startup()
 {
   echo"Not a member?\n Press 1 for singup\n";
   Echo"Else press 2 for signin\n"; 
   $handle =fopen("php://stdin","r");
   $a =fgets($handle);
   if($a==1)
   {
     echo "signingup";
   }
   else if ($a==2)
   {
     echo "loging in...";
     $this->my_login();
   }
 
 }
   function my_login()
  {

    $handle = fopen ("php://stdin","r");
    echo"Press 1 for Admin Login and 2 for simple Login\n";   
    $a = fgets($handle);
    if ($a==1)
    {
      Echo"Enter Admin Username\n";
      $admin_username=fgets($handle);
      print($admin_username);
      echo"Enter Password\n";
      $admin_password=fgets($handle);
      print($admin_password);
      if($admin_username==="saad")
      {
         echo "====== Welcome Admin ======";
      }
      else
      {
        echo "invalid password";
      }
    }
    fclose($handle); 
  
}
function signup()
{
 Echo "Enter Full Name";
 Echo "Enter Email";
 Echo "Password";

}

}
  $obj=new user();

?>
