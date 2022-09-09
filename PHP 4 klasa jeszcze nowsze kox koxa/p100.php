<?php
try
{
  $pdo = new PDO('mysql:host=localhost;dbname=ksiegarnia_internetowa', 'root');
  $zapytanie = $pdo->query('SELECT nazwisko, imie, pesel FROM Klient');
  foreach($zapytanie as $wiersz)
  {
    echo $wiersz['nazwisko'].' '.$wiersz['imie'].', '.$wiersz['pesel'].'<br/>';
  }
  $pdo = null;
}
catch(PDOException $e)
{
  echo "Błąd połączenia:" . $e->getMessage();
}
?>
