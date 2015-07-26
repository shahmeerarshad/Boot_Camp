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
	public function post_tweet($verify)
	{
		$pic=new photo;
		$sim = new simulator;
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


		$myfile = fopen("$verify", "a") or die("Unable to open file!");
		fwrite($myfile,"\n" . $text . $location . $photo . "\n" );
		Echo "Tweet Posted";
		$sim->followUp($verify);
	}
	public function gettweetsAdmin($verify)
	{

		$file = file_get_contents($verify,FILE_USE_INCLUDE_PATH);
		echo $file;
	}
	public function gettweets($verify)
	{

		$sim = new simulator;
		$file = file_get_contents($verify, FILE_USE_INCLUDE_PATH);
		echo $file;
		$sim->followup($verify);
	}

}






?>
