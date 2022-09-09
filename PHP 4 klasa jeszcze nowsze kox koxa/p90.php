<?php
session_start();
?>
<html>
	<head>
		<title>koszyk zakupów</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	<body>
		<p><b>Lista artykułów</b></p>
		<?php
		if (isSet($_POST['lista']))
		{
			if (!empty($_SESSION['koszyk']))
			{
				$koszyk = array_unique(array_merge(unserialize($_SESSION['koszyk']), $_POST['lista']));
				$_SESSION['koszyk'] = serialize($koszyk);
			}
			else
			{
				$_SESSION['koszyk'] = serialize($_POST['lista']);
			}
			echo "<p>Wybrane produkty zostały umieszczone w koszyku</p>";
		}
		?>
		<form action="p90.php" method="post">
			<p><b><font size="4"><b>Wybór produktu:</font></b></p>

			<select name="lista[]" multiple="multiple" size="9">
				<option value="Monitor"> Monitor</option>
				<option value="Drukarka"> Drukarka</option>
				<option value="Klawiatura"> Klawiatura</option>
				<option value="Myszka"> Myszka</option>
				<option value="Głośniki"> Głośniki</option>
				<option value="Kamera internetowa"> Kamera internetowa</option>
				<option value="Słuchawki"> Słuchawki</option>
				<option value="Stacja DVD"> Stacja DVD</option>
				<option value="Dysk twardy"> Dysk twardy</option>
			</select>

			<p><input type="submit" value="Wyślij"></p>
		</form>
		<p><a href="p90_koszyk.php">Przejdź do koszyka</a></p>
	</body>
</html>
