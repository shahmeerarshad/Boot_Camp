<?php
include_once("photo.php");
include_once("simulator.php");

class profile
{
	var $profile_photo;
	var $header_photo;
	var $full_name;
	var $bio;
	var $location;
	var $website;
	var $theme_color;
	var $dob;
	var $temp=array();
	var $prr;
	function __construct()
	{}
	function saveProfile($verify)

	{
		$sim=new simulator;
		$handle=fopen("php://stdin","r");
		$pic=new photo;
		echo "Enter Header Picture";
		$this->temp=$pic->returnPhoto($verify);
		$size=count($this->temp);
		for($x=0;$x<=$size-1;$x++)
		{
			echo $x ." " .  $this->temp[$x] . "\n";
		}
		echo "Press Number to add photo";
		$pho=fgets($handle);
		$photo= "Header Picture: " . $this->temp[1];
		Echo "Enter Profile Picture";
		for($x=0;$x<=$size-1;$x++)
		{
			echo $x ." " .  $this->temp[$x] . "\n";
		}
		$ppho=fgets($handle);
		$pPhoto= "Profile Picture:" . $this->temp[1];
		Echo "Enter Full Name";
		$full_name =fgets($handle);
		Echo "Enter Bio";
		$bio = fgets($handle);
		Echo "Enter Location";
		$location=fgets($handle);
		Echo "Enter Website";
		$website=fgets($handle);
		Echo"Enter DOB ";
		$dob=fgets($handle);


		$myfile = fopen("$verify" . "profile", "w") or die("Unable to open file!");
		fwrite($myfile, $photo ."\n". $pPhoto ."\n".$full_name . $bio .$location .$website.$dob  );
		echo "Profile Made";
		$sim->followUp($verify);

	}

	public function showProfile($verify)
	{
		$sim=new simulator;
		$this->prr = file_get_contents($verify."profile", FILE_USE_INCLUDE_PATH);
		echo $this->prr;
		$handle=fopen("php://stdin","r");
		$extra=fgets($handle);
		$sim->followUp($verify);
	}

}


?>
