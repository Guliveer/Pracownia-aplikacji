﻿var i = 0; //zmienna globalna
function suma_dow(){
	var wynik=0; //zmienna lokalna funkcji sumowania
	var l_parm = arguments.length; //kolejna zmienna lokalna funkcji
	for (; i < l_parm; i++){
	
		wynik += arguments[i];
	} 
	document.write(wynik+"<br>");
}
suma_dow(10,28);
document.write(i+"<br>"); //można wyświetlić zmienną globalną;
document.write(wynik+";"); //skrypt nie może wyświetlić zmiennej lokalnej funkcji suma_dow, ponieważ tu ona nie istnieje
