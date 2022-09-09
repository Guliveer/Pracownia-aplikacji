<?php
  $baza = "CREATE DATABASE Moje_kino";
  if ($mysql_query($baza))
  {
    echo "Baza została utworzona";
  }
  else
  {
    echo "Błąd! Nie można utworzyć bazy";
  }
?>
