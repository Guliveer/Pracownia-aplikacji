<?php
class osoba
{
	public $nazwisko, $imie;
	function __construct()
	{
		$this->nazwisko = "Anonim";
		$this->imie = "Gall";
	}
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
$postac1 = new osoba();
$postac2 = new osoba();

$postac2->wypiszNazwisko('Nowak');
$postac2->wypiszImie('Adam');

echo $postac1->pobierzNazwisko()." ".$postac1->pobierzImie();
echo "<br/>";
echo $postac2->pobierzNazwisko()." ".$postac2->pobierzImie();
?>
