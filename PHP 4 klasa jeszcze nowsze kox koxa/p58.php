<?php
$dane = "Jan Kowalski, ul. Długa 23, 80-874 Gdańsk, tel.693341678";
echo "Ciąg główny:" .$dane."</br>";
$tel = strstr($dane, "tel.");

if($tel == false)
  echo "Brak numeru telefonu";
else
  echo "Znaleziony pociąg: ".$tel;
?>
