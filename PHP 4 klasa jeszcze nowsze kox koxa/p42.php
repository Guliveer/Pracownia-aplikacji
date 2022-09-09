<?php
function wart(&$liczba)
{
	$liczba += 3;
}

$liczba = 2;
echo "Wartość zmiennej \$liczba przed wywołaniem funkcji: $liczba <br />";

wart($liczba);
echo "Wartość zmiennej \$liczba po wywołaniu funkcji: $liczba <br />";
?>
