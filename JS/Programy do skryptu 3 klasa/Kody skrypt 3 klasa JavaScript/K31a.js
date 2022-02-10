function klient(){
	this.nazwisko = 'Nowak';
	this.imie = 'Anna';
}
klient.prototype.pisz_dane = function(){
	document.write(this.nazwisko + ' ' + this.imie)
}
klient.prototype.zawod = 'kierowca';

var osoba1 = new klient();

osoba1.pisz_dane();
