<!DOCTYPE html>
<html>

<body>



<?php

function myTest() {

  $x = 5; // local scope

  echo "<p>Variable x inside function is: $x";

} 

myTest();



// using x outside the function will generate an error

echo "<p>Variable x outside function is: $x</p>";

?&gt;



</body>


</html>