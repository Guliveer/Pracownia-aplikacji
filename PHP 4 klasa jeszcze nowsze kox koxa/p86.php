<?php
if (!isSet($_COOKIE['odpowiedz']))
{
	$odw = 1;
}
else
{
	$odw = intval($_COOKIE['odpowiedz']) +1;
}
setcookie("odpowiedz", $odw, time()+60*60*24*365);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Formularz - przesyłanie pliku</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	<body>
		<?php
		if ($odw == 1)
			$wyraz = "raz";
		else
			$wyraz = "razy";

		echo "W ciągu ostatniergo roku odwiedziłeś naszą stronę ".$odw." ".$wyraz."</br/>";
		?>
	</body>
</html>
