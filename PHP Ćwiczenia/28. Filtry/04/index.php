<!--
  Użycie funkcji filter_var() do sprawdzenia czy $int jest liczbą całkowitą
  Dodano sprawdzenie czy $int jest równy 0, ponieważ funkcja filter_var() zwraca false dla wartości 0
-->

<!DOCTYPE html>
<html>

<body>



<?php

$int = 0;



if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {

  echo("Integer is valid");

} else {

  echo("Integer is not valid");

}

?>



</body>


</html>