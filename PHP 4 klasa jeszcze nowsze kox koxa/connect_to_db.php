<?php
  $user = "Janek";
  $pass = "hasło";
  $dsn = "mysql:host=localhost;dbname=ksiegarnia_internetowa";
  try
  {
    $pdo = new PDO($dsn, $user, $pass);
    echo 'Połączenie nawiązne!';
  }
  catch(PDOEXCEPTION $e)
  {
    echo 'Błąd połączenia: ' . $e->getMessage();
    exit;
  }
?>
