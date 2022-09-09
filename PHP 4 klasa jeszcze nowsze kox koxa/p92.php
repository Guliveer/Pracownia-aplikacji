<?php
$serwer = "ADRES_FTP";
$user = "LOGIN";
$pass = "HASŁO";
$plik_lok = "plik.txt";
$plik_zdal = "plik.txt";
$dir = "/FOLDER";

if(!$id = ftp_connect($serwer))
{
  exit ("Błąd połączenia z serwerem");
}
if (!ftp_login($id, $user, $pass))
{
  exit ("Błąd logowania do serwera FTP");
}
else
{
  echo "Połączenie z serwerem nawiązane. <br />";
}
if (!ftp_get($id, $plik_lok, $dir."/".$plik_zdal, FTP_BINARY))
{
  exit("Błąd podczas pobierania pliku!");
}
else
{
  echo "Plik $plik_zdal został pobrany. <br />";
}
ftp_close($id);
?>
