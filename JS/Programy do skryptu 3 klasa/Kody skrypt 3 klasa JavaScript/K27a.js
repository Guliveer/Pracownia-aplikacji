
var obiekt_1 = {
	
	nazwisko: 'Nowacki',
	imie: 'Marek',
	zawod: 'informatyk',
	pokaz: function (){
		document.write("Imię: "+this.imie+"<br>"+"Nazwisko: "+this.nazwisko+"<br>"+"Zawód: "+this.zawod)
	}	
}
obiekt_1.pokaz();