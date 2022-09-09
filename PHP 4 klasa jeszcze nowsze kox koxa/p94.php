<?php
$do_bazy = mysqli_connect('localhost', 'root', '');

if (!$do_bazy)
{
  exit ("Błąd połączenia z serwerem MySQL.");
}
else
{
  echo "Połączono z serwerem baz danych. <br />";
  if (!mysqli_select_db($do_bazy,'ksiegarnia_internetowa'))
  {
    echo "Błąd podczas wyboru bazy danych <br />";
  }
  else
  {
    echo "Wybrana baza danych to: księgarnia internetowa. <br />";
  }
  mysqli_close($do_bazy);
}
?>
