
var obiekt_1 = {
	
	nazwisko: 'Nowacki',
	imie: 'Marek',
	zawod: 'informatyk',
	pokaz: function (){
		document.write("Imię: "+this.imie+"<br>"+"Nazwisko: "+this.nazwisko+"<br>"+"Zawód: "+this.zawod)
	}	
}
obiekt_1.pokaz();

obiekt_1.wiek = 19;
obiekt_1.wypisz_wiek = function() {alert('Wiek: ' + this.wiek + ' lat');}
obiekt_1.wypisz_wiek();
