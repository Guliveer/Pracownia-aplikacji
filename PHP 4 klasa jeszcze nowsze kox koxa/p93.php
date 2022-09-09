<?php
$do_bazy = mysqli_connect('localhost', 'root', '');

if (!$do_bazy)
{
  exit ("Błąd połączenia z serwerem MySQL.");
}
else
{
  echo "Połączono z serwerem baz danych. <br />";
}
?>
