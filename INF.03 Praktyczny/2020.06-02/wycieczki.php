<?php
// Start connection
$server = 'localhost';
$user = 'root';
$pw = '';
$db = 'egzamin3';

$conn = mysqli_connect($server, $user, $pw, $db);
?>
<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl3.css">
    <title>Wycieczki i urlopy</title>
</head>

<body>
    <section class="banner">
        <h1>BIURO PODRÓŻY</h1>
    </section>

    <section class="left">
        <h2>KONTAKT</h2>
        <a href="mailto:biuro@wyycieczki.pl">napisz do nas</a>
        <p>telefon: 555666777</p>
    </section>
    <section class="middle">
        <h2>GALERIA</h2>
        <!-- Skrypt 1 -->
        <?php
        $sql = "SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis ASC";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $zdj = $row['nazwaPliku'];
            $podpis = $row['podpis'];
            echo "<img src='$zdj' alt='$podpis'>";
        }
        ?>
        <!-- EO Skrypt 1 -->
    </section>
    <section class="right">
        <h2>PROMOCJE</h2>
        <table>
            <tr>
                <td>Jesień</td>
                <td>Grupa 4+</td>
                <td>Grupa 10+</td>
            </tr>
            <tr>
                <td>5%</td>
                <td>10%</td>
                <td>15%</td>
            </tr>
        </table>
    </section>

    <section class="data">
        <h2>LISTA WYCIECZEK</h2>
        <!-- Skrypt 2 -->
        <?php
        $sql = "SELECT id, dataWyjazdu, cel, cena FROM wycieczki WHERE dostepna = 1";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $dataWyjazdu = $row['dataWyjazdu'];
            $cel = $row['cel'];
            $cena = $row['cena'];
            echo "$id. $dataWyjazdu, $cel, cena: $cena<br/>";
        }
        ?>
        <!-- EO Skrypt 2 -->
    </section>

    <section class="footer">
        <p>
            Stronę wykonał: Oliwer Pawelski
        </p>
    </section>
</body>

</html>

<?php
// Close connection
mysqli_close($conn);
?>