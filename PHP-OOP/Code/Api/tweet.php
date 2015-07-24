<?php
include_once "dbhandle.php";
include_once "simulator.php";
class tweet
{

	var  $user_id;
	var  $text;
	var  $photo;
	var  $location;

	public function post_tweet($verify)
	{
		$sim = new simulator;
		$dbh=new dbHandler;
		$handle =fopen("php://stdin","r");
		echo "Write your Tweet\n ";
		$tweet= fgets($handle); 
		$text= " Tweet: " . $tweet;
		echo "Write Location";
		$loc=fgets($handle);
		$location= "Location: " . $loc;
		echo "Enter Photo";
		$pho=fgets($handle);
		$photo= "Picture: " . $pho;


		$myfile = fopen("$verify", "a") or die("Unable to open file!");
		fwrite($myfile,$text . $location . $photo );
		Echo "Tweet Posted";
		$sim->followUp($verify);
	}
	public function getTweets($verify)
	{

		$sim = new simulator;
		$file = file_get_contents($verify, FILE_USE_INCLUDE_PATH);
		echo $file;
		$sim->followUp($verify);
	}
}






?>
