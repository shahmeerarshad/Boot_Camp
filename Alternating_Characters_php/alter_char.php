<?php
//problem = Alternating characters
//problemlink = https://www.hackerrank.com/challenges/alternating-characters
//profilelink = https://www.hackerrank.com/shahmeerarshad
$fp=fopen("phpinput.txt","r");
$x=0;

if ($fp) {
    while (($line = fgets($fp)) !== false)         
        { 
              $temporary[$x]=$line;

                    $x++;

                    
               }
               
}

$countss=0;


$number=  $temporary[0];


for($x=1;$x<=$number;$x++)
{
  $temp = str_split($temporary[$x]);
  $length = count($temp);
  for($i=0;$i<=$length-1;$i++)
  {
    if($temp[$i] == $temp[$i+1])
    {

      $countss++;

    }

  }
  echo $countss;
	echo "\n";
  $countss=0;
}
?>

