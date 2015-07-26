<?php
include_once("dbhandle.php");
include_once("simulator.php");
class tweetList
{
var $user_id;
var $list_name;
var $description;
var $public;
var $private;
var $verify;

public function __construct(){}
function saveList($verify,$list_name)
{
$list_name=array($verify);
Echo"List Created\n";
$this->addToList($list_name,$verify);
}
function addToList($list_name,$verify)
{
	$db=new dbHandler;
	$sim=new simulator;
	$handle=fopen("php://stdin","r");
	Echo"Press 1 to add people in $list_name";
	$db->allUsers();
	Echo "========Press the ID Number of the User to Add it to the list===========\n";
	$b =fgets($handle);
	$member=$db->returnUser($b);
	array_push($list_name,$member);
	$sim->afterList($list_name,$verify);
}
function removeFromList($list_name,$verify)
{
print_r($list_name);
echo"Enter the name of the user to delete ";
$handle=fopen("php://stdin","r");
$input=fgets($handle);
foreach (array_keys($list_name,trim( $input), true) as $key) {
    unset($list_name[$key]);
print_r($list_name);
}
}






}
?>
