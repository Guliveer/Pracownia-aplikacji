<!-- 
    Pierwszy parametr fwrite() zawiera nazwę pliku do zapisu,
    drugi parametr to ciąg znaków do zapisania
 -->

<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
