<!-- 
    Użycie filter_var() do usunięcia znaków HTML i wszystkich znaków o wartości ASCII większej niż 127
 -->

<!DOCTYPE html>
<html>
<body>

<?php
// Variable to check
$str = "<h1>Hello WorldÆØÅ!</h1>";

// Remove HTML tags and all characters with ASCII value > 127
$newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo $newstr;
?>

</body>
</html>
