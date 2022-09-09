<?php
session_start();
?>
<html>
	<head>
		<title>koszyk</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	<body>
		<p><b>Zawartość koszyka</b></p>
		<?php
		if (isSet($_SESSION['koszyk'])) {
			foreach(unserialize($_SESSION['koszyk']) as $produkt)
			{
				echo "<li>".$produkt."</li>";
			}
		}
		else
		{
			echo "Brak sesji";
		}
		?>
		<p><a href="p90.php">przejdź do listy produktów</a></p>
	</body>
</html>
