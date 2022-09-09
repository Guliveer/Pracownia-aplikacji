<html>
	<head>
		<title>Formularz językowy</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	<body>
		<form action="p80_from.php" method="post">
			Nazwisko i imię:<br/>
			<input type="text" name="nazw" value=" " size="40"><br>
			<b><font size="4"><b>Wybór języka:</font></b><br><br>
			<select name="języki[]" multiple>
				<option value="Język angielski"> Język angielski</option>
				<option value="Język niemiecki"> Język niemiecki</option>
				<option value="Język francuski"> Język francuski</option>
				<option value="Język włoski"> Język włoski</option>
				<option value="Język rosyjski"> Język rosyjski</option>
				<option value="Język hiszpański"> Język hiszpański</option>
			</select>
			<p><input type="submit" value="Wyślij" name="wyslij"></p>
		</form>
	</body>
</html>
