<?php
$tekst = <<<TX
Na cóż czekamy, zebrani na rynku? Dziś mają tu przyjść barbarzyńcy. Dlaczego
taka bezczynność w senacie? Senatorowie siedzą - czemuż praw nie uchwalą?
TX;

echo wordwrap($tekst, 30, "<br/>\n");
?>
