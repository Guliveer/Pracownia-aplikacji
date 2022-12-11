<!DOCTYPE html>
<html>

<body>



<?php

$age = array("Peter"=>"35", "Ben"=&gt;"37", "Joe"=&gt;"43");

asort($age);



foreach($age as $x =&gt; $x_value) {

  echo "Key=" . $x . ", Value=" . $x_value;

  echo "<br/>";

}

?&gt;



</body>


</html>