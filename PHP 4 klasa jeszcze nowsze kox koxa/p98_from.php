<?php
$do_bazy = mysqli_connect('localhost', 'root', '');
if (!$do_bazy)
{
  exit ("Błąd połączenia z serwerem mysqli.");
}
if(!mysqli_select_db($do_bazy, 'ksiegarnia_internetowa'))
{
  mysqli_close($do_bazy);
  exit ("Błąd podczas wyboru bazy Księgarnia internetowa.");
}

$dodaj = "INSERT INTO Klient VALUES(NULL, '".$_POST['nazw']."', '".$_POST['im']."', '".$_POST['kod']."', '".$_POST['mia']."', '".$_POST['ul']."', '".$_POST['nr']."', '".$_POST['pe']."', '".$_POST['tel']."', '".$_POST['adr']."')";
$zapytanie = mysqli_query($do_bazy, $dodaj);
if(!$zapytanie === true)
{
  echo "Nowy klient nie został dodany do bazy!";
}
else
{
  echo "Nowy klient został dodany do bazy.";
}
mysqli_close($do_bazy);
?>
