﻿<?php
$x = 12;
$y = 7;
$z = $x + $y;

if ($z < 0)
  echo "Wartość zmiennej x jest ujemna";
elseif ($z < 10)
  echo "Wartość zmiennej z jest zawarta w zakresie od 0 do 10.";
elseif ($z < 20)
  echo "Wartość zmiennej z jest zawarta w zakresie od 10 do 20.";
elseif ($z < 31)
  echo "Wartość zmiennej z jest zawarta w zakresie od 20 do 30.";
else
  echo "Wartość zmiennej z jest większa od 30.";
?>
