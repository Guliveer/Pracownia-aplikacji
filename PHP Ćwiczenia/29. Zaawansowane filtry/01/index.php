<!-- 
  Użycie filter_var() do sprawdzenia czy zmienna $int jest liczbą całkowitą z zakresu od 1 do 200
-->

<!DOCTYPE html>
<html>

<body>



<?php

/* variable to check */

$int = 122;



/* min value */

$min = 1;

/* max value */

$max = 200;



if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=&gt;$min, "max_range"=&gt;$max))) === false) {

  echo("Variable value is not within the legal range");

} else {

  echo("Variable value is within the legal range");

}

?>



</body>


</html>