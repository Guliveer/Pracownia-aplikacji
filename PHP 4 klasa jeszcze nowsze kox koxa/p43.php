<?php
function progr($język = "PHP")
{
	return "Język programowania - $język";
}
echo progr();
echo "<br />";
echo progr(null);
echo "<br />";
echo progr("Java");
?>
