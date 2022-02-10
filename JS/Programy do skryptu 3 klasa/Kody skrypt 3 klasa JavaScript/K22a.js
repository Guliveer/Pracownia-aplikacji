function suma_dow() {

 var i, wynik = 0;
 var l_parm = arguments.length;
 for (i = 0; i < l_parm; i++)
 { 
 wynik += arguments[i];
 } 
	document.write(wynik);
 }

suma_dow(1,2,3,4,5,6,7,8,9);