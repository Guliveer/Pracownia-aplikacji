<?php
// Connect using mysqli_connect
$server = 'localhost';
$user = 'root';
$pw = '';
$db = 'forumpsy';
$conn = mysqli_connect($server, $user, $pw, $db);
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Forum o psach</title>
</head>
<body>
    <section class="banner">
        <h1>Forum miłośników psów</h1>
    </section>

    <section class="left">
        <img src="Avatar.png" alt="Użytkownik forum">
        <!-- Skrypt 1 -->
        <?php
        $sql = "SELECT nick,postow,pytanie from konta inner join pytania on konta.id=pytania.id where pytania.id=1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        echo "<h4>" . $row['nick'] . "</h4>";
        echo "<p>" . $row['postow'] . " postów na forum</p>";
        echo "<p>" . $row['pytanie'] . "</p>";
        ?>
        <video controls loop>
            <source src="video.mp4" type="video/mp4">
        </video>
    </section>
    <section class="right">
        <form action="#" method="post">
            <textarea name="comment" id="comment" cols="40" rows="4"></textarea><br/>
            <button type="submit">Dodaj odpowiedź</button>
        </form>
        <!-- Skrypt 2 -->
        <?php
        if (isset($_POST['comment']) && !empty($_POST['comment'])) {
            $comment = $_POST['comment'];
            $sql = "INSERT INTO `odpowiedzi` (`Pytania_id`, `konta_id`, `odpowiedz`) VALUES ('1', '2', '$comment')";
            $result = mysqli_query($conn, $sql);
        }
        ?>
        <h2>Odpowiedzi na pytanie</h2>
        <ol>
            <!-- Skrypt 3 -->
            <?php
            $sql = "SELECT odpowiedzi.id,odpowiedzi.odpowiedz,konta.nick from odpowiedzi inner join konta on odpowiedzi.konta_id=konta.id where odpowiedzi.Pytania_id=1";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li>" . $row['odpowiedz'] . " <em>" . $row['nick'] . "</em></li><hr/>";
            }
            ?>
        </ol>
    </section>

    <section class="footer">
        Autor: Oliwer Pawelski <a href="http://mojestrony.pl" target="_blank">Zobacz nasze realizacje</a>
    </section>
</body>
</html>

<?php
// Close connection
mysqli_close($conn);
?>