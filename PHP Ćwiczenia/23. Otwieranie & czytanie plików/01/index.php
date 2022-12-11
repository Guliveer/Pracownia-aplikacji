<!-- 
    Pierwszy parametr fopen() zawiera nazwę pliku, który ma zostać otwarty,
    drugi parametr określa, w jakim trybie plik ma zostać otwarty.
    Poniższy przykład generuje również komunikat, jeśli funkcja fopen() nie może otworzyć określonego pliku
 -->
 
<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);
?>

</body>
</html>