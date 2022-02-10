var ikona_n = new Image();
				ikona_n.src = 'Ikona2.jpg';
			
			var ikona_p = new Image();
				ikona_p.src = 'Ikona1.jpg';
				
			var obraz = document.getElementById('ikona');
			
			obraz.onmouseover = function(){
				this.src = ikona_n.src
			}
			obraz.onmouseout = function(){
				this.src = ikona_p.src
			}