czas = 100
			znak_p =1
			function przewin() {
				window.setTimeout('przewin()',czas);
			
				var nap = document.napis.text.value;
				document.napis.text.value = nap.substring(znak_p) + nap.substring(0,znak_p);
			}
			przewin();