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
	public $imie2;
	public function wypiszImie($arg)
	{
		parent:: wypiszImie($arg);
		$this->imie2 = $arg;
	}
	public function pobierzImie()
	{
		parent:: pobierzImie();
		return $this->imie2;
	}
}
$klient1 = new klient();
$klient1->wypiszNazwisko('Król');
$klient1->wypiszImie('Marcin');

echo "Dane obiektu klasy klient <br/>";
echo $klient1->pobierzNazwisko()." ".$klient1->pobierzImie();
echo "<br/>";
?>
