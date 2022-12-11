<!--
    Dopisywanie tekstu do pliku
    Tryb „a” dodaje tekst na końcu pliku, podczas gdy tryb „w” zastępuje (i usuwa) starą zawartość pliku
-->

<?php
$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$txt = "Donald Duck\n";
fwrite($myfile, $txt);
$txt = "Goofy Goof\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
