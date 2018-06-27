<?php
class korisnik
{
	#vidljivost
	public $ime = "Mladen";
	private $godine = 24;

	public function cao()
	{
		echo "Cao ja sam ".$this->ime;
		#this koristimo kada zelimo da pozovemo neku funkciju ili varijablu iz te funkcije.
	}
}
#objetki
$user = new korisnik();
echo $user->ime;
$user->cao();

#VEZBA

class matematika
{
	public function sabiranje($vrednost1, $vrednost2)
	{
		echo $vrednost1 + $vrednost2;
	}
}
$rezultat = new matematika();
echo $rezultat->sabiranje(2, 3);
?>