<!DOCTYPE html>
<html>

<body>



<?php

$x = 5; // global scope

 

function myTest() {

  // using x inside this function will generate an error

  echo "<p>Variable x inside function is: $x";

} 

myTest();



echo "<p>Variable x outside function is: $x</p>";

?&gt;



</body>


</html>