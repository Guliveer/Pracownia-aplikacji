<!-- Funkcja filter_var() służy do usunięcia wszystkich znaczników HTML z łańcucha tekstu -->

<!DOCTYPE html>
<html>

<body>



<?php

$str = "<h1>Hello World!";

$newstr = filter_var($str, FILTER_SANITIZE_STRING);

echo $newstr;

?&gt;



</body>


</html>