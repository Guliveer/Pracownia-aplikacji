<?php
$do_bazy = mysqli_connect('localhost', 'root', '');
if (!$do_bazy)
{
  exit ("Błąd połączenia z serwerem mysqli.");
}
if(!mysqli_select_db($do_bazy,'ksiegarnia_internetowa'))
{
  mysqli_close($do_bazy);
  exit ("Błąd podczas wyboru bazy Księgarnia internetowa.");
}

$aktualny = "UPDATE Klient SET nazwisko = '".$_POST['nazw']."', imie='".$_POST['im']."', kodpocztowy = '".$_POST['kod']."', miejscowosc = '".$_POST['mia']."', ulica = '".$_POST['ul']."', nr_domu = '".$_POST['nr']."', pesel = '".$_POST['pe']."', telefon = '".$_POST['tel']."', email = '".$_POST['adr']."' Where Nazwisko = 'Nowak' and Imie = 'Adam'";
$zapytanie = mysqli_query($do_bazy,$aktualny);

if(!$zapytanie === true)
{
  echo "Błąd zapytanie! Dane nie zostały zaktualizowane";
}
else
{
  echo "Dane zostały zaktualizowane.";
}
mysqli_close($do_bazy);
?>
