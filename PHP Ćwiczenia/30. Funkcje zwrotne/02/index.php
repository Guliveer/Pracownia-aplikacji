<!-- 
    Użycie aninimowej funkcji zwrotnej do zwrócenia tablicy z długościami elementów tablicy $strings
-->

<!DOCTYPE html>
<html>

<body>



<?php

$strings = ["apple", "orange", "banana", "coconut"];

$lengths = array_map( function($item) { return strlen($item); } , $strings);

print_r($lengths);

?>



</body>


</html>