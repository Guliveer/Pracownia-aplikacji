<?php
$ip_tab = file("ip.txt");

foreach($ip_tab as $b)
{
  if(trim($b) == $_SERVER['REMOTE_ADDR'])
  {
    echo "Twój adres IP został zablokowany.";
    exit();
  }
}
?>
