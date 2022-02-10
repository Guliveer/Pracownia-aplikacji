function klient(nazwisko_k,imie_k,zawod_k){
			
				this.nazwisko = nazwisko_k;
				this.imie = imie_k;
				this.zawod = zawod_k;
				this.wypisz = function() 
				{	
					alert(this.nazwisko + ' ' + this.imie)
				}	
			}	

		var obiekt_1 = new klient('Kowalski','Jan','technik informatyk');
		var osoba2 = new klient();
		
		obiekt_1.wypisz(); 
		
		osoba2.imie = 'Ewa';
		osoba2.nazwisko="Jakaśtam";
		osoba2.zawod="Matematyczka";
		osoba2.wypisz();