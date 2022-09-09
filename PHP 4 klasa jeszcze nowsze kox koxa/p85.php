<?php
	if (!isSet($_COOKIE['dane']) && !isSet($_POST['nazw']))
	{
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Dane_user</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	<body>
		<form action="p85.php" method="post">
			Podaj naziwsko i imię: <br/>
			<input type="text" name="nazw" value=" " size="35">
			<p><input type="submit" value="Wyślij" name="wyslij"></p>
		</form>
<?php
	}
	else
	{
		if (isSet($_POST['nazw']))
		{
			setcookie ('dane', $_POST['nazw'], time()+60*60*24*365);
			echo "<p>Dziękujęmy za wprowadzenie danych.</p>";
		}
		else
		{
			echo "<p>Witamy po raz kolejny! ".$_COOKIE['dane']."</p>";
		}
	}
?>
</body>
</html>
