	window.onload=Zmiana;
			var Nr=0;
	
			function Zmiana() {
				var obrazy = new Array('obrazek/1.jpg', 'obrazek/2.jpg', 'obrazek/3.jpg', 'obrazek/4.jpg', 'obrazek/5.jpg', 'obrazek/6.jpg'); 
				// dodawanie obrazków do tablicy
				Nr++;
				if (Nr == obrazy.length){
					Nr = 0;
				}
				document.getElementById('baner').src = obrazy[Nr];
				setTimeout(Zmiana,2000);
			}	