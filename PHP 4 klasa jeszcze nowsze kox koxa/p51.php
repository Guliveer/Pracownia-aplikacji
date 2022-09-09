<?php
$tekst = <<<TX
Na cóż czekamy, zebrani na rynku?
Dziś mają tu przyjść barbarzyńcy.
Dlaczego taka bezczynność w senacie?
Senatorowie siedzą - czemuż praw nie uchwalą?
TX;

echo"<b> Tekst przed użuciem funkcji nl2br(): </b><br/>";
echo $tekst."<br/><br/>";
echo "<b> Tekst po użyciu funkcji nl2br(): </b><br/>";
echo nl2br($tekst);
?>
