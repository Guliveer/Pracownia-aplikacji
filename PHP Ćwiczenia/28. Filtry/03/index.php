<!-- Użycie funkcji filter_var() do sprawdzenia czy $int jest liczbą całkowitą -->

<!DOCTYPE html>
<html>

<body>



<?php

$int = 100;



if (!filter_var($int, FILTER_VALIDATE_INT) === false) {

  echo("Integer is valid");

} else {

  echo("Integer is not valid");

}

?>



</body>


</html>