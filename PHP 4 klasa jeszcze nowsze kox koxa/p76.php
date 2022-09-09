<?php
class osoba
{
	public $nazwisko, $imie;
	public function wypiszNazwisko($arg1)
	{
		$this->nazwisko = $arg1;
	}
	public function pobierzNazwisko()
	{
		return $this->nazwisko;
	}
	public function wypiszImie($arg2)
	{
		$this->imie = $arg2;
	}
	public function pobierzImie()
	{
		return $this->imie;
	}
}
class klient extends osoba
{
	public $adres;
	public function wypiszAdres($arg3)
	{
		$this->adres = $arg3;
	}
	public function pobierzAdres()
	{
		return $this->adres;
	}
}
$osoba1 = new osoba();
$osoba1->wypiszNazwisko('Żak');
$osoba1->wypiszImie('Ewa');
echo "Dane obiektu klasy osoba <br/>";
echo $osoba1->pobierzNazwisko()." ".$osoba1->pobierzImie();
echo "<br/><br/>";

$klient1 = new klient();
$klient1->wypiszNazwisko('Król');
$klient1->wypiszImie('Marcin');
$klient1->wypiszAdres('Warszawa ul. Kreta 7');

echo "Dane obiektu klasy klient <br/>";
echo $klient1->pobierzNazwisko()." ".$klient1->pobierzImie()." ".$klient1->pobierzAdres();
echo "<br/>";
?>
