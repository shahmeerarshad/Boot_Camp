<?php
include_once "dbhandle.php";
class tweet
{
  
var  $user_id;
var  $text;
var  $photo;
var  $location;
public function __construct()
{



}

public function post_tweet()
{
  $dbh=new dbHandler;
  $handle =fopen("php://stdin","r");
    echo "Write your Tweet\n ";
  $tweet= fgets($handle); 
    
$myfile = fopen("tweets.txt", "w") or die("Unable to open file!");

fwrite($myfile,$tweet );
Echo "Tweet Posted";
}

}






?>
