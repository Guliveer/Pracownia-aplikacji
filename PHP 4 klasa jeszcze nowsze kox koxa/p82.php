<?php
setcookie("pismo", "Na skróty",  time()+3600,"/","localhost",false);
if (isSet($_COOKIE["pismo"]))
	echo "<p>Jesteś naszym stałym klientem.</p>";
else
	echo "<p> Witamy po raz pierwszy na naszej stronie.</p>";
?>
