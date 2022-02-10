var x=document.getElementById("form1");
			function wypisz(){
				var x = document.forms["form1"];
				var text="";
				for (i=0;i<x.length-1;i++){ //x.length to ilość elementów w formularzu; -1 ponieważ w formularzu jest też guzik, ale jego nie liczymy
					text += x.elements[i].value + "<br>";

				}
				document.getElementById('lista').innerHTML = text;
			}