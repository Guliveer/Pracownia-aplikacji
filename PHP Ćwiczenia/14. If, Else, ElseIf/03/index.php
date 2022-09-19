<!DOCTYPE html>
<html>

<body>



<?php

$t = date("H");

echo "<p>The hour (of the server) is " . $t; 

echo ", and will give the following message:";



if ($t &lt; "10") {

  echo "Have a good morning!";

} elseif ($t &lt; "20") {

  echo "Have a good day!";

} else {

  echo "Have a good night!";

}

?&gt;

 

</body>


</html>