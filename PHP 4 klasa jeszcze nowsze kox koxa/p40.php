<?php
function funk()
{
	static $i = 1;
	echo "Funkcja wywołana $i raz(y)<br />";
	$i++;
}
funk();
funk();
funk();
?>
