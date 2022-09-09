<!DOCTYPE HTML>
<html>
  <head>
    <title>Odczyt danych z tabeli Klient </title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
    $do_bazy = mysqli_connect('localhost', 'root', '');
    if (!$do_bazy)
    {
      echo "Błąd połączenia z serwerem MySQL. <br />";
      echo "</body></html>";
      exit;
    }
    if(!mysqli_select_db($do_bazy,'ksiegarnia_internetowa'))
    {
      mysqli_close($do_bazy);
      echo "Błąd podczas wyboru bazy Ksiegarnia internetowa<br />";
      echo "</body></html>";
      exit;
    }

    $zapytanie = mysqli_query($do_bazy,'SELECT * FROM Klient');
    if (!$zapytanie)
    {
      mysqli_close($do_bazy);
      echo "Błąd w zapytaniu<br />";
      echo "</body></html>";
      exit;
    }
    ?>
    <table>
      <tr>
      <th>ID klienta</th>
      <th>Nazwisko</th>
      <th>Imię </th>
      <th>Kod pocztowy</th>
      <th>Miejscowość</th>
      <th>Ulica</th>
      <th>Nr domu</th>
      <th>PESEL</th>
      <th>Telefon</th>
      <th>Adres e-mail</th>
    </tr>
    <?php
    while ($wiersze = mysqli_fetch_row($zapytanie))
    {
      echo "<tr>";
      for ($i=0; $i <= 9; $i++)
      {
        echo"<td>$wiersze[$i]</td>";
      }
      echo "</tr>";
    }
    mysqli_close($do_bazy);
    ?>
    </table>
  </body>
</html>
