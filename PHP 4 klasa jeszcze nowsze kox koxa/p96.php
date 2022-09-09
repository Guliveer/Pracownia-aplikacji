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
$zapytanie = mysqli_query($do_bazy, "SELECT * FROM Klient Where Nazwisko = 'Nowak'");

if(!$zapytanie === true)
{
  mysqli_close($do_bazy);
  exit("Błąd w zapytaniu<br />");
}

while($tab = mysqli_fetch_array($zapytanie))
{
  echo $tab['nazwisko'] . " " . $tab['imie'];
  echo "<br />";
}
?>
