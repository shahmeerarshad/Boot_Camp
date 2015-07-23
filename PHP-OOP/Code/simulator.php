<?php
include_once "Api/user.php";
include_once "Api/tweet.php";
include_once "Api/dbhandle.php";
class simulator
{
  
  public function __construct()
  {
    $this->setting();
  }
   public function setting ()

   {
    $usr=new user;
    Echo "================= Welcome To Twitter ====================\n";
    Echo "================= Press 1 for SignIn ====================\n";
    $handle =fopen("php://stdin","r");
    $a =fgets($handle);
    if($a==1)
    {
      $usr->my_login();
    
    }

   }

}

  $obj=new simulator();
?>
