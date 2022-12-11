<!DOCTYPE html>
<html>

<body>



<?php

function divide($dividend, $divisor) {

  if($divisor == 0) {

    throw new Exception("Division by zero", 1);

  }

  return $dividend / $divisor;

}



try {

  echo divide(5, 0);

} catch(Exception $ex) {

  $code = $ex->getCode();

  $message = $ex-&gt;getMessage();

  $file = $ex-&gt;getFile();

  $line = $ex-&gt;getLine();

  echo "Exception thrown in $file on line $line: [Code $code]

  $message";

}

?&gt;



</body>


</html>