<?php
class osoba
{
	private $nazwisko, $imie;
	public function wpiszNazwisko($arg1)
	{
		$this->nazwisko = $arg1;
	}
	public function pobierzNazwisko()
	{
		return $this->nazwisko;
	}
	public function wpiszImie($arg2)
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

// Błąd:
//$postac1->nazwisko = 'Kowalski';
//$postac1->imie = 'Jan';

$postac2->wpiszNazwisko('Nowak');
$postac2->wpiszImie('Adam');

// Błąd:
// echo $postac1->nazwisko." ".$postac1->imie;

echo "<br/>";
echo $postac2->pobierzNazwisko()." ".$postac2->pobierzImie();
?>
