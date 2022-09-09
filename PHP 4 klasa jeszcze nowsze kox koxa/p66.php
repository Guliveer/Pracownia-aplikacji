<?php
if(!$p = fopen('dane.txt', 'r'))
{
  echo "Nie można otworzyć pliku dane.txt";
}
else
{
  while(($z=fgetc($p)) !== false)
  {
    echo $z;
  }
  fclose($p);
}
?>
