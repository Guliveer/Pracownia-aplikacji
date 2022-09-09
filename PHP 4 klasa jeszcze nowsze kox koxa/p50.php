<?php
$czas = mktime(16, 30, 0, 12, 24, 2010);
echo date("d-m-Y G:i", $czas) . "<br />";
echo date ("Y-m-d G:i:s", $czas);
?>