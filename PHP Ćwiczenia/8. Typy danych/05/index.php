<!DOCTYPE html>
<html>

<body>



<?php

class Car {

  public $color;

  public $model;

  public function __construct($color, $model) {

    $this->color = $color;

    $this-&gt;model = $model;

  }

  public function message() {

    return "My car is a " . $this-&gt;color . " " . $this-&gt;model . "!";

  }

}



$myCar = new Car("black", "Volvo");

echo $myCar -&gt; message();

echo "<br/>";

$myCar = new Car("red", "Toyota");

echo $myCar -&gt; message();

?&gt;



</body>


</html>