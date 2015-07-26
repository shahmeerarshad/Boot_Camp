<?php
include_once("dbhandle.php");
include_once("simulator.php");
class message
{
	var $user_id;
	var $text;
	var $date;
	var $reciever;
	public function __construct()
	{

	}

	function sendMessage($sender)
	{
		$db=new dbHandler;
		$sim=new simulator;
		$handle=fopen("php://stdin","r");
		echo "Write Message";
		$text=fgets($handle);
		$text="Message:".$text;
		echo "Enter Reciever ";
		$db->allUsers();
		Echo "========Press the ID Number of the User ===========\n";
		$input=fgets($handle);
		$member=$db->returnUser($input);
		$tm="Time:".date("h:i:sa");
		$dt="Date:".date("Y/m/d");
		$myfile = fopen("$member"."message", "a") or die("Unable to open file!");
		fwrite($myfile,$sender ."\n" . $text . $tm."\n" . $dt."\n" );
		$sim->followUp($sender);
	}


	function readMessage($verify)
	{
		$file = file_get_contents($verify."message", FILE_USE_INCLUDE_PATH);
		if(trim($file)==false)
		{
			echo "NO MESSAGES";
		}
		else
		{
			echo $file;
		}
		$sim=new simulator;
		$sim->followUp($verify);

	}

}



?>
