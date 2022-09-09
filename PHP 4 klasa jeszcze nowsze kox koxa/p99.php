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

$zapytanie = mysqli_query($do_bazy,"SELECT * FROM Klient WHERE Nazwisko = 'Nowak' and Imie = 'Adam'");
$ile = mysqli_num_rows($zapytanie);
mysqli_close($do_bazy);

if(!$zapytanie === true)
{
  mysqli_close($do_bazy);
  exit("Błąd w zapytaniu.");
}

if ($ile = 0)
  exit ("Brak danych");
if ($ile > 1)
  exit ("Nie można wyodrębnić danych");

$wiersz = mysqli_fetch_array($zapytanie);
$nazw = $wiersz['nazwisko'];
$im = $wiersz['imie'];
$kod = $wiersz['kodpocztowy'];
$mia = $wiersz['miejscowosc'];
$ul = $wiersz['ulica'];
$nr = $wiersz['nr_domu'];
$pe = $wiersz['pesel'];
$tel = $wiersz['telefon'];
$adr = $wiersz['email'];
?>

<!DOCTYPE HTML>
<html>
  <head>
    <title>Modyfikacja danych</title>
  </head>
  <body>
    <form action="http://localhost/p99_from.php" method="post">

      <p><b><font size="4"><b>Modyfikacja danych klienta: </font></b></p>

      Nazwisko:<br />
      <input type="text" name="nazw" value="<?php echo $nazw; ?>" size="30"><br />
      Imie:<br />
      <input type="text" name="im" value="<?php echo $im; ?>" size="30"><br />
      Kod pocztowy:<br />
      <input type="text" name="kod" value="<?php echo $kod; ?>" size="5"><br />
      Miejscowość:<br />
      <input type="text" name="mia" value="<?php echo $mia; ?>" size="30"><br />
      Ulica:<br />
      <input type="text" name="ul" value="<?php echo $ul; ?>" size="30"><br />
      Numer domu:<br />
      <input type="text" name="nr" value="<?php echo $nr; ?>" size="7"><br />
      PESEL:<br />
      <input type="text" name="pe" value="<?php echo $pe; ?>" size="11"><br />
      Numer telefonu:<br />
      <input type="text" name="tel" value="<?php echo $tel; ?>" size="9"><br />
      Adres e-mail:<br />
      <input type="text" name="adr" value="<?php echo $adr; ?>" size="30"><br />

      <p>
        <input type="submit" value="Aktualizuj" name="akt">
      </p>
    </form>
  </body>
</html>
