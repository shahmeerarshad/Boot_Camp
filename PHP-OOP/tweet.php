<?php
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
   $handle =fopen("php://stdin","r");
    echo "Write your Tweet ";
  $tweet= fgets($handle); 
    
}

}






?>
