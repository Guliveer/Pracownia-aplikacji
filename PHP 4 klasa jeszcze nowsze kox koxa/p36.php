<?php
$a=0;
function dodaj ()
{
  $a=0;
  $a+=1;
  print($a."<br>");
}
dodaj();
print($a."<br>");

function dodaj2()
{
	global $a;
	$a+=1;
	print($a."<br>");
}
dodaj2();
print($a."<br>");
?>
