<html>
  <head>
    <title>Formularz - przesyłanie pliku</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body>
    <form enctype="multipart/form-data" action="p81_from.php" method="post">
      <input type="hidden" name="max_file_size" value="40960">
      <p>Wyślij plik</p>
      <input type="file" name="plik1" size="30">
      <br><br>
      <input type="submit" value="Wyślij" name="wyslij">
    </form>
  </body>
</html>
