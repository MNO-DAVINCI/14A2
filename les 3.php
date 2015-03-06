<?php
$i = 0; // noemen we een statement

while ($i <= 10) { // while is een keyword.

	$i++;

	if ($i == 5) {
		continue; // continue is een keyword, stopt 1 iteratie van loop.
		break; // break is ook een keyword, stopt de hele uitvoering van een loop.
	}
	echo $i;

}

function optellen($i, $y) {
	$uitkomst = $i + $y;
	return $uitkomst;
}

$bla = optellen(5, 5);
echo $bla;

?>