<?php
$tab = "CREATE TABLE Film (Tytul_filmu VARCHAR(30), Rezyser VARCHAR(30), Rok_prod VARCHAR(4))";
if (mysql_query($tab))
{
  echo "Tabela Film została utworzona";
}
else
{
  echo "Błąd! Nie można utworzyć tabeli Film";
}
?>
