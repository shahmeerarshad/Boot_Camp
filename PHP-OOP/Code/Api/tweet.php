<?php
include_once "dbhandle.php";
include_once "simulator.php";
include_once "photo.php";
class tweet
{

	var  $user_id;
	var  $text;
	var  $photo;
	var  $location;
	var $pic_array=array();
	public function post_tweet($verify,$text,$location,$photo)
  {
    $sim= new simulator;
    $dbh=new dbHandler;
    $dbh->sendTweets($verify,$text,$location,$photo);
		$sim->followUp($verify);
	}
	public function gettweetsAdmin($verify)
	{
    $dbh=new dbHandler;
    $sim=new simulator;
    $twts= $dbh->returnTweets($verify);
    $sim->showTweets($twts);

	}

}






?>
