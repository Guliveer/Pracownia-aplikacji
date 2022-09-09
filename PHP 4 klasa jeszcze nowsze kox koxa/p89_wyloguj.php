<?php
	session_start();
	if (isSet($_SESSION['log']))
	{
		unset($_SESSION['log']);
	}
	else
	{
		header('location: p89.php');
		exit();
	}
	$s = session_destroy();
?>

<html>
	<head>
		<title>koniec sesji</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	<body>
		<p>Wylogowałeś się ze strony.</p>
		<a href="p89.php">Logowanie</a>
	</body>
</html>
