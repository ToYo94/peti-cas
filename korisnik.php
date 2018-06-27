<?php

class osoba
{
	public $visina = 0;
	public $tezina = 0;
	public $ime = "";

	#potrebno je praviti nove varijable unutar funkcija jer se ne mogu koristiti preefinisane, i onda u pomoc $this povezujemo
	public function __construct($name, $weight, $height)
	{
		$this->ime = $name;
		$this->tezina = $weight;
		$this->visina = $height;
	}

	public function cao()
	{
		echo "Ja se zovem $this->ime, imam $this->tezina kilograma i visok sam $this->visina";
	}
}

$person = new osoba("Mladen", 72.5, 186.5);
$person->cao();

$person2 = new osoba("Milenko", 92.8, 180);
$person2->cao();

$person3 = new osoba("Bogdan", 51, 190.1);
$person3->cao();

$person4 = new osoba("Ivan", 110.1, 178.6);
$person4->cao();

$person5 = new osoba("Sale", 88.5, 182.3);
$person5->cao();

?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<table>
			<tr>
				<th>Ime</th>
				<th>Tezina</th>
				<th>Visina</th>
			</tr>
			<tr>
				<td><?php echo $person->ime; ?></td>
				<td><?php echo $person->tezina; ?></td>
				<td><?php echo $person->visina; ?></td>
			</tr>
			<tr>
				<td><?php echo $person2->ime; ?></td>
				<td><?php echo $person2->tezina; ?></td>
				<td><?php echo $person2->visina; ?></td>
			</tr>
			<tr>
				<td><?php echo $person3->ime; ?></td>
				<td><?php echo $person3->tezina; ?></td>
				<td><?php echo $person3->visina; ?></td>
			</tr>
			<tr>
				<td><?php echo $person4->ime; ?></td>
				<td><?php echo $person4->tezina; ?></td>
				<td><?php echo $person4->visina; ?></td>
			</tr>
			<tr>
				<td><?php echo $person5->ime; ?></td>
				<td><?php echo $person5->tezina; ?></td>
				<td><?php echo $person5->visina; ?></td>
			</tr>
		</table>
	</body>
</html>