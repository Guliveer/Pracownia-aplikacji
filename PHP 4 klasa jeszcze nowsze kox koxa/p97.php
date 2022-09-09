<?php
$do_bazy = mysqli_connect('localhost', 'root', '');

if (!$do_bazy)
{
  exit ("Błąd połączenia z serwerem MySQL. <br />");
}
if(!mysqli_select_db($do_bazy,'ksiegarnia_internetowa'))
{
  mysqli_close($do_bazy);
  exit ("Błąd podczas wyboru bazy Ksiegarnia internetowa.");
}

$dodaj = "INSERT INTO Klient VALUES(NULL, 'Anna', 'Lisek', '34-100', 'Wadowice', 'Lwowska', '11', '95031203267', '936789453', 'ania@gmail.com')";

if(!$zapytanie = mysqli_query($do_bazy, $dodaj))
{
  mysqli_close($do_bazy);
  echo $zapytanie;
  exit("Błąd w zapytaniu");
}
$ile = mysqli_affected_rows($do_bazy);
echo "Liczba dodanych rekordów do tabeli klient wynosi: $ile<br />";
mysqli_close($do_bazy);
?>
