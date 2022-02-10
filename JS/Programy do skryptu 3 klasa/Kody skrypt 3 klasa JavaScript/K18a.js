<!--
document.write("Liczby podzielne przez '3', zakres: 0-90: <br>");
function trzy(z)
{
for ( var i = 0; i <= z; i++) {
	if ((i % 3) != 0)
	continue;
	document.write(i + "; ");
	}
document.write("</br>");
}
trzy(90);
document.write("<br> A teraz zakres 0-120: <br>");
trzy(120);
//-->