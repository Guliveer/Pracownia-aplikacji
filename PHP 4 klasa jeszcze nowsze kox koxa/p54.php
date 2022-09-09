<?php
$tekst = "Potrzebne informacje znajdują się pod adresem: ";
$tekst .= "http://helion.pl/kategorie/podreczniki-szkolne/technik-informatyk";
echo wordwrap($tekst, 40, "<br/>\n", true);
?>
