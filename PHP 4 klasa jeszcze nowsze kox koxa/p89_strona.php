<?php
session_start();
if (!isSet($_SESSION['log']))
{
	header('location: p89.php');
	exit();
}
?>
<html>
	<head>
		<title>Strona główna</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	<body>
		<p>Jesteś na stronie głównej</p>
		<p>Przed opuszczeniem strony wyloguj się!</p>
		<a href="p89_wyloguj.php">Wyloguj</a>
	</body>
</html>
