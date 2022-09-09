<?php
if(!$p = fopen('dane.txt', 'r'))
{
  echo "Nie można otworzyć pliku dane.txt";
}
else
{
  while(!feof($p))
  {
    $w = fgets($p,100);
    echo "$w<br />";
  }
  fclose($p);
}
?>
