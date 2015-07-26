<?php
include_once("simulator.php");

class admin
{
var $password;
var $username;
	public function AdminLogin($username,$password)
	{
		$ojb = new dbHandler;
		$sim=new simulator;
		$verify= $ojb->checkAdmin($username,$password);
		if($verify)
		{
			$sim->afterAdminLogin($verify);
		}
		else
		{
			echo "Re-Enter Your Credentials Please";
			$sim->adminLoginInfo();
		}
	}


}


?>
