<?php
$tekst = "Barbarzyńcy, gdy przyjdą ustanowią prawa. \n";

if (!$p = fopen('dane.txt', 'a'))
{
  echo "Nie można otworzyć pliku dane.txt";
}
else
{
  if(fwrite($p, $tekst) === false)
  {
    echo"Zapis pliku nie powiódł się";
  }
  else
  {
    echo $tekst;
  }
  fclose($p);
}
?>
