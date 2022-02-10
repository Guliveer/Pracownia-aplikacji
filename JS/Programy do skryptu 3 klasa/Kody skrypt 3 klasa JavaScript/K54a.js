
			function Animacja(){	
				var blok = document.getElementById('napis');
				if (parseInt(blok.style.left) < 50){
					blok.style.left = "500";
					}	
				else{	
					blok.style.left = (parseInt(blok.style.left) - 3)+"px";
				}
			}
			window.setInterval("Animacja()", 50);