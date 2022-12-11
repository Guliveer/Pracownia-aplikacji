<?php
$user = 'root';
$pw = '';
$db = 'dane4';
$server = 'localhost';

$conn = mysqli_connect($server, $user, $pw, $db);
?>
<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl4.css">
    <title>Panel administratora</title>
</head>

<body>
    <section class="banner">
        <h3>Portal Społecznościowy - panel administratora</h3>
    </section>

    <section class="left">
        <h4>Użytkownicy</h4>
        <!-- Skrypt 1 -->
        <?php
        $sql = "SELECT id, imie, nazwisko, rok_urodzenia, zdjecie FROM osoby LIMIT 30";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $imie = $row['imie'];
            $nazwisko = $row['nazwisko'];
            $wiek = date('Y') - $row['rok_urodzenia'];

            echo "$id. $imie $nazwisko, $wiek lat<br />";
        }
        ?>
        <!-- EO Skrypt 1 -->
        <a href="settings.html">Inne ustawienia</a>
    </section>
    <section class="right">
        <h4>Podaj id użytkownika</h4>
        <form action="#" method="post">
            <input type="number" name="id" id="id">
            <button type="submit">ZOBACZ</button>
        </form>
        <hr />
        <!-- Skrypt 2 -->
        <?php
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $sql = "SELECT imie, nazwisko, rok_urodzenia, opis, zdjecie, nazwa FROM osoby, hobby WHERE osoby.id = $id AND osoby.Hobby_id = hobby.id";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $imie = $row['imie'];
                $nazwisko = $row['nazwisko'];
                $rok_ur = $row['rok_urodzenia'];
                $opis = $row['opis'];
                $zdjecie = $row['zdjecie'];
                $hobby = $row['nazwa'];

                echo "<h2>$id. $imie $nazwisko</h2>";
                echo "<img src='$zdjecie' alt='$id' />";
                echo "<p>Rok urodzenia: $rok_ur</p>";
                echo "<p>Opis: $opis</p>";
                echo "<p>Hobby: $hobby</p>";
            }
        }
        ?>
        <!-- EO Skrypt 2 -->
    </section>

    <section class="footer">
        Stronę wykonał: Oliwer Pawelski
    </section>
</body>

</html>